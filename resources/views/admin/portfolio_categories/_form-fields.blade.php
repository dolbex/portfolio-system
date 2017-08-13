    <div class="dvs-form-group">
        <?= Form::label('Name') ?>
        <?= Form::text('name', null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Slug (No spaces, all lower case and dashes)') ?>
        <?= Form::text('slug', null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Short Description') ?>
        <?= Form::textarea('short_description', null, ['class' => 'wysiwyg']) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Long Description') ?>
        <?= Form::textarea('long_description', null, ['class' => 'wysiwyg']) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Display Order (Number only)') ?>
        <?= Form::text('display_order', null, []) ?>
    </div>
