@extends('painel.templates.dashboard') 
@section('conteudo')


<div class="title-pg">
    <h1 class="title-pg">Cadastro de Postagens</h1>
</div>

<div class="content-din">

     <!-- Alert Errors start -->
     @if( isset($errors) && count($errors) > 0 )
     <div class="col-md-12">
         <div class="alert alert-warning alert-dismissible">
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
             <h4><i class="icon fa fa-warning"></i> Atenção!</h4>
             @foreach( $errors->all() as $error)
                 <p>{{$error}}</p>
             @endforeach
         </div>
     </div>
    @endif
 <!-- /.Alert Errors start -->
 <!-- form start -->
    @if(isset($data))
    <form 
    class="form form-search form-ds"  
    method="post" action="{{route('postagens.update', $data->id)}}" enctype="multipart/form-data">
        {{ method_field('PUT') }}
    @else
    <form 
    class="form form-search form-ds"  
    method="post" action="{{route('postagens.store')}}" enctype="multipart/form-data">
    @endif
        {{ csrf_field() }} 
    
        <div class="form-group col-md-12">
            <label for="InputName">Titulo</label>
            <input type="text" class="form-control" id="InputName" name="title" placeholder="Titulo" value="{{$data->name or old('name')}}">
        </div>

        <div class="form-group col-md-12">
            <label>Categoria</label>
            <select name="category">
                <option value="1">Alimento</option>
            </select>
        </div>

        <div class="form-group col-md-12">
            <label for="InputFile">Imagem da Postagem</label>
            <input type="file" id="InputFile" name="image">
        </div>

        <!-- textarea -->
        <div class="form-group col-md-12">
            <label>Descrição</label>
            <textarea class="form-control" rows="5" name="description" placeholder="Digite aqui ..." id="description">{{$data->description or old('description')}}</textarea>
        </div>
        
        <div class="form-group col-md-6">
            <button class="btn btn-info">Enviar</button>
        </div>
    </form>



</div><!--Content Dinâmico-->


@endsection