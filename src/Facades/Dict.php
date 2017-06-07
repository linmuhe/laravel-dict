<?php
namespace LWJ\Dict\Facades;

use Illuminate\Support\Facades\Facade;
use LWJ\Dict\Contracts\DictInterface;

class Dict extends Facade {
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
//        return 'Receivable';
        return DictInterface::class;
    }
}