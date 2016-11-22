<?php
use Migrations\AbstractMigration;

class AddDocumentoToPersonas extends AbstractMigration
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
        $table = $this->table('personas');
        $table->addColumn('documento', 'string', [
            'default' => null,
            'limit' => 10,
            'null' => false,
        ]);
        $table->update();
    }
}
