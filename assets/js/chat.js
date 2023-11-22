import { generateChats } from "./chat/chats.js";
import { generateMessages } from "./chat/messages.js";

document.addEventListener("DOMContentLoaded", function () {
  // Fetch the JSON data
  fetch('assets/js/chat/chats.json')
    .then(response => response.json())
    .then(data => {
      // Call the function to generate chats using the data
      generateChats(data);
    })
    .catch(error => console.error('Error fetching data:', error));
});

document.addEventListener("DOMContentLoaded", function () {
  // Fetch the JSON data
  fetch('assets/js/chat/messages.json')
    .then(response => response.json())
    .then(data => {
      // Call the function to generate messages using the data
      generateMessages(data);
    })
    .catch(error => console.error('Error fetching data:', error));
});

const toggleNavDrawer = document.getElementById('toggle-nav-drawer');
const navDrawer = document.getElementById("nav-drawer");
const chatsView = document.getElementById("chats-view");

toggleNavDrawer.addEventListener("click", () => {

  if (navDrawer.style.left === "-100%") {

    navDrawer.style.left = '0%';
    chatsView.style.position = "absolute";
    chatsView.style.left = "60%";

  } else {

    navDrawer.style.left = "-100%";
    chatsView.style.position = "";
    chatsView.style.left = "0%";

  }
});

