<!doctype html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>好商城V4 - 登&nbsp;&nbsp;&nbsp;录</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="keywords" content="好商城V4"/>
    <meta name="description" content="好商城V4"/>
    <link href="/css/base.css" rel="stylesheet" type="text/css"/>
    <link href="/css/home_header.css" rel="stylesheet" type="text/css"/>
    <link href="/css/member_login.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="header-wrap">
    <header class="public-head-layout wrapper">
        <h1 class="site-logo"><a href="http://127.0.0.1/v4/shop">
                <img src="http://127.0.0.1/v4/data/upload/shop/common/logo.png" class="pngFix"></a></h1>
        <div class="nc-regist-now">
            <span class="avatar">
                <img src="http://127.0.0.1/v4/data/upload/shop/common/default_user_portrait.gif"></span>
            <span>Hi，欢迎来好商城V4<br/>还不是本站会员？立即
                <a title="" href="index.php?act=login&op=register&ref_url=" class="register">注册</a>
            </span>
        </div>
    </header>
</div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="nc-login-layout">
    <div class="left-pic">
        <img src="http://127.0.0.1/v4/data/upload/shop/login/1.jpg" border="0"></div>
    <div class="nc-login">
        <div class="arrow"></div>
        <div class="nc-login-mode">
            <ul class="tabs-nav">
                <li><a href="#default">用户登录<i></i></a></li>
                <li><a href="#mobile">手机动态码登录<i></i></a></li>
            </ul>
            <div id="tabs_container" class="tabs-container">
                <div id="default" class="tabs-content">
                    <form id="login_form" class="nc-login-form" method="post"
                          action="http://127.0.0.1/v4/shop/index.php?act=login&op=login">
                        <dl>
                            <dt>账&nbsp;&nbsp;&nbsp;号：</dt>
                            <dd>
                                <input type="text" class="text" autocomplete="off" name="user_name" tipMsg="手机号" id="user_name">
                            </dd>
                        </dl>
                        <dl>
                            <dt>密&nbsp;&nbsp;&nbsp;码：</dt>
                            <dd>
                                <input type="password" class="text" name="password" autocomplete="off" tipMsg="6-20个大小写英文字母、符号或数字" id="password">
                            </dd>
                        </dl>
                        <div class="code-div mt15">
                            <dl>
                                <dt>验证码：</dt>
                                <dd>
                                    <input type="text" name="captcha" autocomplete="off" class="text w100" tipMsg="输入验证码" id="captcha" size="10"/>
                                </dd>
                            </dl>
                            <span>
                                <img src="{{url('api/getCaptcha')}}" name="codeimage" id="codeimage">
                                <a class="makecode" href="javascript:void(0)" onclick="javascript:document.getElementById('codeimage').src='{{url('api/getCaptcha')}}?id=' + Math.random();">看不清，换一张</a></span>
                        </div>
                        <div class="handle-div">
                            <span class="auto">
                                <input type="checkbox" class="checkbox" id="auto_login" name="auto_login" value="1">
                                七天自动登录<em style="display: none;">请勿在公用电脑上使用</em>
                            </span>
                            <a class="forget" href="index.php?act=login&op=forget_password">忘记密码？</a>
                        </div>
                        <div class="submit-div">
                            <input type="submit" class="submit" value="登&nbsp;&nbsp;&nbsp;录">
                            <input type="hidden" value="" name="ref_url">
                        </div>
                    </form>
                </div>
                <div id="mobile" style="display: none" class="tabs-content">
                    <form id="post_form" method="post" class="nc-login-form">
                        <dl>
                            <dt>手机号：</dt>
                            <dd>
                                <input name="phone" type="text" class="text" id="phone" tipMsg="可填写已注册的手机号接收短信"
                                       autocomplete="off" value="">
                            </dd>
                        </dl>
                        <div class="code-div">
                            <dl>
                                <dt>验证码：</dt>
                                <dd>
                                    <input type="text" name="captcha" class="text w100" tipMsg="输入验证码" id="image_captcha" size="10"/>
                                </dd>
                            </dl>
                            <span><img src="{{url('api/getCaptcha')}}" title="看不清，换一张" name="codeimage" id="sms_codeimage">
                                <a class="makecode" href="javascript:void(0);" onclick="javascript:document.getElementById('sms_codeimage').src='{{url('api/getCaptcha')}}?id=' + Math.random();">看不清，换一张</a></span>
                        </div>
                        <div class="tiptext" id="sms_text">正确输入上方验证码后，点击
                            <span><a id="sendSMS" href="javascript:void(0);"><i class="icon-mobile-phone"></i>发送手机动态码</a></span>
                            ，查收短信将系统发送的“6位手机动态码”输入到下方验证后登录。
                        </div>
                        <dl>
                            <dt>动态码：</dt>
                            <dd>
                                <input type="text" name="sms_captcha" autocomplete="off" class="text" tipMsg="输入6位手机动态码" id="sms_captcha" size="15"/>
                            </dd>
                        </dl>
                        <div class="submit-div">
                            <input type="submit" id="submit" class="submit" value="登&nbsp;&nbsp;&nbsp;录"> <input
                                    type="hidden" value="" name="ref_url">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="nc-login-api" id="demo-form-site">
        </div>
    </div>
    <div class="clear"></div>
