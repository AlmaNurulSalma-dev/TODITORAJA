<?php
require_once __DIR__ . '/functions/database_functions.php';
$rooms = getRoomDetails();
$events = getEventDetails();
?>

<!DOCTYPE html>
<html data-wf-page="654390ee7d74736cd6076aa9" data-wf-site="654390ee7d74736cd6076aaa" lang="en">

<head>
  <meta charset="utf-8" />
  <title>Modern Realty - Webflow Ecommerce Website Template</title>
  <meta
    content="Explore luxury on Modern Realty&#x27;s sleek site. Customize our real estate Webflow template and responsive rental property effortlessly. Connect to our powerful CMS and E-commerce today."
    name="description" />
  <meta content="Modern Realty - Webflow Ecommerce Website Template" property="og:title" />
  <meta
    content="Explore luxury on Modern Realty&#x27;s sleek site. Customize our real estate Webflow template and responsive rental property effortlessly. Connect to our powerful CMS and E-commerce today."
    property="og:description" />
  <meta content="images/responsiveseo.jpg" property="og:image" />
  <meta content="Modern Realty - Webflow Ecommerce Website Template" property="twitter:title" />
  <meta
    content="Explore luxury on Modern Realty&#x27;s sleek site. Customize our real estate Webflow template and responsive rental property effortlessly. Connect to our powerful CMS and E-commerce today."
    property="twitter:description" />
  <meta content="images/responsiveseo.jpg" property="twitter:image" />
  <meta property="og:type" content="website" />
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <link href="css/webflow-style.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Material Symbols Sharp:100,regular",
          "Archivo:100,300,regular,500,100italic,300italic,500italic", "Inter:100,regular",
          "Material Symbols Outlined:100,200,300,regular,500,600,700"
        ]
      }
    });
  </script>
  <script type="text/javascript">
    ! function (o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className +=
        t + "touch")
    }(window, document);
  </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon" />
  <link href="images/app-icon.png" rel="apple-touch-icon" />
  <script type="text/javascript">
    window.__WEBFLOW_CURRENCY_SETTINGS = {
      "currencyCode": "USD",
      "symbol": "$",
      "decimal": ".",
      "fractionDigits": 2,
      "group": ",",
      "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
      "hideDecimalForWholeNumbers": false
    };
  </script>
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="js/script.js"></script>
</head>

