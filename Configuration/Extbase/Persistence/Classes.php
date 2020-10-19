<?php
declare(strict_types = 1);

return [
    \SJBR\SrLanguageMenu\Domain\Model\SystemLanguage::class => [
        'tableName' => 'sys_language',
        'properties' => [
            'title' => [
                'fieldName' => 'title'
            ],
            'isoLanguage' => [
                'fieldName' => 'static_lang_isocode'
            ]
        ]
    ],
    \SJBR\SrLanguageMenu\Domain\Model\Page::class => [
        'tableName' => 'pages',
        'properties' => [
            'l18nCfg' => [
                'fieldName' => 'l18n_cfg'
            ],
            'parent' => [
                'fieldName' => 'l10n_parent'
            ],
            'language' => [
                'fieldName' => 'sys_language_uid'
            ]
        ]
    ]
];