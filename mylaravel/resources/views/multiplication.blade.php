<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
        <h1 class="text-center">ตารางสูตรคูณ</h1>
        <form method="post" action="{{ url('/multiplication') }}">
            @csrf
            <div class="mb-3">
                <label for="number" class="form-label">Enter a number:</label>
                <input type="number" class="form-control" id="number" name="number" placeholder="Example : 2" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if(isset($multiplicationTable))
        <h2 class="text-center">สูตรคูณแม่ {{ $number }}</h2>
        <table class="table table-bordered ">
            @foreach ($multiplicationTable as $i => $result)
            <tr>
                <td>{{ $number }} x {{ $i }}</td>
                <td>{{ $result }}</td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</body>

</html>