@extends('Public.header')
@section('css')
    {{--<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">--}}
    <link href="/css/layout.css" rel="stylesheet" type="text/css"/>
@endsection
@section('body')
    <div class="nch-breadcrumb-layout">
        <div class="nch-breadcrumb wrapper">
            <span><a href="/">首页</a></span>
            <span class="arrow">></span>
            @foreach($pos as $key => $v)
                @if($loop->last)
                    <span>{{$v}}</span>
                @else
                    <span><a href="/good/lists?class={{$key}}">{{$v}}</a></span>
                    <span class="arrow">></span>
                @endif
            @endforeach
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
            </div>
            <div id="guesslike_div" style="width:1200px;">

            </div>
        </div>
        <div class="clear"></div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $.ajax({
            data: {'class': '{{$class}}'},
            url: '{{ url('api/good/lists')}}',
            success: function (data) {
                $('#guesslike_div').empty();
                var _str = $.parseHTML(data, document, true);
                $('#guesslike_div').append(_str);
            },
            error: function () {

            }
        });
        $('#guesslike_div').on('click', 'a', function () {
            $.ajax({
                data: {'class': '{{$class}}'},
                url: $(this).attr('href_src'),
                success: function (data) {
                    $('#guesslike_div').empty();
                    var _str = $.parseHTML(data, document, true);
                    $('#guesslike_div').append(_str);
                },
                error: function () {

                }
            });
        });
    </script>
@endsection