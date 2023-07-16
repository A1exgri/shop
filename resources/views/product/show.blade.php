@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Товар</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-primary">
                                    Редактировать
                                </a>
                            </div>
                            <form action="{{ route('category.delete', $product->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>Картинка</td>
                                    <td>Наименование</td>
                                    <td>Артикул</td>
                                    <td>Описание</td>
                                    <td>Контент</td>
                                    <td>Цена</td>
                                    <td>Количество на складе</td>
                                    <td>Категория</td>
                                </tr>
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>
                                            <img src="/public/{{ $product->preview_image }}" height="50">
                                        </td>
                                        <td>
                                            {{ $product->title }}
                                        </td>
                                        <td>{{ $product->article }}</td>
                                        <td>{{ $product->description}}</td>
                                        <td>{{ $product->content }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->count }}</td>
                                        <td>{{ $product->category_id }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
