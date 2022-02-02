<?php

namespace App\Filters;


// ------------ AUTHORIZATION
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $tokenModel = new \App\Models\Tokens();
        $token = substr($request->getServer('HTTP_AUTHORIZATION'),7);
        if (!$tokenModel->where('token',$token)->find()) {
            $response = \Config\Services::response();
            $response->setStatusCode(401);
            $response->send();
            die();
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}