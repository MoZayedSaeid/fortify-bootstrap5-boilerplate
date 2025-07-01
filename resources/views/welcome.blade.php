@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container">
    {{-- Hero Section --}}
    <div class="px-4 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold">A Modern Application Platform</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                @guest
                    <a href="{{ route('register') }}" type="button" class="btn btn-primary btn-lg px-4 gap-3">Get Started</a>
                    <a href="{{ route('login') }}" type="button" class="btn btn-outline-secondary btn-lg px-4">Login</a>
                @else
                    <a href="{{ route('dashboard') }}" type="button" class="btn btn-primary btn-lg px-4 gap-3">Go to Dashboard</a>
                @endguest
            </div>
        </div>
    </div>

    {{-- Features Section --}}
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3 p-2">
                {{-- Bootstrap Icons can be used here, or simple text/emoji --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-shield-check" viewBox="0 0 16 16">
                    <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.06.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.448 9.925a11.775 11.775 0 0 1-2.517 2.453 7.002 7.002 0 0 1-1.048.625c-.28.132-.581.24-.829.313a.712.712 0 0 1-.224.03.65.65 0 0 1-.224-.03c-.248-.073-.549-.18-.829-.313a7.005 7.005 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                    <path d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                </svg>
            </div>
            <div>
                <h2 class="fs-4">Secure Authentication</h2>
                <p>Powered by Laravel Fortify, your application has a rock-solid, secure, and fully-featured authentication backend right out of the box.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bootstrap" viewBox="0 0 16 16">
                    <path d="M5.062 12h3.475c1.804 0 2.888-1.077 2.888-2.527 0-1.105-.76-1.856-1.633-2.012v-.051c.832-.16 1.422-.926 1.422-1.844 0-1.246-1.01-2.12-2.56-2.12H5.062V12zm1.313-4.875V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762V8.162h1.822c1.236 0 1.887.463 1.887 1.348 0 .896-.627 1.377-1.811 1.377H6.375z"/>
                    <path d="M0 4a4 4 0 0 1 4-4h8a4 4 0 0 1 4 4v8a4 4 0 0 1-4 4H4a4 4 0 0 1-4-4V4zm4-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V4a3 3 0 0 0-3-3H4z"/>
                </svg>
            </div>
            <div>
                <h2 class="fs-4">Modern Frontend</h2>
                <p>Built with Bootstrap 5 and classic Blade. No complex JavaScript frameworks, just simple, fast, and responsive HTML and CSS via a CDN.</p>
            </div>
        </div>
        <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.547l3.471-3.472a.389.389 0 0 0-.028-.527z"/>
                    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.86c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                </svg>
            </div>
            <div>
                <h2 class="fs-4">Ready to Scale</h2>
                <p>This lightweight setup provides a perfect, performance-focused foundation. Easily extend it with your own features without being tied down.</p>
            </div>
        </div>
    </div>
</div>
@endsection
