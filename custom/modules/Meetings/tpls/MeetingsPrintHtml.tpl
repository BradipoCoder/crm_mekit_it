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

                    <div class="alert alert-warning" role="alert">
                        <strong class="logo">IMP LOGO</strong>
                        Chiara mi ha detto che me lo inviava ... ma sto ancora aspettando ;)
                    </div>

                </td>
            </tr>
            <tr>
                <td>
                    <h1 class="title">{$tplData.title}</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="table table-bordered">
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
                                Data & Ora di Inizio:
                            </td>
                            <td class="data_value">
                                {$tplData.meeting.date_start}
                            </td>
                            <td class="data_name">
                                Data Fine:
                            </td>
                            <td class="data_value">
                                {$tplData.meeting.date_end}
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
                                {$tplData.account.billing_address_street}<br />
                                {$tplData.account.billing_address_postalcode} {$tplData.account.billing_address_city} ({$tplData.account.billing_address_state})

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

                            </td>
                            <td class="data_value">

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

