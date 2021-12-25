<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'WapplerSystems.monitoring_tester',
    'Exception',
    [
        'Exception' => 'main,throw',
    ],
    [
        'Exception' => 'throw',
    ]
);
