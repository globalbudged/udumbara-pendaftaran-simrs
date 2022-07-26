<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <script>
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        function request(url, options) {
            // get cookie
            const csrfToken = getCookie('XSRF-TOKEN');
            return fetch(url, {
                headers: {
                    'content-type': 'application/json',
                    'accept': 'application/json',
                    'X-XSRF-TOKEN': decodeURIComponent(csrfToken),
                },
                credentials: "include",
                ...options,
            })
        }

        function login() {
            return request('http://localhost/udumbara-pendaftaran-simrs/public/login', {
                method: "POST",
                body: JSON.stringify({
                    email: 'pharyyady@gmail.com',
                    password: '141312'
                })
            })
        }

        function logout() {
            return request('http://localhost/udumbara-pendaftaran-simrs/public/logout', {
                method: "POST",
            })
        }

        fetch('sanctum/csrf-cookie', {
                headers: {
                    'content-type': 'application/json',
                    'accept': 'application/json',
                },
                credentials: "include"
            }).then(() => logout())
            .then(() => {
                return login()
            })
    </script>

</body>

</html>