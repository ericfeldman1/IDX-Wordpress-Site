<?php // This is a custom language switcher for TranslatePress (more info: https://translatepress.com/docs/developers/custom-language-switcher/) ?>

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

	<style>
		.idx-language-switcher {
			position: absolute;
			top: calc(100%);
			right: 0;
			border-radius: 0 0 10px 10px;
			background: #fff;
			padding: 5px 10px;
			border: 1px solid rgba(198, 202, 206, 0.3);
			border-top: none;
			display: flex;
			align-items: center;
			min-width: 200px;
		}
		/*
		@media (max-width: 768px) {
			.idx-language-switcher {
				width: 150px;
			}
		}
		*/
		.idx-language-switcher--expanded {
			border-radius: 0;
		}
			.idx-language-switcher__label {
				padding-right: 10px;
				font-size: 1.1rem;
				color: #4d5968;
				text-decoration: none;
				line-height: 1.1;
				font-weight: 600;
			}
			.idx-language-switcher__toggle-and-list {
				flex-grow: 1;
			}
				button.idx-language-switcher__toggle {
					text-align: left;
					text-transform: uppercase;
					font-size: 1.2rem;
					display: block;
					width: 100%;
					border-radius: 6px;
					padding: 10px 30px 7px 15px;
					border: 0;
					background-color: #e0e6ed;
					background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 15 9'%3E%3Cpath d='M2.21.1,7.5,5.43,12.8.1l1.72,1.73L7.5,8.9l-7-7.07Z' style='fill:%23151348;fill-rule:evenodd'/%3E%3C/svg%3E");
					background-repeat: no-repeat;
					background-position: right 10px center;
					background-size: 10px 6px;
					color: #151348;
					line-height: 1.1;
					height: auto;
					transition: none !important;
					box-shadow: none;
					outline: none;
					text-transform: none;
				}
				.idx-language-switcher--expanded button.idx-language-switcher__toggle {
					//border-radius: 0 0 10px 10px;
				}
				/*
				@media (max-width: 768px) {
					button.idx-language-switcher__toggle {
						padding: 8px 10px;
						font-size: 1.2rem;
					}
				}
				*/
				.idx-language-switcher__list {
					position: absolute;
					left: -1px;
					right: -1px;
					top: calc(100% - 1px);
					list-style: none;
					padding: 0;
					margin: 0;
					display: none;
				}
				.idx-language-switcher--expanded .idx-language-switcher__list {
					display: block;
					background-color: #fff;
					border-radius: 0 0 10px 10px;
					border: 1px solid rgba(198, 202, 206, 0.3);
					border-top: none;
					padding: 10px 0;
				}
					.idx-language-switcher__item {
						
					}
						a.idx-language-switcher__link {
							text-align: center;
							display: block;
							font-size: 1.4rem;
							color: #4d5968;
							text-decoration: none;
							line-height: 1.1;
							padding: 5px 20px;
							font-weight: 600;
						}
							a.idx-language-switcher__link:hover,
							a.idx-language-switcher__link:active,
							a.idx-language-switcher__link:focus {
								color: #009cff;
							}
	</style>
	<?php // NOTE: `data-no-translation` tells TranslatePress to ignore this element (more info: https://translatepress.com/docs/developers/exclude-certain-text-or-element-from-being-translated/) ?>
	<nav class="js-idx-language-switcher idx-language-switcher" aria-label="Language Switcher">
		<div class="idx-language-switcher__label">
			Language
		</div>
		<div class="idx-language-switcher__toggle-and-list">
			<button class="js-idx-language-switcher-toggle idx-language-switcher__toggle" aria-expanded="false" aria-controls="idx-language-switcher-list" aria-label="Hide/Show Languages">
				<span data-no-translation><?=$languages[get_locale()]['language_name']?></span>
			</button>
			<ul id="idx-language-switcher-list" class="idx-language-switcher__list">
				<?php foreach ($languages as $language) { ?>
					<li class="idx-language-switcher__item">
						<a data-no-translation class="idx-language-switcher__link" href="<?=$language['current_page_url']?>">
							<?=$language['language_name']?>
						</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	</nav>
	
	<script>
		$(document).ready(function() {
			$('.js-idx-language-switcher').each(function() {
				var $switcher = $(this);
				var $switcherToggle = $('.js-idx-language-switcher-toggle', $switcher);
				$switcherToggle.on('click', function() {
					$switcher.toggleClass('idx-language-switcher--expanded');
					if ($switcher.hasClass('idx-language-switcher--expanded')) {
						$switcherToggle.attr('aria-expanded', 'true');
					} else {
						$switcherToggle.attr('aria-expanded', 'false');
					}
				});
				$(document).on('click', function(event) {
					if ($switcher.has(event.target).length === 0) {
						$switcher.removeClass('idx-language-switcher--expanded');
						$switcherToggle.attr('aria-expanded', 'false');
					}
				});
			});
		});
	</script>

<?php } ?>
