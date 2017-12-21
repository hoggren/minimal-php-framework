<?php

class Result
{
    private $viewDir = '../views/';
    private $page;

    public function view($view) {
        header('Content-Type: text/html');
        $this->page = file_get_contents($this->viewDir . $view . '.html');
    }

    public function json($object) {
        header('Content-Type: application/json');
        $this->page = json_encode($object);
    }

    public function text($text) {
        header('Content-Type: text/plain');
        $this->page = strip_tags($text);
    }

    public function run($sh, $showResult = false) {
        $result = shell_exec($sh);
        echo $showResult ? $result : '';
    }

    public function render() {
        echo $this->page;
    }
}
