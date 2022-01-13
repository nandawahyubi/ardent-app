<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Models\Checkout;

class Package extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'price',
    ];

    public function getIsOrderAttribute(){
        if(!Auth::check()){ // untuk check apakah users sudah login atau belum
            return false;
        }

        return Checkout::whereUserId(Auth::id())->where('status', '<', 2)->orderBy('id', 'desc')->exists();
    }
}
