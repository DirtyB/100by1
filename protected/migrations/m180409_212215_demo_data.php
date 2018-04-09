<?php

class m180409_212215_demo_data extends CDbMigration
{

	public function safeUp()
	{
	    $data = require('demo_data.php');

	    foreach ($data['questions'] as $question) {
            $this->insert('tbl_question', $question);
        }
        foreach ($data['answers'] as $answer) {
            $this->insert('tbl_answer', $answer);
        }
	}

	public function safeDown()
	{
	    $this->delete('tbl_question');
	}
}