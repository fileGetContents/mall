<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/shopping-mall-index.css')}}"/>
</head>
<body>
<div class="sign-logo w1200">
    <h1><a href="#" title="宅客微购"><img src="{{asset('images/logo.jpg')}}"/></a></h1>
</div>
<form action="" id="from_log">
    <div class="sign-con w1200">
        <img src="{{asset('images/logn-tu.gif')}}" class="sign-contu f-l"/>
        <div class="sign-ipt f-l">
            <p>用户名</p>
            <input name="telephone" id="telephone" type="text" placeholder="手机号/邮箱"/>
            <p></p>
            <p>密码</p>
            <input name="password" id="password" type="text" placeholder="密码可见"/>
            <p></p>
            <br/>
            <button class="slig-btn">登录</button>
            <p><a href="#" class="wj">忘记密码？</a></p>
            {{--<div class="sign-qx">--}}
            {{--<a href="#" class="f-r"><img src="{{asset('/images/sign-xinlan.gif')}}"/></a>--}}
            {{--<a href="#" class="qq f-r"><img src="{{asset('/images/sign-qq.gif')}}"/></a>--}}
            {{--<div style="clear:both;"></div>--}}
            {{--</div>--}}
        </div>
        <div style="clear:both;"></div>
    </div>
</form>
<!--底部服务-->
<div class="ft-service">
    <div class="w1200">
        <div class="sv-con-l2 f-l">
            <dl>
                <dt><a href="#">新手上路</a></dt>
                <dd>
                    <a href="#">购物流程</a>
                    <a href="#">在线支付</a>
                </dd>
            </dl>
            <dl>
                <dt><a href="#">配送方式</a></dt>
                <dd>
                    <a href="#">货到付款区域</a>
                    <a href="#">配送费标准</a>
                </dd>
            </dl>
            <dl>
                <dt><a href="#">购物指南</a></dt>
                <dd>
                    <a href="#">常见问题</a>
                    <a href="#">订购流程</a>
                </dd>
            </dl>
            <dl>
                <dt><a href="#">售后服务</a></dt>
                <dd>
                    <a href="#">售后服务保障</a>
                    <a href="#">退款说明</a>
                    <a href="#">新手选购商品总则</a>
                </dd>
            </dl>
            <dl>
                <dt><a href="#">关于我们</a></dt>
                <dd>
                    <a href="#">投诉与建议</a>
                </dd>
            </dl>
            <div style="clear:both;"></div>
        </div>
        <div class="sv-con-r2 f-r">
            <p class="sv-r-tle">187-8660-5539</p>
            <p>周一至周五9:00-17:30</p>
            <p>（仅收市话费）</p>
            <a href="#" class="zxkf">24小时在线客服</a>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>
<!--底部 版权-->
<div class="footer w1200">
    <p>
        <a href="#">关于我们</a><span>|</span>
        <a href="#">友情链接</a><span>|</span>
        <a href="#">宅客微购社区</a><span>|</span>
        <a href="#">诚征英才</a><span>|</span>
        <a href="#">商家登录</a><span>|</span>
        <a href="#">供应商登录</a><span>|</span>
        <a href="#">热门搜索</a><span>|</span>
        <a href="#">宅客微购新品</a><span>|</span>
        <a href="#">开放平台</a>
    </p>
    <p>
        沪ICP备13044278号<span>|</span>合字B1.B2-20130004<span>|</span>营业执照<span>|</span>互联网药品信息服务资格证<span>|</span>互联网药品交易服务资格证
    </p>
</div>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/zhonglin.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/rules.js')}}"></script>
<script type="text/javascript">

    $(function () {
        $('#from_log').validate({
            submitHandler: function () {
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    data: {'telephone': $('#telephone').val(), 'password': $('#password').val()},
                    url: '{{asset('api/user/login')}}',
                    success: function (data) {
//                        if (data.message == 'true') {
//                            alert('登录成功')
//                        } else {
//                            alert(data.data)
//                        }
                    },
                    error: function () {

                    }
                });
            },
            errorPlacement: function (error, element) {
                $(element).next().append(error);
            },
            rules: {
                telephone: {
                    required: true,
                    telephone: true,
                    remote: {
                        url: '{{URL('api/user/loginTelephone')}}',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            telephone: function () {
                                return $('#telephone').val()
                            }
                        },
                    }
                },
                password: {
                    required: true,
                    password: true
                },
            },
            messages: {
                password: {
                    required: '请输入密码',
                },
                telephone: {
                    required: '请输入电话号码',
                    remote: '还没有注册哦'
                }
            }
        })
    });


</script>
</body>
</html>
