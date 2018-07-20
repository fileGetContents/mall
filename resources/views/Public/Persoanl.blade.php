@extends('Public.header')
@section('body')
    <div class="nch-breadcrumb-layout">
        <div class="nch-breadcrumb wrapper"><i class="icon-home"></i>
            <span><a href="http://127.0.0.1/v4/shop">首页</a></span><span class="arrow">&gt;</span>
            <span><a href="http://127.0.0.1/v4/shop/index.php?act=member&amp;op=home">我的商城</a></span><span class="arrow">&gt;</span>
            <span>账户信息</span>
        </div>
    </div>
    <div id="toolTipLayer" style="position: absolute; z-index: 999; display: none; visibility: visible; left: 820px; top: 284px;"></div>
    <div class="ncm-container">
        <div class="left-layout">
            <div class="ncm-l-top">
                <h2><a href="http://127.0.0.1/v4/shop/index.php?act=member&amp;op=home" title="我的商城">我的商城</a></h2>
                <a href="javascript:void(0)" title="常用菜单设置" class="set-btn"></a>
                <div class="set-container-arrow"></div>
                <div class="set-container">
                    <div class="title">
                        <h3>常用菜单设置</h3>
                        <a href="javascript:void(0)" title="关闭" class="close-btn close-container" nctype="closeCommonOperations"></a>
                    </div>
                    <div class="tip">勾选您经常使用的菜单，最多可选5个。</div>
                    <div class="menu-list">
                        <dl class="collapsed" nctype="checkcCommonOperations">
                            <dt>交易管理</dt>
                            <dd>
                                <label>
                                    <input name="member_order" data-value="http://127.0.0.1/v4/shop/index.php?act=member_order&amp;op=index" data-name="实物交易订单" type="checkbox" class="checkbox">
                                    实物交易订单</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_vr_order" data-value="http://127.0.0.1/v4/shop/index.php?act=member_vr_order&amp;op=index" data-name="虚拟兑码订单" type="checkbox" class="checkbox">
                                    虚拟兑码订单</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_favorites" data-value="http://127.0.0.1/v4/shop/index.php?act=member_favorites&amp;op=fglist" data-name="我的收藏" type="checkbox" class="checkbox">
                                    我的收藏</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_evaluate" data-value="http://127.0.0.1/v4/shop/index.php?act=member_evaluate&amp;op=list" data-name="交易评价/晒单" type="checkbox" class="checkbox">
                                    交易评价/晒单</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="predeposit" data-value="http://127.0.0.1/v4/shop/index.php?act=predeposit&amp;op=pd_log_list" data-name="账户余额" type="checkbox" class="checkbox">
                                    账户余额</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_flea" data-value="http://127.0.0.1/v4/shop/index.php?act=member_flea&amp;op=index" data-name="我的闲置" type="checkbox" class="checkbox">
                                    我的闲置</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_points" data-value="http://127.0.0.1/v4/shop/index.php?act=member_points&amp;op=index" data-name="我的积分" type="checkbox" class="checkbox">
                                    我的积分</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_voucher" data-value="http://127.0.0.1/v4/shop/index.php?act=member_voucher&amp;op=index" data-name="我的代金券" type="checkbox" class="checkbox">
                                    我的代金券</label>
                            </dd>
                        </dl>
                        <dl class="collapsed" nctype="checkcCommonOperations">
                            <dt>客户服务</dt>
                            <dd>
                                <label>
                                    <input name="member_refund" data-value="http://127.0.0.1/v4/shop/index.php?act=member_refund&amp;op=index" data-name="退款及退货" type="checkbox" class="checkbox">
                                    退款及退货</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_complain" data-value="http://127.0.0.1/v4/shop/index.php?act=member_complain&amp;op=index" data-name="交易投诉" type="checkbox" class="checkbox">
                                    交易投诉</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_consult" data-value="http://127.0.0.1/v4/shop/index.php?act=member_consult&amp;op=my_consult" data-name="商品咨询" type="checkbox" class="checkbox">
                                    商品咨询</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_inform" data-value="http://127.0.0.1/v4/shop/index.php?act=member_inform&amp;op=index" data-name="违规举报" type="checkbox" class="checkbox">
                                    违规举报</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_mallconsult" data-value="http://127.0.0.1/v4/shop/index.php?act=member_mallconsult&amp;op=index" data-name="平台客服" type="checkbox" class="checkbox">
                                    平台客服</label>
                            </dd>
                        </dl>
                        <dl class="collapsed" nctype="checkcCommonOperations">
                            <dt>资料管理</dt>
                            <dd>
                                <label>
                                    <input name="member_information" data-value="http://127.0.0.1/v4/shop/index.php?act=member_information&amp;op=member" data-name="账户信息" type="checkbox" class="checkbox">
                                    账户信息</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_security" data-value="http://127.0.0.1/v4/shop/index.php?act=member_security&amp;op=index" data-name="账户安全" type="checkbox" class="checkbox">
                                    账户安全</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_address" data-value="http://127.0.0.1/v4/shop/index.php?act=member_address&amp;op=address" data-name="收货地址" type="checkbox" class="checkbox">
                                    收货地址</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_message" data-value="http://127.0.0.1/v4/shop/index.php?act=member_message&amp;op=message" data-name="我的消息" type="checkbox" class="checkbox">
                                    我的消息</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_snsfriend" data-value="http://127.0.0.1/v4/shop/index.php?act=member_snsfriend&amp;op=find" data-name="我的好友" type="checkbox" class="checkbox">
                                    我的好友</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_goodsbrowse" data-value="http://127.0.0.1/v4/shop/index.php?act=member_goodsbrowse&amp;op=list" data-name="我的足迹" type="checkbox" class="checkbox">
                                    我的足迹</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_connect" data-value="http://127.0.0.1/v4/shop/index.php?act=member_connect&amp;op=qqbind" data-name="第三方账号登录" type="checkbox" class="checkbox">
                                    第三方账号登录</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="member_sharemanage" data-value="http://127.0.0.1/v4/shop/index.php?act=member_sharemanage&amp;op=index" data-name="分享绑定" type="checkbox" class="checkbox">
                                    分享绑定</label>
                            </dd>
                        </dl>
                        <dl class="collapsed" nctype="checkcCommonOperations">
                            <dt>应用管理</dt>
                            <dd>
                                <label>
                                    <input name="member_flea" data-value="http://127.0.0.1/v4/shop/index.php?act=member_flea&amp;op=index" data-name="我的闲置" type="checkbox" class="checkbox">
                                    我的闲置</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="sns" data-value="http://127.0.0.1/v4/shop/index.php?act=member_snshome&amp;op=index" data-name="个人主页" type="checkbox" class="checkbox">
                                    个人主页</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="cms" data-value="http://127.0.0.1/v4/cms/index.php?act=member_article&amp;op=article_list" data-name="我的CMS" type="checkbox" class="checkbox">
                                    我的CMS</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="circle" data-value="http://127.0.0.1/v4/circle/index.php?act=p_center&amp;op=index" data-name="我的圈子" type="checkbox" class="checkbox">
                                    我的圈子</label>
                            </dd>
                            <dd>
                                <label>
                                    <input name="microshop" data-value="http://127.0.0.1/v4/microshop/index.php?act=home&amp;op=index&amp;member_id=1" data-name="我的微商城" type="checkbox" class="checkbox">
                                    我的微商城</label>
                            </dd>
                        </dl>
                    </div>
                    <div class="bottom">
                        <input type="submit" value="确定" class="setting" nctype="closeCommonOperations">
                    </div>
                </div>
            </div>
            <div class="ncm-user-info">
                <div class="avatar"><img src="/images/default_user_portrait.gif">
                    <div class="frame"></div>
                </div>
                <div class="handle">
                    <a href="http://127.0.0.1/v4/shop/index.php?act=member_information&amp;op=avatar" title="修改头像"><i class="icon-camera"></i>修改头像</a><a href="http://127.0.0.1/v4/shop/index.php?act=member_information&amp;op=member" title="修改资料"><i class="icon-pencil"></i>修改资料</a><a href="http://127.0.0.1/v4/shop/index.php?act=login&amp;op=logout" title="安全退出"><i class="icon-off"></i>安全退出</a>
                </div>
                <div class="name">admin&nbsp;
                    <div class="nc-grade-mini" style="cursor:pointer;" onclick="javascript:go(&#39;http://127.0.0.1/v4/shop/index.php?act=pointgrade&amp;op=index&#39;);">
                        V0
                    </div>
                </div>
            </div>
            <ul class="ncm-sidebar ncm-quick-menu">
                <li class="side-menu-quick" nctype="commonOperations" style="display: none;">
                    <a href="javascript:void(0)">
                        <h3>常用操作</h3>
                    </a>
                    <ul>
                    </ul>
                </li>
            </ul>
            <ul id="sidebarMenu" class="ncm-sidebar">
                <li class="side-menu"><a href="javascript:void(0)" key="trade">
                        <h3>交易管理</h3>
                    </a>
                    <ul>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_order&amp;op=index">实物交易订单</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_vr_order&amp;op=index">虚拟兑码订单</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_favorites&amp;op=fglist">我的收藏</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_evaluate&amp;op=list">交易评价/晒单</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=predeposit&amp;op=pd_log_list">账户余额</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_flea&amp;op=index">我的闲置</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_points&amp;op=index">我的积分</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_voucher&amp;op=index">我的代金券</a></li>
                    </ul>
                </li>
                <li class="side-menu"><a href="javascript:void(0)" key="serv">
                        <h3>客户服务</h3>
                    </a>
                    <ul>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_refund&amp;op=index">退款及退货</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_complain&amp;op=index">交易投诉</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_consult&amp;op=my_consult">商品咨询</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_inform&amp;op=index">违规举报</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_mallconsult&amp;op=index">平台客服</a>
                        </li>
                    </ul>
                </li>
                <li class="side-menu"><a href="javascript:void(0)" key="info">
                        <h3>资料管理</h3>
                    </a>
                    <ul>
                        <li class="selected">
                            <a href="http://127.0.0.1/v4/shop/index.php?act=member_information&amp;op=member">账户信息</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_security&amp;op=index">账户安全</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_address&amp;op=address">收货地址</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_message&amp;op=message">我的消息</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_snsfriend&amp;op=find">我的好友</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_goodsbrowse&amp;op=list">我的足迹</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_connect&amp;op=qqbind">第三方账号登录</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_sharemanage&amp;op=index">分享绑定</a>
                        </li>
                    </ul>
                </li>
                <li class="side-menu"><a href="javascript:void(0)" key="app">
                        <h3>应用管理</h3>
                    </a>
                    <ul>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_flea&amp;op=index">我的闲置</a></li>
                        <li><a href="http://127.0.0.1/v4/shop/index.php?act=member_snshome&amp;op=index">个人主页</a></li>
                        <li><a href="http://127.0.0.1/v4/cms/index.php?act=member_article&amp;op=article_list">我的CMS</a>
                        </li>
                        <li><a href="http://127.0.0.1/v4/circle/index.php?act=p_center&amp;op=index">我的圈子</a></li>
                        <li>
                            <a href="http://127.0.0.1/v4/microshop/index.php?act=home&amp;op=index&amp;member_id=1">我的微商城</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        @yield('info')
        <div class="clear"></div>
    </div>
@endsection
