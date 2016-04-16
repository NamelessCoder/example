<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Add the TypoScript of our extension - standard TYPO3 way.
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('example', 'Configuration/TypoScript', 'FluidTYPO3 Example Extension');
