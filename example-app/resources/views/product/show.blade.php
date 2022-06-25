@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Show</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="{{ route('product.delete', $product->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn  bg-gradient-danger btn-sm">
                    <a class="btn  bg-gradient-warning btn-sm" href="{{ route('product.edit', $product->id) }}">Редоктировать</a>
                </form>


            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Товар</th>
                        <th>Цена закупочная</th>
                        <th>Наценка%</th>
                        <th>Цена ОПТ</th>
                        <th>Цена розница</th>
                        <th>Ед. измерения</th>
                        <th>Остаток</th>
                        <th>Категория</th>
                        <th>Бренд</th>
                        <th>Дата создания </th>
                        <th>Дата обновления</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title}}</td>
                        <td>{{ $product->price_in }}</td>
                        <td>{{ $product->percent }}</td>
                        <td>{{ $product->price_wholesale }}</td>
                        <td>{{ $product->price_out }}</td>
                        <td>{{ $product->unit }}</td>
                        <td>{{ $product->amount }}</td>
                        <td>{{ $product->category_id }}</td>
                        <td>{{ $product->brand_id }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>{{ $product->updated_at }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
