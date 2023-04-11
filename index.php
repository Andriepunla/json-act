<?php
    header('Access-Control-Allow-Origin: *');
    // root
    $flowers = [
        [   
            "img" => "rose.jpg",
            "name" => "rose",
            "Color" => "red",
            "sun_exposure" => "full sun",
            
        ],
        [   
            "img" => "orchid.jpg",
            "name" => "orchid",
            "Color" => "white",
            "sun_exposure" => "partial",
                    
        ],
        [   
            "img" => "carnation.jpg",
            "name" => "carnation",
            "Color" => "pink",
            "sun_exposure" => "full sun, partial",
                    
        ],
        [   
            "img" => "tulips.jpg",
            "name" => "tulips",
            "Color" => "red, yellow",
            "sun_exposure" => "full sun",
                    
        ],
        [   
            "img" => "dahlia.jpg",
            "name" => "dahlia",
            "Color" => "red",
            "sun_exposure" => "full sun",
                        
        ],
    ];
    $data = json_encode($flowers);
    echo $data;
    
?>