{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "auction.graphml"
    ],
    "name": "Auction",
    "desc": "Auction",
    "table": "auction",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/auction/{id}",
    "parent_url": "/auction",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Auctions"
        },
        "show": {
            "heading": "{title}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New auction",
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
            "heading": "Edit auction",
            "label": "Edit",
            "block": {
                "inputs": {
                    "ref": null,
                    "item": null
                },
                "outputs": {
                }
            }
        },
        "ding": {
            "heading": "Ding",
            "label": "Ding",
            "method": "setState",
            "block": {
                "inputs": {
                    "ref": null,
                    "item": null
                },
                "outputs": {
                    "done": "return_value"
                }
            },
            "transitions": {
                "Bidding": {
                    "args": [ "Ding1" ]
                },
                "Ding1": {
                    "args": [ "Ding2" ]
                }
            }
        }
    },
    "properties": {
        "id": {
            "type": "number",
            "label": "ID",
            "is_pk": true,
            "link": "/auction/{id}",
            "calculated": true
        },
        "title": {
            "type": "text",
            "label": "Title",
            "required": true,
            "link": "/auction/{id}"
        },
        "state": {
            "type": "text",
            "label": "State",
            "calculated": true
        },
        "price": {
            "type": "number",
            "label": "Price",
            "format": "%d EUR"
        },
        "description_md": {
            "type": "markdownarea",
            "label": "Description",
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

