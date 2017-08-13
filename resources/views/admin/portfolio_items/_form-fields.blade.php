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
        <?= Form::checkbox('more_information', true, null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('On Right? (Left by Default)') ?>
        <?= Form::checkbox('on_right', true, null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('On Top (Off to side by default)') ?>
        <?= Form::checkbox('on_top', true, null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Dark? (Light by default)') ?>
        <?= Form::checkbox('dark', true, null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Display Order (Number only / Required)') ?>
        <?= Form::text('display_order', null, []) ?>
    </div>

    @if(isset($portfolioItem))
    <image-select :media="{{ json_encode($portfolioItem->media) }}" fieldname="media"></image-select>
    @else
    <image-select :media="[]" fieldname="media"></image-select>
    @endif
