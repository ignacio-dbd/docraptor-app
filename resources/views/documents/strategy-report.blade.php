<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;600&family=Poppins:wght@300;600&display=swap"
          rel="stylesheet">
    <!--<script>
        // This example shows PDF rendering can be delayed to let JavaScript finish
        // See our knowledge base for more details and time-based examples:
        // https://help.docraptor.com/en/articles/1067483-waiting-for-javascript-to-finish-loading

        var googlePieDone = false;
        var googleSankeyDone = false;
        var highchartsVennDone = false;
        var highchartsAreaDone = false;

        // DocRaptor polls docraptorJavaScriptFinished() until it returns true.
        docraptorJavaScriptFinished = function() {
            if (googlePieDone && googleSankeyDone && highchartsVennDone && highchartsAreaDone) {
                return true;
            } else {
                return false;
            }
        }
    </script>-->
    <script>
        var didWait = false;
        docraptorJavaScriptFinished = function () {
            if (!didWait) {
                setTimeout(function () {
                    didWait = true;
                }, 1000);
                return false;
            }
            return true;
        };
    </script>

</head>
<body>
<style>
    @page {
        size: 297mm 167mm;
        margin: 0;
        padding: 0;
    }

    /* Just basic styling */

    .page {
        page-break-after: always;
        margin: 0;
        padding: 10mm 16mm;
    }

    html {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        padding: 0;
        margin: 0;
        color: #FFFFFF;
        background-color: #003A70;
        font-family: 'Inter', sans-serif;
    }

    *, *:before, *:after {
        box-sizing: inherit;
    }

    h1 {
        font-family: 'Poppins', sans-serif;
        font-weight: 300;
        font-size: 42px;
        margin-top: 50px;
    }

</style>


<!-- FRONT COVER -->
<style>
    #front-cover {
        width:297mm !important;
        height:167mm !important;
        background: url('https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/front-cover.jpg');
        background-size: cover;
    }
    .get-started {
        position: absolute;
        bottom: 32mm;
        left: 75mm;
        border: 1px solid #FFFFFF;
        padding: 10px 14px;
        font-size: 14px;
    }
</style>
<div class="page" id="front-cover">
    @include('documents.includes.header-front-cover', ['clientName' => 'Clarence Boddicker'])

    <a href="#introduction" class="btn get-started">Get Started &rarr;</a>

</div>

<!-- INTRODUCTION -->
<div class="page" id="introduction">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <h1>Your journey</h1>

    @include('documents.includes.footer', ['previousLink' => '#front-cover', 'nextLink' => '#the-my-wealth-service'])

</div>

<!-- THE MY WEALTH SERVICE -->
<div class="page" id="the-my-wealth-service">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <h1>The my wealth service</h1>

    @include('documents.includes.footer', ['previousLink' => '#introduction', 'nextLink' => '#meet-your-team'])
</div>

<!-- MEET YOUR TEAM -->
<div class="page" id="meet-your-team">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <h1>Meet your team</h1>

    @include('documents.includes.footer', ['previousLink' => '#introduction', 'nextLink' => '#key-considerations'])
</div>

<!-- KEY CONSIDERATIONS -->
<div class="page" id="key-considerations">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <h1>Key considerations</h1>

    @include('documents.includes.footer', ['previousLink' => '#meet-your-team', 'nextLink' => '#a-holistic-approach'])
</div>

<!-- A HOLISTIC APPROACH -->
<div class="page" id="a-holistic-approach">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <h1>A holistic approach</h1>

    @include('documents.includes.footer', ['previousLink' => '#key-considerations', 'nextLink' => '#your-objectives'])
</div>


<!-- YOUR OBJECTIVES -->
<div class="page" id="your-objectives">

    @include('documents.includes.header', ['activeLink' => 'your-objectives'])

    @include('documents.includes.footer', ['previousLink' => '#a-holistic-approach', 'nextLink' => '#your-objectives2'])
</div>
<div class="page" id="your-objectives2">

    @include('documents.includes.header', ['activeLink' => 'your-objectives'])

    <h1>Your objectives</h1>

    @include('documents.includes.footer', ['previousLink' => '#your-objectives', 'nextLink' => '#your-finances'])
</div>

<!-- YOUR FINANCES -->
<div class="page" id="your-finances">

    @include('documents.includes.header', ['activeLink' => 'your-objectives'])

    <h1>Your finances</h1>

    <div class="page-number"></div>
    @include('documents.includes.footer', ['previousLink' => '#your-objectives', 'nextLink' => '#'])
</div>

<!-- YOUR STRATEGY -->
<div class="page" id="your-strategy">

    @include('documents.includes.header', ['activeLink' => 'your-strategy'])

    <h1>Your finances</h1>

    <div class="page-number"></div>
    @include('documents.includes.footer', ['previousLink' => '#your-objectives', 'nextLink' => '#'])
</div>

</body>
</html>
