<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Akaunting - Free Accounting Software for Small Businesses</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    :root {
      --primary: #6bb14a;
      --primary-dark: #5a9c3d;
      --primary-light: rgba(107, 177, 74, 0.1);
      --secondary: #4f46e5;
      --secondary-light: rgba(79, 70, 229, 0.1);
      --accent: #f59e0b;
      --text: #1f2937;
      --text-light: #6b7280;
      --text-lighter: #9ca3af;
      --border: #e5e7eb;
      --border-light: #f3f4f6;
      --bg-light: #f9fafb;
      --bg-white: #ffffff;
      --shadow: 0 1px 3px rgba(0,0,0,0.08);
      --shadow-md: 0 4px 6px -1px rgba(0,0,0,0.1);
      --shadow-lg: 0 20px 40px -10px rgba(0,0,0,0.1);
      --shadow-xl: 0 25px 50px -12px rgba(0,0,0,0.15);
      --radius: 12px;
      --radius-lg: 20px;
      --radius-xl: 30px;
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      --transition-slow: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    
    body {
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, Arial, sans-serif;
      color: var(--text);
      background: var(--bg-white);
      line-height: 1.6;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }
    
    a {
      color: inherit;
      text-decoration: none;
      transition: var(--transition);
    }
    
    .container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }
    
    /* Improved Navbar */
    .nav {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: rgba(255, 255, 255, 0.98);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(229, 231, 235, 0.8);
      z-index: 1000;
      transition: var(--transition-slow);
    }
    
    .nav.scrolled {
      box-shadow: var(--shadow-lg);
      padding: 0;
    }
    
    .nav-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 0;
      transition: var(--transition);
    }
    
    .nav.scrolled .nav-inner {
      padding: 12px 0;
    }
    
    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 800;
      font-size: 1.4rem;
      letter-spacing: -0.5px;
    }
    
    .logo {
      width: 44px;
      height: 44px;
      border-radius: 14px;
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 900;
      font-size: 1.6rem;
      box-shadow: 0 6px 12px rgba(107,177,74,0.25);
      transition: var(--transition);
    }
    
    .nav-links {
      display: flex;
      gap: 32px;
      align-items: center;
    }
    
    .nav-link {
      font-weight: 500;
      font-size: 0.95rem;
      color: var(--text-light);
      position: relative;
      padding: 8px 0;
    }
    
    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0;
      height: 2px;
      background: var(--primary);
      border-radius: 2px;
      transition: width 0.3s ease;
    }
    
    .nav-link:hover {
      color: var(--primary);
    }
    
    .nav-link:hover::after {
      width: 100%;
    }
    
    .nav-link.active {
      color: var(--primary);
      font-weight: 600;
    }
    
    .nav-link.active::after {
      width: 100%;
    }
    
    .nav-actions {
      display: flex;
      gap: 16px;
    }
    
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      padding: 12px 28px;
      border-radius: var(--radius);
      font-weight: 600;
      font-size: 0.95rem;
      cursor: pointer;
      border: 1px solid transparent;
      transition: var(--transition);
      gap: 8px;
      letter-spacing: -0.2px;
      white-space: nowrap;
    }
    
    .btn-outline {
      border: 1px solid var(--border);
      background: transparent;
      color: var(--text);
    }
    
    .btn-outline:hover {
      border-color: var(--primary);
      color: var(--primary);
      box-shadow: var(--shadow-md);
      transform: translateY(-2px);
    }
    
    .btn-primary {
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      color: white;
      border: 1px solid transparent;
      box-shadow: 0 4px 12px rgba(107,177,74,0.25);
    }
    
    .btn-primary:hover {
      box-shadow: 0 8px 20px rgba(107,177,74,0.35);
      transform: translateY(-3px);
    }
    
    .btn-secondary {
      background: linear-gradient(135deg, var(--secondary) 0%, #4338ca 100%);
      color: white;
      border: 1px solid transparent;
      box-shadow: 0 4px 12px rgba(79, 70, 229, 0.25);
    }
    
    .btn-secondary:hover {
      box-shadow: 0 8px 20px rgba(79, 70, 229, 0.35);
      transform: translateY(-3px);
    }
    
    /* Hero Section - Enhanced */
    .hero-section {
      padding: 160px 0 100px;
      background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
      position: relative;
      overflow: hidden;
    }
    
    .hero-section::before {
      content: '';
      position: absolute;
      top: -300px;
      right: -300px;
      width: 800px;
      height: 800px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(107,177,74,0.1) 0%, rgba(107,177,74,0) 70%);
      z-index: 0;
    }
    
    .hero-section::after {
      content: '';
      position: absolute;
      bottom: -200px;
      left: -200px;
      width: 600px;
      height: 600px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(79, 70, 229, 0.05) 0%, rgba(79, 70, 229, 0) 70%);
      z-index: 0;
    }
    
    .hero {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 80px;
      align-items: center;
      position: relative;
      z-index: 1;
    }
    
    .hero-content {
      max-width: 560px;
    }
    
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--primary-light);
      color: var(--primary);
      padding: 8px 16px;
      border-radius: 100px;
      font-size: 0.85rem;
      font-weight: 600;
      margin-bottom: 24px;
      border: 1px solid rgba(107,177,74,0.2);
      box-shadow: 0 2px 4px rgba(107,177,74,0.1);
      animation: fadeInUp 0.8s ease-out 0.2s both;
    }
    
    .hero-badge i {
      font-size: 0.8rem;
    }
    
    .hero-title {
      font-size: 3.5rem;
      line-height: 1.1;
      margin-bottom: 24px;
      letter-spacing: -1px;
      font-weight: 800;
      animation: fadeInUp 0.8s ease-out 0.4s both;
    }
    
    .hero-title span {
      color: var(--primary);
      position: relative;
      display: inline-block;
    }
    
    .hero-title span::after {
      content: '';
      position: absolute;
      bottom: 8px;
      left: 0;
      width: 100%;
      height: 8px;
      background: rgba(107,177,74,0.2);
      z-index: -1;
      border-radius: 4px;
    }
    
    .hero-desc {
      font-size: 1.2rem;
      color: var(--text-light);
      margin-bottom: 40px;
      line-height: 1.7;
      animation: fadeInUp 0.8s ease-out 0.6s both;
    }
    
    .hero-cta {
      display: flex;
      gap: 20px;
      margin-bottom: 32px;
      flex-wrap: wrap;
      animation: fadeInUp 0.8s ease-out 0.8s both;
    }
    
    .hero-features {
      display: flex;
      gap: 24px;
      flex-wrap: wrap;
      margin-top: 40px;
      animation: fadeInUp 0.8s ease-out 1s both;
    }
    
    .hero-feature {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 0.95rem;
      font-weight: 500;
    }
    
    .hero-feature i {
      color: var(--primary);
      font-size: 1.1rem;
      background: var(--primary-light);
      width: 32px;
      height: 32px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .hero-image {
      position: relative;
      animation: float 6s ease-in-out infinite;
    }
    
    .hero-img-container {
      position: relative;
      border-radius: var(--radius-xl);
      overflow: hidden;
      box-shadow: var(--shadow-xl);
      transform: perspective(1200px) rotateY(-12deg) rotateX(5deg);
      transition: var(--transition-slow);
    }
    
    .hero-img-container:hover {
      transform: perspective(1200px) rotateY(0deg) rotateX(0deg);
    }
    
    .hero-img {
      width: 100%;
      height: auto;
      display: block;
      transition: var(--transition);
    }
    
    .floating-card {
      position: absolute;
      background: white;
      border-radius: var(--radius-lg);
      padding: 20px;
      box-shadow: var(--shadow-lg);
      display: flex;
      align-items: center;
      gap: 12px;
      z-index: 2;
      animation: float 4s ease-in-out infinite;
      border: 1px solid var(--border);
    }
    
    .floating-card.invoice {
      top: -20px;
      right: -20px;
      animation-delay: 0.5s;
    }
    
    .floating-card.revenue {
      bottom: 40px;
      left: -30px;
      animation-delay: 1s;
    }
    
    .floating-card .icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      background: var(--primary-light);
      color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.3rem;
    }
    
    .floating-card .text strong {
      display: block;
      font-weight: 700;
      font-size: 1.1rem;
    }
    
    .floating-card .text span {
      font-size: 0.9rem;
      color: var(--text-light);
    }
    
    /* Features Section - Enhanced */
    .features-section {
      padding: 100px 0;
      background: var(--bg-white);
      position: relative;
    }
    
    .section-header {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 80px;
    }
    
    .section-subtitle {
      color: var(--primary);
      font-weight: 700;
      font-size: 0.95rem;
      margin-bottom: 16px;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      position: relative;
      display: inline-block;
    }
    
    .section-subtitle::after {
      content: '';
      position: absolute;
      bottom: -6px;
      left: 50%;
      transform: translateX(-50%);
      width: 40px;
      height: 3px;
      background: var(--primary);
      border-radius: 2px;
    }
    
    .section-title {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 24px;
      line-height: 1.2;
      letter-spacing: -0.8px;
    }
    
    .section-title span {
      color: var(--primary);
    }
    
    .section-desc {
      color: var(--text-light);
      font-size: 1.2rem;
      line-height: 1.7;
    }
    
    .features-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
      gap: 32px;
      margin-top: 40px;
    }
    
    .feature-card {
      background: var(--bg-white);
      border-radius: var(--radius-lg);
      padding: 40px 32px;
      border: 1px solid var(--border);
      transition: var(--transition);
      display: flex;
      flex-direction: column;
      height: 100%;
      position: relative;
      overflow: hidden;
    }
    
    .feature-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
      transform: scaleX(0);
      transform-origin: left;
      transition: transform 0.5s ease;
    }
    
    .feature-card:hover {
      transform: translateY(-10px);
      box-shadow: var(--shadow-xl);
      border-color: transparent;
    }
    
    .feature-card:hover::before {
      transform: scaleX(1);
    }
    
    .feature-icon {
      width: 70px;
      height: 70px;
      border-radius: 20px;
      background: linear-gradient(135deg, var(--primary-light) 0%, rgba(107,177,74,0.05) 100%);
      color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      margin-bottom: 28px;
      transition: var(--transition);
    }
    
    .feature-card:hover .feature-icon {
      transform: scale(1.1) rotate(5deg);
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      color: white;
      box-shadow: 0 10px 20px rgba(107,177,74,0.25);
    }
    
    .feature-title {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 16px;
    }
    
    .feature-desc {
      color: var(--text-light);
      line-height: 1.7;
      margin-bottom: 24px;
      flex-grow: 1;
    }
    
    .feature-link {
      color: var(--primary);
      font-weight: 600;
      font-size: 0.95rem;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: var(--transition);
    }
    
    .feature-link:hover {
      gap: 12px;
    }
    
    /* Stats Section */
    .stats-section {
      padding: 80px 0;
      background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
      color: white;
      position: relative;
      overflow: hidden;
    }
    
    .stats-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml,<svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><rect width="20" height="20" fill="none"/><circle cx="1" cy="1" r="1" fill="rgba(255,255,255,0.1)"/></svg>');
    }
    
    .stats-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 40px;
      text-align: center;
      position: relative;
      z-index: 1;
    }
    
    .stat-item {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    
    .stat-number {
      font-size: 3.5rem;
      font-weight: 800;
      line-height: 1;
      margin-bottom: 12px;
      display: flex;
      align-items: center;
      gap: 4px;
    }
    
    .stat-label {
      font-size: 1.1rem;
      opacity: 0.9;
      font-weight: 500;
    }
    
    /* Testimonials Section */
    .testimonials-section {
      padding: 100px 0;
      background: var(--bg-light);
    }
    
    .testimonial-card {
      background: white;
      border-radius: var(--radius-xl);
      padding: 48px;
      box-shadow: var(--shadow-lg);
      position: relative;
      margin: 20px;
    }
    
    .testimonial-card::before {
      content: '"';
      position: absolute;
      top: 30px;
      left: 40px;
      font-size: 6rem;
      color: var(--primary-light);
      font-family: Georgia, serif;
      line-height: 1;
      opacity: 0.3;
    }
    
    .testimonial-content {
      font-size: 1.2rem;
      line-height: 1.7;
      color: var(--text);
      margin-bottom: 32px;
      position: relative;
      z-index: 1;
    }
    
    .testimonial-author {
      display: flex;
      align-items: center;
      gap: 16px;
    }
    
    .author-avatar {
      width: 56px;
      height: 56px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
      font-size: 1.3rem;
    }
    
    .author-info h4 {
      font-size: 1.1rem;
      font-weight: 700;
      margin-bottom: 4px;
    }
    
    .author-info p {
      color: var(--text-light);
      font-size: 0.95rem;
    }
    
    /* CTA Section - Enhanced */
    .cta-section {
      padding: 100px 0;
      background: linear-gradient(135deg, #f0f9ff 0%, #f9fafb 100%);
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .cta-section::before {
      content: '';
      position: absolute;
      bottom: -100px;
      right: -100px;
      width: 400px;
      height: 400px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(107,177,74,0.1) 0%, rgba(107,177,74,0) 70%);
      z-index: 0;
    }
    
    .cta-card {
      background: var(--bg-white);
      border-radius: var(--radius-xl);
      padding: 80px 60px;
      max-width: 900px;
      margin: 0 auto;
      box-shadow: var(--shadow-xl);
      position: relative;
      z-index: 1;
      overflow: hidden;
      border: 1px solid rgba(229, 231, 235, 0.5);
    }
    
    .cta-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 6px;
      background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 50%, var(--accent) 100%);
    }
    
    .cta-title {
      font-size: 2.8rem;
      font-weight: 800;
      margin-bottom: 24px;
      letter-spacing: -0.8px;
    }
    
    .cta-desc {
      color: var(--text-light);
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto 48px;
      line-height: 1.7;
    }
    
    /* Footer - Enhanced */
    .footer {
      background: linear-gradient(135deg, #111827 0%, #1f2937 100%);
      color: white;
      padding: 80px 0 40px;
      position: relative;
    }
    
    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--primary) 0%, var(--secondary) 100%);
    }
    
    .footer-content {
      display: grid;
      grid-template-columns: 1.5fr repeat(3, 1fr);
      gap: 60px;
      margin-bottom: 60px;
    }
    
    .footer-col h3 {
      font-size: 1.2rem;
      margin-bottom: 28px;
      font-weight: 700;
      letter-spacing: 0.5px;
    }
    
    .footer-brand p {
      color: #d1d5db;
      margin-bottom: 24px;
      line-height: 1.7;
      font-size: 1.05rem;
    }
    
    .social-links {
      display: flex;
      gap: 16px;
    }
    
    .social-link {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.05);
      color: #d1d5db;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      transition: var(--transition);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .social-link:hover {
      background: var(--primary);
      color: white;
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0,0,0,0.2);
    }
    
    .footer-links {
      list-style: none;
    }
    
    .footer-links li {
      margin-bottom: 16px;
    }
    
    .footer-links a {
      color: #d1d5db;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .footer-links a:hover {
      color: white;
      padding-left: 6px;
    }
    
    .footer-links a::before {
      content: '→';
      opacity: 0;
      transition: var(--transition);
    }
    
    .footer-links a:hover::before {
      opacity: 1;
    }
    
    .copyright {
      text-align: center;
      padding-top: 40px;
      border-top: 1px solid rgba(255,255,255,0.1);
      color: #9ca3af;
      font-size: 0.95rem;
    }
    
    /* Animations */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes float {
      0%, 100% {
        transform: translateY(0);
      }
      50% {
        transform: translateY(-15px);
      }
    }
    
    /* Responsive */
    @media (max-width: 1200px) {
      .hero-title {
        font-size: 3rem;
      }
      
      .section-title {
        font-size: 2.5rem;
      }
    }
    
    @media (max-width: 992px) {
      .hero {
        grid-template-columns: 1fr;
        gap: 60px;
      }
      
      .hero-content {
        max-width: 100%;
        text-align: center;
      }
      
      .hero-cta {
        justify-content: center;
      }
      
      .hero-features {
        justify-content: center;
      }
      
      .hero-img-container {
        transform: none;
        max-width: 600px;
        margin: 0 auto;
      }
      
      .hero-img-container:hover {
        transform: scale(1.02);
      }
      
      .footer-content {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .hero-section {
        padding: 140px 0 80px;
      }
      
      .hero-title {
        font-size: 2.5rem;
      }
      
      .features-grid {
        grid-template-columns: 1fr;
      }
      
      .feature-card {
        padding: 32px 24px;
      }
      
      .cta-card {
        padding: 60px 30px;
      }
      
      .cta-title {
        font-size: 2.2rem;
      }
      
      .testimonial-card {
        padding: 32px 24px;
      }
      
      .stats-container {
        grid-template-columns: repeat(2, 1fr);
      }
      
      .footer-content {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      
      .section-title {
        font-size: 2rem;
      }
      
      .section-desc, .cta-desc {
        font-size: 1.1rem;
      }
    }
    
    @media (max-width: 576px) {
      .hero-cta {
        flex-direction: column;
        width: 100%;
      }
      
      .hero-cta .btn {
        width: 100%;
        justify-content: center;
      }
      
      .hero-title {
        font-size: 2.2rem;
      }
      
      .nav-actions {
        width: 100%;
        max-width: 200px;
      }
      
      .btn {
        width: 100%;
        padding: 14px 20px;
      }
      
      .stats-container {
        grid-template-columns: 1fr;
      }
      
      .floating-card {
        position: relative;
        top: auto;
        right: auto;
        bottom: auto;
        left: auto;
        margin-bottom: 20px;
        width: 100%;
        justify-content: center;
      }
      
      .floating-card.invoice, .floating-card.revenue {
        animation: none;
        position: relative;
        margin: 0 auto 20px;
      }
      
      .hero-image {
        animation: none;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="nav" id="navbar">
    <div class="container">
      <div class="nav-inner">
        <a class="brand" href="/">
          <div class="logo">A</div>
          <div>Akaunting</div>
        </a>
        
        <div class="nav-links">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="{{ route('features') }}">Features</a>
          <a class="nav-link" href="{{ route('pricing') }}">Pricing</a>
          <a class="nav-link" href="{{ route('about') }}">About</a>
          <a class="nav-link" href="{{ route('blog') }}">Blog</a>
        </div>
        
        <div class="nav-actions">
          <a class="btn btn-outline" href="/auth/login">Login</a>
          <a class="btn btn-primary" href="{{ route('register') }}">Get Started Free</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <div class="hero">
        <div class="hero-content">
          <div class="hero-badge">
            <i class="fas fa-star"></i>
            <span>Trusted by 100,000+ small businesses</span>
          </div>
          
          <h1 class="hero-title">
            Accounting Made <span>Simple</span> for Small Businesses
          </h1>
          
          <p class="hero-desc">
            Create invoices, track expenses, manage customers, and get financial reports — all in one place. 
            Akaunting helps you focus on your business while we handle the numbers.
          </p>
          
          <div class="hero-cta">
            <a class="btn btn-primary" href="/auth/register">
              <i class="fas fa-rocket"></i> Start Free Trial
            </a>
            <a class="btn btn-secondary" href="/demo">
              <i class="fas fa-play-circle"></i> Watch Demo
            </a>
          </div>
          
          <div class="hero-features">
            <div class="hero-feature">
              <i class="fas fa-check-circle"></i>
              <span>No credit card required</span>
            </div>
            <div class="hero-feature">
              <i class="fas fa-bolt"></i>
              <span>Setup in 5 minutes</span>
            </div>
            <div class="hero-feature">
              <i class="fas fa-shield-alt"></i>
              <span>Secure & compliant</span>
            </div>
          </div>
        </div>
        
        <div class="hero-image">
          <div class="hero-img-container">
            <img class="hero-img" src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Akaunting Dashboard">
          </div>
          
          <div class="floating-card invoice">
            <div class="icon">
              <i class="fas fa-file-invoice-dollar"></i>
            </div>
            <div class="text">
              <strong>$12,540</strong>
              <span>Invoices Sent</span>
            </div>
          </div>
          
          <div class="floating-card revenue">
            <div class="icon">
              <i class="fas fa-chart-line"></i>
            </div>
            <div class="text">
              <strong>+24% Revenue</strong>
              <span>This Quarter</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section class="stats-section">
    <div class="container">
      <div class="stats-container">
        <div class="stat-item">
          <div class="stat-number">100,000+</div>
          <div class="stat-label">Happy Businesses</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">$2.5<span style="font-size: 2rem;">B+</span></div>
          <div class="stat-label">Processed Annually</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">4.8<span style="font-size: 1.5rem;">/5</span></div>
          <div class="stat-label">Customer Rating</div>
        </div>
        <div class="stat-item">
          <div class="stat-number">98<span style="font-size: 2rem;">%</span></div>
          <div class="stat-label">Customer Satisfaction</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="features-section">
    <div class="container">
      <div class="section-header">
        <div class="section-subtitle">Powerful Features</div>
        <h2 class="section-title">Everything You Need to <span>Manage Your Finances</span></h2>
        <p class="section-desc">From invoicing to reporting, Akaunting provides all the tools to keep your business finances organized and under control.</p>
      </div>
      
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-file-invoice-dollar"></i>
          </div>
          <h3 class="feature-title">Smart Invoicing</h3>
          <p class="feature-desc">Create professional invoices in seconds, send them automatically, and get paid faster with online payment options.</p>
          <a href="/features/invoicing" class="feature-link">
            Learn more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-chart-line"></i>
          </div>
          <h3 class="feature-title">Expense Tracking</h3>
          <p class="feature-desc">Easily record and categorize expenses, upload receipts, and track spending across multiple projects or clients.</p>
          <a href="/features/expenses" class="feature-link">
            Learn more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-chart-pie"></i>
          </div>
          <h3 class="feature-title">Financial Reports</h3>
          <p class="feature-desc">Get real-time insights into your business performance with profit & loss, cash flow, and balance sheet reports.</p>
          <a href="/features/reports" class="feature-link">
            Learn more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-users"></i>
          </div>
          <h3 class="feature-title">Customer Management</h3>
          <p class="feature-desc">Keep track of customer details, payment history, and communication all in one organized customer database.</p>
          <a href="/features/customers" class="feature-link">
            Learn more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-mobile-alt"></i>
          </div>
          <h3 class="feature-title">Mobile App</h3>
          <p class="feature-desc">Manage your finances on the go with our iOS and Android apps. Create invoices and track expenses from anywhere.</p>
          <a href="/features/mobile" class="feature-link">
            Learn more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
        
        <div class="feature-card">
          <div class="feature-icon">
            <i class="fas fa-plug"></i>
          </div>
          <h3 class="feature-title">Integrations</h3>
          <p class="feature-desc">Connect Akaunting with your favorite tools like Stripe, PayPal, Shopify, and more to streamline your workflow.</p>
          <a href="/features/integrations" class="feature-link">
            Learn more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonials-section">
    <div class="container">
      <div class="section-header">
        <div class="section-subtitle">Testimonials</div>
        <h2 class="section-title">Trusted by <span>Business Owners</span></h2>
        <p class="section-desc">See what our customers have to say about using Akaunting for their business.</p>
      </div>
      
      <div class="testimonial-card">
        <div class="testimonial-content">
          "Akaunting has completely transformed how we manage our finances. What used to take hours now takes minutes. The invoicing system alone has helped us get paid 30% faster."
        </div>
        <div class="testimonial-author">
          <div class="author-avatar">SJ</div>
          <div class="author-info">
            <h4>Sarah Johnson</h4>
            <p>Owner, Bloom Boutique</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="cta-section">
    <div class="container">
      <div class="cta-card">
        <h2 class="cta-title">Ready to Simplify Your Accounting?</h2>
        <p class="cta-desc">Join thousands of small businesses that trust Akaunting to manage their finances. Start your free trial today — no credit card required.</p>
        
        <div class="hero-cta" style="justify-content: center; margin-top: 40px;">
          <a class="btn btn-primary" href="/auth/register" style="padding: 16px 40px; font-size: 1.1rem;">
            <i class="fas fa-rocket"></i> Get Started Free
          </a>
          <a class="btn btn-outline" href="/contact" style="padding: 16px 40px; font-size: 1.1rem;">
            <i class="fas fa-question-circle"></i> Contact Sales
          </a>
        </div>
        
        <div class="hero-features" style="justify-content: center; margin-top: 40px;">
          <div class="hero-feature">
            <i class="fas fa-check-circle"></i>
            <span>Free 14-day trial</span>
          </div>
          <div class="hero-feature">
            <i class="fas fa-user-check"></i>
            <span>No setup fees</span>
          </div>
          <div class="hero-feature">
            <i class="fas fa-headset"></i>
            <span>Support included</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-col footer-brand">
          <a class="brand" href="/" style="color: white; margin-bottom: 24px;">
            <div class="logo">A</div>
            <div>Akaunting</div>
          </a>
          <p>Free accounting software for small businesses. Simple, powerful, and open-source.</p>
          <div class="social-links">
            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
            <a href="#" class="social-link"><i class="fab fa-github"></i></a>
          </div>
        </div>
        
        <div class="footer-col">
          <h3>Product</h3>
          <ul class="footer-links">
            <li><a href="/features">Features</a></li>
            <li><a href="/pricing">Pricing</a></li>
            <li><a href="/mobile">Mobile App</a></li>
            <li><a href="/integrations">Integrations</a></li>
            <li><a href="/updates">Updates</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h3>Resources</h3>
          <ul class="footer-links">
            <li><a href="/blog">Blog</a></li>
            <li><a href="/help">Help Center</a></li>
            <li><a href="/community">Community</a></li>
            <li><a href="/developers">Developers</a></li>
            <li><a href="/api">API</a></li>
          </ul>
        </div>
        
        <div class="footer-col">
          <h3>Company</h3>
          <ul class="footer-links">
            <li><a href="/about">About Us</a></li>
            <li><a href="/careers">Careers</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/partners">Partners</a></li>
            <li><a href="/legal">Legal</a></li>
          </ul>
        </div>
      </div>
      
      <div class="copyright">
        <p>&copy; 2023 Akaunting. All rights reserved. Made with Laravel and ❤️</p>
      </div>
    </div>
  </footer>

  <script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
      const navbar = document.getElementById('navbar');
      if (window.scrollY > 20) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
    
    // Animation on scroll
    document.addEventListener('DOMContentLoaded', function() {
      // Add animation classes to elements when they come into view
      const animateOnScroll = function() {
        const elements = document.querySelectorAll('.feature-card, .section-header, .stat-item, .testimonial-card');
        
        elements.forEach(element => {
          const elementPosition = element.getBoundingClientRect().top;
          const screenPosition = window.innerHeight / 1.2;
          
          if (elementPosition < screenPosition) {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
          }
        });
      };
      
      // Set initial state for animated elements
      const featureCards = document.querySelectorAll('.feature-card');
      const statItems = document.querySelectorAll('.stat-item');
      const testimonialCard = document.querySelector('.testimonial-card');
      
      featureCards.forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      });
      
      statItems.forEach(item => {
        item.style.opacity = '0';
        item.style.transform = 'translateY(30px)';
        item.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      });
      
      if (testimonialCard) {
        testimonialCard.style.opacity = '0';
        testimonialCard.style.transform = 'translateY(30px)';
        testimonialCard.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
      }
      
      // Run on load and scroll
      animateOnScroll();
      window.addEventListener('scroll', animateOnScroll);
      
      // Floating cards animation
      const floatingCards = document.querySelectorAll('.floating-card');
      floatingCards.forEach(card => {
        card.style.animationDelay = Math.random() * 2 + 's';
      });
      
      // Counter animation for stats
      const statNumbers = document.querySelectorAll('.stat-number');
      statNumbers.forEach(stat => {
        const target = parseInt(stat.textContent.replace(/[^0-9]/g, ''));
        const suffix = stat.textContent.replace(/[0-9]/g, '');
        
        if (target > 1000) {
          let current = 0;
          const increment = target / 100;
          const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
              current = target;
              clearInterval(timer);
            }
            stat.textContent = Math.floor(current).toLocaleString() + suffix;
          }, 20);
        }
      });
    });
  </script>
</body>
</html>