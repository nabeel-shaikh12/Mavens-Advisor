
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Owl Carousel Tabs</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     .carousel-tabs {
    width: 100%;
    margin: 20px auto;
    padding: 0 15px;
    position: relative;
  }

  .tab-item {
    padding: 10px;
    background-color: #eee;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
    transition: background-color 0.3s ease;
  }

  .tab-item.active {
    background: linear-gradient(to right, #0B7FFE, #000000);
    color: white;
  }

  .carousel-content {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 30px;
  }

  .content-item {
    display: none;
  }

  .content-item.active {
    display: block;
  }

  /* Arrow styling */
  .owl-nav {
    position: absolute;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
  }

  .owl-nav button {
    background-color: transparent;
    border: none;
    font-size: 30px;
    font-weight: bold;
    color: #0B7FFE;
    cursor: pointer;
  }

  .owl-nav button:hover {
    color: #000000;
  }

  .owl-nav .owl-prev::before,
  .owl-nav .owl-next::before {
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
  }
  span {
    font-size: 20px;
    color: #ffffff;
}

  .owl-carousel .owl-nav button.owl-next, 
  .owl-carousel .owl-nav button.owl-prev, 
  .owl-carousel button.owl-dot {
    margin-top: -60px !important;
    background-color: #0B7FFE;
    border-radius: 50%;
    color: white;
    font-size: 16px;
    padding: 10px;
  }

  /* Adjust button position */
  .owl-nav .owl-prev {
    position: absolute;
    left: -50px;
  }

  .owl-nav .owl-next {
    position: absolute;
    right: -50px !important;
  }

  .owl-dots {
    display: none; /* Hiding the default dots */
  }

  </style>
</head>
<body>

  <div class="container">
    <div class="carousel-tabs">
      <div class="owl-carousel owl-theme">
        <div class="tab-item active" data-tab="1">Account & Bookkeeping</div>
        <div class="tab-item" data-tab="2">Financial Management and Analysis</div>
        <div class="tab-item" data-tab="3">Strategy</div>
        <div class="tab-item" data-tab="4">Secretarial Services</div>
        <div class="tab-item" data-tab="5">Human Resources</div>
        <div class="tab-item" data-tab="6">Website and Software Development</div>
        <div class="tab-item" data-tab="7">IT Support</div>
        <div class="tab-item" data-tab="8">Customer Support</div>
        <div class="tab-item" data-tab="9">Digital Marketing and Analysis</div>
      </div>
    </div>

    <div class="carousel-content">
      <div class="content-item active" data-content="1">
      <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/7.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">
                Bookkeeping and Accounting
              </h4>
              <p>Keep your financials in order with our professional bookkeeping and accounting services, designed to provide you with real-time insights into your business's financial health.</p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Daily Bookkeeping:</b> Keep track of daily financial transactions with precision.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Financial Reporting: </b>Get detailed reports on income statements, balance sheets, and cash flow.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Tax Preparation: </b>Ensure compliance with tax regulations and get help with filing returns.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Payroll Management:</b> Hassle-free payroll processing and employee compensation management.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-item" data-content="2">
      <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/financial-analysis.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">
                Financial Management and Analysis
              </h4>
              <p>
                We provide expert financial management and analysis services that enable you to make data-driven decisions and optimize your financial performance.</p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Budgeting and Forecasting:</b> Plan your finances with tailored budgeting solutions.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Cash Flow Management: </b>Monitor your cash flow to maintain healthy liquidity.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Financial Performance Analysis: </b>Gain insights into your profitability and operational efficiency.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Strategic Financial Planning:</b> Long-term financial strategies to support your business goals.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="content-item" data-content="3">
      <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/Financial Strategy.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">Strategy</h4>
              <p>
                Our business strategists are here to offer expert advice and insights that help you steer your business in the right direction.</p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Market Analysis:</b> Stay ahead of market trends with comprehensive industry analysis.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Business Planning: </b>Receive advice on creating business plans and models for growth.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Risk Management: </b> Identify potential risks and create mitigation strategies.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Growth Strategy: </b> Implement targeted strategies for scaling your business sustainably.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Add similar blocks for content-items 4 to 9 -->
      <!-- Example for tab 4 -->
      <div class="content-item" data-content="4">
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/secreterial-services.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">
                Secretarial Services
              </h4>
              <p>
                Streamline your administrative processes with our professional secretarial services, allowing you to focus on core business activities.
              </p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Company Formation:</b> Support in setting up your business structure.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Compliance and Filings: </b>Ensure compliance with corporate laws and timely filing of annual reports.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Document Management: </b>Professional document preparation, organization, and retrieval.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Board Meeting Support </b> Assistance with preparing meeting agendas, minutes, and resolutions.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-item" data-content="5">
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/human-resource.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">Human Resources</h4>
              <p>
                From recruitment to employee management, our HR solutions cover all aspects of managing a productive workforce.</p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Talent Acquisition:</b> Hire the right candidates with our expert recruitment service.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Employee Onboarding: </b>Efficient onboarding processes to get new hires up to speed.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Payroll & Benefits Management: </b>Comprehensive management of payroll and employee benefits.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Performance Management: </b>Implement systems to evaluate and improve employee performance.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-item" data-content="6">
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/website-dev.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">
                Website and Software Development
              </h4>
              <p>
                Enhance your online presence and operational efficiency with customized website and software development services.
              </p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Custom Web Development:</b> Design and build responsive, user-friendly websites.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>E-commerce Solutions: </b>Develop secure, scalable e-commerce platforms.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Mobile App Development: </b>Create mobile applications that enhance customer engagement.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Software Integration: </b>Seamless integration of software solutions with your existing systems.
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="content-item" data-content="7">
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/it-support.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6 ">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">IT Support</h4>
              <p>
                Our IT support services ensure that your technology infrastructure runs smoothly and securely, with quick responses to issues. </p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Help Desk Support: </b> Design and build responsive, user-friendly websites.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Network Security: </b>Protect your systems from cyber threats with robust security protocols.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>System Upgrades: </b>Keep your IT infrastructure updated with the latest technologies.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Backup and Disaster Recovery: </b>Safeguard your data with reliable backup and recovery solutions.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-item" data-content="8">
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/customer-support.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">
                Customer Support
              </h4>
              <p>
                Deliver exceptional customer experiences with our responsive and scalable customer support services..
              </p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Multi-Channel Support:</b> Provide assistance through phone, email, chat, and social media.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Customer Inquiry Resolution: </b>Fast and accurate responses to customer inquiries.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Technical Support: </b>Troubleshooting and resolving technical issues for your customers.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Feedback Management: </b>Collect and analyze customer feedback for continuous improvement.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-item" data-content="9">
        <div class="row" style="display: flex; align-items: center; justify-content: center;">
          <div class="col-md-6 services-images">
            <img src="img/digital-marketing.jpg" width="100%" class="services" />
          </div>
          <div
            class="col-md-6">
            <div>
              <h4 style="font-size: 30px; font-weight: 500">
                Digital Marketing and Analysis
              </h4>
              <p>Grow your brand's presence with data-driven digital marketing strategies that maximize your return on investment.</p>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>SEO Optimization:</b> Improve your website's visibility on search engines.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Social Media Marketing: </b>Engage with your target audience across various social media platforms.
                </p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p><b>Content Marketing: </b>Create compelling content that drives traffic and conversions.</p>
              </div>
              <div class="icon-text">
                <i class="fa-solid fa-arrow-right fa-1x"></i>
                <p>
                  <b>Performance Tracking: </b>Analyze the performance of marketing campaigns to optimize results.
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Add content for tabs 5 to 9 similarly -->
    </div>
  </div>
  <script>
  $(document).ready(function () {
    let currentTab = 1;
    const totalTabs = 9;
    const intervalTime = 3000; // 3 seconds interval

    // Owl Carousel for Tabs
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: intervalTime,
      // navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"], // Font Awesome icons
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    });

    // Function to change the active tab and content
    function changeTab() {
      $(".tab-item").removeClass("active");
      $(".content-item").removeClass("active");

      $(`.tab-item[data-tab="${currentTab}"]`).addClass("active");
      $(`.content-item[data-content="${currentTab}"]`).addClass("active");
    }

    // Click event on tabs to manually switch
    $(".tab-item").click(function () {
      currentTab = $(this).data("tab");
      changeTab();
      clearInterval(autoplay); // Stop the auto-switching when manually clicked
      autoplay = setInterval(autoSwitchTab, intervalTime); // Restart auto-switching
    });

    // Auto-switching function
    function autoSwitchTab() {
      currentTab = (currentTab % totalTabs) + 1;
      changeTab();
    }

    // Set an interval to auto-switch tabs
    let autoplay = setInterval(autoSwitchTab, intervalTime);

    // Ensure the correct tab content is shown on page load
    changeTab();
  });
</script>

</body>

</html>