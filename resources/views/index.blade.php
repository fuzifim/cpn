@extends('layout')
@section('title', 'Danh sách công ty')
@section('header')
    @include('header')
@endsection
@section('content')
    <div class="container">
        <div class="row mt-2">
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
            <div class="col-md-8">
                @if(count($listCompany)>0)
                    <ul class="list-group">
                        @foreach($listCompany as $company)
                            <li class="list-group-item">
                                <h3><a href="{!! route('view.company',array($company->MaSoThue,str_slug($company->Title))) !!}">{!! $company->Title !!}</a></h3>
                                <p><small>Add: {!! $company->DiaChiCongTy !!}</small></p>
                                <p><small>MST: <strong>{!! $company->MaSoThue !!}</strong> - Chủ sỡ hữu: <strong>{!! $company->ChuSoHuu !!}</strong></small></p>
                            </li>
                        @endforeach
                    </ul>
                    <div class="form-group mt-2">
                        {{ $listCompany->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('css')
@endsection
@section('script')
@endsection