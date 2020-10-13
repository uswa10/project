<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deploy extends Model
{
  protected $primaryKey = 'd_id';
  public $timestamps = false;
    public function user(){
      return $this->belongsTo('App\Models\User');
    }

  }
