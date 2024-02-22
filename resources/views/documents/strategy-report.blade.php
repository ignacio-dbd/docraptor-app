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
        line-height: 54px;
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
    .first-description {
        line-height: 20px;
    }
    p.small-cashflow { font-size: 10px; line-height: 14px; }
    h4.key-considerations { font-size:16px; }
    .age {
        font-size: 16px;
        font-weight: bold;
    }
    h4.average-life {
        font-size: 12px;
    }

    .section-right-border {
        border-right: 1px solid #7574BD;
    }
    .section-left-border {
        border-left: 1px solid #7574BD;
    }
    p.small-holistic-approach {
        font-size: 11px;
        line-height: 18px;
    }
    a.learn-more {
        font-family: 'Inter';
        font-size: 9px;
        text-align: right;
    }
    div.green-menu {
        margin-top: -5px;
        margin-left: 410px;
        font-size: 7px;
        border-radius: 20px;
        background-color: #78BE20;
        width: 185px;
        height: auto;
        text-align: left;
    }
    p.green-menu-option {
        font-size: 12px;
        margin-bottom: 0.75rem;
    }
    .journey-line {
        margin-left: -8px;
        margin-top: -8px;
    }
    .learn-more-tag {
        margin-left: 890px;
        margin-top: 40px;
    }
    div.holistic-approach-img {
        margin-top: -80px;
        padding-right: 60px;
    }
    img.holistic-approach-img {
        width: 365px;
        float: right;
    }
    .warning-text {
        font-size: 11px;
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

    <div class="green-menu py-4 px-4 absolute ml-96">
        <p class="green-menu-option">Your journey</p>
        <p class="green-menu-option">The my wealth service</p>
        <p class="green-menu-option">Meet your team</p>
        <p class="green-menu-option">Key considerations</p>
        <p>A holistic approach</p>
    </div>
    <div class="flex">
        <div class="w-1/2 mt-16">
            <div class="w-3/4">
                    <h1 class="mb-8">Your journey</h1>
                    <p class="first-description">
                        This strategy report is the next step on your advice journey and sets out the objectives and areas you need to consider going forward. You will shortly receive a further report that sets out the actions that we believe will help you achieve those goals and give you future peace of mind.
                    </p>
            </div>
        </div>
        <div class="w-1/2">
            <img class="ml-28 mt-14 w-1/2 float-right" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/your-journey.svg">
        </div>
    </div>

    <div class="w-full journey-line">
        <img class="upload-to-s3 w-5/6" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/journey-line.svg">
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

    <div class="flex">
        <div class="w-full mt-14">
                <h1 class="mb-8">Key considerations</h1>
        </div>
    </div>

    <div class="flex">
        <div class="w-2/6 section-right-border">
            <div class="pr-10">
                <h4 class="font-bold text-white key-considerations">Life expectancy</h4>
                <div class="mt-2 text-sm">
                    <p class="small">
                        How long you live can greatly affect your financial planning strategy.
                        <br><br>
                        In 2020, the ONS showed that a 65-year-old male in the UK could expect to live (on average) until age 85 and a female until age 87. Therefore, it’s important to have a plan that’s both flexible and sustainable over a 20 to 30-year period.
                    </p>
                </div>
            </div>
            <div class="mt-14">
                <h4 class="font-bold text-white average-life mb-4">Average life expectancy post retirement:</h4>
                <div class="grid grid-cols-2">
                    <div class="float-left w-full -ml-4">
                        <img class="inline w-10 -mt-2" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-man.svg">
                        <p class="age inline">20 years</p>
                    </div>

                    <div class="float-right w-full pl-36">
                        <p class="age inline">22 years</p>
                        <img class="inline w-10 -mt-2" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-woman.svg">
                    </div>
                </div>
            </div>
        </div>
        <div class="w-3/6">
            <div class="pr-10 pl-10">
                <h4 class="font-bold text-white key-considerations">Inflation</h4>
                <div class="mt-2 text-sm">
                    <div class="flex">
                        <div class="w-3/4">
                            <p class="small float-left">
                                Inflation reduces the purchasing power of your capital and income, and its impact should not be underestimated – especially over the medium to long term. To maintain the value of your capital, your strategy needs to consider how you might overcome the eroding effects of inflation.
                            </p>
                        </div>
                        <div class="w-1/2">
                            <img class="w-24 float-right -mt-4" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-inflation.svg">
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <img class="w-full" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/inflation-timeline.svg">
                </div>
            </div>
        </div>
        <div class="w-2/6 section-left-border">
            <div class="pl-10">
                <h4 class="font-bold text-white key-considerations">Tax efficiency</h4>
                <div class="mt-2 text-sm">
                    <p class="small">Based on what we spoke about, you wish to ensure your assets will be passed on in the event of your death. This is to ensure that the assets you have built up over your lifetime can be used by your children when you die.</p>
                </div>
            </div>

            <div>
                <!-- .png too big?? -->
                <img class="w-64 mt-8 ml-8" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/tax-efficiency.png">
            </div>
        </div>
    </div>


    @include('documents.includes.footer', ['previousLink' => '#meet-your-team', 'nextLink' => '#a-holistic-approach'])
</div>




<!-- A HOLISTIC APPROACH -->
<div class="page" id="a-holistic-approach">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <div class="flex mt-14 mb-8">
        <div class="w-9/12">
            <h1 class="">A holistic approach</h1>
        </div>
        <div class="w-3/12 mt-4 ml-32 -pr-44">
            <a class="inline learn-more" href="#">Click on a section below to learn more
                <svg class="inline w-6" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_40_1645" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                        <rect width="40" height="40" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_40_1645)">
                        <path d="M19.4997 30.0007C16.833 29.8618 14.583 28.834 12.7497 26.9173C10.9163 25.0007 9.99967 22.6951 9.99967 20.0007C9.99967 17.2229 10.9719 14.8618 12.9163 12.9173C14.8608 10.9729 17.2219 10.0007 19.9997 10.0007C22.6941 10.0007 24.9997 10.9173 26.9163 12.7507C28.833 14.584 29.8608 16.8432 29.9997 19.5284L27.083 18.6257C26.759 16.9405 25.9441 15.5446 24.6386 14.4382C23.333 13.3317 21.7867 12.7784 19.9997 12.7784C17.9997 12.7784 16.296 13.4821 14.8885 14.8895C13.4811 16.2969 12.7774 18.0007 12.7774 20.0007C12.7774 21.7692 13.3307 23.3108 14.4372 24.6257C15.5436 25.9405 16.9395 26.7599 18.6247 27.084L19.4997 30.0007ZM21.4997 36.584C21.2497 36.621 20.9997 36.6442 20.7497 36.6534C20.4997 36.6627 20.2497 36.6673 19.9997 36.6673C17.6941 36.6673 15.5275 36.2298 13.4997 35.3548C11.4719 34.4798 9.70801 33.2923 8.20801 31.7923C6.70801 30.2923 5.52051 28.5284 4.64551 26.5007C3.77051 24.4729 3.33301 22.3062 3.33301 20.0007C3.33301 17.6951 3.77051 15.5284 4.64551 13.5007C5.52051 11.4729 6.70801 9.70898 8.20801 8.20898C9.70801 6.70898 11.4719 5.52148 13.4997 4.64648C15.5275 3.77148 17.6941 3.33398 19.9997 3.33398C22.3052 3.33398 24.4719 3.77148 26.4997 4.64648C28.5275 5.52148 30.2913 6.70898 31.7913 8.20898C33.2913 9.70898 34.4788 11.4729 35.3538 13.5007C36.2288 15.5284 36.6663 17.6951 36.6663 20.0007C36.6663 20.2507 36.6617 20.5007 36.6525 20.7507C36.6432 21.0007 36.62 21.2507 36.583 21.5007L33.8886 20.6673V20.0007C33.8886 16.1303 32.5414 12.8479 29.8469 10.1534C27.1525 7.45896 23.87 6.11174 19.9997 6.11174C16.1293 6.11174 12.8469 7.45896 10.1524 10.1534C7.45798 12.8479 6.11076 16.1303 6.11076 20.0007C6.11076 23.871 7.45798 27.1534 10.1524 29.8479C12.8469 32.5423 16.1293 33.8896 19.9997 33.8896H20.6663L21.4997 36.584ZM34.208 37.5007L27.083 30.3757L24.9997 36.6673L19.9997 20.0007L36.6663 25.0007L30.3747 27.084L37.4997 34.209L34.208 37.5007Z" fill="white"/>
                    </g>
                </svg>
            </a>
        </div>
    </div>

    <div class="flex">
        <div class="w-5/12 pr-12">
            <h4 class="font-bold text-white key-considerations">Financial planning</h4>
            <div class="mt-2 text-sm">
                <p class="small-holistic-approach">
                    Few have a plan in place to help them meet their financial aspirations. However, many of those who do will isolate their savings and investments, assigning each a particular role within the financial plan. Whilst this is a natural way of thinking, you could be better served by looking at them collectively. For instance, instead of using just a pension as retirement income, a combination of drawing down on cash reserves and ISAs and utilising available allowances could increase tax efficiency and help your money last longer
                </p>
            </div>
        </div>
        <div class="w-5/12 pr-12">
            <h4 class="font-bold text-white key-considerations">Diversification</h4>
            <div class="mt-2 text-sm">
                <p class="small-holistic-approach">
                    It is equally important that you do not invest in a single product and/or asset class to meet your financial goals – the proverbial ‘silver bullet’. Unfortunately, there is no perfect investment, and so there is not one asset class, geographical region, sector or company that will produce good returns each and every year, and in all market conditions, rather they do well at different times. As a result, you are far more likely to achieve your financial goals and aspirations by investing your money in a range of asset classes, regions, sectors and companies.
                </p>
            </div>
        </div>
        <div class="w-2/12">

            <img class="w-36" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/holistic-approach.svg">

        </div>
    </div>

    <div class="flex mt-7">
        <div class="w-full">
            <img class="w-full" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/holistic-approach-map.svg">
        </div>
    </div>

    @include('documents.includes.footer', ['previousLink' => '#key-considerations', 'nextLink' => '#your-objectives'])
</div>


<!-- A HOLISTIC APPROACH V2-->
<div class="page" id="a-holistic-approach">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <div class="w-32 absolute learn-more-tag">
        <a class="inline learn-more" href="#">
            Click on a section below
            <br>
            to learn more
            <svg class="inline w-5" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_40_1645" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="40" height="40">
                    <rect width="40" height="40" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_40_1645)">
                    <path d="M19.4997 30.0007C16.833 29.8618 14.583 28.834 12.7497 26.9173C10.9163 25.0007 9.99967 22.6951 9.99967 20.0007C9.99967 17.2229 10.9719 14.8618 12.9163 12.9173C14.8608 10.9729 17.2219 10.0007 19.9997 10.0007C22.6941 10.0007 24.9997 10.9173 26.9163 12.7507C28.833 14.584 29.8608 16.8432 29.9997 19.5284L27.083 18.6257C26.759 16.9405 25.9441 15.5446 24.6386 14.4382C23.333 13.3317 21.7867 12.7784 19.9997 12.7784C17.9997 12.7784 16.296 13.4821 14.8885 14.8895C13.4811 16.2969 12.7774 18.0007 12.7774 20.0007C12.7774 21.7692 13.3307 23.3108 14.4372 24.6257C15.5436 25.9405 16.9395 26.7599 18.6247 27.084L19.4997 30.0007ZM21.4997 36.584C21.2497 36.621 20.9997 36.6442 20.7497 36.6534C20.4997 36.6627 20.2497 36.6673 19.9997 36.6673C17.6941 36.6673 15.5275 36.2298 13.4997 35.3548C11.4719 34.4798 9.70801 33.2923 8.20801 31.7923C6.70801 30.2923 5.52051 28.5284 4.64551 26.5007C3.77051 24.4729 3.33301 22.3062 3.33301 20.0007C3.33301 17.6951 3.77051 15.5284 4.64551 13.5007C5.52051 11.4729 6.70801 9.70898 8.20801 8.20898C9.70801 6.70898 11.4719 5.52148 13.4997 4.64648C15.5275 3.77148 17.6941 3.33398 19.9997 3.33398C22.3052 3.33398 24.4719 3.77148 26.4997 4.64648C28.5275 5.52148 30.2913 6.70898 31.7913 8.20898C33.2913 9.70898 34.4788 11.4729 35.3538 13.5007C36.2288 15.5284 36.6663 17.6951 36.6663 20.0007C36.6663 20.2507 36.6617 20.5007 36.6525 20.7507C36.6432 21.0007 36.62 21.2507 36.583 21.5007L33.8886 20.6673V20.0007C33.8886 16.1303 32.5414 12.8479 29.8469 10.1534C27.1525 7.45896 23.87 6.11174 19.9997 6.11174C16.1293 6.11174 12.8469 7.45896 10.1524 10.1534C7.45798 12.8479 6.11076 16.1303 6.11076 20.0007C6.11076 23.871 7.45798 27.1534 10.1524 29.8479C12.8469 32.5423 16.1293 33.8896 19.9997 33.8896H20.6663L21.4997 36.584ZM34.208 37.5007L27.083 30.3757L24.9997 36.6673L19.9997 20.0007L36.6663 25.0007L30.3747 27.084L37.4997 34.209L34.208 37.5007Z" fill="white"/>
                </g>
            </svg>
        </a>
    </div>

    <div class="flex mt-14 mb-8">
        <div class="w-9/12">
            <h1 class="">A holistic approach</h1>
        </div>
    </div>

    <div class="flex">
        <div class="w-5/12 pr-12">

                <div class="mb-6">
                    <h4 class="font-bold text-white key-considerations">Financial planning</h4>
                    <div class="mt-3 text-sm">
                        <p class="small-holistic-approach">
                            Relatively few people have a financial plan in place to help them meet their goals and aspirations, and of those that do, many are searching for a single product and/or asset class that can meet all of their financial goals – the proverbial ‘silver bullet’.
                        </p>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-white key-considerations">Diversification</h4>
                    <div class="mt-3 text-sm">
                        <p class="small-holistic-approach">
                            Unfortunately, there is no perfect investment, and so there is not one asset class, geographical region, sector or company that will produce good returns each and every year, and in all market conditions, rather they do well at different times. As a result, you are far more likely to achieve your financial goals and aspirations by investing your money in a range of asset classes, regions, sectors and companies.
                        </p>
                    </div>
                </div>

        </div>

        <div class="holistic-approach-img w-7/12">
            <img class="holistic-approach-img" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/holistic-approach-v2.svg">
        </div>
    </div>

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
<!-- YOUR CASHFLOW FORECAST -->
<div class="page" id="your-strategy">

    @include('documents.includes.header', ['activeLink' => 'your-strategy'])

    <div class="flex">
        <div class="w-1/2">
            <div class="flex mt-20">
                <div class="w-2/3">
                    <h1 class="mb-8">Your cashflow forecast</h1>
                    <p class="first-description">
                        We have created a cashflow model to forecast your future finances over the long-term. It shows you how much money you could have in the future and whether you are on track to achieve your goals. We have analysed your income and outgoings, savings, and other assets, along with your future goals and requirements, and having taken into account life events such as your retirement and one-off expenses.
                    </p>
                </div>
            </div>

        </div>
        <div class="w-1/2">
            <svg class="ml-28 mt-14" width="75%" viewBox="0 0 664 675" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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

