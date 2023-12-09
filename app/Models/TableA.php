<?php

namespace App\Models;

use App\Events\TableARecordAdded;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableA extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'user_star'
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($tableA) {
            event(new TableARecordAdded($tableA));
        });
    }
    public function tableB()
    {
        return $this->hasOne(TableB::class,'table_a_id', 'id');
    }
}
