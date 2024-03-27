<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-style-mode" content="1">
    <title>Calculator || Finance</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/MA Logo circle.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <!-- <link rel="stylesheet" href="assets/css/plugins/magnify.min.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/slick.css"> -->
    <!-- <link rel="stylesheet" href="assets/css/plugins/slick-theme.css"> -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
    <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 <main class="page-wrapper">
<?php include 'components/topbar.php'?>
 <?php include 'components/header.php'?>
 <div>
   <div class="rainbow-gradient-circle"></div>
   <div class="rainbow-gradient-circle theme-pink"></div>
 </div>
  <div class="container bg-trasparent rainbow-service-area rainbow-section-gap">
    <div class="row ">
      <div class="col-sm-6 col-lg-6 col-md-6 col-xl-6">
        <div class="service gallery-style">
          <h5 class="card-title"><b>Bookkeeping Calculator</b></h5>
            <form action="./database_operations/calculator_operations.php" method="POST" id="calculatorForm">
            <br>
            <label>
            <input type="checkbox" class="checkbox-custom" name="category" value="monthlyTransaction"
                  onclick="showInputBox('monthlyTransaction')">
               Number of Monthly Transactions
            </label>
              <br>
            <div id="monthlyTransactionInput" style="display: none;">
              <input type="number" class="form-control" id="monthlyTransactionInputField"
                placeholder="Number of Transactions" class="p-4" oninput="calculatePrices()" min="0">
                <br>
              <p id="monthlyTransactionDescription" style="display: none; color: #6c757d; font-size: 16px;">
                This service calculates the price based on the number of monthly transactions.
              </p>
            </div>
            <br>
            <label>
                <input type="checkbox" name="category" value="monthlyInvoices"
                  onclick="showInputBox('monthlyInvoices')">Number of Monthly Invoices
            </label>
              <br>
              <div id="monthlyInvoicesInput" style="display: none;">
                <input type="number" class="form-control" id="monthlyInvoicesInputField"
                  placeholder="Number of Invoices" oninput="calculatePrices()" min="0">
                  <br>
                <p id="monthlyInvoicesDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on the number of monthly invoices.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="payroll" onclick="showInputBox('payroll')">
                Number of Monthly Payrolls
              </label>
              <br>
              <div id="payrollInput" style="display: none;">
                <input type="number" class="form-control" id="payrollInputField" placeholder="Number of Payrolls"
                  oninput="calculatePrices()" min="0">
                  <br>
                <p id="payrollDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on the number of payrolls processed.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category"  value="cashflow" id="cashflowCheckbox"
                  onclick="showInputBox('cashflow')" min="0">
                Monthly cashflow
              </label>
              <br>
              <div id="cashflowInput" style="display: none;">
                <p id="cashflowDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on various factors, including transactions, invoices, payroll, and expenses.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="budget" id="budgetCheckbox"
                  onclick="showInputBox('budget')" min="0">
                Monthly Budgeting
              </label>
              <br>
              <div id="budgetInput" style="display: none;">
                <p id="budgetDescription" style="display: none; color: #6c757d; font-size: 16px;">
                  This service calculates the price based on various financial factors, including transactions, invoices, payroll, and expenses.
                </p>
              </div>
              <br>
              <label>
                <input type="checkbox" name="category" value="setup" id="setupCheckbox"
                  onclick="showInputBox('setup')" min="0">
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
          <div class="col-sm-6 col-lg-6 col-md-6 col-xl-6 service">
            <div class="service gallery-style w-75">
              <h5 class="card-title"><b>Billing Breakup:</b></h5>
              <br>
              <div class="row">
                <div class="col-md-8">
                  <p><b>Monthly Bank Reconcilation Fee</b></p>
                </div>
                <div class="col-md-4">
                  <p><b><span id="transactionPrice" name="transactionPrice">0</span> $</b></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-8">
                <p><b>Monthly Invoicing Fee</b></p>
              </div>
              <div class="col-md-4">
                <p><b><span id="invoicePrice" name="invoicePrice">0</span> $</b></p>
              </div>
             </div>
              <hr>
              <div class="row">
               <div class="col-md-8">
                <p><b>Monthly Payroll Fee</b></p>
               </div>
               <div class="col-md-4">
                 <p><b><span id="payrollPrice" name="payrollPrice">0</span> $</b></p>
               </div>
              </div>
              <hr>
              <div class="row">
               <div class="col-md-8">
                <p><b>Monthly Cashflow Fee</b></p>
              </div>
              <div class="col-md-4">
                <p><b><span id="cashflowPrice" name="cashflowPrice">0</span> $</b></p>
              </div>
              </div>
            <hr>
            <div class="row">
              <div class="col-md-8">
               <p><b>Monthly Budgeting Fee</b></p>
               </div>
               <div class="col-md-4">
                <p><b><span id="budgetPrice" name="budgetPrice">0</span> $</b></p>
               </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-8">
                  <p><b>One-time setup fee</b></p>
                </div>
                <div class="col-md-4">
                    <p><b><span id="setupPrice" name="setupPrice">0</span> $</b></p>
                </div>
              </div>
                  <hr>
              <div class="row">
                <div class="col-md-8">
                  <p><b>Total Billing</b></p>
                </div>
                <div class="col-md-4">
                  <p><b><span id="totalPrice" name="totalPrice">0</span> $</b></p>
                 </div>
               </div> 
               <hr>
               <div class="row" id="discountedRow" style="display: none;">
                <div class="col-md-8">
                  <p><b>Discounted Price</b></p>
                </div>
              <div class="col-md-4">
                <p><b><span id="updatePrice">0</span> $</b></p>
              </div>
              </div>
              <button class="btn btn-primary p-3" style="font-size:15px;border-radius:15px" type="submit">Submit</button>
            </form>
            <button class="btn btn-primary p-3" style="font-size:15px;border-radius:15px" id="updateFormulaBtn">Get 79% Discount Now</button>
          </div>
         </div>
        </div>
       </div>
      </div>    
     </div>
    </div>
  </div>
  <?php include 'components/footer.php'?>
  <?php include 'components/footerBottom.php'?>
