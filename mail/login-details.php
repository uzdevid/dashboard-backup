<?php

use yii\mail\MailerInterface;

/**
 * @var MailerInterface $message
 * @var string $link
 * @var string $password
 */
?>

<!doctype html>
<html ⚡4email data-css-strict>

<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <style amp4email-boilerplate>
        body {
            visibility: hidden
        }
    </style>

    <script async src="https://cdn.ampproject.org/v0.js"></script>


    <style amp-custom>
        .u-row {
            display: flex;
            flex-wrap: nowrap;
            margin-left: 0;
            margin-right: 0;
        }

        .u-row .u-col {
            position: relative;
            width: 100%;
            padding-right: 0;
            padding-left: 0;
        }

        .u-row .u-col.u-col-100 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (max-width: 767px) {
            .u-row:not(.no-stack) {
                flex-wrap: wrap;
            }

            .u-row:not(.no-stack) .u-col {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        body {
            margin: 0;
            padding: 0;
        }

        table,
        tr,
        td {
            vertical-align: top;
            border-collapse: collapse;
        }

        p {
            margin: 0;
        }

        .ie-container table,
        .mso-container table {
            table-layout: fixed;
        }

        * {
            line-height: inherit;
        }

        table,
        td {
            color: #000000;
        }

        #u_body a {
            color: #0000ee;
            text-decoration: underline;
        }
    </style>


</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;background-color: #f9f9f9;color: #000000">
<!--[if IE]>
<div class="ie-container"><![endif]-->
<!--[if mso]>
<div class="mso-container"><![endif]-->
<table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%" cellpadding="0" cellspacing="0">
    <tbody>
    <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse;vertical-align: top">
            <!--[if (mso)|(IE)]>
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td align="center" style="background-color: #f9f9f9;">
            <![endif]-->

            <div style="padding: 0px;">
                <div style="max-width: 600px;margin: 0 auto;background-color: #ffffff;">
                    <div class="u-row">
                        <div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                            <div style="width: 100%;padding:0px;">
                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:20px;font-family:'Cabin',sans-serif;" align="left">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                                        <img align="center" border="0" src="<?php echo $message->embed('img/full-logo.png'); ?>" alt="UzDevid Dashboard" title=""
                                                             style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 250px;" width="383" height="82"/>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding: 0px;">
                <div style="max-width: 600px;margin: 0 auto;background-color: #003399;">
                    <div class="u-row">
                        <div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                            <div style="width: 100%;padding:0px;">
                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:'Cabin',sans-serif;" align="left">
                                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td style="padding-right: 0px;padding-left: 0px;" align="center">
                                                        <amp-img alt="Image" src="https://cdn.templates.unlayer.com/assets/1597218650916-xxxxc.png" width="335" height="93" layout="intrinsic" style="width: 26%;max-width: 26%;"></amp-img>
                                                    </td>
                                                </tr>
                                            </table>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Cabin',sans-serif;" align="left">

                                            <div style="color: #e5eaf5; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                <p style="font-size: 14px; line-height: 140%;"><?php echo Yii::t('system.email', 'Details for accessing the control panel'); ?></p>
                                            </div>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:0px 10px 31px;font-family:'Cabin',sans-serif;" align="left">
                                            <div style="color: #e5eaf5; line-height: 140%; text-align: center; word-wrap: break-word;">
                                                <p style="font-size: 14px; line-height: 140%;">
                                                    <span style="font-size: 28px; line-height: 39.2px;">
                                                        <strong><?php echo Yii::t('system.email', 'You have been registered in the control panel'); ?></strong>
                                                    </span>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="padding: 0px;">
                <div style="max-width: 600px;margin: 0 auto;background-color: #ffffff;">
                    <div class="u-row">
                        <div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                            <div style="width: 100%;padding:0px;">
                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px;font-family:'Cabin',sans-serif;" align="left">
                                            <div style="line-height: 160%; text-align: center; word-wrap: break-word;">
                                                <p style="font-size: 14px; line-height: 160%;">
                                                    <span style="font-size: 18px; line-height: 28.8px;">
                                                        <?php echo Yii::t('system.email', 'Using a password and this email can go to your profile'); ?>
                                                    </span>
                                                </p>

                                                <p style="font-size: 14px; line-height: 140%;padding-top: 100px;">
                                                    <span style="font-size: 28px; line-height: 39.2px;">
                                                        <?php echo Yii::t('system.email', 'Your password: {password}', ['password' => $password]); ?>
                                                    </span>
                                                </p>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Cabin',sans-serif;" align="left">

                                            <!--[if mso]>
                                            <style>.v-button {
                                                background: transparent;
                                            }</style><![endif]-->
                                            <div align="center">
                                                <!--[if mso]>
                                                <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" style="height:46px; v-text-anchor:middle; width:204px;" arcsize="8.5%" stroke="f" fillcolor="#003399">
                                                    <w:anchorlock/>
                                                    <center style="color:#FFFFFF;font-family:'Cabin',sans-serif;"><![endif]-->
                                                <a target="_blank" class="v-button" href="<?php echo $link; ?>"
                                                   style="box-sizing: border-box;display: inline-block;font-family:'Cabin',sans-serif;text-decoration: none;text-align: center;color: #FFFFFF; background-color: #003399; border-radius: 4px;  width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; ">
                                <span style="display:block;padding:14px 44px 13px;line-height:120%;"><span style="font-size: 16px; line-height: 19.2px;">
                                        <strong><span style="line-height: 19.2px; font-size: 16px;"><?php echo Yii::t('system.email', 'Login to control panel'); ?></span></strong></span>
                                </span>
                                                </a>
                                                <!--[if mso]></center></v:roundrect><![endif]-->
                                            </div>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:33px 55px 60px;font-family:'Cabin',sans-serif;" align="left">

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div style="padding: 0px;">
                <div style="max-width: 600px;margin: 0 auto;background-color: #003399;">
                    <div class="u-row">

                        <div class="u-col u-col-100" style="display:flex;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                            <div style="width: 100%;padding:0px;">

                                <table style="font-family:'Cabin',sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                    <tr>
                                        <td style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:'Cabin',sans-serif;" align="left">

                                            <div style="color: #fafafa; line-height: 180%; text-align: center; word-wrap: break-word;">
                                                <p style="font-size: 14px; line-height: 180%;"><span style="font-size: 16px; line-height: 28.8px;">Copyright © UzDevid All Rights Reserved</span></p>
                                            </div>

                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
        </td>
    </tr>
    </tbody>
</table>
<!--[if mso]></div><![endif]-->
<!--[if IE]></div><![endif]-->
</body>

</html>