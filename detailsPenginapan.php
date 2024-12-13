<?php
require_once __DIR__ . '/functions/database_functions.php';
$rooms = getRoomDetails();
$events = getEventDetails();
$tourism = getTourismDetails();
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
  <link rel="stylesheet" href="css\detailsPenginapan.css">
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
    <div class="listings-container">
    <?php foreach ($rooms as $room): ?>
    <div role="listitem" class="listings-card">
        <a href="details.php?room_id=<?= isset($room['id']) ? urlencode($room['id']) : '' ?>" class="listings-card-link">
            <div class="listings-card-text-wrapper">
                <h4 class="listing-card-title"><?= htmlspecialchars($room['room_number']) ?></h4>
                <div class="listings-flex">
                    <div class="card-amenities-flex"></div>
                    <div class="card-amenities-flex">
                        <h2 class="listing-card-icon">shower</h2>
                        <h5 class="no-wrap">1 Bath</h5>
                    </div>
                </div>
                <h5 class="color-white"><b>Rp. <?= htmlspecialchars($room['price']) ?></b></h5>
            </div>
            <div class="listing-image-wrapper">
                <img class="listing-image" src="<?= htmlspecialchars($room['photo']) ?>" alt="Room Image" />
            </div>
        </a>
    </div>
<?php endforeach; ?>

    </div>
</body>