</div>
<div id="faq">
    <div class="faq-wrapper">
        <ul>
            <li>
                <dl class="s1">
                    <dt>
                        帮助中心
                    </dt>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=10"
                                  title="查看已购买商品"> 查看已购买商品 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=7"
                                  title="如何搜索"> 如何搜索 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=40"
                                  title="积分兑换说明"> 积分兑换说明 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=9"
                                  title="我要买"> 我要买 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=6"
                                  title="如何注册成为会员"> 如何注册成为会员 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s2">
                    <dt>
                        店主之家
                    </dt>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=11"
                                  title="如何管理店铺"> 如何管理店铺 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=13"
                                  title="如何发货"> 如何发货 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=15"
                                  title="如何申请开店"> 如何申请开店 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=12"
                                  title="查看售出商品"> 查看售出商品 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=14"
                                  title="商城商品推荐"> 商城商品推荐 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s3">
                    <dt>
                        支付方式
                    </dt>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=29"
                                  title="邮局汇款"> 邮局汇款 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=16"
                                  title="如何注册支付宝"> 如何注册支付宝 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=28"
                                  title="分期付款"> 分期付款 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=30"
                                  title="公司转账"> 公司转账 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=17"
                                  title="在线支付"> 在线支付 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s4">
                    <dt>
                        售后服务
                    </dt>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=33"
                                  title="返修/退换货"> 返修/退换货 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=26"
                                  title="联系卖家"> 联系卖家 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=32"
                                  title="退换货流程"> 退换货流程 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=34"
                                  title="退款申请"> 退款申请 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=31"
                                  title="退换货政策"> 退换货政策 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s5">
                    <dt>
                        客服中心
                    </dt>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=19"
                                  title="会员修改个人资料"> 会员修改个人资料 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=21"
                                  title="修改收货地址"> 修改收货地址 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=18"
                                  title="会员修改密码"> 会员修改密码 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=20"
                                  title="商品发布"> 商品发布 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s6">
                    <dt>
                        关于我们
                    </dt>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=24"
                                  title="招聘英才"> 招聘英才 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=23"
                                  title="联系我们"> 联系我们 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=25"
                                  title="合作及洽谈"> 合作及洽谈 </a></dd>
                    <dd><i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&op=show&article_id=22"
                                  title="关于我们"> 关于我们 </a></dd>
                </dl>
            </li>

        </ul>
        <div class="help">
            <div class="w1190 clearfix">
                <div class="contact f-l">
                    <div class="contact-border clearfix">
                        <span class="ic tel t20">4008008000</span> <span class="ic mail">abc@33hao.com</span>
                        <div class="attention cleafix">
                            <div class="weixin f-l">
                                <img src="http://127.0.0.1/v4/data/upload/shop/common/04781087584534013.png"
                                     class="f-l jImg img-error">
                                <p class="f-l">
                                    <span>扫一扫</span> <span>关注我们</span>
                                </p>
                            </div>
                            <div class="weibo f-l">
                                <div class="ic qq" style="padding-left: 0px;">
                                    <ul>
                                        <li><a target="_blank">腾讯微博</a></li>
                                    </ul>
                                </div>
                                <div class="ic sina" style="padding-left: 0px;">
                                    <ul>
                                        <li><a target="_blank">新浪微博</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="wrapper">
    <p><a href="http://127.0.0.1/v4/shop">首页</a> | <a
                href="http://localhost/index.php?act=article&article_id=24">招聘英才</a> | <a
                href="http://localhost/index.php?act=article&article_id=25">合作及洽谈</a> | <a
                href="http://localhost/index.php?act=article&article_id=23">联系我们</a> | <a
                href="http://localhost/index.php?act=article&article_id=22">关于我们</a> | <a
                href="http://localhost/delivery">物流自取</a> | <a href="http://localhost/index.php?act=link">友情链接</a>
    </p>
    Copyright 2015 <a href="http://bbs.33hao.com" target="_blank">好商城</a> All rights reserved.<br/>本演示来源于<a
            href="http://33haocom.taobao.com" target="_blank">bbs.33hao.com</a><br/></div>
