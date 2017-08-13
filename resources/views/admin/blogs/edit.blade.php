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
    <script>
        devise.require(['../../../../../js/admin'])
    </script>
@stop
