# symhony

## 📝 Installation  

- git clone url (change url to repo url)
- cd api_book
- composer install
-  curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null && echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list && sudo apt update && sudo apt install ngrok (install ngrock)
- symfony serve > /dev/null 2>&1 &  (to start the server without logging in the terminal)
- ngrok config add-authtoken token (change token to token ngrock)
- nohup ngrok http 8000 & (to launch ngrock without opening a terminal)

- take url on ngrock https://dashboard.ngrok.com/tunnels/agents
