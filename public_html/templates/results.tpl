{foreach $results as $field}
    <div class="row">
        <div class="col-2">{$field['label']}:</div>
        <div class="col-10">{$field['value']}</div>
    </div>
{/foreach}
