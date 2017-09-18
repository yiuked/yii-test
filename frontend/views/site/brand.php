<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
//use dmstr\widgets\Alert;
use yii\bootstrap\Alert;
//use  common\widgets\Alert;

/* @var $this yii\web\View */
/* @var $model common\models\Page */

 $this->title ='品牌街  －上海品途品牌管理有限公司';
//$this->title = $model->title;
//$this->registerMetaTag(['name' => 'keywords', 'content' =>$model->keywords ]);
//$this->registerMetaTag(['name' => 'description', 'content' =>$model->description ]);
//$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>
		<!--banner star-->
		<div id="myCarousel" class="carousel slide " data-ride="carousel">
			<!-- 轮播（Carousel）项目 -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="/images/ban5.jpg" alt="First slide">
				</div>
			</div>
			<!-- 轮播（Carousel）导航 -->
		</div>
		<!--banner end-->
		<div class="brand bounceInUp animated">
				<h1>合作商家</h1>			
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<img src="/images/p1.jpg" class="img-responsive">
						<img src="/images/p2.jpg" class="img-responsive">
						<img src="/images/p3.jpg" class="img-responsive">
					</div>
					<div class="col-lg-12 more1">
						<h2>欢迎更多商家加盟</h2>
						<a href="#"><img src="/images/more.png"></a>
					</div>
				</div>
			</div>
		</div>
		<!--brand end-->
		<div class="mail">
			<!-- container -->
			<div class="container">
				<div class="col-md-10 col-lg-offset-1 contact-form  bounceIn animated">
					<h1>留言申请合作</h1>

					<?= $this->render('@app/views/book/_formbrand', [
						'model' => $model,
					]) ?>
				
				<!--
					<form >

						<input type="text"  name=""  placeholder="请输入姓名" required>
						<input type="text" name="" placeholder="请输入手机号" required>
						<input type="text" name=""   placeholder="请输入公司名字" required>
						<textarea name="" placeholder="产品/项目说明"></textarea>
						<input type="submit" value="提交申请">
					</form>
					-->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	 </html>