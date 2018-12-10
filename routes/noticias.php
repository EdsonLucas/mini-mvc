<?php

    $this->get('noticias', function() {
        $tpl = $this->core->loadModule('template');
        $news = $this->core->loadModule('news');

        $array = array();
        $array['news'] = $news->getNewsList();

        $tpl->render('noticias_lista', $array);
    });

    $this->post('noticias', function($arg) {
        echo "ENVIOU POR POST";
    });    

    $this->get('noticias/{id}', function($arg) {
        $tpl = $this->core->loadModule('template');
        $news = $this->core->loadModule('news');

        $array = array();
        $array['info'] = $news->getNewsInfo($arg['id']);

        $tpl->render('noticias_item', $array);
    });

    // $this->get('noticias/{id}', function($arg) {
    //     $tpl = $this->core->loadModule('template');
    //     $db = $this->core->loadModule('Database');

    //     $sql = $db->query("SHOW TABLES");
    //     $array = $sql->fetchALL();

    //     //$array = array('id' => $arg[id]);

    //     $tpl->render('teste', $array);
    // });