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
                <form action="{{route('user.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control" placeholder="имя">
                    </div>
                    <div class="form-group">
                        <input type="email" value="{{ $user->email }}" name="email" class="form-control" placeholder=" email ">
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{ $user->password }}" name="password" class="form-control" placeholder=" пароль ">
                    </div>
                    <div class="form-group">
                        <input type="password" value="{{ $user->password_confirmation }}" name="password_confirmation" class="form-control" placeholder=" пароль ">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->bank_details }}" name="bank_details" class="form-control" placeholder="банковские реквизиты ">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->address }}" name="address" class="form-control" placeholder="адрес">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $user->treaty }}" name="treaty" class="form-control" placeholder="договор">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ $user->phone_number }}" name="phone_number" class="form-control" placeholder="номер телефона">
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ $user->contact_name }}" name="contact_name" class="form-control" placeholder="кконтактное имя">
                    </div>


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
