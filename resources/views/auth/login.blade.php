@extends('layouts.app')

@section('content')

            
    

<div class="login-box login-logo">
    <a href="#"><b>Sigecubo </b>v.0.0.1</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ingresa sus credenciales para acceder al sistema</p>

    <form action="#" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario">
        <span class="fa fa-user-circle form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Clave">
        <span class="fa fa-key form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4 col-xs-offset-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


    
@endsection
