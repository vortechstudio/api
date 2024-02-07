@extends("mails.layouts.template")

@section("content")
    <table cellpadding="0" cellspacing="0" class="es-content" align="center" role="none"
           style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;width:100%;table-layout:fixed !important">
        <tr>
            <td align="center" style="padding:0;Margin:0">
                <table bgcolor="#ffffff" class="es-content-body" align="center" cellpadding="0"
                       cellspacing="0" role="none"
                       style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px">
                    <tr>
                        <td align="left"
                            style="Margin:0;padding-right:20px;padding-bottom:10px;padding-left:20px;padding-top:30px">
                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                   style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                    <td align="center" valign="top" style="padding:0;Margin:0;width:560px">
                                        <table cellpadding="0" cellspacing="0" width="100%"
                                               role="presentation"
                                               style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                            <tr>
                                                <td align="center"
                                                    style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px;font-size:0px">
                                                    <img
                                                        src="https://ffhbprf.stripocdn.email/content/guids/CABINET_85c22792fecf9c9b140b6d4573cab49e7233a370f6190b1d104445682a592339/images/pin.png"
                                                        alt=""
                                                        style="display:block;font-size:14px;border:0;outline:none;text-decoration:none"
                                                        width="100" class="adapt-img"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" class="es-m-txt-c"
                                                    style="padding:0;Margin:0;padding-bottom:10px"><h1
                                                        style="Margin:0;font-family:arial, 'helvetica neue', helvetica, sans-serif;mso-line-height-rule:exactly;letter-spacing:0;font-size:46px;font-style:normal;font-weight:bold;line-height:46px;color:#333333">
                                                        Information mise à jours !</h1></td>
                                            </tr>
                                            <tr>
                                                <td align="center" class="es-m-p0r es-m-p0l"
                                                    style="Margin:0;padding-top:5px;padding-right:40px;padding-bottom:5px;padding-left:40px">
                                                    <p style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px">
                                                        L'adresse mail de votre compte à été mise à jour.<br>
                                                        Ce changement à effet immédiat d'est réception de cette email.<br>
                                                    </p>
                                                    <p style="Margin:0;mso-line-height-rule:exactly;font-family:arial, 'helvetica neue', helvetica, sans-serif;line-height:21px;letter-spacing:0;color:#333333;font-size:14px">
                                                        Adresse Mail: <strong>{{ $user->email }}</strong>
                                                    </p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="left"
                            style="padding:0;Margin:0;padding-right:20px;padding-left:20px;padding-bottom:30px">
                            <table cellpadding="0" cellspacing="0" width="100%" role="none"
                                   style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px">
                                <tr>
                                    <td align="center" valign="top" style="padding:0;Margin:0;width:560px">
                                        <table cellpadding="0" cellspacing="0" width="100%"
                                               style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:separate;border-spacing:0px;border-radius:5px"
                                               role="none">
                                            <tr>
                                                <td align="center"
                                                    style="padding:0;Margin:0;display:none"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@endsection
