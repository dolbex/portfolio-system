@extends('devise::admin.layouts.master')

@section('title')
    <div id="dvs-admin-title">
        <h1><span class=""></span>Blogs</h1>
    </div>
@stop

@section('subnavigation')
    <div id="dvs-admin-actions">
        <?= link_to(URL::route('admin-blogs-create'), 'Create New Blog', array('class' => 'dvs-button dvs-button-secondary')) ?>
    </div>
@stop

@section('main')

   @if (!$blogs->count())

        <h3>No Blog Entries Found.</h3>

    @else

        <table class="dvs-admin-table">
            <thead>
                <tr>
                        <th><?= Sort::link('title') ?></th>
    <th><?= Sort::link('publication_date') ?></th>

                    <th><?= Sort::clearSortLink('Clear Sort', array('class'=>'dvs-button dvs-button-small dvs-button-outset')) ?></th>
                </tr>
            </thead>

            <tbody>
                @foreach($blogs as $blog)
                    <tr>
                                <td><?= $blog['title'] ?></td>
        <td><?= $blog['publication_date'] ?></td>

                        <td class="dvs-tac dvs-button-group">
                            <a class="dvs-button dvs-button-small" href="<?= route('admin-blogs-edit', $blog->id) ?>">Edit</a>
                            <?= Form::delete(route('admin-blogs-destroy', $blog->id), 'Delete', null, array('class' => 'dvs-button dvs-button-small dvs-button-danger')) ?>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <td><?= $blogs->appends(Input::except(['page']))->render() ?></td>
                </tr>
            </tfoot>
        </table>

    @endif

@stop

@section('js')
    <script>devise.require(['app/admin/admin'])</script>
@stop