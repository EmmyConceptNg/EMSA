<div class="cell-md-4 text-left cell-xs-8 offset-top-85 offset-md-top-0">
                <aside class="inset-md-left-30">
                  <h6 class="text-bold">Search</h6>
                  <div class="text-subline"></div>
                  <div class="offset-top-30">
                                      <!-- RD Search Form-->
                                      <form action="search-results.php" method="GET" class="form-search rd-search form-search-widget">
                                        <div class="form-group">
                                          <div class="input-group">
                                            <input type="text" name="search" autocomplete="off" class="form-search-input  form-control"><span class="input-group-btn">
                                              <button type="submit" class="btn btn-primary"><span class="icon fa-search"> </span></button></span>
                                          </div>
                                        </div>
                                      </form>
                  </div>
                  <div class="offset-top-60">
                    <!-- Archive-->
                    <h6 class="text-bold">Archive</h6>
                    <div class="text-subline"></div>
                    <div class="row offset-top-20">
                      <div class="col-xs-6">
                        <ul class="list list-marked list-marked-primary">
                          <li><a href="news-post-page.php">Jun 2016</a></li>
                          <li><a href="news-post-page.php">Aug 2016</a></li>
                          <li><a href="news-post-page.php">Oct 2016</a></li>
                          <li><a href="news-post-page.php">Dec 2016</a></li>
                          <li><a href="news-post-page.php">Feb 2017</a></li>
                        </ul>
                      </div>
                      <div class="col-xs-6">
                        <ul class="list list-marked list-marked-primary">
                          <li><a href="news-post-page.php">Jul 2016</a></li>
                          <li><a href="news-post-page.php">Sep 2016</a></li>
                          <li><a href="news-post-page.php">Nov 2016</a></li>
                          <li><a href="news-post-page.php">Jan 2016</a></li>
                          <li><a href="news-post-page.php">Mar 2017</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-60">
                    <!-- Flickr Feed-->
                    <h6 class="text-bold">Gallery</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-20 text-left">
                                        <div data-photo-swipe-gallery="" data-flickr-tags="59029" class="flickr widget-flickrfeed">
                                        <?php 
                                            $sql = "SELECT * FROM gallery";
                                            $query = $conn->query($sql);
                                            while($row = $query->fetch_assoc()){ ?>
                                                <a data-photo-swipe-item="" href="#" data-image_c="href"
                                                    data-size="800x800" data-type="flickr-item"
                                                    class="thumbnail-default"><img width="170" height="170"
                                                        data-title="alt" src="admin/images/gallery/<?php echo $row['photo'] ?>" alt=""
                                                        data-image_q="src"><span class="icon fa-search-plus"></span></a>
                                            <?php }
                                        ?>
                                        </div>
                    </div>
                  </div>
                  <div class="offset-top-60">
                    <!-- Categories-->
                    <h6 class="text-bold">Categories</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-20">
                      <ul class="list list-marked list-marked-primary">
                        <?php
                            $sql = "SELECT * FROM categories";
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){ ?>
                            <li><a href="news-post-page.php"><?php echo $row['cat_title'] ?></a></li>
                      
                        <?php }
                            ?>
                      </ul>
                    </div>
                  </div>
                  <div class="offset-top-60">
                    <!-- Facebook standart widget-->
                    <div>
                      <div class="fb-root fb-widget">
                        <div class="fb-page-responsive">
                          <div data-href="https://www.facebook.com/TemplateMonster" data-tabs="timeline" data-height="220" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" class="fb-page">
                            <div class="fb-xfbml-parse-ignore">
                              <blockquote cite="https://www.facebook.com/TemplateMonster"><a href="https://www.facebook.com/TemplateMonster">TemplateMonster</a></blockquote>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="offset-top-60">
                    <!--Recent posts-->
                    <h6 class="text-bold">Recent News</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-20 text-left">
                    <?php
                      $sql = "SELECT * FROM posts LIMIT 5";
                      $query = $conn->query($sql);
                      while($row = $query->fetch_assoc()){ ?>
                        <article class="widget-post">
                          <h6 class="text-bold text-primary"><a href="news-post-page.php">Ways Parents and Counselors
                              <?php echo ucwords($row['post_title']) ?></a></h6>
                          <p class="text-dark">2 days ago by <?php echo $row['post_author'] ?></p>
                        </article>
                      <?php }
                    ?>
                    </div>
                  </div>
                  <div class="offset-top-60 text-center"><a href="#" class="reveal-block"><img src="images/blog/banner-340x500.jpg" width="340" height="500" alt="" class="img-responsive reveal-inline-block"></a></div>
                  <div class="offset-top-60">
                    <h6 class="text-bold">Tags</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-20">
                    <?php
                        $sql = "SELECT post_tags FROM posts";
                        $query = $conn->query($sql);
                        $row = $query->fetch_assoc();
                    ?>
                      <div class="tags-list group group-sm reveal-inline-block text-middle"><?php $post_tags = explode(',', $row['post_tags']); foreach($post_tags as $tags){ ?>
                      <a href="#" class="btn btn-xs btn-primary text-italic"><?php echo $tags; ?></a>
                      <?php } ?></div>
                    </div>
                  </div>
                </aside>
              </div>