{*<h5 class="maintenance">JACK WAS HERE - UNDER CONSTRUCTION</h5>*}

{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
    <h3 class="maintenance">DUPLICAZIONE ANAGRAFICA</h3>
{/if}

{*INCLUDE THE ORIGINAL HEADER (BUTTON BAR)*}
{{include file="include/EditView/header.tpl"}}