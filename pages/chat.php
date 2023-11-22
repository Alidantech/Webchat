<main id="chat-page">
      <section id="home-view">
            <div class="ctr-column" id="nav-drawer">
                  <div class="top ctr-column">
                        <button class="chat-button">
                              <i class="fas fa-comments"></i>
                              <div class="tooltip-container"><span class="tooltip">Start a chat</span></div>
                        </button>

                        <button class="chat-button">
                              <i class="fas fa-inbox"></i>
                              <div class="tooltip-container"><span class="tooltip">View your messages</span></div>
                        </button>

                        <button class="chat-button">
                              <i class="fas fa-paper-plane"></i>
                              <div class="tooltip-container"><span class="tooltip">Send a message</span></div>
                        </button>

                        <button class="chat-button">
                              <i class="fas fa-user-friends"></i>
                              <div class="tooltip-container"><span class="tooltip">Access group chats</span></div>
                        </button>

                        <button class="chat-button">
                              <i class="fas fa-user"></i>
                              <div class="tooltip-container"><span class="tooltip">View your profile</span></div>
                        </button>
                        <button class="chat-button">
                              <i class="fas fa-plus"></i>
                              <div class="tooltip-container"><span class="tooltip">Add a new contact</span></div>
                        </button>

                        <button class="chat-button">
                              <i class="fas fa-bell"></i>
                              <div class="tooltip-container"><span class="tooltip">Manage notifications</span></div>
                        </button>

                        <button class="chat-button">
                              <i class="fas fa-search"></i>
                              <div class="tooltip-container"><span class="tooltip">Search for messages</span></div>
                        </button>
                  </div>
                  <div class="bottom ctr-column">

                        <button class="chat-button">
                              <i class="fas fa-cog"></i>
                              <div class="tooltip-container"><span class="tooltip">Access settings</span></div>
                        </button>

                        <button class="chat-button">
                              <i class="fas fa-info-circle"></i>
                              <div class="tooltip-container"><span class="tooltip">Get help and support</span></div>
                        </button>
                  </div>
            </div>
            <div id="chats-view">
                  <div class="nav-heading ctr-space-around">
                        <button id="toggle-nav-drawer"><i class="fas fa-bars"></i></button>
                        <div class="ctr-row-start">
                              <h1>Chats</h1>
                        </div>
                        <div class="ctr-items">
                              <button><i class="fas fa-sort"></i></button>
                              <span class="sorted-by ">Newest</span>
                        </div>
                  </div>
                  <div class="nav-content">
                        <div class="search-content ctr-row">
                              <div class="chat-search">
                                    <i class="fas fa-search"></i> <!-- Search Icon -->
                                    <input type="text" placeholder="Search...">
                              </div>
                        </div>
                        <div class="view-content" id="chats-container">
                              <div class="chat"></div>
                        </div>
                  </div>
            </div>
      </section>
      <section id="messages-view">
            <div class="main-header ctr-row">
                  <div class="ctr-row-start" id="exit-chat">
                        <button><i class="fas fa-arrow-left"></i></button>
                  </div>
                  <div class="ctr-items">
                        <a href="/"><i class="fa fa-plus"></i> New Message</a>
                        <button><i class="fas fa-bell"></i></button>
                        <div class="my-profile ctr-row" id="my-profile">
                              
                        </div>
                  </div>
            </div>
            <div class="main-content">
                  <div class="content-heading">
                        <div class="sender-profile ctr-items" id="sender-profile">
                              
                        </div>
                        <div class="ctr-row">
                              <button><i class="fas fa-star"></i></button>
                              <button><i class="fas fa-info-circle"></i></button>
                              <button><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                  </div>
                  <div class="content-container" id="messages-container">
                  </div>
                  <div class="input-text ctr-items">
                        <div class="chat-bar ctr-row">
                              <div class="ctr-row file-btn-container">
                                    <button class="chat-button"><i class="fas fa-paperclip"></i></button> <!-- Add files icon -->
                                    <button class="chat-button"><i class="far fa-image"></i></button> <!-- Add image icon -->
                                    <button class="chat-button"><i class="fas fa-microphone"></i></button> <!-- Add audio icon -->
                              </div>
                              <div class="input-area">
                                    <textarea class="chat-input" placeholder="Type your message here..."></textarea>
                              </div>
                              <button class="send-button"><i class="fas fa-paper-plane"></i></button>
                        </div>
                  </div>
            </div>
      </section>
</main>