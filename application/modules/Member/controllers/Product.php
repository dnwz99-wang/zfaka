<?php

/*
 * 功能：会员中心－个人中心
 * author:资料空白
 * time:20180509
 */

class ProductController extends PcBasicController
{

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
        if ($this->login==FALSE AND !$this->userid) {
            $this->redirect("/member/login");
            return FALSE;
        }
		$data = array();
        $this->getView()->assign($data);
    }
}