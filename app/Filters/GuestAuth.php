<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class GuestAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        helper('method');
        r_session();
        if (session()->get('status') == "on_test")
            return redirect()->to(base_url('test/' . pass(getTestId())));
        if (session()->get('level'))
            return redirect()->back();
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
