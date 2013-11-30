<?php 
ob_start('ob_gzhandler');
header('Content-type: text/css');
header('Last-Modified: '.gmdate("r",filemtime(__FILE__)));
header ('Expires: ' . gmdate ("r", time() + 15*86400));
header('Cache-control: public');
header('Vary: Accept-Encoding');
?>
*{margin:0;padding:0;border:0}
*,*:link,*:visited,*:hover,*:active,*:focus {-webkit-transition:width 0.3s,height 0.3s,color .3s linear,background-color .3s linear,border-color .25s linear;-moz-transition:width 0.3s,height 0.3s,color .3s linear,background-color .3s linear,border-color .25s linear;transition:width 0.3s,height 0.3s,color .3s linear,background-color .3s linear,border-color .25s linear;}
html{background:url('images/bg.jpg') scroll center center repeat-y transparent\9;height:100%}
body{font-size:14px;font-family:"Microsoft YaHei",'微软雅黑','宋体',Verdana,Lucida,Arial,Helvetica,sans-serif;height:100%}
img{border:none}
a{text-decoration:none;color:#8192D0}
a:hover{text-decoration:none;color:#d680A0}
ul,li,ol{list-style:none}
/*导航*/
#navi{position:fixed;left:0;top:100px;opacity:0.8;z-index:20;filter:alpha(opacity=80);zoom:1;width:10%;animation:navi 10s infinite;-moz-animation:navi 10s infinite;-webkit-animation:navi 10s infinite}
.outer-book-left{background:#1a1a1a;width:50%;border-radius:0 20px 20px 0;-moz-border-radius:0 20px 20px 0;-webkit-border-radius:0 20px 20px 0;padding-left:15px;box-shadow:0 0 5px #1a1a1a;-moz-box-shadow:0 0 5px #1a1a1a;-webkit-box-shadow:0 0 5px #1a1a1a}
.outer-book-right{background:#1a1a1a;width:100%;border-radius:20px 0 0 20px;-moz-border-radius:20px 0 0 20px;-webkit-border-radius:20px 0 0 20px;padding:15px 15px 15px 0;position:relative;left:100%;box-shadow:0 0 5px #1a1a1a;-moz-box-shadow:0 0 5px #1a1a1a;-webkit-box-shadow:0 0 5px #1a1a1a}
.inner-book-right{background:#2c2c2c;width:100%;border-right:2px dashed #606060;border-top:2px dashed #606060;border-bottom:2px dashed #606060;border-radius:20px 0 0 20px;-moz-border-radius:20px 0 0 20px;-webkit-border-radius:20px 0 0 20px;position:relative}
.inner-book-left{background:#282828;width:100%;border-left:2px dashed #606060;border-top:2px dashed #606060;border-bottom:2px dashed #606060;border-radius:0 20px 20px 0;-moz-border-radius:0 20px 20px 0;-webkit-border-radius:0 20px 20px 0;position:relative;left:-100%}
.navi{margin:10px 0;width:200%;position:relative;padding:0;list-style:none}
.navi li{height:20px;font-size:16px;padding:5px 0;margin:0;text-align:center;position:relative;z-index:3}
.navi .navbg{background:#0a0a0a;position:absolute;left:50%;height:20px;width:90%;margin-left:-45%;border-radius:10px 10px 10px 10px;-moz-border-radius:10px 10px 10px 10px;-webkit-border-radius:10px 10px 10px 10px;box-shadow:2px 2px 2px #101010;-moz-box-shadow:2px 2px 2px #101010;-webkit-box-shadow:2px 2px 2px #101010;z-index:1}
.navi a{color:#fff;text-decoration:none}
.navi a:hover{color:#fea}
/*IE导航*/
.navi-ie{background:#2c2c2c;filter:alpha(opacity=80);overflow:hidden;position:relative;height:30px;width:100%}
.navi-ie li{float:left;height:20px;padding:5px;font-size:16px;position:relative;z-index:3;line-height:20px}
.navi-ie .navbg{background:#0a0a0a;height:20px;width:0;position:absolute;left:0;z-index:1}
.navi-ie a{color:#fff;text-decoration:none}
.navi-ie a:hover{color:#fea}
/*主区域*/
#wrapper{width:90%;margin:0 0 0 10%;position:relative;z-index:10}
/*头部*/
#header {margin:0 auto;border-bottom:5px dotted #bbb;padding-top:50px}
#header h1 {font-size: 30px;text-shadow:2px 2px 2px #1f1f1f;font-weight:normal}
#header h1 a{color: #1a1a1a;height:80px;background:url('images/logo.png') top left no-repeat transparent;padding:30px 0 20px 105px}
#header h1 a:hover {color: #1a1a1a;text-shadow:3px 3px 3px #4a4a4a}
#header .blogdesc{cursor:pointer;margin:0 auto;padding:5px 10px;border-radius:15px;-moz-border-radius:15px;-webkit-border-radius:15px;width:500px;height:15px;overflow:hidden;color:#fff;font-weight:bold;background:rgba(0,0,0,0.6);-webkit-box-reflect: below 5px -webkit-gradient(linear,0 0,0 bottom, from(rgba(0,0,0,0)), to(rgba(0,0,0,1)));-moz-box-reflect: below 5px -moz-gradient(linear,0 0,0 bottom, from(rgba(0,0,0,0)), to(rgba(0,0,0,1)))}
#header .blogdesc:hover{height:187px}
/*面包屑*/
#bread {margin: 10px auto}
#bread a,#bread span{border-radius:5px;box-shadow:0 0 5px #fefefe;background:#fefefe;color:#0a0a0a;padding:5px;opacity:0.7}
#bread a:hover{font-weight:bold}
/*主区域*/
#container{margin:0 auto}
/*正文*/
#content {width: 75%;float:right}
.post{background:#eff;background:rgba(239,255,255,0.6);box-shadow:0 0 5px #eff;-moz-box-shadow:0 0 5px #eff;-webkit-box-shadow:0 0 5px #eff;margin:0 0 20px;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;padding:10px;overflow:hidden}
.post h2{font-size:22px;font-weight:normal;text-shadow:0 0 2px #efefef;padding:5px 10px;background:#1a1a1a;color:#efefef;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
.post h2 a{color:#efefef}
.post h2 a:hover{color:#fea;text-shadow:0 0 2px #fea}
.post .post-meta{text-align:right}
.post .description,.log{border-bottom:1px dashed #666;padding:5px 0;overflow:hidden;width:100%;overflow:hidden}
.post .description img{max-width:100%;_width:expression(this.width>this.parentNode.parentNode.width?this.parentNode.parentNode.width:this.width)}
.post .log-tags{margin:5px 0}
.post .att{border-left:4px solid #666;padding-left:5px}
.post .more{float:right;padding:5px 10px;background:#1a1a1a;opacity:0.7;filter:alpha(opacity=70)}
.post .more a{color:#efefef}
.post .more a:hover{text-shadow:0 0 2px #efefef}
.description p,.log p{margin-bottom:5px;font-size:16px}
.neighborlog{border-left:4px solid #666;border-right:4px solid #666;overflow:hidden}
.prevlog{float:left;padding-left:5px}
.nextlog{float:right;padding-right:5px}
.related_post{width:48%;float:left;margin-right:2%;overflow:hidden}
.related_post h3{font-size:16px;padding:5px 0 5px 5px}
.related_post a{padding-left:10px; white-space:nowrap}
/*引用*/
#tb{margin:5px 0}
.tb-count{float:right;padding-right:5px;border:1px solid #666;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;cursor:pointer}
.tb-time{float:right;font-size:12px;color:#bbb}
#trackbacklist{display:none}
/*评论*/
.comment,.trackback,.tw li{width:98%;margin:10px auto;border:1px solid #bbb;overflow:hidden;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
.avatar{float:left;margin:5px}
.avatar img{border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
.comment-meta{margin-top:5px}
.comment-time{font-size:12px;color:#bbb}
.comment-info{overflow:hidden;padding-right:5px}
.comment-reply{float:right;margin-top:5px}
.alt .children a,.alt .alt .children a{color:#8192D0}
.alt .children a:hover,.alt .alt .children a:hover{color:#d680A0}
.alt a,.alt .alt a,.alt .alt .alt a{color:#d680A0}
.alt a:hover,.alt .alt a:hover,.alt .alt .alt a:hover{color:#8192D0}
.children .comment{margin:5px auto;clear:both}
.comment-post{overflow:hidden;width:95%;margin: 0 auto}
.comment-post form{margin-top:10px}
.cancel-reply{float:right}
.cmt-form-l{width:61%;float:left}
.smiles img{cursor:pointer}
.cmt-form-l textarea,.cmt-form-r input,.tw-form textarea,.tw-form input{width:95%;margin:0 2%;border:1px solid #bbb;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
.cmt-form-l textarea:hover,.cmt-form-r input:hover,.cmt-form-l textarea:focus,.cmt-form-r input:focus{border:1px solid #8192d0;box-shadow:0 0 3px #8192d0;-moz-box-shadow:0 0 3px #8192d0;-webkit-box-shadow:0 0 3px #8192d0}
.cmt-form-r{width:33%;float:right}
.cmt-form-r p{margin-bottom:5px}
.cmt-form-r input{height:20px}
.cmt-form-r #message{width:80%;display:none;margin:0 auto;color:#ee0000}
#cmt-loading {opacity:0.6;filter:alpha(opacity=60);background:#1a1a1a;display:none;position:absolute;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
/*分页*/
#pagenavi{margin:10px;padding:5px;text-align:center}
#pagenavi span{margin:0 4px;padding:2px 7px;background:#666;color:#f0f0f0;border:1px solid #666;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px;font-weight:bold}
#pagenavi a{margin:0 4px;padding:2px 7px;border:1px solid #666;border-radius:3px;-moz-border-radius:3px;-webkit-border-radius:3px}
#pagenavi a:hover{background:#666;color:#f0f0f0}
#pagenavi em{display:none}
/*侧边栏*/
#sidebar {float:left;width:24%}
#sidebar .widget{color:#efefef;background:#1a1a1a;padding:15px 0;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;box-shadow:0 0 5px #1a1a1a;-moz-box-shadow:0 0 5px #1a1a1a;-webkit-box-shadow:0 0 5px #1a1a1a;margin-bottom:10px;opacity:0.8;filter:alpha(opacity=80);zoom:1;overflow:hidden;width:100%}
#sidebar h3{background:#0a0a0a;padding:5px 15px;font-size:18px;margin:0 15px;color:#fea;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px}
.widget a{color:#efefef}
.widget a:hover{background:#0a0a0a;text-shadow:0 0 10px #f0f0f0;box-shadow:0 0 10px #efefef;-moz-box-shadow:0 0 10px #efefef;-webkit-box-shadow:0 0 10px #efefef}
.widget ul{margin:10px 15px;overflow:hidden}
.widget li{margin:5px;border-bottom:1px dotted #efefef;word-wrap:break-word}
#blogger{text-align:center;margin:10px}
#blogger img{max-width:100%}
#side-tags{margin:10px 15px}
#side-tags a:hover{text-decoration:none;color:#8192D0}
#side-tags .hide-tags{display:none}
#side-tags #show-tags{cursor:pointer}
#side-tags #show-tags:hover{color:#fea}
#side-search{margin:10px 15px;width:90%;box-shadow:0 0 5px #efefef;-moz-box-shadow:0 0 5px #efefef;-webkit-box-shadow:0 0 5px #efefef;height:30px}
.search-input{width:83%;height:20px;color:#1a1a1a;float:left;line-height:30px;padding:5px 0}
.search-submit{width:15%;background:#1a1a1a;color:#efefef;height:30px;font-size:22px;float:right;font-family:"黑体"}
.search-submit:hover{text-shadow:0 0 10px #f0f0f0}
#side-sort span{background:#ffca3f;margin-left:10px;padding:0 3px;border-radius:3px;-moz-border-radius:2px;-webkit-border-radius:2px}
#side-sort span a{color:#fff;font-family:"黑体";font-weight:bold}
#side-sort span a:hover{background:none}
#side-comment li{clear:both;line-height:22px;height:44px;overflow:hidden}
#side-comment .side-avatar{float:left;margin:5px;border-radius:5px;border:1px solid #bbb}
#side-tw .tw-more{font-size:12px;text-align:right;color:#585858}
#side-link{overflow:hidden}
#side-link li{width:45%;float:left}
#side-link li.even{float:right;text-align:right}
/*日历*/
#calendar{margin:10px;text-align:center}
.calendartop{font-size:14px;margin:auto}
.calendartop td{padding:3px 5px}
.calendar{margin:auto;width:90%}
.calendar td{text-align:center;padding:1% 2%; line-height:1.2}
.day{font-weight:bold;font-size:16px}
.day2{font-weight:bold}
.sun{font-weight:bold}
.week,.sun{background:#bbb}
/*碎语*/
.tw-meta{margin-top:5px}
.tw-time,.tw li .time{font-size:12px;color:#bbb}
.tw-info{overflow:hidden;padding-right:5px}
.tw-reply{float:right;margin-top:5px}
.tw-form{width:90%;margin:10px auto;display:none}
.tw-form input{width:80px}
.tw-input{width:80%;margin:5px auto;text-align:center}
.tw-msg{text-align:center}
.tw li{margin:0 auto;padding:0 5px;clear:both}
.tw li .name{font-weight:bold}
.tw li em{float:right}
/*底部*/
#footer{padding-bottom:3%;margin:10px auto 0;border-top:5px dotted #bbb;text-align:center;clear:both}
/*载入过场*/
#loading{display:none;height:100%;width:100%;opacity:0.8;filter:alpha(opacity=80);background:#1a1a1a;position:fixed;z-index:999;padding-top:200px;text-align:center;color:#efefef;font-size:16px;zoom:1;_top:expression(document.documentElement.scrollTop);_position:absolute}
/*彩虹背景*/
#rainbow{height:100%;width:100%;filter:alpha(opacity=50);position:fixed;top:0;z-index:1;background-image: -moz-linear-gradient(left, #fdd3df, #facc9f 16%,#fff5b0 32%,#e6f3bd 48%,#9ff9a6 64%,#aee2ed 80%,#d8c8e3 96%,#fdd3df 100%);background-image: -o-linear-gradient(left, #fdd3df, #facc9f 16%,#fff5b0 32%,#e6f3bd 48%,#9ff9a6 64%,#aee2ed 80%,#d8c8e3 96%,#fdd3df 100%);background-image: -webkit-gradient(linear,0 0,right 0, from(#fdd3df), color-stop(16%,#facc9f),color-stop(32%,#fff5b0),color-stop(48%,#e6f3bd),color-stop(64%,#9ff9a6),color-stop(80%,#aee2ed),color-stop(96%,#d8c8e3),to(#fdd3df));background-image: -webkit-linear-gradient(left, #fdd3df, #facc9f 16%,#fff5b0 32%,#e6f3bd 48%,#9ff9a6 64%,#aee2ed 80%,#d8c8e3 96%,#fdd3df 100%);background-image: linear-gradient(left, #fdd3df, #facc9f 16%,#fff5b0 32%,#e6f3bd 48%,#9ff9a6 64%,#aee2ed 80%,#d8c8e3 96%,#fdd3df 100%);background-repeat:repeat-x}
#freeze {position: fixed;left: 100px;top: 100px;width: 79px;height: 79px;background: url('/images/freeze_0.gif') -720px 0 no-repeat;cursor: pointer;z-index: 9999}