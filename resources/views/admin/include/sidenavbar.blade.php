<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li>
                    <a href="{{ route('admin.setting.add') }}"> <i class="menu-icon fa fa-cogs"></i>Setting</a>
                    <a href="{{ route('admin.slider.list') }}"> <i class="menu-icon fa fa-sliders"></i>Slider</a>
                    <a href="{{ route('admin.country.list') }}"> <i class="menu-icon fa fa-globe"></i>Country</a>
                    {{-- <a href="{{ route('admin.place.list') }}"> <i class="menu-icon fa fa-cogs"></i>Places</a> --}}
                </li>

                <li class="">
                    {{-- <a href="{{ route('admin.category.list') }}"> <i class="menu-icon fa fa-cogs"></i>Category</a> --}}
                    {{-- <a href="{{ route('admin.departure_point.list') }}"> <i class="menu-icon fa fa-cogs"></i>Departure Point</a> --}}
                    <a href="{{ route('admin.package.list') }}"> <i class="menu-icon fa fa-file"></i>Package</a>
                    <a href="{{ route('admin.booking.list') }}"> <i class="menu-icon fa fa-bookmark"></i>Booking</a>


                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                        <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                        <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                        <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                        <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                        <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                        <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                        <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                        <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li>
                    </ul> --}}
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plane"></i>Flight Tickets</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('admin.origin.list') }}">Origin List</a></li>
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('admin.destination.list') }}">Destination List</a></li>
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('admin.tickets.list') }}">Leads</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-hotel	"></i>Hotel Booking</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('admin.hotel.list') }}">Hotels List</a></li>
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="{{ route('admin.hotel-booking.list') }}">Booking Leads</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('admin.offer.list') }}"> <i class="menu-icon fa fa-gift"></i>Offer</a>

                    <a href="{{ route('admin.blog.list') }}"> <i class="menu-icon fa fa-bold"></i>Blog</a>
                </li>
                <li>
                    <a href="{{ route('admin.testimonial.list') }}"> <i class="menu-icon fa fa-users"></i>Testimonial</a>
                </li>
                <li>
                    <a href="{{ route('admin.others.list') }}"> <i class="menu-icon fa fa-users"></i>Others</a>
                </li>
                <li>
                    <a href="{{ route('admin.message.list') }}"> <i class="menu-icon fa fa-envelope"></i>Message</a>
                    {{-- <a href="{{ route('admin.newsletter.list') }}"> <i class="menu-icon fa fa-newspaper-o"></i>News Letter</a> --}}
                </li>

                {{-- <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Tables</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul>
                </li>

                <li class="menu-title">Icons</li><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <li class="menu-title">Extras</li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li> --}}
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>
