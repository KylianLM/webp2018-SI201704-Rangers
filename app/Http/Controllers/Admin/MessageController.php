<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMessage;
use App\Message;
use Illuminate\Http\Request;

/**
 * Class MessageController
 * @package App\Http\Controllers\Admin
 */
class MessageController extends Controller
{

    /**
     * MessageController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth',['except' =>['store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       if ($request->get('label') === 'important') {
           $messages = Message::where('label', '=', 'important')->orderBy('created_at','desc')->get();
       } else {
           $messages = Message::orderBy('created_at','desc')->get();
       }
        return view('admin.message.index',['messages' => $messages]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessage  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessage $request)
    {

        if (Message::where('email',"=", $request->get('email'))->count() >= 3)
            return response()->json(['error' => 'Not authorized.'],403);

        if (Message::where('phone',"=", $request->get('phone'))->count() >= 3)
            return response()->json(['error' => 'Not authorized.'],403);

        Message::create($request->except('_token'));

        return response()->json([],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('admin.message.show',['message' => $message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Message::findOrFail($id)
            ->update($request->input());

        return back()->with('message_update','Message devenu important');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Message::findOrFail($id)->delete();

        return back()->with('message_delete', 'Message supprimé');
    }
}
