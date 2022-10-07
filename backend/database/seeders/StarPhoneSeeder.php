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
        $starPhones = [
            new StarPhone(
                [
                    'id' => 1,
                    'title' => 'Version',
                    'price' => null
                ]
            ),
            new StarPhone(
                [
                    'id' => 2,
                    'title' => 'Model',
                    'price' => null
                ]
            ),
            new StarPhone(
                [
                    'id' => 3,
                    'title' => 'Color',
                    'price' => null
                ]
            ),
            new StarPhone(
                [
                    'id' => 4,
                    'title' => 'Storage',
                    'price' => null
                ]
            ),
            new StarPhone(
                [
                    'id' => 5,
                    'title' => 'Trade In',
                    'price' => null
                ]
            ),
            new StarPhone(
                [
                    'id' => 6,
                    'title' => 'Trade In Smartphone',
                    'price' => null
                ]
            ),
            new StarPhone(
                [
                    'id' => 7,
                    'title' => 'Payment',
                    'price' => null
                ]
            ),
        ];

        foreach ( $starPhones as $starPhone ) {
            $starPhone->save();
        }

        $version = StarPhone::find(1);
        $model = StarPhone::find(2);
        $color = StarPhone::find(3);
        $storage = StarPhone::find(4);
        $tradeIn = StarPhone::find(5);
        $tradeInSmartphone = StarPhone::find(6);
        $payment = StarPhone::find(7);

        // Star Phone Version
        $version->addChild(
            $standard = new StarPhone(
                [
                    'title' => 'Standard',
                    'price' => null
                ]
            )
        );

        $version->addChild(
            $pro = new StarPhone(
                [
                    'title' => 'Pro',
                    'price' => null
                ]
            )
        );

        // Star Phone Model
        $model->addChild(
            $starPhone1 = new StarPhone(
                [
                    'title' => 'Star Phone 1',
                    'price' => 800
                ]
            )
        );

        $model->addChild(
            $starPhone1Plus = new StarPhone(
                [
                    'title' => 'Star Phone 1 Plus',
                    'price' => 850
                ]
            )
        );

        $model->addChild(
            $starPhone1Pro = new StarPhone(
                [
                    'title' => 'Star Phone 1 Pro',
                    'price' => 900
                ]
            )
        );

        $model->addChild(
            $starPhone1ProMax = new StarPhone(
                [
                    'title' => 'Star Phone 1 Pro Max',
                    'price' => 950
                ]
            )
        );

        // Star Phone Color
        $color->addChild(
            $blue = new StarPhone(
                [
                    'title' => 'Blue',
                    'price' => 10
                ]
            )
        );

        $color->addChild(
            $purple = new StarPhone(
                [
                    'title' => 'Purple',
                    'price' => 10
                ]
            )
        );

        $color->addChild(
            $midnight = new StarPhone(
                [
                    'title' => 'MidNight',
                    'price' => 10
                ]
            )
        );

        $color->addChild(
            $starlight = new StarPhone(
                [
                    'title' => 'StarLight',
                    'price' => 10
                ]
            )
        );

        $color->addChild(
            $red = new StarPhone(
                [
                    'title' => 'Product Red',
                    'price' => 50
                ]
            )
        );

        // Star Phone Storage
        $storage->addChild(
            $gb128 = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 50
                ]
            )
        );

        $storage->addChild(
            $gb256 = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 100
                ]
            )
        );

        $storage->addChild(
            $gb512 = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 200
                ]
            )
        );

        $storage->addChild(
            $tb1 = new StarPhone(
                [
                    'title' => '1TB',
                    'price' => 400
                ]
            )
        );

        // Star Phone Trade In
        $tradeIn->addChild(
            $yesTradeIn = new StarPhone(
                [
                    'title' => 'Select a smartphone',
                    'price' => null
                ]
            )
        );

        $tradeIn->addChild(
            $noTradeIn = new StarPhone(
                [
                    'title' => 'No Trade In',
                    'price' => null
                ]
            )
        );

        // Star Phone Trade In Smartphone
        $tradeInSmartphone->addChild(
            $iPhone13ProMax = new StarPhone(
                [
                    'title' => 'iPhone 13 Pro Max',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $iPhone13Pro = new StarPhone(
                [
                    'title' => 'iPhone 13 Pro ',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $iPhone13Plus = new StarPhone(
                [
                    'title' => 'iPhone 13 Plus',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $iPhone13 = new StarPhone(
                [
                    'title' => 'iPhone 13',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $iPhone12ProMax = new StarPhone(
                [
                    'title' => 'iPhone 12 Pro Max',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $iPhone12Pro = new StarPhone(
                [
                    'title' => 'iPhone 12 Pro',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $iPhone12Plus = new StarPhone(
                [
                    'title' => 'iPhone 12 Plus',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $iPhone12 = new StarPhone(
                [
                    'title' => 'iPhone 12',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $galaxyS22Ultra5G = new StarPhone(
                [
                    'title' => 'Galaxy S22 Ultra 5G',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $galaxyS22Plus5G = new StarPhone(
                [
                    'title' => 'Galaxy S22+ 5G',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $galaxyS225G = new StarPhone(
                [
                    'title' => 'Galaxy S22 5G',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $galaxyS21Plus5G = new StarPhone(
                [
                    'title' => 'Galaxy S21+ 5G',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $galaxyS215G = new StarPhone(
                [
                    'title' => 'Galaxy S21 5G',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $googlePixel6Pro = new StarPhone(
                [
                    'title' => 'Google Pixel 6 Pro',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $googlePixel6a = new StarPhone(
                [
                    'title' => 'Google Pixel 6a',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $googlePixel6 = new StarPhone(
                [
                    'title' => 'Google Pixel 6',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $googlePixel5 = new StarPhone(
                [
                    'title' => 'Google Pixel 5',
                    'price' => null
                ]
            )
        );

        $tradeInSmartphone->addChild(
            $googlePixel5a = new StarPhone(
                [
                    'title' => 'Google Pixel 5a',
                    'price' => null
                ]
            )
        );

        // Trade In Smartphone Price
        $iPhone13ProMax->addChild(
            $iPhone13ProMax128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 400
                ]
            )
        );

        $iPhone13ProMax->addChild(
            $iPhone13ProMax256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 500
                ]
            )
        );

        $iPhone13ProMax->addChild(
            $iPhone13ProMax512GB = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 600
                ]
            )
        );

        $iPhone13ProMax->addChild(
            $iPhone13ProMax1TB = new StarPhone(
                [
                    'title' => '1TB',
                    'price' => 700
                ]
            )
        );

        $iPhone13Pro->addChild(
            $iPhone13Pro128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 500
                ]
            )
        );

        $iPhone13Pro->addChild(
            $iPhone13Pro256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 550
                ]
            )
        );

        $iPhone13Pro->addChild(
            $iPhone13Pro512GB = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 600
                ]
            )
        );

        $iPhone13Pro->addChild(
            $iPhone13Pro1TB = new StarPhone(
                [
                    'title' => '1TB',
                    'price' => 650
                ]
            )
        );

        $iPhone13Plus->addChild(
            $iPhone13Plus128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 500
                ]
            )
        );

        $iPhone13Plus->addChild(
            $iPhone13Plus256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 550
                ]
            )
        );

        $iPhone13Plus->addChild(
            $iPhone13Plus512GB = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 600
                ]
            )
        );

        $iPhone13->addChild(
            $iPhone13128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 500
                ]
            )
        );

        $iPhone13->addChild(
            $iPhone13256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 550
                ]
            )
        );

        $iPhone12ProMax->addChild(
            $iPhone12ProMax128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 350
                ]
            )
        );

        $iPhone12ProMax->addChild(
            $iPhone12ProMax256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 400
                ]
            )
        );

        $iPhone12ProMax->addChild(
            $iPhone12ProMax512GB = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 450
                ]
            )
        );

        $iPhone12ProMax->addChild(
            $iPhone12ProMax1TB = new StarPhone(
                [
                    'title' => '1TB',
                    'price' => 500
                ]
            )
        );

        $iPhone12Pro->addChild(
            $iPhone12Pro128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 300
                ]
            )
        );

        $iPhone12Pro->addChild(
            $iPhone12Pro256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 350
                ]
            )
        );

        $iPhone12Pro->addChild(
            $iPhone12Pro512GB = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 400
                ]
            )
        );

        $iPhone12Pro->addChild(
            $iPhone12Pro1TB = new StarPhone(
                [
                    'title' => '1TB',
                    'price' => 450
                ]
            )
        );

        $iPhone12Plus->addChild(
            $iPhone12Plus128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 300
                ]
            )
        );

        $iPhone12Plus->addChild(
            $iPhone12Plus256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 350
                ]
            )
        );

        $iPhone12Plus->addChild(
            $iPhone12Plus512GB = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 400
                ]
            )
        );

        $iPhone12->addChild(
            $iPhone12128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 300
                ]
            )
        );

        $iPhone12->addChild(
            $iPhone12256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 350
                ]
            )
        );

        $galaxyS22Ultra5G->addChild(
            $galaxyS22Ultra5G128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 270
                ]
            )
        );

        $galaxyS22Ultra5G->addChild(
            $galaxyS22Ultra5G256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 320
                ]
            )
        );

        $galaxyS22Ultra5G->addChild(
            $galaxyS22Ultra5G512GB = new StarPhone(
                [
                    'title' => '512GB',
                    'price' => 370
                ]
            )
        );

        $galaxyS22Plus5G->addChild(
            $galaxyS22Plus5G128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 270
                ]
            )
        );

        $galaxyS22Plus5G->addChild(
            $galaxyS22Plus5G256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 320
                ]
            )
        );

        $galaxyS225G->addChild(
            $galaxyS225G128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 250
                ]
            )
        );

        $galaxyS21Plus5G->addChild(
            $galaxyS21Plus5G128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 200
                ]
            )
        );

        $galaxyS21Plus5G->addChild(
            $galaxyS21Plus5G256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 250
                ]
            )
        );

        $galaxyS215G->addChild(
            $galaxyS215G128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 170
                ]
            )
        );

        $googlePixel6Pro->addChild(
            $googlePixel6Pro128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 200
                ]
            )
        );

        $googlePixel6Pro->addChild(
            $googlePixel6Pro256GB = new StarPhone(
                [
                    'title' => '256GB',
                    'price' => 250
                ]
            )
        );

        $googlePixel6a->addChild(
            $googlePixel6a128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 160
                ]
            )
        );

        $googlePixel6->addChild(
            $googlePixel6128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 180
                ]
            )
        );

        $googlePixel5a->addChild(
            $googlePixel5a128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 100
                ]
            )
        );

        $googlePixel5->addChild(
            $googlePixel5128GB = new StarPhone(
                [
                    'title' => '128GB',
                    'price' => 150
                ]
            )
        );

        // Star Phone Payment
        $payment->addChild(
            $payNow = new StarPhone(
                [
                    'title' => 'Pay Now',
                    'price' => null
                ]
            )
        );

        $payment->addChild(
            $payMonthly = new StarPhone(
                [
                    'title' => 'Pay Monthly',
                    'price' => null
                ]
            )
        );
    }
}
