<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use Carbon\Carbon;
use Request;

class ArticlesController extends Controller {

	public function index()
	{
		$articles = Article::latest('published_at')->published()->get();

		return view('articles.index', compact('articles'));
	}

	public function show($id)
	{		
		$article = Article::findOrFail($id);

		dd($article->published_at);
		return view('articles.show', compact('article'));
	}

	public function create()
	{
		return View('articles.create');
	}

	public function store()
	{
		Article::create(Request::all());
		return redirect('articles');
	}

}
