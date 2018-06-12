<!doctype html>
<html lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>好商城V4 - 程序来源于好商城V3-www.33hao.com</title>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="keywords" content="好商城V3,PHP商城系统,好商城V3商城系统,多用户商城系统,电商ERP,电商CRM,电子商务解决方案"/>
    <meta name="description"
          content="好商城V3专注于研发符合时代发展需要的电子商务商城系统，以专业化的服务水平为企业级用户提供B(2B)2C【B2B2C】电子商务平台解决方案，全力打造电商平台专项ERP(CRM)系统、ERP(RFID)系统等，引领中国电子商务行业企业级需求的发展方向。咨询电话：400-611-5098"/>
    <style type="text/css">
        body {
            _behavior: url(http://localhost/v4/shop/templates/default/css/csshover.htc);
        }
    </style>
    <link rel="shortcut icon" href="http://localhost/v4/favicon.ico"/>
    <link href="http://localhost/v4/shop/templates/default/css/base.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/v4/shop/templates/default/css/home_header.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/v4/shop/resource/font/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
    <!--[if IE 7]>
    <link rel="stylesheet" href="http://localhost/v4/shop/resource/font/font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="http://localhost/v4/data/resource/js/html5shiv.js"></script>
    <script src="http://localhost/v4/data/resource/js/respond.min.js"></script>
    <![endif]-->
    <!--[if IE 6]>
    <script src="http://localhost/v4/data/resource/js/IE6_PNG.js"></script>
    <script>
        DD_belatedPNG.fix('.pngFix');
    </script>
    <script>
        // <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
try{
document.execCommand("BackgroundImageCache", false, true);
   }
catch(e){}
// ]]>
</script>
<![endif]-->
    <script>
        var COOKIE_PRE = '3355_';
        var _CHARSET = 'utf-8';
        var SITEURL = 'http://localhost/v4/shop';
        var SHOP_SITE_URL = 'http://localhost/v4/shop';
        var RESOURCE_SITE_URL = 'http://localhost/v4/data/resource';
        var RESOURCE_SITE_URL = 'http://localhost/v4/data/resource';
        var SHOP_TEMPLATES_URL = 'http://localhost/v4/shop/templates/default';
    </script>
    <script src="http://localhost/v4/data/resource/js/jquery.js"></script>
    <script src="http://localhost/v4/data/resource/js/common.js" charset="utf-8"></script>
    <script src="http://localhost/v4/data/resource/js/jquery-ui/jquery.ui.js"></script>
    <script src="http://localhost/v4/data/resource/js/jquery.validation.min.js"></script>
    <script src="http://localhost/v4/data/resource/js/jquery.masonry.js"></script>
    <script src="http://localhost/v4/data/resource/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
    <script type="text/javascript">
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
        });
    </script>
</head>
<body>
<!-- PublicTopLayout Begin -->

<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div id="vToolbar" class="nc-appbar">
    <div class="nc-appbar-tabs" id="appBarTabs">
        <div class="user TA_delay" nctype="a-barUserInfo">
            <div class="avatar"><img src="http://localhost/v4/data/upload/shop/common/default_user_portrait.gif"/></div>
            <p>我</p>
        </div>
        <div class="user-info" nctype="barUserInfo" style="display:none;"><i class="arrow"></i>
            <div class="avatar"><img src="http://localhost/v4/data/upload/shop/common/default_user_portrait.gif"/>
                <div class="frame"></div>
            </div>
            <dl>
                <dt>Hi, admin</dt>
                <dd>当前等级：<strong nctype="barMemberGrade">V0</strong></dd>
                <dd>当前经验值：<strong nctype="barMemberExp">0</strong></dd>
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
            <div class="user-avatar"><img src="http://localhost/v4/data/upload/shop/common/default_user_portrait.gif"/>
            </div>
            <div class="frame"></div>
            <div class="show"></div>
        </div>
    </div>
</div>
<div class="public-top-layout w">
    <div class="topbar wrapper">
        <div class="user-entry">
            您好 <span>
      <a href="http://localhost/v4/shop/index.php?act=member&op=home">admin</a>
            <div class="nc-grade-mini" style="cursor:pointer;"
                 onclick="javascript:go('http://localhost/v4/shop/index.php?act=pointgrade&op=index');">V0
            </div>
            </span> 欢迎回来，<a href="http://localhost/v4" title="首页" alt="首页"><span>好商城V4</span></a> <span>[<a
                        href="http://localhost/v4/shop/index.php?act=login&op=logout">退出</a>] </span>
        </div>
        <div class="quick-menu">
            <dl class="invite">
                <dt><a href="http://localhost/v4/index.php?act=invite"><span>邀请返利</span></a></dt>
            </dl>
            <dl class="down_app">
                <dt><em class="ico_tel"></em><a href="http://localhost/v4/wap">手机移动端</a><i></i></dt>
                <dd>
                    <div class="qrcode"><img src="http://localhost/v4/data/upload/shop/common/mb_app.png"></div>
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
                <dt><em class="ico_shop"></em><a href="http://localhost/v4/shop/index.php?act=show_joinin&op=index"
                                                 title="商家管理">商家管理</a><i></i></dt>
                <dd>
                    <ul>
                        <li><a href="http://localhost/v4/shop/index.php?act=show_joinin&op=index" title="招商入驻">招商入驻</a>
                        </li>
                        <li><a href="http://localhost/v4/shop/index.php?act=seller_login&op=show_login" target="_blank"
                               title="登录商家管理中心">商家登录</a></li>
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt><em class="ico_order"></em><a
                            href="http://localhost/v4/shop/index.php?act=member_order">我的订单</a><i></i></dt>
                <dd>
                    <ul>
                        <li><a href="http://localhost/v4/shop/index.php?act=member_order&state_type=state_new">待付款订单</a>
                        </li>
                        <li>
                            <a href="http://localhost/v4/shop/index.php?act=member_order&state_type=state_send">待确认收货</a>
                        </li>
                        <li>
                            <a href="http://localhost/v4/shop/index.php?act=member_order&state_type=state_noeval">待评价交易</a>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt><em class="ico_store"></em><a
                            href="http://localhost/v4/shop/index.php?act=member_favorites&op=fglist">我的收藏</a><i></i>
                </dt>
                <dd>
                    <ul>
                        <li><a href="http://localhost/v4/shop/index.php?act=member_favorites&op=fglist">商品收藏</a></li>
                        <li><a href="http://localhost/v4/shop/index.php?act=member_favorites&op=fslist">店铺收藏</a></li>
                    </ul>
                </dd>
            </dl>
            <dl>
                <dt><em class="ico_service"></em>客户服务<i></i></dt>
                <dd>
                    <ul>
                        <li><a href="http://localhost/v4/shop/index.php?act=article&op=article&ac_id=2">帮助中心</a></li>
                        <li><a href="http://localhost/v4/shop/index.php?act=article&op=article&ac_id=5">售后服务</a></li>
                        <li><a href="http://localhost/v4/shop/index.php?act=article&op=article&ac_id=6">客服中心</a></li>
                    </ul>
                </dd>
            </dl>
            <dl class="weixin">
                <dt>关注我们<i></i></dt>
                <dd>
                    <h4>扫描二维码<br/>
                        关注商城微信号</h4>
                    <img src="http://localhost/v4/data/upload/shop/common/04781087584534013.png"></dd>
            </dl>
        </div>
    </div>
</div>
<script type="text/javascript">
    //返回顶部
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
    //动画显示边条内容区域
    $(function () {
        $(function () {
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
                $('#ncHideBar').animate({
                            'right': '-86px'
                        },
                        300,
                        function () {
                            $('#content-cart').animate({'right': '-250px'});
                            $('#content-compare').animate({'right': '-250px'});
                            $('#vToolbar').animate({'right': '6px'}, 300);
                        });
            });
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
            document.getElementById('codeimage').src = 'http://localhost/v4/shop/index.php?act=seccode&op=makecode&nchash=048f52b3&t=' + Math.random();
        });
        $('a[nctype="close-barLoginBox"]').click(function () {
            $('div[nctype="barLoginBox"]').toggle();
        });
    });
</script>
<!-- PublicHeadLayout Begin -->
<!-- 顶部广告展开效果-->
<div class="wrapper" id="top-banner">
    <a href="javascript:void(0);" title="关闭"></a>
    <a href='http://www.33hao.com' target='_blank' title='好商城V3'><img style='width:1200px;height:90px' border='0'
                                                                      src='http://localhost/v4/data/upload/shop/adv/04891676111561966.png'
                                                                      alt='好商城V3'/></a></div>
<!-- 顶部广告展开效果-->
<div class="header-wrap">
    <header class="public-head-layout wrapper">
        <h1 class="site-logo"><a href="http://localhost/v4"><img
                        src="http://localhost/v4/data/upload/shop/common/logo.png" class="pngFix"></a></h1>
        <div class="site-ad">
            <a href='' title='顶部logo边广告'><img style='width:100px;height:70px' border='0'
                                              src='http://localhost/v4/data/upload/shop/adv/05048168915006375.gif'
                                              alt=''/></a></div>
        <div class="head-search-bar">
            <div id="search">
                <ul class="tab">
                    <li act="search" class="current"><span>商品</span><i class="arrow"></i></li>
                    <li act="store_list"><span>店铺</span></li>
                </ul>
            </div>
            <form class="search-form" method="get" action="http://localhost/v4/shop">
                <input type="hidden" value="search" id="search_act" name="act">
                <input placeholder="请输入您要搜索的商品关键字" name="keyword" id="keyword" type="text" class="input-text" value=""
                       maxlength="60" x-webkit-speech lang="zh-CN" onwebkitspeechchange="foo()"
                       x-webkit-grammar="builtin:search"/>
                <input type="submit" id="button" value="搜索" class="input-submit">
            </form>
            <!--搜索关键字-->
            <div class="keyword">热门搜索：
                <ul>
                    <li>
                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&keyword=%E5%A5%BD%E5%95%86%E5%9F%8EV3">好商城V3</a>
                    </li>
                    <li>
                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&keyword=%E5%86%85%E8%A1%A3">内衣</a>
                    </li>
                    <li>
                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&keyword=%E7%AC%94%E8%AE%B0%E6%9C%AC">笔记本</a>
                    </li>
                    <li>
                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&keyword=%E6%89%8B%E6%9C%BA">手机</a>
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
                            <div class="nc-grade-mini" style="cursor:pointer;"
                                 onClick="javascript:go('http://localhost/v4/shop/index.php?act=pointgrade&op=index');">
                                V0
                            </div>

                        </h4>
                        <a href="http://localhost/v4/shop/index.php?act=member&op=home" class="arrow">我的用户中心<i></i></a>
                    </div>
                    <div class="user-centent-menu">
                        <ul>
                            <li>
                                <a href="http://localhost/v4/shop/index.php?act=member_message&op=message">站内消息(<span>0</span>)</a>
                            </li>
                            <li><a href="http://localhost/v4/shop/index.php?act=member_order" class="arrow">我的订单<i></i></a>
                            </li>
                            <li><a href="http://localhost/v4/shop/index.php?act=member_consult&op=my_consult">咨询回复(<span
                                            id="member_consult">0</span>)</a></li>
                            <li><a href="http://localhost/v4/shop/index.php?act=member_favorites&op=fglist"
                                   class="arrow">我的收藏<i></i></a></li>
                            <li><a href="http://localhost/v4/shop/index.php?act=member_voucher">代金券(<span
                                            id="member_voucher">0</span>)</a></li>
                            <li><a href="http://localhost/v4/shop/index.php?act=member_points" class="arrow">我的积分<i></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="browse-history">
                        <div class="part-title">
                            <h4>最近浏览的商品</h4>
                            <span style="float:right;"><a
                                        href="http://localhost/v4/shop/index.php?act=member_goodsbrowse&op=list">全部浏览历史</a></span>
                        </div>
                        <ul>
                            <li class="no-goods"><img class="loading"
                                                      src="http://localhost/v4/shop/templates/default/images/loading.gif"/>
                            </li>
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
                        <div class="incart-goods"><img class="loading"
                                                       src="http://localhost/v4/shop/templates/default/images/loading.gif"/>
                        </div>
                    </div>
                    <div class="checkout"><span class="total-price">共<i>0</i>种商品</span><a
                                href="http://localhost/v4/shop/index.php?act=cart" class="btn-cart">结算购物车中的商品</a></div>
                </dd>
            </dl>
        </div>
    </header>
