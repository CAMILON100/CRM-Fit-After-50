<script type="text/javascript">
    var ERR_NO_SINGLE_QUOTE = '{$APP.ERR_NO_SINGLE_QUOTE}';
    var cannotEq = "{$APP.ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP}"; {
        literal
    }

    function verify_data(formName) {
        var f = document.getElementById(formName);

        for (i = 0; i < f.elements.length; i++) {
            if (f.elements[i].value == "'") {
                alert(ERR_NO_SINGLE_QUOTE + " " + f.elements[i].name);
                return false;
            }
        }
        return true;
    }
</script>
{/literal}
<BR>
<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php?module=Esignature&action=esignature&process=true">

    <span class='error'>{$error.main}</span>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
        <tr>
            <td>
                <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" type="submit" name="save" onclick="return verify_data('ConfigureSettings');" value="  {$APP.LBL_SAVE_BUTTON_LABEL}  ">
                <input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}" onclick="document.location.href='index.php?module=Esignature&action=index'" class="button" type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  "> </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <th align="left" scope="row" colspan="4">
                <h4>{$MOD.ESIGNATURE_SETTINGS}</h4></th>
        </tr>
        <tr>
            <td nowrap width="10%" scope="row">{$MOD.LBL_ESIGNATURE_ENABLE}: </td>
            <td nowrap width="25%" scope="row">
                <input type='checkbox' name='esignature_enable' id='esignature_enable' size="60" value='esignature_enable' {$ESIGNATUR_ENABLED}>
            </td>
        </tr>
        <tr>
            <td nowrap width="10%" scope="row">{$MOD.LBL_ESIGNATURE_MODULES}: </td>
            <td nowrap width="25%" scope="row">
                <input type='checkbox' name='esignature_modules[]' id='esignature_modules[]' size="60" value='AOS_Quotes' {$QUOTES_CHECKED}>Quotes&emsp;&emsp;
                <input type='checkbox' name='esignature_modules[]' id='esignature_modules[]' size="60" value='AOS_Invoices' {$INVOICE_CHECKED}>Invoices&emsp;&emsp;
                <input type='checkbox' name='esignature_modules[]' id='esignature_modules[]' size="60" value='AOS_Contracts' {$CONTRACT_CHECKED}>Contract&emsp;&emsp;
            </td>
        </tr>  
        <tr>
            <td nowrap width="10%" scope="row">{$MOD.LBL_ESIGNATURE_FEATURES}: <br>(With respect to Contracts only)</td>
            <td nowrap width="25%" scope="row">
                <input type='checkbox' name='esignature_features[]' id='esignature_features[]' size="60" value='Customer' {$CUSTOMER}>Customer Oriented&emsp;&emsp;
                <!--<input type='checkbox' name='esignature_features[]' id='esignature_features[]' size="60" value='Client' {$CLIENT}>Client Oriented&emsp;&emsp;-->

            </td>
        </tr>      
    </table>
    <div style="padding-top: 10px;">
        <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary" type="submit" name="save" value="  {$APP.LBL_SAVE_BUTTON_LABEL}  " onclick="return verify_data('ConfigureSettings');" />
        <input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}" onclick="document.location.href='index.php?module=Administration&action=index'" class="button" type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  " />
    </div>
    {$JAVASCRIPT}
</form>
