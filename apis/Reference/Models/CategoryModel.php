<?php
 
namespace APIs\Reference\Models;
 
use CodeIgniter\Model;
 
class CategoryModel extends Model
{
    protected $table = 'ref_categories';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}