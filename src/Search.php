<?php

namespace Reginaldo\DigitalCep;

class Search {
    private $url = "https://viacep.com.br/ws/";

    public function getAddressFromZipcode(string $zipCode): array {
        //
        $zipCode = preg_replace('/[^0-9]/im', '', $zipCode);

        $get = file_get_contents($this->url . $zipCode . "/json");


        if($get['erro'] == 1) {
            printf("deu erropppppppppppppppppppppppppppppp");
        }

        print_r(gettype($get));
        return (array) json_decode($get);
    }
}