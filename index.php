<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <style>
       
        form{
            margin-top:20px;
            padding-top:30px;
            margin-left:20%;
            background-color:powderblue;
            width:60%;
        }
        input{
            margin:20px;
            padding:10px;
            color:black;
            border:5px solid green;
            width:250px;
            font-weight:bold;
        }
        
        }
        button{
            background-color:powderblue;
            cursor: pointer;
        }
    </style>    
    <form  align="center" action="database.php" method="post"> 
        <img src="images/logo.jpg" width="100px" height="60px">   
<h1>Donation Form for Drishti Foundation</h1>
       
        <input type="text" name="name" id="name" placeholder="Your Name" required ><br>
        <input type="email" name="email" id="email" placeholder="Email Id" required><br>   
        <input type="tel" name="phone" id="phone" placeholder="Phone Number" required><br>
        <input type="text" name="amount" id="amount" placeholder="Donation Amount" required><br>
           <br>
       <input style="width:80px; background-color:tomato; cursor:pointer" type="submit"  value="Submit" onclick="donate()" >
        <a href="index.html"><input style="width:80px; background-color:tomato; cursor:pointer" type="button"  value="Back" > </a>
    
</form>


<script>
    function donate(){

        var email = jQuery('#email').val();
        var phone = jQuery('#phone').val();
        var name=jQuery('#name').val();
        var amt=jQuery('#amount').val();
        
        var options = {
            "key": "rzp_test_rxMxYD9ubLMMc1", // Enter the Key ID generated from the Dashboard
            "amount": amt*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "Drishti Foundation",
            "description": "Test Transaction",
            "image": "images/logo.jpg",
            "email":name,
            "handler": function (response){
                console.log(response);
                jQuery.ajax({
                            success:function(result){
                            alert("Your payment has been Done.... Thank you for donating....");
                            
                            }
                           });
            },
            "prefill": {
            "name": name,
            "email": email,
            "contact":phone
            }
          
        };
       
        var rzp1 = new Razorpay(options);
        rzp1.open();
       


       



        
    
    
    }
</script>
