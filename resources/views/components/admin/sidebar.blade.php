<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{route('admin.home')}}" class="brand-link">
        <img src="{{asset('assets/img/favicon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">RENESA EDU</span>
    </a>

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/img/user.svg')}}" class="img-circle p-1" alt="User" />
            </div>
            <div class="info">
                <a href="#" class="d-block">Sankar Bala</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin.home') }}" class="nav-link active">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">ACADEMIC</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-users nav-icon" aria-hidden="true"></i>
                        <p> Students <i class="fas fa-angle-left right"></i> </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.student.create') }}" class="nav-link" wire:navigate>
                                <i class="fa fa-plus nav-icon" aria-hidden="true"></i>
                                <p>Add Student</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.student.index') }}" class="nav-link" wire:navigate>
                                <i class="fa fa-list nav-icon" aria-hidden="true"></i>
                                <p>All Students</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa fa-graduation-cap nav-icon" aria-hidden="true"></i>
                        <p>
                            Courses
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.course.create') }}" class="nav-link" wire:navigate>
                                <i class="fa fa-plus nav-icon" aria-hidden="true"></i>
                                <p>Add Course</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.course.index') }}" class="nav-link" wire:navigate>
                                <i class="fa fa-list nav-icon" aria-hidden="true"></i>
                                <p>All Courses</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">SETTINGS</li>

                <li class="nav-item">
                    <a href="{{ route('admin.settings') }}" class="nav-link">
                        <i class="fa fa-cogs nav-icon" aria-hidden="true"></i>
                        <p>
                            Settings
                        </p>
                    </a>
                </li>

            </ul>
        </nav>

    </div>

</aside>