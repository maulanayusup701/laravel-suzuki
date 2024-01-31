<div>
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 mt-8 lg:mt-20">
        @foreach ($products as $product)
            <div class="flex flex-col justify-center items-center gap-6 border border-slate-300 py-4 text-center">
                <span class="text-base lg:text-base font-bold text-black px-4">{{ $product->name }}</span>
                <img src="{{ '/storage/' . $product->image }}" alt="" class="lg:w-[350px] px-4">

                <div class="flex flex-col justify-center items-center gap-0 lg:gap-2">
                    <span class="text-sm lg:text-base text-black">Mulai Dari</span>
                    <div>
                        <span class="text-xl lg:text-2xl font-bold text-blue-900 italic">Rp</span>
                        <span
                            class="text-xl lg:text-3xl font-bold text-blue-900 italic">{{ number_format($product->otr, 0, ',', '.') }}</span>

                    </div>
                    <a href="https://wa.me/6287878844031?text=Hi%20Tami%2C%20info%20lebih%20lanjut%20tentang%20product%20{{ $product->name }}"
                        class="flex items-center justify-center gap-2 py-2 w-full px-4 bg-green-600 rounded-lg mt-4">
                        <span class="text-sm text-white font-medium ">Info Lebih Lanjut
                            <i class="bi bi-arrow-right"></i></a>
                    </span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-end px-4 lg:px-12 mt-4 lg:mt-6">
        <div class="w-[100px]">
            {{ $products->links('livewire.custom-pagination', ['scrollTo' => false]) }}
        </div>
    </div>
</div>
