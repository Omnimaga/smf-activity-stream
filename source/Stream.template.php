<?php
	function template_main(){
		global $context;
		echo '<div class="cat_bar">
			<h3 class="catbg">',$context['youraction_Head'],'</h3>
		</div>
		<div class="windowbg2">
			<span class="topslice">
				<span></span>
			</span>
			<div class="content">',$context['youraction_Body'], '</div>
			<span class="botslice">
				<span></span>
			</span>
		</div>
		<br />';
	}
?>