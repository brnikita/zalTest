<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/price.css"/>
<body <?php body_class(); ?> >
<div class="wrapper">
    <?php get_sidebar(); ?>
    <section class="price section_tb">
        <div class="section_line_lr conteiner">
            <h1>Прейскурант</h1>
            <?php the_excerpt(); ?>
        </div>
        <?php echo do_shortcode("[PR_slider]"); ?>
    </section>
    <section class="section_tb info">
        <div class="section_line_lr conteiner">
            <?php the_content(); ?>
        </div>
    </section>
</div>
<?php get_footer(); ?>
</body>
</html>
