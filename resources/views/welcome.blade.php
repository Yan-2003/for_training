<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#111827">
        <title>Welcome to {{ config('app.name', 'Laravel') }}</title>
        <style>
            :root {
                color-scheme: dark;
                font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
                font-synthesis: none;
                text-rendering: optimizeLegibility;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                background: #111827;
                color: #f9fafb;
            }

            * {
                box-sizing: border-box;
            }

            body {
                min-width: 320px;
                min-height: 100vh;
                margin: 0;
                background:
                    radial-gradient(ellipse at 50% 0, rgb(239 68 68 / 15%), transparent 55%),
                    #111827;
            }

            a {
                color: inherit;
                text-decoration: none;
            }

            .page {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                width: min(100% - 3rem, 1080px);
                margin-inline: auto;
            }

            header,
            footer {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1.5rem;
                padding-block: 1.75rem;
            }

            .brand {
                display: inline-flex;
                align-items: center;
                gap: 0.75rem;
                font-size: 1.1rem;
                font-weight: 700;
                letter-spacing: -0.03em;
            }

            .brand-mark {
                display: grid;
                width: 2.25rem;
                height: 2.25rem;
                place-items: center;
                border-radius: 0.75rem;
                background: #ef4444;
                box-shadow: 0 8px 24px rgb(239 68 68 / 25%);
                color: white;
                font-size: 1.2rem;
            }

            nav {
                display: flex;
                flex-wrap: wrap;
                gap: 1.5rem;
                color: #cbd5e1;
                font-size: 0.9rem;
            }

            nav a:hover,
            footer a:hover {
                color: white;
            }

            main {
                display: grid;
                flex: 1;
                align-content: center;
                justify-items: center;
                padding-block: 5rem;
                text-align: center;
            }

            .eyebrow {
                margin: 0 0 1.25rem;
                color: #fca5a5;
                font-size: 0.8rem;
                font-weight: 700;
                letter-spacing: 0.16em;
                text-transform: uppercase;
            }

            h1 {
                max-width: 800px;
                margin: 0;
                font-size: clamp(2.75rem, 8vw, 5.5rem);
                letter-spacing: -0.07em;
                line-height: 1;
            }

            h1 span {
                color: #f87171;
            }

            .intro {
                max-width: 590px;
                margin: 1.5rem 0 0;
                color: #cbd5e1;
                font-size: clamp(1rem, 2vw, 1.15rem);
                line-height: 1.8;
            }

            .actions {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.875rem;
                margin-top: 2rem;
            }

            .button {
                display: inline-flex;
                min-height: 3rem;
                align-items: center;
                justify-content: center;
                border: 1px solid #475569;
                border-radius: 0.75rem;
                padding: 0.75rem 1.25rem;
                font-size: 0.9rem;
                font-weight: 650;
                transition: background-color 150ms ease, border-color 150ms ease, transform 150ms ease;
            }

            .button:hover {
                transform: translateY(-2px);
                border-color: #94a3b8;
            }

            .button-primary {
                border-color: #ef4444;
                background: #ef4444;
                color: white;
            }

            .button-primary:hover {
                border-color: #dc2626;
                background: #dc2626;
            }

            .details {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 0.75rem;
                margin-top: 4rem;
            }

            .detail {
                min-width: 150px;
                border: 1px solid rgb(148 163 184 / 18%);
                border-radius: 0.875rem;
                padding: 1rem 1.25rem;
                background: rgb(15 23 42 / 65%);
                text-align: left;
            }

            .detail-label {
                display: block;
                margin-bottom: 0.4rem;
                color: #94a3b8;
                font-size: 0.75rem;
            }

            .detail-value {
                font-size: 0.9rem;
                font-weight: 650;
            }

            footer {
                color: #94a3b8;
                font-size: 0.8rem;
            }

            @media (max-width: 560px) {
                .page {
                    width: min(100% - 2rem, 1080px);
                }

                header {
                    align-items: flex-start;
                    flex-direction: column;
                    gap: 1rem;
                }

                nav {
                    gap: 1rem;
                }

                main {
                    padding-block: 3.5rem;
                }

                .details {
                    margin-top: 3rem;
                }

                .detail {
                    min-width: 135px;
                }

                footer {
                    align-items: flex-start;
                    flex-direction: column;
                    gap: 0.5rem;
                }
            }
        </style>
    </head>
    <body>
        <div class="page">
            <header>
                <a class="brand" href="{{ url('/') }}" aria-label="{{ config('app.name', 'Laravel') }} home">
                    <span class="brand-mark" aria-hidden="true">L</span>
                    <span>{{ config('app.name', 'Laravel') }}</span>
                </a>
                <nav aria-label="Helpful links">
                    <a href="https://laravel.com/docs" target="_blank" rel="noopener noreferrer">Documentation</a>
                    <a href="https://laracasts.com" target="_blank" rel="noopener noreferrer">Laracasts</a>
                    <a href="https://github.com/laravel/laravel" target="_blank" rel="noopener noreferrer">GitHub</a>
                </nav>
            </header>

            <main>
                <p class="eyebrow">Your Laravel application is ready</p>
                <h1>Build something <span>great.</span></h1>
                <p class="intro">
                    A fresh start, powered by Laravel. Explore the documentation,
                    learn at your own pace, and bring your next idea to life.
                </p>
                <div class="actions">
                    <a class="button button-primary" href="https://laravel.com/docs" target="_blank" rel="noopener noreferrer">
                        Read the documentation
                    </a>
                    <a class="button" href="https://cloud.laravel.com" target="_blank" rel="noopener noreferrer">
                        Deploy your app
                    </a>
                </div>
                <div class="details" aria-label="Application environment">
                    <div class="detail">
                        <span class="detail-label">Framework</span>
                        <span class="detail-value">Laravel {{ Illuminate\Foundation\Application::VERSION }}</span>
                    </div>
                    <div class="detail">
                        <span class="detail-label">PHP</span>
                        <span class="detail-value">{{ PHP_VERSION }}</span>
                    </div>
                    <div class="detail">
                        <span class="detail-label">Environment</span>
                        <span class="detail-value">{{ app()->environment() }}</span>
                    </div>
                </div>
            </main>

            <footer>
                <span>Made with Laravel</span>
                <a href="https://laravel.com" target="_blank" rel="noopener noreferrer">laravel.com</a>
            </footer>
        </div>
    </body>
</html>
