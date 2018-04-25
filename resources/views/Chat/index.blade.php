<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>聊天框架</title>
    <link rel="stylesheet" type="text/css" href="{{asset('chat/css/qq.css')}}"/>
</head>
<body>
<div class="qqBox">
    <div class="BoxHead">
        <div class="headImg">
            <img src="img/6.jpg"/>
        </div>
        <div class="internetName">90后大叔</div>
    </div>
    <div class="context">
        <div class="conLeft">
            <ul id="userList">
                <li>
                    <div class="liLeft"><img src="img/20170926103645_04.jpg"/></div>
                    <div class="liRight">
                        <span class="intername">前端交流群</span>
                        <span class="infor">厉害了</span>
                    </div>
                </li>
            </ul>
        </div>
        <div class="conRight">
            <div class="Righthead">
                <div class="headName">赵鹏</div>
                <div class="headConfig">
                    <ul>
                        <li><img src="img/20170926103645_06.jpg"/></li>
                        <li><img src="img/20170926103645_08.jpg"/></li>
                        <li><img src="img/20170926103645_10.jpg"/></li>
                        <li><img src="img/20170926103645_12.jpg"/></li>
                    </ul>
                </div>
            </div>
            <div class="RightCont">
                <ul class="newsList">

                </ul>
            </div>
            <div class="RightFoot">
                <div class="emjon">
                    <ul>
                        <li><img src="img/em_02.jpg"/></li>
                        <li><img src="img/em_05.jpg"/></li>
                        <li><img src="img/em_07.jpg"/></li>
                        <li><img src="img/em_12.jpg"/></li>
                        <li><img src="img/em_14.jpg"/></li>
                        <li><img src="img/em_16.jpg"/></li>
                        <li><img src="img/em_20.jpg"/></li>
                        <li><img src="img/em_23.jpg"/></li>
                        <li><img src="img/em_25.jpg"/></li>
                        <li><img src="img/em_30.jpg"/></li>
                        <li><img src="img/em_31.jpg"/></li>
                        <li><img src="img/em_33.jpg"/></li>
                        <li><img src="img/em_37.jpg"/></li>
                        <li><img src="img/em_38.jpg"/></li>
                        <li><img src="img/em_40.jpg"/></li>
                        <li><img src="img/em_45.jpg"/></li>
                        <li><img src="img/em_47.jpg"/></li>
                        <li><img src="img/em_48.jpg"/></li>
                        <li><img src="img/em_52.jpg"/></li>
                        <li><img src="img/em_54.jpg"/></li>
                        <li><img src="img/em_55.jpg"/></li>
                    </ul>
                </div>
                <div class="footTop">
                    <ul>
                        <li><img src="img/20170926103645_31.jpg"/></li>
                        <li class="ExP"><img src="img/20170926103645_33.jpg"/></li>
                        <li><img src="img/20170926103645_35.jpg"/></li>
                        <li><img src="img/20170926103645_37.jpg"/></li>
                        <li><img src="img/20170926103645_39.jpg"/></li>
                        <li><img src="img/20170926103645_41.jpg" alt=""/></li>
                        <li><img src="img/20170926103645_43.jpg"/></li>
                        <li><img src="img/20170926103645_45.jpg"/></li>
                    </ul>
                </div>
                <div class="inputBox">
                    <textarea id="dope" style="width: 99%;height: 75px; border: none;outline: none;" name="" rows=""
                              cols=""></textarea>
                    <button class="sendBtn">发送(s)</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('Chat/js/jquery.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('Chat/js/chat.js')}}"></script>--}}
<script type="text/javascript">
    // 链接后端程序
    (function connect() {
        var ws = new WebSocket("ws://" + document.domain + ":7272");

        ws.onopen = function () {
            console.log('开始聊天');
        };

        ws.onmessage = function (e) {
            var data = JSON.parse(e.data),
                    type = data.type || '';
            console.log(e);
            switch (type) {
                case  'all':
                    addMessage(data.message);
                    break;
                case 'init':
                    $.ajax({
                        type: 'post',
                        data: {'client_id': data.client_id},
                        dataType: 'json',
                        url: '{{URL('chat/bindUid')}}',
                        success: function () {
                        },
                        error: function () {
                        }
                    });
                    break;
                case 'new':
                    addMessage(data.message);
                    getUserList(); // 更新列表
                    break;
                case 'client':
                    addMessage(data.message);
                    break;
                case 'self':
                    addMessage(data.message);
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

    // 发送消息
    $('.sendBtn').on('click', function () {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '{{URL('chat/say')}}',
            data: {'message': $('#dope').val(), 'uid': ''},
            success: function (data) {

            },
            error: function (data) {

            }
        })
    });

    function addMessage($message) {
        var str = '';
        str += '<li>' +
                '<div class="nesHead"><img src="img/6.jpg"/></div>' +
                '<div class="news"><img class="jiao" src="img/20170926103645_03_02.jpg">' + $message + '</div>' +
                '</li>';
        $('.newsList').append(str);
        $('.conLeft').find('li.bg').children('.liRight').children('.infor').text($message);
        $('.RightCont').scrollTop($('.RightCont')[0].scrollHeight);

    }
    /**
     * 更新用户列表
     */
    function getUserList() {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '{{URL('chat/getUserList')}}',
            data: {'message': $('#dope').val(), 'uid': ''},
            success: function (data) {
                $('#userList').empty();
                data.map(function (value, index, array) {
                    var string = '<li><div class="liLeft"><img src="img/20170926103645_04.jpg"/>' +
                            '</div><div class="liRight"><span class="intername">' + value.name + '</span>' +
                            '<span class="infor">' + value.client_id + '</span></div></li>';

                    $('#userList').append(string);
                });
            },
            error: function (data) {

            }
        })
    }
</script>
</body>
</html>