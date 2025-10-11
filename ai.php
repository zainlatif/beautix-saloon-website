<!doctype html>
<html lang="en">
  <head>
    <title>Barber AI Chatbot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
      body { background: #f8f9fa; }
      .ai-chat-container {
        max-width: 400px;
        margin: 60px auto;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 16px rgba(0,0,0,0.13);
        padding: 0;
        overflow: hidden;
      }
      .ai-chat-header {
        background: #007bff;
        color: #fff;
        padding: 18px;
        font-size: 1.3rem;
        text-align: center;
        font-weight: bold;
      }
      .ai-chat-messages {
        padding: 16px;
        height: 320px;
        overflow-y: auto;
        background: #f4f6fb;
        font-size: 15px;
      }
      .ai-chat-input {
        display: flex;
        border-top: 1px solid #eee;
        background: #fff;
      }
      .ai-chat-input input {
        flex: 1;
        border: none;
        padding: 12px;
        font-size: 15px;
        outline: none;
        background: #fff;
      }
      .ai-chat-input button {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 0 22px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="ai-chat-container">
      <div class="ai-chat-header">Barber Gemini AI Chat</div>
      <div class="ai-chat-messages" id="ai-chat-messages"></div>
      <form class="ai-chat-input" id="ai-chat-form">
        <input type="text" placeholder="Ask me anything..." autocomplete="off" required />
        <button type="submit">Send</button>
      </form>
    </div>
    <script>
      const form = document.getElementById('ai-chat-form');
      const input = form.querySelector('input');
      const messages = document.getElementById('ai-chat-messages');
      function appendMsg(text, from) {
        const div = document.createElement('div');
        div.style.margin = '10px 0';
        div.style.textAlign = from === 'user' ? 'right' : 'left';
        div.innerHTML = `<span style="background:${from==='user'?'#007bff':'#e9ecef'};color:${from==='user'?'#fff':'#222'};padding:7px 14px;border-radius:16px;display:inline-block;max-width:80%;">${text}</span>`;
        messages.appendChild(div);
        messages.scrollTop = messages.scrollHeight;
      }
      form.onsubmit = async function(e) {
        e.preventDefault();
        const userMsg = input.value.trim();
        if (!userMsg) return;
        appendMsg(userMsg, 'user');
        input.value = '';
        appendMsg('...', 'bot');
        try {
          const res = await fetch('https://generativelanguage.googleapis.com/v1beta/models/gemini-pro:generateContent?key=AIzaSyAzk5JPPJoez8MjKDR4deMnaxbMsesN7JY', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
              contents: [{ parts: [{ text: userMsg }] }]
            })
          });
          const data = await res.json();
          messages.lastChild.remove();
          let botMsg = (data.candidates && data.candidates[0] && data.candidates[0].content && data.candidates[0].content.parts[0].text) || 'Sorry, I could not understand.';
          appendMsg(botMsg, 'bot');
        } catch (err) {
          messages.lastChild.remove();
          appendMsg('Error connecting to AI.', 'bot');
        }
      };
    </script>
  </body>
</html>
