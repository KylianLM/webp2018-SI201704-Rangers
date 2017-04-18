@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Configuration</h2>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('configStore')}}" method="POST">
                            {{csrf_field()}}
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="col-md-2">Référence</th>
                                    <th>Description</th>
                                    <th class="col-md-6">Valeur</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->key}}</td>
                                        <td>
                                            <label for="{{$d->id}}">
                                                {{$d->meta}}
                                            </label></td>
                                        <td>
                                            <input type="text" name="{{$d->id}}" value="{{$d->value}}"></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary pull-right">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection