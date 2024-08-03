<?php

/**
 * Template Name: Page (Full width)
 * Description: Page template full width.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
<!-- text media -->
	<section id="">
		<div class="container">
			<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
				<div class="col-10 col-sm-8 col-lg-6">
					<img src="https://dummyimage.com/600x400/000/fff" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
				</div>
				<div class="col-lg-6">
					<h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 ">Go from complex to complete.</h1>
					<p class="lead">Level 4 Ventures is a leader in business analytics, with support for cost model development, cost estimating, budget support, project oversight, complex acquisition support, and special financial studies.</p>
					<div class="d-grid gap-2 d-md-flex justify-content-md-start">
						<button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
						<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- text media -->

	<!--Columns with icons -->
<section id="">
	<div class="container px-4 py-5 px-4 pt-5 my-5 text-center border-bottom" id="featured-3">
		<h2 class="pb-2 border-bottom ">What you get</h2>
		<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
			<div class="feature col">
				<div class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-0-circle" viewBox="0 0 16 16">
						<path d="M7.988 12.158c-1.851 0-2.941-1.57-2.941-3.99V7.84c0-2.408 1.101-3.996 2.965-3.996 1.857 0 2.935 1.57 2.935 3.996v.328c0 2.408-1.101 3.99-2.959 3.99M8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895" />
						<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8" />
					</svg>
				</div>
				<h3 class="fs-2 text-body-emphasis">Consulting</h3>
				<p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi">
						<use xlink:href="#chevron-right"></use>
					</svg>
				</a>
			</div>
			<div class="feature col">
				<div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
					<!-- PLACEHOLDER ICON -->
					<i class="bi bi-check-circle-fill"></i>
				</div>
				<h3 class="fs-2 text-body-emphasis">Software</h3>
				<p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi">
						<use xlink:href="#chevron-right"></use>
					</svg>
				</a>
			</div>
			<div class="feature col">
				<div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
					<svg class="bi" width="1em" height="1em">
						<use xlink:href="#toggles2"></use>
					</svg>
				</div>
				<h3 class="fs-2 text-body-emphasis">Featured title</h3>
				<p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
				<a href="#" class="icon-link">
					Call to action
					<svg class="bi">
						<use xlink:href="#chevron-right"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</section>
	<!--Columns with icons -->
	<!-- slider -->
<section id="">
	<div class="container px-4 py-5 px-4 pt-5 my-5 border-bottom">
		<h2 class="pb-2 border-bottom ">Your go-to solution for all things</h2>
		<div class="row d-flex justify-content-between">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Card title</h5>
				<h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			</div>
		</div>
		</div>
	</div>
</section>
	 <!-- slider -->

	<!-- text media centered -->
	<div class="container">
	 	centered text media
	</div>
	<!-- plan offers -->


	<!-- slider -->
	<div class="container">
	 	slider
	</div>
	<!-- slider -->

	<!-- text media -->
	<div class="container">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6">
				<img src="https://dummyimage.com/600x400/000/fff" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
			</div>
			<div class="col-lg-6">
				<h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 ">Go from complex to complete.</h2>
				<p class="lead">Level 4 Ventures is a leader in business analytics, with support for cost model development, cost estimating, budget support, project oversight, complex acquisition support, and special financial studies.</p>
				<div class="d-grid gap-2 d-md-flex justify-content-md-start">
					<button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
					<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
				</div>
			</div>
		</div>
	</div>
	<!-- text media -->
	<!-- text media centered -->
	<div class="container">
	 	centered text media
	</div>
	<!-- plan offers -->

	<!--logo strip -->
	<div class="container">
	logo
	</div>
	<!--logo strip -->

	<!-- text media -->
	<div class="container">
		<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
			<div class="col-10 col-sm-8 col-lg-6">
				<img src="https://dummyimage.com/600x400/000/fff" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
			</div>
			<div class="col-lg-6">
				<h2 class="display-5 fw-bold text-body-emphasis lh-1 mb-3 ">Go from complex to complete.</h2>
				<p class="lead">Level 4 Ventures is a leader in business analytics, with support for cost model development, cost estimating, budget support, project oversight, complex acquisition support, and special financial studies.</p>
				<div class="d-grid gap-2 d-md-flex justify-content-md-start">
					<button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
					<button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
				</div>
			</div>
		</div>
	</div>
	<!-- text media -->

	<!--footer -->
	<div class="container">
	footer
	</div>
	<!--footer -->

	<?php
	the_content();

	wp_link_pages(
		array(
			'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'sightbox') . '">',
			'after'    => '</nav>',
			'pagelink' => esc_html__('Page %', 'sightbox'),
		)
	);
	edit_post_link(
		esc_attr__('Edit', 'sightbox'),
		'<span class="edit-link">',
		'</span>'
	);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
// If comments are open or we have at least one comment, load up the comment template.
if (comments_open() || get_comments_number()) {
	comments_template();
}

get_footer();
