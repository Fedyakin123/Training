<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 12.08.2015
 * Time: 22:43
 */
class controller
{
    public $vars = [];

    public function render($key, $value)
    {
        $this->vars[$key] = $value;
    }

    public function view($template = '404')
    {
        foreach($this->vars as $key => $value) {
            $$key = $value;
        }
        if (file_exists(ROOT_DIR . 'templates' . DS . $template . '.php')) {
            require_once(ROOT_DIR . 'templates' . DS . 'main.php');
        }
    }
}
