<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Fenlei;
use App\Article;
use App\Fenlei2;
use App\Fenlei3;
use App\Fenlei4;
use App\Fenlei5;
use App\Fenlei6;
use App\Fenlei7;
use App\Fenlei8;
use App\Fenlei9;
use App\Article2;
use App\Article3;
use App\Article4;
use App\Article5;
use App\Article6;
use App\Article7;
use App\Article8;
use App\Article9;
use App\Fenlei10;
use App\Article10;
use App\Mysql2Fenlei;
use Illuminate\Http\Request;
use Faker\Provider\lv_LV\Color;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		 $article = Article::orderBy('id','desc')->paginate(8);
        $fenlei = Fenlei::all();
        $sessioninfo=\Session::all();
        return view('cxjy_admin.article.index',compact('article','fenlei'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
     //用户列表页
     public function userindex()
     {
        $user = User::orderBy('id','desc')->paginate(4);
        return view('cxjy_admin.user.index', compact('user'));
     }

     //用户添加页
     public function usercreate()
     {
         return view('cxjy_admin.user.create');
     }

     //添加用户
     public function usershore(Request $request)
     {
        $user = new User;
        $user->user_name = $request->username;
        $user->passwd = Hash::make($request -> passwd);
        if ($user -> save()) {
            return redirect('/cxjy_admin/user')->with('success','添加成功');
        } else {
            return back()->with('error','添加失败'); 
        }
     }

     //用户修改页面
     public function userupdate($id)
     {
         $user= User::findOrFail($id);
         return view('cxjy_admin.user.edit',compact('user'));
     }

     //用户提交修改
     public function useredit(Request $request,$id)
     {
         $user = User::findOrFail($id);
         $user -> user_name = $request -> username;
         $user -> passwd = Hash::make($request -> passwd);
         if ($user -> save()) {
            return redirect('/cxjy_admin/user')->with('success','修改成功');
         } else {
             return back()->with('error','修改失败');
         }
         return view('cxjy_admin.user.edit',compact('user'));
     }

     //用户删除
     public function userdestroy($id)
     {
        $user = User::findOrFail($id);
        if ($user->delete()) {
            return back()->with('success','删除成功');
        } else {
            return back()->with('error','删除失败');
        }
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
    
    //后台登录
    public function login()
    {
        return view('cxjy_admin.login');
    }

    //登录验证
    public function dologin(Request $request)
    {
        $user = User::where('user_name',$request->username)->first();
        if(!$user){
            return back()->with('error','用户名不存在');
        }else if(Hash::check($request->password, $user->passwd)) {
            session(['username' => $user->user_name, 'id' => $user->id]);
            session(['username'=>$user->user_name, 'id'=>$user->id]);
            return redirect('/cxjy_admin')->with('success','登录成功');
        }else {
            return back()->with('error','用户名或密码不正确');
        }
        
    }
    //后台退出登录
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/cxjy_admin/login');
    }
    
    //全站新闻发布页
    public function articlecreate()
    {
        $fenlei = Fenlei::all();
        return view('cxjy_admin.articlecreate',compact('fenlei'));
    }

    //全站新闻发布
    public function articleshore(Request $request)
    {
        //dump($request);
        $web = $request->like;
        if (in_array(1,$web)) {
            $zuozhe = \Session::get('username');
            $content = new Article;
            $content->title = $request->title;
            $content->zuozhe = $zuozhe;
            $fenlei = Fenlei::where('fenlei_name','公司')->first();
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei::where('fenlei_name',$fenlei_name)->first();
            $content->fenlei_id = $fenlei->id;
            $content->content = $request->content;
            $content->dianji = rand(100,1000);
            if($request->hasFile('pic')){
                $content->news_pic = '/'.$request->pic->store('news1_pic/'.date('Ymd'));
            }
            $content->save();
        }
        if(in_array(2,$web)){
            $zuozhe = \Session::get('username');
            $content2 = new Article2;
            $content2->title = $request->title;
            $content2->zuozhe = $zuozhe;
            $fenlei = Fenlei2::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->id;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content2->fenlei_id = $fenlei->id;
            $content2->content = $request->content;
            $content2->dianji = rand(100,1000);
            if($request->hasFile('pic')){
                $content2->news_pic = '/'.$request->pic->store('news2_pic/'.date('Ymd'));
            }
            $content2->save();
        }
        if (in_array(3, $web)) {
            $zuozhe = \Session::get('username');
            $content3 = new Article3;
            $content3->title = $request->title;
            $content3->zuozhe = $zuozhe;
            $fenlei = Fenlei3::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content3->fenlei_id = $fenlei->id;
            $content3->content = $request->content;
            $content3->create_time = date('Y-m-d',time());
            $content3->dianji = rand(100, 1000);
            if ($request->hasFile('pic')) {
                $content3->news_pic = '/'.$request->pic->store('news3_pic/'.date('Ymd'));
            }
            $content3->save();
        }
        if (in_array(4, $web)) {
            $zuozhe = \Session::get('username');
            $content4 = new Article4;
            $content4->title = $request->title;
            $content4->zuozhe = $zuozhe;
            $fenlei = Fenlei4::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content4->fenlei_id = $fenlei->id;
            $content4->content = $request->content;
            $content4->dianji = rand(100, 1000);
            $content4->create_time = date('Y-m-d',time());
            if ($request->hasFile('pic')) {
                $content4->news_pic = '/'.$request->pic->store('news4_pic/'.date('Ymd'));
            }
            $content4->save();        
        }
        if (in_array(5, $web)) {
            $zuozhe = \Session::get('username');
            $content5 = new Article5;
            $content5->title = $request->title;
            $content5->zuozhe = $zuozhe;
            $fenlei = Fenlei5::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content5->fenlei_id = $fenlei->id;
            $content5->content = $request->content;
            $content5->dianji = rand(100, 1000);
            if ($request->hasFile('pic')) {
                $content5->news_pic = '/'.$request->pic->store('news5_pic/'.date('Ymd'));
            }
            $content5->save();
        }
        if (in_array(6, $web)) {
            $zuozhe = \Session::get('username');
            $content6 = new Article6;
            $content6->title = $request->title;
            $content6->zuozhe = $zuozhe;
            $fenlei = Fenlei6::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content6->fenlei_id = $fenlei->id;
            $content6->content = $request->content;
            $content6->create_time = date('Y-m-d',time());
            $content6->dianji = rand(100, 1000);
            if ($request->hasFile('pic')) {
                $content6->news_pic = '/'.$request->pic->store('news6_pic/'.date('Ymd'));
            }
            $content6->save();
        }
        if (in_array(7, $web)) {
            $zuozhe = \Session::get('username');
            $content7 = new Article7;
            $content7->title = $request->title;
            $content7->zuozhe = $zuozhe;
            $fenlei = Fenlei7::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content7->fenlei_id = $fenlei->id;
            $content7->content = $request->content;
            $content7->create_time = date('Y-m-d',time());
            $content7->dianji = rand(100, 1000);
            if ($request->hasFile('pic')) {
                $content7->news_pic = '/'.$request->pic->store('news7_pic/'.date('Ymd'));
            }
            $content7->save();
        }
        if (in_array(8, $web)) {
            $zuozhe = \Session::get('username');
            $content8 = new Article8;
            $content8->title = $request->title;
            $content8->zuozhe = $zuozhe;
            $fenlei = Fenlei8::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content8->fenlei_id = $fenlei->id;
            $content8->content = $request->content;
            $content8->create_time = date('Y-m-d',time());
            $content8->dianji = rand(100, 1000);
            if ($request->hasFile('pic')) {
                $content8->news_pic = '/'.$request->pic->store('news8_pic/'.date('Ymd'));
            }
            $content8->save();
        }
        if (in_array(9, $web)) {
            $zuozhe = \Session::get('username');
            $content9 = new Article9;
            $content9->title = $request->title;
            $content9->zuozhe = $zuozhe;
            $fenlei = Fenlei9::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content9->fenlei_id = $fenlei->id;
            $content9->content = $request->content;
            $content9->create_time = date('Y-m-d',time());
            $content9->dianji = rand(100, 1000);
            if ($request->hasFile('pic')) {
                $content9->news_pic = '/'.$request->pic->store('news9_pic/'.date('Ymd'));
            }
            $content9->save();
        }
        if (in_array(10, $web)) {
            $zuozhe = \Session::get('username');
            $content10 = new Article10;
            $content10->title = $request->title;
            $content10->zuozhe = $zuozhe;
            $fenlei = Fenlei10::where('fenlei_name','公司')->first();
            dump($fenlei);
            // $fenlei_name = $fenlei->fenlei_name;
            // $fenlei = Fenlei2::where('fenlei_name',$fenlei_name)->first();
            $content10->fenlei_id = $fenlei->id;
            $content10->content = $request->content;
            $content10->dianji = rand(100, 1000);
            $content->create_time = date('Y-m-d',time());
            if ($request->hasFile('pic')) {
                $content10->news_pic = '/'.$request->pic->store('news10_pic/'.date('Ymd'));
            }
            if($content10->save()){
                return redirect('/cxjy_admin')->with('success','发布成功');
            } else {
                return back()->with('error','发布失败');
            }
        }
    }

     //全站添加分类页
     public function allsortcreate()
     {
        
        return view('cxjy_admin.sortcreate');
     }

     //全站添加分类
     public function allsortshore(Request $request)
     {
        
        if (in_array(1, $web)) {
            $sort = new Fenlei;
            $sort->fenlei_name = $request->fenlei_name;
            $sort->save();
        }
        if (in_array(2, $web)) {
            $sort = new Fenlei2;
            $sort->fenlei_name = $request->fenlei_name;
            $sort->save();
        }
        if(in_array(3,$web)){
            $sort = new Fenlei3;
            $sort->fenlei_name = $request->fenlei_name;
            if($sort->save()){
                return redirect('/cxjy_admin')->with('success','发布成功');
            } else {
                return back()->with('error','发布失败');
            }
        }
         
     }
}


