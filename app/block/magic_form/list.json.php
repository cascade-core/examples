{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "#!": "duf_view",
    "field_groups": {
        "list": {
            "field_group_generator": "smalldb",
            "machine_type": "{entity}",
            "collection_dimensions": 1
        }
    },
    "layout": {
        "#!": "plain_layout",
        "rows": [
            {
                "widgets": [
                    {
                        "#!": "collection_actions",
                        "group_id": "list"
                    }
                ]
            }, {
                "widgets": [
                    {
                        "#!": "tabular_collection",
                        "group_id": "list",
                        "option_prefix": "tabular",
                        "columns_from_fields": true,
                        "columns": [
                            {
                                "width": "1",
                                "weight": 99,
                                "tbody_widgets": [
                                    {
                                        "#!": "item_actions",
                                        "group_id": "list",
                                        "class": "small"
                                    }
                                ]
                            }
                        ]
                    }
                ]
            }
        ]
    }
}
