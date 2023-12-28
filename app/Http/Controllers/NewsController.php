<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @param News $news
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function __invoke(News $news)
    {
        $news = $news->latest('published_at')->get();

        return view('pages.news', compact('news'));
    }

    /**
     * @param News $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function show(News $news)
    {
        return view('pages.one_news', compact('news'));
    }
}
