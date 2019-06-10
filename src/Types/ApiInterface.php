<?php

namespace SoliDry\Types;

/**
 * Interface ApiInterface is the general purpose storage for OAS specific constants
 *
 * @package SoliDry\Types
 */
interface ApiInterface
{

    public const OPEN_API_KEY         = 'openapi';
    public const API_SERVERS          = 'servers';
    public const API_INFO             = 'info';
    public const API_TITLE            = 'title';
    public const API_VERSION          = 'version';
    public const API_DESCRIPTION      = 'description';
    public const API_CONTACT          = 'contact';
    public const API_NAME             = 'name';
    public const API_URL              = 'url';
    public const API_EMAIL            = 'email';
    public const API_LICENSE          = 'license';
    public const API_TERMS_OF_SERVICE = 'termsOfService';

    public const API_VARS       = 'variables';
    public const API_BASE_PATH  = 'basePath';
    public const API_DEFAULT    = 'default';
    public const API_COMPONENTS = 'components';
    public const API_SCHEMAS    = 'schemas';

    // RAML Types map to FW
    public const RAML_TYPE_ARRAY    = 'array';
    public const RAML_TYPE_OBJECT   = 'object';
    public const RAML_TYPE_DATETIME = 'date';
    public const RAML_TYPE_BOOLEAN  = 'boolean';
    public const RAML_TYPE_STRING   = 'string';
    public const RAML_TYPE_INTEGER  = 'integer';
    public const RAML_TYPE_NUMBER   = 'number';

    public const RAML_TO_PHP_TYPES = [
        self::RAML_TYPE_STRING  => PhpInterface::PHP_TYPES_STRING,
        self::RAML_TYPE_INTEGER => PhpInterface::PHP_TYPES_INT,
    ];

    public const RAML_TYPE_FORMAT        = 'format';
    public const RAML_TYPE_FORMAT_FLOAT  = 'float';
    public const RAML_TYPE_FORMAT_DOUBLE = 'double';

    public const RAML_PROPS         = 'properties';
    public const RAML_ATTRS         = 'attributes';
    public const RAML_RELATIONSHIPS = 'relationships';
    public const RAML_TYPE          = 'type';
    public const RAML_ID            = 'id';
    public const RAML_DATA          = 'data';
    public const RAML_ITEMS         = 'items';

    // facets
    public const RAML_FACETS          = 'facets';
    public const RAML_INDEX           = 'index';
    public const RAML_COMPOSITE_INDEX = 'composite_index';

    // RAML keys
    public const RAML_KEY_REQUIRED    = 'required';
    public const RAML_KEY_DESCRIPTION = 'description';
    public const RAML_KEY_DEFAULT     = 'default';
    public const RAML_KEY_TYPES       = 'Types';
    public const RAML_KEY_USES        = 'uses';

    // RAML filters
    public const RAML_STRING_MIN  = 'minLength';
    public const RAML_STRING_MAX  = 'maxLength';
    public const RAML_INTEGER_MIN = 'minimum';
    public const RAML_INTEGER_MAX = 'maximum';
    public const RAML_PATTERN     = 'pattern';
    public const RAML_ENUM        = 'enum';
    public const RAML_DATE        = 'date-only';
    public const RAML_TIME        = 'time-only';
    public const RAML_DATETIME    = 'datetime';
}