{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "Smalldb\\StateMachine\\FlupdoCrudMachine",
    "name": "Item",
    "desc": "Simple CRUD item",
    "table": "item",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/item/{id}",
    "parent_url": "/item",
    "default_access_policy": null,
    "actions": {
        "listing": {
            "heading": "Items"
        },
        "show": {
            "heading": "{name}"
        },
        "create": {
            "heading": "New item"
        }
    },
    "properties": {
        "id": {
            "type": "number",
            "label": "ID",
            "is_pk": true,
            "hidden": true
        },
        "name": {
            "type": "text",
            "label": "Name",
            "required": true,
            "link": "/item/{id}"
        },
        "description": {
            "type": "textarea",
            "label": "Description",
            "required": false,
            "tabular_hidden": true
        }
    }
}

