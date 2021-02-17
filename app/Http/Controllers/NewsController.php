<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news', ['news' => $news]);
    }

    public function create()
    {
        return view('create');
    }

    public function save(Request $request)
    {
        News::create($request->all());
        return redirect()->route('news.index');
    }
}
