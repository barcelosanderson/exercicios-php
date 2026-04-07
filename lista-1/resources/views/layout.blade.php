<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Exercícios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
      :root {
        --bg-deep: #0d1117;
        --bg-mid: #161b22;
        --accent: #58a6ff;
        --accent-soft: rgba(88, 166, 255, 0.12);
        --text-main: #e6edf3;
        --text-muted: #8b949e;
        --glass-bg: rgba(22, 27, 34, 0.72);
        --glass-border: rgba(88, 166, 255, 0.18);
        --radius: 16px;
      }

      * { box-sizing: border-box; }

      body {
        font-family: 'DM Sans', sans-serif;
        background-color: var(--bg-deep);
        color: var(--text-main);
        min-height: 100vh;
        background-image:
          radial-gradient(ellipse 80% 60% at 20% 0%, rgba(88,166,255,0.10) 0%, transparent 60%),
          radial-gradient(ellipse 60% 50% at 80% 100%, rgba(88,166,255,0.07) 0%, transparent 55%);
      }

      /* ── Navbar ─────────────────────────────────── */
      .navbar-custom {
        background: rgba(13, 17, 23, 0.85);
        backdrop-filter: blur(14px);
        border-bottom: 1px solid var(--glass-border);
        padding: 0.75rem 1.5rem;
        position: sticky;
        top: 0;
        z-index: 100;
      }

      .navbar-brand-custom {
        font-family: 'Playfair Display', serif;
        font-size: 1.15rem;
        color: var(--text-main) !important;
        letter-spacing: 0.02em;
        text-decoration: none;
      }

      .navbar-brand-custom span {
        color: var(--accent);
      }

      .nav-link-custom {
        color: var(--text-muted) !important;
        font-size: 0.88rem;
        font-weight: 500;
        letter-spacing: 0.03em;
        padding: 0.45rem 0.9rem !important;
        border-radius: 8px;
        transition: color 0.2s, background 0.2s;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
      }

      .nav-link-custom:hover, .nav-link-custom.active {
        color: var(--accent) !important;
        background: var(--accent-soft);
      }

      .dropdown-menu-custom {
        background: var(--bg-mid);
        border: 1px solid var(--glass-border);
        border-radius: 10px;
        padding: 0.4rem;
        min-width: 140px;
        box-shadow: 0 12px 40px rgba(0,0,0,0.5);
      }

      .dropdown-item-custom {
        color: var(--text-muted);
        font-size: 0.85rem;
        padding: 0.45rem 0.8rem;
        border-radius: 6px;
        text-decoration: none;
        display: block;
        transition: all 0.15s;
      }

      .dropdown-item-custom:hover {
        color: var(--accent);
        background: var(--accent-soft);
      }

      /* ── Main card ───────────────────────────────── */
      .main-container {
        max-width: 760px;
        margin: 3rem auto;
        padding: 0 1.5rem 3rem;
      }

      .exercise-card {
        background: var(--glass-bg);
        border: 1px solid var(--glass-border);
        border-radius: var(--radius);
        padding: 2.2rem 2.4rem;
        backdrop-filter: blur(18px);
        box-shadow: 0 8px 40px rgba(0,0,0,0.35);
      }

      .exercise-title {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        color: var(--text-main);
        margin-bottom: 1.5rem;
        padding-bottom: 0.9rem;
        border-bottom: 1px solid var(--glass-border);
      }

      /* ── Form elements ───────────────────────────── */
      .form-label {
        font-size: 0.82rem;
        font-weight: 500;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: var(--text-muted);
        margin-bottom: 0.4rem;
      }

      .form-control {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(255,255,255,0.1);
        border-radius: 8px;
        color: var(--text-main);
        padding: 0.6rem 0.9rem;
        font-size: 0.95rem;
        transition: border-color 0.2s, box-shadow 0.2s;
      }

      .form-control:focus {
        background: rgba(88,166,255,0.06);
        border-color: var(--accent);
        color: var(--text-main);
        box-shadow: 0 0 0 3px rgba(88,166,255,0.18);
        outline: none;
      }

      .form-control::placeholder { color: #4a5568; }

      .btn-primary {
        background: var(--accent);
        border: none;
        border-radius: 8px;
        padding: 0.6rem 1.6rem;
        font-size: 0.9rem;
        font-weight: 500;
        letter-spacing: 0.04em;
        color: #0d1117;
        transition: opacity 0.2s, transform 0.15s;
      }

      .btn-primary:hover {
        opacity: 0.88;
        transform: translateY(-1px);
        background: var(--accent);
        color: #0d1117;
      }

      /* ── Result box ──────────────────────────────── */
      .result-box {
        margin-top: 1.6rem;
        padding: 1rem 1.4rem;
        background: var(--accent-soft);
        border: 1px solid rgba(88,166,255,0.3);
        border-radius: 10px;
        color: var(--accent);
        font-size: 1rem;
        font-weight: 500;
      }

      /* ── Footer ──────────────────────────────────── */
      footer {
        text-align: center;
        padding: 1.5rem;
        color: var(--text-muted);
        font-size: 0.8rem;
        border-top: 1px solid var(--glass-border);
        letter-spacing: 0.04em;
      }

      /* ── Alert for errors ────────────────────────── */
      .alert-custom {
        background: rgba(248,81,73,0.12);
        border: 1px solid rgba(248,81,73,0.3);
        border-radius: 10px;
        color: #f85149;
        padding: 0.9rem 1.2rem;
        margin-top: 1.2rem;
        font-size: 0.9rem;
      }
    </style>
  </head>
  <body>
    @include('cabecalho')
    <div class="main-container">
      <div class="exercise-card">
        @yield('conteudo')
      </div>
    </div>
    @include('rodape')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>