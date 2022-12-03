const headers = document.querySelectorAll("[data-headers]");

const content = document.querySelectorAll("[data-content]");

headers.forEach(function (item) {
  item.addEventListener("click", function (item) {
    content.forEach(function (item) {
      item.classList.add("hidden");
    });

    this.nextElementSibling.classList.toggle("hidden");
  });
});

/* ---------------------------------------- */

const button = document.querySelector(".btn");


button.addEventListener("click", function () {
  window.location.href = "/authorization.php"
});

