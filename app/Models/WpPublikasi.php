<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WpPublikasi extends Model
{
    use HasFactory;
    protected $table = 'website_publikasi';

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
