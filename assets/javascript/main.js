// lam mo thanh menu
// const navbar = document.getElementById("toolbar");

// window.addEventListener("scroll", () => {
//   if (window.scrollY > 0) {
//     navbar.style.opacity = 0.8;
//   } else {
//     navbar.style.opacity = 1;
//   }
// });

// Chức năng nhấn nút like
const likeButton = document.getElementsByClassName("likeButton");
const likeCount = document.getElementsByClassName("likeCount");
let count = parseInt(likeCount[0].textContent);
let count_1 = parseInt(likeCount[1].textContent);
let count_2 = parseInt(likeCount[2].textContent);
let count_3 = parseInt(likeCount[3].textContent);

likeButton[0].addEventListener("click", () => {
  if (likeButton[0].style.color == "black") {
    count++;
    likeCount[0].textContent = count;
    likeButton[0].style.color = "#3b5998";
  } else {
    count--;
    likeCount[0].textContent = count;
    likeButton[0].style.color = "black";
  }
});

likeButton[1].addEventListener("click", () => {
  if (likeButton[1].style.color == "black") {
    count_1++;
    likeCount[1].textContent = count_1;
    likeButton[1].style.color = "#3b5998";
  } else {
    count_1--;
    likeCount[1].textContent = count_1;
    likeButton[1].style.color = "black";
  }
});

likeButton[2].addEventListener("click", () => {
  if (likeButton[2].style.color == "black") {
    count_2++;
    likeCount[2].textContent = count_2;
    likeButton[2].style.color = "#3b5998";
  } else {
    count_2--;
    likeCount[2].textContent = count_2;
    likeButton[2].style.color = "black";
  }
});

likeButton[3].addEventListener("click", () => {
  if (likeButton[3].style.color == "black") {
    count_3++;
    likeCount[3].textContent = count_3;
    likeButton[3].style.color = "#3b5998";
  } else {
    count_3--;
    likeCount[3].textContent = count_3;
    likeButton[3].style.color = "black";
  }
});

// Chức năng hiện comment box"
const commentButton = document.getElementsByClassName("commentButton");
const commentForm = document.getElementById("commentForm");

commentButton[0].addEventListener("click", () => {
  if (commentForm.style.display === "none") {
    commentForm.style.display = "block";
  } else {
    commentForm.style.display = "none";
  }
});

commentButton[1].addEventListener("click", () => {
  if (commentForm.style.display === "none") {
    commentForm.style.display = "block";
  } else {
    commentForm.style.display = "none";
  }
});

commentButton[2].addEventListener("click", () => {
  if (commentForm.style.display === "none") {
    commentForm.style.display = "block";
  } else {
    commentForm.style.display = "none";
  }
});

commentButton[3].addEventListener("click", () => {
  if (commentForm.style.display === "none") {
    commentForm.style.display = "block";
  } else {
    commentForm.style.display = "none";
  }
});
