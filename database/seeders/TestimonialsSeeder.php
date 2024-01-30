<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'fullname'=> 'Customer',
            'comment'=> 'Saya sangat senang dengan pengalaman pembelian mobil Suzuki saya. Dealer sangat profesional dan membantu saya menemukan mobil yang sesuai dengan kebutuhan dan anggaran saya',
            'image'=> 'testimonial-images/testi-1.jpg',
        ]);

        Testimonial::create([
            'fullname'=> 'Customer',
            'comment'=> 'Kualitas ambulans Suzuki sungguh luar biasa. Kami merasa aman dan percaya sepenuhnya pada kendaraan ini untuk kebutuhan medis kami. Pilihan ini benar-benar memenuhi ekspektasi kami.',
            'image'=> 'testimonial-images/testi-2.jpg',
        ]);

        Testimonial::create([
            'fullname'=> 'Customer',
            'comment'=> 'Proses pembelian mobil Suzuki sangat mudah dan transparan. Salesman kami memberikan informasi rinci tentang berbagai model, memberikan uji coba berkendara, dan membantu kami dengan proses pembiayaan.',
            'image'=> 'testimonial-images/testi-3.jpg',
        ]);

        Testimonial::create([
            'fullname'=> 'Customer',
            'comment'=> 'Suzuki benar-benar memahami kebutuhan pelanggan. Mobil yang saya beli tidak hanya ramah lingkungan tapi juga ekonomis dalam hal konsumsi bahan bakar. Saya sangat merekomendasikan mobil Suzuki kepada semua orang.',
            'image'=> 'testimonial-images/testi-4.jpg',
        ]);
    }
}
    