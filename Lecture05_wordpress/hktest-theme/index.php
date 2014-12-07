<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My first HTML page</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
		  $('.menu-trigger').click(function(){
		    $('#menu').slideToggle('fast');
		    $('.menu-trigger').toggleClass("active");
		  });
		});
	</script>
</head>
<body>
	<div id="frame">
		<header class="clear">
			<a name="top"></a>
			<span class="menu-trigger mobile">
				<span></span>
				<span></span>
				<span></span>
			</span>
			<!--
			<ul id="lang">
				<li><a href="#">Est</a></li>
				<li><a href="#">Eng</a></li>
				<li class="active"><a href="#">Rus</a></li>
				<li><a href="#">Fin</a></li>
			</ul> 
			 -->
			<a href="<?php echo $home_link; ?>" id="logo" class="mobile">
				<img src=<?php echo get_template_directory_uri(); ?>/logo.png alt="Site logo" title="Site logo title">
				<span>	This is logo area</span>
			</a>
			<?php wp_nav_menu( array('menu' => 'Main menu', 'menu_class' => 'menu')); ?>
			<a href="#" id="logo" class="desktop">
				<img src=<?php echo get_template_directory_uri(); ?>/logo.png alt="Site logo" title="Site logo title">
				<span>	This is logo area</span>
			</a>
		</header>
		<article>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
			<!--
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, fugit, ipsam, facere error explicabo rerum rem quibusdam veniam ratione hic voluptate inventore molestiae vero. Blanditiis, officiis, fugit, facere porro illum dolorum necessitatibus hic doloribus molestias voluptates sequi aperiam libero corrupti ut laborum velit omnis sed error rerum quia laboriosam repudiandae esse nesciunt minus accusamus tenetur id tempore nisi possimus magni similique veniam enim quidem quod maxime pariatur aut. A, harum, beatae facilis molestias illum minus quod mollitia deserunt commodi repellendus id esse sit tempora tempore saepe. Explicabo, dicta, quod, maxime ex enim voluptate eum itaque iste qui alias consequatur iure nisi cum laboriosam inventore ipsum eaque. Doloremque, quo inventore non quam explicabo ut aspernatur hic id cum est alias tenetur magni pariatur eius repellat incidunt nostrum voluptas tempore possimus quidem. Voluptates, ab, vero temporibus nisi qui ducimus cum explicabo fugit dolores iure consequatur quia mollitia cupiditate earum eveniet accusantium modi!</p>
			-->
			<p><a href="#top">Back to top</a></p>
		</article>
	</div>
	<footer>
		<div class="footer-content">
			Metsasalu 888, Tallinn    11122 Harju maakond     tel:+372  555 5555     faks:+372  555 5555
		</div>
	</footer>
</body>
</html>