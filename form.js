const currentYear = new Date().getFullYear();
const numYears = 100;
const dropdown = document.getElementById("yearDropdown");

document.getElementById("businessType").addEventListener("change", function () {
  resetFieldsAndCallServices();
});

function resetFieldsAndCallServices() {
  resetAndAnimate(
    "business-size",
    "businessSize",
    "selectedBusinessSize",
    BusinessService
  );
  resetAndAnimate(
    "country",
    "company_operate_country",
    "selectedCountry",
    Country
  );
}

function resetAndAnimate(labelId, sizeId, selectedId, callback) {
  const label = document.getElementById(labelId);
  const size = document.getElementById(sizeId);
  const selected = document.getElementById(selectedId);

  label.style.display = "none";
  size.style.display = "none";
  selected.style.display = "none";

  label.style.animation = "none";
  size.style.animation = "none";
  label.style.animation = "slideInLeft 1.2s ease";
  label.addEventListener(
    "animationend",
    function () {
      if (callback) {
        callback();
      }
    },
    { once: true }
  );
}
$(document).ready(function() {
  $('.select2').select2({
    placeholder: 'Select an option', // Placeholder text
    allowClear: true // Allow clearing the selection
  });
});

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
    setTimeout(function () {
      typeWriter(element, text, i, callback);
    }, 15);
  } else if (typeof callback === "function") {
    setTimeout(callback, 700);
  }
}
function resetCheckboxes() {
  var selectBox = document.getElementById("whichService");
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');

  if (selectBox.value !== "Accounting & Finance") {
    checkboxes.forEach(function (checkbox) {
      checkbox.checked = false;
    });
  }
}
resetCheckboxes();
document
  .getElementById("whichService")
  .addEventListener("change", resetCheckboxes);

let currentText = "";

function updateProgress(percentage) {
  const progressBar = document.getElementById("progressBar");
  const progressPercentage = document.getElementById("progressPercentage");

  progressBar.value = percentage;
  progressPercentage.textContent = `${percentage}%`;

  let newText = "";

  if (percentage === 0) {
    newText = "Fill in the form to see progress.";
  } else if (percentage === 45) {
    newText = "Great! You've completed the initial step.";
  } else if (percentage === 74) {
    newText = "Almost there! Complete the additional fields.";
  } else if (percentage === 100) {
    newText = "Congratulations! You've completed the form.";
  }

  if (newText !== currentText) {
    currentText = newText;
    if (percentage === 100) {
      setCompletionText(currentText);
    } else {
      autoTypeText(currentText);
    }
  }
}

function autoTypeText(text) {
  const completionText = document.getElementById("completionText");
  completionText.textContent = "";
  typeWriter(completionText, text, 0);
}

function setCompletionText(text) {
  const completionText = document.getElementById("completionText");
  completionText.textContent = text;
}

function typeWriter(element, text, index) {
  if (index < text.length) {
    element.textContent += text.charAt(index);
    setTimeout(() => typeWriter(element, text, index + 1), 50);
  }
}

function checkStepCompletion() {
  const businessType = document.getElementById("businessType").value;
  const businessSize = document.getElementById("businessSize").value;
  const companyOperateCountry = document.getElementById(
    "company_operate_country"
  ).value;
  const companyRevenue = document.getElementById("company_revenue").value;
  const currency = document.getElementById("currency").value;
  const foundedYear = document.getElementById("yearDropdown").value;
  const customerType = document.getElementById("customer_type").value;
  const businessName = document.getElementById("business_name").value.trim();
  const firstname = document.getElementById("firstname").value.trim();
  const email = document.getElementById("email").value.trim();
  const whichService = document.getElementById("whichService").value;
  const whichSoftware = document.getElementById("whichSoftware").value;
  const softwarePreferred = document.getElementById("softwarePreferred").value;
  const accountingSoftwareUsed = document.getElementById(
    "accounting_software_used"
  ).value;
  const phone = document.getElementById("phone").value.trim();
  const specifyReason = document.getElementById("specifyReason").value;
  const monthlyTransactionInputField = document
    .getElementById("monthlyTransactionInputField")
    .value.trim();
  const monthlyInvoicesInputField = document
    .getElementById("monthlyInvoicesInputField")
    .value.trim();
  const payrollInputField = document
    .getElementById("payrollInputField")
    .value.trim();
  const expenseInputField = document
    .getElementById("expenseInputField")
    .value.trim();
  const contractualPaymentInputField = document
    .getElementById("contractualPaymentInputField")
    .value.trim();
  const cfo = document.getElementById("cfo").value;

  let progress = 0;

  if (businessType !== "Select an option") {
    progress += 4;
  }
  if (businessSize !== "Select an option") {
    progress += 4;
  }
  if (companyOperateCountry !== "Select an option") {
    progress += 4;
  }
  if (companyRevenue !== "Select an option") {
    progress += 4;
  }
  if (currency !== "Select Currency") {
    progress += 4;
  }
  if (foundedYear !== "Select Founded Year") {
    progress += 4;
  }
  if (customerType !== "Select an option") {
    progress += 4;
  }
  if (businessName !== "") {
    progress += 4;
  }
  if (firstname !== "") {
    progress += 4;
  }
  if (email !== "") {
    progress += 4;
  }
  if (phone !== "") {
    progress += 5;
  }
  if (whichService !== "Select an option") {
    progress += 9;
  }
  if (
    whichService === "Human Resource" ||
    whichService === "IT Support" ||
    whichService === "Creative & Content Services" ||
    whichService === "Software Development & Maintenance"
  ) {
    progress += 55;
  }
  if (whichSoftware !== "Select an option") {
    progress += 10;
  }
  if (
    softwarePreferred !== "Select an option" ||
    accountingSoftwareUsed !== "Select an option"
  ) {
    progress += 10;
  }
  if (
    monthlyTransactionInputField !== "" ||
    monthlyInvoicesInputField !== "" ||
    payrollInputField !== "" ||
    expenseInputField !== "" ||
    contractualPaymentInputField !== ""
  ) {
    progress += 13;
  }
  if (
    cfo === "yes" ||
    specifyReason === "High Price" ||
    specifyReason === "Service Revision" ||
    specifyReason === "Other"
  ) {
    progress += 13;
  }
  if (progress > 100) {
    progress = 100;
  }

  updateProgress(progress);
}

const formElements = [
  "businessType",
  "businessSize",
  "company_operate_country",
  "company_revenue",
  "currency",
  "yearDropdown",
  "customer_type",
  "business_name",
  "firstname",
  "email",
  "whichService",
  "whichSoftware",
  "softwarePreferred",
  "accounting_software_used",
  "phone",
  "monthlyTransactionInputField",
  "monthlyInvoicesInputField",
  "payrollInputField",
  "expenseInputField",
  "contractualPaymentInputField",
  "cfo",
  "specifyReason",
];

formElements.forEach((id) => {
  const element = document.getElementById(id);
  if (element.tagName === "INPUT" || element.tagName === "TEXTAREA") {
    element.addEventListener("input", checkStepCompletion);
  } else {
    element.addEventListener("change", checkStepCompletion);
  }
});

function finalStepComplete() {
  updateProgress(100);
}

document.getElementById("businessSize").addEventListener("change", function () {
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
  let speed = 15;

  function type() {
    if (index < text.length) {
      element.textContent += text.charAt(index);
      index++;
      element.timeout = setTimeout(type, speed);
    }
  }
  type();
}
document
  .querySelector('button[name="Subscribe"]')
  .addEventListener("click", function (event) {
    event.preventDefault();

    const businessSize = document.getElementById("businessSize").value;
    const currency = document.getElementById("currency").value;
    const yearDropdown = document.getElementById("yearDropdown").value;
    const customerType = document.getElementById("customer_type").value;
    const businessName = document.getElementById("business_name").value;
    const firstName = document.getElementById("firstname").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;

    if (
      businessSize === "Select an option" ||
      currency === "Select Currency" ||
      yearDropdown === "Select Founded Year" ||
      customerType === "Select an option" ||
      businessName.trim() === "" ||
      firstName.trim() === "" ||
      email.trim() === "" ||
      phone.trim() === ""
    ) {
      alert("Please fill out all fields before submitting.");
    } else {
      window.location.href = "calculator.php";
    }
  });
function BusinessCategory(element, text) {
  element.style.display = "block";
  element.textContent = "";
  let index = 0;
  let speed = 15;

  function type() {
    if (index < text.length) {
      element.textContent += text.charAt(index);
      index++;
      element.timeout = setTimeout(type, speed);
    }
  }
  type();
}
document
  .querySelectorAll(".subCategoryField")
  .forEach(function (selectElement) {
    selectElement.addEventListener("change", function () {
      handleOtherSpecifyField();
    });
  });

function handleOtherSpecifyField() {
  let showOtherField = false;

  document
    .querySelectorAll(".subCategoryField")
    .forEach(function (selectElement) {
      if (selectElement.value.includes("Other (Please Specify)")) {
        showOtherField = true;
      }
    });
  const otherSpecifyLabel = document.getElementById("otherSpecifyLabel");
  const otherSpecifyField = document.getElementById("otherSpecifyField");
  const selectedOtherSpecify = document.getElementById("selectedOtherSpecify");
  if (showOtherField) {
    otherSpecifyLabel.style.display = "block";
    otherSpecifyLabel.classList.add("slideInLeft");

    otherSpecifyLabel.addEventListener(
      "animationend",
      function () {
        SpecifySubCategory();
      },
      {
        once: true,
      }
    );
  } else {
    otherSpecifyLabel.style.display = "none";
    otherSpecifyField.style.display = "none";
    selectedOtherSpecify.style.display = "none";
  }
}
document.getElementById("currency").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedCurrency");
  var businessTypeValue = this.value;

  if (typingLabel.timeout) {
    clearTimeout(typingLabel.timeout);
  }
  BusinessType(typingLabel, businessTypeValue);
});

