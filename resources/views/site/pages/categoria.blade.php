@extends('site.templates.master')
@section('conteudo')

<section class="content">
    
    <div class="col-md-12">
        <br>
        <div class="title-category">
            <h1 class="title-category">{{$title}}</h1>
        </div>
        
        @forelse($datas as $key)

        <article class="post">
            <div class="image-post col-md-4 text-center">
                <img src="{{URL::asset('/assets/uploads/posts/'.$key->image)}}" alt="{{ $key->title }}" class="img-post">
            </div>
            <div class="description-post col-md-8">


                <div class="row">
                    <h2 class="title-post">{{ $key->title }}</h2>
                </div>
                
                <div class="row">
                    <p class="description-post">
                        {{ str_limit($key->description, 600) }}
                    </p>
                </div>

                <div class="row">
                    <a class="btn-post btn" href="/post/{{$key->id}}">Ir <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
        </article>
        @empty
            <div class="alert alert-danger" role="alert">
                <strong>Nenhuma postagem existente...</strong>
            </div> 
        @endforelse

        {{-- {{$datas->links()}} --}}

        @if(isset($dataForm))
            {{$datas->appends(Request::only('pesquisa'))->links()}}
        @else
            {{$datas->links()}}
        @endif

    </div><!--POSTS-->

</section>    

@endsection
       