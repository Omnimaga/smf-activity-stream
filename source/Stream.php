<?php
	if (!defined('SMF')){
		die('Hacking attempt...');
	}
	function Stream(){
		global $context, $smcFunc;
		loadtemplate('Stream');
	}
	$context['page_title'] = $txt['Stream_PageTitle'];
	$context['page_title_html_safe'] = $smcFunc['htmlspecialchars'](un_htmlspecialchars($context['page_title']));
	$context['linktree'][] = array(
  		'url' => $scripturl. '?action=stream',
 		'name' => $txt['Stream'],
	);
	$context['youraction_Head'] = $txt['Stream'];
	$context['youraction_Body'] = 'Hello World';
?>