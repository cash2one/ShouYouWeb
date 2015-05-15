<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/9
 * Time: 下午4:25
 */

namespace Admin\Controller;


use Think\Controller;

class MinController extends Controller
{
    public function index()
    {
        vendor("Minify.index");
    }
} 