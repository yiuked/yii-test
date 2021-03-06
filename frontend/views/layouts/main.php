<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
AppAsset::register($this);
 $siteconfig=\common\models\System::findOne(['id'=>1]);
 
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
	
	<meta name="apple-mobile-web-app-capable" content="yes"> 
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="author" content=" UI:lirong941122@qq.com   Bront-end: offert@qq.com  Back-end:ncplum@qq.com">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<?php    $this->beginBody() ?>


</head>
<body>

		<div class="header ">
			<div class="container ">
				<div class="header-logo">
					<a href="<?= Url::to(['site/index']);?>"><img src="/images/logo.png"></a>
				</div>
				<div class="header-info">
					<div class="text-right">
						<a href="<?= Url::to(['site/contact']);?>">招商代理</a>
						<span>|</span>
						<a href="<?= Url::to(['site/contact']);?>">在线留言</a>
					</div>
					<i class="iconfont">&#xe600;</i>
					<h4>15021627588</h4>
                                         <!--
                                         	<?=$siteconfig->tel ?>
                                         -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="navbar  navbar-default  top1" style="background: #345280; border-radius: 0; border: none;">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="more">更多...</span>            
		          </button>
				</div>
				<div class="navbar-collapse collapse" role="navigation">

					<?php

					$menuItems = [
						['label' => Yii::t('app', '首页'), 'url' => ['/site/index']],
						['label' => Yii::t('app', '服务业务'), 'url' => ['/site/service']],
						['label' => Yii::t('app', '合作保障'), 'url' => ['/site/teamwork']],
						['label' => Yii::t('app', '联系我们'), 'url' => ['/site/contact']],
						['label' => Yii::t('app', '品牌街'), 'url' => ['/site/brand']],
					];
					echo Nav::widget([
						'options' => ['class' => 'navbar-nav '],
						'items' => $menuItems,
						//  'items' => $rightMenuItems,
					]);		?>
<!--					<ul class="nav navbar-nav">
						<li class="active"><?= Html::a('首页', ['site/index']) ?> </li>
						<li><?= Html::a('服务业务', ['site/service']) ?> </li>
						<li><?= Html::a('合作保障', ['site/teamwork']) ?> </li>
						<li><?= Html::a('联系我们', ['site/contact']) ?> </li>
						<li><?= Html::a('品牌街', ['site/brand']) ?> </li>

					 

 					</ul>    -->
				</div>
			</div>
		</div>
		<!--top end-->








        <?= Alert::widget() ?>
        <?= $content ?>


		<!--partner end-->
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-5  col-sm-offset-1 col-xs-offset-1 ">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-4">
								<h3>公司简介</h3>
								<ul>
									<li>
										<a href="/">业务概况</a>
									</li>
									<li>
										<a href="/">发展历程</a>
									</li>
									<li>
										<a href="/">企业荣誉</a>
									</li>
									<li>
										<a href="/">品牌文化</a>
									</li>
									<li>
										<a href="/">品牌战略</a>
									</li>
								</ul>
							</div>
							<div class="col-md-4  col-sm-4 col-xs-4">
								<h3>服务业务</h3>
								<ul>
									<li>
										<a href="/">招商外包</a>
									</li>
									<li>
										<a href="/">产品孵化</a>
									</li>
									<li>
										<a href="/">项目推广</a>
									</li>
									<li>
										<a href="/">OTO方案</a>
									</li>
									<li>
										<a href="/">合作客户</a>
									</li>
								</ul>
							</div>
							<div class="col-md-4  col-sm-4 col-xs-4">
								<h3>招商加盟</h3>
								<ul>
									<li>
										<a href="/">招商项目</a>
									</li>
									<li>
										<a href="/">加入我们</a>
									</li>
									<li>
										<a href="/">客户案例</a>
									</li>
									<li>
										<a href="/">客户评价</a>
									</li>
									<li>
										<a href="/">合作保障</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-5  col-sm-offset-1  col-xs-offset-1">
						<div class="row details">
							<div class="col-lg-8 col-sm-8 col-xs-12  ">
								<h3>联系我们</h3>
								<div class="phone">
									<p>咨询热线：  15021627588</p>
								</div>
								<div class="adress">
									<p>联系地址：上海市普陀区中江路118弄22号</p>
								</div>
							</div>
							<div class="col-lg-4  col-sm-2  col-xs-12 wx ">
								<img src="/images/ewm.png" class="img-responsive center-block">
								<p class="text-center">官方微信</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer-bottom">
					<div class="col-sm-11 col-sm-offset-1 col-xs-offset-1">Copyright&copy;2016-2023 上海品途品牌管理有限公司   
					<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1259421868'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1259421868%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
					</div>
				</div>
			</div>
		</div>





	<?php     $this->endBody() ?>
</body>
</html>
<?php    $this->endPage() ?>
