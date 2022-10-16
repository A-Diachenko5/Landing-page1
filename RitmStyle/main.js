const headers = document.querySelectorAll("[data-headers]");
console.log(headers);
const content = document.querySelectorAll("[data-content]");
console.log(content);

headers.forEach(function (item) {
  item.addEventListener("click", function (item) {
    content.forEach(function (item) {
      item.classList.add("hidden");
    });

    this.nextElementSibling.classList.toggle("hidden");
  });
});
