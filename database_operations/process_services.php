<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Step Form</title>
    <style>
        .step-container {
            display: none;
        }
        .step-container.active {
            display: block;
        }
        .service-box {
            cursor: pointer;
            padding: 10px;
            border: 1px solid #ccc;
            display: inline-block;
            margin: 10px;
            text-align: center;
        }
        .business-card {
            cursor: pointer;
            border: 1px solid #ccc;
            padding: 15px;
            margin: 10px;
            text-align: center;
            display: inline-block;
        }
        .business-card.active {
            border-color: #007bff;
            background-color: #e9f7ff;
        }
        .bag-item {
            list-style: none;
        }
        .styled-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table th {
            background-color: #007bff;
            color: white;
        }
        .styled-table tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>
    <form id="multi-step-form">
        <!-- Step 1 -->
        <div id="step-1" class="step-container active">
            <h3 class="text-center">Select Services</h3>
            <div class="service-selection">
                <div class="service-box" data-service="Service A" data-price="100">Service A - $100</div>
                <div class="service-box" data-service="Service B" data-price="200">Service B - $200</div>
                <div class="service-box" data-service="Service C" data-price="300">Service C - $300</div>
            </div>
            <div class="py-4">
                <h4>Selected Services:</h4>
                <ul id="bag-items"></ul>
            </div>
            <div class="text-center mt-4">
                <button type="button" class="btn btn-primary btn-step" onclick="goToStep(2)">Next</button>
            </div>
        </div>

        <!-- Step 2 -->
        <div id="step-2" class="step-container">
            <h3 class="text-center">Select Business Size</h3>
            <div class="business-selection">
                <div class="business-card" data-value="10">Small Business - 10 Hours</div>
                <div class="business-card" data-value="20">Medium Business - 20 Hours</div>
                <div class="business-card" data-value="30">Large Business - 30 Hours</div>
            </div>
            <div class="py-4 text-center">
                <label for="annual-revenue" class="form-label">Enter Estimated Annual Revenue:</label>
                <input type="number" id="annual-revenue" class="form-control w-50 mx-auto" name="annual_revenue" placeholder="Enter amount in USD" required>
            </div>
            <div class="text-center mt-4">
                <button type="button" class="btn btn-secondary btn-step" onclick="goToStep(1)">Previous</button>
                <button type="button" class="btn btn-primary btn-step" onclick="goToStep(3)">Next</button>
            </div>
        </div>

        <!-- Step 3 -->
        <div id="step-3" class="step-container">
            <h3 class="text-center">Summary</h3>
            <div class="table-container">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Service</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody id="summary-services"></tbody>
                </table>
            </div>
            <div class="totals-container">
                <p><strong>Total Hours:</strong> <span id="total-hours"></span></p>
                <p><strong>Annual Revenue:</strong> <span id="summary-revenue"></span></p>
                <p><strong>Total Cost:</strong> <span id="total-cost"></span></p>
            </div>
            <div class="text-center mt-4">
                <button type="button" class="btn btn-secondary btn-step" onclick="goToStep(2)">Previous</button>
                <button type="submit" class="btn btn-success btn-step">Submit</button>
            </div>
        </div>
    </form>

    <script>
        let selectedServices = [];
        let selectedHours = 0;

        document.querySelectorAll('.service-box').forEach(button => {
            button.addEventListener('click', function () {
                const service = this.dataset.service;
                const price = parseFloat(this.dataset.price);

                if (!selectedServices.some(s => s.name === service)) {
                    selectedServices.push({ name: service, price });
                    updateBag();
                }
            });
        });

        function updateBag() {
            const bag = document.getElementById('bag-items');
            bag.innerHTML = selectedServices.map(s => `<li class="bag-item">${s.name} - $${s.price.toFixed(2)}</li>`).join('');
        }

        document.querySelectorAll('.business-card').forEach(card => {
            card.addEventListener('click', function () {
                document.querySelectorAll('.business-card').forEach(c => c.classList.remove('active'));
                this.classList.add('active');
                selectedHours = parseInt(this.dataset.value);
            });
        });

        function goToStep(step) {
            document.querySelectorAll('.step-container').forEach(container => container.classList.remove('active'));
            document.getElementById(`step-${step}`).classList.add('active');

            if (step === 3) {
                populateSummary();
            }
        }

        function populateSummary() {
            const summaryServices = document.getElementById('summary-services');
            summaryServices.innerHTML = selectedServices.map(s => `<tr><td>${s.name}</td><td>$${s.price.toFixed(2)}</td></tr>`).join('');

            document.getElementById('total-hours').textContent = selectedHours;
            document.getElementById('summary-revenue').textContent = document.getElementById('annual-revenue').value;
            const totalCost = selectedServices.reduce((sum, s) => sum + s.price, 0);
            document.getElementById('total-cost').textContent = `$${totalCost.toFixed(2)}`;
        }
    </script>
</body>
</html>
