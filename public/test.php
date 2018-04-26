
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>风禾在线客服系统</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Language" content="zh-CN">
    <link rel="shortcut icon" href="/wolive.ico"/>
    <link rel="stylesheet" type="text/css" href="/assets/libs/layer/skin/layer.css" />
    <link rel="stylesheet" type="text/css" href="/assets/libs/amaze/css/amazeui.min.css" />
    <script type="text/javascript" src="/assets/libs/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/assets/libs/jquery/jquery.form.min.js"></script>
    <script type="text/javascript" src="/assets/libs/jquery/jquery.cookie.js"></script>
    <script type="text/javascript" src="/assets/libs/layer/layer.js"></script>
    <script type="text/javascript" src="/assets/libs/amaze/js/amazeui.min.js"></script>
    <script type="text/javascript" src="/assets/libs/layui/layui.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/libs/layui/css/layui.css" />
    <link rel="stylesheet" type="text/css" href="/assets/libs/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/admin/common.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/admin/reload.css" />
    <script type="text/javascript" src="/assets/js/admin/functions.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/admin/index.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/admin/index_me.css" />
    <script type="text/javascript" src="/assets/js/admin/common_me.js"></script>
    <script type="text/javascript" src="/assets/libs/push/pusher.min.js"></script>
    <script type="application/javascript">
        var WEB_SOCKET_SWF_LOCATION = "/assets/libs/web_socket/WebSocketMain.swf";
        var WEB_SOCKET_DEBUG = true;
        var WEB_SOCKET_SUPPRESS_CROSS_DOMAIN_SWF_ERROR = true;
        var chat_data =Array();
        var record;
        var myTitle = document.title;
        function titleBlink(){

            record++;

            if(record === 3){
                record =1;
            }

            if(record === 1){
                document.title='【  】'+myTitle;
            }
            if(record === 2){
                document.title='【消息】'+myTitle;
            }

            if(record > 3){
                getwaitnum();
                return;
            }

            setTimeout("titleBlink()",500);//调节时间，单位毫秒。
        }



        //注意：选项卡 依赖 element 模块，否则无法进行功能性操作
        layui.use('element', function () {
            var element = layui.element();
        });

        var wolive_connect =function () {
            var pusher = new Pusher('b054014693241bcd9c20', {
                encrypted: true                , enabledTransports: ['ws']
                , wsHost: 'home.wolive.cc'
                , wssPort: 9090                , authEndpoint: '/auth.php'
                ,disableStats: true
            });

            var web = "test";

            var dataarr = new Array();


            var value ="10";

            // 私人频道
            var channelme = pusher.subscribe("ud" + value);
            channelme.bind("on_notice", function (data) {
                $.cookie("cu_com", JSON.stringify(data.message));
                getonline();
                chaton();
            });

            channelme.bind("on_chat", function (data) {
                $.cookie("cu_com",'');
                layer.msg('该访客被删除');
                getchat();
            });


            // 公共平道

            var channelall = pusher.subscribe("all" + web);
            channelall.bind("on_notice", function (data) {
                getwait();
                getchat();
                getwaitnum();
                layer.msg(data.message, {offset: "20px"});
            });

            var channel =pusher.subscribe("kefu" + value);
            // 接受视频请求
            channel.bind("video",function (data) {
                var msg = data.message;
                var cha = data.channel;
                var avatar =data.avatar;
                var username =data.username;
                layer.open({
                    type: 1,
                    title: '申请框',
                    area: ['260px', '160px'],
                    shade: 0.01,
                    fixed: true,
                    btn: ['接受', '拒绝'],
                    content: "<div style='position: absolute;left:20px;top:15px;'><img src='"+avatar+"' width='40px' height='40px' style='border-radius:40px;position:absolute;left:5px;top:5px;'><span style='width:100px;position:absolute;left:70px;top:5px;font-size:13px;overflow-x: hidden;'>"+username+"</span><div style='width:90px;height:20px;position:absolute;left:70px;top:26px;'>"+msg+"</div></div>",
                    yes: function () {
                        layer.closeAll('page');
                        var falg = window.location.protocol;
                        if (falg == 'https:') {
                            layer.open({
                                type: 2,
                                title: 'video',
                                area: ['380px', '300px'],
                                shade: false,
                                resize: true,
                                content: 'https://rtc.laychat.net/call/' + cha
                            });
                        } else {
                            var iWidth = 400;  // 窗口宽度
                            var iHeight = 300; // 窗口高度
                            var iTop = (window.screen.availHeight - 30 - iHeight) / 2;
                            var iLeft = (window.screen.availWidth - 10 - iWidth) / 2;
                            win = window.open("https://rtc.laychat.net/call/" + cha, "_blank", "toolbar=no,directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width=" + iWidth + ", height=" + iHeight + ",top=" + iTop + ",left=" + iLeft + ",alwaysRaised=yes");

                        }
                    },
                    btn2:function(){
                        var sid = $('#channel').text();
                        $.ajax({
                            url:'/admin/set/refuse',
                            type:'post',
                            data:{id:sid}
                        });

                        layer.closeAll('page');
                    }
                });
            });

            channel.bind('getswitch',function(data){
                layer.alert(data.message);
                getchat();
            });

            // 接受拒绝视频请求
            channel.bind("video-refuse",function (data) {
                layer.alert(data.message);
            });



            // 接受消息

            channel.bind("cu-event", function (data) {

                if("open" == 'open'){
                    audioElementHovertree = document.createElement('audio');
                    audioElementHovertree.setAttribute('src', "/upload/voice/default.mp3");
                    audioElementHovertree.setAttribute('autoplay', 'autoplay');
                }


                var debug, portrait,showtime;
                var cdata = $.cookie("cu_com");

                if (cdata) {
                    var json = $.parseJSON(cdata);
                    debug = json.visiter_id;
                    portrait = json.avatar;
                } else {
                    debug = "";

                }

                if($.cookie("time") == ""){
                    time =data.message.timestamp;
                    $.cookie("time",time);
                    var mydate =new Date(time*1000);
                    showtime =mydate.getHours()+":"+mydate.getMinutes();
                }else{
                    time =$.cookie("time");
                    if((data.message.timestamp - time) >60){
                        var mydate =new Date(data.message.timestamp*1000);
                        showtime =mydate.getHours()+":"+mydate.getMinutes();
                    }else{
                        showtime ="";
                    }
                    $.cookie("time",data.message.timestamp);
                }
                var msg = '';
                msg += '<li class="chatmsg"><div class="showtime">' +showtime+ '</div><div style="position: absolute;left:3px;">';
                msg += '<img class="my-circle  se_pic" src="' + portrait + '" width="50px" height="50px"></div>';
                msg += "<div class='outer-left'><div class='customer'>";
                msg += "<pre>" + data.message.content + "</pre>";
                msg += "</div></div>";
                msg += "</li>";

                if (data.message.visiter_id == debug) {
                    $(".conversation").append(msg);
                    getwatch(data.message.visiter_id);


                    var str = data.message.content;
                    str.replace(/<img [^>]*src=['"]([^'"]+)[^>]*>/gi, function (match, capture) {

                        var pos = capture.lastIndexOf("/");
                        var value = capture.substring(pos + 1);

                        if (value.indexOf("emo") == 0) {
                            str = data.message.content;
                        } else {
                            str = '[图片]';
                        }
                    });

                    str = str.replace(/<div><a[^<>]+>.+?<\/a><\/div>/,'[文件]');


                    $("#msg" + data.message.visiter_id).html(str);

                    var div = document.getElementById("wrap");

                } else {
                    getnews(data.message.visiter_id);
                    getnow(data.message);
                }


                if(div){
                    div.scrollTop = div.scrollHeight;
                }
                $("#notices-icon").removeClass('hide');

            });


            // 通知 游客离线
            channel.bind("logout", function (data) {

                //表示访客离线
                var cdata = $.cookie("cu_com");
                var chas;
                if (cdata) {
                    var jsondata = $.parseJSON(cdata);
                    chas = jsondata.channel;
                }

                if (chas == data.message.chas) {
                    //头像变灰
                    $("#v_state").text("离线");
                }

                $("#img" + data.message.chas).addClass("icon_gray");

            });

            channel.bind("geton", function (data) {

                //表示访客在线
                var cdata = $.cookie("cu_com");
                var chas;
                if (cdata) {
                    var jsondata = $.parseJSON(cdata);
                    chas = jsondata.channel;
                }
                if (chas == data.message.chas) {
                    //头像变亮
                    $("#img" + data.message.chas).removeClass("icon_gray");
                    $("#v_state").text("在线");
                }

                $("#img" + data.message.chas).removeClass("icon_gray");

            });

            pusher.connection.bind('state_change', function(states) {
                // states = {previous: 'oldState', current: 'newState'}
                if(states.current == 'unavailable' || states.current == "disconnected" || states.current == "failed" ){

                    pusher.unsubscribe("kefu" + value);
                    pusher.unsubscribe("all" + web);
                    pusher.unsubscribe("ud" + value);

                    if (typeof pusher.isdisconnect == 'undefined') {
                        pusher.isdisconnect = true;

                        pusher.disconnect();
                        delete pusher;

                        window.setTimeout(function(){
                            wolive_connect();
                        },1000);
                    }


                    $(".profile").text('离线');
                }
            });

            pusher.connection.bind('connected', function() {
                $(".profile").text('在线');
            });
        }


        function showpage(obj){
            var value =$(obj).attr("name");
            var key =$(obj).attr("id");
            layer.tips(value, '#'+key,{tips: [4, '#2F4050']});
        }



    </script>



    <script type="text/javascript" src="/assets/libs/web_socket/swfobject.js"></script>
    <script type="text/javascript" src="/assets/libs/web_socket/web_socket.js"></script>

    <script type="text/javascript" src="/assets/js/admin/online.js?v=1.1"></script>

