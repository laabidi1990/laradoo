<?php namespace laabidi1990\laradoo\Facades;

use Illuminate\Support\Facades\Facade;

class Odoo extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return \laabidi1990\laradoo\Odoo::class; }

}