<!-- YOUR STRATEGY -->
<!-- UNDERSTANDING YOUR CASHFLOW CHARTS V1 -->
<div class="page" id="your-strategy">

    @include('documents.includes.header', ['activeLink' => 'your-strategy'])

    <div class="flex mt-12">
        <div class="w-1/2">
                    <h1 class="mb-8">Understanding your cash flow charts</h1>
        </div>
        <div class="w-1/2 pr-16 mt-1">
            <p class="first-description">
                We have created a cashflow model to forecast your future finances over the long-term. It shows you how much money you could have in the future and whether you are on track to achieve your goals. We have analysed your income and outgoings, savings, and other assets, along with your future goals and requirements, and having taken into account life events such as your retirement and one-off expenses.
            </p>
        </div>
    </div>

    <div class="clear-both"></div>

    <div class="relative w-full pt-2">
        <h3 class="line-header">Key definitions</h3>
    </div>

    <div class="clear-both"></div>

    <div class="flex mt-6">
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35.0001" cy="35" r="34.5017" transform="rotate(0.833608 35.0001 35)" fill="#7474C1"/>
                        <mask id="mask0_40_502" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="16" width="38" height="38">
                            <rect x="16.5593" y="16.3335" width="37.3333" height="37.3333" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_502)">
                            <path d="M35.1867 45.5782C35.6015 45.5782 35.9191 45.5069 36.1395 45.3643C36.3598 45.2217 36.47 45.0078 36.47 44.7226C36.47 44.4374 36.3598 44.217 36.1395 44.0615C35.9191 43.9059 35.5885 43.8282 35.1478 43.8282C34.0589 43.8282 32.9506 43.4846 31.8228 42.7976C30.695 42.1106 29.9756 40.8985 29.6645 39.1615C29.6126 38.9282 29.4959 38.7402 29.3145 38.5976C29.133 38.455 28.9385 38.3837 28.7311 38.3837C28.4459 38.3837 28.2256 38.4939 28.07 38.7143C27.9145 38.9346 27.8626 39.1615 27.9145 39.3948C28.3033 41.5726 29.2237 43.1476 30.6756 44.1198C32.1274 45.092 33.6311 45.5782 35.1867 45.5782ZM35.2256 50.5559C31.6737 50.5559 28.7117 49.3374 26.3395 46.9004C23.9672 44.4633 22.7811 41.43 22.7811 37.8004C22.7811 35.2078 23.8117 32.3883 25.8728 29.342C27.9339 26.2958 31.0515 22.9967 35.2256 19.4448C39.3996 22.9967 42.5172 26.2958 44.5784 29.342C46.6395 32.3883 47.67 35.2078 47.67 37.8004C47.67 41.43 46.4839 44.4633 44.1117 46.9004C41.7395 49.3374 38.7774 50.5559 35.2256 50.5559ZM35.2256 48.2226C38.1293 48.2226 40.5404 47.2309 42.4589 45.2476C44.3774 43.2643 45.3367 40.7819 45.3367 37.8004C45.3367 35.7522 44.4746 33.4254 42.7506 30.8198C41.0265 28.2143 38.5182 25.4596 35.2256 22.5559C31.933 25.4596 29.4246 28.2143 27.7006 30.8198C25.9765 33.4254 25.1145 35.7522 25.1145 37.8004C25.1145 40.7819 26.0737 43.2643 27.9922 45.2476C29.9108 47.2309 32.3219 48.2226 35.2256 48.2226Z" fill="white"/>
                        </g>
                    </svg>
                </div>
                <div class="objective-text ml-4 pr-8">
                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"><span class="font-bold text-white">Liquid assets</span> - savings and investments that are available at short notice.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="34.9999" cy="35" r="34.5017" transform="rotate(0.833608 34.9999 35)" fill="#7474C1"/>
                        <mask id="mask0_40_512" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="16" width="38" height="38">
                            <rect x="16.5592" y="16.3335" width="37.3333" height="37.3333" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_512)">
                            <path d="M30.1699 29.0114H40.281V25.3947C40.281 23.9169 39.7949 22.6855 38.8227 21.7003C37.8505 20.7151 36.6514 20.2225 35.2255 20.2225C33.7995 20.2225 32.6005 20.7151 31.6282 21.7003C30.656 22.6855 30.1699 23.9169 30.1699 25.3947V29.0114ZM38.2199 50.5558H25.1143C24.518 50.5558 23.9801 50.316 23.5005 49.8364C23.0208 49.3568 22.781 48.8188 22.781 48.2225V31.3447C22.781 30.7484 23.0208 30.2105 23.5005 29.7308C23.9801 29.2512 24.518 29.0114 25.1143 29.0114H27.8366V25.3947C27.8366 23.2947 28.5495 21.5188 29.9755 20.0669C31.4014 18.6151 33.1514 17.8892 35.2255 17.8892C37.2995 17.8892 39.0495 18.6151 40.4755 20.0669C41.9014 21.5188 42.6143 23.2947 42.6143 25.3947V29.0114H45.3366C45.9329 29.0114 46.4708 29.2512 46.9505 29.7308C47.4301 30.2105 47.6699 30.7484 47.6699 31.3447V34.728C47.3329 34.6503 46.9829 34.5984 46.6199 34.5725C46.2569 34.5466 45.8292 34.5336 45.3366 34.5336V31.3447H25.1143V48.2225H36.8199C37.0014 48.6632 37.1958 49.0586 37.4032 49.4086C37.6106 49.7586 37.8829 50.141 38.2199 50.5558ZM45.8421 51.878C43.794 51.878 42.031 51.1392 40.5532 49.6614C39.0755 48.1836 38.3366 46.4206 38.3366 44.3725C38.3366 42.3243 39.0755 40.5614 40.5532 39.0836C42.031 37.6058 43.794 36.8669 45.8421 36.8669C47.8903 36.8669 49.6532 37.6058 51.131 39.0836C52.6088 40.5614 53.3477 42.3243 53.3477 44.3725C53.3477 46.4206 52.6088 48.1836 51.131 49.6614C49.6532 51.1392 47.8903 51.878 45.8421 51.878ZM48.7199 48.3003L49.7699 47.2503L46.5032 44.2947V39.4725H44.8699V44.7527L48.7199 48.3003Z" fill="white"/>
                        </g>
                    </svg>


                </div>
                <div class="objective-text ml-4 pr-8">

                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"> <span class="font-bold text-white">Pension – non accessible </span> - your pensions that you cannot draw from because you have not reached your minimum pension age.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="34.5017" transform="rotate(0.833608 35 35)" fill="#7474C1"/>
                        <mask id="mask0_40_527" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="16" width="38" height="38">
                            <rect x="16.3317" y="16.3335" width="37.3333" height="37.3333" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_527)">
                            <path d="M23.3317 49C22.7095 49 22.1651 48.7667 21.6984 48.3C21.2317 47.8333 20.9984 47.2889 20.9984 46.6667V21H23.3317V46.6667H48.9984V49H23.3317ZM26.2484 43.75V30.7611H30.8762V43.75H26.2484ZM33.9484 43.75V22.75H38.5762V43.75H33.9484ZM41.4929 43.75V37.1389H46.1206V43.75H41.4929Z" fill="white"/>
                        </g>
                    </svg>
                </div>
                <div class="objective-text ml-4 pr-8">
                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"><span class="font-bold text-white">Shortfall</span> - this is when there is a shortfall between your income and expenditure in a year and you have no available investments or pensions to meet the shortfall.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flex mt-4">
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="34.9999" cy="35" r="34.5017" transform="rotate(0.833608 34.9999 35)" fill="#7474C1"/>
                        <mask id="mask0_40_537" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="20" y="20" width="31" height="30">
                            <rect x="20.4492" y="20.2222" width="29.5556" height="29.5556" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_537)">
                            <path d="M35.2264 47.3152C32.4145 47.3152 30.0695 46.3505 28.1915 44.4212C26.3135 42.4919 25.3745 40.0905 25.3745 37.217C25.3745 35.1646 26.1904 32.9325 27.8221 30.5208C29.4538 28.1092 31.9219 25.4974 35.2264 22.6855C38.5308 25.4974 40.9989 28.1092 42.6306 30.5208C44.2624 32.9325 45.0782 35.1646 45.0782 37.217C45.0782 40.0905 44.1392 42.4919 42.2612 44.4212C40.3832 46.3505 38.0382 47.3152 35.2264 47.3152ZM35.2264 45.468C37.5251 45.468 39.4339 44.6829 40.9528 43.1127C42.4716 41.5426 43.231 39.5774 43.231 37.217C43.231 35.5956 42.5485 33.7535 41.1837 31.6908C39.8188 29.628 37.833 27.4473 35.2264 25.1485C32.6197 27.4473 30.634 29.628 29.2691 31.6908C27.9042 33.7535 27.2217 35.5956 27.2217 37.217C27.2217 39.5774 27.9811 41.5426 29.5 43.1127C31.0188 44.6829 32.9276 45.468 35.2264 45.468Z" fill="white"/>
                        </g>
                        <circle cx="35.2262" cy="35.0002" r="17.1667" stroke="white" stroke-width="3"/>
                        <path d="M50.7177 26.0557L19.7332 43.9446" stroke="white" stroke-width="3"/>
                    </svg>
                </div>
                <div class="objective-text ml-4 pr-8">
                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"><span class="font-bold text-white">Non-liquid assets</span> - assets which are not always easy to sell or convert to cash quickly. E.g. property, possessions etc.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="34.5017" transform="rotate(0.833608 35 35)" fill="#7474C1"/>
                        <mask id="mask0_40_517" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="16" width="38" height="38">
                            <rect x="16.5609" y="16.3335" width="37.3333" height="37.3333" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_517)">
                            <path d="M37.1727 33.0166L30.795 26.6388L32.4672 24.9666L37.1727 29.711L46.2727 20.6499L47.9061 22.2443L37.1727 33.0166ZM26.4783 45.8888L38.4172 49.3888L48.0616 46.3555C48.0616 45.8369 47.8607 45.4027 47.4589 45.0527C47.057 44.7027 46.5839 44.5277 46.0394 44.5277H37.9116C37.4968 44.5277 37.0885 44.4953 36.6866 44.4305C36.2848 44.3656 35.8894 44.2684 35.5005 44.1388L31.7672 43.011L32.5061 40.6388L36.1616 41.8832C36.4468 41.9869 36.7385 42.0647 37.0366 42.1166C37.3348 42.1684 37.6264 42.1943 37.9116 42.1943H40.0894C40.0894 41.6499 39.9079 41.1768 39.545 40.7749C39.182 40.3731 38.7413 40.0684 38.2227 39.861L29.745 36.6332H26.4783V45.8888ZM18.1172 50.5555V34.2999H29.7061C29.8357 34.2999 29.9718 34.3129 30.1144 34.3388C30.257 34.3647 30.3931 34.4036 30.5227 34.4555L39.0005 37.6443C39.9857 38.0073 40.8218 38.5906 41.5089 39.3943C42.1959 40.1981 42.5394 41.1314 42.5394 42.1943H46.0394C47.3616 42.1943 48.4829 42.674 49.4033 43.6332C50.3237 44.5925 50.7839 45.7332 50.7839 47.0555V48.0666L38.6116 51.7999L26.4783 48.3388V50.5555H18.1172ZM20.4505 48.2221H24.1061V36.6332H20.4505V48.2221Z" fill="white"/>
                        </g>
                    </svg>

                </div>
                <div class="objective-text ml-4 pr-8">
                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"><span class="font-bold text-white">Required Withdrawal (Investments)</span> - this is a withdrawal from available liquid assets when there is a shortfall between your income and expenditure in a year.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="34.5017" transform="rotate(0.833608 35 35)" fill="#7474C1"/>
                        <mask id="mask0_40_532" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="16" width="38" height="38">
                            <rect x="16.5609" y="16.3335" width="37.3333" height="37.3333" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_532)">
                            <path d="M25.4772 49.5497V46.4453C26.3418 45.9426 27.0609 45.4201 27.6347 44.8779C28.2085 44.3358 28.6715 43.7868 29.0237 43.2311C29.3759 42.6754 29.6228 42.1137 29.7643 41.5462C29.9057 40.9786 29.9765 40.4108 29.9765 39.8427C29.9765 39.5496 29.9607 39.2585 29.9291 38.9694C29.8976 38.6803 29.8502 38.3891 29.7871 38.0961H25.4772V35.0154H28.2028C27.2503 33.6447 26.6227 32.4323 26.3201 31.3784C26.0174 30.3245 25.8661 29.2694 25.8661 28.2132C25.8661 25.8291 26.6971 23.8061 28.3592 22.144C30.0213 20.4819 32.0444 19.6509 34.4284 19.6509C36.2895 19.6509 37.9482 20.1198 39.4045 21.0576C40.8609 21.9955 41.9351 23.28 42.6273 24.911L39.7849 26.1132C39.3183 25.0548 38.6005 24.2302 37.6317 23.6396C36.6628 23.0489 35.5951 22.7535 34.4284 22.7535C32.9089 22.7535 31.6191 23.2771 30.559 24.3243C29.4988 25.3715 28.9688 26.6678 28.9688 28.2132C28.9688 29.1803 29.1395 30.1537 29.4811 31.1333C29.8226 32.1128 30.6229 33.4069 31.8821 35.0154H38.691V38.0961H32.8847C32.9478 38.3891 32.996 38.6932 33.0293 39.0083C33.0625 39.3233 33.0792 39.6015 33.0792 39.8427C33.0792 41.1142 32.814 42.3169 32.2836 43.4509C31.7533 44.5849 31.0417 45.5909 30.149 46.469H38.3173C39.1999 46.469 39.9951 46.2207 40.703 45.7242C41.4109 45.2277 41.9187 44.3814 42.2265 43.1854L45.0181 44.3284C44.6371 46.0339 43.7905 47.3305 42.4784 48.2182C41.1663 49.1059 39.7793 49.5497 38.3173 49.5497H25.4772Z" fill="white"/>
                        </g>
                    </svg>
                </div>
                <div class="objective-text ml-4 pr-8">
                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"><span class="font-bold text-white">Surplus account</span> - any surplus income (i.e. when your income exceeds your expenditure in a year) is assumed to be saved as cash in this account. This is also the first liquid asset to be drawn from if there is a shortfall.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex mt-4">
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="34.9999" cy="35" r="34.5017" transform="rotate(0.833608 34.9999 35)" fill="#7474C1"/>
                        <mask id="mask0_40_507" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="16" width="38" height="38">
                            <rect x="16.5592" y="16.3335" width="37.3333" height="37.3333" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_507)">
                            <path d="M41.4484 33.4448C41.8892 33.4448 42.2586 33.2958 42.5568 32.9976C42.8549 32.6995 43.004 32.33 43.004 31.8893C43.004 31.4485 42.8549 31.0791 42.5568 30.7809C42.2586 30.4828 41.8892 30.3337 41.4484 30.3337C41.0077 30.3337 40.6382 30.4828 40.3401 30.7809C40.042 31.0791 39.8929 31.4485 39.8929 31.8893C39.8929 32.33 40.042 32.6995 40.3401 32.9976C40.6382 33.2958 41.0077 33.4448 41.4484 33.4448ZM29.004 29.5559H36.7818V27.2226H29.004V29.5559ZM23.5595 49.0004C22.6781 46.0448 21.8095 43.0958 20.954 40.1532C20.0984 37.2106 19.6707 34.1967 19.6707 31.1115C19.6707 28.7263 20.5003 26.7041 22.1595 25.0448C23.8188 23.3856 25.841 22.5559 28.2262 22.5559H36.004C36.7558 21.5708 37.6697 20.8059 38.7457 20.2615C39.8216 19.717 40.9818 19.4448 42.2262 19.4448C42.8744 19.4448 43.4253 19.6717 43.879 20.1254C44.3327 20.5791 44.5595 21.13 44.5595 21.7782C44.5595 21.9337 44.5401 22.0893 44.5012 22.2448C44.4623 22.4004 44.417 22.543 44.3651 22.6726C44.2614 22.9578 44.1642 23.2495 44.0734 23.5476C43.9827 23.8458 43.9114 24.1504 43.8595 24.4615L47.3984 28.0004H50.7818V38.8504L46.3873 40.2893L43.7818 49.0004H35.2262V45.8893H32.1151V49.0004H23.5595ZM25.3095 46.667H29.7818V43.5559H37.5595V46.667H42.0318L44.4818 38.5004L48.4484 37.1393V30.3337H46.4262L41.4484 25.3559C41.4744 24.7078 41.5586 24.0791 41.7012 23.4698C41.8438 22.8606 41.9929 22.2448 42.1484 21.6226C41.1632 21.8819 40.2299 22.2643 39.3484 22.7698C38.467 23.2754 37.7929 23.9819 37.3262 24.8893H28.2262C26.5077 24.8893 25.041 25.4967 23.8262 26.7115C22.6114 27.9263 22.004 29.393 22.004 31.1115C22.004 33.786 22.3799 36.399 23.1318 38.9507C23.8836 41.5023 24.6095 44.0745 25.3095 46.667Z" fill="white"/>
                        </g>
                    </svg>
                </div>
                <div class="objective-text ml-4 pr-8">
                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"><span class="font-bold text-white">Pension (accessible)</span> - your pensions that you can draw from because you have reached your minimum pension age.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <div class="flex objective">
                <div class="objective-icon flex-shrink-0">
                    <svg class="w-10" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="35" cy="35" r="34.5017" transform="rotate(0.833608 35 35)" fill="#7474C1"/>
                        <mask id="mask0_40_517" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="16" y="16" width="38" height="38">
                            <rect x="16.5609" y="16.3335" width="37.3333" height="37.3333" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_40_517)">
                            <path d="M37.1727 33.0166L30.795 26.6388L32.4672 24.9666L37.1727 29.711L46.2727 20.6499L47.9061 22.2443L37.1727 33.0166ZM26.4783 45.8888L38.4172 49.3888L48.0616 46.3555C48.0616 45.8369 47.8607 45.4027 47.4589 45.0527C47.057 44.7027 46.5839 44.5277 46.0394 44.5277H37.9116C37.4968 44.5277 37.0885 44.4953 36.6866 44.4305C36.2848 44.3656 35.8894 44.2684 35.5005 44.1388L31.7672 43.011L32.5061 40.6388L36.1616 41.8832C36.4468 41.9869 36.7385 42.0647 37.0366 42.1166C37.3348 42.1684 37.6264 42.1943 37.9116 42.1943H40.0894C40.0894 41.6499 39.9079 41.1768 39.545 40.7749C39.182 40.3731 38.7413 40.0684 38.2227 39.861L29.745 36.6332H26.4783V45.8888ZM18.1172 50.5555V34.2999H29.7061C29.8357 34.2999 29.9718 34.3129 30.1144 34.3388C30.257 34.3647 30.3931 34.4036 30.5227 34.4555L39.0005 37.6443C39.9857 38.0073 40.8218 38.5906 41.5089 39.3943C42.1959 40.1981 42.5394 41.1314 42.5394 42.1943H46.0394C47.3616 42.1943 48.4829 42.674 49.4033 43.6332C50.3237 44.5925 50.7839 45.7332 50.7839 47.0555V48.0666L38.6116 51.7999L26.4783 48.3388V50.5555H18.1172ZM20.4505 48.2221H24.1061V36.6332H20.4505V48.2221Z" fill="white"/>
                        </g>
                    </svg>
                </div>
                <div class="objective-text ml-4 pr-8">
                    <div class="mt-0 text-sm">
                        <p class="small-cashflow"><span class="font-bold text-white">Required Withdrawal (Pensions)</span> - this is a withdrawal from available pensions when there is a shortfall between your income and expenditure in a year.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="page-number"></div>
    @include('documents.includes.footer', ['previousLink' => '#your-finances', 'nextLink' => '#'])