</head>
<style type="text/css">

    #group-menus-main li{
        display: block;
        width: 100%;
        height: 45px;
        line-height: 20px;
    }

    a:hover {
        text-decoration: none;
        color: #858684;
    }

    a {
        color: #858684;
    }
    .info{
        position: absolute;
        left:40%;
    }

    #notices-icon{
        display: inline-block;
        width: 15px;
        height: 15px;
        background: url("/assets/images/admin/notice.png") no-repeat;
        background-size:100%;
        position: absolute;
        left:30px;
        top: 8px;
        z-index: 9990;
    }

</style>
<body>



<div id="layout-west" >
    <div id="layout-menus">
        <div id="layout-menus-info">
            <a class="" href="javascript:;">
                <img src="/assets/images/index/workerman_logo.png" alt="..." class="am-circle" width="35px" height="35px">
                <!-- <span style="color: #fff;font-weight: bold;font-size: 16px;margin-left: 10px;">Wolive客服</span> -->
                <span class="info hide" style="color: #fff;font-weight: bold;font-size: 16px;margin-top:10px;">WoLive</span>
            </a>

        </div>

        <div id="layout-menus-lists">

            <ul id="group-menus-main" class="group-menus am-list ">
                <li class="menu-item" id="title1" onmouseover="showpage(this)" name="首页" >
                    <a  href="/admin/index/index.html" >
                        <i class="menus-icon am-icon-home am-icon-sm"></i><span class="info hide">首页</span>
                    </a>
                </li>

                <li class="menu-item" id="title2" onmouseover="showpage(this)" name="对话平台" style="background:#13292B;">
                    <!--  <i id="notices-icon" class=""></i> -->
                    <a  href="/admin/index/chats.html" >
                        <i class="menus-icon am-icon-comment am-icon-sm"></i><span class="info hide">对话平台</span>
                    </a>
                </li>

                <li class="menu-item" id="title4" onmouseover="showpage(this)" name="留言查看">
                    <a href="/admin/index/message.html" >
                        <i class="menus-icon am-icon-envelope am-icon-sm"></i><span class="info hide">留言查看</span>
                    </a>
                </li>
                <li class="menu-item" id="title5" onmouseover="showpage(this)" name="客服列表">
                    <a href="/admin/manager/info.html" >
                        <i class="menus-icon am-icon-users am-icon-sm"></i><span class="info hide">客服列表</span>
                    </a>
                </li>

                <li class="menu-item" id="title6" onmouseover="showpage(this)" name="新增客服">
                    <a href="/admin/manager/add.html" >
                        <i class="menus-icon am-icon-user am-icon-sm"></i><span class="info hide">新增客服</span>
                    </a>
                </li>

                <li class="menu-item" id="title11" onmouseover="showpage(this)" name="常见问题设置">
                    <a href="/admin/index/question.html" >
                        <i class="menus-icon am-icon-question-circle-o am-icon-sm"></i><span class="info hide">常见问题</span>
                    </a>
                </li>
                <li class="menu-item" id="title12" onmouseover="showpage(this)" name="编辑前端tab面版">
                    <a href="/admin/index/tablist.html" >
                        <i class="menus-icon am-icon-file-text am-icon-sm"></i><span class="info hide">前端编辑</span>
                    </a>
                </li>
                <li class="menu-item"  id="title7" onmouseover="showpage(this)" name="历史记录">
                    <a href="/admin/manager/view.html">
                        <i class="menus-icon am-icon-history am-icon-sm"></i><span class="info hide">历史记录</span>
                    </a>
                </li>
                <li class="menu-item" id="title10" onmouseover="showpage(this)" name="设置">
                    <a href="/admin/index/set.html" >
                        <i class="menus-icon am-icon-gear am-icon-sm"></i><span class="info hide">设置</span>
                    </a>
                </li>
                <li class="menu-item" id="title8" onmouseover="showpage(this)" name="问候语设置">
                    <a href="/admin/index/custom.html" >
                        <i class="menus-icon am-icon-comments-o am-icon-sm"></i><span class="info hide">问候语设置</span>
                    </a>
                </li>
                <li class="menu-item" id="title9" onmouseover="showpage(this)" name="网页部署">
                    <a href="/admin/index/front.html" >
                        <i class="menus-icon am-icon-file-code-o am-icon-sm"></i><span class="info hide">网页部署</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>

    <div class="west_foot1" style="width:100%;height:40px;position: absolute;bottom: 0px;background: #13292B;text-align: center;line-height: 40px;">
        <a href="javascript:changeall()" >
            <i class="menus-icon am-icon-align-justify am-icon-sm"></i>
        </a>
    </div>
    <div class="west_foot2 hide" style="width:100%;height:40px;position: absolute;bottom: 0px;background: #13292B;text-align: center;line-height: 40px;">
        <a href="javascript:changesmall()" >
            <i class="menus-icon am-icon-align-justify am-icon-sm"></i>
        </a>
    </div>
