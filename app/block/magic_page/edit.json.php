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
            "y": 214,
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
        "edit": {
            "block": "{entity}/{action}",
            "x": 476,
            "y": 68,
            "in_con": {
                "enable": [
                    "form",
                    "done"
                ],
                "item": [
                    "form",
                    "item"
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
            "y": 167,
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
            "y": 183,
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
            "y": 176,
            "in_con": {
                "enable": [
                    "form",
                    "done"
                ],
                "is_success": [
                    "edit",
                    "done"
                ],
                "redirect_url": [
                    "load_ref",
                    "post_action_url"
                ]
            },
            "in_val": {
                "type": "error",
                "error_title": "Při zpracování došlo k chybě.",
                "success_title": "Položka byla uložena."
            }
        },
        "heading": {
            "block": "smalldb/heading",
            "x": 272,
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
