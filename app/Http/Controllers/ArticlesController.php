<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Response;
use App\Article;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ArticleFormRequest;

class ArticlesController extends Controller
{
    public function index()
    {
    	// Cac logic trien khai lay du lieu
    	
    	$articles = Article::orderBy('id','desc')->paginate(5);
    	return view('articles.index', compact('articles'));
    }

    public function create()
    {
    	return view('articles.create');
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article); // Tuong tu compact
    }

    // Create new article
    public function store(ArticleFormRequest $request)
    {
        /* Xu ly logic input ben trong class
         * App\Http\Requests\ArticleFormRequest
         */

    	$title = $request->input('title');
        $content = $request->input('content');

        Article::create([
            'title'     => $title,
            'content'   => $content
            ]);
        return redirect()->route('article.index');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleFormRequest $request)
    {
        $article = Article::find($id);

        $article->update([
            'title'     => $request->input('title'),
            'content'   => $request->input('content')
            ]);

        return redirect()->route('article.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('article.index');
    }

    public function getjson($id = -1)
    {
        if($id == -1) {
            $articles = Article::all();
        }
        else {
            $articles = Article::find($id);
        }
        return Response()->json($articles);
    }
}
