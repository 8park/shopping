<?php

function workerslist($worker_id, $worker_name, $service_type, $worker_img, $appointment_date, $service_location, $service_quality, $worker_active){
    if($worker_active == 1){
    $element = '
    <div class="col-md-3 col-sm-6 my-3 my-md-0">
    <form action="index.php" method="post">
        <div class="card shadow">
            <div>
            <img src="'. $worker_img . '" alt="Image1" class = "img-fluid card-img-top">
            </div>
            <div class="card-body">
                <h5 class="card-title">' . $worker_name .'</h5>
            
                <p class="card-text">
                    text
                </p>
                
                    <p class="card-text">$'. $service_type .'</p>
                

                <!--
                <h5>
                <input type="text" name="quantity" class="form-control" value="1" />  
                </h5>
                -->

            </div>
        </div>
    </form>
</div>
    ';
    echo $element;
}
}
