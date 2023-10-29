<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mitras')->insert([
            [
                "account" => "berkahcomputer@gmail.com",
                "name" => "Semoga Berkah Computer",
                "specialist" => "Laptop, Komputer, Printer, CPU, Monitor",
                "district" => "Pekalongan Utara",
                "city" => "Kota Pekalongan",
                "photo" => "https://media.pricebook.co.id/article/5798b37f150ba0ba097b23c6/5798b37f150ba0ba097b23c6_1601549811.jpg"
            ],
            [
                "account" => "mxcomp@gmail.com",
                "name" => "MX Komputer",
                "specialist" => "Laptop, Komputer, Printer, CPU, Monitor",
                "district" => "Wiradesa",
                "city" => "Kab. Pekalongan",
                "photo" => "https://i2.wp.com/caritempat.online/wp-content/uploads/2020/07/version-computer.jpg"
            ],
            [
                "account" => "sjkomp@gmail.com",
                "name" => "Service Jaya Komputer",
                "specialist" => "Laptop, Komputer, Printer, CPU, Monitor",
                "district" => "Tirto",
                "city" => "Kab. Pekalongan",
                "photo" => "https://2.bp.blogspot.com/_GuW-Nk9Evvo/TTwaZAFAqqI/AAAAAAAAAwQ/sP6OEsAvL44/s1600/DSCF1252.jpg"
            ],
            [
                "account" => "yamahamusmot@gmail.com",
                "name" => "Yamaha Mustika Motor",
                "specialist" => "Motor, Ganti Oli, Tambal Ban",
                "district" => "Tirto",
                "city" => "Kab. Pekalongan",
                "photo" => "https://blog-media.lifepal.co.id/app/uploads/sites/3/2020/12/11113214/bengkel-resmi-yamaha-1.jpg"
            ]
        ]);
    }
}
