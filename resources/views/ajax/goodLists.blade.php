<div class="squares" nc_type="current_display_mode">
    <ul class="list_pic">
        @foreach($good as  $key => $value)
            <li class="item">
                <div class="goods-content" nctype_goods="52" nctype_store="1">
                    <div class="goods-pic">
                        <a href="/good/detailed/{{$value->good_id}}" target="_blank">
                            <img src="{{$value->good_image}}" style="display: inline;">
                        </a>
                    </div>
                    <div class="goods-info" style="top: 230px;">
                        <div class="goods-pic-scroll-show">
                            <ul>
                                @foreach($value->good_images as $v)
                                    <li @if($loop->first)class="selected" @endif >
                                        <a href="javascript:void(0);"><img src="{{$v}}" style="display: inline;"></a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="goods-name">
                            <a href="/good/detailed/{{$value->good_id}}">
                                {{$value->good_name}}
                            </a>
                        </div>
                        <div class="goods-price">
                            <em class="sale-price" title="商城价：¥58.00">¥{{$value->good_preprice}}</em>
                            <em class="market-price" title="市场价：¥483.00">¥{{$value->good_oriprice}}</em>
                            <span class="raty" data-score="5" title="很满意" style="width: 80px;">
                                <img src="http://127.0.0.1/v4/data/resource/js/jquery.raty/img/star-on.png" alt="1" title="很满意">&nbsp;
                                <img src="http://127.0.0.1/v4/data/resource/js/jquery.raty/img/star-on.png" alt="2" title="很满意">&nbsp;
                                <img src="http://127.0.0.1/v4/data/resource/js/jquery.raty/img/star-on.png" alt="3" title="很满意">&nbsp;
                                <img src="http://127.0.0.1/v4/data/resource/js/jquery.raty/img/star-on.png" alt="4" title="很满意">&nbsp;
                                <img src="http://127.0.0.1/v4/data/resource/js/jquery.raty/img/star-on.png" alt="5" title="很满意">
                                <input type="hidden" name="score" value="5" readonly="readonly">
                            </span>
                        </div>
                        <div class="goods-sub">
                            <span class="goods-compare" nc_type="compare_233" data-param="{&quot;gid&quot;:&quot;233&quot;}"><i></i>加入购物车</span>
                        </div>
                        <div class="sell-stat">
                            <ul>
                                <li>
                                    <a href="" target="_blank" class="status">{{$value->good_sales}}</a>
                                    <p>商品销量</p>
                                </li>
                                <li>
                                    <a href="">{{$value->good_comment}}</a>
                                    <p>用户评论</p>
                                </li>
                                <li><em member_id="1">&nbsp;</em></li>
                            </ul>
                        </div>
                        <div class="store">
                            <a href="" title="admin" class="name">{{$value->good_name}}</a>
                        </div>
                        <div class="add-cart">
                            <a href="javascript:void(0);" nctype="add_cart" data-param="{goods_id:52}"><i class="icon-shopping-cart"></i>加入购物车</a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        <div class="clear"></div>
    </ul>
</div>

<div class="tc mt20 mb20">
    {{$good->links('ajax.goodListsPage')}}
</div>