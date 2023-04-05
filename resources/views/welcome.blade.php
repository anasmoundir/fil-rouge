<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Brain Rose Learning</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased">

    <html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>


    <x-navbar></x-navbar>
     
        <main class="pt-20 mt-4">

                    <div class="flex flex-col ">
                        <div class="bg-gray-800">
                            <div class="bg-gray-300 pt-12 pb-6 flex-1">
                                <div class="container mx-auto">
                                    <div class="flex flex-wrap md:-mx-3">
                                        <div class="md:w-1/2 px-3 mb-6 w-full">
                                            <div class="flex w-full flex-col flex-wrap bg-cover bg-no-repeat bg-center p-5 rounded overflow-hidden"
                                                style="background-image:url(https://images.unsplash.com/photo-1513438205128-16af16280739?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=935&q=80)">
                                                <h2 class="text-white text-lg mb-2">Is The Herbal Way The Right Way</h2>
                                                <p class="text-white opacity-50">Adwords Keyword Research For Beginners
                                                </p>
                                                <div class="flex flex-wrap justify-between items-center mt-auto pt-6">
                                                    <div class="inline-flex items-center">
                                                        <div
                                                            class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                            <img src="https://randomuser.me/api/portraits/women/2.jpg" />
                                                        </div>
                                                        <div class="flex-1 pl-2">
                                                            <h2 class="text-white mb-1">Ollie McBride</h2>
                                                            <p class="text-white opacity-50 text-xs">May 18</p>
                                                        </div>
                                                    </div>
                                                    <span class="text-white opacity-50">
                                                        <svg class="fill-current w-5 h-5"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 459 459">
                                                            <path
                                                                d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3 mb-6 w-full">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-2/6">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1532799755889-1247a1b7f10e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1936&q=80" />
                                                </div>
                                                <div class="w-4/6 p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/5.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Luke Nunez</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3 mb-6 w-full">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-2/6">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" />
                                                </div>
                                                <div class="w-4/6 p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/8.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Jonathan Mithu</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3 mb-6 w-full">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-2/6">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1556742044-3c52d6e88c62?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" />
                                                </div>
                                                <div class="w-4/6 p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/11.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Chris Sonne</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3 mb-6 w-full">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-2/6">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjU1MzA3fQ&auto=format&fit=crop&w=2250&q=80" />
                                                </div>
                                                <div class="w-4/6 p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/33.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Mike Olle</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:w-1/2 px-3 mb-6 w-full">
                                            <div class="flex w-full h-full flex-col flex-wrap bg-cover bg-no-repeat bg-center p-5 rounded overflow-hidden"
                                                style="background-image:url(https://images.unsplash.com/photo-1539623704225-548826dc5a08?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=934&q=80)">
                                                <h2 class="text-white text-lg mb-2">Is The Herbal Way The Right Way
                                                </h2>
                                                <p class="text-white opacity-50">Adwords Keyword Research For Beginners
                                                </p>
                                                <div class="flex flex-wrap justify-between items-center mt-auto pt-6">
                                                    <div class="inline-flex items-center">
                                                        <div
                                                            class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                            <img
                                                                src="https://randomuser.me/api/portraits/women/2.jpg" />
                                                        </div>
                                                        <div class="flex-1 pl-2">
                                                            <h2 class="text-white mb-1">Jack Roath</h2>
                                                            <p class="text-white opacity-50 text-xs">May 18</p>
                                                        </div>
                                                    </div>
                                                    <span class="text-white opacity-50">
                                                        <svg class="fill-current w-5 h-5"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 459 459">
                                                            <path
                                                                d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:w-1/4 md:w-1/2 px-3 mb-6">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-full">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1556909190-eccf4a8bf97a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" />
                                                </div>
                                                <div class="w-full p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/22.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Chris Sonne</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:w-1/4 md:w-1/2 px-3 mb-6">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-full">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1494438639946-1ebd1d20bf85?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2247&q=80" />
                                                </div>
                                                <div class="w-full p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/23.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Chris Sonne</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:w-1/4 md:w-1/2 px-3 mb-6">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-full">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1565388161858-5ae922cbfde0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2250&q=80" />
                                                </div>
                                                <div class="w-full p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/25.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Chris Sonne</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lg:w-1/4 md:w-1/2 px-3 mb-6">
                                            <div
                                                class="flex w-full h-full flex-wrap bg-gray-800 overflow-hidden rounded">
                                                <div class="w-full">
                                                    <img class="object-cover h-full w-full"
                                                        src="https://images.unsplash.com/photo-1481277542470-605612bd2d61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2195&q=80" />
                                                </div>
                                                <div class="w-full p-5">
                                                    <h2 class="text-white leading-normal text-lg">How To Boost Your
                                                        Traffic
                                                        Of Your Blog And Destroy The Competition</h2>
                                                    <div class="flex flex-wrap justify-between items-center mt-6">
                                                        <div class="inline-flex items-center">
                                                            <div
                                                                class="w-10 h-10 rounded-full overflow-hidden flex-shrink-0">
                                                                <img
                                                                    src="https://randomuser.me/api/portraits/men/29.jpg" />
                                                            </div>
                                                            <div class="flex-1 pl-2">
                                                                <h2 class="text-white mb-1">Chris Sonne</h2>
                                                                <p class="text-white opacity-50 text-xs">May 18</p>
                                                            </div>
                                                        </div>
                                                        <span class="text-white opacity-50">
                                                            <svg class="fill-current w-5 h-5"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 459 459">
                                                                <path
                                                                    d="M357 0H102C73.95 0 51 22.95 51 51v408l178.5-76.5L408 459V51c0-28.05-22.95-51-51-51z" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button
                                            class="border border-gray-600 text-gray-600 px-4 py-2 rounded-full hover:bg-gray-600 hover:text-white">Show
                                            More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </main>
</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

                        <script>
                            function Menu(e) {
                                let list = document.querySelector('ul');
                                e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e
                                    .name = "menu", list.classList.remove('top-[120px]'), list.classList.remove('opacity-100'))
                            }
                            const navbar = document.querySelector('nav');
                            let prevScrollPos = window.pageYOffset;
                            window.addEventListener('scroll', function() {
                                const currentScrollPos = window.pageYOffset;
                                if (prevScrollPos > currentScrollPos) {
                                    navbar.classList.remove('hidden');
                                } else {
                                    navbar.classList.add('hidden');
                                }
                                prevScrollPos = currentScrollPos;
                            });

                        </script>
