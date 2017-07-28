    <div class="dvs-form-group">
        <?= Form::label('Portfolio Category Id') ?>
        <?= Form::select('portfolio_category_id', $portfolioCategories, null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Name') ?>
        <?= Form::text('name', null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Description') ?>
        <?= Form::textarea('description', null, ['class' => 'wysiwyg']) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Creation Date') ?>
        <?= Form::text('creation_date', null, ['class' => 'date-only']) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('More Information') ?>
        <?= Form::text('more_information', null, ['class' => 'wysiwyg']) ?>
    </div>
