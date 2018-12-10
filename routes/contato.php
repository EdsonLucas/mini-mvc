<?php

    $this->get('contato', function($arg) {
        $tpl = $this->core->loadModule('template');
        
        $array = array();

        $tpl->loadTemplate('contato', $array);
    });    