{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "taxi_order.graphml"
    ],
    "name": "Taxi order",
    "desc": "Taxi order",
    "table": "taxi_order",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/taxi-order/{id}",
    "parent_url": "/taxi-order",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Taxi orders"
        },
        "show": {
            "heading": "Taxi order #{id}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New order",
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
        "customer": {
            "type": "text",
            "label": "Customer name",
            "required": true
        },
        "pickup_address": {
            "type": "textarea",
            "label": "Pickup address",
            "required": true
        },
        "pickup_time": {
            "type": "datetime",
            "label": "Pickup time",
            "required": true
        },
        "destination": {
            "type": "textarea",
            "label": "Destination address",
            "required": false
        },
        "price": {
            "type": "textarea",
            "label": "Price",
            "required": false,
            "format": "%d EUR"
        },
        "assigned_vehicle": {
            "type": "textarea",
            "label": "Vehicle",
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