document.getElementById("yearDropdown").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedFoundedYear");
  var businessTypeValue = this.value;

  if (typingLabel.timeout) {
    clearTimeout(typingLabel.timeout);
  }
  BusinessType(typingLabel, businessTypeValue);
});
document
  .getElementById("customer_type")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("selectedCustomerDetails");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

document.getElementById("enterButton").addEventListener("click", function () {
  var typingLabel = document.getElementById("selectedBusinessName");
  var businessTypeInput = document.getElementById("business_name");
  var businessTypeValue = businessTypeInput.value;

  typingLabel.textContent = "Typing: " + businessTypeValue;
  typingLabel.style.display = "block";
  BusinessType(typingLabel, businessTypeValue);
  businessTypeInput.disabled = true;
});

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "business_name") {
      document.getElementById("enterButton").click();
    }
  }
});

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "otherSpecifyInput") {
      document.getElementById("enterButton6").click();
    }
  }
});

document.getElementById("enterButton6").addEventListener("click", function () {
  var typingLabel = document.getElementById("selectedOtherSpecify");
  var businessTypeInput = document.getElementById("otherSpecifyInput");
  var businessTypeValue = businessTypeInput.value;
  var businessTypeValue = businessTypeInput.value;
  typingLabel.textContent = "Typing: " + businessTypeValue;
  typingLabel.style.display = "block";
  BusinessType(typingLabel, businessTypeValue);
  businessTypeInput.disabled = true;
});

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "softwareSpecify") {
      document.getElementById("enterButton9").click();
    }
  }
});

document.getElementById("enterButton9").addEventListener("click", function () {
  var typingLabel = document.getElementById("specifySoftwares");
  var businessTypeInput = document.getElementById("softwareSpecify");
  var businessTypeValue = businessTypeInput.value;
  typingLabel.textContent = "Typing: " + businessTypeValue;
  typingLabel.style.display = "block";
  BusinessType(typingLabel, businessTypeValue);
  businessTypeInput.disabled = true;

  document.addEventListener("keydown", function (event) {
    if (event.key === "Enter") {
      const focusedElement = document.activeElement;
      if (focusedElement.id === "softwareSpecify") {
        document.getElementById("enterButton9").click();
      }
    }
  });
});

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "softwareSpecifies") {
      document.getElementById("enterButton10").click();
    }
  }
});

document.getElementById("enterButton10").addEventListener("click", function () {
  var typingLabel = document.getElementById("specSoftware");
  var businessTypeInput = document.getElementById("softwareSpecifies");
  var businessTypeValue = businessTypeInput.value;
  typingLabel.textContent = "Typing: " + businessTypeValue;
  typingLabel.style.display = "block";
  BusinessType(typingLabel, businessTypeValue);
  businessTypeInput.disabled = true;
});

document.addEventListener("DOMContentLoaded", function () {
  const label = document.getElementById("typing-parent");
  const select = document.getElementById("businessType");
  const text = "Could you please describe your Business?";
  let index = 0;

  function type() {
    if (index < text.length) {
      label.textContent += text.charAt(index);
      index++;
      setTimeout(type, 15);
    } else {
      select.style.display = "block";
    }
  }
  type();
});

document.getElementById("businessType").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedBusinessType");
  var businessTypeValue = this.value;

  if (typingLabel.timeout) {
    clearTimeout(typingLabel.timeout);
  }
  BusinessType(typingLabel, businessTypeValue);
});

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "firstname") {
      document.getElementById("enterButton2").click();
    }
  }
});

document.getElementById("enterButton2").addEventListener("click", function () {
  var typingLabel = document.getElementById("selectedFirstName");
  var businessTypeInput = document.getElementById("firstname");
  var businessTypeValue = businessTypeInput.value;

  typingLabel.textContent = "Typing: " + businessTypeValue;
  typingLabel.style.display = "block";

  BusinessType(typingLabel, businessTypeValue);
  businessTypeInput.disabled = true;
});
document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "specifyCustomer") {
      document.getElementById("enterButton8").click();
    }
  }
});

document.getElementById("enterButton8").addEventListener("click", function () {
  var typingLabel = document.getElementById("specifyCustomerDetail");
  var businessTypeInput = document.getElementById("specifyCustomer");
  var businessTypeValue = businessTypeInput.value;

  typingLabel.textContent = "Typing: " + businessTypeValue;
  typingLabel.style.display = "block";

  BusinessType(typingLabel, businessTypeValue);
  businessTypeInput.disabled = true;
});

function updateNames() {
  var firstName = document.getElementById("firstname").value;
  var selectedFirstNameDiv = document.getElementById("selectedFirstName");

  if (selectedFirstNameDiv.timeout) {
    clearTimeout(selectedFirstNameDiv.timeout);
  }

  BusinessType(selectedFirstNameDiv, " " + firstName);
}

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "email") {
      document.getElementById("enterButton3").click();
    }
  }
});
document.getElementById("enterButton3").addEventListener("click", function () {
  var typingLabel = document.getElementById("selectedEmail");
  var businessTypeValue = document.getElementById("email").value;
  typingLabel.textContent = "Typing: " + businessTypeValue;
  typingLabel.style.display = "block";

  BusinessType(typingLabel, businessTypeValue);
});

document
  .getElementById("whichSoftware")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("selectedSoftware");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

document.getElementById("cfo").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedCfo");
  var businessTypeValue = this.value;

  if (typingLabel.timeout) {
    clearTimeout(typingLabel.timeout);
  }
  BusinessType(typingLabel, businessTypeValue);
});

document
  .getElementById("specifyReason")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("selectedReason");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });
document.getElementById("whichService").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedService");
  var businessTypeValue = this.value;

  if (typingLabel.timeout) {
    clearTimeout(typingLabel.timeout);
  }
  BusinessType(typingLabel, businessTypeValue);
});
document
  .getElementById("accounting_software_used")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("selectedSoftwares");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

document
  .getElementById("softwarePreferred")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("preSoftware");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

document
  .getElementById("company_operate_country")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("selectedCountry");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

document
  .getElementById("company_revenue")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("selectedRevenue");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
  });

document.addEventListener("keydown", function (event) {
  if (event.key === "Enter") {
    const focusedElement = document.activeElement;
    if (focusedElement.id === "phone") {
      document.getElementById("enterButton4").click();
    }
  }
});

document.getElementById("enterButton4").addEventListener("click", function () {
  var typingLabel = document.getElementById("selectedPhone");
  var businessTypeElement = document.getElementById("phone");

  if (typingLabel && businessTypeElement) {
    var businessTypeValue = businessTypeElement.value;
    typingLabel.textContent = "Typing: " + businessTypeValue;
    typingLabel.style.display = "block";
    BusinessType(typingLabel, businessTypeValue);
  } else {
    console.error("One or more elements are not found.");
  }
});

function BusinessType(element, text) {
  element.style.display = "block";
  element.textContent = "";
  let index = 0;
  let speed = 15;

  function type() {
    if (index < text.length) {
      element.textContent += text.charAt(index);
      index++;
      element.timeout = setTimeout(type, speed);
    }
  }
  type();
}
const typingStarted1 = {
  subCategoryDiv: false,
};

