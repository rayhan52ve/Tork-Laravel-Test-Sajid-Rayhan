<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi me-2 mdi-gauge"></i><span
                            class="hide-menu">Dashboard</span></a>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('user-info.create')}}" aria-expanded="false">
                        <i class="mdi me-2 mdi-account-check"></i><span class="hide-menu">Create User Info</span></a>
                </li>
                
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{route('user-info.index')}}" aria-expanded="false"><i
                            class="mdi me-2 mdi-book-open-variant"></i><span class="hide-menu">User Tnfo Table</span></a>
                </li>
    
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <div class="sidebar-footer">
        <div class="row">
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Settings"><i
                        class="ti-settings"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                        class="mdi mdi-gmail"></i></a>
            </div>
            <div class="col-4 link-wrap">
                <!-- item-->
                <a href="{{route('logout')}}" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                        class="mdi mdi-power"></i></a>
            </div>
        </div>
    </div>
</aside>