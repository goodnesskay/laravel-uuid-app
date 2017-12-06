<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use Uuids;

    /**
     * Set auto-increment to false.
     *
     * @var bool
     */
    public $incrementing = false;
}
