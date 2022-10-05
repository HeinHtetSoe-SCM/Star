<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StarPhone;

class StarPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $star_phones = [
            new StarPhone(
                [
                    'id' => 1,
                    'title' => 'Standard'
                ]
            ),
            new StarPhone(
                [
                    'id' => 2,
                    'title' => 'Pro'
                ]
            )
        ];

        foreach($star_phones as $star_phone) {
            $star_phone->save();
        }

        $standard = StarPhone::find(1);
        $pro = StarPhone::find(2);

        // Star Phone Standard Version
        $standard->addChild(
            $star_phone_1 = new StarPhone(
                [
                    'title' => 'Star Phone 1'
                ]
            )
        );

        $standard->addChild(
            $star_phone_1_plus = new StarPhone(
                [
                    'title' => 'Star Phone 1 Plus'
                ]
            )
        );

        // Star Phone Pro Version
        $pro->addChild(
            $star_phone_1_pro = new StarPhone(
                [
                    'title' => 'Star Phone 1 Pro'
                ]
            )
        );
        
        $pro->addChild(
            $star_phone_1_pro_max = new StarPhone(
                [
                    'title' => 'Star Phone 1 Pro Max'
                ]
            )
        );

        // Star Phone 1
        $star_phone_1->addChild(
            $star_phone_1_blue = new StarPhone(
                [
                    'title' => 'Blue'
                ]
            )
        );

        $star_phone_1->addChild(
            $star_phone_1_purple = new StarPhone(
                [
                    'title' => 'Purple'
                ]
            )
        );

        $star_phone_1->addChild(
            $star_phone_1_midnight = new StarPhone(
                [
                    'title' => 'MidNight'
                ]
            )
        );

        $star_phone_1->addChild(
            $star_phone_1_starlight = new StarPhone(
                [
                    'title' => 'StarLight'
                ]
            )
        );

        $star_phone_1->addChild(
            $star_phone_1_red = new StarPhone(
                [
                    'title' => 'Red'
                ]
            )
        );

        $star_phone_1_blue->addChild(
            $star_phone_1_blue_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_blue->addChild(
            $star_phone_1_blue_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_blue->addChild(
            $star_phone_1_blue_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_blue->addChild(
            $star_phone_1_blue_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_purple->addChild(
            $star_phone_1_purple_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_purple->addChild(
            $star_phone_1_purple_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_purple->addChild(
            $star_phone_1_purple_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_purple->addChild(
            $star_phone_1_purple_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_midnight->addChild(
            $star_phone_1_midnight_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_midnight->addChild(
            $star_phone_1_midnight_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_midnight->addChild(
            $star_phone_1_midnight_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_midnight->addChild(
            $star_phone_1_midnight_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_starlight->addChild(
            $star_phone_1_starlight_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_starlight->addChild(
            $star_phone_1_starlight_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_starlight->addChild(
            $star_phone_1_starlight_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_starlight->addChild(
            $star_phone_1_starlight_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_red->addChild(
            $star_phone_1_red_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_red->addChild(
            $star_phone_1_red_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_red->addChild(
            $star_phone_1_red_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_red->addChild(
            $star_phone_1_red_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_blue_128->addChild(
            $star_phone_1_blue_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );

        $star_phone_1_blue_128->addChild(
            $star_phone_1_blue_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_purple_128->addChild(
            $star_phone_1_purple_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_purple_128->addChild(
            $star_phone_1_purple_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_midnight_128->addChild(
            $star_phone_1_midnight_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_midnight_128->addChild(
            $star_phone_1_midnight_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_starlight_128->addChild(
            $star_phone_1_starlight_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_starlight_128->addChild(
            $star_phone_1_starlight_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_red_128->addChild(
            $star_phone_1_red_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_red_128->addChild(
            $star_phone_1_red_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_blue_256->addChild(
            $star_phone_1_blue_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_blue_256->addChild(
            $star_phone_1_blue_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_purple_256->addChild(
            $star_phone_1_purple_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_purple_256->addChild(
            $star_phone_1_purple_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_midnight_256->addChild(
            $star_phone_1_midnight_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_midnight_256->addChild(
            $star_phone_1_midnight_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_starlight_256->addChild(
            $star_phone_1_starlight_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_starlight_256->addChild(
            $star_phone_1_starlight_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_red_256->addChild(
            $star_phone_1_red_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_red_256->addChild(
            $star_phone_1_red_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_blue_512->addChild(
            $star_phone_1_blue_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_blue_512->addChild(
            $star_phone_1_blue_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_purple_512->addChild(
            $star_phone_1_purple_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_purple_512->addChild(
            $star_phone_1_purple_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_midnight_512->addChild(
            $star_phone_1_midnight_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_midnight_512->addChild(
            $star_phone_1_midnight_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_starlight_512->addChild(
            $star_phone_1_starlight_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_starlight_512->addChild(
            $star_phone_1_starlight_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_red_512->addChild(
            $star_phone_1_red_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_red_512->addChild(
            $star_phone_1_red_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_blue_1024->addChild(
            $star_phone_1_blue_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_blue_1024->addChild(
            $star_phone_1_blue_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_purple_1024->addChild(
            $star_phone_1_purple_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_purple_1024->addChild(
            $star_phone_1_purple_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_midnight_1024->addChild(
            $star_phone_1_midnight_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_midnight_1024->addChild(
            $star_phone_1_midnight_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_starlight_1024->addChild(
            $star_phone_1_starlight_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_starlight_1024->addChild(
            $star_phone_1_starlight_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_red_1024->addChild(
            $star_phone_1_red_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_red_1024->addChild(
            $star_phone_1_red_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn->addChild(
            $star_phone_1_blue_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn->addChild(
            $star_phone_1_blue_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn->addChild(
            $star_phone_1_blue_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn->addChild(
            $star_phone_1_blue_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn->addChild(
            $star_phone_1_blue_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn->addChild(
            $star_phone_1_blue_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn->addChild(
            $star_phone_1_blue_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn->addChild(
            $star_phone_1_blue_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn->addChild(
            $star_phone_1_blue_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn->addChild(
            $star_phone_1_blue_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn->addChild(
            $star_phone_1_blue_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn->addChild(
            $star_phone_1_blue_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn->addChild(
            $star_phone_1_purple_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn->addChild(
            $star_phone_1_purple_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn->addChild(
            $star_phone_1_purple_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn->addChild(
            $star_phone_1_purple_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn->addChild(
            $star_phone_1_purple_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn->addChild(
            $star_phone_1_purple_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn->addChild(
            $star_phone_1_purple_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn->addChild(
            $star_phone_1_purple_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn->addChild(
            $star_phone_1_purple_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn->addChild(
            $star_phone_1_purple_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn->addChild(
            $star_phone_1_purple_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn->addChild(
            $star_phone_1_purple_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn->addChild(
            $star_phone_1_midnight_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn->addChild(
            $star_phone_1_midnight_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn->addChild(
            $star_phone_1_midnight_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn->addChild(
            $star_phone_1_midnight_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn->addChild(
            $star_phone_1_midnight_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn->addChild(
            $star_phone_1_midnight_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn->addChild(
            $star_phone_1_midnight_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn->addChild(
            $star_phone_1_midnight_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn->addChild(
            $star_phone_1_midnight_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn->addChild(
            $star_phone_1_midnight_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn->addChild(
            $star_phone_1_midnight_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn->addChild(
            $star_phone_1_midnight_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn->addChild(
            $star_phone_1_starlight_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn->addChild(
            $star_phone_1_starlight_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn->addChild(
            $star_phone_1_starlight_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn->addChild(
            $star_phone_1_starlight_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn->addChild(
            $star_phone_1_starlight_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn->addChild(
            $star_phone_1_starlight_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn->addChild(
            $star_phone_1_starlight_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn->addChild(
            $star_phone_1_starlight_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn->addChild(
            $star_phone_1_starlight_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn->addChild(
            $star_phone_1_starlight_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn->addChild(
            $star_phone_1_starlight_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn->addChild(
            $star_phone_1_starlight_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn->addChild(
            $star_phone_1_red_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn->addChild(
            $star_phone_1_red_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn->addChild(
            $star_phone_1_red_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn->addChild(
            $star_phone_1_red_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn->addChild(
            $star_phone_1_red_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn->addChild(
            $star_phone_1_red_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn->addChild(
            $star_phone_1_red_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn->addChild(
            $star_phone_1_red_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn->addChild(
            $star_phone_1_red_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn->addChild(
            $star_phone_1_red_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn->addChild(
            $star_phone_1_red_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn->addChild(
            $star_phone_1_red_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn_iPhone->addChild(
            $star_phone_1_blue_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn_iPhone->addChild(
            $star_phone_1_blue_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn_galaxy->addChild(
            $star_phone_1_blue_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn_galaxy->addChild(
            $star_phone_1_blue_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn_pixel->addChild(
            $star_phone_1_blue_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_128_tradeIn_pixel->addChild(
            $star_phone_1_blue_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn_iPhone->addChild(
            $star_phone_1_blue_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn_iPhone->addChild(
            $star_phone_1_blue_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn_galaxy->addChild(
            $star_phone_1_blue_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn_galaxy->addChild(
            $star_phone_1_blue_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn_pixel->addChild(
            $star_phone_1_blue_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_256_tradeIn_pixel->addChild(
            $star_phone_1_blue_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn_iPhone->addChild(
            $star_phone_1_blue_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn_iPhone->addChild(
            $star_phone_1_blue_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn_galaxy->addChild(
            $star_phone_1_blue_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn_galaxy->addChild(
            $star_phone_1_blue_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn_pixel->addChild(
            $star_phone_1_blue_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_512_tradeIn_pixel->addChild(
            $star_phone_1_blue_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn_iPhone->addChild(
            $star_phone_1_blue_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn_iPhone->addChild(
            $star_phone_1_blue_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn_galaxy->addChild(
            $star_phone_1_blue_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn_galaxy->addChild(
            $star_phone_1_blue_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn_pixel->addChild(
            $star_phone_1_blue_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_1024_tradeIn_pixel->addChild(
            $star_phone_1_blue_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );
        
        $star_phone_1_purple_128_tradeIn_iPhone->addChild(
            $star_phone_1_purple_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn_iPhone->addChild(
            $star_phone_1_purple_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn_galaxy->addChild(
            $star_phone_1_purple_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn_galaxy->addChild(
            $star_phone_1_purple_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn_pixel->addChild(
            $star_phone_1_purple_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_128_tradeIn_pixel->addChild(
            $star_phone_1_purple_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn_iPhone->addChild(
            $star_phone_1_purple_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn_iPhone->addChild(
            $star_phone_1_purple_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn_galaxy->addChild(
            $star_phone_1_purple_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn_galaxy->addChild(
            $star_phone_1_purple_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn_pixel->addChild(
            $star_phone_1_purple_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_256_tradeIn_pixel->addChild(
            $star_phone_1_purple_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn_iPhone->addChild(
            $star_phone_1_purple_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn_iPhone->addChild(
            $star_phone_1_purple_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn_galaxy->addChild(
            $star_phone_1_purple_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn_galaxy->addChild(
            $star_phone_1_purple_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn_pixel->addChild(
            $star_phone_1_purple_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_512_tradeIn_pixel->addChild(
            $star_phone_1_purple_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn_iPhone->addChild(
            $star_phone_1_purple_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn_iPhone->addChild(
            $star_phone_1_purple_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn_galaxy->addChild(
            $star_phone_1_purple_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn_galaxy->addChild(
            $star_phone_1_purple_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn_pixel->addChild(
            $star_phone_1_purple_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_1024_tradeIn_pixel->addChild(
            $star_phone_1_purple_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn_pixel->addChild(
            $star_phone_1_midnight_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_128_tradeIn_pixel->addChild(
            $star_phone_1_midnight_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn_pixel->addChild(
            $star_phone_1_midnight_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_256_tradeIn_pixel->addChild(
            $star_phone_1_midnight_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn_pixel->addChild(
            $star_phone_1_midnight_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_512_tradeIn_pixel->addChild(
            $star_phone_1_midnight_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_midnight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_midnight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn_pixel->addChild(
            $star_phone_1_midnight_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_1024_tradeIn_pixel->addChild(
            $star_phone_1_midnight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn_pixel->addChild(
            $star_phone_1_starlight_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_128_tradeIn_pixel->addChild(
            $star_phone_1_starlight_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn_pixel->addChild(
            $star_phone_1_starlight_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_256_tradeIn_pixel->addChild(
            $star_phone_1_starlight_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn_pixel->addChild(
            $star_phone_1_starlight_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_512_tradeIn_pixel->addChild(
            $star_phone_1_starlight_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_starlight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_starlight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn_pixel->addChild(
            $star_phone_1_starlight_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_1024_tradeIn_pixel->addChild(
            $star_phone_1_starlight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn_iPhone->addChild(
            $star_phone_1_red_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn_iPhone->addChild(
            $star_phone_1_red_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn_galaxy->addChild(
            $star_phone_1_red_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn_galaxy->addChild(
            $star_phone_1_red_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn_pixel->addChild(
            $star_phone_1_red_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_128_tradeIn_pixel->addChild(
            $star_phone_1_red_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn_iPhone->addChild(
            $star_phone_1_red_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn_iPhone->addChild(
            $star_phone_1_red_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn_galaxy->addChild(
            $star_phone_1_red_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn_galaxy->addChild(
            $star_phone_1_red_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn_pixel->addChild(
            $star_phone_1_red_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_256_tradeIn_pixel->addChild(
            $star_phone_1_red_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn_iPhone->addChild(
            $star_phone_1_red_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn_iPhone->addChild(
            $star_phone_1_red_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn_galaxy->addChild(
            $star_phone_1_red_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn_galaxy->addChild(
            $star_phone_1_red_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn_pixel->addChild(
            $star_phone_1_red_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_512_tradeIn_pixel->addChild(
            $star_phone_1_red_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn_iPhone->addChild(
            $star_phone_1_red_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn_iPhone->addChild(
            $star_phone_1_red_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn_galaxy->addChild(
            $star_phone_1_red_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn_galaxy->addChild(
            $star_phone_1_red_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn_pixel->addChild(
            $star_phone_1_red_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_1024_tradeIn_pixel->addChild(
            $star_phone_1_red_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_128_noTradeIn->addChild(
            $star_phone_1_blue_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_128_noTradeIn->addChild(
            $star_phone_1_blue_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_256_noTradeIn->addChild(
            $star_phone_1_blue_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_256_noTradeIn->addChild(
            $star_phone_1_blue_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_512_noTradeIn->addChild(
            $star_phone_1_blue_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_512_noTradeIn->addChild(
            $star_phone_1_blue_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_blue_1024_noTradeIn->addChild(
            $star_phone_1_blue_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_blue_1024_noTradeIn->addChild(
            $star_phone_1_blue_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_128_noTradeIn->addChild(
            $star_phone_1_purple_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_128_noTradeIn->addChild(
            $star_phone_1_purple_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_256_noTradeIn->addChild(
            $star_phone_1_purple_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_256_noTradeIn->addChild(
            $star_phone_1_purple_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_512_noTradeIn->addChild(
            $star_phone_1_purple_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_512_noTradeIn->addChild(
            $star_phone_1_purple_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_purple_1024_noTradeIn->addChild(
            $star_phone_1_purple_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_purple_1024_noTradeIn->addChild(
            $star_phone_1_purple_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_128_noTradeIn->addChild(
            $star_phone_1_midnight_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_128_noTradeIn->addChild(
            $star_phone_1_midnight_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_256_noTradeIn->addChild(
            $star_phone_1_midnight_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_256_noTradeIn->addChild(
            $star_phone_1_midnight_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_512_noTradeIn->addChild(
            $star_phone_1_midnight_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_512_noTradeIn->addChild(
            $star_phone_1_midnight_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_midnight_1024_noTradeIn->addChild(
            $star_phone_1_midnight_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_midnight_1024_noTradeIn->addChild(
            $star_phone_1_midnight_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_128_noTradeIn->addChild(
            $star_phone_1_starlight_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_128_noTradeIn->addChild(
            $star_phone_1_starlight_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_256_noTradeIn->addChild(
            $star_phone_1_starlight_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_256_noTradeIn->addChild(
            $star_phone_1_starlight_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_512_noTradeIn->addChild(
            $star_phone_1_starlight_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_512_noTradeIn->addChild(
            $star_phone_1_starlight_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_starlight_1024_noTradeIn->addChild(
            $star_phone_1_starlight_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_starlight_1024_noTradeIn->addChild(
            $star_phone_1_starlight_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_128_noTradeIn->addChild(
            $star_phone_1_red_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_128_noTradeIn->addChild(
            $star_phone_1_red_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_256_noTradeIn->addChild(
            $star_phone_1_red_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_256_noTradeIn->addChild(
            $star_phone_1_red_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_512_noTradeIn->addChild(
            $star_phone_1_red_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_512_noTradeIn->addChild(
            $star_phone_1_red_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_red_1024_noTradeIn->addChild(
            $star_phone_1_red_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_red_1024_noTradeIn->addChild(
            $star_phone_1_red_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

                // Star Phone 1 Plus
                $star_phone_1_plus->addChild(
                    $star_phone_1_plus_blue = new StarPhone(
                        [
                            'title' => 'Blue'
                        ]
                    )
                );
        
                $star_phone_1_plus->addChild(
                    $star_phone_1_plus_purple = new StarPhone(
                        [
                            'title' => 'Purple'
                        ]
                    )
                );
        
                $star_phone_1_plus->addChild(
                    $star_phone_1_plus_midnight = new StarPhone(
                        [
                            'title' => 'MidNight'
                        ]
                    )
                );
        
                $star_phone_1_plus->addChild(
                    $star_phone_1_plus_starlight = new StarPhone(
                        [
                            'title' => 'StarLight'
                        ]
                    )
                );
        
                $star_phone_1_plus->addChild(
                    $star_phone_1_plus_red = new StarPhone(
                        [
                            'title' => 'Red'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue->addChild(
                    $star_phone_1_plus_blue_128 = new StarPhone(
                        [
                            'title' => '128GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue->addChild(
                    $star_phone_1_plus_blue_256 = new StarPhone(
                        [
                            'title' => '256GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue->addChild(
                    $star_phone_1_plus_blue_512 = new StarPhone(
                        [
                            'title' => '512GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue->addChild(
                    $star_phone_1_plus_blue_1024 = new StarPhone(
                        [
                            'title' => '1TB'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple->addChild(
                    $star_phone_1_plus_purple_128 = new StarPhone(
                        [
                            'title' => '128GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple->addChild(
                    $star_phone_1_plus_purple_256 = new StarPhone(
                        [
                            'title' => '256GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple->addChild(
                    $star_phone_1_plus_purple_512 = new StarPhone(
                        [
                            'title' => '512GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple->addChild(
                    $star_phone_1_plus_purple_1024 = new StarPhone(
                        [
                            'title' => '1TB'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight->addChild(
                    $star_phone_1_plus_midnight_128 = new StarPhone(
                        [
                            'title' => '128GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight->addChild(
                    $star_phone_1_plus_midnight_256 = new StarPhone(
                        [
                            'title' => '256GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight->addChild(
                    $star_phone_1_plus_midnight_512 = new StarPhone(
                        [
                            'title' => '512GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight->addChild(
                    $star_phone_1_plus_midnight_1024 = new StarPhone(
                        [
                            'title' => '1TB'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight->addChild(
                    $star_phone_1_plus_starlight_128 = new StarPhone(
                        [
                            'title' => '128GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight->addChild(
                    $star_phone_1_plus_starlight_256 = new StarPhone(
                        [
                            'title' => '256GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight->addChild(
                    $star_phone_1_plus_starlight_512 = new StarPhone(
                        [
                            'title' => '512GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight->addChild(
                    $star_phone_1_plus_starlight_1024 = new StarPhone(
                        [
                            'title' => '1TB'
                        ]
                    )
                );
        
                $star_phone_1_plus_red->addChild(
                    $star_phone_1_plus_red_128 = new StarPhone(
                        [
                            'title' => '128GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_red->addChild(
                    $star_phone_1_plus_red_256 = new StarPhone(
                        [
                            'title' => '256GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_red->addChild(
                    $star_phone_1_plus_red_512 = new StarPhone(
                        [
                            'title' => '512GB'
                        ]
                    )
                );
        
                $star_phone_1_plus_red->addChild(
                    $star_phone_1_plus_red_1024 = new StarPhone(
                        [
                            'title' => '1TB'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128->addChild(
                    $star_phone_1_plus_blue_128_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128->addChild(
                    $star_phone_1_plus_blue_128_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128->addChild(
                    $star_phone_1_plus_purple_128_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_purple_128->addChild(
                    $star_phone_1_plus_purple_128_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_midnight_128->addChild(
                    $star_phone_1_plus_midnight_128_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_starlight_128->addChild(
                    $star_phone_1_plus_starlight_128_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128->addChild(
                    $star_phone_1_plus_red_128_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_red_128->addChild(
                    $star_phone_1_plus_red_128_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256->addChild(
                    $star_phone_1_plus_blue_256_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_blue_256->addChild(
                    $star_phone_1_plus_blue_256_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256->addChild(
                    $star_phone_1_plus_purple_256_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_purple_256->addChild(
                    $star_phone_1_plus_purple_256_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_midnight_256->addChild(
                    $star_phone_1_plus_midnight_256_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_starlight_256->addChild(
                    $star_phone_1_plus_starlight_256_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256->addChild(
                    $star_phone_1_plus_red_256_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_red_256->addChild(
                    $star_phone_1_plus_red_256_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512->addChild(
                    $star_phone_1_plus_blue_512_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_blue_512->addChild(
                    $star_phone_1_plus_blue_512_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512->addChild(
                    $star_phone_1_plus_purple_512_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_purple_512->addChild(
                    $star_phone_1_plus_purple_512_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_midnight_512->addChild(
                    $star_phone_1_plus_midnight_512_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_starlight_512->addChild(
                    $star_phone_1_plus_starlight_512_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512->addChild(
                    $star_phone_1_plus_red_512_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_red_512->addChild(
                    $star_phone_1_plus_red_512_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_blue_1024->addChild(
                    $star_phone_1_plus_blue_1024_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_purple_1024->addChild(
                    $star_phone_1_plus_purple_1024_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_midnight_1024->addChild(
                    $star_phone_1_plus_midnight_1024_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_starlight_1024->addChild(
                    $star_phone_1_plus_starlight_1024_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024->addChild(
                    $star_phone_1_plus_red_1024_tradeIn = new StarPhone(
                        [
                            'title' => 'Trade In'
                        ]
                    )
                );
                
                $star_phone_1_plus_red_1024->addChild(
                    $star_phone_1_plus_red_1024_noTradeIn = new StarPhone(
                        [
                            'title' => 'No Trade In'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn->addChild(
                    $star_phone_1_plus_red_128_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn->addChild(
                    $star_phone_1_plus_red_128_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn->addChild(
                    $star_phone_1_plus_red_128_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn->addChild(
                    $star_phone_1_plus_red_256_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn->addChild(
                    $star_phone_1_plus_red_256_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn->addChild(
                    $star_phone_1_plus_red_256_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn->addChild(
                    $star_phone_1_plus_red_512_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn->addChild(
                    $star_phone_1_plus_red_512_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn->addChild(
                    $star_phone_1_plus_red_512_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_iPhone = new StarPhone(
                        [
                            'title' => 'Iphone'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_galaxy = new StarPhone(
                        [
                            'title' => 'Galaxy'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_pixel = new StarPhone(
                        [
                            'title' => 'Pixel'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_128_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_256_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_512_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_blue_1024_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
                
                $star_phone_1_plus_purple_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_128_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_256_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_512_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_purple_1024_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_128_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_256_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_512_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_midnight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_128_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_256_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_512_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_starlight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_128_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_128_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_128_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_128_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_128_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_128_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_256_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_256_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_256_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_256_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_256_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_256_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_512_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_512_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_512_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_512_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_512_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_512_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_iPhone_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn_iPhone->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_galaxy_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn_galaxy->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_pixel_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_tradeIn_pixel->addChild(
                    $star_phone_1_plus_red_1024_tradeIn_pixel_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_noTradeIn->addChild(
                    $star_phone_1_plus_blue_128_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_128_noTradeIn->addChild(
                    $star_phone_1_plus_blue_128_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_noTradeIn->addChild(
                    $star_phone_1_plus_blue_256_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_256_noTradeIn->addChild(
                    $star_phone_1_plus_blue_256_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_noTradeIn->addChild(
                    $star_phone_1_plus_blue_512_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_512_noTradeIn->addChild(
                    $star_phone_1_plus_blue_512_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_noTradeIn->addChild(
                    $star_phone_1_plus_blue_1024_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_blue_1024_noTradeIn->addChild(
                    $star_phone_1_plus_blue_1024_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_noTradeIn->addChild(
                    $star_phone_1_plus_purple_128_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_128_noTradeIn->addChild(
                    $star_phone_1_plus_purple_128_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_noTradeIn->addChild(
                    $star_phone_1_plus_purple_256_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_256_noTradeIn->addChild(
                    $star_phone_1_plus_purple_256_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_noTradeIn->addChild(
                    $star_phone_1_plus_purple_512_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_512_noTradeIn->addChild(
                    $star_phone_1_plus_purple_512_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_noTradeIn->addChild(
                    $star_phone_1_plus_purple_1024_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_purple_1024_noTradeIn->addChild(
                    $star_phone_1_plus_purple_1024_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_128_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_128_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_128_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_256_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_256_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_256_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_512_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_512_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_512_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_1024_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_midnight_1024_noTradeIn->addChild(
                    $star_phone_1_plus_midnight_1024_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_128_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_128_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_128_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_256_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_256_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_256_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_512_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_512_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_512_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_1024_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_starlight_1024_noTradeIn->addChild(
                    $star_phone_1_plus_starlight_1024_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_noTradeIn->addChild(
                    $star_phone_1_plus_red_128_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_128_noTradeIn->addChild(
                    $star_phone_1_plus_red_128_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_noTradeIn->addChild(
                    $star_phone_1_plus_red_256_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_256_noTradeIn->addChild(
                    $star_phone_1_plus_red_256_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_noTradeIn->addChild(
                    $star_phone_1_plus_red_512_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_512_noTradeIn->addChild(
                    $star_phone_1_plus_red_512_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_noTradeIn->addChild(
                    $star_phone_1_plus_red_1024_noTradeIn_payNow = new StarPhone(
                        [
                            'title' => 'Pay Now'
                        ]
                    )
                );
        
                $star_phone_1_plus_red_1024_noTradeIn->addChild(
                    $star_phone_1_plus_red_1024_noTradeIn_payMonthly = new StarPhone(
                        [
                            'title' => 'Pay Monthly'
                        ]
                    )
                );

        // Star Phone 1 Pro
        $star_phone_1_pro->addChild(
            $star_phone_1_pro_blue = new StarPhone(
                [
                    'title' => 'Blue'
                ]
            )
        );

        $star_phone_1_pro->addChild(
            $star_phone_1_pro_purple = new StarPhone(
                [
                    'title' => 'Purple'
                ]
            )
        );

        $star_phone_1_pro->addChild(
            $star_phone_1_pro_midnight = new StarPhone(
                [
                    'title' => 'MidNight'
                ]
            )
        );

        $star_phone_1_pro->addChild(
            $star_phone_1_pro_starlight = new StarPhone(
                [
                    'title' => 'StarLight'
                ]
            )
        );

        $star_phone_1_pro->addChild(
            $star_phone_1_pro_red = new StarPhone(
                [
                    'title' => 'Red'
                ]
            )
        );

        $star_phone_1_pro_blue->addChild(
            $star_phone_1_pro_blue_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_blue->addChild(
            $star_phone_1_pro_blue_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_blue->addChild(
            $star_phone_1_pro_blue_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_blue->addChild(
            $star_phone_1_pro_blue_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_purple->addChild(
            $star_phone_1_pro_purple_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_purple->addChild(
            $star_phone_1_pro_purple_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_purple->addChild(
            $star_phone_1_pro_purple_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_purple->addChild(
            $star_phone_1_pro_purple_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_midnight->addChild(
            $star_phone_1_pro_midnight_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_midnight->addChild(
            $star_phone_1_pro_midnight_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_midnight->addChild(
            $star_phone_1_pro_midnight_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_midnight->addChild(
            $star_phone_1_pro_midnight_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_starlight->addChild(
            $star_phone_1_pro_starlight_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_starlight->addChild(
            $star_phone_1_pro_starlight_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_starlight->addChild(
            $star_phone_1_pro_starlight_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_starlight->addChild(
            $star_phone_1_pro_starlight_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_red->addChild(
            $star_phone_1_pro_red_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_red->addChild(
            $star_phone_1_pro_red_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_red->addChild(
            $star_phone_1_pro_red_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_red->addChild(
            $star_phone_1_pro_red_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_blue_128->addChild(
            $star_phone_1_pro_blue_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );

        $star_phone_1_pro_blue_128->addChild(
            $star_phone_1_pro_blue_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_purple_128->addChild(
            $star_phone_1_pro_purple_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_purple_128->addChild(
            $star_phone_1_pro_purple_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_midnight_128->addChild(
            $star_phone_1_pro_midnight_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_midnight_128->addChild(
            $star_phone_1_pro_midnight_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_starlight_128->addChild(
            $star_phone_1_pro_starlight_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_starlight_128->addChild(
            $star_phone_1_pro_starlight_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_red_128->addChild(
            $star_phone_1_pro_red_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_red_128->addChild(
            $star_phone_1_pro_red_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_blue_256->addChild(
            $star_phone_1_pro_blue_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_blue_256->addChild(
            $star_phone_1_pro_blue_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_purple_256->addChild(
            $star_phone_1_pro_purple_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_purple_256->addChild(
            $star_phone_1_pro_purple_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_midnight_256->addChild(
            $star_phone_1_pro_midnight_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_midnight_256->addChild(
            $star_phone_1_pro_midnight_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_starlight_256->addChild(
            $star_phone_1_pro_starlight_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_starlight_256->addChild(
            $star_phone_1_pro_starlight_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_red_256->addChild(
            $star_phone_1_pro_red_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_red_256->addChild(
            $star_phone_1_pro_red_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_blue_512->addChild(
            $star_phone_1_pro_blue_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_blue_512->addChild(
            $star_phone_1_pro_blue_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_purple_512->addChild(
            $star_phone_1_pro_purple_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_purple_512->addChild(
            $star_phone_1_pro_purple_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_midnight_512->addChild(
            $star_phone_1_pro_midnight_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_midnight_512->addChild(
            $star_phone_1_pro_midnight_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_starlight_512->addChild(
            $star_phone_1_pro_starlight_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_starlight_512->addChild(
            $star_phone_1_pro_starlight_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_red_512->addChild(
            $star_phone_1_pro_red_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_red_512->addChild(
            $star_phone_1_pro_red_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_blue_1024->addChild(
            $star_phone_1_pro_blue_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_blue_1024->addChild(
            $star_phone_1_pro_blue_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_purple_1024->addChild(
            $star_phone_1_pro_purple_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_purple_1024->addChild(
            $star_phone_1_pro_purple_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_midnight_1024->addChild(
            $star_phone_1_pro_midnight_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_starlight_1024->addChild(
            $star_phone_1_pro_starlight_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_red_1024->addChild(
            $star_phone_1_pro_red_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_red_1024->addChild(
            $star_phone_1_pro_red_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn->addChild(
            $star_phone_1_pro_blue_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn->addChild(
            $star_phone_1_pro_blue_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn->addChild(
            $star_phone_1_pro_blue_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn->addChild(
            $star_phone_1_pro_blue_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn->addChild(
            $star_phone_1_pro_blue_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn->addChild(
            $star_phone_1_pro_blue_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn->addChild(
            $star_phone_1_pro_blue_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn->addChild(
            $star_phone_1_pro_blue_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn->addChild(
            $star_phone_1_pro_blue_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn->addChild(
            $star_phone_1_pro_purple_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn->addChild(
            $star_phone_1_pro_purple_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn->addChild(
            $star_phone_1_pro_purple_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn->addChild(
            $star_phone_1_pro_purple_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn->addChild(
            $star_phone_1_pro_purple_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn->addChild(
            $star_phone_1_pro_purple_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn->addChild(
            $star_phone_1_pro_purple_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn->addChild(
            $star_phone_1_pro_purple_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn->addChild(
            $star_phone_1_pro_purple_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn->addChild(
            $star_phone_1_pro_red_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn->addChild(
            $star_phone_1_pro_red_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn->addChild(
            $star_phone_1_pro_red_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn->addChild(
            $star_phone_1_pro_red_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn->addChild(
            $star_phone_1_pro_red_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn->addChild(
            $star_phone_1_pro_red_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn->addChild(
            $star_phone_1_pro_red_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn->addChild(
            $star_phone_1_pro_red_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn->addChild(
            $star_phone_1_pro_red_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn->addChild(
            $star_phone_1_pro_red_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn->addChild(
            $star_phone_1_pro_red_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn->addChild(
            $star_phone_1_pro_red_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_blue_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );
        
        $star_phone_1_pro_purple_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_purple_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_midnight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_starlight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_red_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_red_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_red_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_128_noTradeIn->addChild(
            $star_phone_1_pro_blue_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_128_noTradeIn->addChild(
            $star_phone_1_pro_blue_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_256_noTradeIn->addChild(
            $star_phone_1_pro_blue_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_256_noTradeIn->addChild(
            $star_phone_1_pro_blue_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_512_noTradeIn->addChild(
            $star_phone_1_pro_blue_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_512_noTradeIn->addChild(
            $star_phone_1_pro_blue_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_noTradeIn->addChild(
            $star_phone_1_pro_blue_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_blue_1024_noTradeIn->addChild(
            $star_phone_1_pro_blue_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_128_noTradeIn->addChild(
            $star_phone_1_pro_purple_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_128_noTradeIn->addChild(
            $star_phone_1_pro_purple_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_256_noTradeIn->addChild(
            $star_phone_1_pro_purple_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_256_noTradeIn->addChild(
            $star_phone_1_pro_purple_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_512_noTradeIn->addChild(
            $star_phone_1_pro_purple_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_512_noTradeIn->addChild(
            $star_phone_1_pro_purple_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_noTradeIn->addChild(
            $star_phone_1_pro_purple_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_purple_1024_noTradeIn->addChild(
            $star_phone_1_pro_purple_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_noTradeIn->addChild(
            $star_phone_1_pro_midnight_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_128_noTradeIn->addChild(
            $star_phone_1_pro_midnight_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_noTradeIn->addChild(
            $star_phone_1_pro_midnight_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_256_noTradeIn->addChild(
            $star_phone_1_pro_midnight_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_noTradeIn->addChild(
            $star_phone_1_pro_midnight_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_512_noTradeIn->addChild(
            $star_phone_1_pro_midnight_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_noTradeIn->addChild(
            $star_phone_1_pro_midnight_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_midnight_1024_noTradeIn->addChild(
            $star_phone_1_pro_midnight_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_noTradeIn->addChild(
            $star_phone_1_pro_starlight_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_128_noTradeIn->addChild(
            $star_phone_1_pro_starlight_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_noTradeIn->addChild(
            $star_phone_1_pro_starlight_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_256_noTradeIn->addChild(
            $star_phone_1_pro_starlight_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_noTradeIn->addChild(
            $star_phone_1_pro_starlight_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_512_noTradeIn->addChild(
            $star_phone_1_pro_starlight_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_noTradeIn->addChild(
            $star_phone_1_pro_starlight_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_starlight_1024_noTradeIn->addChild(
            $star_phone_1_pro_starlight_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_128_noTradeIn->addChild(
            $star_phone_1_pro_red_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_128_noTradeIn->addChild(
            $star_phone_1_pro_red_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_256_noTradeIn->addChild(
            $star_phone_1_pro_red_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_256_noTradeIn->addChild(
            $star_phone_1_pro_red_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_512_noTradeIn->addChild(
            $star_phone_1_pro_red_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_512_noTradeIn->addChild(
            $star_phone_1_pro_red_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_red_1024_noTradeIn->addChild(
            $star_phone_1_pro_red_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_red_1024_noTradeIn->addChild(
            $star_phone_1_pro_pro_red_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        // Star Phone 1 Pro Max
        $star_phone_1_pro_max->addChild(
            $star_phone_1_pro_max_blue = new StarPhone(
                [
                    'title' => 'Blue'
                ]
            )
        );

        $star_phone_1_pro_max->addChild(
            $star_phone_1_pro_max_purple = new StarPhone(
                [
                    'title' => 'Purple'
                ]
            )
        );

        $star_phone_1_pro_max->addChild(
            $star_phone_1_pro_max_midnight = new StarPhone(
                [
                    'title' => 'MidNight'
                ]
            )
        );

        $star_phone_1_pro_max->addChild(
            $star_phone_1_pro_max_starlight = new StarPhone(
                [
                    'title' => 'StarLight'
                ]
            )
        );

        $star_phone_1_pro_max->addChild(
            $star_phone_1_pro_max_red = new StarPhone(
                [
                    'title' => 'Red'
                ]
            )
        );

        $star_phone_1_pro_max_blue->addChild(
            $star_phone_1_pro_max_blue_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_max_blue->addChild(
            $star_phone_1_pro_max_blue_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_max_blue->addChild(
            $star_phone_1_pro_max_blue_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_max_blue->addChild(
            $star_phone_1_pro_max_blue_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_max_purple->addChild(
            $star_phone_1_pro_max_purple_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_max_purple->addChild(
            $star_phone_1_pro_max_purple_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_max_purple->addChild(
            $star_phone_1_pro_max_purple_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_max_purple->addChild(
            $star_phone_1_pro_max_purple_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_max_midnight->addChild(
            $star_phone_1_pro_max_midnight_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_max_midnight->addChild(
            $star_phone_1_pro_max_midnight_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_max_midnight->addChild(
            $star_phone_1_pro_max_midnight_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_max_midnight->addChild(
            $star_phone_1_pro_max_midnight_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_max_starlight->addChild(
            $star_phone_1_pro_max_starlight_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_max_starlight->addChild(
            $star_phone_1_pro_max_starlight_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_max_starlight->addChild(
            $star_phone_1_pro_max_starlight_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_max_starlight->addChild(
            $star_phone_1_pro_max_starlight_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_max_red->addChild(
            $star_phone_1_pro_max_red_128 = new StarPhone(
                [
                    'title' => '128GB'
                ]
            )
        );

        $star_phone_1_pro_max_red->addChild(
            $star_phone_1_pro_max_red_256 = new StarPhone(
                [
                    'title' => '256GB'
                ]
            )
        );

        $star_phone_1_pro_max_red->addChild(
            $star_phone_1_pro_max_red_512 = new StarPhone(
                [
                    'title' => '512GB'
                ]
            )
        );

        $star_phone_1_pro_max_red->addChild(
            $star_phone_1_pro_max_red_1024 = new StarPhone(
                [
                    'title' => '1TB'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128->addChild(
            $star_phone_1_pro_max_blue_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_purple_128->addChild(
            $star_phone_1_pro_max_purple_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_midnight_128->addChild(
            $star_phone_1_pro_max_midnight_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_starlight_128->addChild(
            $star_phone_1_pro_max_starlight_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_red_128->addChild(
            $star_phone_1_pro_max_red_128_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_red_128->addChild(
            $star_phone_1_pro_max_red_128_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_blue_256->addChild(
            $star_phone_1_pro_max_blue_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_purple_256->addChild(
            $star_phone_1_pro_max_purple_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_midnight_256->addChild(
            $star_phone_1_pro_max_midnight_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_starlight_256->addChild(
            $star_phone_1_pro_max_starlight_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_red_256->addChild(
            $star_phone_1_pro_max_red_256_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_red_256->addChild(
            $star_phone_1_pro_max_red_256_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_blue_512->addChild(
            $star_phone_1_pro_max_blue_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_purple_512->addChild(
            $star_phone_1_pro_max_purple_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_midnight_512->addChild(
            $star_phone_1_pro_max_midnight_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_starlight_512->addChild(
            $star_phone_1_pro_max_starlight_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_red_512->addChild(
            $star_phone_1_pro_max_red_512_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_red_512->addChild(
            $star_phone_1_pro_max_red_512_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_blue_1024->addChild(
            $star_phone_1_pro_max_blue_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_purple_1024->addChild(
            $star_phone_1_pro_max_purple_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_midnight_1024->addChild(
            $star_phone_1_pro_max_midnight_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_starlight_1024->addChild(
            $star_phone_1_pro_max_starlight_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn = new StarPhone(
                [
                    'title' => 'Trade In'
                ]
            )
        );
        
        $star_phone_1_pro_max_red_1024->addChild(
            $star_phone_1_pro_max_red_1024_noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_iPhone = new StarPhone(
                [
                    'title' => 'Iphone'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_galaxy = new StarPhone(
                [
                    'title' => 'Galaxy'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_pixel = new StarPhone(
                [
                    'title' => 'Pixel'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_blue_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );
        
        $star_phone_1_pro_max_purple_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_purple_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_midnight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_starlight_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_128_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_256_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_512_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_iPhone_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn_iPhone->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_iPhone_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_galaxy_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn_galaxy->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_galaxy_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_pixel_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_tradeIn_pixel->addChild(
            $star_phone_1_pro_max_red_1024_tradeIn_pixel_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_128_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_256_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_512_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_blue_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_blue_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_128_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_256_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_512_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_purple_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_purple_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_128_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_256_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_512_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_midnight_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_midnight_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_128_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_256_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_512_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_starlight_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_starlight_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_noTradeIn->addChild(
            $star_phone_1_pro_max_red_128_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_128_noTradeIn->addChild(
            $star_phone_1_pro_max_red_128_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_noTradeIn->addChild(
            $star_phone_1_pro_max_red_256_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_256_noTradeIn->addChild(
            $star_phone_1_pro_max_red_256_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_noTradeIn->addChild(
            $star_phone_1_pro_max_red_512_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_512_noTradeIn->addChild(
            $star_phone_1_pro_max_red_512_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_red_1024_noTradeIn_payNow = new StarPhone(
                [
                    'title' => 'Pay Now'
                ]
            )
        );

        $star_phone_1_pro_max_red_1024_noTradeIn->addChild(
            $star_phone_1_pro_max_red_1024_noTradeIn_payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly'
                ]
            )
        );
    }
}
