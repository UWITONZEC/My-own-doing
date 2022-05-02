<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'studentid';
    protected $fillable = ['studentid', 'fullname', 'nationalid','serialnumber','modelname','mobile'];
}
