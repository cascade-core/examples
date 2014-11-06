{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "supervisor_process.graphml"
    ],
    "name": "Process",
    "desc": "Process controlled by supervisor",
    "table": "supervisor_process",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/supervisor-process/{id}",
    "parent_url": "/supervisor-process",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Processes"
        },
        "show": {
            "heading": "Process #{id}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New process",
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
            "heading": "Edit process",
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
            "link": "/supervisor-process/{id}",
            "calculated": true
        },
        "state": {
            "type": "text",
            "label": "State",
            "calculated": true
        },
        "command": {
            "type": "text",
            "label": "Command",
            "required": true
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

