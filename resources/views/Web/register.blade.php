<!DOCTYPE html>
<!-- saved from url=(0095)http://localhost/v4/shop/index.php?act=login&op=register&ref_url=http%3A%2F%2Flocalhost%2Fv4%2F -->
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>用户注册</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="keywords" content="mall">
    <meta name="description" content="mall">
    <link href="/css/base.css" rel="stylesheet" type="text/css">
    <link href="/css/home_header.css" rel="stylesheet" type="text/css">
    <link href="/css/member_login.css" rel="stylesheet" type="text/css">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/jquery.qtip.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="header-wrap">
    <header class="public-head-layout wrapper">
        <h1 class="site-logo"><a href="http://localhost/v4/shop"><img src="/images/logo.png" class="pngFix"></a></h1>
        <div class="nc-login-now">我已经注册，现在就
            <a href="http://localhost/v4/shop/index.php?act=login&amp;op=index&amp;ref_url=" title="" class="register">登录</a>
        </div>
    </header>
</div>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="nc-register-bg">
    <div class="nc-register-box">
        <div class="nc-register-layout">
            <div class="left">
                <div class="nc-register-mode">
                    <ul class="tabs-nav">
                        <li><a href="" class="tabulous_active">手机注册<i></i></a></li>
                    </ul>
                    <div id="tabs_container" class="tabs-container transition" style="height: 290px;">
                        <div id="mobile" class="tabs-content hideleft make_transist showleft"
                             style="position: absolute; top: 0px;">
                            <form id="post_form" method="post" class="nc-login-form">
                                <input type="hidden" name="formhash" value="hZMLsIN9-T04Vuar15XaTFZAMXxHNJ5">
                                <dl>
                                    <dt>手机号：</dt>
                                    <dd>
                                        <input type="text" class="text" placeholder="请输入手机号码" autocomplete="off"
                                               name="phone" id="phone" style="color: rgb(187, 187, 187);">
                                    </dd>
                                </dl>
                                <div class="code-div">
                                    <dl>
                                        <dt>验证码：</dt>
                                        <dd>
                                            <input placeholder="请输入验证码" type="text" name="captcha" class="text w100"
                                                   id="image_captcha" size="10" style="color: rgb(187, 187, 187);">
                                        </dd>
                                    </dl>
                                    <span><img src="{{url('api/getCaptcha')}}" name="codeimage" id="sms_codeimage">
                                        <a id="makecode" class="makecode">看不清，换一张</a></span>
                                </div>
                                <div class="tiptext" id="sms_text">确保上方验证码输入正确，点击<span>
                                        <a id="note" href="javascript:void(0);">
                                            <i class="icon-mobile-phone"></i>发送短信验证</a>
                                    </span>，并将您手机短信所接收到的“6位动态码”输入到下方短信验证，再提交下一步。
                                </div>
                                <dl>
                                    <dt>短信验证：</dt>
                                    <dd>
                                        <input type="text" name="sms_captcha" autocomplete="off"
                                               placeholder="输入6位短信验证码" class="text" id="sms_captcha" size="15"
                                               style="color: rgb(187, 187, 187);">
                                    </dd>
                                </dl>
                                <div class="submit-div">
                                    <input type="submit" id="submitBtn" class="submit" value="下一步">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="reister-after">
                    <h4>注册之后您可以</h4>
                    <ol>
                        <li class="ico01"><i></i>购买商品支付订单</li>
                        <li class="ico02"><i></i>收藏商品关注店铺</li>
                        <li class="ico03"><i></i>安全交易诚信无忧</li>
                        <li class="ico04"><i></i>积分获取优惠购物</li>
                        <li class="ico05"><i></i>会员等级享受特权</li>
                        <li class="ico06"><i></i>评价晒单站外分享</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="faq">
    <div class="faq-wrapper">
        <ul>
            <li>
                <dl class="s1">
                    <dt>
                        帮助中心
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=10"
                                  title="查看已购买商品"> 查看已购买商品 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=7"
                                  title="如何搜索"> 如何搜索 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=40"
                                  title="积分兑换说明"> 积分兑换说明 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=9"
                                  title="我要买"> 我要买 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=6"
                                  title="如何注册成为会员"> 如何注册成为会员 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s2">
                    <dt>
                        店主之家
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=11"
                                  title="如何管理店铺"> 如何管理店铺 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=13"
                                  title="如何发货"> 如何发货 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=15"
                                  title="如何申请开店"> 如何申请开店 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=12"
                                  title="查看售出商品"> 查看售出商品 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=14"
                                  title="商城商品推荐"> 商城商品推荐 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s3">
                    <dt>
                        支付方式
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=29"
                                  title="邮局汇款"> 邮局汇款 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=16"
                                  title="如何注册支付宝"> 如何注册支付宝 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=28"
                                  title="分期付款"> 分期付款 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=30"
                                  title="公司转账"> 公司转账 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=17"
                                  title="在线支付"> 在线支付 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s4">
                    <dt>
                        售后服务
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=33"
                                  title="返修/退换货"> 返修/退换货 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=26"
                                  title="联系卖家"> 联系卖家 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=32"
                                  title="退换货流程"> 退换货流程 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=34"
                                  title="退款申请"> 退款申请 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=31"
                                  title="退换货政策"> 退换货政策 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s5">
                    <dt>
                        客服中心
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=19"
                                  title="会员修改个人资料"> 会员修改个人资料 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=21"
                                  title="修改收货地址"> 修改收货地址 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=18"
                                  title="会员修改密码"> 会员修改密码 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=20"
                                  title="商品发布"> 商品发布 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s6">
                    <dt>
                        关于我们
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=24"
                                  title="招聘英才"> 招聘英才 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=23"
                                  title="联系我们"> 联系我们 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=25"
                                  title="合作及洽谈"> 合作及洽谈 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&amp;op=show&amp;article_id=22"
                                  title="关于我们"> 关于我们 </a></dd>
                </dl>
            </li>
        </ul>
        <div class="help">
            <div class="w1190 clearfix">
                <div class="contact f-l">
                    <div class="contact-border clearfix">
                        <span class="ic tel t20">4008008000</span>
                        <span class="ic mail">abc@33hao.com</span>
                        <div class="attention cleafix">
                            <div class="weixin f-l">
                                <img src="/css/04781087584534013.png" class="f-l jImg img-error">
                                <p class="f-l">
                                    <span>扫一扫</span>
                                    <span>关注我们</span>
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
    <p><a href="http://localhost/v4/shop">首页</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=24">招聘英才</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=25">合作及洽谈</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=23">联系我们</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=22">关于我们</a>
        | <a href="http://localhost/delivery">物流自取</a>
        | <a href="http://localhost/index.php?act=link">友情链接</a>
    </p>
    Copyright 2015 <a href="http://bbs.33hao.com/" target="_blank">好商城</a> All rights reserved.<br>本演示来源于<a
            href="http://33haocom.taobao.com/" target="_blank">bbs.33hao.com</a><br></div>

