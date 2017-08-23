/**
 * Created by jack on 23/08/17.
 *
 * Metodo utilizzato: identified utilizzato nell attributo 'title' (Testo di Aiuto) del campo
 *
 */
(function($)
{
    var nonDuplicableFieldIdentifierTitle = "\\[ND\\]";

    var $form = $("form#EditView");

    /**
     * clear form field values which should not be duplicated
     */
    var clearBannedFormFields = function()
    {
        var $field, fieldId, tagName, fieldTitle;
        var $formfields = $(":input", $form);
        var NDPattern = new RegExp(nonDuplicableFieldIdentifierTitle);

        console.log("working on non duplicable fields by expression: '" + nonDuplicableFieldIdentifierTitle + "'");

        $.each($formfields, function(i, el)
        {
            $field = $(el);
            if($field.length == 1) {
                fieldId = $field.prop("id");
                tagName = $field.prop("tagName").toLowerCase();
                fieldTitle = $field.prop("title");

                if (fieldTitle.match(NDPattern)) {
                    console.log("Non duplicable field[" + tagName + "]: " + fieldId + " - title: " + fieldTitle);

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

                // Add "COPIA" to name
                if(fieldId == "name")
                {
                    $field.val($field.val() + " - COPIA");
                }
            }
        });
    };

    $(document).ready(function()
    {
        var isDuplicationForm = $("input[name=duplicateSave]", $form).val() == "true";

        if (isDuplicationForm)
        {
            clearBannedFormFields();
        }
    });

})(jQuery);
