<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->unsignedInteger('dh_ma')->comment('Mã đơn hàng, 1-Không xuất hóa đơn');
            $table->unsignedInteger('kh_ma')->comment('Khách hàng # kh_ma # kh_hoTen # Mã khách hàng');
            $table->dateTime('dh_thoiGianDatHang')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm đặt hàng # Thời điểm đặt hàng');
            $table->dateTime('dh_thoiGianNhanHang')->comment('Thời điểm giao hàng # Thời điểm giao hàng theo yêu cầu của khách hàng');
            $table->string('dh_nguoiNhan', 100)->comment('Người nhận quà # Họ tên người nhận (tên hiển thị)');
            $table->string('dh_diaChi', 250)->comment('Địa chỉ người nhận # Địa chỉ người nhận');
            $table->string('dh_dienThoai', 11)->comment('Điện thoại người nhận # Điện thoại người nhận');
            $table->string('dh_nguoiGui', 100)->comment('Người tặng quà # Người tặng (tên hiển thị)');
            $table->text('dh_loiChuc')->nullable()->comment('Lời chúc # Lời chúc ghi trên thiệp');
            $table->unsignedTinyInteger('dh_daThanhToan')->default('0')->comment('Đã thanh toán # Đã thanh toán tiền (trường hợp tặng quà)');
            $table->dateTime('dh_ngayLapPhieuGiao')->nullable()->default(NULL)->comment('Thời điểm lập phiếu giao # Thời điểm lập phiếu giao');
            $table->dateTime('dh_ngayGiaoHang')->nullable()->default(NULL)->comment('Thời điểm khách nhận được hàng # Thời điểm khách nhận được hàng');
            $table->timestamp('dh_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo đơn hàng');
            $table->timestamp('dh_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật đơn hàng gần nhất');
            $table->unsignedTinyInteger('dh_trangThai')->default('1')->comment('Trạng thái # Trạng thái đơn hàng: 1-nhận đơn, 2-xử lý đơn, 3-giao hàng, 4-hoàn tất, 5-đổi trả, 6-hủy');
            $table->unsignedTinyInteger('tt_ma')->comment('Phương thức thanh toán # tt_ma # tt_ten # Mã phương thức thanh toán');
            
            $table->foreign('kh_ma')->references('kh_ma')->on('khachhang')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('tt_ma')->references('tt_ma')->on('thanhtoan')->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
