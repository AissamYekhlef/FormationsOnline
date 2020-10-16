<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function phone() {
        return $this->hasOne('App\Phone');
    }

    
    function uploadAvatarUser(Request $request){
        if($request->hasFile('image')) {
            // $filename = $request->image->getClientOriginalName();
            $filename = $this->id . '_' . time() . '.jpg';
            if($this->avatar) {
                Storage::delete('/public/images/' . $this->avatar);
            }
            $request->image->storeAs('images',  $filename, 'public');
            $this->update(['avatar'=> $filename]);
        }
        return $this->avatar;
        // return User::find(1)->avatar;
    }
}
