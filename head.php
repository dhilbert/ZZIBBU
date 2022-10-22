

<!DOCTYPE HTML>
<html lang="ko">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no" />
    <title>지현이 바보</title>
    <link rel="icon" type="image/x-icon" href="https://metlifewelfare.org/images/comm/favicon.ico" />
    
    <meta name="naver-site-verification" content="3ff9b539027d80a2e6fcf6f9efea981b5097576f" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://www.metlife.co.kr/" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="email=no" />
    <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon" />
 
    <script type="text/javascript">
        var campaignID = '';
        var queryParametersCampaign = location.search.substring(1) ? location.search.substring(1) : '';
        function getQueryStringParams(name) {
            var match = RegExp('[?&]' + name + '=([^&#]*)', 'i').exec(window.location.search);
            var queryParam = match && match[1];
            if (queryParam == null) {
                return "";
            }
            else {
                return queryParam;
            }
        }
        if (queryParametersCampaign != '') {
            campaignID = getQueryStringParams('cid');
            sessionStorage.setItem("digitialDataQueryParametersCampaign", queryParametersCampaign);
            if (campaignID != null && campaignID != "") {
                sessionStorage.setItem("digitialDataCampaignID", campaignID);
            } else {
                if (sessionStorage.getItem("digitialDataCampaignID") != null && sessionStorage.getItem("digitialDataCampaignID") != "") {
                    campaignID = sessionStorage.getItem("digitialDataCampaignID");
                }
            }
        } else if (sessionStorage.getItem("digitialDataQueryParametersCampaign") != null && sessionStorage.getItem("digitialDataQueryParametersCampaign") != "") {
            queryParametersCampaign = sessionStorage.getItem("digitialDataQueryParametersCampaign");
            campaignID = sessionStorage.getItem("digitialDataCampaignID");
        }
    </script>
    <script type="text/javascript">
        var pagePath = "https://www.metlife.co.kr/content/metlife/kr/homepage";
        window.digitalData = {
            version: '1.0',
            eventTrack: function (cevt, eventDetail) {
                var msg = ' The "cevt" argument (required) is a string defining the Javascript custom event name';
                if (typeof cevt !== 'string' || cevt.length < 1) {
                    throw msg;
                }
                if (typeof digitalData.event !== 'object') {
                    digitalData.event = [];
                }
                if (typeof eventDetail !== 'object') {
                    eventDetail = {
                        eventName: cevt
                    };
                }
                digitalData.event.push(eventDetail);
                var ev = new CustomEvent(cevt, {
                    'detail': eventDetail
                });
                document.getElementsByTagName('body')[0].dispatchEvent(ev);
            },
            getEventAttr: function () {
                var ev, i;
                ev = digitalData.event;
                i = ev.length - 1;
                return ev[i].attributes;
            },
            campaign: {
                id: campaignID,
                queryStringParameters: queryParametersCampaign
            },
            page: {
                pageInfo: {
                    pageTemplateType: "/apps/MetlifeMarketGlobal/templates/kr/homepage",
                    pageType: "Unspecified",
                    audienceType: "Uncategorized"
                }
            }
        };
    </script>
    <script type="text/javascript">
        (function (win, doc, style, timeout) {
            var STYLE_ID = 'at-body-style';
            function getParent() {
                return doc.getElementsByTagName('head')[0];
            }
            function addStyle(parent, id, def) {
                if (!parent) {
                    return;
                }
                var style = doc.createElement('style');
                style.id = id;
                style.innerHTML = def;
                parent.appendChild(style);
            }
            function removeStyle(parent, id) {
                if (!parent) {
                    return;
                }
                var style = doc.getElementById(id);
                if (!style) {
                    return;
                }
                parent.removeChild(style);
            }
            addStyle(getParent(), STYLE_ID, style);
            setTimeout(function () {
                removeStyle(getParent(), STYLE_ID);
            }, timeout);
        }(window, document, "#heroimage {opacity: 0 !important}", 8000));
    </script>
    <script type="text/javascript">
        var oPageName = "MetLife.com ";
        var oPID = 18661;
    </script>
    <script src="https://assets.adobedtm.com/launch-EN9af077367c0244eaa0941827fe2f1746.min.js"></script>
    <script type="text/javascript"
        src="https://www.metlife.co.kr/content/dam/metlife/kr/author/homepage/alert-notification-message-custom-single-pageonly-v2.js"
        defer></script>
    
     <link rel="stylesheet"        href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700|Noto+Sans:400,700&amp;subset=korean,latin-ext" />
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-language/ko.min.css"        type="text/css">
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-base/global.min.css"        type="text/css">
    <link rel="stylesheet" href="https://www.metlife.co.kr/content/dam/metlife/kr/author/homepage/metlife-kr-homepage.css" />
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/renew_2022/renew_2022.css">
    <script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-jquery.min.js"       defer></script>
    <script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/clientlibs/clientlib-base/global.min.js"        defer></script>
	<!--<script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.js"                    defer></script>-->
    <script type="text/javascript" src="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.js" defer></script>
    <link rel="stylesheet" href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/header/clientlibs.min.css"        type="text/css">
    
    <link rel="stylesheet"                   href="https://www.metlife.co.kr/etc.clientlibs/MetlifeMarketCore/components/content/global/immersive-brand-navigation/clientlibs.min.css"                    type="text/css">


    </head>
<body>
    <h1 class="seo-hidden" aria-hidden="true">메트라이프</h1>
    <script type="text/javascript" defer>
        var WRInitTime = (new Date()).getTime();
    </script>
