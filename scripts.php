
    <script
      src="synspace.com/app/themes/synspace/public/js/app.js"
      id="app/0-js"
    ></script>
    <!-- 安全插件已移除 -->
    <script
      src="synspace.com/wp/wp-includes/js/jquery/jquery.min.js"
      id="jquery-core-js"
    ></script>
    <script
      src="synspace.com/wp/wp-includes/js/jquery/jquery-migrate.min.js"
      id="jquery-migrate-js"
    ></script>
    <script
      src="synspace.com/app/plugins/pg-responsive-images/src/js/pg-responsive-images.js"
      id="pg-responsive-images-script-js"
    ></script>
    <script
      src="synspace.com/app/plugins/pg-responsive-images/src/vendor/lazysizes/lazysizes.min.js"
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
