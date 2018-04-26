<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>聊天室登录</title>
    <link rel="stylesheet" type="text/css" href="{{asset('Chat/css/login.css')}}"/>
</head>
<body>
<dl class="admin_login">
    <dt>
        <strong>登录聊天室</strong>
        <em>login</em>
    </dt>
    <dd class="user_icon">
        <input type="text" placeholder="账号" class="login_txtbx" name="name" id="name"/>
    </dd>
    <dd class="pwd_icon">
        <input type="password" placeholder="密码" class="login_txtbx" name="password" id="password"/>
    </dd>
    <dd class="val_icon" style="display: none;">
        <div class="checkcode">
            <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
            <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
        </div>
        <!--<input type="button" value="验证码核验" class="ver_btn" onClick="validate();">-->
    </dd>
    <dd>
        <input type="button" value="立即登陆" class="submit_btn"/>
    </dd>
    <dd>
        <p>login</p>
    </dd>
</dl>
</body>
<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('Chat/js/verificationNumbers.js')}}"></script>
<script type="text/javascript" src="{{asset('Chat/js/Particleground.js')}}"></script>
<script type="text/javascript" src="{{asset('layer/layer.js')}}"></script>
<script>
    $(document).ready(function () {
        //粒子背景特效
        $('body').particleground({
            dotColor: '#5cbdaa',
            lineColor: '#5cbdaa'
        });
    });
    $(function () {
        $('.submit_btn').click(function () {
            $.ajax({
                type: 'post',
                dataType: 'json',
                data: {'name': $('#name').val(), 'password': $('#password').val()},
                url: '{{url('chat/loginRequest')}}',
                success: function (data) {
                    if (data.message == 'success') {
                        window.location.href = data.data;
                    } else {
                        layer.msg(data.data)
                    }

                },
                error: function () {
                }
            })
        });
    })
</script>
</html>