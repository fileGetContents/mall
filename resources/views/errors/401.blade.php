@extends('Public.header')
@section('css')
    <style type="text/css">
        .msg {
            font: 100 36px/48px arial, "microsoft yahei";
            color: #555;
            background-color: #FFF;
            text-align: center;
            width: 100%;
            border: solid 1px #E6E6E6;
            margin-bottom: 10px;
            padding: 120px 0;
        }
    </style>
@endsection
@section('body')
    <div class="msg">
        <i class="icon-info-sign" style="color: #39C;"></i>
        商品已下架或不存在
    </div>
@endsection
