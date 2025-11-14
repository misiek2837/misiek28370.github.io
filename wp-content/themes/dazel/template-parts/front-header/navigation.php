<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-navigation  position-relative wp-block-kubio-navigation__outer <?php echo $component->printNavigationClasses(); ?> dazel-front-header__k__Gp3qTlxXlua-outer dazel-local-441-outer" data-kubio="kubio/navigation" id="navigation">
	<?php dazel_theme()->get('front-top-bar')->render(); ?>
	<div class="wp-block wp-block-kubio-navigation-section <?php echo$component->printNavLayoutType();?> position-relative wp-block-kubio-navigation-section__nav dazel-front-header__k__xLwdIMLPC_la-nav dazel-local-458-nav h-section h-navigation" data-kubio="kubio/navigation-section" data-kubio-component="navigation" data-kubio-settings="{&quot;sticky&quot;:{&quot;startAfterNode&quot;:{&quot;enabled&quot;:false},&quot;animations&quot;:{&quot;enabled&quot;:false,&quot;duration&quot;:0.5,&quot;name&quot;:&quot;slideDown&quot;}},&quot;overlap&quot;:false}">
		<div class="position-relative wp-block-kubio-navigation-section__nav-section dazel-front-header__k__xLwdIMLPC_la-nav-section dazel-local-458-nav-section    <?php echo $component->printContainerClasses(); ?>">
			<div class="wp-block wp-block-kubio-navigation-items  position-relative wp-block-kubio-navigation-items__outer dazel-front-header__k__DqcL_YF9LKJa-outer dazel-local-459-outer" data-kubio="kubio/navigation-items" data-nav-normal="true">
				<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container dazel-front-header__k__MqErEXZ17Jma-container dazel-local-460-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-2 gutters-row-v-md-0 gutters-row-2 gutters-row-v-0" data-kubio="kubio/row">
					<div class="position-relative wp-block-kubio-row__inner dazel-front-header__k__MqErEXZ17Jma-inner dazel-local-460-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-2 gutters-col-v-md-0 gutters-col-2 gutters-col-v-0">
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-front-header__k__SFXC9Ze09eua-container dazel-local-461-container d-flex h-col-lg-auto h-col-md-auto h-col" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dazel-front-header__k__SFXC9Ze09eua-inner dazel-local-461-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align dazel-front-header__k__SFXC9Ze09eua-align dazel-local-461-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
									<?php dazel_theme()->get('logo')->render(array (
  'wrapper_class' => 'wp-block wp-block-kubio-logo position-relative wp-block-kubio-logo__container  kubio-logo-direction-row dazel-front-header__k__0xSC3AT64a-container dazel-local--container',
  'logo_image_class' => 'position-relative wp-block-kubio-logo__image  kubio-logo-image  dazel-front-header__k__0xSC3AT64a-image dazel-local--image',
  'alt_logo_image_class' => 'position-relative wp-block-kubio-logo__alternateImage kubio-logo-image kubio-alternate-logo-image   dazel-front-header__k__0xSC3AT64a-alternateImage dazel-local--alternateImage',
  'logo_text_class' => 'position-relative wp-block-kubio-logo__text  dazel-front-header__k__0xSC3AT64a-text dazel-local--text',
)); ?>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  kubio-hide-on-mobile position-relative wp-block-kubio-column__container dazel-front-header__k__yggsFZEHrD5-container dazel-local-463-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dazel-front-header__k__yggsFZEHrD5-inner dazel-local-463-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align dazel-front-header__k__yggsFZEHrD5-align dazel-local-463-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
									<div class="wp-block wp-block-kubio-spacer  position-relative wp-block-kubio-spacer__container dazel-front-header__k__v1CqNCfOPQw-container dazel-local-464-container" data-kubio="kubio/spacer"></div>
								</div>
							</div>
						</div>
						<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-front-header__k__ZEkYpBrx7RAa-container dazel-local-465-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
							<div class="position-relative wp-block-kubio-column__inner dazel-front-header__k__ZEkYpBrx7RAa-inner dazel-local-465-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
								<div class="position-relative wp-block-kubio-column__align dazel-front-header__k__ZEkYpBrx7RAa-align dazel-local-465-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
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
