<!DOCTYPE html>
<html>
<head>
   
     <title>Login </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body
        {
            background: linear-gradient(to right, #b92b27, #1565c0);
        }
        .register{
            width: 100% !important;
            height: auto !important;
            
            /*margin-top: 3%;*/
            /*padding: 3%;*/
        }
        .register-left{
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }
        .register-left input{
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }
        .register-right{
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }
        .register-left img{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .register-left p{
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }
        .register-form{
            padding: 10%;
            margin-top: 10%;
        }
        .btnRegister{
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs{
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }
        .register .nav-tabs .nav-link{
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .register .nav-tabs .nav-link:hover{
            border: none;
        }
        .nav-tabs .nav-link.active{
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .register-heading{
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
        @media (min-width: 768px){
            .col-md-6 {
            -ms-flex: 0 0 50%;
             flex: 0 0 50%; 
            max-width: 50%;    
            }
        }

     /*trisha*/   
		html, body ,.register   {
		    height:100% !important;
		}

		.row{
		    height:100% !important;
		}

		.back-btn
		{
		    position: absolute;
		    color: #fff;
		    left: 15px;
		    top: 15px;
		        font-size: 18px !important;
		}
		.btn-submit{
		 border-radius: 15px 50px; 
		 float: right;
		}
		h3 {
            display: grid;
            width: 70%;
            align-items: center;
            text-align: center;
            grid-template-columns: minmax(20px, 1fr) auto minmax(20px, 1fr);
            grid-gap: 20px;
            position: absolute;
            left: 52px !important;
            top: -70px !important;
        }

        h3:before,
        h3:after {
            content: '';
            border-top: 2px solid;
        }
        .form-control{

            height: 51px;
        }

/*end css by trisha*/
    </style>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<script src="{{asset('js/app.js')}}"></script>
</head>
<body>
    
<div class="container-fluid register">
    <div class="row">
        <div class="col-md-6 register-left">
            <h1>SparkWise Institute</h1>
            <img class="logo-filter" src="{{ asset('login/img/logo.png') }}" alt=""/>
            <h2>
            </h2>
            <p style="text-align: justify;font-family: monospace;font-size: 14px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, explicabo minus suscipit maxime deserunt accusamus ipsa earum praesentium corrupti pariatur commodi sapiente possimus voluptatum assumenda id itaque quod sequi molestiae!
            </p>
           
        </div>


        <div class="col-md-6 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                   <!--  <h3 class="register-heading">Apply as a Employee</h3> -->
                    <div class="row register-form">

                        <div class="col-md-12">
                        	<h3>LOG IN</h3>
                            <form method="POST" action="{{url('/loginform')}}">
                                @csrf
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="USERID *" name="user_id" required="" />
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-unlock-alt"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password *" name="password" required="" />
                                </div>
                                <br>
                                 <input type="submit" class="btn btn-md btn-primary btn-submit" name="btn_login" value="Login Now" required="" /><br/>
                            </form>
                            <br>
                            <br>
                            <div class="p-t-15" style="text-align: center;">
	                            <p>Don't have an account? <a style="text-decoration: none;color: #387B1C ;" href="{{ url('/user/register') }}"><strong>Register Now</strong></a></p>
	                        </div>
	                        <div class="p-t-15" style="text-align: center;">
	                            <p id="backtoblog"><a style="text-decoration: none;color: #387B1C ;" href="{{url('/user/forget')}}"><strong>Forget Password</strong></a></p>
	                        </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<a href="/"><i class="fa fa-arrow-circle-left back-btn  btn"  > Back</i></a>
</body>

<script>
</script>

</html>