@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span> New Portfolio Item</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-portfolioitems-index'), 'All Portfolio Items', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')
    <div class="dvs-admin-form-horizontal" id="admin-app">
        <?= Form::open(array('method' => 'POST', 'route' => 'admin-portfolioitems-store')) ?>

            @include('admin.portfolio_items._form-fields')

            <?= Form::submit('Create Portfolio Item', ['class' => 'dvs-button dvs-button-solid dvs-button-success']) ?>
        <?= Form::close() ?>
    </div>
@stop

@section('js')
    <script src="{{ mix('/js/admin-app.js') }}"></script>
    <script>
        devise.require(['../../../../../js/admin'])
    </script>
@stop
