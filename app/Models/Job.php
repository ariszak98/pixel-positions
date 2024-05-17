<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    /**
     * (1) Job belongsTo (1) Employer
     */
    public function employer() {
        return $this->belongsTo(Employer::class);
    }


    public function tag() {


    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }


}
