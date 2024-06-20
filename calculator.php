<?php
session_start();
include 'db/dbCon.php';

if (!isset($_SESSION['visit_count_in_calculator'])) {
  $_SESSION['visit_count_in_calculator'] = 1;
} else {
  $_SESSION['visit_count_in_calculator']++;
}
$sqlIncrement = "INSERT INTO visit_count (id, count) VALUES (1, 1) ON DUPLICATE KEY UPDATE count = count + 1";
$conn->query($sqlIncrement);
$sqlSelect = "SELECT count FROM visit_count WHERE id = 1";
$result = $conn->query($sqlSelect);
$visitCount = 0;
if ($result && $result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $visitCount = $row['count'];
}
$_SESSION['filled_subscription_form'] = true;
$_SESSION['visit_count_in_calculator'] = $visitCount;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-style-mode" content="1">
  <title>Bookkeeping Calculator - Mavens Advisor</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/MA Logo circle.png">
  <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/plugins/animation.css">
  <link rel="stylesheet" href="assets/css/plugins/feature.css">
  <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
  <link rel="stylesheet" href="assets/css/plugins/slick.css">
  <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="./admin/chat.js"></script>
  <style>
    * {
      font-family: "inter", sans-serif;
    }

    .nav-link {
      font-weight: bold;
      margin: 8px;
    }

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
      -webkit-filter: blur(100px);
      filter: blur(100px);
    }

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

    @media only screen and (max-width: 767px) {
      .mob-div {
        margin-top: 13px;
      }

      .mob-row>* {
        width: inherit;
      }
    }
  </style>
</head>

