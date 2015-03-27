<?php namespace App\Http\Controllers;

use App\Articles;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\Request;


class ArticleController extends Controller {
    
    public function __construct()
    {
        $this->middleware('guest');
    }
    

	public function index(){

        $articles = Articles::all();

        return view('pages.index', compact('articles'));
    }

    public function show($id){

        $article = Articles::findOrfail($id);

        return view('pages.show', compact('article'));

    }

    public function create(){

        return view('pages.create');
    }

    public function store(ArticleRequest $request){

        //use the following two when to use facade

       // $article = Request::all();

       // Articles::create($article);

        //by using code below dont forget to remove import request on top
        

        Articles::create($request->all());
		
		flash()->overlay('New Article has been created', 'Create Article');

        return redirect('article');

    }
    public function edit($id){

        $article = Articles::findOrfail($id);

        return view('pages.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){

        $article = Articles::findOrfail($id);

        $article->update($request->all());

        return redirect('article');
    }

}
