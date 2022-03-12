<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function  getAllStudent()
    {
        return [
            0=>[
                'id'=>1,
                'name'=>'Riaz',
                'email'=>'riaz@gmail.com',
                'mobile'=>'017143374',
                'image'=>'',
            ],
            1=>[
                'id'=>2,
                'name'=>'Rana',
                'email'=>'rana@gmail.com',
                'mobile'=>'01714320',
                'image'=>'',
            ],

        ];
    }
    use HasFactory;
    public function newStudent()
    {
        $this->student = new Student();
        $this->student->name = 'Riaz';
        $this->student->email = 'riazul@gmail.com';
        $this->student->mobile = '0171699877';
        $this->student->save();

    }
}
