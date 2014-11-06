{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "article.graphml"
    ],
    "name": "Article",
    "desc": "Article",
    "table": "article",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/article/{id}",
    "parent_url": "/article",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Articles"
        },
        "show": {
            "heading": "{title}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New article",
            "label": "Create",
            "returns": "new_id",
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
            "heading": "Edit article",
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
            "link": "/article/{id}",
            "calculated": true
        },
        "title": {
            "type": "text",
            "label": "Title",
            "required": true,
            "link": "/article/{id}"
        },
        "state": {
            "type": "text",
            "label": "State",
            "calculated": true
        },
        "perex": {
            "type": "textarea",
            "label": "Perex",
            "required": true,
            "tabular_hidden": true,
            "class": "perex",
            "rows": 10
        },
        "body_md": {
            "type": "markdownarea",
            "label": "Text",
            "required": true,
            "tabular_hidden": true,
            "rows": 24
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