</div>


<!-- NEXT STEPS -->
<!-- SUMMARY -->
<div class="page" id="introduction">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <div class="flex">
        <div class="w-1/2 mt-10">
            <div class="w-3/4">
                <h1 class="mb-8">Summary</h1>
                <p class="first-description">
                    In addition to the objectives highlighted earlier, we identified the following areas that you should consider to make your financial planning strategy successful. Your next report will show you how:
                </p>
            </div>

            <div class="flex mt-12 mb-8">
                <div class="w-1/2">
                    <div class="flex">
                        <div class="w-1/3">
                            <img class="w-12" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/warning-icon.svg">
                        </div>
                        <div class="w-2/3">
                            <p class="font-bold text-white mt-1 -ml-3 warning-text">
                                To avoid a strategy that suffers from static asset allocation
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-1/2">
                    <div class="flex">
                        <div class="w-1/3">
                            <img class="w-12" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/warning-icon.svg">
                        </div>
                        <div class="w-2/3">
                            <p class="font-bold text-white mt-1 -ml-3 warning-text">
                                An advice-based service can reduce the level of administration
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex">
                <div class="w-1/2">
                    <div class="flex">
                        <div class="w-1/3">
                            <img class="w-12" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/warning-icon.svg">
                        </div>
                        <div class="w-2/3">
                            <p class="font-bold text-white mt-1 -ml-3 warning-text">
                                To create a tax-efficient withdrawal strategy
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-1/2">
                    <div class="flex">
                        <div class="w-1/3">
                            <img class="w-12" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/warning-icon.svg">
                        </div>
                        <div class="w-2/3">
                            <p class="font-bold text-white mt-1 -ml-3 warning-text">
                                The consolidation of numerous pension pots can benefit you
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="w-1/2">
            <svg class="ml-28 mt-14 float-right w-3/4" viewBox="0 0 463 480" fill="none" xmlns="http://www.w3.org/2000/svg">
                <ellipse cx="222.022" cy="230.771" rx="192.856" ry="192.856" transform="rotate(180 222.022 230.771)" fill="#D9D9D9"/>
                <circle cx="379.878" cy="396.648" r="82.3921" fill="white"/>
                <circle cx="49.5819" cy="45.9354" r="45.9354" fill="#D9D9D9"/>
                <path d="M322.277 72.5634L345.492 72.5634L345.492 95.7783L322.277 72.5634Z" fill="#8EC03B"/>
                <path d="M322.277 49.3495L345.492 49.3495L345.492 72.5645L322.277 49.3495Z" fill="#8EC03B"/>
                <path d="M322.277 26.1317L345.492 26.1317L345.492 49.3491L322.277 26.1317Z" fill="#8EC03B"/>
                <path d="M322.277 2.91691L345.492 2.91691L345.492 26.1318L322.277 2.91691Z" fill="#8EC03B"/>
                <path d="M345.492 72.5639L368.707 72.5639L368.707 95.7788L345.492 72.5639Z" fill="#8EC03B"/>
                <path d="M345.492 49.3495L368.707 49.3495L368.707 72.5645L345.492 49.3495Z" fill="#8EC03B"/>
                <path d="M345.492 26.1317L368.707 26.1317L368.707 49.3491L345.492 26.1317Z" fill="#8EC03B"/>
                <path d="M345.492 2.91691L368.707 2.91691L368.707 26.1318L345.492 2.91691Z" fill="#8EC03B"/>
                <path d="M368.707 72.5639L391.924 72.5639L391.924 95.7788L368.707 72.5639Z" fill="#8EC03B"/>
                <path d="M368.707 49.3495L391.924 49.3495L391.924 72.5645L368.707 49.3495Z" fill="#8EC03B"/>
                <path d="M368.707 26.1317L391.924 26.1317L391.924 49.3491L368.707 26.1317Z" fill="#8EC03B"/>
                <path d="M368.707 2.91691L391.924 2.91691L391.924 26.1318L368.707 2.91691Z" fill="#8EC03B"/>
                <path d="M391.925 72.5639L415.14 72.5639L415.14 95.7788L391.925 72.5639Z" fill="#8EC03B"/>
                <path d="M391.925 49.3495L415.14 49.3495L415.14 72.5645L391.925 49.3495Z" fill="#8EC03B"/>
                <path d="M391.925 26.1317L415.14 26.1317L415.14 49.3491L391.925 26.1317Z" fill="#8EC03B"/>
                <path d="M391.925 2.91691L415.14 2.91691L415.14 26.1318L391.925 2.91691Z" fill="#8EC03B"/>
                <path d="M75.5941 285.091H68.0488V428.731H75.5941V285.091Z" fill="#4FA3DE"/>
                <path d="M143.639 353.139H0V360.684H143.639V353.139Z" fill="#4FA3DE"/>
                <path d="M119.947 303.473L18.3613 405.024L23.6957 410.36L125.282 308.809L119.947 303.473Z" fill="#4FA3DE"/>
                <path d="M23.7044 303.457L18.3691 308.792L119.938 410.361L125.273 405.026L23.7044 303.457Z" fill="#4FA3DE"/>
                <path d="M95.9973 289.185L40.6816 421.747L47.645 424.652L102.961 292.091L95.9973 289.185Z" fill="#4FA3DE"/>
                <path d="M6.98064 325.779L4.07617 332.743L136.647 388.036L139.551 381.072L6.98064 325.779Z" fill="#4FA3DE"/>
                <path d="M136.804 326.096L3.96484 380.74L6.83524 387.718L139.675 333.074L136.804 326.096Z" fill="#4FA3DE"/>
                <path d="M47.9857 289.051L41.0078 291.922L95.6518 424.761L102.63 421.891L47.9857 289.051Z" fill="#4FA3DE"/>
            </svg>

        </div>
    </div>

    @include('documents.includes.footer', ['previousLink' => '#front-cover', 'nextLink' => '#the-my-wealth-service'])

</div>

</body>
</html>
