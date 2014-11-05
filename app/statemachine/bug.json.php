{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "Smalldb\\StateMachine\\FlupdoCrudMachine",
    "name": "Bug",
    "desc": "Bug",
    "table": "bug",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/bug/{id}",
    "parent_url": "/bug",
    "default_access_policy": null,
    "include": [
        "bug.graphml"
    ],
    "actions": {
        "listing": {
            "heading": "Bug"
        },
        "show": {
            "heading": "{title}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New bug"
        }
    },
    "properties": {
        "id": {
            "type": "number",
            "label": "ID",
            "is_pk": true,
            "hidden": true
        }
    }
}

