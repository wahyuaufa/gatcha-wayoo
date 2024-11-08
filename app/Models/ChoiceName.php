<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChoiceName extends Model
{
    use HasFactory;

    // Tabel terkait dengan model ini
    protected $table = 'choice_name';

    // Field yang dapat diisi (mass assignable)
    protected $fillable = ['name_pilihan'];

    // Tambahkan relasi atau metode lain jika diperlukan
}
