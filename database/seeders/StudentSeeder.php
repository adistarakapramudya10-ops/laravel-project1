<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        Student::create([
            'nis' => '1001',
            'name' => 'Nama Siswa 1',
            'classroom_id' => 1, // Sesuaikan dengan id kelas
            'address' => 'Alamat Siswa 1'
        ]);

        // Tambahkan data siswa lainnya jika ada
    }
}
