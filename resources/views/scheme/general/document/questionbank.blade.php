<table style="width: 100%">
    <thead>
    </thead>
    <tbody>
    @foreach($questionbank as $qbank)
    <tr>
        <td>{{ $qbank->qb_question }}</td>
    </tr>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td></td>
    </tr>
    @endforeach
    </tbody>
</table>