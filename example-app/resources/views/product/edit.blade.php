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
                <form action="{{route('category.update', $category->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" value="{{ $category->title }}" class="form-control"
                               placeholder="наименование">
                    </div>

                    <select class="custom-select" name="parent_id">
                        @foreach($categoriesParent as $categoryP)
                            @if($category->parent_id != 0)
                                <option
                                    {{$categoryP->id === $category->parent_id ? ' selected' : ''}}
                                    value="{{ $categoryP->id }}">{{ $categoryP->title }}</option>
                            @endif
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
