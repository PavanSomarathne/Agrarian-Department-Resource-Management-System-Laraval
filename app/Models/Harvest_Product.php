<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Harvest_Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    public $table = 'harvest_products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'harvest_name',
        'harvest_quantity',
        'harvest_phone',
        'harvest_price',
        'harvest_selling_type',
        'harvest_image',
        'harvest_description',
        'is_active',
    ];

}
