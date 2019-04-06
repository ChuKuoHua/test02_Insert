<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <style>
        #result {
            position:absolute;
            width:100%;
            max-width:800px;
            cursor:pointer;
            overflow-y:auto;
            max-height:350px;
            box-sizing: border-box;
            z-index:1001;
        }
        .link-class:hover{
            background-color:#000;
        }
        .row{ 
            margin: 0auto;
        }
        .room{
            padding-top:.8em;
        }
    </style>

</head>
<body>

    <br/>
    <div class ="container" style=" width:850px;">
        <h2 align="center">ajax and php</h2>
        <br/>
        <div class="row" >

            <div class="col-md-3">
            </div>
            <div class="col-md-6" id="di">
                <form class="form-group" id="form" name="form" method="POST" action="signup/add.php">
                
					<label for="exampleInputEmail1" class="room"><h5>name:</h5></label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Name">
                    
					<label for="exampleInputEmail1" class="room"><h5>phone:</h5></label>
                    <input class="form-control" type="text" name="phone" id="phone" placeholder="Phone">
                    
                    <label for="exampleInputEmail1" class="room"><h5>email:</h5></label>
					<input class="form-control" type="text" name="email" id="email" placeholder="E-mail">
                    
				</form>
            </div>
            <div class="col-md-3">
            </div>            
            <div class="col-md-3">
            </div>
            <div class="col-md-6">
                <button type="submit" name="submit" id="submit" class="btn btn-dark">
                    Sign up
                </button>
                
            </div>
            <div class="col-md-3">
            </div>
        </div>
            <br/>                         
    </div>

    <script>
        $(document).ready(function(){
            $('#submit').click(function(){

            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            if(form.name.value != "" && form.phone.value != "" &&form.email.value != "") {
            $.ajax({
                url:'add.php',
                method:'POST',
                data:{               
                    name:name,
                    phone:phone,
                    email:email},                

                success:function(data)
                    {
                        alert("sign up success");
			window.location.assign(window.location.href);
                    }
            });
        }else{
            alert("未輸入完整");
        }
    });
});
    </script>

</body>
</html>
