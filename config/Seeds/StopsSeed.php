<?php
use Migrations\AbstractSeed;

/**
 * Stops seed.
 */
class StopsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id'                =>  1,
                'name'              =>  'Kings park',
                'description'       =>  'It is the most popular park in Perth',
                'photoName'         =>  'KingsPark1.jpg',
                'timeSpent'         =>  '20min',
                'latitude'          =>  '-31.962867',
                'longitude'         =>  '115.831947',
                'colorCode'         =>  'Red',
                'distance'          =>  '10km',
                'audioName'         =>  'Audio.mp3',
                'loc_id'            =>  '1',
                'admin_id'          =>  '1',
            ],
            [
                'id'                =>  2,
                'name'              =>  'Cottesloe Beach',
                'description'       =>  'Beautiful beach',
                'photoName'         =>  'Cottesloe1.jpg',
                'timeSpent'         =>  '2hours',
                'latitude'          =>  '-31.99386',
                'longitude'         =>  '115.75105',
                'colorCode'         =>  'Blue',
                'distance'          =>  '10km',
                'audioName'         =>  'Audio2.mp3',
                'loc_id'            =>  '2',
                'admin_id'          =>  '2',
            ],

        ];

        $table = $this->table('stops');
        $table->insert($data)->save();
    }
}
