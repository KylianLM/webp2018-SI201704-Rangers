@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{$article->title}}
            </h1>
        </section>
        <section class="content">
            <div class="box box-primary">
                <form action="{{route('savoir.update', $article->id)}}" method="POST" enctype="multipart/form-data">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <div class="box-body">

                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <textarea name="body" id="article" cols="30" rows="10">
                            {{$article->body}}
                        </textarea>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="visible" @if($article->visible) checked @endif>
                                Visible
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <input type="file" id="exampleInputFile" name="img">

                            <p class="help-block">Taille recommandé : 1050px * 700px</p>
                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info btn-flat pull-right">Modifier</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script src="/js/jquery.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
    <script>
        CKEDITOR.replace('article', {
                // Define the toolbar: http://docs.ckeditor.com/#!/guide/dev_toolbar
                // The standard preset from CDN which we used as a base provides more features than we need.
                // Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
                toolbar: [
                    {name: 'clipboard', items: ['Undo', 'Redo']},
                    {name: 'tools', items: ['Maximize']},
                    {name: 'editing', items: ['Scayt']},
                    {name: 'document', items: ['Source']}
                ]
            }
        )
    </script>

@endsection