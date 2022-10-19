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

const modalBlock = document.querySelector(".modal");
const button = document.querySelector(".btn");
const no = document.querySelector(".no");

button.addEventListener("click", function () {
  modalBlock.classList.remove("hidden");
});

no.addEventListener("click", function () {
  modalBlock.classList.add("hidden");
});
