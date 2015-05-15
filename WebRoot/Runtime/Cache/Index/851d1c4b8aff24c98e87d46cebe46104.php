<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo C('GAME_NAME');?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="keywords" content="<?php echo C('WEB_KEYWORD');?>" />
    <meta name="description" content="<?php echo C('WEB_DESCRIPTION');?>" />
    <link rel="stylesheet" href="<?php echo (STATIC_STYLE_URL); ?>base_game.css"/>
    <link rel="stylesheet" href="<?php echo (STATIC_STYLE_URL); ?>alert.css"/>
    <script src="<?php echo U('Min/index?g=public_js');?>"></script>
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
<script src="<?php echo U('Min/index?g=index_js');?>"></script>
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
                    <li><a href="/" target="_blank">游戏首页</a></li>

                    <li><a href="<?php echo U('User/index');?>" target="_blank">用户中心</a></li>
                    <li><a href="<?php echo C('CHARGE_URL');?>" target="_blank">充值中心</a></li>
                </ul>
            </div>
            <div class="top_menu_in_c"><a href="http://www.1688wan.com" target="_blank">1688玩手游网</a></div>
            <div class="top_menu_in_r"> <!--onMouseOver="tsmshow()" onMouseOut="tsmhide()"-->


                <!--             <div class="nav_cur"><a id="tsmt" href="http://www.1688wan.com/about/sitemap.html"
                                                     target="_blank">全站地图</a>

                             </div>
                             <div class="top_search">
                                 <div class="top_search_in">
                                     <input type="text" class="sinput" placeholder="搜索很简单" value="" name="keys" id="keys"
                                            onkeydown="javascript:if(event.keyCode==13) mySearch()"/>
                                     <input type="button" class="ssubmit" value="&nbsp;" onclick="mySearch()"/>
                                 </div>
                             </div>-->


                <?php if(session('cw_user') == null): ?><div class="reg_log" id="session_true" style="height: 30px; overflow: hidden;">
                       <!-- <div class="top_user_info">
                            <div class="tui_avatar"><a href="/memberCenter/"><img
                                    src="http://www.1688wan.com/imgs/default_head.png"></a></div>
                            <div class="tui_username" style="overflow:hidden; white-space:nowrap; overflow:ellipsis"><a
                                    href="/memberCenter/">lamba</a></div>
                        </div>
                        <div class="clear"></div>
                        <div id="toplogpane" class="topdownpane">
                            <ul>
                                <li>账号：<strong class="tlp_green">263402128</strong></li>
                                <li>G币：<span class="tlp_orange">30</span></li>
                                <li>等级：<span class="tlp_orange">菜鸟</span></li>
                            </ul>
                            <div class="clear"></div>
                        </div>-->
                    </div>
                    <?php else: ?>
                    <div id="session_false">
                        <div class="reg_logb"><a href="/login/" target="_blank">登录</a>|<a href="/register/"
                                                                                          target="_blank">注册</a>
                        </div>
                    </div><?php endif; ?>


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



