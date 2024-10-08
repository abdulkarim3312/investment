@extends('backend.layouts.master')
@section('title')
    {{-- @include('backend.admin.users.partials.title') --}}
@endsection
@section('styles')
    <style>
        .btn-sm-custom{
            padding: 4px 5px;
            line-height: 16px;
            font-size: 12px;
        }
        .btn-sm-custom i {
            margin-right: 0px !important;
        }
        .social-widget-card-custom{
            cursor: pointer;
        }
        #users_table_filter{
            text-align: right;
        }
    </style>
@endsection
@section('admin-content')
<div class="row">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Contact Us Details Info</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="float-lg-end">
                        <a href="{{ route('contact_list') }}" class="btn btn-primary float-right">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label fs-5 text-primary" for="email">Name: <span class="text-dark fs-6">{{ $contactDetails->username ?? '' }}</span></label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label fs-5 text-primary" for="email">Email: <span class="text-dark fs-6">{{ $contactDetails->email ?? '' }}</span></label>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label fs-5 text-primary" for="email">Message: <span class="text-dark fs-6">{!! $contactDetails->message ?? '' !!}</span></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(function () {
            $('.dropify').dropify();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            CKEDITOR.replace('body');
            CKEDITOR.replace('description');
        });
    </script>
@endsection
