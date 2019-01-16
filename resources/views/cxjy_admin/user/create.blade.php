<!-- 顶部开始 -->
@include('cxjy_admin.head')
<!-- 顶部结束 -->
<!-- 中部开始 -->
<div class="wrapper">
    <!-- 左侧主体开始 -->
    @include('cxjy_admin.admin_menu')
    <!-- 左侧主体结束 -->
    {{-- <script src="http://code.jquery.com/jquery-latest.js"></script> --}}
    {{-- <form method="post" action="#">
            <div class="int">
                <label for="name">姓名：</label>
                <input type="text" id="name" class="required" />
            </div>
            <div class="int">
                <label for="email">邮箱：</label>
                <input type="text" id="email" class="required" />
            </div>
            <div class="int">
                <label for="address">住址：</label>
                <input type="text" id="address" />
            </div>
            <div class="int">
                <input type="submit" value="提交" id="send" style="margin-left: 70px;" />
                <input type="reset" value="重置" id="res" />
            </div>
    </form> --}}
        <script>
            //为表单的必填文本框添加提示信息（选择form中的所有后代input元素）
            $("form :input.required").each(function () {
                //通过jquery api：$("HTML字符串") 创建jquery对象
                var $required = $("<strong class='high'>*</strong>");
                //添加到this对象的父级对象下
                $(this).parent().append($required);
            });
    
            //为表单元素添加失去焦点事件
            $("form :input").blur(function(){
                var $parent = $(this).parent();
                $parent.find(".msg").remove(); //删除以前的提醒元素（find()：查找匹配元素集中元素的所有匹配元素）
                //验证姓名
                if($(this).is("#name")){
                    var nameVal = $.trim(this.value); //原生js去空格方式：this.replace(/(^\s*)|(\s*$)/g, "")
                    var regName = /[~#^$@%&!*()<>:;'"{}【】  ]/;
                    if(nameVal == "" || nameVal.length < 6 || regName.test(nameVal)){
                        var errorMsg = " 姓名非空，长度6位以上，不包含特殊字符！";
                        //class='msg onError' 中间的空格是层叠样式的格式
                        $parent.append("<span class='msg onError'>" + errorMsg + "</span>");
                    }
                    else{
                        var okMsg=" 输入正确";
                        $parent.find(".high").remove();
                        $parent.append("<span class='msg onSuccess'>" + okMsg + "</span>");
                    }
                }
                //验证邮箱
                if($(this).is("#email")){
                    var emailVal = $.trim(this.value);
                    var regEmail = /.+@.+\.[a-zA-Z]{2,4}$/;
                    if(emailVal== "" || (emailVal != "" && !regEmail.test(emailVal))){
                        var errorMsg = " 请输入正确的E-Mail住址！";
                        $parent.append("<span class='msg onError'>" + errorMsg + "</span>");
                    }
                    else{
                        var okMsg=" 输入正确";
                        $parent.find(".high").remove();
                        $parent.append("<span class='msg onSuccess'>" + okMsg + "</span>");
                    }
                }
            }).keyup(function(){
                //triggerHandler 防止事件执行完后，浏览器自动为标签获得焦点
                $(this).triggerHandler("blur"); 
            }).focus(function(){
                $(this).triggerHandler("blur");
            });
            
            //点击重置按钮时，通过trigger()来触发文本框的失去焦点事件
            $("#send").click(function(){
                //trigger 事件执行完后，浏览器会为submit按钮获得焦点
                $("form .required:input").trigger("blur"); 
                var numError = $("form .onError").length;
                if(numError){
                    return false;
                }
                alert("注册成功！");
            });
           
        </script>
        <script>
            {{-- $("input").blur(function(){
               
                var name = $("input").val();
                console.log(name);
            }); --}}
        </script>
            <form class="layui-form" action="/cxjy_admin/user/shore" method="post">

                <div class="layui-form-item">
                    <label class="layui-form-label">用户名</label>
                    <div class="layui-input-inline int">
                        <input type="text" name="username" id="name" lay-verify="required" placeholder="请输入" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">输入新密码</label>
                    <div class="layui-input-inline">
                        <input type="password" name="passwd" lay-verify="required" placeholder="请填写6到12位密码" autocomplete="off" class="layui-input">
                    </div>
                </div>

                {{-- <div class="layui-form-item">
                    <label class="layui-form-label">单行输入框</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">验证必填项</label>
                    <div class="layui-input-block">
                        <input type="text" name="username" lay-verify="required" placeholder="请输入" autocomplete="off"
                            class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">验证手机</label>
                        <div class="layui-input-inline">
                            <input type="tel" name="phone" lay-verify="phone" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">验证邮箱</label>
                        <div class="layui-input-inline">
                            <input type="text" name="email" lay-verify="email" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">多规则验证</label>
                        <div class="layui-input-inline">
                            <input type="text" name="number" lay-verify="required|number" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">验证日期</label>
                        <div class="layui-input-inline">
                            <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-mm-dd"
                                autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">验证链接</label>
                        <div class="layui-input-inline">
                            <input type="tel" name="url" lay-verify="url" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">验证身份证</label>
                    <div class="layui-input-block">
                        <input type="text" name="identity" lay-verify="identity" placeholder="" autocomplete="off"
                            class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">自定义验证</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password" lay-verify="pass" placeholder="请输入密码" autocomplete="off"
                            class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">请填写6到12位密码</div>
                </div>

                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">范围</label>
                        <div class="layui-input-inline" style="width: 100px;">
                            <input type="text" name="price_min" placeholder="￥" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-mid">-</div>
                        <div class="layui-input-inline" style="width: 100px;">
                            <input type="text" name="price_max" placeholder="￥" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">单行选择框</label>
                    <div class="layui-input-block">
                        <select name="interest" lay-filter="aihao">
                            <option value=""></option>
                            <option value="0">写作</option>
                            <option value="1" selected="">阅读</option>
                            <option value="2">游戏</option>
                            <option value="3">音乐</option>
                            <option value="4">旅行</option>
                        </select>
                    </div>
                </div>


                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">分组选择框</label>
                        <div class="layui-input-inline">
                            <select name="quiz">
                                <option value="">请选择问题</option>
                                <optgroup label="城市记忆">
                                    <option value="你工作的第一个城市">你工作的第一个城市</option>
                                </optgroup>
                                <optgroup label="学生时代">
                                    <option value="你的工号">你的工号</option>
                                    <option value="你最喜欢的老师">你最喜欢的老师</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">搜索选择框</label>
                        <div class="layui-input-inline">
                            <select name="modules" lay-verify="required" lay-search="">
                                <option value="">直接选择或搜索选择</option>
                                <option value="1">layer</option>
                                <option value="2">form</option>
                                <option value="3">layim</option>
                                <option value="4">element</option>
                                <option value="5">laytpl</option>
                                <option value="6">upload</option>
                                <option value="7">laydate</option>
                                <option value="8">laypage</option>
                                <option value="9">flow</option>
                                <option value="10">util</option>
                                <option value="11">code</option>
                                <option value="12">tree</option>
                                <option value="13">layedit</option>
                                <option value="14">nav</option>
                                <option value="15">tab</option>
                                <option value="16">table</option>
                                <option value="17">select</option>
                                <option value="18">checkbox</option>
                                <option value="19">switch</option>
                                <option value="20">radio</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">联动选择框</label>
                    <div class="layui-input-inline">
                        <select name="quiz1">
                            <option value="">请选择省</option>
                            <option value="浙江" selected="">浙江省</option>
                            <option value="你的工号">江西省</option>
                            <option value="你最喜欢的老师">福建省</option>
                        </select>
                    </div>
                    <div class="layui-input-inline">
                        <select name="quiz2">
                            <option value="">请选择市</option>
                            <option value="杭州">杭州</option>
                            <option value="宁波" disabled="">宁波</option>
                            <option value="温州">温州</option>
                            <option value="温州">台州</option>
                            <option value="温州">绍兴</option>
                        </select>
                    </div>
                    <div class="layui-input-inline">
                        <select name="quiz3">
                            <option value="">请选择县/区</option>
                            <option value="西湖区">西湖区</option>
                            <option value="余杭区">余杭区</option>
                            <option value="拱墅区">临安市</option>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">复选框</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="like[write]" title="写作">
                        <input type="checkbox" name="like[read]" title="阅读" checked="">
                        <input type="checkbox" name="like[game]" title="游戏">
                    </div>
                </div>

                <div class="layui-form-item" pane="">
                    <label class="layui-form-label">原始复选框</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="like1[write]" lay-skin="primary" title="写作" checked="">
                        <input type="checkbox" name="like1[read]" lay-skin="primary" title="阅读">
                        <input type="checkbox" name="like1[game]" lay-skin="primary" title="游戏" disabled="">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">开关-默认关</label>
                    <div class="layui-input-block">
                        <input type="checkbox" name="close" lay-skin="switch" lay-text="ON|OFF">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">开关-默认开</label>
                    <div class="layui-input-block">
                        <input type="checkbox" checked="" name="open" lay-skin="switch" lay-filter="switchTest"
                            lay-text="ON|OFF">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">单选框</label>
                    <div class="layui-input-block">
                        <input type="radio" name="sex" value="男" title="男" checked="">
                        <input type="radio" name="sex" value="女" title="女">
                        <input type="radio" name="sex" value="禁" title="禁用" disabled="">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">普通文本域</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">编辑器</label>
                    <div class="layui-input-block">
                        <textarea class="layui-textarea layui-hide" name="content" lay-verify="content" id="LAY_demo_editor"></textarea>
                    </div>
                </div> --}}
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="demo1">添加</button>
                        <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                    </div>
                </div>
                {{csrf_field()}}
            </form>
            {{-- <fieldset class="layui-elem-field layui-field-title" style="margin-top: 50px;">
                <legend>方框风格的表单集合</legend>
            </fieldset> --}}
            {{-- <form class="layui-form layui-form-pane" action="">
                <div class="layui-form-item">
                    <label class="layui-form-label">长输入框</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" autocomplete="off" placeholder="请输入标题" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">短输入框</label>
                    <div class="layui-input-inline">
                        <input type="text" name="username" lay-verify="required" placeholder="请输入" autocomplete="off"
                            class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">日期选择</label>
                        <div class="layui-input-block">
                            <input type="text" name="date" id="date" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">行内表单</label>
                        <div class="layui-input-inline">
                            <input type="number" name="number" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">密码</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">请务必填写用户名</div>
                </div>

                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">范围</label>
                        <div class="layui-input-inline" style="width: 100px;">
                            <input type="text" name="price_min" placeholder="￥" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-mid">-</div>
                        <div class="layui-input-inline" style="width: 100px;">
                            <input type="text" name="price_max" placeholder="￥" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">单行选择框</label>
                    <div class="layui-input-block">
                        <select name="interest" lay-filter="aihao">
                            <option value=""></option>
                            <option value="0">写作</option>
                            <option value="1" selected="">阅读</option>
                            <option value="2">游戏</option>
                            <option value="3">音乐</option>
                            <option value="4">旅行</option>
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">行内选择框</label>
                    <div class="layui-input-inline">
                        <select name="quiz1">
                            <option value="">请选择省</option>
                            <option value="浙江" selected="">浙江省</option>
                            <option value="你的工号">江西省</option>
                            <option value="你最喜欢的老师">福建省</option>
                        </select>
                    </div>
                    <div class="layui-input-inline">
                        <select name="quiz2">
                            <option value="">请选择市</option>
                            <option value="杭州">杭州</option>
                            <option value="宁波" disabled="">宁波</option>
                            <option value="温州">温州</option>
                            <option value="温州">台州</option>
                            <option value="温州">绍兴</option>
                        </select>
                    </div>
                    <div class="layui-input-inline">
                        <select name="quiz3">
                            <option value="">请选择县/区</option>
                            <option value="西湖区">西湖区</option>
                            <option value="余杭区">余杭区</option>
                            <option value="拱墅区">临安市</option>
                        </select>
                    </div>
                </div>
                <div class="layui-form-item" pane="">
                    <label class="layui-form-label">开关-开</label>
                    <div class="layui-input-block">
                        <input type="checkbox" checked="" name="open" lay-skin="switch" lay-filter="switchTest" title="开关">
                    </div>
                </div>
                <div class="layui-form-item" pane="">
                    <label class="layui-form-label">单选框</label>
                    <div class="layui-input-block">
                        <input type="radio" name="sex" value="男" title="男" checked="">
                        <input type="radio" name="sex" value="女" title="女">
                        <input type="radio" name="sex" value="禁" title="禁用" disabled="">
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <label class="layui-form-label">文本域</label>
                    <div class="layui-input-block">
                        <textarea placeholder="请输入内容" class="layui-textarea"></textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn" lay-submit="" lay-filter="demo2">跳转式提交</button>
                </div>
            </form> --}}
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
    <div id="changer-set"><i class="iconfont">&#xe696;</i></div>
</div>
<!-- 背景切换结束 -->
</body>

</html>