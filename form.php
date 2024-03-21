<?php
session_start(); 
include 'db/dbCon.php';
if (!isset($_SESSION['visit_count_in_form'])) {
    $_SESSION['visit_count_in_form'] = 1;
} else {
    $_SESSION['visit_count_in_form']++;
}
$sqlIncrement = "INSERT INTO visit_count_subscription (id, count) VALUES (1, 1) ON DUPLICATE KEY UPDATE count = count + 1";
$conn->query($sqlIncrement);

$sqlSelect = "SELECT count FROM visit_count_subscription WHERE id = 1"; 
$result = $conn->query($sqlSelect);
$visitCountSubscription = 0;
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $visitCountSubscription = $row['count'];
}
$_SESSION['visit_count_in_form'] = $visitCountSubscription;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
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
    color: #43a8fb;;
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
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #DDE3EC;
    background: none;
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
  .formbold-form-confirm > div {
    display: flex;
    gap: 15px;
  }
.formbold-next-btn{
  display: flex;
    align-items: center;
    gap: 5px;
    font-size: 16px;
    border-radius: 5px;
    padding: 10px 25px;
    border: none;
    font-weight: 500;
    background-color: #019dff;
    color: white;
    cursor: pointer;
}
.formbold-back-btn {
    cursor: pointer;
    background: none !important;
    border: none;
    color: #0b7ffe !important;
    font-weight: 500;
    font-size: 16px;
    line-height: 24px;
    display: none;
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
.formbold-form-step-4,
.formbold-form-step-5{
    display: none;
  }
.formbold-form-step-1.active,
.formbold-form-step-2.active,
.formbold-form-step-3.active,
.formbold-form-step-4.active,
.formbold-form-step-5.active{
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
    background-color: #019dff;
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
   <?php include 'components/topbar.php'?>
      <?php include 'components/header.php'?>
      <?php include 'components/sidebar.php'?>
       <main class="page-wrapper">
        <div>
            <div class="rainbow-gradient-circle"></div>
            <div class="rainbow-gradient-circle theme-pink"></div>
        </div>
    <div class="formbold-main-wrapper bg-transparent rainbow-service-area rainbow-section-gap">
      <div class="formbold-form-wrapper variation-2 rainbow-service-area">

      <form action="./database_operations/subscription_form.php" method="POST">
          <div class="formbold-steps">
            <ul>
              <li class="formbold-step-menu1 active">
                <span>1</span>
                Business Information
              </li>
              <li class="formbold-step-menu2">
                <span>2</span>
                Business Size
              </li>
              <li class="formbold-step-menu3">
                <span>3</span>
                Solution for Business
              </li>
              <li class="formbold-step-menu4">
                <span>4</span>
                Business Name
              </li>
              <li class="formbold-step-menu5">
                <span>5</span>
                Personal Detail
              </li>
            </ul>
        </div>
       <div class="formbold-form-step-1 active">
        <label for="businessType">What Best Describes Your Business?</label>
         <div class="form-group">
           <select id="businessType" name="business_description" class="product_select w-100 formbold-form-input">
            <option data-display="1. Choose A Question">Select an option</option>
            <option value="Consulting Real Estate">Consulting Real Estate</option>
            <option value="Consulting">Consulting</option>
            <option value="Food & Beverages">Food & Beverages</option>
            <option value="Health">Health</option>
            <option value="Manufacturing / Wholesale">Manufacturing / Wholesale</option>
            <option value="Media / Entertainment">Media / Entertainment</option>
            <option value="Non Profit">Non Profit</option>
            <option value="Retail">Retail</option>
            <option value="Technology">Technology</option>
            <option value="Transportation / Logistics">Transportation / Logistics</option>
            <option value="Other Services">Other Services</option>
          </select>
        </div>
      </div>
      <div class="formbold-form-step-2">
        <div>
          <label for="businessSize">How Large is Your Business?</label>
          <div class="form-group">
            <select id="businessSize" name="business_size" class="product_select formbold-form-input">
              <option data-display="1. Choose A Question">Select an option</option>
              <option value="Startup (1 - 9 Employees)">Startup (1 - 9 Employees)</option>
              <option value="Small (10 - 50 Employees)">Small (10 - 50 Employees)</option>
              <option value="Mid-size (51 - 250 Employees)">Mid-size (51 - 250 Employees)</option>
              <option value="Middle Market (250 - 1000 Employees)">Middle Market (250 - 1000 Employees)</option>
              <option value="Enterprise (1000+ Employees)">Enterprise (1000+ Employees)</option>
            </select>
          </div>
        </div>
      </div>
      <div class="formbold-form-step-3">
        <label for="businessCategory">Select Your Business Category</label>
          <div class="form-group">
            <select id="businessCategory" name="business_category" class="product_select formbold-form-input">
              <option data-display="1. Choose A Question">Select an option</option>
              <option value="bookkeeping">Accounting & Bookkeeping Service</option>
              <option value="financialAnaylysis">Financial Planning & Analysis</option>
              <option value="BusinessSystem">Business System & Processes</option>
              <option value="audit&Assurance">Audit & Assurance</option>
              <option value="tax">Tax</option>
            </select>
          </div>
        </div>
       <div class="formbold-form-step-4">
        <label for="businessService">Business Name</label>
            <div class="form-group">
                <input
                type="text"
                name="business_name"
                placeholder="Business Name"
                id=" business_name"
                required
                class="formbold-form-input"
                />           
            </div>
          </div>
        <div class="formbold-form-step-5">
          <div class="form-group col-md-12">
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                <label for="businessService">First Name</label>
                    <input
                    type="text"
                    name="firstname"
                    placeholder="First Name"
                    id="firstname"
                    required
                    class="formbold-form-input"
                    />           
                </div>
                <div class="col-md-6">
                <label for="businessService">Last Name</label>
                    <input
                    type="text"
                    name="lastname"
                    placeholder="Last Name"
                    id="lastname"
                    required
                    class="formbold-form-input"
                    />           
                </div>
               </div>
               <div class="row mt-2">
                <div class="col-md-6">
                <label for="businessService">Email</label>
                    <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    id="email"
                    required
                    class="formbold-form-input"
                    />           
                </div>
                <div class="col-md-6 col-xl-6 col-lg-6">
                  <label for="businessService">Phone No</label><br>
                  <input id="phone" name="phone_no" type="tel" class="formbold-form-input" style="width: 100%;" name="phone" />
                </div>
               </div>
              </div>
             </div>
            </div>
          <div class="formbold-form-btn-wrapper">
            <button type="button" class="formbold-back-btn">Back</button>
            <button type="button" class="formbold-next-btn">Next Step</button>
            <button type="submit" class="formbold-btn" name="subscribe" id="subscribe" style="display: none;">Submit</button>
            <button type="button" class="formbold-back-btn">
            Back
          </div>
          <input type="hidden" name="trying_to_subscribe" value="1">
        </form>
      </div>
    </div>
    </main>
       <?php include 'components/footer.php'?>
       <?php include 'components/footerBottom.php'?>
    </main>
    <div class="rainbow-back-top">
        <i class="feather-arrow-up"></i>
    </div> 
    </body> 
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const stepMenus = [
            document.querySelector('.formbold-step-menu1'),
            document.querySelector('.formbold-step-menu2'),
            document.querySelector('.formbold-step-menu3'),
            document.querySelector('.formbold-step-menu4'),
            document.querySelector('.formbold-step-menu5')
        ];
        const formSteps = [
            document.querySelector('.formbold-form-step-1'),
            document.querySelector('.formbold-form-step-2'),
            document.querySelector('.formbold-form-step-3'),
            document.querySelector('.formbold-form-step-4'),
            document.querySelector('.formbold-form-step-5')
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
        }
        let currentStepIndex = 0;
        updateStep();
        formNextBtn.addEventListener("click", function(event) {
            if (validateStep(currentStepIndex)) {
                currentStepIndex++;
                updateStep();
            } else {
                alert('Please fill in all required fields before proceeding.');
            }
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
            else{
              alert("Please select only Bookkeeping option on step 3");
            }
            } else {
              alert("There is an error while submitting the form");
            }
          })
          .catch(error => {
            console.error('Error:', error);
          });
        });
        function validateStep(stepIndex) {
          if (stepIndex === 0) {
            const businessTypeValue = document.getElementById('businessType').value;
            return businessTypeValue !== 'Select an option';
          } 
          else if (stepIndex === 1) {
           const businessSizeValue = document.getElementById('businessSize').value;
           return businessSizeValue !== 'Select an option';
          } 
          else if (stepIndex === 2) {
           const businessCategoryValue = document.getElementById('businessCategory').value;
           return businessCategoryValue !== 'Select an option';
         }
        return true;
       }
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