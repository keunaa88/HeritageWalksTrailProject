<?php
use Migrations\AbstractSeed;

/**
 * Admin seed.
 */
class AdminSeed extends AbstractSeed
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
                'adminId'           =>  'admin',
                'password'          =>  'secret',
                'firstName'         =>  'Euna',
                'lastName'          =>  'Kim',
                'role'              =>  'SuperAdmin',
            ],
            [
                'id'                =>  2,
                'adminId'           =>  'admin1',
                'password'          =>  'secret',
                'firstName'         =>  'John',
                'lastName'          =>  'A',
                'role'              =>  'User',
            ],
            [
                'id'                =>  3,
                'adminId'           =>  'admin2',
                'password'          =>  'secret',
                'firstName'         =>  'John',
                'lastName'          =>  'B',
                'role'              =>  'Admin',
            ],
        ];

        $table = $this->table('admin');
        $table->insert($data)->save();
    }
}
