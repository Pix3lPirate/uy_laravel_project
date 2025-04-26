<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Http\Controllers\IncomeCatagoryController;
use Illuminate\resources\Views\admin\income\catagory;



class incomeCatagory extends Model
{
    use HasFactory;

    protected $table = 'income_catagories';
    protected $fillable = [
        'incate_name',
        'incate_remarks',
    ];
}
