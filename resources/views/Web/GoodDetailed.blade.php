@extends('Public.header')
@section('css')
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/home_goods.css" rel="stylesheet" type="text/css"/>
@endsection
@section('body')
    <div class="nch-breadcrumb-layout">
        <div class="nch-breadcrumb wrapper"><i class="icon-home"></i>
            <span><a href="http://127.0.0.1/v4/shop">首页</a></span><span class="arrow">&gt;</span>
            <span><a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;cate_id=593">食品饮料</a></span><span class="arrow">&gt;</span>
            <span><a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;cate_id=598">中外名酒</a></span><span class="arrow">&gt;</span>
            <span><a href="http://127.0.0.1/v4/shop/index.php?act=search&amp;op=index&amp;cate_id=630">葡萄酒</a></span><span class="arrow">&gt;</span>
            <span>至尊金奖 法国原瓶进口AOC红酒 任选一箱 红沙城堡红葡萄酒 原装进口</span>
        </div>
    </div>
    <div class="wrapper pr">
        <input type="hidden" id="lockcompare" value="unlock"/>
        <div class="ncs-detail ownshop">
            <!-- S 商品图片 -->
            <div id="ncs-goods-picture" class="ncs-goods-picture">
                <div class="gallery_wrap">
                    <div class="gallery">
                        <img title="鼠标滚轮向上或向下滚动，能放大或缩小图片哦~" src="http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_360.gif" class="cloudzoom" data-cloudzoom="zoomImage: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_1280.gif'">
                    </div>
                </div>
                <div class="controller_wrap">
                    <div class="controller">
                        <ul>
                            <li>
                                <img title="鼠标滚轮向上或向下滚动，能放大或缩小图片哦~" class='cloudzoom-gallery' src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211855225368_60.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_360.gif', zoomImage: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_1280.gif' " width="60" height="60">
                            </li>
                            <li>
                                <img title="鼠标滚轮向上或向下滚动，能放大或缩小图片哦~" class='cloudzoom-gallery' src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211827276143_60.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_360.gif', zoomImage: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_1280.gif' " width="60" height="60">
                            </li>
                            <li>
                                <img title="鼠标滚轮向上或向下滚动，能放大或缩小图片哦~" class='cloudzoom-gallery' src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211883385668_60.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_360.gif', zoomImage: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_1280.gif' " width="60" height="60">
                            </li>
                            <li>
                                <img title="鼠标滚轮向上或向下滚动，能放大或缩小图片哦~" class='cloudzoom-gallery' src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211907013907_60.jpg" data-cloudzoom="useZoom: '.cloudzoom', image: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_360.gif', zoomImage: 'http://127.0.0.1/v4/data/upload/shop/common/default_goods_image_1280.gif' " width="60" height="60">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- S 商品基本信息 -->
            <div class="ncs-goods-summary">
                <div class="name">
                    <h1>2015春款打底毛衫拼色毛衣 长袖套头针织衫 莺 橙色</h1>
                    <strong></strong></div>
                <div class="ncs-meta">

                    <!-- S 商品参考价格 -->
                    <dl>
                        <dt>市&nbsp;场&nbsp;价：</dt>
                        <dd class="cost-price"><strong>&yen;568.00</strong></dd>
                    </dl>
                    <!-- E 商品参考价格 -->
                    <!-- S 商品发布价格 -->
                    <dl>
                        <dt>商&nbsp;城&nbsp;价：</dt>
                        <dd class="price">
                            <strong>&yen;179.00</strong>
                        </dd>
                    </dl>
                    <dl class="rate">
                        <dt>商品评分：</dt>
                        <!-- S 描述相符评分 -->
                        <dd><span class="raty" data-score="5"></span><a href="#ncGoodsRate">共有0条评价</a></dd>
                        <!-- E 描述相符评分 -->
                    </dl>
                    <!-- E 商品发布价格 -->
                    <div class="ncs-goods-code">
                        <p>
                            <img src="http://127.0.0.1/v4/data/upload/shop/store/default_qrcode.png" title="用商城手机客户端扫描二维码直达商品详情内容">
                        </p>
                        <span class="ncs-goods-code-note"><i></i>客户端扫购有惊喜</span></div>
                </div>
                <div class="ncs-logistics"><!-- S 物流与运费新布局展示  -->
                    <dl id="ncs-freight" class="ncs-freight">
                        <dt>配&nbsp;&nbsp;送&nbsp;&nbsp;至：</dt>
                        <dd class="ncs-freight_box">
                            <div id="ncs-freight-selector" class="ncs-freight-select">
                                <div class="text">
                                    <div>北京北京市西城区</div>
                                    <b>∨</b></div>
                                <div class="content">
                                    <div id="ncs-stock" class="ncs-stock" data-widget="tabs">
                                        <div class="mt">
                                            <ul class="tab">
                                                <li data-index="0" data-widget="tab-item" class="curr">
                                                    <a href="#none" class="hover"><em>北京</em><i> ∨</i></a></li>
                                            </ul>
                                        </div>
                                        <div id="stock_province_item" data-widget="tab-content" data-area="0">
                                            <ul class="area-list">
                                            </ul>
                                        </div>
                                        <div id="stock_city_item" data-widget="tab-content" data-area="1" style="display: none;">
                                            <ul class="area-list">
                                            </ul>
                                        </div>
                                        <div id="stock_area_item" data-widget="tab-content" data-area="2" style="display: none;">
                                            <ul class="area-list">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:;" class="close" onclick="$('#ncs-freight-selector').removeClass('hover')">关闭</a>
                            </div>
                            <div id="ncs-freight-prompt"><strong>有货</strong>
                                免运费
                            </div>
                        </dd>
                    </dl>
                    <!-- S 物流与运费新布局展示  -->
                </div>
                <div class="ncs-key">

                    <!-- S 商品规格值-->
                    <hr/>
                    <dl nctype="nc-spec">
                        <dt>颜色：</dt>
                        <dd>
                            <ul nctyle="ul_sign">
                                <!-- 图片类型规格-->
                                <li class="sp-img">
                                    <a href="javascript:void(0);" class="" data-param="{valid:222}" title="蓝色"><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211646104580_60.jpg"/>蓝色<i></i></a>
                                </li>
                                <!-- 图片类型规格-->
                                <li class="sp-img">
                                    <a href="javascript:void(0);" class="" data-param="{valid:224}" title="绿色"><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211211965600_60.jpg"/>绿色<i></i></a>
                                </li>
                                <!-- 图片类型规格-->
                                <li class="sp-img">
                                    <a href="javascript:void(0);" class="hovered" data-param="{valid:227}" title="橙色"><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211855225368_60.jpg"/>橙色<i></i></a>
                                </li>
                            </ul>
                        </dd>
                    </dl>
                    <!-- E 商品规格值-->
                </div>
                <!-- S 购买数量及库存 -->
                <div class="ncs-buy">
                    <div class="ncs-figure-input">
                        <input type="text" name="" id="quantity" value="1" size="3" maxlength="6" class="input-text">
                        <a href="javascript:void(0)" class="increase" nctype="increase">&nbsp;</a>
                        <a href="javascript:void(0)" class="decrease" nctype="decrease">&nbsp;</a></div>
                    <div class="ncs-point" style="display: none;"><i></i>
                        <!-- S 库存 -->
                        <span>您选择的商品库存<strong nctype="goods_stock">100</strong>件</span>
                        <!-- E 库存 -->
                    </div>

                    <!-- S 提示已选规格及库存不足无法购买 -->
                    <!-- E 提示已选规格及库存不足无法购买 -->
                    <div class="ncs-btn">
                        <!-- v3-b10 限制购买-->
                        <!-- 加入购物车-->
                        <a href="javascript:void(0);" nctype="addcart_submit" class="addcart " title="添加购物车"><i class="icon-shopping-cart"></i>添加购物车</a>
                        <!-- 立即购买-->
                        <a href="javascript:void(0);" nctype="buynow_submit" class="buynow " title="立即购买">立即购买</a>

                        <!-- v3-b10 end-->

                        <!-- S 加入购物车弹出提示框 -->
                        <div class="ncs-cart-popup">
                            <dl>
                                <dt>成功添加到购物车<a title="关闭" onClick="$('.ncs-cart-popup').css({'display':'none'});">X</a>
                                </dt>
                                <dd>购物车共有 <strong id="bold_num"></strong> 种商品 总金额为：<em id="bold_mly" class="saleP"></em>
                                </dd>
                                <dd class="btns">
                                    <a href="javascript:void(0);" class="ncs-btn-mini ncs-btn-green" onclick="location.href='http://127.0.0.1/v4/shop/index.php?act=cart'">查看购物车</a>
                                    <a href="javascript:void(0);" class="ncs-btn-mini" value="" onclick="$('.ncs-cart-popup').css({'display':'none'});">继续购物</a>
                                </dd>
                            </dl>
                        </div>
                        <!-- E 加入购物车弹出提示框 -->
                    </div>
                    <!-- E 购买按钮 -->
                </div>
                <!-- E 购买数量及库存 -->

                <!--E 商品信息 -->
            </div>
            <!-- E 商品图片及收藏分享 -->
            <div class="ncs-handle">
                <!-- S 分享 -->
                <a href="javascript:void(0);" class="share" nc_type="sharegoods" data-param='{"gid":"44"}'><i></i>分享<span>(<em nc_type="sharecount_44">0</em>)</span></a>
                <!-- S 收藏 -->
                <a href="javascript:collect_goods('44','count','goods_collect');" class="favorite"><i></i>收藏商品<span>(<em nctype="goods_collect">0</em>)</span></a>
                <!-- S 对比 -->
                <a href="javascript:void(0);" class="compare" nc_type="compare_44" data-param='{"gid":"44"}'><i></i>加入对比</a>
                <!-- S 举报 -->
                <!-- End --> </div>

            <!--S 店铺信息-->
            <div style="position: absolute; z-index: 2; top: -1px; right: -1px;">
                <!--店铺基本信息 S-->
                <div class="ncs-info">
                    <div class="title">
                        <h4>admin</h4>
                    </div>
                    <div class="content">


                        <dl class="messenger">
                            <dt>联系方式：</dt>
                            <dd><span member_id="1"></span>
                            </dd>
                        </dl>
                        <!--只有实名认证实体店认证后才显示保障体系 by 33hao.com -->

                        <!--保证金金额-->


                        <!--保障体系 by 33hao.com-->

                        <div class="goto">
                            <a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=index&store_id=1">进入商家店铺</a><a href="javascript:collect_store('1','count','store_collect')">收藏店铺<em nctype="store_collect">0</em></a>
                        </div>
                        <div class="shop-other" id="shop-other">
                            <ul>
                                <li class="ncs-info-btn-map">
                                    <a href="javascript:void(0)" class="pngFix"><span>店铺地图</span><b></b> <!-- 店铺地图 -->
                                        <div class="ncs-info-map" id="map_container" style="width:208px;height:208px;"></div>
                                    </a></li>
                                <li class="ncs-info-btn-qrcode">
                                    <a href="javascript:void(0)" class="pngFix"><span>店铺二维码</span><b></b>
                                        <p class="ncs-info-qrcode">
                                            <img src="http://127.0.0.1/v4/data/upload/shop/store/default_qrcode.png" title="店铺原始地http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1" style="width:208px;height:208px">
                                        </p>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--店铺基本信息 E-->
                <!--S 看了又看 -->
                <div class="ncs-lal">
                    <div class="title">看了又看</div>
                    <div class="content">
                        <ul>
                            <li>
                                <div class="goods-pic">
                                    <a title="新款 女款 拼接 不规则摆 长袖针织衫开衫 杏雨 粉色" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=54">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418254218437108_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥99.00</div>
                            </li>
                            <li>
                                <div class="goods-pic">
                                    <a title="春装 披肩式 超短款 针织 衫开衫 女装 青鸟 黑色" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=49">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418240955916042_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥100.00</div>
                            </li>
                            <li>
                                <div class="goods-pic">
                                    <a title="春装 披肩式 超短款 针织 衫开衫 女装 青鸟 梅红" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=47">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418240641767556_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥129.00</div>
                            </li>
                            <li>
                                <div class="goods-pic">
                                    <a title="正品 2015春装新款 女 绣花针织衫 开衫外套浮桑初 梅红" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=40">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418207471410641_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥189.00</div>
                            </li>
                            <li>
                                <div class="goods-pic">
                                    <a title="2015春款打底毛衫拼色毛衣 长袖套头针织衫 莺 绿色" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=43">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211211965600_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥179.00</div>
                            </li>
                            <li>
                                <div class="goods-pic">
                                    <a title="春装 披肩式 超短款 针织 衫开衫 女装 青鸟 橙色" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=50">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418241398474746_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥129.00</div>
                            </li>
                            <li>
                                <div class="goods-pic">
                                    <a title="正品 2015春装新款 女 绣花针织衫 开衫外套浮桑初 绿色" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=39">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418206625430066_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥189.00</div>
                            </li>
                            <li>
                                <div class="goods-pic">
                                    <a title="新款 女款 拼接 不规则摆 长袖针织衫开衫 杏雨 白色" href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=52">
                                        <img alt="" src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418253240878850_60.jpg"/>
                                    </a></div>
                                <div class="goods-price">￥58.00</div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--E 看了又看 -- >

              </div>
                  <!--E 店铺信息 -->
            </div>
            <div class="clear"></div>
        </div>
        <!-- S 优惠套装 -->
        <div class="ncs-promotion" id="nc-bundling" style="display:none;"></div>
        <!-- E 优惠套装 -->
        <div id="content" class="ncs-goods-layout expanded">
            <div class="ncs-goods-main" id="main-nav-holder">
                <div class="tabbar pngFix" id="main-nav">
                    <div class="ncs-goods-title-nav">
                        <ul id="categorymenu">
                            <li class="current"><a id="tabGoodsIntro" href="#content">商品详情</a></li>
                            <li><a id="tabGoodsRate" href="#content">商品评价<em>(0)</em></a></li>
                            <li><a id="tabGoodsTraded" href="#content">销售记录<em>(0)</em></a></li>
                            <li><a id="tabGuestbook" href="#content">购买咨询</a></li>
                        </ul>
                        <div class="switch-bar"><a href="javascript:void(0)" id="fold">&nbsp;</a></div>
                    </div>
                </div>
                <div class="ncs-intro">
                    <div class="content bd" id="ncGoodsIntro">
                        <ul class="nc-goods-sort">
                            <li>品牌：爱帝</li>
                            <li>款式：毛衣</li>
                            <li>材质：羊毛/羊绒</li>
                            <li>价格：100-199</li>
                            <li>袖长：长袖</li>
                            <li>风格：原创设计</li>
                        </ul>
                        <div class="ncs-goods-info-content">
                            <div class="default"><p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" title="温馨提示.jpg" src="http://pimg1.imglefeng.com/decoration/1000000029/947d983961bd9a8fcc2ea78818fbd5f1_1386214294101.jpg"/>&nbsp;
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img03.taobaocdn.com/imgextra/i3/1124754276/T2bpwSXeNaXXXXXXXX_%21%211124754276.jpg" style="text-align: absMiddle;"/>
                                </p>
                                <p>
                                    &nbsp;
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" id="ids-tag-m-5" class="ke_anchor" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img04.taobaocdn.com/imgextra/i4/1124754276/T2_JMRXdtaXXXXXXXX_%21%211124754276.jpg" style="text-align: absMiddle;"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T2GPiRXj8bXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <table class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="750">
                                    <tbody>
                                    <tr>
                                        <td>
                                            &nbsp;
                                        </td>
                                        <td>
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img03.taobaocdn.com/imgextra/i3/1124754276/T2o5ciXfpXXXXXXXXX_%21%211124754276.jpg" height="90" width="750"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">
                                            <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T2p2jJXaxbXXXXXXXX_%21%211124754276.jpg"/>
                                        </td>
                                        <td>
                                            <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img02.taobaocdn.com/imgextra/i2/1124754276/T25UIRXb8aXXXXXXXX_%21%211124754276.jpg" height="58" width="440"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="font-family:微软雅黑;font-size:12px; background-color: #ffffff; height: 102px; width: 440px;">
                                            <p>
                                                分割的情感落成一片一片的<br/>
                                                棱角坚实地分布在人们身着的欣喜中<br/>
                                                温暖自空气 流入身体<br/>
                                                你在一个果园里采摘到热爱<br/>
                                                或者简单的设计以及无法藏掖的暧昧<br/>
                                                拒绝无所适从的情感<br/>
                                                一切都很自然、美丽以及大方
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="height: 30px;">
                                            <table class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="750">
                                                <tbody>
                                                <tr>
                                                    <td style="height: 30px; width: 70px;">
                                                        &nbsp;
                                                    </td>
                                                    <td style="width: 14px;">
                                                        <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img02.taobaocdn.com/imgextra/i2/1124754276/T2269NXjNbXXXXXXXX_%21%211124754276.jpg" height="30" width="14"/>
                                                    </td>
                                                    <td style="width: 666px;">
                                                        <p>
                                                            24160069 莺伞 腈棉直筒螺纹下摆梭织毛衣
                                                        </p>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <table class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="750">
                                                <tbody>
                                                <tr>
                                                    <td style="background-color: #ffffff; height: 30px; width: 70px;">
                                                        &nbsp;
                                                    </td>
                                                    <td style="font-family:微软雅黑;font-size:12px; width: 680px;">
                                                        设计点：直筒型/大圆领/拼接袖/腈棉/几何分割图案/罗纹下摆
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img03.taobaocdn.com/imgextra/i3/1124754276/T2FZESXk0XXXXXXXXX_%21%211124754276.jpg" style="text-align: absMiddle;"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img02.taobaocdn.com/imgextra/i2/1124754276/T22BrjXf0XXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T298ZRXdhaXXXXXXXX_%21%211124754276.jpg" style="text-align: absMiddle;"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img02.taobaocdn.com/imgextra/i2/1124754276/T2.6niXmlaXXXXXXXX_%21%211124754276.jpg"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T2Z0VvXXtOXXXXXXXX_%21%211124754276.jpg"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img02.taobaocdn.com/imgextra/i2/1124754276/T2BX6kXbtXXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img03.taobaocdn.com/imgextra/i3/1124754276/T2mWbnXfBaXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T2KX_nXgXaXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T2CdDnXgRXXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img04.taobaocdn.com/imgextra/i4/1124754276/T2o.2iXXNbXXXXXXXX_%21%211124754276.jpg"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img02.taobaocdn.com/imgextra/i2/1124754276/T2uWlvXcdOXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <p>
                                    &nbsp;
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" id="ids-tag-m-4" class="ke_anchor" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img02.taobaocdn.com/imgextra/i2/1124754276/T2JksTXXtXXXXXXXXX_%21%211124754276.jpg" style="text-align: absMiddle;"/>
                                </p>
                                <table style="color:#292929;font-size:12px;font-weight:bold;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="685">
                                    <tbody>
                                    <tr>
                                        <td align="right" style="width: 72px;">
                                            产品款号：
                                        </td>
                                        <td style="width: 322px;">
                                            24160069
                                        </td>
                                        <td align="right" style="width: 58px;">
                                            柔软：
                                        </td>
                                        <td valign="center" style="width: 233px;">
                                            <ul class="list-paddingleft-2">
                                                <li>
                                                    <p>
                                                        <span style="background-color:#5d5d5d;color:#ffffff;">柔软</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        适中
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        偏硬
                                                    </p>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" style="width: 72px;">
                                            产品昵称：
                                        </td>
                                        <td style="width: 322px;">
                                            莺伞
                                        </td>
                                        <td align="right" style="width: 58px;">
                                            厚度：
                                        </td>
                                        <td style="width: 233px;">
                                            <ul class="list-paddingleft-2">
                                                <li>
                                                    <p>
                                                        <span style="background-color:#ffffff;color:#000000;">加厚</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        厚&nbsp;
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        适中&nbsp;
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span style="background-color:#626262;color:#ffffff;">薄款</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" style="width: 72px;">
                                            产品颜色：
                                        </td>
                                        <td style="width: 322px;">
                                            蓝色 绿色 橙色
                                        </td>
                                        <td align="right" style="width: 58px;">
                                            弹力：
                                        </td>
                                        <td style="width: 233px;">
                                            <ul class="list-paddingleft-2">
                                                <li>
                                                    <p>
                                                        <span style="background-color:#ffffff;color:#000000;">超弹</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        弹力
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span style="background-color:#5f5f5f;color:#ffffff;">微弹</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        无弹力
                                                    </p>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" style="width: 72px;">
                                            产品成份：
                                        </td>
                                        <td style="width: 322px;">
                                            54.2%聚丙烯腈纤维45.8%棉
                                        </td>
                                        <td align="right" style="width: 58px;">
                                            版型：
                                        </td>
                                        <td style="width: 233px;">
                                            <ul class="list-paddingleft-2">
                                                <li>
                                                    <p>
                                                        <span style="background-color:#ffffff;color:#000000;">修身</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        直筒&nbsp;
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span style="background-color:#626262;color:#ffffff;">宽松</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        适中
                                                    </p>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right" style="width: 72px;">
                                            克&nbsp;&nbsp;&nbsp; 重：
                                        </td>
                                        <td style="width: 322px;">
                                            0.26kg
                                        </td>
                                        <td align="right" style="width: 58px;">
                                            <br/>
                                        </td>
                                        <td style="width: 233px;">
                                            <br/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" id="ids-tag-m-1" class="ke_anchor" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T26aZSXo4XXXXXXXXX_%21%211124754276.jpg" style="text-align: absMiddle;"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T2XXwgXe0aXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img04.taobaocdn.com/imgextra/i4/1124754276/T2I5cgXaRaXXXXXXXX_%21%211124754276.jpg"/>
                                </p>
                                <table style="font-size:12px;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="460">
                                    <tbody>
                                    <tr>
                                        <td style="height: 27px;">
                                            <b>尺码</b>
                                        </td>
                                        <td>
                                            <b>左身长</b>
                                        </td>
                                        <td>
                                            <b>适用胸围</b>
                                        </td>
                                        <td>
                                            <b>摆围</b>
                                        </td>
                                        <td>
                                            <b>肩宽</b>
                                        </td>
                                        <td>
                                            <b>袖长</b>
                                        </td>
                                        <td>
                                            <b>袖肥</b>
                                        </td>
                                        <td>
                                            <b>袖口</b>
                                        </td>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px;">
                                            S
                                        </td>
                                        <td>
                                            66
                                        </td>
                                        <td>
                                            92-96
                                        </td>
                                        <td>
                                            71
                                        </td>
                                        <td>
                                            56
                                        </td>
                                        <td>
                                            46
                                        </td>
                                        <td>
                                            25
                                        </td>
                                        <td>
                                            16
                                        </td>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px;">
                                            M
                                        </td>
                                        <td>
                                            68
                                        </td>
                                        <td>
                                            96-100
                                        </td>
                                        <td>
                                            75
                                        </td>
                                        <td>
                                            58
                                        </td>
                                        <td>
                                            47
                                        </td>
                                        <td>
                                            26
                                        </td>
                                        <td>
                                            17
                                        </td>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px;">
                                            L
                                        </td>
                                        <td>
                                            70
                                        </td>
                                        <td>
                                            100-104
                                        </td>
                                        <td>
                                            79
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            48
                                        </td>
                                        <td>
                                            27
                                        </td>
                                        <td>
                                            18
                                        </td>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px;">
                                            XL
                                        </td>
                                        <td>
                                            72
                                        </td>
                                        <td>
                                            104-108
                                        </td>
                                        <td>
                                            83
                                        </td>
                                        <td>
                                            62
                                        </td>
                                        <td>
                                            49
                                        </td>
                                        <td>
                                            28
                                        </td>
                                        <td>
                                            19
                                        </td>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px;">
                                            XXL
                                        </td>
                                        <td>
                                            74
                                        </td>
                                        <td>
                                            108-112
                                        </td>
                                        <td>
                                            87
                                        </td>
                                        <td>
                                            64
                                        </td>
                                        <td>
                                            50
                                        </td>
                                        <td>
                                            29
                                        </td>
                                        <td>
                                            20
                                        </td>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px;">
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <br/>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>
                                    由于尺码是纯手工测量所以难免存在1CM-3CM，请精灵们谅解。
                                </p>
                                <p>
                                    &nbsp;
                                </p>
                                <p>
                                    <img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" id="ids-tag-m-2" class="ke_anchor" src="http://a.tbcdn.cn/kissy/1.0.0/build/imglazyload/spaceball.gif"/><img alt="裂帛  裂帛2015秋款打底毛衫拼色毛衣 长袖套头针织衫24160069莺" src="http://img01.taobaocdn.com/imgextra/i1/1124754276/T2eJkSXm0XXXXXXXXX_%21%211124754276.jpg" style="text-align: absMiddle;"/>
                                </p>
                                <table style="font-size:12px;" class="ke-zeroborder" border="0" cellpadding="0" cellspacing="0" width="690">
                                    <tbody>
                                    <tr>
                                        <td style="height: 27px; width: 80px;">
                                            模特橙子
                                        </td>
                                        <td style="width: 70px;">
                                            身高168CM
                                        </td>
                                        <td style="width: 70px;">
                                            体重45KG
                                        </td>
                                        <td style="width: 120px;">
                                            三围： 81/57/82/
                                        </td>
                                        <td style="width: 350px;">
                                            肩宽 37CM&nbsp;&nbsp; 穿S码（裤子穿25码）
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px; width: 80px;">
                                            模特田心
                                        </td>
                                        <td style="width: 70px;">
                                            身高165CM
                                        </td>
                                        <td style="width: 70px;">
                                            体重45KG
                                        </td>
                                        <td style="width: 120px;">
                                            三围： 80/58.5/83/
                                        </td>
                                        <td style="width: 350px;">
                                            肩宽 37CM&nbsp;&nbsp; 穿S码（裤子穿25码）
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px; width: 80px;">
                                            试衣模特
                                        </td>
                                        <td style="width: 70px;">
                                            身高**CM
                                        </td>
                                        <td style="width: 70px;">
                                            体重**KG
                                        </td>
                                        <td style="width: 120px;">
                                            三围： **/**/**/
                                        </td>
                                        <td style="width: 350px;">
                                            平时穿M码/裤子26 码 此款***码 合适
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="height: 27px; width: 80px;">
                                            试衣模特
                                        </td>
                                        <td style="width: 70px;">
                                            身高**CM
                                        </td>
                                        <td style="width: 70px;">
                                            体重**KG
                                        </td>
                                        <td style="width: 120px;">
                                            三围： **/**/**/
                                        </td>
                                        <td style="width: 350px;">
                                            平时穿L码/裤子29 码 此款***码 合适
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p>
                                    &nbsp;
                                </p></div>
                        </div>
                    </div>
                </div>
                <div class="ncs-comment">
                    <div class="ncs-goods-title-bar hd">
                        <h4><a href="javascript:void(0);">商品评价</a></h4>
                    </div>
                    <div class="ncs-goods-info-content bd" id="ncGoodsRate">
                        <div class="top">
                            <div class="rate">
                                <p><strong>100</strong><sub>%</sub>好评</p>
                                <span>共有0人参与评分</span></div>
                            <div class="percent">
                                <dl>
                                    <dt>好评<em>(100%)</em></dt>
                                    <dd><i style="width: 100%"></i></dd>
                                </dl>
                                <dl>
                                    <dt>中评<em>(0%)</em></dt>
                                    <dd><i style="width: 0%"></i></dd>
                                </dl>
                                <dl>
                                    <dt>差评<em>(0%)</em></dt>
                                    <dd><i style="width: 0%"></i></dd>
                                </dl>
                            </div>
                            <div class="btns"><span>您可对已购商品进行评价</span>
                                <p>
                                    <a href="http://127.0.0.1/v4/shop/index.php?act=member_order&op=index" class="ncs-btn ncs-btn-red" target="_blank"><i class="icon-comment-alt"></i>评价商品</a>
                                </p>
                            </div>
                        </div>
                        <div class="ncs-goods-title-nav">
                            <ul id="comment_tab">
                                <li data-type="all" class="current"><a href="javascript:void(0);">商品评价(0)</a></li>
                                <li data-type="1"><a href="javascript:void(0);">好评(0)</a></li>
                                <li data-type="2"><a href="javascript:void(0);">中评(0)</a></li>
                                <li data-type="3"><a href="javascript:void(0);">差评(0)</a></li>
                            </ul>
                        </div>
                        <!-- 商品评价内容部分 -->
                        <div id="goodseval" class="ncs-commend-main"></div>
                    </div>
                </div>
                <div class="ncg-salelog">
                    <div class="ncs-goods-title-bar hd">
                        <h4><a href="javascript:void(0);">销售记录</a></h4>
                    </div>
                    <div class="ncs-goods-info-content bd" id="ncGoodsTraded">
                        <div class="top">
                            <div class="price">
                                商&nbsp;城&nbsp;价<strong>179.00</strong>元<span>购买的价格不同可能是由于店铺往期促销活动引起的，详情可以咨询卖家</span>
                            </div>
                        </div>
                        <!-- 成交记录内容部分 -->
                        <div id="salelog_demo" class="ncs-loading"></div>
                    </div>
                </div>
                <div class="ncs-consult">
                    <div class="ncs-goods-title-bar hd">
                        <h4><a href="javascript:void(0);">购买咨询</a></h4>
                    </div>
                    <div class="ncs-goods-info-content bd" id="ncGuestbook">
                        <!-- 咨询留言内容部分 -->
                        <div id="consulting_demo" class="ncs-loading"></div>
                    </div>
                </div>
                <div class="ncs-recommend">
                    <div class="title">
                        <h4>推荐商品</h4>
                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="goods-name">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=42" target="_blank" title="">2015春款打底毛衫拼色毛衣
                                            长袖套头针织衫 莺 蓝色<em></em></a></dt>
                                    <dd class="goods-pic">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=42" target="_blank" title=""><img src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211646104580_240.jpg" alt="2015春款打底毛衫拼色毛衣 长袖套头针织衫 莺 蓝色"/></a>
                                    </dd>
                                    <dd class="goods-price">&yen;179.00</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="goods-name">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=52" target="_blank" title="2015新款，特惠促销">新款
                                            女款 拼接 不规则摆 长袖针织衫开衫 杏雨 白色<em>2015新款，特惠促销</em></a></dt>
                                    <dd class="goods-pic">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=52" target="_blank" title="2015新款，特惠促销"><img src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418253240878850_240.jpg" alt="新款 女款 拼接 不规则摆 长袖针织衫开衫 杏雨 白色"/></a>
                                    </dd>
                                    <dd class="goods-price">&yen;99.00</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="goods-name">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=232" target="_blank" title="">中华老字号
                                            东阿阿胶桃花姬阿胶糕300g<em></em></a></dt>
                                    <dd class="goods-pic">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=232" target="_blank" title=""><img src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04423411880302392_240.png" alt="中华老字号 东阿阿胶桃花姬阿胶糕300g"/></a>
                                    </dd>
                                    <dd class="goods-price">&yen;150.00</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="goods-name">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=231" target="_blank" title="全国唯一支持开瓶试饮7天无理由退换货">至尊金奖
                                            法国原瓶进口AOC红酒 任选一箱 红沙城堡红葡萄酒 原装进口<em>全国唯一支持开瓶试饮7天无理由退换货</em></a></dt>
                                    <dd class="goods-pic">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=231" target="_blank" title="全国唯一支持开瓶试饮7天无理由退换货"><img src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04423392298369303_240.jpg" alt="至尊金奖 法国原瓶进口AOC红酒 任选一箱 红沙城堡红葡萄酒 原装进口"/></a>
                                    </dd>
                                    <dd class="goods-price">&yen;899.00</dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt class="goods-name">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=233" target="_blank" title="没有卖点">我在巴扎黑<em>没有卖点</em></a>
                                    </dt>
                                    <dd class="goods-pic">
                                        <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=233" target="_blank" title="没有卖点"><img src="http://127.0.0.1/v4/data/upload/shop/common/loading.gif" rel="lazy" data-url="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_05854006451540344_240.png" alt="我在巴扎黑"/></a>
                                    </dd>
                                    <dd class="goods-price">&yen;100.00</dd>
                                </dl>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="ncs-sidebar">
                <div class="ncs-message-bar">
                    <div class="default">
                        <h5>
                            <a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=index&store_id=1" title="进入店铺">admin</a>
                        </h5>
                        <span member_id="1"></span>
                    </div>
                </div>

                <div class="ncs-sidebar-container ncs-class-bar">
                    <div class="title">
                        <h4>商品分类</h4>
                    </div>
                    <div class="content">
                        <p>
                            <span><a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1&key=1&order=2">按新品</a></span><span><a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1&key=2&order=2">按价格</a></span><span><a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1&key=3&order=2">按销量</a></span><span><a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1&key=5&order=2">按人气</a></span>
                        </p>
                        <div class="ncs-search">
                            <form id="" name="searchShop" method="get" action="index.php">
                                <input type="hidden" name="act" value="show_store"/>
                                <input type="hidden" name="op" value="goods_all"/>
                                <input type="hidden" name="store_id" value="1"/>
                                <input type="text" class="text w120" name="inkeyword" value="" placeholder="搜索店内商品">
                                <a href="javascript:document.searchShop.submit();" class="ncs-btn">搜索</a>
                            </form>
                        </div>
                        <ul class="ncs-submenu">
                            <li>
                                <span class="ico-none"><em>-</em></span><a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1">全部商品</a>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="ncs-sidebar-container ncs-top-bar">
                    <div class="title">
                        <h4>商品排行</h4>
                    </div>
                    <div class="content">
                        <ul class="ncs-top-tab pngFix">
                            <li id="hot_sales_tab" class="current">
                                <a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1&key=3&order=2">热销商品排行</a>
                            </li>
                            <li id="hot_collect_tab">
                                <a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1&key=4&order=2">热门收藏排行</a>
                            </li>
                        </ul>
                        <div id="hot_sales_list" class="ncs-top-panel">
                            <ol>
                                <li>
                                    <dl>
                                        <dt>
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=231">至尊金奖
                                                法国原瓶进口AOC红酒 任选一箱 红沙城堡红葡萄酒 原装进口</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=231"><span class="thumb size40"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04423392298369303_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04423392298369303_240.jpg" onload="javascript:DrawImage(this,100,100);" title="至尊金奖 法国原瓶进口AOC红酒 任选一箱 红沙城堡红葡萄酒 原装进口"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">228.00</dd>
                                        <dd class="selled pngFix">售出：<strong>12</strong>笔</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt>
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=232">中华老字号
                                                东阿阿胶桃花姬阿胶糕300g</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=232"><span class="thumb size40"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04423411880302392_60.png" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04423411880302392_240.png" onload="javascript:DrawImage(this,100,100);" title="中华老字号 东阿阿胶桃花姬阿胶糕300g"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">95.00</dd>
                                        <dd class="selled pngFix">售出：<strong>2</strong>笔</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=48">春装
                                                披肩式 超短款 针织 衫开衫 女装 青鸟 蓝色</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=48"><span class="thumb size40"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418240795665638_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418240795665638_240.jpg" onload="javascript:DrawImage(this,100,100);" title="春装 披肩式 超短款 针织 衫开衫 女装 青鸟 蓝色"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">129.00</dd>
                                        <dd class="selled pngFix">售出：<strong>1</strong>笔</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=49">春装
                                                披肩式 超短款 针织 衫开衫 女装 青鸟 黑色</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=49"><span class="thumb size40"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418240955916042_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418240955916042_240.jpg" onload="javascript:DrawImage(this,100,100);" title="春装 披肩式 超短款 针织 衫开衫 女装 青鸟 黑色"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">100.00</dd>
                                        <dd class="selled pngFix">售出：<strong>1</strong>笔</dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=53">新款
                                                女款 拼接 不规则摆 长袖针织衫开衫 杏雨 紫色</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=53"><span class="thumb size40"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418254088878407_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418254088878407_240.jpg" onload="javascript:DrawImage(this,100,100);" title="新款 女款 拼接 不规则摆 长袖针织衫开衫 杏雨 紫色"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">99.00</dd>
                                        <dd class="selled pngFix">售出：<strong>1</strong>笔</dd>
                                    </dl>
                                </li>
                            </ol>
                        </div>
                        <div id="hot_collect_list" class="ncs-top-panel hide">
                            <ol>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=38">正品
                                                2015春装新款 女 绣花针织衫 开衫外套浮桑初 蓝色</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=38" title=""><span class="thumb size40"><i></i> <img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418207207476705_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418207207476705_240.jpg" onload="javascript:DrawImage(this,100,100);" title="正品 2015春装新款 女 绣花针织衫 开衫外套浮桑初 蓝色"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">158.00</dd>
                                        <dd class="collection pngFix">收藏人气：<strong>0</strong></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=39">正品
                                                2015春装新款 女 绣花针织衫 开衫外套浮桑初 绿色</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=39" title=""><span class="thumb size40"><i></i> <img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418206625430066_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418206625430066_240.jpg" onload="javascript:DrawImage(this,100,100);" title="正品 2015春装新款 女 绣花针织衫 开衫外套浮桑初 绿色"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">189.00</dd>
                                        <dd class="collection pngFix">收藏人气：<strong>0</strong></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=40">正品
                                                2015春装新款 女 绣花针织衫 开衫外套浮桑初 梅红</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=40" title=""><span class="thumb size40"><i></i> <img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418207471410641_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418207471410641_240.jpg" onload="javascript:DrawImage(this,100,100);" title="正品 2015春装新款 女 绣花针织衫 开衫外套浮桑初 梅红"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">189.00</dd>
                                        <dd class="collection pngFix">收藏人气：<strong>0</strong></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=41">正品
                                                2015春装新款 女 绣花针织衫 开衫外套浮桑初 黑色</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=41" title=""><span class="thumb size40"><i></i> <img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418207748921454_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418207748921454_240.jpg" onload="javascript:DrawImage(this,100,100);" title="正品 2015春装新款 女 绣花针织衫 开衫外套浮桑初 黑色"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">189.00</dd>
                                        <dd class="collection pngFix">收藏人气：<strong>0</strong></dd>
                                    </dl>
                                </li>
                                <li>
                                    <dl>
                                        <dt><a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=42">2015春款打底毛衫拼色毛衣
                                                长袖套头针织衫 莺 蓝色</a></dt>
                                        <dd class="goods-pic">
                                            <a href="http://127.0.0.1/v4/shop/index.php?act=goods&op=index&goods_id=42" title=""><span class="thumb size40"><i></i> <img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211646104580_60.jpg" onload="javascript:DrawImage(this,40,40);"></span></a>
                                            <p>
                                                <span class="thumb size100"><i></i><img src="http://127.0.0.1/v4/data/upload/shop/store/goods/1/1_04418211646104580_240.jpg" onload="javascript:DrawImage(this,100,100);" title="2015春款打底毛衫拼色毛衣 长袖套头针织衫 莺 蓝色"><big></big><small></small></span>
                                            </p>
                                        </dd>
                                        <dd class="price pngFix">179.00</dd>
                                        <dd class="collection pngFix">收藏人气：<strong>0</strong></dd>
                                    </dl>
                                </li>
                            </ol>
                        </div>
                        <p>
                            <a href="http://127.0.0.1/v4/shop/index.php?act=show_store&op=goods_all&store_id=1">查看本店其他商品</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <form id="buynow_form" method="post" action="http://127.0.0.1/v4/shop/index.php">
        <input id="act" name="act" type="hidden" value="buy"/>
        <input id="op" name="op" type="hidden" value="buy_step1"/>
        <input id="cart_id" name="cart_id[]" type="hidden"/>
    </form>
