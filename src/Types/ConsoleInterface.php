<?php

namespace SoliDry\Types;

interface ConsoleInterface
{
    // console command options
    public const OPTION_MIGRATIONS   = 'migrations';
    public const OPTION_REGENERATE   = 'regenerate';
    public const OPTION_MERGE        = 'merge';
    public const MERGE_DEFAULT_VALUE = 'last';
    public const OPTION_NO_HISTORY   = 'no-history';
    public const OPTION_NO_DOCS      = 'no-docs';
    public const OPTION_TESTS        = 'tests';
}