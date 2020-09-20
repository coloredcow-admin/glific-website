<?php
/**
 * File functions.php for theme glific
 *
 * @package glific
 */

	get_header();
?>

<div class="homepage">
	<?php $cover_section = get_field('cover_section'); ?>
	<div class="bg-theme-primary d-flex flex-column flex-xl-row align-items-center justify-content-xl-center pt-22 pb-22">
		<div class="w-328 w-md-625 w-xl-534 mr-xl-18 pt-xl-18">
			<h3 class="text-white fz-28 leading-33 fz-xl-36 leading-xl-43 font-heebo-regular"><?php echo $cover_section['content']; ?></h3>
			<div class="d-flex flex-column flex-md-row align-items-end justify-content-md-end justify-content-xl-start pr-7 mt-md-9.5 mt-xl-13.5">
				<a class="glific-button-border bg-theme-secondary py-4 w-170 fz-18 leading-27 text-center text-white font-heebo-bold mr-md-8 text-decoration-none" href="<?php echo $cover_section['link_first']['url']; ?>"><?php echo $cover_section['link_first']['text']; ?></a>
				<a class="glific-button-border bg-white  py-4 w-170 fz-18 leading-27 text-center text-theme-secondary font-heebo-bold mt-6 text-decoration-none mt-md-0" href="<?php echo $cover_section['link_second']['url']; ?>"><?php echo $cover_section['link_second']['text']; ?></a>
			</div>
		</div>
		<div class="w-328 w-md-625 w-xl-427 mt-n12 ml-xl-18">
			<img src="<?php echo $cover_section['image']; ?>" class="w-full">
		</div>
	</div>
	<?php $demo_section = get_field('demo_section');
		if (!empty($demo_section)) : ?>
	<div class="demo-section d-flex flex-column flex-md-row justify-content-md-between w-330 w-md-660 w-xl-880 mx-auto py-26">
		<div class="d-flex flex-column w-md-298">
			<h3 class="text-theme-primary font-heebo-regular fz-28 fz-md-36 leading-40 mb-0"><?php echo $demo_section['heading']; ?></h3>
			<p class="fz-18 leading-27 mb-0 font-heebo-regular text-theme-pewter mt-6"><?php echo $demo_section['sub_heading']; ?></p>
		</div>
		<div class="embed-responsive embed-responsive-16by9 border-3-pewter rounded-29 w-full w-md-336 w-xl-502 h-240 h-xl-362 mt-6 mt-md-0">
  			<iframe class="embed-responsive-item" src="<?php echo $demo_section['video']; ?>" allowfullscreen></iframe>
		</div>
	</div>
	<?php endif ; ?>

	<?php $glific_section = get_field('why_glific');
		if (!empty($glific_section )) : ?>
		<div class="why-glific pb-18 pb-md-23 pb-xl-26">
			<h3 class="text-theme-primary font-heebo-bold fz-28 fz-md-36 leading-40 mb-0 text-center mb-6 mb-md-14 mb-xl-18"><?php echo $glific_section['heading']; ?></h3>
			<div class="w-288 w-md-664 w-xl-878 mx-auto d-flex flex-column flex-md-row flex-md-wrap justify-content-md-between">
			<?php foreach ($glific_section['sections'] as $key => $section) :
				switch ($key) {
					case '0':
						$border_class = 'rounded-top-20 rounded-bottom-left-20';
						break;
					case '1':
						$border_class = 'rounded-top-20 rounded-bottom-right-20';
						$img_class = 'w-80';
						break;
					case '2':
						$border_class = 'rounded-bottom-20 rounded-top-left-20';
						break;
					case '3':
						$border_class = 'rounded-bottom-20 rounded-top-right-20';
						break;
				}
				?>
				<div class="d-flex flex-column flex-xl-row w-full w-md-310 w-xl-407 mb-10 justify-content-xl-between">
					<div>
						<img src="<?php echo $section['image'] ; ?>" class="h-md-90 <?php echo $img_class ; ?>">
					</div>
					<div class="d-flex flex-column mt-4 mt-xl-0 w-xl-288">
						<div class="border border-theme-primary border-5 py-4 px-5 d-flex flex-row position-relative bg-theme-gin <?php echo $border_class ; ?>">
							<h5 class="font-heebo-medium fz-21 leading-31 fz-xl-24 leading-xl-35 text-theme-mine-shaft"><?php echo $section['text'] ; ?></h5>
							<img src="<?php echo $section['sub_image'] ; ?>" class="mt-auto position-absolute right-0 bottom-0 mr-7 mb-5">
						</div>
						<div class="mt-4 mt-6 fz-18 leading-27 font-heebo-regular text-theme-mine-shaft pl-xl-6 text-theme-mine-shaft"><?php echo $section['content'] ; ?></div>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	<?php endif; ?>

	<?php $key_features = get_field('key_features');
		if (!empty($key_features)) : ?>
	<div class="key-features bg-theme-gin pt-10 pt-md-16 pt-xl-18 pb-xl-4 pb-md-14 pb-10">
		<h3 class="text-theme-primary font-heebo-bold fz-28 fz-md-36 leading-40 mb-0 text-center mb-6 mb-md-14 mb-xl-18"><?php echo $key_features['heading']; ?></h3>

		<div class="d-flex flex-column w-328 mx-auto w-md-737 w-xl-1044">
			<?php foreach ($key_features['sections'] as $key => $section) :
				switch ($key) {
					case '0':
						$class = 'rounded-top-30 rounded-bottom-right-30 pr-xl-20';
						break;
					case '1':
						$class = 'rounded-bottom-30 rounded-top-left-30 pl-xl-16 pr-xl-12';
						$img_class = 'w-80';
						break;
					case '2':
						$class = 'rounded-top-30 rounded-bottom-right-30 pr-xl-24';
						break;
					case '3':
						$class = 'rounded-bottom-30 rounded-top-left-30 pr-xl-12';
						break;
				}
				?>
			<div class="d-flex flex-column bg-white align-items-center px-7 mb-10 mb-xl-18 py-9 justify-content-md-between w-xl-936 <?php echo $class; ?> <?php echo $key % 2 == 0 ? 'flex-md-row-reverse' : 'flex-md-row ml-xl-auto' ;?>">
				<div class="h-138 w-md-238 w-xl-320">
					<img src="<?php echo $section['image'] ; ?>" class="h-full w-md-full">
				</div>
				<div class="d-flex flex-column w-md-384 w-xl-427 mt-6 mt-md-0">
					<h5 class="font-heebo-medium fz-24 leading-35"><?php echo $section['heading'] ; ?></h5>
					<p class="font-heebo-regular fz-18 leading-27 mb-0 mt-6"><?php echo $section['content'] ; ?></p>
				</div>
			</div>
			<?php endforeach ; ?>
		</div>
	</div>
	<?php endif; ?>
</div>
<?php
	get_footer();