<script type="text/javascript" src="/js/jquery.js"></script>
<script type="text/javascript" src="/js/layer-v3.1.1/layer.js"></script>
<script type="text/javascript" src="/js/common.js"></script>
<script type="text/javascript" src="/js/jquery.validation.min.js"></script>
<script type="text/javascript" src="/js/taglibs.js"></script>
<script type="text/javascript" src="/js/tabulous.js"></script>
<script type="text/javascript" src="/js/connect_sms.js"></script>
<script type="text/javascript" src="/js/jquery.cookie.js"></script>
{{--<script type="text/javascript" src="/js/perfect-scrollbar.min.js"></script>--}}
{{--<script type="text/javascript" src="/js/compare.js"></script>--}}
<script type="text/javascript">
    $(function () {
        //初始化Input的灰色提示信息
        $('input[tipMsg]').inputTipText({pwd: 'password'});
        //登录方式切换
        $('.nc-login-mode').tabulous({
            effect: 'flip'//动画反转效果
        });
        var div_form = '#default';
        $(".nc-login-mode .tabs-nav li a").click(function () {
            if ($(this).attr("href") !== div_form) {
                div_form = $(this).attr('href');
                $("" + div_form).find(".makecode").trigger("click");
            }
        });
        $("#login_form").validate({
            errorPlacement: function (error, element) {
                var error_td = element.parent('dd');
                error_td.append(error);
                element.parents('dl:first').addClass('error');
            },
            success: function (label) {
                label.parents('dl:first').removeClass('error').find('label').remove();
            },
            submitHandler: function (form) {
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'mobile': $('#user_name').val(),
                        'password': $('#password').val(),
                        'imgCode': $('#captcha').val(),
                        'remember': $('#auto_login:checked').val()
                    },
                    url: '{{url('api/user/loginByPassword')}}',
                    success: function (data) {

                    }, error: function () {

                    }
                })
            },
            onkeyup: false,
            rules: {
                user_name: "required",
                password: "required"
                , captcha: {
                    required: true,
                    remote: {
                        url: "{{url('api/captchaValidation')}}",
                        type: 'post',
                        data: {
                            code: function () {
                                return $('#captcha').val();
                            }
                        }
                    }
                }
            },
            messages: {
                user_name: "<i class='icon-exclamation-sign'></i>请输入已注册的用户名或手机号",
                password: "<i class='icon-exclamation-sign'></i>密码不能为空"
                , captcha: {
                    required: '<i class="icon-remove-circle" title="验证码不能为空"></i>',
                    remote: '<i class="icon-remove-circle" title="验证码不能为空"></i>'
                }
            }
        });
        // 勾选自动登录显示隐藏文字
        $('input[name="auto_login"]').click(function () {
            if ($(this).attr('checked')) {
                $(this).attr('checked', true).next().show();
            } else {
                $(this).attr('checked', false).next().hide();
            }
        });

        $("#post_form").validate({
            errorPlacement: function (error, element) {
                var error_td = element.parent('dd');
                error_td.append(error);
                element.parents('dl:first').addClass('error');
            },
            success: function (label) {
                label.parents('dl:first').removeClass('error').find('label').remove();
            },
            submitHandler: function (form) {
                $.ajax({
                    type: 'post',
                    data: {
                        'code': $('#image_captcha').val(),
                        'mobile': $('#phone').val(),
                        'NoteCode': $('#sms_captcha').val()
                    },
                    dataType: 'json',
                    url: '{{url('api/user/loginBySMSCode')}}',
                    success: function (data) {
                        if (data.message == 'success') {
                            layer.msg('登陆成功');
                        } else {
                            layer.msg(data.data);
                        }
                    }, error: function () {

                    }
                })
            },
            onkeyup: false,
            rules: {
                phone: {
                    required: true,
                    mobile: true
                },
                captcha: {
                    required: true,
                    minlength: 4,
                    remote: {
                        url: '{{url('api/captchaValidation')}}',
                        type: 'post',
                        data: {
                            code: function () {
                                return $('#image_captcha').val();
                            }
                        },
                    }
                },
                sms_captcha: {
                    required: function (element) {
                        return $("#image_captcha").val().length == 4;
                    },
                    minlength: 6,
                    remote: {
                        url: '{{url('api/interface/noteValidate')}}',
                        type: 'post',
                        data: {
                            NoteCode: function () {
                                return $('#sms_captcha').val();
                            },
                            'mobile': function () {
                                return $('#phone').val();
                            }
                        }
                    }
                }
            },
            messages: {
                phone: {
                    required: '<i class="icon-exclamation-sign"></i>请输入正确的手机号',
                    mobile: '<i class="icon-exclamation-sign"></i>请输入正确的手机号'
                },
                captcha: {
                    required: '<i class="icon-remove-circle" title="请输入正确的验证码"></i>',
                    minlength: '<i class="icon-remove-circle" title="请输入正确的验证码"></i>',
                    remote: '<i class="icon-remove-circle" title="请输入正确的验证码"></i>'
                },
                sms_captcha: {
                    required: '<i class="icon-exclamation-sign"></i>请输入六位短信动态码',
                    minlength: '<i class="icon-exclamation-sign"></i>请输入六位短信动态码',
                    remote: '<i class="icon-exclamation-sign"></i>短信验证不正确'
                }
            }
        });
        // Membership card
        $('[nctype="mcard"]').membershipCard({type: 'shop'});


        $('#sendSMS').click(function () {
            if (!/^1[34578]\d{9}$/.test($('#phone').val())) {
                layer.msg('请正确输入电话号码');
                return false;
            }
            $.ajax({
                type: 'post',
                data: {'code': $('#image_captcha').val(), 'mobile': $('#phone').val()},
                dataType: 'json',
                url: '{{url('api/interface/seedNoteValidate')}}',
                success: function (data) {
                    if (data.message == 'success') {
                        layer.msg('验证码已发出请注意查收');
                    } else {
                        layer.msg(data.data)
                    }
                }, error: function () {

                }
            })
        })


    });


    //v4
    function fade() {
        $("img[rel='lazy']").each(function () {
            var $scroTop = $(this).offset();
            if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {
                $(this).hide();
                $(this).attr("src", $(this).attr("data-url"));
                $(this).removeAttr("rel");
                $(this).removeAttr("name");
                $(this).fadeIn(500);
            }
        });
        $('#mobile').css('display', 'block');
    }
    if ($("img[rel='lazy']").length > 0) {
        $(window).scroll(function () {
            fade();
        });
    }
    fade();
</script>
</body>
</html>
