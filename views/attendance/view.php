<?php
/* @var $this yii\web\View */
use yii\web\View;
use yii\helpers\Html;

$this->context->layout = '@admin-views/layouts/main';
$this->title = 'Attendance';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-md-3">
        <div class="box box-default box-solid">
            <div class="box-header">
                <h3 class="box-title">Employee Details</h3>
            </div>
            <div class="box-body">
                <?php echo Html::img('@web/images/haezal.jpg', ['class'=>'img-thumbnail']) ?>
                <address>
                    <b>Name</b><br>
                    Haezal Bin Musa
                </address>
                <address>
                    <b>Ic Number</b><br>
                    871007526447
                </address>
                <address>
                    <b>Position</b><br>
                    Programmer
                </address>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="box box-primary box-solid">
            <div class="box-header">
                <h3 class="box-title">Attendance Details 13 April 2015</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Clock in</h3>
                        <b>Time : </b>7:30am<br><br>
                        <?php echo Html::img('@web/images/maps.png', ['class'=>'img-thumbnail']) ?>
                        <address>
                            <b>Longitude</b><br>
                            101.71230299999999
                        </address>
                        <address>
                            <b>Latitude</b><br>
                            3.1569485999999998
                        </address>
                        <address>
                            <b>Location</b><br>
                            Kuala Lumpur
                        </address>
                    </div>
                    <div class="col-md-6">
                        <h3>Clock Out</h3>
                        <b>Time : </b>5:00am<br><br>
                        <?php echo Html::img('@web/images/maps.png', ['class'=>'img-thumbnail']) ?>
                        <address>
                            <b>Longitude</b><br>
                            101.71230299999999
                        </address>
                        <address>
                            <b>Latitude</b><br>
                            3.1569485999999998
                        </address>
                        <address>
                            <b>Location</b><br>
                            Kuala Lumpur
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
