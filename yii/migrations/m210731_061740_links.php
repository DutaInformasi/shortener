<?php

use yii\db\Migration;

/**
 * Class m210731_061740_links
 */
class m210731_061740_links extends Migration
{
    public $table_name = 'links';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->table_name, [
            'id' => $this->primaryKey(),
            'alias' => $this->string(25)->notNull()->unique(),
            'url_string' => $this->string(255)->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210731_061740_links cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210731_061740_links cannot be reverted.\n";

        return false;
    }
    */
}
