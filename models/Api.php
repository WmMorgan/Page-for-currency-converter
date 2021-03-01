<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ariza".
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
 */
class Api extends \yii\db\ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ariza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'familyname', 'email', 'age', 'address', 'countryoforigin', 'phonenumber'], 'required'],
            [['age'], 'integer'],
            [['name', 'familyname', 'email', 'status'], 'string', 'max' => 50],
            [['address'], 'string', 'max' => 70],
            [['countryoforigin', 'hired'], 'string', 'max' => 100],
            [['phonenumber'], 'string', 'max' => 13],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'familyname' => 'Familyname',
            'address' => 'Address',
            'countryoforigin' => 'Countryoforigin',
            'email' => 'Email',
            'phonenumber' => 'Phonenumber',
            'age' => 'Age',
            'hired' => 'Hired',
            'status' => 'Status',
        ];
    }
}
