<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataMhsModel;
use App\Models\ProdiModel;
use App\Models\TypeMhsModel;

class DataMhsController extends BaseController
{
    public function index()
    {
        $model = new DataMhsModel();
        $data['datamhs'] = $model->allData();

        // return json_encode(array(
        //     "data" => $data['datamhs']
        // ));
        return view('mahasiswa/index', $data);
    }

    public function tambah()
    {
        $pmodel = new ProdiModel();
        $data['prodi'] = $pmodel->findAll();

        $tmodel = new TypeMhsModel();
        $data['typemhs'] = $tmodel->findAll();
        return view('mahasiswa/tambah_data', $data);
    }
    public function addData()
    {
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'prodi_id' => $this->request->getPost('prodi_id'),
            'type_id' => $this->request->getPost('type_id'),
            'angkatan' => $this->request->getPost('angkatan')
        ];
        $model = new DataMhsModel();
        $model->insert($data);
        return redirect()->to('/');
    }

    public function editData($id)
    {
        $pmodel = new ProdiModel();
        $data['prodi'] = $pmodel->findAll();

        $tmodel = new TypeMhsModel();
        $data['typemhs'] = $tmodel->findAll();
        // return view('mahasiswa/edit_data', $data);

        $model = new DataMhsModel();
        $data['datamhs'] = $model->find($id);
        return view('mahasiswa/edit_data', $data);
    }
    public function prosesEdit()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('datamhs');
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'tgl_lahir' => $this->request->getPost('tgl_lahir'),
            'prodi_id' => $this->request->getPost('prodi_id'),
            'type_id' => $this->request->getPost('type_id'),
            'angkatan' => $this->request->getPost('angkatan'),
        ];

        // $model = new DataMhsModel();
        // $model->update('nim', $data);
        if ($builder->replace($data)) {
            return redirect()->to('/');
        }
    }
    public function hapus_data($id)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('datamhs');
        if ($builder->delete(['nim' => $id])) {
            return redirect()->to('/');
        }
        // $model = new DataMhsModel();
        // $model->delete($id);
    }
}