<script src="/js/jquery.js"></script>
<script src="/js/jquery.validation.min.js"></script>
<script src="/js/layer-v3.1.1/layer.js"></script>
<script type="text/javascript">
    jQuery.validator.addMethod('mobile', function (value, element) {
        var tel = /^1[34578]\d{9}$/;
        return this.optional(element) || (tel.test(value));
    }, '请输入11位正确手机号码');
    $('#post_form').validate({
        submitHandler: function (from) {
            $.ajax({
                type: 'post',
                data: {'mobile': $('#phone').val(), 'code': $('#sms_captcha').val()},
                dataType: 'json',
                url: "{{url('api/user/newUser')}}",
                success: function (data) {
                    if (data.message == 'success') {
                        layer.msg('注册成功')
                    } else {
                        layer.msg(data.data);
                    }
                },
                error: function () {

                }
            })
        },
        errorPlacement: function (error, element) {
            var error_td = element.parent('dd');
            error_td.append(error);
            element.parents('dl:first').addClass('error');
        },
        success: function (label) {
            label.parents('dl:first').removeClass('error').find('label').remove();
        },
        rules: {
            phone: {
                required: true,
                mobile: true,
                remote: {
                    url: '{{url('api/user/existMobile')}}',
                    type: 'post',
                    data: {
                        'mobile': function () {
                            return $('#phone').val();
                        }
                    }
                }
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
                        },
                        mobile: function () {
                            return $('#phone').val()
                        }
                    },
                    complete: function (data) {
                        if (data.responseText == 'false') {
                            document.getElementById('sms_codeimage').src = '{{url('api/getCaptcha')}}?id=' + Math.random();
                        }
                    }
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
                        code: function () {
                            return $('#sms_captcha').val();
                        },
                        mobile: function () {
                            return $('#phone').val();
                        }
                    }
                }
            }
        },
        messages: {
            phone: {
                required: '<i class="icon-exclamation-sign"></i>输入正确的手机号',
                mobile: '<i class="icon-exclamation-sign"></i>输入正确的手机号',
                remote: '<i class="icon-exclamation-sign"></i>该账号已存在'
            },
            captcha: {
                required: '<i class="icon-remove-circle" title="请输入验证码"></i>',
                minlength: '<i class="icon-remove-circle" title="请输入验证码"></i>',
                remote: '<i class="icon-remove-circle" title="验证码不正确"></i>'
            },
            sms_captcha: {
                required: '<i class="icon-exclamation-sign"></i>请输入六位短信动态码',
                minlength: '<i class="icon-exclamation-sign"></i>请输入六位短信动态码',
                remote: '<i class="icon-exclamation-sign"></i>短信验证码错误'
            }
        }
    });
    $('#note').click(function () {
        $.ajax({
            type: 'post',
            data: {'mobile': $('#phone').val()},
            dataType: 'json',
            url: '{{url('api/interface/seedNoteValidate')}}',
            success: function (data) {

            },
            error: function () {
            }
        });

    });
    $('#makecode').click(function () {
        $('#sms_codeimage').attr('src', '{{url('api/getCaptcha')}}?id=' + Math.random())
    });
</script>
</body>
</html>