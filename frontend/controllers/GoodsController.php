<?php
/**
 * ============================================================================
 * Copyright © 2016-2017 HongYuKeJi.Co.Ltd. All rights reserved.
 * Http://www.hongyuvip.com
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买商用版权。
 * 堂堂正正做人，踏踏实实做事。
 * ----------------------------------------------------------------------------
 * Author: Shadow  QQ: 1527200768  Time: 2017/3/12 14:42
 * E-mail: admin@hongyuvip.com
 * ============================================================================
 */


namespace frontend\controllers;


class GoodsController extends BaseController
{
    public function actionIndex(){
        return $this->render('index');
    }
}