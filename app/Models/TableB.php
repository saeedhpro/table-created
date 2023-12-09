<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableB extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'star_count',
        'table_a_id',
        'updated_at'
    ];

    public function tabbleA()
    {
        return $this->belongsTo(TableA::class);
    }
}
