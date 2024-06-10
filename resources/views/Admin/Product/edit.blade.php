@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <form action="{{ route('product.update', ['id' =>$data->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Form Edit Product</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Code</label>
                                            <input type="number" value="{{ $data->code }}" name="code"
                                                class="form-control" placeholder="Enter code">
                                            @error('code')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Alternative Product</label>
                                            <input type="number" value="{{ $data->alternative_id ?? '-' }}" name="alternative_id" class="form-control"
                                                placeholder="Enter alternative product">
                                            @error('alternative_id')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="name" value="{{ $data->product_name }}" name="product_name" class="form-control"
                                                placeholder="Enter product name">
                                            @error('product_name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Brand Name</label>
                                            <input type="text" value="{{ $data->brand_name }}" name="brand_name"
                                                class="form-control" placeholder="Enter brand name">
                                            @error('brand_name')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="safe" value="Produk Tidak Masuk di Daftar Boikot" {{ $data->status == 'Produk Tidak Masuk di Daftar Boikot' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="safe">Aman</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="boycott" value="Produk Masuk di Daftar Boikot" {{ $data->status == 'Produk Masuk di Daftar Boikot' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="boycott">Boikot</label>
                                            </div>
                                            @error('status')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>                                        
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" value="{{ $data->description }}" name="description"
                                                class="form-control" placeholder="Enter description">
                                            @error('description')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Product Type</label>
                                            <select name="type_id" class="form-control">
                                                <option value="">Select Type</option>
                                                @foreach ($types as $type)
                                                    <option value="{{ $type->id }}" {{ $data->type_id == $type->id ? 'selected' : '' }}>
                                                        {{ $type->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('type_id')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Sertifikat Halal</label>
                                            <input type="number" value="{{ $data->halal_certificate_number }}"
                                                name="halal" class="form-control"
                                                placeholder="Enter Nomor Sertifikat Halal">
                                            @error('halal')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Nomor Sertifikat BPOM</label>
                                            <input type="number" value="{{ $data->bpom_certificate_number }}"
                                                name="bpom" class="form-control"
                                                placeholder="Enter Nomor Sertifikat BPOM">
                                            @error('bpom')
                                                <small>{{ $message }}</small>
                                            @enderror
                                        </div>

                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col (left) -->
                    </div>
                </form>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
