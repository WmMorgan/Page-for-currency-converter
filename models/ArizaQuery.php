<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Arizalar]].
 *
 * @see Arizalar
 */
class ArizaQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Arizalar[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Arizalar|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
