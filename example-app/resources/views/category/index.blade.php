@extends('layouts.main')

@section('content')

    <!-- /.content-header -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Добавить</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>

                            <th>title</th>


                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categoriesParent as $categoryP)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>
                                    <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                    {{ $categoryP->title }}
                                </td>
                            </tr>
                            <tr class="expandable-body d-none">
                                <td>
                                    <div class="p-0" style="display: none;">
                                        <table class="table table-hover">

                                            <tbody>
                                            @foreach($categoriesChild as $categoryCh)
                                                <tr>
                                                    @if($categoryCh->parent_id === $categoryP->id )
                                                        <td>
                                                            <a href="{{ route('category.show', $categoryCh->id) }}">{{ $categoryCh->title }}</a>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-outline-success btn-xs" href="{{ route('category.show', $categoryCh->id) }}">Редоктировать</a>
                                                        </td>


                                                    @endif
                                                </tr>
                                            @endforeach
                                            </tbody>

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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
