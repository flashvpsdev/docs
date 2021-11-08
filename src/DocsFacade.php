<?php

namespace FlashVps\Docs;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Docs\Docs\Docs
 */
class DocsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'docs';
    }
}
