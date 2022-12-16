<?php
return  [
    'links' => [
        'dcComics' => [
            'Characters',
            'Comics',
            'Movies',
            'TV',
            'Games',
            'Videos',
            'News'
        ],
        'shop' => [
            'shop DC',
            'Shop DC Collectibles',
        ],
        'dc' => [
            'Term Of Use',
            'Privacy policy (New)',
            'Ad Choices',
            'Advertising',
            'Jobs',
            'Subscriptions',
            'Talent Woekshops',
            'CPSC Certificates',
            'Ratings',
            'Shop Help',
            'Contact Us',
        ],
        'sites' => [
            'DC',
            'MAD Magazine',
            'DC Kids',
            'DC Universe',
            'DC Power Visa',
        ],
    ],
    'links2' => [
        [
            'image' => "{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}",
            'link' => 'DIGITAL COMICS'
        ],
        [
            'image' => "{{Vite::asset('resources/img/buy-comics-merchandise.png')}}",
            'link' => 'DC MERCHANDISE'
        ],
        [
            'image' => "{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}",
            'link' => 'SUBSCRIPTION'
        ],
        [
            'image' => "{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}",
            'link' => 'COMIC SHOP LOCATOR'
        ],
        [
            'image' => "{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}",
            'link' => 'DC POWER VISA'
        ],
],
];