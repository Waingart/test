<?php 
ffffffff
if ( !$top_users_count )
	$top_users_count = ( is_page('home') ) ? $GLOBAL_VARS['top_users_per_home'] : $GLOBAL_VARS['top_users'];

?>

<div class="module">
	<a class="top bgr-black" href="<?=WP_HOME?>/members/">Кто с нами</a>
	<div class="in bgr-white">
		
		<ul class="none openers select">
		
			<?php for ($i=0; $i<$top_users_count; $i++): ?>
				<li class="opener <?php if ($i==0) echo 'opened'; ?>">
					<div class="opener-content">
						<a href="<?=WP_HOME?>/members/">
							<p class="preview"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/preview1-2.jpg" width="180" height="120" /></p>
							<p class="h3 last">Если люди вам не говорят, что ваша идея безумна, значит это не очень большая идея</p>		
						</a>					
					</div>
					<a href="<?=WP_HOME?>/members/" class="small select opener-header">Френсис Форд Коппола</a>
				</li>
			<?php endfor; ?>
			
			<?php /* ?>
			<li class="opener">
				<div class="opener-content">
					<a href="<?=WP_HOME?>/members/">
						<p class="preview"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/preview2-2.jpg" width="180" height="120" /></p>
						<p class="h3 last">Стихов писать не умел. И даже читал стихи, как говорится, без выражения</p>	
					</a>
				</div>
				<a href="<?=WP_HOME?>/members/" class="small select opener-header">Сергей Довлатов</a>					
			</li>
			
			<li class="opener">
				<div class="opener-content">
					<a href="<?=WP_HOME?>/members/">
						<p class="preview"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/preview3-2.jpg" width="180" height="120" /></p>
						<p class="h3 last">С женщиной можно делать три вещи. Любить, страдать из-за неё, превращать её в&nbsp;литературу</p>	
					</a>
				</div>
				<a href="<?=WP_HOME?>/members/" class="small select opener-header">Лоренс Даррел</a>					
			</li>

			<li class="opener">
				<div class="opener-content">
					<a href="<?=WP_HOME?>/members/">
						<p class="preview"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/preview4-2.jpg" width="180" height="120" /></p>
						<p class="h3 last">Именно степень внимания придает памяти глубину и постоянство, а не особая внутренняя ценность самого события</p>	
					</a>
				</div>
				<a href="<?=WP_HOME?>/members/" class="small select opener-header">Ирвин Шэтток</a>					
			</li>
			
			<li class="opener">
				<div class="opener-content">
					<a href="<?=WP_HOME?>/members/">
						<p class="preview"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/preview5-2.jpg" width="180" height="120" /></p>
						<p class="h3 last">Я считаю, что у человека или есть талант, или его нет. Талант обязывает. Имея талант, нужно работать</p>	
					</a>
				</div>
				<a href="<?=WP_HOME?>/members/" class="small select opener-header">Анри Картье-Брессон</a>					
			</li>
			
			<li class="opener">
				<div class="opener-content">
					<a href="<?=WP_HOME?>/members/">
						<p class="preview"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/preview3-2.jpg" width="180" height="120" /></p>
						<p class="h3 last">С женщиной можно делать три вещи. Любить, страдать из-за неё, превращать её в&nbsp;литературу</p>	
					</a>
				</div>
				<a href="<?=WP_HOME?>/members/" class="small select opener-header">Лоренс Даррел</a>					
			</li>

			<li class="opener">
				<div class="opener-content">
					<a href="<?=WP_HOME?>/members/">
						<p class="preview"><img src="<?php echo get_template_directory_uri(); ?>/images/temp/preview4-2.jpg" width="180" height="120" /></p>
						<p class="h3 last">Именно степень внимания придает памяти глубину и постоянство, а не особая внутренняя ценность самого события</p>	
					</a>
				</div>
				<a href="<?=WP_HOME?>/members/" class="small select opener-header">Ирвин Шэтток</a>					
			</li>
			<?php */ ?>
			
		</ul>
		
		<a class="all x-small" href="<?=WP_HOME?>/club/team/">Другие участники</a>

	</div>
</div>
