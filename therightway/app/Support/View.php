<?php

namespace TheRightWay\App\Support;

use TheRightWay\App\Exceptions\ViewNotFoundException;

class View
{
    public function __construct(protected string $view, protected array $params = [])
    {
    }

    public function render(): string
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';

        if ( ! file_exists($viewPath)) {
            throw new ViewNotFoundException();
        }
        //foreach ($this->params as $key => $value) {
            // it creates new variable called like
            // the key, and then it assigns its value
            //$$key = $value;
        //}
        extract($this->params);
        ob_start();

        include $viewPath;

        return (string)ob_get_clean();
    }

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function __get(string $name)
    {
        return $this->params[$name] ?? null;
    }
}