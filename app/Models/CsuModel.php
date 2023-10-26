<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsuModel extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'csu_table';

     /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'csu_id';

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'csu_colleges_name',
        'image_path',
        'description',
        'user_id',
    ];
}
