<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Test Product</title>
  <meta name="robots" content="max-image-preview:large" />
  <link type="image/x-icon" rel="icon" href="{{asset('assets/images/common/logo.png')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" />

  <style>
    img.wp-smiley,
    img.emoji {
      display: inline !important;
      border: none !important;
      box-shadow: none !important;
      height: 1em !important;
      width: 1em !important;
      margin: 0 0.07em !important;
      vertical-align: -0.1em !important;
      background: none !important;
      padding: 0 !important;
    }
  </style>
  <link rel="stylesheet" id="astra-theme-css-css" href="{{asset('admin_assets/main.min.css')}}" media="all" />
  <style id="astra-theme-css-inline-css">
    :root {
      --ast-container-default-xlg-padding: 3em;
      --ast-container-default-lg-padding: 3em;
      --ast-container-default-slg-padding: 2em;
      --ast-container-default-md-padding: 3em;
      --ast-container-default-sm-padding: 3em;
      --ast-container-default-xs-padding: 2.4em;
      --ast-container-default-xxs-padding: 1.8em;
      --ast-code-block-background: #eceff3;
      --ast-comment-inputs-background: #f9fafb;
    }

    html {
      font-size: 100%;
    }

    a {
      color: var(--ast-global-color-0);
    }

    a:hover,
    a:focus {
      color: var(--ast-global-color-1);
    }

    body,
    button,
    input,
    select,
    textarea,
    .ast-button,
    .ast-custom-button {
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto,
        Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
      font-weight: 400;
      font-size: 16px;
      font-size: 1rem;
      line-height: 1.6em;
    }

    blockquote {
      color: var(--ast-global-color-3);
    }

    h1,
    .entry-content h1,
    h2,
    .entry-content h2,
    h3,
    .entry-content h3,
    h4,
    .entry-content h4,
    h5,
    .entry-content h5,
    h6,
    .entry-content h6,
    .site-title,
    .site-title a {
      font-weight: 600;
    }

    .site-title {
      font-size: 26px;
      font-size: 1.625rem;
      display: block;
    }

    .site-header .site-description {
      font-size: 15px;
      font-size: 0.9375rem;
      display: none;
    }

    .entry-title {
      font-size: 26px;
      font-size: 1.625rem;
    }

    h1,
    .entry-content h1 {
      font-size: 40px;
      font-size: 2.5rem;
      font-weight: 600;
      line-height: 1.4em;
    }

    h2,
    .entry-content h2 {
      font-size: 32px;
      font-size: 2rem;
      font-weight: 600;
      line-height: 1.25em;
    }

    h3,
    .entry-content h3 {
      font-size: 26px;
      font-size: 1.625rem;
      font-weight: 600;
      line-height: 1.2em;
    }

    h4,
    .entry-content h4 {
      font-size: 24px;
      font-size: 1.5rem;
      line-height: 1.2em;
      font-weight: 600;
    }

    h5,
    .entry-content h5 {
      font-size: 20px;
      font-size: 1.25rem;
      line-height: 1.2em;
      font-weight: 600;
    }

    h6,
    .entry-content h6 {
      font-size: 16px;
      font-size: 1rem;
      line-height: 1.25em;
      font-weight: 600;
    }

    ::selection {
      background-color: var(--ast-global-color-0);
      color: #ffffff;
    }

    body,
    h1,
    .entry-title a,
    .entry-content h1,
    h2,
    .entry-content h2,
    h3,
    .entry-content h3,
    h4,
    .entry-content h4,
    h5,
    .entry-content h5,
    h6,
    .entry-content h6 {
      color: var(--ast-global-color-3);
    }

    .tagcloud a:hover,
    .tagcloud a:focus,
    .tagcloud a.current-item {
      color: #ffffff;
      border-color: var(--ast-global-color-0);
      background-color: var(--ast-global-color-0);
    }

    input:focus,
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="password"]:focus,
    input[type="reset"]:focus,
    input[type="search"]:focus,
    textarea:focus {
      border-color: var(--ast-global-color-0);
    }

    input[type="radio"]:checked,
    input[type="reset"],
    input[type="checkbox"]:checked,
    input[type="checkbox"]:hover:checked,
    input[type="checkbox"]:focus:checked,
    input[type="range"]::-webkit-slider-thumb {
      border-color: var(--ast-global-color-0);
      background-color: var(--ast-global-color-0);
      box-shadow: none;
    }

    .site-footer a:hover+.post-count,
    .site-footer a:focus+.post-count {
      background: var(--ast-global-color-0);
      border-color: var(--ast-global-color-0);
    }

    .single .nav-links .nav-previous,
    .single .nav-links .nav-next {
      color: var(--ast-global-color-0);
    }

    .entry-meta,
    .entry-meta * {
      line-height: 1.45;
      color: var(--ast-global-color-0);
    }

    .entry-meta a:hover,
    .entry-meta a:hover *,
    .entry-meta a:focus,
    .entry-meta a:focus *,
    .page-links>.page-link,
    .page-links .page-link:hover,
    .post-navigation a:hover {
      color: var(--ast-global-color-1);
    }

    #cat option,
    .secondary .calendar_wrap thead a,
    .secondary .calendar_wrap thead a:visited {
      color: var(--ast-global-color-0);
    }

    .secondary .calendar_wrap #today,
    .ast-progress-val span {
      background: var(--ast-global-color-0);
    }

    .secondary a:hover+.post-count,
    .secondary a:focus+.post-count {
      background: var(--ast-global-color-0);
      border-color: var(--ast-global-color-0);
    }

    .calendar_wrap #today>a {
      color: #ffffff;
    }

    .page-links .page-link,
    .single .post-navigation a {
      color: var(--ast-global-color-0);
    }

    .ast-archive-title {
      color: var(--ast-global-color-2);
    }

    .widget-title,
    .widget .wp-block-heading {
      font-size: 22px;
      font-size: 1.375rem;
      color: var(--ast-global-color-2);
    }

    .ast-single-post .entry-content a,
    .ast-comment-content a:not(.ast-comment-edit-reply-wrap a) {
      text-decoration: underline;
    }

    .ast-single-post .wp-block-button .wp-block-button__link,
    .ast-single-post .elementor-button-wrapper .elementor-button,
    .ast-single-post .entry-content .uagb-tab a,
    .ast-single-post .entry-content .uagb-ifb-cta a,
    .ast-single-post .entry-content .wp-block-uagb-buttons a,
    .ast-single-post .entry-content .uabb-module-content a,
    .ast-single-post .entry-content .uagb-post-grid a,
    .ast-single-post .entry-content .uagb-timeline a,
    .ast-single-post .entry-content .uagb-toc__wrap a,
    .ast-single-post .entry-content .uagb-taxomony-box a,
    .ast-single-post .entry-content .woocommerce a,
    .entry-content .wp-block-latest-posts>li>a,
    .ast-single-post .entry-content .wp-block-file__button {
      text-decoration: none;
    }

    a:focus-visible,
    .ast-menu-toggle:focus-visible,
    .site .skip-link:focus-visible,
    .wp-block-loginout input:focus-visible,
    .wp-block-search.wp-block-search__button-inside .wp-block-search__inside-wrapper,
    .ast-header-navigation-arrow:focus-visible,
    .woocommerce .wc-proceed-to-checkout>.checkout-button:focus-visible,
    .woocommerce .woocommerce-MyAccount-navigation ul li a:focus-visible,
    .ast-orders-table__row .ast-orders-table__cell:focus-visible,
    .woocommerce .woocommerce-order-details .order-again>.button:focus-visible,
    .woocommerce .woocommerce-message a.button.wc-forward:focus-visible,
    .woocommerce #minus_qty:focus-visible,
    .woocommerce #plus_qty:focus-visible,
    a#ast-apply-coupon:focus-visible,
    .woocommerce .woocommerce-info a:focus-visible,
    .woocommerce .astra-shop-summary-wrap a:focus-visible,
    .woocommerce a.wc-forward:focus-visible,
    #ast-apply-coupon:focus-visible,
    .woocommerce-js .woocommerce-mini-cart-item a.remove:focus-visible {
      outline-style: dotted;
      outline-color: inherit;
      outline-width: thin;
      border-color: transparent;
    }

    input:focus,
    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="url"]:focus,
    input[type="password"]:focus,
    input[type="reset"]:focus,
    input[type="search"]:focus,
    input[type="number"]:focus,
    textarea:focus,
    .wp-block-search__input:focus,
    [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal:focus,
    .ast-mobile-popup-drawer.active .menu-toggle-close:focus,
    .woocommerce-ordering select.orderby:focus,
    #ast-scroll-top:focus,
    #coupon_code:focus,
    .woocommerce-page #comment:focus,
    .woocommerce #reviews #respond input#submit:focus,
    .woocommerce a.add_to_cart_button:focus,
    .woocommerce .button.single_add_to_cart_button:focus,
    .woocommerce .woocommerce-cart-form button:focus,
    .woocommerce .woocommerce-cart-form__cart-item .quantity .qty:focus,
    .woocommerce .woocommerce-billing-fields .woocommerce-billing-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
    .woocommerce #order_comments:focus,
    .woocommerce #place_order:focus,
    .woocommerce .woocommerce-address-fields .woocommerce-address-fields__field-wrapper .woocommerce-input-wrapper>.input-text:focus,
    .woocommerce .woocommerce-MyAccount-content form button:focus,
    .woocommerce .woocommerce-MyAccount-content .woocommerce-EditAccountForm .woocommerce-form-row .woocommerce-Input.input-text:focus,
    .woocommerce .ast-woocommerce-container .woocommerce-pagination ul.page-numbers li a:focus,
    body #content .woocommerce form .form-row .select2-container--default .select2-selection--single:focus,
    #ast-coupon-code:focus,
    .woocommerce.woocommerce-js .quantity input[type="number"]:focus,
    .woocommerce-js .woocommerce-mini-cart-item .quantity input[type="number"]:focus,
    .woocommerce p#ast-coupon-trigger:focus {
      border-style: dotted;
      border-color: inherit;
      border-width: thin;
      outline-color: transparent;
    }

    .ast-logo-title-inline .site-logo-img {
      padding-right: 1em;
    }

    .ast-page-builder-template .hentry {
      margin: 0;
    }

    .ast-page-builder-template .site-content>.ast-container {
      max-width: 100%;
      padding: 0;
    }

    .ast-page-builder-template .site-content #primary {
      padding: 0;
      margin: 0;
    }

    .ast-page-builder-template .no-results {
      text-align: center;
      margin: 4em auto;
    }

    .ast-page-builder-template .ast-pagination {
      padding: 2em;
    }

    .ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
      margin-top: 0;
    }

    .ast-page-builder-template .entry-header.ast-header-without-markup {
      margin-top: 0;
      margin-bottom: 0;
    }

    .ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
      margin-bottom: 0;
    }

    .ast-page-builder-template.single .post-navigation {
      padding-bottom: 2em;
    }

    .ast-page-builder-template.single-post .site-content>.ast-container {
      max-width: 100%;
    }

    .ast-page-builder-template .entry-header {
      margin-top: 2em;
      margin-left: auto;
      margin-right: auto;
    }

    .ast-page-builder-template .ast-archive-description {
      margin: 2em auto 0;
      padding-left: 20px;
      padding-right: 20px;
    }

    .ast-page-builder-template .ast-row {
      margin-left: 0;
      margin-right: 0;
    }

    .single.ast-page-builder-template .entry-header+.entry-content {
      margin-bottom: 2em;
    }

    @media (min-width: 921px) {

      .ast-page-builder-template.archive.ast-right-sidebar .ast-row article,
      .ast-page-builder-template.archive.ast-left-sidebar .ast-row article {
        padding-left: 0;
        padding-right: 0;
      }
    }

    .ast-header-break-point #ast-desktop-header {
      display: none;
    }

    @media (min-width: 921px) {
      #ast-mobile-header {
        display: none;
      }
    }

    .wp-block-buttons.aligncenter {
      justify-content: center;
    }

    @media (max-width: 921px) {

      .ast-theme-transparent-header #primary,
      .ast-theme-transparent-header #secondary {
        padding: 0;
      }
    }

    @media (max-width: 921px) {
      .ast-plain-container.ast-no-sidebar #primary {
        padding: 0;
      }
    }

    .ast-plain-container.ast-no-sidebar #primary {
      margin-top: 0;
      margin-bottom: 0;
    }

    .wp-block-button.is-style-outline .wp-block-button__link {
      border-color: var(--ast-global-color-0);
    }

    div.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
    div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color) {
      color: var(--ast-global-color-0);
    }

    .wp-block-button.is-style-outline .wp-block-button__link:hover,
    div.wp-block-button.is-style-outline .wp-block-button__link:focus,
    div.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color):hover,
    div.wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color):hover {
      color: #ffffff;
      background-color: var(--ast-global-color-1);
      border-color: var(--ast-global-color-1);
    }

    .post-page-numbers.current .page-link,
    .ast-pagination .page-numbers.current {
      color: #ffffff;
      border-color: var(--ast-global-color-0);
      background-color: var(--ast-global-color-0);
      border-radius: 2px;
    }

    h1.widget-title {
      font-weight: 600;
    }

    h2.widget-title {
      font-weight: 600;
    }

    h3.widget-title {
      font-weight: 600;
    }

    #page {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .ast-404-layout-1 h1.page-title {
      color: var(--ast-global-color-2);
    }

    .single .post-navigation a {
      line-height: 1em;
      height: inherit;
    }

    .error-404 .page-sub-title {
      font-size: 1.5rem;
      font-weight: inherit;
    }

    .search .site-content .content-area .search-form {
      margin-bottom: 0;
    }

    #page .site-content {
      flex-grow: 1;
    }

    .widget {
      margin-bottom: 1.25em;
    }

    #secondary li {
      line-height: 1.5em;
    }

    #secondary .wp-block-group h2 {
      margin-bottom: 0.7em;
    }

    #secondary h2 {
      font-size: 1.7rem;
    }

    .ast-separate-container .ast-article-post,
    .ast-separate-container .ast-article-single,
    .ast-separate-container .ast-comment-list li.depth-1,
    .ast-separate-container .comment-respond {
      padding: 3em;
    }

    .ast-separate-container .ast-article-single .ast-article-single {
      padding: 0;
    }

    .ast-article-single .wp-block-post-template-is-layout-grid {
      padding-left: 0;
    }

    .ast-separate-container .ast-comment-list li.depth-1,
    .hentry {
      margin-bottom: 2em;
    }

    .ast-separate-container .ast-archive-description,
    .ast-separate-container .ast-author-box {
      border-bottom: 1px solid var(--ast-border-color);
    }

    .ast-separate-container .comments-title {
      padding: 2em 2em 0 2em;
    }

    .ast-page-builder-template .comment-form-textarea,
    .ast-comment-formwrap .ast-grid-common-col {
      padding: 0;
    }

    .ast-comment-formwrap {
      padding: 0 20px;
      display: inline-flex;
      column-gap: 20px;
    }

    .archive.ast-page-builder-template .entry-header {
      margin-top: 2em;
    }

    .ast-page-builder-template .ast-comment-formwrap {
      width: 100%;
    }

    .entry-title {
      margin-bottom: 0.5em;
    }

    .ast-archive-description p {
      font-size: inherit;
      font-weight: inherit;
      line-height: inherit;
    }

    @media (min-width: 921px) {

      .ast-left-sidebar.ast-page-builder-template #secondary,
      .archive.ast-right-sidebar.ast-page-builder-template .site-main {
        padding-left: 20px;
        padding-right: 20px;
      }
    }

    @media (max-width: 544px) {
      .ast-comment-formwrap.ast-row {
        column-gap: 10px;
        display: inline-block;
      }

      #ast-commentform .ast-grid-common-col {
        position: relative;
        width: 100%;
      }
    }

    @media (min-width: 1201px) {

      .ast-separate-container .ast-article-post,
      .ast-separate-container .ast-article-single,
      .ast-separate-container .ast-author-box,
      .ast-separate-container .ast-404-layout-1,
      .ast-separate-container .no-results {
        padding: 3em;
      }
    }

    @media (max-width: 921px) {

      .ast-separate-container #primary,
      .ast-separate-container #secondary {
        padding: 1.5em 0;
      }

      #primary,
      #secondary {
        padding: 1.5em 0;
        margin: 0;
      }

      .ast-left-sidebar #content>.ast-container {
        display: flex;
        flex-direction: column-reverse;
        width: 100%;
      }
    }

    @media (min-width: 922px) {

      .ast-separate-container.ast-right-sidebar #primary,
      .ast-separate-container.ast-left-sidebar #primary {
        border: 0;
      }

      .search-no-results.ast-separate-container #primary {
        margin-bottom: 4em;
      }
    }

    .wp-block-button .wp-block-button__link {
      color: #ffffff;
    }

    .wp-block-button .wp-block-button__link:hover,
    .wp-block-button .wp-block-button__link:focus {
      color: #ffffff;
      background-color: var(--ast-global-color-1);
      border-color: var(--ast-global-color-1);
    }

    .elementor-widget-heading h1.elementor-heading-title {
      line-height: 1.4em;
    }

    .elementor-widget-heading h2.elementor-heading-title {
      line-height: 1.25em;
    }

    .elementor-widget-heading h3.elementor-heading-title {
      line-height: 1.2em;
    }

    .elementor-widget-heading h4.elementor-heading-title {
      line-height: 1.2em;
    }

    .elementor-widget-heading h5.elementor-heading-title {
      line-height: 1.2em;
    }

    .elementor-widget-heading h6.elementor-heading-title {
      line-height: 1.25em;
    }

    .wp-block-button .wp-block-button__link,
    .wp-block-search .wp-block-search__button,
    body .wp-block-file .wp-block-file__button {
      border-color: var(--ast-global-color-0);
      background-color: var(--ast-global-color-0);
      color: #ffffff;
      font-family: inherit;
      font-weight: 500;
      line-height: 1em;
      font-size: 16px;
      font-size: 1rem;
      padding-top: 15px;
      padding-right: 30px;
      padding-bottom: 15px;
      padding-left: 30px;
    }

    @media (max-width: 921px) {

      .wp-block-button .wp-block-button__link,
      .wp-block-search .wp-block-search__button,
      body .wp-block-file .wp-block-file__button {
        padding-top: 14px;
        padding-right: 28px;
        padding-bottom: 14px;
        padding-left: 28px;
      }
    }

    @media (max-width: 544px) {

      .wp-block-button .wp-block-button__link,
      .wp-block-search .wp-block-search__button,
      body .wp-block-file .wp-block-file__button {
        padding-top: 12px;
        padding-right: 24px;
        padding-bottom: 12px;
        padding-left: 24px;
      }
    }

    .menu-toggle,
    button,
    .ast-button,
    .ast-custom-button,
    .button,
    input#submit,
    input[type="button"],
    input[type="submit"],
    input[type="reset"],
    #comments .submit,
    .search .search-submit,
    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
    body .wp-block-file .wp-block-file__button,
    .search .search-submit,
    .woocommerce-js a.button,
    .woocommerce button.button,
    .woocommerce .woocommerce-message a.button,
    .woocommerce #respond input#submit.alt,
    .woocommerce input.button.alt,
    .woocommerce input.button,
    .woocommerce input.button:disabled,
    .woocommerce input.button:disabled[disabled],
    .woocommerce input.button:disabled:hover,
    .woocommerce input.button:disabled[disabled]:hover,
    .woocommerce #respond input#submit,
    .woocommerce button.button.alt.disabled,
    .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
    .wc-block-grid__product-onsale,
    [CLASS*="wc-block"] button,
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
    .woocommerce button.button.alt.disabled.wc-variation-selection-needed {
      border-style: solid;
      border-top-width: 0;
      border-right-width: 0;
      border-left-width: 0;
      border-bottom-width: 0;
      color: #ffffff;
      border-color: var(--ast-global-color-0);
      background-color: var(--ast-global-color-0);
      padding-top: 15px;
      padding-right: 30px;
      padding-bottom: 15px;
      padding-left: 30px;
      font-family: inherit;
      font-weight: 500;
      font-size: 16px;
      font-size: 1rem;
      line-height: 1em;
    }

    button:focus,
    .menu-toggle:hover,
    button:hover,
    .ast-button:hover,
    .ast-custom-button:hover .button:hover,
    .ast-custom-button:hover,
    input[type="reset"]:hover,
    input[type="reset"]:focus,
    input#submit:hover,
    input#submit:focus,
    input[type="button"]:hover,
    input[type="button"]:focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:hover,
    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button:focus,
    body .wp-block-file .wp-block-file__button:hover,
    body .wp-block-file .wp-block-file__button:focus,
    .woocommerce-js a.button:hover,
    .woocommerce button.button:hover,
    .woocommerce .woocommerce-message a.button:hover,
    .woocommerce #respond input#submit:hover,
    .woocommerce #respond input#submit.alt:hover,
    .woocommerce input.button.alt:hover,
    .woocommerce input.button:hover,
    .woocommerce button.button.alt.disabled:hover,
    .wc-block-grid__products .wc-block-grid__product .wp-block-button__link:hover,
    [CLASS*="wc-block"] button:hover,
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping):hover,
    .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout:hover,
    .woocommerce button.button.alt.disabled.wc-variation-selection-needed:hover {
      color: #ffffff;
      background-color: var(--ast-global-color-1);
      border-color: var(--ast-global-color-1);
    }

    form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button.has-icon {
      padding-top: calc(15px - 3px);
      padding-right: calc(30px - 3px);
      padding-bottom: calc(15px - 3px);
      padding-left: calc(30px - 3px);
    }

    @media (max-width: 921px) {

      .menu-toggle,
      button,
      .ast-button,
      .ast-custom-button,
      .button,
      input#submit,
      input[type="button"],
      input[type="submit"],
      input[type="reset"],
      #comments .submit,
      .search .search-submit,
      form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
      body .wp-block-file .wp-block-file__button,
      .search .search-submit,
      .woocommerce-js a.button,
      .woocommerce button.button,
      .woocommerce .woocommerce-message a.button,
      .woocommerce #respond input#submit.alt,
      .woocommerce input.button.alt,
      .woocommerce input.button,
      .woocommerce input.button:disabled,
      .woocommerce input.button:disabled[disabled],
      .woocommerce input.button:disabled:hover,
      .woocommerce input.button:disabled[disabled]:hover,
      .woocommerce #respond input#submit,
      .woocommerce button.button.alt.disabled,
      .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
      .wc-block-grid__product-onsale,
      [CLASS*="wc-block"] button,
      .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
      .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
      .woocommerce button.button.alt.disabled.wc-variation-selection-needed {
        padding-top: 14px;
        padding-right: 28px;
        padding-bottom: 14px;
        padding-left: 28px;
      }
    }

    @media (max-width: 544px) {

      .menu-toggle,
      button,
      .ast-button,
      .ast-custom-button,
      .button,
      input#submit,
      input[type="button"],
      input[type="submit"],
      input[type="reset"],
      #comments .submit,
      .search .search-submit,
      form[CLASS*="wp-block-search__"].wp-block-search .wp-block-search__inside-wrapper .wp-block-search__button,
      body .wp-block-file .wp-block-file__button,
      .search .search-submit,
      .woocommerce-js a.button,
      .woocommerce button.button,
      .woocommerce .woocommerce-message a.button,
      .woocommerce #respond input#submit.alt,
      .woocommerce input.button.alt,
      .woocommerce input.button,
      .woocommerce input.button:disabled,
      .woocommerce input.button:disabled[disabled],
      .woocommerce input.button:disabled:hover,
      .woocommerce input.button:disabled[disabled]:hover,
      .woocommerce #respond input#submit,
      .woocommerce button.button.alt.disabled,
      .wc-block-grid__products .wc-block-grid__product .wp-block-button__link,
      .wc-block-grid__product-onsale,
      [CLASS*="wc-block"] button,
      .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons .button:not(.checkout):not(.ast-continue-shopping),
      .woocommerce-js .astra-cart-drawer .astra-cart-drawer-content .woocommerce-mini-cart__buttons a.checkout,
      .woocommerce button.button.alt.disabled.wc-variation-selection-needed {
        padding-top: 12px;
        padding-right: 24px;
        padding-bottom: 12px;
        padding-left: 24px;
      }
    }

    @media (max-width: 921px) {
      .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
        display: inline-block;
      }

      .ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
        margin: 0;
      }

      .ast-comment-avatar-wrap img {
        max-width: 2.5em;
      }

      .ast-separate-container .ast-comment-list li.depth-1 {
        padding: 1.5em 2.14em;
      }

      .ast-separate-container .comment-respond {
        padding: 2em 2.14em;
      }

      .ast-comment-meta {
        padding: 0 1.8888em 1.3333em;
      }
    }

    @media (min-width: 544px) {
      .ast-container {
        max-width: 100%;
      }
    }

    @media (max-width: 544px) {

      .ast-separate-container .ast-article-post,
      .ast-separate-container .ast-article-single,
      .ast-separate-container .comments-title,
      .ast-separate-container .ast-archive-description {
        padding: 1.5em 1em;
      }

      .ast-separate-container #content .ast-container {
        padding-left: 0.54em;
        padding-right: 0.54em;
      }

      .ast-separate-container .ast-comment-list li.depth-1 {
        padding: 1.5em 1em;
        margin-bottom: 1.5em;
      }

      .ast-separate-container .ast-comment-list .bypostauthor {
        padding: 0.5em;
      }

      .ast-search-menu-icon.ast-dropdown-active .search-field {
        width: 170px;
      }
    }

    .ast-separate-container {
      background-color: var(--ast-global-color-4);
    }

    @media (max-width: 921px) {
      .site-title {
        display: block;
      }

      .site-header .site-description {
        display: none;
      }

      .entry-title {
        font-size: 30px;
      }

      h1,
      .entry-content h1 {
        font-size: 30px;
      }

      h2,
      .entry-content h2 {
        font-size: 25px;
      }

      h3,
      .entry-content h3 {
        font-size: 20px;
      }
    }

    @media (max-width: 544px) {
      .site-title {
        display: block;
      }

      .site-header .site-description {
        display: none;
      }

      .entry-title {
        font-size: 30px;
      }

      h1,
      .entry-content h1 {
        font-size: 30px;
      }

      h2,
      .entry-content h2 {
        font-size: 25px;
      }

      h3,
      .entry-content h3 {
        font-size: 20px;
      }
    }

    @media (max-width: 921px) {
      html {
        font-size: 91.2%;
      }
    }

    @media (max-width: 544px) {
      html {
        font-size: 91.2%;
      }
    }

    @media (min-width: 922px) {
      .ast-container {
        max-width: 1240px;
      }
    }

    @media (min-width: 922px) {
      .site-content .ast-container {
        display: flex;
      }
    }

    @media (max-width: 921px) {
      .site-content .ast-container {
        flex-direction: column;
      }
    }

    @media (min-width: 922px) {

      .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
      .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
        margin-left: -0px;
      }
    }

    .entry-content li>p {
      margin-bottom: 0;
    }

    blockquote,
    cite {
      font-style: initial;
    }

    .wp-block-file {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .wp-block-pullquote {
      border: none;
    }

    .wp-block-pullquote blockquote::before {
      content: "\201D";
      font-family: "Helvetica", sans-serif;
      display: flex;
      transform: rotate(180deg);
      font-size: 6rem;
      font-style: normal;
      line-height: 1;
      font-weight: bold;
      align-items: center;
      justify-content: center;
    }

    .has-text-align-right>blockquote::before {
      justify-content: flex-start;
    }

    .has-text-align-left>blockquote::before {
      justify-content: flex-end;
    }

    figure.wp-block-pullquote.is-style-solid-color blockquote {
      max-width: 100%;
      text-align: inherit;
    }

    html body {
      --wp--custom--ast-default-block-top-padding: 3em;
      --wp--custom--ast-default-block-right-padding: 3em;
      --wp--custom--ast-default-block-bottom-padding: 3em;
      --wp--custom--ast-default-block-left-padding: 3em;
      --wp--custom--ast-container-width: 1200px;
      --wp--custom--ast-content-width-size: 1200px;
      --wp--custom--ast-wide-width-size: calc(1200px + var(--wp--custom--ast-default-block-left-padding) + var(--wp--custom--ast-default-block-right-padding));
    }

    .ast-narrow-container {
      --wp--custom--ast-content-width-size: 750px;
      --wp--custom--ast-wide-width-size: 750px;
    }

    @media (max-width: 921px) {
      html body {
        --wp--custom--ast-default-block-top-padding: 3em;
        --wp--custom--ast-default-block-right-padding: 2em;
        --wp--custom--ast-default-block-bottom-padding: 3em;
        --wp--custom--ast-default-block-left-padding: 2em;
      }
    }

    @media (max-width: 544px) {
      html body {
        --wp--custom--ast-default-block-top-padding: 3em;
        --wp--custom--ast-default-block-right-padding: 1.5em;
        --wp--custom--ast-default-block-bottom-padding: 3em;
        --wp--custom--ast-default-block-left-padding: 1.5em;
      }
    }

    .entry-content>.wp-block-group,
    .entry-content>.wp-block-cover,
    .entry-content>.wp-block-columns {
      padding-top: var(--wp--custom--ast-default-block-top-padding);
      padding-right: var(--wp--custom--ast-default-block-right-padding);
      padding-bottom: var(--wp--custom--ast-default-block-bottom-padding);
      padding-left: var(--wp--custom--ast-default-block-left-padding);
    }

    .ast-plain-container.ast-no-sidebar .entry-content>.alignfull,
    .ast-page-builder-template .ast-no-sidebar .entry-content>.alignfull {
      margin-left: calc(-50vw + 50%);
      margin-right: calc(-50vw + 50%);
      max-width: 100vw;
      width: 100vw;
    }

    .ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignfull,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignfull,
    .ast-plain-container.ast-no-sidebar .entry-content .alignfull .alignwide,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignfull .alignwide,
    .ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignfull,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignfull,
    .ast-plain-container.ast-no-sidebar .entry-content .alignwide .alignwide,
    .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide .alignwide,
    .ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignfull,
    .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignfull,
    .ast-plain-container.ast-no-sidebar .entry-content .wp-block-column .alignwide,
    .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-column .alignwide {
      margin-left: auto;
      margin-right: auto;
      width: 100%;
    }

    [ast-blocks-layout] .wp-block-separator:not(.is-style-dots) {
      height: 0;
    }

    [ast-blocks-layout] .wp-block-separator {
      margin: 20px auto;
    }

    [ast-blocks-layout] .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
      max-width: 100px;
    }

    [ast-blocks-layout] .wp-block-separator.has-background {
      padding: 0;
    }

    .entry-content[ast-blocks-layout]>* {
      max-width: var(--wp--custom--ast-content-width-size);
      margin-left: auto;
      margin-right: auto;
    }

    .entry-content[ast-blocks-layout]>.alignwide {
      max-width: var(--wp--custom--ast-wide-width-size);
    }

    .entry-content[ast-blocks-layout] .alignfull {
      max-width: none;
    }

    .entry-content .wp-block-columns {
      margin-bottom: 0;
    }

    blockquote {
      margin: 1.5em;
      border: none;
    }

    .wp-block-quote:not(.has-text-align-right):not(.has-text-align-center) {
      border-left: 5px solid rgba(0, 0, 0, 0.05);
    }

    .has-text-align-right>blockquote,
    blockquote.has-text-align-right {
      border-right: 5px solid rgba(0, 0, 0, 0.05);
    }

    .has-text-align-left>blockquote,
    blockquote.has-text-align-left {
      border-left: 5px solid rgba(0, 0, 0, 0.05);
    }

    .wp-block-site-tagline,
    .wp-block-latest-posts .read-more {
      margin-top: 15px;
    }

    .wp-block-loginout p label {
      display: block;
    }

    .wp-block-loginout p:not(.login-remember):not(.login-submit) input {
      width: 100%;
    }

    .wp-block-loginout input:focus {
      border-color: transparent;
    }

    .wp-block-loginout input:focus {
      outline: thin dotted;
    }

    .entry-content .wp-block-media-text .wp-block-media-text__content {
      padding: 0 0 0 8%;
    }

    .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
      padding: 0 8% 0 0;
    }

    .entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
      padding: 8%;
    }

    .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover__inner-container,
    .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-image-text,
    .entry-content .wp-block-cover:not([class*="background-color"]) .wp-block-cover-text,
    .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover__inner-container,
    .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-image-text,
    .entry-content .wp-block-cover-image:not([class*="background-color"]) .wp-block-cover-text {
      color: var(--ast-global-color-5);
    }

    .wp-block-loginout .login-remember input {
      width: 1.1rem;
      height: 1.1rem;
      margin: 0 5px 4px 0;
      vertical-align: middle;
    }

    .wp-block-latest-posts>li>*:first-child,
    .wp-block-latest-posts:not(.is-grid)>li:first-child {
      margin-top: 0;
    }

    .wp-block-search__inside-wrapper .wp-block-search__input {
      padding: 0 10px;
      color: var(--ast-global-color-3);
      background: var(--ast-global-color-5);
      border-color: var(--ast-border-color);
    }

    .wp-block-latest-posts .read-more {
      margin-bottom: 1.5em;
    }

    .wp-block-search__no-button .wp-block-search__inside-wrapper .wp-block-search__input {
      padding-top: 5px;
      padding-bottom: 5px;
    }

    .wp-block-latest-posts .wp-block-latest-posts__post-date,
    .wp-block-latest-posts .wp-block-latest-posts__post-author {
      font-size: 1rem;
    }

    .wp-block-latest-posts>li>*,
    .wp-block-latest-posts:not(.is-grid)>li {
      margin-top: 12px;
      margin-bottom: 12px;
    }

    .ast-page-builder-template .entry-content[ast-blocks-layout]>*,
    .ast-page-builder-template .entry-content[ast-blocks-layout]>.alignfull>* {
      max-width: none;
    }

    .ast-page-builder-template .entry-content[ast-blocks-layout]>.alignwide>* {
      max-width: var(--wp--custom--ast-wide-width-size);
    }

    .ast-page-builder-template .entry-content[ast-blocks-layout]>.inherit-container-width>*,
    .ast-page-builder-template .entry-content[ast-blocks-layout]>*>*,
    .entry-content[ast-blocks-layout]>.wp-block-cover .wp-block-cover__inner-container {
      max-width: var(--wp--custom--ast-content-width-size);
      margin-left: auto;
      margin-right: auto;
    }

    .entry-content[ast-blocks-layout] .wp-block-cover:not(.alignleft):not(.alignright) {
      width: auto;
    }

    @media (max-width: 1200px) {

      .ast-separate-container .entry-content>.alignfull,
      .ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
      .ast-plain-container .entry-content[ast-blocks-layout]>.alignwide,
      .ast-plain-container .entry-content .alignfull {
        margin-left: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
        margin-right: calc(-1 * min(var(--ast-container-default-xlg-padding), 20px));
      }
    }

    @media (min-width: 1201px) {
      .ast-separate-container .entry-content>.alignfull {
        margin-left: calc(-1 * var(--ast-container-default-xlg-padding));
        margin-right: calc(-1 * var(--ast-container-default-xlg-padding));
      }

      .ast-separate-container .entry-content[ast-blocks-layout]>.alignwide,
      .ast-plain-container .entry-content[ast-blocks-layout]>.alignwide {
        margin-left: calc(-1 * var(--wp--custom--ast-default-block-left-padding));
        margin-right: calc(-1 * var(--wp--custom--ast-default-block-right-padding));
      }
    }

    @media (min-width: 921px) {

      .ast-separate-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)),
      .ast-plain-container .entry-content .wp-block-group.alignwide:not(.inherit-container-width)> :where(:not(.alignleft):not(.alignright)) {
        max-width: calc(var(--wp--custom--ast-content-width-size) + 80px);
      }

      .ast-plain-container.ast-right-sidebar .entry-content[ast-blocks-layout] .alignfull,
      .ast-plain-container.ast-left-sidebar .entry-content[ast-blocks-layout] .alignfull {
        margin-left: -60px;
        margin-right: -60px;
      }
    }

    @media (min-width: 544px) {
      .entry-content>.alignleft {
        margin-right: 20px;
      }

      .entry-content>.alignright {
        margin-left: 20px;
      }
    }

    @media (max-width: 544px) {
      .wp-block-columns .wp-block-column:not(:last-child) {
        margin-bottom: 20px;
      }

      .wp-block-latest-posts {
        margin: 0;
      }
    }

    @media (max-width: 600px) {

      .entry-content .wp-block-media-text .wp-block-media-text__content,
      .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
        padding: 8% 0 0;
      }

      .entry-content .wp-block-media-text.has-background .wp-block-media-text__content {
        padding: 8%;
      }
    }

    .ast-page-builder-template .entry-header {
      padding-left: 0;
    }

    .ast-narrow-container .site-content .wp-block-uagb-image--align-full .wp-block-uagb-image__figure {
      max-width: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    .entry-content ul,
    .entry-content ol {
      padding: revert;
      margin: revert;
    }

    :root .has-ast-global-color-0-color {
      color: var(--ast-global-color-0);
    }

    :root .has-ast-global-color-0-background-color {
      background-color: var(--ast-global-color-0);
    }

    :root .wp-block-button .has-ast-global-color-0-color {
      color: var(--ast-global-color-0);
    }

    :root .wp-block-button .has-ast-global-color-0-background-color {
      background-color: var(--ast-global-color-0);
    }

    :root .has-ast-global-color-1-color {
      color: var(--ast-global-color-1);
    }

    :root .has-ast-global-color-1-background-color {
      background-color: var(--ast-global-color-1);
    }

    :root .wp-block-button .has-ast-global-color-1-color {
      color: var(--ast-global-color-1);
    }

    :root .wp-block-button .has-ast-global-color-1-background-color {
      background-color: var(--ast-global-color-1);
    }

    :root .has-ast-global-color-2-color {
      color: var(--ast-global-color-2);
    }

    :root .has-ast-global-color-2-background-color {
      background-color: var(--ast-global-color-2);
    }

    :root .wp-block-button .has-ast-global-color-2-color {
      color: var(--ast-global-color-2);
    }

    :root .wp-block-button .has-ast-global-color-2-background-color {
      background-color: var(--ast-global-color-2);
    }

    :root .has-ast-global-color-3-color {
      color: var(--ast-global-color-3);
    }

    :root .has-ast-global-color-3-background-color {
      background-color: var(--ast-global-color-3);
    }

    :root .wp-block-button .has-ast-global-color-3-color {
      color: var(--ast-global-color-3);
    }

    :root .wp-block-button .has-ast-global-color-3-background-color {
      background-color: var(--ast-global-color-3);
    }

    :root .has-ast-global-color-4-color {
      color: var(--ast-global-color-4);
    }

    :root .has-ast-global-color-4-background-color {
      background-color: var(--ast-global-color-4);
    }

    :root .wp-block-button .has-ast-global-color-4-color {
      color: var(--ast-global-color-4);
    }

    :root .wp-block-button .has-ast-global-color-4-background-color {
      background-color: var(--ast-global-color-4);
    }

    :root .has-ast-global-color-5-color {
      color: var(--ast-global-color-5);
    }

    :root .has-ast-global-color-5-background-color {
      background-color: var(--ast-global-color-5);
    }

    :root .wp-block-button .has-ast-global-color-5-color {
      color: var(--ast-global-color-5);
    }

    :root .wp-block-button .has-ast-global-color-5-background-color {
      background-color: var(--ast-global-color-5);
    }

    :root .has-ast-global-color-6-color {
      color: var(--ast-global-color-6);
    }

    :root .has-ast-global-color-6-background-color {
      background-color: var(--ast-global-color-6);
    }

    :root .wp-block-button .has-ast-global-color-6-color {
      color: var(--ast-global-color-6);
    }

    :root .wp-block-button .has-ast-global-color-6-background-color {
      background-color: var(--ast-global-color-6);
    }

    :root .has-ast-global-color-7-color {
      color: var(--ast-global-color-7);
    }

    :root .has-ast-global-color-7-background-color {
      background-color: var(--ast-global-color-7);
    }

    :root .wp-block-button .has-ast-global-color-7-color {
      color: var(--ast-global-color-7);
    }

    :root .wp-block-button .has-ast-global-color-7-background-color {
      background-color: var(--ast-global-color-7);
    }

    :root .has-ast-global-color-8-color {
      color: var(--ast-global-color-8);
    }

    :root .has-ast-global-color-8-background-color {
      background-color: var(--ast-global-color-8);
    }

    :root .wp-block-button .has-ast-global-color-8-color {
      color: var(--ast-global-color-8);
    }

    :root .wp-block-button .has-ast-global-color-8-background-color {
      background-color: var(--ast-global-color-8);
    }

    :root {
      --ast-global-color-0: #046bd2;
      --ast-global-color-1: #045cb4;
      --ast-global-color-2: #1e293b;
      --ast-global-color-3: #334155;
      --ast-global-color-4: #f9fafb;
      --ast-global-color-5: #ffffff;
      --ast-global-color-6: #e2e8f0;
      --ast-global-color-7: #cbd5e1;
      --ast-global-color-8: #94a3b8;
    }

    :root {
      --ast-border-color: var(--ast-global-color-6);
    }

    .ast-single-entry-banner {
      -js-display: flex;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      position: relative;
      background: #eeeeee;
    }

    .ast-single-entry-banner[data-banner-layout="layout-1"] {
      max-width: 1200px;
      background: inherit;
      padding: 20px 0;
    }

    .ast-single-entry-banner[data-banner-width-type="custom"] {
      margin: 0 auto;
      width: 100%;
    }

    .ast-single-entry-banner+.site-content .entry-header {
      margin-bottom: 0;
    }

    header.entry-header .entry-title {
      font-weight: 600;
      font-size: 32px;
      font-size: 2rem;
    }

    header.entry-header>*:not(:last-child) {
      margin-bottom: 10px;
    }

    .ast-archive-entry-banner {
      -js-display: flex;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      position: relative;
      background: #eeeeee;
    }

    .ast-archive-entry-banner[data-banner-width-type="custom"] {
      margin: 0 auto;
      width: 100%;
    }

    .ast-archive-entry-banner[data-banner-layout="layout-1"] {
      background: inherit;
      padding: 20px 0;
      text-align: left;
    }

    body.archive .ast-archive-description {
      max-width: 1200px;
      width: 100%;
      text-align: left;
      padding-top: 3em;
      padding-right: 3em;
      padding-bottom: 3em;
      padding-left: 3em;
    }

    body.archive .ast-archive-description .ast-archive-title,
    body.archive .ast-archive-description .ast-archive-title * {
      font-weight: 600;
      font-size: 32px;
      font-size: 2rem;
    }

    body.archive .ast-archive-description>*:not(:last-child) {
      margin-bottom: 10px;
    }

    @media (max-width: 921px) {
      body.archive .ast-archive-description {
        text-align: left;
      }
    }

    @media (max-width: 544px) {
      body.archive .ast-archive-description {
        text-align: left;
      }
    }

    .ast-breadcrumbs .trail-browse,
    .ast-breadcrumbs .trail-items,
    .ast-breadcrumbs .trail-items li {
      display: inline-block;
      margin: 0;
      padding: 0;
      border: none;
      background: inherit;
      text-indent: 0;
      text-decoration: none;
    }

    .ast-breadcrumbs .trail-browse {
      font-size: inherit;
      font-style: inherit;
      font-weight: inherit;
      color: inherit;
    }

    .ast-breadcrumbs .trail-items {
      list-style: none;
    }

    .trail-items li::after {
      padding: 0 0.3em;
      content: "\00bb";
    }

    .trail-items li:last-of-type::after {
      display: none;
    }

    h1,
    .entry-content h1,
    h2,
    .entry-content h2,
    h3,
    .entry-content h3,
    h4,
    .entry-content h4,
    h5,
    .entry-content h5,
    h6,
    .entry-content h6 {
      color: var(--ast-global-color-2);
    }

    .entry-title a {
      color: var(--ast-global-color-2);
    }

    @media (max-width: 921px) {

      .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
      .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
        grid-column: 1 / -1;
      }
    }

    @media (max-width: 544px) {

      .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
      .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
        grid-column: 1 / -1;
      }
    }

    .ast-builder-layout-element[data-section="title_tagline"] {
      display: flex;
    }

    @media (max-width: 921px) {
      .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
        display: flex;
      }
    }

    @media (max-width: 544px) {
      .ast-header-break-point .ast-builder-layout-element[data-section="title_tagline"] {
        display: flex;
      }
    }

    .ast-builder-menu-1 {
      font-family: inherit;
      font-weight: inherit;
    }

    .ast-builder-menu-1 .menu-item>.menu-link {
      color: var(--ast-global-color-3);
    }

    .ast-builder-menu-1 .menu-item>.ast-menu-toggle {
      color: var(--ast-global-color-3);
    }

    .ast-builder-menu-1 .menu-item:hover>.menu-link,
    .ast-builder-menu-1 .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .menu-item:hover>.ast-menu-toggle {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .menu-item.current-menu-item>.menu-link,
    .ast-builder-menu-1 .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
    .ast-builder-menu-1 .current-menu-ancestor>.menu-link {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .menu-item.current-menu-item>.ast-menu-toggle {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-1 .sub-menu,
    .ast-builder-menu-1 .inline-on-mobile .sub-menu {
      border-top-width: 2px;
      border-bottom-width: 0;
      border-right-width: 0;
      border-left-width: 0;
      border-color: var(--ast-global-color-0);
      border-style: solid;
    }

    .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
    .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
      margin-top: 0;
    }

    .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu:before,
    .ast-desktop .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper:before {
      height: calc(0px + 5px);
    }

    .ast-desktop .ast-builder-menu-1 .menu-item .sub-menu .menu-link {
      border-style: none;
    }

    @media (max-width: 921px) {
      .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
        top: 0;
      }

      .ast-builder-menu-1 .inline-on-mobile .menu-item.menu-item-has-children>.ast-menu-toggle {
        right: -15px;
      }

      .ast-builder-menu-1 .menu-item-has-children>.menu-link:after {
        content: unset;
      }

      .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
      .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
        margin-top: 0;
      }
    }

    @media (max-width: 544px) {
      .ast-header-break-point .ast-builder-menu-1 .menu-item.menu-item-has-children>.ast-menu-toggle {
        top: 0;
      }

      .ast-builder-menu-1 .main-header-menu>.menu-item>.sub-menu,
      .ast-builder-menu-1 .main-header-menu>.menu-item>.astra-full-megamenu-wrapper {
        margin-top: 0;
      }
    }

    .ast-builder-menu-1 {
      display: flex;
    }

    @media (max-width: 921px) {
      .ast-header-break-point .ast-builder-menu-1 {
        display: flex;
      }
    }

    @media (max-width: 544px) {
      .ast-header-break-point .ast-builder-menu-1 {
        display: flex;
      }
    }

    .site-below-footer-wrap {
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] {
      background-color: var(--ast-global-color-5);
      min-height: 80px;
      border-style: solid;
      border-width: 0px;
      border-top-width: 1px;
      border-top-color: var(--ast-global-color-6);
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
    .site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
      align-items: flex-start;
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
      display: flex;
      margin-bottom: 0;
    }

    .ast-builder-grid-row-full .ast-builder-grid-row {
      grid-template-columns: 1fr;
    }

    @media (max-width: 921px) {
      .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
        display: flex;
        margin-bottom: 0;
      }

      .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
        display: block;
        margin-bottom: 10px;
      }

      .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 544px) {
      .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
        display: flex;
        margin-bottom: 0;
      }

      .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
        display: block;
        margin-bottom: 10px;
      }

      .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
        grid-template-columns: 1fr;
      }
    }

    .site-below-footer-wrap[data-section="section-below-footer-builder"] {
      display: grid;
    }

    @media (max-width: 921px) {
      .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
        display: grid;
      }
    }

    @media (max-width: 544px) {
      .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
        display: grid;
      }
    }

    .ast-footer-copyright {
      text-align: center;
    }

    .ast-footer-copyright {
      color: var(--ast-global-color-3);
    }

    @media (max-width: 921px) {
      .ast-footer-copyright {
        text-align: center;
      }
    }

    @media (max-width: 544px) {
      .ast-footer-copyright {
        text-align: center;
      }
    }

    .ast-footer-copyright {
      font-size: 16px;
      font-size: 1rem;
    }

    .ast-footer-copyright.ast-builder-layout-element {
      display: flex;
    }

    @media (max-width: 921px) {
      .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
        display: flex;
      }
    }

    @media (max-width: 544px) {
      .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
        display: flex;
      }
    }

    .footer-widget-area.widget-area.site-footer-focus-item {
      width: auto;
    }

    .elementor-widget-heading .elementor-heading-title {
      margin: 0;
    }

    .elementor-page .ast-menu-toggle {
      color: unset !important;
      background: unset !important;
    }

    .elementor-post.elementor-grid-item.hentry {
      margin-bottom: 0;
    }

    .woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
    .elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
      width: auto;
      margin: 0;
      float: none;
    }

    .elementor-toc__list-wrapper {
      margin: 0;
    }

    body .elementor hr {
      background-color: #ccc;
      margin: 0;
    }

    .ast-left-sidebar .elementor-section.elementor-section-stretched,
    .ast-right-sidebar .elementor-section.elementor-section-stretched {
      max-width: 100%;
      left: 0 !important;
    }

    .elementor-template-full-width .ast-container {
      display: block;
    }

    .elementor-screen-only,
    .screen-reader-text,
    .screen-reader-text span,
    .ui-helper-hidden-accessible {
      top: 0 !important;
    }

    @media (max-width: 544px) {
      .elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
        width: auto;
        margin: 0;
      }

      .elementor-element .woocommerce .woocommerce-result-count {
        float: none;
      }
    }

    .ast-header-break-point .main-header-bar {
      border-bottom-width: 1px;
    }

    @media (min-width: 922px) {
      .main-header-bar {
        border-bottom-width: 1px;
      }
    }

    .main-header-menu .menu-item,
    #astra-footer-menu .menu-item,
    .main-header-bar .ast-masthead-custom-menu-items {
      -js-display: flex;
      display: flex;
      -webkit-box-pack: center;
      -webkit-justify-content: center;
      -moz-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -webkit-flex-direction: column;
      -moz-box-orient: vertical;
      -moz-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
    }

    .main-header-menu>.menu-item>.menu-link,
    #astra-footer-menu>.menu-item>.menu-link {
      height: 100%;
      -webkit-box-align: center;
      -webkit-align-items: center;
      -moz-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -js-display: flex;
      display: flex;
    }

    .ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg {
      top: 0.2em;
      margin-top: 0px;
      margin-left: 0px;
      width: 0.65em;
      transform: translate(0, -2px) rotateZ(270deg);
    }

    .ast-mobile-popup-content .ast-submenu-expanded>.ast-menu-toggle {
      transform: rotateX(180deg);
      overflow-y: auto;
    }

    .ast-separate-container .blog-layout-1,
    .ast-separate-container .blog-layout-2,
    .ast-separate-container .blog-layout-3 {
      background-color: transparent;
      background-image: none;
    }

    .ast-separate-container .ast-article-post {
      background-color: var(--ast-global-color-5);
    }

    @media (max-width: 921px) {
      .ast-separate-container .ast-article-post {
        background-color: var(--ast-global-color-5);
      }
    }

    @media (max-width: 544px) {
      .ast-separate-container .ast-article-post {
        background-color: var(--ast-global-color-5);
      }
    }

    .ast-separate-container .ast-article-single:not(.ast-related-post),
    .ast-separate-container .comments-area .comment-respond,
    .ast-separate-container .comments-area .ast-comment-list li,
    .woocommerce.ast-separate-container .ast-woocommerce-container,
    .ast-separate-container .error-404,
    .ast-separate-container .no-results,
    .single.ast-separate-container .site-main .ast-author-meta,
    .ast-separate-container .related-posts-title-wrapper,
    .ast-separate-container .comments-count-wrapper,
    .ast-box-layout.ast-plain-container .site-content,
    .ast-padded-layout.ast-plain-container .site-content,
    .ast-separate-container .comments-area .comments-title,
    .ast-separate-container .ast-archive-description {
      background-color: var(--ast-global-color-5);
    }

    @media (max-width: 921px) {

      .ast-separate-container .ast-article-single:not(.ast-related-post),
      .ast-separate-container .comments-area .comment-respond,
      .ast-separate-container .comments-area .ast-comment-list li,
      .woocommerce.ast-separate-container .ast-woocommerce-container,
      .ast-separate-container .error-404,
      .ast-separate-container .no-results,
      .single.ast-separate-container .site-main .ast-author-meta,
      .ast-separate-container .related-posts-title-wrapper,
      .ast-separate-container .comments-count-wrapper,
      .ast-box-layout.ast-plain-container .site-content,
      .ast-padded-layout.ast-plain-container .site-content,
      .ast-separate-container .comments-area .comments-title,
      .ast-separate-container .ast-archive-description {
        background-color: var(--ast-global-color-5);
      }
    }

    @media (max-width: 544px) {

      .ast-separate-container .ast-article-single:not(.ast-related-post),
      .ast-separate-container .comments-area .comment-respond,
      .ast-separate-container .comments-area .ast-comment-list li,
      .woocommerce.ast-separate-container .ast-woocommerce-container,
      .ast-separate-container .error-404,
      .ast-separate-container .no-results,
      .single.ast-separate-container .site-main .ast-author-meta,
      .ast-separate-container .related-posts-title-wrapper,
      .ast-separate-container .comments-count-wrapper,
      .ast-box-layout.ast-plain-container .site-content,
      .ast-padded-layout.ast-plain-container .site-content,
      .ast-separate-container .comments-area .comments-title,
      .ast-separate-container .ast-archive-description {
        background-color: var(--ast-global-color-5);
      }
    }

    .ast-separate-container.ast-two-container #secondary .widget {
      background-color: var(--ast-global-color-5);
    }

    @media (max-width: 921px) {
      .ast-separate-container.ast-two-container #secondary .widget {
        background-color: var(--ast-global-color-5);
      }
    }

    @media (max-width: 544px) {
      .ast-separate-container.ast-two-container #secondary .widget {
        background-color: var(--ast-global-color-5);
      }
    }

    .ast-plain-container,
    .ast-page-builder-template {
      background-color: var(--ast-global-color-5);
    }

    @media (max-width: 921px) {

      .ast-plain-container,
      .ast-page-builder-template {
        background-color: var(--ast-global-color-5);
      }
    }

    @media (max-width: 544px) {

      .ast-plain-container,
      .ast-page-builder-template {
        background-color: var(--ast-global-color-5);
      }
    }

    #ast-scroll-top {
      display: none;
      position: fixed;
      text-align: center;
      cursor: pointer;
      z-index: 99;
      width: 2.1em;
      height: 2.1em;
      line-height: 2.1;
      color: #ffffff;
      border-radius: 2px;
      content: "";
      outline: inherit;
    }

    @media (min-width: 769px) {
      #ast-scroll-top {
        content: "769";
      }
    }

    #ast-scroll-top .ast-icon.icon-arrow svg {
      margin-left: 0px;
      vertical-align: middle;
      transform: translate(0, -20%) rotate(180deg);
      width: 1.6em;
    }

    .ast-scroll-to-top-right {
      right: 30px;
      bottom: 30px;
    }

    .ast-scroll-to-top-left {
      left: 30px;
      bottom: 30px;
    }

    #ast-scroll-top {
      background-color: var(--ast-global-color-0);
      font-size: 15px;
      font-size: 0.9375rem;
    }

    @media (max-width: 921px) {
      #ast-scroll-top .ast-icon.icon-arrow svg {
        width: 1em;
      }
    }

    .ast-mobile-header-content>*,
    .ast-desktop-header-content>* {
      padding: 10px 0;
      height: auto;
    }

    .ast-mobile-header-content>*:first-child,
    .ast-desktop-header-content>*:first-child {
      padding-top: 10px;
    }

    .ast-mobile-header-content>.ast-builder-menu,
    .ast-desktop-header-content>.ast-builder-menu {
      padding-top: 0;
    }

    .ast-mobile-header-content>*:last-child,
    .ast-desktop-header-content>*:last-child {
      padding-bottom: 0;
    }

    .ast-mobile-header-content .ast-search-menu-icon.ast-inline-search label,
    .ast-desktop-header-content .ast-search-menu-icon.ast-inline-search label {
      width: 100%;
    }

    .ast-desktop-header-content .main-header-bar-navigation .ast-submenu-expanded>.ast-menu-toggle::before {
      transform: rotateX(180deg);
    }

    #ast-desktop-header .ast-desktop-header-content,
    .ast-mobile-header-content .ast-search-icon,
    .ast-desktop-header-content .ast-search-icon,
    .ast-mobile-header-wrap .ast-mobile-header-content,
    .ast-main-header-nav-open.ast-popup-nav-open .ast-mobile-header-wrap .ast-mobile-header-content,
    .ast-main-header-nav-open.ast-popup-nav-open .ast-desktop-header-content {
      display: none;
    }

    .ast-main-header-nav-open.ast-header-break-point #ast-desktop-header .ast-desktop-header-content,
    .ast-main-header-nav-open.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content {
      display: block;
    }

    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-up>.menu-item .menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-slide-down>.menu-item .menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item>.sub-menu,
    .ast-desktop .ast-desktop-header-content .astra-menu-animation-fade>.menu-item .menu-item>.sub-menu {
      opacity: 1;
      visibility: visible;
    }

    .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation {
      width: unset;
      margin: unset;
    }

    .ast-mobile-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle,
    .ast-desktop-header-content.content-align-flex-end .main-header-bar-navigation .menu-item-has-children>.ast-menu-toggle {
      left: calc(20px - 0.907em);
      right: auto;
    }

    .ast-mobile-header-content .ast-search-menu-icon,
    .ast-mobile-header-content .ast-search-menu-icon.slide-search,
    .ast-desktop-header-content .ast-search-menu-icon,
    .ast-desktop-header-content .ast-search-menu-icon.slide-search {
      width: 100%;
      position: relative;
      display: block;
      right: auto;
      transform: none;
    }

    .ast-mobile-header-content .ast-search-menu-icon.slide-search .search-form,
    .ast-mobile-header-content .ast-search-menu-icon .search-form,
    .ast-desktop-header-content .ast-search-menu-icon.slide-search .search-form,
    .ast-desktop-header-content .ast-search-menu-icon .search-form {
      right: 0;
      visibility: visible;
      opacity: 1;
      position: relative;
      top: auto;
      transform: none;
      padding: 0;
      display: block;
      overflow: hidden;
    }

    .ast-mobile-header-content .ast-search-menu-icon.ast-inline-search .search-field,
    .ast-mobile-header-content .ast-search-menu-icon .search-field,
    .ast-desktop-header-content .ast-search-menu-icon.ast-inline-search .search-field,
    .ast-desktop-header-content .ast-search-menu-icon .search-field {
      width: 100%;
      padding-right: 5.5em;
    }

    .ast-mobile-header-content .ast-search-menu-icon .search-submit,
    .ast-desktop-header-content .ast-search-menu-icon .search-submit {
      display: block;
      position: absolute;
      height: 100%;
      top: 0;
      right: 0;
      padding: 0 1em;
      border-radius: 0;
    }

    .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation ul .sub-menu .menu-link {
      padding-left: 30px;
    }

    .ast-hfb-header.ast-default-menu-enable.ast-header-break-point .ast-mobile-header-wrap .ast-mobile-header-content .main-header-bar-navigation .sub-menu .menu-item .menu-item .menu-link {
      padding-left: 40px;
    }

    .ast-mobile-popup-drawer.active .ast-mobile-popup-inner {
      background-color: #ffffff;
    }

    .ast-mobile-header-wrap .ast-mobile-header-content,
    .ast-desktop-header-content {
      background-color: #ffffff;
    }

    .ast-mobile-popup-content>*,
    .ast-mobile-header-content>*,
    .ast-desktop-popup-content>*,
    .ast-desktop-header-content>* {
      padding-top: 0;
      padding-bottom: 0;
    }

    .content-align-flex-start .ast-builder-layout-element {
      justify-content: flex-start;
    }

    .content-align-flex-start .main-header-menu {
      text-align: left;
    }

    .ast-mobile-popup-drawer.active .menu-toggle-close {
      color: #3a3a3a;
    }

    .ast-mobile-header-wrap .ast-primary-header-bar,
    .ast-primary-header-bar .site-primary-header-wrap {
      min-height: 80px;
    }

    .ast-desktop .ast-primary-header-bar .main-header-menu>.menu-item {
      line-height: 80px;
    }

    .ast-header-break-point #masthead .ast-mobile-header-wrap .ast-primary-header-bar,
    .ast-header-break-point #masthead .ast-mobile-header-wrap .ast-below-header-bar,
    .ast-header-break-point #masthead .ast-mobile-header-wrap .ast-above-header-bar {
      padding-left: 20px;
      padding-right: 20px;
    }

    .ast-header-break-point .ast-primary-header-bar {
      border-bottom-width: 1px;
      border-bottom-color: #eaeaea;
      border-bottom-style: solid;
    }

    @media (min-width: 922px) {
      .ast-primary-header-bar {
        border-bottom-width: 1px;
        border-bottom-color: #eaeaea;
        border-bottom-style: solid;
      }
    }

    .ast-primary-header-bar {
      background-color: #ffffff;
    }

    .ast-primary-header-bar {
      display: block;
    }

    @media (max-width: 921px) {
      .ast-header-break-point .ast-primary-header-bar {
        display: grid;
      }
    }

    @media (max-width: 544px) {
      .ast-header-break-point .ast-primary-header-bar {
        display: grid;
      }
    }

    [data-section="section-header-mobile-trigger"] .ast-button-wrap .ast-mobile-menu-trigger-minimal {
      color: var(--ast-global-color-0);
      border: none;
      background: transparent;
    }

    [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-toggle-icon .ast-mobile-svg {
      width: 20px;
      height: 20px;
      fill: var(--ast-global-color-0);
    }

    [data-section="section-header-mobile-trigger"] .ast-button-wrap .mobile-menu-wrap .mobile-menu {
      color: var(--ast-global-color-0);
    }

    .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.menu-link {
      color: var(--ast-global-color-3);
    }

    .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.ast-menu-toggle {
      color: var(--ast-global-color-3);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item:hover>.menu-link,
    .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item:hover>.ast-menu-toggle {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.menu-link,
    .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.menu-link,
    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.ast-menu-toggle {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.ast-menu-toggle {
      color: var(--ast-global-color-1);
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
      top: 0;
    }

    .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
      content: unset;
    }

    .ast-hfb-header .ast-builder-menu-mobile .main-header-menu,
    .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
    .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link {
      border-style: none;
    }

    .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
      top: 0;
    }

    @media (max-width: 921px) {
      .ast-builder-menu-mobile .main-navigation .main-header-menu .menu-item>.menu-link {
        color: var(--ast-global-color-3);
      }

      .ast-builder-menu-mobile .main-navigation .menu-item>.ast-menu-toggle {
        color: var(--ast-global-color-3);
      }

      .ast-builder-menu-mobile .main-navigation .menu-item:hover>.menu-link,
      .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item:hover>.ast-menu-toggle {
        color: var(--ast-global-color-1);
        background: var(--ast-global-color-4);
      }

      .ast-builder-menu-mobile .main-navigation .menu-item:hover>.ast-menu-toggle {
        color: var(--ast-global-color-1);
      }

      .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.menu-link,
      .ast-builder-menu-mobile .main-navigation .inline-on-mobile .menu-item.current-menu-item>.ast-menu-toggle,
      .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.menu-link,
      .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-ancestor>.ast-menu-toggle {
        color: var(--ast-global-color-1);
        background: var(--ast-global-color-4);
      }

      .ast-builder-menu-mobile .main-navigation .menu-item.current-menu-item>.ast-menu-toggle {
        color: var(--ast-global-color-1);
      }

      .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
        top: 0;
      }

      .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
        content: unset;
      }

      .ast-builder-menu-mobile .main-navigation .main-header-menu,
      .ast-builder-menu-mobile .main-navigation .main-header-menu .sub-menu {
        background-color: var(--ast-global-color-5);
      }
    }

    @media (max-width: 544px) {
      .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
        top: 0;
      }
    }

    .ast-builder-menu-mobile .main-navigation {
      display: block;
    }

    @media (max-width: 921px) {
      .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
        display: block;
      }
    }

    @media (max-width: 544px) {
      .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
        display: block;
      }
    }

    :root {
      --e-global-color-astglobalcolor0: #046bd2;
      --e-global-color-astglobalcolor1: #045cb4;
      --e-global-color-astglobalcolor2: #1e293b;
      --e-global-color-astglobalcolor3: #334155;
      --e-global-color-astglobalcolor4: #f9fafb;
      --e-global-color-astglobalcolor5: #ffffff;
      --e-global-color-astglobalcolor6: #e2e8f0;
      --e-global-color-astglobalcolor7: #cbd5e1;
      --e-global-color-astglobalcolor8: #94a3b8;
    }
  </style>
  <link rel="stylesheet" id="wp-block-library-css" href="{{asset('admin_assets/style.min.css')}}" media="all" />
  <style id="global-styles-inline-css">
    body {
      --wp--preset--color--black: #000000;
      --wp--preset--color--cyan-bluish-gray: #abb8c3;
      --wp--preset--color--white: #ffffff;
      --wp--preset--color--pale-pink: #f78da7;
      --wp--preset--color--vivid-red: #cf2e2e;
      --wp--preset--color--luminous-vivid-orange: #ff6900;
      --wp--preset--color--luminous-vivid-amber: #fcb900;
      --wp--preset--color--light-green-cyan: #7bdcb5;
      --wp--preset--color--vivid-green-cyan: #00d084;
      --wp--preset--color--pale-cyan-blue: #8ed1fc;
      --wp--preset--color--vivid-cyan-blue: #0693e3;
      --wp--preset--color--vivid-purple: #9b51e0;
      --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
      --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
      --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
      --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
      --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
      --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
      --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
      --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
      --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
      --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,
          rgba(6, 147, 227, 1) 0%,
          rgb(155, 81, 224) 100%);
      --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,
          rgb(122, 220, 180) 0%,
          rgb(0, 208, 130) 100%);
      --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,
          rgba(252, 185, 0, 1) 0%,
          rgba(255, 105, 0, 1) 100%);
      --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,
          rgba(255, 105, 0, 1) 0%,
          rgb(207, 46, 46) 100%);
      --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,
          rgb(238, 238, 238) 0%,
          rgb(169, 184, 195) 100%);
      --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,
          rgb(74, 234, 220) 0%,
          rgb(151, 120, 209) 20%,
          rgb(207, 42, 186) 40%,
          rgb(238, 44, 130) 60%,
          rgb(251, 105, 98) 80%,
          rgb(254, 248, 76) 100%);
      --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,
          rgb(255, 206, 236) 0%,
          rgb(152, 150, 240) 100%);
      --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,
          rgb(254, 205, 165) 0%,
          rgb(254, 45, 45) 50%,
          rgb(107, 0, 62) 100%);
      --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,
          rgb(255, 203, 112) 0%,
          rgb(199, 81, 192) 50%,
          rgb(65, 88, 208) 100%);
      --wp--preset--gradient--pale-ocean: linear-gradient(135deg,
          rgb(255, 245, 203) 0%,
          rgb(182, 227, 212) 50%,
          rgb(51, 167, 181) 100%);
      --wp--preset--gradient--electric-grass: linear-gradient(135deg,
          rgb(202, 248, 128) 0%,
          rgb(113, 206, 126) 100%);
      --wp--preset--gradient--midnight: linear-gradient(135deg,
          rgb(2, 3, 129) 0%,
          rgb(40, 116, 252) 100%);
      --wp--preset--font-size--small: 13px;
      --wp--preset--font-size--medium: 20px;
      --wp--preset--font-size--large: 36px;
      --wp--preset--font-size--x-large: 42px;
      --wp--preset--spacing--20: 0.44rem;
      --wp--preset--spacing--30: 0.67rem;
      --wp--preset--spacing--40: 1rem;
      --wp--preset--spacing--50: 1.5rem;
      --wp--preset--spacing--60: 2.25rem;
      --wp--preset--spacing--70: 3.38rem;
      --wp--preset--spacing--80: 5.06rem;
      --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
      --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
      --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1),
        6px 6px rgba(0, 0, 0, 1);
      --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
    }

    body {
      margin: 0;
      --wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
      --wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
    }

    .wp-site-blocks>.alignleft {
      float: left;
      margin-right: 2em;
    }

    .wp-site-blocks>.alignright {
      float: right;
      margin-left: 2em;
    }

    .wp-site-blocks>.aligncenter {
      justify-content: center;
      margin-left: auto;
      margin-right: auto;
    }

    :where(.wp-site-blocks)>* {
      margin-block-start: 24px;
      margin-block-end: 0;
    }

    :where(.wp-site-blocks)> :first-child:first-child {
      margin-block-start: 0;
    }

    :where(.wp-site-blocks)> :last-child:last-child {
      margin-block-end: 0;
    }

    body {
      --wp--style--block-gap: 24px;
    }

    :where(body .is-layout-flow)> :first-child:first-child {
      margin-block-start: 0;
    }

    :where(body .is-layout-flow)> :last-child:last-child {
      margin-block-end: 0;
    }

    :where(body .is-layout-flow)>* {
      margin-block-start: 24px;
      margin-block-end: 0;
    }

    :where(body .is-layout-constrained)> :first-child:first-child {
      margin-block-start: 0;
    }

    :where(body .is-layout-constrained)> :last-child:last-child {
      margin-block-end: 0;
    }

    :where(body .is-layout-constrained)>* {
      margin-block-start: 24px;
      margin-block-end: 0;
    }

    :where(body .is-layout-flex) {
      gap: 24px;
    }

    :where(body .is-layout-grid) {
      gap: 24px;
    }

    body .is-layout-flow>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-flow>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-flow>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignleft {
      float: left;
      margin-inline-start: 0;
      margin-inline-end: 2em;
    }

    body .is-layout-constrained>.alignright {
      float: right;
      margin-inline-start: 2em;
      margin-inline-end: 0;
    }

    body .is-layout-constrained>.aligncenter {
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
      max-width: var(--wp--style--global--content-size);
      margin-left: auto !important;
      margin-right: auto !important;
    }

    body .is-layout-constrained>.alignwide {
      max-width: var(--wp--style--global--wide-size);
    }

    body .is-layout-flex {
      display: flex;
    }

    body .is-layout-flex {
      flex-wrap: wrap;
      align-items: center;
    }

    body .is-layout-flex>* {
      margin: 0;
    }

    body .is-layout-grid {
      display: grid;
    }

    body .is-layout-grid>* {
      margin: 0;
    }

    body {
      padding-top: 0px;
      padding-right: 0px;
      padding-bottom: 0px;
      padding-left: 0px;
    }

    a:where(:not(.wp-element-button)) {
      text-decoration: none;
    }

    .wp-element-button,
    .wp-block-button__link {
      background-color: #32373c;
      border-width: 0;
      color: #fff;
      font-family: inherit;
      font-size: inherit;
      line-height: inherit;
      padding: calc(0.667em + 2px) calc(1.333em + 2px);
      text-decoration: none;
    }

    .has-black-color {
      color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
      color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
      color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
      color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
      color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
      color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
      color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
      color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
      color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
      color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
      color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
      color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-ast-global-color-0-color {
      color: var(--wp--preset--color--ast-global-color-0) !important;
    }

    .has-ast-global-color-1-color {
      color: var(--wp--preset--color--ast-global-color-1) !important;
    }

    .has-ast-global-color-2-color {
      color: var(--wp--preset--color--ast-global-color-2) !important;
    }

    .has-ast-global-color-3-color {
      color: var(--wp--preset--color--ast-global-color-3) !important;
    }

    .has-ast-global-color-4-color {
      color: var(--wp--preset--color--ast-global-color-4) !important;
    }

    .has-ast-global-color-5-color {
      color: var(--wp--preset--color--ast-global-color-5) !important;
    }

    .has-ast-global-color-6-color {
      color: var(--wp--preset--color--ast-global-color-6) !important;
    }

    .has-ast-global-color-7-color {
      color: var(--wp--preset--color--ast-global-color-7) !important;
    }

    .has-ast-global-color-8-color {
      color: var(--wp--preset--color--ast-global-color-8) !important;
    }

    .has-black-background-color {
      background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
      background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
      background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
      background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
      background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
      background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
      background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
      background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
      background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
      background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
      background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-ast-global-color-0-background-color {
      background-color: var(--wp--preset--color--ast-global-color-0) !important;
    }

    .has-ast-global-color-1-background-color {
      background-color: var(--wp--preset--color--ast-global-color-1) !important;
    }

    .has-ast-global-color-2-background-color {
      background-color: var(--wp--preset--color--ast-global-color-2) !important;
    }

    .has-ast-global-color-3-background-color {
      background-color: var(--wp--preset--color--ast-global-color-3) !important;
    }

    .has-ast-global-color-4-background-color {
      background-color: var(--wp--preset--color--ast-global-color-4) !important;
    }

    .has-ast-global-color-5-background-color {
      background-color: var(--wp--preset--color--ast-global-color-5) !important;
    }

    .has-ast-global-color-6-background-color {
      background-color: var(--wp--preset--color--ast-global-color-6) !important;
    }

    .has-ast-global-color-7-background-color {
      background-color: var(--wp--preset--color--ast-global-color-7) !important;
    }

    .has-ast-global-color-8-background-color {
      background-color: var(--wp--preset--color--ast-global-color-8) !important;
    }

    .has-black-border-color {
      border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
      border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
      border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
      border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
      border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
      border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
      border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
      border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
      border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
      border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
      border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-ast-global-color-0-border-color {
      border-color: var(--wp--preset--color--ast-global-color-0) !important;
    }

    .has-ast-global-color-1-border-color {
      border-color: var(--wp--preset--color--ast-global-color-1) !important;
    }

    .has-ast-global-color-2-border-color {
      border-color: var(--wp--preset--color--ast-global-color-2) !important;
    }

    .has-ast-global-color-3-border-color {
      border-color: var(--wp--preset--color--ast-global-color-3) !important;
    }

    .has-ast-global-color-4-border-color {
      border-color: var(--wp--preset--color--ast-global-color-4) !important;
    }

    .has-ast-global-color-5-border-color {
      border-color: var(--wp--preset--color--ast-global-color-5) !important;
    }

    .has-ast-global-color-6-border-color {
      border-color: var(--wp--preset--color--ast-global-color-6) !important;
    }

    .has-ast-global-color-7-border-color {
      border-color: var(--wp--preset--color--ast-global-color-7) !important;
    }

    .has-ast-global-color-8-border-color {
      border-color: var(--wp--preset--color--ast-global-color-8) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
      background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
      background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
      background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
      background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
      background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
      background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
      background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
      background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
      background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
      background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
      background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
      font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
      font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
      font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
      font-size: var(--wp--preset--font-size--x-large) !important;
    }

    .wp-block-navigation a:where(:not(.wp-element-button)) {
      color: inherit;
    }

    .wp-block-pullquote {
      font-size: 1.5em;
      line-height: 1.6;
    }
  </style>
  <link rel="stylesheet" id="elementor-frontend-css" href="{{asset('admin_assets/frontend-lite.min.css')}}" media="all" />
  <link rel="stylesheet" id="eael-general-css" href="{{asset('admin_assets/general.min.css')}}" media="all" />
  <link rel="stylesheet" id="eael-11-css" href="{{asset('admin_assets/eael-11.css')}}" media="all" />
  <link rel="stylesheet" id="elementor-icons-css" href="{{asset('admin_assets/elementor-icons.min.css')}}" media="all" />
  <style id="elementor-icons-inline-css">
    .elementor-add-new-section .elementor-add-templately-promo-button {
      background-color: #5d4fff;
      background-image: url(https://cakeshop.reekweb.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
      background-repeat: no-repeat;
      background-position: center center;
      position: relative;
    }

    .elementor-add-new-section .elementor-add-templately-promo-button>i {
      height: 12px;
    }

    body .elementor-add-new-section .elementor-add-section-area-button {
      margin-left: 0;
    }

    .elementor-add-new-section .elementor-add-templately-promo-button {
      background-color: #5d4fff;
      background-image: url(https://cakeshop.reekweb.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/admin/images/templately/logo-icon.svg);
      background-repeat: no-repeat;
      background-position: center center;
      position: relative;
    }

    .elementor-add-new-section .elementor-add-templately-promo-button>i {
      height: 12px;
    }

    body .elementor-add-new-section .elementor-add-section-area-button {
      margin-left: 0;
    }

    .card-icon-div {
      height: 30%;
      width: 8%;
      float: left;
    }

    .card-icon-div>i {
      color: #057851;
      font-size: 150%;
    }

    .card-details-vid {
      float: left;
      width: 92%;
    }

    .card-set-float {
      float: left !important;

    }

    .custom-border-radious {
      border-radius: 7%;
    }

    .card-body-custom-height {
      height: 200px;
    }

    .card-img-div {
      height: 70%;
      width: 100%;
    }

    .card-img-div>img {
      height: 100%;
      width: 100%;
    }

    .card-title-div {
      height: 30%;
      width: 100%;
    }

    .elementor-section-bottom8 {
      margin-bottom: -8% !important;
    }

    /* .elementor-column{
      text-align: center !important;
    } */
  </style>
  <link rel="stylesheet" id="swiper-css" href="{{asset('admin_assets/swiper.min.css')}}" media="all" />
  <link rel="stylesheet" id="elementor-post-10-css" href="{{asset('admin_assets/post-10.css')}}" media="all" />
  <link rel="stylesheet" id="elementor-global-css" href="{{asset('admin_assets/global.css')}}" media="all" />
  <link rel="stylesheet" id="elementor-post-11-css" href="{{asset('admin_assets/post-11.css')}}" media="all" />
  <link rel="stylesheet" id="google-fonts-1-css" href="{{asset('admin_assets/css')}}" media="all" />
  <link rel="stylesheet" id="elementor-icons-shared-0-css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" media="all" />
  <link rel="stylesheet" id="elementor-icons-fa-solid-css" href="/admin_assets/solid.min.css" media="all" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <!--[if IE]>
      <script
        src="https://cakeshop.reekweb.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=4.3.1"
        id="astra-flexibility-js"
      ></script>
      <script id="astra-flexibility-js-after">
        flexibility(document.documentElement);
      </script>
    <![endif]-->
  <script src="{{asset('admin_assets/jquery.min.js')}}" id="jquery-core-js"></script>
  <script src="{{asset('admin_assets/jquery-migrate.min.js')}}" id="jquery-migrate-js"></script>
  <link rel="https://api.w.org/" href="https://cakeshop.reekweb.com/index.php?rest_route=/" />
  <link rel="alternate" type="application/json" href="https://cakeshop.reekweb.com/index.php?rest_route=/wp/v2/pages/11" />
  <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://cakeshop.reekweb.com/xmlrpc.php?rsd" />
  <meta name="generator" content="WordPress 6.3.1" />
  <link rel="canonical" href="" />
  <link rel="shortlink" href="" />
  <link rel="alternate" type="application/json+oembed" href="https://cakeshop.reekweb.com/index.php?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fcakeshop.reekweb.com%2F%3Fpage_id%3D11" />
  <link rel="alternate" type="text/xml+oembed" href="https://cakeshop.reekweb.com/index.php?rest_route=%2Foembed%2F1.0%2Fembed&amp;url=https%3A%2F%2Fcakeshop.reekweb.com%2F%3Fpage_id%3D11&amp;format=xml" />
  <meta name="generator" content="Elementor 3.14.1; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />

</head>

<body class="page-template page-template-elementor_canvas page page-id-11 ast-desktop ast-page-builder-template ast-no-sidebar astra-4.3.1 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header elementor-default elementor-template-canvas elementor-kit-10 elementor-page elementor-page-11 e--ua-blink e--ua-chrome e--ua-mac e--ua-webkit" style="" data-elementor-device-mode="desktop">
  <div data-elementor-type="wp-page" data-elementor-id="11" class="elementor elementor-11">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-998229b elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="998229b" data-element_type="section" data-settings='{"background_background":"classic"}'>
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-222a7ca" data-id="222a7ca" data-element_type="column">
          <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-86aff38 elementor-widget elementor-widget-heading" data-id="86aff38" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <style>
                  /*! elementor - v3.14.0 - 26-06-2023 */
                  .elementor-heading-title {
                    padding: 0;
                    margin: 0;
                    line-height: 1;
                  }

                  .elementor-widget-heading .elementor-heading-title[class*="elementor-size-"]>a {
                    color: inherit;
                    font-size: inherit;
                    line-height: inherit;
                  }

                  .elementor-widget-heading .elementor-heading-title.elementor-size-small {
                    font-size: 15px;
                  }

                  .elementor-widget-heading .elementor-heading-title.elementor-size-medium {
                    font-size: 19px;
                  }

                  .elementor-widget-heading .elementor-heading-title.elementor-size-large {
                    font-size: 29px;
                  }

                  .elementor-widget-heading .elementor-heading-title.elementor-size-xl {
                    font-size: 39px;
                  }

                  .elementor-widget-heading .elementor-heading-title.elementor-size-xxl {
                    font-size: 59px;
                  }
                </style>
                <h2 class="elementor-heading-title elementor-size-default">{{$single->heading_one ?? ''}}
                </h2>
              </div>
            </div>
            <div class="elementor-element elementor-element-a18778b elementor-widget elementor-widget-image" data-id="a18778b" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
                <style>
                  /*! elementor - v3.14.0 - 26-06-2023 */
                  .elementor-widget-image {
                    text-align: center;
                  }

                  .elementor-widget-image a {
                    display: inline-block;
                  }

                  .elementor-widget-image a img[src$=".svg"] {
                    width: 48px;
                  }

                  .elementor-widget-image img {
                    vertical-align: middle;
                    display: inline-block;
                  }
                </style>
                <img decoding="async" fetchpriority="high" width="1024" height="1024" src="{{asset('images/mustard_oil/'.$single->picture_one) ?? ''}}" class="attachment-large size-large wp-image-71" alt="First Picture" srcset="{{asset('images/mustard_oil/'.$single->picture_one) ?? ''}} 1024w,
                {{asset('images/mustard_oil/'.$single->picture_one) ?? ''}} 300w,
                {{asset('images/mustard_oil/'.$single->picture_one) ?? ''}} 150w,
                {{asset('images/mustard_oil/'.$single->picture_one) ?? ''}} 768w,
                {{asset('images/mustard_oil/'.$single->picture_one) ?? ''}} 1536w,
                {{asset('images/mustard_oil/'.$single->picture_one) ?? ''}} 1600w
                    " sizes="(max-width: 1024px) 100vw, 1024px" />
              </div>
            </div>
            <div class="elementor-element elementor-element-91bde2b elementor-align-center elementor-widget elementor-widget-button" data-id="91bde2b" data-element_type="widget" data-widget_type="button.default">
              <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                  <a data-prod-id="" class="elementor-button elementor-button-link elementor-size-sm buy_now" href="javascript:void(0)">
                    <span class="elementor-button-content-wrapper">
                      <span class="elementor-button-text">অর্ডার করতে চাই</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="elementor-element elementor-element-52f4e0f elementor-widget elementor-widget-heading" data-id="52f4e0f" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">{{$single->heading_second ?? ''}}
                </h2>
              </div>
            </div>
            <!-- Starts Advantages -->

            <section class="row elementor-section elementor-inner-section elementor-element elementor-element-20a666f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="20a666f" data-element_type="section">

              <div class="row row-cols-1 row-cols-md-3">
                @foreach($mustard as $mustDta)
                <div class="col mb-4 rounded-lg">
                  <div class="card shadow custom-border-radious">
                    <div class="card-body card-body-custom-height">
                      <div class="card-img-div">
                        <img decoding="async" class="img-fluid" alt="Picture" src="{{asset('images/whymustard/'.$mustDta->icon ) ?? '' }}" srcset="
                          {{asset('images/whymustard/'.$mustDta->icon ) ?? '' }} 500w, 
                          {{asset('images/whymustard/'.$mustDta->icon ) ?? '' }} 300w, 
                          {{asset('images/whymustard/'.$mustDta->icon ) ?? '' }} 150w " />
                      </div>
                      <div class="card-title-div">
                        <h5 class="card-title text-center" style="color:black; ">{{$mustDta->details}}</h5>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>

            </section>
            <!-- /Starts Advantages -->
            <div class="elementor-element elementor-element-0c69c76 elementor-align-center elementor-widget elementor-widget-button" data-id="0c69c76" data-element_type="widget" data-widget_type="button.default">
              <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                  <a data-prod-id="" class="elementor-button elementor-button-link elementor-size-sm buy_now" href="javascript:void(0)">
                    <span class="elementor-button-content-wrapper">
                      <span class="elementor-button-text">অর্ডার করতে চাই</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-0419756 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0419756" data-element_type="section" data-settings='{"background_background":"classic"}'>
              <div class="elementor-container elementor-column-gap-default ">
                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-e7fefe3" data-id="e7fefe3" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-e4ffb72 elementor-widget elementor-widget-heading" data-id="e4ffb72" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">{{$single->heading_third ?? ''}}
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="elementor-section elementor-inner-section elementor-element elementor-element-344cc4e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="344cc4e" data-element_type="section">

              <div class="padd20px">
                <div class="row row-cols-1 row-cols-md-2">
                  @foreach($safe as $safeDta)
                  <div class="col mb-4 rounded-lg">
                    <div class="card shadow border-dark">
                      <div class="card-body">
                        <div class="card-icon-div">
                          <i aria-hidden="true" class="fas fa-dot-circle"></i>
                        </div>
                        <div class="card-details-vid">
                          <h5 class="card-title" style="color:black">{{$safeDta->details}}</h5>
                        </div>

                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </section>

            <div class="elementor-element elementor-element-a18778b elementor-widget elementor-widget-image" data-id="a18778b" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
                <style>
                  /*! elementor - v3.14.0 - 26-06-2023 */
                  .elementor-widget-image {
                    text-align: center;
                    padding-top: 10px;
                  }

                  .elementor-widget-image a {
                    display: inline-block;
                  }

                  .elementor-widget-image a img[src$=".svg"] {
                    width: 48px;
                  }

                  .elementor-widget-image img {
                    vertical-align: middle;
                    display: inline-block;
                  }
                </style>
                <img decoding="async" fetchpriority="high" width="1024" height="1024" src="{{asset('images/mustard_oil/'.$single->picture_second) ?? ''}}" class="attachment-large size-large wp-image-71" alt="Advertisement Picture" sizes="(max-width: 1024px) 100vw, 1024px" />
              </div>
            </div>

            <div class="elementor-element elementor-element-61bfce0 elementor-widget elementor-widget-heading" data-id="61bfce0" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  {{$single->heading_fourth ?? " " }}
                </h2>
              </div>
            </div>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-40f78a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="40f78a6" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-96ba1b8" data-id="96ba1b8" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-3c0fa86 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3c0fa86" data-element_type="section">
                      @foreach($advantage as $AdData)
                      <div style="margin-bottom: -55px;" class="elementor-container elementor-column-gap-default card-set">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-eea30ff" data-id="eea30ff" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-dff7ef4 elementor-view-default elementor-widget elementor-widget-icon" data-id="dff7ef4" data-element_type="widget" data-widget_type="icon.default">
                              <div class="elementor-widget-container">
                                <div class="elementor-icon-wrapper">
                                  <div class="elementor-icon">
                                    <i aria-hidden="true" class="fas fa-arrow-alt-circle-right"></i>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-edd3d2e" data-id="edd3d2e" data-element_type="column">
                          <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-fdded99 eael-dual-header-content-align-left elementor-widget elementor-widget-eael-dual-color-header" data-id="fdded99" data-element_type="widget" data-widget_type="eael-dual-color-header.default">
                              <div class="elementor-widget-container">
                                <div class="eael-dual-header">
                                  <h2 class="title">
                                    <span class="lead solid-color">{{$AdData->heading ?? ''}} :</span>
                                    <span> {{$AdData->details ?? '' }}</span>
                                  </h2>
                                  <span class="subtext"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                    </section>
                  </div>
                </div>
              </div>
            </section>
            <div class="elementor-element elementor-element-0fa9061 elementor-widget elementor-widget-image" data-id="0fa9061" data-element_type="widget" data-widget_type="image.default">
              <div class="elementor-widget-container">
                <img decoding="async" loading="lazy" width="1" height="1" src="{{asset('images/mustard_oil/'.$single->picture_third ?? '')}}" class="attachment-large size-large wp-image-170" alt="Title Picture" />
              </div>
            </div>
            <section class="elementor-section elementor-inner-section elementor-element elementor-element-e78a78c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="e78a78c" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
                @foreach($policy as $PolicyData)
                @if(($loop->odd)==100)
                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-dfa5858" data-id="dfa5858" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-2884a86 elementor-widget elementor-widget-heading" data-id="2884a86" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h2 class="text-center elementor-heading-title elementor-size-default">
                          {{$PolicyData->heading ?? ''}}
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
                @else
                <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f4451b4" data-id="f4451b4" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5d3f2e4 elementor-widget elementor-widget-heading" data-id="5d3f2e4" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h2 class="text-center elementor-heading-title elementor-size-default">
                          {{$PolicyData->heading ?? ''}}
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
                @endforeach

              </div>
            </section>
            @foreach($policy as $PolicyData)
            <section class="elementor-section-bottom8 elementor-section elementor-inner-section elementor-element elementor-element-c6e659f elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="c6e659f" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-dcf3728" data-id="dcf3728" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-33e0193 elementor-view-default elementor-widget elementor-widget-icon" data-id="33e0193" data-element_type="widget" data-widget_type="icon.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                          <div class="elementor-icon">
                            <i aria-hidden="true" class="fas fa-check-circle"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d92f2af" data-id="d92f2af" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-89bc0aa eael-dual-header-content-align-left elementor-widget elementor-widget-eael-dual-color-header" data-id="89bc0aa" data-element_type="widget" data-widget_type="eael-dual-color-header.default">
                      <div class="elementor-widget-container">
                        <div class="eael-dual-header">
                          <h2 class="title">
                            <span class="lead solid-color">{{$PolicyData->heading ?? ''}} : </span>
                            <span>{{$PolicyData->details ?? ''}}</span>
                          </h2>
                          <span class="subtext"></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            @endforeach


            <section class="elementor-section elementor-inner-section elementor-element elementor-element-b822b34 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b822b34" data-element_type="section">
              <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-93708b5" data-id="93708b5" data-element_type="column">
                  <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-203cb91 elementor-widget elementor-widget-heading" data-id="203cb91" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                          {{$single->heading_fifth}}
                        </h2>
                      </div>
                    </div>
                    <div class="elementor-element elementor-element-b21c7bd elementor-widget elementor-widget-heading" data-id="b21c7bd" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                          পূর্বের মূল্য : ১৩৫০
                        </h2>
                      </div>
                    </div>
                    <div class="elementor-element elementor-element-5ac6d40 elementor-widget elementor-widget-heading" data-id="5ac6d40" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                          বর্তমান মুল্যঃ ১১৯৯ টাকা
                        </h2>
                      </div>
                    </div>
                    <div class="elementor-element elementor-element-4f15598 elementor-widget elementor-widget-heading" data-id="4f15598" data-element_type="widget" data-widget_type="heading.default">
                      <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">
                          মুল্য ছাড়: ১৫১ টাকা
                        </h2>
                      </div>
                    </div>
                    <div class="elementor-element elementor-element-c2f0cdc elementor-align-center elementor-widget elementor-widget-button" data-id="c2f0cdc" data-element_type="widget" data-widget_type="button.default">
                      <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                          <a data-prod-id="" class="elementor-button elementor-button-link elementor-size-sm buy_now" href="javascript:void(0)">
                            <span class="elementor-button-content-wrapper">
                              <span class="elementor-button-text">অর্ডার করতে চাই</span>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <div class="elementor-element elementor-element-acfee60 elementor-widget elementor-widget-menu-anchor" data-id="acfee60" data-element_type="widget" data-widget_type="menu-anchor.default">
              <div class="elementor-widget-container">
                <style>
                  /*! elementor - v3.14.0 - 26-06-2023 */
                  body.elementor-page .elementor-widget-menu-anchor {
                    margin-bottom: 0;
                  }
                </style>
                <div id="ordernow" class="elementor-menu-anchor"></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-cc59d95 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="cc59d95" data-element_type="section">
      <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-26e1726" data-id="26e1726" data-element_type="column">
          <div class="elementor-widget-wrap"></div>
        </div>
      </div>
    </section>
  </div>

  <div id="ast-scroll-top" tabindex="0" class="ast-scroll-top-icon ast-scroll-to-top-right" data-on-devices="both" style="display: block">
    <span class="ast-icon icon-arrow"><svg class="ast-arrow-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="26px" height="16.043px" viewBox="57 35.171 26 16.043" enable-background="new 57 35.171 26 16.043" xml:space="preserve">
        <path d="M57.5,38.193l12.5,12.5l12.5-12.5l-2.5-2.5l-10,10l-10-10L57.5,38.193z"></path>
      </svg></span>
    <span class="screen-reader-text">Scroll to Top</span>
  </div>
  <script id="astra-theme-js-js-extra">
    var astra = {
      break_point: "921",
      isRtl: "",
      is_scroll_to_id: "1",
      is_scroll_to_top: "1",
      is_header_footer_builder_active: "1",
    };
  </script>
  <script src="{{asset('admin_assets/frontend.min.js')}}" id="astra-theme-js-js"></script>
  <script id="eael-general-js-extra">
    var localize = {
      ajaxurl: "https:\/\/cakeshop.reekweb.com\/wp-admin\/admin-ajax.php",
      nonce: "ec84e3e4c4",
      i18n: {
        added: "Added ",
        compare: "Compare",
        loading: "Loading..."
      },
      eael_translate_text: {
        required_text: "is a required field",
        invalid_text: "Invalid",
        billing_text: "Billing",
        shipping_text: "Shipping",
        fg_mfp_counter_text: "of",
      },
      page_permalink: "https:\/\/cakeshop.reekweb.com\/?page_id=11",
      cart_redirectition: "",
      cart_page_url: "",
      el_breakpoints: {
        mobile: {
          label: "Mobile Portrait",
          value: 767,
          default_value: 767,
          direction: "max",
          is_enabled: true,
        },
        mobile_extra: {
          label: "Mobile Landscape",
          value: 880,
          default_value: 880,
          direction: "max",
          is_enabled: false,
        },
        tablet: {
          label: "Tablet Portrait",
          value: 1024,
          default_value: 1024,
          direction: "max",
          is_enabled: true,
        },
        tablet_extra: {
          label: "Tablet Landscape",
          value: 1200,
          default_value: 1200,
          direction: "max",
          is_enabled: false,
        },
        laptop: {
          label: "Laptop",
          value: 1366,
          default_value: 1366,
          direction: "max",
          is_enabled: false,
        },
        widescreen: {
          label: "Widescreen",
          value: 2400,
          default_value: 2400,
          direction: "min",
          is_enabled: false,
        },
      },
    };
  </script>
  <script type="text/javascript" src="{{asset('assets/js/jquery.com_jquery-1.9.1.js')}}"></script>
  <script src="{{asset('admin_assets/general.min.js')}}" id="eael-general-js"></script>
  <script src="{{asset('admin_assets/eael-11.js')}}" id="eael-11-js"></script>
  <script src="{{asset('admin_assets/webpack.runtime.min.js')}}" id="elementor-webpack-runtime-js"></script>
  <script src="{{asset('admin_assets/frontend-modules.min.js')}}" id="elementor-frontend-modules-js"></script>
  <script src="{{asset('admin_assets/waypoints.min.js')}}" id="elementor-waypoints-js"></script>
  <script src="{{asset('admin_assets/core.min.js')}}" id="jquery-ui-core-js"></script>
  <script id="elementor-frontend-js-before">
    var elementorFrontendConfig = {
      environmentMode: {
        edit: false,
        wpPreview: false,
        isScriptDebug: false,
      },
      i18n: {
        shareOnFacebook: "Share on Facebook",
        shareOnTwitter: "Share on Twitter",
        pinIt: "Pin it",
        download: "Download",
        downloadImage: "Download image",
        fullscreen: "Fullscreen",
        zoom: "Zoom",
        share: "Share",
        playVideo: "Play Video",
        previous: "Previous",
        next: "Next",
        close: "Close",
        a11yCarouselWrapperAriaLabel: "Carousel | Horizontal scrolling: Arrow Left & Right",
        a11yCarouselPrevSlideMessage: "Previous slide",
        a11yCarouselNextSlideMessage: "Next slide",
        a11yCarouselFirstSlideMessage: "This is the first slide",
        a11yCarouselLastSlideMessage: "This is the last slide",
        a11yCarouselPaginationBulletMessage: "Go to slide",
      },
      is_rtl: false,
      breakpoints: {
        xs: 0,
        sm: 480,
        md: 768,
        lg: 1025,
        xl: 1440,
        xxl: 1600
      },
      responsive: {
        breakpoints: {
          mobile: {
            label: "Mobile Portrait",
            value: 767,
            default_value: 767,
            direction: "max",
            is_enabled: true,
          },
          mobile_extra: {
            label: "Mobile Landscape",
            value: 880,
            default_value: 880,
            direction: "max",
            is_enabled: false,
          },
          tablet: {
            label: "Tablet Portrait",
            value: 1024,
            default_value: 1024,
            direction: "max",
            is_enabled: true,
          },
          tablet_extra: {
            label: "Tablet Landscape",
            value: 1200,
            default_value: 1200,
            direction: "max",
            is_enabled: false,
          },
          laptop: {
            label: "Laptop",
            value: 1366,
            default_value: 1366,
            direction: "max",
            is_enabled: false,
          },
          widescreen: {
            label: "Widescreen",
            value: 2400,
            default_value: 2400,
            direction: "min",
            is_enabled: false,
          },
        },
      },
      version: "3.14.1",
      is_static: false,
      experimentalFeatures: {
        e_dom_optimization: true,
        e_optimized_assets_loading: true,
        e_optimized_css_loading: true,
        a11y_improvements: true,
        additional_custom_breakpoints: true,
        e_swiper_latest: true,
        "landing-pages": true,
      },
      urls: {
        assets: "https:\/\/cakeshop.reekweb.com\/wp-content\/plugins\/elementor\/assets\/",
      },
      swiperClass: "swiper",
      settings: {
        page: [],
        editorPreferences: []
      },
      kit: {
        active_breakpoints: ["viewport_mobile", "viewport_tablet"],
        global_image_lightbox: "yes",
        lightbox_enable_counter: "yes",
        lightbox_enable_fullscreen: "yes",
        lightbox_enable_zoom: "yes",
        lightbox_enable_share: "yes",
        lightbox_title_src: "title",
        lightbox_description_src: "description",
      },
      post: {
        id: 11,
        title: "Landing%20page%20%E2%80%93%20Sweet%20bite",
        excerpt: "",
        featuredImage: false,
      },
    };
  </script>
  <script src="{{asset('admin_assets/frontend.min(1).js')}}" id="elementor-frontend-js"></script>
  <span id="elementor-device-mode" class="elementor-screen-only"></span>
  <script>
    /(trident|msie)/i.test(navigator.userAgent) &&
      document.getElementById &&
      window.addEventListener &&
      window.addEventListener(
        "hashchange",
        function() {
          var t,
            e = location.hash.substring(1);
          /^[A-z0-9_-]+$/.test(e) &&
            (t = document.getElementById(e)) &&
            (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) ||
              (t.tabIndex = -1),
              t.focus());
        },
        !1
      );


    $(document).on('click', '.buy_now', function() {
      var prodID = $(this).data('prod-id');
      var cartData = {
        "prodAmount": '5 Liter',
        "quantity": 1,
        "_token": "{{csrf_token()}}",
      }
      $.ajax({
        url: '/cart/place-order/' + prodID,
        type: "POST",
        dataType: "json",
        data: cartData,
        success: function(response) {
          window.location.assign('/checkout')
        }
      });
    });
  </script>
</body>

</html>