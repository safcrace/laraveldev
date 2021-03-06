<?php namespace App\Http\Controllers;

use App\Article;
use App\Tag;
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
		$tags = Tag::lists('name','id');
		return View('articles.create', compact('tags'));
	}

	public function store(ArticleRequest $request)
	{	
		$this->createArticle($request);

		flash()->overlay('Your Article has been successfully created', 'Good Job!');
		return redirect('articles');
	}

	public function edit(Article $article)
	{		
		$tags = Tag::lists('name','id');
		return View('articles.edit', compact('article','tags'));
	}

	public function update(Article $article, ArticleRequest $request)
	{	
		$article->update($request->all());
		$this->syncTags($article, $request->input('tag_list'));
		return redirect('articles');
	}

	private function syncTags(Article $article, array $tags)
	{
		$article->tags()->sync($tags);
	}

	private function createArticle(ArticleRequest $request)
	{
		$article = Auth::user()->articles()->create($request->all());

		$this->syncTags($article, $request->input('tag_list'));

		return $article;
	}

}
