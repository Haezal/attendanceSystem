<?php
/* @var $this yii\web\View */
use yii\web\View;
use yii\helpers\Html;

$this->context->layout = '@admin-views/layouts/main';
$this->title = 'Attendance';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="box box-warning box-solid">
    <div class="box-header">
        <h3 class="box-title">Employee List</h3>
    </div>
    <div class="box-body no-padding table-responsive">
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <th>Bil</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Clock In Time</th>
                    <th>Clock In Location</th>
                    <th>Clock Out Time</th>
                    <th>Clock Out Location</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Haezal Musa</td>
                    <td>Programmer</td>
                    <td>7:30am</td>
                    <td>Kuala Lumpur</td>
                    <td>5:00pm</td>
                    <td>Kuala Lumpur</td>
                    <td>
                        <a href="#" class="btn btn-success">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rafidah Roslan</td>
                    <td>System Engineer</td>
                    <td>7:30am</td>
                    <td>Kuala Lumpur</td>
                    <td>5:00pm</td>
                    <td>Kuala Lumpur</td>
                    <td>
                        <a href="#" class="btn btn-success">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nor Junaidah</td>
                    <td>Heod Of Department</td>
                    <td>7:30am</td>
                    <td>Kuala Lumpur</td>
                    <td>5:00pm</td>
                    <td>Kuala Lumpur</td>
                    <td>
                        <a href="#" class="btn btn-success">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mohd Feerhan</td>
                    <td>Architect</td>
                    <td>7:30am</td>
                    <td>Kuala Lumpur</td>
                    <td>5:00pm</td>
                    <td>Kuala Lumpur</td>
                    <td>
                        <a href="#" class="btn btn-success">View Details</a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Marina Mansor</td>
                    <td>Manager</td>
                    <td>7:30am</td>
                    <td>Kuala Lumpur</td>
                    <td>5:00pm</td>
                    <td>Kuala Lumpur</td>
                    <td>
                        <a href="#" class="btn btn-success">View Details</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>