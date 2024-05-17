<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    use HasFactory;

    /**
     * (1) Employer belongsTo (1) User
     */
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function jobs(): hasMany {
        return $this->hasMany(Job::class);
    }




}
