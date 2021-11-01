<?php

class m181218_121816_add_doc extends yupe\components\DbMigration
{
    public function safeUp()
	{
		$this->addColumn('{{store_product}}', 'document', 'string');
	}

	public function safeDown()
	{
		$this->dropColumn('{{store_product}}', 'document');
	}
}