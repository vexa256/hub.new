<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div
            class="brand-logo d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="text-nowrap logo-img">
                <img src="{{ asset('assets/images/logos/dark-logo.svg') }}"
                    width="180" alt="" />
            </a>
            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
                id="sidebarCollapse">
                <i class="ti ti-x fs-8"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap mb-5">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu mb-5">AfriChild Knowledge Hub</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link"
                        href="{{ route('ManageCategories') }}"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-tag"></i>
                        </span>
                        <span class="hide-menu">Manage Categories</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-book"></i>
                        </span>
                        <span class="hide-menu">Research Papers</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="./research-list.html"
                                class="sidebar-link pl-4">
                                <span class="me-2">
                                    <i class="ti ti-list"></i>
                                </span>
                                <span class="hide-menu">All Papers</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="./research-submit.html"
                                class="sidebar-link pl-4">
                                <span class="me-2">
                                    <i class="ti ti-pencil"></i>
                                </span>
                                <span class="hide-menu">Submit Paper</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="./research-citations.html"
                                class="sidebar-link pl-4">
                                <span class="me-2">
                                    <i class="ti ti-quote-right"></i>
                                </span>
                                <span class="hide-menu">Citations</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="./authors.html"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Authors</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="./journals.html"
                        aria-expanded="false">
                        <span>
                            <i class="ti ti-bookmark"></i>
                        </span>
                        <span class="hide-menu">Journals</span>
                    </a>
                </li>


            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
