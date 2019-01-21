<!doctype html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8" />
    @foreach($content as $v)
    <meta name="baidu_union_verify" content="e718eb0dd4320c884de414f6558fc60f" />
    <title>{{$v['title']}}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="互联网消费,互联网金融,互联网+,移动互联网,电子商务,手机游戏,O2O,创业创新,投资融资,智能设备,智能手机,VR及AR,AI人工智能">
    <meta name="description" content="首届中国国际进口博览会上，智能机器人正在演示自动点焊。 翁奇羽摄(人民图片)最近，北京一家新开业的智能餐厅成了网红。在这家餐厅，不仅...">
    <meta name="description" content="首届中国国际进口博览会上，智能机器人正在演示自动点焊。 翁奇羽摄(人民图片)最近，北京一家新开业的智能餐厅成了网红。在这家餐厅，不仅..." />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="能擦玻璃能炒菜还能说会道 机器人做餐厅主角 - 融资 - 中国创投网- 领先的互联网消费互动媒体" />

    <meta http-equiv="Cache-Control" content="no-transform" />
    <link href="/images/favicon.ico" rel="shortcut icon" type="images/x-icon" />
    <link href="/css/article_style.css" type="text/css" rel="stylesheet" rev="stylesheet" media="screen" />
    <link href="/css/base_4.css" type="text/css" rel="stylesheet" rev="stylesheet" media="screen" />
    @endforeach
    <script type="text/javascript" src="/js/basejq312.js"></script>


    <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="css/iestyle_8.css"/>
<![endif]-->
    <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/iestyle_8.css"/>
<![endif]-->
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?335192a0356f2e75ce13fe1c6ad86b73";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>

<body>
        <script>
                (function(){
                    var bp = document.createElement('script');
                    var curProtocol = window.location.protocol.split(':')[0];
                    if (curProtocol === 'https') {
                        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                    }
                    else {
                        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                    }
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(bp, s);
                })();
                </script>
    <!--通用导航 start-->
    <div class="top">
        @include('gong.head')
        <!--通用导航 end-->
        <!-- logo及大通栏 -->

        <!--面包屑 start-->
        <div class="breadnav">
            @foreach($content as $v)
            <?php
                $fenlei_name = \DB::Table('fenleis')->where('id',$v['fenlei_id'])->get();
                //var_dump($fenlei_name);
                ?>
            @foreach($fenlei_name as $val)
            <a href="/" class="logo_tw_s" title="TechWeb首页">首页</a>
            <a href="/fenlei/{{$v->fenlei_id}}">{{$val->fenlei_name}}</a> 正文
            @endforeach

            @endforeach
        </div>
        <!--面包屑 end-->

        <div class="content">
            <!--主体内容 start-->

            <div class="main_c">
                @foreach($content as $v)
                <h1>{{$v['title']}}</h1>
                <div class="article_info">
                    <div class="infos">
                        <span class="time">{{$v['created_at']}}</span>
                        {{-- <span class="from">来源: <a href="#" target="_blank">人民日报海外版 </a></span> --}}
                        <span class="author">来源:{{$v['zuozhe']}}</span>
                    </div>
                    <div class="size_share" style="display:flex;-webkit-box-align: center;-ms-flex-align: center;align-items: center;"><span
                            class="fontsize"><a href="javascript:fontSize(20)" onclick="document.getElementById('content').className = 'style1';"
                                class="bigfont"></a><a href="javascript:fontSize(16)" onclick="document.getElementById('content').className = 'style2';"
                                class="smallfont"></a></span>
                        <div class="partake">
                            <div class="partake_btn">
                                <!-- Baidu Button BEGIN -->
                                <div class="bdsharebuttonbox">
                                    <a href="#" class="share_sina" data-cmd="tsina" title="分享到新浪微博"></a>
                                    <a href="#" class="share_weixin" data-cmd="weixin" title="分享到微信"></a>
                                </div>
                                <!-- Baidu Button END -->
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content">
                    <!---文章开始-->
                    <p align="center"><img align="" alt="" border="0" src="{{$v['news_pic']}}" width="550" /></p>

                    <?php
                        echo "<p>{$v['content']}</p>";
                    ?>
                    <!---文章end-->
                </div>


                <div class="relative_news" style="margin-top:35px;">
                    <h2 class="tit2">您可能也感兴趣:</h2>
                    <ul>

                        <?php
                            $zuixin = \DB::Table('articles')->orderBy('id','desc')->where('fenlei_id',$v->fenlei_id)->limit(10)->get();
                            
                        ?>
                        @foreach($zuixin as $val)
                        <li><a href="/article/{{$val->id}}" target="_blank">{{$val->title}}</a></li>
                        @endforeach

                    </ul>
                </div>
                <!---您可能感兴趣end-->
                @endforeach
                <div class="partake" style="margin-bottom:3px">
                    <div class="partake_btn">


                        <!-- Baidu Button END -->
                    </div>
                </div>
                <script src="/js/loader.js" widget="shareqq" charset="utf-8"></script>



                <!-- end-->
                <div class="article_product">



                </div>
                <!---官方微博微信start-->
                <div class="weibo_weixin">

                </div>

                <div style="margin-top: 5px">


                    <script src="/js/c.js" type="text/javascript"></script>
                </div>

                <!---今日热点start-->
                <?php
                    $redian = \DB::Table('articles')->orderBy('news_pic','desc')->limit(3)->get();
                ?>
                <div class="hotpot" style="margin-top:0px;">
                    <h2 class="tit">今日热点</h2>
                    <div class="hotpot_con">
                        @foreach($redian as $v)
                        <div class="hotpot_list"><a href="/article/{{$v->id}}" target="_blank"><img src="{{$v->news_pic}}"
                                    alt="" />
                                <h4>{{$v->title}}</h4>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!---今日热点end-->
            </div>
            <!--主体内容 end-->
            <!--右侧区块 start-->
            @include('gong.right')
            <!--右侧区块 end-->
        </div>
        <!--底部 start-->
        <div class="web_bottom">
            <!--版权 start-->
            <!--底部 start-->
            @include('gong.footer')

            <!--版权 end-->
        </div>
        <!--底部 end-->
        <script language="javascript">
            function fontSize(size) {
                document.getElementById('content').style.fontSize = size + 'px'
            }
        </script>
        <script language="javascript">
            $(".more_news").click(function () {
                var pagenew = $("input:last").val();
                if (!pagenew) {
                    pagenew = 2;
                }
                if (pagenew == 10) {
                    $(".more_news").css('display', 'none');
                }
                $.ajax({
                    async: false,
                    type: "GET",
                    url: "http://www.techweb.com.cn/ajaxnews/pageroll/" + pagenew,
                    dataType: 'jsonp',
                    success: function (data) {
                        if (data) {
                            $(".more_news").before(data);
                        }
                    }
                })
            });
        </script>
        <!-- 百度统计 -->
        <script>
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?731b1f35c925c5f9156c5d1509dca1d8";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>

        <!-- 底部javascript导入 -->



        <!--liuaifeng 2014-08-01-->

</body>

</html>