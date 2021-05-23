<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=[
        'comment',
        'status'
    ];


	public function user()
	{
		return $this->belongsTo(User::class);
    }


	public function admin()
	{
		return $this->belongsTo(User::class);
	}
}
