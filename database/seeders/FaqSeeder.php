<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//first faq
       DB::table('faqs')->insert([
           'id' => 1,
          'question' =>  'How can you print a document from your laptop at HZ?',
           'answer' => 'You need first to go to the HZ print page, log into your account and then you can upload all necessary files
            you want to print. After choosing the file(s), you can set additional
            settings and confirm your print request',
           'link' => 'https://print.hz.nl/login.cfm?dest=index.cfm&'
       ]);
//second faq
        DB::table('faqs')->insert([
           'id' => 2,
           'question' =>  'How can you scan a document a send it to your laptop at HZ?',
           'answer' => 'Ensure you have at least €0.07 credit. Although scanning is free,
            you must have this amount of credit on your HZ pass. Register using
            your HZ pass on the TouchID next to the multifunctional printer. In
            the TouchID me',
       ]);
//third faq
        DB::table('faqs')->insert([
            'id' => 3,
            'question' =>  'What are the instructions if you want to park your car at the HZ
            parking lot?',
            'answer' => ' You need to reveal you HZ pass at the barriers in order to get into the
            HZ parking lot and park there.',
        ]);
//forth faq
        DB::table('faqs')->insert([
            'id' => 4,
            'question' =>  ' How can you book a project space in one of the wings?',
            'answer' => 'Select "make a reservation", then your room of choice. Be aware
            that only the rooms that start with GW are in Middelburg!',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/'
        ]);
//fifth faq
        DB::table('faqs')->insert([
            'id' => 5,
            'question' =>  ' Where can I find the latest instructions on what to do when you are
            sick / show symptoms of COVID?',
            'answer' => '  All necessary information about COVID and related instructions can be found on this website.',
            'link' => 'https://hz.nl/en/current-affairs/coronavirus'
        ]);
    }
}
