<div class="container-fluid">
    <form name='configure_{$id}' action="index.php" method="post"
          onSubmit='return SUGAR.dashlets.postForm("configure_{$id}", SUGAR.mySugar.uncoverPage);'
          class="form-horizontal dashlet-config-form">
        <input type='hidden' name='id' value='{$id}'>
        <input type='hidden' name='module' id='task_overview' value='Home'>
        <input type='hidden' name='action' value='ConfigureDashlet'>
        <input type='hidden' name='to_pdf' value='true'>
        <input type='hidden' name='configure' value='true'>

        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">{$LANG.LBL_CONF_TITLE}</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" placeholder="{$LANG.LBL_CONF_TITLE}" value="{$title}">
            </div>
        </div>

        {foreach from=$counters key=k item=counter}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Counter {$counter.number}</h3>
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <label for="title-{$counter.number}" class="col-sm-2 control-label">{$LANG.LBL_CONF_DATA_TITLE}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title-{$counter.number}" value="{$counter.title}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="filterid-{$counter.number}" class="col-sm-2 control-label">{$LANG.LBL_CONF_DATA_FILTER_ID}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="filterid-{$counter.number}" value="{$counter.filterid}">
                        </div>
                    </div>

                </div>
            </div>
        {/foreach}

        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-lg btn-primary pull-right">{$LANG.LBL_CONF_SAVE}</button>
            </div>
        </div>
    </form>
</div>
