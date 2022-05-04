<?php
    class Inplat_Plugin extends LB_Plugin {
        public function init() {
            require_once(dirname(__FILE__).'/Inplat/InplatModule.php');

            $this->add('payment/pay', array(
                'moduleClassName' => 'InplatModule',
                'controller' => 'default',
                'action' => 'index',
                'title' => 'Оплата с мобильных телефонов',
                'description' => ''
            ));
        }
    }
?>
