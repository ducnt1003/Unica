<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Course extends Model
{
    use HasFactory;

    protected $attributes = ['features'];

    protected $appends = ['features'];
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course_parts(){
        return $this->hasMany(CoursePart::class, 'course_id');
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, 'course_tag');
    }

    public function features(): Attribute {
        $course_tags = $this->tags;
        $tags = DB::table('tags')->get()->pluck('name');
        $results = [];
        foreach ($tags as $tag) {
            $results[$tag] = $course_tags->where('name', '=', $tag)->first() ? 1 : 0;
        }
        return Attribute::make(
            get: fn () => $results,
        );
    }
}
