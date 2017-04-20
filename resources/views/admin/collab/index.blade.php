@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
               Collaborateurs
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">{{json_decode($content->meta)->name}}</h3>
                </div>
                <div class="box-body">
                    <textarea class="form-control" name="" rows="10"> {{$content->content}}</textarea>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

@endsection