<!DOCTYPE html>
<html lang="en-GB">
  <!-- Mirrored from synspace.com/en/contact by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Feb 2026 03:54:39 GMT -->
  <!-- Added by HTTrack --><meta
    http-equiv="content-type"
    content="text/html;charset=UTF-8"
  /><!-- /Added by HTTrack -->
  <head>
    <script>
      var gform;
      gform ||
        (document.addEventListener("gform_main_scripts_loaded", function () {
          gform.scriptsLoaded = !0;
        }),
        document.addEventListener("gform/theme/scripts_loaded", function () {
          gform.themeScriptsLoaded = !0;
        }),
        window.addEventListener("DOMContentLoaded", function () {
          gform.domLoaded = !0;
        }),
        (gform = {
          domLoaded: !1,
          scriptsLoaded: !1,
          themeScriptsLoaded: !1,
          isFormEditor: () => "function" == typeof InitializeEditor,
          callIfLoaded: function (o) {
            return !(
              !gform.domLoaded ||
              !gform.scriptsLoaded ||
              (!gform.themeScriptsLoaded && !gform.isFormEditor()) ||
              (gform.isFormEditor() &&
                console.warn(
                  "The use of gform.initializeOnLoaded() is deprecated in the form editor context and will be removed in Gravity Forms 3.1."
                ),
              o(),
              0)
            );
          },
          initializeOnLoaded: function (o) {
            gform.callIfLoaded(o) ||
              (document.addEventListener("gform_main_scripts_loaded", () => {
                (gform.scriptsLoaded = !0), gform.callIfLoaded(o);
              }),
              document.addEventListener("gform/theme/scripts_loaded", () => {
                (gform.themeScriptsLoaded = !0), gform.callIfLoaded(o);
              }),
              window.addEventListener("DOMContentLoaded", () => {
                (gform.domLoaded = !0), gform.callIfLoaded(o);
              }));
          },
          hooks: { action: {}, filter: {} },
          addAction: function (o, r, e, t) {
            gform.addHook("action", o, r, e, t);
          },
          addFilter: function (o, r, e, t) {
            gform.addHook("filter", o, r, e, t);
          },
          doAction: function (o) {
            gform.doHook("action", o, arguments);
          },
          applyFilters: function (o) {
            return gform.doHook("filter", o, arguments);
          },
          removeAction: function (o, r) {
            gform.removeHook("action", o, r);
          },
          removeFilter: function (o, r, e) {
            gform.removeHook("filter", o, r, e);
          },
          addHook: function (o, r, e, t, n) {
            null == gform.hooks[o][r] && (gform.hooks[o][r] = []);
            var d = gform.hooks[o][r];
            null == n && (n = r + "_" + d.length),
              gform.hooks[o][r].push({
                tag: n,
                callable: e,
                priority: (t = null == t ? 10 : t),
              });
          },
          doHook: function (r, o, e) {
            var t;
            if (
              ((e = Array.prototype.slice.call(e, 1)),
              null != gform.hooks[r][o] &&
                ((o = gform.hooks[r][o]).sort(function (o, r) {
                  return o.priority - r.priority;
                }),
                o.forEach(function (o) {
                  "function" != typeof (t = o.callable) && (t = window[t]),
                    "action" == r
                      ? t.apply(null, e)
                      : (e[0] = t.apply(null, e));
                })),
              "filter" == r)
            )
              return e[0];
          },
          removeHook: function (o, r, t, n) {
            var e;
            null != gform.hooks[o][r] &&
              ((e = (e = gform.hooks[o][r]).filter(function (o, r, e) {
                return !!(
                  (null != n && n != o.tag) ||
                  (null != t && t != o.priority)
                );
              })),
              (gform.hooks[o][r] = e));
          },
        }));
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      type="image/svg+xml"
      href="synspace.com/app/themes/synspace/public/images/favicon/favicon.ico"
    />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="synspace.com/app/themes/synspace/public/images/favicon/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="synspace.com/app/themes/synspace/public/images/favicon/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="synspace.com/app/themes/synspace/public/images/favicon/favicon-16x16.png"
    />
    <link
      rel="manifest"
      href="synspace.com/app/themes/synspace/public/images/favicon/site.webmanifest"
      crossorigin="use-credentials"
    />
    <link rel="preconnect" href="http://www.huasaiinfo.com/" />
    <link rel="dns-prefetch" href="http://www.huasaiinfo.com/" />
    <meta name="robots" content="noindex, follow" />
    <link
      rel="alternate"
      href="contact.php"
      hreflang="de-DE"
    />
    <link
      rel="alternate"
      href="contact.php"
      hreflang="de-CH"
    />
    <link rel="alternate" href="http://www.huasaiinfo.com/contact.html" hreflang="en" />
    <link
      rel="alternate"
      href="contact.php"
      hreflang="fr"
    />
    <link rel="stylesheet" href="contact.css" />
    <title>Do you have any questions or comments?</title>
    <meta
      name="description"
      content="Call or write to us. We will be happy to answer your questions."
    />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="de_DE" />
    <meta property="og:locale:alternate" content="fr_FR" />
    <meta property="og:type" content="article" />
    <meta
      property="og:title"
      content="Do you have any questions or comments?"
    />
    <meta
      property="og:description"
      content="Call or write to us. We will be happy to answer your questions."
    />
    <meta property="og:url" content="http://www.huasaiinfo.com/contact.php" />
    <meta property="og:site_name" content="深圳华赛" />
    <meta
      property="article:modified_time"
      content="2025-12-17T07:39:26+00:00"
    />
    <meta name="twitter:card" content="summary_large_image" />
    <script type="application/ld+json" class="yoast-schema-graph">
      {
        "@context": "https://schema.org",
        "@graph": [
          {
            "@type": "WebPage",
            "@id": "http://www.huasaiinfo.com/contact.php",
            "url": "http://www.huasaiinfo.com/contact.php",
            "name": "Do you have any questions or comments?",
            "isPartOf": { "@id": "http://www.huasaiinfo.com/index.php#website" },
            "datePublished": "2023-11-07T09:53:23+00:00",
            "dateModified": "2025-12-17T07:39:26+00:00",
            "description": "Call or write to us. We will be happy to answer your questions.",
            "breadcrumb": {
              "@id": "http://www.huasaiinfo.com/contact.php#breadcrumb"
            },
            "inLanguage": "en-GB",
            "potentialAction": [
              {
                "@type": "ReadAction",
                "target": ["http://www.huasaiinfo.com/contact.php"]
              }
            ]
          },
          {
            "@type": "BreadcrumbList",
            "@id": "http://www.huasaiinfo.com/contact.php#breadcrumb",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "http://www.huasaiinfo.com/index.php"
              },
              { "@type": "ListItem", "position": 2, "name": "Contact" }
            ]
          },
          {
            "@type": "WebSite",
            "@id": "http://www.huasaiinfo.com/index.php#website",
            "url": "http://www.huasaiinfo.com/index.php",
            "name": "深圳华赛",
            "description": "experts in excellence",
            "publisher": { "@id": "http://www.huasaiinfo.com/index.php#organization" },
            "potentialAction": [
              {
                "@type": "SearchAction",
                "target": {
                  "@type": "EntryPoint",
                  "urlTemplate": "http://www.huasaiinfo.com/index.php?s={search_term_string}"
                },
                "query-input": {
                  "@type": "PropertyValueSpecification",
                  "valueRequired": true,
                  "valueName": "search_term_string"
                }
              }
            ],
            "inLanguage": "en-GB"
          },
          {
            "@type": "Organization",
            "@id": "http://www.huasaiinfo.com/index.php#organization",
            "name": "深圳华赛",
            "url": "http://www.huasaiinfo.com/index.php",
            "logo": {
              "@type": "ImageObject",
              "inLanguage": "en-GB",
              "@id": "http://www.huasaiinfo.com/index.php#/schema/logo/image/",
              "url": "synspace.com/app/uploads/2024/01/logo_synspace.png",
              "contentUrl": "synspace.com/app/uploads/2024/01/logo_synspace.png",
              "width": 234,
              "height": 52,
              "caption": "深圳华赛"
            },
            "image": { "@id": "http://www.huasaiinfo.com/index.php#/schema/logo/image/" }
          }
        ]
      }
    </script>
    <link rel="shortlink" href="http://www.huasaiinfo.com/contact.php" />
