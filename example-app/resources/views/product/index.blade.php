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




    <div class="card">
{{--        <div class="card-header">--}}
{{--            <h3 class="card-title">DataTable with default features</h3>--}}
{{--        </div>--}}
        <div class="card-header">
            <a href="{{ route('product.create') }}" class="btn  btn-info btn-sm">Добавить</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
{{--                    <div class="col-sm-12 col-md-6">--}}
{{--                        <div class="dt-buttons btn-group flex-wrap">--}}
{{--                            <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0"--}}
{{--                                    aria-controls="example1" type="button"><span>Copy</span></button>--}}
{{--                            <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0"--}}
{{--                                    aria-controls="example1" type="button"><span>CSV</span></button>--}}
{{--                            <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0"--}}
{{--                                    aria-controls="example1" type="button"><span>Excel</span></button>--}}
{{--                            <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0"--}}
{{--                                    aria-controls="#example1" type="button"><span>PDF</span></button>--}}
{{--                            <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1"--}}
{{--                                    type="button"><span>Print</span></button>--}}
{{--                            <div class="btn-group">--}}
{{--                                <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis"--}}
{{--                                        tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span><span--}}
{{--                                        class="dt-down-arrow"></span></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-12 col-md-6">--}}
{{--                        <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search"--}}
{{--                                                                                                 class="form-control form-control-sm"--}}
{{--                                                                                                 placeholder=""--}}
{{--                                                                                                 aria-controls="example1"></label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                               aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">номер
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Товар
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Цена закупочная
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">Наценка %
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Engine version: activate to sort column ascending">Цена ОПТ
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Цена розница
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Ед. измерения
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Остаток
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Категория
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Бренд
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Дата создания
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Дата обновления
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $product)
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">{{ $product->id }}</td>
                                    <td>{{ $product->title}}</td>
                                    <td>{{ $product->price_in }}</td>
                                    <td>{{ $product->percent }}</td>
                                    <td>{{  $product->price_in + ($product->price_in * ($product->percent-4) / 100)}}</td>
                                    <td>{{ $product->price_in + ($product->price_in * $product->percent / 100)}}</td>
                                    <td>{{ $product->unit }}</td>
                                    <td>{{ $product->amount }}</td>
                                    <td>{{ $product->category_id }}</td>
                                    <td>{{ $product->brand_id }}</td>
                                    <td>{{ $product->created_at }}</td>
                                    <td>{{ $product->updated_at }}</td>
                                    <td>
                                        <a class=" btn-block btn-outline-info btn-xs" href="{{ route('product.show', $product->id) }}">Редоктировать</a>
                                    </td>
                                </tr>
                            @endforeach


                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10
                            of 57 entries
                        </div>
                    </div>
{{--                    <div class="col-sm-12 col-md-7">--}}
{{--                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="paginate_button page-item previous disabled" id="example1_previous"><a--}}
{{--                                        href="#" aria-controls="example1" data-dt-idx="0" tabindex="0"--}}
{{--                                        class="page-link">Previous</a></li>--}}
{{--                                <li class="paginate_button page-item active"><a href="#" aria-controls="example1"--}}
{{--                                                                                data-dt-idx="1" tabindex="0"--}}
{{--                                                                                class="page-link">1</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                          data-dt-idx="2" tabindex="0"--}}
{{--                                                                          class="page-link">2</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                          data-dt-idx="3" tabindex="0"--}}
{{--                                                                          class="page-link">3</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                          data-dt-idx="4" tabindex="0"--}}
{{--                                                                          class="page-link">4</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                          data-dt-idx="5" tabindex="0"--}}
{{--                                                                          class="page-link">5</a></li>--}}
{{--                                <li class="paginate_button page-item "><a href="#" aria-controls="example1"--}}
{{--                                                                          data-dt-idx="6" tabindex="0"--}}
{{--                                                                          class="page-link">6</a></li>--}}
{{--                                <li class="paginate_button page-item next" id="example1_next"><a href="#"--}}
{{--                                                                                                 aria-controls="example1"--}}
{{--                                                                                                 data-dt-idx="7"--}}
{{--                                                                                                 tabindex="0"--}}
{{--                                                                                                 class="page-link">Next</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>









{{--        <div class="row">--}}
{{--            <div class="col-sm-12">--}}
{{--                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"--}}
{{--                       aria-describedby="example1_info">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"--}}
{{--                            colspan="1" aria-sort="ascending"--}}
{{--                            aria-label="Rendering engine: activate to sort column descending">номер--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="Browser: activate to sort column ascending">Товар--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="Platform(s): activate to sort column ascending">Цена закупочная--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="Engine version: activate to sort column ascending">Цена ОПТ--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="Engine version: activate to sort column ascending">Наценка %--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="CSS grade: activate to sort column ascending">Цена розница--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="CSS grade: activate to sort column ascending">Ед. измерения--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="CSS grade: activate to sort column ascending">Остаток--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="CSS grade: activate to sort column ascending">category_id--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="CSS grade: activate to sort column ascending">brand_id--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="CSS grade: activate to sort column ascending">created_at--}}
{{--                        </th>--}}
{{--                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"--}}
{{--                            aria-label="CSS grade: activate to sort column ascending">Updated_at--}}
{{--                        </th>--}}

{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}

{{--                    @foreach($products as $product)--}}
{{--                        <tr class="odd">--}}
{{--                            <td class="dtr-control sorting_1" tabindex="0">{{ $product->id }}</td>--}}
{{--                            <td>{{ $product->title}}</td>--}}
{{--                            <td>{{ $product->price_in }}</td>--}}
{{--                            <td>{{ $product->percent }}</td>--}}
{{--                            <td>{{ $product->price_wholesale }}</td>--}}
{{--                            <td>{{ $product->price_out }}</td>--}}
{{--                            <td>{{ $product->unit }}</td>--}}
{{--                            <td>{{ $product->amount }}</td>--}}
{{--                            <td>{{ $product->category_id }}</td>--}}
{{--                            <td>{{ $product->brand_id }}</td>--}}
{{--                            <td>{{ $product->created_at }}</td>--}}
{{--                            <td>{{ $product->updated_at }}</td>--}}
{{--                            <td>--}}
{{--                                <a class=" btn-block btn-outline-info btn-xs" href="{{ route('product.show', $product->id) }}">Редоктировать</a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}


{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
@endsection
