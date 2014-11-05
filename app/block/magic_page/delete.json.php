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
        "form": {
            "block": "{entity}/form/{action}",
            "x": 247,
            "y": 265,
            "in_con": {
                "enable": [
                    "load_ref",
                    "done"
                ],
                "item": [
                    "load_ref",
                    "properties"
                ]
            }
        },
        "delete": {
            "block": "{entity}/delete",
            "x": 476,
            "y": 119,
            "in_con": {
                "enable": [
                    "form",
                    "done"
                ],
                "ref": [
                    "load_ref",
                    "ref"
                ]
            }
        },
        "load_ref": {
            "block": "smalldb/load_ref",
            "x": 0,
            "y": 218,
            "in_con": {
                "ref": [
                    "router",
                    "smalldb_ref"
                ]
            }
        },
        "show_form": {
            "block": "duf/show",
            "x": 474,
            "y": 234,
            "in_con": {
                "enable": [
                    ":not",
                    "form",
                    "done"
                ],
                "form": [
                    "form",
                    "duf_form"
                ]
            }
        },
        "result_message": {
            "block": "core/out/message",
            "x": 642,
            "y": 227,
            "in_con": {
                "enable": [
                    "form",
                    "done"
                ],
                "is_success": [
                    "delete",
                    "done"
                ],
                "redirect_url": [
                    "load_ref",
                    "parent_url"
                ]
            },
            "in_val": {
                "type": "error",
                "error_title": "Při zpracování došlo k chybě.",
                "success_title": "Položka byla smazána."
            }
        },
        "heading": {
            "block": "smalldb/heading",
            "x": 269,
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