<link
      rel="preload"
      href="synspace.com/app/themes/synspace/public/js/app.js"
      as="script"
    />
    <!-- 安全插件preload已移除 -->
  </head>
  <body
    class="wp-singular page-template page-template-template-contact page page-id-1299 wp-embed-responsive wp-theme-synspace contact"
  >
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
        
        <div class="m-contact">
          <section class="m-contactus">
            <div class="m-contactus__inner">
              <div class="container">
                <div class="row">
                  <div class="m-contactus__left">
                    <div class="m-contactus__image">
                      <picture class="no-lazyload"
                        ><source
                          media="(min-width: 1451px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/1000xauto_istock-1482769692-1.webp
                          "
                          type="image/webp" />
                        <source
                          media="(min-width: 1451px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/1000xauto_istock-1482769692-1.jpg
                          " />
                        <source
                          media="(min-width: 768px) and (max-width: 1450px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/800xauto_istock-1482769692-1.webp
                          "
                          type="image/webp" />
                        <source
                          media="(min-width: 768px) and (max-width: 1450px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/800xauto_istock-1482769692-1.jpg
                          " />
                        <source
                          media="(max-width: 1200px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/500xauto_istock-1482769692-1.webp
                          "
                          type="image/webp" />
                        <source
                          media="(max-width: 1200px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/500xauto_istock-1482769692-1.jpg
                          " />
                        <source
                          media="(max-width: 767px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/500xauto_istock-1482769692-1.webp
                          "
                          type="image/webp" />
                        <source
                          media="(max-width: 767px)"
                          srcset="
                            synspace.com/app/uploads/responsive_images/2023/11/500xauto_istock-1482769692-1.jpg
                          " />
                        <img
                          src="synspace.com/app/uploads/2023/11/iStock-1482769692-1.jpg"
                          alt=""
                          title="leiter-vertrieb"
                      /></picture>
                    </div>
                  </div>
                  <div class="m-contactus__content">
                    <div class="m-contactus__topline">
                      Do you have any question or comments?
                    </div>
                    <h2 class="m-contactus__title">GET IN TOUCH</h2>
                    <h5 class="m-contactus__subline">
                      Send an Email. All fields with an asterisk (*) are
                      required.
                    </h5>
                    <div class="m-contactus__down">
                      <a
                        href="#unten"
                        class="m-button__down"
                        data-icon-left="arrow-with-dash-down"
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="m-contactus" id="unten">
            <div class="m-contactus__inner">
              <div class="container">
                <div class="row">
                  <div class="m-contactus__left">
                    <h3 class="m-contactus__subtitle">
                      Please contact us directly
                    </h3>
                    <div class="m-contactus__text">
                      <p>
                        We are available to you by phone, email or via the
                        contact form.
                      </p>
                    </div>
                  </div>
                  <div class="m-contactus__content">
                    <div class="m-contactus__buttons">
                      <a
                        href="tel:+49 761 476 45 65"
                        title="DE: +49 761 476 45 65"
                        class="m-button__primary"
                        data-icon-left="phone"
                      >
                        DE: +49 761 476 45 65
                      </a>
                      <a
                        href="tel:+41 61 533 75 00"
                        title="CH: +41 61 533 75 00"
                        class="m-button__primary"
                        data-icon-left="phone"
                      >
                        CH: +41 61 533 75 00
                      </a>
                      <a
                        href="mailto:info@synspace.com"
                        title="info@synspace.com"
                        class="m-button__primary"
                        data-bg="lightgrey"
                        data-icon-left="mail"
                      >
                        info@synspace.com
                      </a>
                      <a
                        href="#formular"
                        title="Contact form"
                        class="m-button__primary"
                        data-bg="lightgrey"
                        data-icon-right="arrow-with-dash-right"
                      >
                        Contact form
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="m-contactus" id="formular">
            <div class="m-contactus__inner">
              <div class="container">
                <div class="row">
                  <div class="m-contactus__left">
                    <h3 class="m-contactus__subtitle">Contact</h3>
                  </div>
                  <div class="m-contactus__content">
                    <script></script>
                    <div
                      class="gf_browser_unknown gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital"
                      data-form-theme="orbital"
                      data-form-index="0"
                      id="gform_wrapper_7"
                    >
                      <div id="gf_7" class="gform_anchor" tabindex="-1"></div>
                      <div class="gform_heading">
                        <h2 class="gform_title">Contact form</h2>
                        <p class="gform_description"></p>
                        <p class="gform_required_legend">
                          &quot;<span
                            class="gfield_required gfield_required_asterisk"
                            >*</span
                          >&quot; indicates required fields
                        </p>
                      </div>
                      <form
                        method="post"
                        enctype="multipart/form-data"
                        id="gform_7"
                        action="contact.php#gf_7"
                        data-formid="7"
                        novalidate
                      >
                        <div class="gform-body gform_body">
                          <div
                            id="gform_fields_7"
                            class="gform_fields top_label form_sublabel_below description_below validation_below"
                          >
                            <div
                              id="field_7_10"
                              class="gfield gfield--type-honeypot gform_validation_container field_sublabel_below gfield--has-description field_description_below field_validation_below gfield_visibility_visible"
                            >
                              <label
                                class="gfield_label gform-field-label"
                                for="input_7_10"
                                >Instagram</label
                              >
                              <div class="ginput_container">
                                <input
                                  name="input_10"
                                  id="input_7_10"
                                  type="text"
                                  value=""
                                  autocomplete="new-password"
                                />
                              </div>
                              <div
                                class="gfield_description"
                                id="gfield_description_7_10"
                              >
                                This field is for validation purposes and should
                                be left unchanged.
                              </div>
                            </div>
                            <fieldset
                              id="field_7_1"
                              class="gfield gfield--type-name gfield--input-type-name gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
                            >
                              <legend
                                class="gfield_label gform-field-label gfield_label_before_complex"
                              >
                                Name<span class="gfield_required"
                                  ><span
                                    class="gfield_required gfield_required_asterisk"
                                    >*</span
                                  ></span
                                >
                              </legend>
                              <div
                                class="ginput_complex ginput_container ginput_container--name no_prefix has_first_name no_middle_name has_last_name no_suffix gf_name_has_2 ginput_container_name gform-grid-row"
                                id="input_7_1"
                              >
                                <span
                                  id="input_7_1_3_container"
                                  class="name_first gform-grid-col gform-grid-col--size-auto"
                                >
                                  <input
                                    type="text"
                                    name="input_1.3"
                                    id="input_7_1_3"
                                    value=""
                                    aria-required="true"
                                  />
                                  <label
                                    for="input_7_1_3"
                                    class="gform-field-label gform-field-label--type-sub"
                                    >First name</label
                                  >
                                </span>
                                <span
                                  id="input_7_1_6_container"
                                  class="name_last gform-grid-col gform-grid-col--size-auto"
                                >
                                  <input
                                    type="text"
                                    name="input_1.6"
                                    id="input_7_1_6"
                                    value=""
                                    aria-required="true"
                                  />
                                  <label
                                    for="input_7_1_6"
                                    class="gform-field-label gform-field-label--type-sub"
                                    >Last name</label
                                  >
                                </span>
                              </div>
                            </fieldset>
                            <div
                              id="field_7_3"
                              class="gfield gfield--type-email gfield--input-type-email gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
                            >
                              <label
                                class="gfield_label gform-field-label"
                                for="input_7_3"
                                >E-Mail<span class="gfield_required"
                                  ><span
                                    class="gfield_required gfield_required_asterisk"
                                    >*</span
                                  ></span
                                ></label
                              >
                              <div
                                class="ginput_container ginput_container_email"
                              >
                                <input
                                  name="input_3"
                                  id="input_7_3"
                                  type="email"
                                  value=""
                                  class="large"
                                  aria-required="true"
                                  aria-invalid="false"
                                />
                              </div>
                            </div>
                            <div
                              id="field_7_7"
                              class="gfield gfield--type-phone gfield--input-type-phone gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
                            >
                              <label
                                class="gfield_label gform-field-label"
                                for="input_7_7"
                                >Phone</label
                              >
                              <div
                                class="ginput_container ginput_container_phone"
                              >
                                <input
                                  name="input_7"
                                  id="input_7_7"
                                  type="tel"
                                  value=""
                                  class="large"
                                  aria-invalid="false"
                                />
                              </div>
                            </div>
                            <div
                              id="field_7_5"
                              class="gfield gfield--type-textarea gfield--input-type-textarea gfield--width-full gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
                            >
                              <label
                                class="gfield_label gform-field-label"
                                for="input_7_5"
                                >Message<span class="gfield_required"
                                  ><span
                                    class="gfield_required gfield_required_asterisk"
                                    >*</span
                                  ></span
                                ></label
                              >
                              <div
                                class="ginput_container ginput_container_textarea"
                              >
                                <textarea
                                  name="input_5"
                                  id="input_7_5"
                                  class="textarea small"
                                  aria-required="true"
                                  aria-invalid="false"
                                  rows="10"
                                  cols="50"
                                ></textarea>
                              </div>
                            </div>
                            <fieldset
                              id="field_7_8"
                              class="gfield gfield--type-consent gfield--type-choice gfield--input-type-consent gfield_contains_required field_sublabel_below gfield--no-description field_description_below hidden_label field_validation_below gfield_visibility_visible"
                            >
                              <legend
                                class="gfield_label gform-field-label gfield_label_before_complex"
                              >
                                Einwilligung<span class="gfield_required"
                                  ><span
                                    class="gfield_required gfield_required_asterisk"
                                    >*</span
                                  ></span
                                >
                              </legend>
                              <div
                                class="ginput_container ginput_container_consent"
                              >
                                <input
                                  name="input_8.1"
                                  id="input_7_8_1"
                                  type="checkbox"
                                  value="1"
                                  aria-required="true"
                                  aria-invalid="false"
                                />
                                <label
                                  class="gform-field-label gform-field-label--type-inline gfield_consent_label"
                                  for="input_7_8_1"
                                  >I have read and accept the
                                  <a href="privacy.html" target="_blank"
                                    >privacy</a
                                  >
                                  policy.<span
                                    class="gfield_required gfield_required_asterisk"
                                    >*</span
                                  ></label
                                ><input
                                  type="hidden"
                                  name="input_8.2"
                                  value='I have read and accept the &lt;a href=_/en/privacy.html target="_blank"&gt;privacy&lt;/a&gt; policy.'
                                  class="gform_hidden"
                                /><input
                                  type="hidden"
                                  name="input_8.3"
                                  value="7"
                                  class="gform_hidden"
                                />
                              </div>
                            </fieldset>
                            <div
                              id="field_7_9"
                              class="gfield gfield--type-frcaptcha gfield--input-type-frcaptcha gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible"
                            >
                              <label
                                class="gfield_label gform-field-label"
                                for="input_7_9"
                                >Security question</label
                              >
                              <div
                                class="ginput_container ginput_container_frcaptcha"
                              >
                                <div
                                  class="frc-captcha"
                                  data-sitekey="FCMUGSMV4NGB3POL"
                                  data-lang="en"
                                ></div>
                                <noscript
                                  >You need to enable Javascript for the
                                  anti-spam check.</noscript
                                >
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="gform-footer gform_footer top_label">
                          <input
                            type="submit"
                            id="gform_submit_button_7"
                            class="gform_button button"
                            onclick="gform.submission.handleButtonClick(this);"
                            data-submission-type="submit"
                            value="Send E-Mail"
                          />
                          <input
                            type="hidden"
                            class="gform_hidden"
                            name="gform_submission_method"
                            data-js="gform_submission_method_7"
                            value="postback"
                          />
                          <input
                            type="hidden"
                            class="gform_hidden"
                            name="gform_theme"
                            data-js="gform_theme_7"
                            id="gform_theme_7"
                            value="orbital"
                          />
                          <input
                            type="hidden"
                            class="gform_hidden"
                            name="gform_style_settings"
                            data-js="gform_style_settings_7"
                            id="gform_style_settings_7"
                            value="[]"
                          />
                          <input
                            type="hidden"
                            class="gform_hidden"
                            name="is_submit_7"
                            value="1"
                          />
                          <input
                            type="hidden"
                            class="gform_hidden"
                            name="gform_submit"
                            value="7"
                          />
                          <input
                            type="hidden"
                            class="gform_hidden"
                            name="gform_unique_id"
                            value=""
                          />
                          <input
                            type="hidden"
                            class="gform_hidden"
                            name="state_7"
                            value="WyJ7XCI4LjFcIjpcImU1N2NiN2FiZWFkMTI0NmFhN2JlMWUwNjBhNjE5NzlhXCIsXCI4LjJcIjpcIjFjYmVjOTc1Njc1YTIwNTIzMjg3MTg5MDM2OTQ2YzFhXCIsXCI4LjNcIjpcImIzM2VhZWQ1ZWIxMGQwODlmY2Q0NmZlMGUwOGNkODEzXCJ9IiwiMTc5NGRjZWQzZDkxM2ZjYTkzYjA4NWZlYzdiMjZmYzQiXQ=="
                          />
                          <input
                            type="hidden"
                            autocomplete="off"
                            class="gform_hidden"
                            name="gform_target_page_number_7"
                            id="gform_target_page_number_7"
                            value="0"
                          />
                          <input
                            type="hidden"
                            autocomplete="off"
                            class="gform_hidden"
                            name="gform_source_page_number_7"
                            id="gform_source_page_number_7"
                            value="1"
                          />
                          <input
                            type="hidden"
                            name="gform_field_values"
                            value=""
                          />
                        </div>
                      </form>
                    </div>
                    <script>
                      gform.initializeOnLoaded(function () {
                        gformInitSpinner(
                          7,
                          "synspace.com/app/plugins/gravityforms/images/spinner.svg",
                          false
                        );
                        jQuery("#gform_ajax_frame_7").on("load", function () {
                          var contents = jQuery(this)
                            .contents()
                            .find("*")
                            .html();
                          var is_postback =
                            contents.indexOf("GF_AJAX_POSTBACK") >= 0;
                          if (!is_postback) {
                            return;
                          }
                          var form_content = jQuery(this)
                            .contents()
                            .find("#gform_wrapper_7");
                          var is_confirmation =
                            jQuery(this)
                              .contents()
                              .find("#gform_confirmation_wrapper_7").length > 0;
                          var is_redirect =
                            contents.indexOf("gformRedirect(){") >= 0;
                          var is_form =
                            form_content.length > 0 &&
                            !is_redirect &&
                            !is_confirmation;
                          var mt =
                            parseInt(jQuery("html").css("margin-top"), 10) +
                            parseInt(jQuery("body").css("margin-top"), 10) +
                            100;
                          if (is_form) {
                            jQuery("#gform_wrapper_7").html(
                              form_content.html()
                            );
                            if (
                              form_content.hasClass("gform_validation_error")
                            ) {
                              jQuery("#gform_wrapper_7").addClass(
                                "gform_validation_error"
                              );
                            } else {
                              jQuery("#gform_wrapper_7").removeClass(
                                "gform_validation_error"
                              );
                            }
                            setTimeout(function () {
                              /* delay the scroll by 50 milliseconds to fix a bug in chrome */ jQuery(
                                document
                              ).scrollTop(
                                jQuery("#gform_wrapper_7").offset().top - mt
                              );
                            }, 50);
                            if (window["gformInitDatepicker"]) {
                              gformInitDatepicker();
                            }
                            if (window["gformInitPriceFields"]) {
                              gformInitPriceFields();
                            }
                            var current_page = jQuery(
                              "#gform_source_page_number_7"
                            ).val();
                            gformInitSpinner(
                              7,
                              "synspace.com/app/plugins/gravityforms/images/spinner.svg",
                              false
                            );
                            jQuery(document).trigger("gform_page_loaded", [
                              7,
                              current_page,
                            ]);
                            window["gf_submitting_7"] = false;
                          } else if (!is_redirect) {
                            var confirmation_content = jQuery(this)
                              .contents()
                              .find(".GF_AJAX_POSTBACK")
                              .html();
                            if (!confirmation_content) {
                              confirmation_content = contents;
                            }
                            jQuery("#gform_wrapper_7").replaceWith(
                              confirmation_content
                            );
                            jQuery(document).scrollTop(
                              jQuery("#gf_7").offset().top - mt
                            );
                            jQuery(document).trigger(
                              "gform_confirmation_loaded",
                              [7]
                            );
                            window["gf_submitting_7"] = false;
                            wp.a11y.speak(
                              jQuery("#gform_confirmation_message_7").text()
                            );
                          } else {
                            jQuery("#gform_7").append(contents);
                            if (window["gformRedirect"]) {
                              gformRedirect();
                            }
                          }
                          jQuery(document).trigger("gform_pre_post_render", [
                            {
                              formId: "7",
                              currentPage: "current_page",
                              abort: function () {
                                this.preventDefault();
                              },
                            },
                          ]);
                          if (event && event.defaultPrevented) {
                            return;
                          }
                          const gformWrapperDiv =
                            document.getElementById("gform_wrapper_7");
                          if (gformWrapperDiv) {
                            const visibilitySpan =
                              document.createElement("span");
                            visibilitySpan.id = "gform_visibility_test_7";
                            gformWrapperDiv.insertAdjacentElement(
                              "afterend",
                              visibilitySpan
                            );
                          }
                          const visibilityTestDiv = document.getElementById(
                            "gform_visibility_test_7"
                          );
                          let postRenderFired = false;
                          function triggerPostRender() {
                            if (postRenderFired) {
                              return;
                            }
                            postRenderFired = true;
                            gform.core.triggerPostRenderEvents(7, current_page);
                            if (visibilityTestDiv) {
                              visibilityTestDiv.parentNode.removeChild(
                                visibilityTestDiv
                              );
                            }
                          }
                          function debounce(func, wait, immediate) {
                            var timeout;
                            return function () {
                              var context = this,
                                args = arguments;
                              var later = function () {
                                timeout = null;
                                if (!immediate) func.apply(context, args);
                              };
                              var callNow = immediate && !timeout;
                              clearTimeout(timeout);
                              timeout = setTimeout(later, wait);
                              if (callNow) func.apply(context, args);
                            };
                          }
                          const debouncedTriggerPostRender = debounce(
                            function () {
                              triggerPostRender();
                            },
                            200
                          );
                          if (
                            visibilityTestDiv &&
                            visibilityTestDiv.offsetParent === null
                          ) {
                            const observer = new MutationObserver(
                              (mutations) => {
                                mutations.forEach((mutation) => {
                                  if (
                                    mutation.type === "attributes" &&
                                    visibilityTestDiv.offsetParent !== null
                                  ) {
                                    debouncedTriggerPostRender();
                                    observer.disconnect();
                                  }
                                });
                              }
                            );
                            observer.observe(document.body, {
                              attributes: true,
                              childList: false,
                              subtree: true,
                              attributeFilter: ["style", "class"],
                            });
                          } else {
                            triggerPostRender();
                          }
                        });
                      });
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="m-contactus">
            <div class="m-contactus__inner">
              <div class="container">
                <div class="row">
                  <div class="m-contactus__left--address">
                    <h2 class="m-contactus__title">Address</h2>
                  </div>
                  <div class="m-contactus__content--address">
                    <div class="m-contactus__address">
                      <div class="m-contactus__addressleft">
                        <p class="m-contactus__addresstitle">
                          SynSpace Group GmbH
                        </p>
                        <p>
                          <br />
                          Basler Landstraße 8<br />
                          DE-79111 Freiburg
                        </p>
                      </div>
                      <div class="m-contactus__addressright">
                        <p class="m-contactus__addresstitle">
                          SynSpace Group GmbH<br />(Zweigniederlassung Basel)
                        </p>
                        <p>
                          Birsigstrasse 2<br />
                          CH-4054 Basel
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
<?php include 'footer.php'; ?>
    </div>
    <script
      src="../app/plugins/clearfy_package/assets/js/instant-pages.min.js"
      id="instant-pages-js"
      defer
    ></script>
    <script
      src="../app/themes/synspace/public/js/app.js"
      id="app/0-js"
    ></script>
    <!-- 安全插件已移除 -->
    <script
      src="synspace.com/wp/wp-includes/js/dist/dom-ready.min.js"
      id="wp-dom-ready-js"
    ></script>
    <script
      src="synspace.com/wp/wp-includes/js/dist/hooks.min.js"
      id="wp-hooks-js"
    ></script>
    <script
      src="synspace.com/wp/wp-includes/js/dist/i18n.min.js"
      id="wp-i18n-js"
    ></script>
    <script id="wp-i18n-js-after">
      wp.i18n.setLocaleData({ "text direction\u0004ltr": ["ltr"] });
    </script>
    <script id="wp-a11y-js-translations">
      (function (domain, translations) {
        var localeData =
          translations.locale_data[domain] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData(localeData, domain);
      })("default", {
        "translation-revision-date": "2023-10-07 10:20:38+0000",
        generator: "GlotPress\/4.0.0-alpha.9",
        domain: "messages",
        locale_data: {
          messages: {
            "": {
              domain: "messages",
              "plural-forms": "nplurals=2; plural=n != 1;",
              lang: "en_GB",
            },
            Notifications: ["Notifications"],
          },
        },
        comment: { reference: "wp-includes\/js\/dist\/a11y.js" },
      });
    </script>
    <script
      src="synspace.com/wp/wp-includes/js/dist/a11y.min.js"
      id="wp-a11y-js"
    ></script>
    <script
      src="synspace.com/wp/wp-includes/js/jquery/jquery.min.js"
      id="jquery-core-js"
    ></script>
    <script
      src="synspace.com/wp/wp-includes/js/jquery/jquery-migrate.min.js"
      id="jquery-migrate-js"
    ></script>
    <script
      defer="defer"
      src="../app/plugins/gravityforms/js/jquery.json.min.js"
      id="gform_json-js"
    ></script>
    <script id="gform_gravityforms-js-extra">
      var gform_i18n = {
        datepicker: {
          days: {
            monday: "Mo",
            tuesday: "Tu",
            wednesday: "We",
            thursday: "Th",
            friday: "Fr",
            saturday: "Sa",
            sunday: "Su",
          },
          months: {
            january: "January",
            february: "February",
            march: "March",
            april: "April",
            may: "May",
            june: "June",
            july: "July",
            august: "August",
            september: "September",
            october: "October",
            november: "November",
            december: "December",
          },
          firstDay: 1,
          iconText: "Select date",
        },
      };
      var gf_legacy_multi = [];
      var gform_gravityforms = {
        strings: {
          invalid_file_extension:
            "This type of file is not allowed. Must be one of the following:",
          delete_file: "Delete this file",
          in_progress: "in progress",
          file_exceeds_limit: "File exceeds size limit",
          illegal_extension: "This type of file is not allowed.",
          max_reached: "Maximum number of files reached",
          unknown_error:
            "There was a problem while saving the file on the server",
          currently_uploading: "Please wait for the uploading to complete",
          cancel: "Cancel",
          cancel_upload: "Cancel this upload",
          cancelled: "Cancelled",
          error: "Error",
          message: "Message",
        },
        vars: {
          images_url:
            "https:\/\/synspace.com\/app\/plugins\/gravityforms\/images",
        },
      };
      var gf_global = {
        gf_currency_config: {
          name: "Euro",
          symbol_left: "",
          symbol_right: "&#8364;",
          symbol_padding: " ",
          thousand_separator: ".",
          decimal_separator: ",",
          decimals: 2,
          code: "EUR",
        },
        base_url: "https:\/\/synspace.com\/app\/plugins\/gravityforms",
        number_formats: [],
        spinnerUrl:
          "https:\/\/synspace.com\/app\/plugins\/gravityforms\/images\/spinner.svg",
        version_hash: "62268d2d6f97459f9ea2ec7dd55a6bf8",
        strings: {
          newRowAdded: "New row added.",
          rowRemoved: "Row removed",
          formSaved:
            "The form has been saved.  The content contains the link to return and complete the form.",
        },
      };
    </script>
    <script
      defer="defer"
      src="../app/plugins/gravityforms/js/gravityforms.min.js"
      id="gform_gravityforms-js"
    ></script>
    <script
      defer="defer"
      src="../app/plugins/gravityforms/assets/js/dist/utils.min.js"
      id="gform_gravityforms_utils-js"
    ></script>
    <script
      defer="defer"
      src="../app/plugins/gravityforms/assets/js/dist/vendor-theme.min.js"
      id="gform_gravityforms_theme_vendors-js"
    ></script>
    <script id="gform_gravityforms_theme-js-extra">
      var gform_theme_config = {
        common: {
          form: {
            honeypot: { version_hash: "62268d2d6f97459f9ea2ec7dd55a6bf8" },
            ajax: {
              ajaxurl: "https:\/\/synspace.com\/wp\/wp-admin\/admin-ajax.php",
              ajax_submission_nonce: "781cedf0bf",
              i18n: {
                step_announcement: "Step %1$s of %2$s, %3$s",
                unknown_error:
                  "There was an unknown error processing your request. Please try again.",
              },
            },
          },
        },
        hmr_dev: "",
        public_path:
          "https:\/\/synspace.com\/app\/plugins\/gravityforms\/assets\/js\/dist\/",
        config_nonce: "af16dd01c7",
      };
    </script>
    <script
      defer="defer"
      src="../app/plugins/gravityforms/assets/js/dist/scripts-theme.min.js"
      id="gform_gravityforms_theme-js"
    ></script>
    
    
    <script
      src="../app/plugins/pg-responsive-images/src/js/pg-responsive-images.js"
      id="pg-responsive-images-script-js"
    ></script>
    <script
      src="../app/plugins/pg-responsive-images/src/vendor/lazysizes/lazysizes.min.js"
      id="lazysizes-js"
    ></script>
    <script type="speculationrules">
      {
        "prefetch": [
          {
            "source": "document",
            "where": {
              "and": [
                { "href_matches": "\/*" },
                {
                  "not": {
                    "href_matches": [
                      "\/wp\/wp-*.php",
                      "\/wp\/wp-admin\/*",
                      "\/app\/uploads\/*",
                      "\/app\/*",
                      "\/app\/plugins\/*",
                      "\/app\/themes\/synspace\/*",
                      "\/*\\?(.+)"
                    ]
                  }
                },
                { "not": { "selector_matches": "a[rel~=\"nofollow\"]" } },
                {
                  "not": { "selector_matches": ".no-prefetch, .no-prefetch a" }
                }
              ]
            },
            "eagerness": "conservative"
          }
        ]
      }
    </script>
    <script>
      (function () {
        const template = document.querySelector(
          "#brlbs-cmpnt-cb-template-facebook-content-blocker"
        );
        const divsToInsertBlocker = document.querySelectorAll(
          'div.fb-video[data-href*="//www.facebook.com/"], div.fb-post[data-href*="//www.facebook.com/"]'
        );
        for (const div of divsToInsertBlocker) {
          const blocked = template.content
            .cloneNode(true)
            .querySelector(".brlbs-cmpnt-container");
          blocked.dataset.borlabsCookieContent = btoa(
            unescape(encodeURIComponent(div.outerHTML))
          );
          div.replaceWith(blocked);
        }
      })();
    </script>
    <script>
      (function () {
        const template = document.querySelector(
          "#brlbs-cmpnt-cb-template-gravity-forms-recaptcha"
        );
        const divsToInsertBlocker = document.querySelectorAll(
          "div.ginput_container.ginput_recaptcha"
        );
        for (const div of divsToInsertBlocker) {
          const cb = template.content
            .cloneNode(true)
            .querySelector(".brlbs-cmpnt-container");
          div.appendChild(cb);
        }
      })();
    </script>
    <script>
      (function () {
        const template = document.querySelector(
          "#brlbs-cmpnt-cb-template-instagram"
        );
        const divsToInsertBlocker = document.querySelectorAll(
          'blockquote.instagram-media[data-instgrm-permalink*="instagram.com/"],blockquote.instagram-media[data-instgrm-version]'
        );
        for (const div of divsToInsertBlocker) {
          const blocked = template.content
            .cloneNode(true)
            .querySelector(".brlbs-cmpnt-container");
          blocked.dataset.borlabsCookieContent = btoa(
            unescape(encodeURIComponent(div.outerHTML))
          );
          div.replaceWith(blocked);
        }
      })();
    </script>
    <script>
      (function () {
        const template = document.querySelector(
          "#brlbs-cmpnt-cb-template-x-alias-twitter-content-blocker"
        );
        const divsToInsertBlocker = document.querySelectorAll(
          "blockquote.twitter-tweet,blockquote.twitter-video"
        );
        for (const div of divsToInsertBlocker) {
          const blocked = template.content
            .cloneNode(true)
            .querySelector(".brlbs-cmpnt-container");
          blocked.dataset.borlabsCookieContent = btoa(
            unescape(encodeURIComponent(div.outerHTML))
          );
          div.replaceWith(blocked);
        }
      })();
    </script>
    <script>
      gform.initializeOnLoaded(function () {
        jQuery(document).on(
          "gform_post_render",
          function (event, formId, currentPage) {
            if (formId == 7) {
            }
          }
        );
        jQuery(document).on(
          "gform_post_conditional_logic",
          function (event, formId, fields, isInit) {}
        );
      });
    </script>
    <script>
      gform.initializeOnLoaded(function () {
        jQuery(document).trigger("gform_pre_post_render", [
          {
            formId: "7",
            currentPage: "1",
            abort: function () {
              this.preventDefault();
            },
          },
        ]);
        if (event && event.defaultPrevented) {
          return;
        }
        const gformWrapperDiv = document.getElementById("gform_wrapper_7");
        if (gformWrapperDiv) {
          const visibilitySpan = document.createElement("span");
          visibilitySpan.id = "gform_visibility_test_7";
          gformWrapperDiv.insertAdjacentElement("afterend", visibilitySpan);
        }
        const visibilityTestDiv = document.getElementById(
          "gform_visibility_test_7"
        );
        let postRenderFired = false;
        function triggerPostRender() {
          if (postRenderFired) {
            return;
          }
          postRenderFired = true;
          gform.core.triggerPostRenderEvents(7, 1);
          if (visibilityTestDiv) {
            visibilityTestDiv.parentNode.removeChild(visibilityTestDiv);
          }
        }
        function debounce(func, wait, immediate) {
          var timeout;
          return function () {
            var context = this,
              args = arguments;
            var later = function () {
              timeout = null;
              if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
          };
        }
        const debouncedTriggerPostRender = debounce(function () {
          triggerPostRender();
        }, 200);
        if (visibilityTestDiv && visibilityTestDiv.offsetParent === null) {
          const observer = new MutationObserver((mutations) => {
            mutations.forEach((mutation) => {
              if (
                mutation.type === "attributes" &&
                visibilityTestDiv.offsetParent !== null
              ) {
                debouncedTriggerPostRender();
                observer.disconnect();
              }
            });
          });
          observer.observe(document.body, {
            attributes: true,
            childList: false,
            subtree: true,
            attributeFilter: ["style", "class"],
          });
        } else {
          triggerPostRender();
        }
      });
    </script>
  </body>
  <!-- Mirrored from synspace.com/en/contact by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Feb 2026 03:54:57 GMT -->
</html>
<!-- Clearfy Cache file was created in 1.3503580093384 seconds, on 21-01-26 0:24:20 -->
