<?php
use yii\helpers\Url;
?>
<div class="xz-wrap clearfix" id="step1">
    <div class="xuanze-main">
        <dl class="clearfix">
            <dt class="fl font16 gfff bold">请选择城市</dt>
            <dd class="fl">
                <span class="block font24 bold gfff tc city-btn">北京</span>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt class="fl font16 gfff bold">请选择面试日期</dt>
            <dd class="fl">
                <h3 class="yuifen font24 tc">
                    <span class="hover">9月</span>
                    <span>10月</span>
                </h3>
                <ul class="rili">
                    <p class="zhou">
                        <span>日</span>
                        <span>一</span>
                        <span>二</span>
                        <span>三</span>
                        <span>四</span>
                        <span>五</span>
                        <span>六</span></p>
                    <li></li>
                    <li></li>
                    <li><span>1</span></li>
                    <li><span>2</span></li>
                    <li><span>3</span></li>
                    <li><span>4</span></li>
                    <li><span>5</span></li>
                    <li><span>6</span></li>
                    <li><span>7</span></li>
                    <li><span>8</span></li>
                    <li><span>9</span></li>
                    <li><span>10</span></li>
                    <li><span>11</span></li>
                    <li><span>12</span></li>
                    <li><span>13</span></li>
                    <li><span>14</span></li>
                    <li><span>15</span></li>
                    <li><span>16</span></li>
                    <li><span>17</span></li>
                    <li><span>18</span></li>
                    <li><span>19</span></li>
                    <li><span>20</span></li>
                    <li><span>21</span></li>
                    <li><span>22</span></li>
                    <li><span class="dq cur">23</span></li>
                    <li><span class="dq">24</span></li>
                    <li><span class="dq">25</span></li>
                    <li><span>26</span></li>
                    <li><span>27</span></li>
                    <li><span>28</span></li>
                    <li><span>29</span></li>
                    <li><span>30</span></li>
                </ul>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt class="fl font16 gfff bold">请选择面试开始时间</dt>
            <dd class="fl">
                <span class="block font18 bold block tc time">9月23日</span>
                <ul class="gfff font16 tc time-list clearfix">
                    <li><span>9:00</span></li>
                    <li><span class="cur">10:00</span></li>
                    <li><span>11:00</span></li>
                    <li><span>13:00</span></li>
                    <li><span>14:00</span></li>
                    <li><span>15:00</span></li>
                    <li><span>16:00</span></li>
                    <li><span>17:00</span></li>
                </ul>
                <p class="txt font18 bold black clearfix">选择该面试时间，如果你顺利通过一面和二面，后续的面试<br/>会安排在当天下午13:00进行，请提前规划好你的时间。</p>
                <a class="block anniu" id="btn_confirm" href="#"></a>
            </dd>
        </dl>
    </div>
</div>

<div class="xz-wrap clearfix" id="step2" style="display:none">
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
            <a class="fl back-btn" id="btn_reconfirm" href="#"></a>
            <a class="fr qr-close-btn" id="btn_commit" href="#"></a>
        </p>
    </div>
</div>


<script type="text/javascript">
$(document).ready(function(){
    alert('hello');
});
</script>
