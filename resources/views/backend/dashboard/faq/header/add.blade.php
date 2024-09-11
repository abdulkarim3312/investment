@extends('backend.layouts.master')
@section('title')
    {{-- @include('backend.admin.users.partials.title') --}}
@endsection
@section('styles')
    <style>
        .btn-sm-custom{
            padding: 5px 5px;
            line-height: 16px;
            font-size: 16px;
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
        .icon_size i{
            font-size: 14px !important;
        }
    </style>
@endsection
@section('admin-content')
<div class="row">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Faq Header Section</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="float-lg-end">
                        <a href="{{ route('users.index') }}" class="btn btn-primary float-right">Back to list</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <form action="{{ route('faq_update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" value="{{ $faqHeader->title ?? '' }}" class="form-control">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="short_title" class="form-label">Short Title<span class="text-danger">*</span></label>
                                <input type="text" name="short_title" value="{{ $faqHeader->short_title ?? '' }}" id="short_title" class="form-control">
                                @error('short_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                   </div>
                   <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" name="image" data-height="100" id="image" class="form-control dropify" data-default-file="{{ isset($faqHeader->image) ? asset('upload/faq_header/'.$faqHeader->image) : null }}">
                            @error('image')
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

<div class="row">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Faq Add</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="float-lg-end">
                        <a href="{{ route('users.index') }}" class="btn btn-primary float-right">Back to list</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <form action="{{ route('faq.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="question" class="form-label">Question <span class="text-danger">*</span></label>
                                <input type="text" name="question" id="question" class="form-control">
                                @error('question')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="answer" class="form-label">Answer<span class="text-danger">*</span></label>
                                <textarea name="answer" class="form-control" cols="30" rows="3"></textarea>
                                @error('answer')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                   </div>
                   <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="form-group button_position">
                            <label for="" class="form-label"></label>
                            <input type="submit" class="btn btn-info" value="Submit">
                        </div>
                    </div>
                   </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="card mb-4">
        <div class="card-header pb-0">
            <div class="row">
                <div class="col-lg-6 col-7">
                    <h6>Faqs List</h6>
                </div>
                {{-- <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="float-lg-end">
                        <a href="{{ route('services.create') }}" class="btn btn-primary float-right">Add new</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive p-0">
                <table class="table table-flush dataTable-table" id="users_table">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sl No</th>
                            <th width="10%" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Question</th>
                            <th width="20%" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Answer</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $item)
                            <tr>
                                <td><p class="text-xs font-weight-medium mb-0">{{ $loop->iteration }}</p></td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-center text-xs font-weight-medium mb-0">{{ $item->question }}</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-center text-xs font-weight-medium mb-0">{{ substr($item->answer,0, 25); }}...</p>
                                </td>

                                <td>
                                    <a class="btn waves-effect icon_size waves-light btn-success btn-sm btn-sm-custom ml-1  mb-0" title="Edit Service Details" href="{{ route('faq.edit', $item->id) }}">
                                        <i class="fa fa-edit"></i></i>
                                    </a>
                                    <button class="btn waves-effect icon_size waves-light btn-danger btn-sm btn-sm-custom ml-1 mb-0 text-white deleteItem" title="Delete Service" data-id="{{$item->id}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <form id="deleteForm{{$item->id}}" action="{{route('faq.destroy', [$item->id])}}" method="post" style="display:none">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success"><i
                                                class="icofont icofont-check"></i> Confirm Delete</button>
                                        <button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary" data-dismiss="modal"><i
                                                class="fa fa-times"></i> Cancel</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
