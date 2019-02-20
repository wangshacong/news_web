<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<title>上海实创新闻网</title>
	<meta name="keywords" content="上海实创新闻,最新国际消息,最新实时新闻,融资,产业,研究,科技,金融,洞察,业界" />
	<meta name="description" content="上海实创新闻是包含海量资讯的新闻服务平台，真实反映每时每刻的新闻热点。" />
	<script type="text/javDESCript">

		var title="融资";

</script>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<meta name="Copyright" content="Techweb版权所有" />
	<meta http-equiv="Cache-Control" content="no-transform" />
	<link href="/images/favicon.ico" rel="shortcut icon" type="images/x-icon" />
	<link href="/css/list_style.css" type="text/css" rel="stylesheet" rev="stylesheet" media="screen" />
	<link href="/css/base.css" type="text/css" rel="stylesheet" rev="stylesheet" media="screen" />
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
	<!--通用导航开始-->
	<div class="top">
		@include('gong.head')
		<!--通用导航 end-->

		<!-- logo频道名及大通栏 -->


		<div class="channel_main">
			<div class="channel_l">
				<!--筛选 start-->
				<!--焦点图start-->



				<!--焦点图end-->
				<div id="wp" class="shaixuan">
					<ul>
						<li class="on"><a href="fenlei/{{$id}}">最新文章</a></li>
					</ul>
				</div>
				<!--筛选 end-->
				<!--列表 start-->
				<div class="list_con">
					@foreach($article as $v)
					<div class="picture_text">
						<div class="text">
							<a href="/article/{{$v['id']}}" target="_blank">
								<h4>{{$v['title']}}</h4>
							</a>
							<div class="time_tag">
								<span style="overflow:hidden; width:450px;display:block;">{{preg_replace('/<.*?>/','',$v['content'])}}</span><span><a
									 href="/article/{{$v['id']}}">【详情】</a></span>

							</div>
							<div class="time_tag">
								<span>{{$v['created_at']}}</span>

							</div>
						</div>


						<div class="picture">
							<a href="http://www.xunjk.com/xinwen/rongzi/2018/1221/66891.html" target="_blank">
							</a>
						</div>
					</div>
					@endforeach
					<div class="page">

						{{$article->appends(request()->all())->links()}}


					</div>
				</div>

			</div>
			<!--列表 end-->
			<!--右侧区块 start-->
			@include('gong.right')
		</div>
		<!--右侧区块 end-->
	</div>
	<!--底部 start-->
	<!--底部 start-->
	@include('gong.footer')