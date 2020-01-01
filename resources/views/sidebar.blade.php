<!--nav sidebar -->
<aside id="sidebar">
    <nav class="navbar navbar-inverse sidebar navbar-fixed-top" role="navigation">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <div class="nav-side-menu">
            <div class="brand">
                <h2>ExamReg</h2>
                <button type="button" class="btn btn-danger times"><i class="fa fa-times"></i></button>
            </div>

            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                        <a href="{{asset('admin')}}">
                            <i class="fa fa-dashboard fa-lg"></i> Trang chủ
                        </a>
                    </li>

                    <li data-toggle="collapse" data-target="#room" class="collapsed">
                        <a href="{{asset('admin/sinh-vien')}}"><i class="far fa-address-card"></i>Sinh viên <span
                                    class="arrow"></span></a>
                    </li>

                    <li data-toggle="collapse" data-target="#room" class="collapsed">
                        <a href="{{asset('admin/room')}}"><i class="far fa-address-card"></i>Phòng máy <span
                                    class="arrow"></span></a>
                    </li>
                    <li data-toggle="collapse" data-target="#module" class="collapsed">
                        <a href="{{asset('admin/module')}}"><i class="far fa-address-card"></i>Học phần<span
                                    class="arrow"></span></a>
                    </li>
                    <li data-toggle="collapse" data-target="#exam" class="collapsed">
                        <a href="{{asset('admin/exam')}}"><i class="far fa-address-card"></i>Kỳ thi<span
                                    class="arrow"></span></a>
                    </li>
                    <li data-toggle="collapse" data-target="#examArea" class="collapsed">
                        <a href="{{asset('admin/exam-area')}}"><i class="far fa-address-card"></i>Khu vực thi<span
                                    class="arrow"></span></a>
                    </li>
                    <li data-toggle="collapse" data-target="#examShift" class="collapsed">
                        <a href="{{asset('admin/exam-shift')}}"><i class="far fa-address-card"></i>Ca Thi<span
                                    class="arrow"></span></a>
                    </li>
                    <li data-toggle="collapse" data-target="#examRoom" class="collapsed">
                        <a href="{{asset('admin/exam-room')}}"><i class="far fa-address-card"></i>Phòng Thi<span
                                    class="arrow"></span></a>
                    </li>
            </div>
        </div>
    </nav>

</aside>
<script type="text/javascript">
    $('document').ready(function () {
        $(".nav-side-menu").animate({width: 'toggle'}, 0);
    })
    $('.times').click(function () {
        $(".nav-side-menu").animate({width: 'toggle'}, 150);
        $('#bars').show();
    });

    $('#bars').click(function () {
        $(".nav-side-menu").animate({width: 'toggle'}, 150);
        $('#bars').hide();
    });

</script>
