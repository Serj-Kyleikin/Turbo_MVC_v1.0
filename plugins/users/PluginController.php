<?php

namespace plugins\users;

use application\core\Controller;
use application\core\Model;

class PluginController extends Controller {

    public function start($info) {

        // Маршрутизация

        if($info['path'] == 'authorization' and isset($_COOKIE['user'])) {
            if($this->model->checkUser() == 'checked') redirect('cabinet');
        }

        // Получение данных модели

        return $this->model->getData($info);
    }
}