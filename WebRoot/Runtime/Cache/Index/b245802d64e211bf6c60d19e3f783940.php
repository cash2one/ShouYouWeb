<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo C('GAME_NAME');?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="<?php echo C('WEB_KEYWORD');?>" />
    <meta name="description" content="<?php echo C('WEB_DESCRIPTION');?>" />
    <link rel="stylesheet" href="<?php echo (STATIC_STYLE_URL); ?>base_game.css"/>
    <script type="text/javascript" src="<?php echo (STATIC_SCRIPT_URL); ?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo (STATIC_SCRIPT_URL); ?>scroll.js"></script>
    <script type="text/javascript" src="<?php echo (STATIC_SCRIPT_URL); ?>jquery.lazyload.js"></script>
    <script type="text/javascript">
        $(function() {
            $("img.lazy").lazyload({
                placeholder : "/images/images2015/def_loading.jpg",
                effect : "fadeIn"
            });
        });

    </script>
</head>
<body>
<script type="text/javascript" src="<?php echo (STATIC_SCRIPT_URL); ?>jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo (STATIC_SCRIPT_URL); ?>fun_cp.js"></script>
<script type="text/javascript" src="<?php echo (STATIC_SCRIPT_URL); ?>fun_login.js"></script>
<script type="text/javascript" src="<?php echo (STATIC_SCRIPT_URL); ?>search.js"></script>
<link rel="stylesheet" href="<?php echo (STATIC_STYLE_URL); ?>header.css"/>
<script>
    function showdrop(){
        var navdrop=document.getElementById("navdrop");
        navdrop.style.cssText="height:320px;border:1px solid #f60;background:#323232 url(<?php echo (STATIC_IMAGE_URL); ?>/navdown_up.png) center 21px no-repeat;";
        var newscates=document.getElementById("newscates");
        newscates.style.cssText="height:230px;display:block;";
    }
    function hidedrop(){
        var navdrop=document.getElementById("navdrop");
        navdrop.style.cssText="height:25px;";
        var newsbt=document.getElementById("newsbt");
        newsbt.style.cssText="";

    }
    $(document).ready(function(){
        $(".reg_log").mouseover(function(){
            $("#toplogpane").show();
            $(".reg_log").addClass("bgw1");
            $(".reg_log").css('height','auto');
            $(".reg_log").css('overflow','auto');
        });
        $(".reg_log").mouseout(function(){
            $("#toplogpane").hide();
            $(".reg_log").removeClass("bgw1");
            $(".reg_log").css('height','30px');
            $(".reg_log").css('overflow','hidden');
        })


    });
    function browserRedirect() {
        var sUserAgent = navigator.userAgent.toLowerCase();
        var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
        var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
        var bIsMidp = sUserAgent.match(/midp/i) == "midp";
        var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
        var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
        var bIsAndroid = sUserAgent.match(/android/i) == "android";
        var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
        var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
        if ((bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) ){
            //window.location.href=B页面;
            window.location.href="http://m.1688wan.com"
        }else{
            //  window.location.href="http://www.1688wan.com";
        }
    }
    //browserRedirect();//暂时不用

</script>

