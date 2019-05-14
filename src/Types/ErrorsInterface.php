<?php

namespace SoliDry\Types;


use SoliDry\Extension\JSONApiInterface;

interface ErrorsInterface
{
    // http errors
    public const HTTP_CODE_BULK_EXT_ERROR = 112;
    public const HTTP_CODE_FSM_ATTR       = 121;
    public const HTTP_CODE_FSM_INIT_ATTR  = 122;
    public const HTTP_CODE_FSM_FLAGS      = 123;
    public const HTTP_PARAM_LIMIT         = 124;

    public const JSON_API_ERRORS = [
        self::HTTP_CODE_BULK_EXT_ERROR => 'There is no ' . JSONApiInterface::EXT_BULK . ' value in ' . JSONApiInterface::EXT . ' key of ' . JSONApiInterface::CONTENT_TYPE_KEY . ' header',
        self::HTTP_CODE_FSM_ATTR       => 'There should be "states" element filled in with FSM.',
        self::HTTP_CODE_FSM_FLAGS      => 'Flags should be preset for bit mask.',
        self::HTTP_PARAM_LIMIT         => 'Page limit can`t be > 1000, try to set less value per page',
    ];

    // console errors
    public const CODE_FOREIGN_KEY   = 11;
    public const CODE_DIR_NOT_FOUND = 12;
    public const CODE_OPEN_API_KEY  = 13;
    public const CODE_CUSTOM_TYPES  = 14;

    public const CONSOLE_ERRORS = [
        self::CODE_FOREIGN_KEY  => 'There must be references and on attributes for foreign key construction.',
        self::CODE_OPEN_API_KEY => 'There must be ' . ApiInterface::OPEN_API_KEY . ', ' . ApiInterface::API_SERVERS . ' document root fields',
        self::CODE_CUSTOM_TYPES => 'At least these Types must be declared: ' . CustomsInterface::CUSTOM_TYPES_ID
            . ', ' . CustomsInterface::CUSTOM_TYPES_TYPE . ', ' . CustomsInterface::CUSTOM_RELATIONSHIPS_DATA_ITEM
            . ' as components -> schemas descendants',
    ];
}