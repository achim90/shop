@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{route('product.update', $product->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" value="{{ $product->title }}" class="form-control"
                               placeholder="наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" name="price_in" value="{{ $product->price_in }}" class="form-control"
                               placeholder="наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" name="percent" value="{{ $product->percent }}" class="form-control"
                               placeholder="наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" name="unit" value="{{ $product->unit }}" class="form-control"
                               placeholder="наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" name="amount" value="{{ $product->amount }}" class="form-control"
                               placeholder="наименование">
                    </div>

                    <select class="custom-select" name="category_id">
                        @foreach($categoriesChild as $categoryCh)
                            <option
                                {{$categoryCh->id === $product->category_id ? ' selected' : ''}}
                                value="{{ $categoryCh->id }}">{{ $categoryCh->title }}</option>
                        @endforeach
                    </select>
                    <p></p>
                    <select class="custom-select" name="brand_id">
                        @foreach($brands as $brand)
                            <option
                                {{$brand->id === $product->brand_id ? ' selected' : ''}}
                                value="{{ $brand->id }}">{{ $brand->title }}</option>
                        @endforeach
                    </select>
                    <p></p>
                    <div class="form-group">
                        <input type="submit" class="btn btn-block bg-gradient-warning btn-sm" value="Редоктировать">
                    </div>

                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
