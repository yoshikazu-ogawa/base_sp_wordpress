<?php get_header(); ?>

<div id="contents" class="clearfix">

<?php breadcrumb();?>

<section class="section">
	<h1 class="section-title"><?php the_title();?></h1>
	<div class="inner single">
		<?php if (have_posts()):while ( have_posts()) : the_post(); ?>
		
		<?php the_content();?>
		
		<?php endwhile; endif; ?>
	</div>
</section>

<div id="news-pagenavi" class="clearfix">
<?php $nextpost = get_adjacent_post(false,'', false);?>
<?php if($nextpost):?>
    <a class="nextpost" href="<?php echo get_permalink($nextpost->ID);?> ">
        <p class="next">新しい記事へ</p>
        <p class="title"><?php echo $nextpost->post_title ;?></p>
    </a>    
<?php else:?>
    <div class="saishin">
        <p class="endtitle">最新の記事です</p>
    </div>
<?php endif;?>
 
<?php $prevpost = get_adjacent_post();?>
<?php if($prevpost):?>
    <a class="prevpost" href="<?php echo get_permalink($prevpost->ID);?> ">
        <p class="prev">前の記記事へ</p>
        <p class="title"><?php echo $prevpost->post_title ;?></p>
    </a>
<?php else:?>
    <div class="saigo">
        <p class="endtitle">最後の記事です</p>
    </div>
<?php endif;?>
</div><!--/pagenavi-->

<?php get_sidebar(); ?>

</div><!--/contents-->

<?php get_footer(); ?>