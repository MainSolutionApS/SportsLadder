<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZipCode extends Model
{
    protected $table = 'zip_code';

    public function address() {
        return $this->belongsTo('App\Address');
    }
}
