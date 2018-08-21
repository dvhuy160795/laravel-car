<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    public function index() {
        $data['data_tab'] = $this->getTab();
        return view("Admin.index",$data);
    }
    
    public function save(Request $request) {
         return redirect('Admin/Index.html');
    }
    public function getTab() {
        $aryTab = [
            'admin-tab-product' => view('Admin.product.list',['idTab' => 'admin-tab-product'])->render(),
            'admin-tab-product2' => view('Admin.product.add_tab2',['idTab' => 'admin-tab-product2'])->render(),
        ];
        return $aryTab;
    }
}
