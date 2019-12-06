@extends('admin.app')
@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Product Entry Page</h1>
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
                  <h3 class="card-title">Update Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="/products/{{ $product['id'] }}" method="POST">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="inputName">Name</label>
                      <input type="text" class="form-control" id="inputName" name="name" value="{{ $product['name'] }}" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="inputSku">Sku</label>
                      <input type="text" class="form-control" id="inputSku" name="sku"  value="{{ $product['sku'] }}" placeholder="Sku">
                    </div>
                    <div class="form-group">
                      <label for="inputPrice">Price</label>
                      <input type="text" class="form-control" id="inputPrice" name="price" value="{{ $product['price'] }}" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="inputdiscount">Discount</label>
                      <input type="text" class="form-control" id="inputdiscount" name="discount" value="{{ $product['discount'] }}" placeholder="Discount">
                    </div>  
                    <div class="form-group">
                      <label for="inputCategory">Category</label>
                      <input type="text" class="form-control" id="inputCategory" name="category" value="{{ $product['category'] }}" placeholder="Category">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFile">File Image</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="image" id="inputImage">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text" id="">Upload</span>
                        </div>
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