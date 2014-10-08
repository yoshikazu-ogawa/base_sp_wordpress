<aside id="side">

<section class="section">
	<h1 class="section-title">最近のお知らせ</h1>
		<div class="inner">
			<ul id="recently-post">
			<?php query_posts('post_type=post&posts_per_page=7'); ?>
			<?php if (have_posts()):while ( have_posts()) : the_post(); ?>
			<li><time><?php the_time('Y/n/j');?></time><p><a href="<?php the_permalink();?>"><?php the_title();?></a></p></li>
			<?php endwhile; endif; wp_reset_query(); ?>
			</ul>
		</div>
</section>

<section class="section">
	<h1 class="section-title">過去のお知らせ</h1>
		<div class="inner">
			<ul>
			<?php wp_get_archives('type=monthly&show_post_count=1'); ?>
			</ul>
		</div>
</section>

</aside>
