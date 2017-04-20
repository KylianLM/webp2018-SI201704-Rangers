@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{json_decode($content->meta)->name}}</h3>
                </div>
                <form action="">
                    <div class="box-body">
                        <textarea id="description" class="form-control" name="{{$content->slug}}"
                                  rows="5"> {{$content->content}}</textarea>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info btn-flat pull-right">Modifier</button>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Collaborateurs</h3>
                            <div class="box-tools">
                               <a href="{{route('collaborateurs.create')}}" class="btn btn-flat btn-primary">Ajouter</a>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Nom - Prénom</th>
                                    <th>Fonction</th>
                                    <th>Ajouté le</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($collabs as $collab)
                                    <tr>
                                        <td>{{$collab->name}}</td>
                                        <td>{{$collab->fonction}}</td>
                                        <td>{{Carbon\Carbon::parse($collab->created_at)->format('d/m/Y H:i')}}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>

        </section>
        <!-- /.content -->
    </div>

    <script src="/js/jquery.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        CKEDITOR.replace('description', {
                // Define the toolbar: http://docs.ckeditor.com/#!/guide/dev_toolbar
                // The standard preset from CDN which we used as a base provides more features than we need.
                // Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
                toolbar: [
                    {name: 'clipboard', items: ['Undo', 'Redo']},
                    {name: 'basicstyles', items: ['Bold', 'RemoveFormat']},
                    {name: 'tools', items: ['Maximize']},
                    {name: 'editing', items: ['Scayt']},
                    {name: 'document', items: ['Source']}
                ]
            }
        )
    </script>

@endsection