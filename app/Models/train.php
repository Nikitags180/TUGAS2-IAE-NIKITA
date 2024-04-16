<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class train extends Model
{
    use HasFactory;
    protected $table = 'train';

    protected $primaryKey = 'Row ID';

    public $timestamps = false;

    protected $fillable = [
        'Order Date', 'Ship Date', 'Customer Name', 'Segment', 'Country', 'City', 'Category', 'Sub-Category', 'Product Name', 'Sales'
    ];
}
