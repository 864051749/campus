<?php
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets_b\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="<?=Url::base()?>/css/css.css" rel="stylesheet" type="text/css" />
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
<div class="xz-head-top">
    <div class="w1000 clearfix">
        <p class="fr"><a href="http://hr.360.cn" target="_blank">社会校招</a>　|　<a href="http://weibo.com/360xiaoyuan">官方微博</a>　|　<a href="#">欢迎来到360校园招聘</a></p>
    </div>
</div>
<div class="xz-nav">
    <div class="w1000 clearfix">
        <h2 class="fl logo"><img src="<?=Url::base()?>/images/xz-logo.png" /></h2>
        <ul class="fr font18">
            <li><a href="http://campus.360.cn/2015/index.html">首页</a></li>
            <li><a class="cur" href="http://campus.360.cn/2015/grad.html">校园招聘</a></li>
            <li><a href="http://openlab.360.cn">360开放实验室</a></li>
            <li><a href="http://campus.360.cn/2015/front.html">校园活动</a></li>
            <li><a href="http://campus.360.cn/2015/summary.html">关于360</a></li>
        </ul>
    </div>
</div>
<p class="w1000 sub-menu tc">
    <a href="http://campus.360.cn/2015/grad.html">应届生招聘</a>　|　<a class="dq" href="http://campus.360.cn/2015/intern.html">实习生招聘</a>　|　<a href="http://campus.360.cn/2015/procs.html">招聘流程</a>　|　<a href="http://campus.360.cn/2015/faq.html">FAQ</a></p>
<p class="blank10"></p>
<?=$content?>

<p class="h45"></p>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
