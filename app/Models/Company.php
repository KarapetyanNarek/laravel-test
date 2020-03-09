<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['logo', 'name', 'email', 'website'];

    public function employees()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
