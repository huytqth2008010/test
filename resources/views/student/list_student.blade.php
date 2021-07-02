@extends("layout")
@section("main")
    <div id="content-wrapper" class="d-flex flex-column" style="padding: 20px;text-align: center">
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">List all students available</h1>
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                        <div class="card-tools">
                            <h6 class="m-0 font-weight-bold text-primary" style="float: left">List students</h6>
                            <div class="input-group input-group-sm" style="width: 150px;float: right">
                                <a href="{{url("/student/add")}}" class="btn btn-outline-primary">Thêm mới</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th style="width: 50px">ID</th>
                                        <th style="width: 250px">Name</th>
                                        <th style="width: 50px">Image</th>
                                        <th style="width: 50px">Age</th>
                                        <th>Address</th>
                                        <th>Telephone</th>
                                        <th>Created_at</th>
                                        <th>Updated_at</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $item)
                                        <tr>
                                            <td>{{$item->__get("id")}}</td>
                                            <td>{{$item->__get("name")}}</td>
                                            <td><img width="70px" height="70px" src="{{$item->getImage()}}"/> </td>
                                            <td>{{$item->__get("age")}}</td>
                                            <td>{{$item->__get("address")}}</td>
                                            <td>{{$item->__get("telephone")}}</td>
                                            <td>{{$item->__get("created_at")}}</td>
                                            <td>{{$item->__get("updated_at")}}</td>
                                            <td><a href="{{url("/student/edit",["id"=>$item->id])}}" style="text-decoration: none"><i class="fa fa-pencil fa-fw"></i>Sửa</a></td>
                                            <td class="center">
                                                <a href="{{url('/student/delete',["id"=>$item->id])}}" style="text-decoration: none">
                                                    <i class="fa fa-trash-o  fa-fw"></i>
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2021</span>
                </div>
            </div>
        </footer>
    </div>

@endsection
