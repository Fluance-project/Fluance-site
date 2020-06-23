<section class="page">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<!-- Load Bludit Plugins: Page Begin -->
				<?php Theme::plugins('pageBegin'); ?>

				<!-- Page title -->
				<h1 class="title"><?php echo $page->title(); ?></h1>

				<!-- Page description -->
				<?php if ($page->description()): ?>
				<p class="page-description"><?php echo $page->description(); ?></p>
				<?php endif ?>

				<!-- Page cover image -->
				<?php if ($page->coverImage()): ?>
				<div class="page-cover-image py-6 mb-4" style="background-image: url('<?php echo $page->coverImage(); ?>');">
					<div style="height: 300px;"></div>
				</div>
				<?php endif ?>

				<!-- Page content -->
				<div class="page-content">
				<?php echo $page->content(); ?>
				</div>

				<!-- Load Bludit Plugins: Page End -->
				<?php Theme::plugins('pageEnd'); ?>
			</div>
		</div>
	</div>
</section>



<div class="site-wrapper-reveal">
        

<?php echo $page->content(); ?>

		<!--========== Call to Action Area Start ============-->
		<div class="cta-image-area_one section-space--ptb_80 processing-hero-bg">
				<div class="container">
						<div class="row align-items-center">
								<div class="col-xl-8 col-lg-7">
										<div class="cta-content md-text-center">
												<h3 class="heading text-white">Augmentez le potentiel et l'éfficacité <span class="text-color-secondary">de vos équipes</span></h3>
										</div>
								</div>
								<div class="col-xl-4 col-lg-5">
										<div class="cta-button-group--one text-center">
												<a href="https://fluance.app" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Contactez-nous</a>
												<a href="https://www.figma.com/proto/Tq6Cx6PFpg3JTgIBhcEKGz/Fluance-Design?node-id=10043%3A1212&scaling=min-zoom" class="btn btn--secondary  btn-two"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span>Essayer</a>
										</div>
								</div>
						</div>
				</div>
		</div>
		<!--========== Call to Action Area End ============-->








