<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        //! ERTIGA
        Product::create([
            "image" => 'product-images/R-3.webp',
            "name" => "ALL NEW ERTIGA GL MT MC",
            "otr" => 253800000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/R-3.webp',
            "name" => "ALL NEW ERTIGA GL AT MC",
            "otr" => 264800000,
            "description" => null
        ]);
        
        Product::create([
            "image" => 'product-images/R-3.webp',
            "name" => "ALL NEW ERTIGA GX MT HYBRID",
            "otr" => 275700000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/R-3.webp',
            "name" => "ALL NEW ERTIGA GX AT HYBRID",
            "otr" => 286700000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/R-3.webp',
            "name" => "ALL NEW ERTIGA SS MT HYBRID",
            "otr" => 286600000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/R-3.webp',
            "name" => "ALL NEW ERTIGA SS AT HYBRID",
            "otr" => 297600000,
            "description" => null
        ]);

        //! XL7
        Product::create([
            "image" => 'product-images/XL7.webp',
            "name" => "XL7 ZETA MT MC",
            "otr" => 258100000,
            "description" => null
        ]);
        Product::create([
            "image" => 'product-images/XL7.webp',
            "name" => "XL7 ZETA AT MC",
            "otr" => 269100000, 
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/XL7.webp',
            "name" => "XL7 BETA MT HYBRID",
            "otr" => 265900000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/XL7.webp',
            "name" => "XL7 BETA AT HYBRID",
            "otr" => 296900000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/XL7.webp',
            "name" => "XL7 ALPHA MT HYBRID",
            "otr" => 295900000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/XL7.webp',
            "name" => "XL7 ALPHA AT HYBRID",
            "otr" => 306900000,
            "description" => null
        ]);

        //! IGNIS
        Product::create([
            "image" => 'product-images/Ignis.webp',
            "name" => "IGNIS EU4 GX MT",
            "otr" => 215000000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Ignis.webp',
            "name" => "IGNIS EU4 GX AT",
            "otr" => 225000000,
            "description" => null
        ]);

        //! S.PRESSO
        Product::create([
            "image" => 'product-images/S-presso.webp',
            "name" => "S. PRESSO MT",
            "otr" => 225000000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/S-presso.webp',
            "name" => "S. PRESSO AT",
            "otr" => 225000000,
            "description" => null
        ]);

        //! BALENO 
        Product::create([
            "image" => 'product-images/Baleno.webp',
            "name" => "NEW BALENO AT MC",
            "otr" => 284400000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Baleno.webp',
            "name" => "NEW BALENO MT",
            "otr" => 268500000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Baleno.webp',
            "name" => "NEW BALENO AT",
            "otr" => 280500000,
            "description" => null
        ]);

        //! VITARA
        Product::create([
            "image" => 'product-images/Grand-vitara-new.webp',
            "name" => "VITARA GL AT",
            "otr" => 362400000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Grand-vitara-new.webp',
            "name" => "VITARA GX AT",
            "otr" => 387400000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Grand-vitara-new.webp',
            "name" => "VITARA TWO TONE AT",
            "otr" => 390400000,
            "description" => null
        ]);

        //! CARRY
        Product::create([
            "image" => 'product-images/Carry.webp',
            "name" => "NEW CARRY PU FD",
            "otr" => 168500000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Carry.webp',
            "name" => "NEW CARRY PU FD AC PS",
            "otr" => 176500000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Carry.webp',
            "name" => "NEW CARRY PU WD",
            "otr" => 169500000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Carry.webp',
            "name" => "NEW CARRY PU WD AC PS",
            "otr" => 176500000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Carry.webp',
            "name" => "NEW CARRY CH BOX",
            "otr" => 196000000,
            "description" => null
        ]);

        Product::create([
            "image" => 'product-images/Carry.webp',
            "name" => "NEW CARRY CH AC PS BOX",
            "otr" => 204100000,
            "description" => null
        ]);

    }
}
