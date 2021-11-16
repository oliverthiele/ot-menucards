<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

(function () {
    /**
     * Register Flexform
     */
    ExtensionManagementUtility::addPiFlexFormValue(
        '*',
        'FILE:EXT:ot_menucards/Configuration/FlexForms/FlexFormCeConfig.xml',
        'ot_menucards'
    );


    $GLOBALS['TCA']['tt_content']['types']['ot_menucards']['showitem'] = '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        --palette--;;headers,pages,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
        --linebreak--, pi_flexform,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
    --palette--;;language,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories, categories,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, rowDescription,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended';

    // Add the CType "ot_menucards"
    ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:ot_menucards/Resources/Private/Language/locallang_be.xlf:tt_content.CType',
            'ot_menucards',
            'content-menu-pages'
        ],
        'menu_subpages',
        'before'
    );
})();
