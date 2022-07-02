@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <a href="{{ route('layouts.main') }}" class="breadcrumb-item active">Гвлавная</a>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <a href="{{ route('product.create') }}" class="btn  btn-info btn-sm">Добавить</a>
                </div>

                <!-- /.card-header -->
                <form action="{{ route('product.filter') }}" method="post">
                    @csrf
                    <label>
                        Search:<input type="search" name="title" class="form-control form-control-sm" placeholder=""
                                      aria-controls="example1">
                    </label>
                </form>
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
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
{{--                            <th>Дата создания</th>--}}
                            <th>Дата обновления</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>{{$product->price_in}}</td>
                                <td>{{$product->percent}}%</td>
                                <td>{{$product->trade_price}}</td>
                                <td>{{$product->price_out}}</td>
                                <td>{{$product->unit}}</td>
                                <td>{{$product->amount}}</td>
                                <td>{{$product->category_id}}</td>
                                <td>{{$product->brand_id}}</td>
{{--                                <td>{{$product->created_at}}</td>--}}
                                <td>{{$product->updated_at}}</td>

                                <td class="text-right py-0 align-middle">
                                    <div class="btn-group btn-group-sm">
                                        <form class="btn-group btn-group-sm"
                                              action="{{ route('product.delete', $product->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="#" class="btn btn-sidebar"></a>
                                            <button type="submit" class="btn btn-danger ">
                                                <i class="fas fa-trash"></i>
                                            </button>


                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{$products->withQueryString()->links()}}
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