function subCatories(label, text, select) {
  if (!typingStarted1[label.id]) {
    typingStarted1[label.id] = true;
    let index = 0;
    label.textContent = "";

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 15);
      } else {
        select.style.display = "block";
      }
    }

    type();
  }
}
const elementsToWatch = [
  "startupContainer",
  "currency",
  "business-typing",
  "yearDropdown",
  "businessType",
  "customer_type",
  "businessName",
  "business-size",
  "country",
  "company_revenue",
  "revenueSize",
  "company_operate_country",
  "whichSoftware",
  "softwareType",
  "accounting_software_used",
  "selectedSoftwares",
  "calculatorList",
  "customerSpecify",
  "whichService",
  "softwareQues",
  "softwarePrefer",
  "softwarePreferred",
  "specifySoftware",
  "quotationDetails",
  "cfoLabel",
  "cfo",
  "virtualCfo",
  "calculatorLabel",
  "reasonLabel",
  "specifyReason",
  "softwareSpecify",
  "revisionOptions",
  "selectedReason",
  "selectedCfo",
  "otherReason",
  "OtherReasonLabel",
  "highPriceLabel",
  "preSoftware",
  "selectedSoftware",
  "monthlyTransactionInput",
  "monthlyInvoicesInput",
  "payrollInput",
  "expenseInput",
  "contractualPaymentInput",
  "transactionLabel",
  "invoiceLabel",
  "payrollLabel",
  "billingLabel",
  "paymentLabel",
  "otherSpecifyInput",
  "submit",
  "otherSpecifyLabel",
  "inputGroup8",
  "selectedOtherSpecify",
];
elementsToWatch.forEach((elementId) => {
  const element = document.getElementById(elementId);
  if (element) {
    element.addEventListener("change", showSubCategories);
  }
});
function showSubCategories() {
  const mainCategory = document.getElementById("businessType").value;
  const businessSizeLabel = document.getElementById("business-size");
  const businessSize = document.getElementById("businessSize");
  const whichSoftware = document.getElementById("whichSoftware");
  const softwareType = document.getElementById("softwareType");
  const currency = document.getElementById("currency").value;
  const foundedYearContainer = document.getElementById("years");
  const OtherReasonLabel = document.getElementById("OtherReasonLabel");
  const cfo = document.getElementById("cfo");
  const highPriceLabel = document.getElementById("highPriceLabel");
  const virtualCfo = document.getElementById("virtualCfo");
  const specifyReason = document.getElementById("specifyReason");
  const otherReason = document.getElementById("otherReason");
  const submit = document.getElementById("submit");
  const softwarePreferred = document.getElementById("softwarePreferred");
  const filingOptions = document.getElementById("filingOptions");
  const usaFilingOptions = document.getElementById("usaFilingOptions");
  const selectedOtherSpecify = document.getElementById("selectedOtherSpecify");
  const ukFilingOptions = document.getElementById("ukFilingOptions");
  const country = document.getElementById("country");
  const calculatorLabel = document.getElementById("calculatorLabel");
  const revisionOptions = document.getElementById("revisionOptions");
  const reasonLabel = document.getElementById("reasonLabel");
  const softwareQues = document.getElementById("softwareQues");
  const whichService = document.getElementById("whichService");
  const selectedCfo = document.getElementById("selectedCfo");
  const selectedReason = document.getElementById("selectedReason");
  const inputGroup7 = document.getElementById("input-group7");
  const calculatorList = document.getElementById("calculatorList");
  const countryDropdown = document.getElementById("company_operate_country");
  const revenuelabel = document.getElementById("revenueSize");
  const revenueSelect = document.getElementById("company_revenue");
  const monthlyTransactionInput = document.getElementById(
    "monthlyTransactionInput"
  );
  const monthlyInvoicesInput = document.getElementById("monthlyInvoicesInput");
  const payrollInput = document.getElementById("payrollInput");
  const contractualPaymentInput = document.getElementById(
    "contractualPaymentInput"
  );
  const expenseInput = document.getElementById("expenseInput");
  const transactionLabel = document.getElementById("transactionLabel");
  const invoiceLabel = document.getElementById("invoiceLabel");
  const payrollLabel = document.getElementById("payrollLabel");
  const billingLabel = document.getElementById("billingLabel");
  const inputGroup11 = document.getElementById("input-group11");
  const otherSpecifyLabel = document.getElementById("otherSpecifyLabel");
  const inputGroup8 = document.getElementById("input-group8");
  const spcifySoftwares = document.getElementById("spcifySoftwares");
  const specSoftware = document.getElementById("specSoftware");
  const softwareSpecifyInput = document.getElementById("input-group10");
  const specifySoftwares = document.getElementById("specifySoftwares");
  const specifyCustomerDetail = document.getElementById(
    "specifyCustomerDetail"
  );
  const paymentLabel = document.getElementById("paymentLabel");
  const cfoLabel = document.getElementById("cfoLabel");
  const currencyLabel = document.getElementById("business-typing");
  const selectedSoftwares = document.getElementById("selectedSoftwares");
  const specifySoftware = document.getElementById("specifySoftware");
  const quotationDetails = document.getElementById("quotationDetails");
  const preSoftware = document.getElementById("preSoftware");
  const subCategoryField = document
    .querySelectorAll(".subCategoryField")
    .forEach((select) => {
      select.addEventListener("change", handleSubCategoryChange);
    });
  const selectedSoftware = document.getElementById("selectedSoftware");
  const softwarePrefer = document.getElementById("softwarePrefer");
  const accounting_software_used = document.getElementById(
    "accounting_software_used"
  );
  const yearDropdown = document.getElementById("yearDropdown");
  const customerContainer = document.getElementById("customerType");
  const customer_type = document.getElementById("customer_type");
  const customerSpecify = document.getElementById("customerSpecify");
  const businessNameContainer = document.getElementById("businessName");
  const allSubCategoryDivs = document.querySelectorAll("[id^='subCategory']");
  allSubCategoryDivs.forEach(function (subCategoryDiv) {
    subCategoryDiv.style.display = "none";
  });
  const selectedSubCategoryDiv = document.getElementById(
    "subCategory" + mainCategory
  );
  if (selectedSubCategoryDiv) {
    selectedSubCategoryDiv.style.display = "block";
    const labels = selectedSubCategoryDiv.querySelectorAll(".typing-child");
    labels.forEach((label) => {
      subCatories(
        label,
        "Could you please describe your Sub Business Category?"
      );
    });
  } else {
    const autoTypingDisplay = document.getElementById("autoTypingDisplay");
    const otherSpecifyLabel = document.getElementById("otherSpecifyLabel");
    const inputGroup8 = document.getElementById("input-group8");
    autoTypingDisplay.style.display = "none";
    inputGroup8.style.display = "none";
    otherSpecifyLabel.style.display = "none";
  }
  filingOptions.style.display = "block";
  if (countryDropdown.value === "United States") {
    usaFilingOptions.style.display = "block";
    ukFilingOptions.style.display = "none";
  } else if (countryDropdown.value === "United Kingdom") {
    ukFilingOptions.style.display = "block";
    usaFilingOptions.style.display = "none";
  } else {
    filingOptions.style.display = "none";
  }
  if (
    mainCategory !== "Select an option" &&
    mainCategory !== "Tech Services" &&
    mainCategory !== "Health" &&
    mainCategory !== "Food & Beverages" &&
    mainCategory !== "Education" &&
    mainCategory !== "Travel & Tourism" &&
    mainCategory !== "Freelancer" &&
    mainCategory !== "Beauty" &&
    mainCategory !== "Online Stores" &&
    mainCategory !== "Artisanal and Handcraft" &&
    mainCategory !== "Factory Production Facility" &&
    mainCategory !== "Gifting Service" &&
    mainCategory !== "Pets" &&
    mainCategory !== "Agriculture" &&
    mainCategory !== "Performers" &&
    subCategoryField !== "Other (Please Specify)"
  ) {
    businessSizeLabel.style.display = "block";
    otherSpecifyLabel.style.display = "none";
    inputGroup8.style.display = "none";
    selectedOtherSpecify.style.display = "none";
    businessSizeLabel.style.animation = "slideInLeft 1.5s ease";

    businessSizeLabel.addEventListener(
      "animationend",
      function () {
        BusinessService();
      },
      {
        once: true,
      }
    );
  } else {
  }
  function handleSubCategoryChange(event) {
    const selectedOption = event.target.value;
    if (
      selectedOption !== "Select an option" &&
      selectedOption !== "Other (Please Specify)"
    ) {
      businessSizeLabel.style.display = "block";
      businessSizeLabel.style.animation = "slideInLeft 1.5s ease";
      businessSizeLabel.addEventListener(
        "animationend",
        function () {
          BusinessService();
        },
        {
          once: true,
        }
      );
    }
  }
  document.querySelectorAll(".subCategoryField").forEach((select) => {
    select.addEventListener("change", handleSubCategoryChange);
  });

  if (whichSoftware.value === "no") {
    softwarePrefer.style.display = "block";
    spcifySoftwares.style.display = "none";
    inputGroup11.style.display = "none";
    specSoftware.style.display = "none";
    // calculatorLabel.style.display = "none";
    // calculatorList.style.display = "none";
    accounting_software_used.style.display = "none";
    softwarePrefer.style.animation = "slideInLeft 1.5s ease";

    softwarePrefer.addEventListener(
      "animationend",
      function () {
        SoftwarePrefer();
      },
      {
        once: true,
      }
    );
  } else {
    softwarePreferred.style.display = "none";
    softwarePrefer.style.display = "none";
  }

  if (specifyReason.value === "Other") {
    OtherReasonLabel.style.display = "block";
    submit.style.display = "block";
    // OtherReasonLabel.style.animation = "slideInLeft 1.5s ease";

    OtherReasonLabel.addEventListener(
      "animationend",
      function () {
        OtherReason();
      },
      {
        once: true,
      }
    );
  } else {
    otherReason.style.display = "none";
    submit.style.display = "none";
    OtherReasonLabel.style.display = "none";
  }
  if (specifyReason.value === "Service Revision") {
    submit.style.display = "block";
  } else {
    submit.style.display = "none";
  }

  if (whichSoftware.value === "yes") {
    softwareType.style.display = "block";
    softwareSpecifyInput.style.display = "none";
    specifySoftwares.style.display = "none";
    softwareType.style.animation = "slideInLeft 1.5s ease";
    preSoftware.style.display = "none";

    specifySoftware.style.display = "none";
    softwareType.addEventListener(
      "animationend",
      function () {
        SoftwareAns();
      },
      {
        once: true,
      }
    );
  } else {
    softwareType.style.display = "none";
    // accounting_software_used.style.display = "none";
    selectedSoftwares.style.display = "none";
  }

  if (currency !== "") {
    foundedYearContainer.style.display = "block";
    foundedYearContainer.style.animation = "slideInLeft 1.5s ease";

    foundedYearContainer.addEventListener(
      "animationend",
      function () {
        yearsDetails();
      },
      {
        once: true,
      }
    );
  } else {
    foundedYearContainer.style.display = "none";
  }

  if (
    (accounting_software_used.value !== "Select an option" &&
      accounting_software_used.value !== "Other") ||
    (softwarePreferred.value !== "Select an option" &&
      softwarePreferred.value !== "Other")
  ) {
    calculatorLabel.style.display = "block";
    calculatorLabel.style.animation = "slideInLeft 1.5s ease";
    calculatorLabel.addEventListener(
      "animationend",
      function () {
        Calculator();
      },
      {
        once: true,
      }
    );
  } else {
    // calculatorLabel.style.display = "none"; // Hide calculatorLabel
    // calculatorList.style.display = "none"; // Hide calculatorList
  }

  if (specifyReason.value === "High Price") {
    highPriceLabel.style.display = "block";
    highPriceLabel.style.animation = "slideInLeft 1.5s ease";

    highPriceLabel.addEventListener(
      "animationend",
      function () {
        HighPrice();
      },
      {
        once: true,
      }
    );
    submit.style.display = "block";
  } else {
    highPriceLabel.style.display = "none";
  }
  if (cfo.value === "no") {
    reasonLabel.style.display = "block";
    reasonLabel.style.animation = "slideInLeft 1.5s ease";
    reasonLabel.addEventListener(
      "animationend",
      function () {
        Reason();
      },
      {
        once: true,
      }
    );
  } else {
    reasonLabel.style.display = "none";
  }
  if (
    whichService.value === "Human Resource" ||
    whichService.value === "IT Support" ||
    whichService.value === "Creative & Content Services" ||
    whichService.value === "Software Development & Maintenance"
  ) {
    submit.style.display = "block";

    const elementsToHide = [
      accounting_software_used,
      softwarePreferred,
      softwareQues,
      whichSoftware,
      softwareType,
      selectedSoftware,
      selectedSoftwares,
      preSoftware,
      calculatorLabel,
      calculatorList,
      quotationDetails,
      revisionOptions,
      cfoLabel,
      cfo,
      selectedCfo,
      reasonLabel,
      specifyReason,
      selectedReason,
      OtherReasonLabel,
      otherReason,
      softwarePrefer,
      highPriceLabel,
      monthlyTransactionInput,
      monthlyInvoicesInput,
      payrollInput,
      transactionLabel,
      expenseInput,
      contractualPaymentInput,
      invoiceLabel,
      payrollLabel,
      billingLabel,
      paymentLabel,
      specifySoftware,
      softwareSpecifyInput,
      specifySoftwares,
      spcifySoftwares,
      inputGroup11,
    ];
    elementsToHide.forEach((element) => {
      element.style.display = "none";
    });
  } else {
    submit.style.display = "none";
  }

  if (yearDropdown.value !== "Select Founded Year") {
    customerContainer.style.display = "block";
    customerContainer.style.animation = "slideInLeft 1.5s ease";

    customerContainer.addEventListener(
      "animationend",
      function () {
        customersDetail();
      },
      {
        once: true,
      }
    );
  } else {
    customerContainer.style.display = "none";
  }
  if (
    customer_type.value !== "Select an option" &&
    customer_type.value !== "Other"
  ) {
    businessNameContainer.style.display = "block";
    customerSpecify.style.display = "none";
    inputGroup7.style.display = "none";
    specifyCustomerDetail.style.display = "none";
    businessNameContainer.style.animation = "slideInLeft 1.5s ease";

    businessNameContainer.addEventListener(
      "animationend",
      function () {
        BusinessName();
      },
      { once: true }
    );
  } else {
    businessNameContainer.style.display = "none";
  }

  if (businessSize.value !== "Select an option") {
    country.style.display = "block";
    country.style.animation = "slideInLeft 1.5s ease";

    country.addEventListener(
      "animationend",
      function () {
        Country();
      },
      {
        once: true,
      }
    );
  } else {
    country.style.display = "none";
  }
  if (cfo.value === "yes") {
    virtualCfo.style.display = "block";
  } else {
    virtualCfo.style.display = "none";
  }

  if (countryDropdown.value !== "Select an option") {
    revenuelabel.style.display = "block";
    revenuelabel.style.animation = "slideInLeft 1.5s ease";

    revenuelabel.addEventListener(
      "animationend",
      function () {
        Revenue();
      },
      {
        once: true,
      }
    );
  } else {
    revenuelabel.style.display = "none";
  }
  if (
    whichService.value != "Select an option" &&
    whichService.value != "Human Resource" &&
    whichService.value != "IT Support" &&
    whichService.value != "Creative & Content Services" &&
    whichService.value != "Software Development & Maintenance"
  ) {
    softwareQues.style.display = "block";
    softwareQues.style.animation = "slideInLeft 1.5s ease";

    softwareQues.addEventListener(
      "animationend",
      function () {
        Softwares();
      },
      {
        once: true,
      }
    );
  } else {
    softwareQues.style.display = "none";
  }
  if (revenueSelect.value !== "Select an option") {
    currencyLabel.style.display = "block";
    currencyLabel.style.animation = "slideInLeft 1.5s ease";

    currencyLabel.addEventListener(
      "animationend",
      function () {
        CurrencyTyping();
      },
      {
        once: true,
      }
    );
  } else {
    currencyLabel.style.display = "none";
  }
}
document.getElementById("enterButton").addEventListener("click", function () {
  const FirstNameLabel = document.getElementById("firstNameLabel");
  const inputValue = document.getElementById("business_name").value;
  if (inputValue.trim() !== "") {
    FirstNameLabel.style.display = "block";
    FirstNameLabel.style.animation = "slideInLeft 1.2s ease";
    FirstNameLabel.addEventListener(
      "animationend",
      function () {
        FirstName();
      },
      {
        once: true,
      }
    );
  } else {
    FirstNameLabel.style.display = "none";
  }
});
document.getElementById("enterButton8").addEventListener("click", function () {
  const businessName = document.getElementById("businessName");
  const inputGroup = document.getElementById("input-group");
  const inputValue = document.getElementById("specifyCustomer").value;
  if (inputValue.trim() !== "") {
    businessName.style.display = "block";
    businessName.style.animation = "slideInLeft 1.2s ease";

    businessName.addEventListener(
      "animationend",
      function () {
        BusinessName();
      },
      {
        once: true,
      }
    );
  } else {
    businessName.style.display = "none";
    inputGroup.style.display = "none";
  }
});
document.getElementById("enterButton6").addEventListener("click", function () {
  const businessSizeLabel = document.getElementById("business-size");
  const inputValue = document.getElementById("otherSpecifyInput").value;
  if (inputValue.trim() !== "") {
    businessSizeLabel.style.display = "block";
    businessSizeLabel.style.animation = "slideInLeft 1.2s ease";

    businessSizeLabel.addEventListener(
      "animationend",
      function () {
        BusinessService();
      },
      {
        once: true,
      }
    );
  } else {
    businessSizeLabel.style.display = "none";
  }
});

