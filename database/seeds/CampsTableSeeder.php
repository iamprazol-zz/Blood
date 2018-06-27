<?php

use Illuminate\Database\Seeder;
use App\Camps;

class CampsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

		$c1 = [
			'title' => 'The Lions Club' ,
			'camp_date' => '20th august, 2017 :',
			'contents' => 'KATHMANDU — The Lions Club of Nepal Everest on Wednesday successfully held a blood donation programme at the TU Teaching Hospital premises.

                           According to Club’s Secretary, Prashant Dhungana, the Thamel – based club collected 128 pints of blood. Lions Club District Coordinator, Ravindra Bahadur Pradhan, attended the event as the chief guest.

                            Around 128 people donated blood during the one-day event held under the banner ‘Donate Blood, Save Life’.
                             RSS' ,

			'camp_pic' => 't.jpg' ,

		];

		$c2 = [
			'title' => 'HHELP' ,
			'camp_date' => '19th July, 2017 :',
			'contents' => 'Helping Hands an Effort to Lift People (HHELP) organized a Blood Donation campaign on 8 July where 180 donors donated blood to the Nepal Red Cross Society. HHELP is also handing over the cloth/stationery collected to Suryodaya Primary School, Jhulunge-9, Sindhupalchowk.
                                The campaign was started by the Chairman of Kathmandu Engineering College, Prof. Er. Hirendra Man Pradhan and the Pricipal Er. Shiva Prasad Koirala. Among many students, teachers and staffs that volunteered to donate their blood, only 180 were physically fit and were permitted to donate after being checked by the representatives from NRCS.
' ,
			'camp_pic' => 'l.jpg' ,

		];

		Camps::create($c1);
		Camps::create($c2);

    }
}
