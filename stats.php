<?php 
 include_once "count_patients.php"; 
 include_once "count_salesd.php";
 include_once "count_comm.php";
 ?>
 <!-- Content Row -->
 <div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Clients (Today)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $counter_day; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-user fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Clients (This Month)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $counter_month; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- All My Clients-->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        All My Clients</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $counter_all_patients; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Total Payments Today -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Payments (Today)
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">&#x20A6;<?php echo $totald ?></div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Total Payments (This Month) -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Total Payments (This Month)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">&#x20A6;<?php echo $totalm; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Total Commissions (Today) -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Total Commissions (Today)</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">&#x20A6;<?php echo $commd; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Total Commissions (This Month) -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Commissions (This Month)
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">&#x20A6;<?php echo $commm ?></div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>

    

</div>

<!-- Total Payments Till Date -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Payments (Till Date)
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">&#x20A6;<?php echo $totalall ?></div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Total Commissions Till Date -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Commissions (Till Date)
                    </div>
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">&#x20A6;<?php echo $commall ?></div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-money-bill-alt fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

</div>