@endsection
@section('jssrc')
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/cloudzoom.js"></script>
    <script type="text/javascript" src="/js/common.js"></script>
@endsection
@section('js')
    <script type="text/javascript">
        jQuery(function ($) {
            // 放大镜效果 产品图片
            CloudZoom.quickStart();
            // 图片切换效果
            $(".controller li").first().addClass('current');
            $('.controller').find('li').mouseover(function () {
                $(this).first().addClass("current").siblings().removeClass("current");
            });
        });
        $(function () {
            // 评价列表
            $('#comment_tab').on('click', 'li', function () {
                $('#comment_tab li').removeClass('current');
                $(this).addClass('current');
            });
            // 信用评价动态评分打分人次Tab切换
            $(".ncs-rate-tab > li > a").mouseover(function (e) {
                if (e.target == this) {
                    var tabs = $(this).parent().parent().children("li");
                    var panels = $(this).parent().parent().parent().children(".ncs-rate-panel");
                    var index = $.inArray(this, $(this).parent().parent().find("a"));
                    if (panels.eq(index)[0]) {
                        tabs.removeClass("current ").eq(index).addClass("current ");
                        panels.addClass("hide").eq(index).removeClass("hide");

                    }
                }
            });
            // v4
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
            fade();
            //商品排行Tab切换
            $(".ncs-top-tab > li > a").mouseover(function (e) {
                if (e.target == this) {
                    var tabs = $(this).parent().parent().children("li");
                    var panels = $(this).parent().parent().parent().children(".ncs-top-panel");
                    var index = $.inArray(this, $(this).parent().parent().find("a"));
                    if (panels.eq(index)[0]) {
                        tabs.removeClass("current ").eq(index).addClass("current ");
                        panels.addClass("hide").eq(index).removeClass("hide");
                    }
                }
            });

            $('#fold').click(function () {
                $('.ncs-goods-layout').toggleClass('expanded');
            });
            // 商品内容介绍Tab样式切换控制
            $('#categorymenu').find("li").click(function () {
                $('#categorymenu').find("li").removeClass('current');
                $(this).addClass('current');
            });
            // 商品详情默认情况下显示全部
            $('#tabGoodsIntro').click(function () {
                $('.bd').css('display', '');
                $('.hd').css('display', '');
            });
            // 点击地图隐藏其他以及其标题栏
            $('#tabStoreMap').click(function () {
                $('.bd').css('display', 'none');
                $('#ncStoreMap').css('display', '');
                $('.hd').css('display', 'none');
            });
            // 点击评价隐藏其他以及其标题栏
            $('#tabGoodsRate').click(function () {
                $('.bd').css('display', 'none');
                $('#ncGoodsRate').css('display', '');
                $('.hd').css('display', 'none');
            });
            // 点击成交隐藏其他以及其标题
            $('#tabGoodsTraded').click(function () {
                $('.bd').css('display', 'none');
                $('#ncGoodsTraded').css('display', '');
                $('.hd').css('display', 'none');
            });
        });
    </script>
@endsection