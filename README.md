FluidTYPO3 Example Extension
============================

An extension containing at least one example of all features provided by the FluidTYPO3 extension family. Each example is a _live_
example meaning that it implemented in **exactly the same way each feature should be implemented by you in your site** but also
contains extensive help texts and descriptions.

Installation and usage
----------------------

The extension is only available via Github or Packagist - it cannot be downloaded from the TYPO3 extension repository.

### Steps to install:

1. Run `composer require fluidtypo3/example` in your project (or use `composer require --dev fluidtypo3/example` if you wish;
   this extension has no purpose in a production environment after all)
2. Install the extension with the extension key `example` via the TYPO3 extension manager (if your site is currently installed you
   can run the command `./typo3/cli_dispatch.phpsh extbase extension:install example` to install the extension but this will fail
   if you haven't completed the TYPO3 install process - manually or automatically - beforehand)
   
### To use the examples:

In your TYPO3 site start by creating a new content element of the type `FluidTYPO3: Getting Started` (under the tab called
`Help` when inserting a new content element). Save and close the element and study the content element's preview area - where you
will find explanations of the main concepts along with instructions on how to use the examples.
