<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PCModel;

class PCController extends BaseController
{
    public function pcList()
    {
        $pcModel = new PCModel();
        $data['pcs'] = $pcModel->findAll();

        return view('pcs/list', $data);
    }

    public function pcStore()
    {
        $session = session();
      
        $data = array();

        helper(['form']);
        
        if ($this->request->getMethod() == 'post') {
            $dataPost = [
                'brand' => strip_tags($this->request->getPost('txtBrand')),
                'model' => strip_tags($this->request->getPost('txtModel')),
                'year' => strip_tags($this->request->getPost('txtYear')),
                'processor' => strip_tags($this->request->getPost('txtProcessor')),
                'memory' => strip_tags($this->request->getPost('txtMemory')),
                'storage' => strip_tags($this->request->getPost('txtStorage')),
                'graphics_card' => strip_tags($this->request->getPost('txtGraphicsCard')),
            ];
            
            $rules = [
                'txtBrand' => ['label' => 'Brand', 'rules' => 'required|min_length[3]|max_length[255]'],
                'txtModel' => ['label' => 'Model', 'rules' => 'required|min_length[3]|max_length[255]'],
                'txtYear' => ['label' => 'Year', 'rules' => 'required|numeric'],
                'txtProcessor' => ['label' => 'Processor', 'rules' => 'required|min_length[3]|max_length[255]'],
                'txtMemory' => ['label' => 'Memory', 'rules' => 'required|min_length[2]|max_length[255]'],
                'txtStorage' => ['label' => 'Storage', 'rules' => 'required|min_length[2]|max_length[255]'],
                'txtGraphicsCard' => ['label' => 'Graphics Card', 'rules' => 'required|min_length[3]|max_length[255]'],
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $mdlPC = new PCModel(); // Change the model name
                $mdlPC->insert($dataPost);
                return redirect()->to('pcs/list')->with('success', 'PC Successfully Added.');
            }
        }

        return view('pcs/add', $data);
    }
    public function pcCreate()
{
    return view('pcs/add');
}
public function show($id)
    {
        $pcModel = new PCModel();
        $data['pc'] = $pcModel->find($id);

        return view('pcs/show', $data);
    }

    public function pcView($id)
    {
        $pcModel = new PCModel();
        $data['pc'] = $pcModel->find($id);

        return view('pcs/edit', $data);
    }

    public function pcEdit($id)
    {
    $pcModel = new PCModel();
    $data['pc'] = $pcModel->find($id);

    return view('pcs/edit', $data);
    }

    public function pcUpdate($id)
    {
        $pcModel = new PCModel();
        $dataPost = [
            'brand' => $this->request->getPost('txtBrand'),
            'model' => $this->request->getPost('txtModel'),
            'year' => $this->request->getPost('txtYear'),
            'processor' => $this->request->getPost('txtProcessor'),
            'memory' => $this->request->getPost('txtMemory'),
            'storage' => $this->request->getPost('txtStorage'),
            'graphics_card' => $this->request->getPost('txtGraphicsCard'),
        ];
        $pcModel->update($id, $dataPost);
        
        return redirect()->to('pcs/list')->with('success-update', 'PC Successfully Updated.');
    }

    public function pcViewDelete($id)
    {
        $pcModel = new PCModel();
        $data['pc'] = $pcModel->find($id);

        return view('pcs/view', $data);
    }

    public function pcDelete($id)
    {
        $pcModel = new PCModel();
        $pcModel->delete($id);

        return redirect()->to('pcs/list')->with('success-delete', 'PC Successfully Deleted.');
    }
}