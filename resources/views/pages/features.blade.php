<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Features - Akaunting</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary: #6bb14a;
      --primary-dark: #5a9c3d;
      --text: #1f2937;
      --text-light: #6b7280;
      --border: #e5e7eb;
      --bg-white: #ffffff;
      --shadow: 0 1px 3px rgba(0,0,0,0.1);
      --shadow-lg: 0 10px 25px -5px rgba(0,0,0,0.1);
      --radius: 10px;
      --radius-lg: 16px;
      --transition: all 0.3s ease;
    }
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial,sans-serif;color:var(--text);background:#fff;line-height:1.6}
    a{color:inherit;text-decoration:none;transition:var(--transition)}
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

    .page-hero{padding:130px 0 50px;background:linear-gradient(135deg,#f9fafb,#fff)}
    .page-hero h1{font-size:2.8rem;line-height:1.1;font-weight:900;letter-spacing:-.5px;margin-bottom:14px}
    .page-hero p{color:var(--text-light);font-size:1.1rem;max-width:800px}
    .badge{display:inline-flex;align-items:center;gap:8px;background:rgba(107,177,74,.1);color:var(--primary);padding:6px 12px;border-radius:20px;font-size:.85rem;font-weight:700;margin-bottom:14px}

    .grid{padding:50px 0}
    .cards{display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:22px}
    .card{border:1px solid var(--border);border-radius:var(--radius-lg);padding:24px;background:#fff;transition:var(--transition)}
    .card:hover{transform:translateY(-6px);box-shadow:var(--shadow-lg);border-color:transparent}
    .icon{width:52px;height:52px;border-radius:16px;background:rgba(107,177,74,.1);color:var(--primary);display:flex;align-items:center;justify-content:center;font-size:1.3rem;margin-bottom:14px}
    .card h3{font-size:1.2rem;font-weight:800;margin-bottom:8px}
    .card p{color:var(--text-light)}

    .footer{background:var(--text);color:#fff;padding:50px 0 25px;margin-top:30px}
    .footer .copyright{text-align:center;padding-top:20px;border-top:1px solid rgba(255,255,255,.12);color:#9ca3af;font-size:.9rem}

    @media(max-width:768px){
      .nav-links{display:none}
      .page-hero h1{font-size:2.2rem}
    }
  </style>
</head>
<body>

  <div class="nav" id="navbar">
    <div class="container">
      <div class="nav-inner">
        <a class="brand" href="/">
          <div class="logo">A</div><div>Akaunting</div>
        </a>

        <div class="nav-links">
          <a class="nav-link" href="/">Home</a>
          <a class="nav-link active" href="/features">Features</a>
          <a class="nav-link" href="/pricing">Pricing</a>
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

  <section class="page-hero">
    <div class="container">
      <div class="badge"><i class="fas fa-sparkles"></i> All-in-one accounting</div>
      <h1>Features built for small businesses</h1>
      <p>Invoice faster, track expenses, manage customers, and get clean reports. Everything is designed to be simple, quick, and reliable.</p>
    </div>
  </section>

  <section class="grid">
    <div class="container">
      <div class="cards">
        <div class="card">
          <div class="icon"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3>Invoicing</h3>
          <p>Create professional invoices, send them instantly, and track payments in real time.</p>
        </div>
        <div class="card">
          <div class="icon"><i class="fas fa-receipt"></i></div>
          <h3>Expense Tracking</h3>
          <p>Log expenses with categories, attach receipts, and keep your cash flow clear.</p>
        </div>
        <div class="card">
          <div class="icon"><i class="fas fa-users"></i></div>
          <h3>Customers & Vendors</h3>
          <p>Keep contacts organized with history, invoices, payments, and notes.</p>
        </div>
        <div class="card">
          <div class="icon"><i class="fas fa-chart-pie"></i></div>
          <h3>Reports</h3>
          <p>Understand profit, loss, taxes, and performance with clean dashboards.</p>
        </div>
        <div class="card">
          <div class="icon"><i class="fas fa-credit-card"></i></div>
          <h3>Online Payments</h3>
          <p>Offer Stripe/PayPal payments and get paid faster (optional).</p>
        </div>
        <div class="card">
          <div class="icon"><i class="fas fa-plug"></i></div>
          <h3>Integrations</h3>
          <p>Connect tools you already use to automate your accounting workflow.</p>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="container">
      <div class="copyright">© 2023 Akaunting. Made with Laravel and ❤️</div>
    </div>
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
