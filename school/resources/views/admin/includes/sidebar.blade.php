<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
        <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Завуч</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('bektemir1.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Бектемир Кумарбай уулу</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li>
                    <a href="{{route('admin.lessons.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-align-justify"></i>
                        <p>
                            Сабактар
                        </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.klasses.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-school"></i>
                        <p>
                            Класстар
                        </p>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.teachers.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Мугалимдер
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>
                            Окуучулар
                        </p>
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Сабак пландары
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
