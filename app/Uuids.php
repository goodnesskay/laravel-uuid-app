<?php
/**
 * Created by PhpStorm.
 * User: goodnesskay
 * Date: 12/6/17
 * Time: 3:55 AM
 */

namespace App;

use Webpatser\Uuid\Uuid;

trait Uuids
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}