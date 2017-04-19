@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>

            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                    <div class="mailbox-read-info">
                        <h3>{{$message->subject}}</h3>
                        <h5>{{$message->email}} / {{$message->phone}}
                            <span class="mailbox-read-time pull-right">{{$message->created_at->format('j F Y à H:i')}}</span></h5>
                    </div>
                    <div class="mailbox-read-message">
                        <p>{{$message->body}}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection