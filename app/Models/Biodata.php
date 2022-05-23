<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'nama', 'tanggal_lahir','email', 'alamat', 'jenis_kelamin', 'no_hp', 'jurusan'];
} 
