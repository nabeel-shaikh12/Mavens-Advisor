<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3-Step Form with Hours</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .step-container {
            display: none;
        }
        .step-container.active {
            display: block;
        }
        .service-box {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
        }
        .service-box.selected {
            background-color: #007bff;
            color: white;
        }
        .summary-table input {
            width: 60px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <!-- Step 1 -->
        <div id="step-1" class="step-container active">
            <h3>Select Services</h3>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="service-box" data-service="Finance" data-price="500">Finance</div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box" data-service="Web Design" data-price="700">Web Design</div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box" data-service="HR" data-price="300">HR</div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box" data-service="Digital Marketing" data-price="600">Digital Marketing</div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="service-box" data-service="Custom Service" data-price="400">Custom Service</div>
                </div>
            </div>
            <button class="btn btn-primary" onclick="goToStep(2)">Next</button>
        </div>

        <!-- Step 2 -->
        <div id="step-2" class="step-container">
            <h3>Select Business Size and Hours</h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="businessSize" value="Startup" id="startup">
                <label class="form-check-label" for="startup">Startup</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="businessSize" value="Small Business" id="small-business">
                <label class="form-check-label" for="small-business">Small Business</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="businessSize" value="Enterprise" id="enterprise">
                <label class="form-check-label" for="enterprise">Enterprise</label>
            </div>
            <h4 class="mt-3">Set Hours for Each Selected Service</h4>
            <div id="hours-selection"></div>
            <button class="btn btn-secondary" onclick="goToStep(1)">Back</button>
            <button class="btn btn-primary" onclick="goToStep(3)">Next</button>
        </div>

        <!-- Step 3 -->
        <div id="step-3" class="step-container">
            <h3>Summary</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price per Hour</th>
                        <th>Hours</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="summary-body"></tbody>
            </table>
            <p><strong>Total Hours:</strong> <span id="total-hours"></span></p>
            <p><strong>Total Cost:</strong> $<span id="total-cost"></span></p>
            <button class="btn btn-secondary" onclick="goToStep(2)">Back</button>
        </div>
    </div>

    <script>
        let selectedServices = [];

        document.querySelectorAll('.service-box').forEach(box => {
            box.addEventListener('click', function () {
                const service = this.getAttribute('data-service');
                const price = parseInt(this.getAttribute('data-price'));
                if (selectedServices.some(s => s.service === service)) {
                    selectedServices = selectedServices.filter(s => s.service !== service);
                    this.classList.remove('selected');
                } else {
                    selectedServices.push({ service, price, hours: 1 });
                    this.classList.add('selected');
                }
            });
        });

        function goToStep(step) {
            document.querySelectorAll('.step-container').forEach(container => {
                container.classList.remove('active');
            });
            document.getElementById(`step-${step}`).classList.add('active');

            if (step === 2) {
                const hoursSelection = document.getElementById('hours-selection');
                hoursSelection.innerHTML = selectedServices
                    .map(service => `
                        <div class="mb-3">
                            <label>${service.service} - $${service.price} per hour:</label>
                            <input type="number" class="form-control hours-input" data-service="${service.service}" value="${service.hours}" min="0">
                        </div>
                    `)
                    .join('');

                document.querySelectorAll('.hours-input').forEach(input => {
                    input.addEventListener('input', function () {
                        const service = this.getAttribute('data-service');
                        const hours = Math.max(0, parseInt(this.value));
                        const index = selectedServices.findIndex(s => s.service === service);
                        if (index !== -1) {
                            selectedServices[index].hours = hours;
                        }
                    });
                });
            }

            if (step === 3) {
                const businessSize = document.querySelector('input[name="businessSize"]:checked')?.value || "Startup";
                const multiplier = businessSize === 'Startup' ? 1 : businessSize === 'Small Business' ? 1.5 : 2;

                const summaryBody = document.getElementById('summary-body');
                summaryBody.innerHTML = selectedServices
                    .map(service => `
                        <tr>
                            <td>${service.service}</td>
                            <td>$${service.price}</td>
                            <td>
                                <input type="number" class="form-control summary-hours-input" data-service="${service.service}" value="${service.hours}" min="0">
                            </td>
                            <td>$${(service.price * service.hours * multiplier).toFixed(2)}</td>
                        </tr>
                    `)
                    .join('');

                updateTotal(multiplier);

                document.querySelectorAll('.summary-hours-input').forEach(input => {
                    input.addEventListener('input', function () {
                        const service = this.getAttribute('data-service');
                        const hours = Math.max(0, parseInt(this.value));
                        const index = selectedServices.findIndex(s => s.service === service);
                        if (index !== -1) {
                            selectedServices[index].hours = hours;
                            updateTotal(multiplier);
                        }
                    });
                });
            }
        }

        function updateTotal(multiplier) {
            const totalHours = selectedServices.reduce((sum, service) => sum + service.hours, 0);
            const totalCost = selectedServices.reduce((sum, service) => sum + service.price * service.hours * multiplier, 0);
            document.getElementById('total-hours').innerText = totalHours;
            document.getElementById('total-cost').innerText = totalCost.toFixed(2);
        }
    </script>
</body>
</html>
