<!doctype html>
<html lang="zh-CN">

<head>
	<meta charset="UTF-8" />
	<meta name="baidu_union_verify" content="e718eb0dd4320c884de414f6558fc60f">
	<title>上海实创新闻网</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="renderer" content="webkit" />
	<meta name="keywords" content="互联网消费,互联网金融,互联网+,移动互联网,电子商务,手机游戏,O2O,创业创新,投资融资,智能设备,智能手机,VR及AR,AI人工智能" />
	<meta name="description" content="中国创投网专注于互联网消费领域，每日专业提供互联网产品、智能设备及互联网服务等方面的最新资讯，呈现为网站、微博、微信、APP等全媒体新形态，是国内领先的互联网消费互动媒体。" />
	<link href="/images/index.ico" rel="shortcut icon" type="images/x-icon" />
	<link href="/css/index_style.css" type="text/css" rel="stylesheet" rev="stylesheet" media="screen" />
	<link type="text/css" href="/css/jquery-ui-1.8.6.custom.css" rel="stylesheet" meddia="screen" />
	<link href="/css/base.css" type="text/css" rel="stylesheet" rev="stylesheet" media="screen" />
	<script type="text/javascript" src="/js/jquery.js"></script>
	<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="css/iestyle.css"/>
<![endif]-->
	<!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="css/iestyle.css"/>
<![endif]-->

</head>

