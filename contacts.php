<?php include 'includes/header.php' ?>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php include 'includes/navbar.php' ?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Contacts</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index.php">Home</a></li>
              <li>Contacts
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-md-8 text-md-left">
                <h2 class="text-bold">Get in Touch</h2>
                <hr class="divider bg-madison hr-sm-left-0">
                <div class="offset-top-30 offset-md-top-60">
                  <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
                </div>
                <div class="offset-top-30">
                  <form data-form-output="form-output-global" data-form-type="contact" method="post" action="http://www.stlouis.edu.hk/SL90/bat/rd-mailform.php" class="rd-mailform text-left">
                    <div class="range">
                      <div class="cell-lg-6">
                        <div class="form-group">
                          <label for="contact-me-name" class="form-label form-label-outside">First name</label>
                          <input id="contact-me-name" type="text" name="name" data-constraints="@Required" class="form-control">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12 offset-lg-top-0">
                        <div class="form-group">
                          <label for="contact-me-last-name" class="form-label form-label-outside">Last name</label>
                          <input id="contact-me-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label for="contact-me-email" class="form-label form-label-outside">E-mail</label>
                          <input id="contact-me-email" type="email" name="email" data-constraints="@Required @Email" class="form-control">
                        </div>
                      </div>
                      <div class="cell-lg-6 offset-top-12">
                        <div class="form-group">
                          <label for="contact-me-phone" class="form-label form-label-outside">Phone</label>
                          <input id="contact-me-phone" type="text" name="phone" data-constraints="@Required @IsNumeric" class="form-control">
                        </div>
                      </div>
                      <div class="cell-lg-12 offset-top-12">
                        <div class="form-group">
                          <label for="contact-me-message" class="form-label form-label-outside">Message</label>
                          <textarea id="contact-me-message" name="message" data-constraints="@Required" style="height: 220px" class="form-control"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="text-center text-lg-left offset-top-20">
                      <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="cell-xs-10 cell-md-4 offset-top-65 offset-md-top-0 text-left">
                <div class="inset-md-left-30">
                  <h6 class="text-bold">Socials</h6>
                  <div class="hr bg-gray-light offset-top-10"></div>
                  <ul class="list-inline list-inline-xs list-inline-madison">
                    <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                    <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
                  </ul>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Phones</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a href="callto:1-800-1234-567" class="text-middle inset-left-10 text-dark">1-800-1234-567</a></li>
                        <li><span class="icon icon-xs text-madison mdi mdi-phone text-middle"></span><a href="callto:1-800-6547-321" class="text-middle inset-left-10 text-dark">1-800-6547-321</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">E-mail</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs text-madison mdi mdi-email-outline text-middle"></span><a href="mailto:info@demolink.org" class="text-primary text-middle inset-left-10">emsa21gmail.com</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-60">
                    <h6 class="text-bold">Address</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs mdi mdi-map-marker text-madison"></span></div>
                        <div class="unit-body">
                          <p><a href="#" class="text-dark">PMB 1515, University of Ilorin, Ilorin, Kwara State. Nigeria</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-30 offset-md-top-65">
                    <h6 class="text-bold">Opening Hours</h6>
                    <div>
                      <div class="hr bg-gray-light offset-top-10"></div>
                    </div>
                    <div class="offset-top-15">
                      <div class="unit unit-horizontal unit-spacing-xs">
                        <div class="unit-left"><span class="icon icon-xs mdi mdi-calendar-clock text-madison"></span></div>
                        <div class="unit-body">
                          <div>
                            <p>Mon-Fri: 8:00am-8:00pm</p>
                          </div>
                          <div>
                            <p>Sat: 8:00am-3:00pm</p>
                          </div>
                          <div>
                            <p>Sun: Closed</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="bg-madison">
          <!-- RD Google Map-->
          <div class="rd-google-map">
            <div id="rd-google-map" data-zoom="14" data-x="-73.9874068" data-y="40.643180" data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#b4d4e1"},{"visibility":"on"}]}]' class="rd-google-map__model"></div>
            <ul class="rd-google-map__locations">
              <li data-x="-73.9874068" data-y="40.643180">
                <p>PMB 1515, University of Ilorin, Ilorin, Kwara State, Nigeria.</p>
              </li>
            </ul>
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

<!-- Mirrored from www.stlouis.edu.hk/SL90/contacts.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:43:51 GMT -->
</html>