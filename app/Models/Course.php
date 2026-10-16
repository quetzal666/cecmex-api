<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'description',
        'price',
        'modality',
        'start_date',
        'duration_hours',
        'image_url',
        'is_active',
    ];

    protected $casts = [
        'start_date' => 'date',
        'price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    // Un curso pertenece a una categoría
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Un curso tiene muchos módulos
    public function modules()
    {
        return $this->hasMany(Module::class)->orderBy('order');
    }

    // Un curso tiene muchos prospectos interesados
    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
}