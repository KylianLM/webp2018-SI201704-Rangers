<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = \DB::table('content')
            ->select('slug', 'content')
            ->get();

        $content = $data->mapWithKeys(function ($item) {
            return [$item->slug => $item->content];
        });
        $content->all();

        return view('welcome', ['content' => $content]);
    }
}