</div>
<!-- PublicHeadLayout End -->

<!-- publicNavLayout Begin -->
<nav class="public-nav-layout">
    <div class="wrapper">
        <div class="all-category">
            <div class="title"><i></i>
                <h3><a href="http://localhost/v4/shop/index.php?act=category&op=index">所有分类</a></h3>
            </div>
            <div class="category">
                <ul class="menu">
                    <li cat_id="256" class="odd">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-256.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=256">数码办公</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="256">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=258">手机配件</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=264">手机电池</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=265">蓝牙耳机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=266">充电器/数据线</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=267">手机耳机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=268">手机贴膜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=269">手机存储卡</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=270">手机保护套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=271">车载配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=272">iPhone
                                            配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=273">创意配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=274">便携/无线音响</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=275">手机饰品</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=259">摄影摄像</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=276">数码相机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=277">单电/微单相机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=278">单反相机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=279">摄像机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=280">拍立得</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=281">镜头</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=260">数码配件</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=282">存储卡</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=283">读卡器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=284">滤镜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=285">闪光灯/手柄</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=286">相机包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=287">三脚架/云台</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=288">相机清洁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=289">相机贴膜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=290">机身附件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=291">镜头附件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=292">电池/充电器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=293">移动电源</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=261">时尚影音</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=294">MP3/MP4</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=295">智能设备</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=296">耳机/耳麦</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=297">音箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=298">高清播放器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=299">电子书</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=300">电子词典</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=301">MP3/MP4配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=302">录音笔</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=303">麦克风</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=304">专业音频</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=305">电子教育</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=306">数码相框</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=307">苹果配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=390">电脑整机</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=398">笔记本</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=399">超极本</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=400">游戏本</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=401">平板电脑</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=402">平板电脑配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=403">台式机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=404">服务器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=405">笔记本配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=391">电脑配件</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=406">CPU</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=407">主板</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=408">显卡</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=409">硬盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=410">SSD固态硬盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=411">内存</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=412">机箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=413">电源</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=414">显示器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=415">刻录机/光驱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=416">散热器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=417">声卡/扩展卡</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=418">装机配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=392">外设产品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=419">鼠标</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=420">键盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=421">移动硬盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=422">U盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=423">摄像头</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=424">外置盒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=425">游戏设备</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=426">电视盒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=427">手写板</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=428">鼠标垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=429">插座</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=430">UPS电源</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=431">线缆</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=432">电脑工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=433">电脑清洁</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=393">网络产品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=434">路由器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=435">网卡</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=436">交换机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=437">网络存储</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=438">3G上网</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=439">网络盒子</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=394">办公打印</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=440">打印机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=441">一体机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=442">投影机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=443">投影配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=444">传真机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=445">复合机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=446">碎纸机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=447">扫描仪</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=448">墨盒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=449">硒鼓</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=450">墨粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=451">色带</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=395">办公文仪</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=452">办公文具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=453">文件管理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=454">笔类</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=455">纸类</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=456">本册/便签</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=457">学生文具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=458">财务用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=459">计算器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=460">激光笔</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=461">白板/封装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=462">考勤机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=463">刻录碟片/附件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=464">点钞机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=465">支付设备/POS机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=466">安防监控</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=467">呼叫/会议设备</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=468">保险柜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=469">办公家具</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1034">手机通讯</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1035">手机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1036">对讲机</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="2" class="even">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img
                                        src="http://localhost/data/upload/shop/common/category-pic-2.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=2">礼品箱包</a></h4>
                        </div>
                        <div class="sub-class" cat_menu_id="2">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=151">潮流女包</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=156">钱包/卡包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=157">手拿包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=158">单肩包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=159">双肩包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=160">手提包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=161">斜挎包</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=152">时尚男包</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=162">钱包/卡包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=163">男士手包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=164">腰带／礼盒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=165">商务公文包</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=153">功能箱包</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=166">电脑数码包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=167">拉杆箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=168">旅行包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=169">旅行配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=170">休闲运动包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=171">登山包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=172">妈咪包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=173">书包</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=154">礼品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=174">火机烟具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=175">礼品文具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=176">瑞士军刀</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=177">收藏品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=178">工艺礼品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=179">创意礼品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=180">礼卡礼卷</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=181">鲜花速递</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=182">婚庆用品</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=155">奢侈品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=184">奢侈品箱包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=185">钱包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=186">服饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=187">腰带</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=188">太阳镜眼镜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=189">配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=190">GUCCI</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=191">PRADA</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=192">FENDI</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=193">BURBERRY</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=194">MONTBLANC</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=195">ARMANI</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=196">RIMOWA</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=197">RAY-BAN</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=198">COACH</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=199">更多品牌</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="3" class="odd">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img
                                        src="http://localhost/data/upload/shop/common/category-pic-3.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=3">家居家装</a></h4>
                        </div>
                        <div class="sub-class" cat_menu_id="3">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=200">家纺</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=206">床品件套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=207">被子</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=208">枕芯枕套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=209">床单被罩</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=210">毛巾被/毯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=211">床垫/床褥</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=212">蚊帐/凉席</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=213">抱枕坐垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=214">毛巾家纺</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=215">电热毯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=216">窗帘/窗纱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=217">酒店用品</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=201">灯具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=218">台灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=219">节能灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=220">装饰灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=221">落地灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=222">应急灯/手电</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=223">LED灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=224">吸顶灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=225">五金电器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=226">吊灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=227">氛围照明</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=202">生活日用</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=228">收纳用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=229">雨伞雨具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=230">浴室用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=231">缝纫用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=232">洗晒用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=233">净化除味</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=203">家装软饰</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=234">桌布/罩件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=235">地毯地垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=236">沙发垫套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=237">相框/相片墙</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=238">墙画墙贴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=239">节庆饰品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=240">手工/十字绣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=241">工艺摆件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=242">其他</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=204">清洁日用</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=243">纸品湿巾</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=244">衣物清洁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=245">清洁工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=246">驱虫用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=247">居室清洁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=248">皮具护理</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=205">宠物生活</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=249">宠物主粮</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=250">宠物零食</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=251">营养品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=252">家居日用</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=253">玩具服饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=254">出行装备</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=255">医护美容</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="1" class="even">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img
                                        src="http://localhost/data/upload/shop/common/category-pic-1.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1">服饰鞋帽</a></h4>
                        </div>
                        <div class="sub-class" cat_menu_id="1">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=4">女装</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=12">T恤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=13">衬衫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=14">针织衫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=15">雪纺衫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=16">卫衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=17">马甲</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=18">连衣裙</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=19">半身裙</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=20">牛仔裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=21">休闲裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=22">打底裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=23">正装裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=24">西服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=25">短外套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=26">风衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=27">大衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=28">皮衣皮草</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=29">棉服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=30">羽绒服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=31">孕妇装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=32">大码装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=33">中老年装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=34">婚纱礼服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1053">女装</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=5">男装</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=35">衬衫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=36">T恤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=37">POLO衫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=38">针织衫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=39">羊绒衫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=40">卫衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=41">马甲／背心</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=42">夹克</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=43">风衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=44">大衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=45">皮衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=46">外套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=47">西服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=48">棉服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=49">羽绒服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=50">牛仔裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=51">休闲裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=52">西裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=53">西服套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=54">大码装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=55">中老年装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=56">唐装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=57">工装</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=6">内衣</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=58">文胸</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=59">女式内裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=60">男式内裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=61">家居</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=62">睡衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=63">塑身衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=64">睡袍／浴袍</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=65">泳衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=66">背心</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=67">抹胸</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=68">连裤袜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=69">美腿袜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=70">男袜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=71">女袜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=72">情趣内衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=73">保暖内衣</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=7">运动</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=74">休闲鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=75">帆布鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=76">跑步鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=77">篮球鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=78">足球鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=79">训练鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=80">乒羽鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=81">拖鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=82">卫衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=83">夹克</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=84">T恤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=85">棉服／羽绒服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=86">运动裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=87">套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=88">运动包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=89">运动配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=8">女鞋</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=90">平底鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=91">高跟鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=92">单鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=93">休闲鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=94">凉鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=95">女靴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=96">雪地靴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=97">拖鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=98">裸靴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=99">筒靴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=100">帆布鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=101">雨鞋／雨靴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=102">妈妈鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=103">鞋配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=104">特色鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=105">鱼嘴鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=106">布鞋／绣花鞋</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=9">男鞋</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=107">商务休闲鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=108">正装鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=109">休闲鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=110">凉鞋／沙滩鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=111">男靴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=112">功能鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=113">拖鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=114">传统布鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=115">鞋配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=116">帆布鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=117">豆豆鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=118">驾车鞋</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=10">配饰</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=119">太阳镜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=120">框镜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=121">皮带</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=122">围巾</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=123">手套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=124">帽子</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=125">领带</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=126">袖扣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=127">其他配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=128">丝巾</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=129">披肩</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=130">腰带</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=131">腰链／腰封</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=132">棒球帽</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=133">毛线</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=134">遮阳帽</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=135">防紫外线手套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=136">草帽</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=11">童装</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=137">套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=138">上衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=139">裤子</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=140">裙子</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=141">内衣／家居服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=142">羽绒服／棉服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=143">亲子装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=144">儿童配饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=145">礼服／演出服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=146">运动鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=147">单鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=148">靴子</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=149">凉鞋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=150">功能鞋</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="308" class="odd">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-308.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=308">家用电器</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="308">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=309">大家电</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=314">平板电视</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=315">空调</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=316">冰箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=317">洗衣机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=318">家庭影院</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=319">DVD播放机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=320">迷你音响</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=321">烟机/灶具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=322">热水器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=323">消毒柜/洗碗机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=324">酒柜/冰吧/冷柜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=325">家电配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=310">生活电器</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=326">净化器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=327">电风扇</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=328">吸尘器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=329">加湿器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=330">净水设备</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=331">饮水机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=332">冷风扇</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=333">挂烫机/熨斗</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=334">电话机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=335">插座</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=336">收录/音机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=337">除湿/干衣机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=338">清洁机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=339">取暖电器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=340">其它生活电器</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=311">厨房电器</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=341">料理/榨汁机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=342">豆浆机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=343">电饭煲</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=344">电压力锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=345">面包机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=346">咖啡机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=347">微波炉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=348">电烤箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=349">电磁炉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=350">电饼铛/烧烤盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=351">煮蛋器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=352">酸奶机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=353">电炖锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=354">电水壶/热水瓶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=355">多用途锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=356">果蔬解毒机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=357">其它厨房电器</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=312">个护健康</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=358">剃须刀</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=359">剃/脱毛器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=360">口腔护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=361">电吹风</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=362">美容器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=363">美发器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=364">按摩椅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=365">按摩器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=366">足浴盆</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=367">血压计</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=368">健康秤/厨房秤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=369">血糖仪</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=370">体温计</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=371">计步器/脂肪检测仪</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=372">其它健康电器</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=313">五金家装</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=373">电动工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=374">手动工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=375">仪器仪表</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=376">浴霸/排气扇</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=377">灯具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=378">LED灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=379">洁身器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=380">水槽</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=381">龙头</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=382">淋浴花洒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=383">厨卫五金</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=384">家具五金</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=385">门铃</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=386">电气开关</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=387">插座</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=388">电工电料</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=389">监控安防</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="470" class="even">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-470.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=470">个护化妆</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="470">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=471">面部护理</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=478">洁面乳</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=479">爽肤水</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=480">精华露</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=481">乳液面霜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=482">面膜面贴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=483">眼部护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=484">颈部护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=485">T区护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=486">护肤套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=487">防晒隔离</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=472">身体护理</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=488">洗发护发</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=489">染发/造型</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=490">沐浴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=491">磨砂/浴盐</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=492">身体乳</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=493">手工/香皂</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=494">香薰精油</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=495">纤体瘦身</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=496">脱毛膏</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=497">手足护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=498">洗护套装</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=473">口腔护理</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=499">牙膏/牙粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=500">牙刷/牙线</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=501">漱口水</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=474">女性护理</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=502">卫生巾</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=503">卫生护垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=504">洗液</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=505">美容食品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=506">其他</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=475">男士护理</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=507">脸部护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=508">眼部护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=509">身体护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=510">男士香水</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=511">剃须护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=512">防脱洗护</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=513">男士唇膏</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=476">魅力彩妆</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=514">粉底/遮瑕</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=515">腮红</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=516">眼影/眼线</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=517">眉笔</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=518">睫毛膏</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=519">唇膏唇彩</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=520">彩妆组合</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=521">卸妆</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=522">美甲</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=523">彩妆工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=524">假发</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=477">香水SPA</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=525">女士香水</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=526">男士香水</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=527">组合套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=528">迷你香水</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=529">香体走珠</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="593" class="odd">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-593.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=593">食品饮料</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="593">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=594">进口食品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=604">饼干蛋糕</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=605">糖果巧克力</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=606">休闲零食</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=607">冲调饮品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=608">粮油调味</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=595">地方特产</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=609">华北</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=610">西北</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=611">西南</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=612">东北</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=613">华南</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=614">华东</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=615">华中</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=596">休闲食品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=616">休闲零食</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=617">坚果炒货</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=618">肉干肉松</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=619">蜜饯果脯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=620">糖果/巧克力</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=621">饼干蛋糕</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=597">粮油调味</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=622">米面杂粮</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=623">食用油</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=624">调味品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=625">南北干货</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=626">方便食品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=627">有机食品</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=598">中外名酒</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=628">白酒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=629">洋酒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=630">葡萄酒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=631">啤酒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=632">黄酒</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=599">饮料冲调</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=633">水</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=634">饮料</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=635">牛奶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=636">茶叶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=637">咖啡/奶茶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=638">冲饮谷物</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=600">营养健康</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=639">基础营养</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=640">美体养颜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=641">滋补调养</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=642">骨骼健康</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=643">保健茶饮</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=644">成分保健</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=645">无糖食品</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=601">亚健康调理</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=646">调节三高</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=647">心脑养护</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=648">改善睡眠</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=649">肝肾养护</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=650">免疫调节</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=651">更多调理</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=602">健康礼品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=652">参茸礼品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=653">更多礼品</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=603">生鲜食品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=654">水果</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=655">蔬菜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=656">海鲜水产</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=657">禽蛋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=658">鲜肉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=659">加工类肉食</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=660">冻品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=661">半成品</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="888" class="even">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-888.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=888">厨房餐饮</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="888">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=889">烹饪锅具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=895">炒锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=896">煎锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=897">压力锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=898">蒸锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=899">汤锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=900">奶锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=901">套锅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=902">煲类</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=903">水壶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=904">厨用杂件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=890">刀剪菜板</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=905">单刀</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=906">剪刀</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=907">套刀</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=908">砧板</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=909">刀具配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=891">收纳保鲜</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=910">保鲜盒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=911">保鲜膜/袋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=912">调料器皿</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=913">饭盒/提锅</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=892">水具酒具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=914">塑料杯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=915">运动水壶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=916">玻璃杯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=917">陶瓷杯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=918">保温杯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=919">保温壶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=920">酒杯/套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=921">酒具配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=893">餐具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=922">餐具套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=923">碗/碟/盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=924">筷勺/刀叉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=925">一次性餐具</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=935">茶具/咖啡具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=936">整套茶具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=937">茶杯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=938">茶壶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=939">茶盘茶托</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=940">茶叶罐</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=941">茶具配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=942">茶宠摆件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=943">咖啡具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=944">其他</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="530" class="odd">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-530.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=530">珠宝手表</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="530">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=531">时尚饰品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=541">项链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=542">手链/脚链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=543">戒指</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=544">耳饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=545">头饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=546">胸针</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=547">婚庆饰品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=548">饰品配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=532">纯金K金饰品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=549">吊坠/项链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=550">手镯/手链/脚链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=551">戒指</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=552">耳饰</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=533">金银投资</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=553">工艺金</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=554">工艺银</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=534">银饰</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=555">吊坠/项链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=556">手镯/手链/脚链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=557">戒指/耳饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=558">宝宝金银</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=559">千足银</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=535">钻石饰品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=560">裸钻</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=561">戒指</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=563">项链/吊坠</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=564">耳饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=565">手镯/手链</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=536">翡翠玉石</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=566">项链/吊坠</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=567">手镯/手串</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=568">戒指</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=569">耳饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=570">挂件/摆件/把件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=571">高值收藏</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=537">水晶玛瑙</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=572">耳饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=573">手镯/手链/脚链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=574">戒指</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=575">头饰/胸针</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=576">摆件/挂件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=538">宝石珍珠</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=577">项链/吊坠</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=578">耳饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=579">手镯/手链</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=580">戒指</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=539">婚庆</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=581">婚嫁首饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=582">婚纱摄影</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=583">婚纱礼服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=584">婚庆服务</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=585">婚庆礼品/用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=586">婚宴</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=540">钟表手表</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=587">瑞士品牌</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=588">国产品牌</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=589">日本品牌</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=590">时尚品牌</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=591">闹钟挂钟</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=592">儿童手表</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="662" class="even">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-662.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=662">运动健康</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="662">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=663">户外鞋服</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=671">户外服装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=672">户外鞋袜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=673">户外配饰</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=664">户外装备</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=674">帐篷</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=675">睡袋</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=676">登山攀岩</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=677">户外背包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=678">户外照明</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=679">户外垫子</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=680">户外仪表</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=681">户外工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=682">望远镜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=683">垂钓用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=684">旅游用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=685">便携桌椅床</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=686">烧烤用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=687">野餐炊具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=688">军迷用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=689">游泳用具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=690">泳衣</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=665">运动器械</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=691">健身器械</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=692">运动器材</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=693">极限轮滑</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=694">骑行运动</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=695">运动护具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=696">武术搏击</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=666">纤体瑜伽</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=697">瑜伽垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=698">瑜伽服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=699">瑜伽配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=700">瑜伽套装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=701">舞蹈鞋服</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=667">体育娱乐</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=702">羽毛球</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=703">乒乓球</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=704">篮球</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=705">足球</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=706">网球</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=707">排球</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=708">高尔夫球</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=709">棋牌麻将</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=710">其他</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=668">成人用品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=711">安全避孕</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=712">验孕测孕</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=713">人体润滑</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=714">情爱玩具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=715">情趣内衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=716">组合套装</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=669">保健器械</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=717">养生器械</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=718">保健用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=719">康复辅助</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=720">家庭护理</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=670">急救卫生</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=721">跌打损伤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=722">烫伤止痒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=723">防裂抗冻</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=724">口腔咽部</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=725">眼部保健</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=726">鼻炎健康</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=727">风湿骨痛</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=728">生殖泌尿</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=729">美体塑身</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="730" class="odd">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-730.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=730">汽车用品</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="730">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=731">电子电器</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=738">便携GPS导航</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=739">嵌入式导航</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=740">安全预警仪</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=741">行车记录仪</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=742">跟踪防盗器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=743">倒车雷达</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=744">车载电源</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=745">车载蓝牙</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=746">车载影音</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=747">车载净化器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=748">车载冰箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=749">车载吸尘器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=750">充气泵</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=751">胎压监测</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=752">车载生活电器</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=732">系统养护</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=753">机油</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=754">添加剂</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=755">防冻冷却液</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=756">附属油</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=757">底盘装甲</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=758">空调清洗剂</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=759">金属养护</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=733">改装配件</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=760">雨刷</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=761">车灯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=762">轮胎</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=763">贴膜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=764">装饰贴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=765">后视镜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=766">机油滤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=767">空气滤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=768">空调滤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=769">燃油滤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=770">火花塞</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=771">喇叭</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=772">刹车片</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=773">刹车盘</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=774">减震器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=775">车身装饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=776">尾喉/排气管</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=777">踏板</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=778">蓄电池</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=779">其他配件</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=734">汽车美容</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=780">漆面美容</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=781">漆面修复</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=782">内饰清洁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=783">玻璃美容</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=784">补漆笔</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=785">轮胎轮毂清洗</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=786">洗车器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=787">洗车水枪</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=788">洗车配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=789">洗车液</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=790">车掸</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=791">擦车巾/海绵</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=735">座垫脚垫</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=792">凉垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=793">四季垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=794">毛垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=795">专车专用座垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=796">专车专用座套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=797">通用座套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=798">多功能垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=799">专车专用脚垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=800">通用脚垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=801">后备箱垫</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=736">内饰精品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=802">车用香水</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=803">车用炭包</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=804">空气净化</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=805">颈枕/头枕</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=806">抱枕/腰靠</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=807">方向盘套</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=808">挂件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=809">摆件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=810">布艺软饰</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=811">功能用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=812">整理收纳</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=813">CD夹</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=737">安全自驾</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=814">儿童安全座椅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=815">应急救援</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=816">汽修工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=817">自驾野营</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=818">自驾照明</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=819">保温箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=820">置物箱</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=821">车衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=822">遮阳挡雪挡</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=823">车锁地锁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=824">摩托车装备</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1054">整车</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1055">新车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1056">二手车</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="825" class="even" style="display:none;">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-825.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=825">玩具乐器</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="825">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=826">适用年龄</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=838">0-6个月</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=839">6-12个月</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=840">1-3岁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=841">3-6岁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=842">6-14岁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=843">14岁以上</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=827">遥控/电动</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=844">遥控车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=845">遥控飞机</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=846">遥控船</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=847">机器人/电动</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=848">轨道/助力</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=828">毛绒布艺</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=849">毛绒/布艺</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=850">靠垫/抱枕</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=829">娃娃玩具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=851">芭比娃娃</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=852">卡通娃娃</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=853">智能娃娃</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=830">模型玩具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=854">仿真模型</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=855">拼插模型</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=856">收藏爱好</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=831">健身玩具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=857">炫舞毯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=858">爬行垫/毯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=859">户外玩具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=860">戏水玩具</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=832">动漫玩具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=861">电影周边</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=862">卡通周边</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=863">网游周边</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=833">益智玩具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=864">摇铃/床铃</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=865">健身架</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=866">早教启智</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=867">拖拉玩具</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=834">积木拼插</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=868">积木</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=869">拼图</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=870">磁力棒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=871">立体拼插</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=835">DIY玩具</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=872">手工彩泥</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=873">绘画工具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=874">情景玩具</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=836">创意减压</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=875">减压玩具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=876">创意玩具</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=837">乐器相关</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=877">钢琴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=878">电子琴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=879">手风琴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=880">吉他/贝斯</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=881">民族管弦乐器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=882">西洋管弦乐</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=883">口琴/口风琴/竖笛</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=884">西洋打击乐器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=885">各式乐器配件</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=886">电脑音乐</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=887">工艺礼品乐器</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="959" class="odd" style="display:none;">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-959.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=959">母婴用品</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="959">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=960">奶粉</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=968">品牌奶粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=969">妈妈奶粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=970">1段奶粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=971">2段奶粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=972">3段奶粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=973">4段奶粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=974">羊奶粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=975">特殊配方</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=976">成人奶粉</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=961">营养辅食</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=977">婴幼营养</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=978">初乳</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=979">米粉/菜粉</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=980">果泥/果汁</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=981">肉松/饼干</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=982">辅食</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=983">孕期营养</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=984">清火/开胃</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=985">面条/粥</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=962">尿裤湿巾</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=986">品牌尿裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=987">新生儿</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=988">S号</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=989">M号</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=990">L号</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=991">XL/XXL号</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=992">裤型尿裤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=993">湿巾</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=994">尿布/尿垫</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=995">成人尿裤</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=963">喂养用品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=996">奶瓶</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=997">奶嘴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=998">吸奶器</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=999">暖奶/消毒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1000">餐具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1001">水具</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1002">牙胶/安抚</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1003">辅助用品</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=964">洗护用品</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1004">宝宝护肤</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1005">洗浴用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1006">洗发沐浴</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1007">清洁用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1008">护理用品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1009">妈妈护肤</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=965">童车童床</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1010">婴儿推车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1011">餐椅摇椅</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1012">婴儿床</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1013">学步车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1014">三轮车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1015">自行车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1016">电动车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1017">健身车</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1018">安全座椅</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=966">服饰寝居</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1019">婴儿外出服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1020">婴儿内衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1021">婴儿礼盒</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1022">婴儿鞋帽袜</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1023">安全防护</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1024">家居床品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1025">其他</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=967">妈妈专区</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1026">包/背婴带</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1027">妈妈护理</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1028">产后塑身</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1029">孕妇内衣</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1030">防辐射服</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1031">孕妇装</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1032">孕妇食品</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1033">妈妈美容</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li cat_id="1037" class="even" style="display:none;">
                        <div class="class">
                            <span class="arrow"></span>
                            <span class="ico"><img src="http://localhost/data/upload/shop/common/category-pic-1037.jpg"></span>
                            <h4><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1037">虚拟充值</a>
                            </h4>
                        </div>
                        <div class="sub-class" cat_menu_id="1037">
                            <div class="sub-class-content">
                                <div class="recommend-class">
                                </div>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1041">充值</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1044">手机充值</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1042">游戏</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1045">游戏点卡</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1046">QQ充值</a>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>
                                    <h3>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1043">票务</a>
                                    </h3>
                                    </dt>
                                    <dd class="goods-class">
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1047">电影票</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1048">演唱会</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1049">话剧/歌剧/音乐剧</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1050">体育赛事</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1051">舞蹈芭蕾</a>
                                        <a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1052">戏曲综艺</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="sub-class-right">
                                <div class="adv-promotions">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <ul class="site-menu">
            <li><a href="http://localhost/v4" class="current">首页</a></li>
            <li><a href="http://localhost/v4/shop/index.php?act=show_groupbuy&op=index"> 抢购</a></li>
            <li><a href="http://localhost/v4/shop/index.php?act=brand&op=index"> 品牌</a></li>
            <li><a href="http://localhost/v4/shop/index.php?act=pointshop&op=index"> 积分中心</a></li>
            <li><a href="http://localhost/v4/shop/index.php?act=special&op=special_list"> 专题</a></li>
            <li><a href="http://localhost/v4/shop/index.php?act=store_list&op=index"> 店铺</a></li>
            <li><a href="http://localhost/v4/shop/index.php?act=flea&op=index"> 闲置</a></li>
            <li><a
                        href="http://localhost/index.php?act=promotion&op=index">疯抢</a></li>
            <li><a
                        href="http://localhost/cms">门户</a></li>
            <li><a
                        href="http://localhost/circle">圈子</a></li>
            <li><a
                        href="http://localhost/microshop">微商城</a></li>
        </ul>
    </div>
