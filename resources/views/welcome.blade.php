<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laraken</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=jetbrains-mono:400,500,600,700&display=swap" rel="stylesheet" />
    <link href="https://fonts.bunny.net/css?family=space-grotesk:400,500,600,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/css/welcome.css">
</head>
<body>
<!-- Background orbs -->
<div class="orb orb-1"></div>
<div class="orb orb-2"></div>

<div class="container">
    <!-- Header -->
    <header class="header">
        <div class="badge">Ready to ship</div>
        <h1 class="logo">Laraken</h1>
        <p class="tagline">
            A production-ready Laravel starter powered by FrankenPHP and Docker.
            Zero config, maximum performance.
        </p>

        <!-- Tech stack pills -->
        <div class="tech-stack">
            <div class="tech-item tech-item--laravel">
                <svg class="tech-icon" viewBox="0 0 50 52" fill="none">
                    <path d="M49.626 11.564a.809.809 0 01.028.209v10.972a.8.8 0 01-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 01-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 010 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 01.8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 01.028.209v20.559l8.008-4.611V11.98c0-.072.01-.142.029-.21.006-.023.02-.044.028-.067a.747.747 0 01.051-.124c.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 01.8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.04.037.082.052.124.009.023.022.044.028.068zm-1.574 10.718V13.124l-3.363 1.936-4.646 2.675v9.159l8.01-4.612zm-9.61 16.505v-9.166l-4.572 2.614-12.848 7.34v9.244l17.42-10.032zM1.602 7.719v31.068L19.022 48.82v-9.244l-9.205-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-21.483L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.159l4.645 2.674 3.364 1.937v-9.16zM20.02 38.33l11.743-6.704 5.668-3.24-8.007-4.606-9.21 5.303-8.203 4.722 8.009 4.524z" fill="#FF2D20"/>
                </svg>
                Laravel
            </div>
            <div class="tech-item tech-item--franken">
                <img class="tech-icon" src="/images/frankenphp.svg" alt="FrankenPHP">
                FrankenPHP
            </div>
            <div class="tech-item tech-item--docker">
                <svg class="tech-icon" viewBox="0 0 24 24" fill="none">
                    <path d="M13.983 11.078h2.119a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.119a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185m-2.954-5.43h2.118a.186.186 0 00.186-.186V3.574a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.186m0 2.716h2.118a.187.187 0 00.186-.186V6.29a.186.186 0 00-.186-.185h-2.118a.185.185 0 00-.185.185v1.887c0 .102.082.185.185.186m-2.93 0h2.12a.186.186 0 00.184-.186V6.29a.185.185 0 00-.185-.185H8.1a.185.185 0 00-.185.185v1.887c0 .102.083.185.185.186m-2.964 0h2.119a.186.186 0 00.185-.186V6.29a.185.185 0 00-.185-.185H5.136a.186.186 0 00-.186.185v1.887c0 .102.084.185.186.186m5.893 2.715h2.118a.186.186 0 00.186-.185V9.006a.186.186 0 00-.186-.186h-2.118a.185.185 0 00-.185.185v1.888c0 .102.082.185.185.185m-2.93 0h2.12a.185.185 0 00.184-.185V9.006a.185.185 0 00-.184-.186h-2.12a.185.185 0 00-.184.185v1.888c0 .102.083.185.185.185m-2.964 0h2.119a.185.185 0 00.185-.185V9.006a.185.185 0 00-.185-.186h-2.119a.185.185 0 00-.185.185v1.888c0 .102.083.185.185.185m-2.92 0h2.12a.185.185 0 00.184-.185V9.006a.185.185 0 00-.184-.186h-2.12a.186.186 0 00-.185.185v1.888c0 .102.084.185.185.185M23.763 9.89c-.065-.051-.672-.51-1.954-.51-.338.001-.676.03-1.01.087-.248-1.7-1.653-2.53-1.716-2.566l-.344-.199-.226.327c-.284.438-.49.922-.612 1.43-.23.97-.09 1.882.403 2.661-.595.332-1.55.413-1.744.42H.751a.751.751 0 00-.75.748 11.376 11.376 0 00.692 4.062c.545 1.428 1.355 2.48 2.41 3.124 1.18.723 3.1 1.137 5.275 1.137.983.003 1.963-.086 2.93-.266a12.248 12.248 0 003.823-1.389c.98-.567 1.86-1.288 2.61-2.136 1.252-1.418 1.998-2.997 2.553-4.4h.221c1.372 0 2.215-.549 2.68-1.009.309-.293.55-.65.707-1.046l.098-.288z" fill="#2496ED"/>
                </svg>
                Docker
            </div>
        </div>
    </header>

    <!-- Features -->
    <section class="features">
        <article class="feature">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                </svg>
            </div>
            <h3>Blazing Fast</h3>
            <p>FrankenPHP with Laravel Octane keeps your workers alive. No more cold starts, just instant responses.</p>
        </article>

        <article class="feature">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <line x1="3" y1="9" x2="21" y2="9"></line>
                    <line x1="9" y1="21" x2="9" y2="9"></line>
                </svg>
            </div>
            <h3>Dev/Prod Parity</h3>
            <p>Same Docker setup from local to production. No more "works on my machine" surprises.</p>
        </article>

        <article class="feature">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                    <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                    <line x1="12" y1="22.08" x2="12" y2="12"></line>
                </svg>
            </div>
            <h3>Batteries Included</h3>
            <p>FrankenPHP, Mariadb and more to come. Everything you need, pre-configured and ready to go.</p>
        </article>

        <article class="feature">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
            </div>
            <h3>Secure by Default</h3>
            <p>Non-root containers, proper permissions, and security best practices baked in from day one.</p>
        </article>

        <article class="feature">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="16 18 22 12 16 6"></polyline>
                    <polyline points="8 6 2 12 8 18"></polyline>
                </svg>
            </div>
            <h3>Hot Reload</h3>
            <p>Vite integration with instant HMR. See your changes reflected immediately as you code.</p>
        </article>

        <article class="feature">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg>
            </div>
            <h3>Zero Config</h3>
            <p>Clone, docker compose up, done. Start building features instead of fighting configuration.</p>
        </article>
    </section>

    <!-- Quickstart -->
    <section class="quickstart">
        <div class="quickstart-header">
            <h2>Get started in 30 seconds</h2>
            <div class="quickstart-dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="code-block">
            <code>
                <span class="comment"># Clone the template</span><br>
                <span class="command">git clone</span> https://github.com/AxelReviron/Laraken.git<br><br>

                <span class="comment"># Navigate to the directory</span><br>
                <span class="command">cd</span> laraken<br><br>

                <span class="comment"># Copy the environment file and adjust as needed:</span><br>
                <span class="comment"># You don't need to specify `APP_KEY`, it will automatically be generated</span><br>

                <span class="command">cp</span> .env.example .env<br><br>

                <span class="comment"># Start everything</span><br>
                <span class="command">docker </span>compose <span class="flag">-f</span> compose.dev.yaml <span class="flag">-d</span><br><br>
                <span class="comment"># You're live at http://localhost:8000 🚀</span>
            </code>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>Built with 💻 by <a href="https://axel-reviron.fr" target="_blank">Axel</a> · Open source on <a href="https://github.com/AxelReviron/Laraken" target="_blank">GitHub</a></p>
    </footer>
</div>
</body>
</html>