document.getElementById("enterButton9").addEventListener("click", function () {
  const calculatorLabel = document.getElementById("calculatorLabel");
  const inputValue = document.getElementById("softwareSpecify").value;
  if (inputValue.trim() !== "") {
    calculatorLabel.style.display = "block";
    calculatorLabel.style.animation = "slideInLeft 1.2s ease";

    calculatorLabel.addEventListener(
      "animationend",
      function () {
        Calculator();
      },
      {
        once: true,
      }
    );
  } else {
    calculatorLabel.style.display = "none";
  }
});

document.getElementById("enterButton10").addEventListener("click", function () {
  const calculatorLabel = document.getElementById("calculatorLabel");
  const inputValue = document.getElementById("softwareSpecifies").value;
  if (inputValue.trim() !== "") {
    calculatorLabel.style.display = "block";
    calculatorLabel.style.animation = "slideInLeft 1.2s ease";

    calculatorLabel.addEventListener(
      "animationend",
      function () {
        Calculator();
      },
      {
        once: true,
      }
    );
  } else {
    calculatorLabel.style.display = "none";
  }
});

document
  .getElementById("customer_type")
  .addEventListener("change", function () {
    const customerSpecify = document.getElementById("customerSpecify");
    customerSpecify.textContent = "";

    if (this.value === "Other") {
      customerSpecify.style.display = "block";
      customerSpecify.classList.add("slideInLeft");

      customerSpecify.addEventListener(
        "animationend",
        function () {
          CustomerType();
        },
        {
          once: true,
        }
      );
    } else {
      customerSpecify.style.display = "none";
    }
  });

document
  .getElementById("accounting_software_used")
  .addEventListener("change", function () {
    const spcifySoftwares = document.getElementById("spcifySoftwares");
    const inputGroup11 = document.getElementById("input-group11");
    if (this.value === "Other") {
      spcifySoftwares.style.display = "block";
      spcifySoftwares.classList.add("slideInLeft");

      spcifySoftwares.addEventListener(
        "animationend",
        function () {
          SpecifySoftwares();
        },
        {
          once: true,
        }
      );
    } else {
      spcifySoftwares.style.display = "none";
      inputGroup11.style.display = "none";
    }
  });

