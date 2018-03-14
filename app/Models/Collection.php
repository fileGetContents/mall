<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'mall_collection';
    protected $primaryKey = 'collection_id';
    public $timestamps = false;
    protected $fillable = ['collection_id', 'collection_table', 'collection_tableid', 'user_id', 'collection_time'];

    public function getCollectionTimeAttribute($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

    public static function filed()
    {
        return ['collection_id', 'collection_table', 'collection_tableid', 'user_id', 'collection_time'];
    }

    /**
     * @param $array
     * @return bool
     */
    public function insert($array)
    {
        if (is_array($array)) {
            foreach ($array as $key => $value) {
                $this->$key = $value;
            }
            return $this->save();
        }
        return false;
    }
}
