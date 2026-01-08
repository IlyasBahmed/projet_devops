<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pricing - Akaunting</title>
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

    .hero{padding:130px 0 40px;background:linear-gradient(135deg,#f9fafb,#fff)}
    .hero h1{font-size:2.8rem;font-weight:900;letter-spacing:-.5px;margin-bottom:12px}
    .hero p{color:var(--text-light);font-size:1.1rem;max-width:780px}

    .pricing{padding:40px 0 70px}
    .grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:22px}
    .card{border:1px solid var(--border);border-radius:var(--radius-lg);padding:26px;background:#fff;transition:var(--transition)}
    .card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:transparent}
    .tag{display:inline-flex;gap:8px;align-items:center;background:rgba(107,177,74,.1);color:var(--primary);padding:6px 12px;border-radius:20px;font-size:.85rem;font-weight:800}
    .price{font-size:2.4rem;font-weight:900;margin:14px 0 6px}
    .muted{color:var(--text-light)}
    ul{list-style:none;margin-top:16px}
    li{display:flex;gap:10px;align-items:flex-start;margin:10px 0;color:var(--text-light)}
    li i{color:var(--primary);margin-top:3px}

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
          <a class="nav-link active" href="/pricing">Pricing</a>
          <a class="nav-link" href="/about">About</a>
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
      <h1>Simple pricing for every stage</h1>
      <p>Start free, upgrade when you grow. Transparent plans with everything you need to run your business.</p>
    </div>
  </section>

  <section class="pricing">
    <div class="container">
      <div class="grid">
        <div class="card">
          <div class="tag"><i class="fas fa-leaf"></i> Starter</div>
          <div class="price">$0</div>
          <div class="muted">Best for testing and small use</div>
          <ul>
            <li><i class="fas fa-check-circle"></i> Invoices & Expenses</li>
            <li><i class="fas fa-check-circle"></i> Basic Reports</li>
            <li><i class="fas fa-check-circle"></i> 1 Company</li>
          </ul>
          <div style="margin-top:18px">
            <a class="btn btn-primary" href="{{ route('register') }}" style="width:100%">Start Free</a>
          </div>
        </div>

        <div class="card" style="border-color:rgba(107,177,74,.35)">
          <div class="tag"><i class="fas fa-bolt"></i> Pro</div>
          <div class="price">$19<span style="font-size:1rem;font-weight:700">/mo</span></div>
          <div class="muted">For growing businesses</div>
          <ul>
            <li><i class="fas fa-check-circle"></i> Everything in Starter</li>
            <li><i class="fas fa-check-circle"></i> Advanced Reports</li>
            <li><i class="fas fa-check-circle"></i> Unlimited Invoices</li>
            <li><i class="fas fa-check-circle"></i> Priority Support</li>
          </ul>
          <div style="margin-top:18px">
            <a class="btn btn-primary" href="{{ route('register') }}" style="width:100%">Choose Pro</a>
          </div>
        </div>

        <div class="card">
          <div class="tag"><i class="fas fa-building"></i> Business</div>
          <div class="price">$49<span style="font-size:1rem;font-weight:700">/mo</span></div>
          <div class="muted">For teams & multiple companies</div>
          <ul>
            <li><i class="fas fa-check-circle"></i> Everything in Pro</li>
            <li><i class="fas fa-check-circle"></i> Multi-company</li>
            <li><i class="fas fa-check-circle"></i> Team Access</li>
            <li><i class="fas fa-check-circle"></i> Integrations</li>
          </ul>
          <div style="margin-top:18px">
            <a class="btn btn-outline" href="/contact" style="width:100%">Contact Sales</a>
          </div>
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
