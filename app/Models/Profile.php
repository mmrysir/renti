<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class  Profile extends Model
{
    // disableing mass assignment
    protected $guarded = [];

    public  function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/G7kHKaKtT9vc6hQtNXlhk8zqXxHpdavKbrI2b7Kv.png';
         return '/storage/'. $imagePath;
    }

    public function followers(){

        return $this->belongsToMany(User::class);
    }

   public function  user()
   {
       return $this->belongsTo(User::class);
   }
}
