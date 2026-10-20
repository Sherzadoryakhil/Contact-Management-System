<?php

namespace App\Models;

use App\Models\Scopes\AllowedFilterSearch;
use App\Models\Scopes\AllowedSort;
use App\Models\Scopes\SimpleSoftDeletes;
use App\Models\Scopes\SimpleSoftDeletingScope;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes, AllowedFilterSearch, AllowedSort;
    // for educational purpose global scope
    // use HasFactory, SimpleSoftDeletes;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'company_id'];
    // protected $guarded = [];

    // if we omit the second argument, eloquent will determine the foreign key
    // by examing the relationship method
    public function company(){
        return $this->belongsTo(Company::class)->withTrashed();  
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    // after we used global scope
    // protected static function booted() {
        // static::addGlobalScope(new SimpleSoftDeletingScope);

        // static::addGlobalScope("softDeletes", function (Builder $builder) {
        //     $builder->whereNull("deleted_at");
        // });
    // }

    // after we use local scopes
    // public function scopeSortByNameAlpha($query){
    //     return $query->orderBy('first_name');
    // }
    
    // public function scopeFilterByCompany($query) {
    //     if($companyId = request()->query("company_id")){
    //         $query->where("company_id", $companyId);
    //     }

    //     return $query;
    // }

    // after we use dynamic scope
    // after making our local scope reusable comment all below
    // public function scopeAllowedSorts($query, string $column){
    //     return $query->orderBy($column);
    // }

    // public function scopeAllowedFilters($query, ...$keys) {
    //     foreach ($keys as $key) {
    //         if($value = request()->query($key)){
    //             $query->where($key, $value);
    //         }
    //     }
    //     return $query;
    // }

    // public function scopeAllowedSearch(Builder $query, ...$keys){
    //     if($search = request()->query('search')){
    //         foreach($keys as $index => $key) {
    //             $method = $index === 0 ? 'where' : 'orWhere';
    //             $query->{$method}($key, "LIKE", "%{$search}%");
    //         }
    //     }
    //     return $query;
    // }

    // public function scopeAllowedTrash($query) {
    //     if (request()->query("trash")) {
    //         $query->onlyTrashed();
    //     }

    //     return $query;
    // }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
