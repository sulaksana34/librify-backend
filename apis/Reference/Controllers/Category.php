<?php
 
namespace APIs\Reference\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use APIs\Reference\Models\CategoryModel;
 
class Category extends ResourceController
{
    use ResponseTrait;

    function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->now = date('Y-m-d H:i:s');
        $this->model = new CategoryModel();
    }

    // all users
    public function index()
    {
        $data['data'] = $this->model->orderBy('category_id', 'ASC')->findAll();
        return $this->respond($data);
    }
    // create
    public function create()
    {
        $data = [
            'name'          => $this->request->getVar('name'),
            'created_at'    => $this->now,
        ];
        $this->model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data kategori berhasil ditambahkan.'
            ]
        ];
        return $this->respondCreated($response);
    }
    // single user
    public function show($id = null)
    {
        $data = $this->model->where('category_id', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data tidak ditemukan.');
        }
    }
    // update
    public function update($id = null)
    {
        $data = [
            'name'          => $this->request->getVar('name'),
            'updated_at'    => $this->now,
        ];
        $this->model->where('category_id', $id)->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data kategori berhasil diubah.'
            ]
        ];
        return $this->respond($response);
    }
    // delete
    public function delete($id = null)
    {
        $data = [
            'deleted_at'    => $this->now,
        ];
        $this->model->where('category_id', $id)->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data kategori berhasil dihapus.'
            ]
        ];
        return $this->respond($response);
    }
}