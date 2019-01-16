<!doctype html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>创想金玉新闻网站后台</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href="/css/font.css">
		<link rel="stylesheet" href="/css/xadmin.css">
		<link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
		<script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
		<script src="/lib/layui/layui.js" charset="utf-8"></script>
		<script type="text/javascript" src="/js/xadmin.js"></script>
		<style>
			.int{ height: 30px; text-align: left; width: 600px; }
			label{ width: 200px; margin-left: 20px; }
			.high{ color: red; }
			.msg{ font-size: 13px; }
			.onError{ color: red; }
			.onSuccess{ color: green; }
			.inputfile {
				{{-- opacity: 0; --}}
				{{-- position:absolute;clip:rect(0 0 0 0); --}}
				z-index: -11111;  width: 0px;  height: 1px;
				margin:0 auto;
			}
			.filepath {
				{{-- opacity: 0; --}}
				{{-- position:absolute;clip:rect(0 0 0 0); --}}
				z-index: -11111;  width: 0px;  height: 1px;
				margin:0 auto;
			}
		</style>
	</head>

	<body>
		<!-- 顶部开始 -->
		<div class="container">
			<div class="logo">
				<a href="./index.html">创想金玉新闻网站后台</a>
			</div>
			<div class="open-nav"><i class="iconfont">&#xe699;</i></div>
			<ul class="layui-nav right" lay-filter="">
				<li class="layui-nav-item">
					<a href="javascript:;">admin</a>
					<dl class="layui-nav-child">
						<!-- 二级菜单 -->
						<dd>
							<a href="">个人信息</a>
						</dd>
						<dd>
							<a href="">切换帐号</a>
						</dd>
						<dd>
							<a href="/cxjy_admin/logout">退出</a>
						</dd>
					</dl>
				</li>
				<li class="layui-nav-item">
					<a href="/">前台首页</a>
				</li>
			</ul>
		</div>