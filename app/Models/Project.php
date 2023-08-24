<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['project_name', 'description', 'creator_name', 'image', 'type_id'];

    public function toSlug($string){
        $string = strtolower($string);
        $array = explode(' ', $string);
        return implode('-', $array);
    }

    public function types(){
        return $this->belongsTo(Types::class);
    }
}
