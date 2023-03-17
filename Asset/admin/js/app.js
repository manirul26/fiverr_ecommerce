// dashboard toggle start here

let dashbaord_toggle = document.querySelectorAll(".dashbaord_toggle");
let dashboar_sidebar_backdrop = document.querySelector(".dashboar_sidebar_backdrop");

if (dashbaord_toggle && dashboar_sidebar_backdrop) {
  dashbaord_toggle.forEach((element) => {
    element.addEventListener("click", (e) => {
      let dashboard_sidebar = document.querySelector(".dashboard_sidebar");

      dashboard_sidebar.classList.toggle("active");
      dashboar_sidebar_backdrop.classList.toggle("active");
    });
  });

  dashboar_sidebar_backdrop.addEventListener("click", (e) => {
    let dashboard_sidebar = document.querySelector(".dashboard_sidebar");
    let wrap_product_fillter = document.querySelector(".wrap_product_fillter");

    if(wrap_product_fillter){
      wrap_product_fillter.classList.remove("active");
    }

    dashboard_sidebar.classList.remove("active");
    dashboar_sidebar_backdrop.classList.remove("active");
  });
}

// dashbaord toggle end here

// general_statics_grid
const mediaQuery = window.matchMedia("(min-width: 767px)");
let append_on_desktop = document.querySelector(".append_on_desktop");
let append_on_mobile = document.querySelector(".append_on_mobile");
let general_statics_grid5 = document.querySelector(".general_statics_grid5");

function handleTabletChange(e) {
  if (append_on_desktop && append_on_mobile && general_statics_grid5) {
    if (mediaQuery.matches) {
      append_on_mobile.innerHTML = "";
      append_on_desktop.appendChild(general_statics_grid5);
    } else {
      append_on_desktop.innerHTML = "";
      append_on_mobile.appendChild(general_statics_grid5);
    }
  }
}

window.addEventListener("load", handleTabletChange);

mediaQuery.addListener(handleTabletChange);

// area chart

function areaChart(id, data, color) {
  var options = {
    series: [
      {
        name: "Series 1",
        data: data,
      },
    ],
    fill: {
      type: "gradient",
      gradient: {
        colorStops: [
          {
            offset: 100,
            color: color,
            opacity: 1,
          },
        ],
      },
    },
    chart: {
      offsetX: 0,
      type: "line",
      toolbar: {
        show: false,
      },
      zoom: {
        enabled: false,
      },
    },
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: "smooth",
      width: 4,
    },
    yaxis: {
      labels: {
        offsetX: -20,
      },
    },
    markers: {
      colors: color
    },
    xaxis: {
      type: "datetime",
      categories: [
        "2018-09-19T00:00:00.000Z",
        "2018-09-19T01:30:00.000Z",
        "2018-09-19T02:30:00.000Z",
        "2018-09-19T03:30:00.000Z",
        "2018-09-19T04:30:00.000Z",
        "2018-09-19T05:30:00.000Z",
        "2018-09-19T06:30:00.000Z",
      ],
    },
    tooltip: {
      style: {
        fontSize: "12px",
        fontFamily: undefined,
      },
      custom: function ({ series, seriesIndex, dataPointIndex, w }) {
        return `<div class="chart_tooltip">
              <p class="mb-0">${series[seriesIndex][dataPointIndex]}</p> 
          </div>`;
      },
    },
  };

  let chart = new ApexCharts(document.querySelector(id), options);
  chart.render();
  return chart;
}


// thead_checkbox_input
let thead_checkbox_input = document.querySelector("#thead_checkbox_input");
if(thead_checkbox_input){
  thead_checkbox_input.addEventListener("click", (e) => {
    let table_checkbox_input = document.querySelectorAll(".table_checkbox_input");

    if(thead_checkbox_input.checked){
      table_checkbox_input.forEach(element => {
        element.checked = true;
      })
    }else{
      table_checkbox_input.forEach(element => {
        element.checked = false;
      })
    }
  })
}

// ----------------


// product fillter
let btn_open_p_fillter = document.querySelector(".btn_open_p_fillter");
if(btn_open_p_fillter){
  btn_open_p_fillter.addEventListener("click", (e) => {
    e.stopPropagation();
    let wrap_product_fillter = document.querySelector(".wrap_product_fillter");
    wrap_product_fillter.classList.toggle("active");
    dashboar_sidebar_backdrop.classList.add("active");
  })
}


function invoiceSalesRow() {
  document.querySelector('.invoice_sales_row').insertAdjacentHTML('afterend', `<div class="row invoice_sales_row">
  <div class="col-md-4">
      <input type="text" name="" id="" placeholder="إسم العنصر" class="search_input product_input mb-4">
  </div>
  <div class="col-md-4">
      <input type="text" name="" id="" placeholder="السعر" class="search_input product_input mb-4">
  </div>
  <div class="col-md-4">
      <input type="text" name="" id="" placeholder="الكمية" class="search_input product_input mb-4 input_number">
  </div>
</div>`)    
}

function copyText() {
  let trackingId = document.getElementById('tracking_id').textContent;
  navigator.clipboard.writeText(trackingId);
  let tracking_id_btn = document.querySelector('.tracking_id_btn');
  tracking_id_btn.classList.add('active');
  setTimeout(() => {
      tracking_id_btn.classList.remove('active');
  }, 2500);
}