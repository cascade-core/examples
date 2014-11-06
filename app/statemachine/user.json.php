{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "user.graphml"
    ],
    "name": "User",
    "desc": "User",
    "table": "user",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/user/{id}",
    "parent_url": "/user",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Users"
        },
        "show": {
            "heading": "{name}",
            "heading_without_links": true
        },
        "register": {
            "heading": "New user",
            "label": "Create",
            "returns": "new_id",
            "method": "create",
            "block": {
                "inputs": {
                    "item": null
                },
                "outputs": {
                    "ref": "return_value"
                }
            }
        },
        "edit": {
            "heading": "Edit order",
            "label": "Edit",
            "block": {
                "inputs": {
                    "ref": null,
                    "item": null
                },
                "outputs": {
                }
            }
        }
    },
    "properties": {
        "id": {
            "type": "number",
            "label": "ID",
            "is_pk": true,
            "link": "/taxi-order/{id}",
            "calculated": true
        },
        "state": {
            "type": "text",
            "label": "State",
            "calculated": true
        },
        "name": {
            "type": "text",
            "label": "Name",
            "required": true
        },
        "email": {
            "type": "email",
            "label": "e-mail",
            "required": true
        },
        "address": {
            "type": "textarea",
            "label": "address",
            "required": true,
            "tabular_hidden": true
        },
        "created": {
            "type": "datetime",
            "label": "Created",
            "format": "%Y-%m-%d %H:%M",
            "readonly": true,
            "tabular_hidden": false,
            "tabular_width": "84",
            "calculated": true
        },
        "modified": {
            "type": "datetime",
            "label": "Modified",
            "format": "%Y-%m-%d %H:%M",
            "readonly": true,
            "tabular_hidden": false,
            "tabular_width": "84",
            "calculated": true
        }
    },
    "default_filters": {
        "order_by": "created",
        "order_asc": false
    }
}

