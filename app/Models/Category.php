<?php

namespace App\Models;

use App\models\SubscriberCategory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function cat_jobs()
    {
        return $this->hasMany(Job::class, 'cate_id');
    }
    public function subscriberCategories()
    {
        return $this->hasMany(SubscriberCategory::class, 'cate_id');
    }
}
