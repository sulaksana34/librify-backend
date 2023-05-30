<?php
 
namespace APIs\Reference\Models;
 
use CodeIgniter\Model;
 
class SubCategoryModel extends Model
{
    protected $table = 'ref_sub_categories';
    protected $primaryKey = 'sub_category_id';
    protected $allowedFields = [
        'category_id',
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}