
{if strval($fields.text_only.value) == "1" || strval($fields.text_only.value) == "yes" || strval($fields.text_only.value) == "on"} 
{assign var="checked" value='checked="checked"'}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.text_only.name}" value="0"> 
<input type="checkbox" id="{$fields.text_only.name}" 
name="{$fields.text_only.name}" 
value="1" title='' tabindex="1" {$checked} >