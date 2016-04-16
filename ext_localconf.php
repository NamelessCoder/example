<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Register this extension as provider for *every* possible feature.
// Alternatively we could pass a second argument, a controller name
// like "Content" or "Page" to indicate that our extension provides
// only those specific features. By not passing the argument we make
// FluidTYPO3 search for integrations of *any* of the installed or
// enabled features.
\FluidTYPO3\Flux\Core::registerProviderExtensionKey('FluidTYPO3.Example');

// Register Provider classes used by examples in this extension.
\FluidTYPO3\Flux\Core::registerConfigurationProvider(\FluidTYPO3\Example\Provider\ConcatenatingContentProvider::class);
