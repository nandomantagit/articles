<!DOCTYPE html>
<html>
<head>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    th, td {
        text-align: left;
        padding: 8px;
    }
    
    tr:nth-child(even){background-color: #f2f2f2}
    
    th {
        background-color: skyblue;
        color: white;
    }
    </style>
</head>
<body>

<h2>User Data</h2>
<p>This user data !</p>
<table class="table">
        <thead>
        <tr>  
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified at</th>
        </tr>
        </thead>
        <tbody>

        @foreach($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->email_verified_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>