<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telepon extends Model
{
    protected $table = 'telepon';
    protected $primaryKey = 'id_user';
    protected $fillable = ['id_user','no_telepon'];

    public function user()
    {
      return $this->belongsTo('App\User', 'id_user');
    }
}
