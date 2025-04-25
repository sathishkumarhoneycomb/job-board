<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    /** @use HasFactory<\Database\Factories\JobPostFactory> */
    use HasFactory;
    public static array $categories  = ["IT", "Medical", "Management", "Commerce"];
    public static array $experience = ["entry", "intermediate", "senior"];
}
