<section class="s_breadcrumbs bg-primary">
    <div class="container py-5">
        <div class="row align-items-center">
            <h1 class="col-md-6 m-0 text-white">@yield('title')</h1>
            <div class="col-md-6">
                {{ Breadcrumbs::render(Route::currentRouteName()) }}
            </div>
        </div>
    </div>
</section>
