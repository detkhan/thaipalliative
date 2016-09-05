<?php

namespace backend\modules\thaipalliative\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\modules\thaipalliative\controllers\ReportSec1Controller;

class ReportController extends Controller
{
    public function actionIndex()
    {
      $totalall=ReportSec1Controller::counttotal(13777,yes);
      $totalsite=ReportSec1Controller::counttotal(13777,no);
      $render="report";
      $url=$this->render($render, [
        'totalall' => $totalall,
        'totalsite' => $totalsite,
      ]);

    return  $url;
    }
}
