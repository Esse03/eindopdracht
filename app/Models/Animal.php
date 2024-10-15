<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{

    /**
     * @var string
     */

    protected $table = 'animals';

    public static function find($id)
    {
    }

}
