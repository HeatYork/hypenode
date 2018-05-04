<?php


use Phinx\Migration\AbstractMigration;
use Phinx\Db\Adapter\MysqlAdapter;

class CreateAccount extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        // table 設定
        $table = $this->table('account', [
            'id' => false,
            'primary_key' => array('web_id'),
            'engine' => 'InnoDB',
            'encoding' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'comment' => '帳號資料'
        ]);

        // table Column 設定
        $table->addColumn('web_id', 'char', [
            'null' => false,
            'limit' => 30,
            'comment' => '網站ID識別碼'
        ])->addColumn('web_name', 'char', [
            'null' => false,
            'limit' => 30,
            'comment' => '網站ID名稱'
        ])->addColumn('email', 'char', [
            'null' => false,
            'limit' => MysqlAdapter::TEXT_TINY,
            'comment' => '信箱'
        ])->addColumn('username', 'char', [
            'null' => false,
            'limit' => 30,
            'comment' => '帳號名稱'
        ])->addColumn('password', 'char', [
            'null' => false,
            'limit' => 30,
            'comment' => '帳號密碼'
        ])->addColumn('remember_token', 'integer', [
            'null' => true,
            'limit' => 100,
            'comment' => 'laravel session token'
        ])->addColumn('add_time', 'integer', [
            'null' => false,
            'limit' => MysqlAdapter::INT_REGULAR,
            'precision' => 10,
            'comment' => '建立時間'
        ]);


        // table Index 設定
        $table->addIndex( [ 'web_id' ], [ 'name' => 'web_id', 'unique' => true ] );
        $table->addIndex( [ 'username' ], [ 'name' => 'username', 'unique' => false ] );
        $table->addIndex( [ 'web_id', 'username' ], [ 'name' => 'web_user', 'unique' => false ] );


        // 建立 table
        $table->create();
    }
}
