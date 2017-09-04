<div class="task-overview-dashlet container-fluid">
    <div class="row">


        {foreach from=$counters key=k item=counter}
            <div class="col-md-4 data {$counter.class}">
                <a href="{$counter.link}">
                    <div class="counter circle">
                        <span>{$counter.count}</span>
                    </div>
                </a>
                <div class="counter-name">
                    {$counter.title}
                </div>
            </div>
        {/foreach}

        {*{section name=counter_index start=1 loop=3 step=1}*}
            {*{$smarty.section.counter_index.index}*}
        {*{/section}*}

    </div>
</div>