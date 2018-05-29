<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>在线商城首页</title>
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
    <div class="dianji f-r">
        <div class="btn1">
            <button class="btn1-l">注册</button>
            <button class="btn1-r">登录</button>
            <div style="clear:both;"></div>
        </div>
        <button class="btn2">商家入口 ></button>
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

<!--nav 开始-->
<div class="nav w1200">
    <a href="JavaScript:;" class="sp-kj" kj="">
        商品分类快捷
    </a>
    <div class="kj-show2">
        <div class="kj-info1" mg="shiping">
            <dl class="kj-dl1">
                <dt><a href="#">食品/饮料/酒水</a></dt>
                <dd>
                    零食/糖果/巧克力、饼干/糕点、生鲜<br/>
                    酒水饮料/乳饮料、调味/速食<br/>
                    粮油/干货、冲调制品
                </dd>
            </dl>
            <div class="kj-if-show" mg2="shiping">
                <dl>
                    <dt>零食/糖果/巧克力</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>零食/糖果/巧克力</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>零食/糖果/巧克力</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>零食/糖果/巧克力</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>零食/糖果/巧克力</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl style="border-bottom:none;">
                    <dt>零食/糖果/巧克力</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
        <div class="kj-info1" mg="muying">
            <dl class="kj-dl1">
                <dt><a href="#">母婴用品/玩具</a></dt>
                <dd>
                    奶粉/辅食、尿裤/湿巾、玩具<br/>
                    宝宝喂养/洗护清洁
                </dd>
            </dl>
            <div class="kj-if-show" mg2="muying">
                <dl>
                    <dt>母婴用品/玩具</dt>
                    <dd>
                        <a href="#">巧克力</a>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">巧克力</a>
                        <a href="#">巧克力</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>母婴用品/玩具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">巧克力</a>
                        <a href="#">膨化食品</a>
                        <a href="#">口香糖</a>
                        <a href="#">巧克力</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>母婴用品/玩具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">巧克力</a>
                        <a href="#">膨食品</a>
                        <a href="#">糖克力/口香糖</a>
                        <a href="#">肉品</a>
                        <a href="#">巧克力</a>
                        <a href="#">进口食品</a>
                        <a href="#">巧克力</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>母婴用品/玩具</dt>
                    <dd>
                        <a href="#">巧克力</a>
                        <a href="#">坚果线</a>
                        <a href="#">巧克力</a>
                        <a href="#">膨食品</a>
                        <a href="#">果冻/克口香糖</a>
                        <a href="#">巧克力</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">巧克力</a>
                        <a href="#">进食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>母婴用品/玩具</dt>
                    <dd>
                        <a href="#">迷线</a>
                        <a href="#">巧克力</a>
                        <a href="#">膨化品</a>
                        <a href="#">巧克力</a>
                        <a href="#">糖果力/口香糖</a>
                        <a href="#">巧克力</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl style="border-bottom:none;">
                    <dt>母婴用品/玩具</dt>
                    <dd>
                        <a href="#">迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果克力/口香糖</a>
                        <a href="#">肉类/熟品</a>
                        <a href="#">进食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
        <div class="kj-info1" mg="chuju">
            <dl class="kj-dl1">
                <dt><a href="#">厨具餐具/家用清洁/纸品</a></dt>
                <dd>
                    纸品湿巾、衣物清洁护理、家庭清洁<br/>
                    清洁、厨具、烹饪用具/厨房配件<br/>
                    食物保鲜容器
                </dd>
            </dl>
            <div class="kj-if-show" mg2="chuju">
                <dl>
                    <dt>厨具餐具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>厨具餐具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>厨具餐具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>厨具餐具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>厨具餐具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl style="border-bottom:none;">
                    <dt>厨具餐具</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
        <div class="kj-info1" mg="meizhuang">
            <dl class="kj-dl1">
                <dt><a href="#">美妆洗护/个人护理洗发护发</a></dt>
                <dd>
                    洗浴用品/身体护理、口腔护理、面部护肤<br/>
                    女性护理、彩妆/美容工具、男士护理
                </dd>
            </dl>
            <div class="kj-if-show" mg2="meizhuang">
                <dl>
                    <dt>美妆洗护</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>美妆洗护</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>美妆洗护</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>美妆洗护</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>美妆洗护</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl style="border-bottom:none;">
                    <dt>美妆洗护</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
        <div class="kj-info1" style="border-bottom:none;" mg="jiafang">
            <dl class="kj-dl1" style="padding:6px 10px;">
                <dt><a href="#">家居/家纺</a></dt>
                <dd>
                    浴室用品、餐具水具<br/>
                    收纳/居家日用、针织纺品
                </dd>
            </dl>
            <div class="kj-if-show" mg2="jiafang">
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl>
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
                <dl style="border-bottom:none;">
                    <dt>家居/家纺</dt>
                    <dd>
                        <a href="#">坚果迷线</a>
                        <a href="#">膨化食品</a>
                        <a href="#">糖果果冻/巧克力/口香糖</a>
                        <a href="#">肉类/熟食食品</a>
                        <a href="#">进口食品</a>
                    </dd>
                    <div style="clear:both;"></div>
                </dl>
            </div>
        </div>
    </div>
    <ul>
        <li><a href="#">在线商城</a></li>
        <li><a href="#">餐饮娱乐</a></li>
        <li><a href="#">家政服务</a></li>
        <li><a href="#">美容美发</a></li>
        <li><a href="#">教育培训</a></li>
        <li><a href="#">汽车房产</a></li>
        <li><a href="#">家居建材</a></li>
        <li><a href="#">二手市场</a></li>
        <div style="clear:both;"></div>
    </ul>
    <div style="clear:both;"></div>
