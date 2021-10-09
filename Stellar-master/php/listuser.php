<div class="row">
    <!--                    <div class="col-md-12 grid-margin">-->
    <!--                        <div class="card">-->
    <!--                            <div class="card-body">-->
    <!--                                <div class="row income-expense-summary-chart-text">-->
    <!--                                    <div class="col-xl-4">-->
    <!--                                        <h5>Income And Expenses Summary</h5>-->
    <!--                                        <p class="small text-muted">A comparison of people who mark themselves of their ineterest from the date range given above. Learn more.</p>-->
    <!--                                    </div>-->
    <!--                                    <div class=" col-md-3 col-xl-2">-->
    <!--                                        <p class="income-expense-summary-chart-legend"> <span style="border-color: #6469df"></span> Total Income </p>-->
    <!--                                        <h3>$ 1,766.00</h3>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-3 col-xl-2">-->
    <!--                                        <p class="income-expense-summary-chart-legend"> <span style="border-color: #37ca32"></span> Total Expense </p>-->
    <!--                                        <h3>$ 5,698.30</h3>-->
    <!--                                    </div>-->
    <!--                                    <div class="col-md-6 col-xl-4 d-flex align-items-center">-->
    <!--                                        <div class="input-group" id="income-expense-summary-chart-daterange">-->
    <!--                                            <div class="inpu-group-prepend input-group-text"><i class="icon-calendar"></i></div>-->
    <!--                                            <input type="text" class="form-control">-->
    <!--                                            <div class="input-group-prepend input-group-text"><i class="icon-arrow-down"></i></div>-->
    <!--                                        </div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                                <div class="row income-expense-summary-chart mt-3">-->
    <!--                                    <div class="col-md-12">-->
    <!--                                        <div class="ct-chart" id="income-expense-summary-chart"></div>-->
    <!--                                    </div>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--</div>-->
    <?php
    if($_SESSION["role"]=="admin"){
        echo " <div class='row'>
                    <div class='col-md-12 grid-margin stretch-card'>
                        <div class='card'>
                            <div class='card-body'>
                                <div class='d-sm-flex align-items-center mb-4'>
                                    <h4 class='card-title mb-sm-0'>Customers List</h4>
                                   
                    </div>
                                <div class='table-responsive border rounded p-1'>
                                    <table class='table'>
                                        <thead>
                                        <tr>
                                            <th class='font-weight-bold'>Name</th>
                                            <th class='font-weight-bold'>Last name</th>
                                            <th class='font-weight-bold'>Email</th>
                                            <th class='font-weight-bold'>Date of birth</th>
                                            <th class='font-weight-bold'>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>";
        include_once("../Php/Cnx.php");
        $cnx=connect();
        //                                        $req=$cnx->query("select * from user where role='".$role."';");
        $req=$cnx->query("select * from user where role ='Customer' ");
        while($user=$req->fetch()){
            echo "    <tr>
       
        <td>".$user['name']."</td>
        <td>".$user['last_name']."</td>
        <td>".$user['email']."</td>
        <td>".$user['dateOfBirth']."</td>
                                        
                                            <td>
                                                <a href=php/deleteUser.php?id=".$user['id'].">
                                                   <i class=' icon-close'></i>
                                                     </a>
                                             </td>
                                        </tr>"  ;


        }
        echo " </tbody>
                                    </table>      </div>"; }

    ?>
    <!--                                <div class="d-flex mt-4 flex-wrap">-->
    <!--                                    <p class="text-muted">Showing 1 to 10 of 57 entries</p>-->
    <!--                                    <nav class="ml-auto">-->
    <!--                                        <ul class="pagination separated pagination-info">-->
    <!--                                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-left"></i></a></li>-->
    <!--                                            <li class="page-item active"><a href="#" class="page-link">1</a></li>-->
    <!--                                            <li class="page-item"><a href="#" class="page-link">2</a></li>-->
    <!--                                            <li class="page-item"><a href="#" class="page-link">3</a></li>-->
    <!--                                            <li class="page-item"><a href="#" class="page-link">4</a></li>-->
    <!--                                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-right"></i></a></li>-->
    <!--                                        </ul>-->
    <!--                                    </nav>-->
    <!--                                </div>-->
</div>
