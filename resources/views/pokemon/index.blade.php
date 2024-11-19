@foreach( $pokemons as $pokemon ) 
    <div> 
        <h3>{{ $pokemon ->nome }}</h3> 
        <p>{{ $pokemon ->tipo }}</p>
        <a href= "{{ url('pokemon/'. $pokemon -> id.'/editar') }}" >Edit</a>
    <form action= "{{ url('pokemon/'. $pokemon ->id) }}" method= "POST" >             
        @csrf             
        @method( 'DELETE' )             
        <button type = "submit" >Delete</button>         
    </form>     
</div> 
@endforeach