<!--content 开始-->
<!--面包屑导航 开始-->
<div class="game_linkpath"><span>您的位置：</span>&nbsp;首页</div>
<!--面包屑导航 结束-->
<div class="game_content_out">
    <div class="game-content-left">
        <div class="game-content-left-inner" style="position: static;">
            <div class="game-big-qrcode" id="show-big-qrcode">
                <div class="game-big-qrcode-cover"></div>
                <!--下载游戏二维码-->
                <div class="show-game-big-qrcode" id="big-qrcode-show">二维码</div>
            </div>
            <div class="clear"></div>
            <h3 class="game-content-left-title"><?php echo ($game_info_json["game_name"]); ?></h3>

            <div class="game-content-left-thumb"><img src="http://i1.1688wan.com/userfiles/applogo/_1412762741713.jpg">
            </div>

            <div class="game-content-left-go2zq"><a href="javascript:CBox($('#down_qr'),'二维码扫描')">扫描二维码</a></div>


            <div class="game-list-title-1 mt20"></div>

            <div id="down_qr" style="display: none">
                <div class="qr_code_img">
                    <div style="float: left;">
                        <img src="<?php echo (STATIC_IMAGE_URL); ?>QrCode/apk.png"/>
                        <a class="qr_tip">安卓下载</a>
                    </div>
                    <div style="float: right;">
                        <img src="<?php echo (STATIC_IMAGE_URL); ?>QrCode/ios.png"/>
                        <a class="qr_tip qr_pg">IOS下载</a>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <ul class="game-content-left-down">
                <?php if($game_info_json["game_down_az"] != null): ?><li class="game-content-az">
                        <button>Android下载
                        </button>
                    </li><?php endif; ?>
                <?php if($game_info_json["game_down_pg"] != null): ?><li class="game-content-pg">
                        <button onclick="downloads('1412762805','http://news.7k7k.com/chaoxiyou/','')">IOS越狱下载</button>
                    </li><?php endif; ?>
            </ul>


            <div class="game-content-gameinfo">
                <ul>
                    <li>收费模式：<?php echo ($game_info_json["charge_model"]); ?></li>
                    <li>软件语言：<?php echo ($game_info_json["game_lang"]); ?></li>
                    <li>类型：<?php echo ($game_info_json["game_type"]); ?></li>
                    <li>题材：<?php echo ($game_info_json["game_tag"]); ?></li>
                    <li>更新：<?php echo ($game_info_json["game_update_time"]); ?></li>
                </ul>
            </div>
            <div class="game-list-title-1 mt20">
                <div class="game-list-title-in-1">
                    <h3>常玩评分</h3>
                </div>
            </div>


            <div class="game-content-left-pingce-rank"><span><?php echo ($game_info_json["game_score"]); ?></span></div>
            <div class="game-content-left-site">


                <a href="javascript:void(0)">常玩微信公众号</a>


            </div>

        </div>
    </div>
    <div class="game-content-right">
        <div class="game-content-right-inner">
            <div class="game-content-right-bar">
                <ul>
                    <li class="current"><a href="/">游戏版本</a></li>
                    <li><a href="/#game-thumbs">游戏截图</a></li>

                    <li><a href="/#charge_sale">充值优惠</a></li>


                </ul>
            </div>
            <!--右边 内容 开始-->
            <div class="game-content-right-list">
                <div class="game-content-com-title">
                    <h3 class="game-content-com-title-yxjj"><span></span>游戏版本</h3></div>
                <div class="clear"></div>
                <div class="game-content-right-introduce">
                    <?php echo ($game_version_html); ?>
                </div>
                <div class="clear"></div>

                <div id="charge_sale" class="game-content-com-title"><h3 class="game-content-com-title-rmtj">
                    <span></span>充值优惠</h3></div>
                <div class="clear"></div>
                <div class="game-slide-gamelist">
                    <?php echo ($game_charge_info_html); ?>

                </div>

                <div class="game-content-com-title" id="game-thumbs"><h3 class="game-content-com-title-yxjt">
                    <span></span>游戏截图
                </h3></div>
                <div class="clear"></div>
                <div class="inkPhoBox">
                    <!--游戏截图 开始-->
                    <div class="mod18">
                        <span id="prevTop" class="btn prev"></span>
                        <span id="nextTop" class="btn next"></span>

                        <div class="bigImgBox">
                            <a id="prev" class="btn prev"><</a>

                            <div id="picBox" class="picBox">
                                <ul class="cf">

                                    <?php if(is_array($game_pic_json)): foreach($game_pic_json as $key=>$l_vo): if($l_vo["game_pic_path"] != null): ?><li><img src="<?php echo ($l_vo["game_pic_path"]); ?>"></li><?php endif; endforeach; endif; ?>

                                </ul>
                            </div>
                            <a id="next" class="btn next">></a>
                        </div>
                        <div class="smImgBox">
                            <div id="listBox" class="listBox">
                                <div class="thumblist">
                                    <?php if(is_array($game_pic_json)): foreach($game_pic_json as $key=>$s_vo): if($s_vo["game_pic_path"] != null): ?><span><img
                                                src="<?php echo ($s_vo["game_pic_path"]); ?>"></span><?php endif; endforeach; endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <!--游戏截图 结束-->
                </div>


            </div>
            <!--右边 内容 结束-->
            <div class="clear"></div>

        </div>

    </div>
    <div class="clear"></div>
</div>
<!--content 结束-->

<div class="clear"></div>



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