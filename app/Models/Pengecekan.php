<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Pengecekan extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
    public function verifikasi()
    {
        return $this->hasOne(Verifikasi::class);
    }
    public function keuangan()
    {
        return $this->hasOne(Keuangan::class);
    }
}
