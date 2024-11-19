@extends ('layouts.app')
@section('conteudo')
<form action="{{ url('pokemon') }}" method="POST" class="max-w-sm mx-auto">
    @csrf
    <div class="mb-5">
    <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome pokemon</label>
    <input type="text" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="pokemon" required />
  </div>

  <div class="mb-5">
  <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo pokemon</label>
  <input type="text" id="tipo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>

  <div class="mb-5">
  <label for="pontos_de_poder" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pdp</label>
  <input type="text" id="pontos_de_poder" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
  </div>

  <label for="coach" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Treinador</label>
  <select id="coach" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  <option selected>Escolha um treinador</option>
  @foreach($coaches as $coach)
  <option value="{{ $coach->id}}">{{ $coach->name }}</option>
  @endforeach
  </select>
  
  </div class="mb-5">
  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Criar pokemon</button>
</form>
@endsection
