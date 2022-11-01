<?php include 'includes/header.php'; ?>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php include 'includes/navbar.php' ?>
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">Gallery</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index.php">Home</a></li>
              <li>Gallery
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content section-70 section-md-114">
        <!-- Portfolio Grid-->
        <section>
          <div class="shell">
            <h2>Executives Gallery</h2>
            <hr class="divider bg-madison">
            <div class="offset-top-60">
              <div data-photo-swipe-gallery="gallery" class="range range-xs-center">
                  <?php
                    $sql = "SELECT * FROM gallery";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){ ?>
                        <div class="cell-xs-10 cell-sm-6 cell-md-4">
                        <figure class="thumbnail-classic">
                            <div class="thumbnail-classic-img-wrap"><img width="370" height="370" src="admin/images/gallery/<?php echo $row['photo'] ?>" alt=""/><a class="gallery-link-mobile veil-lg" data-photo-swipe-item="" data-size="1200x800" href="images/portfolio/gallery-01-1200x800_original.jpg"></a></div>
                            <figcaption class="thumbnail-classic-caption text-center">
                            <div>
                                <h4 class="thumbnail-classic-title"><?php echo $row['description'] ?></h4>
                            </div>
                            <hr class="divider divider-sm"/>
                            <div class="offset-top-20 veil reveal-lg-block"><a class="icon icon-xxs fa-search-plus" data-photo-swipe-item="" data-size="1200x800" href="admin/images/gallery/<?php echo $row['photo'] ?>"></a></div>
                            </figcaption>
                        </figure>
                        </div>
                <?php } ?>
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

<!-- Mirrored from www.stlouis.edu.hk/SL90/grid-gallery.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:42:35 GMT -->
</html>