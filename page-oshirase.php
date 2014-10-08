<?php get_header(); ?>

<div id="contents" class="clearfix">

<?php breadcrumb();?>

<section class="section">
	<h1 class="section-title">お知らせ</h1>
	<div class="inner">
		<ul id="news-list">
			<?php $paged = get_query_var( 'paged' ); ?>
			<?php query_posts('post_type=post&posts_per_page=8&paged='.$paged); ?>
			<?php if (have_posts()):while ( have_posts()) : the_post(); ?>
			<?php $cat = get_the_category();$catslug2 = $cat[0]->category_nicename;$catslug1 = $cat[0]->cat_name;?>
			<li><span class="<?php echo $catslug2;?>"><?php echo $catslug1;?></span> <time><?php the_time('Y/n/j');?></time><p><a href="<?php the_permalink();?>"><?php the_title();?></a></p></li>
			<?php endwhile; endif; ?>
		</ul>
		
		<?php get_template_part('pager');?>
		<?php wp_reset_query();?>
	</div>
</section>

</div><!--/contents-->

<?php get_footer(); ?>