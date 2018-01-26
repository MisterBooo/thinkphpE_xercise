/**
 * 前端登录业务类
 * @author MisterBigbooo
 */
var login = {
    check : function() {
        // 获取登录页面中的用户名 和 密码
        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();
        if(!username) {
            dialog.error('login.js----用户名不能为空');
        }
        if(!password) {
            dialog.error('login.js----密码不能为空');
        }

    }

}