document
  .getElementById("softwarePreferred")
  .addEventListener("change", function () {
    const specifySoftware = document.getElementById("specifySoftware");
    const softwareSpecifyInput = document.getElementById("input-group10");
    const specifySoftwares = document.getElementById("specifySoftwares");

    if (this.value === "Other") {
      specifySoftware.style.display = "block";
      specifySoftware.classList.add("slideInLeft");

      specifySoftware.addEventListener(
        "animationend",
        function () {
          SpecifySoftware();
        },
        {
          once: true,
        }
      );
    } else {
      specifySoftware.style.display = "none";
      softwareSpecifyInput.style.display = "none";
      specifySoftwares.style.display = "none";
    }
  });
document.getElementById("enterButton2").addEventListener("click", function () {
  const emailDiv = document.getElementById("emailLabel");
  const inputValue = document.getElementById("firstname").value;
  const email = document.getElementById("email");

  if (inputValue.trim() !== "") {
    emailDiv.style.display = "block";
    Email();
  } else {
    emailDiv.style.display = "none";
  }
});

document.getElementById("enterButton3").addEventListener("click", function () {
  const phoneDiv = document.getElementById("phoneLabel");
  const inputValue = document.getElementById("email").value;
  const emailInput = document.getElementById("email");
  const emailError = document.getElementById("emailError");

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (emailPattern.test(inputValue)) {
    emailInput.classList.remove("input-error");
    emailInput.style.border = "";
    emailError.style.display = "none";

    phoneDiv.style.display = "block";
    Phone();
    emailInput.disabled = true;
  } else {
    emailInput.classList.add("input-error");
    emailInput.style.border = "2px solid red";
    emailError.style.display = "block";
    emailInput.disabled = false;
    phoneDiv.style.display = "none";
  }
});

document.getElementById("enterButton4").addEventListener("click", function () {
  const phoneInput = document.getElementById("phone");
  const phoneValue = phoneInput.value;
  const phoneError = document.getElementById("phoneError");

  const phonePattern = /^\+\d{12}$/;

  if (phonePattern.test(phoneValue)) {
    phoneError.style.display = "none";
    phoneInput.style.border = "";
    const service = document.getElementById("serviceLooking");
    service.style.display = "block";
    ServiceLooking();
    phoneInput.disabled = true;
  } else {
    phoneError.style.display = "block";
    phoneInput.style.border = "2px solid red";
    phoneInput.disabled = false;
  }
});

let typingStarted = {
  phone: false,
  customerType: false,
  serviceLooking: false,
  softwarePrefer: false,
  businessName: false,
  businessSize: false,
  currencyTyping: false,
  businessService: false,
  country: false,
  customerTypeSpecify: false,
  revenue: false,
  yearsDetails: false,
  softwares: false,
  softwareAns: false,
  email: false,
  transaction: false,
  monthlyinvoices: false,
  payrollmanagement: false,
  billing: false,
  contractualpayment: false,
  highprice: false,
  reason: false,
  otherreason: false,
};

function resetTypingFlags() {
  for (let key in typingStarted) {
    typingStarted[key] = false;
  }
}

function checkAllAnimationsComplete() {
  for (let key in typingStarted) {
    if (typingStarted[key]) {
      return false;
    }
  }
  return true;
}
function autoScrollDown(nextFunction = null) {
  if (checkAllAnimationsComplete()) {
    const nextElement = getNextTypingElement(nextFunction);
    if (nextElement) {
      nextElement.scrollIntoView({ behavior: "smooth", block: "start" });
    }
  } else {
    setTimeout(() => autoScrollDown(nextFunction), 100);
  }
}
function getNextTypingElement(nextFunction) {
  switch (nextFunction) {
    case Phone:
      return document.getElementById("customerType");
    case customersDetail:
      return document.getElementById("serviceLooking");
    case ServiceLooking:
      return document.getElementById("softwarePrefer");
    case SoftwarePrefer:
      return document.getElementById("businessName");
    case BusinessName:
      return document.getElementById("business-size");
    case BusinessService:
      return document.getElementById("business-typing");
    case CurrencyTyping:
      return document.getElementById("business-service");
    case serviceWant:
      return document.getElementById("country");
    case Country:
      return document.getElementById("customerSpecify");
    case CustomerType:
      return document.getElementById("revenueSize");
    case Revenue:
      return document.getElementById("years");
    case yearsDetails:
      return document.getElementById("softwareQues");
    case Softwares:
      return document.getElementById("softwareType");
    case SoftwareAns:
      return document.getElementById("emailLabel");
    case Email:
      return document.getElementById("cfoLabel");
    case Cfo:
      return document.getElementById("calculatorLabel");
    case Calculator:
      return document.getElementById("transactionLabel");
    case Transaction:
      return document.getElementById("invoiceLabel");
    case monthlyInvoices:
      return document.getElementById("payrollLabel");
    case payrollManagement:
      return document.getElementById("billingLabel");
    case billing:
      return document.getElementById("paymentLabel");
    case contractualPayment:
      return document.getElementById("reasonLabel");
    case Reason:
      return document.getElementById("OtherReasonLabel");
    case OtherReason:
      return document.getElementById("highPriceLabel");
    case SpecifySoftware:
      return document.getElementById("specifySoftware");
    case HighPrice:
      return null;
    default:
      return null;
  }
}
function typeText(label, select, text, flag, nextFunction, doubleChar = false) {
  if (typingStarted[flag]) return;

  typingStarted[flag] = true;
  let index = 0;
  label.textContent = "";

  function type() {
    if (index < text.length) {
      label.textContent += text.charAt(index);
      index++;
      setTimeout(type, 15);
    } else {
      select.style.display = "block";
      typingStarted[flag] = false;
      autoScrollDown(nextFunction);
    }
  }
  type();
}
function Phone() {
  typeText(
    document.getElementById("phoneLabel"),
    document.getElementById("input-group4"),
    "Please provide your Contact Number",
    "phone",
    customersDetail
  );
}

function customersDetail() {
  typeText(
    document.getElementById("customerType"),
    document.getElementById("customer_type"),
    "Could you please describe Customer type",
    "customerType",
    BusinessName
  );
}

function ServiceLooking() {
  typeText(
    document.getElementById("serviceLooking"),
    document.getElementById("whichService"),
    "Services looking for?",
    "serviceLooking",
    SoftwarePrefer
  );
}

function SoftwarePrefer() {
  typeText(
    document.getElementById("softwarePrefer"),
    document.getElementById("softwarePreferred"),
    "Are you planning to use any Accounting software?",
    "softwarePrefer",
    Calculator
  );
}

function BusinessName() {
  typeText(
    document.getElementById("businessName"),
    document.getElementById("input-group"),
    "Could you please provide your business Name",
    "businessName",
    BusinessService
  );
}

function BusinessService() {
  typeText(
    document.getElementById("business-size"),
    document.getElementById("businessSize"),
    "Could you please describe your Business Size?",
    "businessSize",
    CurrencyTyping
  );
}

function CurrencyTyping() {
  typeText(
    document.getElementById("business-typing"),
    document.getElementById("currency"),
    "Could you please provide your currency where your company operated?",
    "currencyTyping",
    serviceWant
  );
}

function serviceWant() {
  typeText(
    document.getElementById("business-service"),
    document.getElementById("businessCategory"),
    "Could you define the Service that you want",
    "business-service",
    Country
  );
}

function Country() {
  typeText(
    document.getElementById("country"),
    document.getElementById("company_operate_country"),
    "Which country company does the operates?",
    "country",
    Revenue
  );
}

function Revenue() {
  typeText(
    document.getElementById("revenueSize"),
    document.getElementById("company_revenue"),
    "Company Revenue",
    "revenueSize",
    yearsDetails
  );
}

function CustomerType() {
  typeText(
    document.getElementById("customerSpecify"),
    document.getElementById("input-group7"),
    "Please Specify Customer",
    "specifyCustomer",
    BusinessName
  );
}
function yearsDetails() {
  typeText(
    document.getElementById("years"),
    document.getElementById("yearDropdown"),
    "Please Select founded Year of Your Company",
    "yearsDetails",
    CustomerType
  );
}

function Softwares() {
  typeText(
    document.getElementById("softwareQues"),
    document.getElementById("whichSoftware"),
    "Are you using any accounting Softwares?",
    "softwares",
    SoftwareAns
  );
}

function SoftwareAns() {
  typeText(
    document.getElementById("softwareType"),
    document.getElementById("accounting_software_used"),
    "Which Software do you use?",
    "softwareAns",
    Email
  );
}

function Email() {
  typeText(
    document.getElementById("emailLabel"),
    document.getElementById("input-group3"),
    "Write Your Email",
    "email",
    Cfo
  );
}

function Cfo() {
  typeText(
    document.getElementById("cfoLabel"),
    document.getElementById("cfo"),
    "Would you like to proceed to virtual CFO?",
    "cfo",
    Calculator
  );
}