</nav>
<div class="nch-breadcrumb-layout">
</div>
<link href="http://localhost/v4/shop/templates/default/css/index.css" rel="stylesheet" type="text/css">
<script src="http://localhost/v4/data/resource/js/waypoints.js"></script>
<script type="text/javascript" src="http://localhost/v4/shop/resource/js/home_index.js" charset="utf-8"></script>
<!--[if IE 6]>
<script type="text/javascript" src="http://localhost/v4/data/resource/js/ie6.js" charset="utf-8"></script>
<![endif]-->
<style type="text/css">
    .category {
        display: block !important;
    }
</style>
<div class="clear"></div>

<!-- HomeFocusLayout Begin-->
<div class="home-focus-layout">
    <ul id="fullScreenSlides" class="full-screen-slides">
        <li style="background: #EDD9C0 url('http://localhost/v4/data/upload/shop/editor/web-101-101-1.png?177') no-repeat center top">
            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100" target="_blank"
               title="好商城">&nbsp;</a></li>
        <li style="background: #200772 url('http://localhost/v4/data/upload/shop/editor/web-101-101-2.png?442') no-repeat center top">
            <a href="http://demo.33hao.com/shop/index.php?act=show_groupbuy&amp;op=index" target="_blank" title="好商城">
                &nbsp;</a></li>
        <li style="background: #EFE6DD url('http://localhost/v4/data/upload/shop/editor/web-101-101-3.png?983') no-repeat center top">
            <a href="http://demo.33hao.com/shop/index.php?act=show_groupbuy&amp;op=index" target="_blank" title="好商城">
                &nbsp;</a></li>
        <li style="background: #760907 url('http://localhost/v4/data/upload/shop/editor/web-101-101-4.png?779') no-repeat center top">
            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100" target="_blank"
               title="好商城">&nbsp;</a></li>

    </ul>
    <div class="jfocus-trigeminybox">
        <a class="limited_time" title="限时打折" href="http://localhost/v4/index.php?act=promotion&op=index">
            <div class="clock-wrap">
                <div class="clock">
                    <div class="clock-h" id="ClockHours" style="-webkit-transform: rotate(93deg);"></div>
                    <div class="clock-m"></div>
                    <div class="clock-s"></div>
                </div>
            </div>
        </a>
        <div class="jfocus-trigeminy">
            <ul>
                <li>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-1-1.jpg?306"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-1-2.jpg?220"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-1-3.jpg?296"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-1-4.jpg?752"
                             alt="测试"></a>
                </li>
                <li>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-2-1.jpg?718"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-2-2.jpg?967"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-2-3.jpg?477"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-2-4.jpg?643"
                             alt="测试"></a>
                </li>
                <li>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-3-1.jpg?970"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-3-2.jpg?341"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-3-3.jpg?480"
                             alt="测试"></a>
                    <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" target="_blank" title="测试">
                        <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                             data-url="http://localhost/v4/data/upload/shop/editor/web-101-102-3-4.jpg?162"
                             alt="测试"></a>
                </li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        update_screen_focus();
    </script>
    <div class="right-sidebar">
        <div class="right-panel">
            <div class="loginBox">
                <div class="exitPanel"><img src="http://localhost/v4/data/upload/shop/common/default_user_portrait.gif"
                                            alt=""/>
                    <div class="message">
                        <p class="name">Hi, <a href="http://localhost/v4/shop/index.php?act=member&op=home">admin</a>
                        </p>
                        <p class="logOut qiueExt">[<a
                                    href="http://localhost/v4/shop/index.php?act=login&op=logout">退出登录</a>]</p>
                    </div>
                    <div class="clear"></div>
                </div>

                <!-- 买家信息 -->

                <div class="txtPanel"><a href="index.php?act=member_order&state_type=state_new" class="line">
                        <p class="num">0</p>
                        <p class="txt">待付款</p>
                    </a> <a target="_blank" href="index.php?act=member_order&op=index" class="line">
                        <p class="num">0</p>
                        <p class="txt">待收货</p>
                    </a> <a target="_blank" href="index.php?act=member_refund&op=index">
                        <p class="num">0</p>
                        <p class="txt">待评价</p>
                    </a></div>
            </div>
            <div class="securePanel">
                <li><img alt="买家保障" src="http://localhost/v4/shop/templates/default/images/u-promise.png">
                    <p>买家保障</p>
                </li>
                <li><img alt="商家认证" src="http://localhost/v4/shop/templates/default/images/u-quality.png">
                    <p>商家认证</p>
                </li>
                <li><img alt="安全交易" src="http://localhost/v4/shop/templates/default/images/u-safe.png">
                    <p>安全交易</p>
                </li>
            </div>
            <div class="panelimg-side">
                <ul>
                    <li><a href='' title='首页右侧广告'><img style='width:230px;height:165px' border='0'
                                                       src='http://localhost/v4/data/upload/shop/adv/05057671828128355.png'
                                                       alt=''/></a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<!--HomeFocusLayout End-->

