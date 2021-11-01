<?php

class m181218_121818_add_column_icon2 extends yupe\components\DbMigration
{
    public function safeUp()
	{
		$this->addColumn('{{store_product}}', 'icon2', 'varchar(250)');
	}

	public function safeDown()
	{
		$this->dropColumn('{{store_product}}', 'icon2');
	}
}