<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $address2
 * @property string $postcode
 * @property string $city
 * @property integer $state_id
 * @property string $contact_person
 * @property string $contact_phone
 * @property string $contact_email
 *
 * @property State $state
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['state_id'], 'integer'],
            [['name', 'address', 'address2', 'contact_person'], 'string', 'max' => 255],
            [['postcode'], 'string', 'max' => 10],
            [['city', 'contact_email'], 'string', 'max' => 100],
            [['contact_phone'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'address' => 'Address',
            'address2' => 'Address2',
            'postcode' => 'Postcode',
            'city' => 'City',
            'state_id' => 'State ID',
            'contact_person' => 'Contact Person',
            'contact_phone' => 'Contact Phone',
            'contact_email' => 'Contact Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState()
    {
        return $this->hasOne(State::className(), ['id' => 'state_id']);
    }
}
