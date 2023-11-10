const commentsBtn = document.querySelector("#comments-btn");
const commentsList = document.querySelector("#comments-list");

commentsBtn.addEventListener("click", () => {
  if (commentsBtn.innerHTML === "Hide comments") {
    commentsList.style.display = "none";
    commentsBtn.innerHTML = "Show comments";
  } else {
    commentsList.style.display = "block";
    commentsBtn.innerHTML = "Hide comments";
  }
});
