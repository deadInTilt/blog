
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
            <!--begin::Brand Link-->
            <a href="{{ route('admin.index') }}" class="brand-link">
                <!--begin::Brand Image-->
                <img
                    src="{{ asset('dist/assets/img/logoB.jpg') }}"
                    alt="AdminLTE Logo"
                    class="brand-image opacity-75 shadow"
                />
                <!--end::Brand Image-->
                <!--begin::Brand Text-->
                <span class="brand-text fw-light">Blogify Admin</span>
                <!--end::Brand Text-->
            </a>
            <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
            <nav class="mt-2">
                <!--begin::Sidebar Menu-->
                <ul
                    class="nav sidebar-menu flex-column"
                    data-lte-toggle="treeview"
                    role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href=" {{route('post.index')}} " class="nav-link">
                            <i class="fa-solid fa-icons"></i>
                            <p>Posts</p>
                        </a>
                    </li>
                    <li class="nav-item">
                    <a href=" {{route('category.index')}} " class="nav-link">
                        <img
                            src="{{ asset('assets/images/list-solid.svg') }}"
                            alt="look"
                            class="brand-image opacity-75 shadow"
                            style="max-width: 20px;"/>
                        <p>Categories</p>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{route('tag.index')}} " class="nav-link">
                            <i class="nav-icon fa-solid fa-tags"></i>
                            <p>Tags</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href=" {{route('user.index')}} " class="nav-link">
                            <i class="fa-solid fa-user"></i>
                            <p>Users</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
