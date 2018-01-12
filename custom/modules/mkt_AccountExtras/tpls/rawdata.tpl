<html>
<head>
    <link href="{$css_path}" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h1>SPECCHIETTO CLIENTE</h1>
    <h5>[ultimo aggiornamento: {$last_update} ]</h5>


    <table class="datatable client_data">
        <thead>
        <tr>
            <th colspan="2">
                <h3>DATI CLIENTE</h3>
            </th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$client_data key=k item=v}
            <tr>
                <td class="key">
                    <b>{$k}</b>
                </td>
                <td class="val">
                    {$v}
                </td>
            </tr>
        {/foreach}
        </tbody>
    </table>

    <table class="datatable current_month">
        <thead>
            <tr>
                <th colspan="99">
                    <h3>ORDINATO DEL MESE</h3>
                </th>
            </tr>
            <tr class="column_names">
                {foreach from=$current_month[0] key=k item=v}
                    <th>
                        {$k}
                    </th>
                {/foreach}
            </tr>
        </thead>
        <tbody>
        {foreach from=$current_month item=line}
            <tr>
            {foreach from=$line item=v}
                <td>
                    {$v}
                </td>
            {/foreach}
            </tr>
        {/foreach}
        </tbody>
    </table>

    <table class="datatable deadlines">
        <thead>
        <tr>
            <th colspan="99">
                <h3>SCADENZE</h3>
            </th>
        </tr>
        <tr class="column_names">
            {foreach from=$deadlines[0] key=k item=v}
                <th>
                    {$k}
                </th>
            {/foreach}
        </tr>
        </thead>
        <tbody>
        {foreach from=$deadlines item=line}
            <tr>
                {foreach from=$line item=v}
                    <td>
                        {$v}
                    </td>
                {/foreach}
            </tr>
        {/foreach}

        {foreach from=$deadlines_sums key=k item=v}
            <tr>
                <td colspan="6" class="txt-right">
                    <b>{$k}</b>
                </td>
                <td class="txt-left">
                    {$v}
                </td>
            </tr>
        {/foreach}


        </tbody>
    </table>

    <table class="datatable products_recent_buys">
        <thead>
        <tr>
            <th colspan="99">
                <h3>Prodotti acquistati</h3>
            </th>
        </tr>
        <tr class="column_names">
            {foreach from=$products_recent_buys[0] key=k item=v}
                <th>
                    {$k}
                </th>
            {/foreach}
        </tr>
        </thead>
        <tbody>
        {foreach from=$products_recent_buys item=line}
            <tr>
                {foreach from=$line item=v}
                    <td>
                        {$v}
                    </td>
                {/foreach}
            </tr>
        {/foreach}
        </tbody>
    </table>

    <table class="datatable products_recent_non_buys">
        <thead>
        <tr>
            <th colspan="99">
                <h3>Non più acquistati</h3>
            </th>
        </tr>
        <tr class="column_names">
            {foreach from=$products_recent_non_buys[0] key=k item=v}
                <th>
                    {$k}
                </th>
            {/foreach}
        </tr>
        </thead>
        <tbody>
        {foreach from=$products_recent_non_buys item=line}
            <tr>
                {foreach from=$line item=v}
                    <td>
                        {$v}
                    </td>
                {/foreach}
            </tr>
        {/foreach}
        </tbody>
    </table>

</body>
</html>