<?php

class m190000_000000_add_column_is_slide extends yupe\components\DbMigration
{
    public function safeUp()
	{
		$this->addColumn('{{store_product}}', 'is_slide', "tinyint not null default '0'");
	}

	public function safeDown()
	{
		$this->dropColumn('{{store_product}}', 'is_slide');
	}
}