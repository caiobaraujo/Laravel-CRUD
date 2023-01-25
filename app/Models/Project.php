<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'code', 'start_date','end_date'
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    use HasFactory;
}
