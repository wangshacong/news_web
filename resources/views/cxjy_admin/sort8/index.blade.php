<!-- 顶部开始 -->
@include('cxjy_admin.head')
<!-- 顶部结束 -->
<!-- 中部开始 -->
<div class="wrapper">
    <!-- 左侧主体开始 -->
    @include('cxjy_admin.admin_menu')
    <!-- 左侧主体结束 -->
    <!-- 右侧主体开始 -->
    <?php
//dump($article);
?>
    <div class="page-content">
        <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <!--<form class="layui-form xbs" action="">
						<div class="layui-form-pane" style="text-align: center;">
							<div class="layui-form-item" style="display: inline-block;">
								<label class="layui-form-label xbs768">日期范围</label>
								<div class="layui-input-inline xbs768">
									<input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
								</div>
								<div class="layui-input-inline xbs768">
									<input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
								</div>
								<div class="layui-input-inline">
									<input type="text" name="username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
								</div>
								<div class="layui-input-inline" style="width:80px">
									<button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
								</div>
							</div>
						</div>
					</form>-->
            <xblock>
                <!--<button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button>-->
                <a href="/cxjy_admin/sort8/create"><button class="layui-btn"><i class="layui-icon">&#xe608;</i>添加</button></a>
                <!--<span class="x-right" style="line-height:40px">共有数据：88 条</span>-->
            </xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <!--<th>
									<input type="checkbox" name="" value="">
								</th>-->
                        <th>
                            ID
                        </th>
                        <th>
                            分类名称
                        </th>
                        <th>
                            创建日期
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fenlei as $v)
                    <tr>
                        <!--<td><input type="checkbox" value="1" name=""></td>-->
                        <td>{{$v['id']}}</td>
                        <td>{{$v['fenlei_name']}}</td>
                        <td>{{$v['created_at']}}</td>
                        {{-- <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>
                        </td> --}}
                        <td class="td-manage">
                            <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;"
                                title="停用">
                                <i class="layui-icon">&#xe601;</i>
                            </a>
                            <!--<a title="编辑" href="javascript:;" onclick="member_edit('编辑','member-edit.html','4','','510')" class="ml-5" style="text-decoration:none">
										<i class="layui-icon">&#xe642;</i>
									</a>
									<a style="text-decoration:none" onclick="member_password('修改密码','member-password.html','10001','600','400')" href="javascript:;" title="修改密码">
										<i class="layui-icon">&#xe631;</i>
									</a>-->
                            <a title="删除" href="" onclick="member_del(this,'1')" style="text-decoration:none">
                                <i class="layui-icon">&#xe640;</i>
                            </a>
                            <script language="JavaScript">
                                function delete_confirm(e) {
                                    if (event.srcElement.outerText == "删除") {
                                        event.returnValue = confirm("删除是不可恢复的，你确认要删除吗？");
                                    }
                                }
                                document.onclick = delete_confirm;
                            </script>
                            <a title="编辑" href="/cxjy_admin/sort8/{{$v['id']}}/edit">
                                <i class="layui-icon">&#xe642;</i>
                            </a>
                            <a href="/cxjy_admin/sort8/{{$v['id']}}/destroy" onClick="delete_confirm">删除</a>

                        </td>
                    </tr>
                    @endforeach


                </tbody>

            </table>
            {{$fenlei->appends(request()->all())->links()}}
            <!-- 右侧内容框架，更改从这里结束 -->
        </div>
    </div>
    <!-- 右侧主体结束 -->
</div>
<!-- 中部结束 -->
<!-- 底部开始 -->
<div class="footer">
    <div class="copyright">Copyright ©2017 x-admin v2.3 All Rights Reserved. 本后台系统由X前端框架提供前端技术支持</div>
</div>
<!-- 底部结束 -->
<!-- 背景切换开始 -->
<div class="bg-changer">
    <div class="swiper-container changer-list">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img class="item" src="./images/a.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/b.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/c.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/d.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/e.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/f.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/g.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/h.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/i.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/j.jpg" alt=""></div>
            <div class="swiper-slide"><img class="item" src="./images/k.jpg" alt=""></div>
            <div class="swiper-slide"><span class="reset">初始化</span></div>
        </div>
    </div>
    <div class="bg-out"></div>
    <!--<div id="changer-set"><i class="iconfont">&#xe696;</i></div>-->
</div>
<!-- 背景切换结束 -->
<!-- 页面动态效果 -->
<script>
    layui.use(['laydate'], function () {
        laydate = layui.laydate; //日期插件

        //以上模块根据需要引入
        //
        var start = {
            min: laydate.now(),
            max: '2099-06-16 23:59:59',
            istoday: false,
            choose: function (datas) {
                end.min = datas; //开始日选好后，重置结束日的最小日期
                end.start = datas //将结束日的初始值设定为开始日
            }
        };
        var end = {
            min: laydate.now(),
            max: '2099-06-16 23:59:59',
            istoday: false,
            choose: function (datas) {
                start.max = datas; //结束日选好后，重置开始日的最大日期
            }
        };
        document.getElementById('LAY_demorange_s').onclick = function () {
            start.elem = this;
            laydate(start);
        }
        document.getElementById('LAY_demorange_e').onclick = function () {
            end.elem = this
            laydate(end);
        }
    });

    //批量删除提交
    function delAll() {
        layer.confirm('确认要删除吗？', function (index) {
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {
                icon: 1
            });
        });
    }
    /*用户-添加*/
    function member_add(title, url, w, h) {
        x_admin_show(title, url, w, h);
    }
    /*用户-查看*/
    function member_show(title, url, id, w, h) {
        x_admin_show(title, url, w, h);
    }

    /*用户-停用*/
    function member_stop(obj, id) {
        layer.confirm('确认要停用吗？', function (index) {
            //发异步把用户状态进行更改
            $(obj).parents("tr").find(".td-manage").prepend(
                '<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="layui-icon">&#xe62f;</i></a>'
            );
            $(obj).parents("tr").find(".td-status").html(
                '<span class="layui-btn layui-btn-disabled layui-btn-mini">已停用</span>');
            $(obj).remove();
            layer.msg('已停用!', {
                icon: 5,
                time: 1000
            });
        });
    }

    /*用户-启用*/
    function member_start(obj, id) {
        layer.confirm('确认要启用吗？', function (index) {
            //发异步把用户状态进行更改
            $(obj).parents("tr").find(".td-manage").prepend(
                '<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="layui-icon">&#xe601;</i></a>'
            );
            $(obj).parents("tr").find(".td-status").html(
                '<span class="layui-btn layui-btn-normal layui-btn-mini">已启用</span>');
            $(obj).remove();
            layer.msg('已启用!', {
                icon: 6,
                time: 1000
            });
        });
    }
    // 用户-编辑
    function member_edit(title, url, id, w, h) {
        x_admin_show(title, url, w, h);
    }
    /*密码-修改*/
    function member_password(title, url, id, w, h) {
        x_admin_show(title, url, w, h);
    }
    /*用户-删除*/
    function member_del(obj, id) {
        layer.confirm('确认要删除吗？', function (index) {
            //发异步删除数据
            $(obj).parents("tr").remove();
            layer.msg('已删除!', {
                icon: 1,
                time: 1000
            });
        });
    }
</script>
<script>
    //百度统计可去掉
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?b393d153aeb26b46e9431fabaf0f6190";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>
</body>

</html>