</div>

<!--banner 开始-->
<div class="banner-box">
    <div class="banner w1200">
        <ul>
            <li><a href="JavaScript:;"><img src="http://placehold.it/1200x560/4D99E0/ffffff.png&text=1200x560 1"/></a>
            </li>
            <li><a href="JavaScript:;"><img src="http://placehold.it/1200x560/4D99E0/ffffff.png&text=1200x560 2"/></a>
            </li>
            <li><a href="JavaScript:;"><img src="http://placehold.it/1200x560/4D99E0/ffffff.png&text=1200x560 3"/></a>
            </li>
            <li><a href="JavaScript:;"><img src="http://placehold.it/1200x560/4D99E0/ffffff.png&text=1200x560 4"/></a>
            </li>
            <li><a href="JavaScript:;"><img src="http://placehold.it/1200x560/4D99E0/ffffff.png&text=1200x560 5"/></a>
            </li>
            <li><a href="JavaScript:;"><img src="http://placehold.it/1200x560/4D99E0/ffffff.png&text=1200x560 1"/></a>
            </li>
            <div style="clear:both;"></div>
        </ul>
        <a href="JavaScript:;" class="bnr bnr-left"><</a>
        <a href="JavaScript:;" class="bnr bnr-right">></a>
    </div>
</div>

<!--热门推荐-->
<div class="hot-recommend w1200">
    <h3>热门推荐</h3>
    <ul class="">
        <li class="ys1">
            <a href="#"><img src="images/hot-tu1.jpg"/></a>
            <div class="ys1-opt"></div>
            <div class="ys1-ft">
                <p>最唯美<br/><span>时尚酒店</span></p>
                <a href="#">点击有实惠</a>
            </div>
        </li>
        <li class="ys2">
            <p>汽车保养</p>
            <a href="#" class="ys2-a1" style="margin-bottom:25px;">上门汽车保养1一元钱</a>
            <a href="#"><img src="images/hot-tu2.jpg"/></a>
        </li>
        <li class="ys2">
            <p>汽车保养</p>
            <a href="#" class="ys2-a1">上门汽车保养1一元钱</a>
            <a href="#"><img src="images/hot-tu3.jpg"/></a>
        </li>
        <li class="ys2" style=" width:298px;">
            <p>汽车保养</p>
            <a href="#" class="ys2-a1">上门汽车保养1一元钱</a>
            <a href="#"><img src="images/hot-tu4.jpg"/></a>
        </li>
        <li class="ys1">
            <a href="#"><img src="images/hot-tu5.jpg"/></a>
            <div class="ys1-opt"></div>
            <div class="ys1-ft">
                <p>最实惠KTV<br/><span>最佳组合</span></p>
                <a href="#">点击有实惠</a>
            </div>
        </li>
        <li class="ys1">
            <a href="#"><img src="images/hot-tu6.jpg"/></a>
            <div class="ys1-opt"></div>
            <div class="ys1-ft">
                <p>最贴心家政<br/><span>包您满意</span></p>
                <a href="#">点击有实惠</a>
            </div>
        </li>
        <li class="ys2">
            <p>汽车保养</p>
            <a href="#" class="ys2-a1" style="margin-bottom:12px;">上门汽车保养1一元钱</a>
            <a href="#"><img src="images/hot-tu7.jpg"/></a>
        </li>
        <li class="ys2" style="width:298px;">
            <p>汽车保养</p>
            <a href="#" class="ys2-a1" style="margin-bottom:15px;">上门汽车保养1一元钱</a>
            <a href="#"><img src="images/hot-tu8.jpg"/></a>
        </li>
        <div style="clear:both;"></div>
    </ul>
</div>

