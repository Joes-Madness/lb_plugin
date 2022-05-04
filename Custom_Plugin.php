<?php
    class Custom_Plugin extends LB_Plugin {
        public function init() {
            require_once(dirname(__FILE__).'/Custom/CustomModule.php');

            $this->add('payment/pay', array(
                'moduleClassName' => 'CustomModule',
                'controller' => 'default',
                'action' => 'index',
                'title' => 'Оплата с мобильных телефонов',
                'description' => ''
            ));
        }
    }
?>
