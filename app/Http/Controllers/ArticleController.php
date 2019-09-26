<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

use Image;

use Auth;

class ArticleController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth', ['except' => ['index','show']]); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at','desc')->paginate(5);
        return view('articles',['articles'=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articlesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $this->validate($request, [
            "*" => 'required',
        ]);
        
        if(!empty($request->file('image')))
        {
            $image = $request->file('image');
            $filename = str_replace(' ','-',$request->input('title')) . '.jpg';
             // . $image->getClientOriginalExtension()
            $location = public_path("article_images\\".$filename);
            Image::make($image)->resize(770,525)->save($location);

            $article = new Article($request->all());
            $article->image = $filename;
            $article->user_id = Auth::id();
            $article->save();
        }else{
            $article = new Article($request->all());
            $article->image = 'default.jpg';
            $article->user_id = Auth::id();
            $article->save();
        }
        return back()->with('message','Article added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $last = Article::orderBy('created_at', 'desc')->take(5)->get();
        return view('article',['id'=>$article,'last'=>$last]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articleEdit',['article'=>$article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "*" => 'required',
        ]);
        $article = Article::findOrFail($id);
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->updated_at = $request->input('updated_at');
        $article->save();
        return back()->with('message','Article edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::destroy($id);
        return back()->with('message','Article deleted!');
    }
}
