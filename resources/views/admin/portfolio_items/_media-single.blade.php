<tr>
    <td>
        {{ Form::hidden('portfolioItem[' . ((isset($index)) ? $index : $params['index']) . '][id]', (isset($portfolioItemMedia)) ? $portfolioItemMedia->id : null) }}
        {{ Form::text('portfolioItem[' . ((isset($index)) ? $index : $params['index']) . '][name]', (isset($portfolioItemMedia)) ? ($portfolioItemMedia->name . '('.$portfolioItemMedia->language->code.')') : null, array('placeholder' => 'Name')) }}
    </td>

    <td>
        <button type="button" data-url="{{ URL::route('dvs-events-page-single-row') }}" class="dvs-button dvs-button-small dvs-button-danger js-delete-page-item">Delete</button>
    </td>
</tr>
