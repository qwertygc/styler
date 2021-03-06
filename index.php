<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">
<head>
<?php include(THEME_DIR_PHP.'head.php'); ?>
</head>
<body>

	<!-- Load Bludit Plugins: Site Body Begin -->
	<?php Theme::plugins('siteBodyBegin'); ?>

	<!-- Navbar -->
	<?php include(THEME_DIR_PHP.'navbar.php'); ?>

	<!-- Slider -->
	<?php include(THEME_DIR_PHP.'slider.php'); ?>
			
	<!-- Content -->
	<div class="container my-4">

		<div class="row">

			<!-- Blog Posts -->
			<div class="col-md-12">
			<?php
				if ($WHERE_AM_I == 'category' && $page->category()) {
					echo '<h4><span class="la la-tag mr-2"></span> '. $page->category() .'</h4>';
				}
                // Bludit content are pages
                // But if you order the content by date
                // These pages works as posts

                // $WHERE_AM_I variable detect where the user is browsing
                // If the user is watching a particular page/post the variable takes the value "page"
                // If the user is watching the frontpage the variable takes the value "home"
                if ($WHERE_AM_I == 'page') {
                    include(THEME_DIR_PHP.'page.php');
                } else {
                    include(THEME_DIR_PHP.'home.php');
                }
            ?>
			</div>

		</div>
	</div>

	<!-- Footer -->
	<?php include(THEME_DIR_PHP.'footer.php'); ?>

	<!-- Javascript -->
	<?php
        // Include Jquery file from Bludit Core
        echo Theme::jquery();

        // Include javascript Bootstrap file from Bludit Core
		echo Theme::jsBootstrap();
		
		// Animate on scroll
		echo Theme::js('https://unpkg.com/aos@2.3.1/dist/aos.js', false);

		// Tiny Slider (https://ganlanyuan.github.io/tiny-slider/)
		echo Theme::js('https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js',false);

        // Main CSS
		echo Theme::js('js/main.js');

    ?>
	
	
	<!-- Load Bludit Plugins: Site Body End -->
	<?php Theme::plugins('siteBodyEnd'); ?>

</body>
</html>