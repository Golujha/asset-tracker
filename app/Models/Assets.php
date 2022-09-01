<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assets extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getAssetType(){
        return $this->hasOne(AssetsType::class,"id","assets_type_id");
    }
}
