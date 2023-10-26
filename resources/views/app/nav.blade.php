<div class="container-xl">
    <header class="bg-dark d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{route('index')}}" class="text-decoration-none h4 link-danger">
            <span class="h4 text-danger pe-2"> Category </span>
        </a>

        <ul class="nav nav-pills">
            <a class="nav-link dropdown-toggle link-danger" href="#" data-bs-toggle="dropdown" aria-expanded="true"></a>
            <ul class="dropdown-menu bg-dark">
                @foreach($categories as $category)
                    <li class="dropdown-item ps-0">
                        <a class="nav-link link-danger" href="{{ route('product.index', ['categories' => [$category->id]] ) }}">{{$category->name}}</a>
                    </li>
                @endforeach
            </ul>
        </ul>
    </header>
</div>