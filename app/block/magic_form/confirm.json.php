{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "#!": "duf_form",
    "field_groups": {
        "item": {
            "field_group_generator": "smalldb",
            "machine_type": "{entity}"
        },
        "submit": {
            "fields": {
                "submit": {
                    "type": "submit",
                    "label": "{form_name}"
                }
            }
        }
    },
    "layout": {
        "#!": "fieldsets_layout",
        "fieldsets": [
            {
                "label": "Confirm action",
                "widgets": [
                    {
                        "#!": "placeholder",
                        "text": "Additional arguments for this action should be here."
                    }, {
                        "#!": "text",
                        "text": "Do you wish to {form_name}? "
                    }, {
                        "#!": "@edit",
                        "group_id": "submit",
                        "field_id": "submit"
                    }
                ]
            }
        ]
    }
}
