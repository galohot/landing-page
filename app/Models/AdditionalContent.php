<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalContent extends Model
{
    use HasFactory;
    protected $fillable = ['is_active','additional_content','section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}