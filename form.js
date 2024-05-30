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

document.addEventListener("DOMContentLoaded", function () {
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

document.getElementById("businessType").addEventListener("change", function () {
  var typingLabel = document.getElementById("selectedBusinessType");
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
  let speed = 100;

  function type() {
    if (index < text.length) {
      element.textContent += text.charAt(index);
      index++;
      element.timeout = setTimeout(type, speed);
    }
  }
  type();
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
  let speed = 100;

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
  const text = "Could you please describe your Business?";
  let index = 0;

  function type() {
    if (index < text.length) {
      label.textContent += text.charAt(index);
      index++;
      setTimeout(type, 100);
    }
  }

  type();
});

function businessTyping() {
  const label = document.getElementById("business-size");
  const text = "Could you please describe your Business Size?";
  let index = 0;

  function type() {
    if (index < text.length) {
      label.textContent += text.charAt(index);
      index++;
      setTimeout(type, 100);
    }
  }

  type();
}

function businessName() {
  const label = document.getElementById("business-name");
  const text = "Could you please describe your Business Size?";
  let index = 0;

  function type() {
    if (index < text.length) {
      label.textContent += text.charAt(index);
      index++;
      setTimeout(type, 100);
    }
  }

  type();
}

document.addEventListener("DOMContentLoaded", function () {
  console.log("DOMContentLoaded event fired");
  showSubCategories();
});

function showSubCategories() {
  console.log("showSubCategories() function called");
  const mainCategory = document.getElementById("businessType").value;
  const businessSizeContainer = document.getElementById("businessSizeContainer");
  const businessSize = document.getElementById("businessSize").value;
  const businessNameContainer = document.getElementById("businessNameContainer");

  console.log("Main Category:", mainCategory);
  console.log("Business Size:", businessSize);

  const allSubCategoryDivs = document.querySelectorAll("[id^='subCategory']");
  allSubCategoryDivs.forEach(function (subCategoryDiv) {
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

//   if (mainCategory !== "Select an option") {
//     console.log("Main Category is not 'Select an option'");
//     businessSizeContainer.style.display = "block";
//     businessSizeContainer.style.animation = "slideInLeft 1.5s ease";
//     businessSizeContainer.addEventListener(
//       "animationend",
//       function () {
//         businessTyping();
//       },
//       { once: true }
//     );
//   } else {
//     console.log("Main Category is 'Select an option'");
//     businessSizeContainer.style.display = "none";
//   }

//   if (businessSize !== "Select an option" && mainCategory !== "Select an option") {
//     console.log("Business Size is not 'Select an option' and Main Category is not 'Select an option'");
//     businessNameContainer.style.display = "block";
//     businessNameContainer.style.animation = "slideInLeft 1.5s ease";
//     businessNameContainer.addEventListener(
//       "animationend",
//       function () {
//         businessName();
//       },
//       { once: true }
//     );
//   } else {
//     console.log("Business Size is 'Select an option' or Main Category is 'Select an option'");
//     businessNameContainer.style.display = "none";
//   }
}

// Define and initialize currentStepIndex
let currentStepIndex = 0;

function startTyping(label, text) {
  let index = 0;

  function type() {
    if (index < text.length) {
      label.textContent += text.charAt(index);
      index++;
      setTimeout(type, 100);
    }
  }

  type();
}

document.addEventListener("DOMContentLoaded", function () {
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

  const stepMenus = [
    document.querySelector(".formbold-step-menu1"),
    document.querySelector(".formbold-step-menu2"),
    document.querySelector(".formbold-step-menu3"),
    document.querySelector(".formbold-step-menu4"),
  ];
  const formSteps = [
    document.querySelector(".formbold-form-step-1"),
    document.querySelector(".formbold-form-step-2"),
    document.querySelector(".formbold-form-step-3"),
    document.querySelector(".formbold-form-step-4"),
  ];

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
    formBackBtn.style.display =
      currentStepIndex === 0 ? "none" : "inline-block";
    if (currentStepIndex === formSteps.length - 1) {
      formNextBtn.style.display = "none";
      formSubmitBtn.style.display = "inline-block";
    } else {
      formNextBtn.style.display = "inline-block";
      formSubmitBtn.style.display = "none";
    }
  }
  updateStep();

  function validateStep(stepIndex) {
    if (stepIndex === 0) {
      const businessTypeValue = document.getElementById('businessType').value;

      if (businessTypeValue === 'Select an option') {
        return false;
      }

      return true;
    } else if (stepIndex === 1) {
      const businessCategoryValue = document.getElementById('businessCategory').value;

      if (businessCategoryValue === 'Select an option') {
        return false;
      }
      return true;
    } else if (stepIndex === 2) {
      const firstname = document.getElementById('firstname').value.trim();
      const lastName = document.getElementById('lastname').value.trim();
      const email = document.getElementById('email').value.trim();
      const phone = document.getElementById('phone').value.trim();

      if (!firstname || !lastName || !email || !phone) {
        alert('Please fill in all fields before proceeding.');
        return false;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert('Please enter a valid email address.');
        return false;
      }

      const phoneRegex = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
      if (!phoneRegex.test(phone)) {
        alert('Please enter a valid phone number.');
        return false;
      }

      return true;
    }
  }

  formBackBtn.addEventListener("click", function (event) {
    currentStepIndex--;
    updateStep();
  });

  formNextBtn.addEventListener("click", function (event) {
    const isValid = validateStep(currentStepIndex);
    if (isValid) {
      currentStepIndex++;
      updateStep();
    } else {
      alert("Please fill in all required fields before proceeding to the next step.");
    }
  });

  formSubmitBtn.addEventListener("click", function (event) {
    event.preventDefault();
    const isValid = validateStep(currentStepIndex);
    if (isValid) {
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
    } else {
      alert("Please fill in all required fields before submitting the form.");
    }
  });
});
