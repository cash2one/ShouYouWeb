<?php
/**
 * Created by PhpStorm.
 * User: chencong
 * Date: 15/5/7
 * Time: 下午12:04
 */

namespace Index\Controller;


use Think\Controller;

class MinController extends Controller{
    public function index(){
       vendor("Minify.index");
    }
} 