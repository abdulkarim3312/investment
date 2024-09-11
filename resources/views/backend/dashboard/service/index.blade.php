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
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>User List</h6>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                        <div class="float-lg-end">
                            <a href="{{ route('services.create') }}" class="btn btn-primary float-right">Add new</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive p-0">
                    <table class="table table-flush dataTable-table" id="users_table">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sl No</th>
                                <th width="10%" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                <th width="10%" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Icon Image</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $item)
                                <tr>
                                    <td><p class="text-xs font-weight-medium mb-0">{{ $loop->iteration }}</p></td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-center text-xs font-weight-medium mb-0">{{ $item->title }}</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span>
                                        <img src="{{ asset('upload/service_image/'.$item->icon_image) }}" alt="" height="40">
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span>
                                        <img src="{{ asset('upload/service_image/'.$item->image) }}" alt="" height="40">
                                        </span>
                                    </td>
                                    <td class="align-middle text-center">
                                    @if ($item->status == 'active')
                                        <span class="badge badge-sm bg-success font-weight-bold">Active</span>
                                    @elseif ($item->status == 'inactive')
                                        <span class="badge badge-sm bg-danger font-weight-bold">Inactive</span>
                                    @else
                                        {{-- <span class="badge badge-sm bg-warning font-weight-bold">Pending</span> --}}
                                        <span class="badge badge-sm bg-success font-weight-bold">Active</span>
                                    @endif
                                    </td>
                                    <td>
                                        <a class="btn waves-effect icon_size waves-light btn btn-primary btn-sm btn-sm-custom ml-1 mb-0" title="View Service Details" href="{{ route('services.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                        <a class="btn waves-effect icon_size waves-light btn-success btn-sm btn-sm-custom ml-1  mb-0" title="Edit Service Details" href="{{ route('services.edit', $item->id) }}">
                                            <i class="fa fa-edit"></i></i>
                                        </a>
                                        <button class="btn waves-effect icon_size waves-light btn-danger btn-sm btn-sm-custom ml-1 mb-0 text-white deleteItem" title="Delete Service" data-id="{{$item->id}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <form id="deleteForm{{$item->id}}" action="{{route('services.destroy', [$item->id])}}" method="post" style="display:none">
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
</div>

@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

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
