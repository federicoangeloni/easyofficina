<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset("/images/mechanic.png")}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Active User</p>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=""><a href="/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-users"></i> <span>Manage Customers</span></a>
                <ul class="treeview-menu">
                    <li><a href="/customers/addSelectType">Add a new customer</a></li>
                    <li><a href="/customers/search">Search a customer</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-car"></i> <span>Manage Vehicles</span></a>
                <ul class="treeview-menu">
                    <li><a href="/customers/search">Add a new vehicle</a></li>
                    <li><a href="/vehicles/search">Search a vehicle</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-wrench"></i> <span>Manage Jobs</span></a>
                <ul class="treeview-menu">
                    <li><a href="/customers/search">Start a new job</a></li>
                    <li><a href="/jobs/search">Search a job</a></li>
                </ul>
            </li>
            <hr>
            <li><a href="#"><i class="fa fa-wrench"></i> <span>Manage Warehouse</span></a>
                <ul class="treeview-menu">
                    <li><a href="/warehouses/search">Search a Warehouse</a></li>
                    <li><a href="/warehouses/add">Add a new warehouse</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-wrench"></i> <span>Manage General Catalog</span></a>
                <ul class="treeview-menu">
                    <li><a href="/catalog/search">Search parts in the Catalog</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-wrench"></i> <span>Manage Spare Parts</span></a>
                <ul class="treeview-menu">
                    <li><a href="/spareparts/search">Search a Spare Part</a></li>
                </ul>
            </li>
            <hr>
            <li><a href="#"><i class="fa fa-wrench"></i> <span>Manage Services</span></a>
                <ul class="treeview-menu">
                    <li><a href="/services/search">Search a Service</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
