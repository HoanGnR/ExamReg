<?php

namespace App\Http\Controllers;

use App\Models\ExamRoom;
use App\Models\ExamRoomUser;
use App\Models\ExamShift;
use App\Models\ModuleUser;
use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Course;
use App\Result;
use App\StudentAccount;

class StudentLayoutController extends Controller
{
    //Student layout homepage
    public function index()
    {
        //Get current student information
        $studentCode = \Auth::user()->name;

        $student = StudentAccount::where('username', '=', $studentCode)->first();
        $id_student = $student['id'];
        $modules = ModuleUser::where('user_id', '=', $id_student)->with('module')->get();
        return view('StudentLayout.home', compact('student', 'modules'));
    }

    // About me page
    public function me()
    {
        $studentCode = \Auth::user()->name;
        $student = StudentAccount::where('username', $studentCode)->first();
        return view('StudentLayout.home', compact('student'));
    }

    // Change password
    public function changePass()
    {
        return view('StudentLayout.changepass');
    }

    //Post Change Password
    public function postChangePass(Request $request)
    {
        $request->validate([
            "oldPass" => "required",
            "newPass" => "required|min:8",
            "confirmNewPass" => "required:min:8|same:newPass"
        ]);
        if (\Hash::check($request->oldPass, \Auth::user()->password)) {
            $user = User::find(\Auth::user()->id);
            $user->password = bcrypt($request->newPass);
            $user->save();
            return redirect()->back()->with('success', "Thay doi thanh cong");
        } else {
            return redirect()->back()->with("error", "Mật khẩu hiện tại không đúng");
        }
    }
}
