<div class="top_dasda">	
	<div class="top_con">
			<div class="nav">
			<div class="logo_tw"><a href="/" target="_blank"><img src="/images/shsc.png"></a></div>
				<div class="go_index"><a href="/">首页<i></i></a></div>
				<div class="nav1">

					<ul>
						@foreach($fenlei as $v)
						<li><a href="/fenlei/{{$v['id']}}">{{$v['fenlei_name']}}</a></li>

						@endforeach
					</ul>

				</div>

			</div>
		</div>
</div>