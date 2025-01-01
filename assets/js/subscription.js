const services = [{
        name: "Accounting & Finance",
        price: 500
    },
    {
        name: "Software Development & Maintenance",
        price: 700
    },
    {
        name: "Human Resource",
        price: 300
    },
    {
        name: "Content Creation & Branding",
        price: 600
    },
    {
        name: "IT Support",
        price: 400
    },
];

let selectedServices = [];

function renderServices() {
    const serviceContainer = document.getElementById("renderServices");
    serviceContainer.innerHTML = ""; // Clear existing content

    services.forEach((service) => {
        // Create button element for each service
        const serviceButton = document.createElement("button");
        serviceButton.classList.add("service-box", "hvr-underline-reveal");
        serviceButton.setAttribute("data-service", service.name);
        serviceButton.setAttribute("data-price", service.price);
        serviceButton.textContent = service.name;

        // Create wrapper div for layout
        const serviceWrapper = document.createElement("div");
        serviceWrapper.classList.add("col-md-4", "mb-3");
        serviceWrapper.appendChild(serviceButton);

        // Append to container
        serviceContainer.appendChild(serviceWrapper);

        // Add click event to service button
        serviceButton.addEventListener("click", function() {
            const serviceName = this.getAttribute("data-service");
            const servicePrice = parseInt(this.getAttribute("data-price"));

            // Add or remove the service from selectedServices
            if (selectedServices.some((s) => s.service === serviceName)) {
                selectedServices = selectedServices.filter(
                    (s) => s.service !== serviceName
                );
                this.classList.remove("selected");
            } else {
                selectedServices.push({
                    service: serviceName,
                    price: servicePrice,
                    hours: 0,
                });
                this.classList.add("selected");
            }

            const bag = document.getElementById("services-bag");
            const bagList = document.getElementById("bag-items");

            // Prevent duplicates in the bag
            if (
                [...bagList.children].some(
                    (item) =>
                    item.getAttribute("data-service") ===
                    this.getAttribute("data-service")
                )
            ) {
                return;
            }

            // Clone the service button and animate to the bag
            const clone = this.cloneNode(true);
            document.body.appendChild(clone);

            // Get positions for animation
            const rect = this.getBoundingClientRect();
            const bagRect = bag.getBoundingClientRect();

            // Hide the service button
            this.style.visibility = "hidden";

            // Set initial position for the clone
            gsap.set(clone, {
                position: "absolute",
                left: rect.left,
                top: rect.top,
                zIndex: 999,
                width: rect.width,
                height: rect.height,
            });

            // Animate the clone into the bag
            gsap.to(clone, {
                duration: 1,
                x: bagRect.left - rect.left + 20,
                y: bagRect.top - rect.top + 20,
                width: 350,
                height: 50,
                scale: 0.5,
                opacity: 0.8,
                onComplete: () => {
                    clone.remove();

                    // Add the item to the bag
                    const listItem = document.createElement("li");
                    listItem.className = "bag-item";
                    listItem.textContent = service.name;
                    listItem.setAttribute("data-service", service.name); // Add a data attribute for reference
                    bagList.appendChild(listItem);

                    // Animate the list item appearance
                    gsap.fromTo(
                        listItem, {
                            opacity: 0
                        }, {
                            duration: 0.5,
                            opacity: 1
                        }
                    );
                },
            });
        });
    });
}

function renderUnselectedServices() {
    const unselectedServices = services.filter(service =>
        !selectedServices.some(selected => selected.service === service.name)
    );

    const unselectedList = document.getElementById("unselected-services");
    unselectedList.innerHTML = ""; // Clear existing content

    unselectedServices.forEach(service => {
        const listItem = document.createElement("li");
        listItem.classList.add("list-inline-item");
        const inactiveButton = document.createElement("button");
        inactiveButton.classList.add("btn");

        const addIcon = document.createElement("i");
        addIcon.classList.add("fa", "fa-plus");

        inactiveButton.appendChild(addIcon);

        inactiveButton.appendChild(document.createTextNode(` ${service.name}`));

        inactiveButton.addEventListener("click", function() {
            // Add the service to selectedServices
            selectedServices.push({
                service: service.name,
                price: service.price,
                hours: 1 // Default hours for a newly added service
            });

            // Re-render the summary and unselected services
            renderSummary();
            renderUnselectedServices();
        });

        listItem.appendChild(inactiveButton);
        unselectedList.appendChild(listItem);
    });
}

