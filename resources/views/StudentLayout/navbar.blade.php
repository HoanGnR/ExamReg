<nav class="navbar navbar-expand-lg navbar-light bg-light">
  {{-- <a class="navbar-brand" href="#">Class Serveys</a> --}}
  <h3> <img src="{{asset('icon.png')}}" width="50px" alt=""> ExamReg</h3>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{asset('student')}}"> Trang chủ <span class="sr-only"></span></a>
      </li>


    </ul>


      <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-left-manual" aria-labelledby="userDropdown">
          <a href="{{asset('student/me')}}"> <i class="fa fa-user"></i> Thông tin cá nhân</a>
          <a href="{{asset('student/change')}}"> <i class="fa fa-key"></i> Đổi mật khẩu </a>
        </div>
      </div>
      <div>
        <a href="{{asset('logout')}}" style="color:red;"> <i class="fas fa-power-off"></i> </a>
      </div>

  </div>
</nav>
