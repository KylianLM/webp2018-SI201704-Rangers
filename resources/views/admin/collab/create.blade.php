@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Ajouter un collaborateur
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <form action="{{route('collaborateurs.store')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Dupond" required>
                            </div>
                            <div class="form-group">
                                <label for="firstname">Prénom</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Jean" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Fonction</label>
                                <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Directeur" required>
                            </div>
                            <div class="form-group">
                                <label for="img">Photo</label>
                                <input type="file" id="img" name="img">

                                <p class="help-block"></p>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success pull-right">Ajouter</button>
                        </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>

@endsection