<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer dazel-index__k__1MCYzfcZN-outer dazel-local-719-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner dazel-index__k__1MCYzfcZN-inner dazel-local-719-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container dazel-index__k__baLWB4dRKjp-container dazel-local-720-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-3" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner dazel-index__k__baLWB4dRKjp-inner dazel-local-720-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-3">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-index__k__kxeqsSpdy-n-container dazel-local-721-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner dazel-index__k__kxeqsSpdy-n-inner dazel-local-721-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-2 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align dazel-index__k__kxeqsSpdy-n-align dazel-local-721-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container dazel-index__k__CtKC_EuIZL-container dazel-local-722-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container dazel-index__k__vrf0UGkWrN-container dazel-local-723-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:&quot;1&quot;,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner dazel-index__k__vrf0UGkWrN-inner dazel-local-723-inner h-row">
										<?php dazel_theme()->get('archive-loop')->render(array (
  'view' => 'content/index/loop-item',
)); ?>
									</div>
								</div>
								<?php if(dazel_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container dazel-index__k__vD7AVCTELY-container dazel-local-732-container gutters-row-lg-2 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner dazel-index__k__vD7AVCTELY-inner dazel-local-732-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-2 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-index__k__tBYU0uM8Xx-container dazel-local-733-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner dazel-index__k__tBYU0uM8Xx-inner dazel-local-733-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align dazel-index__k__tBYU0uM8Xx-align dazel-local-733-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(dazel_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing dazel-index__k__ELgmeRXRD--spacing dazel-local-734-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer dazel-index__k__ELgmeRXRD--outer dazel-local-734-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link dazel-index__k__ELgmeRXRD--link dazel-local-734-link h-w-100 h-global-transition" href="<?php dazel_get_navigation_button_link(true); ?>">
																<span class="h-svg-icon wp-block-kubio-pagination-nav-button__icon dazel-index__k__ELgmeRXRD--icon dazel-local-734-icon" name="icons8-line-awesome/angle-left">
																	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="angle-left" viewBox="0 0 512 545.5">
																		<path d="M304.5 100.5l23 23L163 288l164.5 164.5-23 23-176-176-11-11.5 11-11.5z"/></svg>
																	</span>
																	<span class="position-relative wp-block-kubio-pagination-nav-button__text dazel-index__k__ELgmeRXRD--text dazel-local-734-text kubio-inherit-typography">
																		<?php esc_html_e('Previous', 'dazel'); ?>
																	</span>
																</a>
															</span>
														</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
											<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-index__k__P2OarhUKUK-container dazel-local-735-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
												<div class="position-relative wp-block-kubio-column__inner dazel-index__k__P2OarhUKUK-inner dazel-local-735-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
													<div class="position-relative wp-block-kubio-column__align dazel-index__k__P2OarhUKUK-align dazel-local-735-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
														<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer dazel-index__k__tRiQFlrj8q-outer dazel-local-736-outer" data-kubio="kubio/pagination-numbers">
															<?php dazel_pagination_numbers(); ?>
														</div>
													</div>
												</div>
											</div>
											<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container dazel-index__k__2nd5yuWmz9-container dazel-local-737-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
												<div class="position-relative wp-block-kubio-column__inner dazel-index__k__2nd5yuWmz9-inner dazel-local-737-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
													<div class="position-relative wp-block-kubio-column__align dazel-index__k__2nd5yuWmz9-align dazel-local-737-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
														<?php if(dazel_has_pagination_button()): ?>
														<div class="position-relative wp-block-kubio-pagination-nav-button__spacing dazel-index__k__wM7T4gIh3-spacing dazel-local-738-spacing">
															<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer dazel-index__k__wM7T4gIh3-outer dazel-local-738-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
																<a class="position-relative wp-block-kubio-pagination-nav-button__link dazel-index__k__wM7T4gIh3-link dazel-local-738-link h-w-100 h-global-transition" href="<?php dazel_get_navigation_button_link(); ?>">
																	<span class="position-relative wp-block-kubio-pagination-nav-button__text dazel-index__k__wM7T4gIh3-text dazel-local-738-text kubio-inherit-typography">
																		<?php esc_html_e('Next', 'dazel'); ?>
																	</span>
																	<span class="h-svg-icon wp-block-kubio-pagination-nav-button__icon dazel-index__k__wM7T4gIh3-icon dazel-local-738-icon" name="ionicons/ios-arrow-right"></span>
																</a>
															</span>
														</div>
														<?php endif; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
