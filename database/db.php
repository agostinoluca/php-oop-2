<?php
require_once __DIR__ . '/../app/models/Product.php';

$dbPetStore = [
    new Food('Meat', 125, 'https://arcaplanet.vtexassets.com/arquivos/ids/274071/PT.01.jpg?v=637955408913800000', 'Food', 'Cats', '10/10/24'),
    new Toy('Feather Toy', 15, 'https://arcaplanet.vtexassets.com/arquivos/ids/223739/kong-gatto-feather-teaser.jpg?v=637454735282000000', 'Toy', 'Cats', 'Mixed plastic'),
    new Food('Chicken Biscuits', 79, 'https://arcaplanet.vtexassets.com/arquivos/ids/245758/hi-chicken-cane-snack-cuoricini-pollo.jpg?v=637455025485130000', 'Food', 'Dogs', '15/06/27'),
    new Toy('Rubber Chew Toy', 12, 'https://arcaplanet.vtexassets.com/arquivos/ids/294735/Playology-Cane-Gioco-Osso-Aroma-Manzo-10169592.jpg?v=638433529078000000', 'Toy', 'Dogs', 'Rubber'),
    new PetHouse('Cat Bed', 49, 'https://arcaplanet.vtexassets.com/arquivos/ids/265702/PHO_PRO_CAT_CLIP_49920-01-49923-1_-SALL_-APRKU_-V1.jpg?v=637737941822300000', 'Bed', 'Cats', '90x70x25'),
    new Food('Meat', 109, 'https://arcaplanet.vtexassets.com/arquivos/ids/280403/expecial-cane-bocconcini-agnello-e-tacchino.jpg?v=638115354945170000', 'Food', 'Dogs', '30/09/24'),
    new Food('Fish Treats', 99, 'https://arcaplanet.vtexassets.com/arquivos/ids/273817/purina-felix-party-mix-ocean-mix.jpg?v=637951294030530000', 'Food', 'Cats', '12/12/24'),
    new PetHouse('Dog House', 199, 'https://arcaplanet.vtexassets.com/arquivos/ids/251868/p-a-y--canile-eco-lodge-medium.jpg?v=637455080760330000', 'Bed', 'Dogs', '180x200x350'),
];