// Remove item from bag with animation and restore service button
document.getElementById("bag-items").addEventListener("click", function(event) {
    if (event.target.classList.contains("bag-item")) {
        const serviceName = event.target.getAttribute("data-service");

        gsap.to(event.target, {
            duration: 0.5,
            opacity: 0,
            scale: 0.5,
            onComplete: () => {
                // Remove the item from the bag
                event.target.remove();

                // Restore the visibility of the service button
                document.querySelectorAll(".service-box").forEach((serviceBox) => {
                    if (serviceBox.getAttribute("data-service") === serviceName) {
                        serviceBox.style.visibility = "visible";
                        serviceBox.classList.remove("selected"); // Remove selected class
                    }
                });

                // Remove the service from selectedServices
                selectedServices = selectedServices.filter(
                    (s) => s.service !== serviceName
                );
            },
        });
    }
});

// Call renderServices on page load
document.addEventListener("DOMContentLoaded", () => {
    renderServices();
});

function goToStep(step, previousStep = null) {
    const totalSteps = 4; // Total steps including Step 0 (future)
    const progressBar = document.getElementById('progress-bar');
    const minWidth = 30; // Initial width for Step 1
    // Validation logic for Step 1
    if (step === 2 && previousStep === 1) {
        if (selectedServices.length === 0) {
            Swal.fire({
                title: "Required!",
                text: "Select at least one service to move forward",
                icon: "error",
                confirmButtonColor: "#3085d6"
            });
            return; // Stop execution, do not proceed to next step
        }
    }
    if (step === 2 && previousStep === 3) {
        if (selectedServices.length === 0) {
            goToStep(1);
            return; 
        }
    }


    // Validation logic for Step 2
    if (step === 3) {
        const businessSize = document.querySelector('.business-card.active');
        const revenueSelected = document.getElementById('dropdownMenuButton').textContent.trim() !== 'Select Revenue';
        if (!businessSize) {
            Swal.fire({
                title: "Required!",
                text: "Business Size is Required.",
                icon: "error",
                confirmButtonColor: "#3085d6"
            });
            return; // Stop execution, do not proceed to next step
        } else if (!revenueSelected) {
            Swal.fire({
                title: "Required!",
                text: "Revenue is Required.",
                icon: "error",
                confirmButtonColor: "#3085d6"
            });
            return; // Stop execution, do not proceed to next step
        }
        renderSummary();
        renderUnselectedServices();
    }

    document.querySelectorAll('.step-container').forEach(container => {
        container.classList.remove('active');
    });
    document.getElementById(`step-${step}`).classList.add('active');

    // Calculate the progress bar width
    let progressPercentage = minWidth + ((step - 1) / (totalSteps - 1)) * (100 - minWidth);

    // Update the progress bar width
    progressBar.style.width = `${progressPercentage}%`;
    progressBar.setAttribute('aria-valuenow', progressPercentage);

    $(document).ready(function() {
        document.querySelectorAll('.btn-select').forEach(button => {
            button.addEventListener('click', function() {
                // Clear active class from all cards
                document.querySelectorAll('.business-card').forEach(card => {
                    card.classList.remove('active');
                    const btn = card.querySelector('.btn-select');
                    btn.innerHTML = 'Select'; // Reset button text
                    btn.classList.remove('active-button'); // Remove custom class
                });

                const parentCard = this.closest('.business-card');
                parentCard.classList.add('active');

                // Change button text and add pseudo-class styling
                const $button = $(this);
                $button.fadeOut(400, function() {
                    this.innerHTML = 'Selected'; // Change to 'Selected'
                    this.classList.add('active-button');
                    // Add active-button class
                    $button.fadeIn(400);
                });
            });
        });
    });



    if (step == 2) {
        // Get all the `selected-services` elements in all slides
        const servicesElements = document.querySelectorAll('.selected-services');

        // Loop through each `selected-services` element
        servicesElements.forEach(servicesElement => {
            // Clear any existing content to avoid duplication
            servicesElement.innerHTML = '<h5>Selected Services:</h5>';

            // Create a new list element
            const servicesList = document.createElement('ul');

            // Loop through the `selectedServices` array and populate the list
            selectedServices.forEach(service => {
                const listItem = document.createElement('li');
                listItem.innerHTML = `<i class="fa fa-check" aria-hidden="true"></i> ${service.service}`;
                servicesList.appendChild(listItem);
            });

            // Append the populated list to the current `selected-services` element
            servicesElement.appendChild(servicesList);
        });
    }


    if (step === 3) {
        // Get selected business size hours
        const businessSize = document.querySelector('.business-card.active');
        const hours = businessSize ? parseInt(businessSize.getAttribute('data-value')) : 0;

        // Update hours for all selected services
        selectedServices.forEach(service => {
            service.hours = hours;
        });
        // Render summary
        renderSummary(hours);
    }
}
function validateInput(input) {
    input.value = input.value.replace(/[-+]/g, "");
}
function renderSummary() {
    const summaryBody = document.getElementById('summary-body');

    summaryBody.innerHTML = selectedServices
        .map(service => `
    <tr>
        <td>${service.service}</td>
        <td>$${service.price}</td>
        <td>
            <input type="number" class="form-control summary-hours-input" data-service="${service.service}" value="${service.hours}" min="1"  oninput="validateInput(this)">
        </td>
        <td class="service-total" data-service="${service.service}">$${(service.price * service.hours).toFixed(2)}</td>
        <td>
            <button class="btn btn-sm delete-row" data-service="${service.service}">
                <i class="fa fa-xmark text-light"></i>
            </button>
        </td>
       
    </tr>
`)
        .join('');
    updateTotal();

    // Add event listeners for dynamic input changes
    document.querySelectorAll('.summary-hours-input').forEach(input => {
        input.addEventListener('input', function() {
            const serviceName = this.getAttribute('data-service');
            const newHours = Math.max(0, parseInt(this.value) || 0); // Handle invalid input
            const index = selectedServices.findIndex(s => s.service === serviceName);

            if (index !== -1) {
                selectedServices[index].hours = newHours;

                const rowTotal = document.querySelector(`.service-total[data-service="${serviceName}"]`);
                rowTotal.textContent = `$${(selectedServices[index].price * newHours).toFixed(2)}`;

                updateTotal();
            }
        });
    });
    document.querySelectorAll('.delete-row').forEach(button => {
        button.addEventListener('click', function() {
            const service = this.getAttribute('data-service');
            deleteServiceRow(service);
        });
    });
}