<!--通用head 开始-->
<div class="top_out">
    <div class="top_menu">
        <div class="top_menu_in">
            <div class="top_menu_in_l">
                <ul class="navlist">
                    <li><a href="http://www.1688wan.com" target="_blank">首页</a></li>
                    <li id="newscateout">
                        <div id="navdrop" onMouseOver="showdrop()" onMouseOut="hidedrop()">
                            <div class="news_bt" id="newsbt"><a href="/webnews/1_1.html" target="_blank">资讯中心</a></div>
                            <ul id="newscates">
                                <li><a href="/webnews/1_1.html" target="_blank">手游资讯</a></li>
                                <li><a href="/webnews/2_1.html" target="_blank">手游评测</a></li>
                                <li><a href="/webnews/3_1.html" target="_blank">手游攻略</a></li>
                                <li><a href="/webnews/7_1.html" target="_blank">手机硬件</a></li>
                                <li><a href="/webnews/20_1.html" target="_blank">专访报道</a></li>
                                <li><a href="/webnews/10_1.html" target="_blank">八卦周边</a></li>
                                <li><a href="/webnews/11_1.html" target="_blank">游戏视频</a></li>
                                <li><a href="/webnews/12_1.html" target="_blank">活动推荐</a></li>
                                <li><a href="/webnews/15_1.html" target="_blank">产业新闻</a></li>
                                <li><a href="/webnews/223_1.html" target="_blank">电视游戏</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="/game/" target="_blank">找游戏</a></li>
                    <li><a href="/libao/" target="_blank">领礼包</a></li>
                    <li><a href="/xinyou/" target="_blank">玩新游</a></li>
                    <li><a href="/mall/" target="_blank">G商城</a></li>
                    <!--  <li><a href="/changshang/" target="_blank">挑品牌</a></li>-->
                    <li><a href="/bagua/all/index.html" target="_blank">送福利</a></li>
                </ul>
            </div>
            <div class="top_menu_in_c"><a href="http://www.1688wan.com" target="_blank">1688玩手游网</a></div>
            <div class="top_menu_in_r"> <!--onMouseOver="tsmshow()" onMouseOut="tsmhide()"-->
                <div class="nav_cur"><a id="tsmt" href="http://www.1688wan.com/about/sitemap.html"
                                        target="_blank">全站地图</a>
                    <!--网站地图 下拉 开始-->
                    <!--<div id="tsitemap" class="tsitemap">
                            dsfdsfsd
                          </div>-->
                    <!--网站地图下拉 结束-->
                </div>
                <div class="top_search">
                    <div class="top_search_in">
                        <input type="text" class="sinput" placeholder="搜索很简单" value="" name="keys" id="keys"
                               onkeydown="javascript:if(event.keyCode==13) mySearch()"/>
                        <input type="button" class="ssubmit" value="&nbsp;" onclick="mySearch()"/>
                    </div>
                </div>
                <div id="session_false">
                    <div class="reg_logb"><a href="/login/" target="_blank">登录</a>|<a href="/register/"
                                                                                      target="_blank">注册</a>
                    </div>
                </div>
                <div class="reg_log" id="session_true" style="display: none;"></div>
            </div>
        </div>
    </div>
</div>


<!--通用head 结束-->

<!--游戏头部 开始-->
<div class="game_top">
    <div class="game_top_logo"><a href="/game/" title="游戏中心"><img
            src="http://www.1688wan.com/images/images2015/yx_logo.png" title="1688玩游戏中心" alt="1688玩游戏中心"></a></div>
</div>
<!--游戏头部 结束-->
<div class="clear"></div>
<!--游戏导航 开始-->
<div class="game_nav">
    <div class="game_nav_inner">
        <ul>
            <li><a href="/game/" title="游戏分类">游戏分类</a></li>
            <li class="yx_cur"><a href="/game/all.html" title="游戏中心">游戏中心</a></li>
            <li><a href="/kaifu/" title="游戏中心">游戏开服</a></li>
        </ul>
    </div>
</div>
<!--游戏导航 结束-->
<div class="clear"></div>



/Index/Index/index.1678wan

