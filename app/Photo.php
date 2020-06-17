<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    public function description() {
        return $this->hasOne("App\PhotoDescription", "photo_id");
    }

    public function category() {
        return $this->belongsTo("App\Category", "category_id", "id");
    }

    // (ten class, bang phu, khoa chinh/ngoai, khoa chinh/ngoai)
    public function tags() {
        return $this->belongsToMany("App\Tag", "taggable", "photo_id", "tag_id");
    }
}
