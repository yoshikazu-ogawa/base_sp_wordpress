<?php get_header(); ?>

<?php layerslider(1) ?>

<div id="contents" class="clearfix">

<section class="section">
	<h1 class="section-title">お知らせ</h1>
	<div class="inner">
		<ul id="news-list">
			<?php query_posts('post_type=post&posts_per_page=7'); ?>
			<?php if (have_posts()):while ( have_posts()) : the_post(); ?>
			<?php $cat = get_the_category();$catslug2 = $cat[0]->category_nicename;$catslug1 = $cat[0]->cat_name;?>
			<li><span class="<?php echo $catslug2;?>"><?php echo $catslug1;?></span> <time><?php the_time('Y/n/j');?></time><p><a href="<?php the_permalink();?>"><?php the_title();?></a></p></li>
			<?php endwhile; endif; wp_reset_query(); ?>
		</ul>
		<a class="btn-more" href="<?php echo home_url('/oshirase');?>">もっと見る</a>
	</div>
</section>

<section class="section">
	<h1 class="section-title">同窓会報告</h1>
	<div class="inner">
		<ul id="activity-list">
			<?php query_posts('post_type=post-activity&posts_per_page=3'); ?>
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
		<a class="btn-more" href="<?php echo home_url('/activity');?>">もっと見る</a>
	</div>
</section>

<section class="section">
	<h1 class="section-title">お問い合わせ</h1>
	<div class="inner">
		<a class="btn-more" href="<?php echo home_url('/contact');?>">お問い合わせ</a>
		<p>同窓会への参加。協賛バナー広告の設置など上記メールフォームよりお問い合わせ下さい。</p>
	</div>
</section>

<section class="section">
	<h1 class="section-title">バナー</h1>
	<div class="inner">
		<ul id="bnr-list">
			<li><a href="http://www.ishikawa-c.ed.jp/~daisfh/" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/contents/top/bnr-2.jpg" alt="大聖寺高等学校"></a></li>
			<li><a href="http://www.kinki-seikokai.net/" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/contents/top/bnr-4.jpg" alt="近畿聖高会"></a></li>
			<li><a href="http://www.geocities.jp/style21guidesk/tokyo-seikoukai" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/contents/top/bnr-3.jpg" alt="東京聖高会"></a></li>
			<li><a href="http://www.city.kaga.ishikawa.jp/" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/contents/top/bnr-1.jpg" alt="加賀市"></a></li>
		</ul>
	</div>
</section>

</div><!--/contents-->

<?php get_footer(); ?>