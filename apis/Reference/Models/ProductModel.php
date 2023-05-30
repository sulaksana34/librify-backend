<?php
 
namespace APIs\Reference\Models;
 
use CodeIgniter\Model;
 
class ProductModel extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_produk', 'harga'];
}