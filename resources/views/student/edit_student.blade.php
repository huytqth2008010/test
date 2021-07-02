@extends("layout")
@section("main")
    <div id="content-wrapper" class="d-flex flex-column" style="padding: 60px 40px">
        <div id="content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">

                        <div class="card-tools">
                            <h6 class="m-0 font-weight-bold text-primary" style="float: left">Add students</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{url("/student/update",["id"=>$item->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$item->name}}" class="form-control" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" value="{{$item->getImage()}}" placeholder="Image..">
                                <img style="width: 70px;height: 70px" src="{{$item->getImage()}}"/>
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="number" min="0" value="{{$item->age}}" name="age" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" min="0" value="{{$item->address}}" name="address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Telephone</label>
                                <input type="number" min="0" value="{{$item->telephone}}" name="telephone" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
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

