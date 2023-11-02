<header class="bg-dark d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="{{route('index')}}" class="text-decoration-none h4 link-danger">
        <span class="h4 text-danger pe-2">@lang('app.home')</span>
    </a>

    <ul class="nav nav-pills">
        <a class="nav-link dropdown-toggle link-danger" href="#" data-bs-toggle="dropdown" aria-expanded="true">@lang('app.categories')</a>
        <ul class="dropdown-menu bg-dark">
            @foreach($categories as $category)
                <li class="dropdown-item ps-0">
                    <a class="nav-link link-danger" href="{{ route('product.index', ['categories' => [$category->id]] ) }}">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>

        <a class="nav-link dropdown-toggle link-danger" href="#" data-bs-toggle="dropdown" aria-expanded="true">@lang('app.brands')</a>
        <ul class="dropdown-menu bg-dark">
            @foreach($brands as $brand)
                <li class="dropdown-item ps-0">
                    <a class="nav-link link-danger" href="{{ route('product.index', ['brands' => [$brand->id]] ) }}">{{$brand->name}}</a>
                </li>
            @endforeach
        </ul>

        <a class="nav-link dropdown-toggle link-danger" href="#" data-bs-toggle="dropdown" aria-expanded="true">@lang('app.sellers')</a>
        <ul class="dropdown-menu bg-dark">
            @foreach($sellers as $seller)
                <li class="dropdown-item ps-0">
                    <a class="nav-link link-danger" href="{{ route('product.index', ['sellers' => [$seller->id]] ) }}">{{$seller->name}}</a>
                </li>
            @endforeach
        </ul>

        <a class="nav-link dropdown-toggle link-info" href="#" data-bs-toggle="dropdown" aria-expanded="false">@lang('app.languages')</a>
        <ul class="dropdown-menu">
            <li class="dropdown-item">
                <a class="nav-link link-success" href="{{ route('locale', 'tm') }}">Türkmen</a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link link-danger" href="{{ route('locale', 'en') }}">English</a>
            </li>
            <li class="dropdown-item">
                <a class="nav-link link-primary" href="{{ route('locale', 'ru') }}">Русский</a>
            </li>
        </ul>
    </ul>
</header>