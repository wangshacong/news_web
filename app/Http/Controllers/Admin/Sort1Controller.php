<?php

namespace App\Http\Controllers\Admin;

use App\Fenlei;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class Sort1Controller extends Controller
{
    //
    //第一个网站的文章列表页
    public function newsindex()
    {
        $article = Article::orderBy('id','desc')->paginate(8);
        $fenlei = Fenlei::all();
        return view('cxjy_admin.article.index',compact('article','fenlei'));
    }

    //文章添加页
    public function newscreate()
    {
        $fenlei = Fenlei::all();
        return view('cxjy_admin.article.create', compact('fenlei'));
    }
    
    //文章添加
    public function newsshore(Request $request)
    {
        
        $zuozhe = \Session::get('username');
        $content = new Article;
        $content->title = $request->title;
        $content->zuozhe = $zuozhe;
        $content->fenlei_id = $request->fenlei;
        $content->content = $request->content;
        $content->dianji = rand(100,1000);
        if($request->hasFile('pic')){
            $content->news_pic = '/'.$request->pic->store('news_pic/'.date('Ymd'));
        }
        if ($content->save()) {
            return redirect('/cxjy_admin/news1')->with('success','发布成功');
        } else {
            return back()->with('error','发布失败');
        }
    }

    //文章修改页
    public function newsedit($id)
    {
        $article = Article::findOrfail($id);

        // print_r($article);
        // die;

        $fenlei = Fenlei::all();
        return view('cxjy_admin.article.edit', compact('article','fenlei'));
    }

    //文章修改
    public function newsupdate(Request $request,$id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->fenlei_id = $request->fenlei;
        if ($request->hasFile('pic')) {
            $article->news_pic = '/'.$request->pic->store('news_pic/'.date('Ymd'));
        }
        $article->content = $request->content;

        if($article->save()) {
            return redirect('/cxjy_admin/news1')->with('success','修改成功');
        } else {
            return back()->with('error','修改失败');
        }


    }

    //文章删除
    public function destroy($id)
    {
        //
        $article = Article::find($id);
        if($article->delete())
        {
            return back()->with('success','删除成功');
        } else {
            return back()->with('error','删除失败');
        }
    
    }

    //分类列表
    public function sortindex()
    {
        $fenlei = Fenlei::orderBy('id','desc')->paginate(8);
        return view('cxjy_admin.sort.index',compact('fenlei'));
    }

    //分类添加页
    public function sortCreate()
    {
       return view('cxjy_admin.sort.create');
    }

    //分类添加
    public function sortshore(Request $request)
    { 
       $fenlei = new Fenlei;
       $fenlei->fenlei_name = $request->fenlei_name;
       if ($fenlei->save()) {
           return redirect('/cxjy_admin/sort1')->with('success','添加成功');
       } else {
           return back()->with('error','添加失败');
       }
    }

    //分类修改页
    public function sortedit($id)
    { 
       $fenlei = Fenlei::findOrFail($id);
      return view('cxjy_admin.sort.edit',compact('fenlei'));
    }

    //分类修改
    public function sortupdate(Request $request,$id)
    { 
       $fenlei = Fenlei::findOrFail($id);
       $fenlei->fenlei_name = $request->fenlei_name;
       if($fenlei->save()) {
           return redirect('/cxjy_admin/sort1')->with('success','修改成功');
       } else {
           return back()->with('error','修改失败');
       }
    }

    //删除分类
    public function sortdestroy($id)
    {
       $fenlei = Fenlei::findOrfail($id);
       if ($fenlei->delete()) {
        if ($article = Article::where('fenlei_id', $id)->delete()) {
            return back()->with('success', '删除成功');
            }else{
                return back()->with('success', '删除失败');
            }
        } else {
           return back()->with('error','删除失败');
       }
    }
}
