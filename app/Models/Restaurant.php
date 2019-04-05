<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $guarded = [];

    protected $appends = ['slug'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id')->orderBy('name', 'asc');
    }

    public function getSlugAttribute() 
    {
    	return route('restos.menu', $this->id);
    }
}
