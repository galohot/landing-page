<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Section extends Model
{
    use HasFactory;
    protected $fillable = ['sequence','title','description','content','link','has_image','section_color','main_image'];

    public function thumbnails()
    {
        return $this->hasMany(Thumbnail::class);
    }
    public function AdditionalContents()
    {
        return $this->hasMany(AdditionalContent::class);
    }

    protected static function boot(){
        parent::boot();
        static::updating(function($model){
            if ($model->isDirty('main_image') && ($model->getOriginal('main_image') !== null )){
                Storage::disk('public')->delete($model->getOriginal('main_image'));
            }
        });
    }
}