</main>
<script>
$(document).ready(function () {
    $("#updateFormulaBtn").on("click", function () {
        updateFormulas();
    });
});
let categoryTotal = {
    monthlyTransaction: 0,
    monthlyInvoices: 0,
    payroll: 0,
    expense: 0,
    cashflow: 0,
    budget: 0,
    setup: 0
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
    } else if (category === 'monthlyTransaction' && transactionCheckbox.checked) {
        return (categoryTotal.monthlyTransaction * 5 / 60 * 15);
    } else if (category === 'monthlyInvoices' && invoicesCheckbox.checked) {
        return (categoryTotal.monthlyInvoices * 15 / 60 * 15);
    } else if (category === 'payroll' && payrollCheckbox.checked) {
        return (categoryTotal.payroll * 15 / 60 * 15);
    } else {
        return 0;
    }
}
function updateFormulas() {
    const transactionPrice = (categoryTotal.monthlyTransaction * 1 / 60 * 10).toFixed(2);
    const invoicePrice = (categoryTotal.monthlyInvoices * 5 / 60 * 10).toFixed(2);
    const payrollPrice = (categoryTotal.payroll * 5 / 60 * 10).toFixed(2);
    const cashflowPrice = document.getElementById("cashflowCheckbox").checked ?
        ((categoryTotal.monthlyTransaction + categoryTotal.monthlyInvoices + categoryTotal.payroll + categoryTotal.expense) * 5 / 60 * 10).toFixed(2) : 0;
    const budgetPrice = document.getElementById("budgetCheckbox").checked ?
        ((categoryTotal.monthlyTransaction + categoryTotal.monthlyInvoices + categoryTotal.payroll + categoryTotal.expense) * 5 / 60 * 10).toFixed(2) : 0;
    const setupPrice = document.getElementById("setupCheckbox").checked ? 300 : 0;

    const updatePrice = (
        parseFloat(transactionPrice) +
        parseFloat(invoicePrice) +
        parseFloat(payrollPrice) +
        parseFloat(cashflowPrice) +
        parseFloat(budgetPrice) +
        parseFloat(setupPrice)
    ).toFixed(2);

    document.getElementById("transactionPrice").innerText = transactionPrice;
    document.getElementById("invoicePrice").innerText = invoicePrice;
    document.getElementById("payrollPrice").innerText = payrollPrice;
    document.getElementById("cashflowPrice").innerText = cashflowPrice;
    document.getElementById("budgetPrice").innerText = budgetPrice;
    document.getElementById("setupPrice").innerText = setupPrice;
    document.getElementById("updatePrice").innerText = updatePrice;
    $("#discountedRow").show();
}

