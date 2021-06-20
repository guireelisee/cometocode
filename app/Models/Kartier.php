<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartier extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the comments for the Kartier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function centres()
    {
        return $this->hasMany('App\Models\Centre', 'centre_id');
    }
}
