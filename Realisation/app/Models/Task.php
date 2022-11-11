<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Brief;

class Task extends Model
{
    use HasFactory;
    public function brief()
    {
        return $this->belongsTo(Brief::class);
    }
}
