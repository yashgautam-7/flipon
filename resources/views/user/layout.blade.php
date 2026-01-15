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
    </style>
</head>

<body>

<div class="container-fluid py-3 border-bottom bg-light">
    <div class="d-flex justify-content-between align-items-center">
        <h5 class="mb-0">My<span class="text-primary">Business</span></h5>

         <div class="step-indicator">
            <span class="{{ $step==1?'step-active':'' }}">① ACCOUNT</span>
            <span class="{{ $step==2?'step-active':'' }}">② ADDRESS</span>
            <span class="{{ $step==3?'step-active':'' }}">③ FINISH</span>
        </div>
    </div>
</div>

<div class="auth-wrapper">
    <div class="row g-0">
        <div class="col-md-6 p-4">
            @yield('content')
        </div>

        <div class="col-md-6 p-4 right-panel">
            @yield('side')
        </div>
    </div>
</div>

</body>
</html>
