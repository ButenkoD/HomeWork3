<?php
/**
 * Created by JetBrains PhpStorm.
 * User: kanni
 * Date: 10/30/13
 * Time: 9:28 AM
 * To change this template use File | Settings | File Templates.
 */

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require 'model/model.php';

#  public $request;
#  public $response;
#  public $result;

$correct_uri = false;
$request = Request::createFromGlobals();
$animal_kind = ltrim($request->getPathInfo(), "/");

switch ($animal_kind)
{
    case "cat":
        $result = model\createCat();
        break;
    case "bear":
        $result = model\createBear();
        break;
    case "eagle":
        $result = model\createEagle();
        break;
    case "dove":
        $result = model\createDove();
        break;
    case "":
        break;
    default:
    $response = new Response();
    $response->setStatusCode(404);
    $response->setContent("404 error");
    $response->headers->set('Content-Type', 'text/html');
    $response->send();
}

if (!strlen($animal_kind)==0)
{
    #$result = model\invokeModel($animal_kind);
    include "view/".$animal_kind.".html";
}
else
{
    include "view/default.html";
}

/**


*/


