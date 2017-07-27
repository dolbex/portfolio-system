@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span> Editing PortfolioItem</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-portfolioitems-index'), 'All PortfolioItems', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')
    <div class="dvs-admin-form-horizontal">
        <?= Form::model($portfolioItem, array('method' => 'PUT', 'route' => array('admin-portfolioitems-update', $portfolioitem->id))) ?>

            @include('admin.portfolio_items._form-fields')

            <?= Form::submit('Update PortfolioItem', ['class' => 'dvs-button dvs-button-solid dvs-button-success']) ?>

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