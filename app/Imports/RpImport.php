<?php

namespace App\Imports;

use App\Models\Rp;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RpImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        return new Rp([
            'bolim_ru' => $row["bolim_ru"],
            'bolim_uz' => $row["bolim_uz"],
            'kod' => $row['kod'],
            'hudud' => $row['hudud'],
            'harajat_turi_kodi' => $row['harajat_turi_kodi'],
            'harajat_nomi' => $row['harajat_nomi'],
            'personal_tur_kodi' => $row['personal_tur_kodi'],
            'personal_tur_nomi' => $row['personal_tur_nomi'],
            'personal_toifasi' => $row['personal_toifasi'],
            'lavozim_kodi' => $row['lavozim_kodi'],
            'raxbarlik_kodi' => $row['raxbarlik_kodi'],
            'lavozim_uz' => $row['lavozim_uz'],
            'lavozim_ru' => $row['lavozim_ru'],
            'fact' => $row['fact'],
            'diap' => $row['diap'],
            'factkat' => $row['factkat'],
            'kategoriya_2' => $row['kategoriya_2'],
            'tabel' => $row['tabel'],
            'fio' => $row['fio'],
            'staj' => $row['staj'],
            'ishga_kirgan_sana' => date('Y-m-d', strtotime($row['ishga_kirgan_sana'])),
            'tugilgan_sana' => date('Y-m-d', strtotime($row['tugilgan_sana'])),
            'yoshi' => $row['yoshi'],
            'jinsi' => $row['jinsi'],
            'millati' => $row['millati'],
            'malumoti' => $row['malumoti'],
            'kod3' => $row['kod3'],
            'oy' => $row['oy'],
            'yil' => $row['yil'],
            'viloyat' => $row['viloyat'],
            'shaxar' => $row['shaxar'],
            'tuman' => $row['tuman'],
            'mfy_kocha' => $row['mfy_kocha'],
        ]);
    }
}
