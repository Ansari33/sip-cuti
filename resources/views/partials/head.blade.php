<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />


@props([
    'pageTitle',
])


<title>@yield('title') |
  {{ config('variables.templateName') ? config('variables.templateName') : 'TemplateName' }} -
  {{ config('variables.templateSuffix') ? config('variables.templateSuffix') : 'TemplateSuffix' }}
</title>


<meta name="description" content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
<meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
<!-- laravel CRUD token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Canonical SEO -->
<meta property="og:title" content="{{ config('variables.templateName') ? config('variables.templateName') : '' }}{{ config('variables.ogTitle') ? config('variables.ogTitle') : '' }}" />
<meta property="og:type" content="{{ config('variables.ogType') ? config('variables.ogType') : '' }}" />
<meta property="og:url" content="{{ config('variables.productPage') ? config('variables.productPage') : '' }}" />
<meta property="og:image" content="{{ config('variables.ogImage') ? config('variables.ogImage') : '' }}" />
<meta property="og:description" content="{{ config('variables.templateName') ? config('variables.templateName') : '' }}{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
<meta property="og:site_name" content="{{ config('variables.creatorName') ? config('variables.creatorName') : '' }}" />
<link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/kemenag_logo.ico') }}" />
<!-- <link href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo/build/assets/select2-xKBs23S7.css" > -->

<!-- Include Jodit CSS Styling -->
<link rel="stylesheet" href="//unpkg.com/jodit@4.1.16/es2021/jodit.min.css">

<!-- Include the Jodit JS Library -->
<script src="//unpkg.com/jodit@4.1.16/es2021/jodit.min.js"></script>


<!-- Include Styles -->
@include('partials.styles')

@livewireStyles
