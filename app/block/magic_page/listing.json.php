{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "outputs": {
        "done": [
            "listing:done"
        ],
        "title": [
            "heading:title"
        ]
    },
    "blocks": {
        "listing": {
            "block": "smalldb/listing",
            "x": 149,
            "y": 162,
            "in_con": {
                "filters": [
                    "get",
                    "all"
                ],
                "type": [
                    "router",
                    "smalldb_type"
                ]
            }
        },
        "get": {
            "block": "core/in/get",
            "x": 0,
            "y": 163
        },
        "show_table": {
            "block": "{entity}/form/list",
            "x": 337,
            "y": 156,
            "in_con": {
                "enable": [
                    "listing",
                    "done"
                ],
                "list": [
                    "listing",
                    "list"
                ]
            }
        },
        "heading": {
            "block": "smalldb/heading",
            "x": 1,
            "y": 0,
            "in_con": {
                "ref": [
                    "router",
                    "smalldb_ref"
                ],
                "action": [
                    "router",
                    "smalldb_action"
                ]
            },
            "in_val": {
                "level": 2
            }
        }
    }
}
