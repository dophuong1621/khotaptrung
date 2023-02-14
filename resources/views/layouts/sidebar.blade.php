<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">

    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        </a>
        <a href="" class="simple-text logo-normal">
            KhoTapTrung
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        JiRim
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a data-toggle="collapse" href="#userExamples">
                    <i class="material-icons">person</i>
                    <p> User <b class="caret"></b></p>

                </a>
                <div class="collapse" id="userExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('user.index') }}">
                                <span class="sidebar-mini"> US </span>
                                <span class="sidebar-normal"> User </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('trashed.index') }}">
                                <span class="sidebar-mini"> TS </span>
                                <span class="sidebar-normal"> Trashed </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#driverExamples">
                    <i class="material-icons">commute</i>
                    <p> Driver <b class="caret"></b></p>

                </a>
                <div class="collapse" id="driverExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('driver-item.index') }}">
                                <span class="sidebar-mini"> IT </span>
                                <span class="sidebar-normal"> Item </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('driver-category.index') }}">
                                <span class="sidebar-mini"> CT </span>
                                <span class="sidebar-normal"> Category </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#busExamples">
                    <i class="material-icons">king_bed</i>
                    <p> Bus <b class="caret"></b></p>

                </a>
                <div class="collapse" id="busExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('bus-item.index') }}">
                                <span class="sidebar-mini"> IT </span>
                                <span class="sidebar-normal"> Item </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('bus-category.index') }}">
                                <span class="sidebar-mini"> CT </span>
                                <span class="sidebar-normal"> Category </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <a data-toggle="collapse" href="#garageExamples">
                    <i class="material-icons">maps_home_work</i>
                    <p> Garage <b class="caret"></b></p>

                </a>
                <div class="collapse" id="garageExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('garage-item.index') }}">
                                <span class="sidebar-mini"> IT </span>
                                <span class="sidebar-normal"> Item </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('garage-category.index') }}">
                                <span class="sidebar-mini"> CT </span>
                                <span class="sidebar-normal"> Category </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>