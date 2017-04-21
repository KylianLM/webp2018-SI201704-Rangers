@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Contenu
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>{{$countC}}</h3>

                            <p>Collaborateurs</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="{{route('collaborateurs.index')}}" class="small-box-footer">
                            Modifer <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>{{$countM}}</h3>

                            <p>Messages</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <a href="{{route('message.index')}}" class="small-box-footer">
                            Afficher <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{route('content.update')}}" method="post">
                {{method_field('PUT')}}
                {{csrf_field()}}
            @foreach($content as $d)
                @isset(json_decode($d->meta)->size)
                @if(json_decode($d->meta)->size === 'small')
                    <div class="col-md-4">
                        @endif
                        @endisset
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title"><label for="{{$d->slug}}">{{json_decode($d->meta)->name}}</label>
                                </h3>
                            </div>
                            <div class="box-body">
                                <input type="{{json_decode($d->meta)->type}}" name="{{$d->slug}}"
                                       class="col-md-12 form-control input-lg" value="{{$d->content}}">
                            </div>
                        </div>
                        @isset(json_decode($d->meta)->size)
                    </div>
                    @endisset
                    @endforeach
                        <button type="submit" class="btn btn-info btn-flat pull-right">Modifier</button>
            </form>
        </section>
        <!-- /.content -->
    </div>

@endsection