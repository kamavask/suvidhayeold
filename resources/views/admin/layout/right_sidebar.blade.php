<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="index.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts"
                        aria-expanded="false" aria-controls="collapseProducts">
                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Products
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_product">All Products</a>
                            <a class="nav-link sub_nav_link" href="add_product">Add New</a>
                            <a class="nav-link sub_nav_link" href="edit_product">Edit</a>
                            {{-- <a class="nav-link sub_nav_link" href="post_tags.html">Tags</a> --}}
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmployee"
                        aria-expanded="false" aria-controls="collapsEmployee">
                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Employee
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseEmployee" aria-labelledby="headingOne"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_employee">All Employee</a>
                            <a class="nav-link sub_nav_link" href="add_employee">Add Employee</a>
                            <a class="nav-link sub_nav_link" href="edit_employee">Edit</a>
                            <a class="nav-link sub_nav_link" href="delete_employee">Delete employee</a>
                            {{-- <a class="nav-link sub_nav_link" href="post_tags.html">Tags</a> --}}
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
                        aria-expanded="false" aria-controls="collapseServices">
                        <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                        Services
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLocations" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_service">All Services</a>
                            <a class="nav-link sub_nav_link" href="add_service">Add New</a>
                            <a class="nav-link sub_nav_link" href="edit_service">Edit</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories"
                        aria-expanded="false" aria-controls="collapseCategories">
                        <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                        Categories
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseCategories" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_category">All Categories</a>
                            <a class="nav-link sub_nav_link" href="add_category">Add Category</a>
                            <a class="nav-link sub_nav_link" href="edit_category">Edit Category</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVendors"
                        aria-expanded="false" aria-controls="collapseVendors">
                        <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                        Providers
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseShops" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_vendor">All Vendors</a>
                            <a class="nav-link sub_nav_link" href="add_vendor">Add vendors</a>
                            <a class="nav-link sub_nav_link" href="delete_vendor">Delete vendors</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDelieveryman"
                        aria-expanded="false" aria-controls="collapseDelieveryman">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Deliverymen
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDelieveryman" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_deliveryman">All Delivermen</a>
                            <a class="nav-link sub_nav_link" href="add_deliveryman">Add deliverymen</a>
                            <a class="nav-link sub_nav_link" href="edit_deliveryman">Edit deliverymen</a>
                            <a class="nav-link sub_nav_link" href="edit_deliveryman">Edit deliverymen</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServicemen"
                        aria-expanded="false" aria-controls="collapseServicemen">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Servicemen
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseServiceman" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_servicemen">All servicemen</a>
                            <a class="nav-link sub_nav_link" href="add_servicemen">Add servicemen</a>
                            <a class="nav-link sub_nav_link" href="edit_servicemen">Edit servicemen</a>
                            <a class="nav-link sub_nav_link" href="delete_servicemen">Delete servicemen</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCustomers"
                        aria-expanded="false" aria-controls="collapseCustomers">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Customers
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseCustomers" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_serviceman">All Customers</a>
                            <a class="nav-link sub_nav_link" href="add_serviceman">Add Customers</a>
                            <a class="nav-link sub_nav_link" href="edit_serviceman">Edit Customers</a>
                            <a class="nav-link sub_nav_link" href="delete_serviceman">Delete Customers</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrder"
                        aria-expanded="false" aria-controls="collapseOrder">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Orders
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseOrder" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_order">All orders</a>
                            <a class="nav-link sub_nav_link" href="ongoing_order">Ongoing orders</a>
                            <a class="nav-link sub_nav_link" href="pending_order">Pending orders</a>
                            <a class="nav-link sub_nav_link" href="completed_order">Completed orders</a>
                            <a class="nav-link sub_nav_link" href="add_order">Add orders</a>
                            <a class="nav-link sub_nav_link" href="edit_order">Edit orders</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOffers"
                        aria-expanded="false" aria-controls="collapseOffers">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Offers
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseOffers" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_offer">All offers</a>
                            <a class="nav-link sub_nav_link" href="add_offer">Add offers</a>
                            <a class="nav-link sub_nav_link" href="edit_offer">Edit offers</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCoupons"
                        aria-expanded="false" aria-controls="collapseCoupons">
                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                        Coupons
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="show_coupon">All coupons</a>
                            <a class="nav-link sub_nav_link" href="add_coupon">Add coupons</a>
                            <a class="nav-link sub_nav_link" href="edit_coupon">Edit coupons</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings"
                        aria-expanded="false" aria-controls="collapseSettings">
                        <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                        Settings
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSettings" aria-labelledby="headingTwo"
                        data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link sub_nav_link" href="general_setting.html">General Settings</a>
                            <a class="nav-link sub_nav_link" href="payment_setting.html">Payment Settings</a>
                            <a class="nav-link sub_nav_link" href="email_setting.html">Email Settings</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="reports.html">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                        Reports
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>