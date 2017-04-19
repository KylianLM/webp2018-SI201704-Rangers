@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Préférences
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <form action="{{route('configStore')}}" method="POST">
                {{csrf_field()}}
                @foreach($data as $d)
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title"><label for="{{$d->id}}">
                                    {{$d->meta}}
                                </label></h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-bordered">
                                <td class="col-md-2">{{$d->key}}</td>
                                <td>
                                    <input type="text" name="{{$d->id}}" value="{{$d->value}}" class="col-md-12">
                                </td>
                            </table>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary pull-right">Modifier</button>
            </form>
        </section>
        <!-- /.content -->
    </div>

@endsection