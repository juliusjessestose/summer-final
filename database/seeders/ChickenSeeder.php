<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chicken;

class ChickenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chickens = [
            [
                'menu_name' => 'Manok Barbecue', 
                'description'=> '',
                // 'ingredients' =>   '3 pounds chicken, 1/2 cup soysauce, 1/4 cup calamansi, 1/2 cup sugar, 1 garlic, 1 teaspoon salt, 1 teaspoon pepper, 1/4 cup oil',
                // 'preparations' =>  'Hugasan ang manok at patuyuin, Pagsamahin ang sangkap. Haluing mabuti hanggang matunaw ang asukal at asin. Lutuin ng mga 10 hanggang 15 minuto',
            ],
            [
                'menu_name' => 'Adobong Manok',
                'description'=> '',
                // 'ingredients' => '0.5Kg Chicken Leg, 1 Head Garlic, 1tsp Peppercorn, 3 tbls Vinegar, 2 tbls Soy Sauce, 1 Cup Water, 1 tbl Oil',
                // 'preparations' => 'Pagsamahin ang manok, bawang, peppercorn, suka, Oyster Sauce, toyo at tubig sa isang kaldero,Simmer for 15 minutes,Salain ang manok at igisa hanggang sa maging golden brown, Pour cooking liquid and simmer for 5 minutes. ',
            ],
            [
                'menu_name' => 'Pininyahang Manok',
                'description'=> '',

                // 'ingredients' => '2 lbs chicken, 12 ounces pineapple, 2 pieces tomato chopped, 1 cup bell pepper, 1 piece carrot, 2 1/2 tablespoon patis,  1/2 cup  milk, 2 tablespoon garlic, 1 piece onion, 2 tablespoon oil',
                // 'preparations' => 'I-marinate ang manok sa 20 hanggang 30 minuto,Ibuhos ang mantika sa pagluluto, Igisa ang bawang, sibuyas, at kamatis, lutuin hanggang sa maging light brown ang kulay, Ilagay ang mga karot at kumulo ng 5 minuto',          
            ],
        ];

        foreach ($chickens as $c) {
            Chicken::create($c);
        }
    }
}