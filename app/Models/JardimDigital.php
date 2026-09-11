<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JardimDigital extends Model
{
    use HasFactory;

    protected $table = 'meu_jardim_digital';

    protected $fillable = [
        'titulo',
        'slug',
        'descricao',
        'imagem',
        'categoria',
        'destaque',
        'data_projeto'
    ];

    protected $casts = [
        'destaque' => 'boolean',
        'data_projeto' => 'date'
    ];

    // Gerar slug automático
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($projeto) {
            $projeto->slug = Str::slug($projeto->titulo);
        });
    }

    // Acessor da imagem
    public function getImagemUrlAttribute()
    {
        return asset('storage/' . $this->imagem);
    }
}