<?php
use Migrations\AbstractMigration;

class Trail extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('Trail');

        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('totalTime', 'string', [
            'default' => null,
            'limit' => 20,
            'null' => false,
        ]);

        $table->create();
    }
}
