<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class ConfigController
 * @package App\Http\Controllers
 */
class ConfigController extends Controller
{
    /**
     * ConfigController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = \DB::table('config')->get();

        return view('admin.config.index', ['data' => $data]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $config = collect($request->input());

        $config = $config->except(['_token']);

        $config->each(function ($item, $key) {
            \DB::table('config')
                ->where('id',$key)
                ->update(['value' => $item]);
        });
       return back();
    }
}

