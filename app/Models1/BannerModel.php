<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerModel extends Model
{
    protected $table = 'banner';

    protected $primaryKey = "id";

    protected $fillable   = [	
                                'image',
    						];
}
