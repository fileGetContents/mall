<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>注册</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/shopping-mall-index.css')}}"/>
</head>

<body>

<!--top 开始-->
<div class="top">
    <div class="top-con w1200">
        <p class="t-con-l f-l">您好，欢迎来到宅客微购</p>
        <ul class="t-con-r f-r">
            <li><a href="#">我 (个人中心)</a></li>
            <li><a href="#">我的购物车</a></li>
            <li><a href="#">我的订单</a></li>
            <li class="erweima">
                <a href="#">扫描二维码</a>
                <div class="ewm-tu">
                    <a href="#"><img src="images/erweima-tu.jpg"/></a>
                </div>
            </li>
            <div style="clear:both;"></div>
        </ul>
        <div style="clear:both;"></div>
    </div>
</div>

<!--logo search 开始-->
<div class="hd-info1 w1200">
    <div class="logo f-l">
        <h1><a href="#" title="中林网站"><img src="images/logo.jpg"/></a></h1>
    </div>
    <div class="search f-r">
        <ul class="sp">
            <li class="current" ss-search="sp"><a href="JavaScript:;">商品</a></li>
            <li ss-search="dp"><a href="JavaScript:;">店铺</a></li>
            <div style="clear:both;"></div>
        </ul>
        <div class="srh">
            <div class="ipt f-l">
                <input type="text" placeholder="搜索商品..." ss-search-show="sp"/>
                <input type="text" placeholder="搜索店铺..." ss-search-show="dp" style="display:none;"/>
            </div>
            <button class="f-r">搜 索</button>
            <div style="clear:both;"></div>
        </div>
        <ul class="sp2">
            <li><a href="#">绿豆</a></li>
            <li><a href="#">大米</a></li>
            <li><a href="#">驱蚊</a></li>
            <li><a href="#">洗面奶</a></li>
            <li><a href="#">格力空调</a></li>
            <li><a href="#">洗发护发</a></li>
            <li><a href="#">葡萄 </a></li>
            <li><a href="#">脉动</a></li>
            <li><a href="#">海鲜水产</a></li>
            <div style="clear:both;"></div>
        </ul>
    </div>
    <div style="clear:both;"></div>
</div>

<!--内容开始-->
<form id="form_reg" action="">
    <div class="password-con registered">
        <div class="psw">
            <p class="psw-p1">用户名</p>
            <input type="text" name="name" id="name" placeholder="HR了"/>
            <span></span>
        </div>
        <div class="psw">
            <p class="psw-p1">输入密码</p>
            <input type="text" name="password" id="password" placeholder="请输入密码"/>
            <span></span>
        </div>
        <div class="psw">
            <p class="psw-p1">确认密码</p>
            <input type="text" name="bpasswored" id="bpasswored" placeholder="请再次确认密码"/>
            <span></span>
        </div>
        <div class="psw psw2">
            <p class="psw-p1">手机号</p>
            <input type="text" name="telephone" id="telephone" placeholder="请输入手机/邮箱验证码"/>
            <span></span>
            <button id="sms">获取短信验证码</button>
        </div>
        <div class="psw psw3">
            <p class="psw-p1">验证码</p>
            <input type="text" name="code" id="code" placeholder="请输入手机/邮箱验证码"/>
            <span></span>
        </div>
        <div class="psw psw3">
            <p class="psw-p1">验证码</p>
            <input type="text" name="captcha" id="captcha" placeholder="请输入验证码"/>
            <span></span>
        </div>
        <div class="yanzhentu">
            <div class="yz-tu f-l">
                <img id="imgCap" src="{{URL('api/assit/getCaptcha')}}"/>
            </div>
            <p class="f-l">看不清？<a id="upCap" href="javascript:void(0)">换张图</a></p>
            <div style="clear:both;"></div>
        </div>
        <div class="agreement">
            <input type="checkbox" name="hobby"/>
            <p>我有阅读并同意<span>《宅客微购网站服务协议》</span></p>
        </div>
        <button type="submit" class="psw-btn">立即注册</button>
        <p class="sign-in">已有账号？请<a href="#">登录</a></p>
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
<script type="text/javascript">
    $(function () {
        $('#upCap').click(function () {
            $('#imgCap').attr('src', '{{URL('api/assit/getCaptcha')}}?id=' + Math.floor(Math.random() * 10000))
        });
        $('#sms').click(function () {
            if (!/^1[34578]\d{9}$/.test($('#telephone').val())) {
                alert('请输入11位正确手机号码');
                return false;
            }
            // 开始运行倒计时程序
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: {'telephone': $('#telephone').val()},
                url: '{{URL('api/assit/sendSMS')}}',
                success: function (data) {
                },
                error: function () {
                }
            })
        });

        $('#form_reg').validate({
            submitHandler: function () {
                $.ajax({
                    url: '{{URL('api/user/registered')}}',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'name': $('#name').val(),
                        'password': $('#password').val(),
                        'bpasswored': $('#bpasswored').val(),
                        'telephone': $('#telephone').val(),
                        'code': $('#code').val(),
                        'captcha': $('#captcha').val()
                    },
                    success: function (data) {
                        if (data) {
                            window.location.href = ''
                        }
                    },
                    error: function () {

                    }

                })
            },
            errorPlacement: function (error, element) {
                $(element).next().append(error);
            },
            rules: {
                name: {
                    required: true,
                    username: true
                },
                password: {
                    required: true,
                    password: true
                },
                bpasswored: {
                    required: true,
                    equalTo: '#password'
                },
                telephone: {
                    required: true,
                    telephone: true,
                    remote: {
                        url: '{{URL('api/user/hasTelephone')}}',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            telephone: function () {
                                return $('#telephone').val()
                            }
                        },
                    }
                },
                captcha: {
                    required: true,
                    remote: {
                        url: '{{URL('api/assit/valCaptcha')}}',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            telephone: function () {
                                return $('#captcha').val()
                            }
                        },
                    }
                },
                code: {
                    required: true,
                    remote: {
                        url: '{{URL('api/assit/valSMS')}}',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            telephone: function () {
                                return $('#telephone').val()
                            },
                            sms: function () {
                                return $('#code').val()
                            }
                        },
                    }
                }
            },
            messages: {
                name: {
                    required: '请输入用户名'
                },
                password: {
                    required: '请输入密码',
                },
                bpasswored: {
                    required: '请确认密码',
                    equalTo: '俩次密码不匹配'
                },
                telephone: {
                    required: '请输入电话号码',
                    remote: '已经注册过了哦！'
                },
                captcha: {
                    required: '请输入图像验证码',
                    remote: '图像验证码不正确'
                },
                code: {
                    required: '请输入短信验证码',
                    remote: '短信验证码错误'
                }
            }
        })
    });

    jQuery.validator.addMethod('password', function (value, element) {
        var tel = /(?!^\d+$)(?!^[a-zA-Z]+$)[0-9a-zA-Z]{6,16}/;
        return this.optional(element) || (tel.test(value));
    }, '密码由6-16的字母、数字组成');
    jQuery.validator.addMethod('telephone', function (value, element) {
        var tel = /^1[34578]\d{9}$/;
        return this.optional(element) || (tel.test(value));
    }, '请输入11位正确手机号码');
    jQuery.validator.addMethod('username', function (value, element) {
        var tel = /[A-Za-z0-9]{6,20}$/;
        return this.optional(element) || (tel.test(value));
    }, '用户名是有6-20字母加数字组成');


</script>
</body>
</html>
