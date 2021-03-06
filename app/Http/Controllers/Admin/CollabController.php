<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CollabController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = \DB::table('content')
            ->select('content', 'slug', 'meta')
            ->where('meta->page', "=", "collaborateur")
            ->first();

        $collabs = \DB::table('collab')
            ->select('name', 'firstname', 'fonction', 'created_at', 'id')
            ->get();

        return view('admin.collab.index', ['content' => $content, 'collabs' => $collabs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('img');
        $input['img'] = time().'.'.$file->getClientOriginalExtension();

        $dist = public_path('profil');

        $img = Image::make($file->getRealPath());

        $img->resize(200, 200, function ($constraint) {
            $constraint->aspectRatio();
        })->save($dist.'/'.$input['img']);

        $request->merge(['img' => $input['img']]);
        $request->offsetUnset('_token');

        \DB::table('collab')
            ->insert($request->input());

        return redirect()->route('collaborateurs.index')->with('collaborateur_add', 'Collaborateur ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \DB::table('collab')
            ->where('id', '=', $id)
            ->delete();

        return back();
    }
}
