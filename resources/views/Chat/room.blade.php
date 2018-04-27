<!DOCTYPE html>
<!-- saved from url=(0044)http://home.wolive.cc/admin/index/chats.html -->
<html lang="zh-CN" class="js cssanimations">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>聊天室</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Language" content="zh-CN">
    <link rel="shortcut icon" href="http://home.wolive.cc/wolive.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('Chat/css/layer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Chat/css/amazeui.min.css')}}">
    <link rel="stylesheet" href="{{asset('Chat/css/layer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Chat/css/layui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Chat/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Chat/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Chat/css/index_me.css')}}">
</head>
<body style="width: 1400px;margin: 0 auto">
<div class="all_content">
    <section style="width:20%;height:100%;position:absolute;background: #f3f3f4;border-right: 1px solid #ddd;">
        <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief"
             style="margin:0px;position: absolute;top:0px;width: 100%;">
            <ul class="layui-tab-title">
                <li class="layui-this" style="width: 100%;">当前在线人数</li>
            </ul>
            <div class="layui-tab-content" style="padding: 0px;">
                <div class="layui-tab-item layui-show" id="chat_list"
                     style="width: 100%; overflow-y: auto; height: 807px;">
                    <div id="v9" class="visiter">
                        <i class="layui-icon myicon hide" title="删除" style="font_weight:blod">ဆ</i>
                        <span id="c9" class="notice-icon hide"></span>
                        <div class="visit_content">
                            <img class="am-radius v-avatar" id="img9" src={{asset('Chat/css/')}}8.jpg" width="50px">
                            <span class="c_name">彤彤</span>
                            <div id="msg9" class="newmsg">123123213</div>
                        </div>
                    </div>
                </div>
                <div class="layui-tab-item" id="wait_list"
                     style="width: 100%; overflow-y: auto; height: 807px;"></div>
            </div>
        </div>
    </section>
    <section
            style="width:80%;height:100%;position: absolute;left: 20%;background: #F8F8F8;border-right: 1px solid #ddd;">
        <div class="no_chats">
            <i class="no_chats-pic"></i>
        </div>
        <div class="chatbox" style="width: 100%;height: 100%">
            <div id="wrap" style="width: 100%;height:62%;overflow-y: auto;">
                <ul id="message" class="conversation">
                    <li class="chatmsg">
                        <div class="showtime"></div>
                        <div class="" style="position: absolute;left:3px;"><img class="my-circle  se_pic"
                                                                                src="https://www.wolive.cc/assets/upload/2.jpg"
                                                                                width="50px" height="50px">
                        </div>
                        <div class="outer-left">
                            <div class="customer">
                                        <pre><img onclick="getbig(this)"
                                                  src="/upload/images/1524634458.png"></pre>
                            </div>
                        </div>
                    </li>
                    <li class="chatmsg">
                        <div class="showtime"></div>
                        <div class="" style="position: absolute;top: 26px;right: 2px;"><img
                                    class="my-circle cu_pic" src="/upload/images/1524634458.png" width="50px"
                                    height="50px"></div>
                        <div class="outer-right">
                            <div class="service">
                                <pre>爱你哦</pre>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="footer">
                <div class="msg-input">
                    <div class="input-box">
                        <div id="text_in" class="edit-ipt"
                             style="overflow-y: auto; font-weight: normal; font-size: 14px; overflow-x: hidden; word-break: break-all; font-style: normal; outline: none;padding: 5px;"
                             contenteditable="true" hidefocus="true" tabindex="0"></div>
                    </div>

                    <div class="msg-toolbar-footer grey12">
                        <a class="layui-btn"
                           style="background:#d41010;position: absolute;left:0;top:0;width: 80%;height: 42px;text-align: center;line-height: 46px;">
                            发送
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 浮层 -->
        <div id="fuceng" class="hide"
             style="background: #e2e2e2;width:270px;height: 80px;position: absolute;bottom: 60px;right: -270px;z-index: 9999;border-radius: 8px;">
            <ul style="display: inline-block;width: 100%;height: 30px;line-height: 40px;text-align: center;">
                <li style="cursor: pointer;" name="1">
                    <i id="type1" class="layui-icon hidden"></i><span>按Enter键发送消息，Ctrl+Enter换行</span>
                </li>
                <li style="cursor: pointer;" name="2">
                    <i id="type2" class="layui-icon"></i><span>按Ctrl+Enter键发送消息，Enter换行</span>
                </li>
            </ul>
        </div>
    </section>
</div>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript">
    var room_id = '{{$roomId}}';
    // 链接后端程序
    (function connect() {
        var ws = new WebSocket('ws://' + document.domain + ':7272');
        ws.onopen = function () {
            console.log('开始聊天');
        };
        ws.onmessage = function (e) {
            console.log(e);
            var data = JSON.parse(e.data),
                    type = data.type || '';
            switch (type) {
                case 'init':
                    $.ajax({
                        type: 'post',
                        data: {'room_id': room_id, 'client_id': data.client_id},
                        dataType: 'json',
                        url: '{{url('chat/bindAndGroup')}}',
                        success: function (data) {

                        },
                        error: function () {

                        }
                    });
                    break;
                case 'group':
                    welcome(data.message);
                    getUserLists(); // 更新列表
                    break;
            }
        };
        ws.onerror = function () {
            console.log('连接出错');
        }
        ws.onclose = function () {
            console.log('连接关闭，正在重连');
            connect(); // 重连
        };
    })();
    function welcome($message) {
        var e = '<li class="chatmsg"><div class="showtime"></div><div class="" style="position: absolute;left:3px;"><img class="my-circle  se_pic" src="https://www.wolive.cc/assets/upload/2.jpg" width="50px" height="50px"> </div> <div class="outer-left"> <div class="customer"> <pre>' + $message + '</pre> </div> </div></li>';
        $('#message').append(e);
    }

    function getUserLists() {
        $.ajax({
            type: 'post',
            data: {'room_id': room_id},
            dataType: 'json',
            url: '{{url('chat/getUserLists')}}',
            success: function (data) {
                $('#chat_list').empty();
                data.data.map(function (value, index, array) {
                    var e = '<div id="v9" class="visiter">' +
                            '<i class="layui-icon myicon hide" title="删除" style="font_weight:blod"></i>' +
                            '<span id="c9" class="notice-icon hide"></span>' +
                            '<div class="visit_content">' +
                            '<img class="am-radius v-avatar" id="img9" src="http://www.mall.com/images/about-us-tu2.gif" width="50px">' +
                            '<span class="c_name">' + value.name +
                            '</span><div id="msg9" class="newmsg">' + value.client + '</div></div></div>';
                    $('#chat_list').append(e);
                });
            },
            error: function () {

            }
        })
    }
    getUserLists();
</script>
</body>
</html>