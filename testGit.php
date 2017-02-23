<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 17/2/23
 * Time: 09:56
 */

class TestGit {
    //属性
    protected $publicKey = 'DDFFdfeeeG';

    //
    function __construct() {
        echo '__construct() 方法';
    }
    //获取git当前版本
    public function getGitVersion() {
        return 'v1.0';
    }
}