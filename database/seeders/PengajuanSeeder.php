<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengajuan;
use App\Models\Pengecekan;
use App\Models\Verifikasi;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DB;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pengajuan::create([
        // 'resi' => '',
        // 'program' => 'Program Penataan Bangunan Gedung',
        // 'kegiatan' => 'Penyelenggaraan Bangunan Gedung di Wilayah Kabupaten Sumenep',
        // 'sub_kegiatan' => 'Penyelenggaraan Bangunan Gedung di Wilayah Kabupaten Sumenep',
        // 'pekerjaan' => 'Rehab Selasar Kawasan RSUD Moh.Anwar Sumenep',
        // 'pelaksana' => 'CV Nur Kurnia',
        // 'angsuran' => '1',
        // 'nilai_pengajuan' => '1418522595',
        // 'tahun_anggaran' => '2022',
        // 'tanggal_pengajuan' => '2021-06-25 14:14:58',
        // 'status' => 'Pengajuan',
        // 'keterangan' => '',
        // ]);

        DB::table('pengajuans')->delete();
        DB::table('pengecekans')->delete();

        # Mahasiswa Ketiga bernama Puji Rahayu. Dengan NIM 1015015078.
        $coba = Pengajuan::create(array(
            'resi' => 'asd65sa6dsa4',
            'program' => 'Program Penataan Bangunan Gedung',
            'kegiatan' => 'Penyelenggaraan Bangunan Gedung di Wilayah Kabupaten Sumenep',
            'sub_kegiatan' => 'Penyelenggaraan Bangunan Gedung di Wilayah Kabupaten Sumenep',
            'pekerjaan' => 'Rehab Selasar Kawasan RSUD Moh.Anwar Sumenep',
            'pelaksana' => 'CV Nur Kurnia',
            'angsuran' => '1',
            'nilai_pengajuan' => '1418522595',
            'tahun_anggaran' => '2022',
            'tanggal_pengajuan' => '2021-06-25 14:14:58',
            'status' => 'Pengajuan',
            'keterangan' => '',));
        # Informasi ketika mahasiswa telah diisi.
        $this->command->info('Pengajuan telah diisi!');

        # Ciptakan wali si $ayu
        $cek = Pengecekan::create(array(
            'tanggal_pengecekan' => '2021-06-26 14:14:58',
            'status' => 'Diproses',
            'keterangan' => '',
            'pengajuan_id' => $coba->id,
        ));
        # Informasi ketika semua wali telah diisi.
        $this->command->info('Pengecekan telah diisi!');

        Verifikasi::create(array(
            'tanggal_verifikasi' => '2021-06-27 14:14:58',
            'status' => 'Disetujui',
            'keterangan' => '',
            'pengecekan_id' => $cek->id,
            'pengajuan_id' => $coba->id,
        ));
        # Informasi ketika semua wali telah diisi.
        $this->command->info('Verifikasi telah diisi!');
    }
}
