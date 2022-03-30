<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminverifyEmailAddress extends Model
{
    use HasFactory;

    protected $table = "admin_verify_email_addresses";
    protected $fillable = [
        'admin_id',
        'verifyToken'
    ];

    public function admin(){
      return $this->belongsTo(Admin::class);
    }
}
