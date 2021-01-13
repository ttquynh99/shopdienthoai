<?php

use Illuminate\Database\Seeder;

class NhasanxuatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $list = [];
    
            $types = ["Samsung", "Oppo", "Iphone", "Xiaomi"];
            $faker = Faker\Factory::create();
            $today = new DateTime('2019-01-01 08:00:00');
    
            for ($i=1; $i <= count($types); $i++) {
                array_push($list, [
                    'nsx_ma'      => $i,
                    'nsx_ten'     => $types[$i-1],
                    'nsx_diachi'  => $faker->address,
                    'nsx_dienthoai' =>$faker->numberBetween(1000000000, 9999999999),
                    'nsx_taomoi'  => $today->format('Y-m-d H:i:s'),
                    'nsx_capnhat' => $today->format('Y-m-d H:i:s')
                ]);
            }
            DB::table('nhasanxuat')->insert($list);
    }
}
