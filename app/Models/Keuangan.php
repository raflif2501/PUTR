<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class Keuangan extends Model
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $guarded=[];
    public function verifikasi()
    {
        return $this->belongsTo(Verifikasi::class);
    }
    public function pengecekan()
    {
        return $this->belongsTo(Pengecekan::class);
    }
    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
