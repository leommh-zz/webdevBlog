@extends('painel.templates.dashboard')
@section('conteudo')
<div class="title-pg">
    <h1 class="title-pg">Formulários</h1>
</div>

<div class="content-din">

    <form class="form form-search form-ds">
        <div class="form-group">
            <input type="text" name="title" placeholder="Nome:" class="form-control">
        </div>
        <div class="form-group">
            <select name="Categoria">
                <option value="1">Categoria</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="description" placeholder="Description" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-search">Enviar</button>
        </div>
    </form>

</div><!--Content Dinâmico-->
@endsection