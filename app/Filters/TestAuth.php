<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class TestAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        helper('method');
        r_session();
        if (session()->get('status') != "on_test")
            return redirect()->back();
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
