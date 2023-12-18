@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">NGƯỜI DÙNG CƠ GIỚI</h1>
    <p class="mb-4">Quản lý người dùng
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý người dùng</h6>
            <br />
            <a href="/usercreate" class="btn btn-info">Thêm người dùng mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Giới tính</th>
                            <th>Ngày Sinh</th>
                            <th>SĐT</th>
                            <th>Ảnh</th>
                            <th>Công ty</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Mật khẩu</th>
                            <th>Vai trò</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Giới tính</th>
                            <th>Ngày Sinh</th>
                            <th>SĐT</th>
                            <th>Ảnh</th>
                            <th>Công ty</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Mật khẩu</th>
                            <th>Vai trò</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->hoten}}</td>
                            <td>{{$user->gioitinh}}</td>
                            <td>{{$user->ngaysinh}}</td>
                            <td>{{$user->sdt}}</td>
                            <td><img src="./img/{{$user->anh}}" alt="" style="width: 200px;height: 200px;"></td>
                            <td>{{$user->congty}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->diachi}}</td>
                            <td>{{$user->password}}</td>
                            <td>{{$user->quyen_id}}</td>

                            <td><a href="{{( route('admin.updateuser',$user->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fas fa-pencil-alt"></i></a> |
                                <!-- <form method="post" action="{{ route('admin.deleteuser',$user->id) }}">
                                                @csrf 
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger" style="margin:auto; text-align:center"><i class="fas fa-trash"></i></button>
                                            </form> -->

                                <a href="{{( route('admin.deleteuser',$user->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fas fa-trash"></i></a>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        {{$users->links('pagination::bootstrap-4')}}
    </div>

</div>

</div>
</div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e) {
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        })
    })
</script>
@endpush