<?php

namespace App\Models;

use CodeIgniter\Model;

class DataMhsModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'datamhs';
  protected $primaryKey       = 'nim';
  protected $useAutoIncrement = true;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = true;
  protected $allowedFields    = ['nim', 'nama', 'prodi', 'angkatan', 'prodi_id', 'type_id', 'tgl_lahir'];

  // Dates
  protected $useTimestamps = false;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];


  public function allData()
  {
    return $this->db->table('datamhs')
      ->select('datamhs.nim, datamhs.nama, datamhs.tgl_lahir, datamhs.angkatan, prodi.nama_prodi, typemhs.type_mhs')
      ->join('prodi', 'prodi.prodi_id = datamhs.prodi_id')
      ->join('typemhs', 'typemhs.type_id = datamhs.type_id')
      ->get()->getResult();
  }
}
