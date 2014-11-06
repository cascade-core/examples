{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "class": "ExampleApplication\\UniversalStateMachine",
    "include": [
        "eshop_product.graphml"
    ],
    "name": "Product",
    "desc": "Product in e-shop",
    "table": "eshop_product",
    "flupdo_resource": "database",
    "io_name": "item",
    "url": "/eshop-product/{id}",
    "parent_url": "/eshop-product",
    "default_access_policy": null,
    "state_select": "state",
    "actions": {
        "listing": {
            "heading": "Products in e-shop"
        },
        "show": {
            "heading": "{title}",
            "heading_without_links": true
        },
        "create": {
            "heading": "New e-shop product",
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
            "heading": "Edit e-shop product",
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
            "link": "/eshop-product/{id}",
            "calculated": true
        },
        "state": {
            "type": "text",
            "label": "State",
            "calculated": true
        },
        "title": {
            "type": "text",
            "label": "Title",
            "required": true
        },
        "description_md": {
            "type": "markdownarea",
            "label": "Description",
            "tabular_hidden": true,
            "required": true
        },
        "price": {
            "type": "number",
            "label": "Price",
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

