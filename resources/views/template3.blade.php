<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/dashbord.css') }}">



<body>

        <header>

            <div class="logosec">
                <div class="logo"><img src="{{ asset('images/logo-no-background.png') }}" alt="Logo"
                        style="width: 150px; height: 90px;">
                </div>
            </div>
        </header>

    
    @yield('content')
</body>
<script src="{{ asset('jquery/jquery-3.7.0.js') }}"></script>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successMessage = document.getElementById('successMessage');
        if (successMessage) {
            setTimeout(() => {
                successMessage.classList.add('fade-out');
                successMessage.addEventListener('animationend', () => {
                    successMessage.style.display = 'none';
                });
            }, 2000); 
        }
    });
</script>


</html>
