<?php


namespace app\models;

use yii\base\Model;
class ArizaForm extends Model
{
public $id;
public $name;
public $familyname;
public $address;
public $countryoforigin;
public $email;
public $phonenumber;
public $age;
public $hired;

public function rules()
{
    return [
        [['name', 'familyname', 'address', 'countryoforigin', 'email', 'phonenumber', 'age'], 'required'],
        [['name', 'familyname', 'address', 'countryoforigin', 'email', 'hired'], 'string', 'max'=>50],
        ['email', 'email'],
        ['age', 'integer'],
        ['phonenumber', 'integer']

    ];
}
    public function attributeLabels()
    {
        return [
            'name' => 'Ism',
            'age' => 'Yoshingiz',
            'familyname' => 'Familiya',
            'address' => 'Manzil',
            'countryoforigin' => 'Davlat',
            'phonenumber' => 'Telefon raqam',
            'hired' => 'Kasb',
        ];
    }

    public function insert() {
    $connection = \Yii::$app->db;
        return $connection->createCommand()->insert('ariza', [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email,
            'familyname' => $this->familyname,
            'address' => $this->address,
            'countryoforigin' => $this->countryoforigin,
            'phonenumber' => $this->phonenumber,
            'hired' => $this->hired,
            'status' => 'Yangi'
        ])->execute();

    }

}