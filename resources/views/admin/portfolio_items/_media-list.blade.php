<hr />
    <div class="dvs-form-group">
        {{ Form::label('Media List') }}
        <button type="button" data-url="{{ URL::route('admin-portfolio-items-media-single-row') }}" class="dvs-button js-add-media-item">Add Media</button>
    </div>
    <table class="dvs-admin-table no-shadow" style="box-shadow:none;">
        <tbody id="media_target">
            @if(isset($portfolioItem))
                @foreach($portfolioItem->pages as $index => $portfolioItemMedia)
                    @include('admin.portfolio_items._media-single')
                @endforeach
            @endif
        </tbody>
    </table>
<hr />
