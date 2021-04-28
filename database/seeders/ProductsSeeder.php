<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::insert(
            [
                [
                    'name' => 'ASUS VivoBook 15',
                    'about' => 'Thin and Light Laptop, 15.6” FHD Display, Intel Core i3-1005G1 Processor, 4GB DDR4 RAM, 128GB PCIe SSD, Fingerprint Reader, Windows 10 Home in S Mode, Slate Grey, F515JA-AH31',
                    'price' => '429.29',
                    'currency' => 'USD'
                ],
                [
                    'name' => 'Samsung Galaxy S21',
                    'about' => 'DISPLAY: 120Hz Dynamic AMOLED, 6.2" Flat FHD+, Corning Gorilla Glass Victus PLATFORM: Android 11, Qualcomm SM8350, Snapdragon 888,Octa-core, Adreno 660. CAMERA: 10MP. BATTERY: 4000mAh. NOTE: International Version. No Warranty. This phone will work on GSM SIM cards like AT&T or T-Mobile or any other GSM SIM Card network provider but it will NOT work on CDMA such as Sprint, Verizon or US Cellular or Boost Mobile or any other CDMA Networks.',
                    'price' => '714.50',
                    'currency' => 'EUR'
                ],
                [
                    'name' => 'Bose QuietComfort Noise Cancelling Earbuds',
                    'about' => "The world's most effective noise cancelling earbuds. Noise cancelling earbuds: 11 levels of active noise cancelling let you enjoy music, podcasts, & videos without distractions. Transparency mode lets the outside world in for quick conversations. Acclaimed Bose sound: Crisp, clear details. Deep, full bass. The innovations in these noise cancelling earphones produce exciting, lifelike sound that’s full and balanced at every volume level. Comfortable earbuds: Easy to wear all day long because every surface that touches your ear is made of soft silicone. Includes 3 eartip sizes to help you get the best fit. Sweat & weather resistant: These IPX4-rated wireless noise cancelling earbuds are proven to pump out great-sounding music, even when they’re subjected to rain, sleet, hail, snow, or sweat. Powerful battery: These wireless earbuds play for up to 6 hours on a single charge. The wireless charging case provides up to 12 more hours battery life — and it’s compatible with any Qi-certified charging mat. Simple touch controls: Controlling your earbuds is as easy as tapping and pressing the surface. Double tap the left Earbud or noise cancellation. Double tap the right to pause & play music and swipe up and down for volume control (opt in feature via Bose Music App) Built with Bluetooth 5.1: Bluetooth earbuds work within 30 feet of your device. When you’re on calls, the microphone system rejects most of the noise around you. Compatible with iOS and Android.",
                    'price' => '279',
                    'currency' => 'USD'
                ],
                [
                    'name' => 'SAMSUNG Galaxy Watch Active 2',
                    'about' => 'Better insights to reach your fitness goals get more out of every mile thanks to built-in pace coaching on the Galaxy Watch Active2 Its advanced sensors keep your pace to help you better achieve your run goals Comfortably sleek the Galaxy Watch Active2 is light enough to wear anywhere comfortably; It comes in aluminum or stainless steel and with a variety of faces bands and finishes so it goes with anything. Keep your beat you can see if your heart rate is where you want it with Galaxy Watch Active2 Get automatically alerted if your watch detects a high or a low heart rate (4) this device and related software are not intended for use in the diagnosis of disease or other conditions or in the cure Mitigation treatment or prevention of disease. Level up your downtime Galaxy Watch active2’s built-in sleep tracker offers valuable insights on how to get a better night’s sleep. It also monitors your stress level and helps you recently with the integrated calm app (4) this device and related software are not intended for use in the diagnosis of disease or other conditions or in the cure, mitigation treatment or prevention of disease. Battery built for endurance. The Galaxy Watch active2’s long-lasting battery can go for more than a 5 day on a single charge, and you can always get a quick boost from your compatible Galaxy phone with wireless power share. Works with Qi compatible Samsung devices (compatibility with non Samsung Qi devices not guaranteed); Speed and power efficiency of charge varies by device and may be restricted by cases or covers',
                    'price' => '380.99',
                    'currency' => 'GEL'
                ],
            ]

        );
    }
}
