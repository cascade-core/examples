{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "outputs": {
        "done": true,
        "title": [
            "heading:title"
        ]
    },
    "blocks": {
        "form": {
            "block": "{entity}/form/{action}",
            "x": 0,
            "y": 190
        },
        "create": {
            "block": "{entity}/{action}",
            "x": 229,
            "y": 44,
            "in_con": {
                "enable": [
                    "form",
                    "done"
                ],
                "item": [
                    "form",
                    "item"
                ]
            }
        },
        "show_form": {
            "block": "duf/show",
            "x": 227,
            "y": 159,
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
        "load_ref": {
            "block": "smalldb/load_ref",
            "x": 0,
            "y": 167,
            "in_con": {
                "ref": [
                    "create",
                    "ref"
                ]
            }
        },
        "result_message": {
            "block": "core/out/message",
            "x": 395,
            "y": 152,
            "in_con": {
                "enable": [
                    "form",
                    "done"
                ],
                "is_success": [
                    "create",
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
                "success_title": "Položka byla vytvořena."
            }
        },
        "heading": {
            "block": "smalldb/heading",
            "x": 21,
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
            }
        }
    }
}
