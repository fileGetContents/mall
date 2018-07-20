    @extends('Public.Persoanl')
@section('css')
    <link href="/css/member.css" rel="stylesheet" type="text/css">
    <link href="/css/jquery.ui.css" rel="stylesheet" type="text/css">
@endsection
@section('info')
    <div class="right-layout">
        <div class="wrap">
            <div class="tabmenu">
                <ul class="tab pngFix">
                    <li class="active">
                        <a href="http://127.0.0.1/v4/shop/index.php?act=member_information&amp;op=member">基本信息</a>
                    </li>
                </ul>
            </div>
            <div class="ncm-user-profile">
                <div class="user-avatar">
                    <span>
                        <img id="header_img" src="{{$user->user_images}}">
                        <input hidden type="file" id="upImage">
                    </span>
                </div>
                <div class="ncm-default-form fr">
                    <form method="post" id="profile_form">
                        <dl>
                            <dl>
                                <dt>昵称</dt>
                                <dd>
                                    <input type="text" class="text" id="nickName" maxlength="100" name="nickName" value="{{$user->user_nickname}}">
                                </dd>
                            </dl>
                        </dl>
                        <dl>
                            <dt>真实姓名：</dt>
                            <dd>
                                <input type="text" class="text" id="name" maxlength="20" name="name" value="{{$user->user_name}}">
                            </dd>
                        </dl>
                        <dl>
                            <dt>身份证号码:</dt>
                            <dd>
                                <input type="text" name="idCard" id="idCard" class="text" value="{{$user->user_idcard}}">
                            </dd>
                        </dl>
                        <dl class="bottom">
                            <dt></dt>
                            <dd>
                                <label class="submit-border">
                                    <input type="submit" class="submit" value="保存修改">
                                </label>
                            </dd>
                        </dl>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jssrc')
    <script type="text/javascript" src="/js/jquery.validation.min.js"></script>
    <script type="text/javascript" src="/js/layer-v3.1.1/layer.js"></script>
@endsection
@section('js')
    <script type="text/javascript">
        $(function () {
            $('#profile_form').validate({
                submitHandler: function (form) {
                    $.ajax({
                        type: 'post',
                        data: {
                            'nickName': $('#nickName').val(),
                            'name': $('#name').val(),
                            'idCard': $('#idCard').val(),
                            'header': $('#header_img').attr('src')
                        },
                        dataType: 'json',
                        url: '{{url('api/user/updateBaseInfo')}}',
                        success: function (data) {
                            if (data.message == 'success') {
                                layer.msg('保存成功');
                            } else {
                                layer.msg('保存失败');
                            }
                        }, error: function (data) {

                        }
                    })
                },
                onkeyup: false,
                rules: {
                    nickName: {
                        required: true
                    },
                    name: {
                        required: true
                    },
                    idCard: {
                        required: true,
                        remote: {
                            url: '{{url('api/interface/idCard')}}',
                            type: 'post',
                            data: {
                                'idcard': function () {
                                    return $('#idCard').val();
                                },
                                'name': function () {
                                    return $('#name').val();
                                }
                            }
                        }
                    }
                },
                messages: {
                    nickName: {
                        required: '请输入昵称',
                    },
                    name: {
                        required: '请输入姓名',
                    },
                    idCard: {
                        required: '请输入身份证号',
                        remote: '身份证和姓名不匹配'
                    }
                }
            });
            $('#header_img').click(function () {
                $('#upImage').click();
            });
            $('#upImage').change(function () {
                var formData = new FormData();
                formData.append('file', $(this)[0].files[0]);
                $.ajax({
                    url: '{{ URL('api/imageUpload') }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        // 正在发送图片
                    },
                    success: function (data) {
                        $('#header_img').attr('src', data);
                    },
                    error: function (responseStr) {
                    }
                });
            });
        })
    </script>
@endsection
