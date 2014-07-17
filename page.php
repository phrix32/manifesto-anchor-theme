<?php theme_include('header'); ?>

<div class="content-bg page-id-<?php echo page_id(); ?>">

	<section class="page-main">
		<article class="page">
			<header class="page-header">
				<div class="container">
					
				</div>
			</header>
			<div class="page-content">
				<div class="container">
					<?php echo page_content(); ?>
				</div>
			</div>
		</article>
	</section>
		
</div>

<?php theme_include('footer'); ?>