<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <table border="1">
      <thead>
        <tr>
          <th>Autores</th>
          <th>Data</th>
          <th>Numero</th>
          <th>Reus</th>
        </tr>
      </thead>
      <tbody>
        @foreach($processos as $processo)
          <tr>
            <td>
              @foreach($processo->autores as $autor)
                {{ $autor->pessoa->nome }}<br>
              @endforeach
            </td>
            <td>{{ $processo->created_at }}</td>
            <td>{{ $processo->numero }}</td>

            <td>
              @foreach($processo->reus as $reu)
                {{ $reu->pessoa->nome }}<br>
              @endforeach
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
