<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class RegistrationForm extends Model
{
    //basic info
    public $fullName;
    public $gender;
    public $dateOfBirth;
    public $yearsOfExperience;
    public $industry;
    public $location;
    public $aboutMe;
    public $profilePicture; 
    //Skills
    public $ProfessionalTitle;
    public $CareerLevel;
    public $CommunicationLevel;
    public $OrganizationalLevel;
    public $JobRelatedLevel;
    //Contact
    public $Address;
    public $PhoneNumber;
    public $Website;
    public $email;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['CommunicationLevel', 'aboutMe','Years Of Experience',
'Industry'], 'safe'],
            // name, email, subject and body are required
            [['fullName','gender', 'email','CommunicationLevel', 'dateOfBirth', 'aboutMe'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    
}
