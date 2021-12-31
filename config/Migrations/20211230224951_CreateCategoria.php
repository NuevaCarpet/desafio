<?php
use Migrations\AbstractMigration;

class CreateCategoria extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $table = $this->table("categoria");
        $table->addColumn('descripcion_cat', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->save();

        $refTable = $this-> table("categoria");
        $refTable ->addcolumn("porducto_id","integer",array("signed"=>"disable"))
                  ->addForeignKey("producto_id","productos","id", array ('delete'=> 'SET_NULL', 'update'=> 'NO_ACTION'))
                  ->save();
    }
}
