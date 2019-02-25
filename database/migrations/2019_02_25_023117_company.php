<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Company extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Type',50)->nullable();
            $table->string('SolrID',300)->nullable();
            $table->string('C_ID',50)->nullable();
            $table->string('MaSoThue',50)->nullable();
            $table->string('NgayCap',50)->nullable();
            $table->string('NgayDongMST',50)->nullable();
            $table->string('Title',500)->nullable();
            $table->string('TitleEn',500)->nullable();
            $table->string('TitleEnAscii',500)->nullable();
            $table->string('DiaChiCongTy',500)->nullable();
            $table->string('DiaChiNhanThongBaoThue',500)->nullable();
            $table->string('NamTaiChinh',50)->nullable();
            $table->string('MaSoHienThoi',50)->nullable();
            $table->string('NgayNhanToKhai',50)->nullable();
            $table->string('NgayBatDauHopDong',50)->nullable();
            $table->string('VonDieuLe',50)->nullable();
            $table->string('TongSoLaoDong',50)->nullable();
            $table->string('CapChuongLoaiKhoan',50)->nullable();
            $table->string('HinhThucThanhToan',50)->nullable();
            $table->string('PhuongPhapTinhThueGTGT',50)->nullable();
            $table->string('ChuSoHuu',50)->nullable();
            $table->string('ChuSoHuu_DiaChi',500)->nullable();
            $table->string('GiamDoc',50)->nullable();
            $table->string('GiamDoc_DiaChi',500)->nullable();
            $table->string('KeToanTruong',50)->nullable();
            $table->string('KeToanTruong_DiaChi',500)->nullable();
            $table->string('IsDelete',50)->nullable();
            $table->string('RequestChanged',50)->nullable();
            $table->string('ExitsInGDT',50)->nullable();
            $table->string('SourceID',50)->nullable();
            $table->string('TinhThanhID',50)->nullable();
            $table->string('TinhThanhTitle',50)->nullable();
            $table->string('TinhThanhTitleAscii',50)->nullable();
            $table->string('QuanHuyenID',50)->nullable();
            $table->string('QuanHuyenTitle',50)->nullable();
            $table->string('QuanHuyenTitleAscii',255)->nullable();
            $table->string('PhuongXaID',50)->nullable();
            $table->string('PhuongXaTitle',50)->nullable();
            $table->string('PhuongXaTitleAscii',255)->nullable();
            $table->string('NoiDangKyQuanLyID',50)->nullable();
            $table->string('NoiDangKyQuanLy_CoQuanTitle',255)->nullable();
            $table->string('NoiDangKyQuanLy_CoQuanTitleAscii',255)->nullable();
            $table->string('NoiDangKyQuanLy_DienThoai',50)->nullable();
            $table->string('NoiDangKyQuanLy_Fax',50)->nullable();
            $table->string('NoiNopThueID',50)->nullable();
            $table->string('NoiNopThue_DienThoai',50)->nullable();
            $table->string('NoiNopThue_Fax',50)->nullable();
            $table->string('NoiNopThue_CoQuanTitle',255)->nullable();
            $table->string('NoiNopThue_CoQuanTitleAscii',255)->nullable();
            $table->string('QuyetDinhThanhLap',50)->nullable();
            $table->string('QuyetDinhThanhLap_NgayCap',50)->nullable();
            $table->string('QuyetDinhThanhLap_CoQuanCapID',50)->nullable();
            $table->string('QuyetDinhThanhLap_CoQuanCapTitle',255)->nullable();
            $table->string('QuyetDinhThanhLap_CoQuanCapTitleAscii',255)->nullable();
            $table->string('GiayPhepKinhDoanh_CoQuanCapID',50)->nullable();
            $table->string('GiayPhepKinhDoanh_CoQuanCapTitle',255)->nullable();
            $table->string('GiayPhepKinhDoanh_CoQuanCapTitleAscii',255)->nullable();
            $table->string('GiayPhepKinhDoanh',50)->nullable();
            $table->string('GiayPhepKinhDoanh_NgayCap',50)->nullable();
            $table->string('LoaiHinhID',50)->nullable();
            $table->string('LoaiHinhTitle',255)->nullable();
            $table->string('LoaiHinhTitleAscii',255)->nullable();
            $table->string('NganhNgheID',50)->nullable();
            $table->string('NganhNgheTitle',500)->nullable();
            $table->string('NganhNgheTitleAscii',500)->nullable();
            $table->string('DSNganhNgheKinhDoanh',500)->nullable();
            $table->string('DSNganhNgheKinhDoanhID',500)->nullable();
            $table->string('DSMaNganhNgheKinhDoanh',500)->nullable();
            $table->string('DSNganHang',255)->nullable();
            $table->string('DSNganHangID',255)->nullable();
            $table->string('DSThuePhaiNop',255)->nullable();
            $table->string('DSThuePhaiNopID',255)->nullable();
            $table->string('LtsDoanhNghiepTrucThuoc',255)->nullable();
            $table->string('DSTags',500)->nullable();
            $table->index('MaSoThue');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
