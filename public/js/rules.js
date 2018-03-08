jQuery.validator.addMethod('password', function (value, element) {
    var tel = /(?!^\d+$)(?!^[a-zA-Z]+$)[0-9a-zA-Z]{6,16}/;
    return this.optional(element) || (tel.test(value));
}, '密码由6-16的字母、数字组成');
jQuery.validator.addMethod('telephone', function (value, element) {
    var tel = /^1[34578]\d{9}$/;
    return this.optional(element) || (tel.test(value));
}, '请输入11位正确手机号码');
jQuery.validator.addMethod('username', function (value, element) {
    var tel = /[A-Za-z0-9]{6,20}$/;
    return this.optional(element) || (tel.test(value));
}, '用户名是有6-20字母加数字组成');
