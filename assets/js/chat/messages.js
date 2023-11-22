// Function to generate messages from the JSON data
export function generateMessages(data) {
  // Get the container where messages will be appended
  const messagesContainer = document.getElementById('messages-container');

  // Loop through the data and generate HTML for each message entry
  data.forEach(message => {
    // Create the main message div
    const messageDiv = document.createElement('div');
    messageDiv.className = message.type === 'received' ? 'received-messages' : 'sent-messages';

    // Create the message-content div
    const messageContentDiv = document.createElement('div');
    messageContentDiv.className = 'message-content';

    // Create the p elements for each line of content
    message.content.forEach(line => {
      const p = document.createElement('p');
      p.textContent = line;
      messageContentDiv.appendChild(p);
    });

    // Append the message-content div to the main message div
    messageDiv.appendChild(messageContentDiv);

    // Call the appropriate function based on the message type
    if (message.type === 'sent') {
      generateSentMessage(message, messageDiv);
    } else if (message.type === 'received') {
      generateReceivedMessage(message, messageDiv);
    }

    // Append the main message div to the messages container
    messagesContainer.appendChild(messageDiv);
  });
}

// Function to generate the image element for sent messages
function generateSentMessage(message, messageDiv) {
  const messageImage = document.createElement('img');
  messageImage.className = 'message-image';
  messageImage.src = message.imageSrc;
  messageImage.alt = 'Profile Pic';

  // Append the message-image element to the main message div
  messageDiv.appendChild(messageImage);
}

// Function to generate the image element for received messages
function generateReceivedMessage(message, messageDiv) {
  const messageImage = document.createElement('img');
  messageImage.className = 'message-image';
  messageImage.src = message.imageSrc;
  messageImage.alt = 'Profile Pic';

  // Prepend the message-image element to the main message div
  messageDiv.insertBefore(messageImage, messageDiv.firstChild);
}