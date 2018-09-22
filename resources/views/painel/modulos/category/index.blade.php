@extends('painel.templates.dashboard')
@section('conteudo')
<div class="title-pg">
    <h1 class="title-pg">Listagem das Categorias</h1>
</div>

<div class="content-din bg-white">

    <div class="form-search">
        <form class="form form-inline"  method="get" action="{{route('categorias.search')}}" enctype="multipart/form-data">

            {{-- {{ csrf_field() }} --}}
            <input type="text" name="pesquisa"  class="form-control">
            {{-- <input type="text" name="name" placeholder="Nome:" class="form-control"> --}}

            <button type="submit" class="btn btn-search">Pesquisar</button>
        </form>
    </div>

    <div class="class-btn-insert">
    <a href="{{route('categorias.create')}}" class="btn-insert">
            <span class="glyphicon glyphicon-plus"></span>
            Cadastrar
        </a>
    </div>

    <!-- Mensagens enviadas do  controller pela session success -->
      @if( Session::has('success'))
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible hide-msgd">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-warning"></i> {{Session::get('success')}}</h4>

                    </div>
                </div>
        @endif
    <!-- /. Mensagens enviadas do  controller pela session success -->

    <table class="table table-striped">
        <tr>
            <th>Nome</th>
            <th>Url</th>
            <th>Description</th>
            <th width="150">Ações</th>
        </tr>
        @forelse($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->url}}</td>
                <td>{{$category->description}}</td>
                <td>
                <a href="{{route('categorias.show', $category->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                <a href="{{route('categorias.edit', $category->id)}}" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>

                </td>
            </tr>
            @empty
            <tr>
                <td>Nenhum registro</td>
                </tr>
        @endforelse
    </table>

    {{-- {{$users->links()}} --}}

    @if(isset($dataForm))
    {{$categories->appends(Request::only('pesquisa'))->links()}}
        @else
    {{$categories->links()}}
        @endif

</div><!--Content Dinâmico-->
@endsection