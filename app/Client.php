<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Client extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $table = 'tsolution_clients';
    protected $fillable = [
        'name', 'email','created_at','updated_at','expired_date'
    ];
}