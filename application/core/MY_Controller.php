<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    var $meta = array();

    public function __construct() {
        parent::__construct(); //繼承父類別的涵數
        $this->_load();
    }

    public function createView($val, $data) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
        $this->load->view($val, $data);
        $this->load->view('templates/footer', $data);
    }

    /*
     *  load css or javascript
     */

//設定meta
    public function setMeta() {
        $this->meta['name'] = 'webName'; //網站名稱
        $this->meta['image'] = 'webIcon.jpg'; //for FB 200*200,分享頁面時的使用圖片
        $this->meta['description'] = '網站描述'; //網站描述
    }

    private function _load() {
        $this->setMeta();
    }

}