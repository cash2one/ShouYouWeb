<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/13
 * Time: 下午1:54
 */

namespace Admin\Controller;


use Think\Controller;

class GameTypeController extends Controller
{
    public function showType()
    {
        $data = M()->find();
        var_dump($data);

    }

    public function addGameType()
    {

    }

    public function updateGameType()
    {

    }

    public function deleteGameType()
    {

    }
} 