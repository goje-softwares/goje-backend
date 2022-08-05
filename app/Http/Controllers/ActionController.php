<?php

namespace App\Http\Controllers;

use App\Actions\Action;

class ActionController extends Controller
{

    public function __invoke($actionName)
    {
        $action = 'App\\Actions\\' . $actionName;

        if (!class_exists($action))
            return "class {$action} not existed!";
        /**
         * @var $action Action
         */
        $action = new $action();

        if ($action->request_method !== request()->method())
            return "action method is {$action->request_method} and your called method is " . request()->method() . "!";


        return $action->render();
    }
}
