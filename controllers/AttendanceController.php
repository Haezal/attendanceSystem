<?php

namespace app\controllers;

class AttendanceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionClockout()
    {
        return $this->render('clockOut');
    }
}
