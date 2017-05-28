<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'fname',
        'mname',
        'lname',
        'phone',
        'birth_date',
        'web_page',
        'twittr',
        'facebook',
        'linkedin',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function myCvs(){

        return $this->hasMany('App\Cvs');
    }

    public function userId()
    {
        return $this->getAttribute('id');
    }

    public function getUserName()
    {
        return $this->fname .' '. $this->mname .' '. $this->lname;
    }

    public function getUserAge()
    {
        return Carbon::parse($this->birth_date)->age;
    }

    public function getUserDet()
    {

        $userDet['name'] = $this->getUserName();
        $userDet['fname'] = $this->fname;
        $userDet['age'] = $this->getUserAge();
        $userDet['phone'] = $this->phone;
        $userDet['email'] = $this->email;
        $userDet['twittr'] = $this->twittr;
        $userDet['linkedIn'] = $this->linkedin;
        $userDet['web_page'] = $this->web_page;
        $userDet['facebook'] = $this->facebook;
        $userDet['city'] = $this->city;
        $userDet['country'] = $this->country;
        $userDet['pic_url'] = $this->pic_url;

        return $userDet;

    }
}
