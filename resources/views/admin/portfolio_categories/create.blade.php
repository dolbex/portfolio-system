@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span> New Portfolio Category</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-portfoliocategories-index'), 'All PortfolioCategories', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')
    <div class="dvs-admin-form-horizontal">
        <?= Form::open(array('method' => 'POST', 'route' => 'admin-portfoliocategories-store')) ?>

            @include('admin.portfolio_categories._form-fields')

            <?= Form::submit('Create Portfolio Category', ['class' => 'dvs-button dvs-button-solid dvs-button-success']) ?>
        <?= Form::close() ?>
    </div>
@stop

@section('js')
    <script>
        devise.require(['../../../../../js/admin'])
    </script>
@stop
