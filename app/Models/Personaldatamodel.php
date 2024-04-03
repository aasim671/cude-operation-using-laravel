<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonaldataModel extends Model
{
    use HasFactory;

    protected $table = 'personaldata';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'mobile', 'address'];
}
