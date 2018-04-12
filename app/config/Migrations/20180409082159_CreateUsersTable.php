<?php
use Migrations\AbstractMigration;

class CreateUsersTable extends AbstractMigration
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
        
//        $table = $this->table('users');
//        $table->addColumn('name', 'string', [
//            'default' => null,
//            'limit' => 255,
//            'null' => false,
//        ]);
//        $table->addColumn('description', 'text', [
//            'default' => null,
//            'null' => false,
//        ]);
//        $table->addColumn('created', 'datetime', [
//            'default' => null,
//            'null' => false,
//        ]);
//        $table->addColumn('modified', 'datetime', [
//            'default' => null,
//            'null' => false,
//        ]);
//        $table->create();
        
        $table = $this->table('users');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('last_name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('password', 'string', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('active', 'boolean');
        $table->addColumn('role', 'enum', array('values' => 'admin, users'));
        
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
