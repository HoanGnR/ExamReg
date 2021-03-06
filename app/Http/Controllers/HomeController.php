<?php

namespace App\Http\Controllers;
use App\Models\Exam;
use App\Models\Area;
use App\Models\ExamRoom;
use App\Models\ExamShift;
use App\Models\Module;
use App\Models\Room;
use App\Models\University;
use App\TeacherAccount;
use App\StudentAccount;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Admin Home
    public function index(){
      //Counting student accounts
      $studentCount = StudentAccount::count();
      //Counting room
        $roomCount = Room::count();
        $moduleCount = Module::count();
        $examCount = Exam::count();
        $areaCount = Area::count();
        $examShiftCount = ExamShift::count();
        $examRoomCount = ExamRoom::count();
      return view('home',compact('studentCount','roomCount',
          'moduleCount','examCount','areaCount','examShiftCount','examRoomCount'));
    }

    //Check existing login account
    public function checkExistingAccount($username){
      return User::where('name',$username)->count()>0?'true':'false';
    }

    //Get content of the default survey
}
