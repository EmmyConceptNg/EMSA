<?php include 'includes/header.php'; ?>
  <body>
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <?php include 'includes/navbar.php'; ?>
      <!-- Classic Breadcrumbs-->
      <?php
      if(isset($_GET['slug'])){
        $slug = $_GET['slug'];
      }
        $sql = "SELECT * FROM posts WHERE post_slug = '$slug'";
        $query = $conn->query($sql);
        $row = $query->fetch_assoc();
      ?>
      <section class="breadcrumb-classic context-dark">
        <div class="shell section-30 section-sm-top-70 section-sm-bottom-60">
          <h1 class="veil reveal-sm-block">News</h1>
          <div class="offset-sm-top-35">
            <ul class="list-inline list-inline-lg list-inline-dashed p">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">News</a></li>
              <li><?php echo ucwords($row['post_title']); ?>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <div id="fb-root"></div>
        <!-- Latest news-->
        <section class="section-70 section-md-114">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-8 cell-md-8 text-md-left">
                <h2 class="text-bold">
                  <?php echo ucwords($row['post_title']); ?>
                </h2>
                <hr class="divider bg-madison hr-md-left-0">
                <div class="offset-md-top-47 offset-top-20">
                  <ul class="post-news-meta list list-inline list-inline-xl">
                    <li><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></li>
                    <li><span class="icon icon-xs mdi mdi-account text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-primary">Ronald Austin</span></li>
                  </ul>
                </div>
                <div class="offset-top-30"><img src="admin/<?php echo $row['post_pic'] ?>" width="770" height="500" alt="" class="img-responsive">
                  <div class="offset-top-30">
                    <p><?php echo $row['post_content'] ?>.</p>
                  </div>
                </div>
                <div class="offset-top-30 post-news-meta range range-xs-middle range-xs-center">
                  <div class="cell-md-6">
                    <div class="tags-list group group-sm reveal-inline-block text-middle">
                    <?php $post_tags = explode(',', $row['post_tags']);
                    foreach($post_tags as $tag){ ?>
                      <a href="#" class="btn btn-xs btn-primary text-italic">
                        <?php echo $tag; ?>
                      </a>
                    <?php } ?></div>
                  </div>
                  <div class="cell-md-6">
                    <ul class="list-inline list-inline-xs list-inline-madison pull-md-right text-middle">
                      <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                      <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                      <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                      <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="offset-top-50">
                  <h6 class="text-bold">Author</h6>
                  <div class="text-subline"></div>
                  <div class="offset-top-30">
                    <div class="unit unit-sm unit-sm-horizontal unit-spacing-lg">
                      <div class="unit-left"><img src="images/users/user-ronald-austin-170x170.jpg" width="170" height="170" alt="" class="img-responsive img-rounded reveal-inline-block"></div>
                      <div class="unit-body text-sm-left">
                        <h6 class="text-bold text-primary">Ronald Austin</h6>
                        <p>I am a professional blogger interested in everything taking place in cyberspace. I am running this website and try my best to make it a better place to visit. I post only the articles that are related to the topic and thoroughly analyze all visitors’ comments to cater to their needs better.</p>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-60">
                    <h6 class="text-bold">Comments</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-30">
                      <!-- Box Comment-->
                      <div class="box-comment text-left box-comment-classic">
                        <div class="unit unit-xs-horizontal">
                          <div class="unit-left"><img src="images/users/user-theresa-lane-80x80.jpg" alt="" width="80" height="80" class="img-rounded box-comment-img"/></div>
                          <div class="unit-body">
                            <div>
                              <p class="box-comment-title"><span class="h6 text-primary text-bold">Theresa Lane</span>
                                <time datetime="2016-01-01" class="post-meta inset-left-20 text-italic">2 days ago</time>
                              </p>
                            </div>
                            <div class="box-comment-body offset-top-10">
                              <p>Thanks to the author for such a useful article. Pell Grant has also helped my son with paying for his tuition.</p>
                              <div class="offset-top-20"><a href="#"><span class="icon fa-reply icon-xs icon-primary"></span><span class="text-primary inset-left-10">Reply</span></a></div>
                            </div>
                          </div>
                        </div>
                        <!-- Box Comment-->
                        <div class="box-comment text-left box-comment-classic">
                          <div class="unit unit-xs-horizontal">
                            <div class="unit-left"><img src="images/users/user-ronald-austin-80x80.jpg" alt="" width="80" height="80" class="img-rounded box-comment-img"/></div>
                            <div class="unit-body">
                              <div>
                                <p class="box-comment-title"><span class="h6 text-primary text-bold">Roland Austin</span>
                                  <time datetime="2016-01-01" class="post-meta inset-left-20 text-italic">2 days ago</time>
                                </p>
                              </div>
                              <div class="box-comment-body offset-top-10">
                                <p>Thank you!</p>
                                <div class="offset-top-20"><a href="#"><span class="icon fa-reply icon-xs icon-primary"></span><span class="text-primary inset-left-10">Reply</span></a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="offset-top-60">
                        <h6 class="text-bold">Send a Comment</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-20">
                          <form data-form-output="form-output-global" data-form-type="contact" method="post" action="http://www.stlouis.edu.hk/SL90/bat/rd-mailform.php" class="rd-mailform text-left">
                            <div class="range">
                              <div class="cell-lg-6">
                                <div class="form-group">
                                  <label for="comment-form-first-name" class="form-label form-label-outside">First name</label>
                                  <input id="comment-form-first-name" type="text" name="first-name" data-constraints="@Required" class="form-control form-validation-inside">
                                </div>
                              </div>
                              <div class="cell-lg-6 offset-top-12 offset-lg-top-0">
                                <div class="form-group">
                                  <label for="comment-form-last-name" class="form-label form-label-outside">Last name</label>
                                  <input id="comment-form-last-name" type="text" name="last-name" data-constraints="@Required" class="form-control form-validation-inside">
                                </div>
                              </div>
                              <div class="cell-lg-6 offset-top-12">
                                <div class="form-group">
                                  <label for="comment-form-email" class="form-label form-label-outside">E-mail</label>
                                  <input id="comment-form-email" type="email" name="email" data-constraints="@Required @Email" class="form-control form-validation-inside">
                                </div>
                              </div>
                              <div class="cell-lg-6 offset-top-12">
                                <div class="form-group">
                                  <label for="comment-form-phone" class="form-label form-label-outside">Phone</label>
                                  <input id="comment-form-phone" type="text" name="phone" data-constraints="@IsNumeric" class="form-control form-validation-inside">
                                </div>
                              </div>
                              <div class="cell-lg-12 offset-top-12">
                                <div class="form-group">
                                  <label for="comment-form-message" class="form-label form-label-outside">Message</label>
                                  <textarea id="comment-form-message" name="message" data-constraints="@Required" class="form-control form-validation-inside"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="offset-top-20 text-center text-sm-left">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- aside-->
              <?php include 'includes/aside.php'; ?>
            </div>
          </div>
        </section>
      </main>
      <!-- Page Footer-->
      <!-- Corporate footer-->
      <footer class="page-footer">
        <div class="shell-wide">
          <div class="hr bg-gray-light"></div>
        </div>
        <div class="shell section-60">
          <div class="range range-lg-justify range-xs-center">
            <div class="cell-md-3 cell-lg-2">
              <!--Footer brand--><a href="index.php" class="reveal-inline-block"><img width='170' height='172' src='images/logo-170x172.png' alt=''/>
                <div>
                  <h6 class="barnd-name text-bold offset-top-25">Jonathan Carroll</h6>
                </div>
                <div>
                  <p class="brand-slogan text-gray text-italic font-accent">University</p>
                </div></a>
            </div>
            <div class="cell-xs-10 cell-md-5 cell-lg-4 text-lg-left offset-top-50 offset-md-top-0">
              <h6 class="text-bold">Contact us</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30">
                <ul class="list-unstyled contact-info list">
                  <li>
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-phone text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a href="callto:#" class="text-dark">1-800-1234-567,</a> <a href="callto:#" class="reveal-block reveal-md-inline-block text-dark">1-800-6547-321</a>
                      </div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body text-left"><a href="#" class="text-dark">2130 Fulton Street San Diego, CA 94117-1080 USA</a></div>
                    </div>
                  </li>
                  <li class="offset-top-15">
                    <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                      <div class="unit-left"><span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span></div>
                      <div class="unit-body"><a href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="offset-top-15 text-left">
                <ul class="list-inline list-inline-xs list-inline-madison">
                  <li><a href="#" class="icon icon-xxs fa-facebook icon-circle icon-gray-light-filled"></a></li>
                  <li><a href="#" class="icon icon-xxs fa-twitter icon-circle icon-gray-light-filled"></a></li>
                  <li><a href="#" class="icon icon-xxs fa-google icon-circle icon-gray-light-filled"></a></li>
                  <li><a href="#" class="icon icon-xxs fa-instagram icon-circle icon-gray-light-filled"></a></li>
                </ul>
              </div>
            </div>
            <div class="cell-xs-10 cell-md-8 cell-lg-4 text-lg-left offset-top-50 offset-lg-top-0">
              <h6 class="text-bold">Newsletter</h6>
              <div class="text-subline"></div>
              <div class="offset-top-30 text-left">
                <p>Enter your email address to get the latest University news, special events and student activities delivered right to your inbox.</p>
              </div>
              <div class="offset-top-10">
                      <form data-form-output="form-subscribe-footer" data-form-type="subscribe" method="post" action="http://www.stlouis.edu.hk/SL90/bat/rd-mailform.php" class="rd-mailform form-subscribe">
                        <div class="form-group">
                          <div class="input-group input-group-sm">
                            <input placeholder="Your e-mail" type="email" name="email" data-constraints="@Required @Email" class="form-control"><span class="input-group-btn">
                              <button type="submit" class="btn btn-sm btn-primary">Subscribe</button></span>
                          </div>
                        </div>
                        <div id="form-subscribe-footer" class="form-output"></div>
                      </form>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-madison context-dark">
          <div class="shell text-md-left section-5">
            <p>&copy; <span id="copyright-year"></span> All Rights Reserved Terms of Use and <a href="privacy.php">Privacy Policy</a></p>
          </div>
        </div>
      </footer>
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

<!-- Mirrored from www.stlouis.edu.hk/SL90/news-post-page.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Apr 2021 10:40:26 GMT -->
</html>