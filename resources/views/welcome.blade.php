<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>IncubeSolutions</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle at top, #1a0033, #000);
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            min-height: 100vh;
        }

        /* Neon text */
        .neon-text {
            color: #00fff7;
            text-shadow: 0 0 5px #00fff7, 0 0 15px #00fff7;
        }

        /* Glass card */
        .glass {
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(15px);
            border-radius: 16px;
            box-shadow: 0 0 25px rgba(0, 255, 247, 0.25);
        }

        /* Buttons */
        .btn-cyber {
            background: linear-gradient(90deg, #ff00ff, #00fff7);
            color: #000;
            font-weight: bold;
            border: none;
            box-shadow: 0 0 15px #00fff7;
        }

        .btn-cyber:hover {
            box-shadow: 0 0 30px #ff00ff;
            transform: scale(1.05);
        }

        /* Inputs */
        .form-control {
            background: rgba(0,0,0,0.6);
            border: 1px solid #00fff7;
            color: #fff;
        }

        .form-control:focus {
            background: rgba(0,0,0,0.8);
            color: #fff;
            box-shadow: 0 0 10px #00fff7;
        }

        /* Section spacing */
        .section {
            padding: 80px 0;
        }

        /* Neon pulse animation */
@keyframes neonPulse {
    0% {
        text-shadow: 0 0 5px #00fff7, 0 0 15px #00fff7;
    }
    50% {
        text-shadow: 0 0 20px #ff00ff, 0 0 40px #ff00ff;
    }
    100% {
        text-shadow: 0 0 5px #00fff7, 0 0 15px #00fff7;
    }
}

.animate-neon {
    animation: neonPulse 2.5s infinite;
}

/* Hover glow card */
.glass:hover {
    box-shadow: 0 0 40px rgba(255, 0, 255, 0.4);
    transform: translateY(-5px);
    transition: 0.3s ease;
}

/* Glitch text */
.glitch {
    position: relative;
    color: #00fff7;
}

.glitch::before,
.glitch::after {
    content: attr(data-text);
    position: absolute;
    left: 0;
    width: 100%;
    overflow: hidden;
}

.glitch::before {
    color: #ff00ff;
    clip-path: inset(0 0 50% 0);
    animation: glitchTop 2s infinite linear alternate-reverse;
}

.glitch::after {
    color: #00fff7;
    clip-path: inset(50% 0 0 0);
    animation: glitchBottom 1.5s infinite linear alternate-reverse;
}

@keyframes glitchTop {
    0% { transform: translate(0); }
    20% { transform: translate(-2px, -2px); }
    40% { transform: translate(-2px, 2px); }
    60% { transform: translate(2px, -1px); }
    80% { transform: translate(1px, 2px); }
    100% { transform: translate(0); }
}

@keyframes glitchBottom {
    0% { transform: translate(0); }
    20% { transform: translate(2px, 2px); }
    40% { transform: translate(2px, -2px); }
    60% { transform: translate(-2px, 1px); }
    80% { transform: translate(-1px, -2px); }
    100% { transform: translate(0); }
}

html {
    scroll-behavior: smooth;
}

    </style>
</head>
<body>

<h1 class="neon-text">IncubeSolutions</h1>

<div class="glass p-4 mt-4">
    Cyberpunk Glass Card
</div>

<button class="btn btn-cyber mt-3">Send Message</button>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">IncubeSolutions</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section id="home" class="section text-center">
    <div class="container">
        <h1 class="display-3 fw-bold neon-text animate-neon glitch mb-3"
          data-text="IncubeSolutions">
            IncubeSolutions
        </h1>
        <p class="lead mb-4">
            Future-ready software solutions with cyberpunk vibes ⚡
        </p>
        <a href="#contact" class="btn btn-cyber btn-lg px-5">
            Contact Us
        </a>
    </div>
</section>

<!-- ABOUT -->
<section id="about" class="section">
    <div class="container">
        <div class="glass p-5 text-center">
            <h2 class="neon-text mb-3">
              {{ $about->title ?? 'About Us' }}
            </h2>
            <p>
               {{ $about->content ?? 'Konten belum tersedia' }}
            </p>
        </div>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-5 bg-light">
  <div class="container">
    <h2 class="fw-bold mb-4">Layanan Kami</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">Web Development</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">Mobile Application</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">UI / UX Design</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 text-center">
          <div class="card-body">IT Consulting</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section">
    <div class="container">
        <div class="glass p-5">
            <h2 class="neon-text text-center mb-4">Contact Us</h2>

            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.store') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="mb-3">
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>

                <div class="mb-3">
                    <textarea name="message" rows="4" class="form-control" placeholder="Message" required></textarea>
                </div>

                <div class="text-center">
                    <button class="btn btn-cyber px-5">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="text-center text-muted py-4">
  © 2026 IncubeSolutions <br>
  <span class="neon-text glitch" data-text="Developed by Tamam Setiaji">
  Developed by Tamam Setiaji
</span>
</footer>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
