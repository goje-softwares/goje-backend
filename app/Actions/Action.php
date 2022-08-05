<?php

namespace App\Actions;

use App\Contracts\Action as ActionInterface;

abstract class Action implements ActionInterface
{
    public $request_method = "GET";
}
