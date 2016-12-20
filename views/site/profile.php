<?php

use yii\helpers\html;
$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>

<ul>
      <legend> <font color="blue", strong>BASIC INFORMATION</font></legend>
    
    <li> <label>fullName</label>: <?= Html::encode($model->fullName) ?></li>
    <li> <label>Gender</label>: <?= Html::encode($model->gender) ?></li>
    <li> <label>Date of Birth</label>: <?= Html::encode($model->dateOfBirth) ?></li>
    <li> <label>Years Of Experience</label>: <?= Html::encode($model->yearsOfExperience) ?></li>
    <li> <label>Industry</label>: <?= Html::encode($model->industry) ?></li>
    <li> <label>Location</label>: <?= Html::encode($model->location) ?></li>
    <li> <label>About Me</label>: <?= Html::encode($model->aboutMe) ?></li>
    <li> <label>Profile Picture</label>: <?= Html::encode($model->profilePicture) ?></li>
    <br>
        <legend> <font color="blue", strong>SKILLS</font></legend>
    <li> <label>Professional Title</label>: <?= Html::encode($model->ProfessionalTitle) ?></li>
    <li> <label>Career Level</label>: <?= Html::encode($model->CareerLevel) ?></li>
    <li> <label>Communication level</label>: <?= Html::encode($model->CommunicationLevel) ?></li>
    <li> <label>Organizational level</label>: <?= Html::encode($model->OrganizationalLevel) ?></li>
    <li> <label>Job Related level</label>: <?= Html::encode($model->JobRelatedLevel) ?></li>
    
    <legend> <font color="blue", strong>CONTACT</font></legend>
    
    <li> <label>Email</label>: <?= Html::encode($model->email) ?></li>
    








</ul>