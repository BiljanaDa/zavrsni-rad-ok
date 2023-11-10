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

function validateForm() {
  var author = document.getElementById("author").value;
  var text = document.getElementById("text").value;

  if (!author || !text) {
    alert("You must fill in all of the fields!");
    return false;
  }
}

function validatePostForm() {
  var title = document.getElementById("title");
  var author = document.getElementById("author").value;
  var text = document.getElementById("body").value;

  if (!author || !text || !title) {
    alert("You must fill in all of the fields!");
    return false;
  }
}
