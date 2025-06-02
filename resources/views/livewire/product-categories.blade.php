<section class="storefront-product-section storefront-popular-products max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8" aria-label="Popular Products">
    <h2 class="section-title text-3xl font-semibold text-center text-gray-900 my-8">Product Categories</h2>

    <ul class="products columns-3">
        @foreach($categories as $category)
        <li class="product-category product {{ $loop->first ? 'first' : ($loop->last ? 'last' : '') }}">
            <a href="{{ $category['url'] }}">
                <img src="{{ $category['image'] }}?w=324&h=432&crop=1" alt="{{ $category['name'] }}" width="324" height="432" />
                <h2 class="text-center text-lg font-medium">
                    {{ $category['name'] }} <span class="font-bold">({{ $category['count'] }})</span>
                </h2>
            </a>
        </li>
        @endforeach
    </ul>
</section>