<body>
  <main class="page-wrapper">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="img/Just-Another-Logo (2).png" height="38px"></a>
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
    </nav>
    <div class="rainbow-gradient-circle"></div>
    <div class="rainbow-gradient-circle theme-pink"></div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
      <div class="row m-2">
        <div class="col-sm-5 col-lg-5 col-md-5 col-xl-5" style="background-color: #f5f8fa;border-radius:50px">
          <div class="service gallery-style" style="padding: 50px;">
            <h5 class="card-title"><b>Bookkeeping Calculator</b></h5>
            <form method="POST" action="./calculator_operations.php" id="login calculatorForm">
              <br>
              <label>
                <input type="checkbox" class="checkbox-custom" name="category" value="monthlyTransaction" onclick="showInputBox('monthlyTransaction')" autocomplete="off">
                Number of Monthly Transactions
              </label>
              <br>
              <div id="monthlyTransactionInput" style="display:none;">
                <input type="number" class="form-control" id="monthlyTransactionInputField" placeholder="Number of Transactions" oninput="calculatePrices()" min="0">
                <br>
                <p id="monthlyTransactionDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on the number of monthly transactions.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="monthlyInvoices" onclick="showInputBox('monthlyInvoices')" autocomplete="off">
                Number of Monthly Invoices
              </label>
              <br>
              <div id="monthlyInvoicesInput" style="display: none;">
                <input type="number" class="form-control" id="monthlyInvoicesInputField" placeholder="Number of Invoices" oninput="calculatePrices()" min="0">
                <br>
                <p id="monthlyInvoicesDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on the number of monthly invoices.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="payroll" onclick="showInputBox('payroll')" autocomplete="off">
                Number of Monthly Payrolls
              </label>
              <br>
              <div id="payrollInput" style="display: none;">
                <input type="number" class="form-control" id="payrollInputField" placeholder="Number of Payrolls" oninput="calculatePrices()" min="0">
                <br>
                <p id="payrollDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on the number of payrolls processed.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="contractualPayment" onclick="showInputBox('contractualPayment')" autocomplete="off">
                Number of Contractual Payment
              </label>
              <div id="contractualPaymentInput" style="display: none;">
                <input type="number" class="form-control" id="contractualInputField" placeholder="Number of Contractual Payment" oninput="calculatePrices()" min="0">
                <br>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="cashflow" id="cashflowCheckbox" onclick="showInputBox('cashflow')" min="0" autocomplete="off">
                Monthly cashflow
              </label>
              <br>
              <div id="cashflowInput" style="display: none;">
                <p id="cashflowDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on various factors, including transactions, invoices, payroll, and expenses.
                </p>
              </div>
              <br>
              <label><input type="checkbox" name="category" value="irsFiling" id="irsCheckbox" onclick="showInputBox('irsFiling')" min="0" autocomplete="off">
                IRS FIling
              </label>
              <br>
              <label>
                <input type="checkbox" name="category" value="budget" id="budgetCheckbox" onclick="showInputBox('budget')" min="0" autocomplete="off">
                Monthly Budgeting
              </label>
              <br>
              <label>
                <input type="checkbox" name="category" value="statutoryStateFiling" id="stateCheckbox" onclick="showInputBox('statutoryStateFiling')" min="0" autocomplete="off">
                Statutory State Filing
              </label>
              <br>
              <label>
                <input type="checkbox" name="category" value="hmrc" id="hmrcCheckbox" onclick="showInputBox('hmrc')" min="0" autocomplete="off">
                HMRC
              </label>
              <br>
              <label>
                <input type="checkbox" name="category" value="companyHouseFiling" id="companyCheckbox" onclick="showInputBox('companyHouseFiling')" min="0" autocomplete="off">
                Company House Filing
              </label>
              <br>
              <label>
                <input type="checkbox" name="category" value="vat" id="vatCheckbox" onclick="showInputBox('vat')" min="0" autocomplete="off">
                VAT
              </label>
              <br>
              <div id="budgetInput" style="display: none;">
                <p id="budgetDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on various financial factors, including transactions, invoices, payroll, and expenses.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="setup" id="setupCheckbox" onclick="showInputBox('setup')" min="0" autocomplete="off">
                Quickbooks/Xero Setup
              </label>
              <br>
              <div id="setupInput" style="display: none;">
                <p id="setupDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service includes the initial setup cost for bookkeeping services.
                </p>
              </div>
          </div>
        </div>
        <div class="col-sm-2 col-lg-2 col-md-2 col-xl-2 mob-div">
        </div>
        <div class="col-sm-4 col-lg-4 col-md-4 col-xl-4 service" style="justify-content:center;align-items:center;background-color: #f5f8fa;border-radius:50px;padding:30px;">
          <div class="service gallery-style w-100 ">
            <h5 class="card-title"><b>Billing Breakup:</b></h5>
            <br>
            <div class="row">
              <div class="col-md-12">
                <p><b>Monthly Bank Reconcilation Fee</b></p>
              </div>
              <div class="row mob-row">
                <div class="col-md-6">
                  <p style="font-size:12px">Regular Price</p>
                  <s>
                    <p style="font-family:Arial, Helvetica, sans-serif;"><b><span id="transactionPrice" name="transactionPrice">0</span> $</b></p>
                  </s>
                </div>
                <div class="col-md-6">
                  <p style="font-size:12px">Discounted Price</p>
                  <p><b><span id="discountTransactionPrice" name="discountTransactionPrice">0</span> $</b></p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p><b>Monthly Invoicing Fee</b></p>
              </div>
              <div class="row mob-row">
                <div class="col-md-6">
                  <p style="font-size:12px">Regular Price</p>
                  <s>
                    <p><b><span id="invoicePrice" name="invoicePrice">0</span> $</b></p>
                  </s>
                </div>
                <div class="col-md-6">
                  <p style="font-size:12px">Discounted Price</p>
                  <p><b><span id="discountInvoicePrice" name="discountInvoicePrice">0</span> $</b></p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p><b>Monthly Payroll Fee</b></p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p style="font-size:12px">Regular Price</p>
                  <s>
                    <p><b><span id="payrollPrice" name="payrollPrice">0</span> $</b></p>
                  </s>
                </div>
                <div class="col-md-6">
                  <p style="font-size:12px">Discounted Price</p>
                  <p><b><span id="discountPayrollPrice" name="discountPayrollPrice">0</span> $</b></p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p><b>Monthly Cashflow Fee</b></p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p style="font-size:12px">Regular Price</p>
                  <s>
                    <p><b><span id="cashflowPrice" name="cashflowPrice">0</span> $</b></p>
                  </s>
                </div>
                <div class="col-md-6">
                  <p style="font-size:12px">Discounted Price</p>
                  <p><b><span id="discountCashflowPrice" name="discountCashflowPrice">0</span> $</b></p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p><b>Monthly Budgeting Fee</b></p>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <p style="font-size:12px">Regular Price</p>
                  <s>
                    <p><b><span id="budgetPrice" name="budgetPrice">0</span> $</b></p>
                  </s>
                </div>
                <div class="col-md-6">
                  <p style="font-size:12px">Discounted Price</p>
                  <p><b><span id="discountBudgetPrice" name="discountBudgetPrice">0</span> $</b></p>
                </div>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
                <p><b>One-time setup fee</b></p>
              </div>
            </div>
            <div class="row">
              <p><b><span id="setupPrice" name="setupPrice">0</span> $</b></p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p><b>IRS Fee</b></p>
            </div>
          </div>
          <div class="row">
            <p><b><span id="irsPrice" name="irsPrice">0</span> $</b></p>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p><b>Statutory Filing Fee</b></p>
            </div>
          </div>
          <div class="row">
            <p><b><span id="statePrice" name="statePrice">0</span> $</b></p>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p><b>HMRC Filing Fee</b></p>
            </div>
          </div>
          <div class="row">
            <p><b><span id="hmrcPrice" name="hmrcPrice">0</span> $</b></p>
          </div>
          <hr>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p><b>Company House Filing Fee</b></p>
            </div>
          </div>
          <div class="row">
            <p><b><span id="companyPrice" name="companyPrice">0</span> $</b></p>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p><b>Contractual Payment Fee</b></p>
            </div>
          </div>
          <div class="row">
            <p><b><span id="contractualPaymentPrice" name="contractualPaymentPrice">0</span> $</b></p>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p><b>VAT Fee</b></p>
            </div>
          </div>
          <div class="row">
            <p><b><span id="vatPrice" name="vatPrice">0</span> $</b></p>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-8">
              <p><b>Total Billing</b></p>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p style="font-size:12px">Regular Price</p>
                <s>
                  <p><b><span id="totalPrice" name="totalPrice">0</span> $</b></p>
                </s>
              </div>
              <div class="col-md-6">
                <p style="font-size:12px">Discounted Price</p>
                <p><b><span id="discountedPrice" name="discountedPrice">0</span> $</b></p>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <input class="btn btn-primary p-3" style="font-size:15px;border-radius:15px" onclick="redirectToChat()" value="Lock the Price Now!">
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </main>
  <script>
    if (window.location.pathname.includes("calculator.php")) {
      window.addEventListener('pageshow', function(event) {
        if (window.location.pathname.includes("calculator.php")) {
          document.getElementById('monthlyTransactionInputField').value = '';
          document.getElementById('monthlyInvoicesInputField').value = '';
          document.getElementById('payrollInputField').value = '';
        }
      });
    };

    $(document).ready(function() {
      $("#updateFormulaBtn").on("click", function() {
        updateFormulas();
      });
    });
    let categoryTotal = {
      monthlyTransaction: 0,
      discountMonthlyTransaction: 0,
      monthlyInvoices: 0,
      payroll: 0,
      expense: 0,
      cashflow: 0,
      budget: 0,
      setup: 0,
      irsFiling: 0,
      contractualPayment: 0,
      statutoryStateFiling: 0,
      hmrc: 0,
      companyHouseFiling: 0,
      vat: 0
    };

    function showInputBox(category) {
      const selectedCategory = category;
      const checkbox = document.querySelector(`[value=${selectedCategory}]`);

      if (checkbox && checkbox.checked) {
        document.getElementById(`${selectedCategory}Input`).style.display = "block";
        document.getElementById(`${selectedCategory}Description`).style.display = "block";
      } else {
        document.getElementById(`${selectedCategory}Input`).style.display = "none";
        document.getElementById(`${selectedCategory}Description`).style.display = "none";
      }
      categoryTotal[selectedCategory] = calculateCategoryTotal(selectedCategory);
      calculatePrices();
    }

    function calculateCategoryTotal(category) {
      const checkbox = document.querySelector(`[value=${category}]`);
      const transactionCheckbox = document.getElementById('monthlyTransactionCheckbox');
      const invoicesCheckbox = document.getElementById('monthlyInvoicesCheckbox');
      const payrollCheckbox = document.getElementById('payrollCheckbox');


      if ((category === 'cashflow' || category === 'budget') && checkbox.checked) {
        return (
          (categoryTotal.monthlyTransaction + categoryTotal.monthlyInvoices + categoryTotal.payroll + categoryTotal.expense) *
          5 / 60 * 15
        );
      } else if (category === 'setup' && checkbox.checked) {
        return 300;
      } else if (category === 'irsFiling' && checkbox.checked) {
        return 300;
      } else if (category === 'statutoryStateFiling' && checkbox.checked) {
        return 150;
      } else if (category === 'hmrc' && checkbox.checked) {
        return 150;
      } else if (category === "companyHouseFiling" && checkbox.checked) {
        return 150;
      } else if (category === "vat" && checkbox.checked) {
        return 150;
      } else if (category === 'monthlyTransaction' && transactionCheckbox.checked) {
        return (categoryTotal.monthlyTransaction * 5 / 60 * 15);

      } else if (category === 'monthlyInvoices' && invoicesCheckbox.checked) {
        return (categoryTotal.monthlyInvoices * 15 / 60 * 15);
      } else if (category === 'payroll' && payrollCheckbox.checked) {
        return (categoryTotal.payroll * 15 / 60 * 15);
      } else if (category === "contractualPayment" && contractualPaymentCheckbox.checked) {
        return ((categoryTotal.contractualPayment * 15) / 60) * 15;
      } else {
        return 0;
      }
    }
    document.getElementById("calculatorForm").addEventListener("submit", function(event) {
      event.preventDefault();
      updateFormulas();
      saveCalculatorData();
    });
    document.getElementById("getDiscountBtn").addEventListener("click", redirectToChat);

    function calculatePrices() {
      categoryTotal.monthlyTransaction = parseFloat(document.getElementById("monthlyTransactionInputField").value) || 0;
      categoryTotal.monthlyInvoices = parseFloat(document.getElementById("monthlyInvoicesInputField").value) || 0;
      categoryTotal.payroll = parseFloat(document.getElementById("payrollInputField").value) || 0;
      categoryTotal.contractualPayment = parseFloat(document.getElementById("contractualInputField").value) || 0;

      const cashflowCheckbox = document.getElementById("cashflowCheckbox");
      const budgetCheckbox = document.getElementById("budgetCheckbox");
      const setupCheckbox = document.getElementById("setupCheckbox");
      const stateCheckbox = document.getElementById("stateCheckbox");
      const hmrcCheckbox = document.getElementById("hmrcCheckbox");
      const companyCheckbox = document.getElementById("companyCheckbox");
      const vatCheckbox = document.getElementById("vatCheckbox");

      categoryTotal.cashflow = cashflowCheckbox.checked ? calculateCategoryTotal("cashflow") : 0;
      categoryTotal.budget = budgetCheckbox.checked ? calculateCategoryTotal("budget") : 0;
      categoryTotal.setup = setupCheckbox.checked ? calculateCategoryTotal("setup") : 0;
      categoryTotal.irsFiling = irsCheckbox.checked ? calculateCategoryTotal("irsFiling") : 0;
      categoryTotal.statutoryStateFiling = stateCheckbox.checked ? calculateCategoryTotal("statutoryStateFiling") : 0;
      categoryTotal.hmrc = hmrcCheckbox.checked ? calculateCategoryTotal("hmrc") : 0;
      categoryTotal.companyHouseFiling = companyCheckbox.checked ? calculateCategoryTotal("companyHouseFiling") : 0;
      categoryTotal.vat = vatCheckbox ? calculateCategoryTotal("vat") : 0;

      const transactionPrice = (categoryTotal.monthlyTransaction * 5 / 60 * 15).toFixed(2);
      const invoicePrice = (categoryTotal.monthlyInvoices * 15 / 60 * 15).toFixed(2);
      const payrollPrice = (categoryTotal.payroll * 15 / 60 * 15).toFixed(2);
      const contractualPaymentPrice = (((categoryTotal.contractualPayment * 15) / 60) * 15).toFixed(2);
      const cashflowPrice = categoryTotal.cashflow.toFixed(2);
      const budgetPrice = categoryTotal.budget.toFixed(2);
      const statePrice = categoryTotal.statutoryStateFiling.toFixed(2);
      const irsPrice = categoryTotal.irsFiling.toFixed(2);
      const setupPrice = categoryTotal.setup.toFixed(2);
      const hmrcPrice = categoryTotal.hmrc.toFixed(2);
      const companyPrice = categoryTotal.companyHouseFiling.toFixed(2);
      const vatPrice = categoryTotal.vat.toFixed(2);

      const discountTransactionPrice = (categoryTotal.monthlyTransaction * 1 / 60 * 10).toFixed(2);
      const discountInvoicePrice = (categoryTotal.monthlyInvoices * 5 / 60 * 10).toFixed(2);
      const discountPayrollPrice = (categoryTotal.payroll * 5 / 60 * 10).toFixed(2);
      const discountCashflowPrice = cashflowCheckbox.checked ?
        ((categoryTotal.monthlyTransaction + categoryTotal.monthlyInvoices + categoryTotal.payroll + categoryTotal.expense) * 5 / 60 * 10).toFixed(2) : 0;
      const discountBudgetPrice = budgetCheckbox.checked ?
        ((categoryTotal.monthlyTransaction + categoryTotal.monthlyInvoices + categoryTotal.payroll + categoryTotal.expense) * 5 / 60 * 10).toFixed(2) : 0;

      const discountedPrice = (
        parseFloat(discountTransactionPrice) +
        parseFloat(discountInvoicePrice) +
        parseFloat(discountPayrollPrice) +
        parseFloat(discountCashflowPrice) +
        parseFloat(discountBudgetPrice) +
        parseFloat(contractualPaymentPrice) +
        parseFloat(setupPrice) +
        parseFloat(statePrice) +
        parseFloat(hmrcPrice) +
        parseFloat(companyPrice) +
        parseFloat(vatPrice)
      ).toFixed(2);


      const totalPrice = (
        parseFloat(transactionPrice) +
        parseFloat(invoicePrice) +
        parseFloat(payrollPrice) +
        parseFloat(cashflowPrice) +
        parseFloat(budgetPrice) +
        parseFloat(contractualPaymentPrice) +
        parseFloat(irsPrice) +
        parseFloat(setupPrice) +
        parseFloat(statePrice) +
        parseFloat(hmrcPrice) +
        parseFloat(companyPrice) +
        parseFloat(vatPrice)
      ).toFixed(2);


      document.getElementById("transactionPrice").innerText = transactionPrice;
      document.getElementById("discountTransactionPrice").innerText = discountTransactionPrice;
      document.getElementById("invoicePrice").innerText = invoicePrice;
      document.getElementById("discountInvoicePrice").innerText = discountInvoicePrice;
      document.getElementById("payrollPrice").innerText = payrollPrice;
      document.getElementById("discountPayrollPrice").innerText = discountPayrollPrice;

      document.getElementById("cashflowPrice").innerText = cashflowPrice;
      document.getElementById("discountCashflowPrice").innerText = discountCashflowPrice;

      document.getElementById("budgetPrice").innerText = budgetPrice;
      document.getElementById("discountBudgetPrice").innerText = discountBudgetPrice;
      document.getElementById("contractualPaymentPrice").innerText = contractualPaymentPrice;
      document.getElementById("irsPrice").innerText = irsPrice;

      document.getElementById("setupPrice").innerText = setupPrice;
      document.getElementById("statePrice").innerText = statePrice;
      document.getElementById("hmrcPrice").innerText = hmrcPrice;
      document.getElementById("companyPrice").innerText = companyPrice;
      document.getElementById("vatPrice").innerText = vatPrice;
      document.getElementById("totalPrice").innerText = totalPrice;
      document.getElementById("discountedPrice").innerText = discountedPrice;
    }

    function redirectToChat() {
      var discountTransactionPrice = parseFloat(document.getElementById("discountTransactionPrice").innerText);
      var discountInvoicePrice = parseFloat(document.getElementById("discountInvoicePrice").innerText);
      var discountPayrollPrice = parseFloat(document.getElementById("discountPayrollPrice").innerText);
      var discountCashflowPrice = parseFloat(document.getElementById("discountCashflowPrice").innerText);
      var discountBudgetPrice = parseFloat(document.getElementById("discountBudgetPrice").innerText);
      var setupPrice = parseFloat(document.getElementById("setupPrice").innerText);
      var discountedPrice = parseFloat(document.getElementById("discountedPrice").innerText);

      var prices = '';

      if (discountTransactionPrice > 0) {
        prices += `Transaction Price: $${discountTransactionPrice.toFixed(2)},\n`;
      }
      if (discountInvoicePrice > 0) {
        prices += `Invoice Price: $${discountInvoicePrice.toFixed(2)},\n`;
      }
      if (discountPayrollPrice > 0) {
        prices += `Payroll Price: $${discountPayrollPrice.toFixed(2)},\n`;
      }
      if (discountCashflowPrice > 0) {
        prices += `Cashflow Price: $${discountCashflowPrice.toFixed(2)},\n`;
      }
      if (discountBudgetPrice > 0) {
        prices += `Budget Price: $${discountBudgetPrice.toFixed(2)},\n`;
      }
      if (setupPrice > 0) {
        prices += `Setup Price: $${setupPrice.toFixed(2)},\n`;
      }
      if (discountedPrice > 0) {
        prices += `Total Price: $${discountedPrice.toFixed(2)},\n`;
      }
      prices = prices.replace(/,\n$/, '');

      localStorage.setItem('calculatorPrices', prices);
      window.location.href = 'chat.php';
      window.onload = function() {};
    }
  </script>
  <script defer src="assets/js/vendor/modernizr.min.js"></script>
  <script defer src="assets/js/vendor/jquery.min.js"></script>
  <script defer src="assets/js/vendor/bootstrap.min.js"></script>
  <script defer src="assets/js/vendor/popper.min.js"></script>
  <script defer src="assets/js/vendor/waypoint.min.js"></script>
  <script defer src="assets/js/vendor/wow.min.js"></script>
  <script defer src="assets/js/vendor/counterup.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script defer src="assets/js/vendor/feather.min.js"></script>
  <script defer src="assets/js/vendor/sal.min.js"></script>
  <script defer src="assets/js/vendor/masonry.js"></script>
  <script defer src="assets/js/vendor/imageloaded.js"></script>
  <script defer src="assets/js/vendor/magnify.min.js"></script>
  <script defer src="assets/js/vendor/lightbox.js"></script>
  <script defer src="assets/js/vendor/slick.min.js"></script>
  <script defer src="assets/js/vendor/easypie.js"></script>
  <script defer src="assets/js/vendor/text-type.js"></script>
  <script defer src="assets/js/vendor/jquery.style.swicher.js"></script>
  <script defer src="assets/js/vendor/js.cookie.js"></script>
  <script defer src="assets/js/vendor/jquery-one-page-nav.js"></script>
  <script defer src="assets/js/main.js"></script>
</body>

</html>