<div class="home-sale-layout wrapper">
    <div class="left-layout">
        <ul class="tabs-nav">
            <li class="tabs-selected"><i class="arrow"></i>
                <h3>新品上架</h3></li>
            <li class=""><i class="arrow"></i>
                <h3>热卖商品</h3></li>
            <li class=""><i class="arrow"></i>
                <h3>疯狂抢购</h3></li>
            <li class=""><i class="arrow"></i>
                <h3>猜您喜欢</h3></li>
            <li class=""><i class="arrow"></i>
                <h3>热评商品</h3></li>
        </ul>
        <div class="tabs-panel sale-goods-list ">
            <ul>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102592"
                                                  title="爵爷商务皮鞋 秋款男士正装 前系带 金属尖头低帮单鞋 黑色 38">
                                爵爷商务皮鞋 秋款男士正装 前系带 金属尖头低帮单鞋 黑色 38</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102592">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/16/16_05000683915287946_240.jpg"
                                     alt="爵爷商务皮鞋 秋款男士正装 前系带 金属尖头低帮单鞋 黑色 38"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;108.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102700"
                                                  title="纯色透气圆头单鞋男真皮方跟低帮鞋前系带男士皮鞋 棕色 38">
                                纯色透气圆头单鞋男真皮方跟低帮鞋前系带男士皮鞋 棕色 38</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102700">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/16/16_05003068354931461_240.jpg"
                                     alt="纯色透气圆头单鞋男真皮方跟低帮鞋前系带男士皮鞋 棕色 38"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;88.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102649"
                                                  title="优质超纤皮男鞋纯色前系带尖头低帮皮鞋 棕色 38">
                                优质超纤皮男鞋纯色前系带尖头低帮皮鞋 棕色 38</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102649">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/16/16_05002911543965426_240.jpg"
                                     alt="优质超纤皮男鞋纯色前系带尖头低帮皮鞋 棕色 38"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;108.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102688"
                                                  title="爵爷2015春秋商务正装男士皮鞋透气超纤皮男鞋 黑色 38">
                                爵爷2015春秋商务正装男士皮鞋透气超纤皮男鞋 黑色 38</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102688">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/16/16_05003062100708546_240.jpg"
                                     alt="爵爷2015春秋商务正装男士皮鞋透气超纤皮男鞋 黑色 38"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;108.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102604"
                                                  title="日常休闲鞋男士豆豆鞋驾车真皮男鞋英伦皮鞋 黄色 38">
                                日常休闲鞋男士豆豆鞋驾车真皮男鞋英伦皮鞋 黄色 38</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102604">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/16/16_05001210537684207_240.jpg"
                                     alt="日常休闲鞋男士豆豆鞋驾车真皮男鞋英伦皮鞋 黄色 38"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;108.00</em></dd>
                    </dl>
                </li>
            </ul>
        </div>
        <div class="tabs-panel sale-goods-list tabs-hide">
            <ul>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102020"
                                                  title="冬装男装立领 男式纯棉T恤男士加厚加绒保暖打底衫 白色 M">
                                冬装男装立领 男式纯棉T恤男士加厚加绒保暖打底衫 白色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102020">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_04999727187217105_240.png"
                                     alt="冬装男装立领 男式纯棉T恤男士加厚加绒保暖打底衫 白色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;73.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102165"
                                                  title="2015秋新款男装男式牛仔裤男休闲商务长裤子韩版修身直筒 图片色 28">
                                2015秋新款男装男式牛仔裤男休闲商务长裤子韩版修身直筒 图片色 28</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102165">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_04999963827312369_240.jpg"
                                     alt="2015秋新款男装男式牛仔裤男休闲商务长裤子韩版修身直筒 图片色 28"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;81.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102126"
                                                  title="2015秋冬新款韩版女羽绒棉服女立领修身显瘦棉衣短款棉服外套 红色 L">
                                2015秋冬新款韩版女羽绒棉服女立领修身显瘦棉衣短款棉服外套 红色 L</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102126">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/12/12_04999931964380007_240.jpg"
                                     alt="2015秋冬新款韩版女羽绒棉服女立领修身显瘦棉衣短款棉服外套 红色 L"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;103.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102070"
                                                  title="新款女装韩版修身A字斗篷棉衣加厚保暖短外套大毛领连帽羽绒棉服 蓝色 M">
                                新款女装韩版修身A字斗篷棉衣加厚保暖短外套大毛领连帽羽绒棉服 蓝色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102070">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/12/12_04999920485539383_240.jpg"
                                     alt="新款女装韩版修身A字斗篷棉衣加厚保暖短外套大毛领连帽羽绒棉服 蓝色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;118.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101680"
                                                  title="2015秋冬新款女装女式韩版修身短款棉衣棉服羽绒棉衣女 粉色 M">
                                2015秋冬新款女装女式韩版修身短款棉衣棉服羽绒棉衣女 粉色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101680">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/12/12_04999938698283696_240.png"
                                     alt="2015秋冬新款女装女式韩版修身短款棉衣棉服羽绒棉衣女 粉色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;112.00</em></dd>
                    </dl>
                </li>
            </ul>
        </div>
        <div class="tabs-panel sale-goods-list tabs-hide">
            <ul>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101559"
                                                  title="2015冬季新款棉衣女修身大码羽绒棉服女士短款韩版连帽冬季防寒服 蓝色 M">
                                2015冬季新款棉衣女修身大码羽绒棉服女士短款韩版连帽冬季防寒服 蓝色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101559">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/12/12_039f2d0f136e6927e9cfa6fff35e077_240.jpg"
                                     alt="2015冬季新款棉衣女修身大码羽绒棉服女士短款韩版连帽冬季防寒服 蓝色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;88.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101598"
                                                  title="2015新款冬装棉衣外套女中长款大码加厚毛领羽绒棉服韩版修身棉袄 粉色 M">
                                2015新款冬装棉衣外套女中长款大码加厚毛领羽绒棉服韩版修身棉袄 粉色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101598">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/12/12_cc322b39c176a5ae261b62795d46258_240.jpg"
                                     alt="2015新款冬装棉衣外套女中长款大码加厚毛领羽绒棉服韩版修身棉袄 粉色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;119.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101429"
                                                  title="2015夏季新款鱼嘴凉鞋超高跟防水台夜店鞋透气网纱粗跟女鞋 粉色 34">
                                2015夏季新款鱼嘴凉鞋超高跟防水台夜店鞋透气网纱粗跟女鞋 粉色 34</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101429">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/6/6_04847714326505496_240.jpg"
                                     alt="2015夏季新款鱼嘴凉鞋超高跟防水台夜店鞋透气网纱粗跟女鞋 粉色 34"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;108.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102433"
                                                  title="秋冬季时尚单鞋 糖果色亮面浅口细跟职业女鞋 漆皮镜面尖头高跟鞋 白色 34">
                                秋冬季时尚单鞋 糖果色亮面浅口细跟职业女鞋 漆皮镜面尖头高跟鞋 白色 34</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102433">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/17/17_05000574018138552_240.jpg"
                                     alt="秋冬季时尚单鞋 糖果色亮面浅口细跟职业女鞋 漆皮镜面尖头高跟鞋 白色 34"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;119.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102265"
                                                  title="秋季新款糖果色细跟单鞋 浅口真皮尖头高跟鞋 杏色 34">
                                秋季新款糖果色细跟单鞋 浅口真皮尖头高跟鞋 杏色 34</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102265">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/17/17_05000548082598798_240.jpg"
                                     alt="秋季新款糖果色细跟单鞋 浅口真皮尖头高跟鞋 杏色 34"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;119.00</em></dd>
                    </dl>
                </li>
            </ul>
        </div>
        <div class="tabs-panel sale-goods-list tabs-hide">
            <ul>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102865"
                                                  title="酷迪璐新品男式夹克外套男士pu皮衣韩版休闲绒布接男装 蓝色 M">
                                酷迪璐新品男式夹克外套男士pu皮衣韩版休闲绒布接男装 蓝色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102865">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/18/18_05011806114146918_240.jpg"
                                     alt="酷迪璐新品男式夹克外套男士pu皮衣韩版休闲绒布接男装 蓝色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;128.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102835"
                                                  title="2015新款保暖加绒修身衬衫 白色 M">
                                2015新款保暖加绒修身衬衫 白色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102835">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/18/18_05011800162520471_240.jpg"
                                     alt="2015新款保暖加绒修身衬衫 白色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;98.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102805"
                                                  title="酷迪璐冬装男士加棉加厚长袖衬衫格子夹克衬衫 灰色 M">
                                酷迪璐冬装男士加棉加厚长袖衬衫格子夹克衬衫 灰色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102805">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/18/18_05011789584196803_240.jpg"
                                     alt="酷迪璐冬装男士加棉加厚长袖衬衫格子夹克衬衫 灰色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;108.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102751"
                                                  title="2015新款秋冬男式PU皮夹克外贸 海宁男士立领休闲修身外套 黑色 M">
                                2015新款秋冬男式PU皮夹克外贸 海宁男士立领休闲修身外套 黑色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102751">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/18/18_05011764627052815_240.jpg"
                                     alt="2015新款秋冬男式PU皮夹克外贸 海宁男士立领休闲修身外套 黑色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;158.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102633"
                                                  title="2015秋冬新款 全棉男式牛仔裤直筒型 图片色 28">
                                2015秋冬新款 全棉男式牛仔裤直筒型 图片色 28</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102633">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_05002060806639307_240.jpg"
                                     alt="2015秋冬新款 全棉男式牛仔裤直筒型 图片色 28"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;89.00</em></dd>
                    </dl>
                </li>
            </ul>
        </div>
        <div class="tabs-panel sale-goods-list tabs-hide">
            <ul>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102150"
                                                  title="韩版品牌直筒修身牛仔裤 秋冬男士长裤休闲牛仔裤 图片色 28">
                                韩版品牌直筒修身牛仔裤 秋冬男士长裤休闲牛仔裤 图片色 28</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102150">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_04999958412070501_240.jpg"
                                     alt="韩版品牌直筒修身牛仔裤 秋冬男士长裤休闲牛仔裤 图片色 28"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;82.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102005"
                                                  title="冬装男装爆款 男式纯棉T恤男士加厚加绒保暖打底衫 黑色 M">
                                冬装男装爆款 男式纯棉T恤男士加厚加绒保暖打底衫 黑色 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102005">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_04999724012252809_240.jpg"
                                     alt="冬装男装爆款 男式纯棉T恤男士加厚加绒保暖打底衫 黑色 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;69.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101930"
                                                  title="2015冬款新品 男式拼接长袖加厚加绒保暖V领T恤男装不倒绒 酒红 M">
                                2015冬款新品 男式拼接长袖加厚加绒保暖V领T恤男装不倒绒 酒红 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101930">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_04999707884947293_240.jpg"
                                     alt="2015冬款新品 男式拼接长袖加厚加绒保暖V领T恤男装不倒绒 酒红 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;65.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101807"
                                                  title="2015秋季新款男士长袖t恤潮纯棉秋长袖修身韩版青年体恤运动小衫 白拼枣红 M">
                                2015秋季新款男士长袖t恤潮纯棉秋长袖修身韩版青年体恤运动小衫 白拼枣红 M</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101807">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_04999618551849829_240.jpg"
                                     alt="2015秋季新款男士长袖t恤潮纯棉秋长袖修身韩版青年体恤运动小衫 白拼枣红 M"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;65.00</em></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name"><a target="_blank"
                                                  href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102157"
                                                  title="品牌男装牛仔裤纯棉商务男裤男式牛仔裤 图片色 28">
                                品牌男装牛仔裤纯棉商务男裤男式牛仔裤 图片色 28</a></dt>
                        <dd class="goods-thumb">
                            <a target="_blank"
                               href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102157">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" rel="lazy"
                                     data-url="http://localhost/v4/data/upload/shop/store/goods/15/15_04999961053663021_240.jpg"
                                     alt="品牌男装牛仔裤纯棉商务男裤男式牛仔裤 图片色 28"/>
                            </a></dd>
                        <dd class="goods-price">商城价：<em>&yen;89.00</em></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    <div class="right-sidebar">
        <div class="title">
            <h3>限时折扣</h3>
        </div>
        <div id="saleDiscount" class="sale-discount">
            <ul>
                <li>
                    <dl>
                        <dt class="goods-name">春装 披肩式 超短款 针织 衫开衫 女装 青鸟 黑色</dt>
                        <dd class="goods-thumb"><a
                                    href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=49"> <img
                                        src="http://localhost/v4/data/upload/shop/store/goods/1/1_04418240955916042_240.jpg"></a>
                        </dd>
                        <dd class="goods-price">&yen;100.00 <span class="original">&yen;129.00</span></dd>
                        <dd class="goods-price-discount"><em>7.8折</em></dd>
                        <dd class="time-remain" count_down="49538954"><i></i><em time_id="d">0</em>天<em
                                    time_id="h">0</em>小时 <em time_id="m">0</em>分<em time_id="s">0</em>秒
                        </dd>
                        <dd class="goods-buy-btn"></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name">新款 女款 拼接 不规则摆 长袖针织衫开衫 杏雨 白色</dt>
                        <dd class="goods-thumb"><a
                                    href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=52"> <img
                                        src="http://localhost/v4/data/upload/shop/store/goods/1/1_04418253240878850_240.jpg"></a>
                        </dd>
                        <dd class="goods-price">&yen;58.00 <span class="original">&yen;99.00</span></dd>
                        <dd class="goods-price-discount"><em>5.9折</em></dd>
                        <dd class="time-remain" count_down="49538954"><i></i><em time_id="d">0</em>天<em
                                    time_id="h">0</em>小时 <em time_id="m">0</em>分<em time_id="s">0</em>秒
                        </dd>
                        <dd class="goods-buy-btn"></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="goods-name">正品 2015春装新款 女 绣花针织衫 开衫外套浮桑初 蓝色</dt>
                        <dd class="goods-thumb"><a
                                    href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=38"> <img
                                        src="http://localhost/v4/data/upload/shop/store/goods/1/1_04418207207476705_240.jpg"></a>
                        </dd>
                        <dd class="goods-price">&yen;158.00 <span class="original">&yen;189.00</span></dd>
                        <dd class="goods-price-discount"><em>8.4折</em></dd>
                        <dd class="time-remain" count_down="49538954"><i></i><em time_id="d">0</em>天<em
                                    time_id="h">0</em>小时 <em time_id="m">0</em>分<em time_id="s">0</em>秒
                        </dd>
                        <dd class="goods-buy-btn"></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="wrapper">
    <div class="mt10">
        <div class="mt10"><a href='http://v3.33hao.com/delivery/index.php?act=login' target='_blank'
                             title='首页物流自提banner'><img style='width:1200px;height:100px' border='0'
                                                       src='http://localhost/v4/data/upload/shop/adv/04876370813599010.gif'
                                                       alt='首页物流自提banner'/></a></div>
    </div>
