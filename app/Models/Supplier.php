<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
  protected $primaryKey = 's_id';
  public $timestamps = false;
    public function user(){
      return $this->belongsTo('App\Models\User');
    }

  }
