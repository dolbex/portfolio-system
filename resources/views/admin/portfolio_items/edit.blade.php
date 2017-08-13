@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span> Editing Portfolio Item</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-portfolioitems-index'), 'All Portfolio Items', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')
    <div class="dvs-admin-form-horizontal">
        <?= Form::model($portfolioItem, array('method' => 'PUT', 'route' => array('admin-portfolioitems-update', $portfolioItem->id))) ?>

            @include('admin.portfolio_items._form-fields')

            <?= Form::submit('Update Portfolio Item', ['class' => 'dvs-button dvs-button-solid dvs-button-success']) ?>

        <?= Form::close() ?>
    </div>
@stop

@section('js')
    <script>
        devise.require(['../../../../../js/admin'])
    </script>
@stop
