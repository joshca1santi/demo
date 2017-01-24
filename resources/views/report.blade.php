@extends('layouts.app')

@section('content')
 <div class="panel panel-primary">
                <div class="panel-heading">Reportes</div>

                <div class="panel-body">
                @if (count($errors) > 0)

                    <div class="alert alert-danger">
                        <ul>    
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif

                    <form action="" method="POST">
                    {{csrf_field()}}

                        <div class="form-group">
                            
                            <label for="category_id">Categorias</label>
                            <select name="category_id" class="form-control">
                            <option value="">General</option>
                           @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }} </option>

                           @endforeach
                           </select>
                        </div>
                         <div class="form-group">
                            
                            <label for="severity">Severidad</label>
                            <select name="severity" class="form-control">
                                <option value="M">Menor</option>
                                <option value="N">Normal</option>
                                <option value="A">Alta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            
                            <label for="">Titulo</label>
                            <!-- permite que cuando se haga el submit del formulario guarde el valor que ya se ha escrito si falla alguna condicion santi-->
                            <input type="text" name="tittle" class="form-control" value="{{old('tittle')}}">
                        </div>

                        <div class="form-group">
                            
                            <label for="">Descripcion</label>
                            <textarea name="Descripcion" class="form-control">{{old('Descripcion')}}</textarea>
                        </div>
                          <div class="form-group">
                            
                            <button class="btn btn-primary">Registrar incidencia</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
