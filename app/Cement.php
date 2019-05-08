<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cement extends Model
{
    protected $table = 'cements';

    protected $fillable = [
        'cause', 'total_loaded', 'types', 'good','total_defects'
    ];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
}
