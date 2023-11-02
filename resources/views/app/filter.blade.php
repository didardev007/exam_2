<form action="{{ url()->current() }}">
    <div class="mb-3">
        <label for="categories" class="form-label fw-semibold text-danger">@lang('app.categories')</label>
        <select class="form-select form-select-sm" name="categories[]" id="categories">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ in_array($category->id, $f_categories) ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="brands" class="form-label fw-semibold text-danger">@lang('app.brands')</label>
        <select class="form-select form-select-sm" name="brands[]" id="brands">
            @foreach($brands as $brand)
                <option value="{{ $brand->id }}" {{ in_array($brand->id, $f_brands) ? 'selected' : '' }}>{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="sellers" class="form-label fw-semibold text-danger">@lang('app.sellers')</label>
        <select class="form-select form-select-sm" name="sellers[]" id="sellers">
            @foreach($sellers as $seller)
                <option value="{{ $seller->id }}" {{ in_array($seller->id, $f_sellers) ? 'selected' : '' }}>{{ $seller->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="sort" class="form-label fw-semibold text-danger">@lang('app.sort')</label>
        <select class="form-select form-select-sm" name="sort" id="sort">
            <option value="new-to-old" {{ 'new-to-old' == $f_sort ? 'selected' : '' }}>@lang('app.newToOld')</option>
            <option value="old-to-new" {{ 'old-to-new' == $f_sort ? 'selected' : '' }}>@lang('app.oldToNew')</option>
            <option value="low-to-high" {{ 'low-to-high' == $f_sort ? 'selected' : '' }}>@lang('app.lowToHigh')</option>
            <option value="high-to-low" {{ 'high-to-low' == $f_sort ? 'selected' : '' }}>@lang('app.highToLow')</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="perPage" class="form-label fw-semibold text-danger"></label>
        <select class="form-select form-select-sm" name="perPage" id="perPage">
            @foreach([15, 30, 60, 120] as $perPage)
                <option value="{{ $perPage }}" {{ $perPage == $f_perPage ? 'selected' : '' }}>{{ $perPage }}</option>
            @endforeach
        </select>
    </div>

    <div class="row g-3">
        <div class="col">
            <a href="{{ url()->current() }}" class="btn btn-secondary btn-sm w-100">
                @lang('app.clear')
            </a>
        </div>
        <div class="col">
            <button type="submit" class="btn btn-danger btn-sm w-100">
                <i class="bi-funnel"></i> @lang('app.filter')
            </button>
        </div>
    </div>
</form>