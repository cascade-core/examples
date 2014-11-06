{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "outputs": {
        "done": 1,
        "title": "Cascade skeleton"
    },
    "blocks": {
        "page": {
            "block": "core/out/page",
            "x": 0,
            "y": 0,
            "in_con": {
                "enable": [
                    "parent",
                    "done"
                ]
            },
            "in_val": {
                "css_link": "/app/style/style.css"
            }
        },
        "slot_holder": {
            "block": "core/out/slot",
            "x": 6,
            "y": 322,
            "in_val": {
                "slot": "html_body",
                "slot_weight": 20,
                "name": "page_holder"
            }
        },
        "slot_header": {
            "block": "core/out/slot",
            "x": 181,
            "y": 225,
            "in_val": {
                "slot": "page_holder",
                "slot_weight": 10,
                "name": "header"
            }
        },
        "slot_default": {
            "block": "core/out/slot",
            "x": 181,
            "y": 346,
            "in_val": {
                "slot": "page_holder",
                "slot_weight": 40,
                "name": "default"
            }
        },
        "slot_footer": {
            "block": "core/out/slot",
            "x": 181,
            "y": 467,
            "in_val": {
                "slot": "page_holder",
                "slot_weight": 90,
                "name": "footer"
            }
        },
        "message_queue": {
            "block": "core/out/message_queue",
            "x": 0,
            "y": 87,
            "in_con": {
                "enable": [
                    "parent",
                    "done"
                ]
            }
        },
        "page_header": {
            "block": "core/out/header",
            "x": 340,
            "y": 145,
            "in_val": {
                "level": 1,
                "text": "Smalldb Examples",
                "link": "/",
                "slot": "header",
                "slot_weight": 20
            }
        },
        "entity_menu": {
            "block": "smalldb/entity_menu",
            "x": 340,
            "y": 308,
            "in_val": {
                "slot": "header"
            }
        },
        "admin_link": {
            "block": "core/out/raw",
            "x": 479,
            "y": 302,
            "in_val": {
                "data": "<a href=\"/admin\" class=\"admin_link\">Administration</a>",
                "slot": "header",
                "slot_weight": 60
            }
        }
    }
}