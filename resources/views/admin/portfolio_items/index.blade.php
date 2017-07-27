@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span>PortfolioItems</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-portfolioitems-create'), 'Create New PortfolioItem', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')

   @if (!$portfolioItems->count())

        <h3>No PortfolioItem Entries Found.</h3>

    @else

        <table class="dvs-admin-table">
            <thead>
                <tr>
                        <th><?= Sort::link('portfolio_category_id') ?></th>
    <th><?= Sort::link('name') ?></th>
    <th><?= Sort::link('more_information') ?></th>

                    <th><?= Sort::clearSortLink('Clear Sort', array('class'=>'dvs-button dvs-button-small dvs-button-outset')) ?></th>
                </tr>
            </thead>

            <tbody>
                @foreach($portfolioItems as $portfolioItem)
                    <tr>
                                <td><?= $portfolioItem['portfolio_category_id'] ?></td>
        <td><?= $portfolioItem['name'] ?></td>
        <td><?= $portfolioItem['more_information'] ?></td>

                        <td class="dvs-tac dvs-button-group">
                            <a class="dvs-button dvs-button-small" href="<?= route('admin-portfolioitems-edit', $portfolioItem->id) ?>">Edit</a>
                            <?= Form::delete(route('admin-portfolioitems-destroy', $portfolioItem->id), 'Delete', null, array('class' => 'dvs-button dvs-button-small dvs-button-danger')) ?>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <td><?= $portfolioItems->appends(Input::except(['page']))->render() ?></td>
                </tr>
            </tfoot>
        </table>

    @endif

@stop

@section('js')
    <script>devise.require(['app/admin/admin'])</script>
@stop