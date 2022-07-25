<?php

namespace App\Models;
use App\Http\Controllers\testController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testModel extends Model
{
    public $table="users";
    public $timestamps=false;
    protected $primaryKey="id";
    protected $fillable=[
"user_name",
"user_password",
"mobile",
"email",
"_token"
    ];
}
