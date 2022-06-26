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
                <form action="{{ route('category.delete', $category->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" class="btn  bg-gradient-danger btn-sm" >
                    <a class="btn  bg-gradient-warning btn-sm" href="{{ route('category.edit', $category->id) }}">Редоктировать</a>
                </form>


            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Date</th>
                        <th>Parent</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            @if($category->parent_id != null)
                                {{$category->parent->title}}
                            @endif
                        </td>

                    </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
@endsection
