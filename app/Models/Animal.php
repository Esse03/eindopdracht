<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\View\View;

class Animal extends Model
{

    /**
     * @var string
     */

    protected $table = 'animals';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
