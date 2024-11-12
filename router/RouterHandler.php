<?php
namespace Router;

class RouterHandler {
    protected $method;
    protected $data;

    public function set_method($method) {
        $this->method = strtolower($method);
    }

    public function set_data($data) {
        $this->data = $data;
    }

    public function route($controller, $id = null) {
        $resul = new $controller();
        switch ($this->method) {
            case 'get':
                if ($id && $id == "create") {
                    $resul->create();
                } elseif ($id) {
                    $resul->show($id);
                } else {
                    $resul->index();
                }
                break;
            case 'post':
                $resul->store($this->data);
                break;
            case 'put':
                $resul->update($this->data, $id);
                break;
            case 'delete':
                $resul->destroy($id);
                break;
            default:
                echo "Method Not Allowed";
                break;
        }
    }
}
