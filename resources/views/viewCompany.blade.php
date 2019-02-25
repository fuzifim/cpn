@extends('layout')
@section('title', $company->Title)
@section('header')
    @include('header')
@endsection
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col-md-8">
                <h1>{!! $company->Title !!}</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{!! $company->Title !!}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Tên giao dịch tiếng anh: <strong>{!! $company->TitleEn !!}</strong></h6>
                        <p class="card-text">Địa chỉ công ty: <strong>{!! $company->DiaChiCongTy !!}</strong></p>
                        <p class="card-text">Mã số thuế: <strong>{!! $company->MaSoThue !!}</strong></p>
                        <p class="card-text">Ngày cấp: {!! $company->NgayCap !!}@if(!empty($company->NgayDongMST)) - Ngày đóng MST: {!! $company->NgayDongMST !!}@endif</p>
                        @if(!empty($company->DiaChiNhanThongBaoThue))<p class="card-text"><strong>Địa chỉ nhận thông báo thuế:</strong> {!! $company->DiaChiNhanThongBaoThue !!}</p>@endif
                        @if(!empty($company->NamTaiChinh))<p class="card-text"><strong>Năm tài chính:</strong> {!! $company->NamTaiChinh !!}</p>@endif
                        @if(!empty($company->MaSoHienThoi))<p class="card-text"><strong>Mã số hiện thời:</strong> {!! $company->MaSoHienThoi !!}</p>@endif
                        @if(!empty($company->NgayNhanToKhai))<p class="card-text"><strong>Ngày nhận tờ khai:</strong> {!! $company->NgayNhanToKhai !!}</p>@endif
                        @if(!empty($company->NgayBatDauHopDong))<p class="card-text"><strong>Ngày bắt đầu hợp đồng:</strong> {!! $company->NgayBatDauHopDong !!}</p>@endif
                        @if(!empty($company->VonDieuLe))<p class="card-text"><strong>Vốn điều lệ:</strong> {!! $company->VonDieuLe !!}</p>@endif
                        @if(!empty($company->TongSoLaoDong))<p class="card-text"><strong>Tổng số lao động:</strong> {!! $company->TongSoLaoDong !!}</p>@endif
                        @if(!empty($company->CapChuongLoaiKhoan))<p class="card-text"><strong>Cấp chương loại chứng khoán:</strong> {!! $company->CapChuongLoaiKhoan !!}</p>@endif
                        @if(!empty($company->HinhThucThanhToan))<p class="card-text"><strong>Hình thức thanh toán:</strong> {!! $company->HinhThucThanhToan !!}</p>@endif
                        @if(!empty($company->PhuongPhapTinhThueGTGT))<p class="card-text"><strong>Phương pháp tính thuế GTGT:</strong> {!! $company->PhuongPhapTinhThueGTGT !!}</p>@endif
                        @if(!empty($company->ChuSoHuu))<p class="card-text"><strong>Chủ sỡ hữu:</strong> {!! $company->ChuSoHuu !!}</p>@endif
                        @if(!empty($company->ChuSoHuu_DiaChi))<p class="card-text"><strong>Địa chỉ chủ sỡ hữu:</strong> {!! $company->ChuSoHuu_DiaChi !!}</p>@endif
                        @if(!empty($company->GiamDoc))<p class="card-text"><strong>Giám đốc:</strong> {!! $company->GiamDoc !!}</p>@endif
                        @if(!empty($company->GiamDoc_DiaChi))<p class="card-text"><strong>Địa chỉ giám đốc:</strong> {!! $company->GiamDoc_DiaChi !!}</p>@endif
                        @if(!empty($company->KeToanTruong))<p class="card-text"><strong>Kế toán trưởng:</strong> {!! $company->KeToanTruong !!}</p>@endif
                        @if(!empty($company->KeToanTruong_DiaChi))<p class="card-text"><strong>Địa chỉ kế toán trưởng:</strong> {!! $company->KeToanTruong_DiaChi !!}</p>@endif
                        @if(!empty($company->PhuongXaTitle))<p class="card-text"><strong>Phường/ xã:</strong> {!! $company->PhuongXaTitle !!}</p>@endif
                        @if(!empty($company->QuanHuyenTitle))<p class="card-text"><strong>Quận/ huyện:</strong> {!! $company->QuanHuyenTitle !!}</p>@endif
                        @if(!empty($company->TinhThanhTitle))<p class="card-text"><strong>Tỉnh thành:</strong> {!! $company->TinhThanhTitle !!}</p>@endif
                        @if(!empty($company->NoiDangKyQuanLy_CoQuanTitle))<p class="card-text"><strong>Nơi đăng ký quản lý:</strong> {!! $company->NoiDangKyQuanLy_CoQuanTitle !!}</p>@endif
                        @if(!empty($company->NoiDangKyQuanLy_DienThoai))<p class="card-text"><strong>Số điện thoại nơi đăng ký quản lý:</strong> {!! $company->NoiDangKyQuanLy_DienThoai !!}</p>@endif
                        @if(!empty($company->NoiDangKyQuanLy_Fax))<p class="card-text"><strong>Số fax nơi đăng ký quản lý:</strong> {!! $company->NoiDangKyQuanLy_Fax !!}</p>@endif
                        @if(!empty($company->NoiNopThue_CoQuanTitle))<p class="card-text"><strong>Nơi nộp thuế:</strong> {!! $company->NoiNopThue_CoQuanTitle !!}</p>@endif
                        @if(!empty($company->NoiNopThue_DienThoai))<p class="card-text"><strong>Số điện thoại nơi nộp thuế:</strong> {!! $company->NoiNopThue_DienThoai !!}</p>@endif
                        @if(!empty($company->NoiNopThue_Fax))<p class="card-text"><strong>Số fax nơi nộp thuế:</strong> {!! $company->NoiNopThue_Fax !!}</p>@endif
                        @if(!empty($company->QuyetDinhThanhLap))<p class="card-text"><strong>Quyết định thành lập:</strong> {!! $company->QuyetDinhThanhLap !!}</p>@endif
                        @if(!empty($company->QuyetDinhThanhLap_NgayCap))<p class="card-text"><strong>Ngày cấp quyết định thành lập:</strong> {!! $company->QuyetDinhThanhLap_NgayCap !!}</p>@endif
                        @if(!empty($company->QuyetDinhThanhLap_CoQuanCapTitle))<p class="card-text"><strong>Nơi cấp quyết định thành lập:</strong> {!! $company->QuyetDinhThanhLap_CoQuanCapTitle !!}</p>@endif
                        @if(!empty($company->GiayPhepKinhDoanh_CoQuanCapTitle))<p class="card-text"><strong>Cơ quan cấp giấy phép kinh doanh:</strong> {!! $company->GiayPhepKinhDoanh_CoQuanCapTitle !!}</p>@endif
                        @if(!empty($company->GiayPhepKinhDoanh))<p class="card-text"><strong>Giấy phép kinh doanh:</strong> {!! $company->GiayPhepKinhDoanh !!}</p>@endif
                        @if(!empty($company->GiayPhepKinhDoanh_NgayCap))<p class="card-text"><strong>Ngày cấp giấy phép kinh doanh:</strong> {!! $company->GiayPhepKinhDoanh_NgayCap !!}</p>@endif
                        @if(!empty($company->LoaiHinhTitle))<p class="card-text"><strong>Loại hình hoạt động:</strong> {!! $company->LoaiHinhTitle !!}</p>@endif
                        @if(!empty($company->NganhNgheTitle))<p class="card-text"><strong>Ngành nghề:</strong> {!! $company->NganhNgheTitle !!}</p>@endif
                    </div>
                </div>
                <div class="form-group">
                    @if(count($listRelate))
                        <h3>Các công ty cùng lĩnh vực</h3>
                        <ul class="list-group">
                            @foreach($listRelate as $company)
                                <li class="list-group-item">
                                    <a href="{!! route('view.company',array($company->MaSoThue,str_slug($company->Title))) !!}">{!! $company->Title !!}</a>
                                    <p><small>Add: {!! $company->DiaChiCongTy !!}</small></p>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                @if(count($listNew))
                    <ul class="list-group">
                        @foreach($listNew as $company)
                            <li class="list-group-item">
                                <a href="{!! route('view.company',array($company->MaSoThue,str_slug($company->Title))) !!}">{!! $company->Title !!}</a>
                                <p><small>Add: {!! $company->DiaChiCongTy !!}</small></p>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('css')
@endsection
@section('script')
@endsection