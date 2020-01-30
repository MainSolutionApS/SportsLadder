<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $table = 'notifications';

    protected $fillable = ['type', 'message'];

    public function user() {
        return $this->belongsTo('App\User');
    }

}
