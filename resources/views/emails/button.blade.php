@if($action)
    <table cellspacing="0" cellpadding="0" border="0" align="center" style="Margin: auto">
        <tr>
            <td style="border-radius: 3px; background: #222222; text-align: center;" class="button-td">
                <a href="{{ $action_link }}" style="background: #555555; border: 15px solid #555555; padding: 0 10px;color: #ffffff; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 0px; font-weight: bold;" class="button-a">
                    <!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->{{ $action }}<!--[if mso]>&nbsp;&nbsp;&nbsp;&nbsp;<![endif]-->
                </a>
            </td>
        </tr>
    </table>
@endif