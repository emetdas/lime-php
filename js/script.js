let select = document.querySelector(".main-option");
let select_text = document.querySelector(".main-option-select");
select.addEventListener("click", () => {
  select.classList.toggle("active");
});
let option = document.querySelector(".option-dropdown");
let optionBtn = document.querySelectorAll(".dropdown-option");
const dropdown_content = document.querySelectorAll(".dropdown-content");
option.addEventListener("click", function (e) {
  let clicked = e.target.closest(".dropdown-option");
  if (!clicked) return;
  let atribute = clicked.getAttribute("data-dropdown");
  select_text.textContent = atribute;
  let tab = clicked.dataset.dropdown;
  dropdown_content.forEach((c) =>
    c.classList.remove("dropdown-content-active")
  );
  document
    .querySelector(`.dropdown-content-${clicked.dataset.dropdown}`)
    .classList.add("dropdown-content-active");
});