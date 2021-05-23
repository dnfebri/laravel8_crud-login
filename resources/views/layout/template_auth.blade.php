<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>{{ $title ?? config('template_auth.name') }}</title>
   <link href="{{url('/auth_asset/css/bootstrap.min.css')}}" rel="stylesheet">

   <link href="{{url('auth_asset/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
   <style type="text/css">
      #form-login {
         margin-top: 90px;
         background-color: #fff;
         font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
         border-top: 10px solid #F04F57;
         display: none;
      }

      .bi {
         padding-top: 6px;
         font-size: 20px;
      }
   </style>
</head>

<body style="background-color: #333333;">
   @yield('content')
   <script src="{{url('auth_asset/js/jquery.min.js')}}"></script>
   <script src="{{url('auth_asset/js/admin.js')}}"></script>
   <script src="{{url('auth_asset/js/bootstrap.min.js')}}"></script>
</body>

</html>