@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользаватели</h1>
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
                    <a href="{{ route('user.create') }}" class="btn  btn-info btn-sm">Добавить</a>
                </div>

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>ИП/имя</th>
                            <th>email</th>
                            <th>пароль</th>
                            <th>банковские</th>
                            <th>реквизиты адрес</th>
                            <th>договор</th>
                            <th>номер телефона</th>
                            <th>контактное имя</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>{{ $user->bank_details }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->treaty }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->contact_name }}</td>
                                <td>
                                    <a class=" btn-block btn-outline-info btn-xs" href="{{ route('user.show', $user->id) }}">Редоктировать</a>
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
