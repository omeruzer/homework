<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/adminAssets//assets/css/logins.css">


    <title>Yönetim Paneli</title>

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Yönetim Paneli</h2>
				</div>

			</div>

			<div class="row justify-content-center">
                
				<div class="col-md-6 col-lg-6">
					<div class="login-wrap p-4 p-md-5">
		      	<h3 class="text-center mb-12">Giriş</h3>
                  <div class="col-lg-12">
                    <div class="col-xl-12">
                        @include('error')
                        @include('alert')        
                    </div>
                </div>
				<form action="{{route('admin.login')}}" method="post" class="login-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" autocomplete="off" class="form-control rounded-left" placeholder="E-mail" required>
                    </div>
                    <div class="form-group d-flex">
                        <input type="password" name="password" autocomplete="off" class="form-control rounded-left" placeholder="Şifre" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Giriş</button>
                    </div>
                </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	</body>
</html>

