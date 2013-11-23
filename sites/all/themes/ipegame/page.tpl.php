<div id="wrapper">	
	<div id="header">
		<?php if ($logo) : ?>
		<a href="<?php print $base_path ?>" title="<?php print t('Home') ?>">
			<img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" />
		</a><?php endif; ?>
	</div>
	<div id="page-wrapper">
		<div id="sidebar">
			<?php if ($main_menu) { print theme('links__system_main_menu',array('links' => $main_menu)); } ?>
		</div>
		<div id="content">
			<!--?php print $messages; ?-->
			<h1 class='content-header'><?php if($title) { print $title; } ?></h1>
			<div class="tabs"><?php if ($tabs) { print render($tabs); } ?></div>
			<?php print render($page['help']); ?>
			<ul class="action-links"><?php if($action_links) { print render($action_links); } ?></ul>
			<?php print render($page['content']); ?>
		</div>
		<div class='clear'></div>
	</div>
	<div id='footer'>
		<p>IP E-GAME VENTURES, INC. ALL RIGHTS RESERVED.</p>
	</div>
</div>