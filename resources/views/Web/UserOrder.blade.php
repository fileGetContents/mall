<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>购物车</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/shopping-mall-index.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/order.css')}}"/>
</head>
<body style="position:relative;">
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
<!--切换城市-->
<div class="switch-city w1200">
    <a href="#" class="dianji-qh">切换城市</a>
    <span class="dqm">重庆市</span>
    <div class="select-city">
        <div class="sl-city-top">
            <p class="f-l">切换城市</p>
            <a class="close-select-city f-r" href="#">
                <img src="images/close-select-city.gif"/>
            </a>
        </div>
        <div class="sl-city-con">
            <p>西北</p>
            <dl>
                <dt>重庆市</dt>
                <dd>
                    <a href="#">长寿区</a>
                    <a href="#">巴南区</a>
                    <a href="#">南岸区</a>
                    <a href="#">九龙坡区</a>
                    <a href="#">沙坪坝区</a>
                    <a href="#">北碚</a>
                    <a href="#">江北区</a>
                    <a href="#">渝北区</a>
                    <a href="#">大渡口区</a>
                    <a href="#">渝中区</a>
                    <a href="#">万州</a>
                    <a href="#">武隆</a>
                    <a href="#">晏家</a>
                    <a href="#">长寿湖</a>
                    <a href="#">云集</a>
                    <a href="#">华中</a>
                    <a href="#">林封</a>
                    <a href="#">双龙</a>
                    <a href="#">石回</a>
                    <a href="#">龙凤呈祥</a>
                    <a href="#">朝天门</a>
                    <a href="#">中华</a>
                    <a href="#">玉溪</a>
                    <a href="#">云烟</a>
                    <a href="#">红塔山</a>
                    <a href="#">真龙</a>
                    <a href="#">天子</a>
                    <a href="#">娇子</a>
                </dd>
                <div style="clear:both;"></div>
            </dl>
            <dl>
                <dt>新疆</dt>
                <dd>
                    <a href="#">齐乌鲁木</a>
                    <a href="#">昌吉</a>
                    <a href="#">巴音</a>
                    <a href="#">郭楞</a>
                    <a href="#">伊犁</a>
                    <a href="#">阿克苏</a>
                    <a href="#">喀什</a>
                    <a href="#">哈密</a>
                    <a href="#">克拉玛依</a>
                    <a href="#">博尔塔拉</a>
                    <a href="#">吐鲁番</a>
                    <a href="#">和田</a>
                    <a href="#">石河子</a>
                    <a href="#">克孜勒苏</a>
                    <a href="#">阿拉尔</a>
                    <a href="#">五家渠</a>
                    <a href="#">图木舒克</a>
                    <a href="#">库尔勒</a>
                </dd>
                <div style="clear:both;"></div>
            </dl>
            <dl>
                <dt>甘肃</dt>
                <dd>
                    <a href="#">兰州</a>
                    <a href="#">天水</a>
                    <a href="#">巴音</a>
                    <a href="#">白银</a>
                    <a href="#">庆阳</a>
                    <a href="#">平凉</a>
                    <a href="#">酒泉</a>
                    <a href="#">张掖</a>
                    <a href="#">武威</a>
                    <a href="#">定西</a>
                    <a href="#">金昌</a>
                    <a href="#">陇南</a>
                    <a href="#">临夏</a>
                    <a href="#">嘉峪关</a>
                    <a href="#">甘南</a>
                </dd>
                <div style="clear:both;"></div>
            </dl>
            <dl>
                <dt>宁夏</dt>
                <dd>
                    <a href="#">银川</a>
                    <a href="#">吴忠</a>
                    <a href="#">石嘴山</a>
                    <a href="#">中卫</a>
                    <a href="#">固原</a>
                </dd>
                <div style="clear:both;"></div>
            </dl>
            <dl>
                <dt>青海</dt>
                <dd>
                    <a href="#">西宁</a>
                    <a href="#">海西</a>
                    <a href="#">海北</a>
                    <a href="#">果洛</a>
                    <a href="#">海东</a>
                    <a href="#">黄南</a>
                    <a href="#">玉树</a>
                    <a href="#">海南</a>
                </dd>
                <div style="clear:both;"></div>
            </dl>
        </div>
    </div>
