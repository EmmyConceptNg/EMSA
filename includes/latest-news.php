<section class="bg-catskill">
<div>
<div>
          <div class="shell section-70 section-md-114">
            <h2 class="text-bold">Latest News</h2>
            <hr class="divider bg-madison">
            <div class="range offset-top-60 text-left range-xs-center">
              <?php
              $sql = "SELECT * FROM posts ORDER BY post_id LIMIT 6";
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){ ?>
              <div class="cell-sm-6 cell-md-4">
                <article class="post-news"><a href="news-post-page.php?slug=<?php echo $row['post_slug'] ?>"><img src="admin/<?php echo $row['post_pic'] ?>" width="370" height="240" alt="" class="img-responsive"></a>
                  <div class="post-news-body">
                    <h6><a href="news-post-page.php?slug=<?php echo $row['post_slug'] ?>"><?php echo $row['post_title'] ?></a></h6>
                    <div class="offset-top-20">
                      <p><?php echo substr($row['post_content'], '0', '100') ?>(...)</p>
                    </div>
                    <div class="post-news-meta offset-top-20"><span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison"></span><span class="text-middle inset-left-10 text-italic text-black">2 days ago</span></div>
                  </div>
                </article>
                </div>
              <?php }
              ?>  
              
              
            </div>
            </div>
            </div>
            <div class="offset-top-50"><a href="modern-news.php" class="btn btn-primary">View All News Posts</a></div>
          </div>
        </section>