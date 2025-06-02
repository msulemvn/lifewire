    <section class="storefront-product-section max-w-7xl mx-auto px-4 py-10 sm:px-6 lg:px-8" aria-label="Popular Products">
        <h2 class="text-3xl font-semibold text-center text-gray-900 mb-8">Top Rated Products</h2>

        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 woocommerce">
            @foreach($products as $product)
            <li class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 group relative flex flex-col">
                <a href="{{ $product['url'] }}" class="block flex-grow">
                    <div class="relative aspect-[3/4] overflow-hidden rounded-t-lg">
                        <img
                            src="{{ $product['image'] }}?w=324&h=432&crop=1"
                            alt="{{ $product['name'] }}"
                            class="w-full h-full object-cover absolute top-0 left-0 transition-opacity duration-300"
                            loading="lazy" />
                        @if($product['secondary_image'])
                        <img
                            src="{{ $product['secondary_image'] }}"
                            alt="{{ $product['name'] }}"
                            class="w-full h-full object-cover absolute top-0 left-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300"
                            loading="lazy" />
                        @endif
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 text-center mt-4 mx-4 mb-2 truncate">{{ $product['name'] }}</h3>
                    <span class="block text-center text-base font-semibold text-gray-900 mb-4">
                        £{{ number_format($product['price'], 2) }}
                    </span>
                </a>

                @if ($product['type'] === 'simple')
                <button
                    type="submit"
                    class="mt-auto mx-4 mb-4 py-2 px-4 rounded-md text-center bg-gray-200 text-gray-800
                hover:bg-gray-300 hover:shadow-md hover:scale-[1.02] active:bg-gray-400
                disabled:bg-gray-100 disabled:text-gray-400 disabled:cursor-not-allowed
                transition-all duration-150 ease-in-out"
                    aria-label="Add {{ $product['name'] }} to your cart"
                >
                    Add to Cart
                </button>
                @else
                <a
                    href="{{ $product['url'] }}"
                    class="mt-auto mx-4 mb-4 py-2 px-4 rounded-md text-center bg-gray-200 text-gray-800
                hover:bg-gray-300 hover:shadow-md hover:scale-[1.02] active:bg-gray-400
                transition-all duration-150 ease-in-out"
                    aria-label="Select options for {{ $product['name'] }}">
                    Select Options
                </a>
                @endif

            </li>
            @endforeach
        </ul>
    </section>