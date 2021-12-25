<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'WapplerSystems.' . $_EXTKEY,
	'Exception',
	[
		'Exception' => 'main,throw',

    ],
	[
		'Exception' => 'throw',

    ]
);