</div>
<!--StandardLayout Begin-->

<div class="home-standard-layout wrapper style-red">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>1F</span>
                <h2 title="潮流女装">潮流女装</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1103" title="衬衫"
                       target="_blank">衬衫</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1104" title="T恤"
                       target="_blank">T恤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1106" title="雪纺衫"
                       target="_blank">雪纺衫</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1524" title="情侣装"
                       target="_blank">情侣装</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1528" title="大码女装"
                       target="_blank">大码女装</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1264" title="连衣裙"
                       target="_blank">连衣裙</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1265" title="半身裙"
                       target="_blank">半身裙</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1434" title="旗袍"
                       target="_blank">旗袍</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1253" title="牛仔裤"
                       target="_blank">牛仔裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1254" title="休闲裤"
                       target="_blank">休闲裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1255" title="西装裤"
                       target="_blank">西装裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1443" title="七分裤"
                       target="_blank">七分裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1527" title="短裤"
                       target="_blank">短裤</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://www.telaigou.cn/shop" title="" target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                     data-url="http://localhost/v4/data/upload/shop/editor/web-1-13.jpg?343" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="新款女装韩版修身A字斗篷棉衣加厚保暖短外套大毛领连帽羽绒棉服 蓝色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102070">新款女装韩版修身A字斗篷棉衣加厚保暖短外套大毛领连帽羽绒棉服
                        蓝色 M</a></li>
                <li><i></i><a target="_blank" title="2015秋冬新款女装女式韩版修身短款棉衣棉服羽绒棉衣女 粉色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101680">2015秋冬新款女装女式韩版修身短款棉衣棉服羽绒棉衣女
                        粉色 M</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=106" title="RDK"
                   target="_blank">RDK</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=104" title="esprit" target="_blank">esprit</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=83" title="秀秀美"
                   target="_blank">秀秀美</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=85" title="猫人"
                   target="_blank">猫人</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=87" title="Hanes恒适" target="_blank">Hanes恒适</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=80" title="享爱."
                   target="_blank">享爱.</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=81" title="派丽蒙"
                   target="_blank">派丽蒙</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=82" title="康妮雅"
                   target="_blank">康妮雅</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=goods&amp;op=index&amp;goods_id=102126"
                           title="拉夏贝尔 秋新款女装街头人物印花休闲圆领长袖连衣裙 黑色 S" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                 alt="拉夏贝尔 秋新款女装街头人物印花休闲圆领长袖连衣裙 黑色 S"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-1-18-2.png?254" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                           title="拉夏贝尔套头针织衫 2015冬新款休闲圆领直身裙套装女 拉贝缇 墨绿色 M" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                 alt="拉夏贝尔套头针织衫 2015冬新款休闲圆领直身裙套装女 拉贝缇 墨绿色 M"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-1-18-1.png?318" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                           title="拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L  商品编号：1726332280 关注商品 分享 拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L"
                           target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                 alt="拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L     拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L  商品编号：1726332280 关注商品 分享 拉夏贝尔拉贝缇2015冬新款毛织T恤松紧腰直身裙两件套女 灰蓝色 L"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-1-18-3.png?756" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dt class="banner-name"><a
                                    href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                                    title="针织格子提花休闲圆领七分袖连衣裙 格子混色 L" target="_blank">
                                针织格子提花休闲圆领七分袖连衣裙 格子混色 L</a></dt>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                               title="针织格子提花休闲圆领七分袖连衣裙 格子混色 L" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                     alt="针织格子提花休闲圆领七分袖连衣裙 格子混色 L"
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-1-15-1-11.jpg?445"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="banner-name"><a
                                    href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                                    title="街头人物印花休闲圆领长袖连衣裙 黑色 S" target="_blank">
                                街头人物印花休闲圆领长袖连衣裙 黑色 S</a></dt>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                               title="街头人物印花休闲圆领长袖连衣裙 黑色 S" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                     alt="街头人物印花休闲圆领长袖连衣裙 黑色 S"
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-1-15-1-12.jpg?299"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="banner-name"><a
                                    href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                                    title="撞色印花提花针织短袖连衣裙 米白 L" target="_blank">
                                撞色印花提花针织短袖连衣裙 米白 L</a></dt>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                               title="撞色印花提花针织短袖连衣裙 米白 L" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                     alt="撞色印花提花针织短袖连衣裙 米白 L"
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-1-15-1-31.jpg?570"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="banner-name"><a
                                    href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                                    title="钉珠蝴蝶结长袖连衣裙套装女 玫红 L" target="_blank">
                                钉珠蝴蝶结长袖连衣裙套装女 玫红 L</a></dt>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                               title="钉珠蝴蝶结长袖连衣裙套装女 玫红 L" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                     alt="钉珠蝴蝶结长袖连衣裙套装女 玫红 L"
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-1-15-1-32.jpg?568"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="banner-name"><a
                                    href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                                    title="钉珠蝴蝶结长袖连衣裙套装女 玫红 L" target="_blank">
                                钉珠蝴蝶结长袖连衣裙套装女 玫红 L</a></dt>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                               title="钉珠蝴蝶结长袖连衣裙套装女 玫红 L" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                     alt="钉珠蝴蝶结长袖连衣裙套装女 玫红 L"
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-1-15-1-33.jpg?633"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt class="banner-name"><a
                                    href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                                    title="波点绣花两件套毛衣连衣裙女 黑色 M" target="_blank">
                                波点绣花两件套毛衣连衣裙女 黑色 M</a></dt>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                               title="波点绣花两件套毛衣连衣裙女 黑色 M" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                     alt="波点绣花两件套毛衣连衣裙女 黑色 M"
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-1-15-1-34.jpg?499"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="home-standard-layout wrapper style-pink">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>2F</span>
                <h2 title="精品男装">精品男装</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1140" title="衬衫"
                       target="_blank">衬衫</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1141" title="T恤"
                       target="_blank">T恤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1142" title="POLO衫"
                       target="_blank">POLO衫</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1144" title="卫衣"
                       target="_blank">卫衣</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1530" title="唐装"
                       target="_blank">唐装</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1150" title="西裤"
                       target="_blank">西裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1151" title="休闲裤"
                       target="_blank">休闲裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1152" title="牛仔裤"
                       target="_blank">牛仔裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1158" title="卫裤"
                       target="_blank">卫裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1373" title="九分裤"
                       target="_blank">九分裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1442" title="短裤"
                       target="_blank">短裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1300" title="T恤/背心"
                       target="_blank">T恤/背心</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://www.telaigou.cn/shop" title="出游服装五折起" target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="出游服装五折起"
                     data-url="http://localhost/v4/data/upload/shop/editor/web-2-23.jpg?343" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="酷迪璐新品男式夹克外套男士pu皮衣韩版休闲绒布接男装 蓝色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102865">酷迪璐新品男式夹克外套男士pu皮衣韩版休闲绒布接男装
                        蓝色 M</a></li>
                <li><i></i><a target="_blank" title="秋冬男衬衫2015新款秋冬衬衫男装长袖酷迪璐免烫男式衬衫 白色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102817">秋冬男衬衫2015新款秋冬衬衫男装长袖酷迪璐免烫男式衬衫
                        白色 M</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=104" title="esprit" target="_blank">esprit</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=102" title="她他/tata"
                   target="_blank">她他/tata</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=99" title="梦特娇"
                   target="_blank">梦特娇</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=96" title="佐丹奴"
                   target="_blank">佐丹奴</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=90" title="金利来"
                   target="_blank">金利来</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=84" title="阿迪达斯" target="_blank">阿迪达斯</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=85" title="猫人"
                   target="_blank">猫人</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=95" title="李宁"
                   target="_blank">李宁</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1112"
                           title="冬装可拆卸帽可拆卸袖百搭羽绒服" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="冬装可拆卸帽可拆卸袖百搭羽绒服"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-2-28-1.png?688" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                           title="冬新品男士羊毛衫圆领套头毛衫蓝色针织衫" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="冬新品男士羊毛衫圆领套头毛衫蓝色针织衫"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-2-28-2.png?755" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100"
                           title="冬装新品卡其色翻领男式羊毛呢大衣中长款" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="冬装新品卡其色翻领男式羊毛呢大衣中长款"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-2-28-3.png?557" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-2-25-1-11.jpg?694"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-2-25-1-12.jpg?135"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-2-25-1-31.jpg?959"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-2-25-1-32.jpg?131"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-2-25-1-33.jpg?984"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-2-25-1-34.jpg?246"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="home-standard-layout wrapper style-orange">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>3F</span>
                <h2 title="时尚鞋靴">时尚鞋靴</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1160" title="单鞋"
                       target="_blank">单鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1161" title="平底鞋"
                       target="_blank">平底鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1165" title="帆布鞋"
                       target="_blank">帆布鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1425" title="内增高"
                       target="_blank">内增高</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1428" title="凉鞋"
                       target="_blank">凉鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1472" title="拖鞋"
                       target="_blank">拖鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1175" title="休闲鞋"
                       target="_blank">休闲鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1176" title="正装鞋"
                       target="_blank">正装鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1177" title="商务鞋"
                       target="_blank">商务鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1182" title="板鞋"
                       target="_blank">板鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1534" title="短靴"
                       target="_blank">短靴</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1536" title="马丁靴"
                       target="_blank">马丁靴</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1549" title="雨靴"
                       target="_blank">雨靴</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://www.telaigou.cn/shop" title="" target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                     data-url="http://localhost/v4/data/upload/shop/editor/web-3-33.png?575" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="欧洲站独家新款女靴真皮短靴内增高职业女鞋秋冬马丁靴圆头女靴子 黑色（加绒） 35"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102714">欧洲站独家新款女靴真皮短靴内增高职业女鞋秋冬马丁靴圆头女靴子
                        黑色（加绒） 35</a></li>
                <li><i></i><a target="_blank" title="摩伊拉夏季新款凉鞋金属色绑带潮鞋真皮内里女鞋 粉色 34"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101329">摩伊拉夏季新款凉鞋金属色绑带潮鞋真皮内里女鞋
                        粉色 34</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=105" title="westside"
                   target="_blank">westside</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=104" title="esprit" target="_blank">esprit</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=103" title="ELLE HOME"
                   target="_blank">ELLE HOME</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=102" title="她他/tata"
                   target="_blank">她他/tata</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=101" title="爱帝"
                   target="_blank">爱帝</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=98" title="斯波帝卡" target="_blank">斯波帝卡</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=97" title="百思图"
                   target="_blank">百思图</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=100" title="宝姿"
                   target="_blank">宝姿</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                           title="冬季新款骑士靴棉靴子" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="冬季新款骑士靴棉靴子"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-3-38-2.png?328" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                           title="时尚平底铆钉短靴子" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="时尚平底铆钉短靴子"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-3-38-3.png?218" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                           title="新款粗跟圆头加绒短靴裸靴" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="新款粗跟圆头加绒短靴裸靴"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-3-38-5.png?708" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                               title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-3-35-1-11.jpg?136"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                               title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-3-35-1-12.jpg?270"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                               title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-3-35-1-31.jpg?822"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                               title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-3-35-1-32.jpg?894"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                               title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-3-35-1-33.jpg?259"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                               title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-3-35-1-34.jpg?192"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="home-standard-layout wrapper style-green">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>4F</span>
                <h2 title="美妆护肤">美妆护肤</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1183" title="洁面"
                       target="_blank">洁面</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1184" title="面膜"
                       target="_blank">面膜</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1185" title="化妆水"
                       target="_blank">化妆水</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1186" title="精华"
                       target="_blank">精华</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1187" title="乳液"
                       target="_blank">乳液</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1188" title="面霜"
                       target="_blank">面霜</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1189" title="眼霜"
                       target="_blank">眼霜</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1498" title="防晒"
                       target="_blank">防晒</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1501" title="护肤套装"
                       target="_blank">护肤套装</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1225" title="卸妆"
                       target="_blank">卸妆</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1227" title="BB霜"
                       target="_blank">BB霜</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1508" title="彩妆套装"
                       target="_blank">彩妆套装</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://www.telaigou.cn/shop" title="" target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                     data-url="http://localhost/v4/data/upload/shop/editor/web-4-43.jpg?581" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="2015新款保暖加绒修身衬衫 白色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102835">2015新款保暖加绒修身衬衫
                        白色 M</a></li>
                <li><i></i><a target="_blank" title="2015冬款加绒T恤 男式纯棉T恤男士加厚加绒保暖打底衫 黑色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=101915">2015冬款加绒T恤
                        男式纯棉T恤男士加厚加绒保暖打底衫 黑色 M</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=102" title="她他/tata"
                   target="_blank">她他/tata</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=104" title="esprit" target="_blank">esprit</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=106" title="RDK"
                   target="_blank">RDK</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=86" title="茵曼（INMAN）"
                   target="_blank">茵曼（INMAN）</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=88" title="缪诗"
                   target="_blank">缪诗</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=85" title="猫人"
                   target="_blank">猫人</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=80" title="享爱."
                   target="_blank">享爱.</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="" title="" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-4-48-1.jpg?202" rel="lazy"/></a>
                    </li>
                    <li><a href="" title="" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-4-48-4.jpg?901" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1111"
                           title="海飞丝洗发露" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="海飞丝洗发露"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-4-48-2.png?560" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-4-45-2-11.jpg?532"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109"
                               title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-4-45-2-12.jpg?965"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-4-45-2-31.jpg?561"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-4-45-2-32.jpg?189"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-4-45-2-33.jpg?573"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-4-45-2-34.jpg?625"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="home-standard-layout wrapper style-blue">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>5F</span>
                <h2 title="箱包皮具">箱包皮具</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1195" title="手提包"
                       target="_blank">手提包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1196" title="单肩包"
                       target="_blank">单肩包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1224" title="双肩包"
                       target="_blank">双肩包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1304" title="斜挎包"
                       target="_blank">斜挎包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1198" title="商务包"
                       target="_blank">商务包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1311" title="休闲包"
                       target="_blank">休闲包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1312" title="公文包"
                       target="_blank">公文包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1193" title="女士钱包"
                       target="_blank">女士钱包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1197" title="男士钱包"
                       target="_blank">男士钱包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1568" title="旅行包"
                       target="_blank">旅行包</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1322" title="行李箱"
                       target="_blank">行李箱</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1323" title="拉杆箱"
                       target="_blank">拉杆箱</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1324" title="旅行箱"
                       target="_blank">旅行箱</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1110" title=""
               target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                     data-url="http://localhost/v4/data/upload/shop/editor/web-5-53.png?994" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="纯色透气圆头单鞋男真皮方跟低帮鞋前系带男士皮鞋 棕色 38"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102700">纯色透气圆头单鞋男真皮方跟低帮鞋前系带男士皮鞋
                        棕色 38</a></li>
                <li><i></i><a target="_blank" title="爵爷商务皮鞋 秋款男士正装 前系带 金属尖头低帮单鞋 黑色 38"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102592">爵爷商务皮鞋 秋款男士正装
                        前系带 金属尖头低帮单鞋 黑色 38</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=366" title="摩伊拉"
                   target="_blank">摩伊拉</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=93" title="百丽"
                   target="_blank">百丽</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=96" title="佐丹奴"
                   target="_blank">佐丹奴</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=91" title="其乐"
                   target="_blank">其乐</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=81" title="派丽蒙"
                   target="_blank">派丽蒙</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=83" title="秀秀美"
                   target="_blank">秀秀美</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=80" title="享爱."
                   target="_blank">享爱.</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=82" title="康妮雅"
                   target="_blank">康妮雅</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="" title="" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-5-58-1.jpg?965" rel="lazy"/></a>
                    </li>
                    <li><a href="" title="" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-5-58-2.jpg?837" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-5-55-1-11.jpg?978"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-5-55-1-12.jpg?770"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-5-55-1-31.jpg?165"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-5-55-1-32.jpg?495"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-5-55-1-33.jpg?687"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-5-55-1-34.jpg?363"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="home-standard-layout wrapper style-purple">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>6F</span>
                <h2 title="运动户外">运动户外</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1124" title="运动鞋"
                       target="_blank">运动鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1125" title="运动服"
                       target="_blank">运动服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1408" title="户外鞋"
                       target="_blank">户外鞋</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1474" title="户外服"
                       target="_blank">户外服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1475" title="冲锋衣裤"
                       target="_blank">冲锋衣裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1476" title="速干衣裤"
                       target="_blank">速干衣裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1477" title="抓绒衣裤"
                       target="_blank">抓绒衣裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1478" title="软壳衣裤"
                       target="_blank">软壳衣裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1479" title="T恤"
                       target="_blank">T恤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1481" title="滑雪服"
                       target="_blank">滑雪服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1482" title="功能内衣"
                       target="_blank">功能内衣</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1220" title="T恤"
                       target="_blank">T恤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1221" title="卫衣"
                       target="_blank">卫衣</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1222" title="运动裤"
                       target="_blank">运动裤</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1223" title="运动套装"
                       target="_blank">运动套装</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1331" title="足球服"
                       target="_blank">足球服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1332" title="篮球服"
                       target="_blank">篮球服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1333" title="风衣夹克"
                       target="_blank">风衣夹克</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1334" title="网羽服"
                       target="_blank">网羽服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1335" title="棒球服"
                       target="_blank">棒球服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1415" title="训练服"
                       target="_blank">训练服</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1416" title="运动帽"
                       target="_blank">运动帽</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1563" title="运动手套"
                       target="_blank">运动手套</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1564" title="运动袜"
                       target="_blank">运动袜</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://demo.33hao.com/shop" title="" target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                     data-url="http://localhost/v4/data/upload/shop/editor/web-6-63.png?949" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="欧洲站独家新款女靴真皮短靴内增高职业女鞋秋冬马丁靴圆头女靴子 黑色（加绒） 35"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102714">欧洲站独家新款女靴真皮短靴内增高职业女鞋秋冬马丁靴圆头女靴子
                        黑色（加绒） 35</a></li>
                <li><i></i><a target="_blank" title="优质超纤皮男鞋纯色前系带尖头低帮皮鞋 棕色 38"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102649">优质超纤皮男鞋纯色前系带尖头低帮皮鞋
                        棕色 38</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=106" title="RDK"
                   target="_blank">RDK</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=105" title="westside"
                   target="_blank">westside</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=104" title="esprit" target="_blank">esprit</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=103" title="ELLE HOME"
                   target="_blank">ELLE HOME</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=100" title="宝姿"
                   target="_blank">宝姿</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=98" title="斯波帝卡" target="_blank">斯波帝卡</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=81" title="派丽蒙"
                   target="_blank">派丽蒙</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" title="" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-6-68-1.png?180" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1100" title=""
                           target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-6-68-2.png?492" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-6-65-1-11.jpg?387"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-6-65-1-12.jpg?513"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-6-65-1-31.png?563"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-6-65-1-32.png?804"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-6-65-1-33.jpg?841"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-6-65-1-34.jpg?793"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="home-standard-layout wrapper style-brown">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>7F</span>
                <h2 title="礼品配饰">礼品配饰</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1203" title="项链"
                       target="_blank">项链</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1204" title="戒指"
                       target="_blank">戒指</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1205" title="手镯"
                       target="_blank">手镯</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1206" title="耳饰"
                       target="_blank">耳饰</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1207" title="发饰"
                       target="_blank">发饰</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1208" title="手链"
                       target="_blank">手链</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1209" title="锁骨链"
                       target="_blank">锁骨链</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1210" title="佛珠"
                       target="_blank">佛珠</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1211" title="转运珠"
                       target="_blank">转运珠</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1212" title="太阳镜"
                       target="_blank">太阳镜</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1422" title="护目镜"
                       target="_blank">护目镜</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1999" title="情侣饰品"
                       target="_blank">情侣饰品</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1213" title="机械表"
                       target="_blank">机械表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1214" title="电子表"
                       target="_blank">电子表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1215" title="石英表"
                       target="_blank">石英表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1336" title="时装表"
                       target="_blank">时装表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1337" title="学生表"
                       target="_blank">学生表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1338" title="运动表"
                       target="_blank">运动表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1339" title="儿童表"
                       target="_blank">儿童表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1340" title="防水表"
                       target="_blank">防水表</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1341" title="情侣表"
                       target="_blank">情侣表</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1114" title=""
               target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                     data-url="http://localhost/v4/data/upload/shop/editor/web-7-73.png?848" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="欧洲站独家新款女靴真皮短靴内增高职业女鞋秋冬马丁靴圆头女靴子 黑色（加绒） 35"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102714">欧洲站独家新款女靴真皮短靴内增高职业女鞋秋冬马丁靴圆头女靴子
                        黑色（加绒） 35</a></li>
                <li><i></i><a target="_blank" title="爵爷2015春秋商务正装男士皮鞋透气超纤皮男鞋 黑色 38"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102688">爵爷2015春秋商务正装男士皮鞋透气超纤皮男鞋
                        黑色 38</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=106" title="RDK"
                   target="_blank">RDK</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=105" title="westside"
                   target="_blank">westside</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=365" title="柒牌"
                   target="_blank">柒牌</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=87" title="Hanes恒适" target="_blank">Hanes恒适</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=88" title="缪诗"
                   target="_blank">缪诗</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=90" title="金利来"
                   target="_blank">金利来</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index" title="七度银饰专场"
                           target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="七度银饰专场"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-7-78-1.jpg?446" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=goods&amp;op=index&amp;goods_id=102126"
                           title="七度银饰专场" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt="七度银饰专场"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-7-78-2.png?182" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-7-75-1-11.jpg?585"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-7-75-1-12.jpg?181"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-7-75-1-31.png?392"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-7-75-1-32.jpg?806"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-7-75-1-33.png?752"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-7-75-1-34.jpg?541"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<div class="home-standard-layout wrapper style-default">

    <div class="left-sidebar">
        <div class="title">
            <div class="txt-type">
                <span>8F</span>
                <h2 title="生活家居">生活家居</h2>
            </div>
        </div>
        <div class="recommend-classes">
            <ul>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1234" title="四件套"
                       target="_blank">四件套</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1235" title="被子/被套"
                       target="_blank">被子/被套</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1236" title="枕头/枕套"
                       target="_blank">枕头/枕套</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1419" title="公仔"
                       target="_blank">公仔</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1421" title="凉席/凉枕"
                       target="_blank">凉席/凉枕</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1858" title="手工/十字绣"
                       target="_blank">手工/十字绣</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1240" title="工艺摆件"
                       target="_blank">工艺摆件</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1241" title="花瓶/花器"
                       target="_blank">花瓶/花器</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1242" title="仿真花卉"
                       target="_blank">仿真花卉</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1243" title="装饰画"
                       target="_blank">装饰画</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1352" title="相架/画框"
                       target="_blank">相架/画框</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1353" title="闹钟/挂钟"
                       target="_blank">闹钟/挂钟</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1354" title="香薰/蜡烛"
                       target="_blank">香薰/蜡烛</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1355" title="创意家居"
                       target="_blank">创意家居</a></li>
                <li><a href="http://localhost/v4/shop/index.php?act=search&op=index&cate_id=1356" title="办公用品"
                       target="_blank">办公用品</a></li>
            </ul>
        </div>
        <div class="left-ads">
            <a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1231" title=""
               target="_blank">
                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                     data-url="http://localhost/v4/data/upload/shop/editor/web-8-83.png?171" rel="lazy"/>
            </a>
        </div>


        <div class="left-hot-goods">
            <p>热卖促销：</p>
            <ul>
                <li><i></i><a target="_blank" title="2015秋冬酷迪璐男士夹克潮青年韩版时尚修身立领夹克男装外套 咖啡色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102880">2015秋冬酷迪璐男士夹克潮青年韩版时尚修身立领夹克男装外套
                        咖啡色 M</a></li>
                <li><i></i><a target="_blank" title="酷迪璐新品男式夹克外套男士pu皮衣韩版休闲绒布接男装 蓝色 M"
                              href="http://localhost/v4/shop/index.php?act=goods&op=index&goods_id=102865">酷迪璐新品男式夹克外套男士pu皮衣韩版休闲绒布接男装
                        蓝色 M</a></li>
            </ul>
        </div>
    </div>
    <div class="middle-layout">
        <ul class="right-brand">

            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=104" title="esprit" target="_blank">esprit</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=103" title="ELLE HOME"
                   target="_blank">ELLE HOME</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=105" title="westside"
                   target="_blank">westside</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=106" title="RDK"
                   target="_blank">RDK</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=92" title="Newbalance"
                   target="_blank">Newbalance</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=91" title="其乐"
                   target="_blank">其乐</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=85" title="猫人"
                   target="_blank">猫人</a>
            </li>
            <li>
                <a href="http://localhost/v4/shop/index.php?act=brand&op=list&brand=93" title="百丽"
                   target="_blank">百丽</a>
            </li>
            <li>
                <a href="http://localhost/v4/index.php?act=brand&op=index" title="" target="_blank">更多</a>
            </li>
        </ul>
        <ul class="tabs-nav">

            <li class="tabs-selected"><i class="arrow"></i>
                <h3>商品推荐</h3></li>
        </ul>
        <div class="right-side-layout">
            <div class="right-side-focus">
                <ul>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=search&amp;op=index&amp;cate_id=1109" title=""
                           target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-8-88-2.jpg?934" rel="lazy"/></a>
                    </li>
                    <li><a href="http://demo.33hao.com/shop/index.php?act=goods&amp;op=index&amp;goods_id=102126"
                           title="拉夏贝尔 秋新款女装街头人物印花休闲圆领长袖连衣裙 黑色 S" target="_blank">
                            <img src="http://localhost/v4/data/upload/shop/common/loading.gif"
                                 alt="拉夏贝尔 秋新款女装街头人物印花休闲圆领长袖连衣裙 黑色 S"
                                 data-url="http://localhost/v4/data/upload/shop/editor/web-8-88-3.jpg?885" rel="lazy"/></a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="tabs-panel middle-banner-list fade-img ">
            <ul>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-8-85-1-11.jpg?195"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-8-85-1-12.jpg?235"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-8-85-1-31.jpg?634"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-8-85-1-32.jpg?454"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-8-85-1-33.jpg?689"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dd class="banner-thumb">
                            <a href="" title="" class="a1" target="_blank">
                                <img src="http://localhost/v4/data/upload/shop/common/loading.gif" alt=""
                                     data-url="http://localhost/v4/data/upload/shop/editor/web-8-85-1-34.jpg?772"
                                     rel="lazy"/></a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

