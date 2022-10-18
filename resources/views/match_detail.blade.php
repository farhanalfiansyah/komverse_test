<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Match Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    <center><h1>Match Detail</h1></center>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Placement</th>
                    <th scope="col">Display Name</th>
                    <th scope="col">Win / Lose</th>
                    <th scope="col">Lineup List</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($match_details as $match)
                    <tr>
                        <td>#{{$match['placement']}}</td>
                        <td>{{$match['display_name']}}</td>
                        <td>{{$match['win']}} / {{$match['lose']}}</td>
                        <td>
                            @foreach ($match['lineup'] as $key => $value)
                                <span>{{$key}}</span><br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

