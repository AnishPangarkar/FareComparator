<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class EmailAccount
 *
 */
class Ride extends Model
{

    protected $table = 'rides';

    protected $primaryKey = 'id';

    protected $dates = [
        'created_at',
        'updated_at',
    ];


    /**
     * The attributes assignable
     *
     * @var array
     */

    protected $fillable = [
        'from',
        'to',
        'fromlat',
        'fromlong',
        'tolat',
        'tolong',
    ];

}