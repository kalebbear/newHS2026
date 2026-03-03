<!DOCTYPE html>
<html lang="en-GB">
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
<?php $pageTitle = 'Contact1'; ?>
<?php include 'head.php'; ?>
  <link rel="stylesheet" href="contact.css" />
  <body
    class="wp-singular page-template page-template-template-contact page page-id-1299 wp-embed-responsive wp-theme-synspace contact"
  >
    <div id="app">
<?php include 'header.php'; ?>
      <main id="main" class="main">
<?php
;
$breadcrumbItems = [
    ['title' => '首页', 'url' => 'index.php'],
    ['title' => '空白页', 'url' => null]
];
include 'pageheader.php';
?>
        <div class="m-contact">
          
        </div>
      </main>
<?php include 'footer.php'; ?>
    </div>
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
    
    
    <?php include 'scripts.php'; ?>
  </body>
</html>
