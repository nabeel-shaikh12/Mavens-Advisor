<?php
session_start();
if (!isset($_SESSION['visit_count'])) {
  $_SESSION['visit_count'] = 1;
} else {
  $_SESSION['visit_count']++;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-style-mode" content="1">
  <title>Form || Finance</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/MA Logo circle.png">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Inter", sans-serif;
    }

    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }

    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 1118px;
      width: 100%;
    }

    .formbold-steps {
      padding-bottom: 18px;
      margin-bottom: 35px;
      border-bottom: 1px solid #DDE3EC;
    }

    .formbold-steps ul {
      padding: 0;
      margin: 0;
      list-style: none;
      display: flex;
      gap: 40px;
    }

    .formbold-steps li {
      display: flex;
      align-items: center;
      gap: 14px;
      font-weight: 500;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }

    .formbold-steps li span {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #DDE3EC;
      border-radius: 50%;
      width: 36px;
      height: 36px;
      font-weight: 500;
      font-size: 16px;
      line-height: 35px;
      color: #536387;
    }

    .formbold-steps li.active {
      color: #43a8fb;
    }

    .formbold-steps li.active span {
      background: #019dff;
      color: #FFFFFF;
    }

    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 22px;
    }

    .formbold-input-flex>div {
      width: 50%;
    }

    .formbold-form-input {
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #DDE3EC;
      background: #FFFFFF;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }

    .formbold-form-input:focus {
      border-color: #019dff;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-form-label {
      color: #07074D;
      font-weight: 500;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }

    .formbold-form-confirm {
      border-bottom: 1px solid #DDE3EC;
      padding-bottom: 35px;
    }

    .formbold-form-confirm p {
      font-size: 16px;
      line-height: 24px;
      color: #536387;
      margin-bottom: 22px;
      width: 75%;
    }

    .formbold-form-confirm>div {
      display: flex;
      gap: 15px;
    }

    .iti input,
    .iti input[type=text],
    .iti input[type=tel] {
      width: 100% !important;
      padding-right: 240px !important;
      margin-right: 0;
      display: none;
    }

    .formbold-next-btn {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 500;
      background-color: #0b7ffe;
      color: white;
      cursor: pointer;
    }

    .formbold-confirm-btn {
      display: flex;
      align-items: center;
      gap: 10px;
      background: #019dff;
      border: 0.5px solid #DDE3EC;
      border-radius: 5px;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
      cursor: pointer;
      padding: 10px 20px;
      transition: all .3s ease-in-out;
    }

    .formbold-confirm-btn {
      box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
    }

    .formbold-confirm-btn.active {
      background: #6A64F1;
      color: #FFFFFF;
    }

    .formbold-form-step-1,
    .formbold-form-step-2,
    .formbold-form-step-3,
    .formbold-form-step-4 {
      display: none;
    }

    .iti__flag-container {
      position: absolute;
      top: 0;
      bottom: 0;
      right: 0;
      padding: 1px;
      display: none;
    }

    .formbold-form-step-1.active,
    .formbold-form-step-2.active,
    .formbold-form-step-3.active,
    .formbold-form-step-4.active {
      display: block;
    }

    .formbold-form-btn-wrapper {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 25px;
      margin-top: 25px;
    }

    .formbold-back-btn {
      cursor: pointer;
      background: #FFFFFF;
      border: none;
      color: #07074D;
      font-weight: 500;
      font-size: 16px;
      line-height: 24px;
      display: none;
    }

    .formbold-back-btn.active {
      display: block;
    }

    .formbold-btn {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 16px;
      border-radius: 5px;
      padding: 10px 25px;
      border: none;
      font-weight: 500;
      background-color: #0b7ffe;
      color: white;
      cursor: pointer;
    }

    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    @media (max-width: 767px) {
      .formbold-steps ul {
        display: inline;
      }
    }
  </style>

<body>
  <?php include 'components/topbar.php' ?>
  <?php include 'components/header.php' ?>
  <?php include 'components/sidebar.php' ?>
  <main class="page-wrapper">
    <div>
      <div class="rainbow-gradient-circle"></div>
      <div class="rainbow-gradient-circle theme-pink"></div>
    </div>
    <div class="formbold-main-wrapper bg-transparent rainbow-service-area rainbow-section-gap">
      <div class="formbold-form-wrapper variation-2 rainbow-service-area">
        <form action="./database_operations/subscription_form.php " method="POST">
          <div class="formbold-steps">
            <ul>
              <li class="formbold-step-menu1 active">
                <!-- <span>1</span>
                                Business Information -->
              </li>
              <li class="formbold-step-menu2">
                <!-- <span>2</span>
                                Business Size -->
              </li>
              <li class="formbold-step-menu3">
                <!-- <span>3</span>
                                Solution for Business -->
              </li>
              <li class="formbold-step-menu4">
                <!-- <span>4</span>
                                Business Name -->
              </li>
              <!-- <li class="formbold-step-menu5">
                                <span>5</span>
                                Personal Detail
                            </li> -->
            </ul>
          </div>
          <div class="formbold-form-step-1 active">
            <label id="typing-parent" for="businessType"></label>
            <div class="form-group">
              <select id="businessType" onchange="showSubCategories()" name="business_description" class="product_select w-100 formbold-form-input" style="display: none;">
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
              <div id="subCategoryAgriculture" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryAgriculture"></label>
                <select id="agricultureSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Farming">Farming</option>
                  <option value="Gardening Supplies">Gardening Supplies</option>
                  <option value="Livestock & Poultry">Livestock & Poultry</option>
                  <option value="Other Agriculture Service">Other Agriculture Service</option>
                </select>
              </div>
              <div id="subCategoryArtisanal and Handcraft" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategorArtisanal and Handcraft"></label>
                <select id="artisnalSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Artist / Painter">Artist / Painter</option>
                  <option value="Candle Making">Candle Making</option>
                  <option value="Handmade Leather Products">Handmade Leather Products</option>
                  <option value="Handmade Soaps">Handmade Soaps</option>
                  <option value="Pottery">Pottery</option>
                  <option value="Other Artisanal and Handcraft">Other Artisanal and Handcraft</option>
                </select>
              </div>
              <div id="subCategoryBeauty" class="form-group" style="display: none;">
                <label id="typing-child" for="subCategoryBeauty"></label>
                <select class="beautySubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Beautician (At Home Services)">Beautician (At Home Services)</option>
                  <option value="Beauty Salon">Beauty Salon</option>
                  <option value="Cosmetologist / Aesthetician">Cosmetologist / Aesthetician</option>
                  <option value="Hairstylist (Specialize Service)">Hairstylist (Specialize Service)</option>
                  <option value="Henna Artist (Specialize Service)">Henna Artist (Specialize Service)</option>
                  <option value="Lash Technician (Specialize Service)">Lash Technician (Specialize Service)</option>
                  <option value="Makup Artist (Specialize Service)">Makup Artist (Specialize Service)</option>
                  <option value="ManuFacture Cosmetics / Skin Care">ManuFacture Cosmetics / Skin Care</option>
                  <option value="Nail Technician (Specialize Service)">Nail Technician (Specialize Service)</option>
                  <option value="Reselling Cosmetics">Reselling Cosmetics</option>
                </select>
              </div>
              <div id="subCategoryEducation" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryEducation"></label>
                <select id="educationSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Beautician (At Home Services)">Academic Consultant</option>
                  <option value="Edtech">Edtech</option>
                  <option value="School">School</option>
                  <option value="Tution Center / Academy">Tution Center / Academy</option>
                </select>
              </div>
              <div id="subCategoryFactory Production Facility" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryFactory Production Facility"></label>
                <select id="factorySubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Bags Manufacturer">Bags Manufacturer</option>
                  <option value="Furniture Manufacturer">Furniture Manufacturer</option>
                  <option value="Jewelry Designer / Manufacturer">School</option>
                  <option value="Shoe / Manufacturer">Shoe / Manufacturer</option>
                </select>
              </div>
              <div id="subCategoryFood & Beverages" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryFood & Beverages"></label>
                <select id="foodSubCategory" class="" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Baking Business / Dessert">Baking Business / Dessert</option>
                  <option value="Catering Business">Catering Business</option>
                  <option value="Online Food Business / Fresh or Frozen">Online Food Business / Fresh or Frozen</option>
                  <option value="Restaurent / Cafe">Restaurent / Cafe</option>
                  <option value="Other Food Products / Services">Other Food Products / Services</option>
                </select>
              </div>
              <div id="subCategoryFreelancer" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryFreelancer"></label>
                <select id="freelancerSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Consultant">Consultant</option>
                  <option value="Customer Service">Customer Service</option>
                  <option value="Graphic Designer (Freelance)">Graphic Designer (Freelance)</option>
                  <option value="Online Assistant">Online Assistant</option>
                  <option value="Software Developer">Software Developer</option>
                  <option value="Teacher (Freelance)">Teacher (Freelance)</option>
                  <option value="Translation">Translation</option>
                  <option value="UI / UX Designer">UI / UX Designer</option>
                  <option value="Video Editor">Video Editor</option>
                  <option value="Writer (Freelance)">Writer (Freelance)</option>
                  <option value="Other Freelance Service">Other Freelance Service</option>
                </select>
              </div>
              <div id="subCategoryGifting Service" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryGifting Service"></label>
                <select id="giftingServiceSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Gift Delivery">Gift Delivery</option>
                  <option value="Gift Packing">Gift Packing</option>
                </select>
              </div>
              <div id="subCategoryHealth" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryHealth"></label>
                <select id="healthSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Dentist">Dentist</option>
                  <option value="Dermotologist">Dermotologist</option>
                  <option value="Doctor (Private Practice)">Doctor (Private Practice)</option>
                  <option value="Gym Business">Gym Business</option>
                  <option value="Gym Trainer / Instructor">Gym Trainer / Instructor</option>
                  <option value="Mental Health Practioners">Mental Health Practioners</option>
                  <option value="Nutritionist">Nutritionist</option>
                  <option value="Pharmaceutical">Pharmaceutical</option>
                  <option value="Yoga Instructor">Yoga Instructor</option>
                </select>
              </div>
              <div id="subCategoryInfluencer" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryInfluencer"></label>
                <select id="influencerSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Youtuber">Youtuber</option>
                  <option value="Influencer - Others">Influencer - Others</option>
                </select>
              </div>
              <div id="subCategoryPerformers" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryPerformers"></label>
                <select id="performersSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Choreographer">Choreographer</option>
                  <option value="Comedian">Comedian</option>
                  <option value="Magician">Magician</option>
                  <option value="Musician">Musician</option>
                  <option value="Singer">Singer</option>
                  <option value="Performars (Other)">Performars (Others)</option>
                </select>
              </div>
              <div id="subCategoryPets" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryPets"></label>
                <select id="petsSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Choreographer">Pets Accessories</option>
                  <option value="Comedian">Comedian</option>
                  <option value="Pet Services">Pet Services</option>
                  <option value="Veterinary Services">Veterinary Services</option>
                </select>
              </div>
              <div id="subCategoryTech Services" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryTech Services"></label>
                <select id="techSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Hardware Development">Hardware Development</option>
                  <option value="IoT Services">IoT Services</option>
                  <option value="Software House">Software House</option>
                  <option value="Others">Others</option>
                </select>
              </div>
              <div id="subCategoryTravel & Tourism" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryTravel & Tourism"></label>
                <select id="tourismSubCategory" name="business_subCategory" class="product_select w-100 formbold-form-input autoType subCategoryField">
                  <option value="Select an option" data-display="1. Choose A Question">Select an option</option>
                  <option value="Guest House / Hotel">Guest House / Hotel</option>
                  <option value="Immigration Services">Immigration Services</option>
                  <option value="Tour Company / Operator / Guide">Tour Company / Operator / Guide</option>
                  <option value="Travel Agency">Travel Agency</option>
                </select>
              </div>
              <div id="subCategoryOther Services" class="form-group" style="display: none;">
                <label class="typing-child" for="subCategoryOther Services"></label>
                <input class="p-5 subCategoryField" type="text" id="business_subCategory" name="business_subCategory" placeholder="Specify Business Sub Sector" id="business_name" />
              </div>
              <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <div id="autoTypingDisplay" class="auto-typing-display" style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="formbold-form-step-2">
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
            <div class="form-group" id="serviceContainer">
              <label id="business-service" for="businessCategory"></label>
              <select id="businessCategory" name="business_category" class="product_select formbold-form-input" style="display: none;">
                <option data-display="1. Choose A Question">Select an option</option>
                <option value="Accounting & Bookkeeping Service">Accounting & Bookkeeping Service</option>
                <option value="Financial Planning & Analysis">Financial Planning & Analysis</option>
                <option value="Business System & Processes">Business System & Processes</option>
                <option value="Audit & Assurance">Audit & Assurance</option>
                <option value="Tax">Tax</option>
              </select>
              <div class="row mt-3">
                <div class="col-md-6">
                </div>
                <div class="col-md-6">
                  <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedBusinessCategory"></p>
                </div>
              </div>
            </div>
          </div>
          <div class="formbold-form-step-3">
            <div class="form-group" id="currencyContainer">
              <label id="business-typing" for="currency"></label>
              <select id="currency" name="currency" class="product_select formbold-form-input" style="display: none;">
                <option data-display="1. Select Currency">Select Currency</option>
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
                <option data-display="1. Select Founded yhear">Select Founded Year</option>
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
                <option value="Other Business">Other Business</option>
                <option value="Individuals">Individuals</option>
                <option value="Both">Both</option>
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
              <label id="businessName" for="businessService"></label>
              <input type="text" name="business_name" placeholder="Business Name" id="business_name" class="formbold-form-input" style="display: none;" />
            </div>
            <div class="row mt-3">
              <div class="col-md-6">
              </div>
              <div class="col-md-6">
                <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedBusinessName"></p>
              </div>
            </div>
          </div>
          <div class="formbold-form-step-4">
            <div class="form-group col-md-12">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label id="firstNameLabel" for="businessService"></label>
                    <input type="text" name="firstname" placeholder="First Name" id="firstname" class="formbold-form-input" style="display: none;" />
                  </div>
                  <div class="col-md-6">
                    <label id="lastNameLabel" for="lastname"></label>
                    <input type="text" name="lastname" placeholder="Last Name" id="lastname" class="formbold-form-input" style="display: none;" />
                  </div>
                  <div class="row mt-5">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                      <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedFirstName"></p>
                    </div>
                  </div>
                </div>
                <div class="row mt-5">
                  <div class="col-md-6">
                    <label id="emailLabel" for="email"></label>
                    <input type="email" name="email" placeholder="Email" id="email" class="formbold-form-input" style="display: none;" />
                    <div class="mt-5">
                      <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedEmail"></p>
                    </div>
                  </div>
                  <div class="col-md-6 col-xl-6 col-lg-6">
                    <label id="phoneLabel" for="phone"></label><br>
                    <input id="phone" name="phone_no" type="tel" class="formbold-form-input" style="width: 100%;" name="phone" />
                    <div class="mt-5">
                      <p style="font-size:16px;background-color:#0b7ffe;padding:13px;border-radius:20px;color:white;display:none" id="selectedPhone"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="formbold-form-btn-wrapper">
            <button type="button" class="formbold-back-btn">Back</button>
            <button type="button" class="formbold-next-btn">Next Step</button>
            <button type="submit" class="formbold-btn" name="Subscribe" style="display: none;">Submit</button>
            <button type="button" onclick="goBack()" class="formbold-back-btn">Back
          </div>
        </form>
      </div>
    </div>
  </main>
  <div style="margin-top:150px;">
    <?php include 'components/footer.php' ?>
    <?php include 'components/footerBottom.php' ?>
  </div>
  </main>
  <div class="rainbow-back-top">
    <i class="feather-arrow-up"></i>
  </div>
</body>
<script>
  const currentYear = new Date().getFullYear();
  const numYears = 100;
  const dropdown = document.getElementById("yearDropdown");

  for (let i = 0; i < numYears; i++) {
    const year = currentYear - i;
    const option = document.createElement("option");
    option.value = year;
    option.textContent = year;
    dropdown.appendChild(option);
  }

  function typeWriter(element, text, i, callback) {
    if (i < text.length) {
      element.innerHTML += text.charAt(i);
      i++;
      setTimeout(function() {
        typeWriter(element, text, i, callback);
      }, 100);
    } else if (typeof callback === "function") {
      setTimeout(callback, 700);
    }
  }

  document.getElementById("businessSize").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedBusinessSize");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessSize(typingLabel, businessTypeValue);
  });

  function BusinessSize(element, text) {
    element.style.display = "block";
    element.textContent = "";
    let index = 0;
    let speed = 50;

    function type() {
      if (index < text.length) {
        element.textContent += text.charAt(index);
        index++;
        element.timeout = setTimeout(type, speed);
      }
    }
    type();
  }

  document.getElementById("businessCategory").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedBusinessCategory");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessCategory(typingLabel, businessTypeValue);
  });

  function BusinessCategory(element, text) {
    element.style.display = "block";
    element.textContent = "";
    let index = 0;
    let speed = 50;

    function type() {
      if (index < text.length) {
        element.textContent += text.charAt(index);
        index++;
        element.timeout = setTimeout(type, speed);
      }
    }

    type();
  }

  document.getElementById("currency").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedCurrency");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    Currency(typingLabel, businessTypeValue);
  });

  function Currency(element, text) {
    element.style.display = "block";
    element.textContent = "";
    let index = 0;
    let speed = 50;

    function type() {
      if (index < text.length) {
        element.textContent += text.charAt(index);
        index++;
        element.timeout = setTimeout(type, speed);
      }
    }

    type();

    document.getElementById("yearDropdown").addEventListener("change", function() {
      var typingLabel = document.getElementById("selectedFoundedYear");
      var businessTypeValue = this.value;

      if (typingLabel.timeout) {
        clearTimeout(typingLabel.timeout);
      }
      Years(typingLabel, businessTypeValue);
    });

    function Years(element, text) {
      element.style.display = "block";
      element.textContent = "";
      let index = 0;
      let speed = 50;

      function type() {
        if (index < text.length) {
          element.textContent += text.charAt(index);
          index++;
          element.timeout = setTimeout(type, speed);
        }
      }

      type();
    }
  }

  document.getElementById("customer_type").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedCustomerDetails");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    Years(typingLabel, businessTypeValue);
  });

  function Years(element, text) {
    element.style.display = "block";
    element.textContent = "";
    let index = 0;
    let speed = 50;

    function type() {
      if (index < text.length) {
        element.textContent += text.charAt(index);
        index++;
        element.timeout = setTimeout(type, speed);
      }
    }
    type();
  }

  document.getElementById("business_name").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedBusinessName");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    Years(typingLabel, businessTypeValue);
  });

  function Years(element, text) {
    element.style.display = "block";
    element.textContent = "";
    let index = 0;
    let speed = 50;

    function type() {
      if (index < text.length) {
        element.textContent += text.charAt(index);
        index++;
        element.timeout = setTimeout(type, speed);
      }
    }

    type();
  }

  document.addEventListener("DOMContentLoaded", function() {
    const label = document.getElementById("typing-parent");
    const select = document.getElementById("businessType");
    const text = "Could you please describe your Business?";
    let index = 0;

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 50);
      } else {
        select.style.display = 'block';
      }
    }
    type();
  });

  document.getElementById("businessType").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedBusinessType");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

  document.getElementById("firstname").addEventListener("input", updateNames);
  document.getElementById("lastname").addEventListener("input", updateNames);

  function updateNames() {
    var firstName = document.getElementById("firstname").value;
    var lastName = document.getElementById("lastname").value;
    var selectedFirstNameDiv = document.getElementById("selectedFirstName");

    if (selectedFirstNameDiv.timeout) {
      clearTimeout(selectedFirstNameDiv.timeout);
    }

    BusinessType(selectedFirstNameDiv, " " + firstName + " " + lastName);
  }

  document.getElementById("email").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedEmail");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

  document.getElementById("phone").addEventListener("change", function() {
    var typingLabel = document.getElementById("selectedPhone");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

  function BusinessType(element, text) {
    element.style.display = "block";
    element.textContent = "";
    let index = 0;
    let speed = 50;

    function type() {
      if (index < text.length) {
        element.textContent += text.charAt(index);
        index++;
        element.timeout = setTimeout(type, speed);
      }
    }
    type();
  }

  function startTyping(label, text) {
    let index = 0;

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 50);
      }
    }
    type();
  }

  document.getElementById("startupContainer").addEventListener("change", showSubCategories);
  document.getElementById("serviceContainer").addEventListener("change", showSubCategories);
  document.getElementById("currency").addEventListener("change", showSubCategories);
  document.getElementById("yearDropdown").addEventListener("change", showSubCategories);
  document.getElementById("customer_type").addEventListener("change", showSubCategories);
  document.getElementById("businessName").addEventListener("change", showSubCategories);


  function showSubCategories() {
    const mainCategory = document.getElementById("businessType").value;

    const businessSize = document.getElementById("businessSize");
    const serviceContainer = document.getElementById("business-service");

    const currency = document.getElementById("currency").value;
    const foundedYearContainer = document.getElementById("years");

    const yearDropdown = document.getElementById("yearDropdown");
    const customerContainer = document.getElementById("customerType");

    const customer_type = document.getElementById("customer_type");
    const businessNameContainer = document.getElementById("businessName");

    const allSubCategoryDivs = document.querySelectorAll("[id^='subCategory']");
    allSubCategoryDivs.forEach(function(subCategoryDiv) {
      subCategoryDiv.style.display = "none";
    });

    const selectedSubCategoryDiv = document.getElementById("subCategory" + mainCategory);
    if (selectedSubCategoryDiv) {
      selectedSubCategoryDiv.style.display = "block";
      selectedSubCategoryDiv.style.animation = "slideInLeft 1.2s ease";
      const labels = selectedSubCategoryDiv.querySelectorAll(".typing-child");
      labels.forEach((label) => {
        startTyping(label, "Could you please describe your Sub Business Category?");
      });
    }


    if (currency !== "Select Currency") {
      foundedYearContainer.style.display = "block";
      foundedYearContainer.style.animation = "slideInLeft 1.5s ease";

      foundedYearContainer.addEventListener("animationend", function() {
        yearsDetails();
      }, {
        once: true
      });
    } else {
      foundedYearContainer.style.display = "none";
    }

    if (yearDropdown.value !== 'Select Founded Year') {
      customerContainer.style.display = "block";
      customerContainer.style.animation = "slideInLeft 1.5s ease";

      customerContainer.addEventListener("animationend", function() {
        customersDetail();
      }, {
        once: true
      });
    } else {
      customerContainer.style.display = "none";
    }
    if (customer_type.value !== 'Select an option') {
      businessNameContainer.style.display = "block";
      businessNameContainer.style.animation = "slideInLeft 1.5s ease";

      businessNameContainer.addEventListener("animationend", function() {
        BusinessName();
      }, {
        once: true
      });
    } else {
      businessNameContainer.style.display = "none";
    }
    if (businessSize.value !== 'Select an option') {
      serviceContainer.style.display = "block";
      serviceContainer.style.animation = "slideInLeft 1.5s ease";

      serviceContainer.addEventListener("animationend", function() {
        serviceWant();
      }, {
        once: true
      });
    } else {
      serviceContainer.style.display = "none";
    }
  }
  document.getElementById("firstname").addEventListener("input", function() {
    const lastNameDiv = document.getElementById("lastNameLabel");

    if (this.value.trim() !== "") {
      lastNameDiv.style.display = "block";
      lastNameDiv.style.animation = "slideInLeft 1.2s ease";

      lastNameDiv.addEventListener("animationend", function() {
        LastName();
      }, {
        once: true
      });
    } else {
      lastNameDiv.style.display = "none";
    }
  });

  document.getElementById("lastname").addEventListener("input", function() {
    const emailDiv = document.getElementById("emailLabel");


    if (this.value.trim() !== "") {
      emailDiv.style.display = "block";
      Email();
    } else {
      emailDiv.style.display = "none";
    }
  });

  document.getElementById("email").addEventListener("input", function() {
    const phoneDiv = document.getElementById("phoneLabel");

    if (this.value.trim() !== "") {
      phoneDiv.style.display = "block";
      Phone();
    } else {
      phoneDiv.style.display = "none";
    }
  });

  let typingStarted = {
    businessService: false,
    businessServices: false,
    years: false,
    lastName: false,
    email: false,
    phone: false,
    customerVerify: false,
    businessName: false,
    currencyTyping: false,
    firstName: false
  };

  function resetTypingFlags() {
    for (let key in typingStarted) {
      typingStarted[key] = false;
    }
  }

  function yearsDetails() {
    if (!typingStarted.years) {
      typingStarted.years = true;
      const label = document.getElementById("years");
      const text = "Please Select founded Year of Your Company";
      const select = document.getElementById("yearDropdown")
      let index = 0;

      label.textContent = "";

      function type() {
        if (index < text.length) {
          label.textContent += text.charAt(index);
          index++;
          setTimeout(type, 50);
        } else {
          select.style.display = "block";
        }
      }

      type();
    }
  }

  function LastName() {
    const label = document.getElementById("lastNameLabel");
    const select = document.getElementById("lastname");
    const text = "Write Your Last Name";
    let index = 0;

    label.textContent = "";

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 50);
      } else {
        select.style.display = "block";
      }
    }

    type();
  }

  function Email() {
    if (!typingStarted.email) {
      typingStarted.email = true;
      const label = document.getElementById("emailLabel");
      const select = document.getElementById("email");
      const text = "Write Your Email";
      let index = 0;

      label.textContent = "";

      function type() {
        if (index < text.length) {
          label.textContent += text.charAt(index);
          index++;
          setTimeout(type, 50);
        } else {
          select.style.display = "block";
        }
      }

      type();
    }
  }

  function Phone() {
    const label = document.getElementById("phoneLabel");
    const select = document.getElementById("phone");
    const text = "Please provide your Contact Number";
    let index = 0;

    label.textContent = "";

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 50);
      } else {
        select.style.display = "block";
      }
    }

    type();
  }

  function customersDetail() {
    const label = document.getElementById("customerType");
    const select = document.getElementById("customer_type");
    const text = "Could you please describe Customer type";
    let index = 0;

    label.textContent = "";

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 50);
      } else {
        select.style.display = "block";
      }
    }

    type();
  }


  function BusinessName() {
    const label = document.getElementById("businessName");
    const select = document.getElementById("business_name");
    const text = "Could you please provide your business Name";
    let index = 0;

    label.textContent = "";

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 50);
      } else {
        select.style.display = "block";
      }
    }

    type();
  }

  function BusinessService(element, text) {
    if (!typingStarted.businessService) {
      typingStarted.businessService = true;
      let index = 0;
      const select = document.getElementById("businessSize")


      function type() {
        if (index < text.length) {
          element.textContent += text.charAt(index);
          index++;
          setTimeout(type, 50);
        } else {
          select.style.display = 'block';
        }
      }

      type();
    }
  }

  function serviceWant() {
    const label = document.getElementById("business-service");
    const select = document.getElementById("businessCategory");
    const text = "Could you define the Service that you want";
    let index = 0;

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 50);
      } else {
        select.style.display = 'block';
      }
    }
    type();
  }


  function BusinessServices(element, text) {
    if (!typingStarted.businessServices) {
      typingStarted.businessServices = true;
      let index = 0;

      function type() {
        if (index < text.length) {
          element.textContent += text.charAt(index);
          index++;
          setTimeout(type, 50);
        }
      }

      type();
    }
  }

  function FirstName(element, text) {
    if (!typingStarted.firstName) {
      typingStarted.firstName = true;
      const select = document.getElementById("firstname");
      let index = 0;

      function type() {
        if (index < text.length) {
          element.textContent += text.charAt(index);
          index++;
          setTimeout(type, 50);
        } else {
          select.style.display = "block";
        }
      }

      type();
    }
  }

  function CurrencyTyping(element, text) {
    if (!typingStarted.currencyTyping) {
      typingStarted.currencyTyping = true;
      let index = 0;
      const select = document.getElementById("currency")

      function type() {
        if (index < text.length) {
          element.textContent += text.charAt(index);
          index++;
          setTimeout(type, 50);
        } else {
          select.style.display = "block";
        }
      }

      type();
    }
  }

  function goBack() {
    resetTypingFlags();
  }
  document.addEventListener("DOMContentLoaded", function() {
    function handleDropdownChange() {
      var dropdowns = document.querySelectorAll(".autoType");
      var displayElement = document.getElementById("autoTypingDisplay");

      dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener("change", function() {
          if (displayElement.timeout) {
            clearTimeout(displayElement.timeout);
          }

          displayElement.style.display = "block";
          displayElement.innerHTML = "";

          var selectedOption = dropdown.options[dropdown.selectedIndex].text;
          typeWriter(displayElement, selectedOption, 0);
        });
      });
    }
    handleDropdownChange();
  });

  document.addEventListener("DOMContentLoaded", function() {
    const stepMenus = [
      document.querySelector('.formbold-step-menu1'),
      document.querySelector('.formbold-step-menu2'),
      document.querySelector('.formbold-step-menu3'),
      document.querySelector('.formbold-step-menu4')
    ];
    const formSteps = [
      document.querySelector('.formbold-form-step-1'),
      document.querySelector('.formbold-form-step-2'),
      document.querySelector('.formbold-form-step-3'),
      document.querySelector('.formbold-form-step-4')
    ];
    const formSubmitBtn = document.querySelector('.formbold-btn');
    const formBackBtn = document.querySelector('.formbold-back-btn');
    const formNextBtn = document.querySelector('.formbold-next-btn');

    function updateStep() {
      stepMenus.forEach((stepMenu, index) => {
        stepMenu.classList.toggle('active', index === currentStepIndex);
      });
      formSteps.forEach((formStep, index) => {
        formStep.classList.toggle('active', index === currentStepIndex);
      });

      formBackBtn.style.display = currentStepIndex === 0 ? 'none' : 'inline-block';
      if (currentStepIndex === formSteps.length - 1) {
        formNextBtn.style.display = 'none';
        formSubmitBtn.style.display = 'inline-block';
      } else {
        formNextBtn.style.display = 'inline-block';
        formSubmitBtn.style.display = 'none';
      }
      if (currentStepIndex === 1) {
        const label = document.getElementById("business-size");
        const text = "Could you please describe your Business Size?";
        BusinessService(label, text);
      }
      if (currentStepIndex === 2) {
        const label = document.getElementById("business-typing");
        const text = "Please Provide your Currency?";
        CurrencyTyping(label, text);
      }

      if (currentStepIndex === 3) {
        const label = document.getElementById("firstNameLabel");
        const text = "Please Write Your First Name";
        FirstName(label, text);
      }
    }

    let currentStepIndex = 0;
    updateStep();

    formNextBtn.addEventListener("click", function(event) {
      currentStepIndex++;
      updateStep();
    });

    formBackBtn.addEventListener("click", function(event) {
      currentStepIndex--;
      updateStep();
    });

    formSubmitBtn.addEventListener("click", function(event) {
      event.preventDefault();
      const formData = new FormData(document.querySelector('form'));
      fetch('./database_operations/subscription_form.php', {
          method: 'POST',
          body: formData
        })
        .then(response => {
          if (response.ok) {
            console.log('Form submitted successfully');
            const businessCategoryValue = document.getElementById('businessCategory').value.trim().toLowerCase();
            if (businessCategoryValue === 'bookkeeping') {
              window.location.href = 'calculator.php';
            }
          } else {
            console.error('Error submitting form');
          }
        })
        .catch(error => {
          console.error('Error:', error);
        });
    });
  });
</script>
<script>
  const phoneInputField = document.querySelector("#phone");
  const phoneInput = window.intlTelInput(phoneInputField, {
    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  });
</script>
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
<script src="assets/js/vendor/imageloaded.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/12.1.2/js/intlTelInput.js'></script>
<script src="assets/js/vendor/magnify.min.js"></script>
<script src="assets/js/vendor/lightbox.js"></script>
<script src="assets/js/vendor/slick.min.js"></script>
<script src="assets/js/vendor/easypie.js"></script>
<script src="assets/js/vendor/text-type.js"></script>
<script src="assets/js/vendor/jquery.style.swicher.js"></script>
<script src="assets/js/vendor/js.cookie.js"></script>
<script src="assets/js/vendor/jquery-one-page-nav.js"></script>
<script src="assets/js/main.js"></script>

</html>