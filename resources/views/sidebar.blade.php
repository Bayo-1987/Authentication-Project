<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!--Admin right-->
                            @if(Auth::user()->role == 'admin')
                            <div class="sb-sidenav-menu-heading">Users Management</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/student/create') }}">Add Student</a>
                                    <a class="nav-link" href="{{ route('student.index') }}">Manage Students</a>
                                    <a class="nav-link" href="{{ url('admin/teacher/create') }}">Add Teacher</a>
                                    <a class="nav-link" href="{{ route('teacher.index') }}">Manage Teachers</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Class & Subject</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Classes & Subjects
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ url('admin/class/create') }}">Add Class</a>
                                    <a class="nav-link" href="{{ route('class.index') }}">Manage Class</a>
                                    <a class="nav-link" href="{{ url('admin/junior_subject/create') }}">Add Subject (J)</a>
                                    <a class="nav-link" href="{{ route('junior_subject.index') }}">Manage Subject (J)</a>
                                    <a class="nav-link" href="{{ url('admin/senior_subject/create') }}">Add Subject (S)</a>
                                    <a class="nav-link" href="{{ route('senior_subject.index') }}">Manage Subject (S)</a>
                                </nav>
                            </div>
                            @endif
                            @if(Auth::user()->role == 'student' || (Auth::user()->role == 'teacher'))
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="{{ route('view_teachers') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                View Teachers
                            </a>
                            <a class="nav-link collapsed" href="{{route('view_students') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                View Students
                            </a>
                            @endif
                            @if(Auth::user()->role == 'student')
                            <a class="nav-link collapsed" href="{{route('view_result', Auth::user()->admission_num) }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-print"></i></div>
                                View Result
                            </a>
                            @endif
                            @if(Auth::user()->role == 'admin')
                            <a class="nav-link collapsed" href="{{route('add_result') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Add Result (J)
                            </a>
                            <a class="nav-link collapsed" href="{{route('add_senior_result') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                                Add Result (S)
                            </a>
                            @endif

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                           Ernzospace
                    </div>
                </nav>
            </div>