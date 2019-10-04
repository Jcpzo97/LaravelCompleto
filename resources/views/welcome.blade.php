@extends ('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
        @foreach($Data as $item)    
            <div class="card mb-3">
            <div class="card-header">{{$item->fecha->format('d M Y')}}</div>
            <div class="card-body">
                <h3>{{$item->nombre}}</h3>
                <p>Categoria: {{$item->categoria->nombre}}</p>
                <p>Descripcion {{$item->descripcion}}</p>
                <div>
                        @foreach($item->etiquetas as $tag)
                        <span class="badge badge-primary">{{$tag->nombre}}</span>
                        @endforeach
                </div>
            </div>


            </div>
            
        @endforeach
        <nav aria-label="Page navigation example">
                <ul class="pagination">
                {{$Data->links()}}
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    
                </ul>
            </nav>
        </div>
    </div>
</div>


@endsection