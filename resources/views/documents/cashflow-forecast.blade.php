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

    <h1>Your cashflow forecast</h1>

    <div class="flex">
        <div class="w-1/2">
            <h1>Your cashflow forecast</h1>
        </div>
        <div class="w-1/2">
            <svg width="664" height="675" viewBox="0 0 664 675" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <circle cx="303.76" cy="370.83" r="303.18" fill="url(#pattern0)"/>
                <circle cx="303.76" cy="370.83" r="303.18" fill="#D9D9D9"/>
                <path d="M558.232 0H546.604V221.376H558.232V0Z" fill="#4FA3DE"/>
                <path d="M663.103 104.873H441.728V116.502H663.103V104.873Z" fill="#4FA3DE"/>
                <path d="M626.589 28.3286L470.026 184.837L478.247 193.062L634.811 36.5527L626.589 28.3286Z" fill="#4FA3DE"/>
                <path d="M478.26 28.3046L470.037 36.5273L626.573 193.064L634.796 184.841L478.26 28.3046Z" fill="#4FA3DE"/>
                <path d="M589.68 6.30849L504.428 210.61L515.159 215.089L600.411 10.7867L589.68 6.30849Z" fill="#4FA3DE"/>
                <path d="M452.489 62.7059L448.013 73.4385L652.329 158.655L656.806 147.922L452.489 62.7059Z" fill="#4FA3DE"/>
                <path d="M652.569 63.1963L447.839 147.413L452.262 158.167L656.993 73.9506L652.569 63.1963Z" fill="#4FA3DE"/>
                <path d="M515.68 6.10351L504.925 10.5273L589.142 215.258L599.896 210.834L515.68 6.10351Z" fill="#4FA3DE"/>
                <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                        <use xlink:href="#image0_40_701" transform="scale(0.015625)"/>
                    </pattern>
                    <image id="image0_40_701" width="64" height="64" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAAXNSR0IArs4c6QAAAONJREFUeF7t20EOhEAIRFG4/6F7DvEnYeFzryQIv6pBd2behOu9dPvsbog+k+NLgArQAqmJcw9iAAhSgZKB3IJkkAySQTJ4CiE+gA8oBeg0mH3Ai084P89HhqwEqIA209ICsQdjAeaZIgaAYKxBDMCAYy8fXwAIgiAIcoJpJEYGI4VjB3YrbC9gL2AvkCB43cM5PgZgAAZgQFnNZAhdGykQBEEQBEEQDBmgAm2glM/z+QUYisYUGoldO7kY32IEAzCg6RgIRgjFAsw+AgRBMNYgBmCAT2TCYfoPPz/HCqQCX1eBHzHnv7C7WhBSAAAAAElFTkSuQmCC"/>
                </defs>
            </svg>
        </div>
    </div>

    <div class="page-number"></div>
    @include('documents.includes.footer', ['previousLink' => '#your-finances', 'nextLink' => '#'])
</div>

</body>
</html>
