<html>
<head>
    <title>{$tplData.title}</title>
    {if $tplData.css|@count}
        {foreach from=$tplData.css item=cssPath}
            <link rel="stylesheet" type="text/css" href="{$cssPath}"/>
        {/foreach}
    {/if}
</head>
<body>
    <div id="meetings_print">
        <table class="table no-border">
            <tr>
                <td>
                    <div class="logo">&nbsp;</div>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="4" class="no-padding">
                                <table class="table no-border header-table">
                                    <tr>
                                        <td class="col-a">{$tplData.assigned_user.full_name}</td>
                                        <td class="col-b">{$tplData.ras.name}</td>
                                        <td class="col-c">{$tplData.meeting.date_start}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="data_name">
                                Oggetto:
                            </td>
                            <td class="data_value">
                                {$tplData.meeting.name}
                            </td>
                            <td class="data_name">
                                Stato:
                            </td>
                            <td class="data_value">
                                {$tplData.meeting.status}
                            </td>
                        </tr>
                        <tr>
                            <td class="data_name">
                                Data inizio:
                            </td>
                            <td class="data_value">
                                <span class="nowrap">{$tplData.meeting.date_start}</span>
                            </td>
                            <td class="data_name">
                                Data fine:
                            </td>
                            <td class="data_value">
                                <span class="nowrap">{$tplData.meeting.date_end}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="data_name">
                                RAS:
                            </td>
                            <td class="data_value">
                                {$tplData.ras.name}
                            </td>
                            <td class="data_name">
                                Assegnato a:
                            </td>
                            <td class="data_value">
                                {$tplData.assigned_user.full_name}
                            </td>
                        </tr>
                        <tr>
                            <td class="data_name">
                                Nome azienda:
                            </td>
                            <td class="data_value">
                                {$tplData.account.name}
                            </td>
                            <td class="data_name">
                                Indirizzo:
                            </td>
                            <td class="data_value">
                                <span class="nowrap">{$tplData.account.billing_address_street}</span><br />
                                <span class="nowrap">{$tplData.account.billing_address_postalcode} {$tplData.account.billing_address_city} ({$tplData.account.billing_address_state})</span>

                            </td>
                        </tr>
                        <tr>
                            <td class="data_name">
                                Descrizione problematica:
                            </td>
                            <td class="data_value" colspan="3">
                                {$tplData.ras.descrizione_problematica_c}
                            </td>
                        </tr>
                        <tr>
                            <td class="data_name">
                                Macchinario:
                            </td>
                            <td class="data_value" colspan="3">
                                {$tplData.ras.ref_part_description_c}
                            </td>
                        </tr>
                        <tr>
                            <td class="data_name">
                                Codice macchinario:
                            </td>
                            <td class="data_value">
                                {$tplData.ras.ref_part_number_c}
                            </td>
                            <td class="data_name">
                                Matricola macchinario:
                            </td>
                            <td class="data_value">
                                {$tplData.ras.ref_part_unique_number_c}
                            </td>
                        </tr>

                        <tr>
                            <td class="data_name">
                                Contatto operativo:
                            </td>
                            <td class="data_value">
                                {$tplData.contact.full_name}
                            </td>
                            <td class="data_name">
                                Telefono contatto:
                            </td>
                            <td class="data_value">
                                Cellulare: {$tplData.contact.phone_mobile}<br />
                                Fisso: {$tplData.contact.phone_work}
                            </td>
                        </tr>


                    </table>
                </td>
            </tr>
        </table>
    </div>

    {*<pre>*}
         {*{$tplData|@debug_print_var}*}
    {*</pre>*}

</body>
</html>

