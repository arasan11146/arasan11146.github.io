<?php

/**
 * Theme settings
 *
 * @param array $settings
 * @return array
 */
function theme_app_settings($settings) {
    return json_decode(<<<JSON
    {
    "colorScheme": {
        "bodyColors": [
            "#111111",
            "#ffffff"
        ],
        "bgColor": "#ffffff",
        "colors": [
            "#f7c119",
            "#3b4c61",
            "#492073",
            "#ffbe8a",
            "#f9dd68"
        ],
        "customColors": [
            {
                "color": "#4242bf",
                "status": 0,
                "transparency": 1
            }
        ],
        "shadingContrast": "body-alt-color",
        "whiteContrast": "body-color",
        "bgContrast": "body-color",
        "name": "u10"
    },
    "fontScheme": {
        "name": "custom-font-family-5",
        "fonts": {
            "heading": "Open Sans, sans-serif",
            "text": "Open Sans, sans-serif",
            "accent": "Arial, sans-serif",
            "headingTitle": "Open Sans",
            "textTitle": "Open Sans"
        }
    },
    "typography": {
        "name": "custom-page-typography-24",
        "title": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_1",
            "font-size": 6,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "subtitle": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 2.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h1": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_1",
            "font-size": 3.75,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h2": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 2.25,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h3": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 1.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h4": {
            "font-weight": "700",
            "text-transform": "uppercase",
            "line-height": "1_2",
            "font-size": 1.5,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "h5": {
            "font-weight": "700",
            "text-transform": "uppercase",
            "line-height": "1_2",
            "font-size": 1.25,
            "margin-top": 20,
            "margin-bottom": 20,
            "letter-spacing": 1
        },
        "h6": {
            "font-weight": "700",
            "text-transform": "capitalize",
            "line-height": "1_2",
            "font-size": 1.125,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "largeText": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 1,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "text": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 1.125,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "smallText": {
            "bold": false,
            "line-height": "1_6",
            "font-size": 0.875,
            "margin-top": 20,
            "margin-bottom": 20
        },
        "link": {},
        "button": {
            "letter-spacing": 2,
            "font-size": 1.125,
            "line-height": "1_4",
            "color": "black",
            "margin-top": 20,
            "margin-bottom": 20,
            "gradient": "none",
            "text-transform": "uppercase",
            "font": "Oswald, sans-serif"
        },
        "blockquote": {
            "font-style": "italic",
            "line-height": "1_6",
            "font-size": 1.25,
            "indent": 20,
            "border": 4,
            "border-color": "palette-1-base",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "metadata": {
            "font-size": 0.75,
            "line-height": "1_4",
            "margin-top": 20,
            "margin-bottom": 20
        },
        "list": {
            "margin-top": 23,
            "margin-bottom": 23,
            "indent": 0,
            "line-height": "1.8"
        },
        "orderedlist": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "postContent": {
            "margin-top": 20,
            "margin-bottom": 20
        },
        "htmlBaseSize": 16,
        "theme": {
            "gradient": "",
            "image": ""
        },
        "hyperlink": {
            "text-color": "palette-1-base"
        }
    }
}
JSON
, true);
}
add_filter('np_theme_settings', 'theme_app_settings');

function theme_analytics() {
?>
    <?php $GLOBALS['googleAnalyticsMarker'] = false; ?>
<?php
}
add_action('wp_head', 'theme_analytics', 0);


function theme_favicon() {
    $custom_favicon_id = get_theme_mod('custom_favicon');
    @list($favicon_src, ,) = wp_get_attachment_image_src($custom_favicon_id, 'full');
    if (!$favicon_src) {
        $favicon_src = "";
        if ($favicon_src) {
            $favicon_src = get_template_directory_uri() . '/images/' . $favicon_src;
        }
    }

    if ($favicon_src) {
        echo "<link rel=\"icon\" href=\"$favicon_src\">";
    }
}
add_action('wp_head', 'theme_favicon');