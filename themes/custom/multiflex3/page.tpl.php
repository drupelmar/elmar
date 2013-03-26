<?php
// $Id: page.tpl.php,v 1.2.2.9 2009/05/14 08:16:31 hswong3i Exp $
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head profile="http://gmpg.org/xfn/11">
<meta name="viewport" content="width=device-height, minimum-scale=0.25, user-scalable=1;" />

  <title><?php print $head_title ?></title>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
  <!--[if lt IE 7]>
    <?php print phptemplate_get_ie_styles(); ?>
  <![endif]-->
  <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body class="<?php print $body_classes ?>">

<div id="wrapper">
<div class="wrapper1">
<div class="head_wrap">
				<div class="header1">
					<a href="http://seeklocal.biz/" target="_self" class="logoLink" title="SeekLocal.biz - local business directory Australia"><img class="logo1"  src="http://seeklocal.biz/images/seekvic/frame_header_logo_type.png" border="0" alt="seeklocal" /></a>
					<div class="header_links">
						<div class="header_link">
							<a class="glow_link" href="http://seeklocal.biz/register.php" target="_top">
								<span class="glow_arrow_r"></span>
								<span class="glow_text">
									<span class="glow_title">REGISTER FREE!</span><br />
									Add Your Item To SeekLocal
								</span>
							</a>
						</div>
						<div class="header_link">
							<a class="glow_link" href="http://seeklocal.biz/members/" target="_self">
								<span class="glow_arrow_r"></span>
								<span class="glow_text">
									<span class="glow_title">MEMBERS</span><br />
									Log-in to your admin panel
								</span>
							</a>
						</div>
					</div>

				</div>
			</div>
			<div class="nav_wrap">
				<div class="nav_wrap_wrap">
					<ul class="navbar">
						<!--<li class="navlink1"><a href="http://seeklocal.biz/index.php" target="_self" ><span>Home</span></a>
						</li>-->
						<li class="navlink1"><a href="http://seeklocal.biz/listing/"  target="_self"><span>Listings</span></a>
						</li>
													<li class="navlink1"><a href="http://seeklocal.biz/event/" class="menuActived" target="_self" ><span>Events</span></a>
                                                                                                            <span class="mm_indi"></span>
						</li>												<li class="navlink1"><a href="http://seeklocal.biz/saving/" target="_self" ><span>Savings</span></a>
						</li>
						<li class="navlink1">&nbsp;</li>
					</ul>
					<div class="navbar_right">
						<ul class="navbar">
							<li class="navlink1"><a href="http://seeklocal.biz/printed" target="_self" ><span>Printed Version</span></a>
							</li>
							<li class="navlink1"><a href="http://seeklocal.biz/contact" target="_self" ><span>Contact Us</span></a>
							</li>
							<li class="navlink1">&nbsp;</li>
						</ul>
					</div>
				</div>
</div>
<div class="search_wrap">
</div>
</div>
<div id="header-region" class="clear-block">  </div>
<!-- begin wrapper -->
<div id="container" class="clear-block"><!-- begin container -->
  <div id="header"><!-- begin header --> 

<?php print $header ?>
<?php  /*
print "<ul id='mylinkbar'>";
global
$user;
if ($user->uid) {
print "<li>";
print l($user->name,"user");
print "</li>";
print "<li>";
print l(" Log Out " ,"logout");
print "</li>";

}
else {
print "</ul>";
print "<ul id='mylinkbar'>";
print "<li><a href='http://www.suburbhub.com/amember/signup.php'>Join Suburbhub</a></li>";//add your primary links manually
}   */  ?> 
 

    <?php /* if ($logo): ?><div id="logo"><a href="<?php print $front_page ?>" title="<?php print $site_name ?>"><img src="<?php print $logo ?>" alt="<?php print $site_name ?>" /></a></div><?php endif; ?>
    <div id="slogan-floater"><!-- begin slogan-floater -->
      <?php if ($site_name): ?><h1 class='site-name'><a href="<?php print $front_page ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h1><?php endif; ?>
      <?php if ($site_slogan): ?><div class='site-slogan'><?php print $site_slogan ?></div><?php endif;  
    </div>    */ ?>   <!-- end slogan-floater  i moved the div iside the php end change it back outsid when you need the slogen-->   
    <?php if (isset($secondary_links)) : ?><!-- begin secondary_links -->
      <?php print theme('links', $secondary_links, array('class' => 'secondary-links')) ?>
    <?php endif; ?><!-- end secondary_links -->
  </div>
  
  <!-- end header -->
  <div id="breadcrumb-search-region"><div class="right-corner"><div class="left-corner">
    <?php print $breadcrumb ?>
    <?php if ($search_box): ?><div class="block block-theme"><?php print $search_box ?></div><?php endif; ?>
    <?php if ($mission): print '<div id="mission">'. phptemplate_mission() .'</div>'; endif; ?>
  </div></div></div>
  <div id="main"><div class="right-corner"><div class="left-corner"><!-- begin main -->
  <?php if ($left) { ?>
    <div id="sidebar-left" class="sidebar"><!-- begin sidebar-left -->
      <?php print $left ?>
    </div><!-- end sidebar-left -->
  <?php } ?>
  <div id="center"><div id="squeeze"><!-- begin center -->
    <?php if ($title): print '<h2 class="title'. ($tabs ? ' with-tabs' : '') .'">'. $title .'</h2>'; endif; ?>
    <?php if ($tabs): print '<div class="tabs">'. $tabs .'</div>'; endif; ?>
    <?php if ($show_messages && $messages): print $messages; endif; ?>
    <?php print $help ?>
    <div class="clear-block">
      <?php print $content ?>
    </div>
    <?php print $feed_icons ?>
  </div></div><!-- end center -->
  <?php if ($right) { ?>
    <div id="sidebar-right" class="sidebar"><!-- begin sidebar-right -->
      <?php print $right ?>
    </div><!-- end sidebar-right -->
  <?php } ?>
  </div></div></div><!-- end main -->
  <div id="footer"><!-- start footer -->
    <?php print $footer_message ?>
    <?php print $footer ?>
    <!-- begin #287426 -->
      <span style="display: none;">&nbsp;</span>
    <!-- end #287426 -->
  </div><!-- end footer -->
</div><!-- end container -->
</div><!-- end wrapper -->
<?php print $closure ?>
</body>
</html>