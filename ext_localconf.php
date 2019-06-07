<?php
defined('TYPO3_MODE') or die('( ͡ಠ ʖ̯ ͡ಠ)╭∩╮');

if (TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addService('autologin', 'auth', \MichielRoos\AutoLogin\Service\AuthenticationService::class, [
        'title'       => 'Auto login',
        'description' => 'Authentication based on nothing',
        'subtype'     => 'getUserBE,authUserBE',
        'available'   => true,
        'priority'    => 100,
        'quality'     => 100,
        'os'          => '',
        'exec'        => '',
        'className'   => \MichielRoos\AutoLogin\Service\AuthenticationService::class
    ]);

    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['backend']['loginProviders'][1559892822243] = [
        'provider'   => \MichielRoos\AutoLogin\LoginProvider\AutoLoginProvider::class,
        'sorting'    => 80,
        'icon-class' => 'fa-key',
        'label'      => 'LLL:EXT:autologin/Resources/Private/Language/locallang.xlf:login.link'
    ];
}