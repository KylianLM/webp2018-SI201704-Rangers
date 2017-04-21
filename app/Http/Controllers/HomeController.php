<?php

namespace App\Http\Controllers;

use App\Article;
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

        $articles = Article::where('visible', '=', 1)
            ->get();

        return view('welcome', ['content' => $content, 'collabs' => $collabs, 'articles' => $articles]);
    }
}
