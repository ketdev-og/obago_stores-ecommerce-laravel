<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserverifyEmailAddress extends Model
{
    use HasFactory;

    protected $table = "user_verify_email_addresses";
    protected $fillable = [
        'user_id',
        'verifyToken'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
