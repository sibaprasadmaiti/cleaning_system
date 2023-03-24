<style type="text/css">
    /* @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700); */

    body {
        margin: 0;
        padding: 0;
        background: red;
    }

    div,
    p,
    a,
    li,
    td {
        -webkit-text-size-adjust: none;
    }

    .ReadMsgBody {
        width: 100%;
        background-color: #ffffff;
    }

    .ExternalClass {
        width: 100%;
        background-color: #ffffff;
    }

    body {
        width: 100%;
        height: 100%;
        background-color:blue;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
    }

    html {
        width: 100%;
    }

    p {
        padding: 0 !important;
        margin-top: 0 !important;
        margin-right: 0 !important;
        margin-bottom: 0 !important;
        margin-left: 0 !important;
    }

</style>
<!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
    <tr>
        <td height="20"></td>
    </tr>
    <tr>
        <td>
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                <tr>
                    <td height="40"></td>
                </tr>
                <tr>
                    <td>
                        <table width="560" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                            <tbody>
                                <tr>
                                    <td>
                                        <table width="" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                            <tbody>
                                                <tr>
                                                    <td width='350' align="left"> <img src="https://media-exp1.licdn.com/dms/image/C510BAQE6mnHjbgWpkw/company-logo_200_200/0?e=2159024400&v=beta&t=fUa7UKtX-Wl3yDBXDOzKzn86G0FOkUO7tJ_cNpv02Qw" width="100" height="100" alt="logo" border="0" /></td>
                                                    <td width='350'>
                                                        <span style="font-size: 21px; color: #ff0000; letter-spacing: -1px; line-height: 1; vertical-align: top; text-align: right;"><b>Company name</b></span><br>
                                                        <small style="font-size: 14px;margin-top:10">
                                                            104, Vasudev Chambers, Opp D-Mart, Near Wockhardt Hospital, Mulund- Goregaon Link Road, Bhandup, Mumbai, Maharashtra 400078.
                                                        </small>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="40"></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="400" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                            <tbody>
                                                <tr>
                                                    <td style="font-size: 20px; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                        <strong>Message</strong>
                                                    </td>
                                                </tr>
                                                  <tr>
                                                    <td width='100%' style="font-size: 14px; color: #5b5b5b; line-height: 20px; vertical-align: top;text-align: justify;">
                                                        <?php echo $message; ?>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                                <tr>
                                    <td height="40"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="400" border="0" cellpadding="0" cellspacing="0" align="left" class="col">
                                            <tbody>
                                                <tr>
                                                    <td style="font-size: 20px; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                        <strong>Images</strong>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                                <tr>
                                    <td height="40"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table width="480" border="0" cellpadding="0" cellspacing="0" align="center" class="fullPadding">
                                            <tbody>
                                            <?php if ( ! empty($totalFiles)) {
                                                        foreach ($totalFiles as $k => $v) {
                                                            $src = base_url('uploads/' . $v); ?>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo $src; ?>" width="700" height="100" alt="logo" border="0" />
                                                    </td>
                                                </tr>
                                                <?php } } ?>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

</table>
