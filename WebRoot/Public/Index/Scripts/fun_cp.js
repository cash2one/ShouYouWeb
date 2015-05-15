/** 公共参数 **/
var COOKIE_NAME = '1678wan_user_name';
var COOKIE_PWD = '1678wan_user_pwd';
var ISLOGIN;

$(document).ready(function() {
 checkUserInfo();
});


function Toast(msg,duration){
    duration=isNaN(duration)?3000:duration;
    var m = document.createElement('div');
    m.innerHTML = msg;
    m.style.cssText="width:60%;font-size:16px; min-width:150px; background:#000; padding:10px 5%; text-shadow:none; opacity:0.7; /*height:40px;*/ line-height:20px; color:#fff; line-height:150%; text-align:center; border-radius:5px; position:fixed; top:40%; left:15%; z-index:999999; font-weight:400;";
    document.body.appendChild(m);
    setTimeout(function() {
        var d = 0.5;
        m.style.webkitTransition = '-webkit-transform ' + d + 's ease-in, opacity ' + d + 's ease-in';
        m.style.opacity = '0';
        setTimeout(function() { document.body.removeChild(m) }, d * 1000);
    }, duration);
}



//初始化用户登录信息
function checkUserInfo(){
    var xmlDocument = {"uname":'wolaiwan'};
    $.ajax({
        type: "POST",
        url: "/Index/Public/getSession",
        data: xmlDocument,
        success: function(msg){
            if(msg.flag){
                initUser(msg.user);
            }

        }
    });
}

function  initUser(user){
    $("#session_false").hide();
    var html = "<div class=\"top_user_info\">"+
        "<div class=\"tui_avatar\"><a href=\"/memberCenter/\"><img src="+"/Public/Index/Images/UserHead/"+user.user_head_icon+" /></a></div>"+
        "<div class=\"tui_username\" style=\"overflow:hidden; white-space:nowrap; overflow:ellipsis\"><a href=\"/memberCenter/\">"+user.user_name+"</a></div>"+
        "</div>"+
        "<div class=\"clear\"></div>"+
        "<div id=\"toplogpane\" class=\"topdownpane\">"+
        "<ul>"+
        "<li>账号：<strong class=\"tlp_green\">"+user.user_name+"</strong></li>"+
        "    <li>常玩币：<span class=\"tlp_orange\">"+user.plat_coin+"</span></li>"+

        "  </ul>"+
        "  <div class=\"clear\"></div>"+
        "</div>";
    $("#session_true").show();
    $("#session_true").html(html);
}

// "	   <li>订单：<span class=\"tlp_orange\">1</span></li>"+
// "	   <li>礼包：<span class=\"tlp_orange\">1</span></li>"+
// "	   <li>消息：<span class=\"tlp_orange\">1</span></li>"+
function getPicoImage(type){
    var t = type.split(",");
    var img="";
    for(var i =0;i<t.length;i++){
        if(t[i]==1){
            img=img+"<img src='/images/android_ico.png' alt=\"安卓游戏\" title=\"安卓游戏\" />&nbsp;&nbsp;";
        }else if(t[i]==2){
            img=img+"<img src='/images/apple_ico.png' alt=\"苹果游戏\" title=\"苹果游戏游戏\"/>&nbsp;&nbsp;";
        }else if(t[i]==3){
            img=img+"<img src='/images/wp_ico.png' alt=\"WP游戏\" title=\"WP游戏\"/>";
        }
    }
    return img
}


function downloads(id,durl,uid){
    var xmlDocument = {"appid":id,"uid":uid};
    $.ajax({
        type: "POST",
        url: "webmember.action?method=addInteger",
        data: xmlDocument,
        success: function(msg){
            window.location.href=durl;

        }
    });
}

