@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @if(app('request')->get('label') == 'important')
                    Messages importants
                @else
                    Tous les messages
                @endif
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th class="col-md-1">#</th>
                            <th class="col-md-2">Nom - Prénom</th>
                            <th class="col-md-1">Téléphone</th>
                            <th class="col-md-3">Sujet</th>
                            <th class="col-md-2">Ajouté le</th>
                            <th class="col-md-2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($messages as $message)
                            <tr>
                                <td>{{$message->id}}</td>
                                <td>{{$message->name}}</td>
                                <td>{{$message->phone}}</td>
                                <td>{{$message->subject}}</td>
                                <td>{{$message->created_at->format('j F Y à H:i')}}</td>
                                <td>
                                    <form action="{{ route('message.destroy', $message->id) }}" method="POST"
                                          class="pull-right">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger btn-flat"><i
                                                    class="fa fa-trash"></i>
                                        </button>
                                        <a class="btn btn-info btn-flat" href="{{route('message.show',[$message->id])}}"
                                           role="button"><i class="fa fa-eye"></i></a>
                                    </form>
                                    @if($message->callback)
                                        <button class="btn bg-green btn-flat disabled">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </button>
                                    @endif
                                    @if($message->label !== 'important')
                                        <form action="{{route('message.update', $message->id)}}" method="POST"
                                              class="pull-left">
                                            {{csrf_field()}}
                                            {{ method_field('PUT') }}
                                            <input type="hidden" name="label" value="important">
                                            <button type="submit" class="btn bg-orange btn-flat"><i
                                                        class="fa fa-star"></i></button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
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