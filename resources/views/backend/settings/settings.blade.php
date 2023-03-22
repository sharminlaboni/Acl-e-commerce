@section('title')
Show Setting
@endsection
@extends('backend.layouts.main')
@section('style')

@endsection
@section('rightbar-content')
<!-- Start Contentbar -->
<div class="contentbar" style="margin-top: 70px">
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show p-2 d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>&emsp;
        <strong class="fs-5">{{ session('success') }}</strong>
        {{-- <button type="button" class="btn-close pt-1" data-bs-dismiss="alert"> --}}
        </button>
    </div>
@endif
    {{-- lis + add btn show --}}
    <div class="row mb-3">
        <div class="col-sm-12"></div>
        <div class="col-sm-12">
            <div class="card-header float-right">
                <a href="{{ route('addSettingspage') }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="See List"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- lis + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <table class="table table-stripped text-center">
                <tr class="">
                    <th>Sl No</th>
                    <th>Country Name</th>
                    <th>Associate Id</th>
                    <th>Action</th>
                </tr>
                @foreach ($settings as $setting)
                <tr>
                    <td>{{ $setting->id }}</td>
                    <td>{{ $setting->associate_country }}</td>
                    <td>{{ $setting->associate_id }}</td>
                    <td class="d-flex justify-content-center">
                        <div class="mr-3">
                            <a class="btn btn-sm btn-success" href="{{ route('editSetting', $setting->id) }}">Edit</a>
                        </div>
                        <div>
                            <a onclick="return confirm('Are You Sure?')" class="btn-sm btn btn-danger" href="{{ url('deleteSetting', $setting->id) }}">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
