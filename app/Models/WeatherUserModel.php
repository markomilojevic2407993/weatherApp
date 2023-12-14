<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeatherUserModel extends Model
{
    use HasFactory;
    protected $table = 'weather_users_teable';
    protected $fillable = ['city', 'cels'];
}
