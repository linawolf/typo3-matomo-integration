<?php

/*
 * This file is part of the "matomo_integration" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

$GLOBALS['SiteConfiguration']['site']['columns'] += [
    'matomoIntegrationUrl' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':url',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'matomoIntegrationSiteId' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':siteId',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
        ],
    ],
    'matomoIntegrationOptions' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':options',
        'config' => [
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => [
                [
                    Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':noScript',
                    'noScript',
                ],
                [
                    Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':linkTracking',
                    'linkTracking',
                ],
                [
                    Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':performanceTracking',
                    'performanceTracking',
                ],
                [
                    Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':heartBeatTimer',
                    'heartBeatTimer',
                ],
                [
                    Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':trackAllContentImpressions',
                    'trackAllContentImpressions',
                ],
                [
                    Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':trackVisibleContentImpressions',
                    'trackVisibleContentImpressions',
                ],
            ],
            'default' => 'linkTracking,performanceTracking',
        ],
    ],
    'matomoIntegrationHeartBeatTimerActiveTimeInSeconds' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':heartBeatTimerActiveTimeInSeconds',
        'description' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':heartBeatTimerActiveTimeInSeconds.description',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
            'default' => Brotkrueml\MatomoIntegration\Entity\Configuration::HEART_BEAT_TIMER_DEFAULT_ACTIVE_TIME_IN_SECONDS,
        ],
    ],
    'matomoIntegrationTagManagerContainerId' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':tagManagerContainerId',
        'config' => [
            'type' => 'input',
            'size' => 10,
            'eval' => 'trim',
        ],
    ],
];

$GLOBALS['SiteConfiguration']['site']['types']['0']['showitem'] .= ',
    --div--;' . Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':tabName,
    --palette--;;matomoIntegrationInstallation,
    --palette--;;matomoIntegrationOptions,
    --palette--;;matomoIntegrationTagManager,
';

$GLOBALS['SiteConfiguration']['site']['palettes'] += [
    'matomoIntegrationInstallation' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':installation',
        'showitem' => 'matomoIntegrationUrl, matomoIntegrationSiteId',
    ],
    'matomoIntegrationOptions' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':options',
        'showitem' => '
            matomoIntegrationOptions,
            --linebreak--,
            matomoIntegrationHeartBeatTimerActiveTimeInSeconds,
        ',
    ],
    'matomoIntegrationTagManager' => [
        'label' => Brotkrueml\MatomoIntegration\Extension::LANGUAGE_PATH_SITECONF . ':tagManager',
        'showitem' => '
            matomoIntegrationTagManagerContainerId,
        ',
    ],
];
