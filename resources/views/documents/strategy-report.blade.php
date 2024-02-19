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
        padding: 8mm 16mm;
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
    }

    h3.line-header {
        margin-top: 15px;
        margin-right: 5px;
        display: inline;
        z-index: 100;
        float: left;
        clear: left;
        font-weight:bold;
        font-size:18px
    }

    h3.line-header::after {
        position:absolute;
        content:'\00a0';
        width: 90%;
        margin-top: -12px;
        margin-left: 5px;
        border-bottom: 1px solid #7574BD;
        z-index: 0;
    }

    h4 { font-size:14px; }
    p { font-size: 13px; line-height: 16px; }
    p.small { font-size: 11px; line-height: 14px; }
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

    <div class="flex">
        <div class="w-1/2">LEFT COL</div>
        <div class="w-1/2">RIGHT COL</div>
    </div>

    @include('documents.includes.footer', ['previousLink' => '#front-cover', 'nextLink' => '#the-my-wealth-service'])

</div>

<!-- THE MY WEALTH SERVICE -->
<div class="page" id="the-my-wealth-service">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <h1>The my wealth service</h1>
    <div class="flex">
        <div class="w-1/3">



        </div>
        <div class="w-1/3">COL2</div>
        <div class="w-1/3">COL3</div>
    </div>

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

    <div class="flex mt-8">
        <div class="w-1/3 mr-5">
            <h1>Your objectives</h1>
        </div>
        <div class="w-1/2 pt-3 pl-8">
            <p class="pr-5">It is important to design and implement an investment strategy that reflects your personal circumstances, needs, and priorities. As a result of our discussions, here are your agreed objectives:</p>
        </div>
    </div>

    <div class="relative w-full mt-4">
        <h3 class="line-header">Primary</h3>
    </div>

    <div class="clear-both"></div>

    <div class="flex mt-5">
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <img src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-legacy-planning.svg" class="w-12">
                </div>
                <div class="objective-text ml-4 pr-8">
                    <h4 class="font-bold text-white">Legacy Planning</h4>
                    <div class="mt-2 text-sm">
                        <p class="small">Based on what we spoke about, you wish to ensure your assets will be passed on in the event of your death. This is to ensure that the assets you have built up over your lifetime can be used by your children when you die.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <img src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-tax-efficiency.svg" class="w-12">
                </div>
                <div class="objective-text ml-4 pr-8">
                    <h4 class="font-bold text-white">Tax efficiency</h4>
                    <div class="mt-2 text-sm">
                        <p class="small">Based on our discussions, you wish to reduce the amount of tax you pay on your existing savings/investments. This is to ensure that more of the assets that you have built up during your lifetime can be passed onto your chosen beneficiary(ies) when you die.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <img src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-cash.svg" class="w-12">
                </div>
                <div class="objective-text ml-4 pr-8">
                    <h4 class="font-bold text-white">Short-term cash needs</h4>
                    <div class="mt-2 text-sm">
                        <p class="small">You’ve indicated that it is important for you to retain access to a proportion of your capital. This covers any expenditure that cannot be met from income over the next XX years.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clear-both"></div>

    <div class="relative w-full pt-2">
        <h3 class="line-header">Secondary</h3>
    </div>

    <div class="clear-both"></div>

    <div class="flex mt-6">
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <img src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-income.svg" class="w-12">
                </div>
                <div class="objective-text ml-4 pr-8">
                    <h4 class="font-bold text-white">Ensure income needs are met</h4>
                    <div class="mt-2 text-sm">
                        <p class="small">You’re looking to obtain a regular income of £50,000 per annum to help your children and/or grandchildren with things like university and school fees etc.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <img src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-growth.svg" class="w-12">
                </div>
                <div class="objective-text ml-4 pr-8">
                    <h4 class="font-bold text-white">Capital growth</h4>
                    <div class="mt-2 text-sm">
                        <p class="small">You’re looking to grow the value of your capital, so you can retire earlier and continue to afford more holidays.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('documents.includes.footer', ['previousLink' => '#your-objectives', 'nextLink' => '#your-finances'])
</div>

<!-- YOUR FINANCES -->
<div class="page" id="your-finances">

    @include('documents.includes.header', ['activeLink' => 'your-objectives'])

    <h1>Your finances</h1>

    <div class="page-number"></div>
    @include('documents.includes.footer', ['previousLink' => '#your-objectives2', 'nextLink' => 'your-strategy'])
</div>

<!-- YOUR STRATEGY -->
<div class="page" id="your-strategy">

    @include('documents.includes.header', ['activeLink' => 'your-strategy'])

    <h1>Your finances</h1>

    <div class="page-number"></div>
    @include('documents.includes.footer', ['previousLink' => '#your-finances', 'nextLink' => '#'])
</div>

</body>
</html>
