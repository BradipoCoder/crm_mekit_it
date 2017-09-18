{*<hr />*}
{*<div class="sugar_field" id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}">*}

{*<img src="index.php?entryPoint=download&id={$fields.{{$vardef.fileId}}.value}_{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{$fields.width.value}&type={{$vardef.linkModule}}" style="max-width: {if !$vardef.width}{{$vardef.width}}{else}200{/if}px;" height="{if !$vardef.height}{{$vardef.height}}{else}50{/if}">*}
{*</div>*}
{*<hr />*}


{* By setting an image field width and height to 1 (cannot do 0 in studio) you will have a reponsive display *}



{*<pre>*}
    {*ADAM-TEST: {{$vardef.extended_options.responsive}}*}
{*</pre>*}

<div class="sugar_field"
      id="{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}">
<img
        src="index.php?entryPoint=download&id={$fields.{{$vardef.fileId}}.value}_{{if empty($displayParams.idName)}}{{sugarvar key='name'}}{{else}}{{$displayParams.idName}}{{/if}}{$fields.width.value}&type={{$vardef.linkModule}}"
        class="{{$displayParams.img_class}}" style="{{$displayParams.img_style}}"/>

</div>