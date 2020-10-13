<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  protected $primaryKey = 'emp_id';
  public $timestamps = false;
    public function user(){
      return $this->belongsTo('App\Models\User');
    }

  }
