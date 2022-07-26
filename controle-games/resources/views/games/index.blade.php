<x-layout title="Games" >
    <a href="{{route('games.create')}}" class="btn btn-dark mb-2">Adicionar Game</a>

    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Game</th>
                <th scope="col">Plataforma</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($games as $game)
            <tr>
                <td> {{$game->nome}}</td>
                <td> {{$game->plataforma}}</td>
                <td>
                    <a href="{{route('games.edit',$game->id)}}">
                        <button class="btn btn-primary btn-sm ">
                            Editar
                        </button>
                    </a>
                </td>
                <td>
                    <form action="{{route('games.destroy',$game->id)}}" method="post" >
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm ">
                            Apagar
                        </button>
                    </form>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
</x-layout>
