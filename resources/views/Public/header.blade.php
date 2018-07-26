<!DOCTYPE html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>好商城V4</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="keywords" content="好商城V4">
    <meta name="description" content="好商城V4">
    <link rel="shortcut icon" href="http://127.0.0.1/v4/favicon.ico">
    <link href="/css/base.css" rel="stylesheet" type="text/css">
    <link href="/css/home_header.css" rel="stylesheet" type="text/css">
    @yield('css')
</head>
<body>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="vToolbar" class="nc-appbar">
    <div class="nc-appbar-tabs" id="appBarTabs">
        <div class="user TA_delay" nctype="a-barUserInfo">
            <div class="avatar"><img src="{{session('user_images','/images/04781087584534013.png')}}"></div>
            <p>我</p>
        </div>
        <div class="user-info" nctype="barUserInfo" style="display:none;"><i class="arrow"></i>
            <div class="avatar"><img src="{{session('user_images','/images/04781087584534013.png')}}">
                <div class="frame"></div>
            </div>
            <dl>
                <dt>Hi, admin</dt>
                <dd>当前等级：<strong nctype="barMemberGrade">V0</strong></dd>
                <dd>当前经验值：<strong nctype="barMemberExp">5</strong></dd>
            </dl>
        </div>
        <ul class="tools">
            <li><a href="javascript:void(0);" id="chat_show_user" class="chat TA_delay">
                    <div class="tools_img TA"></div>
                    <span class="TA">聊天</span><i id="new_msg" class="new_msg" style="display:none;"></i></a></li>
            <li><a href="javascript:void(0);" id="rtoolbar_cart" class="cart TA_delay">
                    <div class="tools_img TA"></div>
                    <span class="TA">购物车</span><i id="rtoobar_cart_count" class="new_msg" style="display:none;"></i></a>
            </li>
            <li><a href="javascript:void(0);" id="compare" class="compare TA_delay">
                    <div class="tools_img TA"></div>
                    <span class="TA">对比</span></a></li>
            <li><a href="javascript:void(0);" id="gotop" class="gotop TA_delay">
                    <div class="tools_img TA"></div>
                    <span class="TA">顶部</span></a></li>
        </ul>
        <div class="content-box" id="content-compare">
            <div class="top">
                <h3>商品对比</h3>
                <a href="javascript:void(0);" class="close" title="隐藏"></a></div>
            <div id="comparelist"></div>
        </div>
        <div class="content-box" id="content-cart">
            <div class="top">
                <h3>我的购物车</h3>
                <a href="javascript:void(0);" class="close" title="隐藏"></a></div>
            <div id="rtoolbar_cartlist"></div>
        </div>
        <a id="activator" href="javascript:void(0);" class="nc-appbar-hide TA"></a></div>
    <div class="nc-hidebar" id="ncHideBar">
        <div class="nc-hidebar-bg">
            <div class="user-avatar"><img src="/images/default_user_portrait.gif"></div>
            <div class="frame"></div>
            <div class="show"></div>
        </div>
    </div>
