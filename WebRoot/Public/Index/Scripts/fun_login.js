$(document).ready(function() {
    if($.cookie(COOKIE_NAME)||$.cookie(COOKIE_PWD)){
        $("#username").val($.cookie(COOKIE_NAME));
        $("#password").val($.cookie(COOKIE_PWD));
    }
});

function clear_Bar(){
    $('.saveUser').parent('dl').prev('dl').find('.errorBar').remove();
}

function do_submit(f){
    var errmsg = '';
    var username = $('#username').val();
    var password = $('#password').val();
    if(username == ''){errmsg = '请输入用户名';}else if(password == ''){errmsg = '请输入登录密码~';}
    if(errmsg != ''){
        if($('.saveUser').parent('dl').prev('dl').find('.errorBar').length > 0){
            $('.saveUser').parent('dl').prev('dl').find('.errorBar').html('<i class="icon"></i><span class="red">' + errmsg + '</span>');
        }else{
            $('.saveUser').parent('dl').before('<dl>\<div class="errorBar"><i class="icon"></i><span class="red">' + errmsg + '</span></div>\</dl>');
        }
        return false;
    }else{
        $('.saveUser').parent('dl').prev('dl').find('.errorBar').remove();
        $('.saveUser').parent('dl').before('<dl>\<div class="succBar"><i class="icon"></i><span class="green">正在登录.....</span></div>\</dl>');
        setTimeout(function(){
            do_login(username,password,f);
        },500);
    }
}

function do_login(name,pwd,f){
    var xmlDocument = {"name":name,"pwd":pwd};
    $.ajax({
        type: "POST",
        url: "webmember.action?method=UserLogin",
        data: xmlDocument,
        success: function(msg){
            var str = eval("("+msg+")");
            if(str.flag){
                if(f==0){

                    $('.saveUser').parent('dl').prev('dl').find('.succBar').remove();
                    $('.saveUser').parent('dl').before('<dl>\<div class="succBar"><i class="icon"></i><span class="green">登录成功,正在跳转...</span></div>\</dl>');
                    $.cookie(COOKIE_NAME,name, {expires: 30, path: '/'});//
                    $.cookie(COOKIE_PWD,pwd, {expires: 30, path: '/'});//
                    $.cookie(ISLOGIN,true, {expires: 30, path: '/'});//
                    ISLOGIN = true;
                    setTimeout(function(){window.location.href="/memberCenter/";},500);
                }else{
                    ISLOGIN = true;
                    window.location.reload();
                }
            }else{
                $('.saveUser').parent('dl').prev('dl').find('.succBar').remove();
                $('.saveUser').parent('dl').before('<dl>\<div class="errorBar"><i class="icon"></i><span class="red">' +  str.returnMsg + '</span></div>\</dl>');
            };
        }
    });
}



function qq_login(openid,accessToken,info,flag){
    var xmlDocument = {"openid":openid,"accessToken":accessToken,"info":JSON.stringify(info)};
    $.ajax({
        type: "POST",
        url: "webmember.action?method=Ajax_qqLoginCallBack",
        data: xmlDocument,
        success: function(msg){
            if(flag==0){
                ISLOGIN = true;
                $('.saveUser').parent('dl').prev('dl').find('.succBar').remove();
                $('.saveUser').parent('dl').before('<dl>\<div class="succBar"><i class="icon"></i><span class="green">登录成功,正在跳转...</span></div>\</dl>');
                setTimeout(function(){window.location.href="/memberCenter/";},1500);
            }

        }
    });
}



function  do_reg(){
    var k = $("input[name='geetest_challenge']").val();
    var d = $("input[name='geetest_validate']").val();
    var s = $("input[name='geetest_seccode']").val();

    var xmlDocument = {"uname":$("#userName").val(), "pwd":$("#passWord").val(), "nickname":$("#nickName").val(), "yqm":$("#yqm").val(),"geetest_challenge":k,"geetest_validate":d,"geetest_seccode":s,};
    $.ajax({
        type: "get",
        url: "webmember.action?method=userRegister",
        data: xmlDocument,
        success: function(msg){
            var str = eval("("+msg+")");
            if(str.flag){//str.returnMsg
                $.cookie(COOKIE_NAME,$("#userName").val(), {expires: 30, path: '/'});//
                $.cookie(COOKIE_PWD,$("#passWord").val(), {expires: 30, path: '/'});//
                $.cookie(ISLOGIN,true, {expires: 30, path: '/'});//
                ISLOGIN = true;
                Toast(str.returnMsg,3000);
                setTimeout(function(){
                    window.location.href="/memberCenter/";
                },2500);
            }else{
                Toast(str.returnMsg,2500);
                setTimeout(function(){
                    window.location.reload();
                },2800);
            }
        }
    });

}

var istrue = false;
function MyValidatorblur(id){
    if(id=='userName'){
        var unamr = /^([a-zA-Z0-9]|[._]){6,12}$/;
        if(unamr.test(getText(id))){
            setText("userName","√&nbsp;用户名验证成功",0);
            istrue = true;
        }else{
            istrue =false;
            setText("userName","请输入长度为6-12位字符",1);
            return;
        }
    }

    if(id='passWord'){
        var upwd = /^([a-zA-Z0-9]){6,12}$/;
        if(upwd.test(getText(id))){
            setText("passWord","√&nbsp;密码通过成功",0);
            istrue = true;
        }else{
            istrue =false;
            setText("passWord","请输入长度为6-12位的字母或字符",1);
            return;
        }
    }

    if(id='enter_passWord'){
        if(getText("passWord")==getText("passWord_enter")){
            setText("passWord_enter","√&nbsp;密码确认通过",0);
            istrue = true;
        }else{
            istrue =false;
            setText("passWord_enter","两次密码输入错误",1);
            return;
        }

    }

    if(id='nickName'){
        var upwd = /^([0-9]|[a-zA-Z]|[\u4e00-\u9fa5]){2,6}$/;
        if(upwd.test(getText(id))){
            setText("nickName","√&nbsp;昵称验证通过",0);
            istrue = true;
        }else{
            istrue =false;
            setText("nickName","昵称由2-6位字符组成",1);
            return;
        }
    }

}


function MyValidatoFocus(id){
    if(id=='userName'){
        if(getText(id)==""){
            //setText('userName',"帐号不允许为空");
        }
    }else if(id='passWord'){
        // alert("密码");

    }else if(id='enter_passWord'){

        //alert("确认密码");

    }else if(id='nickName'){
        // alert("昵称");

    }
}

function getText(id){
    return $("#"+id).val();
}


function setText(id,text,flag){
    $("#div_"+id).html("&nbsp;&nbsp;&nbsp;"+text);
    if(flag==0){
        $("#div_"+id).removeClass("error");
        $("#div_"+id).addClass("success");
    }else{
        $("#div_"+id).removeClass("success");
        $("#div_"+id).addClass("error");
    }
}

function isOk(){
    if(istrue){
        do_reg();
    }else{
        setText("userName","请输入长度为6-12位字符",1);
    }
}

