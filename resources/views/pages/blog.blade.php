<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blog - Akaunting</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root{--primary:#6bb14a;--primary-dark:#5a9c3d;--text:#1f2937;--text-light:#6b7280;--border:#e5e7eb;--shadow:0 1px 3px rgba(0,0,0,.1);--shadow-lg:0 10px 25px -5px rgba(0,0,0,.1);--radius:10px;--radius-lg:16px;--transition:all .3s ease}
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;color:var(--text);background:#fff;line-height:1.6}
    a{text-decoration:none;color:inherit;transition:var(--transition)}
    .container{max-width:1200px;margin:0 auto;padding:0 20px}

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
    .hero p{color:var(--text-light);font-size:1.1rem;max-width:820px}

    .posts{padding:40px 0 70px}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:22px}
    .card{border:1px solid var(--border);border-radius:var(--radius-lg);overflow:hidden;background:#fff;transition:var(--transition)}
    .card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:transparent}
    .thumb{height:170px;background:linear-gradient(135deg,rgba(107,177,74,.18),rgba(107,177,74,.05))}
    .body{padding:18px}
    .meta{color:var(--text-light);font-size:.9rem;margin-bottom:8px}
    .title{font-size:1.15rem;font-weight:900;margin-bottom:8px}
    .excerpt{color:var(--text-light)}

    .footer{background:var(--text);color:#fff;padding:50px 0 25px}
    .copyright{text-align:center;padding-top:20px;border-top:1px solid rgba(255,255,255,.12);color:#9ca3af;font-size:.9rem}
    @media(max-width:768px){.nav-links{display:none}.hero h1{font-size:2.2rem}}
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
          <a class="nav-link" href="/about">About</a>
          <a class="nav-link active" href="/blog">Blog</a>
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
      <h1>Latest updates & tips</h1>
      <p>News, guides, and best practices to help you manage your accounting and grow your business.</p>
    </div>
  </section>

  <section class="posts">
    <div class="container">
      <div class="grid">
        <a class="card" href="#">
          <div class="thumb"></div>
          <div class="body">
            <div class="meta"><i class="fas fa-calendar"></i> Jan 2026 • Product</div>
            <div class="title">How to create invoices that get paid faster</div>
            <div class="excerpt">Simple invoice structure + tips to reduce late payments for small businesses.</div>
          </div>
        </a>

        <a class="card" href="#">
          <div class="thumb"></div>
          <div class="body">
            <div class="meta"><i class="fas fa-calendar"></i> Jan 2026 • Guides</div>
            <div class="title">Expense tracking: a simple system for beginners</div>
            <div class="excerpt">Track spending daily, categorize correctly, and understand your cash flow.</div>
          </div>
        </a>

        <a class="card" href="#">
          <div class="thumb"></div>
          <div class="body">
            <div class="meta"><i class="fas fa-calendar"></i> Jan 2026 • Reports</div>
            <div class="title">3 reports every business should check monthly</div>
            <div class="excerpt">Profit & loss, cash flow, and balance sheet explained in simple words.</div>
          </div>
        </a>
      </div>

      <div style="margin-top:22px;text-align:center">
        <a class="btn btn-outline" href="/">Back to Home</a>
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