</div>

<!--StandardLayout End-->
<!--热门晒单str v3-b12-->
<div class="comment">
    <div class="tit">
        <div class="cmttite"><span>
            招商入驻
            </span></div>
        <div class="notice">
            <h3><a>商城公告</a></h3>
        </div>
    </div>
    <div class="cmtcon">
        <div class="cmtleft">
            <div id="con">
                <ul>
                    <a target="_blank" title="商家入驻" href="http://localhost/v4/shop/index.php?act=show_joinin&op=index">
                        <img width="978" height="248"
                             data-url="http://localhost/v4/data/upload/shop/common/i_store_joinio.png" rel="lazy" alt=""
                             src="http://localhost/v4/data/upload/shop/common/loading.gif"></a>
                </ul>
            </div>
        </div>
        <div class="cmtrigt">
            <div class="noticecon">
                <div class="proclamation">
                    <div class="tabs-panel">
                        <div class="tabs-panel"><a href="http://localhost/v4/shop/index.php?act=show_joinin&op=index"
                                                   title="商家入驻" class="store-join-btn" target="_blank">商家入驻</a> <a
                                    href="http://localhost/v4/shop/index.php?act=seller_login&op=show_login"
                                    target="_blank" class="store-join-help"><i class="icon-cog"></i>登录商家中心</a></div>
                        <ul class="mall-news">
                            <li><i></i><a target="_blank" href="http://www.33hao.com/" title="火爆销售中">火爆销售中 </a>
                                <time>(2015-06-30)</time>
                            </li>
                            <li><i></i><a target="_blank" href="/index.php?act=article&op=show&article_id=41"
                                          title="功能使用说明">功能使用说明 </a>
                                <time>(2015-06-30)</time>
                            </li>
                            <li><i></i><a target="_blank" href="/index.php?act=article&op=show&article_id=36"
                                          title="管理功能说明">管理功能说明 </a>
                                <time>(2015-06-30)</time>
                            </li>
                            <li><i></i><a target="_blank" href="/index.php?act=article&op=show&article_id=38"
                                          title="提示信息">提示信息 </a>
                                <time>(2015-06-30)</time>
                            </li>
                            <li><i></i><a target="_blank" href="/index.php?act=article&op=show&article_id=37"
                                          title="如何扩充水印字体库">如何扩充水印字体库 </a>
                                <time>(2015-06-30)</time>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--热门晒单end-->

