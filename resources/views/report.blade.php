@extends('layouts.app')

@section('content')
 <div class="panel panel-primary">
                <div class="panel-heading">Reportes</div>

                <div class="panel-body">
                    <form action="post">
                        <div class="form-group">
                            
                            <label for="category_id">Categoria</label>
                            <select name="category_id" class="form-control"></select>
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
                            <input type="text" name="tittle" class="form-control">
                        </div>

                        <div class="form-group">
                            
                            <label for="">Descripcion</label>
                            <textarea name="Descripcion" class="form-control"></textarea>
                        </div>
                          <div class="form-group">
                            
                            <button class="btn btn-primary">Registrar incidencia</button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
