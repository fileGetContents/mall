<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <title>房间列表</title>
    <link rel="stylesheet" type="text/css" href="{{asset('chat/css/lists.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('chat/css/font-awesome.min.css')}}">
</head>
<body>
<div class="mian">
    <div class="adframe">
        @foreach($rooms as $value)
            <div class="adleft">
                <div class="ico">
                    <i class="fa fa-code"></i>
                </div>
                <span class="title">
			       <a href="{{url('chat/room/'.$value->id)}}"style="text-decoration:none;">{{$value->name}}</a>
			    </span>
			<span class="depict">
                {{$value->introduce}}
			</span>
                <div class="right" id="r">
                    <div class="rbt">
                        <span>房间人数:{{$value->number}}</span>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="adright"></div>
    </div>
</div>
<script type="text/javascript" src="{{asset('Chat/js/lists.js')}}"></script>
<script type="text/javascript" src="{{asset('Chat/js/googlegg.js')}}"></script>
<script>
    FeiChao.Organ();
</script>
</body>
</html>
