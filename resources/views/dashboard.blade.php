<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>Welcome to login page </h4>
            <table class="table">
                <thead>
                    <th>Name </th>
                    <th> Email</th>
                    <th> Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{ $data->name }}
                        </td>
                        <td>
                            {{ $data->email }}
                        </td>
                        <td>

                        </td>
                        <td>
                            <a href="logout">logout</a>
                        </td>

                    </tr>
                </tbody>

            </table>
        </div>
    </div>
</div>
