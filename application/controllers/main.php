<?php

class Main/*類別名稱，首字母需大寫*/ extends MY_Controller {
    var $page;
    var $data = array();
    public function __construct() {
        parent::__construct(); //繼承父類別的涵數
        $this->_load();//初始化
    }

    public function index() {
        
        //載入view及傳送資料(data)
        $this->createView($this->page, $this->data);
    }

    //設定程式基本變數
    private function _load() {
        //預設程式名稱為展示頁面名稱
        $this->data['meta'] = $this->meta;
        $this->page = $this->uri->segment(0) == ''?'main': $this->uri->segment(0);
    }

}

?>
