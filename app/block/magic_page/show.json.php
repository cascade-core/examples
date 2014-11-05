{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "outputs": {
        "done": [
            "load_ref:done"
        ],
        "title": [
            "heading:title"
        ]
    },
    "blocks": {
        "load_ref": {
            "block": "smalldb/load_ref",
            "x": 0,
            "y": 119,
            "in_con": {
                "ref": [
                    "router",
                    "smalldb_ref"
                ]
            }
        },
        "show": {
            "block": "{entity}/form/show",
            "x": 279,
            "y": 175,
            "in_con": {
                "item": [
                    "load_ref",
                    "ref"
                ],
                "enable": [
                    "load_ref",
                    "done"
                ]
            }
        },
        "action_menu": {
            "block": "{entity}/form/action_menu",
            "x": 279,
            "y": 349,
            "in_con": {
                "enable": [
                    "load_ref",
                    "done"
                ],
                "item": [
                    "load_ref",
                    "ref"
                ]
            },
            "in_val": {
                "slot_weight": 5,
                "class": "heading_actions"
            }
        },
        "heading": {
            "block": "smalldb/heading",
            "x": 285,
            "y": 0,
            "in_con": {
                "enable": [
                    "load_ref",
                    "done"
                ],
                "ref": [
                    "load_ref",
                    "ref"
                ],
                "action": [
                    "router",
                    "smalldb_action"
                ]
            }
        }
    }
}
