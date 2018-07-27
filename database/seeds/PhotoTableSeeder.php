<?php

use Illuminate\Database\Seeder;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('photos')->truncate();
      $photos = [
  ['shop_id' => '1', 'curry_id' => '0', 'review_id' => '0', 'image' => '1uwQaE4kF6iOTIqJ62sKPfGFXrpO0sdWn', ],
  ['shop_id' => '0', 'curry_id' => '1', 'review_id' => '0', 'image' => '1o-Dv-b_u231co-LxgKGZ4HU491V3f3z-', ],
  ['shop_id' => '0', 'curry_id' => '3', 'review_id' => '0', 'image' => '1TPThQNL7EBA6OCfXv1KJmj-zgjFnDjkW', ],
  ['shop_id' => '0', 'curry_id' => '5', 'review_id' => '0', 'image' => '1AotVTF6_DUR-5SP7ef5wWpgRM4aEJzi9', ],
  ['shop_id' => '0', 'curry_id' => '4', 'review_id' => '0', 'image' => '1EihIqy1jQ2RVz4-JLGY9DHJFqfj8T4WC', ],
  ['shop_id' => '2', 'curry_id' => '0', 'review_id' => '0', 'image' => '1aPge3bLSGqzyuCookmw5rZggxbhm_uBy', ],
  ['shop_id' => '0', 'curry_id' => '6', 'review_id' => '0', 'image' => '13CXEIvu8uDkscgDvQ_8QhcDYqZuPM3tC', ],
  ['shop_id' => '3', 'curry_id' => '0', 'review_id' => '0', 'image' => '1IMik71Qahc3py1qMrZ7JSLyiXn4zmpRd', ],
  ['shop_id' => '0', 'curry_id' => '7', 'review_id' => '0', 'image' => '1xblllTl39CJIjwCi1QwMUeV251zzKBAQ', ],
  ['shop_id' => '0', 'curry_id' => '8', 'review_id' => '0', 'image' => '1E-nqJl0nINXC0ZOH524fIC2m4gYYNiOQ', ],
  ['shop_id' => '0', 'curry_id' => '9', 'review_id' => '0', 'image' => '1forrjon_h9ug6KvUgzP8xuy2kxDYg0Ry', ],
  ['shop_id' => '0', 'curry_id' => '2', 'review_id' => '0', 'image' => '1F4aLT32RdnI28TGGOERG909VQPd5dTfb', ],
  ['shop_id' => '3', 'curry_id' => '0', 'review_id' => '0', 'image' => '1sksk59zjkYZyG4IHo7BFMt2x7H3uAdon', ],
  ['shop_id' => '1', 'curry_id' => '0', 'review_id' => '0', 'image' => '1E8T3g9EchIPA76OV4stCOf3h-bEVEsNQ', ],
  ['shop_id' => '4', 'curry_id' => '0', 'review_id' => '0', 'image' => '1g06UC5BjF2HiFG0X3ap0DRImPkDl2G-G', ],
  ['shop_id' => '4', 'curry_id' => '0', 'review_id' => '0', 'image' => '1W27SfuEerAwbpChiFCUj5OOD7x2iQ3T-', ],
  ['shop_id' => '0', 'curry_id' => '10', 'review_id' => '0', 'image' => '18PI8hF4--crAIvNQMns7GK5ygKoi7DUJ', ],
  ['shop_id' => '0', 'curry_id' => '11', 'review_id' => '0', 'image' => '1Op7ruez_fKQsdxLuACPQFIseeEGSboZT', ],
  ['shop_id' => '5', 'curry_id' => '0', 'review_id' => '0', 'image' => '1FX13JfiQZU71XUpbkP1qCd34G2qQDBcj', ],
  ['shop_id' => '0', 'curry_id' => '12', 'review_id' => '0', 'image' => '1R6QOzL5DgjahDQ7s_5QMLQzWZX0Ilb8n', ],
  ['shop_id' => '0', 'curry_id' => '13', 'review_id' => '0', 'image' => '1J5CLE6qgxSUAlaKJt7Ous-sERoPugld6', ],
  ['shop_id' => '0', 'curry_id' => '15', 'review_id' => '0', 'image' => '1q7jav2B3ajs7ig7DHi52_BLY9aJ2VzwX', ],
  ['shop_id' => '7', 'curry_id' => '0', 'review_id' => '0', 'image' => '1CN87sDUbMpFYpBqZ1jYNtzmedAXUMgwv', ],
  ['shop_id' => '0', 'curry_id' => '16', 'review_id' => '0', 'image' => '1SSyFc41y2vRjjKZFr97DHrBeD7xEuWK4', ],
  ['shop_id' => '0', 'curry_id' => '17', 'review_id' => '0', 'image' => '1r1gF4m0MWssjy8Mnw6R3vbL3sE2-H_Ge', ],
  ['shop_id' => '0', 'curry_id' => '14', 'review_id' => '0', 'image' => '18KawMGawP_Iryv5zwC_T5TUKKRv7_zF_', ],
  ['shop_id' => '0', 'curry_id' => '14', 'review_id' => '0', 'image' => '1YG2M9249VHsKcUULIufRdmiiLOiee82n', ],
  ['shop_id' => '0', 'curry_id' => '18', 'review_id' => '0', 'image' => '1iMpL3AyWy01c_QXV9eZQiWvRxNal_nJO', ],
  ['shop_id' => '6', 'curry_id' => '0', 'review_id' => '0', 'image' => '1a4i5REOLDgZGIzPGrwmiRi_LDA9zboxV', ],
  ['shop_id' => '6', 'curry_id' => '0', 'review_id' => '0', 'image' => '1gr4dFatNH3k-1cbvPidqucOI0Rvu-EE9', ],
  ['shop_id' => '6', 'curry_id' => '0', 'review_id' => '0', 'image' => '1GLgBu6Gj_4_NV8z2cTmDIV2POPhE9-7j', ],
  ['shop_id' => '8', 'curry_id' => '0', 'review_id' => '0', 'image' => '1gHmELRIgg3c9LAYuw0j6m7OQmUXGV5Yg', ],
  ['shop_id' => '0', 'curry_id' => '19', 'review_id' => '0', 'image' => '11RRCFPG64lIzHN-32nAoFdS4sI_ynu-d', ],
  ['shop_id' => '0', 'curry_id' => '20', 'review_id' => '0', 'image' => '1HanrgEGgy0-mtse4uhbY7xryZ1gj6pkf', ],
  ['shop_id' => '9', 'curry_id' => '0', 'review_id' => '0', 'image' => '1eDa6bpRdHQBFYz-S7wbJMqrUqLJhNAh2', ],
  ['shop_id' => '9', 'curry_id' => '0', 'review_id' => '0', 'image' => '1LwM1V3bdNLglGjjRfPfbYfnnXk_MSrfK', ],
  ['shop_id' => '0', 'curry_id' => '21', 'review_id' => '0', 'image' => '1D_oyUnQvQvarffvzZHtgIYwdlsPn3bLl', ],
  ['shop_id' => '0', 'curry_id' => '0', 'review_id' => '1', 'image' => '1-wsSZEKUd-ONCCJPmssx7dY1tcTv7NBf', ],
  ['shop_id' => '0', 'curry_id' => '0', 'review_id' => '7', 'image' => '1-wsSZEKUd-ONCCJPmssx7dY1tcTv7NBf', ],
  ['shop_id' => '0', 'curry_id' => '0', 'review_id' => '16', 'image' => '1-wsSZEKUd-ONCCJPmssx7dY1tcTv7NBf', ],
  ['shop_id' => '10', 'curry_id' => '0', 'review_id' => '0', 'image' => '1wbWRClDo1L70mBqbrgb7jvbUBMqDLVic', ],
  ['shop_id' => '11', 'curry_id' => '0', 'review_id' => '0', 'image' => '1qKN3V0g9nfsEWLkRPjateyDEXSRBsWpi', ],
  ['shop_id' => '0', 'curry_id' => '22', 'review_id' => '0', 'image' => '1wrfIdGC5R9-qd2zeEWXM2EiyC8EQjqR_', ],
  ['shop_id' => '0', 'curry_id' => '23', 'review_id' => '0', 'image' => '1q63QAEK3X45ta3b9xY2j7U9jocIlp9Q2', ],
  ['shop_id' => '13', 'curry_id' => '0', 'review_id' => '0', 'image' => '13fn2hEMB5O8qchwuDOdANH377V9gwT3r', ],
];

      DB::table('photos')->insert($photos);
    }
}
