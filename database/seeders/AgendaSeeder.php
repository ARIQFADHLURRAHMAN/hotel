<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agendas')->insert([
            'namaguru' => 'Agus Diana S.pd',  
            'materipelajaran' => 'HTML',  
            'matapelajaran' => 'Pemrograman Dasar',  
            'jampelajaran' => '12.50',  
            'absensi' => 'Dandi Kurnia',  
            'kelas' => 'XI RPL 2',  
            'jenispembelajaran' => 'Offline',  
            'linkpembelajaran' => '',  
            'dokumentasi' => 'Foto',  
            'keterangan' => 'Izin'  
        ]);
    }
}