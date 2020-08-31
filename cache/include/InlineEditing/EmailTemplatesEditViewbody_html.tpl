
{if strlen($fields.body_html.value) <= 0}
{assign var="value" value=$fields.body_html.default_value }
{else}
{assign var="value" value=$fields.body_html.value }
{/if}  
<input type='text' name='{$fields.body_html.name}' 
    id='{$fields.body_html.name}' size='30' 
     
    value='{$value}' title=''  tabindex='1'      >