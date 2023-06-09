@extends('layout.app')
@section('title', 'Indoswakarya Solusi')

@section('content')
    <!-- Hero section -->

    <section class="hero" id="home">
        <main class="content">
            <h1 class="display-4 head">
                Your <span>best choice</span> IT solution
            </h1>
            <div class="socials">
                <a href="#">
                    <i data-feather="instagram"></i>
                </a>
                <a href="#">
                    <i data-feather="linkedin"></i>
                </a>
                <a href="#">
                    <i data-feather="github"></i>
                </a>
            </div>
            <a href="#" class="cta">Contact Me</a>
        </main>
        <div class="image">
            <img src="{{ url('asset/img/tian.jpg') }}" alt="">
        </div>
    </section>

    <section class="about" id="about">
        <h2>Tentang <span>kami</span></h2>

        <div class="row">
            <div class="about-img">
                <img src="{{ url('asset/img/profil.png') }}" alt="Gambar Kopi" />
            </div>
            <div class="content">
                <h3>
                    Hi, my name is
                    <span style="color: var(--btn);">Christian</span>
                </h3>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui ducimus quidem sequi nihil incidunt rem
                    totam, excepturi repellat illum, consectetur voluptate commodi debitis maxime. Ipsum sint voluptatum
                    magni illo consequatur?
                    <br />
                    <br />
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ea incidunt fugiat ut tenetur itaque
                    deleniti consequuntur reiciendis, deserunt nulla. Qui laborum dignissimos expedita vitae debitis earum.
                    Veniam blanditiis amet ab, voluptate ut assumenda obcaecati dignissimos eius id nostrum!\
                </p>
            </div>
        </div>
    </section>

    <!-- end Hero section -->

    <!-- Menu section start -->

    <section class="menu" id="menu">
        <h2><span>Our</span> Tech</h2>
        <p>
            The Technology that we use
        </p>

        <div class="row">
            <div class="menu-card">
                <img src="https://phantomlandscapes.files.wordpress.com/2021/04/html-css-javascript.jpg" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">HTML, CSS, Javascript</h3>
                <h3 class="menu-card-title">Level: Expert</h3>
            </div>

            <div class="menu-card">
                <img src="https://smarttips.in/wp-content/uploads/2018/03/Laravel-logo.jpg" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">PHP Framework Laravel</h3>
                <h3 class="menu-card-title">Level: Expert(FrontEnd only)</h3>
            </div>

            <div class="menu-card">
                <img src="https://florencefennel.co.in/image/cache/catalog/florencefennel/react%20js-1000x1000.jpg"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">React JS</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://cdn-images-1.medium.com/max/1600/1*qwFrTMnFkcd3U9rFKwwacw.png" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Git and Github</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://static.techspot.com/images2/downloads/topdownload/2020/01/2020-01-28-ts3_thumbs-c3e.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">MySql</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://spng.pngfind.com/pngs/s/146-1466902_php-logo-png-transparent-php-logo-png-png.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">PHP</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>

            <div class="menu-card">
                <img src="https://tse1.mm.bing.net/th?id=OIP.eY2jpFO7RHl0P7En39N6VQHaDt&pid=Api&P=0" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Flutter and Dart</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>
        </div>
    </section>

    <!-- Menu section end -->

    <!-- Project section start -->

    <section class="menu" id="project">
        <h2><span>Our</span> Projects</h2>
        <p>
            The Project that i was working on
        </p>

        <div class="row">
            {{-- @foreach ($projects as $project)
                <a href="{{ url('project') }}/{{ $project->id }}">
                    <div class="menu-card">
                        <img src="{{ url('images') }}/{{ $project->image }}" alt="" class="menu-card-img" />
                        <h3 class="menu-card-title">Nama Project : {{ $project->name }}</h3>
                        <h3 class="menu-card-title">Kategori: {{ $project->kategori }}</h3>
                        <h3 class="menu-card-title">Technology: {{ $project->tech }}</h3>
                    </div>
                </a>
            @endforeach --}}

            <div class="menu-card">
                <img src="https://smarttips.in/wp-content/uploads/2018/03/Laravel-logo.jpg" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">PHP Framework Laravel</h3>
                <h3 class="menu-card-title">Level: Expert(FrontEnd only)</h3>
            </div>

            <div class="menu-card">
                <img src="https://florencefennel.co.in/image/cache/catalog/florencefennel/react%20js-1000x1000.jpg"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">React JS</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://cdn-images-1.medium.com/max/1600/1*qwFrTMnFkcd3U9rFKwwacw.png" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Git and Github</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://static.techspot.com/images2/downloads/topdownload/2020/01/2020-01-28-ts3_thumbs-c3e.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">MySql</h3>
                <h3 class="menu-card-title">Level: Intermediete</h3>
            </div>

            <div class="menu-card">
                <img src="https://spng.pngfind.com/pngs/s/146-1466902_php-logo-png-transparent-php-logo-png-png.png"
                    alt="" class="menu-card-img" />
                <h3 class="menu-card-title">PHP</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>

            <div class="menu-card">
                <img src="https://tse1.mm.bing.net/th?id=OIP.eY2jpFO7RHl0P7En39N6VQHaDt&pid=Api&P=0" alt=""
                    class="menu-card-img" />
                <h3 class="menu-card-title">Flutter and</h3>
                <h3 class="menu-card-title">Level: Begineer</h3>
            </div>
        </div>
    </section>

    <!-- Project section end -->

    <!-- contact section start -->
    <section class="contact" id="contact">
        <h2><span>Kontak</span> kami</h2>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, est.
        </p>

        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126646.25708918163!2d112.64247084265104!3d-7.275443758055953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbf8381ac47f%3A0x3027a76e352be40!2sSurabaya%2C%20Kota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1679485610673!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="Nama" />
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="email" placeholder="E-mail" />
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="number" placeholder="Phone Number" />
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- contact section end -->

@endsection
