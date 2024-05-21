<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

    <h2>title:{{ $title }}</h2>
    <h2>Date:{{ $date }}</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>telephone</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key=> $user)
            <tr>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->telephone }}</td>

                
            </tr>
            @endforeach
        </tbody>

    </table>

</body>
</html>