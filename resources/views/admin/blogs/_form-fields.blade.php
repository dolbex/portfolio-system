    <div class="dvs-form-group">
        <?= Form::label('Title') ?>
        <?= Form::text('title', null, []) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Introduction') ?>
        <?= Form::textarea('introduction', null, ['class' => 'wysiwyg']) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Content') ?>
        <?= Form::textarea('content', null, ['class' => 'wysiwyg']) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Publication Date') ?>
        <?= Form::text('publication_date', null, ['class' => 'datetime']) ?>
    </div>
    <div class="dvs-form-group">
        <?= Form::label('Main Image') ?>
        <?= Form::text('main_image', null, ['class' => 'image-browser']) ?>
    </div>
