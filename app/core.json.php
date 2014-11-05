{
    "_": "<?php printf('_%c%c}%c',34,10,10);__halt_compiler();?>",
    "core": [

    ],
    "block_storage": {
        "smalldb": {
            "storage_class": "Smalldb\\Cascade\\BlockStorage",
            "storage_weight": 20,
            "_resources": {
                "backend": "smalldb"
            }
        }
    },    
    "context": {
        "resources": {
            "database": {
                "factory": [
                    "Flupdo\\Flupdo\\Flupdo",
                    "createInstanceFromConfig"
                ],
                "driver": "sqlite",
                "database": "data/database.sqlite"
            },
            "smalldb": {
                "class": "Smalldb\\StateMachine\\JsonDirBackend",
                "base_dir": "{DIR_APP}statemachine/",
                "_resources": {
                    "flupdo": "database"
                }
            }
        }
    },
    "blocks": {
        "config": {
            "block": "core/config",
            "x": 0,
            "y": 0
        },
        "router": {
            "block": "core/router",
            "x": 178,
            "y": 34,
            "in_con": {
                "routes": [
                    "config",
                    "routes"
                ],
                "smalldb": [
                    "smalldb_router_factory",
                    "postproc"
                ]
            }
        },
        "smalldb_router_factory": {
            "block": "smalldb/router_factory",
            "x": 0,
            "y": 159,
            "in_val": {
                "smalldb_ref": "{smalldb_ref}",
                "smalldb_type": "{smalldb_type}",
                "smalldb_action": "{smalldb_action_or_show}",
                "block": "page/{smalldb_type}/{smalldb_action_or_show}"
            }
        },        
        "main": {
            "block": "core/value/block_loader",
            "x": 404,
            "y": 15,
            "in_con": {
                "enable": [
                    "router",
                    "done"
                ],
                "block_fmt": [
                    "router",
                    "block_fmt"
                ],
                "connections": [
                    "router",
                    "connections"
                ],
                "block": [
                    "router",
                    "block"
                ]
            },
            "in_val": {
                "output_forward": [ "title", "type", "done" ]
            }
        },
        "skeleton": {
            "block": "skeleton",
            "x": 436,
            "y": 239,
            "in_con": {
                "enable": [
                    "router",
                    "skeleton"
                ]
            }
        },
        "page_not_found": {
            "block": "page_not_found",
            "x": 717,
            "y": 0,
            "in_con": {
                "enable": [
                    ":not",
                    "main",
                    "done"
                ]
            }
        },        
        "page_options": {
            "block": "core/out/page_options",
            "x": 671,
            "y": 114,
            "in_con": {
                "enable": [
                    "main",
                    "done"
                ],
                "title": [
                    ":or",
                    "main",
                    "title",
                    "router",
                    "title"
                ],
                "title_fmt": [
                    "router",
                    "title_fmt"
                ],
                "type": [
                    ":or",
                    "main",
                    "type",
                    "router",
                    "type"
                ]
            }
        }
    }
}
