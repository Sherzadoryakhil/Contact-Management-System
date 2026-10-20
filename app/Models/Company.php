<?php

namespace App\Models;

use App\Models\Scopes\AllowedFilterSearch;
use App\Models\Scopes\AllowedSort;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch, AllowedSort;

    // syllabel property
    protected $fillable = ['name', 'email', 'address', 'website', 'user_id'];
    
    public function contacts(){
        // the second argument of the has many is the foreign key column on the
        // table table associated with the child model
        // we omit because we use naming convention it will automatically
        // the eloquent will assume the current model name in snake_id (cpmpany_id)
        return $this->hasMany(Contact::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
