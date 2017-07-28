@extends('devise::admin.layouts.master')

@section('title')
  <div id="dvs-admin-title">
    <h1><span class=""></span>Portfolio Items</h1>
  </div>
@stop

@section('subnavigation')
  <div id="dvs-admin-actions">
    <?= link_to(URL::route('admin-portfolioitems-create'), 'Create New Portfolio Item', array('class' => 'dvs-button dvs-button-secondary')) ?>
  </div>
@stop

@section('main')

  @if (!$portfolioItems->count())

    <h3>No Portfolio Item Entries Found.</h3>

  @else

    <table class="dvs-admin-table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Category</th>
          <th>More Information</th>

          <th><?= Sort::clearSortLink('Clear Sort', array('class'=>'dvs-button dvs-button-small dvs-button-outset')) ?></th>
        </tr>
      </thead>

      <tbody>
        @foreach($portfolioItems as $portfolioItem)
          <tr>
            <td><?= $portfolioItem['name'] ?></td>
            <td><?= $portfolioItem->category->name ?></td>
            <td><?= $portfolioItem['more_information'] == 1 ? 'Yes' : 'No' ?></td>

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
