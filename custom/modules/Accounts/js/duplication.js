/**
 * Created by jack on 23/08/17.
 */
(function($)
{

    var bannedFields = [
        /* DATI AVANZATI */
        'imp_metodo_code_old_c',
        'imp_metodo_client_code_c',
        'imp_metodo_supplier_code_c',
        'imp_metodo_invoice_client_c',
        'imp_metodo_invoice_supplier_c',
        'imp_metodo_notes_c',

        'mekit_metodo_code_old_c',
        'mekit_metodo_client_code_c',
        'mekit_metodo_supplier_code_c',
        'mekit_metodo_invoice_client_c',
        'mekit_metodo_invoice_supplie_c',
        'mekit_metodo_notes_c',

        'metodo_last_update_time_c'
    ];

    var $form = $("form#EditView");


    /**
     * clear form field values which should not be duplicated
     */
    var clearBannedFormFields = function()
    {
        var isDuplicationForm = $("input[name=duplicateSave]", $form).val() == "true";

        if (!isDuplicationForm) {
            return;
        }


        console.log("Duplicating...");

        var $field, tagName;
        $.each(bannedFields, function(i, fieldId)
        {
            $field = $("#" + fieldId, $form);

            if($field.length == 1)
            {
                tagName = $field.prop("tagName").toLowerCase();
                //console.log("got field: " + fieldId + " : " + tagName);

                switch(tagName)
                {
                    case "input":
                        $field.val("");
                        break;
                    case "select":
                        $field.val("");
                        break;
                    default:
                        break;
                }
            }
        })
    };


    $(document).ready(function()
    {
        clearBannedFormFields();
    });

})(jQuery);
