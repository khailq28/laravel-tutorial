<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table ='cars';
    
    protected $primaryKey = 'id';

    public $timestamps = true;
    
    protected $fillable = ['name', 'founded', 'description'];   

    protected $hidden = ['update_at']; //an khi dung var_dump

    protected $visible = ['name', 'founded', 'description'];

    public function carmodels() {
        return $this->hasMany(CarModel::class);
    }
    
    // Define a has many through relationship
    public function engines() {
        return $this->hasManyThrough(
            Engine::class,
            CarModel::class,
            'car_id', //Foreign key on CarModel table
            'model_id' //Foreign key on Engine table
        );
    }

    // Define a has one through relationship
    public function productionDate() {
        return $this->hasOneThrough(
            CarProductionDate::class,
            CarModel::class,
            'car_id',
            'model_id' 
        );
    }

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}