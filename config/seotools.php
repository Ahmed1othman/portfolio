<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => 'صيهد العامة للمقاولات واعمال العزل', // set false to total remove
            'titleBefore'  =>'صيهد العامة', // Put defaults.title before page title, like 'It's Over 9000!  Dashboard'
            'description'  => 'شركة الصيهد العامة تقدم خصومات هائلة تصلي الي 40% حيث انها تخصصت في وكشف تسربات المياه في كل انحاء المملكة وكافة انواع العزل عزل الفوم عزل مائي عزل حراري عزل شينكو شركة صيهد العامة للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['sihadgeneral, sihad, sihad, alwosta, awazel, best, the best, عزل فوم عزل مائي, كشف تسربات المياه, تنظيف منازل ,عزل شينكو ,عزل حراري عزل ,اسطح صيهد ,العامة للمقاولات واعمال العزل'],
            'canonical'    => 'full', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'صيهد العامة للمقاولات واعمال العزل', // set false to total remove
            'description' => 'شركة صيهد العامة للمقاولات واعمال العزل, هي واحدة من اهم وافضل الشركات في هذا المجال في الرياض', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => 'صيهد العامة للمقاولات واعمال العزل',
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'صيهد العامة للمقاولات واعمال العزل', // set false to total remove
            'description' => '', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