function deleteServiceRow(serviceName) {
    Swal.fire({
        title: "Are you sure?",
        text: "You can add this service again!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
    }).then((result) => {
        if (result.isConfirmed) {
            // Find the service in the selectedServices array
            const index = selectedServices.findIndex(s => s.service === serviceName);
            if (index !== -1) {
                selectedServices.splice(index, 1);
                const bagItems = document.querySelectorAll('#bag-items .bag-item');
                bagItems.forEach(item => {
                    if (item.getAttribute('data-service') === serviceName) {
                        item.remove(); // Remove from the service bag
                    }
                });
                const serviceBoxes = document.querySelectorAll('.service-box');
                serviceBoxes.forEach(box => {
                    if (box.getAttribute('data-service') === serviceName) {
                        box.style.visibility = 'visible'; // Make the service box visible
                        box.classList.remove('selected'); // Remove the selected state
                    }
                });

                Swal.fire({
                    title: "Deleted!",
                    text: "The service has been removed.",
                    icon: "success",
                    confirmButtonColor: "#3085d6"
                });
            }

            renderSummary();
            renderUnselectedServices();

        }
    });

}

function updateTotal() {
    const totalHours = selectedServices.reduce((sum, service) => sum + service.hours, 0);
    const totalCost = selectedServices.reduce((sum, service) => sum + service.price * service.hours, 0);
    document.getElementById('total-hours').innerText = totalHours;
    document.getElementById('total-cost').innerText = totalCost.toFixed(2);
}

const dropdownButton = document.getElementById('dropdownMenuButton');
const dropdownItems = document.querySelectorAll('.dropdown-item');

// Add click event listener to each dropdown item
dropdownItems.forEach(item => {
    item.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        const selectedText = this.textContent; // Get the text of the clicked item
        dropdownButton.textContent = selectedText; // Update the button text

    });
});

function submitForm() {
    const businessName = document.getElementById('business-name').value.trim();
    const email = document.getElementById('email').value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regex for email validation



    // Validate required fields
    if (!businessName || !email) {
        Swal.fire({
            title: "Required!",
            text: "Please fill out the required fields.",
            icon: "error",
            confirmButtonColor: "#3085d6",
        });
        return;
    }
                // Validate email format
    if (!emailPattern.test(email)) {
        Swal.fire({
            title: "Invalid Email!",
            text: "Please enter a valid email address.",
            icon: "error",
            confirmButtonColor: "#3085d6",
        });
        return;
    }

    // Confirmation before submission
    Swal.fire({
        title: "Confirmation",
        text: "Are you sure that all the information is correct? You can go back to previous steps to make changes if needed.",
        icon: "question",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancel",
        confirmButtonText: "Yes, Submit",
    }).then((result) => {
        if (result.isConfirmed) {
            // If confirmed, display success message
            Swal.fire({
                title: "Success!",
                text: "Your details have been submitted. We will contact you shortly!",
                icon: "success",
                confirmButtonColor: "#3085d6",
            });
        } else {
            // If canceled, do nothing
            Swal.fire({
                title: "Cancelled",
                text: "Submission cancelled. You can make changes before submitting.",
                icon: "info",
                confirmButtonColor: "#3085d6",
            });
        }
    });
}
