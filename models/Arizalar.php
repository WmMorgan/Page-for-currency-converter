<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%ariza}}".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $familyname
 * @property string|null $address
 * @property string|null $countryoforigin
 * @property string|null $email
 * @property string|null $phonenumber
 * @property int|null $age
 * @property string|null $hired
 * @property string|null $status
 * @property string $suhbatvaqti_note
 */
class Arizalar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ariza}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['age'], 'integer'],
            [['suhbatvaqti_note'], 'required'],
            [['name', 'familyname', 'email', 'status'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 70],
            [['countryoforigin', 'hired'], 'string', 'max' => 100],
            [['phonenumber'], 'string', 'max' => 13],
            [['suhbatvaqti_note'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Ism',
            'familyname' => 'Familya',
            'address' => 'Manzil',
            'countryoforigin' => 'Davlat',
            'email' => 'Email',
            'phonenumber' => 'Telefon',
            'age' => 'Yoshi',
            'hired' => 'Kasbi',
            'status' => 'Status',
            'suhbatvaqti_note' => 'Suhbat vaqti',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ArizaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArizaQuery(get_called_class());
    }
}
