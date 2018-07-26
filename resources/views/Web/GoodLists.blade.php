@extends('Public.header')
@section('css')
    <link href="/css/layout.css" rel="stylesheet" type="text/css"/>
@endsection
@section('body')
    <div class="nch-breadcrumb-layout">
        <div class="nch-breadcrumb wrapper">
            <span><a href="http://127.0.0.1/v4/shop">首页</a></span>
            <span class="arrow">></span>
            <span><a href="http://127.0.0.1/v4/shop/index.php?act=search&op=index&cate_id=256">数码办公</a></span>
            <span class="arrow">></span>
            <span>手机配件</span>
        </div>
    </div>
    <div class="nch-container wrapper">
        <div class="right">
            <div id="gc_goods_recommend_div" style="width:980px;"></div>
            <div class="shop_con_list" id="main-nav-holder">
                <nav class="sort-bar" id="main-nav">
                    <div class="nch-sortbar-array"> 排序方式：
                        <ul>
                            <li class="selected">
                                <a href="http://127.0.0.1/v4/shop/index.php?act=search&op=index&cate_id=258&order=0&key=0" title="默认排序">默认</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1/v4/shop/index.php?act=search&op=index&cate_id=258&key=1&order=2" title="点击按销量从高到低排序">销量<i></i></a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1/v4/shop/index.php?act=search&op=index&cate_id=258&key=2&order=2" title="点击按人气从高到低排序">人气<i></i></a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1/v4/shop/index.php?act=search&op=index&cate_id=258&key=3&order=2" title="点击按价格从高到低排序">价格<i></i></a>
                            </li>
                            <li>
                                <div>
                                    <input id="priceMin" title="最低价" value="" maxlength="6" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="input-txt"><em>-</em><input id="priceMax" title="最高价" value="" maxlength="6" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');" class="input-txt"><a id="priceBtn" class="priceBtn">确定</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="nch-sortbar-owner">
                        <span><a href="http://127.0.0.1/v4/shop/index.php?act=search&op=index&cate_id=258&type=1"><i></i>平台自营</a></span>
                    </div>
                    <div class="nch-sortbar-owner">
                        <span><a href="http://127.0.0.1/v4/shop/index.php?act=search&op=index&cate_id=258&gift=1"><i></i>赠品</a></span>
                    </div>
                </nav>
                <div>
                    <div class="squares" nc_type="current_display_mode">
                        <input type="hidden" id="lockcompare" value="unlock"/>
                        <ul class="list_pic">
                            <li class="item">
                                <div class="goods-content" nctype_goods=" 233" nctype_store="1">
                                    <div class="goods-pic">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=233" target="_blank" title="我在巴扎黑"><img src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_05854006451540344_240.png" title="我在巴扎黑" alt="我在巴扎黑"/></a>
                                    </div>
                                    <div class="goods-info">
                                        <div class="goods-pic-scroll-show">
                                            <ul>
                                                <li class="selected">
                                                    <a href="javascript:void(0);"><img src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_05854006451540344_60.png"/></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="goods-name">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=233" target="_blank" title="没有卖点">我在巴扎黑<em>没有卖点</em></a>
                                        </div>
                                        <div class="goods-price"><em class="sale-price" title="商城价：&yen;100.00">&yen;100.00</em>
                                            <em class="market-price" title="市场价：&yen;1000.00">&yen;1000.00</em>
                                            <span class="raty" data-score="5"></span></div>
                                        <div class="goods-sub">
                                            <span class="goods-compare" nc_type="compare_233" data-param='{"gid":"233"}'><i></i>加入对比</span>
                                        </div>
                                        <div class="sell-stat">
                                            <ul>
                                                <li>
                                                    <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=233#ncGoodsRate" target="_blank" class="status">0</a>
                                                    <p>商品销量</p>
                                                </li>
                                                <li>
                                                    <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=comments_list&goods_id=233" target="_blank">0</a>
                                                    <p>用户评论</p>
                                                </li>
                                                <li><em member_id="1">&nbsp;</em></li>
                                            </ul>
                                        </div>
                                        <div class="store">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=index&store_id=1" title="admin" class="name">admin</a>
                                        </div>
                                        <div class="add-cart">
                                            <a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:233}"><i class="icon-shopping-cart"></i>加入购物车</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
                <div class="tc mt20 mb20">
                    <div class="pagination">
                        <ul>
                            <li><span>首页</span></li>
                            <li><span>上一页</span></li>
                            <li><span class="currentpage">1</span></li>
                            <li><span>下一页</span></li>
                            <li><span>末页</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="guesslike_div" style="width:980px;"></div>
        </div>
        <div class="clear"></div>
    </div>
@endsection
