<?php

namespace App\Controllers;

require_once realpath(dirname(__FILE__)) . '/../helpers.php';
require_once realpath(dirname(__FILE__)) . '/../db.php';

use Helpers\DB;
use Helpers\Helpers;
use Pecee\Http\Request;
use Pecee\Http\Response;

class Controller extends DB
{
    protected $request;
    protected $response;

    public function __construct()
    {
        parent::__construct();
        $this->request = new Request();
        $this->response = new Response($this->request);
    }

    public function twig()
    {
        return Helpers::initTwig();
    }
}
