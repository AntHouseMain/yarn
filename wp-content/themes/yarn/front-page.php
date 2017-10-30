<?php get_header(); ?>
<section class="uk-header-slider uk-visible@s">
	<div class="uk-position-relative uk-visible-toggle top-slider-home-page" uk-slideshow="animation: push; min-height: 300; max-height: 600">
		<ul class="uk-slideshow-items">
			<li>
				<img  src="<?php bloginfo('template_directory'); ?>/app/img/sa.jpg" alt="" uk-cover>
				<div class="uk-position-center uk-position-small uk-text-center uk-light uk-information-slide">
					<h1 class="uk-margin-remove">Лучшая в Украине пряжа по приемлемой цене</h1>
					<p>Только самая качественная Турецкая пряжа теперь в Украине</p>
					<a class="uk-margin-medium-top" href="#">Перейти к товару</a>
				</div>
			</li>
		</ul>
	</div>
</section>

<section class="uk-section uk-section-popular">
	<div class="uk-container-expand">
		<div class="uk-margin-large-bottom" uk-grid> 
			<div class="uk-width-1-1 uk-text-center">
				<h2 class="uk-heading-line uk-text-uppercase">
					<span>популярное</span>
				</h2>				
			</div>
		</div>
	</div>
	<?php $args = array(
		'taxonomy'   => 'product_cat',
		'number'     => $number,
		'name'   	 => $orderby,
		'ASC'	     => $order,
		'hide_empty' => $hide_empty,
		'include'    => $ids,
	);
	$product_categories = get_terms( 'product_cat', $args );
	$cat_array=array(0,1,2);

	?>
	<div class="uk-container">	
		<div uk-grid>
			<div class="uk-width-1-3@s">
				<div class="" uk-grid>
					<div class="uk-width-1-1@s">
						<div class="uk-width-1-1@s uk-position-relative">
							<div class="uk-text-center">
								<div class="uk-popular-small-img uk-inline-clip uk-transition-toggle">
									<?php $catTerm=$product_categories[$cat_array[0]];

									$thumbnail_id = get_woocommerce_term_meta( $catTerm->term_id, 'thumbnail_id', true ); 

											// get the image URL
									$image = wp_get_attachment_url( $thumbnail_id );  ?>
									<img src="<?php echo $image; ?>" alt="">


									<div class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
										<a href="<?php echo (get_term_link( $catTerm->term_id )); ?>" class="uk-position-cover"></a>
										<p class="uk-h4 uk-margin-remove">Смотреть</p>
									</div>
								</div>
								<p class="uk-popular-title uk-margin-small-top uk-text-uppercase">
									<a href="<?php echo (get_term_link( $catTerm->term_id )); ?>"><?php echo $catTerm->name;?>
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="uk-width-1-1@s">
						<div class="uk-width-1-1@s uk-position-relative">
							<div class="uk-text-center">
								<div class="uk-popular-small-img uk-inline-clip uk-transition-toggle">

									<?php $catTerm=$product_categories[$cat_array[1]];

									$thumbnail_id = get_woocommerce_term_meta( $catTerm->term_id, 'thumbnail_id', true ); 

											// get the image URL
									$image = wp_get_attachment_url( $thumbnail_id );  ?>
									<a href="<?php echo (get_term_link( $catTerm->term_id )); ?>" ><img src="<?php echo $image; ?>" alt="" ></a>

									<div class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
										<a href="#" class="uk-position-cover"></a>
										<p class="uk-h4 uk-margin-remove">Смотреть</p>
									</div>
								</div>
								<p class="uk-popular-title uk-margin-small-top uk-text-uppercase">
									<a href="<?php echo (get_term_link( $catTerm->term_id )); ?>"><?php echo $catTerm->name;?>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="uk-width-2-3@s">
				<div class="uk-width-1-1@s uk-position-relative">
					<div class="uk-text-center">
						<div class="uk-inline-clip uk-transition-toggle uk-lg-block">

							<?php $catTerm=$product_categories[$cat_array[2]];

							$thumbnail_id = get_woocommerce_term_meta( $catTerm->term_id, 'thumbnail_id', true ); 

											// get the image URL
							$image = wp_get_attachment_url( $thumbnail_id );  ?>
							<img src="<?php echo $image; ?>" alt="">
							<div class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
								<a href="<?php echo (get_term_link( $catTerm->term_id )); ?>" class="uk-position-cover"></a>
								<p class="uk-h4 uk-margin-remove">Смотреть</p>
							</div>
						</div>
						<p class="uk-popular-title uk-margin-small-top uk-text-uppercase">
							<a href="<?php echo (get_term_link( $catTerm->term_id )); ?>"><?php echo $catTerm->name;?>
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="uk-section uk-section-about-us-front-page">
		<div class="uk-container-expand">
			<div class="uk-margin-large-bottom" uk-grid> 
				<div class="uk-width-1-1 uk-text-center">
					<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
						<span> о нас </span>
					</h2>				
				</div>
			</div>
		</div>
		<div class="uk-container uk-container-small uk-text-center">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dicta sed quibusdam dolorem fugit quaerat vero aliquam velit nesciunt iure omnis, corporis deserunt iusto suscipit natus eligendi cumque excepturi optio!</p>
			<a href="#">Узнать больше</a>
		</div>
	</section>

	<section class="uk-section uk-section-our-yarn">
		<div class="uk-container-expand">
			<div class="uk-margin-medium-bottom" uk-grid> 
				<div class="uk-width-1-1 uk-text-center">
					<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
						<span> наша пряжа </span>
					</h2>				
				</div>
			</div>
		</div>
		<div class="uk-container">
			<div uk-grid>
				<?php $product_categories=array_reverse($product_categories);
				for ($i=0; $i <6 ; $i++) { ?> 
					<div class="uk-width-1-1 uk-width-1-2@s uk-width-1-3@m">
						<div class="uk-text-center  uk-position-relative">
							<div class="uk-image-wrap uk-inline-clip uk-transition-toggle">
								<?php $catTerm=$product_categories[$i];
								$thumbnail_id = get_woocommerce_term_meta( $catTerm->term_id, 'thumbnail_id', true ); 
												// get the image URL
								$image = wp_get_attachment_url( $thumbnail_id );  ?>
								<img src="<?php echo $image; ?>"  alt="">
								<div class="uk-transition-fade uk-position-cover uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
									<a href="<?php echo (get_term_link( $catTerm->term_id )); ?>" class="uk-position-cover"></a>
									<p class="uk-h4 uk-margin-remove">Смотреть</p>
								</div>
							</div>
							<p class="uk-popular-title uk-margin-small-top uk-text-uppercase"><a href="<?php echo (get_term_link( $catTerm->term_id )); ?>"><?php echo $catTerm->name;?>
							</a>
						</p>
					</div>
				</div>
				<?php } ?>
			</div> 
			<div uk-grid>
				<div class="uk-margin-medium-top uk-width-1-1@m uk-text-center">
					<a class="uk-catalog-front-page" href="<?php echo get_page_link( 6 ); ?>">Каталог товаров</a>
				</div>
			</div>
		</div>
	</section>
	<section class="uk-section uk-section-reviews">
		<div class="uk-container-expand">
			<div class="uk-margin-large-bottom" uk-grid> 
				<div class="uk-width-1-1 uk-text-center">
					<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
						<span> отзывы </span>
					</h2>				
				</div>
			</div>
		</div>
		<div class="uk-container">
			<div uk-grid>
				<div class="uk-width-1-1@m">
					<div class="uk-reviews-slider">
						<div class="uk-text-center">
							<figure>
								<img class="uk-margin-auto" src="<?php bloginfo('template_url') ?>/app/img/man-woman.png"  alt="">
								<figcaption class="uk-margin-medium-top">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus iure non tenetur rerum accusantium facere laboriosam, adipisci, repellendus sint quod. Doloribus alias voluptates unde in tenetur, quidem tempora provident eligendi.</p>
								</figcaption>
							</figure>
						</div>
						<div class="uk-text-center">
							<figure>
								<img class="uk-margin-auto" src="<?php bloginfo('template_url') ?>/app/img/man-woman.png"  alt="">
								<figcaption class="uk-margin-medium-top">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus iure non tenetur rerum accusantium facere laboriosam, adipisci, repellendus sint quod. Doloribus alias voluptates unde in tenetur, quidem tempora provident eligendi.</p>
								</figcaption>
							</figure>
						</div>
						<div class="uk-text-center">
							<figure>
								<img class="uk-margin-auto" src="<?php bloginfo('template_url') ?>/app/img/man-woman.png"  alt="">
								<figcaption class="uk-margin-medium-top">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus iure non tenetur rerum accusantium facere laboriosam, adipisci, repellendus sint quod. Doloribus alias voluptates unde in tenetur, quidem tempora provident eligendi.</p>
								</figcaption>
							</figure>
						</div>
						<div class="uk-text-center">
							<figure>
								<img class="uk-margin-auto" src="<?php bloginfo('template_url') ?>/app/img/man-woman.png"  alt="">
								<figcaption class="uk-margin-medium-top">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus iure non tenetur rerum accusantium facere laboriosam, adipisci, repellendus sint quod. Doloribus alias voluptates unde in tenetur, quidem tempora provident eligendi.</p>
								</figcaption>
							</figure>
						</div>
						<div class="uk-text-center">
							<figure>
								<img class="uk-margin-auto" src="<?php bloginfo('template_url') ?>/app/img/man-woman.png"  alt="">
								<figcaption class="uk-margin-medium-top">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus iure non tenetur rerum accusantium facere laboriosam, adipisci, repellendus sint quod. Doloribus alias voluptates unde in tenetur, quidem tempora provident eligendi.</p>
								</figcaption>
							</figure>
						</div>
						<div class="uk-text-center">
							<figure>
								<img class="uk-margin-auto" src="<?php bloginfo('template_url') ?>/app/img/man-woman.png"  alt="">
								<figcaption class="uk-margin-medium-top">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus iure non tenetur rerum accusantium facere laboriosam, adipisci, repellendus sint quod. Doloribus alias voluptates unde in tenetur, quidem tempora provident eligendi.</p>
								</figcaption>
							</figure>
						</div>
						<div class="uk-text-center">
							<figure>
								<img class="uk-margin-auto" src="<?php bloginfo('template_url') ?>/app/img/man-woman.png"  alt="">
								<figcaption class="uk-margin-medium-top">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus iure non tenetur rerum accusantium facere laboriosam, adipisci, repellendus sint quod. Doloribus alias voluptates unde in tenetur, quidem tempora provident eligendi.</p>
								</figcaption>
							</figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="uk-section uk-section-questions">
		<div class="uk-container-expand">
			<div class="uk-margin-medium-bottom" uk-grid> 
				<div class="uk-width-1-1 uk-text-center">
					<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
						<span> есть вопросы? </span>
					</h2>				
				</div>
			</div>
		</div>
		<div class="uk-container uk-container-small-600">
			<div uk-grid>
				<div class="uk-width-1-1@m uk-text-center uk-margin-medium-bottom">
					<p>Заполните контактную форму и мы обязательно на них ответим</p>
				</div>
			</div>
			<div class="uk-cntact-form-question">
				<?php echo do_shortcode( '[contact-form-7 id="39" title="questions"]' ); ?>
			</div>
		</div>
	</section>
	<section class="uk-section-reviews">
		<div class="uk-container-expand">
			<div class="uk-margin-large-bottom" uk-grid> 
				<div class="uk-width-1-1 uk-text-center">
					<h2 class="uk-heading-line uk-text-uppercase uk-text-bold-title">
						<span> как нас найти </span>
					</h2>				
				</div>
			</div>
			<div uk-grid>
				<div class="uk-width-1-1@m">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
