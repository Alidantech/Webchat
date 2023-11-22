// Function to generate chats from the JSON data
export function generateChats(data) {
  // Get the container where chats will be appended
  const chatContainer = document.getElementById('chats-container');

  // Loop through the data and generate HTML for each chat entry
  data.forEach(chat => {
    // Create the main chat div
    const chatDiv = document.createElement('div');
    chatDiv.className = 'chat';

    // Create the chat-img div
    const chatImgDiv = document.createElement('div');
    chatImgDiv.className = 'chat-img';

    // Create the img element for the profile picture
    const img = document.createElement('img');
    img.src = chat.imgSrc;
    img.alt = 'profile pic';

    // Append the img element to the chat-img div
    chatImgDiv.appendChild(img);

    // Append the chat-img div to the main chat div
    chatDiv.appendChild(chatImgDiv);

    // Create the chat-body span
    const chatBodySpan = document.createElement('span');
    chatBodySpan.className = 'chat-body';

    // Create the h3 element for the name
    const h3 = document.createElement('h3');
    h3.textContent = chat.name;

    // Create the p element for the last message body
    const pBody = document.createElement('p');
    pBody.className = 'last-msg-body';
    pBody.textContent = chat.lastMsgBody;

    // Append the h3 and p elements to the chat-body span
    chatBodySpan.appendChild(h3);
    chatBodySpan.appendChild(pBody);

    // Append the chat-body span to the main chat div
    chatDiv.appendChild(chatBodySpan);

    // Create the chat-info span
    const chatInfoSpan = document.createElement('span');
    chatInfoSpan.className = 'chat-info';

    // Create the div elements for the message count badge and last message time
    const msgCountBadge = document.createElement('div');
    msgCountBadge.className = 'msg-count-badge';
    msgCountBadge.textContent = chat.msgCount;

    const lastMsgTime = document.createElement('div');
    lastMsgTime.className = 'last-msg-time';
    lastMsgTime.textContent = chat.lastMsgTime;

    // Append the div elements to the chat-info span
    chatInfoSpan.appendChild(msgCountBadge);
    chatInfoSpan.appendChild(lastMsgTime);

    // Append the chat-info span to the main chat div
    chatDiv.appendChild(chatInfoSpan);

    // Append the main chat div to the chat container
    chatContainer.appendChild(chatDiv);
  });
}


const chatSelector = document.querySelector('.chat');
const messageView = document.getElementById('messages-view')
const exitChat = document.getElementById('exit-chat')

chatSelector.addEventListener("click", () => {


  messageView.style.display = 'grid'

});

exitChat.addEventListener("click", () => {


  messageView.style.display = 'none'

});