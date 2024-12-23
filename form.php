<?php
session_start();
if (!isset($_SESSION['visit_count'])) {
  $_SESSION['visit_count'] = 1;
} else {
  $_SESSION['visit_count'] ++;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-style-mode" content="1">
  <title>Subscription - virSME</title>
  <link rel="shortcut icon" type="image/png" href="img/virstual-expert.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/css/intlTelInput.css'>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css'>
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animation.css">
  <link rel="stylesheet" href="assets/css/plugins/feature.css">
  <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-***********" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
  <link rel="stylesheet" href="assets/css/form.css">
  <style>
    .price-section {
      display: none;
    }
    /* .header-sticky {
      position: fixed;
      top: 100px;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: #F5F8FA !important;
      z-index: 100;
      padding: 15px;
    }
    .header-sticky-2 {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: aqua;
      z-index: 100;
      padding: 15px;
    } */
    .rainbow-gradient-circle {
      position: fixed;
      left: -250px;
      top: 250px;
      right: auto;
      bottom: auto;
      z-index: -1;
      width: 500px;
      height: 2000px;
      border-radius: 1000px;
      background-image: url('./img/Rectangle.png');
      opacity: 0.25;
      -webkit-filter: blur(50px);
      filter: blur(50px);
    }
    .rainbow-gradient-circle.theme-pink {
      left: auto;
      top: -250px;
      right: -250px;
      bottom: auto;
      background-image: url('./img/Rectangle.png');
    }
    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }
    .blinking-dots::after {
      content: "...";
      animation: blink 1s infinite;
    }

    @keyframes blink {
      0% {
        opacity: 1;
      }

      50% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }
    .blinking-dots::after {
      content: ".";
      animation: blink 1s infinite;
      font-size: 4em;
      font-weight: bold;
      line-height: 1;
    }
    .loader {
      display: none;
      justify-content: center;
      align-items: center;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: white;
      opacity: 0.9;
      z-index: 1000;
      font-size: 24px;
      font-weight: bold;
      color: black;
    }

    .loader p {
      margin: 0;
      color: #0b7ffe;
    }
  </style>