function saveCalculatorData() {
    const formData = new FormData();
    formData.append('transactionPrice', document.getElementById("transactionPrice").innerText);
    formData.append('invoicePrice', document.getElementById("invoicePrice").innerText);
    formData.append('payrollPrice', document.getElementById("payrollPrice").innerText);
    formData.append('cashflowPrice', document.getElementById("cashflowPrice").innerText);
    formData.append('budgetPrice', document.getElementById("budgetPrice").innerText);
    formData.append('setupPrice', document.getElementById("setupPrice").innerText);
    formData.append('totalPrice', document.getElementById("totalPrice").innerText);
    formData.append('discountPrice', document.getElementById("updatePrice").innerText);

    $.ajax({
        type: "POST",
        url: "./database_operations/calculator_operations.php", 
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
            console.log(response); 
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

document.getElementById("calculatorForm").addEventListener("submit", function (event) {
    event.preventDefault();
    updateFormulas(); 
    saveCalculatorData(); 
});

document.getElementById("getDiscountBtn").addEventListener("click", updateFormulas);

function calculatePrices() {
    categoryTotal.monthlyTransaction = parseFloat(document.getElementById("monthlyTransactionInputField").value) || 0;
    categoryTotal.monthlyInvoices = parseFloat(document.getElementById("monthlyInvoicesInputField").value) || 0;
    categoryTotal.payroll = parseFloat(document.getElementById("payrollInputField").value) || 0;

    const cashflowCheckbox = document.getElementById("cashflowCheckbox");
    const budgetCheckbox = document.getElementById("budgetCheckbox");
    const setupCheckbox = document.getElementById("setupCheckbox");

    categoryTotal.cashflow = cashflowCheckbox.checked ? calculateCategoryTotal("cashflow") : 0;
    categoryTotal.budget = budgetCheckbox.checked ? calculateCategoryTotal("budget") : 0;
    categoryTotal.setup = setupCheckbox.checked ? calculateCategoryTotal("setup") : 0;

    const transactionPrice = (categoryTotal.monthlyTransaction * 5 / 60 * 15).toFixed(2);
    const invoicePrice = (categoryTotal.monthlyInvoices * 15 / 60 * 15).toFixed(2);
    const payrollPrice = (categoryTotal.payroll * 15 / 60 * 15).toFixed(2);
    const cashflowPrice = categoryTotal.cashflow.toFixed(2);
    const budgetPrice = categoryTotal.budget.toFixed(2);
    const setupPrice = categoryTotal.setup.toFixed(2);

    const totalPrice = (
        parseFloat(transactionPrice) +
        parseFloat(invoicePrice) +
        parseFloat(payrollPrice) +
        parseFloat(cashflowPrice) +
        parseFloat(budgetPrice) +
        parseFloat(setupPrice)
    ).toFixed(2);

    document.getElementById("transactionPrice").innerText = transactionPrice;
    document.getElementById("invoicePrice").innerText = invoicePrice;
    document.getElementById("payrollPrice").innerText = payrollPrice;
    document.getElementById("cashflowPrice").innerText = cashflowPrice;
    document.getElementById("budgetPrice").innerText = budgetPrice;
    document.getElementById("setupPrice").innerText = setupPrice;
    document.getElementById("totalPrice").innerText = totalPrice;
}
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
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
