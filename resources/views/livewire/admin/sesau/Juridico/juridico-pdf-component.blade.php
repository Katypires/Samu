<div>

    <div style="text-align: center;">
       <h1>PREFEITURA MUNICIPAL DE CAMPO GRANDE - MS</h1>
       <h2>FICHA DE ATENDIMENTO - HELPER SESAU</h2>
        <h2><strong>XXXXX</h2></strong>
    </div>

    <table>
        <tr>
          <th>Company</th>
          <th>Contact</th>
          <th>Country</th>
        </tr>
        @forelse ( $sindicancias as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->numero_processo}}</td>
                <td>{{$item->numero_resolucao}}</td>
            </tr>
        @empty

        @endforelse


      </table>



</div>
