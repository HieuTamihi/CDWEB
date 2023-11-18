<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CV extends Model
{
    use HasFactory;
    protected $table = 'cv';
    protected $fillable = [
        'customer_id',
        'Name_CV',
        'full_name',
        'gender',
        'avatar',
        'apply_position',
        'email',
        'phone_number',
        'Date',
        'exp_work',
        'School_name',
        'Learn_time',
        'Majors',
        'infor_order',
        'Status',
    ];
    public function addCV($data)
    {
        // Lưu ảnh vào thư mục public/images/cv
        $imagePath = $data['avatar']->store('cv', 'public');

        // Lấy tên ảnh để lưu vào cột image trong cơ sở dữ liệu
        $imageName = $data['avatar']->hashName();
        $dataCV = [
            'customer_id' => Auth::user()->id,
            'Name_CV' => $data['Name_CV'],
            'full_name' => $data['full_name'],
            'gender' => $data['gender'],
            'avatar' => $imageName,
            'apply_position' => $data['apply_position'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'Date' => $data['Date'],
            'exp_work' => $data['exp_work'],
            'School_name' => $data['School_name'],
            'Learn_time' => $data['Learn_time'],
            'Majors' => $data['Majors'],
            'infor_order' => $data['infor_order'],
            'Status' => 1,
        ];
        $cv = new CV($dataCV);
        $cv->save();
        return $cv;
    }
}
