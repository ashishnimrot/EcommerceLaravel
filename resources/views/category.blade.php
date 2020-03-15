<div class="col-sm-2 pb-3">
    <ul class="list-group mt-5">
        <li class="list-group-item {{ (request()->has('cat') ? '' : 'active') }}" aria-disabled="true">
            <a href="{{ route('home', request()->except('cat')) }} ">All Categories</a>
        </li>
        @foreach($categories as $category)
            <li class="list-group-item {{ ($category->id == request()->input('cat')) ? 'active' : '' }}" >
                <a href="{{ route('home',array_merge(request()->query(), ['cat' =>  $category->id ])) }} "> {{ $category->name }} </a>
            </li>
        @endforeach
    </ul>
</div>
