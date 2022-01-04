<?php
use Migrations\AbstractMigration;

class CrearTablaProduc extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this -> table("producto");
        $table->addColumn("Nombre_prod","string",["limit"=>100])
              ->addColumn("Estado","enum",["values"=> "Alta,Baja"])
              ->create();
        $refTable = $this->table("producto");
        $refTable->addColumn("categoria_id","integer",["signed"=>"disable"])
                 ->addForeignKey("categoria_id","categoria","id",["delete"=>"CASCADE","update" =>"NO_ACTION"])
                 ->update();
    }
}
