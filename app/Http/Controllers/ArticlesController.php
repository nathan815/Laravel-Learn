<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    public function __construct(\App\Article $article) 
    {
      $this->article = $article;
    }

    public function index() 
    {
      $articles = $this->article->latest()->published()->get();
      return view('articles.index', ['articles'=>$articles]);
    }

    public function show($id) 
    {
      $article = $this->article->findOrFail($id);
      $published = $article->published_at->format('F j, Y');
      return view('articles.show', ['article'=>$article, 'published' => $published]);
    }

    public function create() 
    {
      return view('articles.create');
    }

    public function store(ArticleRequest $request) 
    {
      $input = $request->all();
      $this->article->create($input);
      return redirect('articles');
    }

    public function delete($id) 
    {
      $article = $this->article->findOrFail($id);
      return view('articles.delete', ['article' => $article]);
    }

    public function destroy($id) 
    {
      $this->article->destroy($id);
      return redirect('articles');
    }

    public function edit($id) {
      $article = $this->article->findOrFail($id);
      return view('articles.edit', ['article' => $article]);
    }

    public function update($id, ArticleRequest $request) {
      $article = $this->article->findOrFail($id);
      $article->update($request->all());
      return redirect('articles/'.$id);
    }

}
