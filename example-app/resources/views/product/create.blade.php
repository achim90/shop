@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создание продукта</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Создание</li>
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
                <form action="{{ route('product.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control" placeholder="наименование">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('price_in') }}" name="price_in" class="form-control" placeholder="входящая цена">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old('percent') }}" name="percent" class="form-control" placeholder="процент наценки">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <input type="text" value="{{ old('price_wholesale') }}" name="price_wholesale" class="form-control" placeholder="цена опт">--}}
{{--                    </div>--}}
{{--                    <div class="form-group">--}}
{{--                        <input type="text" value="{{ old('price_out') }}" name="price_out" class="form-control" placeholder="цена в розницу">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <input type="text" value="{{ old('unit') }}" name="unit" class="form-control" placeholder="единица измерения">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ old('amount') }}" name="amount" class="form-control" placeholder="количество">
                    </div>

                    <select class="custom-select" name="category_id">
                        @foreach($categoriesChild as $categoryCh)
                            <option value="{{ $categoryCh->id }}">{{ $categoryCh->title }}</option>
                        @endforeach
                    </select>
                    <select class="custom-select mt-3" name="brand_id">
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        <input type="submit" class="btn  btn-info btn-sm mt-2" value="добавить">
                    </div>

                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
