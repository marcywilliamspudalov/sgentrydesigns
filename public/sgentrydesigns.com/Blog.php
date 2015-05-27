<?php
define('IN_BLOG', true);
define('PATH', '');
include('includes/miniblog.php');
?>
<!DOCTYPE HTML>
<html><!-- InstanceBegin template="../../public/sgentrydesigns.com/Templates/sgentrydesigns.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!-- InstanceBeginEditable name="doctitle" -->

<title>Stephanie Gentry Designs</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->

<!-- InstanceEndEditable -->

	<script src="//use.typekit.net/zji3vng.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
    
    <script type="text/javascript" src="respond.min.js"></script>
 	


<link href="_CSS/reset.css" rel="stylesheet" type="text/css">
<link href="_CSS/responsive.gs.12col.css" rel="stylesheet" type="text/css">
<link href="_CSS/sgdstyle.css" rel="stylesheet" type="text/css">
</head>

<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="header">
<div class="container row">

  <header role="banner" class="row">
	
				<icon class = "socialmediaicons">
   			<a href="http://www.facebook.com/Sgentrydesigner"><img src="_Assets/facebook.png" height="30" alt="Follow Stephanie Gentry Designs on Facebook!"/></a>
  			<a href="http://www.instagram.com/sgentrydesigner"><img src="_Assets/instagramicon.png" height="30" alt="Follow Stephanie Gentry on Instagram!"/></a>
  			<a href="http://www.twitter.com/SGentryDesigner"><img src="_Assets/twitter.png"  height="30" alt="Follow Stephanie Gentry on Twitter!"/></a>
  		</icon>
    	<div class="logo">
   																																						
         <img 
				src="_Assets/sglogoandtaglinelarge.png"  
                srcset=" ../Assets/sglogoandtaglinelarge.png 1280w,
                		../Assets/sglogoandttaglinemedium.png 640w,
                        ../Assets/sglogoandtaglinesmall.png 320w "
                sizes="100%"
        		alt="Stephanie Gentry Designs: Define Urban Chic!"/>
      </div>
    
  <img src="_Assets/line.png" />
  
<nav id="menu">
  <ul>
    <li ><a href="index.html">HOME</a></li>
    <li ><a href="About.html">ABOUT</a></li>
    <li ><a href="Press.html">PRESS</a></li>
    <li ><a href="Collections.html">COLLECTIONS</a></li>
    <li ><a href="Shop.html">SHOP</a></li>
    <li ><a href="Blog.php">BLOG</a></li>
    <li><a href="Contact.html">CONTACT</a></li>
    </ul>
</nav>

	
	</header>

</div>

<footer role="contentinfo" class="row">
			
            <div class = "copyright">
		
			<p class="copyright">Copyright &copy Stephanie Gentry Designs</p>
		</div>
        
  		<div class = "designedbymwp ">
			<p class="designedbymwp">Web design by <a href="http://www.marcywilliamspudalov.com">MWP Designs</a></p>
           </div>
 
 
 </footer>

<!-- InstanceBeginEditable name="pageeditable" -->


<div id="blog">
   
		<div class="wrapper">
		<div class="intro">
	<h2>Stephanie Gentry's Blog</h2>

	
	<?=$miniblog_posts?>
	
	<div class="navigation">
		<? if(!$single) { ?>
			<? if($miniblog_previous) {	?> <p class="previous-link"><?=$miniblog_previous?></p>	<? } ?>
			<? if($miniblog_next) {	?>	<p class="next-link"><?=$miniblog_next?></p> <? } ?>
		<? } ?>
		<? if($single) { ?>
			<p class="previous-link"><a href="<?=$config['miniblog-filename']?>">&laquo; return to posts</a></p>
		<? } ?>
		<div class="clear"></div>
	</div>
	<div class="footer">
		<!-- a link back is REQUIRED under the terms of the license. To remove the link back see http://www.spyka.net/licensing -->
		<p>Powered by <a href="http://www.spyka.net/scripts/php/miniblog">miniblog</a> created by <a href="http://www.spyka.net">spyka Webmaster</a></p>
	</div><!------end blog-->
</div>    
 
<!-- InstanceEndEditable -->

 <script type="text/javascript" src="respond.min.js"></script>

</body>
<!-- InstanceEnd --></html>
