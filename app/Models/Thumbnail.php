<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Thumbnail extends Model
{
    use HasFactory;
    protected $fillable = ['is_active','thumbnail_path','section_id'];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if ($model->isDirty('thumbnail_path') && ($model->getOriginal('tumbnail_path') !== null )){
                Storage::disk('public')->delete($model->getOriginal('tumbnail_path'));
            }
        });
    }
}