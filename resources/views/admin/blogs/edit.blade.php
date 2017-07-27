@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span> Editing Blog</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-blogs-index'), 'All Blogs', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')
    <div class="dvs-admin-form-horizontal">
        <?= Form::model($blog, array('method' => 'PUT', 'route' => array('admin-blogs-update', $blog->id))) ?>

            @include('admin.blogs._form-fields')

            <?= Form::submit('Update Blog', ['class' => 'dvs-button dvs-button-solid dvs-button-success']) ?>

        <?= Form::close() ?>
    </div>
@stop

@section('js')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    {{-- CKEditor - Uncomment if you want to use ckeditor --}}
    {{-- 
    <script src="{{ URL::asset('/js/lib/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ URL::asset('/js/lib/ckeditor/adapters/jquery.js') }}"></script>

    <script>
        // Or you can put this in an external javascript file
        $( document ).ready( function() {

            var config =
            {
                height: 180,
                width: '76%',
                linkShowAdvancedTab: false,
                scayt_autoStartup: true,
                enterMode: Number(2),
                toolbar: [ ['Styles', 'Bold', 'Italic', 'Underline', '-', 'NumberedList', 'BulletedList'],
                        ['Image'],
                    ['Link', 'Unlink'],
                    ['Undo', 'Redo', '-', 'SelectAll']]

            };

            $( '.ckeditor' ).ckeditor(config);

        });
    </script>
    --}}
@stop