</div>

<script type="text/javascript">
    var width =document.body.clientWidth;

    var changeall =function(){
        $("#layout-west").css("width","130px");
        $("#layout-center").css({"position":"absolute","left":"130px","width":(width-130)+"px"});
        $(".info").removeClass("hide");
        $(".west_foot2").removeClass("hide");
        $(".west_foot1").addClass("hide");
    }
    var changesmall =function(){
        $("#layout-west").css("width","55px");
        $("#layout-center").css({"position":"absolute","left":"55px","width":(width-55)+"px"});
        $(".info").addClass("hide");
        $(".west_foot2").addClass("hide");
        $(".west_foot1").removeClass("hide");
    }

    window.onresize = function(){
        $("#layout-west").css("width","55px");
        $("#layout-center").css("width",(width-55)+"px");
    }

</script>

<div id="layout-center">
    <div id="layout-north">
        <a id="layout-logo"><i class="am-icon-bookmark"></i>&nbsp;对话平台</a>
        <ul id="layout-tools" class="am-nav am-nav-pills">
            <li style="width: 100%;height: 25px">
                <div class="am-dropdown " data-am-dropdown>
                    <a class="am-dropdown-toggle" href="javascript:;" data-am-dropdown-toggle>
                        <img  id="se_avatar" src="/upload/images/1524634458.png" alt="..." class="am-circle" width="40px" height="40px">
                        <span class="handle" id="se"> 管理员test </span>
                        <span id="channel" style="display: none;"></span>
                        <span id="customer" style="display: none;"></span>
                        <span class="profile">在线<i class="am-icon-caret-down"></i></span>
                    </a>

                    <ul class="am-dropdown-content">
                        <li><a href='javascript:showinfo({"service_id":10,"user_name":"test","nick_name":"\u7ba1\u7406\u5458test","password":"d4c8c300c048d2d15ffcbf600142b9fe","phone":"","email":"","business_id":"test","avatar":"\/upload\/images\/1524634458.png","level":"manager","parent_id":0,"state":"offline"})'><i class="am-icon-user"></i> 个人资料</a></li>
                        <li><a href='javascript:modify(10)' ><i class="am-icon-key"></i>修改密码</a></li>
                        <li class="am-divider"></li>
                        <li>
                            <a href="/admin/login/logout.html" class="safe-exit">
                                <i class="am-icon-power-off"></i> 安全退出
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>


    <div id="container">
        <div class="all_content" style="overflow-y: hidden;">
            <section class="" style="width:20%;height:100%;position:absolute;left:0px;background: #f3f3f4;border-right: 1px solid #ddd;">
                <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief"
                     style="margin:0px;position: absolute;top:0px;width: 100%;">
                    <ul class="layui-tab-title">
                        <li class="layui-this" style="width: 50%;">当前对话</li>
                        <li style="width: 50%;">排队列表 <div id="waitnum" class="notice-icon hide" style="position: absolute;top:0px;line-height: 18px;font-size: 8px;" ></div></li>
                    </ul>
                    <div class="layui-tab-content" style="padding: 0px;">
                        <div class="layui-tab-item  layui-show" id="chat_list" style="width: 100%;overflow-y: auto;">
                        </div>
                        <div class="layui-tab-item" id="wait_list" style="width: 100%;overflow-y: auto;">
                        </div>
                    </div>
                </div>
            </section>


            <section style="width:50%;height:100%;position: absolute;left: 20%;background: #F8F8F8;border-right: 1px solid #ddd;">
                <div class="no_chats">
                    <i class="no_chats-pic"></i>
                </div>
                <div class="chatbox hide" style="width: 100%;height: 100%">

                    <div id="wrap" style="width: 100%;height:62%;overflow-y: auto;">
                        <ul class="conversation">

                        </ul>
                    </div>
                    <script type="text/javascript">

                        window.onresize = function(){
                            var height =document.body.clientHeight;
                            $("#chat_list").css("height",(height -110)+"px");
                            $("#wait_list").css("height",(height-110)+"px");
                        }

                        document.getElementById("wrap").onscroll = function(){
                            var t =  document.getElementById("wrap").scrollTop;
                            if( t == 0 ) {

                                var sdata = $.cookie("cu_com");
                                var jsondata = $.parseJSON(sdata);
                                var chas = jsondata.visiter_id;
                                if($.cookie("hid") != ""){
                                    getdata(chas);
                                }
                            }
                        }

                        function info(){
                            layer.tips("将您剪切好的图片粘贴到输入框即可", "#paste", {tips: [1, '#9EC6EA']});
                        }

                    </script>
                    <div class="footer">
                        <div class="msg-toolbar" style="background: #fff;border: none;">
                            <a id="face_icon" onclick="faceon()"><i class="am-icon-md am-icon-smile-o"></i></a>
                            <a >
                                <form id="picture" enctype="multipart/form-data">
                                    <div class="am-form-group am-form-file">
                                        <i class="am-icon-md am-icon-photo"></i>
                                        <input type="file" name="upload" onchange="put()"/>
                                    </div>
                                </form>
                            </a>
                            <a >
                                <form id="file" enctype="multipart/form-data">
                                    <div class="am-form-group am-form-file">
                                        <i class="am-icon-md am-icon-folder-o"></i>
                                        <input type="file" name="folder" onchange="putfile()"/>
                                    </div>
                                </form>
                            </a>
                            <a onclick="getvideo()"><i class="am-icon-md am-icon-video-camera"></i></a>

                            <a href="javascript:getblack()"><i class="am-icon-ban am-icon-md" title="拖入黑名单"></i></a>
                            <a onclick="getswitch()"><i class="am-icon-md am-icon-random"></i></a>
                            <a onclick="gethistory()"><i class="am-icon-md am-icon-wpforms" title="该用户所有聊天记录"></i></a>
                            <a onmouseover="info()" id="paste" style="position:absolute; right:2px;top:5px;"><i class="am-icon-sm am-icon-cut"></i> 怎样发截图？</a>
                        </div>

                        <div class="tool_box">

                            <div class="wl_faces_content">

                                <div class="wl_faces_main">
                                    <ul>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_01.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_02.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_03.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_04.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_05.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_06.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_07.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_08.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_09.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_10.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_11.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_12.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_13.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_14.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_15.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_16.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_17.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_18.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_19.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_20.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_21.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_22.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_23.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_24.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_25.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_26.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_27.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_28.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_29.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_30.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_31.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_32.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_33.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_34.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_35.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_36.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_37.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_38.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_39.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_40.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_41.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_42.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_43.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_44.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_45.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_46.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_47.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_48.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_49.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_50.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_51.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_52.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_53.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_54.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_55.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_56.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_57.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_58.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_59.gif"/></a></li>
                                        <li><a href="javascript:;">
                                                <img src="/upload/emoji/emo_60.gif"/></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="msg-input">
                            <div class="input-box">
                                <div id="text_in" class="edit-ipt"
                                     style="overflow-y: auto; font-weight: normal; font-size: 14px; overflow-x: hidden; word-break: break-all; font-style: normal; outline: none;padding: 5px;"
                                     contenteditable="true" hidefocus="true" tabindex="0"></div>
                            </div>

                            <div class="msg-toolbar-footer grey12" >
                                <a onclick="send()" class="layui-btn" style="background:#d41010;position: absolute;left:0;top:0;width: 80%;height: 42px;text-align: center;line-height: 46px;">
                                    发送
                                </a>
                                <a id="showinfo" style="position: absolute;right: 0;top: 0;width: 20%;height: 42px;background: #d41010;text-align: center; border-left: 1px solid #FFF;cursor: pointer;" >
                                    <i class='triangle'  style="margin-top: 21px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 浮层 -->
                <div id='fuceng' class="hide" style="background: #e2e2e2;width:270px;height: 80px;position: absolute;bottom: 60px;right: -270px;z-index: 9999;border-radius: 8px;">
                    <ul style="display: inline-block;width: 100%;height: 30px;line-height: 40px;text-align: center;">
                        <li onclick="choosetype(this)" style="cursor: pointer;" name='1'><i id='type1' class="layui-icon">&#xe618;</i><span>按Enter键发送消息，Ctrl+Enter换行</span></li>
                        <li onclick="choosetype(this)" style="cursor: pointer;" name='2'><i id='type2' class="layui-icon hidden">&#xe618;</i><span>按Ctrl+Enter键发送消息，Enter换行</span></li>
                    </ul>
                </div>

            </section>

            <section class="chatinfo">

                <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief" style="margin: 0px;">
                    <ul class="layui-tab-title">
                        <li class="layui-this" style="width: 50%">访客信息</li>
                        <li style="width: 50%">黑名单</li>

                    </ul>

                    <div class="layui-tab-content" style="">
                        <div class="layui-tab-item layui-show">


                            <div class="" style="margin:20px; ">

                                <h4 style="font-weight: bold;">访问信息</h4>

                                <div style="margin-top: 20px;font-size: 15px;">
                                    <i class="am-icon-xs am-icon-bookmark" style="cursor: pointer;"
                                       title="访客浏览页面"></i>：<span class="record" style="font-size: 13px;"></span>

                                </div>

                                <div style="margin-top: 20px;font-size: 15px;">
                                    <i class="am-icon-map-marker am-icon-xs" style="cursor: pointer;"
                                       title="访客来源地址"></i>：<span class="iparea" style="font-size: 13px;"></span>

                                </div>

                                <div style="margin-top: 20px;font-size: 15px;">
                                    <i class="am-icon-user-md am-icon-xs" style="cursor: pointer;" title="访客状态">：<span
                                            id="v_state" style="font-size: 10px;"></span></i>
                                </div>

                            </div>

                        </div>

                        <div class="layui-tab-item" id='black_list'
                             style="width: 100%;height:400px;overflow-y: auto;padding: 0px;">


                        </div>

                    </div>
                </div>

            </section>

        </div>

    </div>

    <script type="text/javascript">

        function getOs() {
            var OsObject = "";

            if (isFirefox = navigator.userAgent.indexOf("Firefox") > 0) {
                return "Firefox";
            }

        }



        function showDiv(){

            $("#fuceng").toggleClass('hide');
        }


        $(function (){

            $("#showinfo").on('click',function(){

                showDiv();

                $(document).one("click", function () {

                    $("#fuceng").addClass('hide');

                });
                event.stopPropagation();//阻止事件向上冒泡
            });

            $("#fuceng").click(function (event)
            {
                event.stopPropagation();//阻止事件向上冒泡

            });
        });





        function choosetype(obj){

            $(obj).children('i').removeClass('hidden');
            $(obj).siblings('li').children('i').addClass('hidden');
            var type =$(obj).attr('name');
            $.cookie('type',type);
            $("#fuceng").addClass('hide');

            types();
        }


        //获取qq截图的图片
        (function () {
            var imgReader = function (item) {
                var blob = item.getAsFile(),
                    reader = new FileReader();
                // 读取文件后将其显示在网页中
                reader.onload = function (e) {
                    var img = '';
                    img += "<img onclick='getbig(this)'  src='" + e.target.result + "'>";

                    if (getOs() != "Firefox") {
                        $("#text_in").append(img);
                    }
                };
                // 读取文件
                reader.readAsDataURL(blob);
            };
            document.getElementById('text_in').addEventListener('paste', function (e) {
                // 添加到事件对象中的访问系统剪贴板的接口
                var clipboardData = e.clipboardData,
                    i = 0,
                    items, item, types;

                if (clipboardData) {
                    items = clipboardData.items;
                    if (!items) {
                        return;
                    }
                    item = items[0];
                    // 保存在剪贴板中的数据类型
                    types = clipboardData.types || [];
                    for (; i < types.length; i++) {
                        if (types[i] === 'Files') {
                            item = items[i];
                            break;
                        }
                    }
                    // 判断是否为图片数据
                    if (item && item.kind === 'file' && item.type.match(/^image\//i)) {
                        imgReader(item);
                    }
                }
            });
        })();

        // 视频通话
        var getvideo =function(){

            var sid = $('#channel').text();
            var pic = $("#se_avatar").attr('src');

            var times = (new Date()).valueOf();
            var se = $("#se").text();
            //申请
            $.ajax({
                url: '/admin/set/apply',
                type: 'post',
                data: {id: sid,channel: times,avatar:pic,name:se},
                success:function(res){
                    if(res){
                        layer.msg(res,{icon:2,offset:'20px'});
                    }
                }

            });

            var iWidth=400;  // 窗口宽度
            var iHeight=300; // 窗口高度
            var iTop = (window.screen.availHeight - 30 - iHeight) / 2;
            var iLeft = (window.screen.availWidth - 10 - iWidth) / 2;
            window.open("https://rtc.laychat.net/call/"+times,"_blank","toolbar=no,directories=no, status=no, menubar=yes, scrollbars=yes, resizable=no, copyhistory=yes, width="+iWidth+", height="+iHeight+",top="+iTop+",left="+iLeft+",alwaysRaised=yes");

        }

        var gethistory=function(){

            var sdata = $.cookie("cu_com");
            var jsondata = $.parseJSON(sdata);
            var vid =jsondata.visiter_id;
            layer.open({
                type: 2,
                title: '该用户所有历史消息',
                area: ['600px', '500px'],
                shade: false,
                content: '/admin/index/history?visiter_id='+vid
            });

        }


        var getswitch =function(){

            var sid = $('#channel').text();
            var se = $("#se").text();

            layer.open({
                type: 2,
                title: '客服列表',
                area: ['300px', '400px'],
                shade: false,
                content: '/admin/index/service?visiter_id='+sid+'&name='+se
            });
        }




    </script>
    <script type="text/javascript" src="/assets/js/admin/chat.js?v=1.1"></script>
    <!-- <div class="footer_main"></div> -->

</div>

<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?bc8045638f0448307931dcc2b949fdd1";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();

    wolive_connect();

</script>
</body>
</html>




