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
                    <h6>Slider Section</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="float-lg-end">
                        {{-- <a href="{{ route('users.index') }}" class="btn btn-primary float-right">Back to list</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <form action="{{ route('home_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" value="{{ $sliderTitle->title ?? '' }}" class="form-control">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                   </div>

                   <div class="row">
                        <div class="col-md-4 mt-3">
                            <div class="form-group button_position">
                                <label for="" class="form-label"></label>
                                <input type="submit" class="btn btn-info" value="Update">
                            </div>
                        </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.dropify').dropify();

            $('#users_table').DataTable({
                aLengthMenu: [[10,25, 50, 100, 1000, -1], [10,25, 50, 100, 1000, "All"]],
                "columnDefs": [
                    {
                        "targets": 0,
                        "className": "text-center",
                    },
                    {
                        'bSortable': false,
                        'bSearchable': false,
                        "className": "text-center",
                        'aTargets': [-1]
                    }
                ]
            });

            $('.verifyUser').on('click',function(){
                let id = $(this).data('id')
                swal.fire({
                    title: "Are you sure?",
                    text: "User will be verified!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#3fc3ee",
                    confirmButtonText: "Yes, verify it!"
                }).then((result) => {
                    if (result.value) {
                        $("#verifyForm"+id).submit();
                    }
                })
            });

            $('.unverifyUser').on('click',function(){
                let id = $(this).data('id')
                swal.fire({
                    title: "Are you sure?",
                    text: "User will be unverified!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonColor: "#3fc3ee",
                    confirmButtonText: "Yes, unverify it!"
                }).then((result) => {
                    if (result.value) {
                        $("#unverifyForm"+id).submit();
                    }
                })
            });

            $('.deleteItem').on('click',function(){
                let id = $(this).data('id')
                swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.value) {
                        $("#deleteForm"+id).submit();
                    }
                })
            });
        });
    </script>
@endsection
