<?php
	/* vim: set expandtab sw=4 ts=4 sts=4: */
	/**
	 * configures general layout
	 * for detailed layout configuration please refer to the css files
	 *
	 * @package    PhpMyAdmin-theme
	 * @subpackage PMAHomme
	 */

	$black = "#000000";
	$dark_gray0 = "#151515";
	$dark_gray1 = "#212121";
	$dark_gray2 = "#282828";
	$dark_gray3 = "#424242";
	$dark_gray4 = "#555555";
	$light_grey1 = "#E0E0E0";
	$almost_white = "#EEEEEE";
	$white = "#FFFFFF";

	/**
	 * navi frame
	 */
	$GLOBALS['cfg']['logoBGC']					= $dark_gray3;		// navi frame width
	$GLOBALS['cfg']['NaviWidth']				= 250;				// navi frame width
	$GLOBALS['cfg']['NaviText']					= $almost_white;	// foreground (text) color for the navi frame
	$GLOBALS['cfg']['NaviBackground']			= $dark_gray3;		// background for the navi frame
	$GLOBALS['cfg']['NaviPointerColor']			= $almost_white;	// foreground (text) color of the pointer in navi frame
	$GLOBALS['cfg']['NaviPointerBackground']	= $dark_gray4;		// background of the pointer in navi frame

	/**
	 * main frame
	 */
	$GLOBALS['cfg']['BorderColor']				= $light_grey1;		// foreground (text) color for the main frame
	$GLOBALS['cfg']['LinkText']					= "#64B5F6";		// foreground (text) color for the main frame
	$GLOBALS['cfg']['MainText']					= $almost_white;	// foreground (text) color for the main frame
	$GLOBALS['cfg']['MainBackground']			= $dark_gray0;		// background for the main frame
	$GLOBALS['cgf']['GroupBorder']				= 0;				// background for content-groups
	$GLOBALS['cgf']['GroupBorderColor']			= $dark_gray2;		// background for content-groups
	$GLOBALS['cgf']['GroupBackground']			= $dark_gray2;		// background for content-groups
	$GLOBALS['cgf']['GroupHeaderBackground']	= $dark_gray3;		// Background for content-group headers
	$GLOBALS['cfg']['BrowsePointerColor']		= '#000';			// foreground (text) color of the pointer in browse mode
	$GLOBALS['cfg']['BrowsePointerBackground']	= '#cfc';			// background of the pointer in browse mode
	$GLOBALS['cfg']['BrowseMarkerColor']		= '#000';			// foreground (text) color of the marker (visually marks row by clicking on it) in browse mode
	$GLOBALS['cfg']['BrowseMarkerBackground']	= '#fc9';			// background of the marker (visually marks row by clicking on it) in browse mode

	/**
	 * tables
	 */
	$GLOBALS['cfg']['Border']					= 0;			// border
	$GLOBALS['cfg']['ThBackground']				= '#D3DCE3';	// table header and footer color
	$GLOBALS['cfg']['ThColor']					= '#000';		// table header and footer background
	$GLOBALS['cfg']['BgOne']					= '#E5E5E5';	// table data row background
	$GLOBALS['cfg']['BgTwo']					= '#D5D5D5';	// table data row background, alternate

	/**
	 * fonts
	 */
	/**
	 * the font family as a valid css font family value,
	 * if not set the browser default will be used
	 * (depending on browser, DTD and system settings)
	 */
	$GLOBALS['cfg']['FontFamily']				= 'sans-serif';
	/**
	 * fixed width font family, used in textarea
	 */
	$GLOBALS['cfg']['FontFamilyFixed']			= 'monospace';
