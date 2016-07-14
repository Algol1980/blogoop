<?php

/**
 * Created by PhpStorm.
 * User: Алексей
 * Date: 14.07.2016
 * Time: 13:04
 */
class Router
{
    protected $uri;
    protected $controller;
    protected $action;
    protected $params;

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    public function __construct($uri)
    {
        print_r("Constructor Working! " . $uri);
    }
}