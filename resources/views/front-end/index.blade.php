@extends('front-end.layouts.main')
@section('content')
    <div id="carousell" class="flex justify-center items-center pt-16">
        @foreach ($carousell as $item)
            <div class="item">
                <img class="w-full object-cover" src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
            </div>
        @endforeach
    </div>

    <div id="product"
        class="flex flex-col lg:container mx-auto gap-6 lg:gap-8 justify-center items-center text-center mt-8 px-3">
        <div class="title"><span class="text-3xl lg:text-4xl font-bold text-black">Temukan Mobil Suzuki yang tepat
                untuk anda!</span></div>
        <div class="sub-title lg:w-1/2"><span class="text-base lg:text-lg font-base text-black">Temukan berbagai mobil
                pilihan Suzuki yang dirancang khusus dengan presisi melalui teknologi modern dan desain stylish sesuai
                gaya Anda.</span></div>
        <div class="title lg:w-1/2"><span class="text-2xl lg:text-3xl font-bold text-black">Berkendara bukan hanya
                sebuah perjalanan, namun cerita dan kebanggaan.</span></div>
    </div>

    @livewire('product-list')
    <section id="testimoni" class=" pt-16 pb-16 dark:bg-dark">
        <div class="container mx-auto">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h2 class="mb-4 text-3xl font-bold text-dark dark:text-white sm:text-4xl lg:text-5xl">Testimoni
                        Customers
                    </h2>
                    <p class="text-md font-medium md:text-lg">Apa Kata User Tentang Produk Kami?</p>
                </div>
            </div>
            <div class="flex flex-wrap ">
                @foreach ($testis as $item)
                    <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                        <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg dark:bg-slate-800">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->fullname }}"
                                class="w-full  h-64">
                            <div class="py-8 px-6">
                                <h3>
                                    <span
                                        class="mb-3 block truncate text-xl font-bold text-dark hover:text-primary dark:text-white">{{ $item->fullname }}</span>
                                </h3>
                                <p class="mb-6 text-base font-medium text-secondary">{{ $item->comment }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
