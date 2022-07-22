<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengajuan;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengajuan::create([
        'resi' => '',
        'program' => 'Program Penataan Bangunan Gedung',
        'kegiatan' => 'Penyelenggaraan Bangunan Gedung di Wilayah Kabupaten Sumenep',
        'pekerjaan' => 'Rehab Selasar Kawasan RSUD Moh.Anwar Sumenep',
        'pelaksana' => 'CV Nur Kurnia',
        'angsuran' => '1',
        'nilai_pengajuan' => '1418522595',
        'tahun_anggaran' => '2022',
        'tanggal_pengajuan' => '2021-06-25 14:14:58',
        'batas_pengajuan' => '2021-06-26 14:14:58',
        'status' => 'Pengajuan',
        'keterangan' => '',
        ]);
    }
}
