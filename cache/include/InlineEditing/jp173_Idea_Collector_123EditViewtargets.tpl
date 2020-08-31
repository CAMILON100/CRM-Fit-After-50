
{if empty($fields.targets.value)}
{assign var="value" value=$fields.targets.default_value }
{else}
{assign var="value" value=$fields.targets.value }
{/if}




<textarea  id='{$fields.targets.name}' name='{$fields.targets.name}'
rows="2"
cols="32"
title='Number by list your activities' tabindex="1" 
 >{$value}</textarea>


{literal}{/literal}