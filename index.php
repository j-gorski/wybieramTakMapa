<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WybieramTak - Łaczymy głosy</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo">
    <?php
        $page_url = "http";
        if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
            $page_url .= "s";
        }
        $page_url .= "://";
        if($_SERVER["SERVER_PORT"] != "80") {
            $page_url .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
            $page_url .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        $image_url = 'https://wybieramtak-og-image.azurewebsites.net/' . urldecode($page_url);
    ?>
    <meta property="og:image" content="<?php echo $image_url; ?>" />
    <meta property="og:locale" content="pl_PL">
    <meta property="og:type" content="article">
    <meta property="og:title" content="WybieramTak - rekomendacje wyborcze">
    <meta property="og:site_name" content="WybieramTak">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta property="og:image:type" content="image/png">
    <meta name="twitter:card" content="summary_large_image">
    <style>
        /* http://meyerweb.com/eric/tools/css/reset/
        v5.0.2 | 20191019
        License: none (public domain)
        */

        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed,
        figure, figcaption, footer, header, hgroup,
        main, menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure,
        footer, header, hgroup, main, menu, nav, section {
            display: block;
        }
        /* HTML5 hidden-attribute fix for newer browsers */
        *[hidden] {
            display: none;
        }
        body {
            line-height: 1;
        }
        menu, ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
    </style>
    <style>
        :root {
            --form-control-background: #0d6efd;
            --form-control-color: #fff;
        }

        html {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        *, *:before, *:after {
            -webkit-box-sizing: inherit;
            -moz-box-sizing: inherit;
            box-sizing: inherit;
        }

        button,
        input,
        optgroup,
        select,
        option,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background: url(data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0Ljk1IDEwIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6I2ZmZjt9LmNscy0ye2ZpbGw6IzQ0NDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmFycm93czwvdGl0bGU+PHJlY3QgY2xhc3M9ImNscy0xIiB3aWR0aD0iNC45NSIgaGVpZ2h0PSIxMCIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtMiIgcG9pbnRzPSIxLjQxIDQuNjcgMi40OCAzLjE4IDMuNTQgNC42NyAxLjQxIDQuNjciLz48cG9seWdvbiBjbGFzcz0iY2xzLTIiIHBvaW50cz0iMy41NCA1LjMzIDIuNDggNi44MiAxLjQxIDUuMzMgMy41NCA1LjMzIi8+PC9zdmc+) no-repeat 95% 50%;
            padding-left: 5px;
            border-radius: 0;
        }

        /* inspiration: https://moderncss.dev/pure-css-custom-checkbox-style/ */
        input[type="checkbox"] {
            /* Add if not using autoprefixer */
            -webkit-appearance: none;
            /* Remove most all native input styles */
            appearance: none;
            /* For iOS < 15 */
            background-color: #fff;
            /* Not removed via appearance */
            margin: 0;

            font: inherit;
            color: currentColor;
            width: 1em;
            height: 1em;
            border: 1px solid currentColor;
            border-radius: 2px;

            display: grid;
            place-content: center;
        }

        input[type="checkbox"]:checked {
            background-color: var(--form-control-background);
            border: 1px solid var(--form-control-background);
        }

        input[type="checkbox"]::before {
            content: "";
            width: 0.65em;
            height: 0.65em;
            clip-path: polygon(14% 44%, 0 65%, 50% 100%, 100% 16%, 80% 0%, 43% 62%);
            transform: scale(0);
            transform-origin: bottom left;
            transition: 120ms transform ease-in-out;
            box-shadow: inset 1em 1em #fff;
            /* Windows High Contrast Mode */
            background-color: CanvasText;
        }

        input[type="checkbox"]:checked::before {
            transform: scale(1);
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-family: 'Archivo', serif;
            font-size: 14px;
            line-height: 1.25;
        }

        h1 {
            font-size: 2em;
            font-weight: bolder;
            margin-bottom: 0.8em;
        }

        h2 {
            font-size: 1.5em;
            font-weight: bolder;
            margin-bottom: 0.5em;
        }

        p {
            margin-bottom: 0.25em;
        }
    </style>

    <style>
        main {
            padding: 20px;
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Style for the parent element */
        .parent-element {
            display: flex;
            flex-direction: row;
            gap: 20px;
            max-width: 1000px;
        }

        /* Style for the left column */
        .left-column {
            width: 300px;
            z-index: 1;
        }

        /* Style for the right column */
        .right-column {
            flex: 1;
            width: 550px;
            height: 550px;
        }


        /* Style for the checkboxes */
        .checkbox {
            margin-bottom: 10px;
        }

        .recommendations {
            margin-bottom: 20px;
        }

        .recommendations p {
            font-size: 1.25em;
            margin-bottom: 0.25em;
        }

        .bottom-info p {

        }
    </style>

    <style>
        .pickerContainer {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .pickerContainer div {
            font-size: 1.5em;
            font-weight: bold;
            display: flex;
            align-items: center;
            flex-direction: row;
            gap: 0.5em;
        }

        .pickerCheckbox {
            flex-grow: 0;
            flex-shrink: 0;
            flex-basis: 1em;
        }

        .pickerLogo {
            width: 150px;
        }

        .pickerCheckbox:not(:checked)~.pickerLogo {
            -webkit-filter: grayscale(100%);
            -moz-filter: grayscale(100%);
            -o-filter: grayscale(100%);
            -ms-filter: grayscale(100%);
            filter: grayscale(100%);
        }

        h1 {
            display: flex;
            flex-wrap: wrap;
            column-gap: 5px;
        }

        #nazwaOkreguSelect {
            width: 250px;
            font-weight: inherit;
            border-style: dashed;
        }

        #nazwaOkreguSelect option {
            font-size: smaller;
        }
    </style>

    <style>
        svg.map {
            fill: #ddd;
        }

        svg.map path {
            stroke: #b0b0b0;
        }

        .txtWhite {
            stroke: none;
            fill: #fff;
            font-size: large;
            font-weight: bolder;
        }

        .txtBlack {
            stroke: none;
            fill: #131010;
            font-size: large;
            font-weight: bolder;
        }


        .none-fill {
            fill: white;
        }

        .lewica-fill {
            fill: #A71256
        }

        .ko-fill {
            fill: #02468F
        }

        .td-fill {
            fill: #3CB035
        }

        .lewica-stroke {
            stroke: #A71256
        }

        .ko-stroke {
            stroke: #02468F
        }

        .td-stroke {
            stroke: #3CB035
        }
    </style>


    <style>
        /* Media query for screen sizes less than 900px */
        @media (max-width: 899px) {
            main {
                padding: 10px;
            }

            h1 {
                font-size: 1.5em;
            }

            h2 {
                font-size: 1.2em;
            }

            .pickerContainer {
                flex-direction: row;
                gap: 20px;
            }

            .pickerContainer div {
                font-size: 1em;
            }

            .pickerLogo {
                width: 70px;
            }

            /* Change the flex direction to column */
            .parent-element {
                flex-direction: column;
            }

            .right-column,
            .left-column {
                width: 100%;
            }
        }

    </style>
    <script src="data.js"></script>

</head>

<body>
    <main>
        <section>
            <div class="parent-element">
                <div class="left-column">
                    <h1>
                        <span>Chcę głosować w</span>
                        <span class="autocomplete">
                            <!--input id="nazwaOkreguInput" type="text" placeholder="okręgu"-->
                            <select id="nazwaOkreguSelect" title="Wybór okręgu">
                                <option value="" selected>Cała Polska</option>
                            </select>
                        </span>
                        <span>na partie:</span>
                    </h1>
                    <div class="pickerContainer">
                        <div id="koPicker">
                            <input id="koCheckbox" class="pickerCheckbox" type="checkbox" checked="" />
                            <img class="pickerLogo" src="img/ko.svg" />
                        </div>
                        <div id="lewicaPicker">
                            <input id="lewicaCheckbox" class="pickerCheckbox" type="checkbox" checked="" />
                            <img class="pickerLogo" src="img/lewica.svg" />
                        </div>
                        <div id="tdPicker">
                            <input id="tdCheckbox" class="pickerCheckbox" type="checkbox" checked="" />
                            <img class="pickerLogo" src="img/td.png" />
                        </div>
                    </div>
                </div>
                <div class="map right-column">
                    <svg id="svgMap" class="map" version="1.1" viewBox="0 0 1000 1000" style="display: inline;"
                        width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <pattern id="bg-none" width="30" height="30" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="30" height="30" class="none-fill" stroke="none"></rect>
                            </pattern>

                            <pattern id="bg-ko" width="30" height="30" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="30" height="30" class="ko-fill" stroke="none"></rect>
                            </pattern>

                            <pattern id="bg-td" width="30" height="30" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="30" height="30" class="td-fill" stroke="none"></rect>
                            </pattern>

                            <pattern id="bg-lewica" width="30" height="30" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="30" height="30" class="lewica-fill" stroke="none"></rect>
                            </pattern>

                            <pattern id="bg-ko-lewica" width="30" height="30" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="30" height="30" class="ko-fill" stroke="none"></rect>
                                <line x1="0" y1="0" x2="0" y2="30" class="lewica-stroke" style="stroke-width:30"></line>
                            </pattern>

                            <pattern id="bg-ko-td" width="30" height="30" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="30" height="30" class="ko-fill" stroke="none"></rect>
                                <line x1="0" y1="0" x2="0" y2="30" class="td-stroke" style="stroke-width:30"></line>
                            </pattern>
                            <pattern id="bg-lewica-td" width="30" height="30" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="30" height="30" class="td-fill" stroke="none"></rect>
                                <line x1="0" y1="0" x2="0" y2="30" class="lewica-stroke" style="stroke-width:30"></line>
                            </pattern>

                            <pattern id="bg-ko-lewica-td" width="60" height="60" patternTransform="rotate(45 0 0)"
                                patternUnits="userSpaceOnUse">
                                <rect width="60" height="60" class="ko-fill" stroke="none"></rect>
                                <line x1="0" y1="0" x2="0" y2="60" class="lewica-stroke" style="stroke-width:45"></line>
                                <line x1="30" y1="0" x2="30" y2="60" class="td-stroke" style="stroke-width:20"></line>
                            </pattern>

                        </g>
                        <a xlink:href="#" id="LegnicaIcon">
                            <path
                                d="M 152 691 l 0-3-2-2-2 0-2 2-7 0-2-2-6-3-1-1-9-1-1-2-2 0-6-3-2 0-2 4-3 0 0-9-1-3-4-2-4-5 0-6 3-3-2-2 0-3-3 0-1-3-3 1-2 2-2-1 1-6-3 1-1 3 1 1-4-1-1-2 1-1-3 0-1-2-1 2-2 0-1-2-4 2-2 3 2 2 2-1 1 3-1 0 0 4-3 3 2 2-1 3 0 4-4 0-6-2 0 1-3-2-3 2-2-1 0-1 6-8 2-1 1-6 2 0 0-3 1-1 2-7 2-1 1-3 1-1 0-6 2-1 0-7 1-1 2-9 2-3-1-1 1-1 0-6-2-1 0-3-2-2-1-4-1-1 5 0 0-5 6 0 2-5 2 0 4-2 4-3 2 0-1 3 1 0 5 0 2 3 1 0 4 4 2-7-1 0 1-4 4 0-2-3 2-6 2 0 0 2 4-1 4 2 1-2 10 10-1 3 1 1 4-5 2 1 3-7 3 0 0-7 2 1 4-2 6-1-1-5 2-3 0-2 3-2-2-4 2-2 1 0 0-5 3-2 3 0 1-1 3 1 0-2 2 0-1-4 4 0-1-1-2 0-1-2 3-2 3 0 1 4 3 0 3 2 3 1 0 1 5-1-2 8 3-1 2 1 1 3 3 2 1 4 3 0 1 3 3 0 0 5 5 0 0 4 7 4-1 4 1 3 2 1-3 3-2 11 3 10-2 4 0 3-4 4 2 4 2 0 0 3 1 1 0 3-2 0 0 3 1 1-2 4 2 5-2 1-1 3 4 3 0 3-4 2-2-1-3 3-2-1 0-1-2 0-1 3-1 0 1 3-3 2 0 1-3-1-2 1 0 2-5-3-2 0 0 8-3 1-1 2 2 5 2 1 0 6-2 2-4 0-2 1-5-1-2 6 2 1-1 1-1 3 4 4-1 3 2 4 2 3 3 0 1 2-1 2-6 1 0 2-5 4-1 4-1 0-2 2-4-2 1-2 3-1-2-2-1-7-3-1-8 3-3-1 0-5 z">
                            </path>
                            <text x="136.5" y="615" dominant-baseline="middle" text-anchor="middle">1</text>
                        </a>
                        <a xlink:href="#" id="WałbrzychIcon">
                            <path
                                d="M 187 739 l 2-3 2 2-1-3 1 0 0-1 3 0-1-1 1-1 2 1-1-2 3 1 2-2 0-2 3 2 2-1 1-2 3-2-2-3 3 0 0-4 4-1-2-5-3-2-6-7-1-1-2 1-2 0-1-1-4-1-2 6-4 1-1-3-6-2-1-2 1-2 6 0 1-2-1-2-3 0-2-3-2-4 1-3-4-4 1-3 1-1-2-1 2-6 5 1 2-1 4 0 2-2 0-6-2-1-2-5 1-2 3-1 0-8 7 3 0-2 2-1 3 1 0-1 2-1 0 1 3 0 2 2 3 1 2 0 0-1 9 4 8-2 3 4-5 0 0 5-2-1 2 3-1 2 2 1 2-2 4 1 0-2 2 0 3 0-3 3 2 2 0 3-3 2 2 6 2-1 3 1 4-1 0 2 3 0 0 2 1 0 1 0-1-1 2-1 4 1 0 1 1 1 0 2 1 1-1 1 1 1 0-1 1 1-3 2 1 2-3 6 4 0-2 2 1 1 3-2 5 5 1-1 5 0 2-1 2 1 0 2 8 3-3 3 3 2 2 3-5 1-3 7-3 4 1 4-2 2 1 4-2 2-3 0 0-3-4 1 0-2-2 0-2 4-6 3-3 6 5 3 4 12 2 0 1 1 3 1 1 4-2 3 3 5-3 2-3-5-2 4-6 0-1 3-2 0-2-1-2 3-2 0-3 7-4 1-2 5-2 1-7-2-3-4-3-1 1-2-3-3 1-6-2-4-6-5-5-10-2 0-2 0-1-1-2-4 1-2-1-2-6-1-3 2-1-4-2 0 1-2-1-1-3 0 0-3 z">
                            </path>
                            <text x="232" y="719.5" dominant-baseline="middle" text-anchor="middle">2</text>
                        </a>
                        <a xlink:href="#" id="WrocławIcon">
                            <path
                                d="M 257 695 l 3-6-1-2 3-2-1-1 0 1 0 0-1-1 1-1-1-1 0-2-1-1 0-1-4-1-2 1 1 1-1 0-1 0 0-2-3 0 0-2-4 1-3-1-2 1-2-6 3-2 0-3-2-2 3-3-3 0-2 0 0 2-4-1-2 2-2-1 1-2-2-3 2 1 0-5 1 0 1 1 3-1-1-3-3-1-7 2-9-4 0 1-2 0-3-1-2-2-2 0-1-1 1-1-1-2 0 0 0 0 0-1 0 0 1 0 1-3 2 0 0 1 2 1 3-3 2 1 4-2 0-3-4-3 1-3 2-1-2-5 2-4-1-1 0-3 2 0 0-3-1-1 0-3-2 0-2-4 4-4 0-3 2-4-3-10 2-10 3-4-2-1-1-3 1-4-7-4 0-4-5 0 0-5-3 0-1-3-3 0 0-3 1-2 2 0 1-1 5-2 2-3-1-2 2-2 0-2 1 0 2-2 13 0 0 3 3 0 1 3 7 1-2 2 1 1 4 4-1 1-1-1 0 2-3 1 0 3 5 1-1 2 11 1-2 2 0 2 3 2-1 2 2 1 2 2 2-1 4 0 2 4 5 1 1 1 1-1 4-1 2 0 2 2 1-1-1-2 5-2 1 2 7-2 2 2 1-10 2 0 2-2 7-1 14 4 5 3 0 3 4 1 0 2 1 1 0 6-2 2-3 0-1 1 1 2-1 1 2 3-1 1 2 4 0 3 1 2 2 1 3-1 1-2 3 0 1 2 2-1 3 3 2-1-1-2 1-1 3 2 0 1-2 2 0 1-1 0-2 3 4 4 0 2 2 2-1 1 1 2-3 4 1 1 0 5 2 6 3 2-2 1-3-1-1 2-3 0-1 2-2-1-1 1-5-2-1-3-1 2 0 2-1 0-5 2 0 2 3 2 0 3-1 3 2 2-7 3 2 3-2 5 2 2 0 1-5 1 3 1-1 2-1-1-3 0-1-1-3 2 1 5-1 4-2 0-1-1-3-1-2 4 4 2 0 2-1 0 0 2-6 2 2 3-3 1 3 3 1 2-1 1-6-1-2 1-2 2 2 0 3 5-1 1-2-2-1 1-1 4-3 0 0 2 4 2-3 2 0 3-1 3 2 2-1 2-7 0-2-3-3-2 3-3-8-3 0-2-2-1-2 1-5 0-1 1-5-5-3 2-1-1 2-2 z">
                            </path>
                            <text x="278" y="618" dominant-baseline="middle" text-anchor="middle">3</text>
                        </a><a xlink:href="#" id="BydgoszczIcon">
                            <path
                                d="M 414 333 l 4 0-2 1-2 6 7-2 1 2 5-1 1 7 5 5-1 4-1-1-1 3 1 1-1 2 1 0 1 2 2-1 1 3 3-1 1 3-2 5-5-1-1 2-4 0 0 9-3 0 0 5-1 0-1 2 3 4-1 7-3 0 0 3-5 3-2 1-2-1-1 0 0 3-8 6-2-1-4 1 0-3-4-1-2 1-1-1 0-1-2 0-2-1 2-3-1-2-3 0-1 1-5-2-1 2-1 0 0-5-1 2-1 0 1-2-3 1-1-3 0 3-2-1-1-2 2-2-2 1 1-3-1 0-2-4-4 1-2-1 1-1-4-2-1 3-2 0 0-4-4 3 1 1 2-1 0 1-4 5-1-2-1 2-1 0 1-7-5 0 0-5 1-2-2-3-4 0-1 3-3 0-2 3-2-1 0-1-2-1 0 1-1 0 0-3 3-1-2-1 1-2-5-4-3-1 2-2-2-1 0-2 3 0 2-2 0 2 4 0 1-1 0-2 1-2 0-6 1 0 0-5-1 0-1-5 1-2-2 0-1-3-2 0-6-6-3 2-5 0 0-3-2-1 2-4 2 0-1-9 3-2 0-7 3 0 1-1-6-3 2-1-1-3 1-2-3-4 9-1 0-2 2-1-1-1 2-2-2-3-1-1 0 1-1-1 0-1-4-4 0-2-1-1-1-2-7-2-1-3 4-3 1-4 8-7 1-6 3-5-1-4 1-4 3-2 3 0 3-3 3 6 3 1 3-3 6 4 1-2-2-1 1-2 2 2 4 0 0-4-2 1 1-1-1-3 2-2 1-5 2-1 0-2 1 0 3 3 2-2 3 1 2-4 2 0 0-1 1-1-3-4-1 0 1-2 3 2 2 0 1 1 1-1 1 2 1 0 2 2 4 0 2-2-1-1 3-6 4 2 0 2 2-2 2 0 0 2 2 2 0-2 2 0 0 3 2-2 0 2 5-1 0 3 1 1-3 1 1 2 9 2 10-1 0 1 1-2 4 0 1 2-1 1 2 1-1 1 2 1 1 2 3-1-2-2 1-1 3 1 2-1 2-3 3 1 2-2 0 2 2 1 2-1 1 1 1-3 3 0-5 8 0 3 2 5 0 9-3 11-5 6-5 1 1 2-3-1-6 2-6 0-3 6-3 0-1 2-4 3-4 5-2 7-4 4 4 1 1 3 3 2-1 9-2-1-2 1 1 2-1 3-4 1 1-3-2 1-6 4-3-1-1 1 2 2 12 2 11 7-3 4 0 3 z">
                            </path>
                            <text x="371.5" y="309.5" dominant-baseline="middle" text-anchor="middle">4</text>
                        </a><a xlink:href="#" id="ToruńIcon">
                            <path
                                d="M 444 425 l 1-2-3 1-2-5-3 0-1-2-1 1-3 0 0-4-2 1 0-2-1-1-3-1-2 2-1 0 0 2-2 0-4 1-2 0-1-5 2-4-1-2 5-2 1-4 3 0 1-1 0-6-3-4 1-2 1 0 0-5 3 0 0-9 4 0 1-2 5 1 2-6-1-2-3 1-1-3-2 1-1-2-1 0 1-2-1-1 1-3 1 1 1-4-5-5-1-7-5 1-1-2-7 2 2-6 2 0 0-1-4 0 1-1 0-3 3-4-11-7-11-2-3-2 1-1 3 1 7-4 1-1-1 3 4-1 1-3-1-2 2-1 2 1 0-2 0 0 1-1 0-6-3-2-1-3-4-1 4-4 2-7 4-5 4-3 1-2 3 0 3-6 6 0 6-2 3 1-1-2 5-1 3-3 3-4 1-6 1-14 0 1 12 1 2 1 0 2 1-2 5 1 2-2 3 1 7-1 7 3 3 1-1 4 2 0 1 3-3 3 3 3 1 4-1 2 2 0 0 2 1 2-2 2 3 3 3 2 1-4 3 1 3-1 2 1 0 3 1-1 1 0 1 2 3 1-2 2 3 0 1-2 1 0 0 2 4-2 1 3-1 4 6 0 5-3 5 2 0 5 3 0-1 2 2 1-1 1 1 1-2 0-2 2 0 4 6 1 1 3-2 1 2 8-4 3-1 2-2 0 0 2-2 1-3-1 1 6 2 1-2 0 1 5 1-1 3 4-3 5 2 1 0 4-6-3-6-2 0 1 3 4-5 1-1 2-8-1 1 3 2 1-2 2 6 8-4-1-1 1 1 1-3 2-2 0 0 4 4 2 0 3 3 1 1 2-1 3 3 0-3 2 1 3 2 2-3-1 0-1-3-2-2 1 0 3-1 4 2 1-4 0-1 5-2 0-2 2 6 3 0 2-2 1-1 3-5 1 2 5-1 1-2-1 0 0-1 0 1 2 4 0 2 2-3 1 0 4-2 0-2 5-4 0-2 1 0 1 3 1 1 2-2 2 1 2-2 0-3 5-3-1 0 2 2 2-2-1-1-2-1 2-3 1 0-1-3 1-3-1-4 2 1 1-3 0-3-1 0-2-3-1-1-1 2 0-1-2-2-1-3-3 1 3-2 0 0 2-2 1-1 0-5 3-2-1-5 3-1-5-4-6-3 0 z">
                            </path>
                            <text x="471" y="336" dominant-baseline="middle" text-anchor="middle">5</text>
                        </a><a xlink:href="#" id="LublinIcon">
                            <path
                                d="M 797 700 l 3-3 0-3 3-8-2-2-3-1 1-4-12-3-6 6-2-1-2 3-8-1 1-2-2-1 0-4-2-2 0-4-4-11 1-9-3-7 3-3-4-5-1-6 1-3-1-2 0-5-1-1 2-5 2-2-2-4 6-3-3-3-1 2-1-2-3 1 0-1 3-1 2-5-1-2 2-2 1 0-2-4-3 1-2-4-2 1-1-1 0-2 2 0 2-3 3 0 1 2 3-10-3-1 1-4-3-4 0-4-5-1-3 1-9-3-1-3-4-3 2-1 0-5 1-1 7 4 0 0 1 3 2 1 2-6 1 1 1-2 4 1 2-5 1 1 0-2 2 1 0-3 2-2-2-1-1-3-4-2 1-2 1 0 1-2 3 0 0-2 3 0 3-2-3-7-6 0-1 1 0-1-2-1 1-1 4-1 0-5 2 0-1-3-2-1 0-3-2-2 1-5 4-1 1-2 4 0 3-4 1 0 2-1 2 0 3 2 3 0 3 0 1-4 10 3 3-2 1-3 3 0-1 4 3 2 4-3 5 0 1-3 1 0 3-6 2 0 2 3 2 0 0 1 6 0 2 3-1 2 2 2 0 4-1 0-5 1-1 4-1 1 2 1 1 5-1 1 2 2-2 0 0-2-5 3-2-2-1 5-3 3-3-4-3 2-1-2-1 1 0-2-1 2 1 1-2 2 3 1-1 1-2 3 5 1 0 4 4 5-3 5 8 3 0 2 3 2 3 1 0 1 3 0 0 0 5 4 0 1 5 5 2 0 5 3 6 1 0 7 6 0 0-2 3 0 0-5 4 1 0 1 4 2 5 2 0 1 2 2-2 1 0 2 2 1-1 1-1-1-3 1 2 8 2 0 2-3 3 3-1 1 1 0 1-2 1 1-2 3 3 0 2 6 2-2 1 2 1-1 0 1 2-3 1 1 0 1 5 2 2 3 3 0-3 3 0 2-2 2 0 2 3 1-1 2-6-1-2 2 1 2-7 0-3 2 1 1 0 1-3 2 0 2 1 6 3 1-3 1 1 1 0 2 2 0-2 2 1 2 1 0-3 2-3-1-1-1 1-1-5-2-4 1-4 10 2 1 1 4 5 0 0 2-2 2-1 4-4 2-4-2-4 2-1 0-1 5 3 1-3 1 0 2-2 0 3 6-8-1 1 1-3 5-3-2-4 3-1 0-1-1-2 2 4 0 0 3 2-1 0 3 1 0 4 5-3 5 1 2-4 3 3 2 1 6 1 0 2 1 1 2-4 2-5 6-4 2-4-1 0 2-1 0 0-1-1 0 0 1-1 0 1 0-3-1 0-1-5 2-7-5-5 0-1-1-4 0-3-6 z">
                            </path>
                            <text x="822" y="593" dominant-baseline="middle" text-anchor="middle">6</text>
                        </a><a xlink:href="#" id="ChełmIcon">
                            <path
                                d="M 988 731 l-18 2-8 4-2 2-1 7-5 2-1 3-2 1-3 5-3 3-2-2-2 0 0-2-1-2 2-1-2-1-3 1-2-1-4-1-1 2 3-8-3-1-1-2-2 0 0-3-2-1 2-2-3-1 0 2-10 7 0-1-4-3-4-1-16 18-13-1-4 1-10-1-5 2-2-1-5 0-3-1-1-3 9-3 0-2-6 0-4 1-3-1-4 1-2 2 0-2-3 0-3-2 0-3-2-1 0-1-3 1 1-5 3 1 0-2 1-1-1-4 2-1 0 1 4 1 0-2 2 0 1 3 2-3 1 1-1-1 3-2 0-1-2 0-4 1 0 0-1 0-1-1 4 0 3-3-5-2 0-4-2 0 1 0 0-1 2-1-1-3-2-3 4 1 4-2 5-6 4-2-1-2-2-1-1 0-1-6-3-2 4-3-1-2 3-5-4-5-1 0 0-3-2 1 0-3-3-1 1-1 1 1 1 0 4-3 3 2 3-5-1 0 0-1 8 1-3-6 2 0 0-2 3-1-3-1 1-5 1 0 4-2 4 2 4-2 1-4 2-2 0-2-5 0-1-4-2-1 4-10 4-1 5 2-1 1 1 1 3 1 3-2-2-1 2-3-2 0 0-2-1-1 3-1-3-1-1-8 3-1 0-2-1-1 3-2 7 0-1-2 2-2 6 1 1-2-3-1 0-2 2-2 0-2 1-1 2-1 0-1 0 0 0 0-3 0-2-3-5-2 0-1-1-1-2 3 0-1-1 1-1-2-2 2-2-6-3 0 2-3-1 0 0-1 0 1-2 1 1-1-3-3-2 3-2-1-2-7 3-1 1 1 1-1-2-1 0-2 2-1-2-2 0-1-5-2-4-2 0-1-4-1 0 5-3 0 0 2-6 0 0-7-6-1-5-3-2 0-5-5 0-1-5-4 0 0-3 0 0-1-3-1-3-2 0-2-8-3 3-5-4-5 0-4-5-1 2-3 1-1-3-1 2-2-1-1 1-2 0 2 1-1 1 2 3-2 3 4 3-3 1-5 2 2 5-3 0 2 2 0-2-2 1-1-1-5-2-1 1-1 1-4 2-1 4 0 0-4-2-3 2-3 2-1 1-4 0-3-2-2 5-4 0 2 6 2 2 4 5-3 2 3 1-1 0 1 4 0 1-2-3-3 1-1 1-2 2 1 0-1 2 1 2-2-3-3 4-4-1-2 6-1 4 1-3-2-1-6 3-3 1 0 4-9 8 2-1 6 1 2 7 1 4-1-1 2 4 0 1-1 0 1 2 0 1 2 2-1 0 3 2 0 1 1 3-2 1 2 2-2 1 1 1 1-2-1 0 4 3 0 1 3 2 0 1 4 0-2 3 0 4 1-1 2 5 4-1 1 1 1-1 0 2 3-1 4 4 4-2 2 0 2-2 0-2 3 2 0 0 2-3 3 3 4-2 1 1 2-2 0 1 3-1 3 1 0-1 1 2 0 2 5-1 1 0 2-3 2-1 2-3 0-2 3-1 2 1 1 1-1 1 3 0 0 0 1 1 1-1 2 1 3-2 2 0 1 1 1 0 1 0 5 4 7-1 3 0 1 5 1 1 2 0 3 2 1 2-1 1 2 1 2-3 2 0 2 4 0 0 2 2 2-1 1 1 1-2 2 1 1-1 0 1 3-2 0-1 4 0 1-2 2 1 3 1 1 0 2 4 0 1-1 3 5 2 8 2 0 0 1 5 3 3 4 1-1 3 2 0 3-2 1 2 2-1 2 2 1 0 3 1-1 1 1 2 0 1 4-1 1 2 1-1 1 2 2-2 2 5 2 1 6 9 9 4 1 3 2 3 0-1 4-3 2-10 0-4 4 0 4 1 2 1 2 3-1 2 1 0 1-1-1 0 2 1 0-1 1 1 0-1 4 3 1 3-1 0 7 2 0 1 2-1 3 1 1 1 0 0 5-2 17-3 9-3 2 0 4 z">
                            </path>
                            <text x="925" y="597" dominant-baseline="middle" text-anchor="middle">7</text>
                        </a><a xlink:href="#" id="Zielona GóraIcon">
                            <path
                                d="M 174 482 l 0 4 2 1 0-1 1 0 1 3 5 1 5-3 2 1 1 6-2 1 1 3 1 1-4 3-1 2 7 0 1 2 2-1 0 3 2 0 3-2 0-3 3 1 1-1 3 3 4 1-2 1 5 4-1 2 2 0-1 3 1 2-1 2 3 2-3 2-1 0 0 2-2 2 1 2-3 3-8 4 0 4-1-4-3-2-1-3-2-1-3 1 2-8-5 1 0-1-3-1-3-2-3 0-1-4-5 0-1 2 0 1 3 1 1 1-4 0 1 4-2 0 0 2-3-1-1 1-3 0-3 2 0 5-1 0-2 2 2 4-3 2 0 2-2 3 1 5-6 1-4 2-2-1 0 7-3 0-3 7-2-1-4 5-1-1 1-3-10-10-1 2-4-2-4 1 0-2-2 0-2 6 2 3-4 0-1 4 1 0-3 5 1 1-3-2-1-1-1 0-2-3-6 0 1-3-2 0-4 3-4 2-2 0-2 5-6 0 0 5-4 0 1-2-3-4 2 0-1-5 1 0 0-2-2-5-2 0-1-2-6-1-6-5-3 0-3-3 0-3-2-2 6-7-1-3 1-6-2-4-7-6-1-3 1-2-1-1 0-5-4-2-1-6 1 0 1-3 3-1 2-4 4-2 1-4 2-2-2-5 2-3 0-2 3-4 0-4 2-2-3-4-3-1-1-3 0-5 2-4-1-4 2-2 1-4-2-4-9-3-2-2 1-3-1-3-1-1-1-7-1-4 2-6 3-1 6-9-3-2 0-4 4-6-7-9 7-5 5 5 3 0 1-2 2 0 1-4 4-4 1-6-1-4 3-2 3-1 0-2 2 0 0-3-1 0 0-3 2-1-1-2 3 0 0 3 3-2-1-2-2-1 2-4 2 0 0 1 0 0 2 2 3 1 1 4 4-3 3 5 21-8 1 1 0-1 4-1 1-1-1 0-3-5 0-4 6 3 4-4-1-1 6-3 2 1 7-3 1-1 2 4 1 0 1 1 3 0 1 1 5-3 4 2 4-1 2-3-2-2 1 0 2-3 2 0-3-2 4-1-1-3 5-1-1-4 6-1 7 2 0 0 0 2 1 2-1 5-1 0-2 3 0 10-1 1 1 0 0 2 2 4 0 4-2 1 1 4-2 1 2 2-1 0 0 1-2-1 0 2-3 2 0-2-2 3 0 3 2 1 1-1 0 0 0 1 1 2-2 1 2 4 0 4-4 3-7 1-4-1 2 7-3 0-1 5 2 0 0 2-2 1 3 4 2 1-1 3 3 4-2 2 2 3 2 0-1 2 2 5-1 0 1 3-2 1 0 2-2-1 0 1-2-1-1-3-1 2-1 0 4 7 5 2-1 3 0 3-1 0 1 7-1 0 0 4-3 3 0 6-2 3 1-1 1 3-1 4 2 1 1 2-1 4-4 3 2 4 2 0 4 3 1-3 4 1 3 4-1 1 0 3-3 0 z">
                            </path>
                            <text x="127" y="444.5" dominant-baseline="middle" text-anchor="middle">8</text>
                        </a><a xlink:href="#" id="ŁódźIcon">
                            <path
                                d="M 518 552 l 2-5-1-4-3-2-4 0-2-3 0-2-1 1 0-1 1-1 0-1 3 0 0-2-4-2 0-2 2-2-1-2-1 1-1-2 2-1-1-1 1-3 4 1 0 2 7-2-1-3 5-1 1 0 2 2 3 0 1 1 2 1 1-2 2 0 0-3 5 2 5-4-1-3-3 0 3-5 0-3 1 1 1-1 2 1 2-1 7-1 1 3 2 2 1 4 1 1-1 2 1 2 5 2 3 0 1 2 4 2-2 2 0 2 1 0 0 1-1 0-1 2 3 1-2 2 0 2-1 1 0 3-3 1-1 2 1 0-4 7-3 1-1-4-1-2-2 1-2-2-3-1-1 0 0 2-1 0 0-2-2 0-2 3 1 0-1 2 0 7-4 1 0-4-3 1-2 4-3-2-1 2 3 3-4 4 3 4-2 7-6 0-1-2-2 0-1-2-2 1 0-2-1 0 0-4-2-2 2-3-1-1-2 0 1-2 z">
                            </path>
                            <text x="542.5" y="535.5" dominant-baseline="middle" text-anchor="middle">9</text>
                        </a><a xlink:href="#" id="Piotrków TrybunalskiIcon">
                            <path
                                d="M 496 646 l 4-8 2-2 2 0 0-4-5-3 1-4 6 1 1-2-2-1-3-3 1 1-2 1 0-2-5-3-1-4-3-2-1 4-2-1 0 0 0 1-3 0-1-3 2 0-1-4-2-3-2 2-2 0-1 3-3-3-2 1-8-1 0 1-4 0-1-1 3-3 0-1-2-2 2-3-1-1 3-1 1 0-2-1 1-1 2 3 4-2 5 4 0-3 3 1 1-5 2-1-2-5 1 1 2-2-1-7 9-2 3 1 1-2 4-1 2-3 0-5 1-2 2 4 4 1 7-2 0 2 1 0 1-2 2 2 2-1 0-2 2 0 0 2 2-1 1 2 2 0 1 2 6 0 2-7-3-4 4-4-3-3 1-2 3 2 2-4 3-1 0 4 4-1 0-7 1-2-1 0 2-3 2 0 0 2 1 0 0-2 4 1 2 2 2-1 1 2 1 4 3-1 4-7-1 0 1-2 3-1 0-3 1-1 0-2 2-2-3-1 1-2 1 0 0-1-1 0 0-2 2-2-4-2-1-2-3 0-5-2-1-2 1-2-1-1-1-4 3 1 0-1 3-1 0-2-2 0 0-2 2-1 0-2 2 0 0-2 1-1 0-1 4-1 1 2 1 0 4-2-1-1 4-3-1-1 4 1-1-1 2-2-1-4-2 0-1-3 3-2-1-5-1 1 0-1 1-1 0-2 5-1 0 2 4 4 5-1 2 3 0 4-3 0 1 3-5 5 3 4 1 1 1-2 1 1-1 1 2 4 2 1-5 2 1 3 2 0 2-1 2 1 0 2-1 1 2 0 1-1 3 0 0-1 1 0 1-2-1 0 1-1 2 2 1 0 1-3 1 2 1-1 4 2 1 3-1 2 2 2 1-1 6 1 0 2 2 1 0 3 2 0-1 3 2 0 0 1-1 1-5 0 0 1 3 0-1 3 2 4-1 0 1 0-1 3 6 2 2 2-1 8-1 0-2 3-10-1-1-3-2 0-2-2-2 2-1-1-1 2-3 1-1 2 0 2-1 1 0 0 0 0 4 1 1 4-1 1 1 1 1 3 2 0 1 3-1 3-1 5 5 1 2-1 2 7-5 4 1 2-1 3-3 0 0-1-2 8-1 1 1 4-2 2 0 1-5 1 3 6-1 2 0 3-1 1-4-3-2 2-3 0-2-1 0-1-2 0 0 2 2 1-1 3 2 0-2 2-1 0-1 1-1 0 0-1-1 1-1 1 0-1-2-1 0 2-2 0-4 1-6-1-1 1 0-2-3 0-3 3 4 3-4 4 1 1-2 0 1 6-1 4 7 1 0 1 1 0-1 1 0 7-1 3 0 3-2 2-6-5 0-2-1-1-1 0 0-2-4-1-1-3-1 0-2 7-3 6 2 5-1 3-5 2 0 3-4 4 0 2-2 1-6 0-1-2 0-3-5 0-3-5-1 0-5 2-1 2-1 0-2 1-1-1-1-7-3-2 0-4-3-2 0-1-1-3-4 2 0-2-3-2-1-2 1-2-1-1-3 0-3 2-1-1-4 0 z">
                            </path>
                            <text x="551.5" y="592.5" dominant-baseline="middle" text-anchor="middle">10</text>
                        </a><a xlink:href="#" id="SieradzIcon">
                            <path
                                d="M 462 609 l 4-1 0-1 8 1 2-1 3 3 1-3 2 0 2-2 2 3 1 4-2 0 1 3 3 0 0-1 0 0 2 1 1-4 3 2 1 4 5 3 0 2 2-1-1-1 3 3 2 1-1 2-6-1-1 4 5 3 0 4-3 0-4 8 0 3 2 0 2 1-1 2 2 3-1 0-1 2-4 1-4-2 0-1-2 0 1-1-2 0 0 2-1 0-2-5-3-1-2 2-1-1 1-2-3-2-1-2-9-6-3 7-4-3-4 1 0 0-2 0 1 1-10 0-5 2-4-4-4-1-2-7-1-2-3 0 0 5-3 3-1-1-2-4-1 1-3-1 0-1-4-1-1-1-6 1-5-4-8 0-2-2 1-4-1 0 0-2 2-3-2-3 1-4-2-1 0 1-1 0-1-1-2 2-1-1 1-2-1-1 2 0-1-1 0-3-2-3 0-2-2-1 3-2 3 0 2-5 4 1 2-6-2-3 3-1-1-1 12 6 3-6-1-3 4-1-1-6-2-3 2-2-1-3 1-5-3-1 2-2-2-2 1-1 1 0 2-3-3-1 1-3 3-3 0-1 2 0-1-3 2-1 0-1-2-3 1 1 2-3-2-4 1 0 0-2 0 2 2-1 0-5 3 1-1-1 1-4 4 0 0 3 4-2 4 0 2 2 8 2 0-7 3-1 0-1 4-8-2-1 0-5-1 2-2-3 2 0 0-2-1-1 1-2-1-5 0-5 3-2 4 3 2-2 1 1 1 0 1-3 2-1 2 1 4 1 1-4 1 0 1-3-1-1-1 1-2-2 1-10 3 0 1-2 1 1 2-2 3 0 3 0 2 2 1-1-1-3 1-2 2-1-1-4-6 0 1-4-1-4 1 0 0-2 2 0-1-1 4-2 3 1 3-1 0 1 3-1 1-2 1 2 2 1-2-2 0-2 3 1 0-1 4-4 3 1-2 2 4 1-1 3 4 1 5 0 0 1 2 0 3-2 4 2-1 3 3 2 2 0 1 2 7 1-1 2 2 0-1 2 3 1 4-1 1-3 3 3 3 0 3-2 0-1 2-1 3 2 3-3-1 0 3-3 2 2 2 0 4 5 7 1-1 2 5 2-2 7 2 3 1 3 2 1 0 2-1 1 0 1 1-1 1 5-3 2 1 3 2 0 1 4-2 2 1 1-4-1 1 1-4 3 1 1-4 2-1 0-1-2-4 1 0 1-1 1 0 2-2 0 0 2-2 1 0 2 2 0 0 2-3 1 0 1-4-1-3-9 1 4-7 1-2 1-2-1-1 1-1-1 0 3-3 5 3 0 1 3-5 4-5-2 0 3-2 0-1 2-2-1-1-1-3 0-2-2-1 0-5 1 1 3-7 2 0-2-4-1-1 3 1 1-2 1 1 2 1-1 1 2-2 2 0 2 4 2 0 2-3 0-1 2 0 1 1-1 0 2 2 3 4 0 3 2 1 4-2 5 3 2-1 2 2 0 1 1-2 3 2 2-1 6-3 1-1-2-1 2-1 0 0-2-7 2-4-1-2-4-1 2 0 5-2 3-4 1-1 2-3-1-9 2 1 7-2 2-1-1 2 5-2 1-1 5-3-1 0 3-5-4-4 2-2-3-1 1 2 1-1 0-3 1 1 1-2 3 2 2 0 1-3 3 z">
                            </path>
                            <text x="485" y="542.5" dominant-baseline="middle" text-anchor="middle">11</text>
                        </a><a xlink:href="#" id="ChrzanówIcon">
                            <path
                                d="M 514 864 l 3-1 0-2 3-1 0-2 2-1-1-4-2-2-2 2-3-3-2 1-3-1-3-6 0-5-2-2-5-1 0 0-2-1-1 2-3 1-1-2 4-3 0-4-1-2 0-5-5 2-3 0-1-2-2 0 5-2 0-1-2 0 1-2 0 0-1-3 1 0 0-1 2-2 0-2 1 1 0-4 1 0 1-1 5-1 0 1 1-1 1 0-2-2 4-9 1 0-1 3 2-1 0-4 4 1 3-2 1 0 0-3 1 0 1-2-2 1-2-2 4-1 4-2 1 1 0-2 2-2 10 1-1 1 1 0 5 1 1 1-7 0 1 1-2 1 3 1 2 2-3 1 1 4-1 0 0 1 0 3 2 2 3 2 5 9-2 0-3 2-2 0 0 1 2 4 1 0 1-2 0 1 0 2 2 0 1 1 1-2 3 1-2 2 1 3 4 1 0-2 2 0 2 6 1 0 0 2 1-1 2 3 3 1 1 0 0 1 2-4 2-1 0-3 4 1-1 2 4 2 1 0 2-4 1 1 3-2 2 0 1 4 3-2 2 1 2-3 4 2 0 2-1 1 2 2 4-1 2 1-1 0 0 1 2 0 1 2 3 0 1 4 0 2-2 1-1 2 0 0-4 2-2-1-2 9-2 1-1 2-2 0-5-2-4 7 1 3-1 4-5 0 1 3-1 3-6-3-2 0-1 7-6 0-3 2-1-1-1 1 1 1-2 1-5-1-2 1-7-8-3 0 1 4-1 1-7 3-5-4 0-2 1-2-1-3 1-3-2-2-2-1-3 1 z">
                            </path>
                            <text x="534.5" y="840.5" dominant-baseline="middle" text-anchor="middle">12</text>
                        </a><a xlink:href="#" id="KrakówIcon">
                            <path
                                d="M 600 794 l 4 2 3-1 0-3 1 0 0-4 3 0 1 0 2 2-2 1 1 3 3 0-2 1 1 2-1 2-4-1-2 3-2 0-1 2-1-1-3 5-3-1-8 2-1-1-1 0-2 6-2 1-4 0 1 2-1 2-4 0-1 1 3 1 0 2 2 0 0 3-2 0-3 2-1-1-2 4-1 0-4-2 1-2-4-1 0 3-2 1-2 4-4-2-2-3-1 1 0-2-1 0-2-6-2 0 0 2-2-1-2-1-1-2 2-1-2-1 0-1-2 2-1-1-2 0 0-3-1 2-1 0-2-2 0-3 2 0 3-2 1 1 1-1-2-3 0-2-3-4-3-2-1-1-1-5 1 0-1-4 3-1-2-2-3-1 2-1-1-1 7 0-1-1-5-1-1 0 1-1-14-2-8-4 3-2 1 2 1-2-1 0 2-1 1-2 1-2 1 0-1-2 2-3 3 2 3-1 1-4-3-3 0-1 3 1 0-5 3-3 2 0 1 1 3 0-1 1 3-1 1 1 2-1 3 1 0-1 2-1-1-1 3-2 1-2 1 1 9 0 2 1 3 0 0-2 5-1-1-2 1-1 8-1-3-4 2-3 6 2 0 1 3-1 0-1 2 1 2 2-1 1 3 1 2-1 3 1 5-2 2 3 2-1 1 2 1 0 0 6 2 2 2 5 2 0-1 3 3 1-3 2-2 0 1 2-1 2 0 3-10 1-2 1 0 3-4 1-1 2 3 5 2 0-1 1-1 3 2 2-1 2 1 1-3 3 4 1 2 2 z">
                            </path>
                            <text x="562.5" y="781.5" dominant-baseline="middle" text-anchor="middle">13</text>
                        </a><a xlink:href="#" id="Nowy SączIcon">
                            <path
                                d="M 556 940 l 3-8 3-1-1-4-2 0 1-4-1-3 1-4-1-7-5 1-3 3-3-3-6-1 2-4-1-1 0-2-3 1-2-2-1 1-3-6-3-11 0-2 7-3-1-5 3 0 7 8 2-1 5 1 2-1-1-1 1-1 1 1 3-2 6 0 1-7 2 0 6 3 1-3-1-3 3 0 2 1 1-3-1-5 4-7 4 2 3 0 1-2 2 0 1-2-1-2 1-1 1-5 2 1 4-2 0 0 1-2 4-1 3 4 3-2-1-1 1 0 3 1 2 6 2 0 3-1 3 0 1 0 2 0 0 0 0 0 0-3 5 0 7 6 3-2 0-2 2 0-1-2 2 1 2-2 1 1 5-1 2 1 0 2 4 0 5 4 2-1 1 2 1 0 1 2 0 0 2 2-1-1 2 0 1-1 3 2 2-3 2 0 2 0 0-3 4-1 3 3 4-4 4 0 3-2 7 1 2 4 3-1 4 3-1 2 2 1-1 3 3 1-1 6 3 4-4 6 6 4-2 4 2 1 2 4 1 1 2 2-4 1 3 3-2 2 1 4-3 0-3-3-4 1-3-2-1 2-4 2 0 3-2 2-3 0-3-3-3-2-1 2-2-1-5 2 1 2 5 5-1 1-2 2-1-1-3 0-5 6 0 3-3 0-3 2-3-4-3 1 1-2-2-3-1 0-2 2-3-2-1 1 0-2 1 0 0-1-3 0 0-2-2 0 0-1-2-1 1-2-1-1 0-2-6 0-2 3-3 0-3-3 0 3-4 4-7-2 0-2-3-2-4 0 1 1-2-1 0 3-1-1-1 2-2 0-2-2-1 1-4-1-1 3 1-1 1 0 0 0-2 8-2-1-2 0-1 1-1-1-3 1-1-1-3 1-1 3-1 0 0 2-1 2-1-3-1 1-1 6-3 4-1 12-8-4-1-3-3-2-5 0-3 1 0 3-4 2-3 1-3-2-3 1 z">
                            </path>
                            <text x="630.5" y="883.5" dominant-baseline="middle" text-anchor="middle">14</text>
                        </a><a xlink:href="#" id="TarnówIcon">
                            <path
                                d="M 604 835 l-3 0-1-2-2 0 0-1 1 0-2-1-4 1-2-2 1-1 0-2-4-2-2 3-2-1-3 2-1-4 0-3-2 0 0-2-2 0 0-1 1-2 1 1 2 0 1-2-1-3 4 1 2-1 0-3 3-3 0 1 5-2 7 1 3-5 1 1 4-3 1-2 4 1 1-1-1-3 2-1-3 0-1-1 0-2 2-1-1-2-5 0 0 4-1 0 0 3-3 1-4-1 0-3-2-2-4-1 3-3-1-1 1-2-2-2 1-3 1 0 0-1-2 0-3-5 1-2 4-1 0-3 2-1 8 0-1-1 3 0 0-3 4 1 0 2 2 1-1 0 0 2 2 0-3 3 2 1 3 3 2 0-2 2 0 2 1 2 2-1 1 3 2-1 2 1 0-1 2 1-1-1 5 2 5-3 2 3 1-3 4 0 0 0 1-1 2 1 3-1 0 1 0-1-1-1 3 0 0-2 2-1 0-3 4-3 3-3 4 2 2-3 2 0 2-2 4 1 2-3 11 0 2-4 3 0 1-2 2-1 2 1 2 3 1-3 2-1 2 7-4 2-1 3-3 4 4 3-4 0 3 5 0 5-2 5 3 0-3 2 5 2-2 1 2 3-3 1 2 2-2 2-2 2 5 4-1 2-3 2 0 4 3 8 8-1 3 1 0 5-2 2-4-1 0 6 3 2 5-1 4 3 1 2-2 1-3 2-2-2-1 2-2 0 0 3-8-1-3 2-4 0-4 4-3-3-4 1 0 3-2 0-2 0-1 0-1 3-3-2-3 1-1-1 0 0-1-2-1 0-1-2-1 0 0 1-1 0-5-4-4 0 0-2-2-1-5 1-1-1-2 2-2-1 1 2-2 0 0 2-3 2-7-6-5 0 0 3-6 0-3 1-2 0-2-6-3-1 0 1-2 2-2-1-2-3-2 0 z">
                            </path>
                            <text x="648" y="805" dominant-baseline="middle" text-anchor="middle">15</text>
                        </a><a xlink:href="#" id="PłockIcon">
                            <path
                                d="M 595 487 l 5-5-1-3 3 0 0-4-2-3-5 1-4-4 0-2-4 1-3-1-1-3-2-3 2-7-5-2 1-2-8-2-1-2-2-1 0-2-2 1-1-2-2 0-2 3 1 0-3 3-3-2-2 1 0 1-3 2-3 0-3-3-1 3-4 1-3-1 1-2-2 0 1-2-7-1-1-2-2 0-3-2 1-3-4-2-3 2-2 0 0-1-5 0-4-1 1-3-4-1 2-1-3-4 2-2 0-1-4-2 0-1 2-1 4 0 2-5 2 0 0-4 3-1-2-2-4 0-1-2 1 0 0 0 2 1 1-1-2-5 5-1 1-3 2-1 0-2-5-3 0-1 3-1 1-5 4 0-2-1 1-4 0-3 2-1 3 2 0 1 3 1-2-2-1-3 3-2-3 0 1-3-1-2-3-1 0-3-4-2 0-4 2 0 3-2-1-1 1-1 4 1-6-8 2-2-2-1-1-3 8 1 1-2 5-1-3-4 0-1 6 2 6 3 1-2-3-3 3-5-3-4-1 1-1-5 2 0-2-1-1-6 3 1 2-1 0-2 2 0 1-2 2-1 4-2 6 2 0-4-1-1 6-7 2 1-1 5 7 5 4-1 1 1 1-2 4 0 0-1 3-1 3 5 3-3 9 3 4 0 5-2 1-1-4-1 5-3 4-7 4-4 1 2 3 0 2 2 1-2 2 1 2-2 1 1 2-1 0-2 5 0 3-6 0-2 2 0 0-2 2 1 1 0 0-2 2 0 6 2 2 2 2-5 3 2 1-2 1 1 1-1-2-3 1-2 2-1 2 1 3-2 4 2 3 4 2 1 0 1 6 1 4 4 1 0-3 4-1 0 0 1 1 1-1 1 1 0 0 3 1 1-1 1 1 1-2 2 3 1-4 1 2 2-1 0 4 2 2 3-3 3-3-4-2 2-1-2 1 4-1-1-3 2 0 4-3 1-3 4-2 0 1 2-1 5 1 1 0 3 3 1 0 5-6 1 4 7-1 0-3 3-3-1 0 2-3-1 0-2-1 3-1 0 0 2-3-1 2 4 0 2 3 0 3 3 0 3-3 0 2 4-1 0-1 2-3-2-2 2-2 0 0 1-1-2-2 2-1 0 2 3-3-1 0 4-5 2 0 3-3 1 1 3-1 2 1 2 0 4 1-1 1 2-1 2-6 0 0 2-2 0-3 2 2 6-4 4 0 7-4-1-5 4 0 3 1 1-9 6 0 2 2 0 0 7-3 1-1 2 3 1 0 1-3-1 0 2-3 0 0 1-2 0-2 1 3 0 0 4 1 0-2 2 4 1 1 1 1-2 2 0 0 4 2 0 0-3 1-1 3 1 2 0 0 1-1 1 1 1 0 7-3-2-4-1 0 0-2 5 2 0-1 4 3 3-1 2 3 1-1 1 1 1-1 0 3 5-1 2 3 2 3-3 10 0 0 1-1 1-1 0 1 2 0 6 0 1-1 0-1 2 2 0 0 2 2 1 0 2 4 3-1 2-1 0 0 8-2 2-4-1 0-3-2-1 0-2-6-1-1 1-2-2 1-2-1-3-4-2-1 1-1-2-1 3-1 0-2-2-1 1 1 0-1 2-1 0 0 1-3 0-1 1-2 0 1-1 0-2-2-1-2 1-2 0-1-3 5-3-2 0-2-4 1-1-1-1-1 2-1-1 z">
                            </path>
                            <text x="595.5" y="393" dominant-baseline="middle" text-anchor="middle">16</text>
                        </a><a xlink:href="#" id="RadomIcon">
                            <path
                                d="M 761 606 l-2 1 2 4-2 2-2 5 1 1 0 5 1 2-1 3 2 7-2 1 1 1-2 2 1 1-3 1-2-1-2 1-4-6-2 1-1-1-3 1 2 1-1 1-1-1-2 2-1-1-4 2-1-2-3 1 1 1-2 1 2 1-3 0 0 1 2 0-2 1 1 1-3 1-3-2-6-2 1-3-3-1 0-3-21 1 0-7 1 0-2 0-2-2-4-2 3-6-1-1 0-1-4-2 1 5-2 4-3 0 0 1-3 1 0-2-8-6-4 7-3-3-3 0-1 2 1 1-1 2-2-1-1 1-1-1 0-1-5-2-2 3-2 0 2-7-1 0 0-2-6-2-3-4-3 1-1 2-2 0-1-4-1-1 1-2 0-1-4-1 1-1-1-1-1-1 2-1 1-1-1-2-8-2-1-3 1-1 2-8 0 1 3 0 1-3-1-2 5-4-2-7-2 1-4 0 0-6 1-3-1-3-2 0-1-3-1-1 1-1-1-4-4-1 1-1 0-2 1-2 4-2 0-1 1 1 2-2 2 2 2 0 1 3 1-1 6 2 3 0 0-2 3-1 1-8-2-2-6-2 1-3-1 0 1 0-2-4 1-3-3 0 0-1 6-1 0-1-2 0 0-2 1-1 2 1 2-2 0-8 1 0 1-2-1-1 1 0 0-1-3-1 0-1 4 0 0-2 3 1 4-1 0 1 1 0 4-2 1 2 2 0 1 2 5 0 1 2 0-2 2-1 2 2 0-1 2 1-1 1 1 0-1 1 2 1 5-4 0-1 2 1 4-2 4 1 3 0 1 1 2 0 1 2 1 0-1 3 1-1 2 1 1 1-1-1 1 0 1-1 7 9 7 3 6 6-2 6 3 4 0 3 3 6 7 0 5 6 7 4 1 3 9 3 3-2 5 2 0 4 3 4-1 4 3 2-3 9-1-2-3 0-2 3-2 0 0 2 1 1 2-1 2 4 3-1 2 4-1 0-2 2 1 2-2 5-3 1 0 1 3-1 1 2 1-2 3 3 z">
                            </path>
                            <text x="689.5" y="572" dominant-baseline="middle" text-anchor="middle">17</text>
                        </a><a xlink:href="#" id="SiedlceIcon">
                            <path
                                d="M 703 509 l 1 1 2-2-2-2 2-2 3 2 6-2 1 1 1-1 3-2 4 2 0-2-2-1 0-1-1 0-2-1 0 0 4-3-1-1-1-3 5-1-1-2 1-1 1-3 5-2 0-6-2 0-2-3-1 1-2-2 1-1 1 0-2-2 1-1-5 0 1-3-3-1-1 1-2-5-3 2-2-1 2-4-2 0-3-4 0 2-2-2-3 1-1-3 0 1-4 0 1-2-2 0 0-1 1-1 0-2 5-1-1-2 1 0 14 2 2-2-6-2 2-1-3-1 6-1 4 2-1-3 1-3 9-3-1-1 0 0-1-1 0 0 5 2-1-2 2 0-1-3 1 1 2-2 2 1 1 0-1-2 1-1 2 2 0-2 2-2-2-5-4-5 4 2 2-1 1 1 0-4-3-5-7 0-4-6-3-1-1 1-1 3 1 2 2 0 0 2-4-1-1 5-2 0-2 3 0-2-4 1-2 2-4-1 0-2-3-1 0-2-4 0-1-5-12 1-2 3-2-1 1-2-1 0-2 0 0-3 1-3-3 1-1 2-4 0 0 2-4-1 0 1-3 0-1-3-4 0-2-2 0-3-5-4 0-4-4 2-3-3-3 1-1 2-2 0 0 2-2 1 0-4-1-2 1-2-1-3 3-1 0-3 5-2 0-4 3 1-2-2 0-1 1 0 2-2 1 2 0-1 2 0 2-2 3 2 1-2 1 0-2-4 3 0 0-3-3-3-3 0 0-2-2-4 3 1 0-2 1 0 1-3 0 2 3 1 0-2 3 1 3-3 1 0-4-7 6-1 0-5-3-1 0-3-1-1 1-5-1-2 2 0 3-4 3-1 0-4 3-2 1 1-1-4 1 2 2-2 3 4 3-3-2-3-4-2 1 0-2-2 4-1-3-1 2-2-1-1 1-1-1-1 0-3-1 0 1-1-1-1 0-1 1 0 3-4-1 0-4-4-6-1 0-1-3-3 6-3 5-6 7-5 3-1 1 1 0 2 1-3 5 2 3-3 3 1 2-1 0-1 1 0-2-2 2 0-2-2 9-3 4-1 5 0-2 1 1 0 0 2 1 0 0 0-2 0 1 1 0 4 2 1 0 3 1 0 2 1 1 4-1 1 3 0-2 3 1 2-1 0 0 1 3-1 0 2 5 2-3 1-2-1 0 1-3-2 1 3-2 3 2 1-1 2-3 0 2 3 2 0 2 5 1 0-2 1 2 5 2 2-1 4 4 5 7-2 3 6 2 1 1 2 3 0 2-3 2 1-2 4 2 0 0 1-4-1 0 3-2 2 4 4 9 3-2 2 2 0 1 1 0 1 2 1-2 2-2 1 2 2-1 5 3-2 1 1-1 3 1 2 4 1 2-3 2 3 5-3 4 1-1-5 5 1 2-2 2 3-2 3 3-1 0 3-3 1 0-1-1-1 0 1-2 1 1 0 3 8 0 1 2-1 0 4 1 0 0 1 2 0 0 1 1 0 1-2-1-3 4-1 0-2 7 0 1 3-2 12 2 7 2 1-2 1 0 3-4 2 1 2 4 2 1 3 6 7-1 5 2 5 1-1 1 0 0 7 2 3 1 0 0 1 3-1 1 2 1-1 2 1 1-1 1 1 4-1 2 1 0 3 3-3 2 2 2-1 5 2 7-2 4 0 4 6 1-1 4 2 1 3 0 3 2 1 3-3 3 1-5 9-1 0-3 3 1 6 3 2-4-1-6 1 1 2-4 4 3 3-2 2-2-1 0 1-2-1-1 2-1 1 3 3-1 2-4 0 0-1-1 1-2-3-5 3-2-4-6-2 0-2-5 5 2 1 0 6-1 1-2 1-1 2-2-3-6 0 0-1-2 0-2-3-2 0-3 6-1 0-1 3-5 0-4 3-3-2 1-4-3 0-1 3-3 2-10-3-1 4-3 0-3 0-3-2-2 0-2 1-1 0-3 4-4 0-1 2-3 1 0-1-2 6 2 2 0 3 2 1 1 3-2 0 0 5-4 1-1 1 2 1 0 1 0 0 1-1 6 0 3 7-3 2-3 0 0 2-3 0-1 2-1 0-1 2 4 2 1 3 2 1-2 2 0 3-2-1 0 2-1-1-2 5-4-1-1 2-1-1-2 6-2-1-1-3 0 0-7-4-1 1 0 5-2 1-3-1-5-6-7 0-3-6 0-3-3-4 2-6-6-6-8-4 z">
                            </path>
                            <text x="763" y="399.5" dominant-baseline="middle" text-anchor="middle">18</text>
                        </a><a xlink:href="#" id="Warszawa IIcon">
                            <path
                                d="M 659 458 l 2-2 0-3 2 0 0-2-3-1 1-3 0-8 4-1 1-3-2-2 4-2 2-1 0 2 3-1 1 1 2-1 4-1 2 7-1 1 0 3 3 4 4-1 2-2 0 3 2 1-1 2 7-1 0 2-1 1 0 1 2 0-1 2 2 2-3 2 3 2-1 1 2 1-2 3 1 0-1 1-2-2-8 3-2 3 0 0-5 5-4-3-5 2-1-6-6-4-1-3-4 1 z">
                            </path>
                            <text x="680" y="458" dominant-baseline="middle" text-anchor="middle">19</text>
                        </a><a xlink:href="#" id="Warszawa IIIcon">
                            <path
                                d="M 643 498 l 0 2-4 0 0 1 3 1-1 1-3-2 0-2-2-1 0-2-2 0 1-2 1 0 0-1 0-6-1-2 1 0 1-1 0-1-10 0-3 3-3-2 1-2-3-5 1 0-1-1 1-1-3-1 1-2-3-3 1-4-2 0 2-5 0 0 4 1 3 2 0-7-1-1 1-1 0-1-2 0-3-1-1 1 0 3-2 0 0-4-2 0-1 2-1-1-4-1 2-2-1 0 0-4-3 0 2-1 2 0 0-1 3 0 0-2 3 1 0-1-3-1 1-2 3-1 0-7-3 0 1-2 9-6-1-1 0-3 5-4 4 1 0-7 4-4-2-6 3-2 2 0 0-2 6 0 1-2-1-2 4-4 3-1 3 3 4-2 0 4 5 4 0 3 2 2 4 0 1 3 3 0 0-1 4 1 0-2 4 0 1-2 3-1-1 3 0 3 2 0 1 0-1 2 2 1 2-3 12-1 1 5 4 0 0 2 3 1 0 2 4 1 2-2 4-1 0 2 2-3 2 0 1-5 4 1 0-2-2 0-1-2 1-3 1-1 3 1 4 6 7 0 3 5 0 4-1-1-2 1-4-1 4 4 2 5-2 2 0 2-2-2 0 3-1 0-2-1-2 2-1-1 1 3-2 0 1 2-5-2 2 2-9 3-1 3 1 3-4-2-6 1 3 1-2 1 6 2-2 2-14-2-1 0 1 2-12 2 1-2-2-1 0-3-2 2-4 1-3-4 0-3 1-1-2-7-4 1-2 1-1-1-3 1 0-2-2 1-3 2-1-3 0 3 2 3-1 2-4 1 0 8-1 3 3 1 0 2-2 0 0 3-2 1 0 3 2-1 0 2 4-1 1 3 6 4 1 6 5-1 0-1 4 3 5-5 0 0 2-3 8-3 2 2 1-1-1 0 2-3-2-1 1-1-3-2 3-2-2-2 4 0 0-1 1 3 3-1 2 2 0-2 3 4 2 0-2 4 2 1 3-2 2 5 1-1 3 1-1 3 5 0-1 1 2 2-1 0-1 1 2 2 1-1 2 3 2 0 0 6-5 2-1 3-1 1 1 2-5 1 1 3 1 1-2 1 0 1-2 1 3 1 0 1 2 1 0 2-4-2-3 2-1 1-1-1-6 2-3-2-2 2 2 2-2 2-5-5-1 1-1 0 1 1-1-1-2-1-1 1 1-3-1 0-1-2-2 0-1-1-3 0-4-1-4 2-2-1 0 1-5 4-2-1 1-1-1 0 1-1-2-1 0 1-2-2-2 1 0 2-1-2-5 0-1-2-2 0-1-2-4 2-1-1-4 1 z">
                            </path>
                            <text x="645" y="448" dominant-baseline="middle" text-anchor="middle">20</text>
                        </a><a xlink:href="#" id="OpoleIcon">
                            <path
                                d="M 330 787 l 1-1 11-2 1-4 4 0 1-5-4-3 0-3 3-4-2 0-1-3-4-1 0 4-4 4-4 1-2-2-3 2-7-1-4 0 0 2-2 1-1-4-2 1-3-2-1 1 0 2-2 0-1-3 1-1 1-3-2-1 1-2-7 1-3-2-5-5 1-4-2-1-5 2-1-2-2 0 0-2-6-1-5-3-3 1-6-5 3-2 2-4 1 0 1 2 4-1 0 3 3 0 2-2-1-4 2-2-1-4 3-4 3-7 7-1 5 1 1-1-2-4 1-3 0-3 3-2-4-2 0-2 3 0 1-4 1-1 2 2 1-1-1-1 1-1-3-3-2 0 2-2 2-1 6 1 1-1-1-2-3-3 3-1-2-3 6-2 0-2 1 0 0-2-4-2 2-4 3 1 1 1 2 0 1-4-1-5 3-2 1 1 3 0 1 1 1-2-3-1 5-1 0-1-2-2 2-5-2-3 7-3-2-2 1-3 0-3-3-2 0-2 5-2 1 0 0-2 1-2 1 3 5 2 1-1 2 1 1-2 3 0 1-2 3 1 2-2 1 1 2-1 1 1 1 3-2 5-2 0 1 3 6 2 1 1 3-2 2 1 10-3 4-2 0-4 3 2 2-2 4-1 0 1 2 2 8 0 5 4 6-1 1 1 4 1 0 1 3 1 1-1 2 4 1 1 3-3 0-5 3 0 1 2 2 7 3 0 3 3 3 1 3 7-4 2 1 2-1 3-4 1-1 2 2 4 2 0 1 2-4 10-3 0-3 3 0 4-6 1 2 1 0 3 1 0 2 3 3 1-1 2-2-2-1 4-3 0-1 2-3 2 3 2-2 1 0 1 2 1-1 1 3 1-2 3 1 0-1 3 1-1 7 3 2 1-1 5 1 1 1 0-1 3-3 0-2 1-8-2-4 1-1 3 2 5 2 0 0 3 2 2-1 2-3-1 0-2-1-1-3 1-3-1 1 8-3 1 0 1 4 5-3 1 2 2-2-1 0 2-2 1 4 3 1 2 0 0 1 1-2 1 2 4-2 2 4 1-1 3-7-1 1 1-5 1-1 2-4 2-2-1-1 2 0 2 1 1-7 1 0 1-2-1-2 1-1-1-2 3-1-2-3 2-2-1 1 1-1 1 1 1-2 3 2 1-1 2 2 1-4 7-3 2-1 3 1 1 2-1 2 0 0 5-4-1-1-1-2 2-3 0-4 5-3-1-2 1-4-4 1-1-1-1-5-2-1-4-1-2-1-3-2-2 0-1-3-4-2 0 0 3-3-2-1-3-2-1 z">
                            </path>
                            <text x="353" y="719.5" dominant-baseline="middle" text-anchor="middle">21</text>
                        </a><a xlink:href="#" id="KrosnoIcon">
                            <path
                                d="M 862 874 l-1 4-4 3 1 3 6 3 6 21 0 7 0 11-2 1-1 3 4 1-2 1-2 6 1 1 2-3 2 0-2 4 4 1 2-1 0 3 3 1-1 1 3 2 3 0 0 2 3 1-2 5 1 2-1 2 1 0 0 1 2 2 0 2-3 1-2-1-1-3-3 0 0-1-4-3-1 0-1 2-4-2-4 3-3-2-3-5-2 0-1-2-2 0-2 2-2-1-4 1-5-2-4 0-3-3-2-4-4 0-2 2-7-2-3 0 1-3-1-3-4 2-5-2 0-2-10-2-2-1 1-5-1-1 0-3-5-5-2-5-4 0-1-1-2 0-3-3-2 1-2-4-4 2-1 2 0 2-1 0-2-4-4-3 0-2-7 0-3-5-5 2-2-1-1 1-3 0-1 3-2-2-2 3-6-1-3-3 0-3 2-2-3-3 4-1-1-1-2-2-2-4-2-1 2-4-6-4 4-6-3-4 1-1-1-1 1-1 0-2 0-1 0 0-3-1 1-3-2-1 0-4-3-1-3 1-1-4 0-3 2 0 1-2 4 2 3-3-5-5-1-2 2 0 0 2 4 1 0-5 2-1 2 2 1 2 1-1-1 1 1 3 4 0 0-2 4 0 7 2 2 6 6-2 1 2-1-2 2-2-2-2 4-3 9 8 3-2 4 3 2-2 8 2 2-2 2-3 1-2 6 2-1-2 1-3 3 2 5-2 3 5 4 4 1 0 4-3 2 1 1 0-1 2 0 2 2-1 5 4 2-1 2 0 1-3-5-5 3-2-2-2 0-7-5-1-2-4 0-1-1-1 0-3 7 0-1-3 2 1-1-2 1-3-1 0 0-2 0-1 4-3 1-2-2-5 1 3 0-3 3 0 0-3 0-4 4 1-1-2 2-2 2 1 1-3 2 0 1-1 4 0-1-1 2-1-2-1 0-2 3-3-2-2 0-2 2 0 1-1-1-2 2-2 1 2 2 0-3-5 1-4 3 1 2-6 7 2 5-2 10 1 4-1 14 1 15-18 4 1 4 3 0 1 10-7 0-2 3 1-2 2 2 1 0 3 2 0 1 2 3 1-3 8 1-2 4 1 2 1 3-1 2 1-2 1 1 2 0 2 2 0 2 2-7 6-4 5-5 4-7 9-3 2 0 2-4 5-2 1 0 3-10 13-1 2-10 17-3 1-1 4 1 1-3 2-4 4 0 3-2 2-3 5-2 3-2 0-2 3 0 3 z">
                            </path>
                            <text x="827.5" y="870" dominant-baseline="middle" text-anchor="middle">22</text>
                        </a><a xlink:href="#" id="RzeszówIcon">
                            <path
                                d="M 790 834 l-1 3 1 2-6-2-1 2-2 4-4 1-6-2-2 2-4-3-3 2-9-8-4 3 2 2-2 2-5 2-1 0-2-6-7-2-4 0 0 2-4 0-1-3 1-1-1 1-1-2-2-2-2 1 1 2-1 3-4-1 0-2-2 0 1 2-5 0-3-1 0-5 6-2 0-5-3-1-8 1-3-8 0-4 3-2 1-2-5-4 2-2 2-2-2-2 3-1-2-3 2-1-5-2 3-2-3 0 2-5 0-5-3-5 4 0-4-3 3-4 1-3 4-2-2-7 2-3 2-1 1-2 2 0 0-3 9-5 4 0 4-3 1-2-1-3 1-1 3-1 7-4 5 0 5-8 1-6 5-6 2 0 1-2 3 1 0-2 2-3-1 0 3-2 1-2 1-6 0-3 2-7 2 1-1 2 8 1 2-3 2 1 6-6 11 3 0 4 3 1 2 2-3 8 0 3-3 3 9 1 3 6 4 0 1 1 5 0 7 5 5-2 0 1 3 1-1 0 2-1 0 1 2-1 1 2 1 3-2 1 0 1-1 0 2 0 0 4 1 1 3 0 1 1-3 3-4 0 1 1 1 0 0 0 4-1 2 0 0 1-3 2 1 1-1-1-2 3-1-3-2 0 0 2-4-1 0-1-2 1 1 4-1 1 0 2-3-1-1 5 3-1 0 1 2 1 0 3 3 2 3 0 0 2 2-2 4-1 3 1 4-1 6 0 0 2-9 3 1 2 3 1 0 2-1 0 1 2-2 2-3-1-1 2 0 2 3 5-2 0-1-2-2 2 1 2-1 1-2 0 0 2 2 2-3 3 0 2 2 1-2 1 1 1-4 0 0 1-3 0-1 3-2-1-2 2 1 2-4-1 0 3 0 4-3 0 0 3-1-3 2 5-1 2-4 3 0 1 0 2 1 0-1 3 1 2-2-1 1 3-2 0-1 1-1-1-3 0 0 3 1 1 0 1 3 5 4 0 0 7 2 2-3 2 5 5-1 3-2 0-2 1-5-4-2 1 0-2 1-2-1 0-2-1-4 3-1 0-4-4-3-5-4 2 z">
                            </path>
                            <text x="776.5" y="762" dominant-baseline="middle" text-anchor="middle">23</text>
                        </a><a xlink:href="#" id="BiałystokIcon">
                            <path
                                d="M 954 330 l 1 1 1 11 2 3 1 16-4 6-2 0-13 12-2-1-7 2-10 5-7 5-10 14-16 31-2 0-5-2-3 3-2-1 0-3-1-3-4-2-1 1-4-6-4 0-7 2-5-2-3 1-1-2-3 3 0-3-2-1-4 1-1-1-1 1-2-1-1 1-1-2-3 1-4-5 1-6-2 1-2-4 1-6-6-7-1-3-4-2-1-2 4-2 0-3 2-1-2-1-2-7 2-12-1-3-7 0 0 2-4 1 1 3-1 2-1-1-2 0 0-1-1 0 0-1 1-2-1-1-2 1 0-1-3-8-1 0 2-1 0-1 1 1 0 1 3-1 0-3-3 1 2-3-2-3-2 2-5-1 1 5-4-1-5 3-2-3-2 3-4-1-1-2 1-3-1-1-3 2 1-5-2-1 0-1 4-3-2-1 0-1-1-1-2 0 2-2-9-3-4-4 2-2 0-3 4 1 0-1-2 0 2-4-2-1-2 3-3 0-1-2-2-1-3-6-7 2-4-5 1-4-2-2-2-5 2-1-1 0-2-5-2 0-2-3 3 0 1-2-2-1 2-3-1-3 3 2 0-1 2 1 3-1-5-2 0-2-3 1 0-1 1 0-1-2 2-3-3 0 1-1-1-4-2-1-1 0 0-3-2-1 0-4-1-1 2 0-2-1 0-2 5 0 4-2 9 1 8 4 3-2 0-4 3-3 2 0 4-2 3 4 3-5 5-2 8-5 8-9 4-2 3-4 4-2 2-2 1 0 1 2 3 0-1-5 5 0 6-7 0 2 2 1 2-7 1 2 6-4 2-6 0-4 5-6-1-8-8-9-3-9-7-3 0-5 3-2 0-2-2-2-3-5-1 2-3 0-1-3-2 0-2-4 1-1-3-1 2-2-1-1 3 0 1-5 3 0 1-2 0-1 3 0 3-4 5 2 5-4 2 1 2-2 0-4-2 0 3-2-1-4 1-1 2-6 5-1 0 2 12 2-2 3 7 3-2 4 5 3 5-3 2 1-1 2 5 1 3 4 10 1 2 3 3 1 4 7 3 1 3 3 1 6 4 8 0 5-2 5-2 1 1 4 3 2 0 7 1 9 3 1 1 14 3 3 1 8 9 28 16 39 2 4 4 2 1 6 4 3 2 2-4 13 5 7-1 1 2 1 1 7 2 3-3 4 z">
                            </path>
                            <text x="842" y="265" dominant-baseline="middle" text-anchor="middle">24</text>
                        </a><a xlink:href="#" id="GdańskIcon">
                            <path
                                d="M 451 228 l 5-10-3 0-1 3-1-1-2 1-2-1 0-2-2 2-3-1-2 3-2 1-3-1-1 1 2 2-3 1-1-2-2-1 1-1-2-1 1-1-1-2-4 0-1 2 0-1-10 1-9-2-1-2 3-1-1-1 0-3-5 1 0-2-2 2 0-3-2 0 0 2 0 0 0 0-2-2 0-2-2 0-2 2 0-2-4-2 1-3 4-4-6-4 2 0-1-4 1-3 3 0 0-1 2 2 1-1-4-5 4-2 0-2 2-2 4 1-1 2 2 0 3-1 1-2 2 1 4-4 3 1-2-5-3 2-2-1 2-2-1 0 1-2-1-1 3-1 1-2 2 0 1-2-2-1 1-1-1-1 1 0-2 0 2-5-3 0 1-4-1-2-4 0-1-2-4-1 1-3-2-2 4-6 5-2 2-3 3 1 4-3 1 0 0 1 2-1 2-3 0-2 2 1 2-1-1-3-2-1 1-2-3-2 1-3-2-1 3-2 0-2-2 0 2-4-2-1 1 0 1-1 2 2 1 0-1 1 2 1 1-3-1-1 2-2 4-1 3 6 4 3 2 0 0-1 4 5 1-1 0 2 1 1 5 0 9 4 5 0 2-3 0 3 0-2 3 2 5 1 20-2 13-4 13-5 11-8 1 1-2 10-20 11-12 4-3 3 0 2 4 3 3 8-1 1-3 1-4 3 1 3-4 5 4 5-3 3 5 2 0 2-2 1 1 3 2 1 0-2 3 0 4 3 5 1-4 2-1 4 1 4 3 1 1 1 7-3 9-1 0 4-2 0 0 4-5 7 1 2-4 4 2 2-2 4 1 0 0 1-2-1-1-2-8-3-4 0-2 2 1 2-2 2 0 5-8 9 1 3-1 0 0 5-1 1-2-1-5 5 0 4-4-2-6 1-3-1-2 2-5-1-1 2 0-2-2-1-12-1 0-1 0 1 z">
                            </path>
                            <text x="461.5" y="166.5" dominant-baseline="middle" text-anchor="middle">25</text>
                        </a><a xlink:href="#" id="GdyniaIcon">
                            <path
                                d="M 271 208 l 7-5 2-4-3 1-1-4-3-1 0-3-1-1 1-3 2 0 0-1 6 1-1-1 3 0 1-4-3-1-9-6 2-1 0-4-3-1 0-3-2 1 0-2-1 0 0 2-1 0 1 2-2 0 1-3-1-2 0 0 0 0 1 0 0 0 0 0-1 0-1-2 2-2 0-3 1-1 0-2-2-1 2-6-3-1 0-5-1 0-1-3-2-1 1-4-2 0-1-2 3-3 9-2 3-2-1-8-3-1 1-5-2-4 3 0 2-2-3-5 2-4-3-7-4-1-2-5 0-2-4-6 6 0 8-3 5 0 6-4 9-8 20-10 37-7 1 1-1-1 22-7 16-1 25 1 9 7 24 15 12 11 1 3-2 3-11-17-4-1-3-3-18-11-3 9 2 1 5 5 0 10 4-1 0 5 3 4 2 5 0 6-2 0 2 5 0 3-4 1-2 2 1 1-1 3-2-1 1-1-1 0-2-2-1 1-1 0 2 1-2 4 2 0 0 2-3 2 2 1-1 3 3 2-1 2 2 2 1 2-2 1-2-1 0 2-2 2 0 1-2 1 0-1-1 0-4 3-3-1-2 3-5 2-4 6 2 2-1 3 4 1 1 2 4 0 1 2-1 4 3 0-2 5 2 0-1 0 1 1-1 1 2 1-1 2-2 0-1 2-3 1 1 1-1 1 0 0 0 0 0 1 1 0-2 2 2 1 3-2 2 5-3-1-4 4-2-1-1 2-3 1-2 0 1-2-4-1-2 2 0 2-4 2 4 5 0 1-3-2 0 1-3 0-1 3 1 4-2 0 4 3-1-1 2 1 1 0 0 1-5 4 0 4-3 7-5 1-2-2-1 0-1-2-1 1-1-1-2 0-3-2-1 2 1 0 3 4-1 1 0 1-2 0-2 4-3-1-2 2-3-3-1 0 0 2-2 1-1 5-2 2 1 3-1 1 2-1 0 4-4 0-2-2-1 2 2 1-1 2-6-4-3 3-3-1-3-6-3 3-3 0-3 2-1 4 1 4-1 1-2 6 0-1-5 1-1-3-2 0 0-3-1 1-2-2-3 1-6-1-2 1-7-3-3 4-5 0-1-2 1-1 0-2-2-1-3 2-1-7-4-6-1-16 z">
                            </path>
                            <text x="350" y="142.5" dominant-baseline="middle" text-anchor="middle">26</text>
                        </a><a xlink:href="#" id="Bielsko-BiałaIcon">
                            <path
                                d="M 509 850 l 3 1 2-1 3 3 2-2 2 2 1 4-2 1 0 2-3 1 0 2-3 1 5 3 3-1 2 0 2 3-1 3 1 3-1 2-3 0 0 2-3 1-1 3-4 1 0 5-11 1-3 3 1 2-2 5 1 0-1 2-2 1-2 3 1 3-2 0-2 2-2-1-2 1-5-3 0 1-2 0-1 2-1 1-6 0-1-3 3-3-3-4 1-8-3-2-5 1-6-2 2-2 0-2-2-2-1-4 1-1-2-1-2-8 1-4-3-2-4 2-3-2-1-3-4 0 0-1-2 1-2-3 0-4-2-1-4-12 2-3-1-1 3-1-4-2-1-2 2-3-1-1 7 2-2-2 1-2 4 1 2-5 0-2-5 0 2-2 1-6 3 1 1-2 1 0 2 1-1 2 5 0 0-3-2-2 0-4 5-2 0 2 6-1 0-2-1 0 0-1 2-4 2 2 1-1 3 2 11 0 1 4-1 2 2 1 0 2 0-1 1 0-1 3 10-4-1 3-2 2 0 1 0 0-1 0 1 3 0 0-1 2 1 0 1 1-4 1-1 2 2-1 1 2 3 0 5-2 0 3 1 8-4 3 1 2 3-1 0-1 1-1 2 1 5 1 2 2 0 5 z">
                            </path>
                            <text x="478" y="855" dominant-baseline="middle" text-anchor="middle">27</text>
                        </a><a xlink:href="#" id="CzęstochowaIcon">
                            <path
                                d="M 539 708 l 1 4-2 1 1 1-2 1-4-1-2 2-2-1 0-1 0 1-2 2-2 0 1 2-2 1-3 0-2-2-1 2-3 0-1 1 2 0-2 3 2 2-1 1 1 3-1 1-2 0 0 1-2 1-3-2 0-1-5-2-3 3-6-2-10 4 1-2-4 4-1-4-2-2 2-1-2-1 1-3-3 0 0-2-4 0 0-1-1 0-1 1-7-2-3-5-3 6 4 1 1 1-3 4-1-3-5-2-1-2-4-1-2 1-3 0-17-6 0-3-1 0 2-3-3-1 1-1-2-1 0-1 2-1-3-2 3-2 1-2 3 0 1-4 2 2 1-2-3-1-2-3-1 0 0-3-2 0 6-2 0-4 3-3 3 0 1-3 3-7-1-2-2 0-2-4 1-2 4-1 1-3-1-2 4-2-3-7 4-1 10 0-1-1 2 0 0 0 4-1 4 3 3-7 9 6 1 2 3 2-1 2 1 1 2-2 2 0 3 6 1 0 0-2 2 0-1 1 2 0 0 1 4 2 4-1 1-2 1 0-2-3 1-3 1 1 3-2 3 0 1 1-1 2 1 2 3 2 0 2 4-2 1 3 0 1 3 2 0 4 3 2 1 7 1 1 2-1 1 0 1-2 5-2 1 0 3 5 5 0 0 4 2 1 5 0 1-1 1-2 7 4 2 3-2 0 1 2-2 1-2-3-1 2 1-1-1 3 2 2-3 1 0 1-3 3 0-3-1 0-1 2-1-1 2 7-1 1 0 0 3 5 3 1 1 3-4 0-1 4-2-1-2-3 2-3-1-2-1-1-3 7 z">
                            </path>
                            <text x="491.5" y="686" dominant-baseline="middle" text-anchor="middle">28</text>
                        </a><a xlink:href="#" id="GliwiceIcon">
                            <path
                                d="M 461 761 l-3 2 0 2 2 1-3 2 0 2-2 0-1 5 2 3-2 2 1 2-3 1-3-2-3 1 0 3-1 0-1 1-1 0 0 0 0 0 0 0 0 1-4-2 0-1-2 3-1-1-3 1-4-3-4 2-2-1 1-1-3-2 1-1-2 0 1-3-1 0-1-4-3 0 1-3-4-1 2-2-2-4 2-1 0-1-1 0-1-2-4-3 2-1 0-2 2 1-2-2 3-1-4-5 0-1 3-1-1-8 3 1 3-1 1 1 0 2 3 1 1-2-2-2 0-3-1 0-1 0 0 0 0 0-2-5 1-2 4-2 8 2 2-1 3 0 1-3-1 0-1-1 1-5 8 3 3 0 2-1 5 1 0 2 5 2 1 3 3-4-5-2 0-1 3-5 3 5 7 2 1-1 1 0 0 1 4 0 0 2 3 0-1 3 2 1-2 1 0 0 2 2 1 4 8-5 0 3-1 1 0 3-2 0 0 3-3 1-1 2 0-1-4-1-1 4-2 0-2 3-3-1-3 0 0 8 5 2-2 6 z">
                            </path>
                            <text x="449" y="751" dominant-baseline="middle" text-anchor="middle">29</text>
                        </a><a xlink:href="#" id="RybnikIcon">
                            <path
                                d="M 442 814 l-1-1-1 6-2 2 5 0-1 6-1 1-4-1-1 2 1 2-5-2-1-2-1 1-2-2 1 3-2 2-4-1-3-3-3-1 0-2-7 0-4-2 2 3-1 1-1-1-1 3-4-4-1-4-6-1-1-5-3 0-2 3-2-3-2 1-2-3 1-2-2-1 0-2-2-1-1-2-2-1 4-7-2-1 1-2-2-1 2-3-1-1 1-1-1-1 2 1 3-2 1 2 2-3 1 1 2-1 2 1 0-1 7-1-1-1 0-2 1-2 2 1 4-2 1-2 5-1-1-1 9 1 2 4 1 0-1 3 2 0-1 1 3 2-1 1 2 1 4-2 4 3 3-1 1 1 2-3 0 1 4 2 0-1 1 0 1-1 1 0-1-2 2 0 1-2 1 0 3 2 3-2-1-1 2-2-2-2 2-2 2 3 1 0 0 2 1-1 2 3 5-2 3 9-1 1 0 3-1 1 1 2 2 0-2 6-4-2-1 1-1-2-1 0-2 4 0 1 1 0 0 2-6 1 0-2-5 2 0 4 2 2 0 3-5 0 1-2-2-1-1 0-1 2 z">
                            </path>
                            <text x="423.5" y="802" dominant-baseline="middle" text-anchor="middle">30</text>
                        </a><a xlink:href="#" id="KatowiceIcon">
                            <path
                                d="M 479 807 l 1-2-1-4-10 0 2-6-2 0-1-2 1-4 1-1-2-3 1-1-2-5-4 1 1 0-2 1-2-3-1 1 0 0 0-2-1 0-1-2-3 0 1-5 2 0 0-2 3-1-2-2 0-2 2-1 0-1 4 0 4 2 2 0 0-1 1 0 1-5-5-2 0-8 1 0 5 1 1 3-1 2-2 0 1 1 10 5-2 7 3 1 0 2 3 0 3 3 4 8 7 7 2 5-4 10 1 1 1 1-1 0-1 1 0-1-4 1-1 0-1 1-1 0 0 2-10 4 1-3-1 1 0-2 z">
                            </path>
                            <text x="478" y="779.5" dominant-baseline="middle" text-anchor="middle">31</text>
                        </a><a xlink:href="#" id="SosnowiecIcon">
                            <path
                                d="M 509 773 l 8 4 4 1-2 2 0 2-1-1-4 2-4 1 2 2 2-1 0 2-2 0 0 3-2 1-6 0 0 4-2 1 1-3-2-4-9-9-2-7-4-4-3 0 0-2-3-1 2-7-11-5 1-1 1-1-1-4 2-1 1-2 2 0 1-4 4 1 0 1 1-2 2 0 1-2 0-2 2 0 0-3 1-1 0-3 2-1 3 0 6 2 3-3 4 1 0 2 1-1 0 1 3 2 2-1 0-1 2 0 1-1-1-3 1-1-2-2 2-3-2 0 1-1 3 0 1-2 4 3 3-2-1-2 3-1 1-2 0 1 2 1 2-2 4 1 2-1-1-1 2-1-1-4 5 1 3-7 1 1 1 2-1 2 0 3 3 2 1-4 3 0 1-2-6-4-1-5 4 2 2-1 3 1 1-2-1 3 4 0 1 3 2-1 0 2-1 1 0 2-3-1 1 2-1 1 5 1 1 1 3 0-2 4-4-1-1 0-1 5-3 3-2 0 0 3 5 0 1 2 5 0 1 4 3 2 1 0 3 4-8 1-1 1 1 2-5 1 0 2-3 0-2-1-9 0-1-1-1 2-3 2 1 1-2 1 0 1-3-1-2 1-1-1-3 1 1-1-3 0 0-1-3 0-3 3 0 5-3-1 0 1 3 3-1 4-3 1-3-2-2 3 1 2-1 0-1 2-1 2-2 1 1 0-1 2-1-2 z">
                            </path>
                            <text x="523.5" y="740" dominant-baseline="middle" text-anchor="middle">32</text>
                        </a><a xlink:href="#" id="KielceIcon">
                            <path
                                d="M 609 761 l 2-2-2-2 2 0 3-2-3-1 1-3-2 0-2-5-2-2 0-6-1 0-1-2-2 1-2-3-5 2-3-1-2 1-3-1 1-1-2-2-2-1 0 1-3 1 0-1-4-2-2 0-1 2-2 1-3-2-1-4-5 0-1-2-5 0 0-3 1 1 1-1 3-3 1-5 5 1 2-4-3 0-2-1-4-1 1-1-1-2 3 1 0-2 1-1 0-2-2 1-1-3-4 0 1-3-1 2-3-1-2 1-4-2 0-1-1-3 0-2 1 1 1-2 1 3 3-3 0-1 3-1-2-2 1-2 0 0 0-1-1 1 1-2 1 0 0 1 1 2 0 0 0 0 1 0 0 0 1-1-1-2 2 0-3-4-6-3 4-4 0-3 5-2 1-2-2-6 3-6 2-7 1 0 1 3 4 1 0 2 1 0 1 1 0 2 6 5 2-2 0-4 1-2 0-7 1-1-1 0 0-1-7-1 1-4-1-6 2 0-1-1 4-4-4-3 2-2 4-1 0 2 1-1 9 1 1-1 2 0 0-2 2 1 0 1 1-1 1-1 0 1 1 0 1-1 1 0 2-2-2 0 1-3-2-1 0-2 2 0 1 2 4 0 2-2 4 3 1-1 0-3 1-2-3-6 5-1 2-4 3 2 5 0 1 2-1 1-2 1 1 1 1 1-1 1 4 1 0 1-1 2 1 1 1 4 2 0 1-2 3-1 3 4 6 2 1 4-2 2 0 3 2 0 2-3 5 2 0 1 1 1 1-1 2 1 1-2-1-1 1-2 3 0 3 3 4-7 8 6 0 2 3-1 0-1 3 0 2-4-1-5 4 2 0 1 1 1-3 6 4 2 2 2 2 0-1 0 0 7 21-1 0 3 3 1-1 3 6 2 3 2 3-1-1-1 2-1-2 0 0-1 3 0-2-1 2-1-1-1 3-1 1 2 4-2 1 1 2-2 1 1 1-1-2-1 3-1 1 1 2-1 3 5 2 1 1-1 2 1 3-1-1-1 2-2-1-1 2-1 2 3 1 2-3 2 3 7-1 9 4 11 0 4 2 3 0 5-2 5 0 3-2 8-3 2 1 0-2 3 0 2-3-1-1 2-2 0-5 6-1 5-5 9-5 0-7 4-4 1 0 1 1 4-5 4-4 0-9 5 0 3-2 0-4 6-3 1 0 3-2 0-2-4-2 0-2 3-2 0-3 4-11 0-2 3-4-1-2 2-2 0-2 3-3-2-2 0-1 3-5 3 0 3-2 1 0 2-2 0-1 2-4-1 0 1 0-1-1 1 0 0-4 0-1 3-2-3-5 3-5-2 1 1-2-1 0 1-2-1-2 1-1-3-2 1-1-2 0-2 2-2-2 0-3-3-2-1 3-2 0-1-2 0 0-2 1 0-2-1 0-2 z">
                            </path>
                            <text x="658" y="690" dominant-baseline="middle" text-anchor="middle">33</text>
                        </a><a xlink:href="#" id="ElblągIcon">
                            <path
                                d="M 542 290 l 2-3 2 0-1-1 1-1-2-1 1-2-3 0 0-5-5-2-5 3-6 0 1-4-1-3-4 2 0-2-1 0-1 2-3 0 2-2-3-1-1-2-1 0-1 1 0-4-2 0-3 1-3-1-1 4-3-2-3-3 2-2-1-2 0-2-2 0 1-2-1-4-3-3 3-3-1-3-2 0 1-4-3-1-4-1 0-4 5-5 2 1 1-1 0-5 1 0-1-3 8-9 0-5 2-2-1-1 1-3 5 0 8 3 1 2 2 1-1-1 2-4-2-2 4-4 0-2 4-7 0-4 2 0 0-4-9 1-7 3-1-1-3-1-1-4 2-4 3-2-5-1-4-3-3 0-1 2-2-4 2-1 0-2-5-2 3-3-4-5 4-5-1-3 4-3 3-1 1-1-3-8-4-3 0-2 3-3 12-4 20-11 2-10 64 7 24 4 4 1 2-1 9 1 45 4-1 1 1 2-2 1 0 1-3 1 0 4 2 0-1 2-4 1-3-5-1 5-3 0-3 5 3 2 0 3-1 0 0 3-1 0-1 8 3 0 6 6-4 1 2 3-2 2 1 2-2 0 0 1 0 0-1-3 1 0-1-1-1 0-4 5-5-4-2 4-4-2-1 1-1-1-1 3-2 0-4-2-1-6-2 0 0 3-1-1-2 2 0 4-5 3-2-1-1 3-8-2-2-2-1 2-2 0 0-3-3 0 0-6-3 0 0-2-2-1 1 0-6-3-1 4-1 0 0 2 1 0 2 3-5 1-1 2-3 3 1 1-2 1 1 2-5 1-1-3-5 2 5 5-2 0-4-1-1 2-1 0 1 1-2 2-1 5 3 3 4 0-1 3-4 2 0 3 1 1 0 4 5 4-1 1-2-2 0 3-4 0 0 2 1 0 0 2 3-1 2 2-3 0-1 3-1-1-1 2 0 1 3 0-1 6 2 1-1 4-2 0-1 2 6 10 0 2 3 2 1 3 3-2-1 1 0 2-1 1 3 0 2 2-2 2-6 4 1 2-1 0 1 2 3 2-1 0 1 1-1-1 0 1-1 0 0 1 0 1-1 1-2-1 2 1 0 6-1 4 2 2 0 1 2 1 3 3-1 4 0 4 3 0 3 2 3-2-1 2 1 0 0 1 5-3 1 2 1 2-3 5-5 3 4 1-1 1-9 2-9-3-1 2-2 1-3-5-3 1 0 1-4 0-1 2-1-1-4 1-7-5 1-5-2-1-6 7 1 1 0 4-6-2-2 0-2-8 2-1-1-3-6-1 0-3 z">
                            </path>
                            <text x="556.5" y="202.5" dominant-baseline="middle" text-anchor="middle">34</text>
                        </a><a xlink:href="#" id="OlsztynIcon">
                            <path
                                d="M 590 277 l 1-4 0-6 2-4 1 1-1-1 1 0-3-2-1-2 1 0-1-2 3-3 1 0 1 0 0-1 3-2-2-2-3 0 1-1 0-2 1-1-3 2-1-3-3-2 0-2-6-10 1-2 2 0 1-4-2-1 1-6-3 0 0-1 1-2 1 1 1-3 3 0-2-2-3 1 0-2-1 0 0-2 4 0 0-3 2 2 1-1-5-4 0-4-1-1 0-3 4-2 1-3-4 0-3-2 0-3 1-3 2-2-1-1 0-1 1 1 1-2 4 1 2 0-5-5 5-2 1 3 5-1-1-2 2-1-1-1 3-3 1-2 5-1-2-3-1 0 0-2 1 0 0-3 1-1 6 2-1 1 2 1 0 2 3 0 0 6 3 0 0 3 2 0 1-2 2 2 8 2 1-3 2 1 5-3 0-4 2-2 1 1 0-3 2 0 1 6 4 2 2 0 1-3 1 1 1-1 4 2 2-4 5 4 4-5 1 0 1 1-1 0 1 3 0 0 0-1 2 1-1-3 2-2-2-3 4-1-6-6-3 0 1-8 1 0 0-3 1 0 0-3-3-2 3-5 3 0 1-5 3 5 4-1 1-2-2 0 0-4 3-1 0-1 2-1-1-2 1-1 5 1 3-1 7 0 5 1 1 1 8-2 59-4 6-1 9 0 45-6 1 2-3 4 2 0 0 4-1 1-1 1-2-1-5 4-5-2-3 4-3 0 0 1-1 1-3 1-1 5-1-1-3 3 1 2 2 0-1 1 2 4 2 0 1 3 3 0 1-2 3 5 2 2 0 2-3 2 0 5 7 3 3 9 2 4 3 0 3 4 0 4 1 2 0 3-5 6 0 4-2 7-6 3-1-2-2 7-2-1 0-2-6 7-5 0 1 5-3 0-1-2-1 0-2 2-4 2-3 4-4 2-8 9-8 5-5 2-2 5-1 0-1-3-2-1-4 2-3 1-3 7-4 0-6-3-9-1-4 2-8 0-13 4 2 2-2 0 2 1-1 1 0 1-3 1-2-1-3 3-5-2 0 3-2-3-3 1-7 5-5 6-6 4-2-3-4-2-3 2-3-1-2 3 2 3-1 1-1-1-1 2-3-2 0 2-2 1 0 2-2-2-6-2-2 0 0 2-1 0-2-1 0 2-2 0 0 2-3 6-5 0 0 2-2 1-1-1-2 2-2-1-1 2-2-2-3 0-1-2-5 5-2-3-5 3 0-1-1 0 1-2-3 2-3-2-3 0 0-4 1-4 z">
                            </path>
                            <text x="708.5" y="198.5" dominant-baseline="middle" text-anchor="middle">35</text>
                        </a><a xlink:href="#" id="KaliszIcon">
                            <path
                                d="M 239 542 l 0-2 3-1 0-2 1 1 1-1-4-4-1-1 2-2-7-1-1-3-3 0 0-3-15-1 1-8-2 0 1-2-5-4 2-1-4-1-3-3-1 1-2-1-4 5-2 0 0-3-2 1-1-2-7-1 1-1 3-2-1 0 2-2-1-1 7-1 8 3 1-3 3-2-1-2 2-2 2 1 2-2 2-1 0 2-2-1 0 1 6 2 0-3 1 0 1-2 2 0-2-4 2-2-2-2 2 0-1-2 1-2 6-2 0-3 1 0 4 0 1-7 5-3-1-2 3-1 2-2 4 3 3-4 4 2-1 3 3 2 0 1-1 4 3 4 4 0-1 3 3 0 0 1-1 0 0 5 4-1 1 1-4 7 2 1 4 0 4 3 0 1 1 2 3 1 1 1-1 0 2 1-2 2 2 2 6 2 2-1-1-3 4-3 1 1 3-3 12 0 0-4 2-2 7 1 2-1 3-2 1-1 2-1-2-4 5-3-1-4 2-2 0-2 5 0 0 2 0-2 7 0 2 1-1 6 3 5 0 1 0 0 1 0 0-1 5-2 2 1 5-2 0 2 3 1 1-2 7-1 1 2 2 0 1 5-4 7 4 1 7 3 6 1 1-2 4 0 1-3 2 1 1-3 1 1 2-2 0-2 3-1 2 2-3 4 5 4 2 6-2 0 3 1 0 2 2 3 6-1 1 7 5 0 1 2-2 3 1 3-3-1 0 5-2 1 1-2-1 2-1 0 2 4-2 3-1-1 2 3 0 1-2 1 1 3-2 0 0 1-4 4 0 2 3 1-2 3-1 0-1 1 2 2-2 2 3 1-1 5 1 3-2 2 2 3 1 6-4 1 1 3-3 6-12-6 1 1-3 1 2 3 0 3-2 3-4-1-2 5-3 0-2-4 2 4-3 2 2 1 0 2 2 3 0 3 1 1-2 0 1 1-1 2 1 1 2-2 1 1 1 0 0-1 2 1-1 4 2 3-2 3 0 2 1 0-1 3-4 1-2 2-3-2 0 4-4 2-15 4-1-1-6-2-1-2 2-1 2-7-2-2-2 1-3-1-3-7 0-5-1-1 3-4-1-1 2 0-2-1 1-1-2-2 0-2-4-4 2-3 1 0 0-1 2-1 0-2-4-2 1 3-2 1-3-3-2 1-1-2-3 0-1 2-3 1-3-3 1-2-3-5 1-1-2-3 1-1-1-2 1-1 3 0 2-2 0-6-1-1 0-2-4-1 0-3-2-1-6-3-3 0-8-3-7 1-1 0-1 2-2 0-1 10-2-2-7 2-1-2-5 2 1 2-1 1-2-2-2 0-4 1-1 1-2-1-2 0-4-5-6 1-4-3 1-2-3-2 0-2 2-2-11-1 1-2-4 0 z">
                            </path>
                            <text x="305" y="525" dominant-baseline="middle" text-anchor="middle">36</text>
                        </a><a xlink:href="#" id="KoninIcon">
                            <path
                                d="M 442 424 l 1 0 2-1-1 5 4 0 1 4 2 2 1 5 5-3 2 1 5-3 1 0 2-1 0-2 2 0-1-3 3 3 2 1 1 2-2 0 1 1 3 0 0 3 4 1 0 2-1 0 1 4-1 4 6 0 1 4-2 1-1 2 1 3-1 1-2-2-3 0-3 0-2 2-1-1-1 2-3 0-1 10 2 2 1-1 1 1-1 3-1 0-1 4-4-1-2-1-1 1-2 3-2-1-2 2-4-3-3 2 0 5 1 5-1 2 1 1 0 2-2 0 2 3 1-2 0 5 2 1-4 8 0 1-3 1 1 2-2 5-3-1-1-1-3 0-2-2-4 0-4 2 0-3-4 0 1-1-1-2-5 0-1-7-6 1-2-3 0-2-3-1 2 0-2-6-5-4 3-4-2-2-3 1 0 2-2 2-1-1-1 3-2-1-1 3-5 1 0 1-6-1-7-3-4-1 4-7-1-5-2 0-1-2-7 1-1 2-3-1 0-2-5 2-2-1-5 2-1 1-3-6 1-6-2-1-7 0 0 2 0-2-5 0 0 2-2 1 1 5-5 3 2 4-2 1-1 1-3 2-2 1-7-1-2 2-1-1 1 1 0 4-12 0-3 3-1-1-4 3 1 3-2 1-2 0-6-3 0-1 2-2-2-1 1-1-3 0-3-4-4-3-5-1 4-7-1-1-4 1 0-5 1 0 0-1-3 0 1-3-4 0-3-4 1-4 0-1 5-2 2 1 2-3 5 3 0 3 4-3 1 0 5 5 4-4 6-3 1-1-2-2 4-2-3-3-2 2-1-1 3-2 1 1 2-3 1 2 2-2-1-1 0-2 2 1 3-5 4-1 0-2 3 0 1-1 1 1 0-3 4 1-1-4 1-1-2-4 2-2 2-1 1-3-2-2-1-3-2 0-1-2 2-2-4-2 4-4-2-1 0-1-3-1-2 2-3-2-3 1-3-2 0-2-3 1-1-3 6-1 6-8 1 1 4-3 2 1 0-7 3 1 2 2 1-1-1-2 5 0-1-5 3-3 3 2-1 2 2 0-1 1-2 1 0 3 1 0 0-1 2 1 0 1 2 1 2-3 3 0 1-3 4 0 2 3-1 2 0 5 5 0-1 7 1 0 1-2 1 2 4-5 0-1-2 1-1-1 4-3 1 4-1-1 0 1 2 0 1-3 4 2-1 1 2 1 4-1 2 4 1 0-1 3 2-1-2 2 1 2 2 1-1-2 1-1 1 3 3-1-1 2 1 0 1-2 0 5 1 0 1-2 5 2 1-1 3 0 1 2-2 3 2 1 2 0 0 2 3-1 4 1 0 3 4-1 2 1 8-6 0-3 1 0 3 1-1 5 2 5 3 0 0-1 4 0 0-2 1 0 2-2 3 1 1 1 0 2 2-1 0 4 3 0 1-1 1 2 4 1 z">
                            </path>
                            <text x="371.5" y="446.5" dominant-baseline="middle" text-anchor="middle">37</text>
                        </a><a xlink:href="#" id="PiłaIcon">
                            <path
                                d="M 162 468 l 4-3 1-4 0-1-3-2 1-2-1-5 1-2-1-5 4-4 0-4 1 0-1-7 1 0 0-3 1-3-5-2-2-4-2-2 0-1 0 0 0 0 1 0 1-2 1 3 2 1 0-1 2 1 0-2 2-1-1-3 1 0-2-5 1-2-2 0-2-3 2-2-3-4 1-3-2-1-3-4 2-1 0-2-2 0 1-5 3 0-2-7 4 1 7-1 4-3 1-4-3-4 2-1-1-2-2-1-2-1 2-4 1-1 0 2 3-2 0-2 3 0-2-2 2-1-1-4 2-1 0-4-2-4 0-2-1 0 1-1 0-10 1-1 6 2 4 3 5 1 6-3 9-3 4 2 0-2 1 0 0-1 4-3-2-6 2 0 1-2 3-1-1 0 1-5 2 3 5-3 3 1 2-6 2 0-1-3 2 0 1-2 3 0 1 3 2 1-1-1 2 0-1-2 1-1-1 0 2-4-1 0 1-2 2 1-1-3 1 1 1-2 4-1-3-2 0-2-4-1-1-4-4 0-1-1-1 0-3-4-1 2-2-3-2-1-3-10 1 0 1-1-3 0 2-5 3 3 10-2 5 0 5-5 2 1 2-3-2 0 1-2 1-4 1 1 0-2 0-4 2-3 0-1 5-1 1-2 3 3 1-4 3 0 0 5 4 6 1 7 3-2 2 1 0 2-1 1 1 2 5 0 3-4 7 3 2-1 6 1 3-1 2 2 1-1 0 3 2 0 1 3 5-1 0 2-1 3-8 7-1 4-4 4 1 2 7 2 1 2 1 1 0 2 4 4 0 1 1 1 0-1 1 1 2 3-2 2 1 1-2 1 0 2-9 1 3 4-1 2 1 3-2 1 6 3-1 1-3 0 0 7-3 2 1 5 0 4-2 0-2 4 2 1 0 3 5 0 3-2 6 6 2 0 1 3 2 0-1 2 1 5 1 0 0 5-1 0 0 6-1 2 0 2-1 1-4 0 0-2-2 2-1 0-2 0 0 2 2 1-2 2 5 3-3 3 1 5-5 0 1 2-1 1-2-2-3-1 0 7-2-1-4 3-1-1-6 8-2 1-3-1-1 2-2 1-1-6 2-4-4 1-3-4-2 2 2-5-1-1-3-2 0 0 0 0 0 1-3 1-2 3-4-1-1 3-2 0-1 2 3 1 2 4-2-1-5 3-1 1-2-1-3 2-3 0 0 3-2 0 0-4-2-1-2 9-1 0-2-2-5 1 1 1-3 7-2 1 0 4-2-1-3 2 2 0 2 4-2 0 1 2-2 3-1 0-1-2-2 0-1-1-1 2-2 1-1 1-2-1-1 3 6 4-1 3-3 2 3 1-1 4 2 1 0-1 6-1 3 2 0 3-3 3 2 3 0 3-1 2 1 2-3 4 0 5-4 0-1 0 0 3-6 2-1 2 1 2-2 0 2 2-2 2 2 4-2 0-2 5-6-2 0-1 2 1 0-2-2 1-2 2-2-1-2 2 1 2-3 2-1 3-8-3-7 1-1-2 2-1-1-6-2-1-5 3-5-1-1-3-2 0-1-3 0-2 3 0 0-2 1-2-3-4-2-1-2 0-1 3-4-3-2 0 z">
                            </path>
                            <text x="246" y="361" dominant-baseline="middle" text-anchor="middle">38</text>
                        </a><a xlink:href="#" id="PoznańIcon">
                            <path
                                d="M 224 430 l 1-3 2 1 1-1 2-1 1-2 1 1 2 0 1 2 1 0 2-3-1-2 2 0-2-4-2 0 3-2 2 1 0-4 2-1 3-7-1-1 5-1 2 2 1 0 2-9 2 1 0 4 2 0 0-3 3 0 3-2 2 1 1-1 5-3 2 1-2-3-3-2 1-2 2 0 1-3 4 1 2-3 3-1 0-1 4 3-2 5 2-2 3 4 4-1-2 4 1 6 3-2 0 3 3-1 0 2 3 2 3-1 3 2 2-2 3 1 0 1 2 1-4 4 4 2-2 2 1 2 2 0 1 3 2 2-1 3-2 1-2 2 2 4-1 1 1 4-4-1 0 3-1-1-1 1-3 0 0 2-4 1-3 5-2-1 0 2 1 1-2 2-1-2-2 3-1-1-3 2 1 1 2-2 3 3-4 2 2 2-1 2-6 2-4 4-1-2-3-1-2-2-4 3 0-2-4-4-1 1-2 2-2-1-6 2-2-2 1-3-4-2-3 4-4-3-2 2-3 1 1 2-3 1 0-7-2-3 3-3 0-3-3-2-6 2-2-1 1-4-3-1 3-2 1-3 z">
                            </path>
                            <text x="271" y="422.5" dominant-baseline="middle" text-anchor="middle">39</text>
                        </a><a xlink:href="#" id="KoszalinIcon">
                            <path
                                d="M 107 314 l 2-4-1-2 1-1 5 0 0-3 4-4 1 1 2-2-1-3 4 0 0-2-2-2 1-1-3-2-4 1-2-1-1-2 3-5 0-1 4 0 7 1 6 3 4-1 0-2-2 1 0-2 2-2-2-1 1-3-2-2 1 1 1-2 3 0 1-1 0-1 7-2 0-4 2-1-1-4 1-4-1 0 5-2 1-2 7-6-2-3 2-1 1 1-1-1 0-2-2 0 2-7 1 0 3-4 1 1 1 0-1-3 1-2 0-2 2-1 0-3-11-6 0-3-4-6-3-2-3-5-1-5 1-2-2-4 0-2-6-1 1-3 0 0 0 1-3-1 1-1-2-2-1-2 3 0 1-3-3-2-2-1 1-1 0-6 1-1-1-2 4-4-2-4-2-2-6 1 1-1-1-1 3-1-3-4 1-1 3-5 10-1 6-3 4 0 12-3 11-4 16-2 9-3 9-5 8-7 7-8 3-6 2 0 4-7 8-8 9-3 8-1 4 6 0 2 2 5 4 1 3 7-2 4 3 5-2 2-3 0 2 4-1 5 3 1 1 8-3 2-9 2-3 3 1 2 2 0-1 4 2 1 1 3 1 0 0 5 3 1-2 6 2 1 0 2-1 1 0 3-2 2 1 2 1 0-1 0 1 2-1 3 2 0-1-2 1 0 0-2 1 0 0 2 2-1 0 3 3 1 0 3-2 2 9 6 3 1-1 4-3 0 1 1-6-1 0 1-2 0-1 3 1 1 0 3 3 1 0 3 4 0-2 4-7 5 2 4 1 11-3 0-1 4-3-3-1 2-5 1 0 1-2 3 0 4 0 2-1-1-1 4-1 2 2 0-2 3-2-1-4 5-16 2-3-3-2 5 3 0-1 1-1 0 3 10 2 1 2 3 1-2 3 4 1 0 1 1 4 0 1 4 4 1 1 3 2 0-4 2-1 2-1-1 1 3-2-1-1 2 1 0-2 4 1 0-1 1 1 2-1 0-1 1-2-2 0-2-3 0-1 2-2 0 1 3-2 0-2 6-3-1-5 3-2-3-1 5-5 3 2 6-4 3 0 1-1 0 0 2-4-2-9 3-6 3-5-1-4-3-6-2 1-2 1 0 0-1 1-3-1-3 0-2 0 0-7-2-6 1 1 4-5 1 1 3-4 1 3 2-2 0-2 3-1 0 2 2-2 3-4 1-4-2-5 3-1-1-3 0-1-1-1 0-2-4-1 1-7 3-2-1-6 3 1 1-4 4-7-3 1-2 0-2 1 0-1 0-1-5-3-1 1 0 0-1-1 1 0-3 z">
                            </path>
                            <text x="195.5" y="203.5" dominant-baseline="middle" text-anchor="middle">40</text>
                        </a><a xlink:href="#" id="SzczecinIcon">
                            <path
                                d="M 108 308 l 1 2-2 4 4 2 0 3 1-1 0 1-1 0 3 1 1 5 1 0-1 0 0 2-1 4 4 7-4 2 0 1-1-1-21 8-2-2-1-3-4 3-1-4-3-1-2-2 0 0 0-1-2 0-2 4 2 1 1 2-3 2 0-3-3 0 1 2-2 1 0 3 1 0 0 3-2 0 0 2-3 1-3 2 1 4-1 6-4 4-1 4-2 0-1 2-5-1 0-2-3-2-7 5-2-1-7-5-11-15-6-4-6-8-7-1-2-2 0-2 4-7-1-7 0-5 12-5 9-8 3-5 2-9-2-4 2-6 2-1 1-2 4-6 0-2-2 0-2-6 1-2-2-5 1-4-2-5 1-8-2 0 0-6-2-2-2-6 2-12-3-3 0-4-1-1 2-3-2-2 1-9 2-3-6-16 0-7-2-1 2 0 2-2 4 2 1-2 0 2 5 2 5-1 6-2 5-5 16-5 6-3 18-4 36-13 10-1 0 1-4 5 3 4-3 3 6-1 2 2 1 3 0 1-1 1-2 3 1 2-1 1 0 6-1 1 2 1 3 2-1 3-3 0 1 2 2 2-1 1 3 1 0-1 0 0 0 3 5 1 0 2 2 4-1 2 1 5 3 5 3 2 4 6 0 3 11 6 0 3-2 1 0 2-1 2 1 3-2-1-3 4-1 0-2 7 2 0 0 2 1 1-2-1-1 3 2 1-7 6-1 2-5 2 1 0-1 4 1 4-2 1 0 3-4 3-3 0 0 1-4 1-1 2-1-1 2 2-1 3 2 1-2 2 0 2 2-1 0 2-4 1-6-3-11-1-3 6 1 2 2 1 4-1 3 2-1 1 2 2 0 2-4 0 1 3-2 2-1-1-4 4 0 3-5-1 z">
                            </path>
                            <text x="84.5" y="257" dominant-baseline="middle" text-anchor="middle">41</text>
                        </a>
                    </svg>
                </div>
            </div>
        </section>
        <h2 id="suggestion"></h2>
        <section class="recommendations">
            <p class="recommendation">Okręg 20: KO walczy z PIS o piąty mandat</p>
            <p class="recommendation">Okręg 19: Lewica walczy o trzeci mandat, Trzecia Droga - o drugi</p>
            <p class="recommendation">Okręg 16,17,18: tu Twój głos odddany na dekokratyczną opozycję liczy się podwójnie</p>
        </section>
        <section class="bottom-info">
            <p>Rekomendacje z dnia 05.10</p>
            <p>Aktualne dane na <a href="https://wybierztak.pl/" target="_blank">WybierzTak.pl</a></p>
        </section>
    </div>
    <script>
        function recalulateMap() {
            for (const key in window.dane) {
                if (window.dane.hasOwnProperty(key)) {
                    const element = window.dane[key];
                    let rekomendacje = element.rekomendacjePartii;
                    const svgElement = document.getElementById(element.nazwaOkregu + "Icon");

                    if (svgElement === null || svgElement === undefined) {
                        console.log("no svg element " + key);
                        continue;
                    }
                    const pathElement = svgElement.querySelectorAll("path")[0];
                    const txtElement = svgElement.querySelectorAll("text")[0];
                    let txtStyle = "txtBlack";

                    if (rekomendacje === null || rekomendacje === undefined || rekomendacje.length === 0) {
                        rekomendacje = [""];
                    }
                    if (rekomendacje[0] == "") {
                        pathElement.setAttribute("fill", "url(#bg-none)");
                    } else {
                        let style = "";
                        rekomendacje = rekomendacje.sort();
                        let styleArray = [];
                        for (var i = 0; i < rekomendacje.length; i++) {
                            const current = rekomendacje[i].toLowerCase();
                            if (window.party[current] === true)
                                style += current + "-";
                        }
                        if (style === "") {
                            style = "none-";
                            txtStyle = "txtWhite";
                        } else {
                            txtStyle = "txtWhite";
                        }
                        style = style.substring(0, style.length - 1);
                        console.log("setting style " + style);
                        pathElement.setAttribute("fill", "url(#bg-" + style);
                    }
                    txtElement.setAttribute("class", txtStyle);
                }
            }
            setState();
        };
        // checkbox logic
        window.party = {
            ko: true,
            lewica: true,
            td: true,
        }
        for (const key in window.party) {
            if (window.party.hasOwnProperty(key)) {
                const party = key;
                //console.log("processing party "+party);
                const pickerCheckbox = document.querySelector('#' + party + 'Picker input[type="checkbox"]');
                const pickerDiv = document.querySelector('#' + party + 'Picker');
                //console.log(pickerCheckbox);
                pickerDiv.addEventListener('click', function (event) {
                    if (event.target.tagName !== 'INPUT') {
                        pickerCheckbox.checked = !pickerCheckbox.checked;
                    }
                    console.log(party + ' picker checkbox is ' + (pickerCheckbox.checked));
                    window.party[party] = pickerCheckbox.checked;
                    console.log(window.party);
                    recalulateMap();
                });
            }
        }
        recalulateMap();
    </script>
    <script>
        var list = [];
        var select = document.getElementById('nazwaOkreguSelect');
        for (const key in window.dane) {
            if (window.dane.hasOwnProperty(key)) {
                list.push(key);
            }
        }
        list = list.sort();
        for (var i = 0; i < list.length; i++) {
            var opt = document.createElement('option');
            var key = list[i];
            const element = window.dane[key];
            opt.value = key;
            opt.innerHTML = element.nazwaOkregu;
            select.appendChild(opt);
        }

        select.onchange = function () {
            zoomFromInput(select.value);
        }

    </script>
    <script>
        // Zoom on path
        //When I click on the path, I want to zoom in on it and show only it
        window.zoomState = {
            width: 1000,
            height: 1000,
            zoomIn: false
        }
        function zoomOnPath(path) {
            //Get the bounding box of the path
            var bbox = path.getBBox();

            var width = bbox.width;
            var height = bbox.height;

            //Get the center of the bounding box
            var cx = bbox.x + width / 2;
            var cy = bbox.y + height / 2;

            //Scale factor
            var k = 2.5;

            //Get the new size of the bounding box
            var newWidth = Math.max(width * k, 450);
            var newHeight = Math.max(height * k, 450);

            //Get the new position of the bounding box
            var newX = cx - newWidth / 2;
            var newY = cy - newHeight / 2;

            //Zoom
            path.parentElement.parentElement.setAttribute("viewBox", newX + " " + newY + " " + newWidth + " " + newHeight);
        }

        function showAll() {
            for (const key in window.dane) {
                if (window.dane.hasOwnProperty(key)) {
                    const element = window.dane[key];
                    const svgElement = document.getElementById(element.nazwaOkregu + "Icon");
                    svgElement.style.display = "block";
                }
            }
        }
        function hideNonNeibours(idOkregu) {
            var okreg = window.dane[idOkregu];
            var neibourList = window.sasiedzi[okreg.nrOkregu];
            if (neibourList == null || neibourList == undefined) {
                return;
            }
            for (const key in window.dane) {
                if (window.dane.hasOwnProperty(key)) {
                    const element = window.dane[key];
                    if (element.nrOkregu != okreg.nrOkregu) {
                        var isNeibour = false;
                        for (let i = 0; i < neibourList.length; i++) {
                            const neibour = neibourList[i];
                            if (neibour == element.nrOkregu) {
                                isNeibour = true;
                                break;
                            }
                        }
                        if (isNeibour == false) {
                            const svgElement = document.getElementById(element.nazwaOkregu + "Icon");
                            svgElement.style.display = "none";
                        }
                    }
                }
            }
        }

        function setState() {
            var queryString = "?v1";
            const element = document.getElementById("nazwaOkreguSelect");
            let okreg = element.value;

            if (okreg == null || okreg == undefined) {
                okreg = "";
            }

            queryString += okreg != "" ? "&okreg=" + okreg : "";
            queryString += window.party.ko ? "" : "&ko=0";
            queryString += window.party.lewica ? "" : "&lewica=0";
            queryString += window.party.td ? "" : "&td=0";

            window.history.pushState("", "", queryString);
        }


        function selectElement(id, valueToSelect) {
            let element = document.getElementById(id);
            element.value = valueToSelect;
            setState();
        }

        function zoomFromInput(inputValue) {
            if (inputValue == null || inputValue == undefined)
                inputValue = "";

            if (inputValue == "") {
                resetZoom();
                return;
            }

            if (window.zoomState.zoomIn == true)
                resetZoom();

            selectElement("nazwaOkreguSelect", inputValue);
            window.zoomState.zoomIn = true;
            if (window.dane[inputValue] != null) {
                var parentElementToClick = document.getElementById(window.dane[inputValue].nazwaOkregu + "Icon");
                if (parentElementToClick == null) {
                    resetZoom();
                    return;
                }
                zoomOnPath(parentElementToClick.getElementsByTagName("path")[0]);
                hideNonNeibours(inputValue);
                setSuggestion(inputValue);

            }
        }

        function resetZoom() {
            setSuggestion("");
            selectElement("nazwaOkreguSelect", "");
            window.zoomState.zoomIn = false;
            document.getElementById("svgMap").setAttribute("viewBox", 0 + " " + 0 + " " + window.zoomState.width + " " + window.zoomState.height);
            showAll();
        }

        function setSuggestion(txt) {
            if (txt == null || txt == undefined || txt == "") {
                document.getElementById("suggestion").innerHTML = "To jest sugestia dla całej Polski. Damy radę!";
                return;
            } else {
                document.getElementById("suggestion").innerHTML = "To jest sugestia dla okręgu " + txt + ".";
            }

        }


        function readState() {
            var urlParams = new URLSearchParams(window.location.search);
            var okreg = urlParams.get('okreg');
            var ko = urlParams.get('ko');
            var lewica = urlParams.get('lewica');
            var td = urlParams.get('td');

            window.party.ko = (ko != "0");
            window.party.lewica = (lewica != "0");
            window.party.td = (td != "0");

            document.getElementById("koCheckbox").checked = window.party.ko;
            document.getElementById("lewicaCheckbox").checked = window.party.lewica;
            document.getElementById("tdCheckbox").checked = window.party.td;

            zoomFromInput(okreg);
            recalulateMap();
        }
        readState();


        //Get all the paths
        var paths = document.querySelectorAll("svg path");
        var texts = document.querySelectorAll("svg text");
        //For each path
        for (var i = 0; i < paths.length; i++) {
            var path = paths[i];
            //When I click on the path
            path.addEventListener("click", function (e) {
                if (window.zoomState.zoomIn == false) {
                    var idOkregu = this.parentElement.id.replace("Icon", "");
                    zoomFromInput(idOkregu);
                } else {
                    resetZoom();
                }
            });
        }
        for (var i = 0; i < texts.length; i++) {
            var text = texts[i];
            text.addEventListener("click", function (e) {
                this.parentElement.getElementsByTagName("path")[0].dispatchEvent(new Event('click'));
            });
        }
    </script>
</body>

</html>