<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the user that owns the Centre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kartier()
    {
        return $this->belongsTo('App\Models\Kartier', 'kartier_id');
    }
}
