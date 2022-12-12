<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'ppko',
        ]);
        Role::create([
            'name' => 'pptk',
        ]);
        Role::create([
            'name' => 'verificator',
        ]);
        Role::create([
            'name' => 'keuangan',
        ]);


        // Administrator
         $admin = User::create([
         'name' => 'Rafli Firdaus Falaka',
         'email' => 'raflifirdausfalaka@gmail.com',
         'password' => bcrypt('rafliPUTR;'),
         ]);
         $admin->assignRole('admin');
         $admin = User::create([
         'name' => 'Ahmad Zairosi',
         'email' => 'ahmadzairosi@gmail.com',
         'password' => bcrypt('rosiPUTR;'),
         ]);
         $admin->assignRole('admin');


        // PPKo
         $user = User::create([
         'name' => 'Sekdis PPKo',
         'email' => 'sekdis@ppko.com',
         'password' => bcrypt('PPKoSekdis;'),
         ]);
         $user->assignRole('ppko');
         $user = User::create([
         'name' => 'Sumber Daya Air PPKo',
         'email' => 'sumberdayaair@ppko.com',
         'password' => bcrypt('PPKoSDA;'),
         ]);
         $user->assignRole('ppko');
         $user = User::create([
         'name' => 'Bina Marga PPKo',
         'email' => 'binamarga@ppko.com',
         'password' => bcrypt('PPKoBMtop;'),
         ]);
         $user->assignRole('ppko');
         $user = User::create([
         'name' => 'Penataan Bangunan dan Gedung PPKo',
         'email' => 'penataanbangundandangedung@ppko.com',
         'password' => bcrypt('PPKoPBG;'),
         ]);
         $user->assignRole('ppko');
         $user = User::create([
         'name' => 'Air Minum dan PLP PPKo',
         'email' => 'airminumplp@ppko.com',
         'password' => bcrypt('PPKoAMPLP;'),
         ]);
         $user->assignRole('ppko');
         $user = User::create([
         'name' => 'Bina Jasa Konstruksi PPKo',
         'email' => 'binajasakonstruksi@ppko.com',
         'password' => bcrypt('PPKoBJK;'),
         ]);
         $user->assignRole('ppko');
         $user = User::create([
         'name' => 'Tata Ruang PPKo',
         'email' => 'tataruang@ppko.com',
         'password' => bcrypt('PPKoTRtop;'),
         ]);
         $user->assignRole('ppko');


        // PPTK
         $user = User::create([
         'name' => 'Sekdis PPTK',
         'email' => 'sekdis@pptk.com',
         'password' => bcrypt('PPTKSekdis;'),
         ]);
         $user->assignRole('pptk');
         $user = User::create([
         'name' => 'Sumber Daya Air PPTK',
         'email' => 'sumberdayaair@pptk.com',
         'password' => bcrypt('PPTKSDA;'),
         ]);
         $user->assignRole('pptk');
         $user = User::create([
         'name' => 'Bina Marga PPTK',
         'email' => 'binamarga@pptk.com',
         'password' => bcrypt('PPTKBMtop;'),
         ]);
         $user->assignRole('pptk');
         $user = User::create([
         'name' => 'Penataan Bangunan dan Gedung PPTK',
         'email' => 'penataanbangundandangedung@pptk.com',
         'password' => bcrypt('PPTKPBG;'),
         ]);
         $user->assignRole('pptk');
         $user = User::create([
         'name' => 'Air Minum dan PLP PPTK',
         'email' => 'airminumplp@pptk.com',
         'password' => bcrypt('PPTKAMPLP;'),
         ]);
         $user->assignRole('pptk');
         $user = User::create([
         'name' => 'Bina Jasa Konstruksi PPTK',
         'email' => 'binajasakonstruksi@pptk.com',
         'password' => bcrypt('PPTKBJK;'),
         ]);
         $user->assignRole('pptk');
         $user = User::create([
         'name' => 'Tata Ruang PPTK',
         'email' => 'tataruang@pptk.com',
         'password' => bcrypt('PPTKTRtop;'),
         ]);
         $user->assignRole('pptk');


        //  Verifikator
        $user = User::create([
        'name' => 'Verifikator 1',
        'email' => 'verifikator1@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');
        $user = User::create([
        'name' => 'Verifikator 2',
        'email' => 'verifikator2@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');
        $user = User::create([
        'name' => 'Verifikator 3',
        'email' => 'verifikator3@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');
        $user = User::create([
        'name' => 'Verifikator 4',
        'email' => 'verifikator4@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');
        $user = User::create([
        'name' => 'Verifikator 5',
        'email' => 'verifikator5@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');
        $user = User::create([
        'name' => 'Verifikator 6',
        'email' => 'verifikator6@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');
        $user = User::create([
        'name' => 'Verifikator 7',
        'email' => 'verifikator7@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');
        $user = User::create([
        'name' => 'Verifikator 8',
        'email' => 'verifikator8@verifikator.com',
        'password' => bcrypt('V3r1f1k4t0r;'),
        ]);
        $user->assignRole('verificator');

        //keuangan
        $user = User::create([
        'name' => 'Keuangan I',
        'email' => 'keuangan1@keuangan.com',
        'password' => bcrypt('K3u4ng4n1;'),
        ]);
        $user->assignRole('keuangan');
        $user = User::create([
        'name' => 'Keuangan II',
        'email' => 'keuangan2@keuangan.com',
        'password' => bcrypt('K3u4ng4n2;'),
        ]);
        $user->assignRole('keuangan');
    }
}
