@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Messages
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered">
                        <thead>
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">Nom - Prénom</th>
                        <th class="col-md-4">Sujet</th>
                        <th class="col-md-2">Ajouté le</th>
                        <th>Actions</th>
                        </thead>
                        <tbody>
                        @forelse($messages as $message)
                            <td>{{$message->id}}</td>
                            <td>{{$message->name}}</td>
                            <td>{{$message->subject}}</td>
                            <td>{{$message->created_at->format('j F Y à H:i')}}</td>
                            <td></td>
                        @empty
                            <td colspan="6" style="text-align: center ">Aucun message</td>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection