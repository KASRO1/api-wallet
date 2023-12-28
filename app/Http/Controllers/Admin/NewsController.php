<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function index(News $news)
    {
        $news = $news->latest('published_at')->paginate(50);

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'published_at' => ['required', 'date'],
            'image' => ['required', 'image'],
        ]);

        $data['image_url'] = $request->file('image')->store('public/images/news');
        $data['image_url'] = Str::replaceFirst('public/', 'storage/', $data['image_url']);

        unset($data['image']);

        News::create($data);

        return redirect()->route('admin.news.index')->with('success', true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param News $news
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, News $news)
    {
        $data = $this->validate($request, [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'published_at' => ['required', 'date'],
            'image' => ['nullable', 'image'],
        ]);

        if($request->hasFile('image')) {
            $data['image_url'] = $request->file('image')->store('public/images/news');
            $data['image_url'] = Str::replaceFirst('public/', 'storage/', $data['image_url']);
        }

        unset($data['image']);

        $news->update($data);

        return back()->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return void
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        $news->delete();

        return back()->with('success', true);
    }
}
