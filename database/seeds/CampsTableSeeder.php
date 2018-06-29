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
			'camp_date' => '20th august, 2017 ',
			'contents' => 'KATHMANDU — The Lions Club of Nepal Everest on Wednesday successfully held a blood donation programme at the TU Teaching Hospital premises.

                           According to Club’s Secretary, Prashant Dhungana, the Thamel – based club collected 128 pints of blood. Lions Club District Coordinator, Ravindra Bahadur Pradhan, attended the event as the chief guest.

                            Around 128 people donated blood during the one-day event held under the banner ‘Donate Blood, Save Life’.
                             RSS' ,

			'camp_pic' => 't.jpg' ,

		];

		$c2 = [
			'title' => 'HHELP' ,
			'camp_date' => '19th July, 2017 ',
			'contents' => 'Helping Hands an Effort to Lift People (HHELP) organized a Blood Donation campaign on 8 July where 180 donors donated blood to the Nepal Red Cross Society. HHELP is also handing over the cloth/stationery collected to Suryodaya Primary School, Jhulunge-9, Sindhupalchowk.
                                The campaign was started by the Chairman of Kathmandu Engineering College, Prof. Er. Hirendra Man Pradhan and the Pricipal Er. Shiva Prasad Koirala. Among many students, teachers and staffs that volunteered to donate their blood, only 180 were physically fit and were permitted to donate after being checked by the representatives from NRCS.
' ,
			'camp_pic' => 'l.jpg' ,

		];

		$c3 = [
			'title' => 'Emergency Blood Donation Program' ,
			'camp_date' => '21st May , 2017',
			'contents' => 'Emergency Blood Donation Program in request from Blood Bank, Pokhara ,organized by the groups - We Are One , Soch Foundation and Shyangja Engineering Students Society on May 21, 2017 held on Paschimanchal Campus, Lamachaur, Pokhara was successful in collecting 123 pints of Blood. The program was successfully conducted with the help from NYN, GRR and whole Paschimanchal Campus Family. We would like to thank everyone of those volunteers and participants. The blood donation program was conducted with the technical support from Nepal Red Cross Society, Kaski. Here are some Glimpse of the program' ,
			'camp_pic' => 'lk.jpg' ,

		];

		$c4 = [
			'title' => 'रोट्र्याक्ट क्लब' ,
			'camp_date' => '19th september, 2017 :',
			'contents' => 'रोट्र्याक्ट क्लब अफ दमौलिका सस्थापक सहसचिब स्वर्गीय सचिन को सम्झ्नामा भएको 4th sachin memorial Nationwide Blood Donation camp मा रोट्र्याक्ट क्लब अफ पर्बत का सदस्य रो. मनोज सपकोटा, रोट्र्याक्ट क्लब अफ डिल्लिबजार काठमाडौले आयोजना गरेको रक्तदान कार्यक्रममा सहभागी हुँदै ।
                                    #धन्यवाद मनोज ।' ,
			'camp_pic' => 'n.jpg' ,

		];

		Camps::create($c1);
		Camps::create($c2);
		Camps::create($c3);
		Camps::create($c4);

    }
}
