<?php

function startertemplate_css_alter(&$css) {
	unset($css['sites/all/modules/ctools/css/ctools.css']);
	unset($css['modules/system/system.base.css']);
	unset($css['modules/system/system.menus.css']);
	unset($css['modules/system/system.messages.css']);
	unset($css['modules/system/system.theme.css']);
	unset($css['modules/comment/comment.css']);
	unset($css['modules/field/theme/field.css']);
	unset($css['modules/node/node.css']);
	unset($css['modules/search/search.css']);
	unset($css['modules/user/user.css']);
	unset($css['sites/all/modules/views/css/views.css']);
}

function startertemplate_js_alter(&$js) {
	unset($js['misc/drupal.js']);
	unset($js['misc/jquery.js']);
	unset($js['misc/jquery.once.js']);
	unset($js['settings']);
}
