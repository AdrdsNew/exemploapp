<?xml version="1.0" encoding="UTF-8"?>
<data>
@foreach($registros as $item)
<item>
    <marca>{{ $item->marca}}></marca>
    <esporte>{{ $item->esporte}}></esporte>
    <pressao_psi>{{ $item->pressao_psi}}></pressao_psi>
    <diametro>{{ $item->diametro}}></diametro>
    <padrao_campeonato>{{ $item->padrao_campeonato }}></padrao_campeonato>
</item>
    @endforeach
</data>