</div>
<div class="public-top-layout w">
    <div class="topbar wrapper">
        <div class="user-entry">
            您好 <span>
      <a href="http://127.0.0.1/v4/shop/index.php?act=member&amp;op=home">admin</a>
            <div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go(&#39;http://127.0.0.1/v4/shop/index.php?act=pointgrade&amp;op=index&#39;);">
                V0
            </div>
            </span> 欢迎回来，<a href="http://127.0.0.1/v4" title="首页" alt="首页"><span>好商城V4</span></a>
            <span>[<a href="http://127.0.0.1/v4/shop/index.php?act=login&amp;op=logout">退出</a>] </span>
        </div>
        <div class="quick-menu">
            <dl class="invite">
                <dt><a href="http://127.0.0.1/v4/index.php?act=invite"><span>邀请返利</span></a></dt>
            </dl>
            <dl class="down_app">
                <dt><em class="ico_tel"></em><a href="http://127.0.0.1/v4/wap">手机移动端</a><i></i></dt>
                <dd>
                    <div class="qrcode"><img src="/images/mb_app.png"></div>
                    <div class="hint">
                        <h4>扫描二维码</h4>
                        下载手机客户端
                    </div>
                    <div class="addurl">
                        <a href="http://v3.33hao.com/app.apk" target="_blank"><i class="icon-android"></i>Android</a>
                        <a href="http://v3.33hao.com/app.ipa" target="_blank"><i class="icon-apple"></i>iPhone</a>
                    </div>
                </dd>
            </dl>
            <dl>
                <dt>
                    <em class="ico_shop"></em><a href="http://127.0.0.1/v4/shop/index.php?act=show_joinin&amp;op=index" title="商家管理">商家管理</a><i></i>
                </dt>
                <dd>
                    <ul>
                        <li>
                            <a href="http://127.0.0.1/v4/shop/index.php?act=show_joinin&amp;op=index" title="招商入驻">招商入驻</a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1/v4/shop/index.php?act=seller_login&amp;op=show_login" target="_blank" title="登录商家管理中心">商家登录</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="">
                <dt>
                    <em class="ico_order"></em><a href="http://127.0.0.1/v4/shop/index.php?act=member_order">我的订单</a><i></i>
                </dt>
                <dd>
                    <ul>
                        <li>
                            <a href="http://127.0.0.1/v4/shop/index.php?act=member_order&amp;state_type=state_new">待付款订单</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_order&amp;state_type=state_send">待确认收货</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_order&amp;state_type=state_noeval">待评价交易</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="">
                <dt>
                    <em class="ico_store"></em><a href="http://127.0.0.1/v4/shop/index.php?act=member_favorites&amp;op=fglist">我的收藏</a><i></i>
                </dt>
                <dd>
                    <ul>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_favorites&amp;op=fglist">商品收藏</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_favorites&amp;op=fslist">店铺收藏</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="">
                <dt><em class="ico_service"></em>客户服务<i></i></dt>
                <dd>
                    <ul>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=article&amp;ac_id=2">帮助中心</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=article&amp;ac_id=5">售后服务</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=article&amp;ac_id=6">客服中心</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="weixin">
                <dt>关注我们<i></i></dt>
                <dd>
                    <h4>扫描二维码<br>
                        关注商城微信号</h4>
                    <img src="/images/04781087584534013.png"></dd>
            </dl>
        </div>
    </div>
</div>
<div class="wrapper" id="top-banner">
    <a href="javascript:void(0);" title="关闭"></a>
    <a href="http://www.33hao.com/" target="_blank" title="好商城V3"><img style="width:1200px;height:90px" border="0" src="/images/04891676111561966.png" alt="好商城V3"></a>
</div>
<div class="header-wrap">
    <header class="public-head-layout wrapper">
        <h1 class="site-logo"><a href="http://127.0.0.1/v4"><img src="/images/logo.png" class="pngFix"></a></h1>
        <div class="site-ad">
            <a href="http://127.0.0.1/v4/shop/index.php?act=member_information&amp;op=member" title="顶部logo边广告"><img style="width:100px;height:70px" border="0" src="/images/05048168915006375.gif" alt=""></a>
        </div>
        <div class="head-search-bar">
            <div id="search">
                <ul class="tab">
                    <li act="store_list" class="current"><span>店铺</span><i class="arrow"></i></li>
                    <li act="store_list"><span>商品</span></li>
                </ul>
            </div>
            <form class="search-form" method="get" action="http://127.0.0.1/v4/shop">
                <input type="hidden" value="store_list" id="search_act" name="act">
                <input placeholder="请输入您要搜索的商品关键字" name="keyword" id="keyword" type="text" class="input-text" value="" maxlength="60" x-webkit-speech="" lang="zh-CN" onwebkitspeechchange="foo()" x-webkit-grammar="builtin:search">
                <input type="submit" id="button" value="搜索" class="input-submit">
            </form>
            <!--搜索关键字-->
            <div class="keyword">热门搜索：
                <ul>
                    <li>
                        <a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;keyword=%E5%A5%BD%E5%95%86%E5%9F%8EV3">好商城V3</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;keyword=%E5%86%85%E8%A1%A3">内衣</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;keyword=%E7%AC%94%E8%AE%B0%E6%9C%AC">笔记本</a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;keyword=%E6%89%8B%E6%9C%BA">手机</a>
                    </li>
                </ul>
            </div>

        </div>


        <div class="head-user-menu">
            <dl class="my-mall">
                <dt><span class="ico"></span>我的商城<i class="arrow"></i></dt>
                <dd>
                    <div class="sub-title">
                        <h4>admin
                            <div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go(&#39;http://127.0.0.1/v4/shop/index.php?act=pointgrade&amp;op=index&#39;);">
                                V0
                            </div>

                        </h4>
                        <a href="http://127.0.0.1/v4/shop/index.php?act=member&amp;op=home" class="arrow">我的用户中心<i></i></a>
                    </div>
                    <div class="user-centent-menu">
                        <ul>
                            <li>
                                <a href="http://127.0.0.1/v4/shop/index.php?act=member_message&amp;op=message">站内消息(<span>0</span>)</a>
                            </li>
                            <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_order" class="arrow">我的订单<i></i></a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1/v4/shop/index.php?act=member_consult&amp;op=my_consult">咨询回复(<span id="member_consult">0</span>)</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1/v4/shop/index.php?act=member_favorites&amp;op=fglist" class="arrow">我的收藏<i></i></a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1/v4/shop/index.php?act=member_voucher">代金券(<span id="member_voucher">0</span>)</a>
                            </li>
                            <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_points" class="arrow">我的积分<i></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="browse-history">
                        <div class="part-title">
                            <h4>最近浏览的商品</h4>
                            <span style="float:right;"><a href="http://127.0.0.1/v4/shop/index.php?act=member_goodsbrowse&amp;op=list">全部浏览历史</a></span>
                        </div>
                        <ul>
                            <li class="no-goods"><img class="loading" src="/images/loading.gif"></li>
                        </ul>
                    </div>
                </dd>
            </dl>
            <dl class="my-cart">
                <dt><span class="ico"></span>购物车结算<i class="arrow"></i></dt>
                <dd>
                    <div class="sub-title">
                        <h4>最新加入的商品</h4>
                    </div>
                    <div class="incart-goods-box">
                        <div class="incart-goods">
                            <div class="no-order"><span>您的购物车中暂无商品，赶快选择心爱的商品吧！</span></div>
                        </div>
                    </div>
                    <div class="checkout">
                        <span class="total-price"></span><a href="http://127.0.0.1/v4/shop/index.php?act=cart" class="btn-cart">结算购物车中的商品</a>
                    </div>
                </dd>
            </dl>
        </div>
    </header>
</div>
<nav class="public-nav-layout">
    <div class="wrapper">
        <div class="all-category">
            <div class="title"><i></i>
                <h3><a href="http://127.0.0.1/v4/shop/index.php?act=category&amp;op=index">所有分类</a></h3>
            </div>
            <div class="category">
                <ul class="menu">
                    @inject('menu','App\Models\ClassGood');
                    {!! $menu->getAllMenu() !!}
                </ul>
            </div>
        </div>
        <ul class="site-menu">
            <li><a href="http://127.0.0.1/v4">首页</a></li>
            <li><a href="http://127.0.0.1/v4/shop/index.php?act=show_groupbuy&amp;op=index"> 抢购</a></li>
            <li><a href="http://127.0.0.1/v4/shop/index.php?act=brand&amp;op=index"> 品牌</a></li>
            <li><a href="http://127.0.0.1/v4/shop/index.php?act=pointshop&amp;op=index"> 积分中心</a></li>
            <li><a href="http://127.0.0.1/v4/shop/index.php?act=special&amp;op=special_list"> 专题</a></li>
            <li><a href="http://127.0.0.1/v4/shop/index.php?act=store_list&amp;op=index"> 店铺</a></li>
            <li><a href="http://127.0.0.1/v4/shop/index.php?act=flea&amp;op=index"> 闲置</a></li>
            <li><a href="http://localhost/index.php?act=promotion&amp;op=index">疯抢</a></li>
            <li><a href="http://localhost/cms">门户</a></li>
            <li><a href="http://localhost/circle">圈子</a></li>
            <li><a href="http://localhost/microshop">微商城</a></li>
        </ul>
    </div>
</nav>
@yield('body')
<div id="faq">
    <div class="faq-wrapper">
        <ul>
            <li>
                <dl class="s1">
                    <dt>
                        帮助中心
                    </dt>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=10" title="查看已购买商品">
                            查看已购买商品 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=7" title="如何搜索">
                            如何搜索 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=40" title="积分兑换说明">
                            积分兑换说明 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=9" title="我要买">
                            我要买 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=6" title="如何注册成为会员">
                            如何注册成为会员 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s2">
                    <dt>
                        店主之家
                    </dt>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=11" title="如何管理店铺">
                            如何管理店铺 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=13" title="如何发货">
                            如何发货 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=15" title="如何申请开店">
                            如何申请开店 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=12" title="查看售出商品">
                            查看售出商品 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=14" title="商城商品推荐">
                            商城商品推荐 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s3">
                    <dt>
                        支付方式
                    </dt>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=29" title="邮局汇款">
                            邮局汇款 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=16" title="如何注册支付宝">
                            如何注册支付宝 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=28" title="分期付款">
                            分期付款 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=30" title="公司转账">
                            公司转账 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=17" title="在线支付">
                            在线支付 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s4">
                    <dt>
                        售后服务
                    </dt>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=33" title="返修/退换货">
                            返修/退换货 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=26" title="联系卖家">
                            联系卖家 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=32" title="退换货流程">
                            退换货流程 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=34" title="退款申请">
                            退款申请 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=31" title="退换货政策">
                            退换货政策 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s5">
                    <dt>
                        客服中心
                    </dt>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=19" title="会员修改个人资料">
                            会员修改个人资料 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=21" title="修改收货地址">
                            修改收货地址 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=18" title="会员修改密码">
                            会员修改密码 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=20" title="商品发布">
                            商品发布 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s6">
                    <dt>
                        关于我们
                    </dt>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=24" title="招聘英才">
                            招聘英才 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=23" title="联系我们">
                            联系我们 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=25" title="合作及洽谈">
                            合作及洽谈 </a></dd>
                    <dd>
                        <i></i><a href="http://127.0.0.1/v4/shop/index.php?act=article&amp;op=show&amp;article_id=22" title="关于我们">
                            关于我们 </a></dd>
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
                                <img src="/images/04781087584534013.png" class="f-l jImg img-error">
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
    <p><a href="http://127.0.0.1/v4/shop">首页</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=24">招聘英才</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=25">合作及洽谈</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=23">联系我们</a>
        | <a href="http://localhost/index.php?act=article&amp;article_id=22">关于我们</a>
        | <a href="http://localhost/delivery">物流自取</a>
        | <a href="http://localhost/index.php?act=link">友情链接</a>
    </p>
    Copyright 2015 <a href="http://bbs.33hao.com/" target="_blank">好商城</a> All rights
    reserved.<br>本演示来源于<a href="http://33haocom.taobao.com/" target="_blank">bbs.33hao.com</a><br></div>
<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
<script src="/js/jquery.js"></script>
<script src="/js/layer-v3.1.1/layer.js"></script>
@yield('jssrc')
<script type="text/javascript">
    backTop = function (btnId) {
        var btn = document.getElementById(btnId);
        var scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        window.onscroll = set;
        btn.onclick = function () {
            //btn.style.opacity="0.5";
            window.onscroll = null;
            this.timer = setInterval(function () {
                scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                scrollTop -= Math.ceil(scrollTop * 0.1);
                if (scrollTop == 0) clearInterval(btn.timer, window.onscroll = set);
                if (document.documentElement.scrollTop > 0) document.documentElement.scrollTop = scrollTop;
                if (document.body.scrollTop > 0) document.body.scrollTop = scrollTop;
            }, 10);
        };
        function set() {
            scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            //btn.style.opacity=scrollTop?'1':"0.5";
        }
    };
    backTop('gotop');
    var PRICE_FORMAT = '&yen;%s';
    $(function () {
        //首页左侧分类菜单
        $(".category ul.menu").find("li").each(
                function () {
                    $(this).hover(
                            function () {
                                var cat_id = $(this).attr("cat_id");
                                var menu = $(this).find("div[cat_menu_id='" + cat_id + "']");
                                menu.show();
                                $(this).addClass("hover");
                                var menu_height = menu.height();
                                if (menu_height < 60) menu.height(80);
                                menu_height = menu.height();
                                var li_top = $(this).position().top;
                                $(menu).css("top", -li_top + 38);
                            },
                            function () {
                                $(this).removeClass("hover");
                                var cat_id = $(this).attr("cat_id");
                                $(this).find("div[cat_menu_id='" + cat_id + "']").hide();
                            }
                    );
                }
        );
        $(".head-user-menu dl").hover(function () {
                    $(this).addClass("hover");
                },
                function () {
                    $(this).removeClass("hover");
                });
        $('.head-user-menu .my-mall').mouseover(function () {// 最近浏览的商品
            load_history_information();
            $(this).unbind('mouseover');
        });
        $('.head-user-menu .my-cart').mouseover(function () {// 运行加载购物车
            load_cart_information();
            $(this).unbind('mouseover');
        });
        $('#button').click(function () {
            if ($('#keyword').val() == '') {
                return false;
            }
        });
        $("#compare").click(function () {
            if ($("#content-compare").css('right') == '-250px') {
                loadCompare(false);
                $('#content-cart').animate({'right': '-250px'});
                $("#content-compare").animate({right: '0px'});
            } else {
                $(".close").click();
                $(".chat-list").css("display", 'none');
            }
        });
        $("#rtoolbar_cart").click(function () {
            if ($("#content-cart").css('right') == '-250px') {
                $('#content-compare').animate({'right': '-250px'});
                $("#content-cart").animate({right: '0px'});
                if (!$("#rtoolbar_cartlist").html()) {
                    $("#rtoolbar_cartlist").load('index.php?act=cart&op=ajax_load&type=html');
                }
            } else {
                $(".close").click();
                $(".chat-list").css("display", 'none');
            }
        });
        $(".close").click(function () {
            $(".content-box").animate({right: '-250px'});
        });

        $(".quick-menu dl").hover(function () {
                    $(this).addClass("hover");
                },
                function () {
                    $(this).removeClass("hover");
                });

        // 右侧bar用户信息
        $('div[nctype="a-barUserInfo"]').click(function () {
            $('div[nctype="barUserInfo"]').toggle();
        });
        // 右侧bar登录
        $('div[nctype="a-barLoginBox"]').click(function () {
            $('div[nctype="barLoginBox"]').toggle();
            document.getElementById('codeimage').src = 'http://127.0.0.1/v4/shop/index.php?act=seccode&op=makecode&nchash=5be0d100&t=' + Math.random();
        });
        $('a[nctype="close-barLoginBox"]').click(function () {
            $('div[nctype="barLoginBox"]').toggle();
        });
        $('#activator').click(function () {
            $('#content-cart').animate({'right': '-250px'});
            $('#content-compare').animate({'right': '-250px'});
            $('#vToolbar').animate({'right': '-60px'}, 300,
                    function () {
                        $('#ncHideBar').animate({'right': '59px'}, 300);
                    });
            $('div[nctype^="bar"]').hide();
        });
        $('#ncHideBar').click(function () {
            $('#ncHideBar').animate({'right': '-86px'}, 300, function () {
                $('#content-cart').animate({'right': '-250px'});
                $('#content-compare').animate({'right': '-250px'});
                $('#vToolbar').animate({'right': '6px'}, 300);
            });
        });
    });
</script>
@yield('js')
</body>
</html>