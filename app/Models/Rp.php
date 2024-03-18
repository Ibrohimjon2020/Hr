<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rp extends Model
{
    use HasFactory;
    protected $table = 'rp';

    public $fillable = [
        'bolim_ru', 'bolim_uz', 'kod', 'hudud', 'harajat_turi_kodi', 'harajat_nomi',
        'personal_tur_kodi', 'personal_tur_nomi', 'personal_toifasi', 'lavozim_kodi',
        'raxbarlik_kodi', 'lavozim_uz', 'lavozim_ru', 'fact', 'diap', 'factkat', 'kategoriya_2',
        'tabel', 'fio', 'staj', 'ishga_kirgan_sana', 'tugilgan_sana', 'yoshi', 'jinsi', 'millati',
        'malumoti', 'kod3', 'oy', 'yil', 'viloyat', 'shaxar', 'tuman', 'mfy_kocha'
    ];

    public function scopeFilter(Builder $query, $data)
    {
        if (isset($data['kod'])) $query->where('kod', $data['kod']);
        if (isset($data['yil'])) $query->where('yil', $data['yil']);
        if (isset($data['oy'])) $query->where('oy', $data['oy']);
        if (isset($data['jinsi'])) $query->where('jinsi', $data['jinsi']);
        if (isset($data['hudud'])) $query->where('hudud', $data['hudud']);
        if (isset($data['kategoriya_2'])) $query->where('kategoriya_2', $data['kategoriya_2']);

        return $query;
    }
}
