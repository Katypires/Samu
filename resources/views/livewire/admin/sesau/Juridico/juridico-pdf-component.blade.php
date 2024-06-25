<div>
    @isset($sindicancia)
    <div style="text-align: center;">
       <h1>PREFEITURA MUNICIPAL DE CAMPO GRANDE - MS</h1>
    </div>
</br>
</br>
    <h2>Sindicância: {{$sindicancia->id}}</h2>
    <h2>N° Processo: {{$sindicancia->numero_processo}}</h2>
    <h2>N° Resolução: {{$sindicancia->numero_resolucao}}</h2>

    </br>
    </br>
    </br>

    <div>
        <h2><strong>RELATÓRIO DE OITIVA</h2></strong>
    </div>
        <table>
            <tr>
              <th>Nome</th>
              <th>Data</th>
              <th>Local</th>
              <th>Relatório</th>
            </tr>
            @forelse ( $sindicancia->oitivas as $item )
                <tr>
                    <td>{{$item->pessoa->nome}}</td>
                    <td>{{$item->data_oitiva}}</td>
                    <td>{{$item->local}}</td>
                    <td>{{$item->relatorio}}</td>
                </tr>
            @empty
                não existe oitiva
            @endforelse

        </br>
    </br>

          </table>
    <div>
        <h2><strong>RELATÓRIO DE MEMBROS</h2></strong>
    </div>
        <table>
            <tr>
              <th>Nome</th>
              <th>Função</th>
              <th>Rubrica</th>
            </tr>
            @forelse ( $sindicancia->sindicancia_membros as $item )
                <tr>
                    <td>{{$item->membro->nome}}</td>
                    <td>{{$item->tipo_funcao_membro->nome}}</td>
                    <td>{{$item->rubrica}}</td>

                </tr>
            @empty
                não existe oitiva
            @endforelse
        </br>
    </br>

          </table>
    <div>
        <h2><strong>RELATÓRIO DE PESSOAS</h2></strong>
    </div>
        <table>
            <tr>
              <th>Nome</th>
            </tr>
            @forelse ( $sindicancia->sindicancia_pessoas as $item )
                <tr>
                    <td>{{$item->pessoa->nome}}</td>

                </tr>
            @empty
                não existe oitiva
            @endforelse


          </table>
     @endisset
        </br>
    </br>
</br>
</br>
</br>
<div>
    <h2><strong>RELATÓRIO DE SINDICÂNCIAS</h2></strong>
</div>
    <table>
        <tr>
          <th>Id Sindicância</th>
          <th>N° Processo</th>
          <th>N° Resolução</th>
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
