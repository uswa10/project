<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
  protected $primaryKey = 'e_id';
  public $timestamps = false;
    public function user(){
      return $this->belongsTo('App\Models\User');
    }

  }
