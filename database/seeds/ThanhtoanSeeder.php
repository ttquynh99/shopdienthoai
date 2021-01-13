<?php

use Illuminate\Database\Seeder;

class ThanhtoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [];
        $types = ["Tiền Mặt", "Thanh toán khi nhận hàng", "Chuyển khoản"];
        sort($types);
        $today = new DateTime('2020-12-01 08:00:00');

        for($i=1; $i <= count($types); $i++) {
            array_push($list, [
                'tt_ma'      => $i,
                'tt_ten'     => $types[$i-1],
                'tt_diengiai'  => "abc",
                'tt_taomoi'  => $today->format('Y-m-d H:i:s'),
                'tt_capnhat' => $today->format('Y-m-d H:i:s'),
                'tt_trangThai' => 1
            ]);
        }
        DB::table('thanhtoan')->insert($list);
    }
}