<body>
  <main class="page-wrapper">
    <div>
      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a href="#"><img src="./img/Virsme.png" class="responsive-logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
      </nav> -->
      <div class="rainbow-gradient-circle"></div>
      <div class="rainbow-gradient-circle theme-pink"></div>
    </div>
    <div style="justify-content: center; margin-top: 50px; align-items: center; display: flex;" class="header-sticky">
      <div style="width: 50%; text-align: center; position: relative;">
        <div style="position: relative; width: 80%; margin: 0 auto;">
          <progress id="progressBar" value="0" max="100" style="width: 100%; height: 20px;"></progress>
          <div id="progressPercentageContainer" style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); color: white; font-weight: bold;">
            <span id="progressPercentage" style="color: #ffff;margin-bottom:5px"></span>
          </div>
        </div>
        <div id="completionText"></div>
      </div>
    </div>
    <div class="rainbow-gradient-circle"></div>
    <div class="rainbow-gradient-circle theme-pink"></div>
    </div>
    <div class="formbold-main-wrapper bg-transparent rainbow-service-area rainbow-section-gap">
      <div class="formbold-form-wrapper variation-2 rainbow-service-area">
        <div class="formbold-steps">
          <ul>
            <li class="formbold-step-menu1 active">
            </li>
          </ul>
        </div>
        <form action="database_operations/subscription_form.php" method="POST" id="cfoForm">

          <div class="formbold-form-step-1 active">
            <div id="loader" class="loader">
              <p id="typing-text"></p>
            </div>

            <label id="firstType" for="firstType"></label>
            <label id="typing-parent" for="businessType"></label>
            <div class="form-group">
              <select id="businessType" name="business_description" class="product_select formbold-form-input" onchange="showSubCategories()" style="display: none;width:100%">
                <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                <option value="Retail">Retail</option>
                <option value="Tech Services">Tech Services</option>
                <option value="Health">Health</option>
                <option value="Food & Beverages">Food & Beverages</option>
                <option value="Consulting Real Estate">Consulting Real Estate</option>
                <option value="Advertisement Agency">Advertisement Agency</option>
                <option value="Education">Education</option>
                <option value="Manufacturing / Wholesale">Manufacturing / Wholesale</option>
                <option value="Media / Entertainment">Media / Entertainment</option>
                <option value="Transportation / Logistics">Transportation / Logistics</option>
                <option value="Event Management">Event Management</option>
                <option value="Travel & Tourism">Travel & Tourism</option>
                <option value="Freelancer">Freelancer</option>
                <option value="Event Decor">Event Decor</option>
                <option value="Interior Design">Interior Design</option>
                <option value="Non Profit">Non Profit</option>
                <option value="Beauty">Beauty</option>
                <option value="PR Agency">PR Agency</option>
                <option value="Online Stores">Online Stores</option>
                <option value="Coach (Life / Business / Sports)">Coach (Life / Business / Sports)</option>
                <option value="Artisanal and Handcraft">Artisanal and Handcraft</option>
                <option value="Photography">Photography</option>
                <option value="Legal Service">Legal Service</option>
                <option value="Home Decor">Home Decor</option>
                <option value="Factory Production Facility">Factory Production Facility</option>
                <option value="Gifting Service">Gifting Service</option>
                <option value="Pets">Pets</option>
                <option value="Agriculture">Agriculture</option>
                <option value="Rent a Car Service">Rent a Car Service</option>
                <option value="Performers">Performers</option>
                <option value="Other Services">Other (Please Specify)</option>
              </select>
              <div class="row mt-5">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none;" id="selectedBusinessType"></p>
                </div>
              </div>
              <input type="hidden" id="hiddenInputField" name="business_subCategory" value="">
              <div id="subCategoryOther Services" class="form-group" style="display: none;">
                <label id="businessCategories" for="subCategoryOther Services"></label>
                <input class="subCategoryField formbold-form-input" type="text" id="business_subCategory" placeholder="Specify Business Sub Sector" id="businessCategories" />
              </div>
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p id="autoTypingDisplay" class="auto-typing-display" style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none;"></p>
                </div>
              </div>
              <div id="otherSpecifyField" class="form-group">
                <label id="otherSpecifyLabel" for="otherSpecifyInput"></label>
                <div id="input-group8" class="input-group" style="display: none;">
                  <input type="text" id="otherSpecifyInput" name="other_specify" class="formbold-form-input" placeholder="Please specify">
                  <div class="input-group-append">
                    <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe;border-radius:50px" type="button" id="enterButton6">
                      <i class="fas fa-arrow-up"></i>
                    </button>
                  </div>
                </div>
              </div>
              <input type="hidden" id="hiddenOtherSpecifyInput" name="other_specify">
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedOtherSpecify"></p>
                </div>
              </div>
              <div class="form-group" id="startupContainer">
                <label id="business-size" for="businessType"></label>
                <select id="businessSize" name="business_size" class="product_select formbold-form-input" style="display:none">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="Startup (1 - 9 Employees)">Startup (1 - 9 Employees)</option>
                  <option value="Small (10 - 50 Employees)">Small (10 - 50 Employees)</option>
                  <option value="Mid-size (51 - 250 Employees)">Mid-size (51 - 250 Employees)</option>
                  <option value="Middle Market (250 - 1000 Employees)">Middle Market (250 - 1000 Employees)</option>
                  <option value="Enterprise (1000+ Employees)">Enterprise (1000+ Employees)</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedBusinessSize"></p>
                </div>
              </div>
              <div class="form-group" id="startupContainer">
                <label id="country" for="country"></label>
                <select id="company_operate_country" name="company_operate_country" class="product_select formbold-form-input" style="display:none">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="United States">United States</option>
                  <option value="United Kingdom">United Kingdom</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedCountry"></p>
                </div>
              </div>
              <div class="form-group" id="startupContainer">
                <label id="revenueSize" for="revenueSize"></label>
                <select id="company_revenue" name="company_revenue" class="product_select formbold-form-input" style="display:none">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="Startup">Startup</option>
                  <option value="1000+">1000+</option>
                  <option value="10,000+">10,000+</option>
                  <option value="1M+">1M+</option>
                </select>
              </div>
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedRevenue"></p>
                </div>
              </div>
              <div class="form-group">
                <label id="business-typing" for="currency"></label>
                <select id="currency" name="currency" class="product_select formbold-form-input" style="width: 100%;display:none">
                  <option value="">Select Currency</option>
                  <option value="Afghan Afghani (AFN)">Afghan Afghani (AFN)</option>
                  <option value="Albanian Lek (ALL)">Albanian Lek (ALL)</option>
                  <option value="Algerian Dinar (DZD)">Algerian Dinar (DZD)</option>
                  <option value="Euro (EUR)">Euro (EUR)</option>
                  <option value="Angolan Kwanza (AOA)">Angolan Kwanza (AOA)</option>
                  <option value="Argentine Peso (ARS)">Argentine Peso (ARS)</option>
                  <option value="Armenian Dram (AMD)">Armenian Dram (AMD)</option>
                  <option value="Aruban Florin (AWG)">Aruban Florin (AWG)</option>
                  <option value="Australian Dollar (AUD)">Australian Dollar (AUD)</option>
                  <option value="Azerbaijani Manat (AZN)">Azerbaijani Manat (AZN)</option>
                  <option value="Bahamian Dollar (BSD)">Bahamian Dollar (BSD)</option>
                  <option value="Bahraini Dinar (BHD)">Bahraini Dinar (BHD)</option>
                  <option value="Bangladeshi Taka (BDT)">Bangladeshi Taka (BDT)</option>
                  <option value="Barbadian Dollar (BBD)">Barbadian Dollar (BBD)</option>
                  <option value="Belarusian Ruble (BYN)">Belarusian Ruble (BYN)</option>
                  <option value="Belize Dollar (BZD)">Belize Dollar (BZD)</option>
                  <option value="Bermudian Dollar (BMD)">Bermudian Dollar (BMD)</option>
                  <option value="Bhutanese Ngultrum (BTN)">Bhutanese Ngultrum (BTN)</option>
                  <option value="Bolivian Boliviano (BOB)">Bolivian Boliviano (BOB)</option>
                  <option value="Bosnian Convertible Mark (BAM">Bosnian Convertible Mark (BAM)</option>
                  <option value="Botswanan Pula (BWP)">Botswanan Pula (BWP)</option>
                  <option value="Brazilian Real (BRL)">Brazilian Real (BRL)</option>
                  <option value="British Pound Sterling (GBP)">British Pound Sterling (GBP)</option>
                  <option value="Brunei Dollar (BND)">Brunei Dollar (BND)</option>
                  <option value="Bulgarian Lev (BGN)">Bulgarian Lev (BGN)</option>
                  <option value="Burundian Franc (BIF)">Burundian Franc (BIF)</option>
                  <option value="Cambodian Riel (KHR)">Cambodian Riel (KHR)</option>
                  <option value="Canadian Dollar (CAD)">Canadian Dollar (CAD)</option>
                  <option value="Cape Verdean Escudo (CVE)">Cape Verdean Escudo (CVE)</option>
                  <option value="Cayman Islands Dollar (KYD)">Cayman Islands Dollar (KYD)</option>
                  <option value="Central African CFA Franc (XAF)">Central African CFA Franc (XAF)</option>
                  <option value="Chilean Peso (CLP)">Chilean Peso (CLP)</option>
                  <option value="Chinese Yuan (CNY)">Chinese Yuan (CNY)</option>
                  <option value="Colombian Peso (COP)">Colombian Peso (COP)</option>
                  <option value="Comorian Franc (KMF)">Comorian Franc (KMF)</option>
                  <option value="Congolese Franc (CDF)">Congolese Franc (CDF)</option>
                  <option value="Costa Rican Colon (CRC)">Costa Rican Colon (CRC)</option>
                  <option value="Croatian Kuna (HRK)">Croatian Kuna (HRK)</option>
                  <option value="Cuban Peso (CUP)">Cuban Peso (CUP)</option>
                  <option value="Czech Koruna (CZK)">Czech Koruna (CZK)</option>
                  <option value="Danish Krone (DKK)">Danish Krone (DKK)</option>
                  <option value="Djiboutian Franc (DJF)">Djiboutian Franc (DJF)</option>
                  <option value="Dominican Peso (DOP)">Dominican Peso (DOP)</option>
                  <option value="Egyptian Pound (EGP)">Egyptian Pound (EGP)</option>
                  <option value="Eritrean Nakfa (ERN)">Eritrean Nakfa (ERN)</option>
                  <option value="Ethiopian Birr (ETB)">Ethiopian Birr (ETB)</option>
                  <option value="Fijian Dollar (FJD)">Fijian Dollar (FJD)</option>
                  <option value="Falkland Islands Pound (FKP)">Falkland Islands Pound (FKP)</option>
                  <option value="Gambian Dalasi (GMD)">Gambian Dalasi (GMD)</option>
                  <option value="Georgian Lari (GEL)">Georgian Lari (GEL)</option>
                  <option value="Ghanaian Cedi (GHS)">Ghanaian Cedi (GHS)</option>
                  <option value="Gibraltar Pound (GIP)">Gibraltar Pound (GIP)</option>
                  <option value="Guatemalan Quetzal (GTQ)">Guatemalan Quetzal (GTQ)</option>
                  <option value="Guinean Franc (GNF)">Guinean Franc (GNF)</option>
                  <option value="Guyanese Dollar (GYD)">Guyanese Dollar (GYD)</option>
                  <option value="Haitian Gourde (HTG)">Haitian Gourde (HTG)</option>
                  <option value="Honduran Lempira (HNL)">Honduran Lempira (HNL)</option>
                  <option value="Hong Kong Dollar (HKD)">Hong Kong Dollar (HKD)</option>
                  <option value="Hungarian Forint (HUF)">Hungarian Forint (HUF)</option>
                  <option value="Icelandic Krona (ISK)">Icelandic Krona (ISK)</option>
                  <option value="Indian Rupee (INR)">Indian Rupee (INR)</option>
                  <option value="Indonesian Rupiah (IDR)">Indonesian Rupiah (IDR)</option>
                  <option value="Iranian Rial (IRR)">Iranian Rial (IRR)</option>
                  <option value="Iraqi Dinar (IQD)">Iraqi Dinar (IQD)</option>
                  <option value="Israeli New Shekel (ILS)">Israeli New Shekel (ILS)</option>
                  <option value="Jamaican Dollar (JMD)">Jamaican Dollar (JMD)</option>
                  <option value="Japanese Yen (JPY)">Japanese Yen (JPY)</option>
                  <option value="Jordanian Dinar (JOD)">Jordanian Dinar (JOD)</option>
                  <option value="Kazakhstani Tenge (KZT)">Kazakhstani Tenge (KZT)</option>
                  <option value="Kenyan Shilling (KES)">Kenyan Shilling (KES)</option>
                  <option value="Kuwaiti Dinar (KWD)">Kuwaiti Dinar (KWD)</option>
                  <option value="Kyrgyzstani Som (KGS)">Kyrgyzstani Som (KGS)</option>
                  <option value="Lao Kip (LAK)">Lao Kip (LAK)</option>
                  <option value="Lebanese Pound (LBP)">Lebanese Pound (LBP)</option>
                  <option value="Lesotho Loti (LSL)">Lesotho Loti (LSL)</option>
                  <option value="Liberian Dollar (LRD)">Liberian Dollar (LRD)</option>
                  <option value="Libyan Dinar (LYD)">Libyan Dinar (LYD)</option>
                  <option value="Macanese Pataca (MOP)">Macanese Pataca (MOP)</option>
                  <option value="Macedonian Denar (MKD)">Macedonian Denar (MKD)</option>
                  <option value="Malagasy Ariary (MGA)">Malagasy Ariary (MGA)</option>
                  <option value="Malawian Kwacha (MWK)">Malawian Kwacha (MWK)</option>
                  <option value="Malaysian Ringgit (MYR)">Malaysian Ringgit (MYR)</option>
                  <option value="Maldivian Rufiyaa (MVR)">Maldivian Rufiyaa (MVR)</option>
                  <option value="Mauritanian Ouguiya (MRO)">Mauritanian Ouguiya (MRO)</option>
                  <option value="Mauritian Rupee (MUR)">Mauritian Rupee (MUR)</option>
                  <option value="Mexican Peso (MXN)">Mexican Peso (MXN)</option>
                  <option value="Moldovan Leu (MDL)">Moldovan Leu (MDL)</option>
                  <option value="Mongolian Togrog (MNT)">Mongolian Togrog (MNT)</option>
                  <option value="Moroccan Dirham (MAD)">Moroccan Dirham (MAD)</option>
                  <option value="Mozambican Metical (MZN)">Mozambican Metical (MZN)</option>
                  <option value="Myanmar Kyat (MMK)">Myanmar Kyat (MMK)</option>
                  <option value="Namibian Dollar (NAD)">Namibian Dollar (NAD)</option>
                  <option value="Nepalese Rupee (NPR)">Nepalese Rupee (NPR)</option>
                  <option value="Netherlands Antillean Guilder (ANG)">Netherlands Antillean Guilder (ANG)</option>
                  <option value="New Zealand Dollar (NZD)">New Zealand Dollar (NZD)</option>
                  <option value="Nicaraguan Cordoba (NIO)">Nicaraguan Cordoba (NIO)</option>
                  <option value="Nigerian Naira (NGN)">Nigerian Naira (NGN)</option>
                  <option value="North Korean Won (KPW)">North Korean Won (KPW)</option>
                  <option value="Norwegian Krone (NOK)">Norwegian Krone (NOK)</option>
                  <option value="Omani Rial (OMR)">Omani Rial (OMR)</option>
                  <option value="Pakistani Rupee (PKR)">Pakistani Rupee (PKR)</option>
                  <option value="Panamanian Balboa (PAB)">Panamanian Balboa (PAB)</option>
                  <option value="Papua New Guinean Kina (PGK)">Papua New Guinean Kina (PGK)</option>
                  <option value="Paraguayan Guarani (PYG)">Paraguayan Guarani (PYG)</option>
                  <option value="Peruvian Sol (PEN)">Peruvian Sol (PEN)</option>
                  <option value="Philippine Peso (PHP)">Philippine Peso (PHP)</option>
                  <option value="Polish Zloty (PLN)">Polish Zloty (PLN)</option>
                  <option value="Qatari Riyal (QAR)">Qatari Riyal (QAR)</option>
                  <option value="Romanian Leu (RON)">Romanian Leu (RON)</option>
                  <option value="Russian Ruble (RUB)">Russian Ruble (RUB)</option>
                  <option value="Rwandan Franc (RWF)">Rwandan Franc (RWF)</option>
                  <option value="Saint Helena Pound (SHP)">Saint Helena Pound (SHP)</option>
                  <option value="Samoan Tala (WST)">Samoan Tala (WST)</option>
                  <option value="Sao Tome and Principe Dobra (STD)">Sao Tome and Principe Dobra (STD)</option>
                  <option value="Saudi Riyal (SAR)">Saudi Riyal (SAR)</option>
                  <option value="Serbian Dinar (RSD)">Serbian Dinar (RSD)</option>
                  <option value="Seychellois Rupee (SCR)<">Seychellois Rupee (SCR)</option>
                  <option value="ierra Leonean Leone (SLL)">Sierra Leonean Leone (SLL)</option>
                  <option value="Singapore Dollar (SGD)">Singapore Dollar (SGD)</option>
                  <option value="Solomon Islands Dollar (SBD)">Solomon Islands Dollar (SBD)</option>
                  <option value="Somali Shilling (SOS)">Somali Shilling (SOS)</option>
                  <option value="South African Rand (ZAR)">South African Rand (ZAR)</option>
                  <option value="South Korean Won (KRW)">South Korean Won (KRW)</option>
                  <option value="South Sudanese Pound (SSP)">South Sudanese Pound (SSP)</option>
                  <option value="Sri Lankan Rupee (LKR)">Sri Lankan Rupee (LKR)</option>
                  <option value="Sudanese Pound (SDG)">Sudanese Pound (SDG)</option>
                  <option value="Surinamese Dollar (SRD)">Surinamese Dollar (SRD)</option>
                  <option value="Swazi Lilangeni (SZL)">Swazi Lilangeni (SZL)</option>
                  <option value="Swedish Krona (SEK)">Swedish Krona (SEK)</option>
                  <option value="Swiss Franc (CHF)">Swiss Franc (CHF)</option>
                  <option value="Syrian Pound (SYP)">Syrian Pound (SYP)</option>
                  <option value="New Taiwan Dollar (TWD)">New Taiwan Dollar (TWD)</option>
                  <option value="Tajikistani Somoni (TJS)">Tajikistani Somoni (TJS)</option>
                  <option value="Tanzanian Shilling (TZS)">Tanzanian Shilling (TZS)</option>
                  <option value="Thai Baht (THB)">Thai Baht (THB)</option>
                  <option value="Tongan Pa'anga (TOP)">Tongan Pa'anga (TOP)</option>
                  <option value="Trinidad and Tobago Dollar (TTD)">Trinidad and Tobago Dollar (TTD)</option>
                  <option value="Tunisian Dinar (TND)">Tunisian Dinar (TND)</option>
                  <option value="Turkish Lira (TRY)">Turkish Lira (TRY)</option>
                  <option value="Turkmenistani Manat (TMT)">Turkmenistani Manat (TMT)</option>
                  <option value="Ugandan Shilling (UGX)">Ugandan Shilling (UGX)</option>
                  <option value="Ukrainian Hryvnia (UAH)">Ukrainian Hryvnia (UAH)</option>
                  <option value="United Arab Emirates Dirham (AED)">United Arab Emirates Dirham (AED)</option>
                  <option value="United States Dollar (USD)">United States Dollar (USD)</option>
                  <option value="Uruguayan Peso (UYU)">Uruguayan Peso (UYU)</option>
                  <option value="Uzbekistani Som (UZS)">Uzbekistani Som (UZS)</option>
                  <option value="Vanuatu Vatu (VUV)">Vanuatu Vatu (VUV)</option>
                  <option value="Venezuelan Bolivar Soberano (VES)">Venezuelan Bolivar Soberano (VES)</option>
                  <option value="Vietnamese Dong (VND)">Vietnamese Dong (VND)</option>
                  <option value="West African CFA Franc (XOF)">West African CFA Franc (XOF)</option>
                  <option value="Yemeni Rial (YER)">Yemeni Rial (YER)</option>
                  <option value="Zambian Kwacha (ZMW)">Zambian Kwacha (ZMW)</option>
                  <option value="Zimbabwean Dollar (ZWL)">Zimbabwean Dollar (ZWL)</option>
                </select>
                <div class="row mt-3">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-6">
                    <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedCurrency"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label id="years" for="Years"></label>
                <select id="yearDropdown" name="yearDropdown" class="product_select formbold-form-input" style="display: none;">
                  <option data-display="1. Select Founded year">Select Founded Year</option>
                </select>
                <div class="row mt-3">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-6">
                    <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedFoundedYear"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label id="customerType" for="CustomerVerify"></label>
                <select id="customer_type" name="customer_type" class="product_select formbold-form-input" style="display: none;">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="Businesses">Businesses</option>
                  <option value="Individuals">Individuals</option>
                  <option value="Both">Both</option>
                  <option value="Other">Other</option>
                </select>
                <div class="row mt-3">
                  <div class="col-md-6">
                  </div>
                  <div class="col-md-6">
                    <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedCustomerDetails"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label id="customerSpecify" for="customerSpecify"></label>
                <div id="input-group7" class="input-group" style="display: none;">
                  <input type="text" name="specifyCustomer" id="specifyCustomer" placeholder="Please Specify Customer" class="formbold-form-input" />
                  <div class="input-group-append">
                    <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe;border-radius:50px" type="button" id="enterButton8">
                      <i class="fas fa-arrow-up"></i>
                    </button>
                  </div>
                </div>
              </div>
              <input type="hidden" id="hiddenCustomerSpecify" name="specifyCustomer">
              <div class="row mt-3">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="specifyCustomerDetail"></p>
                </div>
              </div>
              <div class="form-group">
                <label id="businessName" for="businessService"></label>
                <div id="input-group" class="input-group" style="display: none;">
                  <input type="text" name="business_name" placeholder="Business Name" id="business_name" class="formbold-form-input" />
                  <div class="input-group-append">
                    <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe;border-radius:50px" type="button" id="enterButton">
                      <i class="fas fa-arrow-up"></i>
                    </button>
                  </div>
                </div>
              </div>
              <input type="hidden" id="hiddenBusinessName" name="business_name">
              <div class="row mt-3">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedBusinessName"></p>
                </div>
              </div>
              <div class="form-group">
                <label id="firstNameLabel" for="businessService"></label>
                <div id="input-group2" class="input-group" style="display: none;">
                  <input type="text" name="firstnames" placeholder="Full name" id="firstname" class="formbold-form-input" />
                  <div class="input-group-append">
                    <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe;border-radius:50px" type="button" id="enterButton2">
                      <i class="fas fa-arrow-up"></i>
                    </button>
                  </div>
                </div>
              </div>
              <input type="hidden" id="hiddenFirstName" name="firstnames">
              <div class="row mt-5">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedFirstName"></p>
                </div>
              </div>
              <div class="form-group">
                <label id="emailLabel" for="email"></label>
                <div id="input-group3" class="input-group" style="display: none;">
                  <input type="email" name="email" placeholder="Email" id="email" class="formbold-form-input" />
                  <div class="input-group-append">
                    <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe;border-radius:50px" type="button" id="enterButton3">
                      <i class="fas fa-arrow-up"></i>
                    </button>
                  </div>
                </div>
                <div id="emailError" style="color: red; display: none;">Please enter a valid Email.</div>
              </div>
              <input type="hidden" id="hiddenEmail" name="email">
              <div class="row mt-5">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedEmail"></p>
                </div>
              </div>
              <div class="form-group">
                <label id="phoneLabel" for="phone"></label><br>
                <div id="input-group4" class="input-group" style="display: none; margin-top: -32px;">
                  <input id="phone" name="phone_no" type="tel" class="formbold-form-input" style="width: 100%;" />
                  <div class="input-group-append">
                    <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe; border-radius:50px" type="button" id="enterButton4">
                      <i class="fas fa-arrow-up"></i>
                    </button>
                  </div>
                </div>
                <div id="phoneError" style="color: red; display: none;">Please enter a valid phone number.</div>
              </div>
              <input type="hidden" id="hiddenPhone" name="phone_no">
              <div class="row mt-5">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedPhone"></p>
                </div>
              </div>
              <div class="form-group">
                <label id="serviceLooking" for="serviceLooking"></label>
                <select id="whichService" name="whichService" class="product_select formbold-form-input" style="display: none;">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="Accounting & Finance">Accounting & Finance</option>
                  <option value="Human Resource">Human Resource</option>
                  <option value="IT Support">IT Support</option>
                  <option value="Creative & Content Services">Creative & Content Services</option>
                  <option value="Software Development & Maintenance">Software Development & Maintenance</option>
                </select>
              </div>
              <div class="row mt-5">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedService"></p>
                  <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                      <input type="submit" id="virtualCfo2" style="display:none; margin-top:12px" value="Proceed to Customer Support" class=" ml-5 formbold-btn" name="Subscribe">
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label id="softwareQues" for="softwareQues"></label>
                <select id="whichSoftware" name="whichSoftware" class="product_select formbold-form-input" style="display: none;">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="yes">Yes</option>
                  <option value="no">No</option>
                </select>
              </div>
              <div class="row mt-5">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedSoftware"></p>
                </div>
              </div>
              <div class="form-group">
                <label id="softwareType" for="softwareType"></label>
                <select id="accounting_software_useds" name="accounting_software_used" class="product_select formbold-form-input" style="display: none;">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="QuickBooks">QuickBooks</option>
                  <option value="Xero">Xero</option>
                  <option value="FreshBooks">FreshBooks</option>
                  <option value="Zoho Books">Zoho Books</option>
                  <option value="Sage">Sage</option>
                  <option value="NetSuite">NetSuite</option>
                  <option value="Wave Accounting">Wave Accounting</option>
                  <option value="Excel">Excel</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="row mt-3">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedSoftwares"></p>
                </div>
              </div>
              <div class="form-group" style="margin-top: -30px; margin-bottom:40px">
                <label id="softwarePrefer" for="softwarePrefer"></label>
                <select id="softwarePreferred" name="softwarePreferred" class="product_select formbold-form-input" style="display: none;">
                  <option data-display="1. Choose A Question">Select an option</option>
                  <option value="QuickBooks">QuickBooks</option>
                  <option value="Xero">Xero</option>
                  <option value="FreshBooks">FreshBooks</option>
                  <option value="Zoho Books">Zoho Books</option>
                  <option value="Sage">Sage</option>
                  <option value="NetSuite">NetSuite</option>
                  <option value="Wave Accounting">Wave Accounting</option>
                  <option value="Excel">Excel</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="preSoftware"></p>
              </div>
            </div>
            <div class="form-group">
              <label id="spcifySoftwares" for="spcifySoftwares"></label>
              <div id="input-group11" class="input-group" style="display: none;">
                <input type="text" name="softwareSpecifies" id="softwareSpecifies" placeholder="Please specify Software" class="formbold-form-input">
                <div class="input-group-append">
                  <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe;border-radius:50px" type="button" id="enterButton10">
                    <i class="fas fa-arrow-up"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="specSoftware"></p>
              </div>
            </div>
            <div class="form-group">
              <label id="specifySoftware" for="specifySoftware"></label>
              <div id="input-group10" class="input-group" style="display: none;">
                <input type="text" name="softwareSpecify" id="softwareSpecify" placeholder="Please specify Software" class="formbold-form-input">
                <div class="input-group-append">
                  <button class="btn btn-primary enter-trigger" style="background-color:#0b7ffe;border-radius:50px" type="button" id="enterButton9">
                    <i class="fas fa-arrow-up"></i>
                  </button>
                </div>
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="specifySoftwares"></p>
              </div>
            </div>
            <div class="row mt-5 form-group" id="scroller">
              <label style="margin-top: 20px;" id="calculatorLabel" for="calculatorLabel"></label>
              <div class="col-sm-12 col-lg-12 col-md-12 col-xl-12" id="calculatorList" style="display: none;">
                <div class="service gallery-style">
                  <br>
                  <label>
                    <input type="checkbox" id="monthlyTransactionCheckbox" class="checkbox-custom" name="category" value="monthlyTransaction" onclick="showInputBox('monthlyTransaction')" autocomplete="off">
                    Monthly Reconciliation
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="monthlyInvoices" onclick="showInputBox('monthlyInvoices')" autocomplete="off">
                    Monthly Invoicing
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="payroll" onclick="showInputBox('payroll')" autocomplete="off">
                    Monthly Payroll Management
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="expense" onclick="showInputBox('expense')" autocomplete="off">
                    Monthly Billing
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="contractualPayment" onclick="showInputBox('contractualPayment')" autocomplete="off">
                    Monthly Contractor Payments
                  </label>
                  <br>
                  <div id="filingOptions" style="display:none;">
                    <div id="usaFilingOptions" style="display:none;">
                      <label><input type="checkbox" name="category" value="irsFiling" id="irsCheckbox" onclick="showInputBox('irsFiling')" min="0" autocomplete="off">
                        IRS Filing
                      </label>
                      <br>
                      <label>
                        <input type="checkbox" name="category" value="statutoryStateFiling" id="stateCheckbox" onclick="showInputBox('statutoryStateFiling')" min="0" autocomplete="off">
                        Statutory State Filing
                      </label>
                    </div>
                    <div id="ukFilingOptions" style="display:none;">
                      <label>
                        <input type="checkbox" name="category" value="hmrc" id="hmrcCheckbox" onclick="showInputBox('hmrc')" min="0" autocomplete="off">
                        HMRC Filing
                      </label>
                      <br>
                      <label>
                        <input type="checkbox" name="category" value="companyHouseFiling" id="companyCheckbox" onclick="showInputBox('companyHouseFiling')" min="0" autocomplete="off">
                        Companies House Filing
                      </label>
                      <br>
                      <label>
                        <input type="checkbox" name="category" value="vat" id="vatCheckbox" onclick="showInputBox('vat')" min="0" autocomplete="off">
                        Value added Tax (VAT) Filing
                      </label>
                    </div>
                  </div>
                  <label>
                    <input type="checkbox" name="category" value="cashflow" id="cashflowCheckbox" onclick="showInputBox('cashflow')" min="0" autocomplete="off">
                    Monthly cashflow
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="financialAnalysis" id="financialCheckbox" onclick="showInputBox('financialAnalysis')" min="0" autocomplete="off">
                    Monthly Financial Analysis
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="monthlyProfitLoss" id="profitCheckbox" onclick="showInputBox('monthlyProfitLoss')" min="0" autocomplete="off">
                    Monthly Profit and Loss Reporting
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="budget" id="budgetCheckbox" onclick="showInputBox('budget')" min="0" autocomplete="off">
                    Monthly Budgeting & Forcasting
                  </label>
                  <br>
                  <label>
                    <input type="checkbox" name="category" value="strategicAdvice" id="advisoryCheckbox" onclick="showInputBox('strategicAdvice')" autocomplete="off">
                    Strategic Advice
                  </label>
                  <br>
                </div>
              </div>
            </div>
          </div>
          <label id="transactionLabel" for="monthlyTransactionInput"></label>
          <div id="monthlyTransactionInput" class="input-group" style="display: none;">
            <input type="number" name="numberOfTransaction" class="formbold-form-input" id="monthlyTransactionInputField" placeholder="Number of Transactions" oninput="saveValues()" min="0">
            <div class="input-group-append">
              <button class="btn btn-primary" style="background-color:#0b7ffe;border-radius:50px" type="button" id="calculateButton1" onclick="calculatePrices()">
                <i class="fas fa-arrow-up"></i>
              </button>
            </div>
          </div>
          <br>
          <br>
          <label id="invoiceLabel" for="monthlyInvoicesInput"></label>
          <div id="monthlyInvoicesInput" class="input-group" style="display: none;">
            <input type="number" name="numberOfInvoiceInput" class="formbold-form-input" id="monthlyInvoicesInputField" placeholder="Number of Invoices" oninput="saveValues()" min="0">
            <div class="input-group-append">
              <button class="btn btn-primary" style="background-color:#0b7ffe;border-radius:50px" type="button" id="calculateButton2" onclick="calculatePrices()">
                <i class="fas fa-arrow-up"></i>
              </button>
            </div>
          </div>
          <br>
          <label id="payrollLabel" for="payrollInput"></label>
          <div id="payrollInput" class="input-group" style="display: none;">
            <input type="number" name="numberOfPayroll" class="formbold-form-input" id="payrollInputField" placeholder="Number of Payroll" oninput="saveValues()" min="0">
            <div class="input-group-append">
              <button class="btn btn-primary" style="background-color:#0b7ffe;border-radius:50px" type="button" id="calculateButton3" onclick="calculatePrices()">
                <i class="fas fa-arrow-up"></i>
              </button>
            </div>
          </div>
          <br>
          <label id="billingLabel" for="expenseInput"></label>
          <div id="expenseInput" class="input-group" style="display: none;">
            <input type="number" name="noOfExpense" class="formbold-form-input" id="expenseInputField" placeholder="Number of Billings" oninput="saveValues()" min="0">
            <div class="input-group-append">
              <button class="btn btn-primary" style="background-color:#0b7ffe;border-radius:50px" type="button" id="calculateButton4" onclick="calculatePrices()">
                <i class="fas fa-arrow-up"></i>
              </button>
            </div>
          </div>
          <br>
          <label id="paymentLabel" for="contractualPaymentInput"></label>
          <div id="contractualPaymentInput" class="input-group" style="display: none;">
            <input type="number" name="numberOfContractualPayment" class="formbold-form-input" id="contractualPaymentInputField" placeholder="Number of Contractual Payments" oninput="saveValues()" min="0">
            <div class="input-group-append">
              <button class="btn btn-primary" style="background-color:#0b7ffe;border-radius:50px" type="button" id="calculateButton5" onclick="calculatePrices()">
                <i class="fas fa-arrow-up"></i>
              </button>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6"></div>
            <div id="quotationDetails" class="col-md-6" style="font-size:16px; background-color:#0b7ffe; padding:13px; border-radius:20px; color:white;">
              <div class="row price-section" id="monthlyTransactionPriceSection">
                <p><b>Monthly Transaction Fee:</b> <span id="transactionPrice" name="transactionPrice">0</span>$</p>
                <p><b>Discount Monthly Transaction Fee:</b> <span id="discountTransactionPrice" name="discountTransactionPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="monthlyInvoicesPriceSection">
                <p><b>Monthly Invoice Fee:</b> <span id="invoicePrice" name="invoicePrice">0</span>$</p>
                <p><b>Discount Monthly Invoice Fee:</b> <span id="discountInvoicePrice" name="discountInvoicePrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="payrollPriceSection">
                <p><b>Monthly Payroll Fee:</b> <span id="payrollPrice" name="payrollPrice">0</span>$</p>
                <p><b>Discount Monthly Payroll Fee:</b> <span id="discountPayrollPrice" name="discountPayrollPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="expensePriceSection">
                <p><b>Monthly Expense Fee:</b> <span id="expensePrice" name="expensePrice">0</span>$</p>
                <p><b>Discounted Expense Fee:</b> <span id="discountExpencePrice" name="discountExpencePrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="contractualPaymentPriceSection">
                <p><b>Contractual Payment Fee:</b> <span id="contractualPaymentPrice" name="contractualPaymentPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="cashflowPriceSection">
                <p><b>Monthly Cashflow Fee:</b> <span id="cashflowPrice" name="cashflowPrice">0</span>$</p>
                <p><b>Discounted Cashflow Price:</b> <span id="discountCashflowPrice" name="discountCashflowPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="budgetPriceSection">
                <p><b>Monthly Budget Fee:</b> <span id="budgetPrice" name="budgetPrice">0</span>$</p>
                <p><b>Discounted Budget Fee:</b> <span id="discountBudgetPrice" name="discountBudgetPrice">0</span>$</p>
              </div>
              <div id="setUp" class="row" style="display: none;">
                <p><b>One Time Setup Fee:</b> <span id="setupPrice" name="setupPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="irsFilingPriceSection">
                <p><b>IRS Fee:</b> <span id="irsPrice" name="irsPrice">0</span>$</p>
              </div>
              <div class="row price-section" id="statutoryStateFilingPriceSection">
                <p><b>Statutory Filing Fee:</b> <span id="statePrice" name="statePrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="hmrcPriceSection">
                <p><b>Hmrc Filing Fee:</b> <span id="hmrcPrice" name="hmrcPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="companyHouseFilingPriceSection">
                <p><b>Company House Filing Fee:</b> <span id="companyPrice" name="companyPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="vatPriceSection">
                <p><b>VAT Fee:</b> <span id="vatPrice" name="vatPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="financialAnalysisPriceSection">
                <p><b>Monthly Financial Fee:</b> <span id="financialAnalysisPrice" name="financialAnalysisPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="monthlyProfitLossPriceSection">
                <p><b>Monthly Profit & Loss Fee:</b> <span id="profitPrice" name="profitPrice">0</span>$</p>
              </div>
              <div class="row price-section mt-5" id="strategicAdvicePriceSection">
                <p><b>Strategic Advisory Fee:</b> <span id="advisoryPrice" name="advisoryPrice">0</span>$</p>
              </div>
              <div class="row mt-5">
                <p><b>Total Fee:</b> <span id="totalPrice" name="totalPrice">0</span>$</p>
                <p><b>Total Fee After Discount:</b> <span id="discountedPrice" name="discountedPrice">0</span>$</p>
              </div>
              <br>
              <input type="hidden" id="hiddenTransactionPrice" name="transactionPrice">
              <input type="hidden" id="hiddenDiscountTransactionPrice" name="discountTransactionPrice">
              <input type="hidden" id="hiddenInvoicePrice" name="invoicePrice">
              <input type="hidden" id="hiddenDiscountInvoicePrice" name="discountInvoicePrice">
              <input type="hidden" id="hiddenExpensePrice" name="expensePrice">
              <input type="hidden" id="hiddenDiscountExpencePrice" name="discountExpencePrice">
              <input type="hidden" id="hiddenPayrollPrice" name="payrollPrice">
              <input type="hidden" id="hiddenDiscountPayrollPrice" name="discountPayrollPrice">
              <input type="hidden" id="hiddenCashflowPrice" name="cashflowPrice">
              <input type="hidden" id="hiddenDiscountCashflowPrice" name="discountCashflowPrice">
              <input type="hidden" id="hiddenBudgetPrice" name="budgetPrice">
              <input type="hidden" id="hiddenDiscountBudgetPrice" name="discountBudgetPrice">
              <input type="hidden" id="hiddenSetupPrice" name="setupPrice">
              <input type="hidden" id="hiddenIrsPrice" name="irsPrice">
              <input type="hidden" id="hiddenStatePrice" name="statePrice">
              <input type="hidden" id="hiddenHmrcPrice" name="hmrcPrice">
              <input type="hidden" id="hiddenCompanyPrice" name="companyPrice">
              <input type="hidden" id="hiddenContractualPaymentPrice" name="contractualPaymentPrice">
              <input type="hidden" id="hiddenVatPrice" name="vatPrice">
              <input type="hidden" id="hiddenFinancialAnalysisPrice" name="financialAnalysisPrice">
              <input type="hidden" id="hiddenProfitPrice" name="profitPrice">
              <input type="hidden" id="hiddenAdvisoryPrice" name="advisoryPrice">
              <input type="hidden" id="hiddenTotalPrice" name="totalPrice">
              <input type="hidden" id="hiddenDiscountedPrice" name="discountedPrice">
            </div>
          </div>
          <br>
          <div class="row mt-3">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
              <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedSatisfied"></p>
            </div>
          </div>
          <div class="form-group">
            <label id="cfoLabel" for="cfoLabel"></label>
            <select id="cfo" name="cfo" class="product_select formbold-form-input" style="display: none;">
              <option data-display="1. Choose A Question">Select an option</option>
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
              <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedCfo"></p>
            </div>
          </div>
          <div class="form-group">
            <label id="reasonLabel" for="reasonLabel" style="display: none;"></label>
            <select id="specifyReason" name="specifyReason" class="product_select formbold-form-input" style="display: none;" onchange="handleReasonChange()">
              <option data-display="1. Choose A Question">Select an option</option>
              <option value="High Price">High Price</option>
              <option value="Service Revision">Service Revision</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="row mt-3">
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
              <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedReason"></p>
            </div>
          </div>
          <div id="revisionOptions" style="display: none;">
          </div>
          <div class="form-group">
            <label id="OtherReasonLabel" for="OtherReasonLabel" style="display: none;"></label>
            <textarea id="otherReason" name="otherReason" class="formbold-form-textarea" rows="3" style="display: none;"></textarea>
          </div>
          <div class="form-group mt-5">
            <label id="highPriceLabel" for="highPriceLabel"></label>
          </div>
          <div class="formbold-form-btn-wrapper">
            <input type="submit" value="Submit" id="submit" style="display: none;" class="formbold-btn" name="Subscribe">
            <input type="submit" id="virtualCfo" value="Proceed to Virtual Cfo" style="display: none;" class="formbold-btn" name="Subscribe">
          </div>
        </form>
      </div>
    </div>
  </main>
  <div class="rainbow-back-top">
    <i class="feather-arrow-up"></i>
  </div>
</body>
<script src="assets/js/vendor/modernizr.min.js"></script>
<script src="assets/js/vendor/jquery.min.js"></script>
<script src="assets/js/vendor/bootstrap.min.js"></script>
<script src="assets/js/vendor/popper.min.js"></script>
<script src="assets/js/vendor/waypoint.min.js"></script>
<script src="assets/js/vendor/wow.min.js"></script>
<script src="assets/js/vendor/counterup.min.js"></script>
<script src="assets/js/vendor/feather.min.js"></script>
<script src="assets/js/vendor/sal.min.js"></script>
<script src="assets/js/vendor/masonry.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/imageloaded.js"></script>
<script src="form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src="assets/js/vendor/magnify.min.js"></script>
<script src="assets/js/vendor/lightbox.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/easypie.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="assets/js/vendor/text-type.js"></script>
<script src="assets/js/vendor/jquery.style.swicher.js"></script>
<script src="assets/js/vendor/js.cookie.js"></script>
<script src="assets/js/vendor/jquery-one-page-nav.js"></script>

</html>