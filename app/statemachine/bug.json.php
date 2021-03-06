{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "bug.graphml"
    ],
    "name": "Bug",
    "desc": "Bug",
    "table": "bug",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/bug/{id}",
    "parent_url": "/bug",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Bugs"
        },
        "show": {
            "heading": "{title}",
            "heading_without_links": true
        },
        "report": {
            "heading": "New bug",
            "label": "Report",
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
            "heading": "Edit bug",
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
            "link": "/bug/{id}",
            "calculated": true
        },
        "title": {
            "type": "text",
            "label": "Title",
            "required": true,
            "link": "/bug/{id}"
        },
        "state": {
            "type": "text",
            "label": "State",
            "calculated": true
        },
        "description_md": {
            "type": "markdownarea",
            "label": "Description",
            "required": true,
            "tabular_hidden": true,
            "rows": 24
        },
        "reporter": {
            "type": "text",
            "label": "Reporter",
            "required": true
        },
        "assignee": {
            "type": "text",
            "label": "Assignee",
            "required": false
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

