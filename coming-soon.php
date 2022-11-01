<?php include 'includes/header.php' ?>
<title>Coming Soon</title>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head"></header>
      <!-- Page Content-->
      <main class="page-content section-cover section-404 section-30 shell">
        <div><a href="index.php"><img src="images/logo-170x172.png" width="110" height="110" alt=""></a></div>
        <div class="section-50">
          <div class="offset-top-10">
            <h2 class="text-bold">We're getting ready to launch in</h2>
          </div>
          <div class="offset-top-15 offset-lg-top-30">
            <hr class="divider bg-madison">
          </div>
          <div class="offset-top-30 offset-lg-top-60">
            <div class="offset-top-66">
              <!-- Countdown-->
              <div class="countdown-custom countdown-ellipse">
                <div data-type="until" data-time="1 Oct 2016" data-format="dhms" class="countdown"></div>
              </div>
            </div>
          </div>
          <div class="range range-xs-center offset-top-30 offset-lg-top-60">
            <div class="cell-sm-6">
              <p>Educational Management Students'Association's Website is under construction, we are working very hard to give you the best experience on our new web site.</p>
              <div class="offset-top-30">
                <p>Stay ready, we`re launching soon</p>
              </div>
              <div class="offset-top-15">
                <form data-form-output="form-subscribe-forms-page" data-form-type="subscribe" method="post" action="http://www.stlouis.edu.hk/SL90/bat/rd-mailform.php" class="rd-mailform form-subscribe-type-2">
                  <div class="form-group">
                    <div class="input-group text-left">
                      <label for="email-subscribe-form-type-2" class="form-label form-label-outside">E-mail</label>
                      <input id="email-subscribe-form-type-2" type="email" name="email" data-constraints="@Required @Email" class="form-control"/><span class="input-group-btn">
                        <button type="submit" class="btn btn-primary">Subscribe</button></span>
                    </div>
                  </div>
                  <div id="form-subscribe-forms-page" class="form-output"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div>
          <p>&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a href="privacy.php">Privacy Policy</a></p>
          <p>Designed By <a href="http://emmyconcept.com">EmmyConcept</a> </p>
        </div>
      </main>
    </div>
    <!-- Global Mailform Output-->
    <div id="form-output-global" class="snackbars"></div>
    <!-- PhotoSwipe Gallery-->
    <div tabindex="-1" role="dialog" aria-hidden="true" class="pswp">
      <div class="pswp__bg"></div>
      <div class="pswp__scroll-wrap">
        <div class="pswp__container">
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
          <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
          <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button title="Close (Esc)" class="pswp__button pswp__button--close"></button>
            <button title="Share" class="pswp__button pswp__button--share"></button>
            <button title="Toggle fullscreen" class="pswp__button pswp__button--fs"></button>
            <button title="Zoom in/out" class="pswp__button pswp__button--zoom"></button>
            <div class="pswp__preloader">
              <div class="pswp__preloader__icn">
                <div class="pswp__preloader__cut">
                  <div class="pswp__preloader__donut"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
          </div>
          <button title="Previous (arrow left)" class="pswp__button pswp__button--arrow--left"></button>
          <button title="Next (arrow right)" class="pswp__button pswp__button--arrow--right"></button>
          <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Java script-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- begin olark code-->
    <script data-cfasync="false" type="text/javascript">
      window.olark || (function (c) {
        var f = window, d = document, l = f.location.protocol == "https:" ? "https:" : "http:", z = c.name, r = "load";
        var nt = function () {
          f[z] = function () {
            (a.s = a.s || []).push(arguments)
          };
          var a = f[z]._ = {}, q = c.methods.length;
          while (q--) {
            (function (n) {
              f[z][n] = function () {
                f[z]("call", n, arguments)
              }
            })(c.methods[q])
          }
          a.l = c.loader;
          a.i = nt;
          a.p = {0: +new Date};
          a.P = function (u) {
            a.p[u] = new Date - a.p[0]
          };
          function s() {
            a.P(r);
            f[z](r)
          }
      
          f.addEventListener ? f.addEventListener(r, s, false) : f.attachEvent("on" + r, s);
          var ld = function () {
            function p(hd) {
              hd = "head";
              return ["<", hd, "></", hd, "><", i, ' onl' + 'oad="var d=', g, ";d.getElementsByTagName('head')[0].", j, "(d.", h, "('script')).", k, "='", l, "//", a.l, "'", '"', "></", i, ">"].join("")
            }
      
            var i = "body", m = d[i];
            if (!m) {
              return setTimeout(ld, 100)
            }
            a.P(1);
            var j = "appendChild", h = "createElement", k = "src", n = d[h]("div"), v = n[j](d[h](z)), b = d[h]("iframe"), g = "document", e = "domain", o;
            n.style.display = "none";
            m.insertBefore(n, m.firstChild).id = z;
            b.frameBorder = "0";
            b.id = z + "-loader";
            if (/MSIE[ ]+6/.test(navigator.userAgent)) {
              b.src = "javascript:false"
            }
            b.allowTransparency = "true";
            v[j](b);
            try {
              b.contentWindow[g].open()
            } catch (w) {
              c[e] = d[e];
              o = "javascript:var d=" + g + ".open();d.domain='" + d.domain + "';";
              b[k] = o + "void(0);"
            }
            try {
              var t = b.contentWindow[g];
              t.write(p());
              t.close()
            } catch (x) {
              b[k] = o + 'd.write("' + p().replace(/"/g, String.fromCharCode(92) + '"') + '");d.close();'
            }
            a.P(2)
          };
          ld()
        };
        nt()
      })({
        loader: "static.olark.com/jsclient/loader0.js",
        name: "olark",
        methods: ["configure", "extend", "declare", "identify"]
      });/* custom configuration goes here (www.olark.com/documentation) */olark.identify('7830-582-10-3714');
    </script>
    <noscript><a href="https://www.olark.com/site/7830-582-10-3714/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by<a href="http://www.olark.com/?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
    <!-- end olark code-->
    
  </body>

<!-- Mirrored from www.stlouis.edu.hk/SL90/coming-soon.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:39:15 GMT -->
</html>