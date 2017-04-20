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

        $collabs = \DB::table('collab')
            ->select('name','firstname','fonction','img')
            ->get();

        return view('welcome', ['content' => $content, 'collabs' => $collabs]);
    }
}
