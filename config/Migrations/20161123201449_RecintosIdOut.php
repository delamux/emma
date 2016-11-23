<?php
use Migrations\AbstractMigration;

class RecintosIdOut extends AbstractMigration
{

    public function up()
    {
        $this->table('Courses')
            ->dropForeignKey([], 'fk_Courses_AcademicYears1')
            ->removeIndexByName('fk_Courses_AcademicYears1_idx')
            ->update();

        $this->table('Courses')
            ->removeColumn('AcademicYear_id')
            ->update();
        $this->table('personas')
            ->dropForeignKey([], 'fk_personas_IdentifyDocuments1')
            ->removeIndexByName('fk_personas_IdentifyDocuments1_idx')
            ->update();

        $this->table('personas')
            ->removeColumn('identify_document_id')
            ->update();

        $this->table('Classrooms')
            ->removeColumn('recinto_id')
            ->update();

        $this->table('type_documents')
            ->changeColumn('id', 'integer', [
                'autoIncrement' => true,
            ])
            ->update();

        $this->table('academic_years')
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('fecha_ini', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fecha_fin', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('Courses')
            ->addColumn('academic_year_id', 'integer', [
                'default' => null,
                'length' => 11,
                'null' => false,
            ])
            ->addIndex(
                [
                    'academic_year_id',
                ],
                [
                    'name' => 'fk_Courses_AcademicYears1_idx',
                ]
            )
            ->update();

        $this->table('personas')
            ->addColumn('type_document_id', 'integer', [
                'default' => null,
                'length' => 11,
                'null' => true,
            ])
            ->update();

        $this->dropTable('AcademicYears');

        $this->dropTable('identify_documents');
    }

    public function down()
    {

        $this->table('AcademicYears')
            ->addColumn('Nombre', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('fecha_ini', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('fecha_fin', 'date', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('identify_documents')
            ->addColumn('documento', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => true,
            ])
            ->addColumn('type_document_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'type_document_id',
                ]
            )
            ->create();

        $this->table('identify_documents')
            ->addForeignKey(
                'type_document_id',
                'type_documents',
                'id',
                [
                    'update' => 'NO_ACTION',
                    'delete' => 'NO_ACTION'
                ]
            )
            ->update();

        $this->table('Courses')
            ->removeIndexByName('fk_Courses_AcademicYears1_idx')
            ->update();

        $this->table('Courses')
            ->addColumn('AcademicYear_id', 'integer', [
                'default' => null,
                'length' => 11,
                'null' => false,
            ])
            ->removeColumn('academic_year_id')
            ->addIndex(
                [
                    'AcademicYear_id',
                ],
                [
                    'name' => 'fk_Courses_AcademicYears1_idx',
                ]
            )
            ->update();

        $this->table('personas')
            ->addColumn('identify_document_id', 'integer', [
                'default' => null,
                'length' => 11,
                'null' => true,
            ])
            ->removeColumn('type_document_id')
            ->addIndex(
                [
                    'identify_document_id',
                ],
                [
                    'name' => 'fk_personas_IdentifyDocuments1_idx',
                ]
            )
            ->update();

        $this->table('Classrooms')
            ->addColumn('recinto_id', 'integer', [
                'default' => null,
                'length' => 11,
                'null' => false,
            ])
            ->update();

        $this->table('type_documents')
            ->changeColumn('id', 'integer', [
                'default' => null,
                'length' => 11,
                'null' => false,
            ])
            ->update();

        $this->table('Courses')
            ->addForeignKey(
                'AcademicYear_id',
                'AcademicYears',
                'id',
                [
                    'update' => 'NOACTION',
                    'delete' => 'NOACTION'
                ]
            )
            ->update();

        $this->table('personas')
            ->addForeignKey(
                'identify_document_id',
                'identify_documents',
                'id',
                [
                    'update' => 'NOACTION',
                    'delete' => 'NOACTION'
                ]
            )
            ->update();

        $this->dropTable('academic_years');
    }
}

