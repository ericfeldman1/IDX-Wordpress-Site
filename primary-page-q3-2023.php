<?php

/**
 * Template Name: Updated Enrollment Template - Q3 2023
 */

//  Dynamic Fields
$field = get_fields();
$case_type = $field['case_type'];
$hero_company_logo = $field['hero_company_logo'];
$hero_eyebrow = $field['hero_eyebrow'];
$hero_title = $field['hero_title'];
$hero_subtitle = $field['hero_subtitle'];
$hero_image_enrollment = $field['hero_image_enrollment'];
$hero_image_notification = $field['hero_image_notification'];
$hero_list = $field['hero_list'];
$hero_paragraph = $field['hero_paragraph'];
$pr_display = $field['display_press_release_section'];
$pr_title = $field['press_release_title'];
$pr_entries = $field['press_release'];
$display_press_release_next_steps_section = $field['display_press_release_next_steps_section'];
$pr_what_have_we_done_title = $field['press_release_-_what_have_we_done_-_title'];
$pr_what_have_we_done_content = $field['press_release_-_what_have_we_done_-_content'];
$pr_what_can_you_do_title = $field['press_release_-_what_can_you_do_-_title'];
$pr_what_can_you_do_content = $field['press_release_-_what_can_you_do_-_content'];
$pr_what_can_you_do_fine_print = $field['press_release_-_what_can_you_do_-_fine_print'];
$display_press_release_fine_print = $field['display_press_release_fine_print'];
$pr_fine_print = $field['press_release_fine_print'];
$features_display = $field['display_features_section'];
$features_title_plain = $field['features_title_-_plain'];
$features_title_blue_highlight = $field['features_title_-_blue_highlight'];
$features_subtitle = $field['features_subtitle'];
$features_list = $field['features_list'];
$features_list = $field['features_list'];
$cta_image_display = $field['display_cta_image_section'];
$cta_image_title = $field['cta_image_title'];
$cta_image_subtitle = $field['cta_image_subtitle'];
$display_faq = $field['display_faq'];
$display_faq_section_0 = $field['display_faq_section_0'];
$display_faq_section_1 = $field['display_faq_section_1'];
$display_faq_section_2 = $field['display_faq_section_2'];
$display_faq_section_3 = $field['display_faq_section_3'];
$faq_section_0_header = $field['faq_section_0_header'];
$faq_section_1_header = $field['faq_section_1_header'];
$faq_section_2_header = $field['faq_section_2_header'];
$faq_section_3_header = $field['faq_section_3_header'];
$faq_section_0 = $field['faq_section_0'];
$faq_section_1 = $field['faq_section_1'];
$faq_section_2 = $field['faq_section_2'];
$faq_section_3 = $field['faq_section_3'];
$display_additional_resources = $field['display_additional_resources'];
$additional_resources = $field['additional_resources'];

// Hero Image Dropdown
$hero_image_selected = '';

if ($case_type == "Enrollment") {
	if ($hero_image_enrollment  === 'business_man') {
		$hero_image_selected = 'https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/hero/business_man.png';
	} else if ($hero_image_enrollment  === 'woman_on_phone') {
		$hero_image_selected = 'https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/hero/woman_on_phone.png';
	} else if ($hero_image_enrollment  === 'older_woman_on_computer') {
		$hero_image_selected = 'https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/hero/older_woman_on_computer.png';
	}
}

if ($case_type == "Notification") {
	if ($hero_image_notification  === 'business_man_non_enrollment') {
		$hero_image_selected = 'https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/hero/business_man_non_enrollment.png';
	} else if ($hero_image_notification  === 'woman_on_phone_non_enrollment') {
		$hero_image_selected = 'https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/hero/woman_on_phone_non_enrollment.png';
	} else if ($hero_image_notification  === 'older_woman_on_computer_non_enrollment') {
		$hero_image_selected = 'https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/hero/older_woman_on_computer_non_enrollment.png';
	}
}

?>

<html class="scroll-smooth">