function Calculator() {
  typeText(
    document.getElementById("calculatorLabel"),
    document.getElementById("calculatorList"),
    "Please provide the list of sub-Service that you would like?",
    "calculator",
    Transaction
  );
}

function Transaction() {
  typeText(
    document.getElementById("transactionLabel"),
    document.getElementById("monthlyTransactionInput"),
    "Please Enter the Number of Monthly Transaction",
    "transaction",
    null
  );
}

function monthlyInvoices() {
  typeText(
    document.getElementById("invoiceLabel"),
    document.getElementById("monthlyInvoicesInput"),
    "Please Enter the Number of Monthly Invoices",
    "monthlyinvoices",
    null
  );
}

function payrollManagement() {
  typeText(
    document.getElementById("payrollLabel"),
    document.getElementById("payrollInput"),
    "Please Enter the Number of Payroll",
    "payrollmanagement",
    null
  );
}

function billing() {
  typeText(
    document.getElementById("billingLabel"),
    document.getElementById("expenseInput"),
    "Please Enter the Number of Billing",
    "billing",
    null
  );
}

function contractualPayment() {
  typeText(
    document.getElementById("paymentLabel"),
    document.getElementById("contractualPaymentInput"),
    "Please Enter the Number of Contractual Payment",
    "contractualpayment",
    null
  );
}

function Reason() {
  typeText(
    document.getElementById("reasonLabel"),
    document.getElementById("specifyReason"),
    "Please provide the reason",
    "reason",
    OtherReason
  );
}

function OtherReason() {
  typeText(
    document.getElementById("OtherReasonLabel"),
    document.getElementById("otherReason"),
    "Please provide the reason",
    "otherreason",
    HighPrice
  );
}
function SpecifySoftware() {
  typeText(
    document.getElementById("specifySoftware"),
    document.getElementById("input-group10"),
    "Please specify Software",
    "specifySoftware"
  );
}
function SpecifySoftwares() {
  typeText(
    document.getElementById("spcifySoftwares"),
    document.getElementById("input-group11"),
    "Please specify Software",
    "specifySoftwares"
  );
}
function SpecifySubCategory() {
  typeText(
    document.getElementById("otherSpecifyLabel"),
    document.getElementById("input-group8"),
    "Please specify Sub Category",
    "otherSpecifyLabel"
  );
}
function HighPrice() {
  typeText(
    document.getElementById("highPriceLabel"),
    null,
    "Thank you for considering our products. We understand that you’ve selected a higher price option. Rest assured, our pricing is highly competitive within the market. We strive to offer the best value for your investment, ensuring top-quality products and services that you won't find anywhere else. If you have any questions or need further assistance, please don't hesitate to reach out.",
    "highprice",
    function () {
      const submit = document.getElementById("submit");
      if (submit) submit.style.display = "none";
      autoScrollDown();
    }
  );
}
document.addEventListener("DOMContentLoaded", function () {
  autoScrollDown();
});

const phoneInputField = document.querySelector("#phone");
const phoneContainer = document.querySelector("#phone-container");

const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

function FirstName() {
  const label = document.getElementById("firstNameLabel");
  const text = "Please Write Your Full Name";
  const select = document.getElementById("input-group2");
  let index = 0;

  function type() {
    if (index < text.length) {
      label.textContent = text.substring(0, index + 1);
      index++;
      setTimeout(type, 15);
    } else {
      select.style.display = "block";
    }
  }
  label.textContent = "";
  type();
}

