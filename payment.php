<html>
<head>
</head>

<?php
    require_once 'db_connect.php';
    $total =  $_POST["hire"];

?>
    <hr><h6>$<span id = total><?php echo number_format($total, 2); ?></span></h6>

<div id="paypal-button-container">
                <!-- Button Placement-->
            </div>
            <!--&disable-funding=credit,card -->
            <script src="https://www.paypal.com/sdk/js?client-id=AW5R0NetD0nJi7HOCiubxZvEVbB5BJi4hvTZ_2R-heItpasR2taFnG_cVO_-wqRi4_QprdLgFBUgzqHg&disable-funding=credit"></script>

<script>
paypal.Buttons({
    style: { shape: 'pill'},

    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount:
          {
            value: document.getElementById("total").innerHTML
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Successful Purchase ' + details.payer.name.given_name);
        //location.href='success_purchase.php'; 
        alert("Thank you for your purchase");
     
      });       
    },

        //<meta http-equiv="refresh" content="time; URL=new_url" />
       // actions.redirect("success.php");
       //window.location.replace("");

    onCancel: function (data) {
    return actions.redirect();
  },

  onError: function(e){
      console.log(e);
  }

  }).render('#paypal-button-container');
</script>
</body>
</html>