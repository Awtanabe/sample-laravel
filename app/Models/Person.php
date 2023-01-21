<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $guarded = array('id');

    // バリデーション
    public static $rules = array(
        'name' => 'required',
        'mai' => 'email',
        'age' => 'integer|min:0|max:150',
    );

    public function scopeNameEqueal($query, $str)
    {
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }

    public function getData()
    {
        return $this->id.': '. $this->name . $this->mail . '(' . $this->age . ')';
    }
}
