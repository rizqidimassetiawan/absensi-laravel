<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $units = [
            [
                'nama' => 'UPT. Teknologi Informasi dan Komunikasi',
                'inisial' => 'TIK',
                'add_by' => 45,
            ],
            [
                'nama' => 'Prodi DIII Teknik Komputer',
                'inisial' => 'KOM',
                'add_by' => 0,
            ],
            [
                'nama' => 'Bagian Administrasi Umum',
                'inisial' => 'BAU',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIII Akuntansi',
                'inisial' => 'AKT',
                'add_by' => 0,
            ],
            [
                'nama' => 'Wakil Direktur 3',
                'inisial' => 'WADIR',
                'add_by' => 0,
            ],
            [
                'nama' => 'Sistem Penjaminan Mutu Internal',
                'inisial' => 'P2M',
                'add_by' => 0,
            ],
            [
                'nama' => 'P3 & K (non aktif)',
                'inisial' => 'P3&K',
                'add_by' => 0,
            ],
            [
                'nama' => 'Bagian Keuangan, Akuntansi, dan Pajak',
                'inisial' => 'BAKEU',
                'add_by' => 0,
            ],
            [
                'nama' => 'Bagian Administrasi Akademik',
                'inisial' => 'BAA',
                'add_by' => 0,
            ],
            [
                'nama' => 'Humas',
                'inisial' => 'Humas',
                'add_by' => 0,
            ],
            [
                'nama' => 'Marketing',
                'inisial' => 'Marketing',
                'add_by' => 0,
            ],
            [
                'nama' => 'Perpustakaan',
                'inisial' => 'PERPUS',
                'add_by' => 0,
            ],
            [
                'nama' => 'Bagian Kepegawaian',
                'inisial' => 'KEPEG',
                'add_by' => 0,
            ],
            [
                'nama' => 'BKK (non aktif)',
                'inisial' => 'BKK',
                'add_by' => 0,
            ],
            [
                'nama' => 'Klinik Harapan Bersama',
                'inisial' => 'KLINIK',
                'add_by' => 0,
            ],
            [
                'nama' => 'Divisi Alumni (non aktif)',
                'inisial' => 'ALUMNI',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIV Teknik Informatika',
                'inisial' => 'TI',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIII Farmasi',
                'inisial' => 'FAR',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIII Kebidanan',
                'inisial' => 'BIDAN',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIII Teknik Elektro',
                'inisial' => 'ELEKTRO',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIII Teknik Mesin',
                'inisial' => 'MESIN',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIII Perhotelan',
                'inisial' => 'PERHOTELAN',
                'add_by' => 0,
            ],
            [
                'nama' => 'Pusat Penelitian, dan Pengabdian Kepada Masyarakat',
                'inisial' => 'P3M',
                'add_by' => 0,
            ],
            [
                'nama' => 'Prodi DIV Akuntansi Sektor Publik',
                'inisial' => 'ASP',
                'add_by' => 0,
            ],
            [
                'nama' => 'BAKEU 2 (non aktif)',
                'inisial' => 'BAKEU 2',
                'add_by' => 0,
            ],
        ];

        foreach ($units as $unit) {
            Unit::create($unit);
        }
    }
}