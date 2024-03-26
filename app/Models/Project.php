<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'status_id',
        'created'
     ];

     public function status()
     {
        return $this->belongsTo(Status::class);
     }

}