<body>
	<!--通用导航 start-->
	<div class="top">
		@include('gong.head')

		<!--通用导航 end-->
		<div class="logo">

			<div class="top_banner" style="text-align: center;">
				<!-- <a href="http://sj22222.com/"><img src="/images/广告条.gif" width="600" height="56" /></a> -->
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- 890*70 -->

				<script>
					(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
				<script src="/js/om.js"></script>
			</div>
		</div>
		<!--人物 start-->

		<!--人物 end-->
		<!--头条 start-->
		<div class="top_news">
			@foreach($last_article as $v)
			<h1><a href="/article/{{$v['id']}}" target="_blank">{{$v['title']}}</a></h1>
			<p style="overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{{preg_replace('/<.*?>/','',$v['content'])}}</p>
			@endforeach
		</div>
		<!--头条 end-->
		<div class="sydatonglan" style="text-align: center;">
			<!--  <script>
			(function() {
				var s = "_" + Math.random().toString(36).slice(2);
				document.write('<div id="' + s + '"></div>');
				(window.slotbydup=window.slotbydup || []).push({
					id: '5232092',
					container: s,
					size: '20,2',
					display: 'inlay-fix'
				});
			})();
			</script> -->
			<script src="/js/om.js"></script>
			<script type="text/javascript">
				var a = $(window.frames["iframe5232092_0"].document).find("body").html();
				if (a == "" || a == "undefined") {
					$('.sydatonglan').hide();
				}
			</script>
		</div>
		<!--一屏 start-->
		<div class="con_box eadas">

			<!--新闻 start-->
			@foreach($fenlei as $v)
			@if($v['id'] % 3 != 0)
			<div class="news">

				<h2 class="tit"><a href="/fenlei/{{$v['id']}}">{{$v['fenlei_name']}}</a><span class="more"><a href="fenlei/{{$v['id']}}">更多</a></span></h2>
				<?php 
				
					$article = \DB::Table('articles') -> where('fenlei_id',$v['id']) -> orderBy('created_at','desc') -> limit(10) -> get();

				?>
				<ul>
					@foreach($article as $val)
					<li><a href="/article/{{$val->id}}" title="{{$val->title}}" target="_blank">{{$val->title}}</a>
						<!-- class="mar_t" -->
					</li>@endforeach

				</ul>
			</div>
			@else
			<?php
			 $fenlei = \DB::Table('fenleis') ->where('id',$v['id'])->get();
			 $article = \DB::Table('articles') -> where('fenlei_id',$v['id']) ->where('news_pic','<>','') -> orderBy('id','desc') -> limit(2) -> get();
			 ?>
			@foreach($fenlei as $vel)
			<div class="products">
				<h2 class="tit"><a href="fenlei/{{$vel->id}}">{{$vel->fenlei_name}}</a><span class="more"><a href="fenlei/{{$vel->id}}">更多</a></span></h2>
				@foreach($article as $vrl)
				<div class="product_item"><a href="article/{{$vrl->id}}" target="_blank">
					@if($vrl->news_pic==null)
					<img src="/images/null.jpg" alt="低价出售410万旅客信息？12306回应：为第三方泄漏" title="{{$vrl->title}}">
					@else
						<img src="{{$vrl->news_pic}}" alt="低价出售410万旅客信息？12306回应：为第三方泄漏" title="{{$vrl->title}}">
					@endif
						<h3><span>{{$vrl->title}}</span></h3>
					</a>
				</div>
				@endforeach

			</div>
			@endforeach
			@endif
			@endforeach

			<!--新闻 end-->
			<!--新品 start-->

			<!--新品 end-->
			<!--选择、比拼 start-->
			<div class="con_r">
				<div class="select">

					<script>
						var w = $(".select_img").width();
						if (w < 150) {
							$("#c2").hide();
							$("#c1").show();
						} else {
							$("#c1").hide();
							$("#c2").show();
						}
					</script>
				</div>


				<script>
					var w = $(".product_item").width();
					var n = 1;
					for (n = 1; n <= 5; n++) {
						if (w < 380) {
							$("#n" + n + "1").hide();
							$("#n" + n + "2").show();
						} else {
							$("#n" + n + "2").hide();
							$("#n" + n + "1").show();
						}
					}
				</script>
			</div>
		</div>
		<!--选择、比拼 end-->
	</div>
	<!--一屏 end-->
	<div class="syerping" style="text-align: center;">
		<script>
			(function () {
				var s = "_" + Math.random().toString(36).slice(2);
				document.write('<div id="' + s + '"></div>');
				(window.slotbydup = window.slotbydup || []).push({
					id: '5242178',
					container: s,
					size: '20,2',
					display: 'inlay-fix'
				});
			})();
		</script>
		<script src="/js/om.js"></script>
		<script type="text/javascript">
			var a = $(window.frames["iframe5242178_0"].document).find("body").html();
			if (a == "" || a == "undefined") {
				$('.syerping').hide();
			}
		</script>
	</div>

	{{-- <div class="con_box">
		<!--移动互联 start-->
		<div class="mobile_web">
			<h2 class="tit2"><a href="http://www.xunjk.com/xinwen/gongsi/">公司</a><em></em><span class="more"><a href="http://www.xunjk.com/xinwen/gongsi/">更多</a></span></h2>
			<!--移动互联左侧  m01-->
			<div class="mobile_con">
				<div class="con_l">
					<div class="picture_text">
						<a href="http://www.xunjk.com/xinwen/gongsi/2018/1213/65844.html" target="_blank">
							<div class="picture">
								<img id="y01" src="http://www.people.com.cn/mediafile/pic/20181213/39/1913121445656779551.jpg" alt='流标宅地超千块 土地储备上升'
								 title='流标宅地超千块 土地储备上升' />
							</div>
							<h4>流标宅地超千块 土地储备上升</h4>
						</a>
					</div>
					<div class="picture_text">
						<a href="http://www.xunjk.com/xinwen/gongsi/2018/1213/65843.html" target="_blank">
							<div class="picture">
								<img id="y01" src="http://www.people.com.cn/mediafile/pic/20181213/53/9042941608366670093.jpg" alt='睡够6小时就发奖励！ 网友直呼：别人家的公司'
								 title='睡够6小时就发奖励！ 网友直呼：别人家的公司' />
							</div>
							<h4>睡够6小时就发奖励！ 网友直呼：别人家的公司</h4>
						</a>
					</div>


					<ul>
						<li><a href="http://www.xunjk.com/xinwen/gongsi/2018/1213/65843.html" target="_blank" title="睡够6小时就发奖励！ 网友直呼：别人家的公司">公司
								| 睡够6小时就发奖励！ 网友直呼：别人家的公司</a></li>

						<li><a href="http://www.xunjk.com/xinwen/gongsi/2018/1212/65731.html" target="_blank" title="年底资金面需求旺盛  市场利率将上行">公司
								| 年底资金面需求旺盛 市场利率将上行</a></li>

						<li><a href="http://www.xunjk.com/xinwen/gongsi/2018/1212/65729.html" target="_blank" title="信贷恢复高位运行 11月份新增1.25万亿元">公司
								| 信贷恢复高位运行 11月份新增1.25万亿元</a></li>

						<li><a href="http://www.xunjk.com/xinwen/gongsi/2018/1212/65727.html" target="_blank" title="企业新增贷款环比大涨 支持民企政策成效初显">公司
								| 企业新增贷款环比大涨 支持民企政策成效初显</a></li>




					</ul>

				</div>

				<div class="con_c">
					<div class="picture_text">
						<a href="http://www.xunjk.com/xinwen/keji/2018/1225/67253.html" target="_blank">
							<div class="picture">
								<img id="y21" src="http://paper.people.com.cn/rmrb/res/2018-12/25/12/rmrb2018122512p11_b.jpg" alt='今年我国科技取得一系列重大突破'
								 title='今年我国科技取得一系列重大突破' />

							</div>
							<h4>今年我国科技取得一系列重大突破</h4>
						</a>
					</div>
					<div class="picture_text">
						<a href="http://www.xunjk.com/xinwen/keji/2018/1225/67237.html" target="_blank">
							<div class="picture">
								<img id="y21" src="http://n5.cmsfile.pg0.cn/group5/M00/02/46/CgoODlwhdx-AGZ6AAAId9rMkoB4206.png" alt='中国科学家率先敲开第三代宫颈癌疫苗研制大门'
								 title='中国科学家率先敲开第三代宫颈癌疫苗研制大门' />

							</div>
							<h4>中国科学家率先敲开第三代宫颈癌疫苗研制大门</h4>
						</a>
					</div>


					<ul>

						<li><a href="http://www.xunjk.com/xinwen/keji/2018/1225/67253.html" target="_blank" title="今年我国科技取得一系列重大突破">科技 |
								今年我国科技取得一系列重大突破</a></li>

						<li><a href="http://www.xunjk.com/xinwen/keji/2018/1225/67252.html" target="_blank" title="新型抗甲型流感病毒复合物研发成功">科技 |
								新型抗甲型流感病毒复合物研发成功</a></li>

						<li><a href="http://www.xunjk.com/xinwen/keji/2018/1225/67246.html" target="_blank" title="江苏：科技基础设施成为创新强磁场">科技 |
								江苏：科技基础设施成为创新强磁场</a></li>

						<li><a href="http://www.xunjk.com/xinwen/keji/2018/1225/67245.html" target="_blank" title="科学家确认太阳系外存在新形式的“超级地球”">科技
								| 科学家确认太阳系外存在新形式的“超级地球”</a></li>


					</ul>
				</div>
			</div>



		</div>
		<!--移动互联 end-->
		<div class="con_r">
			<!--独家 start-->
			<div class="exclusive">
				<h2 class="tit2"><a href="http://www.xunjk.com/xinwen/yanjiu/">研究</a><em></em><span class="more"><a href="http://www.xunjk.com/xinwen/yanjiu/">更多</a></span></h2>
				<div class="exclusive_con">
					<ul>

						<li><a href="http://www.xunjk.com/xinwen/yanjiu/2018/1225/67187.html" target="_blank" title="叁叁运动会所又关门　到底有没经营上的问题?">叁叁运动会所又关门　到底有没经营上的问题</a></li>

						<li><a href="http://www.xunjk.com/xinwen/yanjiu/2018/1225/67185.html" target="_blank" title="红色预警管控下　郑州管城区一工地成堆物料不覆盖">红色预警管控下　郑州管城区一工地成堆物料</a></li>

						<li><a href="http://www.xunjk.com/xinwen/yanjiu/2018/1225/67184.html" target="_blank" title="重污染天气管控不力 汝州、漯河企业违法排污...">重污染天气管控不力
								汝州、漯河企业违法排</a></li>

						<li><a href="http://www.xunjk.com/xinwen/yanjiu/2018/1225/67183.html" target="_blank" title="浦发银行年末集中甩卖25套房产 已经不是今年第一次">浦发银行年末集中甩卖25套房产
								已经不是今</a></li>

						<li><a href="http://www.xunjk.com/xinwen/yanjiu/2018/1225/67179.html" target="_blank" title="加快解决中低收入群体住房困难 健全城镇住房...">加快解决中低收入群体住房困难
								健全城镇住</a></li>


					</ul>
				</div>
			</div>
			<!--独家 end-->
			<!--编译 start-->
			<div class="compile">
				<h2 class="tit2"><a href="http://www.xunjk.com/xinwen/dongcha/">洞察</a><em></em><span class="more"><a href="http://www.xunjk.com/xinwen/dongcha/">更多</a></span></h2>
				<div class="compile_con">
					<ul>

						<li><a href="http://www.xunjk.com/xinwen/dongcha/2018/1226/67358.html" target="_blank" title="中国版权产业行业增加值已突破6万亿">中国版权产业行业增加值已突破6万亿</a></li>

						<li><a href="http://www.xunjk.com/xinwen/dongcha/2018/1226/67347.html" target="_blank" title="改革发展40年 市场主体数量增长二百二十二倍">改革发展40年
								市场主体数量增长二百二十二倍</a></li>

						<li><a href="http://www.xunjk.com/xinwen/dongcha/2018/1226/67344.html" target="_blank" title="第100架“翼龙”系列无人机在成都通过全部验收">第100架&ldquo;翼龙&rdquo;系列无人机在成都通过全部</a></li>

						<li><a href="http://www.xunjk.com/xinwen/dongcha/2018/1226/67343.html" target="_blank" title="宁夏设立总规模30亿元支持民营经济发展">宁夏设立总规模30亿元支持民营经济发展</a></li>

						<li><a href="http://www.xunjk.com/xinwen/dongcha/2018/1226/67342.html" target="_blank" title="山西省累计建成77个电气化县">山西省累计建成77个电气化县</a></li>

					</ul>
				</div>
			</div>
			<!--编译 end-->
		</div>
	</div>

	<div class="con_box">
		<!--人工智能 start-->
		<div class="ai">
			<h2 class="tit2"><a href="http://www.xunjk.com/licai/">理财</a><em></em><span class="more"><a href="http://www.xunjk.com/licai/">更多</a></span></h2>
			<div class="ai_con">
				<div class="ai_img">

					<a href="http://www.xunjk.com/licai/2018/0611/44667.html" target="_blank">
						<img id="a11" src="https://timgsa.baidu.com/timg?image&amp;quality=80&amp;size=b9999_10000&amp;sec=1528693586083&amp;di"
						 height="253" alt="&ldquo;独角兽&rdquo;基金今开卖 部分公司取消网上直" title="&ldquo;独角兽&rdquo;基金今开卖 部分公司取消网上直">
						<img id="a12" src="https://timgsa.baidu.com/timg?image&amp;quality=80&amp;size=b9999_10000&amp;sec=1528693586083&amp;di"
						 height="253" alt="&ldquo;独角兽&rdquo;基金今开卖 部分公司取消网上直" title="&ldquo;独角兽&rdquo;基金今开卖 部分公司取消网上直" style="display: none;">
						<h3><span>&ldquo;独角兽&rdquo;基金今开卖 部分公司取消网上直</span></h3>
					</a>

					<script>
						var w = $(".ai_img").width();
						if (w < 410) {
							$("#a11").hide();
							$("#a12").show();
						} else {
							$("#a12").hide();
							$("#a11").show();
						}
					</script>
				</div>
				<div class="con_c">
					<div class="ai_img_s">

						<a href="http://www.xunjk.com/licai/2018/0605/44168.html" target="_blank">
							<div class="ai_image">
								<img id="a21" src="http://i.ce.cn/finance/rolling/201806/05/W020180605257067594857.jpg" height="253" alt="银行净值型理财产品暴增七八倍 却有理财经理"
								 懒得推"" title="银行净值型理财产品暴增七八倍 却有理财经理" 懒得推"">
								<img id="a22" src="http://i.ce.cn/finance/rolling/201806/05/W020180605257067594857.jpg" height="253" alt="银行净值型理财产品暴增七八倍 却有理财经理"
								 懒得推"" title="银行净值型理财产品暴增七八倍 却有理财经理" 懒得推"" style="display: none;">
								<script>
									var w = $(".ai_image").width();
									if (w < 180) {
										$("#a21").hide();
										$("#a22").show();
									} else {
										$("#a22").hide();
										$("#a21").show();
									}
								</script>
							</div>
							<h4>银行净值型理财产品暴增七八倍 却有理财经理"懒得推"</h4>
						</a>


						<a href="http://www.xunjk.com/licai/2018/0313/34944.html" target="_blank">
							<div class="ai_image">
								<img id="a21" src="http://www.people.com.cn/mediafile/pic/20180313/0/13073258945094612224.jpg" height="253" alt="网友脑洞大开造剧《淑女的品格》&nbsp;期待中生代大女主"
								 title="网友脑洞大开造剧《淑女的品格》&nbsp;期待中生代大女主">
								<img id="a22" src="http://www.people.com.cn/mediafile/pic/20180313/0/13073258945094612224.jpg" height="253" alt="网友脑洞大开造剧《淑女的品格》&nbsp;期待中生代大女主"
								 title="网友脑洞大开造剧《淑女的品格》&nbsp;期待中生代大女主" style="display: none;">
								<script>
									var w = $(".ai_image").width();
									if (w < 180) {
										$("#a21").hide();
										$("#a22").show();
									} else {
										$("#a22").hide();
										$("#a21").show();
									}
								</script>
							</div>
							<h4>网友脑洞大开造剧《淑女的品格》&nbsp;期待中生代大女主</h4>
						</a>



					</div>
					<ul>

						<li><a href="http://www.xunjk.com/licai/2018/0622/45759.html" target="_blank" title="大额存单成理财“新标配”">大额存单成理财“新标配”</a></li>

						<li><a href="http://www.xunjk.com/licai/2018/0622/45732.html" target="_blank" title="失落的避险之王：金价跌至6个月新低">失落的避险之王：金价跌至6个月新低</a></li>


					</ul>
				</div>
			</div>
		</div>
		<!--人工智能 end-->
		<div class="con_r">
			<!--云计算 start-->
			<div class="cloud">
				<h2 class="tit2"><a href="http://www.xunjk.com/shangye/">商业</a><em></em><span class="more"><a href="http://www.xunjk.com/shangye/">更多</a></span></h2>
				<div class="cloud_con">
					<ul>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67357.html" target="_blank" alt="盘点黄金交易平台，谁最终能C位出道？" title="盘点黄金交易平台，谁最终能C位出道？">盘点黄金交易平台，谁最终能C位出道？</a></li>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67356.html" target="_blank" alt="白癜风专家冯素莲：冬季白癜风该如何治疗？" title="白癜风专家冯素莲：冬季白癜风该如何治疗？">白癜风专家冯素莲：冬季白癜风该如何治疗？</a></li>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67353.html" target="_blank" alt="范立老师作为特邀贵宾受邀做客《周易名家访谈》栏目"
							 title="范立老师作为特邀贵宾受邀做客《周易名家访谈》栏目">范立老师作为特邀贵宾受邀做客《周易名家访谈》栏目</a></li>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67348.html" target="_blank" alt="长沙长江医院靠谱吗 造福不孕患者,关爱生殖健康"
							 title="长沙长江医院靠谱吗 造福不孕患者,关爱生殖健康">长沙长江医院靠谱吗 造福不孕患者,关爱生殖健康</a></li>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67345.html" target="_blank" alt="不再忌讳“性”福话题，白云山伟哥“金戈”走向国际化！"
							 title="不再忌讳“性”福话题，白云山伟哥“金戈”走向国际化！">不再忌讳“性”福话题，白云山伟哥“金戈”走向国际化！</a></li>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67339.html" target="_blank" alt="红岭金服股票配资平台教你炒股仓位如何控制" title="红岭金服股票配资平台教你炒股仓位如何控制">红岭金服股票配资平台教你炒股仓位如何控制</a></li>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67329.html" target="_blank" alt="成都健丽整形医院帮我去除眼袋后，化妆再也不膈应这“水袋子”！"
							 title="成都健丽整形医院帮我去除眼袋后，化妆再也不膈应这“水袋子”！">成都健丽整形医院帮我去除眼袋后，化妆再也不膈应这“水袋子”！</a></li>

						<li><a href="http://www.xunjk.com/shangye/2018/1226/67326.html" target="_blank" alt="治失眠天香睡宝好用么，效果怎么样？天香睡宝黑科技是真的么？"
							 title="治失眠天香睡宝好用么，效果怎么样？天香睡宝黑科技是真的么？">治失眠天香睡宝好用么，效果怎么样？天香睡宝黑科技是真的么？</a></li>



					</ul>
				</div>
			</div>
			<!--云计算 end-->
		</div>
	</div>

	<div class="con_box">
		<!--网络 start-->
		<div class="block_box internet">
			<h2 class="tit3"><a href="http://www.xunjk.com/xinwen/touzi/">投资</a><span class="more"><a href="http://www.xunjk.com/xinwen/touzi/">更多</a></span></h2>
			<ul>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1220/66688.html" target="_blank" title="鱼龙混杂的健身行业：教练还是销售？">鱼龙混杂的健身行业：教练还是销售？</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1220/66686.html" target="_blank" title="房地产调控政策保持从严态势 部分银行“顶风作案”">房地产调控政策保持从严态势
						部分银行“顶风作案”</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1220/66679.html" target="_blank" title="20日人民币对美元汇率下调67个基点">20日人民币对美元汇率下调67个基点</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1219/66575.html" target="_blank" title="工行等四银行加入优先股发行队伍">工行等四银行加入优先股发行队伍</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1219/66571.html" target="_blank" title="新版汽车产业投资管理规定已经正式发布">新版汽车产业投资管理规定已经正式发布</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1219/66570.html" target="_blank" title="全国城镇新增就业1100万人目标任务已超额完成">全国城镇新增就业1100万人目标任务已超额完成</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1219/66569.html" target="_blank" title="多元化融资助推企业快速发展">多元化融资助推企业快速发展</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1218/66413.html" target="_blank" title="受惠于港珠澳大桥及高铁开通 今年访港人次刷...">受惠于港珠澳大桥及高铁开通
						今年访港人次刷新最</a></li>

				<li><a href="http://www.xunjk.com/xinwen/touzi/2018/1218/66410.html" target="_blank" title="5G商用迎来倒计时 三大运营商5G组网策略日渐清晰">5G商用迎来倒计时
						三大运营商5G组网策略日渐清晰</a></li>

				<li><a href="http://www.xunjk.com/xinwen/rongzi/2018/1218/66408.html" target="_blank" title="三部门下发通知继续免征 内地人买卖香港基金个税">三部门下发通知继续免征
						内地人买卖香港基金个税</a></li>

			</ul>
		</div>
		<!--网络 end-->
		<!--业界 start-->
		<div class="block_box industry">
			<h2 class="tit3"><a href="http://www.xunjk.com/xiangmu/">项目</a><span class="more"><a href="http://www.xunjk.com/xiangmu/">更多</a></span></h2>
			<ul>

				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34863.html" target="_blank" title="章子怡：自在演戏、自主选择，不活在别人的世界里">章子怡：自在演戏、自主选择，不活在别人的世界里</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34862.html" target="_blank" title="上港1-0蔚山现代&nbsp;连续三年提前小组出线">上港1-0蔚山现代&nbsp;连续三年提前小组出线</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34861.html" target="_blank" title="周星驰《美人鱼2》开机&nbsp;能否凭借新片搬回一局？">周星驰《美人鱼2》开机&nbsp;能否凭借新片搬回一局？</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34860.html" target="_blank" title="春日植树忙">春日植树忙</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34858.html" target="_blank" title="研究人员共分析：北极春来早">研究人员共分析：北极春来早</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34857.html" target="_blank" title="恒大精准扶贫投入一百一十亿">恒大精准扶贫投入一百一十亿</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34856.html" target="_blank" title="核电已成中国新名片">核电已成中国新名片</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34855.html" target="_blank" title="擦亮农业绿色发展的“金字招牌”">擦亮农业绿色发展的“金字招牌”</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34854.html" target="_blank" title="欧洲将试水纯电动长途客运&nbsp;客车系中国造">欧洲将试水纯电动长途客运&nbsp;客车系中国造</a></li>


				<li><a href="http://www.xunjk.com/xiangmu/2018/0314/34853.html" target="_blank" title="美钢铝关税举动引发全球贸易战忧虑">美钢铝关税举动引发全球贸易战忧虑</a></li>


			</ul>
		</div>
		<!--业界 end-->
		<!--排行 start-->
		<div class="ranking">
			<h2 class="tit2">经济<em></em></h2>
			<div class="ranking_con">
				<ul>

					<li><a href="http://www.xunjk.com/jingji/2018/1126/63557.html" target="_blank" title="2018&ldquo;盛世健康杯&rdquo;河南省第三届金牌健康讲师...">2018&ldquo;盛世健康杯&rdquo;河南省第三届金牌健康讲师大赛</a></li>

					<li><a href="http://www.xunjk.com/jingji/2018/1114/62389.html" target="_blank" title="呕心沥血兴产业 扶贫扶志树标杆&mdash;&mdash;记河南省...">呕心沥血兴产业
							扶贫扶志树标杆&mdash;&mdash;记河南省审计</a></li>

					<li><a href="http://www.xunjk.com/jingji/2018/1113/62179.html" target="_blank" title="驻豫全国人大代表围绕文化自信开展专题代表小...">驻豫全国人大代表围绕文化自信开展专题代表小组活</a></li>

					<li><a href="http://www.xunjk.com/jingji/2018/0917/55727.html" target="_blank" title="营养餐变素面 要求公布配餐食谱数量价格 严禁克扣">营养餐变素面
							要求公布配餐食谱数量价格 严禁克扣</a></li>

					<li><a href="http://www.xunjk.com/jingji/2018/0828/53194.html" target="_blank" title="网约车技术造假黑色产业链：中介称交钱就可通...">网约车技术造假黑色产业链：中介称交钱就可通过审</a></li>


					<li><a href="http://economics.xunjk.com/economics/2018/0702/46768.html" target="_blank" title="7月起，一大波进口商品降关税了！能省多少钱？">7月起，一大波进口商品降关税了！能省多少钱？</a></li>
					<li><a href="http://economics.xunjk.com/economics/2018/0702/46767.html" target="_blank" title="山东潍坊高新：完善五项机制提高投资审计工作质效">山东潍坊高新：完善五项机制提高投资审计工作质效</a></li>
					<li><a href="http://economics.xunjk.com/economics/2018/0702/46766.html" target="_blank" title="福建：自然资源资产审计关键技术研究科研项目...">福建：自然资源资产审计关键技术研究科研项目获批</a></li>
					<li><a href="http://economics.xunjk.com/economics/2018/0702/46765.html" target="_blank" title="湖北武汉：优化社保审计成果致力“四个”服务">湖北武汉：优化社保审计成果致力“四个”服务</a></li>
					<li><a href="http://economics.xunjk.com/economics/2018/0606/44360.html" target="_blank" title="严重污染环境犯罪 重庆法院细化相关量刑标准">严重污染环境犯罪
							重庆法院细化相关量刑标准</a></li>

				</ul>
			</div>
		</div>
		<!--排行 end-->
	</div>

	<div class="con_box">
		<!--电信 start-->
		<div class="block_box telecom">
			<h2 class="tit3"><a href="http://www.xunjk.com/zhineng/">智能</a><span class="more"><a href="http://www.xunjk.com/zhineng/">更多</a></span></h2>
			<ul>

				<li><a href="http://www.xunjk.com/zhineng/2018/0314/34785.html" target="_blank" title="《狂暴巨兽》定档同步北美上映 被赞是&quot;金刚+哥...">《狂暴巨兽》定档同步北美上映
						被赞是&quot;金刚+哥斯</a></li>


				<li><a href="http://www.xunjk.com/zhineng/2018/0314/34783.html" target="_blank" title="网购有此“神器”不再怕不良商家">网购有此“神器”不再怕不良商家</a></li>


				<li><a href="http://www.xunjk.com/zhineng/2018/0314/34782.html" target="_blank" title="智能养老设备进家&nbsp;老人子女安心">智能养老设备进家&nbsp;老人子女安心</a></li>


				<li><a href="http://www.xunjk.com/zhineng/2018/0314/34779.html" target="_blank" title="我国气象综合观测能力达国际先进水平">我国气象综合观测能力达国际先进水平</a></li>


				<li><a href="http://www.xunjk.com/zhineng/2018/0314/34778.html" target="_blank" title="共享单车&nbsp;&nbsp;转入免押金赛道">共享单车&nbsp;&nbsp;转入免押金赛道</a></li>



				<li><a href="http://intelligence.xunjk.com/intelligence/2018/0606/44358.html" target="_blank" title="“代言”欧洲保守派？美驻德大使犯忌挨批">“代言”欧洲保守派？美驻德大使犯忌挨批</a></li>

				<li><a href="http://intelligence.xunjk.com/intelligence/2018/0606/44356.html" target="_blank" title="王俊凯：如何当一名实力睫毛健将">王俊凯：如何当一名实力睫毛健将</a></li>

				<li><a href="http://intelligence.xunjk.com/intelligence/2018/0606/44357.html" target="_blank" title="南方日报：虚假广告为何猖狂">南方日报：虚假广告为何猖狂</a></li>

				<li><a href="http://intelligence.xunjk.com/intelligence/2018/0606/44334.html" target="_blank" title="“租一族”崛起？花费两三千也过得像月入三五万">“租一族”崛起？花费两三千也过得像月入三五万</a></li>

				<li><a href="http://intelligence.xunjk.com/intelligence/2018/0606/44332.html" target="_blank" title="多档卫视歌唱类节目收视呈疲态 音乐综艺怎么...">多档卫视歌唱类节目收视呈疲态
						音乐综艺怎么唱到</a></li>


			</ul>
		</div>
		<!--电信 end-->
		<!--财经 start-->
		<div class="block_box finance">
			<h2 class="tit3"><a href="http://www.xunjk.com/baoxian/">保险</a><span class="more"><a href="http://www.xunjk.com/baoxian/">更多</a></span></h2>
			<ul>

				<li><a href="http://www.xunjk.com/baoxian/2018/0622/45782.html" target="_blank" title="陈东升详解险企控股医疗机构：&ldquo;保险+医疗&rdquo;闭...">陈东升详解险企控股医疗机构：&ldquo;保险+医疗&rdquo;闭环</a></li>


				<li><a href="http://www.xunjk.com/baoxian/2018/0622/45780.html" target="_blank" title="四大上市险企前5个月寿险业务增长11.15%">四大上市险企前5个月寿险业务增长11.15%</a></li>


				<li><a href="http://www.xunjk.com/baoxian/2018/0622/45779.html" target="_blank" title="百万医疗险 别被续保问题“一棍子打死”">百万医疗险
						别被续保问题“一棍子打死”</a></li>


				<li><a href="http://www.xunjk.com/baoxian/2018/0622/45778.html" target="_blank" title="偿付能力承压 险企发债扩股“补血”忙">偿付能力承压
						险企发债扩股“补血”忙</a></li>


				<li><a href="http://www.xunjk.com/baoxian/2018/0622/45774.html" target="_blank" title="泰康保险收购拜博口腔51%股权">泰康保险收购拜博口腔51%股权</a></li>



				<li><a href="http://insurance.xunjk.com/insurance/2018/0606/44326.html" target="_blank" title="光明日报：破解“租房买学位”须靠市域教育均衡">光明日报：破解“租房买学位”须靠市域教育均衡</a></li>

				<li><a href="http://insurance.xunjk.com/insurance/2018/0606/44327.html" target="_blank" title="图片报道">图片报道</a></li>

				<li><a href="http://insurance.xunjk.com/insurance/2018/0606/44322.html" target="_blank" title="《中餐厅2》公布阵容 王俊凯等将展现厨艺">《中餐厅2》公布阵容
						王俊凯等将展现厨艺</a></li>

				<li><a href="http://insurance.xunjk.com/insurance/2018/0606/44323.html" target="_blank" title="报告显示：2017年全球可再生能源发电增长显著">报告显示：2017年全球可再生能源发电增长显著</a></li>

				<li><a href="http://insurance.xunjk.com/insurance/2018/0606/44324.html" target="_blank" title="北京30.4亿挂牌顺义、房山宅地 均限房价竞地价">北京30.4亿挂牌顺义、房山宅地
						均限房价竞地价</a></li>


			</ul>
		</div>
		<!--财经 end-->
		<div class="block_box finance">
			<h2 class="tit3"><a href="http://www.xunjk.com/fuwu/">服务</a><span class="more"><a href="http://www.xunjk.com/fuwu/">更多</a></span></h2>
			<ul>

				<li><a href="http://www.xunjk.com/fuwu/2018/0326/36372.html" target="_blank" title="旭杨足球携手五道财富 推动中国青少年足球运动发展">旭杨足球携手五道财富
						推动中国青少年足球运动发展</a></li>


				<li><a href="http://www.xunjk.com/fuwu/2018/0314/34902.html" target="_blank" title="巴黎银行公开赛：大威赢第29次姐妹“内战”&nbsp;">巴黎银行公开赛：大威赢第29次姐妹“内战”&nbsp;</a></li>


				<li><a href="http://www.xunjk.com/fuwu/2018/0314/34901.html" target="_blank" title="国象候选人赛“八进一”火花四射">国象候选人赛“八进一”火花四射</a></li>


				<li><a href="http://www.xunjk.com/fuwu/2018/0314/34900.html" target="_blank" title="疆粤对决前瞻&nbsp;这三个砝码决定了谁更有优势！">疆粤对决前瞻&nbsp;这三个砝码决定了谁更有优势！</a></li>


				<li><a href="http://www.xunjk.com/fuwu/2018/0314/34899.html" target="_blank" title="围棋世界排名柯洁缩小差距">围棋世界排名柯洁缩小差距</a></li>



				<li><a href="http://service.xunjk.com/service/2018/0606/44353.html" target="_blank" title="南京河西4楼盘昨公开选房 775套房源全被买走">南京河西4楼盘昨公开选房
						775套房源全被买走</a></li>

				<li><a href="http://service.xunjk.com/service/2018/0606/44354.html" target="_blank" title="中央环保督察“回头看”陆续开展 督察组进驻苏粤滇">中央环保督察“回头看”陆续开展
						督察组进驻苏粤滇</a></li>

				<li><a href="http://service.xunjk.com/service/2018/0606/44355.html" target="_blank" title="张一山:13岁演刘星,24岁演江北">张一山:13岁演刘星,24岁演江北</a></li>

				<li><a href="http://service.xunjk.com/service/2018/0606/44320.html" target="_blank" title="张艺兴新剧《黄金瞳》  聚焦“鉴宝”">张艺兴新剧《黄金瞳》
						聚焦“鉴宝”</a></li>

				<li><a href="http://service.xunjk.com/service/2018/0606/44319.html" target="_blank" title="换季不买新衣服，一条丝巾就玩出新花样">换季不买新衣服，一条丝巾就玩出新花样</a></li>


			</ul>
		</div>
	</div>

	<div class="con_box">
		<!--评论 start-->
		<div class="block_box comment">
			<h2 class="tit3"><a href="http://www.xunjk.com/jihua/">计划</a><span class="more"><a href="http://www.xunjk.com/jihua/">更多</a></span></h2>
			<ul>

				<li><a href="http://www.xunjk.com/jihua/2018/0314/34816.html" target="_blank" title="要保持出线主动权&nbsp;恒大客战济州联需全身而退">要保持出线主动权&nbsp;恒大客战济州联需全身而退</a></li>


				<li><a href="http://www.xunjk.com/jihua/2018/0314/34814.html" target="_blank" title="广州日报：让全科医生&nbsp;&nbsp;把健康带给千家万户">广州日报：让全科医生&nbsp;&nbsp;把健康带给千家万户</a></li>


				<li><a href="http://www.xunjk.com/jihua/2018/0314/34813.html" target="_blank" title="冰箱成终端&nbsp;家电能互联">冰箱成终端&nbsp;家电能互联</a></li>


				<li><a href="http://www.xunjk.com/jihua/2018/0314/34810.html" target="_blank" title="杭州亚运村迎来新年第一抹“绿”">杭州亚运村迎来新年第一抹“绿”</a></li>


				<li><a href="http://www.xunjk.com/jihua/2018/0314/34809.html" target="_blank" title="5G时代群雄逐鹿&nbsp;谁更胜一筹？">5G时代群雄逐鹿&nbsp;谁更胜一筹？</a></li>



				<li><a href="http://plan.xunjk.com/plan/2018/0606/44350.html" target="_blank" title="北京五千余处“开墙打洞”优先修补">北京五千余处“开墙打洞”优先修补</a></li>

				<li><a href="http://plan.xunjk.com/plan/2018/0606/44351.html" target="_blank" title="夏季常吃这些水果 既能美肤又防晒">夏季常吃这些水果
						既能美肤又防晒</a></li>

				<li><a href="http://plan.xunjk.com/plan/2018/0606/44349.html" target="_blank" title="举报环境违法行为 上海最高可奖5万元">举报环境违法行为
						上海最高可奖5万元</a></li>

				<li><a href="http://plan.xunjk.com/plan/2018/0606/44347.html" target="_blank" title="中国电商就业强劲升温 打造4000余万工作机会">中国电商就业强劲升温
						打造4000余万工作机会</a></li>

				<li><a href="http://plan.xunjk.com/plan/2018/0606/44310.html" target="_blank" title="传统出版业亟须数字化转型升级">传统出版业亟须数字化转型升级</a></li>


			</ul>
		</div>
		<!--评论 end-->
		<!--数据 start-->
		<div class="block_box datum">
			<h2 class="tit3"><a href="http://www.xunjk.com/qukuailian/">区块链</a><span class="more"><a href="http://www.xunjk.com/qukuailian/">更多</a></span></h2>
			<ul>

				<li><a href="http://www.xunjk.com/qukuailian/2018/0607/44406.html" target="_blank" title="何宝宏：全球区块链十大发展趋势">何宝宏：全球区块链十大发展趋势</a></li>

				<li><a href="http://www.xunjk.com/qukuailian/2018/0607/44405.html" target="_blank" title="锐角云发布区块链电脑第二代 加速全球资源节点部署">锐角云发布区块链电脑第二代
						加速全球资源节点部署</a></li>

				<li><a href="http://www.xunjk.com/qukuailian/2018/0607/44404.html" target="_blank" title="央视《对话》：中国要打造属于自己的公链">央视《对话》：中国要打造属于自己的公链</a></li>

				<li><a href="http://www.xunjk.com/qukuailian/2018/0606/44240.html" target="_blank" title="规模上限500亿主投CDR 首批&quot;独角兽&quot;基金最快6...">规模上限500亿主投CDR
						首批&quot;独角兽&quot;基金最快6月6</a></li>

				<li><a href="http://www.xunjk.com/qukuailian/2018/0606/44238.html" target="_blank" title="区块链社区EOS曝高危漏洞">区块链社区EOS曝高危漏洞</a></li>


				<li><a href="http://block.xunjk.com/block/2018/1010/58616.html" target="_blank" title="助力区域经济提档升级">助力区域经济提档升级</a></li>
				<li><a href="http://block.xunjk.com/block/2018/0914/55268.html" target="_blank" title="共建执法合作机制 中国东盟携手保护企业合法权益">共建执法合作机制
						中国东盟携手保护企业合法权益</a></li>
				<li><a href="http://block.xunjk.com/block/2018/0606/44346.html" target="_blank" title="跳水世界杯男双三米板中国惊险逆转 周继红：...">跳水世界杯男双三米板中国惊险逆转
						周继红：还要</a></li>
				<li><a href="http://block.xunjk.com/block/2018/0606/44345.html" target="_blank" title="吴亦凡沉寂数月后新单曲成绩非凡 用音乐传播...">吴亦凡沉寂数月后新单曲成绩非凡
						用音乐传播中国</a></li>
				<li><a href="http://block.xunjk.com/block/2018/0606/44342.html" target="_blank" title="世界排球联赛江门站：中国女排苦战5局憾负巴西">世界排球联赛江门站：中国女排苦战5局憾负巴西</a></li>

			</ul>
		</div>
		<!--数据 end-->
		<div class="con_r">
			<!--手机游戏 start-->
			<div class="mobile_game">
				<h2 class="tit2">
					<a href="http://chuangye.xunjk.com/">创业</a>
					<em></em><span class="more"><a href="http://chuangye.xunjk.com/">更多</a></span>
				</h2>
				<div class="game_con">

					<div class="picture_text">
						<a href="http://chuangye.xunjk.com/chuangye/2018/0620/45451.html" target="_blank">
							<div class="picture">
								<img id="sm31" src="http://img2.cx368.com/2018/0620/20180620012606735.jpg" alt="肺癌患者需注意，泰瑞沙假冒品需警惕" title="肺癌患者需注意，泰瑞沙假冒品需警惕">

							</div>
							<h4>肺癌患者需注意，泰瑞沙假冒品需警惕</h4>
						</a>
					</div>

					<div class="picture_text">
						<a href="http://chuangye.xunjk.com/chuangye/2018/0608/44579.html" target="_blank">
							<div class="picture">
								<img id="sm31" src="http://www.fromgeek.com/uploadfile/2018/0608/20180608314663.png" alt="ICO破发、矿场转型 谁能熬到数字货币的春天?"
								 title="ICO破发、矿场转型 谁能熬到数字货币的春天?">

							</div>
							<h4>ICO破发、矿场转型 谁能熬到数字货币的春天?</h4>
						</a>
					</div>

					<div class="picture_text">
						<a href="http://chuangye.xunjk.com/chuangye/2018/0608/44577.html" target="_blank">
							<div class="picture">
								<img id="sm31" src="http://www.fromgeek.com/uploadfile/2018/0608/20180608301656.png" alt="中兴案落定：将支付10亿美元罚款 更换董事会等高层"
								 title="中兴案落定：将支付10亿美元罚款 更换董事会等高层">

							</div>
							<h4>中兴案落定：将支付10亿美元罚款 更换董事</h4>
						</a>
					</div>


				</div>
				<script>
					var w = $(".picture").width();
					for (n = 0; n <= 10; n++) {
						if (w < 150) {
							$("#y" + n + "1").hide();
							$("#y" + n + "2").show();
							$("#sm" + n + "1").hide();
							$("#sm" + n + "2").show();
						} else {
							$("#sm" + n + "2").hide();
							$("#sm" + n + "1").show();
						}
					}
				</script>
			</div>
			<!--手机游戏 end-->
		</div>

	</div> --}}
	<!--底部 start-->

	<!--底部 start-->
	@include('gong.footer')
	<!--底部 end-->
	<script type="text/javascript" src="/js/tj.js"></script>
</body>

</html>