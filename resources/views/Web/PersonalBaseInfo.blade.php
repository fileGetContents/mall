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
                <div class="user-avatar"><span><img src="/js/default_user_portrait.gif"></span></div>
                <div class="ncm-default-form fr">
                    <form method="post" id="profile_form">
                        <dl>
                            <dl>
                                <dt>昵称</dt>
                                <dd><input type="text" class="text" maxlength="20" name="member_truename" value=""></dd>
                            </dl>
                        </dl>
                        <dl>
                            <dt>真实姓名：</dt>
                            <dd><input type="text" class="text" maxlength="20" name="member_truename" value=""></dd>
                        </dl>
                        <dl>
                            <dt>身份证号码:</dt>
                            <dd><input type="text" class="text"></dd>
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

@endsection
@section('js')
    <script type="text/javascript">
        //注册表单验证
        $(function () {
            regionInit("region");
            $('#birthday').datepicker({dateFormat: 'yy-mm-dd'});
        });
    </script>
@endsection
