<section class="page_title"><!--main_cta-->
    <div class="content">
        <div class="blog_content">
            <header>
                <h1>Blog</h1>
            </header>
            <a href="http://localhost/g3infotech" title="Home">Home</a> <span> > Blog</span>
        </div><!--blog_content-->
    </div><!--content---->
</section><!--page_title-->
<section class="main_blog">
    <div class="content">
        <div class="main_blog_content">
            <?php for($i = 0; $i < 9; $i++): ?>
                <?php include (__DIR__ . "/blog-post.php"); ?>
            <?php endfor; ?>
        </div><!--main_blog_content-->
    </div><!--content-->
</section><!--main_blog-->