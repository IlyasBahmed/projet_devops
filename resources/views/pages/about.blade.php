<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About - Akaunting</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root{--primary:#6bb14a;--primary-dark:#5a9c3d;--text:#1f2937;--text-light:#6b7280;--border:#e5e7eb;--shadow:0 1px 3px rgba(0,0,0,.1);--shadow-lg:0 10px 25px -5px rgba(0,0,0,.1);--radius:10px;--radius-lg:16px;--transition:all .3s ease}
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;color:var(--text);background:#fff;line-height:1.6}
    a{text-decoration:none;color:inherit;transition:var(--transition)}
    .container{max-width:1100px;margin:0 auto;padding:0 20px}

    .nav{position:fixed;top:0;left:0;width:100%;background:rgba(255,255,255,.95);backdrop-filter:blur(10px);border-bottom:1px solid var(--border);z-index:1000}
    .nav.scrolled{box-shadow:var(--shadow)}
    .nav-inner{display:flex;align-items:center;justify-content:space-between;padding:16px 0}
    .brand{display:flex;align-items:center;gap:12px;font-weight:800;font-size:1.25rem}
    .logo{width:42px;height:42px;border-radius:12px;background:linear-gradient(135deg,rgba(107,177,74,.15),rgba(107,177,74,.08));color:var(--primary);display:flex;align-items:center;justify-content:center;font-weight:900;font-size:1.5rem;box-shadow:0 4px 6px rgba(107,177,74,.1)}
    .nav-links{display:flex;gap:24px;align-items:center}
    .nav-link{font-weight:500;font-size:.95rem;color:var(--text-light)}
    .nav-link:hover{color:var(--primary)}
    .nav-link.active{color:var(--primary);font-weight:700}
    .nav-actions{display:flex;gap:12px}
    .btn{display:inline-flex;align-items:center;justify-content:center;padding:10px 20px;border-radius:var(--radius);font-weight:700;font-size:.95rem;border:1px solid transparent;cursor:pointer;transition:var(--transition)}
    .btn-outline{border:1px solid var(--border);background:transparent}
    .btn-outline:hover{border-color:var(--primary);color:var(--primary);box-shadow:var(--shadow)}
    .btn-primary{background:var(--primary);color:#fff;border-color:var(--primary)}
    .btn-primary:hover{background:var(--primary-dark);border-color:var(--primary-dark);transform:translateY(-2px);box-shadow:0 4px 12px rgba(107,177,74,.3)}

    .hero{padding:130px 0 30px;background:linear-gradient(135deg,#f9fafb,#fff)}
    .hero h1{font-size:2.8rem;font-weight:900;letter-spacing:-.5px;margin-bottom:12px}
    .hero p{color:var(--text-light);font-size:1.1rem;max-width:900px}

    .content{padding:40px 0 70px}
    .box{border:1px solid var(--border);border-radius:var(--radius-lg);padding:26px;background:#fff;box-shadow:var(--shadow)}
    .grid{display:grid;grid-template-columns:1fr 1fr;gap:18px;margin-top:18px}
    .item{border:1px solid var(--border);border-radius:var(--radius);padding:18px}
    .item h3{font-size:1.1rem;font-weight:900;margin-bottom:6px}
    .item p{color:var(--text-light)}

    .footer{background:var(--text);color:#fff;padding:50px 0 25px}
    .copyright{text-align:center;padding-top:20px;border-top:1px solid rgba(255,255,255,.12);color:#9ca3af;font-size:.9rem}
    @media(max-width:768px){.nav-links{display:none}.hero h1{font-size:2.2rem}.grid{grid-template-columns:1fr}}
  </style>
</head>
<body>

  <div class="nav" id="navbar">
    <div class="container">
      <div class="nav-inner">
        <a class="brand" href="/"><div class="logo">A</div><div>Akaunting</div></a>
        <div class="nav-links">
          <a class="nav-link" href="/">Home</a>
          <a class="nav-link" href="/features">Features</a>
          <a class="nav-link" href="/pricing">Pricing</a>
          <a class="nav-link active" href="/about">About</a>
          <a class="nav-link" href="/blog">Blog</a>
        </div>
        <div class="nav-actions">
          <a class="btn btn-outline" href="/auth/login">Login</a>
          <a class="btn btn-primary" href="{{ route('register') }}">Get Started Free</a>
        </div>
      </div>
    </div>
  </div>

  <section class="hero">
    <div class="container">
      <h1>About Akaunting</h1>
      <p>Akaunting is designed to make accounting easier for small businesses—simple UI, powerful tools, and clean reports so you can focus on growth.</p>
    </div>
  </section>

  <section class="content">
    <div class="container">
      <div class="box">
        <p style="color:var(--text-light);font-size:1.05rem">
          Our mission is to give entrepreneurs and teams an easy way to manage invoices, expenses, customers, and reporting without complicated accounting systems.
        </p>

        <div class="grid">
          <div class="item">
            <h3><i class="fas fa-check-circle" style="color:var(--primary)"></i> Simple</h3>
            <p>Clean interface that works for beginners and pros.</p>
          </div>
          <div class="item">
            <h3><i class="fas fa-lock" style="color:var(--primary)"></i> Secure</h3>
            <p>Built with best practices to keep your data safe.</p>
          </div>
          <div class="item">
            <h3><i class="fas fa-rocket" style="color:var(--primary)"></i> Fast setup</h3>
            <p>Start in minutes and scale as your business grows.</p>
          </div>
          <div class="item">
            <h3><i class="fas fa-users" style="color:var(--primary)"></i> Built for teams</h3>
            <p>Manage users, roles, and multiple companies.</p>
          </div>
        </div>

        <div style="margin-top:22px;display:flex;gap:12px;flex-wrap:wrap">
          <a class="btn btn-primary" href="{{ route('register') }}">Start Free</a>
          <a class="btn btn-outline" href="/contact">Contact</a>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container"><div class="copyright">© 2023 Akaunting. Made with Laravel and ❤️</div></div>
  </footer>

  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 10) navbar.classList.add('scrolled');
      else navbar.classList.remove('scrolled');
    });
  </script>

</body>
</html>
