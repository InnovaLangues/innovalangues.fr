<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 9]>
<html id="ie9" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <?php
        global $ttso;
        $logo             = $ttso->st_sitelogo;
        $custom_logo      = $ttso->st_logo_icon;
        $custom_logo_text = strip_tags( stripslashes( $ttso->st_logo_text ) );
        $toolbar          = $ttso->st_toolbar;
        $responsive       = $ttso->st_responsive;
        $boxedlayout      = $ttso->st_boxedlayout;
    ?>
    <meta charset="utf-8" />
    <?php if ( 'false' == $responsive ) : ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php endif; ?>
    <title><?php wp_title( '&laquo;', true, 'right' ); ?> <?php bloginfo( 'name' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

    <?php wp_head(); ?>

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/IE.css" />
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/framework/js/IE.js"></script>
    <![endif]-->

    <?php get_template_part( 'template-part-page-styling', 'childtheme' ); ?>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body <?php body_class();?>>
<?php if ( 'true' == $boxedlayout ) {echo '<div id="tt-boxed-layout">';}else{echo '<div id="tt-wide-layout">';} ?>
<?php if ( 'true' == $toolbar ) { ?>
    <aside class="top-aside clearfix">
        <div class="center-wrap">
            <div class="one_half">
                <?php // dynamic_sidebar( 'Top Left Toolbar' ); ?>
            </div><!-- end .top-toolbar-left -->

				 <?php
				/* 
				<div class="one_half">
				   <div class="addthis_toolbox addthis_default_style "><a class="addthis_button_twitter"></a><a class="addthis_button_email"><a class="addthis_button_scoopit"></a><a class="addthis_button_compact"></a><!-- <a class="addthis_counter addthis_bubble_style"></a> -->
				</div>
				<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4e49530f13a08f5d"></script>  </div>
				*/
				?>

		<div class="two_half top-socials">
			<div class="sidebar-widget social_widget">
				<ul class="social_icons">
					<?php /* <li><a href="<?php echo home_url(); ?>/feed" target="_blank" class="rss">RSS</a></li> */ ?>
					<li><a href="http://www.scoop.it/t/innovalangues" class="scoop" target="_blank">Scoop.it</a></li>
					<li><a href="https://twitter.com/innovalangues" class="twitter" target="_blank">Twitter</a></li>
					<?php /*  <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="facebook" onclick="window.open(this.href);return false;">Facebook</a></li> */ ?>
				</ul>
			</div>            
		</div><!-- end .top-toolbar-right -->

        </div><!-- end .center-wrap -->
        <div class="top-aside-shadow"></div>
		<div class="clear"></div>
    </aside>
<?php } ?>
    <header>
        <div class="center-wrap">
            <div class="companyIdentity">
                <?php if ( is_page_template( 'page-template-under-construction.php' ) ) { ?>
                    <img src="<?php echo esc_url( $logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
                <?php } else { ?>
                    <?php if ( '' == $custom_logo_text ) { ?>
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo esc_url( $logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
                    <?php } else { ?>
                        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/global/<?php echo esc_attr( $custom_logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" /></a>
                        <h1><a href="<?php echo home_url(); ?>"><?php echo esc_html( $custom_logo_text ); ?></a></h1>
                    <?php } ?>
                <?php } ?>
            </div><!-- end .companyIdentity -->
            <nav>
                <ul>
                    <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'Main Menu', 'depth' => 0 ) ); ?>
                </ul>
            </nav>
            <div style="clear:both;"><!-- è brutto ma serve per far funzionare correttamente il menu --></div>
        </div><!-- end .center-wrap -->
    </header>