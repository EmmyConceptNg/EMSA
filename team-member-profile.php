<?php include 'includes/header.php'; ?>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php include 'includes/navbar.php'; ?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Executives Profile</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">About</a></li>
              <li>Executives Profile
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!--4 Columns Layout-->
        <section class="section-70 section-md-114">
        <?php
          $sql = "SELECT * FROM users WHERE role = 'executive'";
          $query = $conn->query($sql);
          if($query->num_rows > 0){
          while($row = $query->fetch_assoc()){ ?>
            <div class="shell">
              <div class="range range-xs-center">
                <div class="cell-sm-4 text-sm-left">
                  <div class="inset-sm-right-30"><img src="admin/images/executives/<?php echo $row['avatar']; ?>" width="340"
                      height="340" alt="" class="img-responsive reveal-inline-block">
                    <div class="offset-top-15 offset-sm-top-30"><a href="#"
                        style="max-width: 340px; margin-left:auto; margin-right:auto"
                        class="btn btn-primary btn-block">Get in Touch</a></div>
                    <div class="offset-top-15 offset-sm-top-30">
                      <ul class="list list-unstyled">
                        <li><span class="icon icon-xs mdi mdi-phone text-middle text-madison"></span><a href="callto:#"
                            class="reveal-inline-block text-dark inset-left-10"><?php echo $row['phone'] ?></a></li>
                        <li><span class="icon icon-xs mdi mdi-email-open text-middle text-madison"></span><a
                            href="mailto:info@demolink.org"
                            class="reveal-inline-block inset-left-10"><?php echo $row['email'] ?></a></li>
                      </ul>
                    </div>
                    <div class="offset-top-15 offset-sm-top-30">
                      <ul class="list-inline list-inline-xs list-inline-madison">
                        <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                        <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-8 text-left">
                  <div>
                    <h2 class="text-bold">
                      <?php echo (!$row['first_name']) ?  ucwords($row['username']) : ucwords($row['first_name'] . $row['last_name']) ?></h2>
                  </div>
                  <p class="offset-top-10"><?php echo $row['position'] ?></p>
                  <div class="offset-top-15 offset-sm-top-30">
                    <hr class="divider bg-madison hr-left-0">
                  </div>
                  <div class="offset-top-30 offset-sm-top-60">
                    <h6 class="text-bold">About <?php echo $row['username']; ?></h6>
                    <div class="text-subline"></div>
                  </div>
                  <div class="offset-top-20">
                    <p><?php echo (!$row['about'] ? 'About Not Available' : $row['about']) ?></p>
                  </div>
                  <div class="offset-top-30 offset-sm-top-60">
                    <h6 class="text-bold">Certificates and Awards</h6>
                    <div class="text-subline"></div>
                  </div>
                  <div class="offset-top-15 offset-sm-top-30">
                    <div data-photo-swipe-gallery="gallery" class="group group-lg"><a data-photo-swipe-item=""
                        href="images/sertificate-100x144.jpg" data-size="347x500"><img
                          src="images/sertificate-100x144.jpg" width="90" height="144" alt=""
                          class="img-responsive reveal-inline-block"></a><a data-photo-swipe-item=""
                        href="images/sertificate2-100x144.jpg" data-size="347x500"><img
                          src="images/sertificate2-100x144.jpg" width="90" height="144" alt=""
                          class="img-responsive reveal-inline-block"></a><a data-photo-swipe-item=""
                        href="images/sertificate3-100x144.jpg" data-size="347x500"><img
                          src="images/sertificate3-100x144.jpg" width="90" height="144" alt=""
                          class="img-responsive reveal-inline-block"></a><a data-photo-swipe-item=""
                        href="images/sertificate4-100x144.jpg" data-size="347x500"><img
                          src="images/sertificate4-100x144.jpg" width="90" height="144" alt=""
                          class="img-responsive reveal-inline-block"></a></div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
          <?php } } ?>
          
        </section>
        
      </main>
      <!-- Page Footer-->
      <!-- Corporate footer-->
      <?php include 'includes/footer.php'; ?>
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

<!-- Mirrored from www.stlouis.edu.hk/SL90/team-member-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:39:58 GMT -->
</html>