<body>
  <div data-w-id="452c9c05-5bbd-f9a7-18f3-508e45fa7d2f" style="display:flex" class="preloader-wrapper">
    <div data-w-id="452c9c05-5bbd-f9a7-18f3-508e45fa7d30" style="opacity:1" class="preloader-right"></div>
    <div data-w-id="452c9c05-5bbd-f9a7-18f3-508e45fa7d31" style="opacity:1" class="preloader-left"></div>
    <div data-w-id="452c9c05-5bbd-f9a7-18f3-508e45fa7d32" class="prelaoder-logo-wrapper">
      <div class="preloader-logo shadow">
        <div class="preloader-logo-icon"><img src="images/app-icon.png" loading="eager"
            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(180deg) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(180deg) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(180deg) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(180deg) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
            data-w-id="8bfab80b-0475-03cf-4ada-b92f46b5dedb" alt="webclip" class="preloader-logo-image" />
          <h4 data-w-id="8bfab80b-0475-03cf-4ada-b92f46b5dedc" style="opacity:0" class="preloader-logo-text">modern
            Realty</h4>
          <h6 data-w-id="8bfab80b-0475-03cf-4ada-b92f46b5dede" style="opacity:0"
            class="preloader-logo-text-small shift-right">properties</h6>
        </div>
      </div>
    </div>
  </div>
  <div data-animation="default" class="nav w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium"
    data-w-id="2931e472-bcec-623e-bbbe-6f7c9078a121" role="banner" data-duration="400" data-doc-height="1">
    <div class="nav-bar-menu-wrapper"><a href="/" aria-current="page"
        class="logo-wrapper w-inline-block w--current"><img src="images/modernrealtylogo2.svg" loading="lazy"
          alt="modern realty logo" class="logo" /></a>
      <div class="w-layout-hflex nav-flex">
        <nav role="navigation" class="main-nav-wrapper w-nav-menu"><a href="/" aria-current="page"
            class="nav-link w-nav-link w--current">Home</a><a href="/about-us" class="nav-link w-nav-link">About</a><a
            href="/listings" class="nav-link w-nav-link">listings</a><a href="/agents"
            class="nav-link w-nav-link">Agents</a><a href="/blog" class="nav-link w-nav-link">Blog</a><a
            href="/contact-us" class="nav-link w-nav-link">Contact</a></nav>
        <div class="nav-flex">
          <div data-open-product="" data-wf-cart-type="modal" data-wf-cart-query="query Dynamo2 {
  database {
    id
    commerceOrder {
      comment
      extraItems {
        name
        pluginId
        pluginName
        price {
          value
          unit
          decimalValue
          string
        }
      }
      id
      startedOn
      statusFlags {
        hasDownloads
        hasSubscription
        isFreeOrder
        requiresShipping
      }
      subtotal {
        value
        unit
        decimalValue
        string
      }
      total {
        value
        unit
        decimalValue
        string
      }
      updatedOn
      userItems {
        count
        id
        product {
          id
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_name_
          f_sku_properties_3dr {
            id
            name
            enum {
              id
              name
              slug
            }
          }
        }
        rowTotal {
          value
          unit
          decimalValue
          string
        }
        sku {
          cmsLocaleId
          f__draft_0ht
          f__archived_0ht
          f_main_image_4dr {
            url
            file {
              size
              origFileName
              createdOn
              updatedOn
              mimeType
              width
              height
              variants {
                origFileName
                quality
                height
                width
                s3Url
                error
                size
              }
            }
            alt
          }
          f_sku_values_3dr {
            property {
              id
            }
            value {
              id
            }
          }
          id
        }
        subscriptionFrequency
        subscriptionInterval
        subscriptionTrial
      }
      userItemsCount
    }
  }
  site {
    id
    commerce {
      businessAddress {
        country
      }
      defaultCountry
      defaultCurrency
      quickCheckoutEnabled
    }
  }
}" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper" data-node-type="commerce-cart-wrapper"><a
              class="w-commerce-commercecartopenlink cart-button-wrapper w-inline-block" role="button"
              aria-haspopup="dialog" aria-label="Open cart" data-node-type="commerce-cart-open-link" href="#"><svg
                class="w-commerce-commercecartopenlinkicon cart-icon" width="17px" height="17px" viewBox="0 0 17 17">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <path
                    d="M2.60592789,2 L0,2 L0,0 L4.39407211,0 L4.84288393,4 L16,4 L16,9.93844589 L3.76940945,12.3694378 L2.60592789,2 Z M15.5,17 C14.6715729,17 14,16.3284271 14,15.5 C14,14.6715729 14.6715729,14 15.5,14 C16.3284271,14 17,14.6715729 17,15.5 C17,16.3284271 16.3284271,17 15.5,17 Z M5.5,17 C4.67157288,17 4,16.3284271 4,15.5 C4,14.6715729 4.67157288,14 5.5,14 C6.32842712,14 7,14.6715729 7,15.5 C7,16.3284271 6.32842712,17 5.5,17 Z"
                    fill="currentColor" fill-rule="nonzero"></path>
                </g>
              </svg>
              <div class="cart-text-block w-inline-block">Cart</div>
              <div
                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
                class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
            </a>
            <div style="display:none"
              class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal"
              data-node-type="commerce-cart-container-wrapper">
              <div data-node-type="commerce-cart-container" role="dialog"
                class="w-commerce-commercecartcontainer cart-container">
                <div class="w-commerce-commercecartheader cart-header">
                  <h4 class="w-commerce-commercecartheading color-black">Your Cart</h4><a
                    class="w-commerce-commercecartcloselink w-inline-block" role="button" aria-label="Close cart"
                    data-node-type="commerce-cart-close-link"><svg width="16px" height="16px" viewBox="0 0 16 16">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g fill-rule="nonzero" fill="#333333">
                          <polygon
                            points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8">
                          </polygon>
                        </g>
                      </g>
                    </svg></a>
                </div>
                <div class="w-commerce-commercecartformwrapper">
                  <form style="display:none" class="w-commerce-commercecartform" data-node-type="commerce-cart-form">
                    <script type="text/x-wf-template" id="wf-template-2931e472-bcec-623e-bbbe-6f7c9078a145">
                      %3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20loading%3D%22eager%22%20src%3D%22https%3A%2F%2Fcdn.prod.website-files.com%2Fplugins%2FBasic%2Fassets%2Fplaceholder.60f9b1840c.svg%22%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20cart-window-text%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20class%3D%22cart-window-text%22%3EThis%20is%20some%20text%20inside%20of%20a%20div%20block.%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-2931e472-bcec-623e-bbbe-6f7c9078a14c%22%3E%253Cli%253E%253Cspan%2520class%253D%2522cart-window-text%2522%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520class%253D%2522cart-window-text%2522%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-2931e472-bcec-623e-bbbe-6f7c9078a14c%22%3E%3Cli%3E%3Cspan%20class%3D%22cart-window-text%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22cart-window-text%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22button%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%20aria-label%3D%22Remove%20item%20from%20cart%22%3E%3Cdiv%20class%3D%22cart-window-text%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20aria-label%3D%22Update%20quantity%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartquantity%20cart-window-text%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20type%3D%22number%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E
                    </script>
                    <div class="w-commerce-commercecartlist" data-wf-collection="database.commerceOrder.userItems"
                      data-wf-template-id="wf-template-2931e472-bcec-623e-bbbe-6f7c9078a145">
                      <div class="w-commerce-commercecartitem"><img loading="eager"
                          src="https://cdn.prod.website-files.com/plugins/Basic/assets/placeholder.60f9b1840c.svg"
                          data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D"
                          alt="" class="w-commerce-commercecartitemimage w-dyn-bind-empty" />
                        <div class="w-commerce-commercecartiteminfo">
                          <div
                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D"
                            class="w-commerce-commercecartproductname cart-window-text w-dyn-bind-empty"></div>
                          <div class="cart-window-text">This is some text inside of a div block.</div>
                          <script type="text/x-wf-template" id="wf-template-2931e472-bcec-623e-bbbe-6f7c9078a14c">
                            %3Cli%3E%3Cspan%20class%3D%22cart-window-text%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20class%3D%22cart-window-text%22%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%3E%3C%2Fspan%3E%3C%2Fli%3E
                          </script>
                          <ul
                            data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                            class="w-commerce-commercecartoptionlist"
                            data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                            data-wf-template-id="wf-template-2931e472-bcec-623e-bbbe-6f7c9078a14c">
                            <li><span class="cart-window-text"
                                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"></span><span>:
                              </span><span class="cart-window-text"
                                data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"></span>
                            </li>
                          </ul><a href="#" role="button"
                            data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                            class="w-inline-block" data-wf-cart-action="remove-item" data-commerce-sku-id=""
                            aria-label="Remove item from cart">
                            <div class="cart-window-text">Remove</div>
                          </a>
                        </div><input aria-label="Update quantity"
                          data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                          class="w-commerce-commercecartquantity cart-window-text" required="" pattern="^[0-9]+$"
                          inputMode="numeric" type="number" name="quantity" autoComplete="off"
                          data-wf-cart-action="update-item-quantity" data-commerce-sku-id="" value="1" />
                      </div>
                    </div>
                    <div class="w-commerce-commercecartfooter">
                      <div aria-atomic="true" aria-live="polite" class="w-commerce-commercecartlineitem">
                        <div class="cart-window-text">Subtotal</div>
                        <div
                          data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                          class="w-commerce-commercecartordervalue cart-window-text"></div>
                      </div>
                      <div class="checkout">
                        <div data-node-type="commerce-cart-quick-checkout-actions" style="display:none"><a
                            data-node-type="commerce-cart-apple-pay-button" role="button" aria-label="Apple Pay"
                            aria-haspopup="dialog"
                            style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat"
                            class="w-commerce-commercecartapplepaybutton" tabindex="0">
                            <div></div>
                          </a><a data-node-type="commerce-cart-quick-checkout-button" role="button" tabindex="0"
                            aria-haspopup="dialog" style="display:none"
                            class="w-commerce-commercecartquickcheckoutbutton"><svg
                              class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
                              <defs>
                                <polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
                                <polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
                              </defs>
                              <g fill="none" fill-rule="evenodd">
                                <path fill="#4285F4"
                                  d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469">
                                </path>
                                <path fill="#34A853"
                                  d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16">
                                </path>
                                <g transform="translate(0 4)">
                                  <mask id="google-mark-b" fill="#fff">
                                    <use xlink:href="#google-mark-a"></use>
                                  </mask>
                                  <path fill="#FBBC04"
                                    d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                    mask="url(#google-mark-b)"></path>
                                </g>
                                <mask id="google-mark-d" fill="#fff">
                                  <use xlink:href="#google-mark-c"></use>
                                </mask>
                                <path fill="#EA4335"
                                  d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                  mask="url(#google-mark-d)"></path>
                              </g>
                            </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon"
                              xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                              <g fill="none" fill-rule="evenodd">
                                <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                                <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
                                <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
                                <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
                              </g>
                            </svg>
                            <div>Pay with browser.</div>
                          </a></div><a href="/checkout" value="Continue to Checkout"
                          class="w-commerce-commercecartcheckoutbutton button" data-loading-text="Hang Tight..."
                          data-node-type="cart-checkout-button">Continue to Checkout</a>
                      </div>
                    </div>
                  </form>
                  <div class="w-commerce-commercecartemptystate">
                    <div aria-label="This cart is empty" aria-live="polite" class="color-black">No items found.</div>
                  </div>
                  <div aria-live="assertive" style="display:none" data-node-type="commerce-cart-error"
                    class="w-commerce-commercecarterrorstate">
                    <div class="color-black w-cart-error-msg"
                      data-w-cart-quantity-error="Product is not available in this quantity."
                      data-w-cart-general-error="Something went wrong when adding this item to the cart."
                      data-w-cart-checkout-error="Checkout is disabled on this site."
                      data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue."
                      data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">
                      Product is not available in this quantity.</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="nav-menu-button w-nav-button">
            <div class="nav-menu-icon w-icon-nav-menu"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">
    <wrapper class="space"></wrapper>
    <section class="section">
      <div class="w-layout-blockcontainer container-full padding-5 _100vh w-container">
        <div class="hero-wrapper">
          <div data-w-id="06b3df88-53d6-c8c3-8f13-d1ec1711c28e" style="opacity:0" class="hero-h1-wrapper">
            <div class="word-wrapper">
              <h1>TORAJA</h1>
            </div>
            <h2 class="h2-hero-italic color-primary">TODI</h2>
            <div class="word-wrapper">
              <h2 class="h2-hero-home">TORAJA</h2>
            </div>
          </div>
          <p data-w-id="06b3df88-53d6-c8c3-8f13-d1ec1711c297" style="opacity:0" class="max-width-420px">Our portfolio
            includes exquisite properties nestled in prime locations and prestigious neighborhoods renowned for their
            desirability.</p><a href="#learn-more" data-w-id="06b3df88-53d6-c8c3-8f13-d1ec1711c29a"
            class="spinner-wrapper w-inline-block">
            <div data-w-id="06b3df88-53d6-c8c3-8f13-d1ec1711c29b" class="spinner-image"></div>
            <p style="-webkit-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0);-moz-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0);-ms-transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0);transform:translate3d(0, 0px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(180deg) skew(0, 0)"
              class="spinner-icon">foundation</p>
          </a>
        </div><img class="hero-image" src="images/image.png" alt="buildings" style="opacity:0"
          sizes="(max-width: 991px) 90vw, 948px" data-w-id="06b3df88-53d6-c8c3-8f13-d1ec1711c299" loading="eager"
          srcset="images/image-p-500.png 500w, images/image-p-800.png 800w, images/image-1.png 948w" />
      </div>
    </section>
    <section class="section">
      <div class="w-layout-blockcontainer container-full padding-10 w-container">
        <div class="space"></div>
        <div class="numbers-grid slide-up-animation">
          <div class="wrapper-quarter">
            <div class="icon-square-wrapper">
              <h2 class="icon">apartment</h2>
            </div>
            <h5 class="numbers-description">Elegant<br />Apartments<br /></h5>
          </div>
          <div class="wrapper-quarter">
            <div class="icon-square-wrapper">
              <h2 class="icon">villa</h2>
            </div>
            <h5 class="numbers-description">Luxury<br />Houses</h5>
          </div>
          <div class="wrapper-quarter">
            <div class="icon-square-wrapper">
              <h2 class="icon">recommend</h2>
            </div>
            <h5 class="numbers-description">Satisfied<br />Guests</h5>
          </div>
          <div class="wrapper-quarter">
            <div class="icon-square-wrapper">
              <h2 class="icon">sentiment_very_satisfied</h2>
            </div>
            <h5 class="numbers-description">Happy<br />Owners</h5>
          </div>
        </div>
        <div class="space"></div>
      </div>
    </section>
    
    <section id="learn-more" class="section">
      <div class="w-layout-blockcontainer container-full padding-10 w-container">
        <div class="listings-title-flex">
          <h2 class="slide-from-left-animation">Property <span class="h2-italic color-primary">Listings</span></h2>
          <div class="listings-text-block slide-from-right-animation">
            <h5>Modern &amp; Stylish</h5>
            <p class="max-width-450px">Discover the allure of prime locations and coveted neighborhoods with our
              selection of luxury properties.</p>
          </div>
        </div>
        <div class="space"></div>
        <div class="slide-up-animation w-dyn-list">
          <div role="list" class="listings-cards-flex w-dyn-items">

          <?php $index = 0; ?>
          <?php foreach($rooms as $room): ?>
              <?php if ($index < 6): ?>
                  <div role="listitem" class="w-dyn-item">
                      <a data-w-id="3fba0f8c-7dc1-5267-eac8-ede37ea58981"
                          href="details.php?room_id=<?= isset($room['id']) ? urlencode($room['id']) : '' ?>" class="listings-card w-inline-block">
                          <div class="listings-card-text-wrapper">
                              <h4 class="listing-card-title"><?= htmlspecialchars($room['room_number']) ?></h4>
                              <div class="listings-flex">
                                  <div class="card-amenities-flex">
                                      <h2 class="listing-card-icon">king_bed</h2>
                                      <h5 class="no-wrap">1 Bed</h5>
                                  </div>
                                  <div class="card-amenities-flex">
                                      <h2 class="listing-card-icon">shower</h2>
                                      <h5 class="no-wrap">1 Bath</h5>
                                  </div>
                              </div>
                              <h5 class="color-white"><b>Rp. <?= htmlspecialchars($room['price']) ?></b></h5>
                          </div>
                          <div class="listing-image-wrapper">
                              <img class="listing-image" src="<?= htmlspecialchars($room['photo']) ?>" width="360" height="320" alt=""
                                  sizes="(max-width: 479px) 288px, 360px"
                                  loading="eager" 
                                  srcset="<?= htmlspecialchars($room['photo']) ?> 360w, <?= htmlspecialchars($room['photo']) ?> 720w" />
                              <div style="opacity:0.1;" class="circle"></div>
                          </div>
                          <div class="listings-card-badge">
                              <p class="badge-text">For </p>
                              <p class="badge-text">Sale</p>
                          </div>
                      </a>
                  </div>
              <?php endif; ?>
              <?php $index++; ?>
          <?php endforeach; ?>

          <button id="view-more-btn" class="view-more-btn">View More</button>
          <style>
            /* Tombol dengan warna abu-abu dan teks putih */
            .view-more-btn {
                background-color: #808080; /* Warna abu-abu */
                color: white; /* Warna teks putih */
                border: none; /* Hilangkan border */
                padding: 10px 20px; /* Spasi di dalam tombol */
                border-radius: 5px; /* Sudut melengkung */
                font-size: 16px; /* Ukuran font */
                cursor: pointer; /* Tampilkan pointer saat hover */
                transition: background-color 0.3s ease; /* Efek transisi */
            }

            /* Efek hover untuk tombol */
            .view-more-btn:hover {
                background-color: #696969; /* Warna abu-abu lebih gelap saat hover */
            }

            /* Efek klik */
            .view-more-btn:active {
                background-color: #505050; /* Warna lebih gelap saat diklik */
            }

            /* Tambahan untuk fokus (aksesibilitas) */
            .view-more-btn:focus {
                outline: 2px solid #ffffff; /* Lingkaran putih saat fokus */
                outline-offset: 3px;
            }
        </style>
        <script>
          document.getElementById('view-more-btn').addEventListener('click', function () {
              const hiddenItems = document.querySelectorAll('.w-dyn-item.hidden');
              if (hiddenItems.length === 0) {
                  console.warn('No hidden items found!');
                  return;
              }
              
              hiddenItems.forEach(item => {
                  item.style.display = 'block';
              });

              // Sembunyikan tombol setelah klik
              this.style.display = 'none';
          });
        </script>


            
            


        <?php $index = 0; ?>
        <div class="space"></div>
        <div class="steps-grid-quarter slide-up-animation">
            <?php foreach ($events as $event): ?>
                <?php if ($index < 6): ?>
                    <div data-w-id="cf425558-2256-2f6a-5cf7-1078e43bf269" class="steps-card">
                        <div class="steps-image">
                            <img 
                                src="<?= htmlspecialchars($event['image']) ?>" 
                                loading="eager" 
                                width="632" 
                                height="316" 
                                alt="<?= htmlspecialchars($event['event_topic']) ?>"
                                srcset="<?= htmlspecialchars($event['image']) ?>-p-500.jpg 500w, <?= htmlspecialchars($event['image']) ?> 720w"
                                sizes="(max-width: 479px) 240px, (max-width: 767px) 480px, 632px" 
                            />
                            <div
                                style="display:none;-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1);opacity:0"
                                class="services-text-wrapper"
                            >
                                <div class="w-layout-hflex services-text-flex">
                                    <img src="images/align_flex_end.png" loading="eager" alt="align flex end" />
                                    <p class="services-paragraph">
                                        <?= htmlspecialchars($event['short_details']) ?>
                                    </p>
                                </div>
                            </div>
                            <div style="opacity:0.1;" class="circle"></div>
                        </div>
                        <div class="steps-card-text-block">
                            <h4><?= htmlspecialchars($event['event_topic']) ?></h4>
                        </div>
                    </div>
                <?php endif; ?>
                <?php $index++; ?>
            <?php endforeach; ?>
        </div>
        





          <div data-w-id="8c85af58-8779-721e-0d62-f6ddd577529e" class="steps-card">
            <div class="steps-image"><img src="images/steps2.jpg" loading="eager" width="632" height="316" alt=""
                srcset="images/steps2-p-500.jpg 500w, images/steps2-1.jpg 720w"
                sizes="(max-width: 479px) 240px, (max-width: 767px) 480px, 632px" />
              <div
                style="display:none;-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="services-text-wrapper">
                <div class="w-layout-hflex services-text-flex"><img src="images/align_flex_end.png" loading="eager"
                    alt="align flex end" />
                  <p class="services-paragraph">After identifying properties that match your criteria, we arrange
                    exclusive tours for you to experience firsthand.</p>
                </div>
              </div>
              <div
                style="opacity:0.1;-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="circle"></div>
            </div>
            <div class="steps-card-text-block">
              <h4>Property Tours</h4>
            </div>
          </div>
          <div data-w-id="d49f33ae-e1de-5966-2ba0-15915ebccef6" class="steps-card">
            <div class="steps-image"><img src="images/steps33.jpg" loading="eager" width="632" height="316" alt=""
                srcset="images/steps33-p-500.jpg 500w, images/steps33-1.jpg 720w"
                sizes="(max-width: 479px) 240px, (max-width: 767px) 480px, 632px" />
              <div
                style="display:none;-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="services-text-wrapper">
                <div class="w-layout-hflex services-text-flex"><img src="images/align_flex_end.png" loading="eager"
                    alt="align flex end" />
                  <p class="services-paragraph">Properties to ensure our clients are making informed decisions and
                    paying a reasonable price.</p>
                </div>
              </div>
              <div
                style="opacity:0.1;-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="circle"></div>
            </div>
            <div class="steps-card-text-block">
              <h4>Evaluation</h4>
            </div>
          </div>
          <div data-w-id="81fde363-0f46-978f-f9d5-8a4a11fdf101" class="steps-card">
            <div class="steps-image"><img src="images/steps4.jpg" loading="eager" width="632" height="316" alt=""
                srcset="images/steps4-p-500.jpg 500w, images/steps4-1.jpg 720w"
                sizes="(max-width: 479px) 240px, (max-width: 767px) 480px, 632px" />
              <div
                style="display:none;-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0"
                class="services-text-wrapper">
                <div class="w-layout-hflex services-text-flex"><img src="images/align_flex_end.png" loading="eager"
                    alt="align flex end" />
                  <p class="services-paragraph">When you&#x27;ve found your perfect luxury property, we skillfully
                    negotiate on your behalf to secure the best terms and price.</p>
                </div>
              </div>
              <div
                style="opacity:0.1;-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                class="circle"></div>
            </div>
            <div class="steps-card-text-block">
              <h4>Acquisitions</h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="w-layout-blockcontainer container-full w-container">
        <div class="testimonial-wrapper">
          <div class="space-large"></div>
          <div class="title-wrapper flip-from-the-bottom">
            <h5>TESTIMONIALS</h5>
            <h2>client <span class="h2-italic color-primary">Reviews</span></h2>
            <div class="space-semi"></div>
          </div>
          <div data-delay="5000" data-animation="slide" class="testimonial-slider w-slider" data-autoplay="false"
            data-easing="ease-in-out" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
            data-nav-spacing="3" data-duration="500" data-infinite="true">
            <div class="testimonial-mask w-slider-mask">
              <div class="testimonial-slide w-slide">
                <div class="testimonial-container w-container">
                  <div class="space"></div>
                  <div data-w-id="68319e89-a653-2315-7c12-d4811fc3261b" style="opacity:0"
                    class="testimonial-listing-wrapper">
                    <div class="testimonial-card">
                      <div class="testimonial-client-info-wrapper"><img alt="beard man" loading="eager"
                          src="images/reviews1.jpg" class="testimonial-image-circle" />
                        <div class="testimonial-block-content">
                          <div class="stars-wrapper"><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /></div>
                          <div>
                            <h5>Logan Parker</h5>
                            <h6 class="color-primary">Client Review</h6>
                          </div>
                          <p>What impressed me the most was their dedication to ensuring every aspect of the transaction
                            was handled flawlessly.</p>
                        </div>
                      </div><img alt="quote icon" loading="lazy" src="images/quote.png" class="quote-icon invert" />
                    </div>
                    <div class="testimonial-card border">
                      <div class="testimonial-client-info-wrapper"><img alt="woman" loading="eager"
                          src="images/reviews2.jpg" class="testimonial-image-circle" />
                        <div class="testimonial-block-content">
                          <div class="stars-wrapper"><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /></div>
                          <div>
                            <h5>Mia Turner</h5>
                            <h6 class="color-primary">Client Review</h6>
                          </div>
                          <p>From the moment I stepped into their office, I was greeted with professionalism and a
                            genuine passion.</p>
                        </div>
                      </div><img alt="quote icon" loading="lazy" src="images/quote.png" class="quote-icon invert" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="testimonial-slide w-slide">
                <div class="testimonial-container w-container">
                  <div class="space"></div>
                  <div data-w-id="93b2b2e3-63e2-0fa2-72c2-bed02a18e0b3" style="opacity:0"
                    class="testimonial-listing-wrapper">
                    <div class="testimonial-card">
                      <div class="testimonial-client-info-wrapper"><img alt="man with a hat" loading="eager"
                          src="images/reviews3.jpg" class="testimonial-image-circle" />
                        <div class="testimonial-block-content">
                          <div class="stars-wrapper"><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /></div>
                          <div>
                            <h5>Will Roberts</h5>
                            <h6 class="color-primary">Client Review</h6>
                          </div>
                          <p>What impressed me the most was their dedication to ensuring every aspect of the transaction
                            was handled flawlessly.</p>
                        </div>
                      </div><img alt="quote icon" loading="lazy" src="images/quote.png" class="quote-icon invert" />
                    </div>
                    <div class="testimonial-card border">
                      <div class="testimonial-client-info-wrapper"><img alt="man wearing v neck shirt" loading="eager"
                          src="images/man-wearing-white-v-neck-shirt-square.jpg" class="testimonial-image-circle" />
                        <div class="testimonial-block-content">
                          <div class="stars-wrapper"><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /><img width="24" height="24" src="images/icon-14.svg" loading="lazy"
                              alt="icon" /></div>
                          <div>
                            <h5>John doe</h5>
                            <h6 class="color-primary">Client Review</h6>
                          </div>
                          <p>From the moment I stepped into their office, I was greeted with professionalism and a
                            genuine passion.</p>
                        </div>
                      </div><img alt="quote icon" loading="lazy" src="images/quote.png" class="quote-icon invert" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div data-w-id="68319e89-a653-2315-7c12-d4811fc32678" style="opacity:0"
              class="left-arrow-testimonial w-slider-arrow-left">
              <div class="testimonial-icon w-icon-slider-left"></div>
            </div>
            <div data-w-id="68319e89-a653-2315-7c12-d4811fc3267a" style="opacity:0"
              class="right-arrow-testimonial w-slider-arrow-right">
              <div class="testimonial-icon w-icon-slider-right"></div>
            </div>
            <div class="slide-nav-testimonial w-slider-nav w-slider-nav-invert w-round"></div>
          </div>
          <div class="space-large"></div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="w-layout-blockcontainer container-full w-container">
        <div class="title-flex projects-title">
          <div class="text-block slide-from-left-animation">
            <h5>destinations</h5>
            <div class="flex-title">
              <h2>our <span class="h2-italic color-primary">Areas</span></h2>
            </div>
            <p class="max-width-480px">Embark on a captivating journey through the most desirable locations that define
              the pinnacle of luxurious living.</p>
          </div><a href="/listings" class="slide-from-right-animation">See all Locations</a>
        </div>
        <div class="locations-wrapper">
          <div class="space"></div>
          <div data-delay="4000" data-animation="slide" class="locations-slider w-slider" data-autoplay="false"
            data-easing="ease" style="opacity:0" data-hide-arrows="false" data-disable-swipe="false"
            data-w-id="77f8dbd2-94ea-a7cd-ed6e-ee24130b856f" data-autoplay-limit="0" data-nav-spacing="3"
            data-duration="500" data-infinite="false">
            <div class="locations-mask w-slider-mask">
              <div class="locations-slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="/locations/london"
                        data-w-id="e7a4463d-b02b-1e4c-e6f1-335b4dbe442c" class="locations-card w-inline-block">
                        <h6 class="locations-title">London</h6>
                        <div class="locations-overlay"></div><img
                          style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                          src="images/london.jpg" loading="eager" alt="" sizes="(max-width: 479px) 90vw, 320px"
                          srcset="images/london-p-500.jpg 500w, images/london.jpg 640w" class="image-locations" />
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="locations-slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="/locations/new-york"
                        data-w-id="1072465b-d70b-a674-00a7-3a9a11f61c06" class="locations-card w-inline-block">
                        <h6 class="locations-title">New York</h6>
                        <div class="locations-overlay"></div><img
                          style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                          src="images/newyork.jpg" loading="eager" alt="" sizes="(max-width: 479px) 90vw, 320px"
                          srcset="images/newyork-p-500.jpg 500w, images/newyork.jpg 640w" class="image-locations" />
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="locations-slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="/locations/los-angeles"
                        data-w-id="652bcdf1-bec1-2fad-0469-76ee93fefaa7" class="locations-card w-inline-block">
                        <h6 class="locations-title">Los Angeles</h6>
                        <div class="locations-overlay"></div><img
                          style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                          src="images/la.jpg" loading="eager" alt="" sizes="(max-width: 479px) 90vw, 320px"
                          srcset="images/la-p-500.jpg 500w, images/la.jpg 640w" class="image-locations" />
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="locations-slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="/locations/tokyo"
                        data-w-id="77f8dbd2-94ea-a7cd-ed6e-ee24130b8572" class="locations-card w-inline-block">
                        <h6 class="locations-title">Tokyo</h6>
                        <div class="locations-overlay"></div><img
                          style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                          src="images/tokyo.jpg" loading="eager" alt="" sizes="(max-width: 479px) 90vw, 320px"
                          srcset="images/tokyo-p-500.jpg 500w, images/tokyo.jpg 640w" class="image-locations" />
                      </a></div>
                  </div>
                </div>
              </div>
              <div class="locations-slide w-slide">
                <div class="w-dyn-list">
                  <div role="list" class="w-dyn-items">
                    <div role="listitem" class="w-dyn-item"><a href="/locations/paris"
                        data-w-id="e38ee706-0193-b881-d44c-46be45e7ed44" class="locations-card w-inline-block">
                        <h6 class="locations-title">Paris</h6>
                        <div class="locations-overlay"></div><img
                          style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                          src="images/paris.jpg" loading="lazy" alt="" sizes="(max-width: 479px) 90vw, 320px"
                          srcset="images/paris-p-500.jpg 500w, images/paris.jpg 640w" class="image-locations" />
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="locations-left-arrow w-slider-arrow-left">
              <div class="icon-arrow w-icon-slider-left"></div>
            </div>
            <div class="locations-right-arrow w-slider-arrow-right">
              <div class="icon-arrow w-icon-slider-right"></div>
            </div>
            <div class="locations-nav w-slider-nav"></div>
          </div>
        </div>
        <div class="space-large"></div>
      </div>
    </section>
    <section class="section">
      <div class="w-layout-blockcontainer container-full padding-10 w-container">
        <div class="title-flex-reversed">
          <div class="text-block slide-from-left-animation">
            <h5>our blog</h5>
            <p class="max-width-360px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum convallis.
            </p>
          </div>
          <div class="flex-title">
            <h2 class="slide-from-right-animation">Articles <span class="h2-italic color-primary">&amp; Insights</span>
            </h2>
          </div>
        </div>
        <div class="space"></div>
        <div class="slide-up-animation w-dyn-list">
          <div role="list" class="w-dyn-items">
            <div role="listitem" class="w-dyn-item"><a href="/blog/the-future-of-luxury-real-estate"
                class="blog-card-flex w-inline-block">
                <div class="blog-card-text-wrapper">
                  <div class="flex-info">
                    <div class="badge-card-curve">
                      <p>Insights</p>
                    </div>
                    <div class="blog-flex">
                      <div class="avatar-flex">
                        <div class="blog-avatar"><img width="24" height="24" alt="" loading="eager"
                            src="images/smiling-man-in-sweater.jpg" sizes="28px"
                            srcset="images/smiling-man-in-sweater-p-500.jpg 500w, images/smiling-man-in-sweater-p-800.jpg 800w, images/smiling-man-in-sweater.jpg 1000w"
                            class="avatar-small" /></div>
                        <p class="color-primary">Noah Cooper</p>
                      </div><img width="2" height="17.5" alt="" src="images/vectors-wrapper.svg" loading="lazy"
                        class="small-line-divider" />
                      <p>Nov 4, 2023</p>
                    </div>
                  </div>
                  <h3>The Future of Luxury Real Estate</h3>
                  <p>As the world becomes more connected and environmentally conscious, luxury real estate is evolving
                    to meet new demands. In this blog post...</p>
                  <h5>Read More</h5>
                  <div class="space-tiny hide-on-mobile"></div>
                </div>
                <div class="featured-image-wrapper"><img alt="" loading="eager" src="images/bloga.jpg"
                    sizes="(max-width: 479px) 240px, (max-width: 767px) 432px, (max-width: 991px) 560px, 39vw"
                    srcset="images/bloga-p-500.jpg 500w, images/bloga-p-800.jpg 800w, images/bloga-p-1080.jpg 1080w, images/bloga.jpg 1440w"
                    class="featured-image" />
                  <div class="gradient-overlay-blog"></div>
                </div>
              </a></div>
          </div>
        </div>
        <div class="space-semi"></div>
        <div class="slide-up-animation w-dyn-list">
          <div role="list" class="w-dyn-items">
            <div role="listitem" class="w-dyn-item"><a href="/blog/luxury-home-design-trends"
                class="blog-card-flex reverse w-inline-block">
                <div class="blog-card-text-wrapper">
                  <div class="flex-info">
                    <div class="badge-card-curve">
                      <p>Trends</p>
                    </div>
                    <div class="blog-flex">
                      <div class="avatar-flex">
                        <div class="blog-avatar"><img width="24" height="24" alt="" loading="eager"
                            src="images/woman-with-arms-crossed.jpg" sizes="28px"
                            srcset="images/woman-with-arms-crossed-p-500.jpg 500w, images/woman-with-arms-crossed-p-800.jpg 800w, images/woman-with-arms-crossed.jpg 1000w"
                            class="avatar-small" /></div>
                        <p class="color-primary">Scarlett Gray</p>
                      </div><img width="2" height="17.5" alt="" src="images/vectors-wrapper.svg" loading="lazy"
                        class="small-line-divider" />
                      <p>Nov 4, 2023</p>
                    </div>
                  </div>
                  <h3>Luxury Home Design Trends</h3>
                  <p>As we approach the new season, it&#x27;s a great time to start thinking about how you can update
                    your luxury home with the latest design...</p>
                  <div class="space-tiny hide-on-mobile"></div>
                  <h5>Read More</h5>
                </div>
                <div class="featured-image-wrapper"><img alt="" loading="eager" src="images/blogb.jpg"
                    sizes="(max-width: 479px) 240px, (max-width: 767px) 432px, (max-width: 991px) 560px, 39vw"
                    srcset="images/blogb-p-500.jpg 500w, images/blogb-p-800.jpg 800w, images/blogb-p-1080.jpg 1080w, images/blogb.jpg 1440w"
                    class="featured-image" />
                  <div class="gradient-overlay-blog"></div>
                </div>
              </a></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="w-layout-blockcontainer container-full padding-5 w-container">
        <div class="space-large"></div>
        <div class="cta-wrapper">
          <div class="w-layout-hflex cta-card flip-from-the-bottom">
            <h5>Get In Touch</h5>
            <h2>Your Satisfaction<br />‍<span class="h2-italic color-primary no-wrap">Is Paramount</span> </h2>
            <p class="max-width-420px">With an unwavering commitment to excellence, our team of experienced
              professionals is ready to provide personalized assistance and guidance.</p><a href="/contact-us"
              class="button margin-top-16px w-inline-block">
              <div>Get In Touch</div>
            </a>
          </div>
          <div class="w-layout-hflex cta-card cta-image slide-from-right-animation"></div>
        </div>
        <div class="space-large"></div>
      </div>
    </section>
    <section class="section max-width-1440px">
      <div class="container-full w-container">
        <div class="footer-wrapper">
          <div class="space-mid"></div>
          <div class="footer-text-wrapper">
            <div data-w-id="bc523ac8-e1fd-ae1a-5bc9-8dd4592ebf22" class="footer-flex-wrapper">
              <div class="footer-content-wrapper"><a href="/" aria-current="page"
                  class="footer-logo-link w-inline-block w--current">
                  <div class="logo-footer-wrapper"><img src="images/modernrealtylogo2.svg" loading="eager"
                      alt="modern realty logo" /></div>
                </a>
                <div class="space-text"></div>
                <p class="footer-paragraph">Our portfolio includes exquisite properties nestled in prime locations
                  renowned for their desirability.</p>
                <div class="footer-social-links-wrapper invert"><a href="https://www.instagram.com/" target="_blank"
                    class="footer-social-link w-inline-block"><img src="images/instagram-black.webp" loading="lazy"
                      alt="Instagram Icon Image Black" class="footer-social-link-image" /></a><a
                    href="https://facebook.com/" target="_blank" class="footer-social-link w-inline-block"><img
                      src="images/facebook-black.webp" loading="lazy" alt="facebook icon black"
                      class="footer-social-link-image" /></a><a href="https://www.twitter.com/" target="_blank"
                    class="footer-social-link w-inline-block"><img src="images/twitter.png" loading="lazy"
                      alt="twitter X icon black" class="footer-social-link-image" /></a><a
                    href="https://www.youtube.com/" target="_blank" class="footer-social-link w-inline-block"><img
                      src="images/youtube-black.webp" loading="lazy" alt="YouTube White Icon Image Black"
                      class="footer-social-link-image" /></a></div>
              </div>
              <div class="w-layout-grid footer-links-wrapper">
                <div class="footer-links-text">
                  <div class="footer-links-title">Explore</div><a href="/listings" class="footer-link">Listings</a><a
                    href="/agents" class="footer-link">Agents</a><a href="/about-us" class="footer-link">About</a><a
                    href="/contact-us" class="footer-link">Contact</a><a href="/blog" class="footer-link">Blog</a>
                </div>
                <div class="footer-links-text">
                  <div class="footer-links-title">Utilities</div><a href="/utilities/style-guide"
                    class="footer-link">Style Guide</a><a href="/utilities/instructions"
                    class="footer-link">Instructions</a><a href="/utilities/licenses" class="footer-link">Licenses</a><a
                    href="https://modernrealty.webflow.io/401" class="footer-link">Password</a><a
                    href="https://modernrealty.webflow.io/404" class="footer-link">404</a>
                </div>
                <div class="footer-links-text">
                  <div class="footer-links-title">Contact</div>
                  <p class="footer-text">XYZ Times Sq, New York, 10036, United States<br /></p>
                  <div class="flex-footer"><img src="images/call.webp" loading="lazy" alt="phone white icon"
                      class="footer-icon" />
                    <div class="footer-text">+123 456789</div>
                  </div>
                  <div class="flex-footer"><img src="images/email-black.webp" loading="lazy" alt="email black icon"
                      class="footer-icon invert" />
                    <div class="footer-text">hello@modernrealty.com</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="space"></div>
          </div>
          <div class="footer-bottom-wrapper">
            <div class="space"></div>
            <div data-w-id="52f85444-b384-6205-3e76-8a80ab304cac" class="footer-bottom-flex">
              <div class="footer-text-flex">
                <div class="footer-bottom-text">© Modern Realty. All Rights Reserved.</div>
              </div>
              <div class="footer-text-flex">
                <p class="footer-bottom-text">Built by </p><a href="https://yves-portfolio.webflow.io/" target="_blank"
                  class="footer-bottom-text-link">Yves Adrales</a>
              </div>
              <div class="footer-text-flex">
                <p class="footer-bottom-text">Powered by </p><a href="https://webflow.com/" target="_blank"
                  class="footer-bottom-text-link"> Webflow</a>
              </div>
              <div class="footer-text-flex"><a href="/terms-conditions" class="footer-bottom-text-link">Terms &amp;
                  Conditions</a></div>
              <div class="footer-text-flex"><a href="/privacy-policy" class="footer-bottom-text-link">Privacy Policy</a>
              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/webflow-script.js" type="text/javascript"></script>
</body>

</html>