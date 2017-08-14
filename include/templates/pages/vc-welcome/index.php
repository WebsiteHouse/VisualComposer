<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
preg_match( '/^(\d+)(\.\d+)?/', WPB_VC_VERSION, $matches );
?>
<div class="wrap vc-page-welcome about-wrap">
	<h1>به visual composer خوش آمدید</h1>

	<div class="about-text">
		به راحتی و به هر صورتی که دوست دارید با امکانات جذاب و مختلف، صفحات وب سایت تان را طراحی کنید
	</div>
	<div class="wp-badge vc-page-logo">
		نسخه اختصاصی<br>وب سایت هاوس
	</div>
	<p class="vc-page-actions">
		<?php if ( vc_user_access()
				->wpAny( 'manage_options' )
				->part( 'settings' )
				->can( 'vc-general-tab' )
				->get() && ( ! is_multisite() || ! is_main_site() )
		) : ?><?php endif; ?>
	</p>
<div class="vc_welcome-tab changelog">
	<div class="vc_feature-section-teaser">
		<div>
			<img class="vc-featured-img pull-right" src="<?php echo vc_asset_url( 'vc/vc-welcome/screenshot.png' ); ?>"/>
			<center><img style="width: 20%;padding-top: 20px;" src="http://websitehouse.ir/wp-content/uploads/2017/07/logo-slogan.png" alt="وب سایت هاوس"></center>
			<h2 style="text-align: justify;margin-top:10px;"">این نسخه با توجه به نیازهای مشتریان <a href="http://websitehouse.ir" target="_blank">وب سایت هاوس</a> توسعه داده شده است. همچنین برای آموزش این سیستم می توانید از مرکز آموزش وب سایت هاوس استفاده کنید. در نظر داشته باشید برای ورود به بخش آموزش باید رمز عبور اختصاصی خود را از داخل پنل مشترکین وارد بفرمائید :</h2>
		</div>
	</div>

	<div class="vc_welcome-feature feature-section vc_row">
		<div class="vc_col-xs-4">
			<img class="vc-img-center"
			     src="<?php echo vc_asset_url( 'vc/vc-welcome/01.png' ); ?>"/>
			<h4 style="text-align:center;font-weight:bold;">صفر تا صد visual composer را یاد بگیرید</h4>
			<center><a target="_blank" href="http://websitehouse.ir/learning/%D9%88%DB%8C%DA%98%D9%88%D8%A7%D9%84%20%DA%A9%D8%A7%D9%85%D9%BE%D9%88%D8%B2%D8%B1/%D8%A7%D8%B2-%DA%A9%D8%AC%D8%A7-%D8%A8%D8%A7%DB%8C%D8%AF-%D8%B4%D8%B1%D9%88%D8%B9-%DA%A9%D8%B1%D8%AF" type="button">ورود به مرکز آموزش</a></center>
		</div>
		<div class="vc_col-xs-4">
			<img class="vc-img-center"
			     src="<?php echo vc_asset_url( 'vc/vc-welcome/01.png' ); ?>"/>
			<h4 style="text-align:center;font-weight:bold;">هنوز هم سوالی دارید ؟</h4>
			<center><a target="_blank" href="http://websitehouse.ir/support" type="button">ورود به سیستم پشتیبانی مشترکین</a></center>
		</div>
		<div class="vc_col-xs-4">
			<h3 style="text-align:center;font-weight:bold;text-align:center;">با تخفیف سایت خود را گسترش دهید!</h3>
			<p style="margin-bottom: 5px;">ما امکانات مختلفی طراحی کرده ایم و شما می توانید به راحتی و در عرض کمتر از چند ساعت امکانات جدیدی به وب سایت فعلی خود اضافه کنید</p>
			<center><a style="color:red;line-height:30px;font-weight:bold;"href="http://websitehouse.ir/plugins" target="_blank">چه امکاناتی به سایتم می توانم اضافه کنم ؟</a></center>
			<div style="text-align:center;font-weight:bold;text-align:center;background-color:RGBA(255,0,0,0.2);border-radius:15px;padding:10px;">
				از این پس با استفاده از کد تخفیف<br><span style="">websitehouse-moshtari</span><br>امکانات بیشتری برای سایت خودتان تهیه کنید!
			</div>
		</div>
	</div>

</div>
</div>
