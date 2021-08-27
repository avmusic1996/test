        <html>
            <body>
                    <table>
    </thead>
                        <tr>
                            <th>
                                nombre
                            </th>
                            <th>
                                email
                            </th>
                            <th>
                            </th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>
                {{ $user ->name }}
            </td>
            <td>
                {{ $user ->email }}
            </td>
        </tr>
        @endforeach
    </tbody>
        </tr>
                    </table>
            </body>
        </html>