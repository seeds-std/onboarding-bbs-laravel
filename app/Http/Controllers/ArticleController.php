<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('index', compact('articles'));
    }

    public function post(StorePostRequest $request)
    {
        $post = $request->all();

        return redirect()->route('post_confirm', $post);
    }

    public function postConfirm(Request $request)
    {
        $post = $request->all();

        return view('post_confirm', compact('post'));
    }

    public function store(StorePostRequest $request)
    {
        $article = new Article();
        $article->name = $request->name;
        $article->content = $request->content;
        $article->save();

        return redirect()->route('post_complete');
    }

    public function postComplete()
    {
        return view('post_complete');
    }

    public function edit(Article $article)
    {
        return view('edit', compact('article'));
    }

    public function update(UpdatePostRequest $request, Article $article)
    {
        $article->name = $request->name;
        $article->content = $request->content;
        $article->save();

        return redirect()->route('edit_complete');
    }

    public function editComplete()
    {
        return view('edit_complete');
    }

    public function deleteConfirm(Article $article)
    {
        return view('delete_confirm', compact('article'));
    }

    public function delete(Article $article)
    {
        $article->delete();

        return redirect()->route('delete_complete');
    }

    public function deleteComplete()
    {
        return view('delete_complete');
    }
}
