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
                            <h3>44</h3>

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
            </div>
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
        </section>
        <!-- /.content -->
    </div>

@endsection