 <!-- Nav Item - Dashboard -->
 <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Settings
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       
                        <a class="collapse-item" href="new_user.php">New User</a>
                        <a class="collapse-item" href="user_mgt.php">Manage Users</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Other Settings</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="edi_mgt.php">Manage EDIs</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Modules
            </div>





            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages33"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Client Management</span>
                </a>
                <div id="collapsePages33" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="proforma.php">Add Clients</a>
                        <a class="collapse-item" href="client_mgt.php">View Clients</a>
                        <a class="collapse-item" href="search.php"> Search Clients </a>
                       
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-file-invoice"></i>
                    <span>Invoice Management</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="proforma.php">Issue Proforma</a>
                        <a class="collapse-item" href="invoice_mgt.php"> View All Invoice </a>
                       
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
      

            <!-- Nav Item - Tables -->
           

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
                    aria-expanded="true" aria-controls="collapseUtilities4">
                    <i class="fas fa-fw fa-money-bill-alt"></i>
                    <span>Payment Management</span>
                </a>
                <div id="collapseUtilities2" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="process_payments.php">Process New Payment</a>
                        <a class="collapse-item" href="payment_mgt.php">View All Payments</a>
                        
                        <a class="collapse-item" href="receipts.php">Issue Receipts</a>
                    </div>
                </div>
            </li>

               <!-- Nav Item - Tables -->
      

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities5"
                    aria-expanded="true" aria-controls="collapseUtilities4">
                    <i class="fas fa-fw fa-chart-line"></i>
                    <span>Reports</span>
                </a>
                <div id="collapseUtilities5" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="general_payment_report.php">Payment Schedule</a>
                        <a class="collapse-item" href="print_payment_schedule_to_bank.php">Payment Schedule To Bank</a>
                        <a class="collapse-item" href="commission_report.php">Commissions Received</a>
                        <a class="collapse-item" href="processed_payments.php">Processed Payments</a>
                        <a class="collapse-item" href="processed_payments.php">View Proformas Issued</a>
                        <a class="collapse-item" href="commisson.php">View Proformas Issued</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
           

        </ul>