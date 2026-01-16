<!DOCTYPE html>
<html>
<head>
   <title>@yield('title','Create Account')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background:#f7f6f2;
        }
        .auth-wrapper{
            max-width: 900px;
            margin: 50px auto;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 6px;
            overflow: hidden;
        }
        .step-indicator span{
            font-weight: 600;
            margin-left: 15px;
        }
        .step-active{
            color:#0d6efd;
        }
        .right-panel{
            background:#faf9f7;
            height:100%;
        }

        /* new style */
           body{
            background:#f7f6f2;
            font-family: Arial, sans-serif;
        } 

        .auth-card{
            max-width: 980px;
            margin: 60px auto;
            background:#fff;
            border:1px solid #d5d9d9;
            border-radius:8px;
            overflow:hidden;
        }

        .left-box{
            padding:40px;
        }

        .right-box{
            background:#faf9f7;
            padding:40px;
            border-left:1px solid #e0e0e0;         
        }

        .btn-amazon{
            background:#ff471a;
            color:#fff;
            border-radius:25px;
            padding:10px;
            font-weight:600;
        }

        .btn-amazon:hover{
            background:#184f87;
            color:#fff;
        }

        .info-item{
            display:flex;
            gap:12px;
            margin-bottom:20px;
        }

        .info-icon{
            font-size:22px;
        }

        .brand{
            font-size:26px;
            font-weight:bold;
            margin-bottom:20px;
        }
    </style>
</head>

<body>

<div class="container-fluid py-3 border-bottom bg-light">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Flipthe<span class="text-primary">ON</span></h5>

         <div class="step-indicator">
            <span class="{{ $step==1?'step-active':'' }}">① ACCOUNT</span>
            <span class="{{ $step==2?'step-active':'' }}">② ADDRESS</span>
            <span class="{{ $step==3?'step-active':'' }}">③ FINISH</span>
        </div>
    </div>
</div>

<div class="auth-card">
    <div class="row g-0">
        <div class="col-md-6 left-box">
            @yield('content')
        </div>

           <div class="col-md-6 right-box">
            @yield('side')
        </div>
    </div>
</div>

</body>
</html>
