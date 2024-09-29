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
                    <h6>Agreement Procedure Edit</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="float-lg-end">
                        <a href="{{ route('agreement-procedure.index') }}" class="btn btn-primary float-right">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <form action="{{ route('agreement-procedure.update', $editType->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="type_id">Agreement Type <span class="text-danger">*</span></label>
                                <select class="form-control" id="type_id" name="type_id">
                                    <option value="" selected>--Select Type--</option>
                                    @foreach ($type as $item)
                                        <option value="{{$item->id ?? ''}}" {{$item->id == $editType->type_id ? 'selected': '' }}>{{$item->name ?? ''}}</option>
                                    @endforeach
                                    @error('type_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                <select class="form-control" id="status" name="status">
                                    <option value="" selected>--Select Status--</option>
                                    <option value="1" @if(old('status',$editType->status) == 1) selected @endif> Active</option>
                                    <option value="0" @if(old('status',$editType->status) == 0) selected @endif> Inactive</option>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                        </div>
                   </div>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" data-height="100" id="image" class="form-control dropify" data-default-file="{{ isset($editType->image) ? asset('upload/agreement_image/'.$editType->image) : null }}">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                   <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="status">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="editor" name="description">{{ old('description' , $editType->description ?? '') }}</textarea>
                                @error('description')
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
