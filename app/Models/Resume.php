<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'surname',
        'birthdate',
        'experience',
        'email',
        'user_id',
        'active',
        'img'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
