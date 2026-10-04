<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> اړیکه</title>

    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">


</head>


<body>

    <header class=" header ">
        <div class="container nav ">

            <h1 class="logo ">
                <i class="fas fa-map "></i> افغانستان جغرافیه 🌍
            </h1>

            <nav aria-label="Main Navigation ">
                <ul class="nav-links ">
              <li><a href="index.html ">کور</a></li>
                    <li><a href="{{ route('home') }}">ولایتونه</a></li>
                    <li><a href="{{ route('province') }}">ولایتونه</a></li>
                    <li><a href="{{ route('netural') }}">طبیعی سرچینی</a></li>
                    <li><a href="{{ route('neighbor') }}">پولې او ګاونډیان</a></li>
                    <li><a href="{{ route('mountain') }}">غرونه</a></li>
                    <li><a href="{{ route('desert') }}">دښتی</a></li>
                    <li><a href="{{ route('river') }}">سیندونه</a></li>
                    <li><a href="{{ route('contact') }} ">اړیکه</a></li>
                </ul>
            </nav>


            <div class="auth ">
                <a href="# " class="btn-outline ">Login</a>
                <a href="# " class="btn-primary ">Sign Up</a>
            </div>

        </div>
    </header>
    <main class="section container">

        <header>
            <br><br>
            <h1 class="section-title">اړیکه 📧</h1>
            <br><br><br>
        </header>

        <section>

            <form class="card">

                <label>نوم</label>
                <input type="text" required>

                <label>ایمیل</label>
                <input type="email" required>

                <label>پیغام</label>
                <textarea rows="5"></textarea>

                <button class="btn-primary">Send 📤</button>

            </form>

        </section>

    </main>

    <footer class="footer ">
        <div class="container footer-grid ">

            <section>
                <h3>☎️اړیکه</h3>
                <p>Ⓜ️ایمیل: haroonnabizada830@mail.com </p>
                <p>📞اړیکه شمیره: 0781532836 </p>
            </section>

            <section>
                <h3>اچتماعی شبکی📶</h3>
                <p>فیس بوک</p>
                <p>واتساپ</p>
            </section>

        </div>
    </footer>
</body>

</html>