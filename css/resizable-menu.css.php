<?php
	/* vim: set expandtab sw=4 ts=4 sts=4: */
	/**
	 * Styles for the resizable menus
	 *
	 * used by js/vendor/jquery/jquery.menuResizer-1.0.js
	 *
	 * @package	PhpMyAdmin-theme
	 * @subpackage PMAHomme
	 */

	// unplanned execution path
	if (! defined('PHPMYADMIN') && ! defined('TESTSUITE')) {
		exit();
	}
?>
ul.resizable-menu a,
ul.resizable-menu span {
	display: block;
	margin: 0;
	padding: 0;
	white-space: nowrap;
}

ul.resizable-menu .submenu {
	display: none;
	position: relative;
}

ul.resizable-menu .shown {
	display: inline-block;
}

ul.resizable-menu ul {
	margin: 0;
	padding: 0;
	position: absolute;
	list-style-type: none;
	display: none;
	border-right: 1px <?= $GLOBALS['cfg']['BorderColor'];?> solid;
	border-bottom: 1px <?= $GLOBALS['cfg']['BorderColor'];?> solid;
	border-left: 1px <?= $GLOBALS['cfg']['BorderColor'];?> solid;
	z-index: 2;
	right: 0;
}

ul.resizable-menu li:hover {
	color: <?= $GLOBALS['cfg']['NaviPointerColor'];?>;
	background-color: <?= $GLOBALS['cfg']['NaviPointerBackground'];?>;
}

ul.resizable-menu li:hover ul,
ul.resizable-menu .submenuhover ul {
	display: block;
	background: <?= $GLOBALS['cfg']['NaviBackground'];?>;
}

ul.resizable-menu ul li {
	width: 100%;
}
