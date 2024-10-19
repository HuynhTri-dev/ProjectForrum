let addImageFunc = document.getElementById("crFile");
let inputFile = document.getElementById("input-file");
inputFile.onchange = function () {
  addImageFunc.src = URL.createObjectURL(inputFile.files[0]);
};

const submit = document.getElementById("mySubmit");

submit.addEventListener("click", () => {
  alert("Bạn đã đăng thành công");
});

document.addEventListener("DOMContentLoaded", () => {
  // tăng dòng cho tilte
  const textarea = document.getElementsByClassName("title-input");

  textarea[0].addEventListener("input", () => {
    textarea[0].style.height = "auto";
    textarea[0].style.height = `${textarea[0].scrollHeight}px`;
  });

  //tăng dòng cho body
  const textarea_body = document.getElementsByClassName("body-input");

  textarea_body[0].addEventListener("input", () => {
    textarea_body[0].style.height = "auto";
    textarea_body[0].style.height = `${textarea_body[0].scrollHeight}px`;
  });
});
