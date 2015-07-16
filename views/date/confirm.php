<?php
use yii\helpers\Url;
?>
<div class="xz-wrap clearfix">
    <div class="qr-main">
        <div class="con clearfix">
            <h3 class="font20 black">您的选择：</h3>
            <dl>
                <dd class="clearfix">
                    <h4 class="fl font20 gfff">面试城市：</h4><span>北京</span>
                </dd>
                <dd class="clearfix">
                    <h4 class="fl font20 gfff">面试日期：</h4><span>9月23日</span>
                </dd>
                <dd class="clearfix">
                    <h4 class="fl font20 gfff">面试时间：</h4><span>10:00</span>
                </dd>
            </dl>
        </div>
        <p class="bot-anniu clearfix">
            <a class="fl back-btn" href="<?=Url::to(['date/setting'])?>"></a>
            <a class="fr qr-close-btn" href="<?=Url::toRoute(['date/success'])?>"></a>
        </p>
    </div>
</div>