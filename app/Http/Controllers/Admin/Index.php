<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Index extends Controller
{
    public function index() {
        $data['data_tab'] = $this->getTab();
       
        var_dump($_FILES);
        return view("Admin.index",$data);
    }
    
    public function save(Request $request) {
         return redirect('Admin/Index.html');
    }
    public function getTab() {
        $aryTab = [
            'admin-tab-1' => view('Admin.product.add_tab1',['idTab' => 'admin-tab-1'])->render(),
            'admin-tab-2' => view('Admin.product.add_tab2',['idTab' => 'admin-tab-2'])->render(),
            'admin-tab-3' => view('Admin.product.add_tab3',['idTab' => 'admin-tab-3'])->render(),
            'admin-tab-4' => view('Admin.product.add_tab4',['idTab' => 'admin-tab-4'])->render(),
            'admin-tab-5' => view('Admin.product.add_tab5',['idTab' => 'admin-tab-5'])->render(),
        ];
        return $aryTab;
    }
}
