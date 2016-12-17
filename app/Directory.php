<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Directory extends Model
{
    protected $fillable = ['logo','name','category_id','location_id','address','lat','lon','phone','email','website'];
}
