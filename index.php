<?php
//adsadd
	// Start ob
	ob_start();

	// Include Top
	require_once dirname(__FILE__) . '/../core/includes/top.php';
	require_once WWW . 'includes/includes.php';

	// Include Main Content
	require_once ROOT . 'core/main.php';

	// Load Actions Pages
	$actionFiles = $webSiteConf['SS_ACTION_PAGES_ARRAY'];

	// Load Tpl
	if (isset($_GET['action']) && !empty($actionFiles[$_GET['action']]))
	{
		$loadedPage = $actionFiles[$_GET['action']];
		require_once $loadedPage;
	}
	// Load Default Tpl
	else
	{
		$arraySimple['TPL_CENTER'] = 'default.tpl.php';
	}

	/*echo json_encode(array(
		'avatar' => array(1, 2, 3, 4),
		'destroy' => array(1, 4, 3),
		'loot' => array(1, 4, 3)
	));*/

/*echo 'BLA ';
	$blo = DatabaseStaticData::getDataBy('item_level', array(
		   'item_id',
		   'item_level',
		   'alter_id'
		  ), array(
		   'item_id'  => 1,
		   'item_level'  => 1,
		  'alter_id' => 1
		  ));
	var_dump($bla);*/

	/*echo 'BLA ';
	$bla = DatabaseStaticData::getData('item_level', array('item_id', 'item_level'));
	var_dump($bla);*/

	/*echo 'BLA ';
	$bla = DatabaseCacheData::getData('bla', 'item_level', array('item_id', 'item_level'), 10, array('item_id' => 1), array('added_time'));
	var_dump($bla);*/

	/*echo '<br />BLO';
	$bli = DatabaseStaticData::getDataBy('item_level', array('item_id', 'level'), array('level_required' => 2));
	var_dump($bli);*/

	// Include Bottom
	require_once ROOT . 'core/includes/bottom.php';
?>