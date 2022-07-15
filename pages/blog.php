<?php 
    
    if(!$article) {

?>

<section id="innerHero" class="hero">
    <div class="content">
        
        <div class="titleContainer">
            <div class="title">
                <h1><?php echo $page_title; ?></h1>
            </div>
        </div>

    </div>
</section>

<section class="patternBg blogLanding">

    <div class="content">

        <div class="grid grid--gutters">

            <?php 

            $resultBlogList = mysql_query("SELECT * FROM blog WHERE visible = 1 ORDER BY post_date DESC");
            while($row = mysql_fetch_array($resultBlogList))
            {
                $blog_title = $row['title'];
                $slug = $row['slug'];
                $post_date = $row['post_date'];
                $newDate = date("jS F Y", strtotime($post_date));
                $meta_description = $row['meta_description'];
                $image = $row['image'];

            ?>
                <div class="grid-cell gs-third">
                    <article>
                        <a href="/blog/<?php echo $slug; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $blog_title; ?>"></a>
                        <div>
                            <p><span class="article_date"><?php echo $newDate; ?></span></p>
                            <h2><a href="/blog/<?php echo $slug; ?>"><?php echo $blog_title; ?></a></h2>
                            <p><?php echo $meta_description; ?></p>
                        </div>
                    </article>
                </div>
            <?php } ?>

        </div>

    </div>

</section>

<?php
    } else {
    
        $resultBlogPost = mysql_query("SELECT * FROM blog WHERE slug = '$article'");
            while($row = mysql_fetch_array($resultBlogPost))
            {
                $blog_title = $row['title'];
                $slug = $row['slug'];
                $post_date = $row['post_date'];
                $newDate = date("jS F Y", strtotime($post_date));
                $meta_description = $row['meta_description'];
                $image = $row['image'];
                $post_content = $row['content'];

            ?>
            <section id="innerHero" class="hero article_inner_hero">
            <?php 
            if($image) {
            ?>
                    <img src="<?php echo $image; ?>" alt="<?php echo $blog_title; ?>">
            <?php
            }
            ?>
            </section>

            <section id="article_content" class="patternBg">
                <div class="content">
                    <article>
                        <p class="date"><?php echo $newDate; ?></p>
                        <h1 title="<?php echo $blog_title; ?>"><?php echo $blog_title; ?></h1>
                        <?php echo $post_content; ?>
                        <hr>
                        <p><a href="/blog">Back to blog</a></p>
                        </hr>

                    </article>
                    <div id="share_article"></div>
                </div>
            </section>
            

                
            <?php } ?>

    

    <section class="blogLanding" style="background-color: #E75118; display: none;">

        <div class="content">
            <h2>Continue reading...</h2>
            <div class="grid grid--gutters">
                <div class="grid-cell gs-third">
                    <article>
                        <a href="#"><img src="https://www.hapticrecruit.com/uploads/mar_15_after_the_rain_cal_1680x1.jpg" alt="image title"></a>
                        <div>
                            <p><span class="article_tag">Technology</span> <span class="article_date">31/09/18</span></p>
                            <h2><a href="#">How Blockchain is taking gaming to a new level</a></h2>
                            <p>Blockchain technology encompasses so much more than just cryptocurrencies these days. And while these currencies are by far blockchain's most famous use case, the potential for blockchain far, far exceeds a straightforward transfer of value.</p>
                        </div>
                    </article>
                </div>
                <div class="grid-cell gs-third">
                    <article>
                        <a href="#"><img src="https://www.hapticrecruit.com/uploads/mar_15_after_the_rain_cal_1680x1.jpg" alt="image title"></a>
                        <div>
                            <p><span class="article_tag">Business</span> <span class="article_date">31/09/18</span></p>
                            <h2><a href="#">How Blockchain is taking gaming to a new level</a></h2>
                            <p>Blockchain technology encompasses so much more than just cryptocurrencies these days. And while these currencies are by far blockchain's most famous use case, the potential for blockchain far, far exceeds a straightforward transfer of value.</p>
                        </div>
                    </article>
                </div>
                <div class="grid-cell gs-third">
                    <article>
                        <a href="#"><img src="https://www.hapticrecruit.com/uploads/mar_15_after_the_rain_cal_1680x1.jpg" alt="image title"></a>
                        <div>
                            <p><span class="article_tag">Gaming</span> <span class="article_date">31/09/18</span></p>
                            <h2><a href="#">How Blockchain is taking gaming to a new level</a></h2>
                            <p>Blockchain technology encompasses so much more than just cryptocurrencies these days. And while these currencies are by far blockchain's most famous use case, the potential for blockchain far, far exceeds a straightforward transfer of value.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <?php
    }
?>
        