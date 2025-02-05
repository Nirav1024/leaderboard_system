<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Leaderbord</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.bootstrap5.min.css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>
    @include('layout.show_flash_card')
    <a class="btn btn-primary btn-md m-3" href="{{ route('create.data') }}">Add data</a>
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
            <div class="table-responsive">
                <table class="table table-responsive product_data">
                    <thead>
                        <tr>
                            <td>UserID</td>
                            <td>Username</td>
                            <td>Points</td>
                            <td>Wins</td>
                            <td>Losses</td>
                            <td>LastActivity</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.2.2/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $('.product_data').DataTable({
            ajax: {
                url: '{{ route('deshbord') }}',
                type: 'GET'
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'UserID'
                },
                {
                    data: 'username',
                    name: 'username',
                }, {
                    data: 'points',
                    name: 'points',
                },
                {
                    data: 'wins',
                    name: 'wins',
                },
                {
                    data: 'losses',
                    name: 'losses',
                },
                {
                    data: 'lastactivity',
                    name: 'lastactivity',
                }, {
                    data: 'actions',
                    name: 'actions',
                    searchable: false,
                }
            ]
        });
    </script>
</body>

</html>
