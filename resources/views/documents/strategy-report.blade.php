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
    .next-steps-description {
        font-size: 10px;
        line-height: 16px;
    }
    .next-steps-presentation-img {
        width: 250px;
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
        <div class="w-full mt-12">
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
                <img class="inline w-6" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-learn-more.svg">
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
            <img class="inline w-5" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-learn-more.svg">
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

            <img class="ml-28 mt-14" width="75%" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/your-cashflow-forecast.svg">

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

                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-liquid.svg">

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

                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-non-accessible.svg">

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
                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-shortfall.svg">
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
                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-non-liquid.svg">
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
                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-withdrawal.svg">
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

                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-surplus.svg">

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
                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-pension.svg">
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
                    <img class="w-10" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/icon-withdrawal.svg">
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
<div class="page" id="next-steps-summary">

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

            <img class="ml-28 mt-14 float-right w-3/4" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/summary.svg">

        </div>
    </div>

    @include('documents.includes.footer', ['previousLink' => '#front-cover', 'nextLink' => '#the-my-wealth-service'])

</div>



<!-- NEXT STEPS -->
<!-- YOUR OBJECTIVES (VARIABLE CONTENT) -->
<div class="page" id="next-steps-your-objectives">

    @include('documents.includes.header', ['activeLink' => 'introduction'])

    <div class="flex">
        <div class="w-2/3 mt-16">
            <div class="w-full">
                <h1 class="mb-8">Next steps</h1>
            </div>
            <div class="flex">
                <div class="w-1/2">
                    <p class="next-steps-description">
                        In your Advice Report, we will look at your current situation in more detail and will provide recommendations on how to overcome the areas identified previously.
                        <br><br>
                        It will demonstrate how a coherent investment strategy can meet your specific objectives and to provide you with peace of mind.
                        <br><br>
                        Such an investment strategy should be tailored to your situation, taking into account not only your immediate and longer-term aims and objectives, but also your attitude towards investment risk.
                    </p>
                </div>
                <div class="w-1/2">
                    <p class="next-steps-description ml-12">
                        An essential pillar of a successful investment strategy is ongoing planning advice. To ensure essential changes are carried out on your behalf it should be professionally managed on an ongoing basis.
                        <br><br>
                        I look forward to presenting my recommendations at our next meeting.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-1/3">
            <img class="ml-28 mt-14 float-right next-steps-presentation-img" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/your-journey.svg">
        </div>
    </div>


    <div class="w-full journey-line">
        <img class="upload-to-s3 w-5/6 mt-6" src="https://d3a6n7gvbr88rj.cloudfront.net/adviser-hub/strategy-report/next-steps-timeline.svg">
    </div>

    @include('documents.includes.footer', ['previousLink' => '#front-cover', 'nextLink' => '#the-my-wealth-service'])

</div>

</body>
</html>
