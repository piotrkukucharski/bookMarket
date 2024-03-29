<?php


namespace app\models;


use yii\base\InvalidConfigException;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Class Book
 * @package app\models
 * @property string $id [integer]
 * @property string $title [varchar(255)]
 * @property string $description
 * @property string $id_publisher [integer]
 * @property string $id_shop [integer]
 */
class Book extends ActiveRecord
{
    public static function tableName()
    {
        return 'public.{{%books}}';
    }

    /**
     * @return ActiveQuery
     * @throws InvalidConfigException
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['id' => 'id_file'])
            ->viaTable('public.{{%book-files}}', ['id_book' => 'id']);
    }

    /**
     * @return ActiveQuery
     * @throws InvalidConfigException
     */
    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'id_author'])
            ->viaTable('public.{{%book-author}}', ['id_book' => 'id']);
    }
}