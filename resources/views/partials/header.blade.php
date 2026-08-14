<header class="site-header" id="top">
    <div class="header-inner">
        <div class="brand">
            <img src="{{ asset('images/uep-logo.png') }}" alt="UEP Logo" class="brand-logo">
            <div class="brand-text">
                <span class="brand-name">University of Eastern Pangasinan</span>
                <span class="brand-tagline">Binalonan, Pangasinan</span>
            </div>
        </div>

        <button class="nav-toggle" type="button" aria-label="Toggle navigation" onclick="document.querySelector('.site-nav').classList.toggle('is-open')">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav class="site-nav">
            <a href="#top">Home</a>
            <a href="#about">About UEP</a>
            <a href="#mission">Mission &amp; Vision</a>
            <a href="#programs">Programs</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
</header>

<section class="hero" style="background-image: url('{{ asset('images/uep-building.jpg') }}');">
    <div class="hero-content">
        <h1><span class="hero-lead">Welcome to the</span>University of Eastern Pangasinan</h1>
        <p>A public-private partnership institution in Binalonan, Pangasinan, committed to providing quality, accessible, and world-class education for every Filipino student.</p>
        <a href="#programs" class="btn-cta">Explore Our Programs</a>
    </div>
</section>