<?php
use Migrations\AbstractSeed;

/**
 * Trail seed.
 */
class TrailSeed extends AbstractSeed
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
                'name'              =>  'Trail 1',
                'totalTime'         =>  '2hours',
            ],
            [
                'id'                =>  2,
                'name'              =>  'Trail 2',
                'totalTime'         =>  '4hours',
            ],

        ];

        $table = $this->table('trail');
        $table->insert($data)->save();
    }
}
