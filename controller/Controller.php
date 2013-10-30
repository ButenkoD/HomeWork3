<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/30/13
 * Time: 9:28 AM
 * To change this template use File | Settings | File Templates.
 */

namespace controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use model\Model;
use view\View;

class Controller
{
    public $request;
    public $response;
    public $result;
    static $correct_uri;

    public function __construct()
    {
        $request = Request::createFromGlobals();
        $model = new Model();
        $animal_kind = ltrim($request->getPathInfo(), "/");
        $result = $model->invokeModel($animal_kind);
        if (Controller::$correct_uri)
        {
            include "view/".$animal_kind.".html";
            View::output($result->getColor());
        }
        else
        {
            include "view/default.html";
        }

        $response = new Response();
        #$response->setContent(>);

    }
}