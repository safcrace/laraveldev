<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Carbon\Carbon;
//use Request;

class ArticlesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth', ['except' => 'index']);
	}

	public function index()
	{
		$articles = Article::latest('published_at')->published()->get();

		return view('articles.index', compact('articles'));
	}

	public function show(Article $article)
	{
		//dd($article->published_at);
		return view('articles.show', compact('article'));
	}

	public function create()
	{		
		return View('articles.create');
	}

	public function store(ArticleRequest $request)
	{		
		Auth::user()->articles()->create($request->all());
		session()->flash('flash_message', 'Your article has been created!');
		session()->flash('flash_message_important', true);
		return redirect('articles')->with([
			'flash_message' => 'Your article has been created!',
			'flash_message_important' => true
		]);
	}

	public function edit(Article $article)
	{		
		return View('articles.edit', compact('article'));
	}

	public function update(Article $article, ArticleRequest $request)
	{	
		$article->update($request->all());
		return redirect('articles');
	}

}
