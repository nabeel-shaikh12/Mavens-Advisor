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
      if (selectElement.value.includes("Other")) {
        showOtherField = true;
      }
    });

  const otherSpecifyField = document.getElementById("otherSpecifyField");
  if (showOtherField) {
    otherSpecifyField.style.display = "block";
  } else {
    otherSpecifyField.style.display = "none";
    document.getElementById("otherSpecifyInput").value = ""; // Clear the input when hiding
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
document
  .getElementById("business_name")
  .addEventListener("change", function () {
    var typingLabel = document.getElementById("selectedBusinessName");
    var businessTypeValue = this.value;

    if (typingLabel.timeout) {
      clearTimeout(typingLabel.timeout);
    }
    BusinessType(typingLabel, businessTypeValue);
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

  BusinessType(selectedFirstNameDiv, " " + firstName);
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
document
  .getElementById("customerSpecify")
  .addEventListener("change", showSubCategories);
document
  .getElementById("whichService")
  .addEventListener("change", showSubCategories);
document
  .getElementById("softwareQues")
  .addEventListener("change", showSubCategories);
document
  .getElementById("softwarePrefer")
  .addEventListener("change", showSubCategories);
document
  .getElementById("softwarePreferred")
  .addEventListener("change", showSubCategories);
document
  .getElementById("specifySoftware")
  .addEventListener("change", showSubCategories);
document
  .getElementById("quotationDetails")
  .addEventListener("change", showSubCategories);

function showSubCategories() {
  const mainCategory = document.getElementById("businessType").value;
  const businessSizeLabel = document.getElementById("business-size");

  const businessSize = document.getElementById("businessSize");

  const whichSoftware = document.getElementById("whichSoftware");
  const softwareType = document.getElementById("softwareType");

  const currency = document.getElementById("currency").value;
  const foundedYearContainer = document.getElementById("years");

  const softwarePrefer = document.getElementById("softwarePrefer");
  const softwarePreferred = document.getElementById("softwarePreferred");

  const specifySoftware = document.getElementById("specifySoftware");
  // const softwareSpecify = document.getElementById("softwareSpecify");
  const filingOptions = document.getElementById("filingOptions");
  const usaFilingOptions = document.getElementById("usaFilingOptions");
  const ukFilingOptions = document.getElementById("ukFilingOptions");
  const quotationDetails = document.getElementById("quotationDetails");
  const country = document.getElementById("country");
  const calculatorList = document.getElementById("calculatorList");

  const softwareQues = document.getElementById("softwareQues");

  const whichService = document.getElementById("whichService");
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
  // if (accounting_software_used === "other") {
  //   specifySoftware.style.display = "block";
  //   specifySoftware.style.display = "slideInLeft 1.5s ease";
  //   specifySoftware.addEventListener(
  //     "animationend",
  //     function () {
  //       SpecifySoftware();
  //     },
  //     {
  //       once: true,
  //     }
  //   );
  // } else {
  //   specifySoftware.style.display = "none";
  // }

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

  if (
    accounting_software_used.value !== "Select an option" ||
    softwarePreferred.value !== "Select an option"
  ) {
    calculatorList.style.display = "block";
    quotationDetails.style.display = "block";

    calculatorList.style.animation = "slideInLeft 1.5s ease";
  } else {
    calculatorList.style.display = "none";
    quotationDetails.style.display = "none";
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
  if (whichService.value != "Select an option") {
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
document
  .getElementById("customer_type")
  .addEventListener("change", function () {
    const customerSpecify = document.getElementById("customerSpecify");
    const specifyCustomer = document.getElementById("specifyCustomer");

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
      specifyCustomer.style.display = "none";
    }
  });

// document.getElementById('company_operate_country').addEventListener('change', function() {
//   const filingOptions = document.getElementById('filingOptions');
//   const usaFilingOptions = document.getElementById('usaFilingOptions');
//   const ukFilingOptions = document.getElementById('ukFilingOptions');
//   filingOptions.style.display = 'block';

//   if (selectedCountry === 'United States') {
//     usaFilingOptions.style.display = 'block';
//     ukFilingOptions.style.display = 'none';
//   } else if (selectedCountry === 'United Kingdom') {
//     ukFilingOptions.style.display = 'block';
//     usaFilingOptions.style.display = 'none';
//   } else {
//     filingOptions.style.display = 'none';
//   }

//   monthlyTransactionInput.style.display = 'block';
//   monthlyInvoicesInput.style.display = 'block';
//   contractualPaymentInput.style.display = 'block';
//   payrollInput.style.display = 'block';
// });
document
  .getElementById("whichSoftware")
  .addEventListener("change", function () {
    const softwarePrefer = document.getElementById("softwarePrefer");
    const softwarePreferred = document.getElementById("softwarePreferred");

    customerSpecify.textContent = "";

    if (this.value === "no") {
      softwarePrefer.style.display = "block";
      softwarePrefer.classList.add("slideInLeft");

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
  });
document
  .getElementById("accounting_software_used")
  .addEventListener("change", function () {
    const specifySoftware = document.getElementById("specifySoftware");
    const softwareSpecify = document.getElementById("softwareSpecify");

    customerSpecify.textContent = "";

    if (this.value === "other") {
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
      softwareSpecify.style.display = "none";
      specifySoftware.style.display = "none";
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
  const service = document.getElementById("serviceLooking");
  const submitBtn = document.getElementById("submit");

  if (this.value.trim() !== "") {
    service.style.display = "block";
    submitBtn.style.display = "block";

    ServiceLooking();
  } else {
    service.style.display = "none";
  }
});

function resetTypingFlags() {
  for (let key in typingStarted) {
    typingStarted[key] = false;
  }
}

const typingStarted = {
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
};
function typeText(label, select, text, flag, doubleChar = false) {
  if (typingStarted[flag]) return;

  let index = 0;
  label.textContent = "";

  function type() {
    if (index < text.length) {
      label.textContent += text.charAt(index);
      index++;
      setTimeout(type, 15);
    } else {
      select.style.display = "block";
      typingStarted[flag] = true;
    }
  }

  type();
}
function Phone() {
  typeText(
    document.getElementById("phoneLabel"),
    document.getElementById("phone-container"),
    "Please provide your Contact Number",
    "phone"
  );
}

function customersDetail() {
  typeText(
    document.getElementById("customerType"),
    document.getElementById("customer_type"),
    "Could you please describe Customer type",
    "customerType"
  );
}

function ServiceLooking() {
  typeText(
    document.getElementById("serviceLooking"),
    document.getElementById("whichService"),
    "Services looking for?",
    "serviceLooking"
  );
}

function SoftwarePrefer() {
  typeText(
    document.getElementById("softwarePrefer"),
    document.getElementById("softwarePreferred"),
    "Which Software do you prefer?",
    "softwarePrefer"
  );
}

function BusinessName() {
  typeText(
    document.getElementById("businessName"),
    document.getElementById("business_name"),
    "Could you please provide your business Name",
    "businessName"
  );
}

function BusinessService() {
  typeText(
    document.getElementById("business-size"),
    document.getElementById("businessSize"),
    "Could you please describe your Business Size?",
    "businessSize"
  );
}

function CurrencyTyping() {
  typeText(
    document.getElementById("business-typing"),
    document.getElementById("currency"),
    "Could you please provide your currency where your company operated?",
    "currencyTyping"
  );
}

function serviceWant() {
  typeText(
    document.getElementById("business-service"),
    document.getElementById("businessCategory"),
    "Could you define the Service that you want",
    "businessService"
  );
}

function Country() {
  typeText(
    document.getElementById("country"),
    document.getElementById("company_operate_country"),
    "Which country company does the operates?",
    "country"
  );
}

function CustomerType() {
  typeText(
    document.getElementById("customerSpecify"),
    document.getElementById("specifyCustomer"),
    "Please Specify Customer Type",
    "customerTypeSpecify"
  );
}

function Revenue() {
  typeText(
    document.getElementById("revenueSize"),
    document.getElementById("company_revenue"),
    "Company Revenue",
    "revenue"
  );
}

function yearsDetails() {
  typeText(
    document.getElementById("years"),
    document.getElementById("yearDropdown"),
    "Please Select founded Year of Your Company",
    "yearsDetails"
  );
}

function Softwares() {
  typeText(
    document.getElementById("softwareQues"),
    document.getElementById("whichSoftware"),
    "Are you using any accounting Softwares?",
    "softwares"
  );
}

function SoftwareAns() {
  typeText(
    document.getElementById("softwareType"),
    document.getElementById("accounting_software_used"),
    "Which Software do you use?",
    "softwareAns"
  );
}

function Email() {
  typeText(
    document.getElementById("emailLabel"),
    document.getElementById("email"),
    "Write Your Email",
    "email"
  );
}

const phoneInputField = document.querySelector("#phone");
const phoneContainer = document.querySelector("#phone-container");

const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

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
function SpecifySoftware() {
  const label = document.getElementById("specifySoftware");
  const select = document.getElementById("softwareSpecify");
  const text = "Please Specify Software";
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
      document.getElementById("contractualInputField").value = "";
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
  discountMonthlyTransaction: 0,
  monthlyInvoices: 0,
  contractualPayment: 0,
  payroll: 0,
  expense: 0,
  irsFiling: 0,
  stateutoryFiling: 0,
  cashflow: 0,
  budget: 0,
  setup: 0,
  statutoryStateFiling: 0
};

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
document
  .getElementById("whichSoftware")
  .addEventListener("change", function () {
    const setupPriceElement = document.getElementById("setuppp");
    if (this.value === "no") {
      setupPriceElement.textContent = "300";
    } else {
      setupPriceElement.textContent = "0";
    }
    categoryTotal.setup = calculateCategoryTotal("setup");
    calculatePrices();
  });
function calculateCategoryTotal(category) {
  const checkbox = document.querySelector(`[value=${category}]`);

  const transactionCheckbox = document.getElementById(
    "monthlyTransactionCheckbox"
  );
  const invoicesCheckbox = document.getElementById("monthlyInvoicesCheckbox");
  const payrollCheckbox = document.getElementById("payrollCheckbox");
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
  } else if (
    (category === "irsFiling" ||
      category === "statutoryStateFiling" ||
      category === "hmrcFiling" ||
      category === "companiesHouseFiling" ||
      category === "vatFiling") &&
    checkbox.checked
  ) {
    return 200;
  } else if (category === "monthlyTransaction" && transactionCheckbox.checked) {
    return ((categoryTotal.monthlyTransaction * 5) / 60) * 15;
  } else if (category === "monthlyInvoices" && invoicesCheckbox.checked) {
    return ((categoryTotal.monthlyInvoices * 15) / 60) * 15;
  } else if (category === "payroll" && payrollCheckbox.checked) {
    return ((categoryTotal.payroll * 15) / 60) * 15;
  } else if (category === "contractualPayment" && contractualPaymentCheckbox.checked) {
    return ((categoryTotal.contractualPayment * 15) / 60) * 15;
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
    parseFloat(document.getElementById("contractualInputField").value) || 0;

  const cashflowCheckbox = document.getElementById("cashflowCheckbox");
  const budgetCheckbox = document.getElementById("budgetCheckbox");
  const irsCheckbox = document.getElementById("irsCheckbox");
  const stateChecbox = document.getElementById("stateChecbox");

  categoryTotal.cashflow = cashflowCheckbox.checked
    ? calculateCategoryTotal("cashflow")
    : 0;
  categoryTotal.budget = budgetCheckbox.checked
    ? calculateCategoryTotal("budget")
    : 0;
  categoryTotal.irsFiling = irsCheckbox.checked
    ? calculateCategoryTotal("irsFiling")
    : 0;
  categoryTotal.statutoryStateFiling = stateChecbox.checked
    ? calculateCategoryTotal("statutoryStateFiling")
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
  const cashflowPrice = categoryTotal.cashflow.toFixed(2);
  const budgetPrice = categoryTotal.budget.toFixed(2);
  const irsPrice = categoryTotal.irsFiling.toFixed(2);
  const statePrice = categoryTotal.statutoryStateFiling.toFixed(2);

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
    parseFloat(discountCashflowPrice) +
    parseFloat(discountBudgetPrice) 
  ).toFixed(2);
  
  const totalPrice = (
    parseFloat(transactionPrice) +
    parseFloat(invoicePrice) +
    parseFloat(payrollPrice) +
    parseFloat(contractualPaymentPrice) +
    parseFloat(cashflowPrice) +
    parseFloat(budgetPrice) +
    parseFloat(irsPrice) +
    parseFloat(statePrice)
  ).toFixed(2);

  document.getElementById("transactionPrice").innerText = transactionPrice;
  document.getElementById("discountTransactionPrice").innerText = discountTransactionPrice;
  document.getElementById("invoicePrice").innerText = invoicePrice;
  document.getElementById("discountInvoicePrice").innerText = discountInvoicePrice;
  document.getElementById("payrollPrice").innerText = payrollPrice;
  document.getElementById("cashflowPrice").innerText = cashflowPrice;
  document.getElementById("discountCashflowPrice").innerText =  discountCashflowPrice;

  document.getElementById("budgetPrice").innerText = budgetPrice;
  document.getElementById("discountBudgetPrice").innerText = discountBudgetPrice;
  document.getElementById("irsPrice").innerText = irsPrice;
  document.getElementById("discountPayrollPrice").innerText = discountPayrollPrice;
  document.getElementById("contractualPaymentPrice").innerText = contractualPaymentPrice;
  document.getElementById("discountContractualPaymentPrice").innerText = discountContractualPaymentPrice;
  document.getElementById("discountedPrice").innerText = discountedPrice;
  document.getElementById("statePrice").innerText = statePrice;
  document.getElementById("totalPrice").innerHTML = totalPrice;
}

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
  if (setupPrice > 0) {
    prices += `Setup Price: $${setupPrice.toFixed(2)},\n`;
  }
  if (discountedPrice > 0) {
    prices += `Total Price: $${discountedPrice.toFixed(2)},\n`;
  }
  prices = prices.replace(/,\n$/, "");

  localStorage.setItem("calculatorPrices", prices);
  window.location.href = "chat.php";
  window.onload = function () {};
}