<!--商品内容页面-->
<div class="shopping-content w1200">
    <div class="sp-con-info">
        <h3 class="sp-info-tit"><span>1F</span>食品/饮料/酒水</h3>
        <div class="sp-info-l f-l">
            <a href="#"><img src="images/sp-con-l-tu.gif"/></a>
            <div class="sp-l-b">
                <a href="#">零食/糖果/巧克力</a>
                <a href="#">饼干/糕点</a>
                <a href="#">生鲜</a>
                <a href="#">酒水饮料/乳饮料</a>
                <a href="#">调味/速食</a>
                <a href="#">粮油/干货</a>
                <a href="#">冲调制品 </a>
            </div>
        </div>
        <ul class="sp-info-r f-r">
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border-right:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style="border-bottom:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
        </ul>
        <div style="clear:both;"></div>
    </div>
    <div class="sp-con-info">
        <h3 class="sp-info-tit"><span style="color:#F56904;">2F</span>母婴用品/玩具</h3>
        <div class="sp-info-l f-l">
            <a href="#"><img src="images/sp-con-l-tu2.gif"/></a>
            <div class="sp-l-b">
                <a href="#">零食/糖果/巧克力</a>
                <a href="#">饼干/糕点</a>
                <a href="#">生鲜</a>
                <a href="#">酒水饮料/乳饮料</a>
                <a href="#">调味/速食</a>
                <a href="#">粮油/干货</a>
                <a href="#">冲调制品 </a>
            </div>
        </div>
        <ul class="sp-info-r f-r">
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>

                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border-right:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style="border-bottom:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
        </ul>
        <div style="clear:both;"></div>
    </div>
    <div class="sp-con-info">
        <h3 class="sp-info-tit"><span>3F</span>厨具餐具/家用清洁/纸品</h3>
        <div class="sp-info-l f-l">
            <a href="#"><img src="images/sp-con-l-tu.gif"/></a>
            <div class="sp-l-b">
                <a href="#">零食/糖果/巧克力</a>
                <a href="#">饼干/糕点</a>
                <a href="#">生鲜</a>
                <a href="#">酒水饮料/乳饮料</a>
                <a href="#">调味/速食</a>
                <a href="#">粮油/干货</a>
                <a href="#">冲调制品 </a>
            </div>
        </div>
        <ul class="sp-info-r f-r">
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>

                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border-right:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style="border-bottom:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
        </ul>
        <div style="clear:both;"></div>
    </div>
    <div class="sp-con-info">
        <h3 class="sp-info-tit"><span style="color:#F56904;">4F</span>美妆洗护/个人护理洗发护发</h3>
        <div class="sp-info-l f-l">
            <a href="#"><img src="images/sp-con-l-tu2.gif"/></a>
            <div class="sp-l-b">
                <a href="#">零食/糖果/巧克力</a>
                <a href="#">饼干/糕点</a>
                <a href="#">生鲜</a>
                <a href="#">酒水饮料/乳饮料</a>
                <a href="#">调味/速食</a>
                <a href="#">粮油/干货</a>
                <a href="#">冲调制品 </a>
            </div>
        </div>
        <ul class="sp-info-r f-r">
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>

                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border-right:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style="border-bottom:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
        </ul>
        <div style="clear:both;"></div>
    </div>
    <div class="sp-con-info">
        <h3 class="sp-info-tit"><span style="color:#F56904;">5F</span>家居/家访</h3>
        <div class="sp-info-l f-l">
            <a href="#"><img src="images/sp-con-l-tu2.gif"/></a>
            <div class="sp-l-b">
                <a href="#">零食/糖果/巧克力</a>
                <a href="#">饼干/糕点</a>
                <a href="#">生鲜</a>
                <a href="#">酒水饮料/乳饮料</a>
                <a href="#">调味/速食</a>
                <a href="#">粮油/干货</a>
                <a href="#">冲调制品 </a>
            </div>
        </div>
        <ul class="sp-info-r f-r">
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>

                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border-right:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li>
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style="border-bottom:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
            <li style=" width:240px;border:0;">
                <div class="li-top">
                    <a href="#" class="li-top-tu"><img src="images/sp-con-r-tu.gif"/></a>
                    <p class="jiage"><span class="sp1">￥109</span><span class="sp2">￥209</span></p>
                </div>
                <p class="miaoshu">德国原装进口Wurenbacher瓦伦冰黑啤5L/桶</p>
                <div class="li-md">
                    <div class="md-l f-l">
                        <p class="md-l-l f-l" ap="">1</p>
                        <div class="md-l-r f-l">
                            <a href="JavaScript:;" class="md-xs" at="">∧</a>
                            <a href="JavaScript:;" class="md-xx" ab="">∨</a>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="md-r f-l">
                        <button class="md-l-btn1">立即购买</button>
                        <button class="md-l-btn2">加入购物车</button>
                    </div>
                    <div style="clear:both;"></div>
                </div>
                <p class="pingjia">88888评价</p>
                <p class="weike">微克宅购自营</p>
            </li>
        </ul>
        <div style="clear:both;"></div>
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
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('js/zhonglin.js')}}"></script>
</body>
</html>
