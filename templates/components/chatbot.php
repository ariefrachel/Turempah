<div class="chatbox ">
    <section style="padding: inherit;" class="msger chatbox__support">
        
       
            <div class="msger-header" >
                <div class="msger-header-title">
                    <img src="static/chatbot/img/header.svg" alt="" height="100px" width="200px" />
                    <br />
                    <br />
                </div>
</div>

            <div class="msger-chat">
                <div class="msg left-msg">
                    <div class="msg-img" style="background-image: url(static/chatbot/img/robo.png)"></div>

                    <div class="msg-bubble">
                        <div class="msg-info">
                            <div class="msg-info-name">JJr. Ask</div>
                            <div class="msg-info-time"></div>
                        </div>

                        <div class="msg-text">
                            Hi, Selamat Datang di Chatbot Jejak Jalur Rempah Nusantara👋
                        </div>
                    </div>
                </div>

                <!-- Teks Hasil Rekaman -->
                <div id="recordedTextContainer" style="display: none">
                    <div class="msg left-msg">
                        <div class="msg-img" style="background-image: url(static/chatbot/img/robo.png)"></div>
                        <div class="msg-bubble">
                            <div class="msg-info">
                                <div class="msg-info-name">JJr. Ask</div>
                                <div class="msg-info-time"></div>
                            </div>
                            <div class="msg-text" id="recordedText"></div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="msger-inputarea">
                <input type="text" class="msger-input" id="textInput" placeholder="Ketik sesuatu..." />
                <button type="submit" class="msger-send-btn" style="height: auto">
                    Kirim
                </button>
                <button id="listenButton">
                    <div class="circle">
                        <i class="fa fa-microphone" id="microphoneIcon" style="font-size: 24px; color: #CD543A"></i>
                    </div>
                </button>


            </form>
     
    </section>
</div>


<!-- partial -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="static/chatbot/js/chat.js"></script>
<script src="static/chatbot/js/app.js"></script>
<script>
    const msgerForm = get(".msger-inputarea");
    const msgerInput = get(".msger-input");
    const msgerChat = get(".msger-chat");
    const recordButton = get("#recordButton");
    let isRecording = false;
    let mediaRecorder;
    let audioChunks = [];

    // Icons made by Freepik from www.flaticon.com
    const BOT_IMG = "static/chatbot/img/robo.png";
    const PERSON_IMG = "static/chatbot/img/ping.png";
    const BOT_NAME = "    JJr. Ask";
    const PERSON_NAME = "You";

    msgerForm.addEventListener("submit", (event) => {
        event.preventDefault();

        const msgText = msgerInput.value;
        if (!msgText) return;

        appendMessage(PERSON_NAME, PERSON_IMG, "right", msgText);
        msgerInput.value = "";
        botResponse(msgText);
    });

    function appendMessage(name, img, side, text) {
        //   Simple solution for small apps
        const msgHTML = `
<div class="msg ${side}-msg">
  <div class="msg-img" style="background-image: url(${img})"></div>

  <div class="msg-bubble">
    <div class="msg-info">
      <div class="msg-info-name">${name}</div>
      <div class="msg-info-time">${formatDate(new Date())}</div>
    </div>

    <div class="msg-text" style="text-align: justify">${text}</div>
  </div>
</div>

`;

        msgerChat.insertAdjacentHTML("beforeend", msgHTML);
        msgerChat.scrollTop += 500;
    }

    function botResponse(rawText) {
        // Bot Response
        console.log(rawText)
        $.get("http://192.168.43.91:5000/get", {
            msg: rawText
        }).done(function(data) {
            console.log(rawText);
            console.log(data);
            const msgText = data;
            appendMessage(BOT_NAME, BOT_IMG, "left", msgText);
        });
    }

    // Utils
    function get(selector, root = document) {
        return root.querySelector(selector);
    }

    function formatDate(date) {
        const h = "0" + date.getHours();
        const m = "0" + date.getMinutes();
        return `${h.slice(-2)}:${m.slice(-2)}`;
    }
</script>
<script src="static/chatbot/recorder2/js/recorder.js"></script>
<script src="static/chatbot/recorder2/js/appchatbot.js"></script>
<script>
    $(document).ready(function() {
        let isListening = false;

        $("#listenButton").click(function() {
            isListening = !isListening;
            if (isListening) {
                $("#microphoneIcon").css("color", "red");
                startRecording();
            } else {
                $("#microphoneIcon").css("color", "white");
                stopRecording();
            }
        });
    });
</script>