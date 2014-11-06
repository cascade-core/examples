{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "eshop_order.graphml"
    ],
    "name": "Order",
    "desc": "Order in e-shop",
    "table": "eshop_order",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/eshop-order/{id}",
    "parent_url": "/eshop-order",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Orders in e-shop"
        },
        "show": {
            "heading": "Order #{id}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New e-shop order",
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
            "heading": "Edit e-shop order",
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
            "link": "/eshop-order/{id}",
            "calculated": true
        },
        "state": {
            "type": "text",
            "label": "State",
            "calculated": true
        },
        "customer": {
            "type": "text",
            "label": "Customer name",
            "required": true
        },
        "address": {
            "type": "textarea",
            "label": "Delivery address",
            "tabular_hidden": true,
            "required": true
        },
        "items": {
            "type": "textarea",
            "label": "Items",
            "tabular_hidden": true,
            "required": true
        },
        "total_price": {
            "type": "number",
            "label": "Total price",
            "required": true,
            "format": "%d EUR"
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

