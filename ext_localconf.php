<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(function () {
    // ***********************************************************
    // Add the content element to the "New Content Element Wizard"
    // ***********************************************************
    ExtensionManagementUtility::addPageTSConfig(
        '@import "EXT:ot_menucards/Configuration/TSconfig/Page/NewContentElementWizard.tsconfig"'
    );
})();
