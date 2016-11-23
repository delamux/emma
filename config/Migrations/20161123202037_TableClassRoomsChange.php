<?php
use Migrations\AbstractMigration;

class TableClassRoomsChange extends AbstractMigration
{

    public function up()
    {
        $this->table('GroupCourses')
            ->dropForeignKey([], 'fk_GroupCourses_Classrooms1')
            ->update();

        $this->table('Class_Rooms')
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('aforo', 'integer', [
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
            ->create();

        $this->table('GroupCourses')
            ->addForeignKey(
                'Classroom_id',
                'class_rooms',
                'id',
                [
                    'update' => 'NOACTION',
                    'delete' => 'NOACTION'
                ]
            )
            ->update();

        $this->dropTable('Classrooms');
    }

    public function down()
    {
        $this->table('GroupCourses')
            ->dropForeignKey(
                'Classroom_id'
            );

        $this->table('Classrooms')
            ->addColumn('nombre', 'string', [
                'default' => null,
                'limit' => 45,
                'null' => false,
            ])
            ->addColumn('aforo', 'integer', [
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
            ->create();

        $this->table('GroupCourses')
            ->addForeignKey(
                'Classroom_id',
                'Classrooms',
                'id',
                [
                    'update' => 'NOACTION',
                    'delete' => 'NOACTION'
                ]
            )
            ->update();

        $this->dropTable('Class_Rooms');
    }
}

