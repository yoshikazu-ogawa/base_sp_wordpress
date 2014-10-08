<?php get_header(); ?>

<div id="contents" class="clearfix">

<?php breadcrumb();?>

<section class="section">
	<h1 class="section-title">本部の活動報告</h1>
	<div class="inner">
			
		<ul id="activity-list">
			<?php $paged = get_query_var( 'paged' ); ?>
			<?php query_posts('post_type=post-activity&posts_per_page=6&paged='.$paged); ?>
			<?php if (have_posts()):while ( have_posts()) : the_post(); ?>
			<li>
				<?php if(has_post_thumbnail()) :?>
					<a href="<?php the_permalink();?>"><?php the_post_thumbnail('activitysize'); ?></a>
				<?php else:?>
					<a href="<?php the_permalink();?>"><img src="<?php echo get_template_directory_uri(); ?>/img/contents/activity/nophoto.jpg" alt="No Photo"></a>
				<?php endif;?>
				<p class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
				<p class="extract"><?php echo mb_substr(strip_tags($post-> post_content),0,50).'...'; ?><a class="link" href="<?php the_permalink();?>">（続きを読む）</a></p>
			</li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		
		<?php get_template_part('pager');?>
		<?php wp_reset_query();?>
	</div>
</section>

</div><!--/contents-->

<?php get_footer(); ?>