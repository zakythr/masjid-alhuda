<?php

use Illuminate\Database\Seeder;
use App\Model\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Job::truncate();
        Job::insert([
        	[
                'name' => 'Belum / Tidak Bekerja',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mengurus Rumah Tangga',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pelajar / Mahasiswa',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pensiunan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pegawai Negeri Sipil',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tentara Nasional Indonesia',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kepolisian RI',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Perdagangan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Petani / Pekebun',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Peternak',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Nelayan / Perikanan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Industri',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Konstruksi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Transportasi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Karyawan Swasta',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Karyawan BUMN',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Karyawan BUMD',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Karyawan Honorer',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buruh Harian Lepas',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buruh Tani / Perkebunan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buruh Nelayan / Perikanan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Buruh Peternakan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pembantu Rumah Tangga',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Cukur',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Listrik',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Batu',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Kayu',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Sol Sepatu',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Las / Pandai Besi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Jahit',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Penata Rambut',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Penata Rias',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Penata Busana',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Mekanik',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tukang Gigi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Seniman',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Tabib',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Paraji',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Perancang Busana',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Penterjemah',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Imam Masjid',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pendeta',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pastur',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wartawan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ustadz / Mubaligh',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Juru Masak',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Promotor Acara',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggota DPR-RI',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggota DPD',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggota BPK',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Presiden',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wakil Presiden',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggota Mahkamah Konstitusi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggota Kabinet / Kementerian',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Duta Besar',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gubernur',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wakil Gubernur',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bupati',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wakil Bupati',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Walikota',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wakil Walikota',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggota DPRD Propinsi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Anggota DPRD Kabupaten / Kota',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dosen',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Guru',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pilot',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pengacara',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Notaris',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arsitek',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Akuntan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Konsultan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Dokter',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Bidan',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Perawat',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Apoteker',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Psikiater / Psikolog',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Penyiar Televisi',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Penyiar Radio',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pelaut',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Peneliti',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sopir',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pialang',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Paranormal',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Pedagang',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Perangkat Desa',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Kepala Desa',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Biarawati',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Wiraswasta',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
