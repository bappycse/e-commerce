@extends('admin.app')
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Category Edit Page</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Product Update Page</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Update Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/categories/ {{ $category['id'] }}" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">Name</label>
                      <input type="text" class="form-control" id="inputName" name="name" value="{{ $category['name'] }}" placeholder="Enter Name">
                    </div>
                  </div>
                   
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                  @method('PATCH')
                  @csrf
                </form>
              </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
@endsection