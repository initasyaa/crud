@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product Detail</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Product</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

         <!-- Main content -->
         <section class="content">
            <div class="callout callout-info">
                <h4><strong>{{ $data->product_name }}</strong></h4>
                <p class="mb-3">{{ $data->description }}</p>

                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        <b>Code:</b> {{ $data->code }}<br>
                        <b>Brand Name:</b> {{ $data->brand_name }}<br>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Product Type:</b> {{ $data->type->name }}<br>                        

                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        <b>Created At:</b> {{ $data->created_at }}<br>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
