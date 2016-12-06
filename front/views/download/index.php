<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="/css/style.css" rel="stylesheet">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d90f1bc0b59424fc2fa6128b2acfd6d2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <meta name="keywords" content="悦动力,优悦佳品,饮料" >
    <meta name="description" content="悦动力,优悦佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <meta name="keywords" content="悦动力,优悦佳品,饮料" >
    <meta name="description" content="悦动力,优悦佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <link rel="shortcut icon" href="/images/youyue.ico">
    <title>下载App-悦动力-中国饮料驰名商标</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <script src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/mian.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?d90f1bc0b59424fc2fa6128b2acfd6d2";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
    <meta name="keywords" content="悦动力,悦动力网,优悦佳品,饮料" >
    <meta name="description" content="悦动力网,悦动力,优悦佳品,饮料">
    <link rel="shortcut icon" href="/images/youyue.ico">
</head>

<body>
<nav class="nav-header-bot">
    <div class="nav-width-bot">
        <div class="logo"><a href="<?=Url::toRoute('/')?>"><img src="/images/logo.png" /></a></div>
        <div class="nav-link">
            <ul>
                <li><a href="<?=Url::toRoute('/index/index')?>">首页</a></li>
                <li><a href="<?=Url::toRoute('/company/index')?>">公司介绍</a></li>
                <li><a href="<?=Url::toRoute('/information/index')?>">最新资讯</a></li>
                <li><a href="<?=Url::toRoute('/job/index')?>" target="_blank">公司招聘</a></li>
                <li><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></li>
                <li class="active"><a href="<?=Url::toRoute('/download/index')?>">悦动力商城</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="download-al">
    <div class="download">
        <div class="cellphone"><img src="http://image.meicai.cn/meicaicn/wp-content/images/cellphone.png"></div>
        <div class="meicai-app">
            <dl class="icon-name">
                <dt><img src="http://image.meicai.cn/meicaicn/wp-content/images/meicai-icon.png"></dt>
                <dd>悦动力App下载</dd>
            </dl>
            <div class="code-list">
                <dl class="bor-rit">
                    <dt><img src="http://image.meicai.cn/meicaicn/wp-content/images/ios-code.png"></dt>
                    <dd>使用更方便<br/>下单更快捷</dd>
                </dl>
            </div>
        </div>
    </div>
</div>

<div class="footer-pull">
    <div class="footer">
        <p><span>关于</span><br/><a href="<?=Url::toRoute('/company/index')?>">关于悦动力</a><br/><a  href="<?=Url::toRoute('/information/index')?>">公司资讯</a></p>
        <p><span>联系</span><br/><a href="<?=Url::toRoute('/job/index')?>" target="_blank">加入悦动力</a><br/><a href="<?=Url::toRoute('/cooperation/index')?>">合作共赢</a></p>
        <p><span>帮助</span><br/><a href="<?=Url::toRoute('/newer/index')?>">新手指南</a><br/><a href="<?=Url::toRoute('/newer/index')?>">常见问题</a></p>
        <p><span>版权信息</span><br/>copyright © 2014-2016 北京云杉世界信息技术有限公司 4006-135-135<br/>北京市朝阳区安贞路安贞西里5区1号楼新华金融大厦3-4层 京ICP备14045665号</p>
        <p class="none"><a href="https://credit.cecdc.com/CX20151012011563030185.html" target="_blank"><img src="/images/cert.png"></a></p>
    </div>
</div>

<script type="text/javascript">
    if($(window).height()>780){
        $('.footer-pull').css({position: 'fixed',bottom:0});
    }
</script>
</body>
</html>