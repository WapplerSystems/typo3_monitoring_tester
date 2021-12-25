<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'monitoring_tester',
	'Exception',
	'Exception thrower'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('monitoring_tester', 'Configuration/TypoScript', 'Monitoring Tester');




