<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja" dir="ltr" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head >
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta name="description" content="" />
<meta name="keyword" content="" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta name="format-detection" content="telephone=no">
<meta property="og:title" content="記事のタイトル" />
<meta property="og:type" content="article" />
<meta property="og:description" content="記事の説明" />
<meta property="og:url" content="記事のURL" />
<meta property="og:image" content="画像のURL" />
<meta property="og:site_name" content="サイトのタイトル" />
<meta property="og:locale" content="言語" />
<meta property="fb:admins" content="facebookのユーザーID" />
<meta property="fb:app_id" content="facebookのアプリID" />
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@mikihicom">
<meta name="twitter:creator" content="@mikihicom">
<meta name="twitter:title" content="サイトのタイトル">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="">
<meta name="twitter:url" content="">
<!--▼CSS▼-->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.14.1/build/cssreset/cssreset-min.css">
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
<link href="<?php bloginfo('stylesheet_directory');?>/lightbox/css/lightbox.css" type="text/css" rel="stylesheet" media="screen" />
<!--▼CSS▼-->
<!--[if IE 7]>
<link rel="stylesheet" href="css/fujiya_icon_font-ie7.css">
<![endif]-->
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name'); ?></title>
<?php 
wp_deregister_script('jquery');
wp_deregister_script('jquery-ui-core');
wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js');
wp_enqueue_script('jquery-ui-core','http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js', array('jquery'));
wp_enqueue_script('mainjs', get_bloginfo('template_url') . '/js/main.js',array('jquery'));
wp_enqueue_script('easing', get_bloginfo('template_url') . '/js/jquery.easing.1.3.js',array('jquery'));
wp_enqueue_script('lightbox', get_bloginfo('template_url') . '/lightbox/js/lightbox.min.js',array('jquery')); ?>

<!-- lighebox -->
<script type="text/javascript">
$(document).ready(function() {
 					$('a[rel*=lightbox]').lightBox();
});
    <!-- lightbox option-->
    $(document).ready(function() {
	$('a[rel*=lightbox]').lightBox({
		overlayBgColor			: '#fff',
		overlayOpacity			: 0.8,
		imageLoading			: '<?php bloginfo('stylesheet_directory');?>/lightbox/img/loading.gif',
		imageBtnClose			: '<?php bloginfo('stylesheet_directory');?>/lightbox/img/close.gif',
		imageBtnPrev			: '<?php bloginfo('stylesheet_directory');?>/lightbox/img/prev.gif',
		imageBtnNext			: '<?php bloginfo('stylesheet_directory');?>/lightbox/img/next.gif',
		containerResizeSpeed	: 350,
		txtImage				: '画像：',
		txtOf					: '／'
	});
});
</script>
<!-- lighebox -->

<!-- google+ボタン -->
<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>
<!-- google+ボタン -->

</head>
<body>
<!--fb plugin-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_KS/sdk.js#xfbml=1&appId=206426139400332&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--fb plugin-->
<noscript>
<div class="no_script">サイトを快適に利用するためには、JavaScriptを有効にしてください。</div>
</noscript>
    <div id="header" class="container">
        <div id="hide_header_box">
            <div class="hh_area">
                <div class="hh_logo">
                    <img src="<?php bloginfo('stylesheet_directory');?>/images/lcmc_hide_top_logo.png">
                    <span>LINE Creators Market Challenge !!!!!!!!!</span>
                </div>
                <div class="hh_menu">
                    <ul>
                      <li>
                      <a href="<?php echo home_url('/');?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/home_icon.png"></a>
                      </li>
                      <li>
                      <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/about_icon.png"></a>
                      </li>
                      <li>
                      <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/cc_icon.png"></a>
                      </li>
                      <li>
                      <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/contact_icon.png"></a>
                      </li>
                      <li>
                      <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/collection_icon.png"></a>
                      </li>
                   </ul>
                </div>
            </div>
        </div>
        <div class="headerBox">
           <div class="logobox">
            <a href="<?php echo home_url('/');?>">
               <div class="sitelogo">
                   <img src="<?php bloginfo('stylesheet_directory');?>/images/lcmc_logo.png" alt="LINE Creators Market Challenge logo">
               </div>
                <div class="siteTitle">
                    <h1>LINE Creators Mareket Challenge!!!!!!!!!!!!!</h1>
                </div>
                </a>
            </div>
            <div class="h_menu">
                <div class="top_menu_Icon">
                   <div id="menu_box">
                      <ul>
                          <li>
                              <div><a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/about_icon.png"></a></div>
                                <div class="arrow_box">
                                    <div class="menu_about_title">About me</div>
                                    <div class="menu_about_detail">My name is mikihicom</div>
                                </div>
                            </li>
                          <li>
                             <div>
                              <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/cc_icon.png"></a>
                               </div>
                                   <div class="arrow_box">
                                    <div class="menu_about_title">Copyright</div>
                                    <div class="menu_about_detail">Image in this site is Creative Commons Lisence. To click</div>
                                </div>
                          </li>
                          <li>
                                <div>
                                   <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/contact_icon.png"></a>
                                </div>
                                <div class="arrow_box">
                                    <div class="menu_about_title">Contact me</div>
                                    <div class="menu_about_detail">Please contact me.<br/>Click to Contact Form.</div>
                              </div>
                          </li>
                          <li>
                              <div>
                                  <a href="#"><img src="<?php bloginfo('stylesheet_directory');?>/images/collection_icon.png"></a>
                             
                              </div>
                                <div class="arrow_box">
                                <div class="menu_about_title">collection</div>
                                <div class="menu_about_detail">My collections gallary</div>
                              </div>
                          </li>
                      </ul>
                   </div>
                </div>
            </div>
        </div>
    </div>
<?php wp_head();?>