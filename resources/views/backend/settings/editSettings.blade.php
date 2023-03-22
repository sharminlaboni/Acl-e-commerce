@section('title')
Edit Setting
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
                <a href="{{ route('settings') }}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="See List"><i class="fa fa-eye" aria-hidden="true"></i> List</a>
            </div>
        </div>
    </div>
    {{-- lis + add btn show --}}

    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-header">
                    <h5 class="card-title">Setting Edit From</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('updateSetting') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Affiliate Associate Tags</label>
                                    <select class="select2-single form-control select2-hidden-accessible" name="associate_country" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="{{ $settings->associate_country }}">{{ $settings->associate_country }}"</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4 mt-4">
                                <input value="{{ $settings->associate_id }}" type="text" class="form-control" name="associate_id" id="exampleInputEmail1">
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">Default Store Country</label>
                                    <select class="select2-single form-control select2-hidden-accessible" name="store_country" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        <option value="{{ $settings->associate_country }}">{{ $settings->associate_country }}"</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End col -->
    </div> <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@section('script')

@endsection
