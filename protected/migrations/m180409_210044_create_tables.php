<?php

class m180409_210044_create_tables extends CDbMigration
{

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	    $this->createTable('tbl_question', [
            'id' => 'pk',
            'text' => 'varchar(255)',
        ]);

	    $this->createTable('tbl_answer', [
            'id' => 'pk',
            'question_id' => 'integer',
            'line' => 'integer',
            'text' => 'varchar(255)',
            'score' => 'integer',
        ]);

	    $this->addForeignKey('answer_question_pk', 'tbl_answer', 'question_id', 'tbl_question', 'id', 'CASCADE', 'CASCADE');
	}

	public function safeDown()
	{
	    $this->dropTable('tbl_answer');
        $this->dropTable('tbl_question');
	}

}