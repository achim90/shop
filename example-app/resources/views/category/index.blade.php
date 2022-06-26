@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории</h1>
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
    <!-- /.content-header -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('category.create') }}" class="btn  btn-info btn-sm">Добавить</a>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Категории</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categoriesParent as $categoryP)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                    {{ $categoryP->title }}
                                </td>
                                <td>
                                    <a class=" btn-block btn-outline-info btn-xs"
                                       href="{{ route('category.show', $categoryP->id) }}">Редоктировать</a>
                                </td>
                            </tr>
                            <tr class="expandable-body d-none">
                                <td>
                                    <div class="p-0" style="display: none;">
                                        <table class="table table-hover">


                                            @foreach($categoriesChild as $categoryCh)
                                                <tr>
                                                    @if($categoryCh->parent_id === $categoryP->id )
                                                        <td>
                                                            <a href="{{ route('category.show', $categoryCh->id) }}">{{ $categoryCh->title }}</a>
                                                        </td>
                                                        <td>
                                                            <a class=" btn-block btn-outline-info btn-xs" href="{{ route('category.show', $categoryCh->id) }}">Редоктировать</a>
                                                        </td>

                                                    @endif
                                                </tr>
                                            @endforeach


                                        </table>
                                    </div>
                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection
