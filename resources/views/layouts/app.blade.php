<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.8.1/build/css/intlTelInput.css">
   <link rel="stylesheet" href="{{ asset('assets/web/css/style.css') }}">
</head>
<body>

    <div class="overlay" id="overlay"></div>

    @include('layouts.parts.sidebar')



    <div class="workspace">

    @include('layouts.parts.navbar')


        <main class="main-content">
            <section class="page-section">
              
@yield('content')

                {{-- ضع table أو form أو cards داخل هذا الصندوق --}}
            </section>
        </main>
    </div>

    <script>
        const body = document.body;
        const openMenu = document.getElementById('open-menu');
        const closeMenu = document.getElementById('close-menu');
        const overlay = document.getElementById('overlay');

        openMenu.addEventListener('click', () => body.classList.add('menu-open'));
        closeMenu.addEventListener('click', () => body.classList.remove('menu-open'));
        overlay.addEventListener('click', () => body.classList.remove('menu-open'));

        const menuLinks = document.querySelectorAll(".menu-link");

menuLinks.forEach((link) => {
    link.addEventListener("click", () => {
        menuLinks.forEach((item) => {
            item.classList.remove("active");
        });

        link.classList.add("active");
    });
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.8.1/build/js/intlTelInput.min.js"></script>

<script>
    const phoneInput = document.querySelector("#phone");

    window.intlTelInput(phoneInput, {
        initialCountry: "jo",
        separateDialCode: true,
        loadUtils: () =>
            import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.8.1/build/js/utils.js"),
    });
</script>

</body>
</html>