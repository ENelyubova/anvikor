<?php

class m181218_121817_add_column_icon extends yupe\components\DbMigration
{
    public function safeUp()
	{
		$this->addColumn('{{store_product}}', 'icon', 'varchar(250)');
	}

	public function safeDown()
	{
		$this->dropColumn('{{store_product}}', 'icon');
	}
}