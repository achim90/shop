@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Создание новой категории</h1>
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
                <form action="{{ route('category.store') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control"
                               placeholder="наименование">
                    </div>

                    <select class="custom-select" name="parent_id">
                        <option value="{{ '' }}">Главная категория</option>
                        @foreach($categoriesParent as $categoryP)
                            <option value="{{ $categoryP->id }}">{{ $categoryP->title }}</option>
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
