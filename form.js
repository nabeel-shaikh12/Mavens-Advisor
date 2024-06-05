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
    setTimeout(function () {
      typeWriter(element, text, i, callback);
    }, 100);
  } else if (typeof callback === "function") {
    setTimeout(callback, 700);
  }
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

document.getElementById("currency").addEventListener("change", function () {
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
  let speed = 15;

  function type() {
    if (index < text.length) {
      element.textContent += text.charAt(index);
      index++;
      element.timeout = setTimeout(type, speed);
    }
  }
  type();
  document
    .getElementById("yearDropdown")
    .addEventListener("change", function () {
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
}

document
  .getElementById("customer_type")
  .addEventListener("change", function () {
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
  .getElementById("business_name")
  .addEventListener("change", function () {
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

document.getElementById("firstname").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedFirstName");
  var businessTypeValue = this.value;

  if (typingLabel.timeout) {
    clearTimeout(typingLabel.timeout);
  }
  BusinessType(typingLabel, businessTypeValue);
});

document.getElementById("firstname").addEventListener("input", updateNames);

function updateNames() {
  var firstName = document.getElementById("firstname").value;
  var selectedFirstNameDiv = document.getElementById("selectedFirstName");

  if (selectedFirstNameDiv.timeout) {
    clearTimeout(selectedFirstNameDiv.timeout);
  }

  BusinessType(selectedFirstNameDiv, " " + firstName + " " + lastName);
}

document.getElementById("email").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedEmail");
  var businessTypeValue = this.value;

  if (typingLabel.timeout) {
    clearTimeout(typingLabel.timeout);
  }
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

document.getElementById("phone").addEventListener("change", function () {
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
function startTyping(label, text) {
  if (!typingStarted.years) {
    typingStarted.subCategoryDiv = true;
    let index = 0;

    label.textContent = "";

    function type() {
      if (index < text.length) {
        label.textContent += text.charAt(index);
        index++;
        setTimeout(type, 100);
      } else {
        select.style.display = "block";
      }
    }

    type();
  }
}

document
  .getElementById("startupContainer")
  .addEventListener("change", showSubCategories);
document
  .getElementById("currency")
  .addEventListener("change", showSubCategories);
document
  .getElementById("business-typing")
  .addEventListener("change", showSubCategories);
document
  .getElementById("yearDropdown")
  .addEventListener("change", showSubCategories);
document
  .getElementById("businessType")
  .addEventListener("change", showSubCategories);
document
  .getElementById("customer_type")
  .addEventListener("change", showSubCategories);
document
  .getElementById("businessName")
  .addEventListener("change", showSubCategories);
document
  .getElementById("business-size")
  .addEventListener("change", showSubCategories);
document
  .getElementById("country")
  .addEventListener("change", showSubCategories);
document
  .getElementById("company_revenue")
  .addEventListener("change", showSubCategories);
document
  .getElementById("revenueSize")
  .addEventListener("change", showSubCategories);
document
  .getElementById("company_operate_country")
  .addEventListener("change", showSubCategories);
document
  .getElementById("whichSoftware")
  .addEventListener("change", showSubCategories);
document
  .getElementById("softwareType")
  .addEventListener("change", showSubCategories);
document
  .getElementById("accounting_software_used")
  .addEventListener("change", showSubCategories);
document
  .getElementById("selectedSoftwares")
  .addEventListener("change", showSubCategories);

document
  .getElementById("calculatorList")
  .addEventListener("change", showSubCategories);

function showSubCategories() {
  const mainCategory = document.getElementById("businessType").value;
  const businessSizeLabel = document.getElementById("business-size");

  const businessSize = document.getElementById("businessSize");

  const whichSoftware = document.getElementById("whichSoftware");
  const softwareType = document.getElementById("softwareType");

  const currency = document.getElementById("currency").value;
  const foundedYearContainer = document.getElementById("years");

  const country = document.getElementById("country");
  const calculatorList = document.getElementById("calculatorList");

  const countryDropdown = document.getElementById("company_operate_country");
  const revenuelabel = document.getElementById("revenueSize");

  const revenueSelect = document.getElementById("company_revenue");
  const currencyLabel = document.getElementById("business-typing");
  const selectedSoftwares = document.getElementById("selectedSoftwares");

  const accounting_software_used = document.getElementById(
    "accounting_software_used"
  );

  const yearDropdown = document.getElementById("yearDropdown");
  const customerContainer = document.getElementById("customerType");

  const customer_type = document.getElementById("customer_type");
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
    selectedSubCategoryDiv.style.animation = "slideInLeft 1.2s ease";
    const labels = selectedSubCategoryDiv.querySelectorAll(".typing-child");
    labels.forEach((label) => {
      startTyping(
        label,
        "Could you please describe your Sub Business Category?"
      );
    });
  }

  if (mainCategory !== "Select an option") {
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
  } else {
    businessSizeLabel.style.display = "none";
  }

  if (whichSoftware.value === "yes") {
    softwareType.style.display = "block";
    softwareType.style.animation = "slideInLeft 1.5s ease";
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
    accounting_software_used.style.display = "none";
    selectedSoftwares.style.display = "none";
  }
  if (currency !== "Select Currency") {
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
  if (accounting_software_used.value !== "Select an option") {
    calculatorList.style.display = "block";
    calculatorList.style.animation = "slideInLeft 1.5s ease";
  } else {
    calculatorList.style.display = "none";
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
  if (customer_type.value !== "Select an option") {
    businessNameContainer.style.display = "block";
    businessNameContainer.style.animation = "slideInLeft 1.5s ease";

    businessNameContainer.addEventListener(
      "animationend",
      function () {
        BusinessName();
      },
      {
        once: true,
      }
    );
  } else {
    businessNameContainer.style.display = "none";
    accounting_software_used.style.display = "none";
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
document.getElementById("business_name").addEventListener("input", function () {
  const FirstNameLabel = document.getElementById("firstNameLabel");

  if (this.value.trim() !== "") {
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

document.getElementById("firstname").addEventListener("input", function () {
  const emailDiv = document.getElementById("emailLabel");

  if (this.value.trim() !== "") {
    emailDiv.style.display = "block";
    Email();
  } else {
    emailDiv.style.display = "none";
  }
});

document.getElementById("email").addEventListener("input", function () {
  const phoneDiv = document.getElementById("phoneLabel");
  const submitBtn = document.getElementById("submit");

  if (this.value.trim() !== "") {
    phoneDiv.style.display = "block";
    submitBtn.style.display = "block";

    Phone();
  } else {
    phoneDiv.style.display = "none";
  }
});

document.getElementById("phone").addEventListener("input", function () {
  const phoneDiv = document.getElementById("softwareQues");
  const submitBtn = document.getElementById("submit");

  if (this.value.trim() !== "") {
    phoneDiv.style.display = "block";
    submitBtn.style.display = "block";

    Softwares();
  } else {
    phoneDiv.style.display = "none";
  }
});

function resetTypingFlags() {
  for (let key in typingStarted) {
    typingStarted[key] = false;
  }
}

function yearsDetails() {
  const label = document.getElementById("years");
  const text = "Please Select founded Year of Your Company";
  const select = document.getElementById("yearDropdown");
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
function Softwares() {
  const label = document.getElementById("softwareQues");
  const text = "Are you using any accounting Softwares?";
  const select = document.getElementById("whichSoftware");
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
function SoftwareAns() {
  const label = document.getElementById("softwareType");
  const text = "Which Software do you use?";
  const select = document.getElementById("accounting_software_used");
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
function Email() {
  const label = document.getElementById("emailLabel");
  const select = document.getElementById("email");
  const text = "Write Your Email";
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

function Phone() {
  const label = document.getElementById("phoneLabel");
  const select = document.getElementById("phone-container");
  const text = "Please provide your Contact Number";
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
      setTimeout(type, 15);
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
      setTimeout(type, 15);
    } else {
      select.style.display = "block";
    }
  }

  type();
}

function BusinessService() {
  const label = document.getElementById("business-size");
  const text = "Could you please describe your Business Size?";
  const select = document.getElementById("businessSize");
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

function CurrencyTyping() {
  const label = document.getElementById("business-typing");
  const text =
    "Could you please provide your currency where your company operated?";
  const select = document.getElementById("currency");
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

function serviceWant() {
  const label = document.getElementById("business-service");
  const select = document.getElementById("businessCategory");
  const text = "Could you define the Service that you want";
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
}

function Country() {
  const label = document.getElementById("country");
  const select = document.getElementById("company_operate_country");
  const text = "Which country company does the operates?";
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
}
function Revenue() {
  const label = document.getElementById("revenueSize");
  const select = document.getElementById("company_revenue");
  const text = "Company Revenue";
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
}
function BusinessServices(element, text) {
  if (!typingStarted.businessServices) {
    typingStarted.businessServices = true;
    let index = 0;

    function type() {
      if (index < text.length) {
        element.textContent += text.charAt(index);
        index++;
        setTimeout(type, 15);
      }
    }

    type();
  }
}

function FirstName() {
  const label = document.getElementById("firstNameLabel");
  const text = "Please Write Your Full Name";
  const select = document.getElementById("firstname");
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

function showInputBox(category) {
  const selectedCategory = category;
  const checkbox = document.querySelector(`[value=${selectedCategory}]`);

  if (checkbox && checkbox.checked) {
    document.getElementById(`${selectedCategory}Input`).style.display = "block";
    document.getElementById(`${selectedCategory}Description`).style.display =
      "block";
  } else {
    document.getElementById(`${selectedCategory}Input`).style.display = "none";
    document.getElementById(`${selectedCategory}Description`).style.display =
      "none";
  }
  categoryTotal[selectedCategory] = calculateCategoryTotal(selectedCategory);
  calculatePrices();
}

function calculateCategoryTotal(category) {
  const checkbox = document.querySelector(`[value=${category}]`);
  const transactionCheckbox = document.getElementById(
    "monthlyTransactionCheckbox"
  );
  const invoicesCheckbox = document.getElementById("monthlyInvoicesCheckbox");
  const payrollCheckbox = document.getElementById("payrollCheckbox");

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
  } else if (category === "setup" && checkbox.checked) {
    return 300;
  } else if (category === "monthlyTransaction" && transactionCheckbox.checked) {
    return ((categoryTotal.monthlyTransaction * 5) / 60) * 15;
  } else if (category === "monthlyInvoices" && invoicesCheckbox.checked) {
    return ((categoryTotal.monthlyInvoices * 15) / 60) * 15;
  } else if (category === "payroll" && payrollCheckbox.checked) {
    return ((categoryTotal.payroll * 15) / 60) * 15;
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
const phoneInputField = document.querySelector("#phone");
const phoneContainer = document.querySelector("#phone-container");

const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});
