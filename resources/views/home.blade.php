@extends('index')
@section('content')


    <script type="text/javascript">
        // Session  login success
        @if(session('login-success'))
        swal({
            title: "Đăng nhập thành công",
            type: "success",
            text: "Chào mừng bạn đến với hệ thống Class Survey",
            showConfirmButton: false,
            timer: 2000
        })
        @endif


    </script>
    <div>
        <h1 style="text-align: center">CHÀO MỪNG ĐẾN VỚI EXAMREG</h1>
    </div>


    <style media="screen">
        .panel {
            width: 372px;
            height: 172px;
            color: white;
            border-radius: 5px;
            background-color: crimson;
            float: left;
            border: 1px solid red;
            margin: 20px;

        }

        .panel .panel-header {
            height: 80%;
            width: 100%;
            padding: 10px;
            padding-top: 0px;
        }

        .panel .panel-footer {
            height: 20%;
            background-color: white;
        }

        .panel .panel-header .number {
            width: 50%;
            float: left;
            font-size: 70px;
        }

        .panel .panel-header .icon {
            width: 10%;
            float: left;
            font-size: 70px;
        }

        .panel-footer {
            padding-left: 10px;
            padding-top: 5px;
            color: crimson;

        }

        .panel .text {
            font-size: 18px;

        }
    </style>

@endsection
