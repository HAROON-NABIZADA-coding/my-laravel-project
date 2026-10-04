<!DOCTYPE html>
<html lang="ps" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> دښتې</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>

    <header class=" header ">
        <div class="container nav ">

            <h1 class="logo ">
                <i class="fas fa-map "></i> افغانستان جغرافیه 🌍
            </h1>

            <nav aria-label="Main Navigation ">
                <ul class="nav-links ">

                     <li><a href="{{ route('home') }}">کور</a></li>
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


        <h2 class="section-title" style="text-align: center;">د افغانستان دښتې</h2>
        <br>
        <section class="grid-3">
            <article class="card">
                <figure>

                    <img src="{{asset ('images/دشت3.jpeg') }}">
                </figure>
                <p style="text-align: justify;">
                    هغه سيمې چې هلته غرونه نه وي اوبه لگول او د اوبو سرچینې نه وي، اورښت يې ډېر لي وي، دښته او صحرا بلل کېږي - د افغانستان په شمال کې د شير ماهي دښته او د بلخ او آموسیند تر منځ شکلنی دښتی چی له لویدیځ څخه مخ په ختیځ پراخې شوي دي او د نيمه صحرايي اقليم خانگر
                    تياوي لري، دا ځکه چې په پسرلي کې سيمه ييز او موسمی بارانونه لري او په اوړي کې و چه هوا لري دغه شکلنه دښته له شیرخان بندر څخه تر خماب پوری رسیږي. د هلمند په حوزه کی دگودزرې د ولاړو اوبو شاوخوا د جهندم او امیران دښته او د صديقي شكلني
                    دښتې او د چخانسور ټولې برخې چې شكلني سيمي دي صحرايي ځانگړتيا لري، په دغه برخه کې د کواترنري د رسویانو د پاني شونو نښي ښکاري. به ننگرهار کی دغه ډول ساحه پراخه ځمکی نیسی به ختيځ کې د ثمر خيلو او غازي آباد ترمنځ شکلنه دښته او په لغمان
                    کې د گمبيري او سرخكانو دښته، د پاملرنې وړ دي. دغه ساحه نيمه استوایی خانگر نياوي لري او لوړوالی يې له ۵۰۰ مترو څخه لږدی د اقليمي خانگرتیاوو له پلوه د افغانستان په شمالي پولو، ختيځو او سویل لوېدخو برخو کې بېلابیل چاپیریال جوړوي، همدارنگه
                    به لوگر کی د سقاوی دښته او په کاپیسا کی ریگروان هم د يادوني وړ دي. دغه دښتې ډېرې پراخه دي او شكلني غوندی لري چې د ترانسپورت له پلوه ډېرې ستونزي را منځته کوي.
                </p>
            </article>
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