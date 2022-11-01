<?php include 'includes/header.php' ?>
<body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php include 'includes/navbar.php' ?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Donate</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index.php">Home</a></li>
              <li>Donate
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!-- Foundation Donation Form-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-md-8 cell-sm-10">
                <h2 class="text-bold">Foundation Donation Form</h2>
                <hr class="divider bg-madison">
                <div class="offset-top-60">
                  <p>This form allows you to make a gift to Jonathan Carroll University using your credit card. On behalf of the FSU Foundation, thank you for supporting Jonathan Carroll University. All data collected is confidential and secured using 128-bit encryption. Please verify your email address so we can send an email confirmation of your gift.</p>
                </div>
                <div class="offset-top-60">
                  <!--Donation Information-->
                  <section class="text-left">
                    <h6 class="text-bold">Donation Information</h6>
                    <div class="text-subline"></div>
                    <div class="range offset-top-17">
                      <div class="cell-sm-3">
                        <div class="form-group">
                          <label for="donation-amount" class="form-label form-label-outside">Amount</label>
                          <input id="donation-amount" type="text" name="donation" data-constraints="@Required" class="form-control">
                        </div>
                      </div>
                      <div class="cell-sm-9 offset-top-17 offset-sm-top-0">
                        <div class="form-group">
                          <label for="donation-designation" class="form-label form-label-outside">Designation</label>
                          <select id="donation-designation" data-placeholder="United Kingdom" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                            <option>Law School</option>
                            <option value="2">Medium School</option>
                            <option value="3">High School</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </section>
                  <!--Additional Information-->
                  <section class="text-left offset-top-60">
                    <h6 class="text-bold">Additional Information</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-30">
                      <div class="form-group">
                        <label class="checkbox-inline text-dark">
                          <input name="input-group-radio" value="checkbox-1" type="checkbox" class="checkbox-custom">I prefer to make this donation anonymously
                        </label>
                      </div>
                    </div>
                    <div class="range offset-top-17">
                      <div class="cell-sm-6">
                        <div class="form-group">
                          <label for="donation-apply-to-existing-pledge" class="form-label form-label-outside">Apply to Existing Pledge</label>
                          <select id="donation-apply-to-existing-pledge" data-placeholder="Yes" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                            <option>Yes</option>
                            <option value="2">No</option>
                          </select>
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group">
                          <label for="donation-company-matches-gifts" class="form-label form-label-outside">My Company Matches Gifts</label>
                          <select id="donation-company-matches-gifts" data-placeholder="Yes" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                            <option>Yes</option>
                            <option value="2">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="offset-top-20">
                      <div class="form-group">
                        <label class="checkbox-inline text-dark">
                          <input name="input-group-radio" value="checkbox-2" type="checkbox" class="checkbox-custom">I would like to provide information about my spouse/partner
                        </label>
                      </div>
                    </div>
                  </section>
                  <!--Billing Information-->
                  <section class="text-left offset-top-60">
                    <h6 class="text-bold">Billing Information</h6>
                    <div class="text-subline"></div>
                    <div class="range offset-top-17">
                      <div class="cell-sm-3">
                        <div class="form-group">
                          <label for="donation-title" class="form-label form-label-outside">Title</label>
                          <select id="donation-title" data-placeholder="Mr" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                            <option>Mr.</option>
                            <option value="2">Mrs.</option>
                          </select>
                        </div>
                      </div>
                      <div class="cell-sm-9 offset-top-17 offset-sm-top-0">
                        <div class="range">
                          <div class="cell-sm-6">
                            <div class="form-group">
                              <label for="donation-first-name" class="form-label form-label-outside">First Name</label>
                              <input id="donation-first-name" type="text" name="first-name" data-constraints="@Required" class="form-control">
                            </div>
                          </div>
                          <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                            <div class="form-group">
                              <label for="donation-last-name" class="form-label form-label-outside">Last Name</label>
                              <input id="donation-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="offset-top-17">
                      <div class="form-group">
                        <label for="donation-country" class="form-label form-label-outside">Country</label>
                        <input id="donation-country" type="text" name="country" data-constraints="@Required" class="form-control">
                      </div>
                    </div>
                    <div class="offset-top-17">
                      <div class="form-group">
                        <label for="donation-address" class="form-label form-label-outside">Address</label>
                        <textarea id="donation-address" name="message" data-constraints="@Required" style="height: 100px" class="form-control"></textarea>
                      </div>
                    </div>
                    <div class="range offset-top-17">
                      <div class="cell-sm-6">
                        <div class="form-group">
                          <label for="donation-city" class="form-label form-label-outside">City</label>
                          <input id="donation-city" type="text" name="city" data-constraints="@Required" class="form-control">
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group">
                          <label for="donation-state" class="form-label form-label-outside">State</label>
                          <select id="donation-state" data-placeholder="California" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                            <option>California</option>
                            <option value="2">Alabama</option>
                            <option value="3">Oregon</option>
                            <option value="4">Utah</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="range offset-top-17">
                      <div class="cell-sm-6">
                        <div class="form-group">
                          <label for="donation-zip" class="form-label form-label-outside">ZIP</label>
                          <input id="donation-zip" type="text" name="zip" data-constraints="@Required" class="form-control">
                        </div>
                      </div>
                      <div class="cell-sm-6 offset-top-17 offset-sm-top-0">
                        <div class="form-group">
                          <label for="donation-phone" class="form-label form-label-outside">Phone</label>
                          <input id="donation-phone" type="text" name="Phone" data-constraints="@Required @IsNumeric" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="offset-top-17">
                      <div class="form-group">
                        <label for="donation-email" class="form-label form-label-outside">Email</label>
                        <input id="donation-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                      </div>
                    </div>
                  </section>
                  <!--Tribute Information-->
                  <section class="text-left offset-top-60">
                    <h6 class="text-bold">Tribute Information</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-17">
                      <div class="form-group">
                        <label for="donation-name" class="form-label form-label-outside">Name</label>
                        <input id="donation-name" type="text" name="name" data-constraints="@Required" class="form-control">
                      </div>
                    </div>
                    <div class="offset-top-17">
                      <div class="form-group">
                        <label for="donation-type" class="form-label form-label-outside">Type</label>
                        <select id="donation-type" data-placeholder="In memory of" data-minimum-results-for-search="Infinity" class="form-control select-filter">
                          <option>In memory of</option>
                          <option value="2">In memory of</option>
                        </select>
                      </div>
                    </div>
                    <div class="offset-top-25">
                      <div class="form-group">
                        <label class="checkbox-inline text-dark">
                          <input name="input-group-radio" value="checkbox-3" type="checkbox" class="checkbox-custom">Mail a letter on my behalf
                        </label>
                      </div>
                    </div>
                    <div class="offset-top-25"><a href="#" class="btn btn-primary">Donate</a></div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Corporate footer-->
      <?php include 'includes/footer.php' ?>
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

<!-- Mirrored from www.stlouis.edu.hk/SL90/donate.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:43:51 GMT -->
</html>