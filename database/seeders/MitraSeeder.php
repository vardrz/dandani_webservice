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
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse est nulla accusantium minima sint mollitia possimus officia officiis, vel nemo omnis dolore iure excepturi sunt quos fuga, amet, reiciendis veniam?
Similique vitae harum cum impedit nobis, molestias quae maiores libero consectetur enim? Tempore, architecto consequuntur illum nemo animi quia adipisci corrupti id asperiores suscipit. Rerum porro nam neque consequuntur! Unde?
Unde facilis maiores, sit natus officia minima, ipsum esse eum iusto aperiam, praesentium iure provident deleniti modi ducimus eligendi! Voluptatem porro blanditiis temporibus autem, odio eaque minima fugiat eius hic.",
                "specialist" => "Laptop, Komputer, Printer, CPU, Monitor",
                "whatsapp" => "089525196861",
                "province" => "Jawa Tengah",
                "city" => "Kota Pekalongan",
                "district" => "Pekalongan Utara",
                "maps" => "-6.89123390515685,109.62671025759383",
                "photo" => "https://i2.wp.com/caritempat.online/wp-content/uploads/2020/07/version-computer.jpg"
            ],
            [
                "account" => "mxcomp@gmail.com",
                "name" => "MX Komputer",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse est nulla accusantium minima sint mollitia possimus officia officiis, vel nemo omnis dolore iure excepturi sunt quos fuga, amet, reiciendis veniam?
Similique vitae harum cum impedit nobis, molestias quae maiores libero consectetur enim? Tempore, architecto consequuntur illum nemo animi quia adipisci corrupti id asperiores suscipit. Rerum porro nam neque consequuntur! Unde?
Unde facilis maiores, sit natus officia minima, ipsum esse eum iusto aperiam, praesentium iure provident deleniti modi ducimus eligendi! Voluptatem porro blanditiis temporibus autem, odio eaque minima fugiat eius hic.",
                "specialist" => "Laptop, Komputer, Printer, CPU, Monitor",
                "whatsapp" => "089525196861",
                "province" => "Jawa Tengah",
                "city" => "Kabupaten Pekalongan",
                "district" => "Wiradesa",
                "maps" => "-6.89123390515685,109.62671025759383",
                "photo" => "https://sukangulik.com/wp-content/uploads/2023/03/tripio-comp.png"
            ],
            [
                "account" => "sjkomp@gmail.com",
                "name" => "Service Jaya Komputer",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse est nulla accusantium minima sint mollitia possimus officia officiis, vel nemo omnis dolore iure excepturi sunt quos fuga, amet, reiciendis veniam?
Similique vitae harum cum impedit nobis, molestias quae maiores libero consectetur enim? Tempore, architecto consequuntur illum nemo animi quia adipisci corrupti id asperiores suscipit. Rerum porro nam neque consequuntur! Unde?
Unde facilis maiores, sit natus officia minima, ipsum esse eum iusto aperiam, praesentium iure provident deleniti modi ducimus eligendi! Voluptatem porro blanditiis temporibus autem, odio eaque minima fugiat eius hic.",
                "specialist" => "Laptop, Komputer, Printer, CPU, Monitor",
                "whatsapp" => "089525196861",
                "province" => "Jawa Tengah",
                "city" => "Kabupaten Pekalongan",
                "district" => "Tirto",
                "maps" => "-6.89123390515685,109.62671025759383",
                "photo" => "https://2.bp.blogspot.com/_GuW-Nk9Evvo/TTwaZAFAqqI/AAAAAAAAAwQ/sP6OEsAvL44/s1600/DSCF1252.jpg"
            ],
            [
                "account" => "faridcardokaka88@gmail.com",
                "name" => "Yamaha Mustika Motor",
                "desc" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse est nulla accusantium minima sint mollitia possimus officia officiis, vel nemo omnis dolore iure excepturi sunt quos fuga, amet, reiciendis veniam?
Similique vitae harum cum impedit nobis, molestias quae maiores libero consectetur enim? Tempore, architecto consequuntur illum nemo animi quia adipisci corrupti id asperiores suscipit. Rerum porro nam neque consequuntur! Unde?
Unde facilis maiores, sit natus officia minima, ipsum esse eum iusto aperiam, praesentium iure provident deleniti modi ducimus eligendi! Voluptatem porro blanditiis temporibus autem, odio eaque minima fugiat eius hic.",
                "specialist" => "Motor, Ganti Oli, Tambal Ban",
                "whatsapp" => "089525196861",
                "province" => "Jawa Tengah",
                "city" => "Kabupaten Pekalongan",
                "district" => "Tirto",
                "maps" => "-6.89123390515685,109.62671025759383",
                "photo" => "https://blog-media.lifepal.co.id/app/uploads/sites/3/2020/12/11113214/bengkel-resmi-yamaha-1.jpg"
            ]
        ]);
    }
}