<div class="wrapper mt10"><a href='http://www.33hao.com' target='_blank' title='首页通栏'><img
                style='width:1200px;height:90px' border='0'
                src='http://localhost/v4/data/upload/shop/adv/04716538681718544.png' alt='首页通栏'/></a></div>
<div class="index-link wrapper">
    <dl class="website">
        <dt>合作伙伴 | 友情链接<b></b></dt>
        <dd>
            <a href="http://bbs.33hao.com" target="_blank" title="支持论坛">支持论坛</a>
            <a href="http://33haocom.taobao.com" target="_blank" title="淘宝店">淘宝店</a>
        </dd>
    </dl>
</div>
<div class="footer-line"></div>
<!--首页底部保障开始-->
<div class="fttff29">
    <div class="warp-all236">
        <div class="mod_agree">
            <ul class="mod_agree_con">

                <li class="mod_agree_item mod_agree_item1">
                    <a><img src="http://localhost/v4/data/upload/shop/rec_position/aafda0df33d2a95e6010.png"></a><strong>真品货源</strong><span>正品，优质，放心</span>
                </li>

                <li class="mod_agree_item mod_agree_item2">
                    <a><img src="http://localhost/v4/data/upload/shop/rec_position/f0a5ee0bfc20dd005850.png"></a>
                    <strong>数据互通</strong><span>网站，商家，消费者</span>
                </li>
                <li class="mod_agree_item mod_agree_item3">
                    <a><img src="http://localhost/v4/data/upload/shop/rec_position/72edb29cc2ad2af46000.png"></a>
                    <strong>统一价格</strong><span>拒绝被宰，安心购物</span>
                </li>
                <li class="mod_agree_item mod_agree_item4">
                    <a><img src="http://localhost/v4/data/upload/shop/rec_position/c827005fae642e146280.png"></a>
                    <strong>担保交易</strong><span>支付宝担保，交易更安全</span>
                </li>
                <li class="mod_agree_item mod_agree_item5">
                    <a><img src="http://localhost/v4/data/upload/shop/rec_position/3497c1b195bde1928550.png"></a>
                    <strong>无忧退货</strong><span>7+15无理由退换货</span>
                </li>
                <li class="mod_agree_item mod_agree_item6">
                    <a href="http://www.33hao.com"><img
                                src="http://localhost/v4/data/upload/shop/rec_position/ea3ff5e9bf84afc34800.png"></a>
                    <strong>惊喜购</strong><span>帮你发现身边的好货</span>
                </li>
            </ul>
        </div>
    </div>
