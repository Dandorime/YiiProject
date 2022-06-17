<?php

use yii\db\Migration;

/**
 * Class m220617_175505_SaveSearch
 */
class m220617_175505_SaveSearch extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('SaveSearch', [
            'id' => $this->primaryKey(),
            'search'=> $this->string()->notNull(),
            'result'=> $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220617_175505_SaveSearch cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220617_175505_SaveSearch cannot be reverted.\n";

        return false;
    }
    */
}