<head>
	<!-- CSS File -->
	<link rel='stylesheet' id='corporate-pro-css' href='https://dev.response.idx.us/wp-content/themes/corporate-pro/public/css/main.css' type='text/css' media='all' />

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700;800&display=swap" rel="stylesheet" />
	<!-- End Google Fonts-->

</head>

<body>
	<div id="app">

		<?php
		$languages = array();
		$all_languages = trp_custom_language_switcher();
		$selected_languages = $field['languages'];
		if (!empty($selected_languages) && !empty($all_languages)) {
			foreach ($selected_languages as $selected_language) {
				if (array_key_exists($selected_language->post_content, $all_languages)) {
					$languages[$selected_language->post_content] = $all_languages[$selected_language->post_content];
				}
			}
		}
		?>
		<?php if (count($languages) > 1) { ?>

			<div class="h-4 bg-fox-blue sticky top-0 z-50"></div>
			<nav class="js-idx-language-switcher idx-language-switcher" aria-label="Language Switcher">
				<div class="idx-language-switcher__label">
					Language
				</div>
				<div class="idx-language-switcher__toggle-and-list">
					<button class="js-idx-language-switcher-toggle idx-language-switcher__toggle" aria-expanded="false" aria-controls="idx-language-switcher-list" aria-label="Hide/Show Languages">
						<span data-no-translation><?= $languages[get_locale()]['language_name'] ?></span>
					</button>
					<ul id="idx-language-switcher-list" class="idx-language-switcher__list">
						<?php foreach ($languages as $language) { ?>
							<li class="idx-language-switcher__item">
								<a data-no-translation class="idx-language-switcher__link" href="<?= $language['current_page_url'] ?>">
									<?= $language['language_name'] ?>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</nav>
		<?php } ?>

		<header class="bg-faded-slate w-screen transition-transform duration-300">
			<div class="p-section pt-6 pb-12 xl:pt-12 xl:pb-16 relative">
				<div class="max-w-section">
					<div class="flex flex-col items-center xl:flex-row xl:justify-between mb-0 md:mb-4 xl:mb-0">
						<div class="h3 mb-4 xl:mb-0">
							<img class="h-[78px] xl:h-[112px]" src="https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/logos/IDX-Logo_ZF-tag_preferred_full-color.png" alt="IDX Logo">
						</div>
						<?php if ($case_type == "Enrollment") : ?>
							<a href="https://app.idx.us/account-creation/protect" class="group text-center xl:text-left">
								<div class="text-lg md:text-3xl xl:text-4xl">Received a breach letter?</div>
								<div class="text-lg md:text-3xl xl:text-4xl font-bold flex items-center">Enroll to secure your personal information<span class="pl-4"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37">
											<circle cx="18.5" cy="18.5" r="17.5" class="transition duration-500 ease-in-out stroke-2 stroke-cyber-blue fill-cyber-blue group-hover:fill-transparent"></circle>
											<path d="M19.62,23.54l5.04-5.04-5.04-5.04m-7.28,10.08l5.04-5.04-5.04-5.04" class="transition duration-500 ease-in-out fill-transparent stroke-2 stroke-white stroke-round group-hover:stroke-cyber-blue"></path>
										</svg></span></div>
							</a>
						<?php endif; ?>
						<div class="absolute m-auto left-0 right-0 -bottom-8 md:-bottom-12 text-center">
							<div class="bg-light-gray drop-shadow-md m-auto rounded-full inline-block px-2 sm:px-6 md:px-12 xl:px-16">
								<div class="flex justify-center items-center py-2 md:py-3">
									<div class="text-med-slate text-[9px] xs:text-[12px] md:text-[15px] font-bold mx-1 xs:mx-2 xl:mx-4 leading-[10px] xs:leading-[15px] sm:leading-[15px] md:leading-[15px] xl:leading-[20px]">TRUSTED<br>PRIVACY<br> PARTNER</div>
									<img class="h-[30px] md:h-[50px] 2xl:h-[60px] mx-1 xs:mx-2 xl:mx-4" src="https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/logos/FISMA_Badge.png" alt="FISMA">
									<img class="h-[30px] md:h-[50px] 2xl:h-[60px] mx-1 xs:mx-2 xl:mx-4" src="https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/logos/BBB_Badge.png" alt="BBB">
									<img class="h-[30px] md:h-[50px] 2xl:h-[60px] mx-1 xs:mx-2 xl:mx-4" src="https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/logos/SSL_Badge.png" alt="SSL">
									<img class="h-[30px] md:h-[50px] 2xl:h-[60px] mx-1 xs:mx-2 xl:mx-4" src="https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/logos/HIPAA_Badge.png" alt="HIPAA">
								</div>
							</div>
						</div>
					</div>
		</header>

		<section class="overflow-hidden my-section bg-white">
			<div class="p-section">
				<div class="max-w-section">
					<div class="grid grid-cols-4 gap-2.5 md:grid-cols-8 md:gap-4 xl:grid-cols-12 items-center">
						<div class="col-span-4 md:col-span-8 xl:col-span-6 2xl:col-start-2 2xl:col-span-5">
							<div class="mb-8">
								<?php if ($hero_company_logo) {
									echo '<img class="h-[130px] mb-4 xl:mb-8 object-contain" src="' . $hero_company_logo . '">';
								}; ?>

								<?php if ($hero_eyebrow) {
									echo '<div class="h7 mb-2">' . $$hero_eyebrow . '</div>';
								}; ?>

								<?php if ($hero_title) {
									echo '<h1 class="h3 mb-2">' . $hero_title . '</h1>';
								}; ?>
								<?php if ($hero_subtitle) {
									echo '<div class="h5 mb-4 md:mb-7 xl:mb-12">' . $hero_subtitle . '</div>';
								}; ?>

								<?php if ($case_type == "Enrollment") : ?>
									<animated-list class="">
										<ul class="" slot="body">
											<?php for ($i = 0; $i < count($hero_list); $i++) {
												if (strlen($hero_list[$i]['hero_list_item']) > 0) {
													echo '
										<li class="flex flex-row gap-4 p-0 text-base md:text-xl animate mb-5 md:mb-6 static">
											<svg viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 w-6 md:w-8 h-6 md:h-8 opacity-0 opacity-100">
												<g stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round" class="stroke-cyber-blue">
													<path d="M13 1C6.372583 1 1 6.372583 1 13s5.372583 12 12 12 12-5.372583 12-12S19.627417 1 13 1z" class="draw-circle"></path>
													<path d="M6.5 13.5L10 17 l8.808621-8.308621" class="draw-check"></path>
												</g>
											</svg>
											<span class="text-sm md:text-base">
											' . $hero_list[$i]['hero_list_item'] . '
											</span>
										</li>';
												}
											} ?>

										</ul>
									</animated-list>
								<?php elseif ($case_type == "Notification") : ?>
									<p class="text-sm md:text-base"><?= $hero_paragraph ?></p>
								<?php endif; ?>

								<div class="wp-block-buttons mt-8">
									<?php if ($case_type == "Enrollment") {
										echo '<div class="wp-block-button"><a href="https://app.idx.us/account-creation/protect" class="wp-block-button__link wp-element-button">ENROLL NOW</a></div>';
									}; ?>
									<div class="wp-block-button is-style-outline"><a href="#learn-more" class="wp-block-button__link wp-element-button">
											LEARN MORE
										</a></div>
								</div>
							</div>
						</div>
						<div class="col-span-4 md:col-span-8 xl:col-span-6 2xl:col-span-5">
							<picture><img decoding="async" loading="eager" src="<?php echo $hero_image_selected ?>" alt="Brand Protection Software" class="m-auto"></picture>
						</div>
					</div>
				</div>
			</div>
		</section>



		<?php if ($pr_display === true) : ?>
			<section class="overflow-hidden bg-white my-section">
				<div class="p-section">
					<div class="max-w-section">
						<div class="grid grid-cols-4 gap-2.5 md:grid-cols-8 md:gap-4 xl:grid-cols-12">
							<div class="col-span-4 md:col-span-8 xl:col-start-2 xl:col-span-10 bg-faded-slate rounded-lg py-12 md:py-20 xl:py-24 grid grid-cols-4 gap-2.5 md:grid-cols-8 md:gap-4 xl:grid-cols-10">

								<div class="col-span-4 md:col-span-1 md:col-start-1">
									<div class="border-l-5 border-cyber-blue h-full"></div>
								</div>

								<div class=" border-l-5 border-l-cyber-blue md:border-l-0 px-5 md:px-0 col-span-4 md:col-start-2 md:col-span-6 xl:col-start-2 xl:col-span-8">
									<div class="h3"><?php echo $pr_title ?></div>
								</div>
								<div class="px-5 md:px-0 col-span-4 md:col-start-2 md:col-span-6 xl:col-start-2 xl:col-span-8 mt-8 md:mt-10 xl:mt-12">
									<?php for ($i = 0; $i < count($pr_entries); $i++) {
										echo '<div class="text-sm md:text-base xl:text-xl mb-8 md:mb-10 xl:mb-12">
								<div class="font-bold">' . $pr_entries[$i]['entry_date'] . '</div>
								<div>' . $pr_entries[$i]['entry_content'] . '</div>
							</div>';
									} ?>
								</div>
								<?php if ($display_press_release_next_steps_section === true) {
									echo '
								<div class="mx-5 md:mx-0 col-span-4 md:col-start-2 md:col-span-6 xl:col-start-2 xl:col-span-8 xl:gap-5 2xl:gap-9 xl:grid grid-cols-2 pt-7 md:pt-12 border-t-2  border-light-slate border-dotted">
						<div class="xl:pt-8 2xl:pt-11">
							<div class="text-base md:text-lg xl:text-xl font-bold mb-3">' . $pr_what_have_we_done_title . '</div>
							<div class="text-sm xl:text-base mb-7 xl:mb-0">' . $pr_what_have_we_done_content . '</div>
						</div>
						<div>
							<div class="bg-faded-cyber text-white rounded-[38px] px-7 py-7 md:px-10 md:py-8 2xl:py-11 2xl:px-14 drop-shadow-md">
								<div class="text-base md:text-lg xl:text-xl font-bold  2xl:pr-28 mb-3">' . $pr_what_can_you_do_title . '</div>
								<div class="text-sm xl:text-base mb-2.5 md:mb-5">' . $pr_what_can_you_do_content . '</div>
								<div class="text-xs xl:text-sm text-light-slate">' . $pr_what_can_you_do_fine_print . '
								</div>
							</div>
						</div></div>';
								} ?>
								<?php if ($display_press_release_fine_print === true) {
									echo '<div class="px-5 md:px-0 col-span-4 md:col-start-2 md:col-span-6 xl:col-start-2 xl:col-span-8">
							<div class="text-xs pt-6 md:pt-8 xl:pt-12">
							' . $pr_fine_print . '
							</div>
						</div>';
								} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php if ($features_display === true) : ?>

			<section class="relative bg-light-gray p-section mt-section py-section">
				<div class="max-w-section relative">
					<div class="grid grid-cols-4 gap-2.5 md:gap-4 md:grid-cols-8 xl:grid-cols-12">
						<div class="col-span-4 md:col-span-8 xl:col-span-10 xl:col-start-2 2xl:col-span-8 2xl:col-start-3 text-center">
							<div class="text-7xl md:text-13xl lg:text-15xl font-extrabold mb-4"><?php echo $features_title_plain ?><span class="bg-cyber-blue inline px-4 box-decoration-clone leading-[55px] md:leading-[85px] lg:leading-[95px]"><?php echo $features_title_blue_highlight ?></span></div>
							<p class="mb-8 xl:mb-16"><?php echo $features_subtitle ?></p>
						</div>
					</div>
					<div class="grid gap-2.5 grid-cols-4 md:gap-4 md:grid-cols-8 xl:grid-cols-12">
						<div class="col-span-4 md:col-span-8 xl:col-span-12 2xl:col-span-10 2xl:col-start-2">
							<div class="grid md:grid-cols-2 xl:grid-cols-3 gap-x-4 xl:gap-x-12 gap-y-9 md:gap-y-12">
								<?php for ($i = 0; $i < count($features_list); $i++) {
									echo '<div><img loading="lazy" data-src="' . $features_list[$i]['icon'] . '" alt="' . $features_list[$i]['icon'] . '" width="54" height="48" class="lazy mb-4" src="' . $features_list[$i]['icon'] . '">
							<h4 class="text-2xl md:text-5xl xl:text-6xl mb-2 font-extrabold">' . $features_list[$i]['title'] . '</h4>
							<p class="text-sm md:text-base">
							' . $features_list[$i]['text'] . '
							</p>
						</div>';
								} ?>
							</div>
						</div>
					</div>
				</div>
				<?php if ($case_type == "Enrollment") {
					echo '<div class="wp-block-button text-center mt-12 xl:mt-16"><a href="https://app.idx.us/account-creation/protect" class="wp-block-button__link wp-element-button">ENROLL NOW</a></div>';
				}; ?>
			</section>
		<?php endif; ?>

		<?php if ($display_faq === true || $display_additional_resources == true) : ?>
			<section class="my-section">
				<div class="p-section">
					<div class="max-w-section">
						<div class="grid gap-2.5 grid-cols-4 md:gap-4 md:grid-cols-8 xl:grid-cols-12">
							<div class="col-span-4 md:col-span-8 xl:col-span-12 2xl:col-span-10 2xl:col-start-2">
								<div class="h4 mb-10 xl:mb-14 text-center scroll-mt-4 md:scroll-mt-8" id="learn-more">Learn More</div>
								<?php if ($display_faq === true && $display_additional_resources == true) : ?>
									<tabs class="" :tab-list="['FAQ', 'ADDITIONAL RESOURCES']">
										<template v-slot:tabpanel-1>
										<?php endif; ?>
										<?php if ($display_faq === true) : ?>
											<div class="h4 mb-8 md:mb-10 xl:mb-14">Frequently Asked Questions</div>
											<div class="xl:grid<?php if ($faq_section_2_header !== '' || $faq_section_3_header !== '') {
																	echo ' xl:grid-cols-2 ';
																} ?>gap-16">
												<div class="xl:col-start-1 xl:col-span-1 mb-8 md:mb-12 xl:mb-0">
													<?php if ($display_faq_section_0 === true) : ?>
														<div class="h6 pb-4 mb-4 border-b-2 border-light-slate"><?= $faq_section_0_header ?></div>
														<accordion-0 class=" faq-full-0  mb-8 md:mb-12" :data='<?php echo json_encode($faq_section_0, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>
														</accordion-0>
													<?php endif; ?>

													<?php if ($display_faq_section_1 === true) : ?>
														<div class="h6 pb-4 mb-4 border-b-2 border-light-slate"><?= $faq_section_1_header ?></div>
														<accordion-1 class="faq-full-1 mb-8 md:mb-12" :data='<?php echo json_encode($faq_section_1, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>
														</accordion-1>
													<?php endif; ?>
												</div>
												<div class="xl:col-start-2 xl:col-span-1">
													<?php if ($display_faq_section_2 === true) : ?>
														<div class="h6 pb-4 mb-4 border-b-2 border-light-slate"><?= $faq_section_2_header ?></div>
														<accordion-2 class=" faq-full-2  mb-8 md:mb-12" :data='<?php echo json_encode($faq_section_2, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>
														</accordion-2>
													<?php endif; ?>

													<?php if ($display_faq_section_3 === true) : ?>
														<div class="h6 pb-4 mb-4 border-b-2 border-light-slate"><?= $faq_section_3_header ?></div>
														<accordion-3 class="faq-full-3" :data='<?php echo json_encode($faq_section_3, JSON_HEX_APOS | JSON_HEX_QUOT); ?>'>
														</accordion-3>
													<?php endif; ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if ($display_faq === true && $display_additional_resources == true) : ?>
										</template>
										<template v-slot:tabpanel-2>
										<?php endif; ?>
										<?php if ($display_additional_resources === true) : ?>
											<div class="xl:grid xl:gap-4 xl:grid-cols-12 2xl:grid-cols-10">
												<div class="xl:col-span-10 xl:col-start-2 2xl:col-span-8 2xl:col-start-2">
													<div class="h4 mb-8 md:mb-10 xl:mb-14">Additional Resources</div>
													<?php for ($i = 0; $i < count($additional_resources); $i++) {
														echo '<div class="pb-4 md:pb-8 xl:pb-12 mb-4 md:mb-8 xl:mb-12 border-b-2 border-gray border-dotted"><div class="h6 mb-4 md:mb-5">' . $additional_resources[$i]['title'] . '</div>
								<div class="text-sm md:text-base">' . $additional_resources[$i]['content'] . '</div>
							</div>';
													} ?>
												</div>
											</div>
										<?php endif; ?>
										<?php if ($display_faq === true && $display_additional_resources == true) : ?>
										</template>
									</tabs>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<?php if ($cta_image_display === true) : ?>
			<section class="bg-cover bg-center from-black" style="background-image: linear-gradient(to bottom, rgba(19, 30, 41, 0.30), rgba(29, 60, 71, 0.30)), url(&quot;https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/Enrollment_image.png&quot;);">
				<div class="p-section py-14 xl:py-24 2xl:py-32">
					<div class="max-w-section">
						<div class="text-center grid grid-cols-4 gap-2.5 md:gap-4 md:grid-cols-8 xl:grid-cols-12">
							<div class="col-span-4 md:col-start-2 md:col-span-6 xl:col-start-2 xl:col-span-10 2xl:col-start-3 2xl:col-span-8">
								<div class="text-white text-7xl md:text-11xl xl:text-12xl font-extrabold mb-3.5"><?php echo $cta_image_title ?></div>
								<div class="text-white text-base md:text-xl mb-6 md:mb-7 xl:mb-11"><?php echo $cta_image_subtitle ?></div>
								<?php if ($case_type == "Enrollment") {
									echo '<div class="wp-block-button"><a href="https://app.idx.us/account-creation/protect" class="wp-block-button__link wp-element-button">ENROLL NOW</a></div>';
								} ?>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php endif; ?>

		<footer class="bg-black from-black">
			<div class="p-section">
				<div class="max-w-section">
					<div class="h-[250px] sm:h-[200px] flex flex-col sm:flex-row justify-center items-center">
						<a class="my-2 mx-4 xl:mx-8" href=""><img class="h-[58px] " src="https://dev.response.idx.us/wp-content/themes/corporate-pro/src/img/logos/IDX-Mark.svg" alt="IDX Logo"></a>
						<a class="anchor-link-dark my-2 mx-4 xl:mx-8" href="https://www.idx.us/privacy-policy">Privacy Policy</a>
						<a class="anchor-link-dark my-2 mx-4 xl:mx-8" href="https://www.idx.us/terms-and-conditions">Terms of Use</a>
						<a class="anchor-link-dark my-2 mx-4 xl:mx-8" href="https://app.idx.us/en-US/login">Login</a>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<!-- Vue CDN -->
	<script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
	<script src="https://dev.response.idx.us/wp-content/themes/corporate-pro/src/js/app.js"></script>
</body>


<script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
<script>
	$( document ).ready( function () {
		$( '.js-idx-language-switcher' ).each( function () {
			var $switcher = $( this );
			var $switcherToggle = $( '.js-idx-language-switcher-toggle', $switcher );
			$switcherToggle.on( 'click', function () {
				$switcher.toggleClass( 'idx-language-switcher--expanded' );
				if ( $switcher.hasClass( 'idx-language-switcher--expanded' ) ) {
					$switcherToggle.attr( 'aria-expanded', 'true' );
				} else {
					$switcherToggle.attr( 'aria-expanded', 'false' );
				}
			} );
			$( document ).on( 'click', function ( event ) {
				if ( $switcher.has( event.target ).length === 0 ) {
					$switcher.removeClass( 'idx-language-switcher--expanded' );
					$switcherToggle.attr( 'aria-expanded', 'false' );
				}
			} );
		} );
	} );

</script>
