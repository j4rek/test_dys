<table>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @for($i = 0; $i < count($ufs); $i++)
            <td>
                {{ $ufs[$i]->Fecha }}
            </td>
            <td>
                {{ $ufs[$i]->Valor }}
            </td>
        @endfor
    </tbody>
</table>