<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | Chat App</title>
  @include('includes.links')
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #6a11cb 0%, #bac4d5 100%);
      background-size: cover;
      background-position: center;
    }

    .container {
      width: 90%;
      height: 90vh;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 20px;
      backdrop-filter: blur(15px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
      display: flex;
      overflow: hidden;
      color: #fff;
    }

    /* Sidebar (25%) */
    .sidebar {
      width: 25%;
      padding: 20px;
      border-right: 1px solid rgba(255, 255, 255, 0.2);
      overflow-y: auto;
    }
    .sidebar h3 {
      margin-bottom: 15px;
      font-size: 1.2rem;
    }
    .user-list {
      list-style: none;
      padding: 0;
    }
    .user-list li {
      padding: 10px;
      margin-bottom: 8px;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.1);
      cursor: pointer;
      transition: 0.2s;
    }
    .user-list li:hover {
      background: rgba(255, 255, 255, 0.2);
    }

    /* Chat Window (75%) */
    .chat-window {
      width: 75%;
      padding: 20px;
      display: flex;
      flex-direction: column;
    }
    .chat-header {
      font-size: 1.2rem;
      margin-bottom: 10px;
      padding-bottom: 10px;
      border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
    .chat-box {
      flex: 1;
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 15px;
      margin-bottom: 15px;
      overflow-y: auto;
    }
    .message {
      margin-bottom: 10px;
    }
    .message strong {
      color: #ff9a9e;
    }
    .chat-form {
      display: flex;
      gap: 10px;
    }
    .chat-form input {
      flex: 1;
      padding: 12px;
      border-radius: 12px;
      border: none;
      outline: none;
      font-size: 0.9rem;
      background: rgba(255, 255, 255, 0.2);
      color: #fff;
    }
    .chat-form input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }
    .chat-form button {
      padding: 12px 20px;
      border: none;
      border-radius: 12px;
      background: linear-gradient(45deg, #ff416c, #ff4b2b);
      font-size: 1rem;
      font-weight: 600;
      color: #fff;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .chat-form button:hover {
      transform: translateY(-2px);
      box-shadow: 0px 5px 15px rgba(255, 65, 108, 0.5);
    }
  </style>
</head>
<body>
  <div class="container">

    <!-- Sidebar -->
    <div class="sidebar">
      <h3>All Users</h3>
      <ul class="user-list">
        <li>User 1</li>
        <li>User 2</li>
        <li>User 3</li>
        <li>User 4</li>
        <li>User 5</li>
      </ul>
    </div>

    <!-- Chat Window -->
    <div class="chat-window">
      <div class="chat-header">Chat with User 1</div>
      <div class="chat-box">
        <div class="message"><strong>User 1:</strong> Hello!</div>
        <div class="message"><strong>You:</strong> Hi, how are you?</div>
      </div>
      <form class="chat-form">
        <input type="text" placeholder="Type a message..." required>
        <button type="submit">Send</button>
      </form>
    </div>

  </div>
</body>
</html>
