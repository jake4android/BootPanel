<?php
	require 'conf/config.php';

	require 'lib/api/Design.php';
	require 'lib/api/Panel.php';
	require 'lib/api/Plugin.php';
	require 'lib/api/Glyphicon.php';
	require 'lib/api/Disk.php';
	require 'themes/' . $BootPanel_Theme . '/Theme.php';
	
	foreach(glob("plugins/*.php") as $plugin) {
		require $plugin;
	}