document.addEventListener("DOMContentLoaded", function () {
  function handleDropdownChange() {
    var dropdowns = document.querySelectorAll(".autoType");
    var displayElement = document.getElementById("autoTypingDisplay");

    dropdowns.forEach(function (dropdown) {
      dropdown.addEventListener("change", function () {
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

document.addEventListener("DOMContentLoaded", function () {
  const stepMenus = [document.querySelector(".formbold-step-menu1")];
  const formSteps = [document.querySelector(".formbold-form-step-1")];
  const formSubmitBtn = document.querySelector(".formbold-btn");
  const formBackBtn = document.querySelector(".formbold-back-btn");
  const formNextBtn = document.querySelector(".formbold-next-btn");

  function updateStep() {
    stepMenus.forEach((stepMenu, index) => {
      stepMenu.classList.toggle("active", index === currentStepIndex);
    });
    formSteps.forEach((formStep, index) => {
      formStep.classList.toggle("active", index === currentStepIndex);
    });
  }

  let currentStepIndex = 0;
  updateStep();

  formNextBtn.addEventListener("click", function (event) {
    currentStepIndex++;
    updateStep();
  });

  formBackBtn.addEventListener("click", function (event) {
    currentStepIndex--;
    updateStep();
  });

  formSubmitBtn.addEventListener("click", function (event) {
    event.preventDefault();
    const formData = new FormData(document.querySelector("form"));
    fetch("./database_operations/subscription_form.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (response.ok) {
          console.log("Form submitted successfully");
          const businessCategoryValue = document
            .getElementById("businessCategory")
            .value.trim()
            .toLowerCase();
          if (businessCategoryValue === "bookkeeping") {
            window.location.href = "calculator.php";
          }
        } else {
          console.error("Error submitting form");
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
});

if (window.location.pathname.includes("calculator.php")) {
  window.addEventListener("pageshow", function (event) {
    if (window.location.pathname.includes("calculator.php")) {
      document.getElementById("monthlyTransactionInputField").value = "";
      document.getElementById("monthlyInvoicesInputField").value = "";
      document.getElementById("payrollInputField").value = "";
      document.getElementById("contractualPaymentInputField").value = "";
    }
  });
}
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
  contractualPayment: 0,
  cashflow: 0,
  budget: 0,
  setup: 0,
  irsFiling: 0,
  statutoryStateFiling: 0,
  hmrc: 0,
  companyHouseFiling: 0,
  vat: 0,
  financialAnalysis: 0,
  monthlyProfitLoss: 0,
  strategicAdvice: 0,
};
function showInputBox(category) {
  const selectedCategory = category;
  const checkbox = document.querySelector(`[value="${selectedCategory}"]`);
  const inputField = document.getElementById(`${selectedCategory}Label`);
  const inputField2 = document.getElementById(`${selectedCategory}Input`);
  const description = document.getElementById(`${selectedCategory}Description`);
  const priceSection = document.getElementById(
    `${selectedCategory}PriceSection`
  );

  if (checkbox && checkbox.checked) {
    if (inputField) inputField.style.display = "block";
    if (description) description.style.display = "block";
    if (priceSection) priceSection.style.display = "block";

    switch (selectedCategory) {
      case "monthlyTransaction":
        animateAndExecute("transactionLabel", Transaction);
        break;
      case "monthlyInvoices":
        animateAndExecute("invoiceLabel", monthlyInvoices);
        break;
      case "payroll":
        animateAndExecute("payrollLabel", payrollManagement);
        break;
      case "expense":
        animateAndExecute("billingLabel", billing);
        break;
      case "contractualPayment":
        animateAndExecute("paymentLabel", contractualPayment);
        break;
      case "financialAnalysis":
      case "budget":
      case "cashflow":
      case "monthlyProfitLoss":
        const transactionCheckbox = document.getElementById(
          "monthlyTransactionCheckbox"
        );
        const transactionInputField = document.getElementById(
          "monthlyTransactionInput"
        );

        if (!transactionCheckbox.checked) {
          transactionInputField.style.display = "block";
          animateAndExecute(`${selectedCategory}Label`, null);
        }
        break;
      default:
        break;
    }
  } else {
    if (inputField) inputField.style.display = "none";
    if (inputField2) inputField2.style.display = "none";
    if (description) description.style.display = "none";
    if (priceSection) priceSection.style.display = "none";
    hideLabels([
      "transactionLabel",
      "invoiceLabel",
      "payrollLabel",
      "billingLabel",
      "paymentLabel",
    ]);
  }

  categoryTotal[selectedCategory] = calculateCategoryTotal(selectedCategory);
  saveValues();
  calculatePrices();
}

function animateAndExecute(labelId, func) {
  const label = document.getElementById(labelId);
  if (label) {
    label.style.display = "block";
    label.style.animation = "slideInLeft 1.5s ease";
    label.addEventListener(
      "animationend",
      function () {
        if (func) func();
      },
      { once: true }
    );
  }
}
function hideLabels(labelIds) {
  labelIds.forEach((id) => {
    const label = document.getElementById(id);
    if (label) label.style.display = "none";
  });
}
function saveValues() {
  const categories = document.querySelectorAll(
    'input[type="checkbox"][name="category"]'
  );
  let savedValues = [];

  categories.forEach((category) => {
    if (category.checked) {
      const inputField = document.getElementById(category.value + "InputField");
      savedValues.push({
        category: category.value,
        value: inputField ? inputField.value : null,
      });
    }
  });
  localStorage.setItem("savedValues", JSON.stringify(savedValues));
}
function handleReasonChange() {
  const reason = document.getElementById("specifyReason").value;
  const revisionOptions = document.getElementById("revisionOptions");
  revisionOptions.innerHTML = "";
  if (reason === "Service Revision") {
    const savedValues = JSON.parse(localStorage.getItem("savedValues")) || [];

    savedValues.forEach((item) => {
      const label = document.createElement("label");
      label.textContent = item.category.replace(/([A-Z])/g, " $1").trim();

      const checkbox = document.createElement("input");
      checkbox.type = "checkbox";
      checkbox.checked = true;
      checkbox.id = item.category + "CheckboxRevision";
      checkbox.value = item.category;
      checkbox.onchange = () => toggleRevisionCategory(item.category);

      revisionOptions.appendChild(checkbox);
      revisionOptions.appendChild(label);

      if (item.value !== null) {
        const input = document.createElement("input");
        input.type = "number";
        input.value = item.value || 0;
        input.className = "form-control";
        input.id = item.category + "InputFieldRevision";
        input.oninput = () => saveRevisionValues(item.category, input.value);
        revisionOptions.appendChild(input);
      }

      revisionOptions.appendChild(document.createElement("br"));
    });

    revisionOptions.style.display = "block";
  } else {
    revisionOptions.style.display = "none";
  }
}

function saveRevisionValues(category, value) {
  let savedValues = JSON.parse(localStorage.getItem("savedValues")) || [];

  savedValues = savedValues.map((item) => {
    if (item.category === category) {
      return { ...item, value: value };
    }
    return item;
  });

  localStorage.setItem("savedValues", JSON.stringify(savedValues));

  const originalInputField = document.getElementById(category + "InputField");
  if (originalInputField) {
    originalInputField.value = value;
  }

  calculatePrices();
}

function toggleRevisionCategory(category) {
  const revisionCheckbox = document.getElementById(
    category + "CheckboxRevision"
  );
  const revisionInputField = document.getElementById(
    category + "InputFieldRevision"
  );

  if (revisionCheckbox.checked) {
    if (revisionInputField) {
      revisionInputField.style.display = "inline-block";
    }
  } else {
    if (revisionInputField) {
      revisionInputField.style.display = "none";
      saveRevisionValues(category, 0);
    }
    const initialCheckbox = document.querySelector(`[value=${category}]`);
    if (initialCheckbox) {
      initialCheckbox.checked = false;
      showInputBox(category);
    }
  }
  calculatePrices();
}
document.addEventListener("DOMContentLoaded", () => {
  localStorage.removeItem("savedValues");
  calculatePrices();
});

document
  .getElementById("company_revenue")
  .addEventListener("change", updateAdvisoryPrice);
document
  .getElementById("advisoryCheckbox")
  .addEventListener("change", updateAdvisoryPrice);

function updateAdvisoryPrice() {
  const advisory = document.getElementById("advisoryPrice");
  const advisoryCheckbox = document.getElementById("advisoryCheckbox");
  const companyRevenue = document.getElementById("company_revenue").value;

  if (companyRevenue === "Startup" && advisoryCheckbox.checked) {
    advisory.textContent = "15";
    categoryTotal.strategicAdvice = 15 * 60;
  } else if (companyRevenue === "1000+" && advisoryCheckbox.checked) {
    advisory.textContent = "10";
    categoryTotal.strategicAdvice = 10 * 60;
  } else if (companyRevenue === "10,000+" && advisoryCheckbox.checked) {
    advisory.textContent = "5";
    categoryTotal.strategicAdvice = 5 * 60;
  } else if (companyRevenue === "1M+" && advisoryCheckbox.checked) {
    advisory.textContent = "5";
    categoryTotal.strategicAdvice = 5 * 60;
  } else {
    advisory.textContent = "0";
    categoryTotal.strategicAdvice = 0;
  }
  calculatePrices();
}

function updateSetupPrice() {
  const setupPriceElement = document.getElementById("setupPrice");
  const softwarePreferred = document.getElementById("softwarePreferred").value;
  const accounting_software_used = document.getElementById(
    "accounting_software_used"
  ).value;
  const whichSoftware = document.getElementById("whichSoftware").value;

  if (whichSoftware === "no") {
    if (accounting_software_used !== "Excel" && softwarePreferred !== "Excel") {
      setupPriceElement.textContent = "300";
    } else {
      setupPriceElement.textContent = "0";
    }
  } else {
    setupPriceElement.textContent = "0";
  }

  categoryTotal.setup = parseFloat(setupPriceElement.textContent);
  calculatePrices();
}
document
  .getElementById("whichSoftware")
  .addEventListener("change", updateSetupPrice);
document
  .getElementById("accounting_software_used")
  .addEventListener("change", updateSetupPrice);
document
  .getElementById("softwarePreferred")
  .addEventListener("change", updateSetupPrice);
document.addEventListener("DOMContentLoaded", updateVisibility);
document
  .getElementById("company_revenue")
  .addEventListener("change", updateAdvisoryPrice);
document
  .getElementById("advisoryCheckbox")
  .addEventListener("change", updateAdvisoryPrice);

function calculateCategoryTotal(category) {
  const checkbox = document.querySelector(`[value=${category}]`);
  const transactionCheckbox = document.getElementById(
    "monthlyTransactionCheckbox"
  );
  const invoicesCheckbox = document.getElementById("monthlyInvoicesCheckbox");
  const payrollCheckbox = document.getElementById("payrollCheckbox");
  const expenseCheckbox = document.getElementById("expenseCheckbox");
  const contractualPaymentCheckbox = document.getElementById(
    "contractualPaymentCheckbox"
  );

  if ((category === "cashflow" || category === "budget") && checkbox.checked) {
    return (
      (((categoryTotal.monthlyTransaction +
        categoryTotal.monthlyInvoices +
        categoryTotal.payroll +
        categoryTotal.expense) *
        5) /
        60) *
      15
    );
  } else if (category === "irsFiling" && checkbox.checked) {
    return 200;
  } else if (category === "statutoryStateFiling" && checkbox.checked) {
    return 150;
  } else if (category === "hmrc" && checkbox.checked) {
    return 150;
  } else if (category === "companyHouseFiling" && checkbox.checked) {
    return 150;
  } else if (category === "vat" && checkbox.checked) {
    return 150;
  } else if (category === "monthlyTransaction" && transactionCheckbox.checked) {
    return ((categoryTotal.monthlyTransaction * 5) / 60) * 15;
  } else if (category === "monthlyInvoices" && invoicesCheckbox.checked) {
    return ((categoryTotal.monthlyInvoices * 15) / 60) * 15;
  } else if (category === "payroll" && payrollCheckbox.checked) {
    return ((categoryTotal.payroll * 15) / 60) * 15;
  } else if (category === "expense" && expenseCheckbox.checked) {
    return ((categoryTotal.expense * 15) / 60) * 15;
  } else if (
    category === "contractualPayment" &&
    contractualPaymentCheckbox.checked
  ) {
    return ((categoryTotal.contractualPayment * 15) / 60) * 15;
  } else if (category === "financialAnalysis" && checkbox.checked) {
    const transactionInputField = document.getElementById(
      "monthlyTransactionInputField"
    );
    const numberOfTransactions = parseFloat(transactionInputField.value) || 0;
    return numberOfTransactions * 10;
  } else if (category === "monthlyProfitLoss" && checkbox.checked) {
    const transactionInputField = document.getElementById(
      "monthlyTransactionInputField"
    );
    const numberOfTransactions = parseFloat(transactionInputField.value) || 0;
    return numberOfTransactions * 15;
  } else {
    return 0;
  }
}

document
  .getElementById("calculatorForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    updateFormulas();
    saveCalculatorData();
  });

document
  .getElementById("getDiscountBtn")
  .addEventListener("click", redirectToChat);

function calculatePrices() {
  categoryTotal.monthlyTransaction =
    parseFloat(document.getElementById("monthlyTransactionInputField").value) ||
    0;
  categoryTotal.monthlyInvoices =
    parseFloat(document.getElementById("monthlyInvoicesInputField").value) || 0;
  categoryTotal.payroll =
    parseFloat(document.getElementById("payrollInputField").value) || 0;
  categoryTotal.contractualPayment =
    parseFloat(document.getElementById("contractualPaymentInputField").value) ||
    0;
  categoryTotal.expense =
    parseFloat(document.getElementById("expenseInputField").value) || 0;

  const cashflowCheckbox = document.getElementById("cashflowCheckbox");
  const budgetCheckbox = document.getElementById("budgetCheckbox");
  const irsCheckbox = document.getElementById("irsCheckbox");
  const stateCheckbox = document.getElementById("stateCheckbox");
  const hmrcCheckbox = document.getElementById("hmrcCheckbox");
  const companyCheckbox = document.getElementById("companyCheckbox");
  const vatCheckbox = document.getElementById("vatCheckbox");
  const financialCheckbox = document.getElementById("financialCheckbox");
  const profitCheckbox = document.getElementById("profitCheckbox");
  const advisoryCheckbox = document.getElementById("advisoryCheckbox");

  categoryTotal.cashflow = cashflowCheckbox.checked
    ? calculateCategoryTotal("cashflow")
    : 0;
  categoryTotal.budget = budgetCheckbox.checked
    ? calculateCategoryTotal("budget")
    : 0;
  categoryTotal.irsFiling = irsCheckbox.checked
    ? calculateCategoryTotal("irsFiling")
    : 0;
  categoryTotal.statutoryStateFiling = stateCheckbox.checked
    ? calculateCategoryTotal("statutoryStateFiling")
    : 0;
  categoryTotal.hmrc = hmrcCheckbox.checked
    ? calculateCategoryTotal("hmrc")
    : 0;
  categoryTotal.companyHouseFiling = companyCheckbox.checked
    ? calculateCategoryTotal("companyHouseFiling")
    : 0;
  categoryTotal.vat = vatCheckbox.checked ? calculateCategoryTotal("vat") : 0;
  categoryTotal.financialAnalysis = financialCheckbox.checked
    ? calculateCategoryTotal("financialAnalysis")
    : 0;
  categoryTotal.monthlyProfitLoss = profitCheckbox.checked
    ? calculateCategoryTotal("monthlyProfitLoss")
    : 0;
  categoryTotal.strategicAdvice = advisoryCheckbox.checked
    ? categoryTotal.strategicAdvice
    : 0;

  const transactionPrice = (
    ((categoryTotal.monthlyTransaction * 5) / 60) *
    15
  ).toFixed(2);
  const invoicePrice = (
    ((categoryTotal.monthlyInvoices * 15) / 60) *
    15
  ).toFixed(2);
  const payrollPrice = (((categoryTotal.payroll * 15) / 60) * 15).toFixed(2);
  const contractualPaymentPrice = (
    ((categoryTotal.contractualPayment * 15) / 60) *
    15
  ).toFixed(2);
  const expensePrice = (((categoryTotal.expense * 15) / 60) * 15).toFixed(2);
  const cashflowPrice = categoryTotal.cashflow.toFixed(2);
  const budgetPrice = categoryTotal.budget.toFixed(2);
  const statePrice = categoryTotal.statutoryStateFiling.toFixed(2);
  const irsPrice = categoryTotal.irsFiling.toFixed(2);
  const setupPrice = categoryTotal.setup.toFixed(2);
  const hmrcPrice = categoryTotal.hmrc.toFixed(2);
  const advisoryPrice = categoryTotal.strategicAdvice.toFixed(2);
  const companyPrice = categoryTotal.companyHouseFiling.toFixed(2);
  const vatPrice = categoryTotal.vat.toFixed(2);
  const financialAnalysisPrice = categoryTotal.financialAnalysis.toFixed(2);
  const profitPrice = categoryTotal.monthlyProfitLoss.toFixed(2);

  const discountTransactionPrice = (
    ((categoryTotal.monthlyTransaction * 1) / 60) *
    10
  ).toFixed(2);
  const discountInvoicePrice = (
    ((categoryTotal.monthlyInvoices * 5) / 60) *
    10
  ).toFixed(2);
  const discountPayrollPrice = (
    ((categoryTotal.payroll * 5) / 60) *
    10
  ).toFixed(2);
  const discountContractualPaymentPrice = (
    ((categoryTotal.contractualPayment * 5) / 60) *
    10
  ).toFixed(2);

  const discountCashflowPrice = cashflowCheckbox.checked
    ? (
        (((categoryTotal.monthlyTransaction +
          categoryTotal.monthlyInvoices +
          categoryTotal.payroll +
          categoryTotal.expense) *
          5) /
          60) *
        10
      ).toFixed(2)
    : 0;

  const discountBudgetPrice = budgetCheckbox.checked
    ? (
        (((categoryTotal.monthlyTransaction +
          categoryTotal.monthlyInvoices +
          categoryTotal.payroll +
          categoryTotal.expense) *
          5) /
          60) *
        10
      ).toFixed(2)
    : 0;

  const discountedPrice = (
    parseFloat(discountTransactionPrice) +
    parseFloat(discountInvoicePrice) +
    parseFloat(discountPayrollPrice) +
    parseFloat(discountContractualPaymentPrice) +
    parseFloat(discountCashflowPrice) +
    parseFloat(discountBudgetPrice) +
    parseFloat(setupPrice) +
    parseFloat(irsPrice) +
    parseFloat(statePrice) +
    parseFloat(hmrcPrice) +
    parseFloat(companyPrice) +
    parseFloat(vatPrice) +
    parseFloat(financialAnalysisPrice) +
    parseFloat(expensePrice) +
    parseFloat(profitPrice) +
    parseFloat(advisoryPrice)
  ).toFixed(2);

  const totalPrice = (
    parseFloat(transactionPrice) +
    parseFloat(invoicePrice) +
    parseFloat(payrollPrice) +
    parseFloat(contractualPaymentPrice) +
    parseFloat(cashflowPrice) +
    parseFloat(budgetPrice) +
    parseFloat(irsPrice) +
    parseFloat(statePrice) +
    parseFloat(hmrcPrice) +
    parseFloat(companyPrice) +
    parseFloat(vatPrice) +
    parseFloat(setupPrice) +
    parseFloat(financialAnalysisPrice) +
    parseFloat(expensePrice) +
    parseFloat(profitPrice) +
    parseFloat(advisoryPrice)
  ).toFixed(2);

  document.getElementById("transactionPrice").innerText = transactionPrice;
  document.getElementById("discountTransactionPrice").innerText =
    discountTransactionPrice;
  document.getElementById("invoicePrice").innerText = invoicePrice;
  document.getElementById("discountInvoicePrice").innerText =
    discountInvoicePrice;
  document.getElementById("payrollPrice").innerText = payrollPrice;
  document.getElementById("expensePrice").innerText = expensePrice;
  document.getElementById("discountPayrollPrice").innerText =
    discountPayrollPrice;
  document.getElementById("cashflowPrice").innerText = cashflowPrice;
  document.getElementById("discountCashflowPrice").innerText =
    discountCashflowPrice;
  document.getElementById("budgetPrice").innerText = budgetPrice;
  document.getElementById("discountBudgetPrice").innerText =
    discountBudgetPrice;
  document.getElementById("contractualPaymentPrice").innerText =
    contractualPaymentPrice;
  document.getElementById("irsPrice").innerText = irsPrice;
  document.getElementById("setupPrice").innerText = setupPrice;
  document.getElementById("advisoryPrice").innerText = advisoryPrice;
  document.getElementById("statePrice").innerText = statePrice;
  document.getElementById("hmrcPrice").innerText = hmrcPrice;
  document.getElementById("companyPrice").innerText = companyPrice;
  document.getElementById("vatPrice").innerText = vatPrice;
  document.getElementById("financialAnalysisPrice").innerText =
    financialAnalysisPrice;
  document.getElementById("profitPrice").innerText = profitPrice;
  document.getElementById("totalPrice").innerText = totalPrice;
  document.getElementById("discountedPrice").innerText = discountedPrice;

  const cfoLabel = document.getElementById("cfoLabel");
  const quotationDetails = document.getElementById("quotationDetails");
  if (
    parseFloat(transactionPrice) > 0 ||
    parseFloat(invoicePrice) > 0 ||
    parseFloat(payrollPrice) > 0 ||
    parseFloat(contractualPaymentPrice) > 0
  ) {
    cfoLabel.style.display = "block";
    cfoLabel.style.animation = "slideInLeft 1.5s ease";

    cfoLabel.addEventListener(
      "animationend",
      function () {
        Cfo();
      },
      {
        once: true,
      }
    );
  } else {
    cfoLabel.style.display = "none";
  }
  if (
    parseFloat(transactionPrice) > 0 ||
    parseFloat(invoicePrice) > 0 ||
    parseFloat(payrollPrice) > 0 ||
    parseFloat(contractualPaymentPrice) > 0
  ) {
    quotationDetails.style.display = "block";
    quotationDetails.style.animation = "slideInRight 1.5s ease";
  } else {
    quotationDetails.style.display = "none";
  }
}

const checkboxes = document.querySelectorAll("input[type=checkbox]");
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener("change", () => {
    showInputBox(checkbox.value);
  });
});

calculatePrices();
function redirectToChat() {
  var discountTransactionPrice = parseFloat(
    document.getElementById("discountTransactionPrice").innerText
  );
  var discountInvoicePrice = parseFloat(
    document.getElementById("discountInvoicePrice").innerText
  );
  var discountPayrollPrice = parseFloat(
    document.getElementById("discountPayrollPrice").innerText
  );
  var discountCashflowPrice = parseFloat(
    document.getElementById("discountCashflowPrice").innerText
  );
  var discountBudgetPrice = parseFloat(
    document.getElementById("discountBudgetPrice").innerText
  );
  var discountedPrice = parseFloat(
    document.getElementById("discountedPrice").innerText
  );
  var prices = "";
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
  if (parseFloat(document.getElementById("setupPrice").innerText) > 0) {
    prices += `Setup Price: $${parseFloat(
      document.getElementById("setupPrice").innerText
    ).toFixed(2)},\n`;
  }
  if (discountedPrice > 0) {
    prices += `Total Price: $${discountedPrice.toFixed(2)},\n`;
  }
  prices = prices.replace(/,\n$/, "");

  localStorage.setItem("calculatorPrices", prices);
  window.location.href = "chat.php";
  window.onload = function () {};
}
function scrollChatToBottom() {
  const chatContainer = document.getElementById("chat");
  chatContainer.scrollTop = chatContainer.scrollHeight;

  const windowHeight = window.innerHeight;
  const chatContainerHeight = chatContainer.clientHeight;

  if (chatContainerHeight > windowHeight) {
    window.scrollTo({
      top: document.body.scrollHeight,
      behavior: "smooth",
    });
  }
}
