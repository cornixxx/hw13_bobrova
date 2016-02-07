<?php

/*main-nav*/

$navItems = array(
    ['title' =>'Новости', 'url' => 'index.php#news'],
    ['title' =>'Рекомендую', 'url' => 'index.php#recomend','children' => array(
        ['title' =>'Кондиционер', 'url' => 'info.php'],
        ['title' =>'Солярис для лица c витамином', 'url' => 'info.php'],
        ['title' =>'Бальзам для век', 'url' => 'info.php'],
        ['title' =>'Ночной крем', 'url' => 'info.php'],
        ['title' =>'Динамический увлажняющий крем', 'url' => 'info.php'],
        ['title' =>'Водные компрессы Мёртвого Моря', 'url' => 'info.php'],
        ['title' =>'Лосьон для тела /"Солярис/"', 'url' => 'info.php'],
        ['title' =>'Квартет солей Мертвого моря', 'url' => 'info.php'],
        ['title' =>'Очищающее молочко для лица', 'url' => 'info.php'],
        ['title' =>'Шампунь против перхоти', 'url' => 'info.php'],
        ['title' =>'Комплект пробников кремов', 'url' => 'info.php'],
        ['title' =>'Шампунь для повседневного пользования', 'url' => 'info.php'],
        ['title' =>'Грязевая маска для лица', 'url' => 'info.php'],
        ['title' =>'Тонизирующий лосьон для тела', 'url' => 'info.php'],
        ['title' =>'Крем для рук и ногтей', 'url' => 'info.php'],
        ['title' =>'Зубная паста /"Шинсин/"', 'url' => 'info.php'],
    )],
    ['title' =>'Приглашаю', 'url' => 'index.php#email'],
    ['title' =>'Акции', 'url' => 'text.php'],
    ['title' =>'Контакты', 'url' => 'index.php#footer'],
);

/* sidebar*/

$SidebarItems = array(
    ['title' =>'Соли и грязи', 'url' => 'catalog.php','children' => array(
        ['title' =>'Дезодорант женский "Фиона"', 'url' => 'info.php'],
        ['title' =>'Дезодорант женский "Рут"', 'url' => 'info.php'],
        ['title' =>'Дезодорант женский "Киви"', 'url' => 'info.php'],
        ['title' =>'Дезодорант женский "Леди" ', 'url' => 'info.php'],
        ['title' =>'Мужской дезодорант "Лорд"', 'url' => 'info.php'],
        ['title' =>'Женские духи "Леди"', 'url' => 'info.php'],
        ['title' =>'Женские духи "Фиона"', 'url' => 'info.php'],
        ['title' =>'Женские духи "Монел"', 'url' => 'info.php'],
        ['title' =>'Женские духи "Киви"', 'url' => 'info.php'],
        ['title' =>'Женские духи "Рут" ', 'url' => 'info.php'],
        ['title' =>'Женские духи "1954"', 'url' => 'info.php'],
        ['title' =>'Мужской лосьон "Лорд"', 'url' => 'info.php'],
        ['title' =>'Губная помада', 'url' => 'info.php'],
        ['title' =>'Биологически акт', 'url' => 'info.php'],
    )],
    ['title' =>'Кремы и лосьены', 'url' => 'catalog.php'],
    ['title' =>'Парфумерия', 'url' => 'catalog.php'],
    ['title' =>'Витамины и бады', 'url' => 'catalog.php'],
    ['title' =>'Чаи', 'url' => 'catalog.php'],
);

/* Catalog */

$CatalogItems = array(
    ['src' =>'img/catalog-product1.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product2.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product3.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product1.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product2.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product3.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product1.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product2.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product3.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product1.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования','alt'=>'#'],
    ['src' =>'img/catalog-product2.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/catalog-product3.jpg', 'url' => 'info.php', 'price'=>'280 грн','descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
);

$newsItems = array(
    ['src' =>'img/news1.jpg', 'alt'=>'#', 'url' => '#', 'descript'=>'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"' ],
    ['src' =>'img/news2.jpg', 'alt'=>'#', 'url' => '#', 'descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"' ],
    ['src' =>'img/news3.jpg', 'alt'=>'#', 'url' => '#', 'descript'=>'Доктор Нонна на телеканале "Домашний" в программе "Спросите Повара"' ],
    ['src' =>'img/news4.jpg', 'alt'=>'#', 'url' => '#', 'descript'=>'Доктор Нонна на НТВ в программе "Наши со Львом Новоженовым"' ],
);

$partnersItems = array(
    ['src' =>'img/partner1.jpg', 'alt'=>'#', 'url' => '#', 'name'=>'Диорнева Татьяна', 'position'=>'Директор', 'loc'=>'Мариуполь' ],
    ['src' =>'img/partner2.jpg', 'alt'=>'#', 'url' => '#', 'name'=>'Проценко Мария', 'position'=>'Директор', 'loc'=>'Донецк' ],
    ['src' =>'img/partner1.jpg', 'alt'=>'#', 'url' => '#', 'name'=>'Диорнева Татьяна', 'position'=>'Директор', 'loc'=>'Мариуполь' ],
    ['src' =>'img/partner2.jpg', 'alt'=>'#', 'url' => '#', 'name'=>'Проценко Мария', 'position'=>'Директор', 'loc'=>'Донецк' ],
);

$recomendItems = array(
    ['src' =>'img/product2.jpg', 'url' => 'info.php', 'price'=>'280 грн', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/product3.jpg', 'url' => 'info.php', 'price'=>'280 грн', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/product4.jpg', 'url' => 'info.php', 'price'=>'280 грн', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/product2.jpg', 'url' => 'info.php', 'price'=>'280 грн', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/product3.jpg', 'url' => 'info.php', 'price'=>'280 грн', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
    ['src' =>'img/product4.jpg', 'url' => 'info.php', 'price'=>'280 грн', 'name'=>'Шампунь ежедневного пользования', 'alt'=>'#'],
);

$recomendNav = array(
    ['title' =>'Соли и грязи ', 'url' => 'catalog.php'],
    ['title' =>'Кремы и лосьены', 'url' => 'catalog.php'],
    ['title' =>'Парфюмерия', 'url' => 'catalog.php'],
    ['title' =>'Витамины и бады', 'url' => 'catalog.php'],
    ['title' =>'Чаи', 'url' => 'catalog.php'],
);


?>