<link rel="stylesheet" href="<?php echo (STATIC_STYLE_URL); ?>bottom.css"/>
<!--页脚 开始-->
<div id="footer">
    <div class="footer-sitemap-out">
        <div class="footer-sitemap-inner">
            <!--底部网站地图 开始-->
            <div class="fsi-col-list">
                <div class="bottom_ico bottom_ico1"><h3><a href="http://www.1688wan.com/webnews/1_1.html" target="_blank">资讯中心</a></h3></div>
                <ul>
                    <li> <a id="xtype1" href="http://www.1688wan.com/webnews/1_1.html" target="_blank">手游资讯</a></li>
                    <li><a id="xtype2" href="http://www.1688wan.com/webnews/2_1.html" target="_blank">手游评测</a></li>
                    <li><a id="xtype3" href="http://www.1688wan.com/webnews/3_1.html" target="_blank">手游攻略</a></li>
                    <li><a id="xtype7" href="http://www.1688wan.com/webnews/11_1.html" target="_blank">手游视频</a></li>
                    <li><a id="xtype20" href="http://www.1688wan.com/webnews/20_1.html" target="_blank">专访报道</a></li>
                    <li><a id="xtype10" href="http://www.1688wan.com/webnews/12_1.html" target="_blank">活动推荐</a></li>
                    <li><a id="xtype11" href="http://www.1688wan.com/webnews/15_1.html" target="_blank">产业新闻</a></li>
                    <li><a id="xtype15" href="http://www.1688wan.com/webnews/10_1.html" target="_blank">八卦周边</a></li>
                </ul>
            </div>
            <div class="fsi-col-list">
                <div class="bottom_ico bottom_ico2"><h3><a href="http://www.1688wan.com/game/" target="_blank">游戏中心</a></h3></div>
                <ul>
                    <li> <a id="xtype1" href="http://www.1688wan.com/game/" target="_blank"> 游戏中心</a></li>
                    <li><a id="xtype2" href="http://www.1688wan.com/xinyou/" target="_blank">新游频道</a></li>
                    <li><a id="xtype3" href="http://www.1688wan.com/kaifu/" target="_blank">开服表</a></li>
                    <li><a id="xtype7" href="http://www.1688wan.com/kaice/" target="_blank">开测表</a></li>
                    <li><a id="xtype2" href="http://www.1688wan.com/libao/" target="_blank">礼包中心</a></li>
                    <li><a id="xtype3" href="http://www.1688wan.com/hd" target="_blank">活动中心</a></li>
                </ul>
            </div>
            <div class="fsi-col-list" style="padding-left:42px;">
                <div class="bottom_ico bottom_ico3"><h3><a href="http://www.1688wan.com/xinyou/" target="_blank">手游专区</a></h3></div>
                <ul>
                    <li> <a id="xtype1" href="http://www.1688wan.com/ztkdb/" target="_blank">征途手游</a></li>
                    <li><a id="xtype20" href="http://www.1688wan.com/zjsn/" target="_blank">战舰少女</a></li>
                    <li><a id="xtype3" href="http://www.1688wan.com/qmzg/" target="_blank">全民主公</a></li>
                    <li><a id="xtype12" href="http://tlbb3d.1688wan.com/" target="_blank">天龙八部3D</a></li>
                    <li><a id="xtype2" href="http://www.1688wan.com/xfz/" target="_blank">熹妃传</a></li>
                    <li><a id="xtype7" href="http://www.1688wan.com/dzz/" target="_blank">大主宰</a></li>
                    <li><a id="xtype10" href="http://www.1688wan.com/mhxy/" target="_blank">梦幻西游</a></li>
                    <li><a id="xtype11" href="http://www.1688wan.com/qmtj/" target="_blank">全民突击</a></li>
                </ul>
            </div>
            <div class="fsi-col-list" style="margin-right:-250px; ">
                <div class="bottom_ico bottom_ico4"><h3><a href="http://www.1688wan.com/mall/" target="_blank">特色服务</a></h3></div>
                <ul>
                    <li> <a id="xtype1" href="http://www.1688wan.com/mall/" target="_blank">G商城</a></li>
                    <li><a id="xtype10" href="http://www.1688wan.com/changshang/" target="_blank">品牌厂商</a></li>
                    <li><a id="xtype10" href="http://www.1688wan.com/bagua/all/index.html" target="_blank">有图有料</a></li>
                    <li><a id="xtype7" href="http://www.1688wan.com/xyzk/" target="_blank">新游周刊</a></li>
                    <li><a id="xtype20" href="http://www.1688wan.com/bdxqs/" target="_blank">暴打星期三</a></li>


                </ul>
            </div>

            <!--底部网站地图 结束-->
        </div>
    </div>
    <div class="footer-cr-fl-out">
        <div class="footer-cr-fl-inner">
            <div class="index-aboutus"><a href="about/index.html" target="_blank" rel="nofollow">关于我们</a>|<a href="about/contact.html" target="_blank" rel="nofollow">联系我们</a>|<a href="about/declare.html" target="_blank" rel="nofollow">免责声明</a>|<a href="about/sitemap.html" target="_blank" rel="nofollow">网站地图</a>|<a href="about/tags.html" target="_blank">关键词索引</a>|<a target="_blank" class="qqlink" href="http://wpa.qq.com/msgrd?v=3&uin=861990633&site=qq&menu=yes" title="点我联系客服">玩家客服QQ：861990633</a></div>
            <div class="copyright"> &copy;<span></span>2009-2016<span></span>1688wan.com<span></span>版权所有<span></span><a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备14024251-1号</a><span></span>杭州顺游网络科技有限公司 版权所有<span></span></div>
        </div>
    </div>
</div>
<div style="display: none">
    <script src="https://s23.cnzz.com/z_stat.php?id=1252898618&web_id=1252898618" language="JavaScript"></script>
</div>

<!--页脚 结束--> 

</body>
</html>