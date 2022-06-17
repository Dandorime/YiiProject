<?php

use yii\db\Migration;

/**
 * Class m220617_175352_GitSearch
 */
class m220617_175352_GitSearch extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('GitSearch', [
            'id' => $this->primaryKey(),
            'name_project'=> $this->string()->notNull(),
            'author'=> $this->string()->notNull(),
            'stargazers' => $this->integer(),
            'watchers' => $this->integer(),
            'url' => $this->string(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('GitSearch');
    }
}
