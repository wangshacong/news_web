<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use App\Fenlei;
use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //首页
    public function index()
    {
        //
        $fenlei = Fenlei::all();
        // $fenlei_id = Fenlei::all('id');     
        // $zuixin = Article::whereIn('fenlei_id',$fenlei_id)->paginate(10);
        // dump($zuixin);
        // return view('news.index', compact('fenlei','zuixin'));
        $last_article = Article::orderBy('id','desc')->paginate(1);
        // dump($last_article);
        return view('news.index', compact('fenlei','last_article'));
    }
    
    //列表页
    public function fenlei($id)
    {
        $fenlei = Fenlei::all();
        $article = Article::orderBy('id','desc')->where('fenlei_id','=',$id)->paginate(7);
        return view('news.list',compact('article','fenlei','id'));
    }

    //内容页
    public function content($id)
    {
        $fenlei = Fenlei::all();
        $content = Article::where('id','=',$id)->get();
        return view('news.article', compact('content','fenlei'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
