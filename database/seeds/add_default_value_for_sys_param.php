<?php

use Illuminate\Database\Seeder;

class add_default_value_for_sys_param extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_param')->truncate();
        DB::table('sys_param')->insert([
            [
                'name'          => 'site_title',
                'plain_value'   => 'Coop-elect',
            ],
            [
                'name'          => 'stie_acronym',
                'plain_value'   => 'Coop',
            ],
            [
                'name'          => 'tally_refresh',
                'plain_value'   => '60',
            ],
            [
                'name'          => 'thank_you_msg',
                'plain_value'   => 'Thank you for vote voting.',
            ]
        ]);
    }
}
