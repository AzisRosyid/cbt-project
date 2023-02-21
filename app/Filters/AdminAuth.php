<?php 
namespace App\Filters;

use App\Models\TestModel;
use CodeIgniter\Database\BaseUtils;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('status') == "on_test") {
            $testModel = new TestModel();
            $url = pass($testModel->where('user_id', session()->get('id'))->orderBy("id", "desc")->first()['id']);
            return redirect()->to(base_url('test/'.$url));
        }
        if (session()->get('level') == 'Admin')
        {
            return redirect()->back();
        }
    }
    
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}