</div>
<!--内容开始-->
<div class="order">
    <div class="mzcontainer">
        <div class="order-address" id="addressModule">
            <div class="order-address-title">
                收货人信息
                <div class="order-address-title-tips" id="orderAddressHasOldTips">
                    <i class="order-address-tips-icon"></i>因配送地址库升级，部分地址需升级后方可使用！
                </div>
            </div>
            <ul class="order-address-list clearfix" id="addressList" style="height: 174px;">

                @foreach($address  as $v)
                    <li class="order-address-checkbox @if($v->address_tag == 1) checked @endif " id="{{$v->address_id}}"
                        data-mdesc="收货人信息"
                        data-mtype="store_se_adr">
                        <div class="order-address-checkbox-top">
                            <div class="order-address-checkbox-name"
                                 title="{{$v->address_name}}">{{$v->address_name}}</div>
                            <div class="order-address-checkbox-phone">{{$v->address_telephone}}</div>
                        </div>
                        <div class="order-address-checkbox-content">{{$v->province}}{{$v->city}}{{$v->area}}{{$v->address_live}}</div>
                        <div class="order-address-checkbox-checked">
                            <div class="order-address-checkbox-tick"></div>
                        </div>
                        <div class="order-address-checkbox-ctrl">
                            <div class="order-address-checkbox-delete"></div>
                            <div class="order-address-checkbox-edit"></div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="order-address-bottom">
                <div class="order-address-more" id="orderAddressMore">
                    <p class="order-address-more-text">点击显示更多地址</p>
                    <i class="order-address-triangle"></i>
                </div>
            </div>
        </div>

        <div class="mzcontainer order-product">
            <div class="order-product-title">确认订单信息</div>
            <div class="order-product-list" id="orderProductList">
                <table cellpadding="0" cellspacing="0" class="order-product-table">
                    <thead>
                    <tr>
                        <th class="order-product-table-name">
                            <div class="order-product-supplier">
                                供应商：<span class="order-product-supplier-name"> </span>
                                <!--<div class="order-product-supplier-tips">由“魅族”负责发货，并提供售后服务</div>-->
                            </div>
                        </th>
                        <th class="order-product-table-price">单价</th>
                        <th class="order-product-table-num">数量</th>
                        <th class="order-product-table-total">小计</th>
                        <th class="order-product-table-express">配送方式</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="order-product-table-name">
                            <a target="_blank" class="order-product-link"
                               href="https://detail.meizu.com/item/meilan_6.html" data-mdesc="确认订单信息"
                               data-mtype="store_se_ord">
                                <img class="order-product-image"
                                     data-original="//openfile.meizu.com/group1/M00/02/21/Cgbj0FnCGzeAI4mGAA06dyxPdr8087.png@120x120.jpg"
                                     src="{{$good->good_image}}"
                                     style="display: inline;">
                            </a>
                            <div class="order-product-name">
                                <a target="_blank" class="order-product-link"
                                   href="https://detail.meizu.com/item/meilan_6.html" data-mdesc="确认订单信息"
                                   data-mtype="store_se_ord">
                                    <p>{{$good->good_name}}</p>
                                </a>
                            </div>
                        </td>
                        <td class="order-product-table-price">
                            <p>
                                <span class="order-product-price">{{$good->good_preprice}}</span>
                            </p>
                        </td>
                        <td class="order-product-table-num">1</td>
                        <td class="order-product-table-total">
                            <p class="order-product-price red">{{$good->good_preprice}}</p>
                        </td>
                        <td class="order-product-table-express" rowspan="999">
                            <p>
                                快递配送：运费<span class="order-product-price red">0.00</span>
                            </p>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr class="order-product-footer">
                        <td colspan="3" class="order-product-info">

                            <div class="order-product-invoice clearfix">

                                <div class="order-product-invoice-type">
                                    发票类型：电子发票
                                    <div class="order-product-invoice-icon"></div>
                                </div>
                                <div class="order-product-invoice-info">
                                    <p>发票抬头：<span class="order-product-invoice-title">默认为收货人姓名</span>
                                        <span class="order-product-invoice-edit">修改</span>
                                    </p>
                                </div>
                            </div>
                            <div class="order-product-remark">
                                <span class="order-product-remark-title">备注</span>
                                <textarea class="order-product-remark-input" placeholder="备注..."
                                          maxlength="45"></textarea>
                            </div>
                        </td>
                        <td colspan="2" class="order-product-total">
                            合计：<span class="order-product-price red">699.00</span>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="mzcontainer order-invoice" id="orderInvoice">
            <div class="order-invoice-header">发票信息</div>
            <ul class="order-invoice-list" id="orderInvoiceList"></ul>
        </div>
        <div class="order-total clearfix" id="orderTotal">
            <div class="order-total-pay">
                <div class="order-total-pay-header">选择支付方式</div>

                <div class="order-total-pay-row clearfix">
                    <ul class="order-total-pay-list clearfix">
                        <li class="order-total-pay-label alipay">
                            <div class="order-total-pay-radio"></div>
                            <div class="order-total-pay-img"></div>
                        </li>
                        <li class="order-total-pay-label wechat">
                            <div class="order-total-pay-radio"></div>
                            <div class="order-total-pay-img"></div>
                        </li>
                    </ul>
                </div>

            </div>


            <div class="order-total-content">
                <div class="order-total-row">
                    总金额
                    <div class="order-total-price" id="totalOrderPrice">699.00</div>
                </div>
                <div class="order-total-row order-total-discount" id="totalCouponRow">
                    优惠券优惠
                    <div class="order-total-price sub">0.00</div>
                </div>
                <div class="order-total-row order-total-discount" id="totalRedRow">
                    红包抵扣
                    <div class="order-total-price sub">0.00</div>
                </div>
                <div class="order-total-row order-total-discount" id="totalRepoRow" style="display: none;">
                    回购金抵扣
                    <div class="order-total-price sub">0.00</div>
                </div>
                <div class="order-total-row">
                    运费
                    <div class="order-total-price" id="totalExpressPrice">0.00</div>
                </div>
                <div class="order-total-line"></div>
                <div class="order-total-row">
                    应付：
                    <div class="order-total-price total" id="totalPayPrice">699.00</div>
                </div>
                <div class="order-total-row order-total-valid-row clearfix">
                    <div class="order-total-valid" id="validCode"></div>
                    <div class="mz-btn success" id="submitForm" data-mdesc="下单并支付" data-mtype="store_se_pay">下单并支付</div>
                    <div class="order-stock-tips-wrap" id="orderStockTips" style="display: block;">
                        <div class="order-stock-tips">该订单含付款减库存商品，支付完成后才会为您预留库存！</div>
                    </div>
                </div>
                <div class="order-total-row order-total-row-tips" id="totalTips"></div>
            </div>
        </div>
    </div>
</div>
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
</body>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/zhonglin.js')}}"></script>
<script type="text/javascript">
    $(function () {
        $('#submitForm').click(function () {
            $.ajax({
                type: 'post',
                data: {'good_id': '{{$good->good_id}}', 'address_id': $('.checked').eq(0).attr('id')},
                dataType: 'json',
                url: '{{URL('api/order/create')}}',
                success: function (data) {

                },
                error: function () {

                }
            })
        });
    });
</script>
</html>
