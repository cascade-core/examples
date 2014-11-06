{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "vps.graphml"
    ],
    "name": "VPS",
    "desc": "VPS",
    "table": "vps",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/vps/{id}",
    "parent_url": "/vps",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "VPS"
        },
        "show": {
            "heading": "VPS #{id}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New VPS",
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
            "heading": "Edit VPS",
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
        "owner": {
            "type": "text",
            "label": "Owner",
            "required": true
        },
        "system_image": {
            "type": "select",
            "label": "System image",
            "options": {
                "Debian": "Debian",
                "Suse": "Suse",
                "Redhat": "Redhat",
                "FreeBSD": "FreeBSD",
                "DOS": "DOS"
            },
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

