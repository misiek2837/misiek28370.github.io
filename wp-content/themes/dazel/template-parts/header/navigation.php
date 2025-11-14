<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> dazel-header__k__wlBbVRxhAbr-outer dazel-local-616-outer" data-kubio="kubio/navigation" id="navigation">
	<?php dazel_theme()->get('inner-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section <?php echo$component->printNavLayoutType();?> position-relative wp-block-kubio-navigation-section__nav dazel-header__k__Gz7DH2AHgDW-nav dazel-local-633-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0.5,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section dazel-header__k__Gz7DH2AHgDW-nav-section dazel-local-633-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer dazel-header__k__OFjHLg_kJqX-outer dazel-local-634-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container dazel-header__k__v8vh_nVKbZW-container dazel-local-635-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-2 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner dazel-header__k__v8vh_nVKbZW-inner dazel-local-635-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-2 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-header__k__AE2qknfaNz8-container dazel-local-636-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dazel-header__k__AE2qknfaNz8-inner dazel-local-636-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align dazel-header__k__AE2qknfaNz8-align dazel-local-636-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php dazel_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row dazel-header__k__e-Vpi4UuzFg-container dazel-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  dazel-header__k__e-Vpi4UuzFg-image dazel-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   dazel-header__k__e-Vpi4UuzFg-alternateImage dazel-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  dazel-header__k__e-Vpi4UuzFg-text dazel-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container dazel-header__k__NLcdB0FLjTm-container dazel-local-638-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dazel-header__k__NLcdB0FLjTm-inner dazel-local-638-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align dazel-header__k__NLcdB0FLjTm-align dazel-local-638-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container dazel-header__k__fdGSScztvBU-container dazel-local-639-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-header__k__vtz9z3gdYBZ-container dazel-local-640-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dazel-header__k__vtz9z3gdYBZ-inner dazel-local-640-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align dazel-header__k__vtz9z3gdYBZ-align dazel-local-640-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php dazel_theme()->get('header-menu')->render(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
