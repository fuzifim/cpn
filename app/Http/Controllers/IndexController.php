<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Input;
use Session;
use Auth;
use Twitter;
use Cache;
use File;
use Validator;
use Carbon\Carbon;
use DB;
class IndexController extends Controller
{
    public function __construct()
    {

    }
    public function index(Request $request)
    {
        return view('index',array());
    }
    public function getListCompany(){
        $dataContent=file_get_contents('https://thongtindoanhnghiep.co/api/company?r=10&p=1');
        $dataJson=json_decode($dataContent);
        $listCompany=array();
        foreach($dataJson->LtsItems as $value){
            $dataCompany=file_get_contents('https://thongtindoanhnghiep.co/api/company/'.$value->MaSoThue);
            $dataCompanyJson=json_decode($dataCompany);
            $array_company = array(
                'Type'=>$dataCompanyJson->Type,
                'SolrID'=>$dataCompanyJson->SolrID,
                'C_ID'=>$dataCompanyJson->ID,
                'MaSoThue'=>$dataCompanyJson->MaSoThue,
                'NgayCap'=>$dataCompanyJson->NgayCap,
                'NgayDongMST'=>$dataCompanyJson->NgayDongMST,
                'Title'=>$dataCompanyJson->Title,
                'TitleEn'=>$dataCompanyJson->TitleEn,
                'TitleEnAscii'=>$dataCompanyJson->TitleEnAscii,
                'DiaChiCongTy'=>$dataCompanyJson->DiaChiCongTy,
                'DiaChiNhanThongBaoThue'=>$dataCompanyJson->DiaChiNhanThongBaoThue,
                'NamTaiChinh'=>$dataCompanyJson->NamTaiChinh,
                'MaSoHienThoi'=>$dataCompanyJson->MaSoHienThoi,
                'NgayNhanToKhai'=>$dataCompanyJson->NgayNhanToKhai,
                'NgayBatDauHopDong'=>$dataCompanyJson->NgayBatDauHopDong,
                'VonDieuLe'=>$dataCompanyJson->VonDieuLe,
                'TongSoLaoDong'=>$dataCompanyJson->TongSoLaoDong,
                'CapChuongLoaiKhoan'=>$dataCompanyJson->CapChuongLoaiKhoan,
                'HinhThucThanhToan'=>$dataCompanyJson->HinhThucThanhToan,
                'PhuongPhapTinhThueGTGT'=>$dataCompanyJson->PhuongPhapTinhThueGTGT,
                'ChuSoHuu'=>$dataCompanyJson->ChuSoHuu,
                'ChuSoHuu_DiaChi'=>$dataCompanyJson->ChuSoHuu_DiaChi,
                'GiamDoc'=>$dataCompanyJson->GiamDoc,
                'GiamDoc_DiaChi'=>$dataCompanyJson->GiamDoc_DiaChi,
                'KeToanTruong'=>$dataCompanyJson->KeToanTruong,
                'KeToanTruong_DiaChi'=>$dataCompanyJson->KeToanTruong_DiaChi,
                'IsDelete'=>$dataCompanyJson->IsDelete,
                'RequestChanged'=>$dataCompanyJson->RequestChanged,
                'ExitsInGDT'=>$dataCompanyJson->ExitsInGDT,
                'SourceID'=>$dataCompanyJson->SourceID,
                'TinhThanhID'=>$dataCompanyJson->TinhThanhID,
                'TinhThanhTitle'=>$dataCompanyJson->TinhThanhTitle,
                'TinhThanhTitleAscii'=>$dataCompanyJson->TinhThanhTitleAscii,
                'QuanHuyenID'=>$dataCompanyJson->QuanHuyenID,
                'QuanHuyenTitle'=>$dataCompanyJson->QuanHuyenTitle,
                'QuanHuyenTitleAscii'=>$dataCompanyJson->QuanHuyenTitleAscii,
                'PhuongXaID'=>$dataCompanyJson->PhuongXaID,
                'PhuongXaTitle'=>$dataCompanyJson->PhuongXaTitle,
                'PhuongXaTitleAscii'=>$dataCompanyJson->PhuongXaTitleAscii,
                'NoiDangKyQuanLyID'=>$dataCompanyJson->NoiDangKyQuanLyID,
                'NoiDangKyQuanLy_CoQuanTitle'=>$dataCompanyJson->NoiDangKyQuanLy_CoQuanTitle,
                'NoiDangKyQuanLy_CoQuanTitleAscii'=>$dataCompanyJson->NoiDangKyQuanLy_CoQuanTitleAscii,
                'NoiDangKyQuanLy_DienThoai'=>$dataCompanyJson->NoiDangKyQuanLy_DienThoai,
                'NoiDangKyQuanLy_Fax'=>$dataCompanyJson->NoiDangKyQuanLy_Fax,
                'NoiNopThueID'=>$dataCompanyJson->NoiNopThueID,
                'NoiNopThue_DienThoai'=>$dataCompanyJson->NoiNopThue_DienThoai,
                'NoiNopThue_Fax'=>$dataCompanyJson->NoiNopThue_Fax,
                'NoiNopThue_CoQuanTitle'=>$dataCompanyJson->NoiNopThue_CoQuanTitle,
                'NoiNopThue_CoQuanTitleAscii'=>$dataCompanyJson->NoiNopThue_CoQuanTitleAscii,
                'QuyetDinhThanhLap'=>$dataCompanyJson->QuyetDinhThanhLap,
                'QuyetDinhThanhLap_NgayCap'=>$dataCompanyJson->QuyetDinhThanhLap_NgayCap,
                'QuyetDinhThanhLap_CoQuanCapID'=>$dataCompanyJson->QuyetDinhThanhLap_CoQuanCapID,
                'QuyetDinhThanhLap_CoQuanCapTitle'=>$dataCompanyJson->QuyetDinhThanhLap_CoQuanCapTitle,
                'QuyetDinhThanhLap_CoQuanCapTitleAscii'=>$dataCompanyJson->QuyetDinhThanhLap_CoQuanCapTitleAscii,
                'GiayPhepKinhDoanh_CoQuanCapID'=>$dataCompanyJson->GiayPhepKinhDoanh_CoQuanCapID,
                'GiayPhepKinhDoanh_CoQuanCapTitle'=>$dataCompanyJson->GiayPhepKinhDoanh_CoQuanCapTitle,
                'GiayPhepKinhDoanh_CoQuanCapTitleAscii'=>$dataCompanyJson->GiayPhepKinhDoanh_CoQuanCapTitleAscii,
                'GiayPhepKinhDoanh'=>$dataCompanyJson->GiayPhepKinhDoanh,
                'GiayPhepKinhDoanh_NgayCap'=>$dataCompanyJson->GiayPhepKinhDoanh_NgayCap,
                'LoaiHinhID'=>$dataCompanyJson->LoaiHinhID,
                'LoaiHinhTitle'=>$dataCompanyJson->LoaiHinhTitle,
                'LoaiHinhTitleAscii'=>$dataCompanyJson->LoaiHinhTitleAscii,
                'NganhNgheID'=>$dataCompanyJson->NganhNgheID,
                'NganhNgheTitle'=>$dataCompanyJson->NganhNgheTitle,
                'NganhNgheTitleAscii'=>$dataCompanyJson->NganhNgheTitleAscii,
                'DSNganhNgheKinhDoanh'=>$dataCompanyJson->DSNganhNgheKinhDoanh,
                'DSNganhNgheKinhDoanhID'=>$dataCompanyJson->DSNganhNgheKinhDoanhID,
                'DSMaNganhNgheKinhDoanh'=>$dataCompanyJson->DSMaNganhNgheKinhDoanh,
                'DSNganHang'=>$dataCompanyJson->DSNganHang,
                'DSNganHangID'=>$dataCompanyJson->DSNganHangID,
                'DSThuePhaiNop'=>$dataCompanyJson->DSThuePhaiNop,
                'DSThuePhaiNopID'=>$dataCompanyJson->DSThuePhaiNopID,
                'LtsDoanhNghiepTrucThuoc'=>$dataCompanyJson->LtsDoanhNghiepTrucThuoc,
                'DSTags'=>$dataCompanyJson->DSTags
            );
            array_push($listCompany, $array_company);
        }
        print_r($listCompany);
    }
}
