@props(['trains'])

<div class="container py-4 vh-100">
    <div class="h-100 overflow-auto">
        <table class="table table-striped table-hover align-middle shadow-lg">
            <thead class="table-dark">
                <tr class="text-center">
                    <th scope="col">Azienda</th>              
                    <th scope="col">Stazione di Partenza</th>              
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario di Partenza</th>
                    <th scope="col">Orario di Arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">In Orario</th>                
                    <th scope="col">Cancellato</th>                
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr class="text-center">
                    <td class="fw-bold">{{ $train['azienda'] }}</td>
                    <td>{{ $train['stazione_partenza'] }}</td>
                    <td>{{ $train['stazione_arrivo'] }}</td>
                    <td>{{ $train['orario_partenza'] }}</td>           
                    <td>{{ $train['orario_arrivo'] }}</td>
                    <td class="fw-bold">{{ $train['codice_treno'] }}</td>
                    <td>{{ $train['numero_carrozze'] }}</td>
                    <td class="fw-bold"> {{ $train['prezzo'] }}€</td>
                    <td>
                        <span class="badge {{ $train['in_orario'] ? 'bg-success' : 'bg-danger' }}">
                            {{ $train['in_orario'] ? 'Confermato' : 'Non confermato' }}
                        </span>
                    </td>
                    <td>
                        <span class="badge {{ $train['cancellato'] ? 'bg-danger' : 'bg-success' }}">
                            {{ $train['cancellato'] ? 'Cancellato' : 'Confermato' }}
                        </span>
                    </td>
                              
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>