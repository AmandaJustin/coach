@foreach( $coaches as $coach ) 
    <div> 
        <h3>{{ $coach ->nome }}</h3>
        <a href= "{{ url('coach/'. $coach -> id.'/editar') }}" >Edit</a>
    <form action= "{{ url('coach/'. $coach ->id) }}" method= "POST" >             
        @csrf             
        @method( 'DELETE' )             
        <button type = "submit" >Delete</button>         
    </form>     
</div> 
@endforeach
