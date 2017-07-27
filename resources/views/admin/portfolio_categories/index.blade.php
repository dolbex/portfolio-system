@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span>PortfolioCategories</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-portfoliocategories-create'), 'Create New PortfolioCategory', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')

   @if (!$portfolioCategories->count())

        <h3>No PortfolioCategory Entries Found.</h3>

    @else

        <table class="dvs-admin-table">
            <thead>
                <tr>
                        <th><?= Sort::link('name') ?></th>
    <th><?= Sort::link('display_order') ?></th>

                    <th><?= Sort::clearSortLink('Clear Sort', array('class'=>'dvs-button dvs-button-small dvs-button-outset')) ?></th>
                </tr>
            </thead>

            <tbody>
                @foreach($portfolioCategories as $portfolioCategory)
                    <tr>
                                <td><?= $portfolioCategory['name'] ?></td>
        <td><?= $portfolioCategory['display_order'] ?></td>

                        <td class="dvs-tac dvs-button-group">
                            <a class="dvs-button dvs-button-small" href="<?= route('admin-portfoliocategories-edit', $portfolioCategory->id) ?>">Edit</a>
                            <?= Form::delete(route('admin-portfoliocategories-destroy', $portfolioCategory->id), 'Delete', null, array('class' => 'dvs-button dvs-button-small dvs-button-danger')) ?>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <td><?= $portfolioCategories->appends(Input::except(['page']))->render() ?></td>
                </tr>
            </tfoot>
        </table>

    @endif

@stop

@section('js')
    <script>devise.require(['app/admin/admin'])</script>
@stop