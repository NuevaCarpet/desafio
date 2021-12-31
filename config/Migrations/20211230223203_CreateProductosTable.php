<?php
use Migrations\AbstractMigration;

class CreateProductosTable extends AbstractMigration
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
        $table = $this -> table("Productos");
        $table  -> addcolumn("descripcion_prod","string", array("limit" => 100))
                -> addcolumn("estado","enum",array("values" => "baja,alta"))
                ->create();

    }
}
