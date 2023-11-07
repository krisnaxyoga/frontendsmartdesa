<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Login - {{env('APP_NAME')}}</title>
      <meta name="description" content="Sistem Informasi Pemerintahan & Administrasi Desa (SIPADU) ">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
      <link rel="apple-touch-icon" href="{{url('/')}}/theme/assets/images/logo.svg">
      <meta name="apple-mobile-web-app-title" content="{{env('APP_NAME')}}">
      <meta name="mobile-web-app-capable" content="yes">
      <link rel="shortcut icon" sizes="196x196" href="{{url('/')}}/theme/assets/images/logo.svg">
      <link rel="stylesheet" href="{{url('/')}}/theme/libs/font-awesome/css/font-awesome.min.css" type="text/css">
      <link rel="stylesheet" href="{{url('/')}}/theme/assets/css/app.min.css">
      <link rel="stylesheet" href="{{url('/')}}/theme/assets/css/style.css">
   </head>
   <body class="login-side">

    <div class="row" style="height:inherit">
    <div class="col-lg-8  side-left hidden-xs hidden-sm" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%),url('https://holamigo.id/wp-content/uploads/2019/10/Desa-Cibuntu.jpg'); ">

    <div class="inner" >
    <div class="inner-content">
    <h4>Selamat Datang</h4>
        <h2>Sistem Informasi Pemerintahan & Administrasi Desa<br>
            (SIPADU)
            </h2>
        </div>
    </div>

    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 side-right">

      <div class="d-flex flex-column flex">
         <div class="navbar indigo bg pos-rlt box-shadow">
            <div class="mx-auto">
               <a href="#" class="navbar-brand">
                  <span class="hidden-folded d-inline">Login SIPADU</span>
               </a>
            </div>
         </div>
         <div id="content-body">
         <form class="form-horizontal" method="POST" action="{{ route('login') }}">
         {{ csrf_field() }}
            <div class="py-5 w-100">
               <div class="mx-auto w-xxl w-auto-xs">
                  <div class="px-3">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="username" class="form-control" id="Username" name="username" value="{{ old('username')}}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="Username">Password</label>
                            <input type="password" class="form-control" placeholder="Kata sandi"  name="password" required>
                        </div>
			<input type="hidden" name="kode_desa" value="PAJAHAN">
                        <!--div class="form-group">
                            <label for="Username">Kode Desa</label>
                            <input type="kode_desa" class="form-control" placeholder="Kode Desa" name="kode_desa" value="{{ old('kode_desa') }}" required>
                        </div-->
                        <div class="mb-3 text-center"><label class="md-check"><input {{ old('remember') ? 'checked' : '' }} type="checkbox"><i class="primary"></i> Ingat saya</label></div>
                        <button type="submit" class="btn btn-rounded success col-12"><i class="fa fa-check"></i> Masuk</button>

                     <div class="my-4 text-center" style="display:none;"><a href="{{ route('password.request') }}"class="text-primary _600">Lupa kata sandi?</a></div>

                  </div>
               </div>
            </div>
        </form>
         </div>
      </div>

      </div>
    </div>

      <script src="{{url('/')}}/theme/scripts/app.min.js"></script>
   </body>
</html>
