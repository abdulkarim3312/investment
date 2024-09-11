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
                    <h6>Edit Team</h6>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                    <div class="float-lg-end">
                        <a href="{{ route('team.index') }}" class="btn btn-primary float-right">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name" value="{{ $team->name ?? ''}}" class="form-control">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="designation" class="form-label">Designation <span class="text-danger">*</span></label>
                                <input type="text" name="designation" value="{{ $team->designation ?? ''}}" id="designation" class="form-control">
                                @error('designation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                   </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" name="image" data-height="100" id="image" class="form-control dropify" data-default-file="{{ isset($team->image) ? asset('upload/team_image/'.$team->image) : null }}">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="status">Status <span class="text-danger">*</span></label>
                                <select class="form-control" id="status" name="status">
                                    <option value="" selected>--Select Status--</option>
                                    <option value="1" @if(old('status',$team->status) == 1) selected @endif> Active</option>
                                    <option value="0" @if(old('status',$team->status) == 0) selected @endif> Inactive</option>
                                    @error('')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </select>
                            </div>
                        </div>
                    </div>

                   <div class="row">
                    <div class="col-md-4 mt-3">
                        <div class="form-group button_position">
                            <label for="" class="form-label"></label>
                            <input type="submit" class="btn btn-info" value="Update">
                            <a href="{{ route('team.index') }}" class="btn btn-danger">Cancel</a>
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
