<?php get_header(); ?>
<h1>This is an archive template</h1>
<?php
if(have_posts()){
    while(have_posts()){
        the_post();
    }
}
?>
</div>

<?php
get_footer();
?>