</div><!--首页底部保障结束-->
<!--StandardLayout Begin-->
<div id="nav_box">
    <ul>
        <li class="nav_h_1"><a href="javascript:;" class="num">1F</a> <a href="javascript:;" class="word">女装</a></li>
        <li class="nav_h_2"><a href="javascript:;" class="num">2F</a> <a href="javascript:;" class="word">男装</a></li>
        <li class="nav_h_3"><a href="javascript:;" class="num">3F</a> <a href="javascript:;" class="word">鞋靴</a></li>
        <li class="nav_h_4"><a href="javascript:;" class="num">4F</a> <a href="javascript:;" class="word">护肤</a></li>
        <li class="nav_h_5"><a href="javascript:;" class="num">5F</a> <a href="javascript:;" class="word">皮具</a></li>
        <li class="nav_h_6"><a href="javascript:;" class="num">6F</a> <a href="javascript:;" class="word">户外</a></li>
        <li class="nav_h_7"><a href="javascript:;" class="num">7F</a> <a href="javascript:;" class="word">配饰</a></li>
        <li class="nav_h_8"><a href="javascript:;" class="num">8F</a> <a href="javascript:;" class="word">家居</a></li>
    </ul>
</div>
<!--StandardLayout End-->
<div id="faq">
    <div class="faq-wrapper">
        <ul>
            <li>
                <dl class="s1">
                    <dt>
                        帮助中心
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=10"
                                  title="查看已购买商品"> 查看已购买商品 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=7"
                                  title="如何搜索"> 如何搜索 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=40"
                                  title="积分兑换说明"> 积分兑换说明 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=9"
                                  title="我要买"> 我要买 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=6"
                                  title="如何注册成为会员"> 如何注册成为会员 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s2">
                    <dt>
                        店主之家
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=11"
                                  title="如何管理店铺"> 如何管理店铺 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=13"
                                  title="如何发货"> 如何发货 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=15"
                                  title="如何申请开店"> 如何申请开店 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=12"
                                  title="查看售出商品"> 查看售出商品 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=14"
                                  title="商城商品推荐"> 商城商品推荐 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s3">
                    <dt>
                        支付方式
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=29"
                                  title="邮局汇款"> 邮局汇款 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=16"
                                  title="如何注册支付宝"> 如何注册支付宝 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=28"
                                  title="分期付款"> 分期付款 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=30"
                                  title="公司转账"> 公司转账 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=17"
                                  title="在线支付"> 在线支付 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s4">
                    <dt>
                        售后服务
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=33"
                                  title="返修/退换货"> 返修/退换货 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=26"
                                  title="联系卖家"> 联系卖家 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=32"
                                  title="退换货流程"> 退换货流程 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=34"
                                  title="退款申请"> 退款申请 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=31"
                                  title="退换货政策"> 退换货政策 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s5">
                    <dt>
                        客服中心
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=19"
                                  title="会员修改个人资料"> 会员修改个人资料 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=21"
                                  title="修改收货地址"> 修改收货地址 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=18"
                                  title="会员修改密码"> 会员修改密码 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=20"
                                  title="商品发布"> 商品发布 </a></dd>
                </dl>
            </li>
            <li>
                <dl class="s6">
                    <dt>
                        关于我们
                    </dt>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=24"
                                  title="招聘英才"> 招聘英才 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=23"
                                  title="联系我们"> 联系我们 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=25"
                                  title="合作及洽谈"> 合作及洽谈 </a></dd>
                    <dd><i></i><a href="http://localhost/v4/shop/index.php?act=article&op=show&article_id=22"
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
                                <img src="http://localhost/v4/data/upload/shop/common/04781087584534013.png"
                                     class="f-l jImg img-error">
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
        | <a href="http://localhost/index.php?act=article&article_id=24">招聘英才</a>
        | <a href="http://localhost/index.php?act=article&article_id=25">合作及洽谈</a>
        | <a href="http://localhost/index.php?act=article&article_id=23">联系我们</a>
        | <a href="http://localhost/index.php?act=article&article_id=22">关于我们</a>
        | <a href="http://localhost/delivery">物流自取</a>
        | <a href="http://localhost/index.php?act=link">友情链接</a>
    </p>
    Copyright 2015 <a href="http://bbs.33hao.com" target="_blank">好商城</a> All rights reserved.<br/>本演示来源于<a
            href="http://33haocom.taobao.com" target="_blank">bbs.33hao.com</a><br/></div>
<script type="text/javascript" src="http://localhost/v4/data/resource/js/jquery.cookie.js"></script>
<link href="http://localhost/v4/data/resource/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://localhost/v4/data/resource/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="http://localhost/v4/data/resource/js/qtip/jquery.qtip.min.js"></script>
<link href="http://localhost/v4/data/resource/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<!-- 对比 -->
<script src="http://localhost/v4/shop/resource/js/compare.js"></script>
<script type="text/javascript">
    $(function () {
        // Membership card
        $('[nctype="mcard"]').membershipCard({type: 'shop'});
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
    }
    if ($("img[rel='lazy']").length > 0) {
        $(window).scroll(function () {
            fade();
        });
    }
    ;
    fade();
</script>
</body>
</html>
