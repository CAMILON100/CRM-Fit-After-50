<?php /* Smarty version 2.6.31, created on 2020-10-02 04:08:06
         compiled from modules/Configurator/tpls/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_help', 'modules/Configurator/tpls/EditView.tpl', 188, false),array('function', 'sugar_getimage', 'modules/Configurator/tpls/EditView.tpl', 436, false),)), $this); ?>
<form name="ConfigureSettings" enctype="multipart/form-data" method="POST" action="index.php" onSubmit="return (add_checks(document.ConfigureSettings) && check_form('ConfigureSettings'));">
    <input type="hidden" name="action" value="SaveConfig" />
    <input type="hidden" name="module" value="Configurator" />
    <span class="error"><?php echo $this->_tpl_vars['error']['main']; ?>
</span>
    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td>
                <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accesskey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" id="ConfigureSettings_save_button" type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
                &nbsp;<!--<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  id="ConfigureSettings_restore_button"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
  " >-->
                &nbsp;
                <input
                    title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"
                    id="ConfigureSettings_cancel_button"
                    onclick="document.location.href='index.php?module=Administration&action=index'"
                    class="button"
                    type="button"
                    name="cancel"
                    value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  "
                />
            </td>
        </tr>
    </table>

    <div class="edit view table-panel-edit">
        <div class="main main-content-setting">
            <div class="row">
                <div class="col-md-4">
                    <div class="interfases-ui">
                        <?php echo '<?xml'; ?>
 version="1.0" encoding="iso-8859-1"<?php echo '?>'; ?>

                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 480 480" style="enable-background: new 0 0 480 480;" xml:space="preserve">
                            <g>
                                <g>
                                    <path
                                        d="M240,0C107.664,0,0,107.664,0,240c0,57.96,20.656,111.184,54.992,152.704c0.088,0.12,0.096,0.272,0.192,0.384c24.792,29.896,55.928,52.816,90.624,67.624c0.4,0.168,0.792,0.352,1.192,0.52c2.808,1.184,5.648,2.28,8.496,3.352c1.12,0.424,2.24,0.856,3.376,1.264c2.456,0.88,4.928,1.712,7.416,2.512c1.592,0.512,3.184,1.016,4.792,1.496c2.2,0.656,4.408,1.288,6.632,1.888c1.952,0.528,3.92,1.016,5.888,1.488c1.992,0.48,3.992,0.96,6,1.384c2.24,0.48,4.504,0.904,6.776,1.32c1.824,0.336,3.64,0.688,5.48,0.984c2.52,0.408,5.056,0.728,7.6,1.056c1.64,0.208,3.272,0.448,4.92,0.624c2.88,0.304,5.784,0.52,8.696,0.72c1.352,0.096,2.696,0.24,4.056,0.312c4.248,0.24,8.544,0.368,12.872,0.368s8.624-0.128,12.888-0.352c1.36-0.072,2.704-0.216,4.056-0.312c2.912-0.208,5.816-0.416,8.696-0.72c1.648-0.176,3.28-0.416,4.92-0.624c2.544-0.328,5.08-0.648,7.6-1.056c1.832-0.296,3.656-0.648,5.48-0.984c2.264-0.416,4.528-0.84,6.776-1.32c2.008-0.432,4-0.904,6-1.384c1.968-0.48,3.936-0.968,5.888-1.488c2.224-0.592,4.432-1.232,6.632-1.888c1.608-0.48,3.2-0.984,4.792-1.496c2.488-0.8,4.96-1.632,7.416-2.512c1.128-0.408,2.248-0.84,3.376-1.264c2.856-1.072,5.688-2.176,8.496-3.352c0.4-0.168,0.792-0.352,1.192-0.52c34.688-14.808,65.832-37.728,90.624-67.624c0.096-0.112,0.104-0.272,0.192-0.384C459.344,351.184,480,297.96,480,240C480,107.664,372.336,0,240,0z M337.256,441.76c-0.12,0.056-0.232,0.12-0.352,0.176c-2.856,1.376-5.76,2.672-8.688,3.936c-0.664,0.28-1.32,0.568-1.984,0.848c-2.56,1.072-5.152,2.088-7.76,3.064c-1.088,0.408-2.176,0.808-3.272,1.192c-2.312,0.824-4.632,1.616-6.976,2.368c-1.456,0.464-2.92,0.904-4.384,1.336c-2.08,0.624-4.168,1.224-6.28,1.784c-1.776,0.472-3.568,0.904-5.36,1.328c-1.88,0.448-3.752,0.904-5.648,1.304c-2.072,0.44-4.16,0.816-6.24,1.192c-1.688,0.312-3.368,0.64-5.072,0.912c-2.344,0.368-4.712,0.664-7.072,0.96c-1.496,0.192-2.984,0.416-4.496,0.576c-2.696,0.288-5.416,0.472-8.128,0.664c-1.208,0.08-2.408,0.216-3.632,0.28c-3.96,0.208-7.928,0.32-11.912,0.32s-7.952-0.112-11.904-0.32c-1.216-0.064-2.416-0.192-3.632-0.28c-2.72-0.184-5.432-0.376-8.128-0.664c-1.512-0.16-3-0.384-4.496-0.576c-2.36-0.296-4.728-0.592-7.072-0.96c-1.704-0.272-3.384-0.6-5.072-0.912c-2.088-0.376-4.176-0.76-6.24-1.192c-1.896-0.4-3.776-0.856-5.648-1.304c-1.792-0.432-3.584-0.856-5.36-1.328c-2.104-0.56-4.2-1.168-6.28-1.784c-1.464-0.432-2.928-0.872-4.384-1.336c-2.344-0.752-4.672-1.544-6.976-2.368c-1.096-0.392-2.184-0.792-3.272-1.192c-2.608-0.976-5.2-1.992-7.76-3.064c-0.664-0.272-1.312-0.56-1.976-0.84c-2.928-1.256-5.832-2.56-8.696-3.936c-0.12-0.056-0.232-0.112-0.352-0.176c-27.912-13.504-52.568-32.672-72.576-55.952c15.464-56.944,59.24-102.848,115.56-121.112c1.112,0.68,2.272,1.288,3.416,1.928c0.672,0.376,1.336,0.776,2.016,1.136c2.384,1.264,4.8,2.448,7.272,3.512c1.896,0.832,3.856,1.536,5.808,2.256c0.384,0.136,0.768,0.288,1.152,0.424c10.848,3.84,22.456,6.04,34.6,6.04s23.752-2.2,34.592-6.04c0.384-0.136,0.768-0.288,1.152-0.424c1.952-0.72,3.912-1.424,5.808-2.256c2.472-1.064,4.888-2.248,7.272-3.512c0.68-0.368,1.344-0.76,2.016-1.136c1.144-0.64,2.312-1.248,3.432-1.936c56.32,18.272,100.088,64.176,115.56,121.112C389.824,409.08,365.168,428.248,337.256,441.76z M152,176c0-48.52,39.48-88,88-88s88,39.48,88,88c0,30.864-16.008,58.024-40.128,73.736c-3.152,2.048-6.432,3.88-9.8,5.48c-0.4,0.192-0.792,0.392-1.192,0.576c-23.168,10.536-50.592,10.536-73.76,0c-0.4-0.184-0.8-0.384-1.192-0.576c-3.376-1.6-6.648-3.432-9.8-5.48C168.008,234.024,152,206.864,152,176z M421.832,370.584c-18.136-53.552-59.512-96.832-112.376-117.392C330.6,234.144,344,206.64,344,176c0-57.344-46.656-104-104-104s-104,46.656-104,104c0,30.64,13.4,58.144,34.552,77.192c-52.864,20.568-94.24,63.84-112.376,117.392C31.672,333.792,16,288.704,16,240C16,116.488,116.488,16,240,16s224,100.488,224,224C464,288.704,448.328,333.792,421.832,370.584z"
                                    />
                                </g>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                        <h3><?php echo $this->_tpl_vars['MOD']['DEFAULT_SYSTEM_SETTINGS']; ?>
</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="interfases-ui">
                        <?php echo '<?xml'; ?>
 version="1.0"<?php echo '?>'; ?>

                        <svg xmlns="http://www.w3.org/2000/svg" id="OutLine" viewBox="0 0 512 512" width="512" height="512">
                            <path
                                d="M349.657,18.343A8,8,0,0,0,344,16H120A56.063,56.063,0,0,0,64,72V440a56.063,56.063,0,0,0,56,56H392a56.063,56.063,0,0,0,56-56V120a8,8,0,0,0-2.343-5.657ZM352,43.313,420.687,112H392a40.045,40.045,0,0,1-40-40ZM120,32H336V72a56.063,56.063,0,0,0,56,56h40V352H80V72A40.045,40.045,0,0,1,120,32ZM392,480H120a40.045,40.045,0,0,1-40-40V368H432v72A40.045,40.045,0,0,1,392,480Z"
                            />
                            <path d="M192,448H168V392a8,8,0,0,0-16,0v64a8,8,0,0,0,8,8h32a8,8,0,0,0,0-16Z" />
                            <path d="M248,384c-17.645,0-32,17.944-32,40s14.355,40,32,40,32-17.944,32-40S265.645,384,248,384Zm0,64c-8.673,0-16-10.99-16-24s7.327-24,16-24,16,10.99,16,24S256.673,448,248,448Z" />
                            <path
                                d="M352,416H336a8,8,0,0,0,0,16h7.049c-2.252,9.217-8.236,16-15.049,16-8.673,0-16-10.99-16-24s7.327-24,16-24a10.675,10.675,0,0,1,4.588,1.058,8,8,0,0,0,6.824-14.473A26.587,26.587,0,0,0,328,384c-17.645,0-32,17.944-32,40s14.355,40,32,40,32-17.944,32-40A8,8,0,0,0,352,416Z"
                            />
                            <path
                                d="M247.247,235.177l46.131,54.2a32.122,32.122,0,0,0,4.073,4.994,32,32,0,1,0,45.256-45.256,32.226,32.226,0,0,0-4.994-4.073l-54.2-46.131a63.8,63.8,0,0,0-14.35-68.589h0a64.381,64.381,0,0,0-75.7-11.043,8,8,0,0,0-1.85,12.694L212.6,152.945a8,8,0,0,1-11.313,11.313l-20.978-20.979a8,8,0,0,0-12.694,1.85,64.009,64.009,0,0,0,79.633,90.048Zm-69.685-72.016,12.41,12.411a24,24,0,0,0,33.941-33.941L211.5,129.221a48.364,48.364,0,0,1,46.352,12.409,47.859,47.859,0,0,1,8.785,55.826,8,8,0,0,0,1.933,9.74l59.165,50.362a8.049,8.049,0,0,0,.9.662,16,16,0,1,1-22.074,22.074,8.057,8.057,0,0,0-.663-.9l-50.361-59.165a8,8,0,0,0-9.74-1.933,47.857,47.857,0,0,1-55.825-8.785A48.353,48.353,0,0,1,177.562,163.161Z"
                            />
                        </svg>
                        <h3><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER']; ?>
</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="interfases-ui">
                        <svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m272.066 512h-32.133c-25.989 0-47.134-21.144-47.134-47.133v-10.871c-11.049-3.53-21.784-7.986-32.097-13.323l-7.704 7.704c-18.659 18.682-48.548 18.134-66.665-.007l-22.711-22.71c-18.149-18.129-18.671-48.008.006-66.665l7.698-7.698c-5.337-10.313-9.792-21.046-13.323-32.097h-10.87c-25.988 0-47.133-21.144-47.133-47.133v-32.134c0-25.989 21.145-47.133 47.134-47.133h10.87c3.531-11.05 7.986-21.784 13.323-32.097l-7.704-7.703c-18.666-18.646-18.151-48.528.006-66.665l22.713-22.712c18.159-18.184 48.041-18.638 66.664.006l7.697 7.697c10.313-5.336 21.048-9.792 32.097-13.323v-10.87c0-25.989 21.144-47.133 47.134-47.133h32.133c25.989 0 47.133 21.144 47.133 47.133v10.871c11.049 3.53 21.784 7.986 32.097 13.323l7.704-7.704c18.659-18.682 48.548-18.134 66.665.007l22.711 22.71c18.149 18.129 18.671 48.008-.006 66.665l-7.698 7.698c5.337 10.313 9.792 21.046 13.323 32.097h10.87c25.989 0 47.134 21.144 47.134 47.133v32.134c0 25.989-21.145 47.133-47.134 47.133h-10.87c-3.531 11.05-7.986 21.784-13.323 32.097l7.704 7.704c18.666 18.646 18.151 48.528-.006 66.665l-22.713 22.712c-18.159 18.184-48.041 18.638-66.664-.006l-7.697-7.697c-10.313 5.336-21.048 9.792-32.097 13.323v10.871c0 25.987-21.144 47.131-47.134 47.131zm-106.349-102.83c14.327 8.473 29.747 14.874 45.831 19.025 6.624 1.709 11.252 7.683 11.252 14.524v22.148c0 9.447 7.687 17.133 17.134 17.133h32.133c9.447 0 17.134-7.686 17.134-17.133v-22.148c0-6.841 4.628-12.815 11.252-14.524 16.084-4.151 31.504-10.552 45.831-19.025 5.895-3.486 13.4-2.538 18.243 2.305l15.688 15.689c6.764 6.772 17.626 6.615 24.224.007l22.727-22.726c6.582-6.574 6.802-17.438.006-24.225l-15.695-15.695c-4.842-4.842-5.79-12.348-2.305-18.242 8.473-14.326 14.873-29.746 19.024-45.831 1.71-6.624 7.684-11.251 14.524-11.251h22.147c9.447 0 17.134-7.686 17.134-17.133v-32.134c0-9.447-7.687-17.133-17.134-17.133h-22.147c-6.841 0-12.814-4.628-14.524-11.251-4.151-16.085-10.552-31.505-19.024-45.831-3.485-5.894-2.537-13.4 2.305-18.242l15.689-15.689c6.782-6.774 6.605-17.634.006-24.225l-22.725-22.725c-6.587-6.596-17.451-6.789-24.225-.006l-15.694 15.695c-4.842 4.843-12.35 5.791-18.243 2.305-14.327-8.473-29.747-14.874-45.831-19.025-6.624-1.709-11.252-7.683-11.252-14.524v-22.15c0-9.447-7.687-17.133-17.134-17.133h-32.133c-9.447 0-17.134 7.686-17.134 17.133v22.148c0 6.841-4.628 12.815-11.252 14.524-16.084 4.151-31.504 10.552-45.831 19.025-5.896 3.485-13.401 2.537-18.243-2.305l-15.688-15.689c-6.764-6.772-17.627-6.615-24.224-.007l-22.727 22.726c-6.582 6.574-6.802 17.437-.006 24.225l15.695 15.695c4.842 4.842 5.79 12.348 2.305 18.242-8.473 14.326-14.873 29.746-19.024 45.831-1.71 6.624-7.684 11.251-14.524 11.251h-22.148c-9.447.001-17.134 7.687-17.134 17.134v32.134c0 9.447 7.687 17.133 17.134 17.133h22.147c6.841 0 12.814 4.628 14.524 11.251 4.151 16.085 10.552 31.505 19.024 45.831 3.485 5.894 2.537 13.4-2.305 18.242l-15.689 15.689c-6.782 6.774-6.605 17.634-.006 24.225l22.725 22.725c6.587 6.596 17.451 6.789 24.225.006l15.694-15.695c3.568-3.567 10.991-6.594 18.244-2.304z"
                            />
                            <path
                                d="m256 367.4c-61.427 0-111.4-49.974-111.4-111.4s49.973-111.4 111.4-111.4 111.4 49.974 111.4 111.4-49.973 111.4-111.4 111.4zm0-192.8c-44.885 0-81.4 36.516-81.4 81.4s36.516 81.4 81.4 81.4 81.4-36.516 81.4-81.4-36.515-81.4-81.4-81.4z"
                            />
                        </svg>
                        <h3><?php echo $this->_tpl_vars['MOD']['ADVANCED']; ?>
</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="interfases-ui">
                        <svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                    d="m457.393 157.301c15.193 0 27.554-12.361 27.554-27.554v-62.391c0-15.193-12.361-27.554-27.554-27.554h-.771v-12.248c0-15.193-12.361-27.554-27.553-27.554h-346.137c-15.193 0-27.554 12.361-27.554 27.554v12.248h-.771c-15.193 0-27.554 12.361-27.554 27.554v62.391c0 15.193 12.361 27.554 27.554 27.554h.771v24.774h-.771c-15.193 0-27.554 12.361-27.554 27.554v62.391c0 15.193 12.361 27.554 27.554 27.554h.771v24.773h-.771c-15.193 0-27.554 12.361-27.554 27.554v62.391c0 15.193 12.361 27.554 27.554 27.554h.771v12.249c0 14.233 10.849 25.98 24.711 27.408v7.954c0 12.431 10.114 22.544 22.544 22.544h29.217c12.431 0 22.544-10.113 22.544-22.544v-7.807h203.211v7.807c0 12.431 10.113 22.544 22.544 22.544h29.217c12.431 0 22.544-10.113 22.544-22.544v-7.954c13.862-1.427 24.711-13.174 24.711-27.408v-12.249h.771c15.193 0 27.554-12.361 27.554-27.554v-62.391c0-15.193-12.361-27.554-27.554-27.554h-.771v-24.773h.771c15.193 0 27.554-12.361 27.554-27.554v-62.391c0-15.193-12.361-27.554-27.554-27.554h-.771v-24.774zm-415.311-27.553v-62.392c0-6.906 5.618-12.525 12.525-12.525h72.326c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-56.526v-12.247c0-6.906 5.618-12.524 12.525-12.524h346.137c6.906 0 12.524 5.618 12.524 12.524v12.248h-284.602c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h300.402c6.906 0 12.524 5.618 12.524 12.525v62.391c0 6.906-5.618 12.524-12.524 12.524h-402.786c-6.906 0-12.525-5.618-12.525-12.524zm97.283 359.708c0 4.144-3.371 7.515-7.515 7.515h-29.217c-4.144 0-7.515-3.371-7.515-7.515v-7.807h44.247zm270.002 7.515h-29.217c-4.144 0-7.515-3.371-7.515-7.515v-7.807h44.247v7.807c0 4.144-3.371 7.515-7.515 7.515zm60.551-145.07v62.391c0 6.906-5.618 12.524-12.524 12.524h-243.733c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h227.932v12.249c0 6.906-5.618 12.524-12.524 12.524h-346.137c-6.906 0-12.525-5.618-12.525-12.524v-12.249h113.195c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-128.995c-6.906 0-12.525-5.618-12.525-12.524v-62.391c0-6.906 5.618-12.525 12.525-12.525h402.787c6.905.001 12.524 5.619 12.524 12.525zm-28.325-27.554h-371.186v-24.773h371.186zm0-142.272h-147.914c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h163.714c6.906 0 12.524 5.618 12.524 12.524v62.391c0 6.906-5.618 12.525-12.524 12.525h-402.786c-6.906 0-12.525-5.618-12.525-12.525v-62.391c0-6.906 5.618-12.524 12.525-12.524h209.013c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-193.213v-24.774h371.186z"
                                />
                                <path d="m85.294 121.503h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515z" />
                                <path d="m141.962 121.503h24.007c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-24.007c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515z" />
                                <path d="m198.631 121.503h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515z" />
                                <path d="m85.294 90.631h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515z" />
                                <path d="m141.962 90.631h24.007c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-24.007c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515z" />
                                <path d="m198.631 90.631h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515z" />
                                <path
                                    d="m400.867 124.833c14.491 0 26.28-11.79 26.28-26.281s-11.789-26.28-26.28-26.28-26.28 11.789-26.28 26.28 11.789 26.281 26.28 26.281zm0-37.532c6.204 0 11.25 5.047 11.25 11.251s-5.047 11.251-11.25 11.251c-6.204 0-11.251-5.047-11.251-11.251s5.047-11.251 11.251-11.251z"
                                />
                                <path
                                    d="m329.884 124.833c14.491 0 26.281-11.79 26.281-26.281s-11.79-26.28-26.281-26.28-26.28 11.789-26.28 26.28 11.789 26.281 26.28 26.281zm0-37.532c6.204 0 11.251 5.047 11.251 11.251s-5.047 11.251-11.251 11.251c-6.203 0-11.25-5.047-11.25-11.251s5.047-11.251 11.25-11.251z"
                                />
                                <path d="m109.299 248.746h-24.005c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515-.001-4.151-3.365-7.515-7.516-7.515z" />
                                <path d="m165.969 248.746h-24.007c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.007c4.151 0 7.515-3.364 7.515-7.515-.001-4.151-3.365-7.515-7.515-7.515z" />
                                <path d="m222.637 248.746h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515z" />
                                <path d="m109.299 217.874h-24.005c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515-.001-4.151-3.365-7.515-7.516-7.515z" />
                                <path d="m165.969 217.874h-24.007c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.007c4.151 0 7.515-3.364 7.515-7.515-.001-4.151-3.365-7.515-7.515-7.515z" />
                                <path d="m222.637 217.874h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515z" />
                                <path
                                    d="m400.867 267.105c14.491 0 26.28-11.789 26.28-26.28s-11.789-26.28-26.28-26.28-26.28 11.789-26.28 26.28 11.789 26.28 26.28 26.28zm0-37.531c6.204 0 11.25 5.047 11.25 11.251 0 6.203-5.047 11.25-11.25 11.25-6.204 0-11.251-5.047-11.251-11.25 0-6.204 5.047-11.251 11.251-11.251z"
                                />
                                <path
                                    d="m329.884 267.105c14.491 0 26.281-11.789 26.281-26.28s-11.79-26.28-26.281-26.28-26.28 11.789-26.28 26.28c.001 14.491 11.789 26.28 26.28 26.28zm0-37.531c6.204 0 11.251 5.047 11.251 11.251 0 6.203-5.047 11.25-11.251 11.25-6.203 0-11.25-5.047-11.25-11.25 0-6.204 5.047-11.251 11.25-11.251z"
                                />
                                <path d="m109.299 391.019h-24.005c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.365-7.515-7.516-7.515z" />
                                <path d="m165.969 391.019h-24.007c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.007c4.151 0 7.515-3.364 7.515-7.515s-3.365-7.515-7.515-7.515z" />
                                <path d="m222.637 391.019h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515z" />
                                <path d="m109.299 360.146h-24.005c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.365-7.515-7.516-7.515z" />
                                <path d="m165.969 360.146h-24.007c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.007c4.151 0 7.515-3.364 7.515-7.515s-3.365-7.515-7.515-7.515z" />
                                <path d="m222.637 360.146h-24.006c-4.151 0-7.515 3.364-7.515 7.515s3.364 7.515 7.515 7.515h24.006c4.151 0 7.515-3.364 7.515-7.515s-3.364-7.515-7.515-7.515z" />
                                <path
                                    d="m400.867 356.817c-14.491 0-26.28 11.789-26.28 26.28s11.789 26.28 26.28 26.28 26.28-11.789 26.28-26.28-11.789-26.28-26.28-26.28zm0 37.53c-6.204 0-11.251-5.047-11.251-11.251s5.047-11.25 11.251-11.25 11.25 5.047 11.25 11.25c0 6.204-5.047 11.251-11.25 11.251z"
                                />
                                <path
                                    d="m329.884 356.817c-14.491 0-26.28 11.789-26.28 26.28s11.789 26.28 26.28 26.28 26.281-11.789 26.281-26.28-11.789-26.28-26.281-26.28zm0 37.53c-6.203 0-11.25-5.047-11.25-11.251s5.047-11.25 11.25-11.25c6.204 0 11.251 5.047 11.251 11.25.001 6.204-5.046 11.251-11.251 11.251z"
                                />
                            </g>
                        </svg>
                        <h3><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_TITLE']; ?>
</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view table-panel-edit userinterface">
        <tr class="main-title-table">
            <th align="left" scope="row" colspan="4" class=""><h4><?php echo $this->_tpl_vars['MOD']['DEFAULT_SYSTEM_SETTINGS']; ?>
</h4></th>
        </tr>

        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LIST_ENTRIES_PER_LISTVIEW']; ?>
:</td>
            <td>
                <input type="text" size="4" id="ConfigureSettings_list_max_entries_per_page" name="list_max_entries_per_page" value="<?php echo $this->_tpl_vars['config']['list_max_entries_per_page']; ?>
" />
            </td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LIST_ENTRIES_PER_SUBPANEL']; ?>
:</td>
            <td>
                <input type="text" size="4" id="ConfigureSettings_list_max_entries_per_subpanel" name="list_max_entries_per_subpanel" value="<?php echo $this->_tpl_vars['config']['list_max_entries_per_subpanel']; ?>
" />
            </td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LOCK_HOMEPAGE']; ?>
:</td>
            <td>
                <?php if (! empty ( $this->_tpl_vars['config']['lock_homepage'] )): ?> <?php $this->assign('lock_homepage_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('lock_homepage_checked', ''); ?> <?php endif; ?>
                <input type="hidden" name="lock_homepage" value="false" />
                <input type="checkbox" name="lock_homepage" value="true" <?php echo $this->_tpl_vars['lock_homepage_checked']; ?>
 />
            </td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LOCK_SUBPANELS']; ?>
:</td>
            <td>
                <?php if (! empty ( $this->_tpl_vars['config']['lock_subpanels'] )): ?> <?php $this->assign('lock_subpanels_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('lock_subpanels_checked', ''); ?> <?php endif; ?>
                <input type="hidden" name="lock_subpanels" value="false" />
                <input type="checkbox" name="lock_subpanels" value="true" <?php echo $this->_tpl_vars['lock_subpanels_checked']; ?>
 />
            </td>
        </tr>
        <tr>
            <td scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['MAX_DASHLETS']; ?>
:</td>
            <td>
                <input type="text" size="4" name="max_dashlets_homepage" value="<?php echo $this->_tpl_vars['config']['max_dashlets_homepage']; ?>
" />
            </td>
            <td scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_USE_REAL_NAMES_DESC']), $this);?>
</td>
            <?php if (! empty ( $this->_tpl_vars['config']['use_real_names'] )): ?> <?php $this->assign('use_real_names', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('use_real_names', ''); ?> <?php endif; ?>
            <td>
                <input type="hidden" name="use_real_names" value="false" />
                <input name="use_real_names" type="checkbox" value="true" <?php echo $this->_tpl_vars['use_real_names']; ?>
 />
            </td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['DISPLAY_RESPONSE_TIME']; ?>
:</td>
            <?php if (! empty ( $this->_tpl_vars['config']['calculate_response_time'] )): ?> <?php $this->assign('calculate_response_time_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('calculate_response_time_checked', ''); ?> <?php endif; ?>
            <td><input type="hidden" name="calculate_response_time" value="false" /><input name="calculate_response_time" type="checkbox" value="true" <?php echo $this->_tpl_vars['calculate_response_time_checked']; ?>
 /></td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_MODULE_FAVICON']; ?>
 &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MODULE_FAVICON_HELP']), $this);?>
</td>
            <?php if (! empty ( $this->_tpl_vars['config']['default_module_favicon'] )): ?> <?php $this->assign('default_module_favicon', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('default_module_favicon', ''); ?> <?php endif; ?>
            <td>
                <input type="hidden" name="default_module_favicon" value="false" />
                <input name="default_module_favicon" type="checkbox" value="true" <?php echo $this->_tpl_vars['default_module_favicon']; ?>
 />
            </td>
        </tr>
        <tr>
            <td scope="row" width="15%" nowrap><?php echo $this->_tpl_vars['MOD']['SYSTEM_NAME']; ?>
</td>
            <td width="35%">
                <input type="text" name="system_name" value="<?php echo $this->_tpl_vars['settings']['system_name']; ?>
" />
            </td>
            <td scope="row" width="15%" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_MIN_AUTO_REFRESH_INTERVAL']; ?>
 &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_MIN_AUTO_REFRESH_INTERVAL_HELP']), $this);?>
</td>
            <td width="35%">
                <select name="dashlet_auto_refresh_min" id="dashlet_auto_refresh_min">
                    <?php echo $this->_tpl_vars['AUTO_REFRESH_INTERVAL_OPTIONS']; ?>

                </select>
            </td>
        </tr>
        <tr>
            <td scope="row" width="12%" nowrap>
                <?php echo $this->_tpl_vars['MOD']['CURRENT_LOGO']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['CURRENT_LOGO_HELP']), $this);?>

            </td>
            <td width="35%">
                <img id="company_logo_image" src="<?php echo $this->_tpl_vars['company_logo']; ?>
" alt="$mod_strings.LBL_LOGO" />
            </td>
        </tr>
        <tr>
            <td scope="row" width="12%" nowrap>
                <?php echo $this->_tpl_vars['MOD']['NEW_LOGO']; ?>
&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['NEW_LOGO_HELP_NO_SPACE']), $this);?>

            </td>
            <td width="35%">
                <div id="container_upload"></div>
                <input type="text" id="company_logo" name="company_logo" style="display: none;" />
            </td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LEAD_CONV_OPTION']; ?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LEAD_CONV_OPT_HELP']), $this);?>
</td>
            <td>
                <select name="lead_conv_activity_opt">
                    <?php echo $this->_tpl_vars['lead_conv_activities']; ?>

                </select>
            </td>
            <td><a href="./index.php?module=Administration&action=ConfigureAjaxUI" id="configure_ajax"><?php echo $this->_tpl_vars['MOD']['LBL_CONFIG_AJAX']; ?>
</a>&nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_CONFIG_AJAX_DESC']), $this);?>
</td>
        </tr>

        <tr>
            <td scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_DISALBE_CONVERT_LEAD']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_DISALBE_CONVERT_LEAD_DESC']), $this);?>
</td>
            <?php if (! empty ( $this->_tpl_vars['config']['disable_convert_lead'] )): ?> <?php $this->assign('disable_convert_lead', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('disable_convert_lead', ''); ?> <?php endif; ?>
            <td>
                <input type="hidden" name="disable_convert_lead" value="false" />
                <input name="disable_convert_lead" type="checkbox" value="true" <?php echo $this->_tpl_vars['disable_convert_lead']; ?>
 />
            </td>
            <td colspan="2">&nbsp;</td>
        </tr>

        <tr>
            <td scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_ENABLE_ACTION_MENU']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ENABLE_ACTION_MENU_DESC']), $this);?>
</td>
            <?php if (isset ( $this->_tpl_vars['config']['enable_action_menu'] ) && $this->_tpl_vars['config']['enable_action_menu'] != 'true'): ?> <?php $this->assign('enable_action_menu', ''); ?> <?php else: ?> <?php $this->assign('enable_action_menu', 'CHECKED'); ?> <?php endif; ?>
            <td>
                <input type="hidden" name="enable_action_menu" value="false" />
                <input name="enable_action_menu" type="checkbox" value="true" <?php echo $this->_tpl_vars['enable_action_menu']; ?>
 />
            </td>
            <td colspan="2">&nbsp;</td>
        </tr>

        <tr>
            <td scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_ENABLE_INLINE_EDITING_LIST']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ENABLE_INLINE_EDITING_LIST_DESC']), $this);?>
</td>
            <?php if (isset ( $this->_tpl_vars['config']['enable_line_editing_list'] ) && $this->_tpl_vars['config']['enable_line_editing_list'] != 'true'): ?> <?php $this->assign('enable_line_editing_list', ''); ?> <?php else: ?> <?php $this->assign('enable_line_editing_list', 'CHECKED'); ?> <?php endif; ?>
            <td>
                <input type="hidden" name="enable_line_editing_list" value="false" />
                <input name="enable_line_editing_list" type="checkbox" value="true" <?php echo $this->_tpl_vars['enable_line_editing_list']; ?>
 />
            </td>
            <td scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_ENABLE_INLINE_EDITING_DETAIL']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_ENABLE_INLINE_EDITING_DETAIL_DESC']), $this);?>
</td>
            <?php if (isset ( $this->_tpl_vars['config']['enable_line_editing_detail'] ) && $this->_tpl_vars['config']['enable_line_editing_detail'] != 'true'): ?> <?php $this->assign('enable_line_editing_detail', ''); ?> <?php else: ?> <?php $this->assign('enable_line_editing_detail', 'CHECKED'); ?> <?php endif; ?>
            <td>
                <input type="hidden" name="enable_line_editing_detail" value="false" />
                <input name="enable_line_editing_detail" type="checkbox" value="true" <?php echo $this->_tpl_vars['enable_line_editing_detail']; ?>
 />
            </td>
        </tr>

        <tr>
            <td scope="row" nowrap><?php echo $this->_tpl_vars['MOD']['LBL_HIDE_SUBPANELS']; ?>
: &nbsp;<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_HIDE_SUBPANELS']), $this);?>
</td>
            <?php if (( isset ( $this->_tpl_vars['config']['hide_subpanels'] ) && $this->_tpl_vars['config']['hide_subpanels'] != 'true' ) || ! isset ( $this->_tpl_vars['config']['hide_subpanels'] )): ?> <?php $this->assign('hide_subpanels', ''); ?> <?php else: ?> <?php $this->assign('hide_subpanels', 'CHECKED'); ?> <?php endif; ?>
            <td>
                <input type="hidden" name="hide_subpanels" value="false" />
                <input name="hide_subpanels" type="checkbox" value="true" <?php echo $this->_tpl_vars['hide_subpanels']; ?>
 />
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view proxy">
        <tr>
            <th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_TITLE']; ?>
</h4></th>
        </tr>
        <tr>
            <td width="25%" scope="row" valign="middle"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_ON']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_PROXY_ON_DESC']), $this);?>
</td>
            <?php if (! empty ( $this->_tpl_vars['settings']['proxy_on'] )): ?> <?php $this->assign('proxy_on_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('proxy_on_checked', ''); ?> <?php endif; ?>
            <td width="75%" align="left" valign="middle" colspan="3">
                <input type="hidden" name="proxy_on" value="0" /><input name="proxy_on" id="proxy_on" value="1" class="checkbox" tabindex="1" type="checkbox" <?php echo $this->_tpl_vars['proxy_on_checked']; ?>
 onclick='toggleDisplay_2("proxy_config_display")' />
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <div id="proxy_config_display" style="display:<?php echo $this->_tpl_vars['PROXY_CONFIG_DISPLAY']; ?>
">
                    <table width="100%" cellpadding="0" cellspacing="1">
                        <tr>
                            <td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_HOST']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
                            <td width="35%"><input type="text" id="proxy_host" name="proxy_host" size="25" value="<?php echo $this->_tpl_vars['settings']['proxy_host']; ?>
" tabindex="1" /></td>
                            <td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_PORT']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
                            <td width="35%"><input type="text" id="proxy_port" name="proxy_port" size="6" value="<?php echo $this->_tpl_vars['settings']['proxy_port']; ?>
" tabindex="1" /></td>
                        </tr>
                        <tr>
                            <td width="15%" scope="row" valign="middle"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_AUTH']; ?>
</td>
                            <?php if (! empty ( $this->_tpl_vars['settings']['proxy_auth'] )): ?> <?php $this->assign('proxy_auth_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('proxy_auth_checked', ''); ?> <?php endif; ?>
                            <td width="35%" align="left" valign="middle">
                                <input type="hidden" name="proxy_auth" value="0" />
                                <input id="proxy_auth" name="proxy_auth" value="1" class="checkbox" tabindex="1" type="checkbox" <?php echo $this->_tpl_vars['proxy_auth_checked']; ?>
 onclick='toggleDisplay_2("proxy_auth_display")' />
                            </td>
                        </tr>
                    </table>

                    <div id="proxy_auth_display" style="display:<?php echo $this->_tpl_vars['PROXY_AUTH_DISPLAY']; ?>
">
                        <table width="100%" cellpadding="0" cellspacing="1">
                            <tr>
                                <td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_USERNAME']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>

                                <td width="35%"><input type="text" id="proxy_username" name="proxy_username" size="25" value="<?php echo $this->_tpl_vars['settings']['proxy_username']; ?>
" tabindex="1" /></td>
                                <td width="15%" scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_PROXY_PASSWORD']; ?>
<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td>
                                <td width="35%"><input type="password" id="proxy_password" name="proxy_password" size="25" value="<?php echo $this->_tpl_vars['settings']['proxy_password']; ?>
" tabindex="1" /></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view avanced">
        <tr>
            <th align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['ADVANCED']; ?>
</h4></th>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['VERIFY_CLIENT_IP']; ?>
:</td>
            <?php if (! empty ( $this->_tpl_vars['config']['verify_client_ip'] )): ?> <?php $this->assign('verify_client_ip_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('verify_client_ip_checked', ''); ?> <?php endif; ?>
            <td><input type="hidden" name="verify_client_ip" value="false" /><input name="verify_client_ip" type="checkbox" value="1" <?php echo $this->_tpl_vars['verify_client_ip_checked']; ?>
 /></td>

            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LOG_MEMORY_USAGE']; ?>
:</td>
            <?php if (! empty ( $this->_tpl_vars['config']['log_memory_usage'] )): ?> <?php $this->assign('log_memory_usage_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('log_memory_usage_checked', ''); ?> <?php endif; ?>
            <td><input type="hidden" name="log_memory_usage" value="false" /><input name="log_memory_usage" type="checkbox" value="true" <?php echo $this->_tpl_vars['log_memory_usage_checked']; ?>
 /></td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LOG_SLOW_QUERIES']; ?>
:</td>
            <?php if (! empty ( $this->_tpl_vars['config']['dump_slow_queries'] )): ?> <?php $this->assign('dump_slow_queries_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('dump_slow_queries_checked', ''); ?> <?php endif; ?>
            <td><input type="hidden" name="dump_slow_queries" value="false" /><input name="dump_slow_queries" type="checkbox" value="true" <?php echo $this->_tpl_vars['dump_slow_queries_checked']; ?>
 /></td>

            <td scope="row"><?php echo $this->_tpl_vars['MOD']['SLOW_QUERY_TIME_MSEC']; ?>
:</td>
            <td>
                <input type="text" size="5" name="slow_query_time_msec" value="<?php echo $this->_tpl_vars['config']['slow_query_time_msec']; ?>
" />
            </td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['UPLOAD_MAX_SIZE']; ?>
:</td>
            <td>
                <input type="text" size="8" name="upload_maxsize" value="<?php echo $this->_tpl_vars['config']['upload_maxsize']; ?>
" />
            </td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['STACK_TRACE_ERRORS']; ?>
:</td>
            <?php if (! empty ( $this->_tpl_vars['config']['stack_trace_errors'] )): ?> <?php $this->assign('stack_trace_errors_checked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('stack_trace_errors_checked', ''); ?> <?php endif; ?>
            <td><input type="hidden" name="stack_trace_errors" value="false" /><input name="stack_trace_errors" type="checkbox" value="true" <?php echo $this->_tpl_vars['stack_trace_errors_checked']; ?>
 /></td>
        </tr>

        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['DEVELOPER_MODE']; ?>
:</td>
            <?php if (! empty ( $this->_tpl_vars['config']['developerMode'] )): ?> <?php $this->assign('developerModeChecked', 'CHECKED'); ?> <?php else: ?> <?php $this->assign('developerModeChecked', ''); ?> <?php endif; ?>
            <td><input type="hidden" name="developerMode" value="false" /><input name="developerMode" type="checkbox" value="true" <?php echo $this->_tpl_vars['developerModeChecked']; ?>
 /></td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_VCAL_PERIOD']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['vCAL_HELP']), $this);?>
</td>
            <td>
                <input type="text" size="4" name="vcal_time" value="<?php echo $this->_tpl_vars['config']['vcal_time']; ?>
" />
            </td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_IMPORT_MAX_RECORDS']; ?>
 <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_IMPORT_MAX_RECORDS_HELP']), $this);?>
</td>
            <td>
                <input type="text" size="4" name="import_max_records_total_limit" value="<?php echo $this->_tpl_vars['config']['import_max_records_total_limit']; ?>
" />
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view visibled">
        <?php if ($this->_tpl_vars['logger_visible']): ?>
        <tr>
            <th align="left" scope="row" colspan="6"><h4><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER']; ?>
</h4></th>
        </tr>
        <tr>
            <td scope="row" valign="middle"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILENAME']; ?>
</td>
            <td valign="middle"><input type="text" name="logger_file_name" value="<?php echo $this->_tpl_vars['config']['logger']['file']['name']; ?>
" /></td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILE_EXTENSION']; ?>
</td>
            <td><input name="logger_file_ext" type="text" size="5" value="<?php echo $this->_tpl_vars['config']['logger']['file']['ext']; ?>
" /></td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_FILENAME_SUFFIX']; ?>
</td>
            <td>
                <select name="logger_file_suffix" selected="<?php echo $this->_tpl_vars['config']['logger']['file']['suffix']; ?>
">
                    <?php echo $this->_tpl_vars['filename_suffix']; ?>

                </select>
            </td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_MAX_LOG_SIZE']; ?>
</td>
            <td><input name="logger_file_maxSize" size="4" value="<?php echo $this->_tpl_vars['config']['logger']['file']['maxSize']; ?>
" /></td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_DEFAULT_DATE_FORMAT']; ?>
</td>
            <td><input name="logger_file_dateFormat" type="text" value="<?php echo $this->_tpl_vars['config']['logger']['file']['dateFormat']; ?>
" /></td>
        </tr>
        <tr>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_LOG_LEVEL']; ?>
</td>
            <td>
                <select name="logger_level">
                    <?php echo $this->_tpl_vars['log_levels']; ?>

                </select>
            </td>
            <td scope="row"><?php echo $this->_tpl_vars['MOD']['LBL_LOGGER_MAX_LOGS']; ?>
</td>
            <td><input name="logger_file_maxLogs" value="<?php echo $this->_tpl_vars['config']['logger']['file']['maxLogs']; ?>
" /></td>
        </tr>
        <?php endif; ?>
        <tr>
            <td><a href="index.php?module=Configurator&action=LogView" target="_blank"><?php echo $this->_tpl_vars['MOD']['LBL_LOGVIEW']; ?>
</a></td>
        </tr>
    </table>

    <div style="padding-top: 2px;">
        <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" class="button primary m-t-10 btn-principal" type="submit" name="save" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " class="button primary" />
        &nbsp;<!--<input title="<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
"  class="button"  type="submit" name="restore" value="  <?php echo $this->_tpl_vars['MOD']['LBL_RESTORE_BUTTON_LABEL']; ?>
 " />-->
        &nbsp;<input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
" onclick="document.location.href='index.php?module=Administration&action=index'" class="button  m-t-10 btn-principal" type="button" name="cancel" value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
    </div>
    <?php echo $this->_tpl_vars['JAVASCRIPT']; ?>

</form>
<div id="upload_panel" style="display: none;">
    <form id="upload_form" name="upload_form" method="POST" action="index.php" enctype="multipart/form-data">
        <input type="file" id="my_file_company" name="file_1" size="20" onchange="uploadCheck(false)" />
        <?php echo smarty_function_sugar_getimage(array('name' => 'sqsWait','ext' => ".gif",'alt' => $this->_tpl_vars['mod_strings']['LBL_LOADING'],'other_attributes' => 'id="loading_img_company" style="display:none" '), $this);?>

    </form>
</div>
<?php if ($this->_tpl_vars['error']['company_logo']): ?>
<script type="text/javascript">
    <?php echo '$(function(){alert(\''; ?>
<?php echo $this->_tpl_vars['error']['company_logo']; ?>
<?php echo '\');});'; ?>

</script>
<?php endif; ?> <?php echo '
<script type="text/javascript">
    function init_logo() {
        document.getElementById("upload_panel").style.display = "inline";
        document.getElementById("upload_panel").style.position = "absolute";
        YAHOO.util.Dom.setX("upload_panel", YAHOO.util.Dom.getX("container_upload"));
        YAHOO.util.Dom.setY("upload_panel", YAHOO.util.Dom.getY("container_upload") - 5);
    }
    YAHOO.util.Event.onDOMReady(function () {
        init_logo();
    });
    function toggleDisplay_2(div_string) {
        toggleDisplay(div_string);
        init_logo();
    }
    function uploadCheck(quotes) {
        //AJAX call for checking the file size and comparing with php.ini settings.
        var callback = {
            upload: function (r) {
                eval("var file_type = " + r.responseText);
                var forQuotes = file_type["forQuotes"];
                document.getElementById("loading_img_" + forQuotes).style.display = "none";
                bad_image = SUGAR.language.get("Configurator", forQuotes == "quotes" ? "LBL_ALERT_TYPE_JPEG" : "LBL_ALERT_TYPE_IMAGE");
                switch (file_type["data"]) {
                    case "other":
                        alert(bad_image);
                        document.getElementById("my_file_" + forQuotes).value = "";
                        break;
                    case "size":
                        alert(SUGAR.language.get("Configurator", "LBL_ALERT_SIZE_RATIO"));
                        document.getElementById(forQuotes + "_logo").value = file_type["path"];
                        document.getElementById(forQuotes + "_logo_image").src = file_type["url"];
                        break;
                    case "file_error":
                        alert(SUGAR.language.get("Configurator", "ERR_ALERT_FILE_UPLOAD"));
                        document.getElementById("my_file_" + forQuotes).value = "";
                        break;
                    //File good
                    case "ok":
                        document.getElementById(forQuotes + "_logo").value = file_type["path"];
                        document.getElementById(forQuotes + "_logo_image").src = file_type["url"];
                        break;
                    //error in getimagesize because unsupported type
                    default:
                        alert(bad_image);
                        document.getElementById("my_file_" + forQuotes).value = "";
                }
            },
            failure: function (r) {
                alert(SUGAR.language.get("app_strings", "LBL_AJAX_FAILURE"));
            },
        };
        document.getElementById("company_logo").value = "";
        document.getElementById("loading_img_company").style.display = "inline";
        var file_name = document.getElementById("my_file_company").value;
        postData = "&entryPoint=UploadFileCheck&forQuotes=false";
        YAHOO.util.Connect.setForm(document.getElementById("upload_form"), true, true);
        if (file_name) {
            if (postData.substring(0, 1) == "&") {
                postData = postData.substring(1);
            }
            YAHOO.util.Connect.asyncRequest("POST", "index.php", callback, postData);
        }
    }
</script>
'; ?>
